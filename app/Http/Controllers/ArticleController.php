<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Column;
use App\Http\Service\Upload;
use Illuminate\Support\Facades\DB;
class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $articles = DB::table('articles')
            ->leftJoin('columns', 'articles.column_id', '=', 'columns.id')
            ->select('articles.*', 'columns.column_name')
            ->orderBy('articles.id','desc')
            ->paginate(15);
        return view('admin.article.index',['articles'=>$articles]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $columns = Column::orderBy('path')->get();
        return view('admin.article.create',['columns'=>$columns]);
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
            ['title' => 'required|max:35','cate_id'=>'required','from'=>'required','article_content'=>'required'],
            [
                'title.required'=>'文章标题不能为空',
                'cate_id.required'=>'所属栏目不能为空',
                'from.required'=>'文章来源不能为空',
                'article_content.required'=>'文章内容不能为空',
            ]
        );
        $article = new Article;
        $article->title = $request->title;
        $article->column_id = $request->cate_id;
        if ($request->hasFile('face')){
            $uploadPath = Upload::uploadImage($request,'face');
            if ($uploadPath){
                $article->face = $uploadPath;
            }
        }
        $article->from = $request->from;
        $article->abstract = mb_substr(strip_tags($request->article_content),0,56);
        $article->content = $request->article_content;
        $article->skills =empty($request->skills)? '':$request->skills;
        $res= $article->save();
        if ($res){
            return redirect('articles')->with('info','文章 '.$request->title.'发布成功');
        }else{
            return back()->with('info','发布失败，请重新填写');
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
        $article = Article::findorFail($id);
        $columns = Column::where('position','header')->get();
        return view('home.show',['mate_title'=>$article->title,'columns'=>$columns,'article'=>$article]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $columns = Column::orderBy('path','desc')->get();
        $article = Article::findorFail($id);
        return view('admin.article.edit',['columns'=>$columns,'article'=>$article]);
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
            ['title' => 'required|max:35','cate_id'=>'required','from'=>'required','article_content'=>'required'],
            [
                'title.required'=>'文章标题不能为空',
                'cate_id.required'=>'所属栏目不能为空',
                'from.required'=>'文章来源不能为空',
                'article_content.required'=>'文章内容不能为空',
            ]
        );
        $article = new Article;
        $articles['title'] = $request->title;
        $articles['column_id'] = $request->cate_id;
        if ($request->hasFile('face')){
            $uploadPath = Upload::uploadImage($request,'face');
            if ($uploadPath){
                $articles['face'] = $uploadPath;
            }
        }
        $articles['from'] = $request->from;
        $articles['abstract'] = mb_substr(strip_tags($request->article_content),0,56);
        $articles['content'] =$request->article_content;
        $articles['skills'] =empty($request->skills)? '':$request->skills;
        $res= $article::where('id',$id)->update($articles);
        if ($res){
            return redirect('articles')->with('info','文章 '.$request->title.' 修改成功');
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
        $article  = Article::findOrFail($id);
        $res = $article->delete();
        if($res){
            return redirect('articles')->with('info','栏目 '.$article->title.' 删除成功');
        }else{
            return back()->with('info','删除失败');
        }
    }
}
