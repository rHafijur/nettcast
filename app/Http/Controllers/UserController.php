<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Role;
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

    public function login_Process(Request $req){
       $user= User::where(['email'=>$req->email])->first();

       if(!$user || !Hash::check($req->password,$user->password))
       {
        return redirect('/login')->with('error_message','Email or Password is not matched !');     
       }
       else{
           $req->session()->put('user',$user);
           return redirect('/');
       }
    }

    public function register_process(Request $req){
        $this->validate($req,[
            'name' =>'required',
            'username' =>'required',
            'email' => 'email',
            'password' => 'min:6|required_with:password_confirmation|same:password_confirmation',
            'password_confirmation' => 'min:6'
        ]);
        $user =new User();
        $user->name=$req->name;
        $user->username=$req->username;
        $user->email=$req->email;
        $user->password=Hash::make($req->password);    
        $user->role_id=1;
        $user->save();    
        return redirect('/login');

    }
  
}


