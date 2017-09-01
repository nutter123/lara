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
        <a href="index.html">视频管理</a>
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
								<form class="form-horizontal" role="form" >
									<!-- #section:elements.form -->
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 视频名称</label>

										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="输入名称" class="col-xs-10 col-sm-5" />
										</div>
									</div>

                    <div class="form-group">
  										<label class="col-sm-3 control-label no-padding-right" for="form-field-6">视频网址</label>

  										<div class="col-sm-9">
  											<input data-rel="tooltip" class="col-xs-10 col-sm-5" type="text" id="form-field-6" placeholder="网址" title="" data-placement="bottom" />
  											<span class="help-button" data-rel="popover" data-trigger="hover" data-placement="left" data-content="网址格式：www.baidu.com">?</span>
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

                  <div class="form-group">
                    <label class="col-sm-3 control-label no-padding-right" for="limited">图片</label>
                    <div class="col-sm-4">
                      <div class="fallback">
                        <input name="file" type="file" multiple="" />
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
        <!-- page specific plugin scripts -->
        <script type="text/javascript">
			window.jQuery || document.write("<script src='{{asset('assets/js/jquery.min.js')}}'>"+"<"+"/script>");
		      </script>
        <script src="{{asset('assets/js/dropzone.min.js')}}"></script>

        <!-- ace scripts -->
        <script src="{{asset('assets/js/ace-elements.min.js')}}"></script>
        <script src="{{asset('assets/js/ace.min.js')}}"></script>


    @stop
</html>
