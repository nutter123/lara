@extends('public.top')
@section('style')
    @stop

@section('content')
<div class="main-content">
      <h4 class="header smaller lighter grey" style="margin:12px">俱乐部信息</h3>
      <div class="center">
        <span class="profile-picture">
          <img style="width:120px" class="editable img-responsive" alt="Alex's Avatar" id="avatar2" src="{{asset($data['pic'])}}" />
        </span>

        <div class="space space-4"></div>
      </div><!-- /span -->

      <div class="center">
        <h4 class="blue">
          <span class="middle">{{$data['head']}}</span>

          <span class="label label-purple arrowed-in-right">
            <i class="icon-circle smaller-80 align-middle"></i>
            在线
          </span>
        </h4>

        <div class="profile-user-info">
          <div class="profile-info-row">
            <div class="profile-info-name"> 名称 </div>

            <div class="profile-info-value">
              <span>{{$data['name']}}</span>
            </div>
          </div>

          <div class="profile-info-row">
            <div class="profile-info-name"> 地址 </div>

            <div class="profile-info-value">
              <i class="icon-map-marker light-orange bigger-110"></i>
              <span>{{$data['address']}}</span>
            </div>
          </div>

          <div class="profile-info-row">
            <div class="profile-info-name"> 电话 </div>

            <div class="profile-info-value">
              <span>{{$data['phone']}}</span>
            </div>
          </div>

          <div class="profile-info-row">
            <div class="profile-info-name"> 简介 </div>

            <div class="profile-info-value">
              <span>{{$data['intro']}}</span>
            </div>
          </div>
        </div>

        <div class="hr hr-8 dotted"></div>

        <div class="profile-user-info">
          <div class="profile-info-row">
            <div class="profile-info-name"> 创建时间 </div>

            <div class="profile-info-value">
              {{$data['time']}}
            </div>
          </div>
        </div>
        <div class="center  form-actions">
          <button class="btn btn-white btn-pink btn-round">
            <i class="ace-icon fa fa-pencil red2"></i>
            <a href="{{url('Club/club_editview')}}">修改</a>
          </button>
        </div>

      </div><!-- /row-fluid -->

			</div><!-- /.main-content -->
    @stop

</html>
