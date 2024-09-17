<!-- header -->
        <header id="header" class="header header-style2 bg-color">
            <div class="container-fluid">
                <div class="row">
                    <div class="header-wrap">
                        <div class="col-md-3">
                            <div class="inner-header">
                                <div class="logo-header">
                                    <a href="#" title="">
                                        <img src="{{ asset('assets/icon/logo-dark.png') }}" alt="images" />
                                    </a>
                                </div>
                                <!-- /#logo -->
                                <div class="btn-menu">
                                    <span></span>
                                </div>
                                <!-- //mobile menu button -->
                            </div>

                        </div>
                        <!-- /.col-md-3 -->
                        <div class="col-md-6">
                            <div class="nav-wrap">
                                <nav id="mainnav" class="mainnav">
                                    <ul class="menu">
                                        <li class="">
                                            <a href="{{ route('user.home') }}" title="">Home</a>

                                            <!-- /.sub-menu -->
                                        </li>
                                        <li class=" menu-item-has-children">
                                            <a href="{{ route('user.about-us') }}" title="">About</a>
                                            <ul class="sub-menu">
                                                <li><a href="{{ route('user.about-us') }}" title="">About Us</a></li>
                                                <li><a href="{{ route('user.team') }}" title="">Team</a></li>
                                            </ul>
                                            <!-- /.sub-menu -->
                                        </li>
                                        <li class="current-menu-item menu-item-has-children">
                                            <a href="{{ route('user.blog') }}" title="">Blog</a>
                                            <ul class="sub-menu">
                                                <li><a href="{{ route('user.blog') }}" title="">Blog Index</a></li>
                                                <li class="current-item"><a href="{{ route('user.blog.detail') }}" title="">Blog Detail</a></li>
                                            </ul>
                                            <!-- /.sub-menu -->
                                        </li>
                                        <li>
                                            <a href="{{ route('user.contact-us') }}" title="">Contact Us</a>
                                        </li>
                                        <li><a href="{{ route('user.faq') }}" title="">Faq</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="site-header-right">
                                <div class="header-inner">

                                    <div class="cart">
                                        <a href="#" class="cart-btn"><i
                                                class="fa fa-shopping-cart"></i></a>
                                    </div>

                                </div>
                            </div>
                            <!-- header right -->
                        </div>
                    </div>
                    <!-- /.header-wrap -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </header>
        <!-- /header -->
