<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InfoController extends Controller
{
    public function addAbout(){
        return view('admin.about.add-about');
    }
}
