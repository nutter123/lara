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
Auth::routes();
Route::get('/', ['uses'=>'IndexController@clubadmin_index']);
//any 接受任何类型请求
Route::any('Index/admin_index',['uses'=>'IndexController@admin_index'] );
Route::any('Index/clubadmin_index',['uses'=>'IndexController@clubadmin_index'] );
Route::any('Index/superadmin_index',['uses'=>'IndexController@superadmin_index'] );
Route::any('Index/loginout',['uses'=>'IndexController@loginout'] );
Route::post('Index/clubadmin_login',['uses'=>'IndexController@clubadmin_login']  );
Route::post('Index/admin_login',['uses'=>'IndexController@admin_login']  );
Route::post('Index/superadmin_login',['uses'=>'IndexController@superadmin_login'] );

Route::any('Club/club_index',['uses'=>'ClubController@club_index'] );
Route::any('Club/club_editview',['uses'=>'ClubController@club_editview'] );
Route::any('Club/club_edit',['uses'=>'ClubController@club_edit'] );

Route::any('Club/coach_list',['uses'=>'ClubController@coach_list'] );
Route::any('Club/coach_delete/{id}',['uses'=>'ClubController@coach_delete'] );
Route::any('Club/coach_addview',['uses'=>'ClubController@coach_addview'] );
Route::any('Club/coach_add',['uses'=>'ClubController@coach_add'] );
Route::any('Club/coach_editview/{id}',['uses'=>'ClubController@coach_editview'] );
Route::post('Club/coach_edit',['uses'=>'ClubController@coach_edit'] );

Route::any('Club/video_list',['uses'=>'ClubController@video_list'] );
Route::any('Club/video_addview',['uses'=>'ClubController@video_addview'] );
Route::any('Club/video_delete/{id}',['uses'=>'ClubController@video_delete'] );
Route::any('Club/video_add',['uses'=>'ClubController@video_add'] );
Route::any('Club/video_editview/{id}',['uses'=>'ClubController@video_editview'] );
Route::post('Club/video_edit',['uses'=>'ClubController@video_edit'] );

Route::any('Admin/admin_index',['uses'=>'AdminController@admin_index'] );
Route::any('Admin/admin_addlist',['uses'=>'AdminController@admin_addlist'] );
Route::post('Admin/admin_add',['uses'=>'AdminController@admin_add'] );
Route::any('Admin/admin_delete/{id}',['uses'=>'AdminController@admin_delete'] );
Route::any('Admin/admin_editview/{id}',['uses'=>'AdminController@admin_editview'] );
Route::post('Admin/admin_edit',['uses'=>'AdminController@admin_edit'] );

Route::any('App/clubs',['uses'=>'AppController@clubs'] );
Route::any('App/club/search/{text}',['uses'=>'AppController@club_search'] );
Route::any('App/club/class',['uses'=>'AppController@club_class'] );
Route::any('App/club/video',['uses'=>'AppController@club_video'] );
