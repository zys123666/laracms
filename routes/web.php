<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/','HomeController@index');
Route::get('getSickList/{column_id}','HomeArticleController@getSickList');
Route::get('getArticles/{column_id}','HomeArticleController@getArticleByColumnId');
Route::get('getColumnList/{column_id}','HomeArticleController@getColumnList');
Route::get('articleDetail/{id}','HomeArticleController@articleDetail');
Route::post('search','HomeArticleController@articleSearchList');
Route::get('admin/index','LoginController@index');
Route::post('admin/login','LoginController@login')->name('login');
Route::group(['middleware'=>'login'],function (){
Route::get('admin/main','AdminController@main');
Route::resource('columns', 'ColumnController');
Route::resource('create', 'ColumnController@create');
Route::resource('store', 'ColumnController@store');
Route::resource('edit', 'ColumnController@edit');
Route::resource('update', 'ColumnController@update');
Route::get('columns/add/{id}','ColumnPlusController@add');
Route::resource('articles', 'ArticleController');
Route::resource('create', 'ArticleController@create');
Route::resource('store', 'ArticleController@store');
Route::resource('edit', 'ArticleController@edit');
Route::resource('update', 'ArticleController@update');
Route::get('config', 'systemController@index');
Route::post('config', 'systemController@store');
Route::get('columnsArticle/{id}','ColumnArticleController@index');
Route::resource('banners','BannerController');
Route::resource('create','BannerController@create');
Route::resource('edit', 'BannerController@edit');
Route::resource('update', 'BannerController@update');
});

