<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Exception;
use App\Models\User;
use Socialite;

class FacebookController extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function redirectToFacebook()
    {
        return Socialite::driver('facebook')->redirect();
    }
        
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function handleFacebookCallback()
    {
        $user = $user = Socialite::driver('facebook')->stateless()->user();

        $this->_registerOrLoginUser($user);

        // Return home after login
        return redirect("/post/show");
    }
    protected function _registerOrLoginUser($data)
    {
        $user = User::where('email', '=', $data->email)->first();
        if (!$user) {
            $user = new User();
             $user->name = $data->name;
            $user->user = $data->name;
            $user->email = $data->email;
            $user->provider_id = $data->id;
           $user->password="123@456";
           $user->verification="yes";
            $user->save();

        }
        session(['userData'=>$user]);
       
    }
}
