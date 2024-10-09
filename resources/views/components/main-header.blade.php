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
                                <div class="col-md-2 ">
                                    <div class="inner-header">
                                        <div class="logo-header">
                                            <a href="{{ route('user.home')  }}" title="">
                                                <img src="" alt="images">
                                                {{-- <img src="{{ u('/images/logo/Logo-x.png') }}" alt="images"> --}}
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

                                <div class="col-md-2">
                                    <div class="site-header-right ">
                                        <div class="header-profile me-1">
                                            <a href="{{ route('user.product') }}" class="cart-btn icon-header"><i class="fa fa-shopping-cart"></i></a>
                                        </div>
                                        @if (!Auth::user())
                                            <div class="button ">
                                                <a href="{{ route('user.login.index') }}" class="btn ">Masuk</a>
                                            </div>
                                        @else
                                            {{-- <div class="header-profile ">
                                                <a href="#" class="cart-btn icon-header"><i class="fa fa-user"></i></a>
                                                <p class="text-custom-primary header-user-name">{{ Auth::user()->name }}</p>
                                            </div> --}}
                                            <div class="dropdown">
                                                <button class="btn btn-default dropdown-toggle no-border profile-dropdown" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                    <p class="text-custom-primary header-user-name">Hi, {{ Auth::user()->name }}<span class="caret" style="margin-left: 10px"></span></p>
                                                </button>
                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                                    <li><a href="#">Profil</a></li>
                                                    <li role="separator" class="divider"></li>
                                                    <li>
                                                        <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit()">Logout</a>
                                                    </li>
                                                    <form id="logout-form"
                                                        action="{{ route('user.logout') }}"
                                                        method="POST" style="display: none">
                                                        @csrf
                                                        @method('POST')
                                                        <button type="submit">Logout</button>
                                                    </form>
                                                </ul>
                                            </div>

                                        @endif

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


