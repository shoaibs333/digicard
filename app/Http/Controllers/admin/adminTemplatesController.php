<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Templates;

class adminTemplatesController extends Controller
{
    public function adminTemplatesView(){
        return view('admin.templates');
    }
     public function adminTemplatesAddView(){
        return view('admin.templates-add');
    }
     public function adminTemplatesAddAction(Request $request){
       
        $post = Templates::create([
            'tmp_name' => $request->tmp_name,
            'tmp_url' => $request->tmp_url,
            'tmp_added_date' => CURRENT_DATE_TIME,
            'tmp_updated_date' => CURRENT_DATE_TIME
        ]);
      
        if($post){
           return redirect('admin/templates');
        }else{
            return redirect('admin/templates-add')->with('message','Login Failed');
        }
    }

}
