<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class UserController extends Controller
{
    
    public function login(){
        return view('auth.login');

    }
    public function register(){
        return view('auth.register');
    }
  
}

