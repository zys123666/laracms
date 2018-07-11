<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\column;
use App\banner;
class HomeController extends BaseController
{
    public function index(){
        $banners = Banner::get();
        return view('home.index',['mate_title'=>'漯河东方医院','banners'=>$banners]);
    }
}
