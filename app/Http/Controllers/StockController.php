<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\Manufacture;
use App\Models\Subcategory;
use DB;

class StockController extends Controller
{
    public function stock_management(){
        $items = Item::orderBy('id', 'DESC')->get();
        return view('stock.stock-management', ['items'=> $items]);
    }

    public function reorder_items(){
        $items = Item::orderBy('id', 'DESC')->whereColumn('stock', '<', 'reorder_value')->where('status', '=', 'ok')->get();
        // dd($items);
        $categories = Category::orderBy('id', 'DESC')->get();
        $subcategories = Subcategory::orderBy('id', 'DESC')->get();
        $manufactures = Manufacture::orderBy('id', 'DESC')->get();
        $brands = Brand::orderBy('id', 'DESC')->get();
        return view('stock.re-order-items', ['items'=> $items, 'categories'=> $categories, 'subcategories'=> $subcategories, 'manufactures'=> $manufactures, 'brands' => $brands]);
    }

    public function search_reorder_list_items(Request $request){
        if($request->name == NULL && $request->u_name == NULL && $request->category == NULL && $request->subcategory == NULL  && $request->brand == NULL){
            $request->session()->flash('alert-danger', 'Choose at least one Type');
            return back();
        }
        if($request->name){
            $items = Item::orderBy('id', 'DESC')->with(['category', 'manufacture'])->whereColumn('stock', '<', 'reorder_value')->where('status', '=', 'ok')->where('id', $request->name)->get();
        }
        if($request->u_name){
            $items = Item::orderBy('id', 'DESC')->with(['category', 'manufacture'])->whereColumn('stock', '<', 'reorder_value')->where('status', '=', 'ok')->where('id', 'like', '%' . $request->u_name . '%')->get();
        }   
        if($request->category){
            $items = Item::orderBy('id', 'DESC')->with(['category', 'manufacture'])->whereColumn('stock', '<', 'reorder_value')->where('status', '=', 'ok')->where('category_id', $request->category)->get();
        }
        if($request->subcategory){
            $items = Item::orderBy('id', 'DESC')->with(['category', 'manufacture'])->whereColumn('stock', '<', 'reorder_value')->where('status', '=', 'ok')->where('subcategory_id', $request->subcategory)->get();
        }
        if($request->brand){
            $items = Item::orderBy('id', 'DESC')->with(['category', 'manufacture'])->whereColumn('stock', '<', 'reorder_value')->where('status', '=', 'ok')->where('brand_id', $request->brand)->get();
        }
        
        $total_items = Item::orderBy('id', 'DESC')->with(['category', 'manufacture'])->whereColumn('stock', '<', 'reorder_value')->where('status', '=', 'ok')->get();
        $categories = Category::orderBy('id', 'DESC')->get();
        $subcategories = Subcategory::orderBy('id', 'DESC')->get();
        $manufactures = Manufacture::orderBy('id', 'DESC')->get();
        $brands = Brand::orderBy('id', 'DESC')->get();
        return view('stock.search-reorder-items', ['total_items'=>$total_items, 'items'=> $items, 'categories'=> $categories, 'subcategories'=> $subcategories, 'manufactures'=> $manufactures, 'brands' => $brands]);
    }

    public function blacklist_items(){
        $items = Item::orderBy('id', 'DESC')->with(['category', 'manufacture'])->where('status', 'black list')->get();
        return view('stock.black-list', ['items'=> $items]);
    }

    public function black_list_action($id, Request $request){
        $item = Item::find($id);
        Item::where('id', $id)->update([
            'status' => 'black list',
        ]);
        $request->session()->flash('alert-success', 'Item has Been Added in Black List');
        return back();
    }

    public function green_list_action($id, Request $request){
        $item = Item::find($id);
        Item::where('id', $id)->update([
            'status' => 'ok',
        ]);
        $request->session()->flash('alert-success', 'Item has Been Added in Stock');
        return back();
    }
}
