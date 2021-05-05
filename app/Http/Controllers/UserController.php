<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

use App\user;

class UserController extends Controller
{
    //
    function login(Request $req)
    {          
          
        $user= DB::table('users')->where('email', $req->email)->first();
       if ($user && Hash:: check ($req->password,$user->password) )
       {
          $req->session()->put('user',$user);
        
          return redirect ('/product');
           
         
       }
       else 
      
           echo ' not mathced';
      
    }
    function logout(Request $req)
    {
        $req->session()->forget('user');
        return redirect('/master');
    }

    function signup()
    {    
        return view('signup');
    }

    function insertregi(Request $req)
    {   
       $user =new user;
       $user->name=$req->name;
       $user->email=$req->email;
       $user->password=Hash::make($req->password);
       $user->save();
      
       return redirect('/master');
    }

}
