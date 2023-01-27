<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{
    public function create(Request $request){
        return view('register');
    }
    public function store(Request $request){
        $fields = $request->validate([
            'name' => 'required|min:3',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|confirmed|min:6'
        ]);

        $fields['password'] = bcrypt($fields['password']);

        $user = User::create($fields);

        auth()->login($user);

        return redirect('/')->with('message', 'You have created an account and logged in successfully!');
    }
    public function showLogin(){
        return view('login',[
            'active' => 'login'
        ]);
    }

    public function login(Request $request){
        $fields = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        if(auth()->attempt($fields)){
            $request->session()->regenerate();
            return redirect('/')->with('message', 'You have logged in successfully!');
        }

        return back()->withErrors([
            'email' => 'Invalid Credentials'
        ])->onlyInput('email');
    }

    public function logout(Request $request){

        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('message', 'Successfully logged out!');
    }
}
