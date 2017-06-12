<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">brand</a>
        </div>

        <!-- collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">link <span class="sr-only">(current)</span></a></li>
                <li><a href="#">link</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">dropdown <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">action</a></li>
                        <li><a href="#">another action</a></li>
                        <li><a href="#">something else here</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">separated link</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">one more separated link</a></li>
                    </ul>
                </li>
            </ul>
            <form class="navbar-form navbar-left">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="search">
                    <?php echo csrf_field(); ?>
                </div>
                <button type="submit" class="btn btn-default">submit</button>
            </form>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">link</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">dropdown <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">action</a></li>
                        <li><a href="#">another action</a></li>
                        <li><a href="#">something else here</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">separated link</a></li>
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>