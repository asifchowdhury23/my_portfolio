<?php

namespace App\Http\Controllers;

use App\Models\Info;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index(){
        return view('frontEnd.home.home',[
            'infos' => Info::all()
        ]);
    }
}
