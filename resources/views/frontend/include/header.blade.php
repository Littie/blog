<header class="header header-two">
    <div class="header-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-xs-6 col-md-2 col-lg-3 logo-box">
                    <div class="logo">
                        <a href="{{ url('/') }}">
                            <img src="{{ asset('img/logo.jpg') }}" class="logo-img" alt="">
                        </a>
                    </div>
                </div><!-- .logo-box -->

                <div class="col-xs-6 col-md-10 col-lg-9 right-box">
                    <div class="right-box-wrapper">
                        <div class="primary">
                            <div class="navbar navbar-default" role="navigation">
                                <button type="button" class="navbar-toggle btn-navbar collapsed" data-toggle="collapse" data-target=".primary .navbar-collapse">
                                    <span class="text">Menu</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>

                                <nav class="collapse collapsing navbar-collapse">
                                    <ul class="nav navbar-nav navbar-center">
                                        <li class="parent">
                                            <a href="{{ url('/') }}">Home</a>
                                        </li>
                                        <li class="parent">
                                            <a href="#">Blogs</a>
                                        </li>
                                        <li class="parent">
                                            <a href="#">Users</a>
                                        </li>
                                        <li class="parent">
                                            <a href="#">About</a>
                                        </li>
                                        <li class="parent">
                                            <a href="#">Contacts</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div><!-- .primary -->
                    </div>
                </div>
            </div><!--.row -->
        </div>
    </div><!-- .header-wrapper -->
</header><!-- .head -->

