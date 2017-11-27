<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Request;

class IndexController extends ConController
{
      public function clubadmin_index(){
        $data = 0;
        return view('Index/login')->with('data',$data);
      }
      public function admin_index(){
        $data = 1;
          return view('Index/login')->with('data',$data);
      }
      public function superadmin_index(){
        $data = 2;
          return view('Index/login')->with('data',$data);
      }
        public function clubadmin_login(Request $request){
          $admin = Request::input('name');
          $pass = md5(Request::input('password'));
          $result = DB::select('select * from clubadmin where adminnum = ?&&password = ?',[$admin,$pass]);
          if($result==null){
            return "密码错误";
          }else {
            Session::put('admin',$admin);
            return redirect()->action('ClubController@coach_list');
        }

      }
      public function admin_login(Request $request){
        $admin = Request::input('name');
        $pass = md5(Request::input('password'));
        $result = DB::select('select * from admin where adminnum = ?&&password = ?',[$admin,$pass]);
        if($result==null){
          return "密码错误";
        }else {
          Session::put('admin',$admin);
          return redirect()->action('ClubController@coach_list');
      }

    }
    public function superadmin_login(Request $request){
      $admin = Request::input('name');
      $pass = md5(Request::input('password'));
      $result = DB::select('select * from superadmin where adminnum = ?&&password = ?',[$admin,$pass]);
      if($result==null){
        return "密码错误";
      }else {
        Session::put('admin',$admin);
        return redirect()->action('AdminController@admin_index');
    }

  }
  public function loginout(){
    session()->flush();
    return redirect()->action('IndexController@admin_index');
  }
}
