<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\article;
use App\Http\Service\ArticleColumn;
use App\column;
use Illuminate\Support\Facades\DB;
class HomeArticleController extends BaseController
{
    public function articleDetail($id){
        $prev = Article::where('id','<',$id)->orderBy('id','desc')->first();
        $next = Article::where('id','>',$id)->orderBy('id','asc')->first();
        $article = Article::findorFail($id);
        $columns = Column::where('position','header')->get();
        return view('home.show',['mate_title'=>$article->title,'columns'=>$columns,'article'=>$article,'prev'=>$prev,'next'=>$next]);
    }

    public function articleSearchList(Request $request){
        $keyword = $request->input('keyword');
        $results = DB::select("SELECT * FROM l_articles where MATCH(title,abstract) AGAINST(:keyword IN BOOLEAN MODE )",['keyword'=>'\'*'.$keyword.'*\'']);
        return view('home.article.searchList',['mate_title'=>$keyword,'articleList'=>$results]);

    }


   public function getArticleByColumnId(Request $request,$column_id){
       $articleColumn = new ArticleColumn;
       $res = $articleColumn ->checkColumnById($column_id);
       if($res['num']> 1){
           return view('home.article.navList',['articlesList'=>$res['list'],'mate_title'=>'漯河东方医院']);
       }
       elseif($res['num'] == 0){
           return view('home.article.navNull',['articlesList'=>$res['list'],'mate_title'=>'漯河东方医院']);
       }
       else{
           return view('home.article.navInfo',['mate_title'=>$res['list']->title,'articlesList'=>$res['list']]);
       }
   }
   public function getSickList($column_id){
       $articleList = Article::where('column_id',$column_id)->paginate(15);
       $articleList->column_id = $column_id;
       return view('home.article.sickList',['mate_title'=>'漯河东方妇科医院 好的妇科医院 技术专业的医院','articleList'=>$articleList]);
   }

   public function getColumnList($column_id) {
       $column = Column::where('id',$column_id)->first();
       $childColumn = Column::where('pid',$column_id)->get();
       $articleList = [];
       foreach ($childColumn as $value){
            $value['child'] = Article::where('column_id',$value->id)->limit(4)->get();
            $articleList[]=$value;
       }
       $fkArticleList=[];
       $fkColumn = Column::where('pid',$column_id)->limit(4)->get();
       foreach ($fkColumn as $value){
           $value['child'] = Article::where('column_id',$value->id)->limit(4)->get();
           $fkArticleList[]=$value;
       }
       return view('home.article.columnList',
           ['mate_title'=>$column->column_name,
               'column'=>$column,
               'childColumn'=>$childColumn,
                'articleList' =>$articleList,
               'fkArticleList' =>$fkArticleList,
           ]);
   }
}
