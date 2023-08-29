<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('auth.login');
    }

    public function login_proses(Request $request){
        // dd($request->all());
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        $data=[
            'username' => $request->username,
            'password' => $request->password
        ];

        // dd($data->all());
        if(Auth::attempt($data)){
            return redirect()->route('dashboard');
        }else{
            return redirect()->route('login')->with('failed','Email atau Password Salah');
            // return redirect()->route('dashboard');
            // return redirect()->route('welcome');
        }

    }

    public function logout(){
        Auth::logout();
        return redirect()->route('login')->with('success','Berhasil Logout');
    }
}

