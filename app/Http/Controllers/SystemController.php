<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Service\Upload;
class SystemController extends Controller
{
    public function index(){
        $configs = DB::table('configs')->first();
        return view('admin.config',['configs'=>$configs]);
    }
    public function store(Request $request){
        $data['web_name'] = $request->input('web_name');
        $data['record_number'] = $request->input('record_number');
        $data['yy_tel'] = $request->input('yy_tel');
        $data['address'] = $request->input('address');
        $data['web_desc'] = $request->input('web_desc');
        if ($request->hasFile('logo')){
            $path = Upload::uploadImage($request,'logo','web');
            $data['logo'] = $path;
        }
        if ($request->hasFile('qrcode')){
            $qrCodePath = Upload::uploadImage($request,'qrcode','web');
            $data['qrcode'] = $qrCodePath;
        }
        $config = DB::table('configs');
        if($config->count()){
            $res = $config->update($data);
        }else{
            $res =  $config->isnsert($data);
        }
       if ($res){
            return redirect('/config')->with('info','保存成功');;
       }
            return back()->with('info','保存失败');
    }
}
