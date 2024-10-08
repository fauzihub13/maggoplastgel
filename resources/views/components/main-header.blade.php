<!-- header -->
<div class="flat-header-box">
    <div class="container">
        <div class="row">
            <div class="col-md-12">

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
                                                <li>
                                                    <a href="{{ route('user.home') }}" class="{{ Route::is('/') ? 'active' : '' }}" title="">Beranda</a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('user.about-us') }}" class="{{ Route::is('about-us') ? 'active' : '' }}" title="">Tentang Kami</a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('user.team') }}" class="{{ Route::is('team') ? 'active' : '' }}" title="">Tim</a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('user.blog') }}" class="{{ Route::is('blog') ? 'active' : '' }}" title="">Artikel</a>
                                                </li>

                                                <li>
                                                    <a href="{{ route('user.contact-us') }}" class="{{ Route::is('contact-us') ? 'active' : ' '  }} " title="">Kontak Kami</a>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                                <div class="col-md-1">
                                    <div class="site-header-right">
                                        <div class="cart">
                                            <a href="{{ route('user.product') }}" class="cart-btn"><i
                                                    class="fa fa-shopping-cart"></i></a>
                                        </div>
                                        <div class="cart">
                                            <a href="#" class="cart-btn"><i
                                                    class="fa fa-user"></i></a>
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


