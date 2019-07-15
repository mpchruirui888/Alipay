{{--<!DOCTYPE html>--}}
{{--<html lang="en">--}}
{{--<head>--}}
    {{--<meta charset="utf-8"/>--}}
    {{--<title>后盾人 - houdunren.com</title>--}}
    {{--<meta name="viewport"--}}
          {{--content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">--}}
    {{--<link href="/node_modules/hdjs/css/bootstrap.min.css" rel="stylesheet">--}}
    {{--<link href="/node_modules/hdjs/css/font-awesome.min.css" rel="stylesheet">--}}
    {{--<link href="/css/hdcms.css" rel="stylesheet">--}}
{{--</head>--}}
{{--<body class="hdcms-login">--}}
{{--<div class="container logo">--}}
    {{--<div style="background: url('http://www.houdunren.com/resource/images/logo.png') no-repeat; background-size: contain;height: 60px;"></div>--}}
{{--</div>--}}
{{--<div class="container well">--}}
    {{--<div class="row ">--}}
        {{--<div class="col-md-6">--}}
            {{--<form method="post" action="">--}}
                {{--{{ csrf_field() }}--}}
                {{--<div class="form-group ">--}}
                    {{--<label>帐号</label>--}}
                    {{--<div class="input-group">--}}
                        {{--<div class="input-group-addon"><i class="fa fa-w fa-user"></i></div>--}}
                        {{--<input type="text" name="username" class="form-control input-lg" placeholder="请输入帐号" value="admin">--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="form-group ">--}}
                    {{--<label>密码</label>--}}
                    {{--<div class="input-group">--}}
                        {{--<div class="input-group-addon"><i class="fa fa-w fa-key"></i></div>--}}
                        {{--<input type="text" name="password" class="form-control input-lg" placeholder="请输入密码" value="123456">--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--@if(session('error'))--}}
                    {{--<div class="alert alert-danger">--}}
                        {{--{{session('error')}}--}}
                    {{--</div>--}}
                {{--@endif--}}
                    {{--<button type="submit" class="btn btn-primary btn-lg">登录</button>--}}
            {{--</form>--}}
        {{--</div>--}}
        {{--<div class="col-md-6">--}}
            {{--<div style="background: url('http://www.houdunren.com/resource/images/houdunwang.jpg');background-size:100% ;height:230px;"></div>--}}
        {{--</div>--}}
    {{--</div>--}}
    {{--<div class="copyright">--}}
        {{--Powered by hdcms v2.0 © 2014-2019 www.hdcms.com--}}
    {{--</div>--}}
{{--</div>--}}
{{--</body>--}}
{{--</html>--}}

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>后盾人 - houdunren.com</title>
    <meta name="viewport"
    content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link href="/node_modules/hdjs/css/bootstrap.min.css" rel="stylesheet">
    <link href="/node_modules/hdjs/css/font-awesome.min.css" rel="stylesheet">
    <link href="/css/hdcms.css" rel="stylesheet">

    <link href="/css/font-awesome.css" rel="stylesheet">

    <link href="/css/animate.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
    <script>if(window.top !== window.self){ window.top.location = window.location;}</script>
    <!-- 全局js -->
    <script src="/node_modules/hdjs/js/jquery.min.js"></script>
    <script src="/node_modules/hdjs/js/bootstrap.min.js"></script>
</head>
<body class="gray-bg">
<div class="middle-box text-center loginscreen  animated fadeInDown">
    <div>
        <div>
            <div class="text-center">
                <img alt="image" class="img-circle m-t-sm img-responsive" src="/image/header.png">
            </div>
        </div>
        <h3>Uncle</h3>
        <hr>
        <form class="m-t" role="form" action="" method="post">
            {{ csrf_field() }}
            <div class="form-group">
                <input type="text" class="form-control" placeholder="用户名" required="" name="username" value="admin">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" placeholder="密码" required="" name="password" value="123456">
            </div>
            @if(session('error'))
                <div class="alert alert-danger">
                    {{session('error')}}
                </div>
            @endif
            <button type="submit" class="btn btn-primary block full-width m-b">登 录</button>
            <p class="text-muted text-center"> <a href="login.html#"><small>忘记密码了？</small></a> | <a href="register.html">注册一个新账号</a>
            </p>
        </form>
    </div>
</div>

</body>
</html>


