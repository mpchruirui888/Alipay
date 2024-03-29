@extends('admin.layout.master')
@section('content')
    <ul class="nav nav-tabs">
        <li class="active"><a href="">标签列表</a></li>
        <li><a href="/admin/tag/create">新增标签</a></li>
    </ul>
    <form action="" method="post" class="form-horizontal" role="form">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">视频标签列表</h3>
            </div>
            <div class="panel-body">
                <table class="table table-hover table-bordered">
                    <thead>
                    <tr>
                        <th width="100">商品名称</th>
                        <th>商品规格</th>
                        <th>数量</th>
                        <th>供货价</th>
                        <th>结算金额</th>
                        <th width="120">操作</th>
                    </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>肥皂</th>
                            <th>100g</th>
                            <th>1</th>
                            <th>10</th>
                            <th>10</th>
                            <th><button class=" btn btn-info btn-xs">查看</button></th>
                        </tr>
                        <tr>
                            <th>肥皂</th>
                            <th>200g</th>
                            <th>1</th>
                            <th>20</th>
                            <th>20</th>
                            <th><button class=" btn btn-info btn-xs">查看</button></th>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="panel-body">
                <table class="table table-hover table-bordered">
                    <thead>
                    <tr>
                        <th width="100">编号</th>
                        <th>标签</th>
                        <th width="120">操作</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($data as $d)
                        <tr>
                            <td>{{$d['id']}}</td>
                            <td>{{$d['name']}}</td>
                            <td>
                                <div class="btn-group btn-group-sm">
                                    <a href="/admin/tag/{{$d['id']}}/edit" class="btn btn-default">编辑</a>
                                    <a href="javascript:;" onclick="del({{$d['id']}})"
                                       class="btn btn-default">删除</a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </form>
    <script>
        function del(id) {
            require(['util'], function (util) {
                util.confirm('确定删除吗?', function () {
                    $.ajax({
                        url: '/admin/tag/' + id,
                        method: 'DELETE',
                        success: function (response) {
                            util.message(response.message, 'refresh');
                        }
                    })
                })
            })
        }
    </script>
@endsection