<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\category;
use Mail;

class userController extends Controller
{
    public function Home()
    {
       return view('login');
    }

    public function Login(Request $request)
    {
        $request->validate ([
            'username'=>'required',
            'password'=>'required'
        ]);
        $Usercheck=User::where(['name'=> $request->username,'password'=>sha1( $request->password),'verification'=>'yes'])->count();
        if ($Usercheck>0) {
            $userData=User::where(['name'=> $request->username,'password'=>sha1( $request->password),])->first();
            session(['userData'=>$userData]);
            return redirect('post/show');
        }
        else{
            return redirect('/login')->with('error','invalid username or password');
        }
    }
    public function dashboard()
    {
        $data=category::where(['category'=>'mobile'])->get();
        $data2=category::where(['category'=>'miscallenious'])->get();
        $data3=category::where(['category'=>'jobs'])->get();
        $data4=category::where(['category'=>'service'])->get();
        $data5=category::where(['category'=>'cars'])->get();
        return view('user.welcome',['mobData'=>$data],['misData'=>$data2,'serData'=>$data4,'carData'=>$data5,'jobData'=>$data3]);
     
    }
    public function register(){
        return view('registration');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'username'=>'required',
            'password'=>'required',
            'email'=>'required',
           
        ]);
        $userCheck=User::where(['email'=> $request->email,'name'=>$request->username])->count();
        if ($userCheck>0) {
            return redirect('/registeration')->with('error','user already exist');;
        }
        else{
        $user = new user;
        $user->user =$request->name;
        $user->name =$request->username;
        $user->email =$request->email;
        $user->password =sha1($request->password);
        $user->save();
        
         $data = [
          'name' => $request->name,
          
          'email' => $request->username,
        ];

        Mail::to($request->email)->send(new \App\Mail\auth($data));

        return redirect('/login')->with('success','Verify Your Email and then login');
    }
    }
    public function update(Request $request){
        $id=session('userData')->id;
        $request->validate([
            'username'=>'required',
            'name'=>'required',
            'email'=>'required',
           
        ]);
            $user =User::find($id);
            $user->user =$request->name;
            $user->name =$request->username;
            $user->email =$request->email;
            if ($request->password==$request->password2) {
                if ($request->password=="") {
                    $user->password =session('userData')->password;
                }
                else{
                    $user->password =sha1($request->password);
                }
         
         }
         else{
            return back()->with('error','Password dont Match');
        }
            $user->save();
              session()->forget(['userData']);
            return redirect('/login')->with('success','Data has been updated');
       
    }
    public function Logout(){
        session()->forget(['userData']);
        return redirect('/login');
    }
       public function verify($email=null){
           $userCount = user::where(['name'=>$email])->count();
           if($userCount==1){
         
        $user = user::where(['name'=>$email])->first();
        $user->verification ='yes';
        $user->save();
         return redirect('/login')->with('success','Verified');
           }
           else{
           
              return redirect('/login')->with('success','User dont exist');
           
           }
           }
       
}
