<?php

namespace App\Http\Controllers;

use App\Models\Purchase;
use App\Models\Sale;
use Illuminate\Http\Request;
use Auth;

class SearchController extends Controller
{
    public function search_purchase(Request $request){
        if(!Auth::user()){
            return redirect()->route('login-page');
        }
        $purchases = Purchase::whereBetween('current_date', [$request->from, $request->to])->with('customer', 'purchase_item')->orderBy('id', 'Desc')->get();
        return view('purchase.purchase-search-result', ['purchases' => $purchases])->with(['from'=>$request->from, 'to'=> $request->to]);
    }

    public function searchPurchaseByLot(Request $request){
        if(!Auth::user()){
            return redirect()->route('login-page');
        }
        $purchases = Purchase::where('lot', $request->lot)->with('customer', 'purchase_item')->orderBy('id', 'Desc')->get();
        return view('purchase.purchase-search-result-by-lot', ['purchases' => $purchases]);
    }

    public function search_sale(Request $request){
        if(!Auth::user()){
            return redirect()->route('login-page');
        }
        $sales = Sale::whereBetween('current_date', [$request->from, $request->to])->with('customer', 'sale_items')->orderBy('id', 'Desc')->get();
        return view('sales.sale-search-result', ['sales' => $sales])->with(['from'=>$request->from, 'to'=> $request->to]);
    }
}
