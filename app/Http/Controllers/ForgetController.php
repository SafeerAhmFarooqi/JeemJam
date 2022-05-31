<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Exception;
use App\Models\User;
use Mail;
class ForgetController extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function forget()
    {
        return view('forget');
    }
    public function repassword()
    {
        return view ('repas');
    }
      public function repass(Request $request,$id=null)
    {
         $request->validate ([
            'password'=>'required',
            'password2'=>'required',
        ]);
        if(($request->password==$request->password2)){
        $user =User::find($id);
        $user->password =sha1($request->password);
        $user->save();
         return redirect('/login')->with('success','Password reset');
        }
        else{
             return back()->with('error','Password dont Match');
        }
    }
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function reset(Request $request)
    {
         $request->validate ([
            'email'=>'required'
        ]);
       $user = User::where(['email'=>$request->email])->count();
       if($user == 0){
           return back()->with(['error'=>'No Such User Exist']);
       }
       $reuser=User::where(['email'=>$request->email])->first();
       $data = [
           'id'=>$reuser->id,
          'name' => $reuser->name,
          'email' => $reuser->email,
        ];

        Mail::to($request->email)->send(new \App\Mail\forget($data));

        return back()->with(['success' => 'Email successfully sent!']);
    
    }
}
