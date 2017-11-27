<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Request;

class AppController extends ComController
{
      public function clubs(){
        $data=DB::table('club')->get();
         $output = array('code'=>'1','data' => $data);
        return $this->jsonReturn($output);;
      }
      public function club_search($text){
        $data = DB::select('select * from club where name like ?',[$text]);
        if($data){
          $output = array('code'=>'1','data' => $data);
        }else {
          $output = array('code'=>'0','data' => NULL);
        }
        return $this->jsonReturn($output);;
      }
      public function club_class(){
        $data = DB::table('class')->get();
        if($data){
          $output = array('code'=>'1','data' => $data);
        }else {
          $output = array('code'=>'0','data' => NULL);
        }
        return $this->jsonReturn($output);;
      }
      public function club_video(){
        $data = DB::table('clubvideo')->get();
        if($data){
          $output = array('code'=>'1','data' => $data);
        }else {
          $output = array('code'=>'0','data' => NULL);
        }
        return $this->jsonReturn($output);;
      }

}
