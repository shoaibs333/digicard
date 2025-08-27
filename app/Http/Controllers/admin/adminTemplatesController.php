<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Templates;

class adminTemplatesController extends Controller
{
    public function adminTemplatesView(){
        $templatesData = Templates::orderBy('template_id', 'DESC')->get();
        return view('admin.templates',['templatesData'=>$templatesData]);
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
    public function adminTemplatesEditView(Request $request){
        $templateData = Templates::where('template_id',$request->id)->first();
        return view('admin.templates-edit',['templateData'=>$templateData]);

    }
    public function adminTemplatesEditAction(Request $request){
        $templateUpdateData =Templates::where("template_id", $request->id)->update(
            [
                'tmp_name' => $request->tmp_name,
                'tmp_url' => $request->tmp_url,
                'tmp_added_date' => CURRENT_DATE_TIME,
                'tmp_updated_date' => CURRENT_DATE_TIME
            ]
        );
        if($templateUpdateData)
        {
            return redirect('admin/templates-edit/'.$request->id)->with('message','success');
        }else{
            return redirect('admin/templates-edit/'.$request->id)->with('message','failed');
        }
    }
    

}
