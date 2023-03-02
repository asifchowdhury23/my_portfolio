<?php

namespace App\Http\Controllers;

use App\Models\Info;
use Illuminate\Http\Request;

class InfoController extends Controller
{
    public function addInfo(){
        return view('admin.info.add-info');
    }

    public function manageInfo(){
        return view('admin.info.manage-info',[
            'infos'=>Info::all()
        ]);
    }

    public function saveInfo(Request $request){
        Info::saveInfo($request);
        return redirect(route('manage.info'))->with('message','saved successfully');
    }
    public function status($id){
        Info::status($id);
        return back();
    }

    public function editInfo($id){
        return view('admin.info.edit-info',[
            'info'=>Info::find($id)
        ]);
    }
    public function updateInfo(Request $request){
        Info::updateInfo($request);
        return redirect(route('manage.info'));
    }
    public function delete(Request $request){
        Info::infoDelete($request);
        return back();
    }

}
