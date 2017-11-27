<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\DB;
use Request;

class AdminController extends ConController
{
      public function admin_index(){
        $admin=$this->getadmin();
        if($admin){
          $res=$this->objectToArray(DB::table('superadmin')->get());
          return view('Admin/admin_index')->with('data',$res);
        }else{
          return  redirect('/Index/superadmin_index');
        }
      }
      public function admin_addlist(){
        $admin=$this->getadmin();
        if($admin){
        $data = -1;
          return view('Admin/admin_addlist')->with('data',$data);
        }else{
          return  redirect('/Index/superadmin_index');
        }
      }
      public function admin_add(Request $request)
      {

          $input = Request::all();
          var_dump($input);
          $date['adminnum'] = $input['adminnum'];
          $date['adminname'] = $input['adminname'];
          $date['password'] = md5($input['password']);
          $res = DB::table('superadmin')->insert($date);
          return back()->with('success', '添加成功');
      }
      public function admin_editview($id){
        $admin=$this->getadmin();
        if($admin){
        $res = $this->objectToArray(DB::table('superadmin')->find($id));
        return view('Admin/admin_addlist')->with('data',$res);
      }else{
        return  redirect('/Index/superadmin_index');
      }
      }
      public function admin_edit(Request $request)
      {
        $input = Request::all();
        $date['adminnum'] = $input['adminnum'];
        $date['adminname'] = $input['adminname'];
        $date['password'] = md5($input['password']);
        $res=DB::table('superadmin')->where(array("id"=>$input['id']))->update($date);
        if($res){
            return back()->with('success', '修改成功');
        }else{
            return back()->with('error', '修改失败');
        }
      }
      public function admin_delete($id){
        $res = DB::delete('delete from superadmin where id = ?',[$id]);
        if($res==1){
          return back()->with('success', '删除成功');
        }else{
          return back()->with('error', '删除失败');
        }
      }
}
