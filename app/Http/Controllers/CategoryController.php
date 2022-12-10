<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Manufacture;
use App\Models\Subcategory;
use Illuminate\Http\Request;
use Auth;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function categories()
    {
        if(!Auth::user()){
            return redirect()->route('login-page');
        }
        $categories = Category::orderBy('id', 'desc')->get();
        return view('categories.categories-list', ['categories' => $categories]);
    }

    public function edit_category(Request $request){
        if(!Auth::user()){
            return redirect()->route('login-page');
        }
        $categories = Category::orderBy('id', 'desc')->get();
        $category = Category::find($request->id);
        return view('categories.edit-category',['categories' => $categories])->with('category', $category);
        // return view('categories.get-category-edit-form')->with('category', $category);
    }

    public function update_category(Request $request){
        if(!Auth::user()){
            return redirect()->route('login-page');
        }
        $category = Category::find($request->id);
        $this->validate($request, [
            'name' => 'required|unique:categories,name,'.$category->id,
        ]);
        Category::where('id', $request->id)->update([
            'name' => $request->name,
        ]);
        $request->session()->flash('alert-success', 'Category updated.');
        return back();
    }

    public function delete_category(Request $request, $id){
        if(!Auth::user()){
            return redirect()->route('login-page');
        }
        $cat = Category::find($id);
        $cat->delete();
        $request->session()->flash('alert-success', 'One Category removed.');
        return back();
    }

    public function new_categories_action(Request $request){
        if(!Auth::user()){
            return redirect()->route('login-page');
        }
        $this->validate($request, [
            'name' => 'required|unique:categories',
        ]);
        $cat = new Category();
        $cat->name = $request->name;
        $cat->save();
        $request->session()->flash('alert-success', 'New Category saved.');
        return back();
    }

    public function subcategories(){
        if(!Auth::user()){
            return redirect()->route('login-page');
        }
        $categories = Category::orderBy('id', 'desc')->get();
        $subcategories = Subcategory::orderBy('id', 'desc')->get();
        return view('categories.subcategories-list', ['categories' => $categories, 'subcategories' => $subcategories]);
    }

    public function edit_subcategory(Request $request){
        if(!Auth::user()){
            return redirect()->route('login-page');
        }
        $categories = Category::orderBy('id', 'desc')->get();
        $subcategory = Subcategory::find($request->id);
        $subcategories = Subcategory::orderBy('id', 'desc')->get();
        return view('categories.edit-subcategory', ['categories' => $categories, 'subcategories' => $subcategories])->with('subcategory', $subcategory);
        // return view('categories.get-subcategory-edit-form', ['categories' => $categories])->with('subcategory', $subcategory);
    }

    public function update_subcategory(Request $request){
        if(!Auth::user()){
            return redirect()->route('login-page');
        }
        $subcategory = Subcategory::find($request->id);
        $this->validate($request, [
            'name' => 'required|unique:subcategories,name,'.$subcategory->id,
            // 'u_name' => 'required|unique:subcategories,u_name,'.$subcategory->id,
        ]);
        Subcategory::where('id', $request->id)->update([
            'category_id' => $request->category,
            'name' => $request->name,
            // 'u_name' => $request->u_name,
        ]);
        $request->session()->flash('alert-success', 'Sub-Category updated.');
        return back();
    }

    public function delete_subcategory(Request $request, $id){
        if(!Auth::user()){
            return redirect()->route('login-page');
        }
        $subcat = Subcategory::find($id);
        $subcat->delete();
        $request->session()->flash('alert-success', 'One Sub-Category removed.');
        return back();
    }

    public function new_subcategories_action(Request $request){
        if(!Auth::user()){
            return redirect()->route('login-page');
        }
        $this->validate($request, [
            'category' => 'required',
            'name' => 'required|unique:subcategories',
            'u_name' => 'required|unique:subcategories',
        ]);
        // dd($request->all());
        $sub = new Subcategory();
        $sub->category_id = $request->category;
        $sub->name = $request->name;
        $sub->u_name = $request->u_name;
        $sub->save();
        $request->session()->flash('alert-success', 'New Sub-Category saved.');
        return back();
    }

    public function manufactures(){
        if(!Auth::user()){
            return redirect()->route('login-page');
        }
        $manufactures = Manufacture::orderBy('id', 'desc')->get();
        return view('categories.manufactures', ['manufactures' => $manufactures]);
    }

    public function edit_manufacture(Request $request){
        if(!Auth::user()){
            return redirect()->route('login-page');
        }
        $manufacture = Manufacture::find($request->id);
        $manufactures = Manufacture::orderBy('id', 'desc')->get();
        return view('categories.edit-manufacture', ['manufactures' => $manufactures])->with('manufacture', $manufacture);
        // return view('categories.get-manufacture-edit-form')->with('manufacture', $manufacture);
    }

    public function update_manufacture(Request $request){
        if(!Auth::user()){
            return redirect()->route('login-page');
        }
        $manufacture = Manufacture::find($request->id);
        $this->validate($request, [
            'name' => 'required|unique:manufactures,name,'.$manufacture->id,
            'u_name' => 'required|unique:manufactures,u_name,'.$manufacture->id,
        ]);
        Manufacture::where('id', $request->id)->update([
            'name' => $request->name,
            'u_name' => $request->u_name,
        ]);
        $request->session()->flash('alert-success', 'Manufacture updated.');
        return back();
    }

    public function new_manufacture_action(Request $request){
        if(!Auth::user()){
            return redirect()->route('login-page');
        }
        $this->validate($request, [
            'name' => 'required|unique:manufactures',
            'u_name' => 'required|unique:manufactures',
        ]);
        $manufacture = new Manufacture();
        $manufacture->name = $request->name;
        $manufacture->u_name = $request->u_name;
        $manufacture->save();
        $request->session()->flash('alert-success', 'New Manufacture saved.');
        return back();
    }

    public function delete_manufacture(Request $request, $id){
        if(!Auth::user()){
            return redirect()->route('login-page');
        }
        $manufacture = Manufacture::find($id);
        $manufacture->delete();
        $request->session()->flash('alert-success', 'One Manufacture removed.');
        return back();
    }

    public function brands(){
        if(!Auth::user()){
            return redirect()->route('login-page');
        }
        $brands = Brand::orderBy('id', 'DESC')->get();
        // dd($brands);
        return view('categories.brands', ['brands'=> $brands]);
    }

    public function new_brand_action(Request $request){
        if(!Auth::user()){
            return redirect()->route('login-page');
        }
        $brand = new Brand();
        $brand->name = $request->name;
        $brand->save();
        $request->session()->flash('alert-success', 'One Brand Added.');
        return back();
    }

    public function edit_brand(Request $request){
        if(!Auth::user()){
            return redirect()->route('login-page');
        }
        $brands = Brand::orderBy('id', 'desc')->get();
        $brand = Brand::find($request->id);
        return view('categories.edit-brand',['brands' => $brands])->with('brand', $brand);
    }

    public function update_brand(Request $request){
        if(!Auth::user()){
            return redirect()->route('login-page');
        }
        Brand::where('id', $request->id)->update([
            'name' => $request->name
        ]);
        $request->session()->flash('alert-success', 'One Brand Updated.');
        return back();
    }
}
