<?php
// Added by Rizwan
namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Session;

class adminLoginController extends Controller
{
   public function adminLoginView(){
        return view('admin.login');
    }
    public function adminLogin(Request $request){
        $request->validate([
            'admin_email' => 'required',
            'admin_password' => 'required',
        ]);

        $adminDetails = Admin:: where([
            ['admin_email',$request->admin_email],
            ['admin_password',$request->admin_password],
        ])->first();
        
        if($adminDetails){
            session(['adminId' => $adminDetails['admin_id']]);
            session(['adminName' => $adminDetails['admin_name']]);
            session(['adminEmail' => $adminDetails['admin_email']]);
            session(['adminPassword' => $adminDetails['admin_password']]);
            session(['adminContactNo' => $adminDetails['admin_contact_no']]);
           return redirect('admin/dashboard');
        }else{
            return redirect('admin/login')->with('message','Login Failed');
        }
    }
    public function adminLogout(){
        Session::flush();
        return redirect('admin/login');
    }
}
