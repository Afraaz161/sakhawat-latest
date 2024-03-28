<?php

namespace App\Http\Controllers;

use App\Models\AccountPurchase;
use App\Models\AccountSale;
use App\Models\AccountTransfer;
use App\Models\Bank;
use App\Models\BankSale;
use App\Models\Category;
use App\Models\Customer;
use App\Models\DailySale;
use App\Models\Hold;
use App\Models\HoldItem;
use App\Models\Item;
use App\Models\Sale;
use App\Models\SaleCart;
use App\Models\SaleItem;
use App\Models\SaleReturn;
use App\Models\SaleReturnItem;
use App\Models\Transaction;
use App\Models\TransferSaleHistory;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Auth;
use Picqer\Barcode\BarcodeGeneratorHTML;

class SalesController extends Controller
{
    public function sales_list(){
        if(!Auth::user()){
            return redirect()->route('login-page');
        }
        $sales = Sale::with('sale_items')->orderBy('id', 'Desc')->get();
        return view('sales.sales-list', ['sales' => $sales]);
    }

    public function SaleEdit($id){
        if(!Auth::user()){
            return redirect()->route('login-page');
        }
        $sale = Sale::with('sale_items', 'user', 'customer')->find($id);
        $categories = Category::all();
        $items = Item::with(['category', 'manufacture'])->orderBy('id', 'Desc')->where('price', '!=', NULL)->get();
        $customers = Customer::where('type', 'Customer')->orderBy('id', 'Desc')->get();
        return view('sales.edit-sale', ['sale' => $sale, 'items' => $items, 'customers' => $customers, 'categories' => $categories]);
    }

    public function salesDelete(Request $request, $id){
        $sale = Sale::with('sale_items')->find($id);
        
        // Update Customer Account
        if($sale->customer_id){
            $account = AccountSale::where('customer_id', $sale->customer_id)->first();
            AccountSale::where('customer_id', $sale->customer_id)->update([
                'total' => $account->total - $sale->total,
                'receivable' => $account->receivable - $sale->receivable,
                'received' => $account->received - $sale->received,
                'balance' => ($account->receivable - $account->received) - $account->balance,
            ]);
        }

        // Update Stock
        foreach($sale->sale_items as $item){
            $database_item = Item::whereName($item->name)->first();
            // dd($database_item);
            Item::whereName($item->name)->update([
                'stock' => $database_item->stock + $item->quantity,
            ]);
        }

        // Delete Sales Items
        $sale->sale_items()->delete();
        // Delete Sale
        $sale->delete();

        $request->session()->flash('alert-success', 'Sale Deleted.');
        return back();
    }

    public function sale_detail($id){
        if(!Auth::user()){
            return redirect()->route('login-page');
        }
        $sales = SaleItem::where('sale_id', $id)->get();
        return view('sales.sale-detail', ['sales' => $sales]);
    }

    public function sale_return_detail($id){
        if(!Auth::user()){
            return redirect()->route('login-page');
        }
        $sales = SaleReturnItem::where('sale_return_id', $id)->get();
        // dd($sales);
        return view('sales.sale-return-detail', ['sales' => $sales]);
    }

    public function get_session_items(){
        $sales = SaleCart::where(['user_id'=>Auth::user()->id])->get();
        return view('sales.get-sale', compact('sales'));
    }

    public function new_sale(){
        if(!Auth::user()){
            return redirect()->route('login-page');
        }

        $date = Carbon::now()->format('my');
        $sale = Sale::orderBy('id', 'DESC')->first();
        // dd($date. '.'. ((int)$sale->id + 1));
        if($sale){
            $invoice = $date. '.'. ((int)$sale->id + 1);
        }
        else{
            $invoice = $date.".1";
        }
        // dd($invoice);
        $categories = Category::all();
        $items = Item::with(['category', 'manufacture'])->orderBy('id', 'Desc')->where('price', '!=', NULL)->get();
        $customers = Customer::where('type', 'Customer')->orderBy('id', 'Desc')->get();
        return view('sales.new-sale', ['items' => $items, 'customers' => $customers, 'invoice' => $invoice, 'categories' => $categories]);
    }

    public function get_customers(){
        $customers = Customer::where('type', 'Customer')->orderBy('id', 'Desc')->get();
        return view('sales.get-customers', compact('customers'));
    }

    public function get_items(){
        $items = Item::orderBy('id', 'Desc')->get();
        return view('sales.get-items', compact('items'));
    }

