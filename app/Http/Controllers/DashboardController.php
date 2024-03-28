<?php

namespace App\Http\Controllers;

use App\Models\AccountSale;
use App\Models\Item;
use App\Models\Purchase;
use App\Models\Sale;
use App\Models\SaleItem;
use Illuminate\Http\Request;
use Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class DashboardController extends Controller
{
    public function dashboard(){
        if(!Auth::user()){
            return redirect()->route('login-page');
        }
        $items = count(Item::all());
        $purchases = count(Purchase::all());
        $totalOrders = count(Sale::all());
        $pendingOrders = Sale::where('status','pending')->count();
        $deliveredOrders = Sale::where('status','delivered')->count();
        $inProgressOrders = Sale::where('status','in_progress')->count();
        $cancelledOrders = Sale::where('status','cancelled')->count();
        $totalOrderAmounts = Sale::where('status','delivered')->sum('total_bill');

        $profit = SaleItem::sum('profit');
        $receivables = AccountSale::sum('balance');
      
        return view('dashboard.dashboard', ['items' => $items,
         'purchases' => $purchases, 
        'totalOrders' => $totalOrders,
        'pendingOrders' => $pendingOrders,
        'deliveredOrders' => $deliveredOrders,
        'inProgressOrders' => $inProgressOrders,
        'cancelledOrders' => $cancelledOrders,
        'totalOrderAmounts' => $totalOrderAmounts,
        'profit' => $profit,
         'receivables' =>$receivables
        ]);
    }

    public function profile(){
        if(!Auth::user()){
            return redirect()->route ('login-page');
        }
        $user = User::find(Auth::user()->id);
        return view('dashboard.profile')->with('user', $user);
    }

    public function removeLogo($id, Request $request){
        if(!Auth::user()){
            return redirect()->route('login-page');
        }
        $user = User::find($id);
        unlink(public_path('users').'/'.$user->logo);
        User::where('id', $id)->update([
            'logo' => NULL,
        ]);
        $request->session()->flash('alert-success', 'Image Removed.');
        return back();
    }

    public function updateProfile(Request $request){
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            // 'phone' => 'required',
            'type' => 'required',
            'address' => 'required',
        ]);

        User::where('id', Auth::user()->id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'type' => $request->type,
            'address' => $request->address,
            'password' => Hash::make($request->pass),
        ]);
        if($request->pass){
            User::where('id', Auth::user()->id)->update([
                'password' => Hash::make($request->pass),
            ]);
        }
        if($request->file('logo')){
            $logo = $request->file('logo');
            $name=$logo->getClientOriginalName();
            $logo->move(public_path().'/users/', $name);
            User::where('id', Auth::user()->id)->update([
                'logo' => $name
            ]);
        }
        $request->session()->flash('alert-success', 'Profile Updated.');
        return back();

    }
}
