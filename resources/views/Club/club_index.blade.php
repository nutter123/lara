@extends('public.top')
@section('style')
    @stop

@section('content')
<div class="main-content">
  <div class="row" >
                      <div class="center">
                        <span class="profile-picture">
                          <img class="editable img-responsive" alt="Alex's Avatar" id="avatar2" src="{{asset('assets/avatars/profile-pic.jpg')}}" />
                        </span>

                        <div class="space space-4"></div>
                      </div><!-- /span -->

                      <div class="center">
                        <h4 class="blue">
                          <span class="middle">{{$data[0]['head']}}</span>

                          <span class="label label-purple arrowed-in-right">
                            <i class="icon-circle smaller-80 align-middle"></i>
                            在线
                          </span>
                        </h4>

                        <div class="profile-user-info">
                          <div class="profile-info-row">
                            <div class="profile-info-name"> 名称 </div>

                            <div class="profile-info-value">
                              <span>{{$data[0]['name']}}</span>
                            </div>
                          </div>

                          <div class="profile-info-row">
                            <div class="profile-info-name"> 地址 </div>

                            <div class="profile-info-value">
                              <i class="icon-map-marker light-orange bigger-110"></i>
                              <span>{{$data[0]['address']}}</span>
                            </div>
                          </div>

                          <div class="profile-info-row">
                            <div class="profile-info-name"> 电话 </div>

                            <div class="profile-info-value">
                              <span>{{$data[0]['phone']}}</span>
                            </div>
                          </div>

                          <div class="profile-info-row">
                            <div class="profile-info-name"> 简介 </div>

                            <div class="profile-info-value">
                              <span>{{$data[0]['intro']}}</span>
                            </div>
                          </div>
                        </div>

                        <div class="hr hr-8 dotted"></div>

                        <div class="profile-user-info">
                          <div class="profile-info-row">
                            <div class="profile-info-name"> 创建时间 </div>

                            <div class="profile-info-value">
                              {{$data[0]['time']}}
                            </div>
                          </div>
                        </div>
                      </div><!-- /span -->
                    </div><!-- /row-fluid -->
			</div><!-- /.main-content -->

    @stop
</html>
