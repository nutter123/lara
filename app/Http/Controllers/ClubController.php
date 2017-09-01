<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\DB;

class ClubController extends ComController
{
      public function club_index(){
          $res=$this->objectToArray(DB::table('club')->get());
          return view('Club/club_index')->with('data',$res);
      }
      public function coach_list(){
          $res=$this->objectToArray(DB::table('coach')->get());
          return view('Club/coach_list')->with('data',$res);
      }

      public function coach_delete($id){
        $res = DB::delete('delete from coach where id = ?',[$id]);
        var_dump($res);
        if($res==1){
          return "删除成功";
        }else{
          return "删除失败";
        }
      }
      public function coach_addview(){
          return view('Club/coach_add');
      }
      public function coach_add(){
          $res=$this->objectToArray(DB::table('coach')->get());
          return view('Club/index')->with('data',$res);
      }

      public function video_list(){
          $res=$this->objectToArray(DB::table('clubvideo')->get());
          return view('Club/video_list')->with('data',$res);
      }
      public function video_addview(){
          return view('Club/video_add');
      }
      public function editActivityClass()
      {

          $input = Request::all();
          $date['activityname'] = $input['activity_name'];
          $res = DB::table('activities')->where(array("id" => $input['activity_id']))->update($date);
          return back()->with('success', '修改成功');
      }
}
