<?php

namespace App\Http\Controllers;

use App\Models\Bank;
use App\Models\BankSale;
use App\Models\DailySale;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Auth;

class BankController extends Controller
{
    public function Banks_list(){
        if(!Auth::user()){
            return redirect()->route('login-page');
        }
        $banks = Bank::orderBy('id', 'Desc')->get();;
        return view('banks.banks-list', ['banks' => $banks]);
    }

    public function add_bank_action(Request $request){
        $this->validate($request, [
            'name' => 'required'
        ],
        [
            'name.required' => 'Bank name is required.'
        ]    
        );
        $bank = new Bank();
        $bank->name = $request->name;
        $bank->is_active = TRUE;
        $bank->save();
        $request->session()->flash('alert-success', 'New bank added.');
        return back();
    }

    public function tranfer_amount_into_today_sale(Request $request){
        if(!Auth::user()){
            return redirect()->route('login-page');
        }
        $bank = Bank::find($request->id);
        if($request->amount > $bank->balance){
            $request->session()->flash('alert-danger', 'You can only transfer '.$bank->balance.' Amount.');
            return back();
        }
        Bank::where('id', $request->id)->update([
            'balance' => $bank->balance - $request->amount,
        ]);
        $bank_sale = new BankSale();
        $bank_sale->bank_id = $request->id;
        $bank_sale->transaction = $request->amount;
        $bank_sale->type = 'credit';
        $bank_sale->save();

        $current_date = Carbon::now()->format('Y-m-d');
        $today_sale = DailySale::where('current_date', $current_date)->first();
        if($today_sale){
            DailySale::where('current_date', $current_date)->update([
                'sale' => $today_sale->sale + $request->amount,
            ]);
        }
        else{
            $today_new_sale = new DailySale();
            $today_new_sale->current_date = $current_date;
            $today_new_sale->sale = $request->amount;
            $today_new_sale->save();
        }
        $request->session()->flash('alert-success', 'Amount transfered into Today Sale.');
        return back();
    }

    public function delete_bank($id, Request $request){
        $bank = Bank::find($id);
        $bank->delete();
        $request->session()->flash('alert-success', 'Bank deleted.');
        return back();
    }

    public function bank_transactions($id, Request $request){
        if(!Auth::user()){
            return redirect()->route('login-page');
        }
        $bank_sales = BankSale::where('bank_id', $id)->orderBy('id', 'Desc')->get();
        return view('banks.bank-transactions', ['bank_sales' => $bank_sales]);
    }
}
