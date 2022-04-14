<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;



class RegisterController extends Controller
{
    public function __construct()
    {
        $this->middleware(['guest']);
    }

    public function index()
    {
        return view('auth.register');
    }
 //    store user 
    public function store(Request $request)
    {
        //    validation
        $this->validate($request, [
            'name'=> 'required|max:255',
            'username'=> 'required|max:255',
            'email'=> 'required|email|max:255',
            'password'=> 'required|confirmed',
        ]); 
        //    sign the user in 
       User::create([
           'name'=> $request->name,
           'username'=> $request->username,
           'email'=> $request->email,
           'password'=> Hash::make($request->password),
       ]);

       auth()-> attempt($request->only('email','password'));
       //    redirect
       return redirect()->route('dashboard');

    
   
    
   
        
    }
}