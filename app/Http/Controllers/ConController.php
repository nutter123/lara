<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Request;

class ConController extends BaseController
{
    function objectToArray($object)
    {
        return json_decode(json_encode($object), true);
    }
    function jsonReturn($object){
        return json_encode($object,JSON_UNESCAPED_UNICODE);
    }
    function upload($filePath='Uploads',$file){
   $ret=array([
       'retStatus'=>false,
       'retFileName'=>'',
       'retErrInfo'=>'',
   ]);
   $path =public_path($filePath);
   if (is_dir($path) == false) {
       mkdir(iconv("UTF-8", "GBK", $path), 0777, true);
   }

       $clientName=$file->getClientOriginalName();
       $ext = $file->getClientOriginalExtension();
       $type = $file->getClientMimeType();
       $realPath = $file->getRealPath();
       $filename = date('Y-m-d-H-i-s') . '-' . uniqid() . '.' . $ext;
       $res =$file-> move($path,$filename);
       if($res){
           $ret['retStatus']=true;
             $ret['retFileName']=$filePath.'/'.$filename;
       }else{
           //TODO 上传图片失败
           $ret['retErrInfo']='上传失败';
       }
       return $ret;
}

/**
* @param array $data 提示数组
* @return array 返回数组
*/
function hintMsg($data=['成功'.'/',3,true]){
   $ret = [
       'message' => $data[0],
       'url' => $data[1],
       'jumpTime' => $data[2],
       'status' => $data[3]
   ];
   return $ret;
}
function getadmin(){
  $adminnum = Session::get('admin');

  if($adminnum==NULL){
    return 0;
  }else{
      $admin = DB::table('clubadmin')->where(array("adminnum" => $adminnum))->first();
      return $admin;
  }

}
}
