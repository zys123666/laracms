<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018-07-06
 * Time: 15:32
 */

namespace App\http\Service;
use App\article;

class ArticleColumn
{
        public function checkColumnById($column_id){
            $articleProject = Article::where('column_id',$column_id);
            $num = $articleProject->count();
            $article = $articleProject->orderBy('id','desc');
            if ($num > 1 || $num == 0){
                $articles = $article->limit(5)->get();
                $articles->column_id = $column_id;
            }elseif($num ==1 || $num == 0){
                $articles = $article->first();
                $articles->column_id = $column_id;
            }
            $res = [];
            $res['num'] = $num;
            $res['list'] = $articles;
            return $res;
        }
}