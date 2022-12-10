<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class NewUserController extends Controller
{
    public function users(){
        $users = User::orderBy('id', 'Desc')->get();
        
        return view('users.users-list', ['users' => $users]);
    }
}
