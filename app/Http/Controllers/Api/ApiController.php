<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;


class ApiController extends Controller
{
    //Register API route - name, email, password, password_confirmation
    public function register(Request $request){
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email',
            'password' => 'required|confirmed',
        ]);
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);
    }

    //Login API route
    public function login(){

    }

    //Get user details API route - Profile
    public function profile(){
       
    }

    //Logout 
    public function logout(){
        
    }
    
}