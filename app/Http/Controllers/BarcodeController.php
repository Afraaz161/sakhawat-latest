<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class BarcodeController extends Controller
{
    public function generateBarcode(){
        $items = Item::with(['category'])->orderBy('id', 'Desc')->get();
        return view('barcode.generate-barcode', ['items' => $items]);
    }

    public function generateBarcodeAction(Request $request){
        $item = Item::find($request->item);
        return view('barcode.get-generated-barcode')->with('item', $item)->with('price', $request->price);
    }

    public function printGeneratedBarcode(Request $request){
        return 'Moin';
        $item = Item::find($request->print_item);
        return view('barcode.print-generated-barcode')->with('item', $item)->with('price', $request->print_price);
    }
}
