<?php

namespace App\Http\Controllers;

use App\Mail\CustomerLedger;
use App\Models\AccountPurchase;
use App\Models\AccountSale;
use App\Models\AccountTransfer;
use App\Models\Customer;
use App\Models\DailySale;
use App\Models\TransferSaleHistory;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class PaymentController extends Controller
{
    public function purchase_payment(){
        if(!Auth::user()){
            return redirect()->route('login-page');
        }
        $payments = AccountPurchase::orderBy('id', 'DESC')->with(['customer'])->whereHas('customer', function ($query) {
            $query->where('type', '=', 'Vendor');
        })->get();
        $vendors = Customer::where('type', 'Vendor')->get();
        return view('payment.purchase-payment', ['payments' => $payments, 'vendors' => $vendors]);
    }

    public function get_purchase_payment_detail(Request $request){
        $payment = AccountPurchase::orderBy('id', 'DESC')->with('customer')->where('customer_id', $request->id)->first();
        return view('payment.get-purchase-payment-detail')->with('payment', $payment);
    }

    public function add_payment_to_purchase_account_action(Request $request){
        if(!Auth::user()){
            return redirect()->route('login-page');
        }
        $account = AccountPurchase::orderBy('id', 'DESC')->with('customer')->where('customer_id', $request->id)->first();

        $payment = new AccountPurchase();
        $payment->customer_id = $request->id;  
        $payment->paid = $request->amount;
        $payment->payable = $account->balance - $request->amount;
        $payment->balance = $account->balance - $request->amount;
        $payment->save();
        $request->session()->flash('alert-success', 'Payment added to Purchase Account.');
        return back();
    }

    public function sale_payment(){
        if(!Auth::user()){
            return redirect()->route('login-page');
        }
        $payments = AccountSale::orderBy('id', 'DESC')->with(['customer'])->whereHas('customer', function ($query) {
            $query->where('type', '=', 'Customer');
        })->get();
        $customers = Customer::where('type', 'Customer')->get();
        return view('payment.sale-payment', ['payments' => $payments, 'customers' => $customers]);
    }

    public function get_sale_payment_detail(Request $request){
        $payment = AccountSale::orderBy('id', 'DESC')->with('customer')->where('customer_id', $request->id)->first();
        return view('payment.get-sale-payment-detail')->with('payment', $payment);
    }

    public function deleteSalePayment($id, Request $request){
        $payment = AccountSale::find($id);
        $payment->delete();
        $request->session()->flash('alert-success', 'Payment deleted.');
        return back();
    }

    public function addPreviousPayment(Request $request){
        return view('payment.add-previous-payment', ['id' => $request->id]);
    }

    public function addPreviousPaymentAction(Request $request){
        if(!Auth::user()){
            return redirect()->route('login-page');
        }
        // dd($request->all());
        $payment = AccountSale::orderBy('id', 'DESC')->with('customer')->where('customer_id', $request->customer_id)->first();
        $payment = new AccountSale();
        $payment->customer_id = $request->customer_id;
        $payment->total = $request->amount;
        $payment->receivable = $request->amount;
        $payment->balance = $payment->balance + $request->amount;
        $payment->description = $request->description;
        $payment->created_at = $request->date;
        $payment->save();
        $request->session()->flash('alert-success', 'Payment added to Purchase Account.');
        return back();
    }

    public function add_payment_to_sale_account_action(Request $request){
        if(!Auth::user()){
            return redirect()->route('login-page');
        }
        $account = AccountSale::orderBy('id', 'DESC')->with('customer')->where('customer_id', $request->customer_id)->first();
        $payment = new AccountSale();
        $payment->customer_id = $request->customer_id; 
        $payment->invoice = $request->description;
        $payment->received = $request->amount;
        $payment->receivable = $account->balance - $request->amount;
        $payment->balance = $account->balance - $request->amount;
        $payment->description = $request->description;
        $payment->created_at = $request->date;
        $payment->save();
        $request->session()->flash('alert-success', 'Payment added to Purchase Account.');
        return back();
    }

    public function other_payment(){
        if(!Auth::user()){
            return redirect()->route('login-page');
        }
        $payments = AccountTransfer::orderBy('id', 'DESC')->with(['customer'])->whereHas('customer', function ($query) {
            $query->where('type', '!=', 'Customer');
            $query->where('type', '!=', 'Vendor');
        })->get();
        return view('payment.other-payment', ['payments' => $payments]);
    }

    public function get_other_payment_detail(Request $request){
        $payment = AccountTransfer::with('customer')->find($request->id);
        return view('payment.get-other-payment-detail')->with('payment', $payment);
    }

    public function add_payment_to_other_account_action(Request $request){
        if(!Auth::user()){
            return redirect()->route('login-page');
        }
        $payment = AccountTransfer::find($request->id);
        AccountTransfer::where('id', $request->id)->update([
            'balance' => $payment->balance - $request->amount,
        ]);
        $current_date = Carbon::now()->format('Y-m-d');
        $daily = DailySale::where('current_date', $current_date)->first();
        if($daily){
            DailySale::where('current_date', $current_date)->update([
                'sale' => $daily->sale + $request->amount,
            ]);
        }
        else{
            $daily_sale = new DailySale();
            $daily_sale->current_date = $current_date;
            $daily_sale->sale = $request->amount;
            $daily_sale->save();
        }
        $request->session()->flash('alert-success', 'Payment added to Other Account.');
        return back();
    }

    public function customerPaymentDetail($id){
        $payments = AccountSale::with(['customer'])->where('customer_id', $id)->get();
        return view('payment.sale-payment-detail', ['payments' => $payments, 'id' => $id]);
    }

    public function printCustomerLedger($id){
        $payments = AccountSale::with(['customer'])->where('customer_id', $id)->get();
        return view('payment.print-customer-ledger', ['payments' => $payments, 'id' => $id]);
    }

    public function emailCustomerLedger(Request $request, $id){
        $customer = Customer::find($id);
        Mail::to([$customer->email])->send(new CustomerLedger($id));
        $request->session()->flash('alert-success', 'Email sent to customer.');
        return back();
    }

    public function vendorPaymentDetail($id){
        $payments = AccountPurchase::with(['customer'])->where('customer_id', $id)->get();
        return view('payment.purchase-payment-detail', ['payments' => $payments]);
    }
}
