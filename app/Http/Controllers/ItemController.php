<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Customer;
use App\Models\FrontCategory;
use App\Models\Item;
use App\Models\Manufacture;
use App\Models\FrontItem;
use App\Models\Subcategory;
use App\Models\Receipt;
use App\Models\Slider;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\PseudoTypes\True_;
use Auth;
use Picqer\Barcode\BarcodeGeneratorHTML;
use Picqer\Barcode\BarcodeGeneratorPNG;

class ItemController extends Controller
{
    public function items(){
        if(!Auth::user()){
            return redirect()->route('login-page');
        }
        $categories = Category::orderBy('id', 'Desc')->get();
        $subcategories = Subcategory::orderBy('id', 'Desc')->get();
        $manufactures = Manufacture::orderBy('id', 'Desc')->get();
        $items = Item::with(['category', 'brand'])->orderBy('id', 'Desc')->get();
        return view('item.add-new-item', ['items' => $items, 'categories'=>$categories, 'manufactures'=>$manufactures, 'subcategories' => $subcategories]);
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
        $item->stock = 0;
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
        $subcategories = Subcategory::with('category')->orderBy('id', 'Desc')->get();;
        $manufactures = Manufacture::orderBy('id', 'Desc')->get();;
        $item = Item::with(['category', 'subcategory', 'manufacture'])->find($id);
        return view('item.edit-item', ['categories'=>$categories, 'manufactures'=>$manufactures, 'subcategories' => $subcategories])->with('item', $item);
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

    public function add_manufacture(Request $request){
        if(!Auth::user()){
            return redirect()->route('login-page');
        }
        $this->validate($request, [
            'name' => 'required|unique:manufactures',
        ]);
        $manufacture = new Manufacture();
        $manufacture->name = $request->name;
        $manufacture->save();
        $manufactures = Manufacture::orderBy('id', 'Desc')->get();;
        return view('item.get-manufacture', compact('manufactures'));
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

    public function get_subcategories(){
        $subcategories = Subcategory::orderBy('id', 'Desc')->get();
        return view('item.get-subcategories', compact('subcategories'));
    }

    public function get_manufacture(){
        $manufactures = Manufacture::orderBy('id', 'Desc')->get();;
        return view('item.get-manufacture', compact('manufactures'));
    }

    public function get_brand(){
        $brands = Brand::orderBy('id', 'Desc')->get();
        return view('item.get-brand', compact('brands'));
    }

    public function add_brand(Request $request){
        $this->validate($request, [
            'name' => 'required|unique:brands',
        ]);
        $brand = new Brand();
        $brand->name = $request->name;
        $brand->save();
        $brands = Brand::orderBy('id', 'Desc')->get();
        return view('item.get-brand', compact('brands'));
    }

    public function add_subcategory(Request $request){
        if(!Auth::user()){
            return redirect()->route('login-page');
        }
        $this->validate($request, [
            'name' => 'required|unique:subcategories',
        ]);
        // dd($request->all());
        $subcategory = new Subcategory();
        $subcategory->category_id = $request->category;
        $subcategory->name = $request->name;
        // $subcategory->u_name = $request->u_name;
        $subcategory->save();
        $subcategories = Subcategory::orderBy('id', 'Desc')->get();;
        return view('item.get-subcategories', compact('subcategories'));
        // return json_encode('SubCategory saved successfully.');
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

    public function front_products(){
        if(!Auth::user()){
            return redirect()->route('login-page');
        }
        $items = Item::orderBy('id', 'Desc')->get();;
        $front_items = FrontItem::orderBy('id', 'Desc')->get();;
        return view('front-products.front-products', compact('items'), compact('front_items'));
    }

    public function front_products_action(Request $request){
        if(!Auth::user()){
            return redirect()->route('login-page');
        }
        $item = Item::with('category')->find($request->item);
        $this->validate($request, [
            'item' => 'required',
        ],
        [
            'item.required' => 'Item name is required',
        ]
        );
        $front_item = new FrontItem();
        $front_item->item_id = $request->item;
        $front_item->status = $item->category['name'];
        $front_item->save();
        $request->session()->flash('alert-success', 'New product added.');
        return back();
    }

    public function front_product_delete(Request $request){
        if(!Auth::user()){
            return redirect()->route('login-page');
        }
        $item = FrontItem::find($request->id);
        $item->delete();
        $request->session()->flash('alert-success', 'One product deleted.');
        return back();
    }

    public function front_categories(){
        if(!Auth::user()){
            return redirect()->route('login-page');
        }
        $categories = Category::orderBy('id', 'Desc')->get();;
        $front_categories = FrontCategory::with('category.subcategory')->get();
        return view('front-categories.front-categories', compact('categories'), compact('front_categories'));
    }

    public function front_categories_action(Request $request){
        if(!Auth::user()){
            return redirect()->route('login-page');
        }
        $this->validate($request, [
            'category' => 'required',
        ],
        [
            'category.required' => 'Category name is required',
        ]
        );
        $front_category = new FrontCategory();
        $front_category->category_id = $request->category;
        $front_category->save();
        $request->session()->flash('alert-success', 'New category added.');
        return back();
    }

    public function front_category_delete(Request $request){
        if(!Auth::user()){
            return redirect()->route('login-page');
        }
        $item = FrontCategory::find($request->id);
        $item->delete();
        $request->session()->flash('alert-success', 'One category deleted.');
        return back();
    }

    public function front_sliders(){
        if(!Auth::user()){
            return redirect()->route('login-page');
        }
        $sliders = Slider::orderBy('id', 'Desc')->get();;
        return view('front-sliders.front-sliders', compact('sliders'));
    }

    public function delete_slider(Request $request, $id){
        if(!Auth::user()){
            return redirect()->route('login-page');
        }
        $slider = Slider::find($id);  
        $slider->delete();
        $request->session()->flash('alert-success', 'One slider deleted.');
        return back();
    }

    public function front_sliders_action(Request $request){
        if(!Auth::user()){
            return redirect()->route('login-page');
        }
        $this->validate($request, [
            'slider' => 'required',
        ],
        [
            'slider.required' => 'Slider image is required',
        ]
        );
        $slider = new Slider();
        $slider->type = $request->type;
        if($request->file('slider')){
            $image = $request->file('slider');
            $name=$image->getClientOriginalName();
            $image->move(public_path().'/front/slider/', $name);
            // store into database
        }
        $slider->image = $name;
        $slider->save();
        $request->session()->flash('alert-success', 'One slider added.');
        return back();
    }
    
}
