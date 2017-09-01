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

Route::get('/', ['uses'=>'IndexController@index']);
//any 接受任何类型请求
Route::any('Activity/index',['uses'=>'ActivityController@index'] );
Route::any('Index/index',['uses'=>'IndexController@index'] );
Route::post('Index/login',['uses'=>'IndexController@login']  );
Route::any('Club/club_index',['uses'=>'ClubController@club_index'] );

Route::any('Club/coach_list',['uses'=>'ClubController@coach_list'] );
Route::any('Club/coach_delete/{id}',['uses'=>'ClubController@coach_delete'] );
Route::any('Club/coach_addview',['uses'=>'ClubController@coach_addview'] );
Route::any('Club/coach_add',['uses'=>'ClubController@coach_add'] );

Route::any('Club/video_list',['uses'=>'ClubController@video_list'] );
Route::any('Club/video_addview',['uses'=>'ClubController@video_addview'] );
Route::any('Club/video_delete',['uses'=>'ClubController@video_delete'] );
Route::any('Club/video_add',['uses'=>'ClubController@video_add'] );