    public function add_customer(Request $request){
        $this->validate($request, [
            'name' => 'required',
            'address' => 'required',
            'phone' => 'required|unique:customers',
        ],[
            'name.required' => 'Name is required.',
            'address.required' => 'Address is required.',
            'phone.required' => 'Phone is required.',
        ]);
        $account = new Customer();
        $account->name = $request->name;
        $account->address = $request->address;
        $account->phone = $request->phone;
        $account->email = $request->email;
        $account->type = $request->type;
        $account->save();

        $account_purchase = new AccountPurchase();
        $account_purchase->customer_id = $account->id;
        $account_purchase->save();

        $account_sale = new AccountSale();
        $account_sale->invoice = 'Opening Balance';
        $account_sale->customer_id = $account->id;
        $account_sale->description = 'Opening Balance';
        $account_sale->save();

        $account_transfer = new AccountTransfer();
        $account_transfer->customer_id = $account->id;
        $account_transfer->save();

        $customers = Customer::where('type', 'Customer')->orderBy('id', 'Desc')->get();
        return view('sales.get-customers', compact('customers'));
    }

    public function add_item(Request $request){
        if(!Auth::user()){
            return redirect()->route('login-page');
        }
        $this->validate($request, [
            'name' => 'required|unique:items',
            // 'sku' => 'required',
            // 'reorder_value' => 'required',
            'category' => 'required',
        ]);
        $item = new Item();
        $item->name = $request->name;
        $item->category_id = $request->category;
        $item->reorder_value = $request->reorder_value;
        $item->required = $request->required;
        $item->description = $request->description;
        $item->unit = $request->unit;
        $item->stock = $request->stock;
        $item->price = $request->rate;
        $item->stock = 0;
        // upload multiple image
        if($request->file('image')){
            $image = $request->file('image');
            $name=$image->getClientOriginalName();
            $image->move(public_path().'/items/', $name);
            $item->image = $name;
        }
        else{
            $item->image = 'default_image.jpg';
        }
        // $number = $request->sku;
        // $generator = new BarcodeGeneratorHTML();
        // $barcode = $generator->getBarcode($number, $generator::TYPE_CODE_128);
        // $item->sku = $request->sku;
        // $item->barcode = $barcode;
        $item->save();
        $items = Item::orderBy('id', 'Desc')->get();
        return view('sales.get-items', compact('items'));
    }

    public function get_customer_account_detail(Request $request){
        $account = AccountSale::where('customer_id', $request->id)->orderBy('id', 'Desc')->first();
        return $account;
    }

    public function new_sale_action(Request $request){
        $sale_cart = SaleCart::where(['user_id'=>Auth::user()->id])->get();
        
        
        // NEW SALE FUNCTIONS
        if($sale_cart){
            $sale_table = new Sale();
            if($request->customer != 'abc'){
                $sale_table->customer_id = $request->customer;
            }
            else{
                $sale_table->walking_customer = $request->customer;
            }
            $sale_table->invoice_no = $request->invoice;
            $sale_table->gd_no = $request->gd;
            $sale_table->current_date = $request->current_date;
            $sale_table->payment_method = $request->payment_method;
            $sale_table->type = $request->type;
            $sale_table->total_bill = $request->total_bill;
            $sale_table->previous_due = $request->previous_due;
            if($request->discount_type){
                $sale_table->discount_type = $request->discount_type;
                $sale_table->discount = $request->discount;
            }
            $sale_table->sales_tax = $request->sales_tax;
            $sale_table->sales_tax_price = $request->sales_tax_price;
            $sale_table->charity = $request->charity;
            $sale_table->receivable = $request->receivable;
            $sale_table->received = $request->received;
            $sale_table->remaining = $request->remaining;
            $sale_table->status = 'pending';
            $sale_table->user_id = Auth::user()->id;
            $sale_table->save();

            // $current_date = Carbon::now()->format('Y-m-d');
            $daily = DailySale::where('current_date', $request->current_date)->first();
            if($daily){
                DailySale::where('current_date', $request->current_date)->update([
                    'sale' => $daily->sale + $request->received,
                ]);
            }
            else{
                $daily_sale = new DailySale();
                $daily_sale->current_date = $request->current_date;
                $daily_sale->sale = $request->received;
                $daily_sale->save();
            }

            $sales = [];
            foreach($sale_cart as $id=>$sale){
                $itm = Item::whereName($sale->name)->first();
                Item::whereName($sale->name)->update([
                    'price' => $sale->price,
                ]);
                $row = [];
                $row['sale_id'] = $sale_table->id;
                $row['category_id'] = $itm->category_id;
                $row['name'] = $sale->name;
                $diff = $sale->price - $itm->price;
                $profit = $diff * $sale->quantity;
                $row['price'] = $sale->price;
                // $row['discount'] = $sale->discount;
                // $row['new_price'] = $sale->new_price;
                $row['quantity'] = $sale->quantity;
                $row['total'] = $sale->total;
                $row['profit'] = $profit;
                $sales[] = $row;
                $item = Item::whereName($sale->name)->first();
                Item::whereName($sale->name)->update([
                    'stock' => $item->stock - $sale->quantity,
                ]);
            }
            SaleItem::insert($sales);
        }
        if($request->customer != 'abc'){
            $account = AccountSale::where('customer_id', $request->customer)->orderBy('id', 'desc')->first();
            if($account){
                $account_sale = new AccountSale();
                $account_sale->customer_id = $request->customer;
                $account_sale->invoice  = $sale_table->id;
                $account_sale->total = $sale_table->receivable;
                $account_sale->received = $sale_table->received;
                $account_sale->receivable = ($sale_table->receivable) - $sale_table->received;
                $account_sale->balance = (int)$account->balance + (int)($sale_table->receivable - $sale_table->received);
                $account_sale->save();
            }

        }
        
        $rows = SaleCart::where('user_id', Auth::user()->id)->get();
        foreach($rows as $row){
            $row->delete();
        }
        return 'Thank you..!';
    }

