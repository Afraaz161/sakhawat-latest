<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\FrontCategory;
use App\Models\FrontItem;
use App\Models\Slider;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
use App\Models\Category;
use App\Models\Item;

class FrontController extends Controller
{
    public function index(){
        $items = FrontItem::where('status', TRUE)->with('item')->orderBy('id', 'Desc')->get();
        $categories = Category::orderBy('id', 'Desc')->get();
        $slider_top = Slider::where('type', 'top')->inRandomOrder()->get();
        $slider_bottom = Slider::where('type', 'bottom')->inRandomOrder()->get();
        return view('front.index', ['categories' => $categories, 'slider_top' => $slider_top, 'slider_bottom' => $slider_bottom, 'items' => $items]);
    }

    public function category_product($id){
        // $name = str_replace('-', ' ', $name);
        $items = Item::where('category_id', $id)->orderBy('id', 'Desc')->get();
        // dd($items);
        $categories = Category::with('subcategory')->orderBy('id', 'Desc')->get();
        $sliders = Slider::inRandomOrder()->get();
        return view('front.category-products' , compact('items'), compact('categories'), ['sliders' => $sliders]);
    }

    public function login_page(){
        if(Auth::user()){
            return redirect()->route('admin-dashboard');
        }
        return view('front.login');
    }

    public function check_credentials(Request $request){
       
        $this->validate($request, [
            'email'  => 'required',
            'password'  => 'required',
        ]);
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->route('admin-dashboard');
        }
        else{
            $request->session()->flash('alert-danger', 'Email or Password are incorrect.');
            return back();
        }
    }

    public function admin_logout(Request $request){
        Auth::logout();
        return redirect()->route('login-page');
    }

    public function about_us(){
        $categories = FrontCategory::with('category.subcategory')->orderBy('id', 'Desc')->get();
        $slider_bottom = Slider::where('type', 'bottom')->inRandomOrder()->get();
        return view('front.about-us', ['categories' => $categories, 'slider_bottom' => $slider_bottom]);
    }

    public function contact_us(){
        $categories = FrontCategory::with('category.subcategory')->orderBy('id', 'Desc')->get();
        $slider_bottom = Slider::where('type', 'bottom')->inRandomOrder()->get();
        return view('front.contact', ['categories' => $categories, 'slider_bottom' => $slider_bottom]);
    }

    
    public function contact_us_action(Request $request){
        $contact = new Contact();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->message = $request->message;
        $contact->save();
        // Mail::to($request->email)->send(new SendMail());
        $request->session()->flash('alert-success', 'Thank you for Contacting Us.');
        return back();
    }
}
