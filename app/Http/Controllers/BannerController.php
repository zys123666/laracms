<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Service\Upload;
use App\Banner;
class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banners = Banner::get();
        return view('admin.banner.index',['banners'=>$banners]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.banner.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $banner = new Banner;
       if ($request->hasFile('banner')){
           $path = Upload::uploadImage($request,'banner','banner');
           $banner->path = $path;
       }
       else{
           return back()->with('info','图片必须上传');
       }
       $banner->banner_name = $request->banner_name;
        $banner->link = $request->link;
        $res = $banner->save();
        if ($res){
            return redirect('/banners')->with('info','添加成功');
        }else{
            return back()->with('info','保存失败');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $res = Banner::where('id',$id)->first();
        return view('admin.banner.edit',['banner'=>$res]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $banners = new Banner;
        if ($request->hasFile('banner')){
            $path = Upload::uploadImage($request,'banner','banner');
            $banner['path'] = $path;
        }elseif ($request->input('banner_path') != ''){
            $banner['path'] = $request->input('banner_path');
        }
        else{
            return back()->with('info','图片必须上传');
        }
        $banner['banner_name'] = $request->banner_name;
        $banner['link'] = $request->link;
        $res = $banners::where('id',$id)->update($banner);
        if ($res){
            return redirect('/banners')->with('info','修改成功');
        }else{
            return back()->with('info','修改失败');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $res = Banner::where('id',$id)->delete();
        if ($res){
            return redirect('/banners')->with('info','删除成功');
        }else{
            return back()->with('info','删除失败');
        }

    }
}