    public function sale_print_urdu(Request $request){
        if(!Auth::user()){
            return redirect()->route('login-page');
        }
        $sales = Sale::orderBy('id', 'desc')->first();
        return view('print.sale-print-urdu')->with('sales', $sales);
    }

    public function sale_print_english(Request $request){
        if(!Auth::user()){
            return redirect()->route('login-page');
        }
        $sales = Sale::orderBy('id', 'desc')->first();
        if($sales){
            return view('print.sale-print-english')->with('sales', $sales);
        }
        else{
            return 'No Data Found';
        }
    }

    public function get_item_detail(Request $request){
        $item = Item::find($request->id);
        return $item;
    }

    public function get_customer_detail(Request $request){
        $account = AccountSale::where('customer_id', $request->id)->first();
        return $account;
    }

    public function add_item_to_session(Request $request){
        
        $item = Item::find($request->id);
        if($request->discount > 0){
            $total = $request->new_price * $request->qty;
        }
        else{
            $total = $request->price * $request->qty;
        }
        $cart = SaleCart::where(['item_id'=>$item->id, 'user_id'=>Auth::user()->id])->first();
        // if sale is empty then this the first product
        if($cart){
            SaleCart::where(['item_id'=>$item->id, 'user_id'=>Auth::user()->id])->update([
                'quantity' => $cart->quantity + $request->qty,
                // 'price' => $cart->price + $request->price,
                'total' => $cart->total + $total,
            ]);
            $sales = SaleCart::where(['user_id'=>Auth::user()->id])->get();
            return view('sales.get-sale', compact('sales'));
        }
        else{
            $cart = new SaleCart();
            $cart->item_id = $item->id;
            $cart->user_id = Auth::user()->id;
            $cart->name = $item->name;
            $cart->price = $request->price;
            // $cart->discount = $request->discount;
            // $cart->new_price = $request->new_price;
            $cart->quantity = $request->qty;
            $cart->total = $total;
            $cart->save();
            $sales = SaleCart::where(['user_id'=>Auth::user()->id])->get();
            return view('sales.get-sale', compact('sales'));
        }
    }

    public function add_item_to_hold_session(Request $request){
        $hold = new Hold();
        $hold->invoice_no = substr(str_shuffle("0123456789"), 0, 4);
        if($request->customer == 'abc'){
            $hold->walking_customer = $request->customer; 
        }
        else{
            $hold->customer_id = $request->customer;
        }
        $hold->user_id = Auth::user()->id;
        $mytime = Carbon::now();
        $hold->current_date = $mytime->toDateTimeString();
        $cartItems = SaleCart::where(['user_id'=>Auth::user()->id])->get();
        $count = 0;
        foreach($cartItems as $key=>$item){
            $count++;
        }
        $hold->total = $count;
        $hold->save();

        $total = 0;
        foreach($cartItems as $key=>$item){
            $total += $item->price * $item->quantity; 
            $cart = new HoldItem();
            $cart->hold_id = $hold->id;
            $cart->item_id = $item->item_id;
            $cart->name = $item->name;
            $cart->price = $request->price;
            $cart->discount = $request->discount;
            $cart->new_price = $request->new_price;
            $cart->quantity = $item->quantity;
            $cart->total = $total;
            $cart->save();
        }
        $rows = SaleCart::where('user_id', Auth::user()->id)->get();
        foreach($rows as $row){
            $row->delete();
        }
        $sales = SaleCart::where(['user_id'=>Auth::user()->id])->get();
        return view('sales.get-sale', compact('sales'));
    }

