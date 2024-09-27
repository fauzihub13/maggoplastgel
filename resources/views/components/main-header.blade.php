<!-- header -->
<div class="flat-header-box">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                {{-- <div class="container">
                    <div class="row">
                        <div class="top-header1">
                            <div class="top-header-inner">
                                <div class="top-bar-left">
                                    <span class="top-location">Jalan Malabar Ujung No. 53</span>
                                    <span class="top-mail">maggoplastgel@gmail.com</span>
                                </div>
                                <div class="top-bar-right">
                                    <ul class="widgets-nav-social">
                                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                        </li>
                                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                        </li>
                                        <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                        </li>
                                        <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}

                <!-- header -->
                <header id="header" class="header bg-color mt-2">
                    <div class="container">
                        <div class="row">
                            <div class="header-wrap-home1">
                                <div class="col-md-3 ">
                                    <div class="inner-header">
                                        <div class="logo-header">
                                            <a href="index.html" title="">
                                                <img src="{{ asset('images/logo/Logo-x.png') }}" alt="images">
                                            </a>
                                        </div>
                                        <!-- /logo -->

                                        <div class="btn-menu">
                                            <span></span>
                                        </div>
                                        <!-- /mobile menu button -->
                                    </div>
                                </div>

                                <div class="col-md-8 justify-content-center">
                                    <div class="nav-wrap ">
                                        <nav id="mainnav" class="mainnav">
                                            <ul class="menu">
                                                <li class="">
                                                    <a href="{{ route('user.home') }}" title="">Home</a>
                                                    <!-- /.sub-menu -->
                                                </li>
                                                <li class="menu-item-has-children">
                                                    <a href="{{ route('user.about-us') }}" title="">About</a>
                                                    <ul class="sub-menu">
                                                        <li><a href="{{ route('user.about-us') }}" title="">About Us</a></li>
                                                        <li><a href="{{ route('user.faq') }}" title="">Faq</a></li>
                                                    </ul>
                                                    <!-- /.sub-menu -->
                                                </li>

                                                <li class="">
                                                    <a href="{{ route('user.team') }}" title="">Team</a>

                                                    <!-- /.sub-menu -->
                                                </li>
                                                <li class="">
                                                    <a href="{{ route('user.blog') }}" title="">Blog</a>
                                                    <!-- /.sub-menu -->
                                                </li>
                                                <li>
                                                    <a href="{{ route('user.contact-us') }}" title="">Contact Us</a>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                                <div class="col-md-1">
                                    <div class="site-header-right">
                                        <div class="cart">
                                            <a href="#" class="cart-btn"><i
                                                    class="fa fa-shopping-cart"></i></a>
                                        </div>
                                    </div>
                                    <!-- header right -->
                                </div>
                            </div>
                        </div>
                    </div>
                </header>
            </div>
        </div>
    </div>
</div>
<!-- /header -->


