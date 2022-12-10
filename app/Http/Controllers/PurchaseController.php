<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AccountPurchase;
use App\Models\AccountSale;
use App\Models\AccountTransfer;
use App\Models\Customer;
use App\Models\Item;
use App\Models\Purchase as ModelsPurchase;
use App\Models\PurchaseCart;
use App\Models\PurchaseItem;
use App\Models\User as ModelsUser;
use Auth;

class PurchaseController extends Controller
{
    public function purchase_item(){
        if(!Auth::user()){
            return redirect()->route('login-page');
        }
        $aa = session('purchase');
        $items = Item::with(['category', 'brand'])->orderBy('id', 'Desc')->get();
        $customers = Customer::where('type', 'Vendor')->orderBy('id', 'Desc')->get();
        return view('purchase.purchase-form', ['items' => $items, 'customers' => $customers]);
    }

    public function get_session_items(){
        $purchases = PurchaseCart::where(['user_id'=>Auth::user()->id])->get();
        return view('purchase.get-purchase', compact('purchases'));
    }

    public function add_vendor(Request $request){
        $this->validate($request, [
            'phone' => 'required|unique:customers',
        ]);
        $account = new Customer();
        $account->name = $request->name;
        // $account->u_name = $request->u_name;
        $account->address = $request->address;
        $account->phone = $request->phone;
        $account->type = $request->type;
        $account->save();

        $account_purchase = new AccountPurchase();
        $account_purchase->customer_id = $account->id;
        $account_purchase->save();

        $account_sale = new AccountSale();
        $account_sale->customer_id = $account->id;
        $account_sale->save();

        $account_transfer = new AccountTransfer();
        $account_transfer->customer_id = $account->id;
        $account_transfer->save();

        $customers = Customer::where('type', 'Vendor')->orderBy('id', 'Desc')->get();
        return view('purchase.get-vendors', compact('customers'));
    }

    public function get_vendors(){
        $customers = Customer::where('type', 'Vendor')->orderBy('id', 'Desc')->get();
        return view('purchase.get-vendors', compact('customers'));
    }

    public function add_item_to_session(Request $request){
        if(!Auth::user()){
            return redirect()->route('login-page');
        }
        $item = Item::find($request->id);
        $total = (int)$request->purchase_rate * (int)$request->qty;
        $cart = PurchaseCart::where(['item_id'=>$item->id, 'user_id'=>Auth::user()->id])->first();
        if($cart){
            PurchaseCart::where(['item_id'=>$item->id, 'user_id'=>Auth::user()->id])->update([
                'quantity' => $cart->quantity + $request->qty,
                'total' => $cart->total + $total,
            ]);
            $purchases = PurchaseCart::where(['user_id'=>Auth::user()->id])->get();
            return view('purchase.get-purchase', compact('purchases'));
        }
        else{
            $cart = new PurchaseCart();
            $cart->item_id = $item->id;
            $cart->user_id = Auth::user()->id;
            $cart->name = $item->name;
            $cart->price = $request->purchase_rate;
            $cart->quantity = $request->qty;
            $cart->total = $total;
            $cart->purchase_rate = $request->purchase_rate;
            $cart->sale_rate = $request->sale_rate;
            $cart->save();
        }
        $purchases = PurchaseCart::where(['user_id'=>Auth::user()->id])->get();
        return view('purchase.get-purchase', compact('purchases'));
    }

    public function delete_item_to_session(Request $request){
        $purchase = PurchaseCart::find($request->id);
        $purchase->delete();
        $purchases = PurchaseCart::where(['user_id'=>Auth::user()->id])->get();
        return view('purchase.get-purchase', compact('purchases'));
    }

    public function reset_page(Request $request){
        $purchases = PurchaseCart::where(['user_id'=>Auth::user()->id])->get();
        foreach($purchases as $row){
            $row->delete();
        }
        return view('purchase.get-purchase', compact('purchases'));
    }

    public function get_customer_account_detail(Request $request){
        $account = AccountPurchase::where('customer_id', $request->id)->first();
        return $account;
    }

