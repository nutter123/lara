@extends('public.top')
@section('style')
    @stop

@section('content')
<div class="view-product">
  <div class="info-center">
    <div class=" padding-big-tb manage-head">
      <h6 class="padding-left manage-head-con">教练管理<span class="own text-normal">拥有教练：<em class="text-roseo h2 margin-right">{{count($data)}}</em>名</span></h6>
    </div>

    <div class="offcial-table table-margin clearfix">
      <div class="tr-th clearfix">
        <div class="th w20 text-center">
          姓名
        </div>
        <div class="th w40 text-center">
          简介
        </div>
        <div class="th w20 text-center">
          级别
        </div>
        <div class="th w20 text-center">
          操作
        </div>
      </div>
      @for ($i = 0, $len = count($data); $i < $len; $i++)
        <div class="tr clearfix border-bottom-none">
          <div class="td w20 text-center h5">
            {{$data[$i]['name']}}
          </div>
          <div class="td w40 text-center text-roseo">
            {{$data[$i]['intro']}}
          </div>
          <div class="td w20 text-center">
            {{$data[$i]['num']}}
          </div>
          <div class="td w20 text-center">
            <a class="h5 f1" href="coach_delete/{{$data[$i]['id']}}">删除</a>
          </div>
        @endfor
      </div>
    </div>
  </div>
  <div class="page">
    <ul class="offcial-page margin-top margin-big-right">
      <li>共<em class="margin-small-left margin-small-right">2</em>条数据</li>
      <li>每页显示<em class="margin-small-left margin-small-right">15</em>条</li>
      <li><a class="next disable">上一页</a></li>
      <li></li>
      <li><a class="next disable">下一页</a></li>
      <li><span class="fl">共<em class="margin-small-left margin-small-right">1</em>页</span></li>
    </ul>
  </div>
</div>
    @stop
</html>
