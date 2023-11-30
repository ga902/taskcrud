<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
   
    public function signup(){
        return view('user/signup');
    }
    public function postSignup(Request $request){
        $validateData = $request->validate(
            [
                'name'=>'required',
                'email'=>'required|email',
                'password'=>'required|min:8|confirmed'
            ]);
        User::create([
            'name' => $request->input('name'),
        'email' => $request->input('email'),
        'password' => bcrypt($request->input('password')),
        ]);
        return view('user/index',['message'=>"user Created Successfully"]);    
    }
    public function showLoginForm(){
        return view('user/login');
    }
    public function postlogin(Request $request){
        $validateData = $request->validate([
            'email'=>'required',
            'password'=>'required'
        ]);
        
        if(Auth::attempt($validateData)){
            $request->session()->regenerate();
            return redirect()->intended('user/index');

        }
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }

}
