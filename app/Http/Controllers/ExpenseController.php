<?php

namespace App\Http\Controllers;

use App\Models\Expense;
use App\Models\ExpenseCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Item;

class ExpenseController extends Controller
{
    public function expenses(){
        if(!Auth::user()){
            return redirect()->route('login-page');
        }
        $items = Item::all();
        $expenses = Expense::with('expense_category')->orderBy('id', 'DESC')->get();
        return view('expense.expenses', ['items' => $items])->with('expenses', $expenses);
    }

    public function deleteExpense($id, Request $request){
        if(!Auth::user()){
            return redirect()->route('login-page');
        }
        $exp = Expense::find($id);
        $exp->delete();
        $request->session()->flash('alert-success', 'One Expense deleted.');
        return back();
    }

    public function addCategory(Request $request){
        $cat = new ExpenseCategory();
        $cat->name = $request->category;
        $cat->save();
        $categories = ExpenseCategory::orderBy('id', 'DESC')->get();
        return view('expense.get-categories')->with('categories', $categories);   
    }

    public function getCategories(){
        $categories = ExpenseCategory::orderBy('id', 'DESC')->get();
        return view('expense.get-categories')->with('categories', $categories);   
    }

    public function addExpense(Request $request){
        // dd($request->all());
        if(!Auth::user()){
            return redirect()->route('login-page');
        }
        $item = Item::find($request->lot);
        $exp = new Expense();
        $exp->expense_category_id = $request->category;
        $exp->date = $request->date;
        // $exp->type = $request->type;
        // $exp->lot = $request->lot;
        $exp->amount = $request->amount;
        $exp->detail = $request->detail;
        $exp->save();
        // if($request->type == 'product'){
        //     Item::where('id', $request->lot)->update([
        //         'price' => $item->price + $request->amount,
        //         'sale_rate' => $item->sale_rate + $request->amount,
        //     ]);
        // }
        $request->session()->flash('alert-success', 'New Expense added.');
        return back();
    }
}
