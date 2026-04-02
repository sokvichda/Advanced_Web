<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{

    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $user = User::where('email', $request->email)
                    ->where('password', $request->password)
                    ->first();

        if($user){
            Session::put('user', $user->name);
            return redirect('/dashboard');
        }else{
            return back()->with('error','Invalid Email or Password');
        }
    }

    public function dashboard()
    {
        if(!Session::has('user')){
            return redirect('/login');
        }

        return view('dashboard');
    }

    public function logout()
    {
        Session::forget('user');
        return redirect('/login');
    }
}