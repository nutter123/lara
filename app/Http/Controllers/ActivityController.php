<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\DB;

class ActivityController extends ComController
{
      public function index(){
          $res=$this->objectToArray(DB::table('activities')->get());

          return view('Activity/index')->with('data',$res);
      }
    public function editActivityClass()
    {

        $input = Request::all();
        $date['activityname'] = $input['activity_name'];
        $res = DB::table('activities')->where(array("id" => $input['activity_id']))->update($date);
        return back()->with('success', '修改成功');
    }
}
