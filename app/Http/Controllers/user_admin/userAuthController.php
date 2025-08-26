<?php

namespace App\Http\Controllers\user_admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class userAuthController extends Controller{

    public function userLoginView(){
        return view('user-admin.login');
    }

    public function userLogin(Request $request){
        $user = User:: where([
            ['email',$request->user_email],
            ['password',$request->user_password],
        ])
        ->first();
       
        if($user){
            Auth::login($user);
            return redirect('user-admin/dashboard');
        }else{
            return redirect('user-admin/login')->with('message','Login Failed');
        }
    }
    public function userLogout(){
        Auth::logout();
        return redirect('/');
    }
}
