@extends('public.top')
@section('style')
    @stop

@section('content')
<div class="main-content">
      <h4 class="header smaller lighter grey" style="margin:12px">修改信息</h3>
      <form class="" action="{{url('Club/club_edit')}}" method="post" enctype="multipart/form-data">
      <div class="center">
        <span class="profile-picture">
          <img style="width:120px" class="editable img-responsive" alt="Alex's Avatar" id="avatar2" src="{{asset($data['pic'])}}" />
        </span>
        <div class=>
            <input style="margin: auto;padding-left: 120px;" name="pic" type="file" multiple=""/>
        </div>
        <div class="space space-4"></div>
      </div><!-- /span -->
      <div class="center">
          <input type="hidden" name="id" value="{{$data['id']}}"/>
          <div class="profile-user-info">
            <div class="profile-info-row">
              <div class="profile-info-name"> 名称 </div>

              <div class="profile-info-value">
                <input type="text" id="form-field-1" placeholder="输入名称" name="name" value="{{$data['name']}}"  />
              </div>
            </div>

            <div class="profile-info-row">
              <div class="profile-info-name"> 地址 </div>

              <div class="profile-info-value">
                <input type="text" id="form-field-1" placeholder="输入名称" name="address" value="{{$data['address']}}"  />
              </div>
            </div>

            <div class="profile-info-row">
              <div class="profile-info-name"> 电话 </div>

              <div class="profile-info-value">
                <input type="text" id="form-field-1" placeholder="输入名称" name="phone" value="{{$data['phone']}}"  />
              </div>
            </div>

            <div class="profile-info-row">
              <div class="profile-info-name"> 简介 </div>

              <div class="profile-info-value">
                <textarea name="intro" style="text-align: center;"  id="limited" maxlength="50">{{$data['intro']}}</textarea>
              </div>
            </div>
          </div>

          <div class="hr hr-8 dotted"></div>
          <input type="hidden" name="_token" value="{{csrf_token()}}"/>
          <div class="center  form-actions">
            <button class="btn btn-white btn-pink btn-round" type="submit">
              <i class="ace-icon fa fa-pencil red2"></i>
              修改
            </button>
          </div>
        </form>
      </div><!-- /row-fluid -->

			</div><!-- /.main-content -->
      		<script src="{{asset('assets/js/dropzone.min.js')}}"></script>
          <script type="text/javascript">
			jQuery(function($){

			Dropzone.autoDiscover = false;
			try {
			  var myDropzone = new Dropzone("#dropzone" , {
			    paramName: "file", // The name that will be used to transfer the file
			    maxFilesize: 0.5, // MB

				addRemoveLinks : true,
				dictDefaultMessage :
				'<span class="bigger-150 bolder"><i class="ace-icon fa fa-caret-right red"></i> 从电脑上拖拽文件到这里</span>  \
				<span class="smaller-80 grey">(或者点击这里上传文件)</span> <br /> \
				<i class="upload-icon ace-icon fa fa-cloud-upload blue fa-3x"></i>'
			,
				dictResponseError: '上传错误!',

				//change the previewTemplate to use Bootstrap progress bars
				previewTemplate: "<div class=\"dz-preview dz-file-preview\">\n  <div class=\"dz-details\">\n    <div class=\"dz-filename\"><span data-dz-name></span></div>\n    <div class=\"dz-size\" data-dz-size></div>\n    <img data-dz-thumbnail />\n  </div>\n  <div class=\"progress progress-small progress-striped active\"><div class=\"progress-bar progress-bar-success\" data-dz-uploadprogress></div></div>\n  <div class=\"dz-success-mark\"><span></span></div>\n  <div class=\"dz-error-mark\"><span></span></div>\n  <div class=\"dz-error-message\"><span data-dz-errormessage></span></div>\n</div>"
			  });
			} catch(e) {
			  alert('Dropzone.js不支持太旧的浏览器!');
			}

			});
		</script>
    @stop

</html>
