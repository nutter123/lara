<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Request;
class ClubController extends ConController
{

      public function club_index(){
          $admin=$this->getadmin();
        if($admin){
          $id = $admin->club_id;
          $adminname=$admin->adminname;
          $res=$this->objectToArray(DB::table('club')->find($id));
          return view('Club/club_index')->with('admin',$adminname)->with('data',$res);
        }else {
          return  redirect('/Index/clubadmin_index');
        }
      }
      public function club_editview(){
          $admin=$this->getadmin();
        if($admin){
          $id = $admin->club_id;
          $adminname=$admin->adminname;
          $res=$this->objectToArray(DB::table('club')->find($id));
          return view('Club/club_edit')->with('admin',$adminname)->with('data',$res);
        }else {
          return  redirect('/Index/clubadmin_index');
        }
      }
      public function club_edit(Request $request)
      {
        $input = Request::all();
        $id= $input['id'];
        $out['name'] = $input['name'];
        $out['address'] = $input['address'];
        $out['phone'] = $input['phone'];
        $out['intro'] = $input['intro'];
        $files=Input::file();
        var_dump($out);
        $ret=$this->upload($filePath='Uploads',$files['pic']);
        if($ret['retStatus']){
          $out['pic'] = $ret['retFileName'];
          $picArray = $this->objectToArray(DB::table('club')->where(array('id' => $id))->first());
          $oldPic=$picArray['pic'];
           $res=DB::table('club')->where(array("id"=>$input['id']))->update($out);
           if($res){
             if(unlink($oldPic)){
                 echo "delete oldPic success";
             }
             return redirect('/Club/club_index');
           }else {
               //TODO 修改失败 删除图片;
               if(unlink($out['pic'])){
                   echo "update failure, delete uploadPic success";
               }
               return redirect('/Club/club_editview')->with($this->hintMsg(array('success', 'Activity/index', 4, true)));
           }
         }else{
             return  redirect('/Club/club_editview')->with($this->hintMsg(array('success','Club/video_list',4,true)));
         }

      }
      public function coach_list(){
        $admin=$this->getadmin();
        if($admin){
        $id = $admin->club_id;
        $adminname=$admin->adminname;
          $res=$this->objectToArray(DB::table('coach')->where(array('club_id' => $id))->get());
          return view('Club/coach_list')->with('data',$res)->with('admin',$adminname);
        }else{
          return  redirect('/Index/clubadmin_index');
        }
      }

      public function coach_delete($id){
        $res = DB::delete('delete from coach where id = ?',[$id]);
        if($res==1){
          return "删除成功";
        }else{
          return "删除失败";
        }
      }
      public function coach_editview($id){

        $admin=$this->getadmin();
        if($admin){
        $adminname=$admin->adminname;
        $res = $this->objectToArray(DB::table('coach')->find($id));
        return view('Club/coach_add')->with('data',$res)->with('admin',$adminname);
      }else{
        return  redirect('/Index/clubadmin_index');
      }
      }
      public function coach_edit(Request $request)
      {
        $input = Request::all();
        $out['name'] = $input['name'];
        $out['type'] = $input['type'];
        $out['intro'] = $input['intro'];
        $res=DB::table('coach')->where(array("id"=>$input['id']))->update($out);
        if($res){
            return back()->with('success', '修改成功');
        }else{
            return back()->with('error', '修改失败');
        }
      }
      public function coach_addview(){

        $admin=$this->getadmin();
        if($admin){
        $id = $admin->club_id;
        $adminname=$admin->adminname;
        $data = -1;
          return view('Club/coach_add')->with('data',$data)->with('admin',$adminname);
        }else{
          return  redirect('/Index/clubadmin_index');
        }
      }
      public function coach_add(Request $request){
        $admin=$this->getadmin();
        $out['club_id'] = $admin->club_id;
        $input = Request::all();
        $out['name'] = $input['name'];
        $out['type'] = $input['type'];
        $out['intro'] = $input['intro'];
        $res = DB::table('coach')->insert($out);
       return back()->with('success', '添加成功');
      }

      public function video_list(){

        $admin=$this->getadmin();
        if($admin){
        $id = $admin->club_id;
        $adminname=$admin->adminname;
          $res=$this->objectToArray(DB::table('clubvideo')->where(array('club_id' => $id))->get());
          return view('Club/video_list')->with('data',$res)->with('admin',$adminname);
        }else{
          return  redirect('/Index/clubadmin_index');
        }
      }
      public function video_addview(){

        $admin=$this->getadmin();
        if($admin){
        $id = $admin->club_id;
        $adminname=$admin->adminname;
        $data = -1;
          return view('Club/video_add')->with('data',$data)->with('admin',$adminname);
        }else{
          return  redirect('/Index/clubadmin_index');
        }
      }
      public function video_add()
      {
          $admin=$this->getadmin();
          $id = $admin->club_id;
          $date['club_id'] = $id;
          $input = Request::all();
          $date['name'] = $input['name'];
          $date['intro'] = $input['intro'];
          $files=Input::file();

            $address=$this->upload($filePath='Uploads',$files['address']);
            $pic=$this->upload($filePath='Uploads',$files['pic']);

          if($address['retStatus']&&$pic['retStatus']){
            $date['pic']=$pic['retFileName'];
            $date['address']=$address['retFileName'];
            $res =DB::table('clubvideo')->insert($date);
            if($res){
                return  redirect('/Club/video_list')->with($this->hintMsg(array('success','Club/video_list',4,true)));
            }else{
                //TODO 修改失败 删除图片;
                return  redirect('/Club/video_list')->with($this->hintMsg(array('success','Club/video_list',4,true)));
            }
          }else{
              return  redirect('/Club/video_list')->with($this->hintMsg(array('success','Club/video_list',4,true)));
          }
      }
      public function video_editview($id){

        $admin=$this->getadmin();
        $adminname=$admin->adminname;
        $res = $this->objectToArray(DB::table('clubvideo')->find($id));
        return view('Club/video_add')->with('data',$res)->with('admin',$adminname);
      }
      public function video_edit(Request $request)
      {
        $input = Request::all();
        $id= $input['id'];
        $date['name'] = $input['name'];
        $date['intro'] = $input['intro'];
        $date['address'] = $input['address'];
        $files=Input::file();
        $ret=$this->upload($filePath='Uploads',$files['pic']);
        if($ret['retStatus']){
            $data['pic']=$ret['retFileName'];
            $picArray = $this->objectToArray(DB::table('clubvideo')->where(array('id' => $id))->first());
            $oldPic=$picArray['pic'];
                $res = DB::table('clubvideo')->where(array('id' => $id))->update($data);
                if ($res) {
                    if(unlink($oldPic)){
                        echo "delete oldPic success";
                    }
                    return redirect('/Club/video_list')->with($this->hintMsg(array('success', 'Activity/index', 4, true)));
                } else {
                    //TODO 修改失败 删除图片;
                    if(unlink($data['pic'])){
                        echo "update failure, delete uploadPic success";
                    }
                    return back();
                }
        }else{
            return back();
        }
      }
      public function video_delete($id){

        $picArray = $this->objectToArray(DB::table('clubvideo')->where(array('id' => $id))->first());
        $oldPic=$picArray['pic'];
        $oldaddress=$picArray['address'];
        $rus = unlink($oldPic);
        $russ = unlink($oldaddress);
        $res = DB::delete('delete from clubvideo where id = ?',[$id]);
        if($res==1&&$rus ==1&&$russ==1){
            return back()->with('success', '删除成功');
         }else{
           return back()->with('success', '删除失败');
         }
      }
}
