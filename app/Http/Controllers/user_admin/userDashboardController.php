<?php

namespace App\Http\Controllers\user_admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class userDashboardController extends Controller{

    public function userDashboardView(){
        return view('user-admin.dashboard');
    }
}
