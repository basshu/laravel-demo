@extends('blog.layout.master')
@section('title','首页')
@section('content')
    <div class="alert_msg">
        <div class="alert alert-success" role="alert">admin, 欢迎开始您的博客之旅！</div>
    </div>
    <div class="col-sm-8 blog-main">

        <div class="blog-post">
            <h2 class="blog-post-title"><a href="{{url('blog/show')}}">用户访问数据是否影响搜索排名？</a></h2>
            <p class="blog-post-meta">发表于 2017年03月16日 by <a href="./user.html">Mark</a></p>
            <p>搜索工程师都明确否认用户访问和行为数据是排名的直接因素。而我们SEO观察到的情况是，用户访问和行为至少会间接影响页面排名。</p>
            <hr>
            <p>用户访问数据是否影响页面的搜索排名？这是个老话题。早在11年前，我就在SEO每天一贴写过Google可能在排名算法中考虑用户行为方式。</p>
            <blockquote>
                <p>不过，到目前为止，所有就这个问题发过言的<strong>Google</strong>工程师都明确否认用户访问和行为数据是排名的直接因素。这里要注意他们的用词，通常他们否认的是 – 直接因素。而我们SEO观察到的情况是，用户访问和行为至少会间接影响页面排名。</p>
            </blockquote>
            <p>首先，搜索结果中页面的点击率肯定是影响排名的，不然就没有前几年的百度点击器和现在的所谓百度快排了。Google也同样，虽然公开场合都否认是直接因素，但数年前就有Google工程师当面和我说过，点击率是会影响排名的。也许不是直接排名因素，但可以是校验因素。</p>
        </div><!-- /.blog-post -->

        <div class="blog-post">
            <h2 class="blog-post-title"><a href="{{url('blog/show')}}">用户访问数据是否影响搜索排名？</a></h2>
            <p class="blog-post-meta">发表于 2017年03月16日 by <a href="./user.html">Mark</a></p>
            <p>搜索工程师都明确否认用户访问和行为数据是排名的直接因素。而我们SEO观察到的情况是，用户访问和行为至少会间接影响页面排名。</p>
            <hr>
            <p>用户访问数据是否影响页面的搜索排名？这是个老话题。早在11年前，我就在SEO每天一贴写过Google可能在排名算法中考虑用户行为方式。</p>
            <blockquote>
                <p>不过，到目前为止，所有就这个问题发过言的<strong>Google</strong>工程师都明确否认用户访问和行为数据是排名的直接因素。这里要注意他们的用词，通常他们否认的是 – 直接因素。而我们SEO观察到的情况是，用户访问和行为至少会间接影响页面排名。</p>
            </blockquote>
            <p>首先，搜索结果中页面的点击率肯定是影响排名的，不然就没有前几年的百度点击器和现在的所谓百度快排了。Google也同样，虽然公开场合都否认是直接因素，但数年前就有Google工程师当面和我说过，点击率是会影响排名的。也许不是直接排名因素，但可以是校验因素。</p>
        </div><!-- /.blog-post -->

        <div class="blog-post">
            <h2 class="blog-post-title"><a href="{{url('blog/show')}}">用户访问数据是否影响搜索排名？</a></h2>
            <p class="blog-post-meta">发表于 2017年03月16日 by <a href="./user.html">Mark</a></p>
            <p>搜索工程师都明确否认用户访问和行为数据是排名的直接因素。而我们SEO观察到的情况是，用户访问和行为至少会间接影响页面排名。</p>
            <hr>
            <p>用户访问数据是否影响页面的搜索排名？这是个老话题。早在11年前，我就在SEO每天一贴写过Google可能在排名算法中考虑用户行为方式。</p>
            <blockquote>
                <p>不过，到目前为止，所有就这个问题发过言的<strong>Google</strong>工程师都明确否认用户访问和行为数据是排名的直接因素。这里要注意他们的用词，通常他们否认的是 – 直接因素。而我们SEO观察到的情况是，用户访问和行为至少会间接影响页面排名。</p>
            </blockquote>
            <p>首先，搜索结果中页面的点击率肯定是影响排名的，不然就没有前几年的百度点击器和现在的所谓百度快排了。Google也同样，虽然公开场合都否认是直接因素，但数年前就有Google工程师当面和我说过，点击率是会影响排名的。也许不是直接排名因素，但可以是校验因素。</p>
        </div><!-- /.blog-post -->

        <nav>
            <ul class="pager">
                <li><a href="#">上一页</a></li>
                <li><a href="#">下一页</a></li>
            </ul>
        </nav>

    </div><!-- /.blog-main -->

    @include('blog.block.sider')
@endsection


@section('footer')
    友情链接;
    @parent
@endsection


