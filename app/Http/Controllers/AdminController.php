<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function main(Request $request){
        return view('admin.main');
    }
    public function right(){
        return view('admin.right');
    }
}
