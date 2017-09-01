@extends('public.top')
@section('style')
    @stop

@section('content')
<div class="main-content">
				<div class="breadcrumbs" id="breadcrumbs">
					<ul class="breadcrumb">
						<li>
							<i class="ace-icon fa fa-home home-icon"></i>
							<a href="index.html">视频管理</a>
						</li>
						<li>
							<a href="elements.html">视频列表</a>
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

					<!-- /section:settings.box -->
					<div class="page-content-area">

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								<div class="row">
									<div class="col-xs-12">
										<table id="sample-table-1" class="table table-striped table-bordered table-hover">
											<thead>
												<tr>
                          <th>视频海报</th>
													<th>视频名称</th>
													<th>视频简介</th>
													<th class="hidden-480">视频网址</th>
													<th class="hidden-480">操作</th>
												</tr>
											</thead>

											<tbody>
                        @for ($i = 0, $len = count($data); $i < $len; $i++)
												<tr>
                          <td>
														<img src="{{$data[$i]['pic']}}" alt=""></a>
													</td>
													<td>
														{{$data[$i]['name']}}
													</td>
													<td>{{$data[$i]['intro']}}</td>

													<td class="hidden-480">
														<a href="{{$data[$i]['address']}}">{{$data[$i]['address']}}</a>
													</td>
													<td>
														<div class="hidden-sm hidden-xs btn-group">


															<button class="btn btn-xs btn-info">
																<i class="ace-icon fa fa-pencil bigger-120"></i>
															</button>

															<button class="btn btn-xs btn-danger" onclick="coach_delete/{{$data[$i]['id']}}">
																<i class="ace-icon fa fa-trash-o bigger-120"></i>
															</button>
														</div>
													</td>
												</tr>
                        @endfor
											</tbody>
										</table>
									</div><!-- /.span -->
								</div><!-- /.row -->

								<div class="hr hr-18 dotted hr-double"></div>

							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content-area -->
				</div><!-- /.page-content -->
			</div><!-- /.main-content -->

    @stop
</html>
