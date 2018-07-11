<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\column;
class ColumnArticleController extends Controller
{
   public function index($id){
       $columns = Column::orderBy('path')->get();
        return view('admin.article.create',['columns'=>$columns,'column_id'=>$id]);
   }
}
