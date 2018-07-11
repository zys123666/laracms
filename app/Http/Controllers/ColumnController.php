<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Column;
use Illuminate\Support\Facades\Storage;
use App\Http\Service\Upload;
use Illuminate\Support\Facades\DB;
class ColumnController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $columns = DB::table('columns')->orderBy('path')->paginate(16);;
        return view('admin.column.index')->with('columns',$columns);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $columns = Column::where('pid',0)->get();
        $columns_arr=[];
        foreach ($columns as $value){
            $item['id'] = $value['id'];
            $item['column_name'] = $value['column_name'];
            $columns_child = Column::where('pid',$value['id'])->get();
            $item['child']= $columns_child;
            $columns_arr[] = $item;
        }
       return view('admin.column.create',['columns'=>$columns_arr]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,
           ['column_name' => 'required|max:35'],
           [
               'column_name.required'=>'栏目名称不能为空',
               'column_name.max'=>'栏目名称不能超过10汉字'
           ]
       );
        $column = new Column;
        $columns['column_name'] = $request->column_name;
        $columns['ico'] = $request->ico;
        $columns['desc'] = $request->desc;
        $columns['pid'] = $request->pid;
        if ($request->hasFile('ico')){
            $uploadPath = Upload::uploadImage($request,'ico');
            if ($uploadPath){
                $columns['ico'] = $uploadPath;
            }
        }
        $res = $column::create($columns);
        $flight = $column::find($res->id);
        if ($res->pid == 0){
            $flight->path = $res->id.'-';
        }
        if($res->pid > 0){
            $p_path = $column::where('id',$res->pid)->firstorFail();
            $flight->path=$p_path->path.$res->id.'-';
        }
        $upr = $flight->save();
        if ($res&&$upr){
            return redirect('columns')->with('info','栏目 '.$request->column_name.' 添加成功');
        }else{
            return back()->with('info','添加失败，请重新填写');
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
//       $columns = Column::where('pid');
//       dd($columns);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $columns = Column::where('pid',0)->get();
        $columns_arr=[];
        foreach ($columns as $value){
            $item['id'] = $value['id'];
            $item['column_name'] = $value['column_name'];
            $columns_child = Column::where('pid',$value['id'])->get();
            $item['child']= $columns_child;
            $columns_arr[] = $item;
        }
        $info = Column::where('id',$id)->first();
        return view('admin.column.edit',['info'=>$info,'columns'=>$columns_arr]);
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
        $this->validate($request,
            ['column_name' => 'required|max:35'],
            [
                'column_name.required'=>'栏目名称不能为空',
                'column_name.max'=>'栏目名称不能超过10汉字',
            ]
        );
        $data['column_name'] = $request->column_name;
        $data['ico'] = $request->ico;
        $data['desc'] = $request->desc;
        $data['pid'] = $request->pid;
        if ($request->hasFile('ico')){
            $uploadPath = Upload::uploadImage($request,'ico');
            if ($uploadPath){
                $data['ico'] = $uploadPath;
            }
        }
        $res = Column::where('id',$id)->update($data);
        if ($res){
            return redirect('columns')->with('info','栏目 '.$request->column_name.' 修改成功');
        }else{
            return back()->with('info','修改失败，请重新填写');
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
       $columns  = Column::findOrFail($id);
       $res = $columns->delete();
       if($res){
           return redirect('columns')->with('info','栏目 '.$columns->column_name.' 删除成功');
       }else{
           return back()->with('info','删除失败');
       }
    }


}
