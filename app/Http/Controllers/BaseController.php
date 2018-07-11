<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cache;
class BaseController extends Controller
{
    public function __construct()
    {
        $config = DB::table('configs')->first();
        foreach ($config as $key=>$item){
            Cache::put($key,$item,1800);
    }
    }
}
