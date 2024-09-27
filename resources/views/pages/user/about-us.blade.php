@extends('layouts.main')

@section('title', 'About Us - ')

@push('style')

@endpush


@section('main')

<div class="boxed blog">

        <!-- page title -->
        <div class="page-title space-header">
            <div class="container-fluid">
                <div class="row">
                    <div class="inner-title">
                        <div class="overlay-image"></div>
                        <div class="banner-title">
                            <div class="page-title-heading">
                                About Us
                            </div>
                            <div class="page-title-content link-style6">
                                <span><a class="home" href="{{ route('user.home') }}">Home</a></span><span class="page-title-content-inner">About Us</span>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
        <!-- /.page-title -->

        <!-- about -->
        <section class="flat-about">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="themesflat-spacer clearfix" data-desktop="117" data-mobile="60" data-smobile="60"></div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-post center bd-radius-50-image">
                            <img class="main-post-about" src="{{asset('images/home/the-girl-in-the-glasses.jpg')}}" alt="images">
                            <img class="circel-inside" src="{{asset('images/home/circle-about.png')}}" alt="images">
                            <div class="about-count-box themesflat-counter">
                                <div class="box">
                                    <div class="inner-about-count-box">
                                        <span class="number-count number" data-speed="1500" data-to="20"
                                            data-inviewport="yes">20</span>
                                        <div class="caption-number-count">
                                            Years Of experience
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-content">
                            <div class="about-content-title wow fadeInUp">
                                <div class="section-subtitle">ABOUT US</div>
                                <div class="section-title">The Best Choice For your Business.</div>
                                <div class="section-desc">Lorem Ipsum is simply dummy text of free available market typesetting industry has been the industry's standard dummy text ever. Lorem Ipsum is simply dummy text of free available </div>
                            </div>
                            <div id="about-box" class="about-desc-box">
                                <div class="about-desc">
                                    <div class="about-box-nd1 wow fadeInLeft">
                                        <span class="tf-icon icon-Group-660"></span>
                                        <div class="inner-box">
                                            <a href="#">
                                                <h3 class="section-heading-jost-size20 item-1">
                                                    Best Ui Designer</h3>
                                            </a>
                                            <p class="section-desc">Lorem Ipsum is simply</p>
                                        </div>
                                    </div>
                                    <div class="about-box-nd1 wow fadeInLeft">
                                        <span class="tf-icon icon-Group-661"></span>
                                        <div class="inner-box">
                                            <a href="#">
                                                <h3 class="section-heading-jost-size20 item-2">
                                                    Counter In Work.</h3>
                                            </a>
                                            <p class="section-desc">
                                                Lorem Ipsum is simply</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="image-desc">
                                    <img class="image" src="{{asset('images/home/box-flowers-green-garden.jpg')}}" alt="images">
                                </div>
                            </div>
                            <div class="button hover-up">
                                <a href="#" class="btn2">Get A Quote</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="themesflat-spacer clearfix" data-desktop="134" data-mobile="60" data-smobile="60"></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /about -->

        <!-- about home2 -->
        <section class="flat-about-home2">
            <div class="container-fluid">
                <div class="row">
                    <div class="image-about-home2">
                        <img src="{{asset('images/home/close-up-planting-flowers-pot.jpg')}}" alt="images">
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="themesflat-spacer clearfix" data-desktop="148" data-mobile="60" data-smobile="60"></div>
                                <div class="about-content-left themesflat-counter">
                                    <h5 class="section-subtitle">ABOUT US</h5>
                                    <h2 class="section-title">Nurture The<br>environment</h2>
                                    <p class="section-desc">Lorem Ipsum is simply dummy text of free available market typesetting industry has been the industry's standard dummy</p>
                                    <div class="about-history-box wow fadeInLeft ">
                                        <div class="icon-about">
                                            <span class="tf-icon-about icon-admin-sys"></span>
                                            <div class="about-count-year section-heading-jost-size20 fw-600">25 YEARS</div>
                                        </div>
                                        <p class="section-desc about-box-right">Lorem Ipsum is simply dummy text of free available market type setting industry</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="themesflat-spacer clearfix" data-desktop="121" data-mobile="100" data-smobile="80"></div>
                                <div class="about-content-right wow fadeInRight">
                                    <div class="about-right-list link-style3">
                                        <div class="features-box">
                                            <span class="icon-about-right"></span>
                                            <div class="content-features">
                                                    <h3 class="section-heading-jost-size20 fw-600">Ligula molestie</h3>
                                                <p class="section-desc white">Dolor sit amet onsectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
                                            </div>
                                        </div>
                                        <div class="features-box box-2">
                                            <span class="icon-about-right"></span>
                                            <div class="content-features">
                                                    <h3 class="section-heading-jost-size20 fw-600">Magna vivamus</h3>
                                                <p class="section-desc white">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
                                            </div>
                                        </div>
                                        <div class="features-box box-2">
                                            <span class="icon-about-right"></span>
                                            <div class="content-features">
                                                    <h3 class="section-heading-jost-size20 fw-600">Efficitur velit </h3>
                                                <p class="section-desc white">Consectetur adipisicing elised do eiusmod tempor incididunt ut labore</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="themesflat-spacer clearfix" data-desktop="0" data-mobile="60" data-smobile="60"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /about home2 -->

        <!-- Work process -->
        <section class="flat-work-process">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="themesflat-spacer clearfix" data-desktop="90" data-mobile="60" data-smobile="60"></div>
                    </div>
                    <div class="col-md-12">
                        <div class="section-title-box">
                            <h4 class="section-subtitle wow fadeInUp">WORK PROCESS</h4>
                            <h2 class="section-title wow fadeInUp">We Complete Every<br> Step Carefully</h2>
                        </div>
                        <div class="themesflat-spacer clearfix" data-desktop="65" data-mobile="60" data-smobile="60"></div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="features-box wow fadeInUp">
                            <div class="icon-wp-box">
                                <span class="tf-icon-wp icon-farming"></span>
                                <div class="icon-box link-style3">
                                    <span class="section-heading-jost-size20 icon" >01</span>
                                </div>
                            </div>
                            <div class="content-features">
                                    <h3 class="section-heading-jost-size20 text-pri2-color">
                                        Set Design Target
                                    </h3>
                                <p class="section-desc">
                                    Lorem Ipsum is simply dummy text of free available market typesetting industry has been the
                                </p>
                            </div>
                        </div>
                        <div class="features-box wow fadeInUp">
                            <div class="icon-wp-box">
                                <span class="tf-icon-wp icon-seed"></span>
                                <div class="icon-box link-style3">
                                    <span class="section-heading-jost-size20 icon" >03</span>
                                </div>
                            </div>
                            <div class="content-features cf-3">
                                    <h3 class="section-heading-jost-size20 text-pri2-color">
                                        Genaret Uniq Idea
                                    </h3>
                                <p class="section-desc">
                                    Lorem Ipsum is simply dummy text of free available market typesetting industry has been the
                                </p>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-6">
                        <div class="features-box wow fadeInUp">
                            <div class="icon-wp-box size-icon">
                                <span class="tf-icon-wp2 icon-seeding1"></span>
                                <div class="icon-box2 link-style3">
                                    <span class="section-heading-jost-size20 icon" >02</span>
                                </div>
                            </div>
                            <div class="content-features cf-2">
                                    <h3 class="section-heading-jost-size20 text-pri2-color">
                                        Friendly Service
                                    </h3>
                                <p class="section-desc">
                                    Lorem Ipsum is simply dummy text of free available market typesetting industry has been the
                                </p>
                            </div>
                        </div>
                        <div class="features-box wow fadeInUp">
                            <div class="icon-wp-box size-icon2">
                                <span class="tf-icon-wp4 icon-greenhouse1"></span>
                                <div class="icon-box3 link-style3">
                                    <span class="section-heading-jost-size20 icon" >04</span>
                                </div>
                            </div>
                            <div class="content-features cf-4">
                                    <h3 class="section-heading-jost-size20 text-pri2-color">
                                        Finished Work
                                    </h3>
                                <p class="section-desc">
                                    Lorem Ipsum is simply dummy text of free available market typesetting industry has been the
                                </p>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-12">
                        <div class="themesflat-spacer clearfix" data-desktop="0" data-mobile="60" data-smobile="0"></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Work process -->

        <!-- counter-->
        <section class="flat-counter">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="themesflat-spacer clearfix" data-desktop="120" data-mobile="60" data-smobile="60"></div>
                    </div>
                    <div class="col-md-9">
                        <div class="counter-content-left wow fadeInLeft">
                            <img class="background-counter" src="{{asset('images/Counter/the-man-working-tree.jpg')}}" alt="images">
                            <div class="content-left-box">
                                <h2 class="title-main">We are nice people with a lot of experience.</h2>
                                <p class="section-desc">Junk MTV quiz graced by fox whelps. Bawds jog, flick quartz, vex nymphs. Waltz, bad nymph</p>
                            </div>
                        </div>
                        <div class="themesflat-spacer clearfix" data-desktop="0" data-mobile="30" data-smobile="30"></div>
                    </div>
                    <div class="col-md-3">
                        <div class="counter-content-right themesflat-counter wow fadeInRight">
                            <div class="content-right-box mg-bottom30">
                                <span class="title-main white number" data-speed="1000" data-to="10" data-inviewport="yes">10</span><span class="title-main white">+</span>
                                <h3 class="section-heading-jost-size20 fw-600">Years of experience</h3>
                            </div>
                            <div class="content-right-box box-2 mg-bottom30">
                                <span class="title-main white number" data-speed="1500" data-to="95" data-inviewport="yes">95</span><span class="title-main white">K</span>
                                <h3 class="section-heading-jost-size20 fw-600">Happy Customers</h3>
                            </div>
                            <div class="content-right-box box-3">
                                <span class="title-main white number" data-speed="2000" data-to="100" data-inviewport="yes">100</span><span class="title-main white">%</span>
                                <h3 class="section-heading-jost-size20 mg-top-5 fw-600">Satisfaction</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="themesflat-spacer clearfix" data-desktop="120" data-mobile="60" data-smobile="60"></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /conter -->

        <!-- flat-testimonials-home2 -->
        <section class="flat-testimonials-home2">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <div class="themesflat-spacer clearfix" data-desktop="30" data-mobile="0" data-smobile="0"></div>
                        <div class="testimonials-content-left">
                            <div class="section-title-box">
                                <h5 class="section-subtitle">CLIENT TESTIMONIALS</h5>
                                <h2 class="section-title">What our clients say</h2>
                            </div>
                            <p class="section-desc mg-top-25">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna</p>
                        </div>
                        <div class="themesflat-spacer clearfix" data-desktop="0" data-mobile="30" data-smobile="30"></div>
                    </div>
                    <div class="col-md-7">
                        <div class="testimonials-content-right wow fadeInRight">
                            <img src="{{asset('images/testimonials/young-beautiful-florist-watering-flowers.jpg')}}" alt="images">
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="owl-carousel-2 owl-theme author-carousel wow fadeInUp">
                                <div class="item">
                                    <div class="testimonials-author-box bd-radius-8">
                                        <div class="testimonials-author">
                                            <div class="testimonials-author-img">
                                                <img src="{{asset('images/team/staff-box1.jpg')}}" class="bd-radius-50" alt="images">
                                            </div>
                                            <div class="testimonials-author-text">
                                                <h4 class="section-desc-heading">Eugene Freeman</h4>
                                                <h5 class="section-desc"> Tincidunt </h5>
                                            </div>
                                        </div>
                                        <div class="testimonials-text section-desc mg-top-25">
                                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invi</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="testimonials-author-box box-2 bd-radius-8">
                                        <div class="testimonials-author">
                                            <div class="testimonials-author-img">
                                                <img src="{{asset('images/team/staff-box2.jpg')}}" class="bd-radius-50" alt="images">
                                            </div>
                                            <div class="testimonials-author-text">
                                                <h4 class="section-desc-heading">Kelly Coleman</h4>
                                                <h5 class="section-desc"> Nulla nec</h5>
                                            </div>
                                        </div>
                                        <div class="testimonials-text section-desc mg-top-25">
                                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invi</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="testimonials-author-box bd-radius-8">
                                        <div class="testimonials-author">
                                            <div class="testimonials-author-img">
                                                <img src="{{asset('images/team/staff-box1.jpg')}}" class="bd-radius-50" alt="images">
                                            </div>
                                            <div class="testimonials-author-text">
                                                <h4 class="section-desc-heading">Eugene Freeman</h4>
                                                <h5 class="section-desc"> Tincidunt </h5>
                                            </div>
                                        </div>
                                        <div class="testimonials-text section-desc mg-top-25">
                                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invi</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="testimonials-author-box box-2 bd-radius-8">
                                        <div class="testimonials-author">
                                            <div class="testimonials-author-img">
                                                <img src="{{asset('images/team/staff-box2.jpg')}}" class="bd-radius-50" alt="images">
                                            </div>
                                            <div class="testimonials-author-text">
                                                <h4 class="section-desc-heading">Kelly Coleman</h4>
                                                <h5 class="section-desc"> Nulla nec</h5>
                                            </div>
                                        </div>
                                        <div class="testimonials-text section-desc mg-top-25">
                                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invi</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="themesflat-spacer clearfix" data-desktop="119" data-mobile="60" data-smobile="60"></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- flat-testimonials-home2 -->


        <!-- btn go top -->
        <div class="button-go-top">
            <a href="#" title="" class="go-top">
                <i class="fa fa-chevron-up"></i>
            </a>
        </div>
        <!-- / btn go top -->

    </div>

@endsection


@push('scripts')

@endpush
