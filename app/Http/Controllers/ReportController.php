<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Purchase;
use App\Models\Sale;
use App\Models\SaleItem;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReportController extends Controller
{
    // Purchase
    public function purchaseReport(){
        if(!Auth::user()){
            return redirect()->route('login-page');
        }
        $purchases = Purchase::with('customer', 'purchase_item')->orderBy('id', 'Desc')->get();
        return view('reports.purchase.purchase-report', ['purchases' => $purchases]);
    }

    public function purchaseReportPrintAllUrdu(){
        $purchases = Purchase::with('customer', 'purchase_item')->orderBy('id', 'Desc')->get();
        return view('reports.purchase.print-urdu-purchase-report', ['purchases' => $purchases]);
    }

    public function purchaseReportPrintAllEnglish(){
        $purchases = Purchase::with('customer', 'purchase_item')->orderBy('id', 'Desc')->get();
        return view('reports.purchase.print-english-purchase-report', ['purchases' => $purchases]);
    }


    // Search Purchase
    public function searchPurchaseReport(Request $request){
        if(!Auth::user()){
             return redirect()->route('login-page');
       }
        $purchases = Purchase::whereBetween('current_date', [$request->from, $request->to])->with('customer', 'purchase_item')->orderBy('id', 'Desc')->get();
        return view('reports.purchase.purchase-search-result', ['purchases' => $purchases])->with(['from'=>$request->from, 'to'=> $request->to]);
    }

    public function purchaseReportPrintAllUrduSearch($from, $to){
        $purchases = Purchase::whereBetween('current_date', [$from, $to])->with('customer', 'purchase_item')->orderBy('id', 'Desc')->get();
        return view('reports.purchase.print-urdu-purchase-report', ['purchases' => $purchases])->with(['from'=>$from, 'to'=> $to]);
    }

    public function purchaseReportPrintAllEnglishSearch($from, $to){
        $purchases = Purchase::whereBetween('current_date', [$from, $to])->with('customer', 'purchase_item')->orderBy('id', 'Desc')->get();
        return view('reports.purchase.print-english-purchase-report', ['purchases' => $purchases])->with(['from'=>$from, 'to'=> $to]);
    }


    // Sale Functions
    public function saleReport(){
        if(!Auth::user()){
            return redirect()->route('login-page');
        }
        $brands = Brand::all();
        $sales = Sale::with('sale_items', 'customer', 'user')->orderBy('id', 'Desc')->get();
        return view('reports.sales.sale-report', ['sales' => $sales, 'brands' => $brands]);
    }

    public function saleReportPrintAllUrdu(){
        $sales = Sale::with('customer', 'sale_items', 'user')->orderBy('id', 'Desc')->get();
        return view('reports.sales.print-urdu-sale-report', ['sales' => $sales]);
    }

    public function saleReportPrintAllEnglish(){
        $sales = Sale::with('customer', 'sale_items', 'user')->orderBy('id', 'Desc')->get();
        return view('reports.sales.print-english-sale-report', ['sales' => $sales]);
    }

    
    // Search Sale
    public function searchSaleReport(Request $request){
        if(!Auth::user()){
            return redirect()->route('login-page');
        }
        $brands = Brand::all();
        $sales = Sale::whereBetween('current_date', [$request->from, $request->to])->with('sale_items', 'customer', 'user')->orderBy('id', 'Desc')->get();
        return view('reports.sales.sale-search-result', ['sales' => $sales])->with(['from'=>$request->from, 'to'=> $request->to, 'brands' => $brands]);
    }

    public function searchSaleReportByBrand(Request $request){
        if(!Auth::user()){
            return redirect()->route('login-page');
        }
        $brand = $request->brand;
        $sales = Sale::whereHas('sale_items', function($query) use ($brand) {
            $query->where("brand_id",  $brand);
        })->get();
        $brands = Brand::all();
        return view('reports.sales.sale-report-by-brand', ['sales'=> $sales, 'brands' => $brands]);
    }

    public function saleDetailByBrand($id, $brand){
        if(!Auth::user()){
            return redirect()->route('login-page');
        }
        $sales = SaleItem::where('sale_id', $id)->where('brand', $brand)->get();
        return view('sales.sale-detail', ['sales' => $sales]);
    }

    public function saleReportPrintSearchEnglish($from, $to, Request $request){
        $sales = Sale::whereBetween('current_date', [$request->from, $request->to])->with('sale_items', 'customer', 'user')->orderBy('id', 'Desc')->get();
        return view('reports.sales.print-english-sale-report', ['sales' => $sales]);
    }


    // Profit Functions
    public function profitReport(){
        if(!Auth::user()){
            return redirect()->route('login-page');
        }
        $sales = Sale::with('customer', 'sale_items', 'user')->orderBy('id', 'Desc')->get();
        $purchases = Sale::all();
        if($sales){
            $countSale = count($sales);
        }
        if($purchases){
            $countPurchase = count($purchases);
        }
        return view('reports.profit.profit-report', ['sales' => $sales, 'purchases' => $purchases])->with('countSale', $countSale)->with('countPurchase', $countPurchase);
    }

    public function searchProfitReport(Request $request){
        if(!Auth::user()){
            return redirect()->route('login-page');
        }
        $sales = Sale::whereBetween('current_date', [$request->from, $request->to])->with('customer', 'sale_items')->orderBy('id', 'Desc')->get();
        return view('reports.profit.search-profit-report', ['sales' => $sales])->with(['from'=>$request->from, 'to'=> $request->to]);
    }

    public function viewProfitReport($id){
        if(!Auth::user()){
            return redirect()->route('login-page');
        }
        $sales = SaleItem::where('sale_id', $id)->get();
        return view('reports.profit.view-profit-report', ['sales' => $sales]);
    }


    //  Sales Analysis
    public function saleAnalysis(){
        if(!Auth::user()){
            return redirect()->route('login-page');
        }
        $sales = SaleItem::all();
        // dd($sales);
        return view('reports.sales.view-sale-analysis', ['sales' => $sales]);
    }

    public function searchSaleAnalysis(Request $request){
        // dd($request->all());
        if(!Auth::user()){
            return redirect()->route('login-page');
        }
        if($request->brand){
            if($request->brand == 'University Book Corner'){
                $sales = Sale::whereHas('sale_items', function(Builder $q) {
                    $q->where("brand",  'University Book Corner' );
                })->get();
            }
            if($request->brand == 'Book Bazar'){
                $sales = Sale::whereHas('sale_items', function(Builder $q) {
                    $q->where("brand",  'Book Bazar' );
                })->get();
            }
        }
        
    }
    


}
