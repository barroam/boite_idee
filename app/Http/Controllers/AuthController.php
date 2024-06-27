<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\AuthController;

class AuthController extends Controller
{
    //
    public function register(){
        return view( ('auth.register'));
    }
    public function registerPost( Request $request){
       $users = new user();
       $users->name =$request->name;
       $users->email =$request->email;
       $users->password = Hash::make( $request->password);
       $users->save();
       return back()->with('succes','enregistrer avec succes');
    }

    public function login(){
        return view ('auth.login');
    }
    public function loginPost(Request $request){

  $credetails = [
            'email' => $request->email,
            'password'=> $request->password,
        ];

        if (Auth::attempt($credetails)){
            return redirect('/idee');
        }
        return back()->with('error','Email or Password');
    }

         public function logout(){
            Auth::logout();
             return view('auth.login');
         }

}