    public function get_item_from_hold_session(Request $request){
        $holds = Hold::where('user_id', Auth::user()->id)->get();
        return view('sales.retrieve-hold-items-into-modal', compact('holds'));
    }

    public function get_item_from_hold_into_list(Request $request){
        $hold = Hold::with('hold_item')->find($request->id);
        $total = 0;
        foreach($hold->hold_item as $key=>$item){
            $total += $item->price * $item->quantity; 
            $cart = new SaleCart();
            $cart->item_id = $item->item_id;
            $cart->user_id = Auth::user()->id;
            $cart->name = $item->name;
            $cart->price = $item->price;
            $cart->quantity = $item->quantity;
            $cart->total = $total;
            $cart->save();
        }
        foreach($hold->hold_item as $key=>$item){
            $item->delete();
        }
        $hold->delete();
        $sales = SaleCart::where(['user_id'=>Auth::user()->id])->get();
        return view('sales.get-sale', compact('sales'));
    }

    public function delete_item_to_session(Request $request){
        $sale = SaleCart::find($request->id);
        $sale->delete();
        $sales = SaleCart::where(['user_id'=>Auth::user()->id])->get();
        return view('sales.get-sale', compact('sales'));
    }

    public function edit_item_to_session_quantity(Request $request){
        $sale = SaleCart::find($request->id);
        $quantity = $request->quantity;
        SaleCart::where('id', $request->id)->update([
            'quantity' => $quantity,
            'total' => $sale->price * $quantity,
        ]);
        $sales = SaleCart::where(['user_id'=>Auth::user()->id])->get();
        return view('sales.get-sale', compact('sales'));
    }

    // Edit Sale Functions Start
    public function SaleEdit_GetItems(Request $request){
        $sale = Sale::find($request->sale_id);
        $saleItems = SaleItem::where('sale_id', $sale->id)->get();
        return view('sales.editSale-get-sale', compact('saleItems'));
    }
    public function saleEdit_edit_item_to_session_quantity(Request $request){
        $saleItem = SaleItem::find($request->id);
        SaleItem::where('id', $request->id)->update([
            'quantity' => $request->quantity,
            'total' => $saleItem->price * $request->quantity,
        ]);
        $saleItems = SaleItem::where('sale_id', $saleItem->sale_id)->get();
        return view('sales.editSale-get-sale', compact('saleItems'));
    }

    // Edit Sale Functions End

    public function edit_item_to_session_price(Request $request){
        $sale = SaleCart::find($request->id);
        $price = $request->price;
        SaleCart::where('id', $request->id)->update([
            'price' => $price,
            'total' => $sale->quantity * $price,
        ]);
        $sales = SaleCart::where(['user_id'=>Auth::user()->id])->get();
        return view('sales.get-sale', compact('sales'));
    }

    public function get_receivable_amount(Request $request){
        echo 
        '<form>
            <input type="hidden" name="_token" value='.csrf_token().'>
            <div class="form-group">
                <label for="subtotal">Total Bill:</label>
                <input type="text" value='.$request->receivable.' class="form-control" name="order_amount">
            </div>
            <div class="form-group">
                <label for="order_quantity">Received:</label>
                <input type="text" class="form-control" name="order_quantity">
            </div>
            <div class="form-group">
                <label for="order_quantity">Change:</label>
                <input type="text" class="form-control" name="order_quantity">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>';
    }

    public function reset_page(Request $request){
        $sales = SaleCart::where('user_id', Auth::user()->id)->get();
        foreach($sales as $row){
            $row->delete();
        }
        return view('sales.get-sale', compact('sales'));
    }

    public function transfer_sales(){
        if(!Auth::user()){
            return redirect()->route('login-page');
        }
        $current_date = Carbon::now()->format('Y-m-d');
        $bank_transfered_sale = BankSale::whereDate('created_at', $current_date)->sum('transaction');
        $total_sale = DailySale::where('current_date', $current_date)->sum('sale');
        $banks = Bank::where('is_active', TRUE)->orderBy('id', 'Desc')->get();
        $accounts = Customer::all();
        return view('sales.transfer-sale', ['remaining_sale' => $total_sale, 'banks' => $banks, 'accounts' => $accounts])->with('current_date', $current_date);
    }

    public function get_account_types(Request $request){
        $customers = Customer::where('type', $request->type)->get();
        return view('sales.get-account-names', ['customers' => $customers]);
    }