    public function purchase_item_action(Request $request){
        $purchases_cart_furst = PurchaseCart::where(['user_id'=>Auth::user()->id])->first();
        if($purchases_cart_furst){
            $purchase_table = new ModelsPurchase();
            $purchase_table->customer_id = $request->customer_id;
            $purchase_table->current_date = $request->current_date;
            $purchase_table->payment_method = $request->payment_method;
            $purchase_table->total_bill = $request->total_bill;
            $purchase_table->payment = $request->payment;
            $purchase_table->sale_man = Auth::user()->id;
            $purchase_table->save();

            $purchases_cart = PurchaseCart::where(['user_id'=>Auth::user()->id])->get();
            $purchases = [];
            foreach($purchases_cart as $id=>$purchase){
                $item = Item::whereName($purchase->name)->first();
                if($item->price){
                    Item::whereName($purchase->name)->update([
                        'old_price' => $item->price,
                    ]);
                }
                Item::whereName($purchase->name)->update([
                    'price' => $purchase->purchase_rate,
                    'sale_rate' => $purchase->sale_rate,
                    'stock' => $purchase->quantity,
                ]);
                Item::whereName($purchase->name)->update([
                    'stock' => $item->stock + $purchase->quantity,
                ]);
                $row = [];
                $row['purchase_id']= $purchase_table->id;
                // $row['category_id']= $purchase_table->category;
                $row['name']= $purchase->name;
                $row['price']= $purchase->price;
                $row['quantity']= $purchase->quantity;
                $row['total']= $purchase->total;
                $purchases[] = $row;
            }
            PurchaseItem::insert($purchases);
        }
        $account = AccountPurchase::where('customer_id', $request->customer_id)->orderBy('id', 'DESC')->first();
        $account_purchase = new AccountPurchase();
        $account_purchase->customer_id = $request->customer_id;
        $account_purchase->total = $request->total_bill;
        $account_purchase->paid = $request->payment;
        $account_purchase->payable = $request->total_bill - $request->payment;
        $account_purchase->balance = (int)$account->balance + ($request->total_bill - $request->payment);
        $account_purchase->save();

        $rows = PurchaseCart::where('user_id', Auth::user()->id)->get();
        foreach($rows as $row){
            $row->delete();
        }
        return 'Item Purchased Successfully!';
    }

    public function purchase_print_english(){
        $purchase = ModelsPurchase::with('customer', 'purchase_item')->orderBy('id', 'desc')->first();
        return view('print.purchase-print-english')->with('purchase', $purchase);
    }

    public function purchase_print_urdu(){
        $purchase = ModelsPurchase::with('customer', 'purchase_item')->orderBy('id', 'desc')->first();
        return view('print.purchase-print-urdu')->with('purchase', $purchase);
    }

    public function purchase_list(){
        if(!Auth::user()){
            return redirect()->route('login-page');
        }
        $purchases = ModelsPurchase::with('customer', 'purchase_item')->orderBy('id', 'Desc')->get();
        return view('purchase.purchase-list', ['purchases' => $purchases]);
    }

    public function purchase_detail($id){
        if(!Auth::user()){
            return redirect()->route('login-page');
        }
        $purchases = PurchaseItem::with('brand')->where('purchase_id', $id)->get();
        return view('purchase.purchase-detail', ['purchases' => $purchases]);
    }

    public function getSkuProduct(Request $request){
        $item = Item::where('sku', $request->sku)->first();
        return $item;
    }

    public function purchaseDelete(Request $request, $id){
        $purchase = ModelsPurchase::with('purchase_item')->find($id);
        // Update Stock
        foreach($purchase->purchase_item as $item){
            $database_item = Item::whereName($item->name)->first();
            // dd($database_item);
            Item::whereName($item->name)->update([
                'stock' => $database_item->stock - $item->quantity,
            ]);
        }
        // Delete Sales Items
        $purchase->purchase_item()->delete();
        // Delete Sale
        $purchase->delete();
        $request->session()->flash('alert-success', 'Purchase Deleted.');
        return back();
    }
}
