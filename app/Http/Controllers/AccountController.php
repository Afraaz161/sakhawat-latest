<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\AccountPurchase;
use App\Models\AccountSale;
use App\Models\AccountTransfer;
use App\Models\Customer;
use App\Models\Purchase;
use App\Models\Sale;
use Illuminate\Http\Request;
use Auth;

class AccountController extends Controller
{
    public function new_user_action(){
        dd('code here');
    }
    public function accounts(){
        if(!Auth::user()){
            return redirect()->route('login-page');
        }
        $customers = Customer::where('type', '!=', 'Admin')->orderBy('id', 'Desc')->get();
        return view('accounts.account-list', ['customers' => $customers]);
    }

    public function edit_account($id){
        if(!Auth::user()){
            return redirect()->route('login-page');
        }
        $account = Customer::find($id);
        $customers = Customer::where('type', '!=', 'Admin')->orderBy('id', 'Desc')->get();
        return view('accounts.edit-account', ['customers' => $customers])->with('account', $account);
    }

    public function update_account(Request $request){
        $customer = Customer::find($request->id);
        $this->validate($request, [
            'name' => 'required',
            'address' => 'required',
            'phone' => 'required|unique:customers,phone,'.$customer->id,
        ],[ 
            'name.required' => 'Name is required.',
            'address.required' => 'Address is required.',
            'phone.required' => 'Phone is required.',
        ]);
        Customer::where('id', $request->id)->update([
            'name' => $request->name,
            'address' => $request->address,
            'phone' => $request->phone,
            'type' => $request->type,
            'ntn_no' => $request->ntn,
            'sales_tax_no' => $request->sales_tax,
        ]);
        $request->session()->flash('alert-success', 'Account updated.');
        return redirect()->route('accounts');
    }

    public function delete_account(Request $request, $id){
        $account = Customer::find($id);

        // Delete Sale Account
        $account_sale = AccountSale::where('customer_id', $id)->get();
        if($account_sale){
            foreach($account_sale as $sale){
                $sale->delete();
            }
        }

        // Delete Purchase Account
        $account_purchase = AccountPurchase::where('customer_id', $id)->get();
        if($account_purchase){
            foreach($account_purchase as $purchase){
                $purchase->delete();
            }
        }

        // Delete Sales & Sale Items
        $sales = Sale::where('customer_id', $id)->get();
        $sales->sale_items->delete();
        $sales->delete();

        // Delete Purchases & Purchase Items
        $purchases = Purchase::where('customer_id', $id)->get();
        $purchases->purchase_item->delete();
        $purchases->delete();

        // Delete Account
        $account->delete();
        $request->session()->flash('alert-success', 'One account removed.');
        return back();
    }

    public function create_new_account(Request $request){
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
        $account->ntn_no = $request->ntn;
        $account->sales_tax_no = $request->sales_tax;
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
        $request->session()->flash('alert-success', 'New account created.');
        return back();
    }
}
