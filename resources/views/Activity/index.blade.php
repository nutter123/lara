@extends('public.index')
@section('style')
    @stop

@section('content')
    <div class="view-product">
        <div class="authority">
            <div class="authority-head">
                <div class="manage-head">
                    <h6 class="layout padding-left manage-head-con">活动管理
                        <span class="fr text-small text-normal padding-top">添加活动</span>
                    </h6>
                </div>
            </div>
            <div class="authority-content">
                <div class="box-body no-padding">
                    <table class="table table-condensed">
                        <tbody>
                        <tr style="font-size: 1vw;">
                            <th>活动名称</th>
                            <th>海报</th>
                            <th>活动简介</th>
                            <th>发布时间</th>
                            <th>操作</th>
                        </tr>
                        @for($i=0;$i<count($data);$i++)
                            <tr>
                                <td>{{$data[$i]['activityname']}}</td>
                                <td>{{$data[$i]['photo']}}</td>
                                <td>{{$data[$i]['intro']}}</td>
                                <td>{{$data[$i]['createtime']}}</td>
                                <td>

                                </td>
                            </tr>
                        @endfor
                        </tbody>
                    </table>
                </div>
                <div class="show-page padding-big-right">
                    <div class="page">
                        <div class="page">
                            <ul class="offcial-page margin-top margin-big-right">
                                <li>共<em class="margin-small-left margin-small-right">1</em>条数据</li>
                                <li>每页显示<em class="margin-small-left margin-small-right">15</em>条</li>
                                <li><a class="next disable">上一页</a></li>
                                <li></li>
                                <li><a class="next disable">下一页</a></li>
                                <li><span class="fl">共<em class="margin-small-left margin-small-right">1</em>页</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    @stop
</html>
