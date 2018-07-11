<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\column;
class ColumnPlusController extends Controller
{
    public function add($id)
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
        return view('admin.column.create',['column_id'=>$id,'columns'=>$columns_arr]);
    }
}
