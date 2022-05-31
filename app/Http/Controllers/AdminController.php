<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\post;

class AdminController extends Controller
{
    public function Home()
    {
       return view('admin.login');
    } 

    public function Login(Request $request)
    {
        $request->validate ([
            'username'=>'required',
            'password'=>'required'
        ]);
        $Usercheck=Admin::where(['name'=> $request->username,'password'=>sha1( $request->password),])->count();
        if ($Usercheck>0) {
            $userData=Admin::where(['name'=> $request->username,'password'=>sha1( $request->password),])->first();
            session(['adminData'=>$userData]);
            return redirect('admin/dashboard');
        }
        else{
            return redirect('admin/login')->with('error','invalid username or password');
        }
    }
    public function dashboard(){
        
        $post=post::orderBy('id','desc')->get();
        return view('admin.dashboard',['postData'=>$post,]);
    }
    public function Logout(){
        session()->forget(['adminData']);
        return redirect('/login');
    }
}
