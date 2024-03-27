<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Auth;

class UserController extends Controller
{
    public function users(){
        $users = User::orderBy('id', 'Desc')->get();
        return view('users.users-list', ['users' => $users]);
    }

    public function new_user_action(Request $request){
        $this->validate($request, [
            'name' => 'required',
            // 'u_name' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required',
        ],[
            'name.required' => 'Name is required.',
            // 'u_name.required' => 'Urdu Name is required.',
            'email.required' => 'Email is required.',
            'password.required' => 'Password is required.',
        ]);
        // dd($request->all());
        $account = new User();
        $account->name = $request->name;
        // $account->u_name = $request->u_name;
        $account->email = $request->email;
        $account->password = bcrypt($request->password);
        $account->type = $request->type;
        $account->password2 = $request->password;
        $account->save();
        $request->session()->flash('alert-success', 'New user created.');
        return back();
    }

    public function login_page(){
        if(Auth::user()){
            return redirect()->route('admin-dashboard');
        }
        return view('front.login');
    }

    public function admin_check_credentials(Request $request){
        dd($request->all());
    }

    public function user_del(Request $request, int $id){
       $user =  User::find($id);
       if($user){
        $user->delete();
        $request->session()->flash('alert-success', 'User deleted successfully.');
       }
    }


}
