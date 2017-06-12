@extends('blog.layout.master')

@section('title','登录页');

@section('content');
<div class="blog-main">
    <div class="row blank-page">
        <div class="col-sm-2"></div>
        <div class="col-sm-8">
            <h2>登录</h2>
            <div class="alert_msg">
                {{--<div class="alert alert-warning" role="alert">用户名密码不能为空</div>--}}
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">登录</div>
                <div class="panel-body">
                    <form class="form-horizontal" method="post" action="{{url('basic2')}}">
                        <?php echo csrf_field(); ?>
                        <div class="form-group">
                            <label for="username" class="col-sm-2 control-label">Username</label>
                            <div class="col-sm-10">
                                <input type="text" name="username" class="form-control" id="username" placeholder="Username">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="password" class="col-sm-2 control-label">Password</label>
                            <div class="col-sm-10">
                                <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox"> Remember me
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-default">Sign in</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-sm-2"></div>
    </div>
</div><!-- /.blog-main -->
@endsection
