<?php

namespace App;
use App\column;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class article extends Model
{
    public function column()
    {
        return $this->belongsTo('App\Column');
    }

    public static function getLastArticle($column_id){
        $res = Article::where('column_id',$column_id)->orderBy('id','desc')->first();
        return $res;
    }
    public static function getArticleList($column_id,$rows=null){
        $article = Article::where('column_id',$column_id)->orderBy('id','desc');
        if (!empty($rows)){
            $res = $article ->limit($rows)->get();
        }else{
            $res = $article ->get();
        }
        return $res;
    }

    public static function getArticleByColumnId($column_id,$limit){
        $articles = DB::table('articles')
            ->leftJoin('columns', 'articles.column_id', '=', 'columns.id')
            ->where('columns.pid',$column_id)
            ->select('articles.*')
            ->orderBy('articles.id','desc')
            ->limit($limit)
            ->get();
        return $articles;
    }

    public static function getArticleListBycId($column_id,$limit){
        $column = Column::where('id',$column_id)->first();
        $res= Article::getArticleByColumnId($column->pid,$limit);
        return $res;
    }

}
