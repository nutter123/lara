<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\DB;
use Request;

class IndexController extends ComController
{
      public function index(){
          return view('Index/login');
      }
        public function login(Request $request){
          $admin = Request::input('email');
          $pass = md5(Request::input('password'));
          $result = DB::select('select * from clubadmin where adminnum = ?&&password = ?',[$admin,$pass]);
          if($result==null){
            return "密码错误";
       }else {
            session("adminnumber",$admin);
            return redirect()->action('ClubController@coach_list');
        }

      }
    public function editActivityClass()
    {

        $input = Request::all();
        $date['activityname'] = $input['activity_name'];
        $res = DB::table('activities')->where(array("id" => $input['activity_id']))->update($date);
        return back()->with('success', '修改成功');
    }
}
