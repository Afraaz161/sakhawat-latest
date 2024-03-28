<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Customer;
use App\Models\Item;
use Illuminate\Http\Request;
use Auth;


class ItemController extends Controller
{
    public function items(){
        if(!Auth::user()){
            return redirect()->route('login-page');
        }
        $categories = Category::orderBy('id', 'Desc')->get();
        
        $items = Item::with(['category'])->orderBy('id', 'Desc')->get();
        return view('item.add-new-item', ['items' => $items, 'categories'=>$categories]);
    }

    public function add_new_item_action(Request $request){
        if(!Auth::user()){
            return redirect()->route('login-page');
        }
        $this->validate($request, [
            'rate' => 'required',
            'category' => 'required',
        ]);
        $item = new Item();
        $item->name = $request->name;
        $item->category_id = $request->category;
        $item->required = $request->required;
        $item->description = $request->description;
        $item->unit = $request->unit;
        $item->price = $request->rate;
        // upload multiple image
        if($request->file('image')){
            $image = $request->file('image');
            $name=$image->getClientOriginalName();
            $image->move(public_path().'/items/', $name);
            $item->image = $name;
        }
        else{
            $item->image = 'default_image.jpg';
        }
        
        $item->save();
        $request->session()->flash('alert-success', 'New item added.');
        return back();
    }

    public function view_items_list(){
        if(!Auth::user()){
            return redirect()->route('login-page');
        }
        $items = Item::with(['category', 'manufacture'])->orderBy('id', 'Desc')->get();;
        return view('item.view-items-list', ['items'=>$items]);
    }

    public function delete_item($id, Request $request){
        if(!Auth::user()){
            return redirect()->route('login-page');
        }
        $item = Item::find($id);
        $item->delete();
        $request->session()->flash('alert-success', 'One item deleted.');
        return back();
    }

    public function edit_item($id){
        if(!Auth::user()){
            return redirect()->route('login-page');
        }
        $categories = Category::orderBy('id', 'Desc')->get();;
       
       
        $item = Item::with(['category'])->find($id);
        return view('item.edit-item', ['categories'=>$categories])->with('item', $item);
    }

    public function update_item(Request $request, $id){
        if(!Auth::user()){
            return redirect()->route('login-page');
        }
        $item = Item::find($id);
        if($request->file('image')){
            $image = $request->file('image');
            $name=$image->getClientOriginalName();
            $image->move(public_path().'/items/', $name);
            Item::find($id)->update([
                'image' => $image,
            ]);
        }
        else{
            $item = Item::find($id);
            Item::find($id)->update([
                'image' => $item->image,
            ]);
        }

        if($request->category){
            Item::where('id', $id)->update([
                'category_id' => $request->category,
            ]); 
        }
        else{
            Item::where('id', $id)->update([
                'category_id' => $item->category_id,
            ]);
        }

        Item::where('id', $id)->update([
            'name' => $request->name,
            'price' => $request->rate,
            'unit' => $request->unit,
        ]);
        $request->session()->flash('alert-success', 'Item updated successfully.');
        return redirect()->route('my-items');
    }
    
    public function add_category(Request $request){
        if(!Auth::user()){
            return redirect()->route('login-page');
        }
        $this->validate($request, [
            'name' => 'required|unique:categories',
        ]);
        $category = new Category();
        $category->name = $request->name;
        $category->save();
        $categories = Category::orderBy('id', 'Desc')->get();;
        return view('item.get-categories', compact('categories'));
    }

    public function get_categories(){
        $categories = Category::orderBy('id', 'Desc')->get();;
        return view('item.get-categories', compact('categories'));
    }

    public function add_customer(Request $request){
        if(!Auth::user()){
            return redirect()->route('login-page');
        }
        $customer = new Customer();
        $customer->name = $request->name;
        $customer->address = $request->address;
        $customer->phone = $request->phone;
        $customer->type = $request->type;
        $customer->save();
        return json_encode('Customer saved successfully.');
    }

}
