<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InfoController extends Controller
{
    public function addInfo(){
        return view('admin.info.add-info');
    }

    public function manageInfo(){
        return view('admin.info.manage-info');
    }

}
