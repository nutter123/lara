@extends('public.admin_top')
@section('style')
    @stop

@section('content')
<!-- /section:basics/sidebar -->
<div class="main-content">
  <div class="breadcrumbs" id="breadcrumbs">
    <ul class="breadcrumb">
      <li>
        <i class="ace-icon fa fa-home home-icon"></i>
        <a href="index.html">管理员</a>
      </li>
      <li>
        <a href="javascript:void(0)">管理员添加/修改</a>
      </li>
    </ul><!-- /.breadcrumb -->

    <!-- #section:basics/content.searchbox -->
    <div class="nav-search" id="nav-search">
      <form class="form-search">
        <span class="input-icon">
          <input type="text" placeholder="请输入关键字 ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
          <i class="ace-icon fa fa-search nav-search-icon"></i>
        </span>
      </form>
    </div><!-- /.nav-search -->
  </div>
  <div class="page-content">

					<div class="page-content-area">

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
                @if($data)
                  <form class="form-horizontal" role="form" action="{{url('Admin/admin_edit')}}" method="post">

                @else
								<form class="form-horizontal" role="form" action="{{url('Admin/admin_add')}}" method="post">
                @endif
                  <input type="text" name="id" value="{{$data['id']}}" style="display:none">
									<!-- #section:elements.form -->
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 管理员名称</label>

										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="输入名称" value="{{$data['adminname']}}" name="adminname" class="col-xs-10 col-sm-5" />
										</div>
									</div>
                  <div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 管理员账号</label>

										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="输入账号" value="{{$data['adminnum']}}" name="adminnum" class="col-xs-10 col-sm-5" />
										</div>
									</div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 管理员密码</label>

                    <div class="col-sm-9">
                      <input type="password" id="form-field-1" placeholder="输入密码" value="{{$data['password']}}" name="password" class="col-xs-10 col-sm-5" />
                    </div>
                  </div>
						      <input type="hidden" name="_token" value="{{csrf_token()}}"/>
									<div class="clearfix form-actions">
										<div class="col-md-offset-3 col-md-9">
											<button class="btn btn-info" type="submit">
												<i class="ace-icon fa fa-check bigger-110"></i>
												立即提交
											</button>

											&nbsp; &nbsp; &nbsp;
											<button class="btn" type="reset">
												<i class="ace-icon fa fa-undo bigger-110"></i>
												重置
											</button>
										</div>
									</div>
								</form>

							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content-area -->
				</div><!-- /.page-content -->
  </div>
    @stop
</html>