    public function search_transfer_sales(Request $request){
        if(!Auth::user()){
            return redirect()->route('login-page');
        }
        $current_date = $request->current_date;
        $bank_transfered_sale = BankSale::whereDate('created_at', $current_date)->sum('transaction');
        $total_sale = DailySale::where('current_date', $current_date)->sum('sale');
        $banks = Bank::where('is_active', TRUE)->orderBy('id', 'Desc')->get();
        $accounts = Customer::all();
        return view('sales.transfer-sale', ['remaining_sale' => $total_sale, 'banks' => $banks, 'accounts' => $accounts])->with('current_date', $current_date);
    }

    public function transfer_previous_sale_into_today(Request $request){
        // dd($request->total_sale);
        $current_date = Carbon::now()->format('Y-m-d');
        if($request->current_date == $current_date){
            $request->session()->flash('alert-danger', 'You Cannot Transfer Today Sale.');
            return back();
        }
        $daily_sale = DailySale::where('current_date', $request->current_date)->first();
        DailySale::where('current_date', $request->current_date)->update([
            'sale' => 0,
        ]);
        $today_sale = DailySale::where('current_date', $current_date)->first();
        if($today_sale){
            DailySale::where('current_date', $current_date)->update([
                'sale' => $today_sale->sale + $request->total_sale,
            ]);
        }
        else{
            $today_new_sale = new DailySale();
            $today_new_sale->current_date = $current_date;
            $today_new_sale->sale = $request->total_sale;
            $today_new_sale->save();
        }
        $request->session()->flash('alert-success', 'Sales Transfered into ToDay Sale.');
        return redirect()->route('sales.transfer-sale');
    }

    public function transfer_sales_action(Request $request){
        // dd($request->all());
        if($request->amount > $request->remaining_sale){
            $request->session()->flash('alert-danger', 'You can not transfer more than'.$request->remaining_sale.' Amount');
            return back();
        }
        if($request->account_type){
            if($request->account_type == 'Cash'){
                if($request->bank){
                    $bank = Bank::find($request->bank);
                    Bank::where('id', $request->bank)->update([
                        'balance' => $bank->balance + $request->amount,
                    ]);
                    $bank_sale = new BankSale();
                    $bank_sale->bank_id = $request->bank;
                    $bank_sale->transaction = $request->amount;
                    $bank_sale->type = 'debit';
                    $bank_sale->save();
                    $daily_sale = DailySale::where('current_date', $request->current_date)->first();
                    DailySale::where('current_date', $request->current_date)->update([
                        'sale' => $daily_sale->sale - $request->amount,
                    ]);

                    // Transfer Sale History
                    $history = new TransferSaleHistory();
                    $history->account_type = $request->account_type;
                    $history->transaction_type = 'Credit';
                    $history->amount = $request->amount;
                    $history->note = $request->note;
                    $history->save();
                    $request->session()->flash('alert-success', 'Sales Transfered.');
                    return back();
                }
            }
            if($request->account_name == NULL){
                $request->session()->flash('alert-danger', 'Choose any Account Name');
                return back();
            }
            if($request->account_type == 'Customer'){
                
            }
            if($request->account_type == 'Vendor'){
                
            }
            
            $account = Customer::find($request->account_name);
            $account_transfer = AccountTransfer::where('customer_id', $request->account_name)->first();
            AccountTransfer::where('customer_id', $request->account_name)->update([
                'balance' => $account_transfer->balance + $request->amount,
            ]);
            $daily_sale = DailySale::where('current_date', $request->current_date)->first();
            DailySale::where('current_date', $request->current_date)->update([
                'sale' => $daily_sale->sale - $request->amount,
            ]);

            // // Transfer Sale History
            $history = new TransferSaleHistory();
            $history->account_type = $request->account_type;
            $history->transaction_type = 'Credit';
            $history->amount = $request->amount;
            $history->note = $request->note;
            $history->save();

            $request->session()->flash('alert-success', 'Sale Transfered.');
            return back();
        }
        return redirect()->route('sales.transfer-sale');
    }

    public function transfer_sales_history(){
        $history = TransferSaleHistory::all();
        return view('sales.transfer-sale-history', ['history' => $history]);
    } 

    public function getSkuProduct(Request $request){
        $item = Item::where('sku', $request->sku)->first();
        return $item;
    }

    public function SaleReturn(){
        if(!Auth::user()){
            return redirect()->route('login-page');
        }
        $sales = SaleReturn::orderBy('id', 'DESC')->get();
        return view('sales.sales-return-list', ['sales' => $sales]);
    }
}