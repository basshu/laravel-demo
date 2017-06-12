<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="./public/favicon.ico">

    <title>@yield('title') - xxx.com</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="{{asset('bootstrap/css/ie10-viewport-bug-workaround.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{asset('bootstrap/css/blog.css')}}" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="{{asset('bootstrap/js/ie-emulation-modes-warning.js')}}"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<div class="blog-masthead">
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <nav class="blog-nav">
                    <a class="blog-nav-item active" href="{{url('blog')}}">首页</a>
                    <a class="blog-nav-item" href="{{url('blog/list')}}">网站运营</a>
                    <a class="blog-nav-item" href="#">网站建设</a>
                    <a class="blog-nav-item" href="#">网站策划</a>
                    <a class="blog-nav-item" href="#">网站设计</a>
                    <a class="blog-nav-item" href="#">网站SEO</a>
                    <a class="blog-nav-item" href="#">案例</a>
                </nav>
            </div>
            <div class="col-sm-4">
                <nav class="blog-nav blog-login">
                    <a class="blog-nav-item" href="./reg.html">注册</a>
                    <a class="blog-nav-item" href="{{route('login111')}}">登录</a>
                </nav>
            </div>
        </div>
    </div>
</div>

<div class="container">

    <div class="blog-header">
        <h1 class="blog-title"><a href="./index.html">我的博客</a></h1>
        <p class="lead blog-description">需要SEO服务、顾问和培训的公司欢迎找我</p>
    </div>

    <div class="row">

        @yield('content')

    </div><!-- /.row -->

</div><!-- /.container -->

@section('footer')
    <footer class="blog-footer">
        <p>2002-2017 @ SEO每天一贴。 版权所有，禁止转载。</a></p>
        <p>
            <a href="#">Back to top</a>
        </p>
    </footer>
@show


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="{{asset('bootstrap/js/jquery.min.js')}}"></script>
<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
<script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="{{asset('bootstrap/js/ie10-viewport-bug-workaround.js')}}"></script>
</body>
</html>