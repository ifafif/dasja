<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('dashboard.index');
        // $data = user::get();

        // return view('index',compact('data'));
    }
}
