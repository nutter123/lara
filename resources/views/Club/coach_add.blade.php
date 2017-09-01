@extends('public.top')
@section('style')
    @stop

@section('content')
<!-- /section:basics/sidebar -->
<div class="main-content">
  <div class="breadcrumbs" id="breadcrumbs">
    <ul class="breadcrumb">
      <li>
        <i class="ace-icon fa fa-home home-icon"></i>
        <a href="index.html">教练管理</a>
      </li>
      <li>
        <a href="javascript:void(0)">教练添加</a>
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
								<form class="form-horizontal" role="form">
									<!-- #section:elements.form -->
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 教练名称</label>

										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="输入名称" class="col-xs-10 col-sm-5" />
										</div>
									</div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-tags">教练类别</label>
										<div class="col-sm-2">
											<div class="pos-rel">
												<select class="form-control" id="form-field-select-1">
																<option value="">请选择类型</option>
																<option value="AL">射箭</option>
																<option value="AK">踢球</option>
															</select>
											</div>
										</div>
									</div>
                  
                  <div class="form-group">
                    <label class="col-sm-3 control-label no-padding-right" for="limited">简介</label>
                    <div class="col-sm-4">
                      <div class="pos-rel">
                        <textarea class="form-control limited autosize-transition" id="limited" maxlength="50"></textarea>
                      </div>
                    </div>
                  </div>

									<div class="clearfix form-actions">
										<div class="col-md-offset-3 col-md-9">
											<button class="btn btn-info" type="button">
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
    @stop
</html>
