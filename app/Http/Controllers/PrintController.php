<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Purchase;
use App\Models\Sale;
use App\Models\SaleReturn;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class PrintController extends Controller
{
    public function print_reorder_list(){
        if(!Auth::user()){
            return redirect()->route('login-page');
        }
        $items = Item::orderBy('id', 'DESC')->with(['category', 'manufacture'])->whereColumn('stock', '<', 'reorder_value')->where('status', '!=', 'black list')->get();
        return view('print.print-reorder-list', ['items'=> $items]);
    }

    public function print_blacklist_list(){
        if(!Auth::user()){
            return redirect()->route('login-page');
        }
        $items = Item::orderBy('id', 'DESC')->with(['category', 'manufacture'])->where('status', 'black list')->get();
        return view('print.print-blacklist-list', ['items'=> $items]);
    }

    public function print_purchase_list_english($id){
        if(!Auth::user()){
            return redirect()->route('login-page');
        }
        $purchase = Purchase::with('customer', 'purchase_item')->find($id);
        return view('print.purchase-print-english')->with('purchase', $purchase);
    }

    public function print_purchase_list_urdu($id){
        if(!Auth::user()){
            return redirect()->route('login-page');
        }
        $purchase = Purchase::with('customer', 'purchase_item')->find($id);
        return view('print.purchase-print-urdu')->with('purchase', $purchase);
    }

    public function print_sales_list_english($id){
        if(!Auth::user()){
            return redirect()->route('login-page');
        }
        $sale = Sale::with('customer', 'sale_items')->find($id);
        return view('print.sale-print-english')->with('sales', $sale);
    }

    public function print_sales_return_list_english($id){
        if(!Auth::user()){
            return redirect()->route('login-page');
        }
        $sale = SaleReturn::with('customer', 'sale_return_items')->find($id);
        return view('print.sale-return-print-english')->with('sales', $sale);
    }

    public function print_sales_list_urdu($id){
        if(!Auth::user()){
            return redirect()->route('login-page');
        }
        $sale = Sale::with('customer', 'sale_items')->find($id);
        return view('print.sale-print-urdu')->with('sales', $sale);
    }
}
