<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018-06-28
 * Time: 16:57
 */

namespace App\http\Service;
use Illuminate\Http\Request;

class Upload
{
    public static function uploadImage($request,$key,$dir=''){
        $file = $request->file($key);
        $dir = empty($dir)? 'upload/'.date('Y-m-d'):'upload/'.$dir;
        $path = $file->store($dir);
        if ($path){
            $uploadPath ='/'.$path;
            return $uploadPath;
        }else{
            return false;
        }

    }
}