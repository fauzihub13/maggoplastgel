@extends('layouts.app')

@section('title', '')

@push('style')

@endpush

@section('main')

    <div class="boxed blog">
        <!-- page title -->
        <div class="page-title-home1">
            <div class="container-fluid">
                <div class="row">
                    <div class="inner-title-home1">
                        <!-- /.page-title -->
                        <div class="flat-slider clearfix">
                            <div class="rev_slider_wrapper fullwidthbanner-container">
                                <div id="rev-slider2" class="rev_slider fullwidthabanner">
                                    <ul>
                                        <!-- Slide 1 -->
                                        <li data-transition="random">
                                            <!-- Main Image -->
                                            <!-- Layers -->
                                            <div class="tp-caption tp-resizeme text-one"
                                                data-x="['left','left','left','center']"
                                                data-hoffset="['0','0','0','0']"
                                                data-y="['middle','middle','middle','middle']"
                                                data-voffset="['-274','-50','-50','-50']"
                                                data-fontsize="['16','16','16','16']" data-lineheight="['20','0','0','0']"
                                                data-width="full" data-height="none" data-whitespace="normal"
                                                data-transform_idle="o:1;"
                                                data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                                                data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                                data-mask_in="x:0px;y:[100%];" data-mask_out="x:inherit;y:inherit;"
                                                data-start="700" data-splitin="none" data-splitout="none"
                                                data-responsive_offset="on">
                                                <h3 class="sub-title">MARKETS & RESOURCES</h3>
                                            </div>

                                            <div class="tp-caption tp-resizeme text-two"
                                                data-x="['left','left','left','center']" data-hoffset="['-2','-2','5','0']"
                                                data-y="['middle','middle','middle','middle']" data-voffset="['-130','-165', '-15','-15']"
                                                data-fontsize="['60','70','50','60']"
                                                data-lineheight="['70','80','64','48']"
                                                data-width="full"
                                                data-height="none"
                                                data-whitespace="normal"
                                                data-transform_idle="o:1;"
                                                data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                                                data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                                data-mask_in="x:0px;y:[100%];" data-mask_out="x:inherit;y:inherit;"
                                                data-start="700" data-splitin="none" data-splitout="none"
                                                data-responsive_offset="on">
                                                <div class="title-box">
                                                    <h2 class="title-slider text-pri2-color">Planting a garden is<br>
                                                        similar to believe in<br> tomorrow</h2>
                                                </div>
                                            </div>

                                            <div class="tp-caption btn-text btn-linear hv-linear-gradient"
                                                data-x="['left','left','left','center']"
                                                data-hoffset="['-3','-3','5','0']"
                                                data-y="['middle','middle','middle','middle']"
                                                data-voffset="['48','40','180','280']" data-width="full"
                                                data-height="none" data-whitespace="normal" data-transform_idle="o:1;"
                                                data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                                                data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                                data-mask_in="x:0px;y:[100%];" data-mask_out="x:inherit;y:inherit;"
                                                data-start="700" data-splitin="none" data-splitout="none"
                                                data-responsive_offset="on">
                                                <div class="button-box">
                                                    <div class="button res-btn-slider">
                                                        <a href="contact.html" class="btn btn-left">Get A Quote</a>
                                                    </div>
                                                    <div class="button">
                                                        <a href="service-details.html" class="btn">Read More</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tp-caption tp-resizeme image-slider text-right "
                                                data-x="['right','right','right','right']"
                                                data-hoffset="['-29','-29','-150','-29']"
                                                data-y="['center','center','center','center']"
                                                data-voffset="['-88','-88','60','-88']" data-width="full"
                                                data-height="none" data-whitespace="normal" data-transform_idle="o:1;"
                                                data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                                                data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                                data-mask_in="x:0px;y:[100%];" data-mask_out="x:inherit;y:inherit;"
                                                data-start="800" data-splitin="none" data-splitout="none"
                                                data-responsive_offset="on">
                                                <img class="img-slide wow jackInTheBox" data-wow-delay="2500ms"
                                                    data-wow-duration="3s"
                                                    src="{{ asset('assets/images/home/young-woman-with-their-garden-crops.png') }}"
                                                    alt="">
                                            </div>
                                        </li>
                                        <!-- /End Slide 1 -->
                                        <!-- Slide 1 -->
                                        <li data-transition="random">
                                            <!-- Main Image -->
                                            <!-- Layers -->
                                            <div class="tp-caption tp-resizeme text-one"
                                                data-x="['left','left','left','center']"
                                                data-hoffset="['0','0','0','0']"
                                                data-y="['middle','middle','middle','middle']"
                                                data-voffset="['-274','-50','-50','-50']"
                                                data-fontsize="['16','0','0','0']" data-lineheight="['20','0','0','0']"
                                                data-width="full" data-height="none" data-whitespace="normal"
                                                data-transform_idle="o:1;"
                                                data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                                                data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                                data-mask_in="x:0px;y:[100%];" data-mask_out="x:inherit;y:inherit;"
                                                data-start="700" data-splitin="none" data-splitout="none"
                                                data-responsive_offset="on">
                                                <h3 class="sub-title">MARKETS & RESOURCES</h3>
                                            </div>

                                            <div class="tp-caption tp-resizeme text-two"
                                                data-x="['left','left','left','center']"
                                                data-hoffset="['-2','-2','5','0']"
                                                data-y="['middle','middle','middle','middle']"
                                                data-voffset="['-130','-165',10','-15']"
                                                data-fontsize="['60','70','50','60']"
                                                data-lineheight="['70','80','64','48']" data-width="full"
                                                data-height="none" data-whitespace="normal" data-transform_idle="o:1;"
                                                data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                                                data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                                data-mask_in="x:0px;y:[100%];" data-mask_out="x:inherit;y:inherit;"
                                                data-start="700" data-splitin="none" data-splitout="none"
                                                data-responsive_offset="on">
                                                <div class="title-box">
                                                    <h2 class="title-slider text-pri2-color">Grow your healt
                                                        <br> grow a garden
                                                    </h2>
                                                </div>
                                            </div>

                                            <div class="tp-caption btn-text btn-linear hv-linear-gradient"
                                                data-x="['left','left','left','center']"
                                                data-hoffset="['-3','-3','5','0']"
                                                data-y="['middle','middle','middle','middle']"
                                                data-voffset="['48','40','180','300']" data-width="full"
                                                data-height="none" data-whitespace="normal" data-transform_idle="o:1;"
                                                data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                                                data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                                data-mask_in="x:0px;y:[100%];" data-mask_out="x:inherit;y:inherit;"
                                                data-start="700" data-splitin="none" data-splitout="none"
                                                data-responsive_offset="on">
                                                <div class="button-box">
                                                    <div class="button res-btn-slider">
                                                        <a href="contact.html" class="btn btn-left">Get A Quote</a>
                                                    </div>
                                                    <div class="button">
                                                        <a href="service-details.html" class="btn">Read More</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tp-caption tp-resizeme image-slider text-right "
                                                data-x="['right','right','right','right']"
                                                data-hoffset="['-29','-29','-150','-29']"
                                                data-y="['center','center','center','center']"
                                                data-voffset="['-88','-88','60','-88']" data-width="full"
                                                data-height="none" data-whitespace="normal" data-transform_idle="o:1;"
                                                data-transform_in="y:0;z:[100%];rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                                                data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                                data-mask_in="x:[100%];y:0px;" data-mask_out="x:inherit;y:inherit;"
                                                data-start="900" data-splitin="none" data-splitout="none"
                                                data-responsive_offset="on">
                                                <img class="img-slide wow jackInTheBox" data-wow-delay="2500ms"
                                                    data-wow-duration="3s"
                                                    src="{{ asset('assets/images/home/young-woman-with-their-garden-crops.png') }}"
                                                    alt="">
                                            </div>
                                        </li>
                                        <!-- /End Slide 1 -->
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- flat-slider -->
                    </div>

                </div>

            </div>
        </div>
        <!-- /.page-title -->

        <!-- features -->
        <section class="flat-features">
            <div class="container-fluid">
                <div class="row">
                    <div class="item-four-column">
                        <div class="inner-features hover-up wow fadeInUp">
                            <div class="features-box">
                                <span class="tf-icon icon-farming"></span>
                                <div class="content-features">
                                    <a href="service-details.html">
                                        <h3 class="section-heading-rubik-size20">
                                            Landscaping
                                        </h3>
                                    </a>
                                    <p class="section-desc">
                                        Lorem ipsum dolor sit amet, conset etur sadipscing elitr, sed diam noket numy
                                        eirmod tempor
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=" item-four-column">
                        <div class="inner-features hover-up wow fadeInUp">
                            <div class="features-box">
                                <span class="tf-icon icon-hand-gloves"></span>
                                <div class="content-features">
                                    <a href="service-details.html">
                                        <h3 class="section-heading-rubik-size20">
                                            Pruning plants
                                        </h3>
                                    </a>
                                    <p class="section-desc">
                                        Lorem ipsum dolor sit amet, conset etur sadipscing elitr, sed diam noket numy
                                        eirmod tempor
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=" item-four-column">
                        <div class="inner-features hover-up wow fadeInUp">
                            <div class="features-box">
                                <span class="tf-icon icon-fruit-box"></span>
                                <div class="content-features">
                                    <a href="service-details.html">
                                        <h3 class="section-heading-rubik-size20">
                                            Lawn Maintenance
                                        </h3>
                                    </a>
                                    <p class="section-desc">
                                        Lorem ipsum dolor sit amet, conset etur sadipscing elitr, sed diam noket numy
                                        eirmod tempor
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=" item-four-column">
                        <div class="inner-features hover-up wow fadeInUp">
                            <div class="features-box">
                                <span class="tf-icon icon-seed"></span>
                                <div class="content-features">
                                    <a href="service-details.html">
                                        <h3 class="section-heading-rubik-size20">
                                            Irrigation & Drainage
                                        </h3>
                                    </a>
                                    <p class="section-desc">
                                        Lorem ipsum dolor sit amet, conset etur sadipscing elitr, sed diam noket numy
                                        eirmod tempor
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /features -->

        <!-- about -->
        <section class="flat-about">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="themesflat-spacer clearfix" data-desktop="121" data-mobile="60" data-smobile="60">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-post center bd-radius-50-image">
                            <img class="main-post-about"
                                src="{{ asset('assets/images/home/the-girl-in-the-glasses.jpg') }}" alt="images">
                            <img class="circel-inside" src="{{ asset('assets/images/home/circle-about.png') }}" alt="images">
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
                                <div class="section-desc">Lorem Ipsum is simply dummy text of free available market
                                    typesetting industry has been the industry's standard dummy text ever. Lorem Ipsum
                                    is simply dummy text of free available </div>
                            </div>
                            <div id="about-box" class="about-desc-box">
                                <div class="about-desc">
                                    <div class="about-box-nd1 wow fadeInLeft">
                                        <span class="tf-icon icon-Group-660"></span>
                                        <div class="inner-box">
                                            <a href="services.html">
                                                <h3 class="section-heading-jost-size20 item-1">
                                                    Best Ui Designer</h3>
                                            </a>
                                            <p class="section-desc">Lorem Ipsum is simply</p>
                                        </div>
                                    </div>
                                    <div class="about-box-nd1 wow fadeInLeft">
                                        <span class="tf-icon icon-Group-661"></span>
                                        <div class="inner-box">
                                            <a href="services.html">
                                                <h3 class="section-heading-jost-size20 item-2">
                                                    Counter In Work.</h3>
                                            </a>
                                            <p class="section-desc">
                                                Lorem Ipsum is simply</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="image-desc">
                                    <img class="image" src="{{ asset('assets/images/home/box-flowers-green-garden.jpg') }}" alt="">
                                </div>
                            </div>
                            <div class="button hover-up">
                                <a href="contact.html" class="btn2">Get A Quote</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /about -->

        <!-- Our services -->
        <section class="flat-services">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title-box">
                            <h4 class="section-subtitle">WHAT WE DO</h4>
                            <h2 class="section-title">What You Can Do<br> with Gettree</h2>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="themesflat-spacer clearfix" data-desktop="67" data-mobile="60" data-smobile="60">
                        </div>
                    </div>

                    <div class="item-four-column">
                        <div class="our-services-box hover-up-style2 mg-bottom30 wow fadeInDown">
                            <div class="our-services-overlay"></div>
                            <span class="tf-icon icon-size icon-icon-farming-layer"><span class="path1"></span><span
                                    class="path2"></span><span class="path3"></span><span class="path4"></span><span
                                    class="path5"></span></span>
                            <div class="content-features">
                                <a href="service-details.html">
                                    <h3 class="section-heading-jost-size22">
                                        Landscaping</h3>
                                </a>
                                <p class="section-desc">
                                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                                    tempor invidunt ut labore et dolore magna aliquyam erat,
                                </p>
                                <div class="link2 link-style2">
                                    <a href="service-details.html" class="read-more">
                                        Read More
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item-four-column">
                        <div class="our-services-box mg-bottom30 wow fadeInUp">
                            <div class="our-services-overlay active"></div>
                            <span class="tf-icon icon-size3 icon-Group-7527"><span class="path1"></span><span
                                    class="path2"></span><span class="path3"></span></span>
                            <div class="content-features link-style3">
                                <a href="service-details.html">
                                    <h3 class="section-heading-jost-size22">
                                        Pruning plants</h3>
                                </a>
                                <p class="section-desc white">
                                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                                    tempor invidunt ut labore et dolore magna aliquyam erat,
                                </p>
                                <div class="link2 link-style3">
                                    <a href="service-details.html" class="read-more">
                                        Read More
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item-four-column">
                        <div class="our-services-box hover-up-style2 wow fadeInLeft">
                            <div class="our-services-overlay"></div>
                            <span class="tf-icon icon-size2 icon-Group-7526"><span class="path1"></span><span
                                    class="path2"></span><span class="path3"></span><span class="path4"></span><span
                                    class="path5"></span><span class="path6"></span></span>
                            <div class="content-features">
                                <a href="service-details.html">
                                    <h3 class="section-heading-jost-size22">
                                        Irrigation & Drainage</h3>
                                </a>
                                <p class="section-desc">
                                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                                    tempor invidunt ut labore et dolore magna aliquyam erat,
                                </p>
                                <div class="link2 link-style2">
                                    <a href="service-details.html" class="read-more">
                                        Read More
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item-four-column">
                        <div class="our-services-box hover-up-style2 wow fadeInRight">
                            <div class="our-services-overlay"></div>
                            <span class="tf-icon icon-size4 icon-Group-7528"><span class="path1"></span><span
                                    class="path2"></span><span class="path3"></span></span>
                            <div class="content-features">
                                <a href="service-details.html">
                                    <h3 class="section-heading-jost-size22">
                                        Garden Maintenance
                                    </h3>
                                </a>
                                <p class="section-desc">
                                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                                    tempor invidunt ut labore et dolore magna aliquyam erat,
                                </p>
                                <div class="link2 link-style2">
                                    <a href="service-details.html" class="read-more">
                                        Read More
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- / Our service -->

        <!-- Our team -->
        <section class="flat-team">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title-box">
                            <h4 class="section-subtitle white wow fadeInUp">MEET OUR TEAM</h4>
                            <h2 class="section-title white wow fadeInUp">Our Creative Team</h2>
                        </div>
                        <div class="themesflat-spacer clearfix" data-desktop="0" data-mobile="60" data-smobile="60">
                        </div>
                    </div>
                </div>
            </div>
            <!-- list team -->
            <div class="container">
                <div class="row">
                    <div class="list-team">
                        <div class="item-three-column">
                            <div class="team-box wow fadeInUp">
                                <div class="image-staff">
                                    <div class="backround-overlay"></div>
                                    <div class="list-icon-hidden">
                                        <ul class="widgets-nav-social link-style3">
                                            <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                        </ul>
                                    </div>
                                    <img src="{{ asset('assets/images/team/staff1.png') }}" alt="images">
                                </div>
                                <div class="info-staff link-style4">
                                    <h3 class="section-heading-rubik-size20"> Doris Jordan </h3>
                                    <p class="section-desc-2 white"> Design Expert </p>
                                </div>
                            </div>
                        </div>
                        <div class="item-three-column">
                            <div class="team-box wow fadeInUp">
                                <div class="image-staff">
                                    <div class="backround-overlay"></div>
                                    <div class="list-icon-hidden">
                                        <ul class="widgets-nav-social link-style3">
                                            <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                        </ul>
                                    </div>
                                    <img src="{{ asset('assets/images/team/staff2.png') }}" alt="images">
                                </div>
                                <div class="info-staff link-style4">
                                    <h3 class="section-heading-rubik-size20"> Johnny Ramirez </h3>
                                    <p class="section-desc-2 white"> Design Expert </p>
                                </div>
                            </div>
                        </div>
                        <div class="item-three-column">
                            <div class="team-box wow fadeInUp">
                                <div class="image-staff">
                                    <div class="backround-overlay"></div>
                                    <div class="list-icon-hidden">
                                        <ul class="widgets-nav-social link-style3">
                                            <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                        </ul>
                                    </div>
                                    <img src="{{ asset('assets/images/team/staff3.png') }}" alt="images">
                                </div>
                                <div class="info-staff link-style4">
                                    <h3 class="section-heading-rubik-size20"> Diana Wagner </h3>
                                    <p class="section-desc-2 white"> Design Expert </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Our team -->

        <!-- our-profolio -->
        <section class="flat-profolio">
            <div class="container-fluid">
                <div class="row">
                    <div class="item-four-column">
                        <div class="list-box-profolio wow fadeInUp">
                            <div class="image-profolio bd-radius-8-image">
                                <img src="{{ asset('assets/images/profolio/home1-item1.jpg') }}" alt="">
                                <div class="profolio-show">
                                    <div class="profolio-info">
                                        <div class="info">
                                            <a href="case-details.html">
                                                <h3 class="section-heading-jost-size20">
                                                    Finished Work</h3>
                                            </a>
                                            <p class="desc-box">Dummy text of free available</p>
                                        </div>
                                        <div class="button-next">
                                            <a class="profolio-btn" href="case-details.html"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item-four-column">
                        <div class="list-box-profolio wow fadeInDown">
                            <div class="image-profolio bd-radius-8-image">
                                <img src="{{ asset('assets/images/profolio/home1-item2.jpg') }}" alt="">
                                <div class="profolio-show active">
                                    <div class="profolio-info">
                                        <div class="info">
                                            <a href="case-details.html">
                                                <h3 class="section-heading-jost-size20">
                                                    Finished Work</h3>
                                            </a>
                                            <p class="desc-box">Dummy text of free available</p>
                                        </div>
                                        <div class="button-next">
                                            <a class="profolio-btn" href="case-details.html"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item-four-column">
                        <div class="list-box-profolio wow fadeInUp">
                            <div class="image-profolio bd-radius-8-image">
                                <img src="{{ asset('assets/images/profolio/home1-item3.jpg') }}" alt="">
                                <div class="profolio-show">
                                    <div class="profolio-info">
                                        <div class="info">
                                            <a href="case-details.html">
                                                <h3 class="section-heading-jost-size20">
                                                    Finished Work</h3>
                                            </a>
                                            <p class="desc-box">Dummy text of free available</p>
                                        </div>
                                        <div class="button-next">
                                            <a class="profolio-btn" href="case-details.html"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item-four-column">
                        <div class="list-box-profolio wow fadeInDown">
                            <div class="image-profolio bd-radius-8-image">
                                <img src="{{ asset('assets/images/profolio/home1-item4.jpg') }}" alt="">
                                <div class="profolio-show">
                                    <div class="profolio-info">
                                        <div class="info">
                                            <a href="case-details.html">
                                                <h3 class="section-heading-jost-size20">
                                                    Finished Work</h3>
                                            </a>
                                            <p class="desc-box">Dummy text of free available</p>
                                        </div>
                                        <div class="button-next">
                                            <a class="profolio-btn" href="case-details.html"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <!-- /our profolio -->

        <!-- Testimonials -->
        <section class="flat-testimonials">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="themesflat-spacer clearfix" data-desktop="119" data-mobile="60" data-smobile="0">
                        </div>
                        <div class="section-title-box">
                            <h4 class="section-subtitle wow fadeInUp">CLIENT TESTIMONIALS</h4>
                            <h2 class="section-title">What our clients say </h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="owl-carousel owl-theme wow fadeInUp">
                            <div class="item">
                                <div class="list-testimonials">
                                    <div class="box-item">
                                        <div class="box-item-overlay"></div>
                                        <div class="staff-img">
                                            <img src="{{ asset('assets/images/team/staff-box1.jpg') }}" alt="">
                                        </div>
                                        <p class="section-desc mg-bottom-15"> Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                            Duis at est id leo luctus gravida a in ipsum. </p>
                                        <h4 class="section-desc-heading">Eugene Freeman</h4>
                                        <p class="section-desc des-2"> Tincidunt </p>
                                        <div class="icon-box">
                                            <a class="icon-inner-box"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="list-testimonials">
                                <div class="box-item">
                                    <div class="box-item-overlay active"></div>
                                    <div class="staff-img">
                                        <img src="{{ asset('assets/images/team/staff-box2.jpg') }}" alt="">
                                    </div>
                                    <p class="section-desc mg-bottom-15"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis
                                        at est id leo luctus gravida a in ipsum. </p>
                                    <h4 class="section-desc-heading">Kelly Coleman</h4>
                                    <p class="section-desc des-2">Nulla nec</p>
                                    <div class="icon-box">
                                        <a class="icon-inner-box"></a>
                                    </div>
                                </div>
                            </div>

                            <div class="list-testimonials">
                                <div class="box-item">
                                    <div class="box-item-overlay"></div>
                                    <div class="staff-img">
                                        <img src="{{ asset('assets/images/team/staff-box3.jpg') }}" alt="">
                                    </div>
                                    <p class="section-desc mg-bottom-15"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis
                                        at est id leo luctus gravida a in ipsum. </p>
                                    <h4 class="section-desc-heading">Philip Mendez</h4>
                                    <p class="section-desc des-2">Consectetur</p>
                                    <div class="icon-box">
                                        <a class="icon-inner-box"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Testimonials -->

        <!-- About 2nd -->
        <section class="flat-about-2nd">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <div class="row">
                            <div class="content-left">
                                <div class="tag-logo">
                                    <img src="icon/logo-dark.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="content-right link-style3">
                            <h4 class="section-subtitle white wow fadeInUp">ABOUT US</h4>
                            <h3 class="section-title white wow fadeInUp">We Have The Perfect soluion For You</h3>
                            <p class="section-desc white wow fadeInUp">Lorem Ipsum is simply dummy text of free
                                available in market the typesetting industry has been the industry's standard dummy text
                                ever. Lorem Ipsum is simply dummy text of free available in market the printing</p>
                            <div class="box">
                                <div class="about-box wow fadeInLeft">
                                    <div class="about-box01">
                                        <div class="icon-box01">
                                            <span class="section-heading-jost-size20 icon">01</span>
                                        </div>
                                        <div class="content-box01">
                                            <a href="services.html" class="section-heading-jost-size20 fw-600">Counter In Work.</a>
                                            <p class="section-desc white">Lorem Ipsum is</p>
                                        </div>
                                    </div>
                                    <div class="about-box-list">
                                        <ul class="list-box">
                                            <li> <a href="service-details.html"> available in market the printing</a></li>
                                            <li> <a href="service-details.html"> Lorem Ipsum simply dummy </a></li>
                                            <li> <a href="service-details.html"> market the printing </a> </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="about-box wow fadeInRight">
                                    <div class="about-box02">
                                        <div class="icon-box02">
                                            <span class="section-heading-jost-size20 icon">02</span>
                                        </div>
                                        <div class="content-box02">
                                            <a href="services.html" class="section-heading-jost-size20 fw-600">Counter In Work.</a>
                                            <p class="section-desc white">Lorem Ipsum is</p>
                                        </div>
                                    </div>
                                    <div class="about-box-list2">
                                        <ul class="list-box">
                                            <li> <a href="service-details.html"> market the printing typesetting</a></li>
                                            <li> <a href="service-details.html"> available in market the printing</a></li>
                                            <li> <a href="service-details.html"> Lorem Ipsum simply free</a> </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- subcribe -->
            <div class="subcribe-about wow fadeInUp">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="subcribe-box">
                                <div class="inner-subcribe-box">
                                    <div class="col-md-5">
                                        <h2 class="heading-subcribe">
                                            Get notified about the event! Subscribe today
                                        </h2>
                                    </div>
                                    <div class="col-md-7">
                                        <form method="post" class="form-subcribe">
                                            <input type="email" name="email" class="input-subcribe"
                                                placeholder="Email Address" required>
                                            <button type="submit" class="btn-subcribe">Subsrcibe</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="themesflat-spacer clearfix" data-desktop="0" data-mobile="60" data-smobile="60"></div>
            </div>
        </section>
        <!-- /About 2nd -->

        <!-- Work process -->
        <section class="flat-work-process">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="themesflat-spacer clearfix" data-desktop="90" data-mobile="60" data-smobile="60">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="section-title-box">
                            <h4 class="section-subtitle wow fadeInUp">WORK PROCESS</h4>
                            <h2 class="section-title wow fadeInUp">We Complete Every<br> Step Carefully</h2>
                        </div>
                        <div class="themesflat-spacer clearfix" data-desktop="65" data-mobile="60" data-smobile="60">
                        </div>
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
                                    <span class="section-heading-jost-size20 icon">01</span>
                                </div>
                            </div>
                            <div class="content-features">
                                    <h3 class="section-heading-jost-size20 text-pri2-color">
                                        Set Design Target
                                    </h3>
                                <p class="section-desc">
                                    Lorem Ipsum is simply dummy text of free available market typesetting industry has
                                    been the
                                </p>
                            </div>
                        </div>
                        <div class="features-box wow fadeInUp">
                            <div class="icon-wp-box">
                                <span class="tf-icon-wp icon-seed"></span>
                                <div class="icon-box link-style3">
                                    <span class="section-heading-jost-size20 icon">03</span>
                                </div>
                            </div>
                            <div class="content-features cf-3">
                                    <h3 class="section-heading-jost-size20 text-pri2-color">
                                        Genaret Uniq Idea
                                    </h3>
                                <p class="section-desc">
                                    Lorem Ipsum is simply dummy text of free available market typesetting industry has
                                    been the
                                </p>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-6">
                        <div class="features-box wow fadeInUp">
                            <div class="icon-wp-box size-icon">
                                <span class="tf-icon-wp2 icon-seeding1"></span>
                                <div class="icon-box2 link-style3">
                                    <span class="section-heading-jost-size20 icon">02</span>
                                </div>
                            </div>
                            <div class="content-features cf-2 text-pri2-color">
                                    <h3 class="section-heading-jost-size20">
                                        Friendly Service
                                    </h3>
                                <p class="section-desc">
                                    Lorem Ipsum is simply dummy text of free available market typesetting industry has
                                    been the
                                </p>
                            </div>
                        </div>
                        <div class="features-box wow fadeInUp">
                            <div class="icon-wp-box size-icon2">
                                <span class="tf-icon-wp4 icon-greenhouse1"></span>
                                <div class="icon-box3 link-style3">
                                    <span class="section-heading-jost-size20 icon">04</span>
                                </div>
                            </div>
                            <div class="content-features cf-4">
                                    <h3 class="section-heading-jost-size20 text-pri2-color">
                                        Finished Work
                                    </h3>
                                <p class="section-desc">
                                    Lorem Ipsum is simply dummy text of free available market typesetting industry has
                                    been the
                                </p>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-12">
                        <div class="themesflat-spacer clearfix" data-desktop="0" data-mobile="60" data-smobile="0">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Work process -->

        <!-- Contact -->
        <section class="flat-contact">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 wow fadeInUp">
                        <div class="contact-left">
                            <h3 class="section-subtitle">GET IN TOUCH</h3>
                            <h2 class="section-title">We want to share our locationto find us easily.</h2>
                        </div>
                    </div>
                    <div class="col-md-8 wow fadeInUp">
                        <div class="contact-right">
                            <form method="post" class="form-contact-right" id="contactform"
                                action="./contact/contact-process.php" accept-charset="utf-8"
                                novalidate="novalidate">
                                <div class="input-row">
                                    <div class="input-name">
                                        <label for="name" class="heading-features">Name (required)</label>
                                        <input id="name" name="name" class="input-contact" type="text"
                                            placeholder="Full Name" required>
                                    </div>
                                    <div class="input-phone">
                                        <label for="phone" class="heading-features">Phone (optional)</label>
                                        <input id="phone" name="phone" class="input-contact" type="text"
                                            placeholder="Phone Number" required>
                                    </div>

                                </div>
                                <div class="input-row">
                                    <div class="input-email">
                                        <label id="email" class="heading-features">Email address (required)</label>
                                        <input type="email" name="email" class="input-contact"
                                            placeholder="Email Address" required>
                                    </div>
                                    <div class="input-services">
                                        <label for="services" class="heading-features">Services (required)</label>
                                        <select class="input-contact input-select" name="services" id="services">
                                            <option value="0">Choose services</option>
                                            <option value="1">Gettree</option>
                                            <option value="2">Gettree</option>
                                            <option value="3">Gettree</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="input-message">
                                    <label for="message" class="heading-features">Your message*</label>
                                    <textarea name="message" class="input-contact-message" id="message"
                                        placeholder="Your Message"></textarea>
                                </div>
                                <div class="button">
                                    <button type="submit" class=" btn btn-left">Send message</button>
                                </div>
                            </form>
                        </div>
                        <div class="contact-address wow fadeInLeft link-style3">
                            <div class="address-box box-1">
                                <span class="contact-location address-icon icon-map"></span>
                                <div class="info">
                                        <h3 class="section-heading-jost-size20">
                                            Our Address</h3>
                                    <p class="desc-box">2 St, Loskia sripur, amukara.</p>
                                </div>
                            </div>
                            <div class="address-box box-2">
                                <span class="contact-phone address-icon icon-phone"></span>
                                <div class="info">
                                        <h3 class="section-heading-jost-size20">
                                            Our Phone</h3>
                                    <p class="desc-box">000 2324 39493</p>
                                </div>
                            </div>
                            <div class="address-box box-3">
                                <span class="contact-mail address-icon icon-mail"></span>
                                <div class="info">
                                        <h3 class="section-heading-jost-size20">
                                            Our Email</h3>
                                    <p class="desc-box">name@website.com</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Contact -->

        <!-- blog -->
        <section class="flat-blog-home01">
            <div class="container">
                <div class="row">
                    <div class="section-title-box">
                        <h4 class="section-subtitle  wow fadeInUp">LATEST NEWS</h4>
                        <h2 class="section-title  wow fadeInUp">Our Insights & Articles</h2>
                    </div>
                    <div class="col-md-12">
                        <div class="slide-blog-content">
                            <div class="owl-carousel owl-theme">
                                <div class="item wow fadeInUp">
                                    <div class="blog-item hover-up-style2">
                                        <div class="item-overlay"></div>
                                        <div class="item-box link">
                                            <div class="content-info"><a href="blog.html" class="folder">
                                                    Home Gardening
                                                </a></div>
                                            <div class="link-style6">
                                                <div class="content-info margin-top"><a href="blog-detail.html" class="user">
                                                        By Admin
                                                    </a></div>
                                                <a href="blog-detail.html" class="section-heading-jost-size20">
                                                    Mauris neque nisiibus non elementum
                                                </a>
                                            </div>
                                            <hr class="line-blog-item">
                                            <h4 class="sub-title">
                                                28 JANUARY, 2020
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="item wow fadeInUp">
                                    <div class="blog-item background2 hover-up-style2">
                                        <div class="item-overlay"></div>
                                        <div class="item-box box-2">
                                            <div class="content-info "><a href="blog.html" class="folder folder-2">
                                                    Gardening Ideas
                                                </a></div>
                                            <div class="link-style6">
                                                <div class="content-info margin-top"><a href="blog-detail.html" class="user">
                                                        By Admin
                                                    </a></div>
                                                <a href="blog-detail.html" class="section-heading-jost-size20">
                                                    Quisque suscipit ipsum est, eu venenatis leo
                                                </a>
                                            </div>
                                            <hr class="line-blog-item">
                                            <h4 class="sub-title">
                                                28 JANUARY, 2020
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="item wow fadeInUp">
                                    <div class="blog-item background3 hover-up-style2">
                                        <div class="item-overlay"></div>
                                        <div class="item-box box-3">
                                            <div class="content-info"><a href="blog.html" class="folder folder-3">
                                                    Gardening Ideas
                                                </a></div>
                                            <div class="link-style6">
                                                <div class="content-info margin-top"><a href="blog-detail.html" class="user">
                                                        By Admin
                                                    </a></div>
                                                <a href="blog-detail.html" class="section-heading-jost-size20">
                                                    Maecenas interdum lorem eleifend orci aliquam
                                                </a>
                                            </div>
                                            <hr class="line-blog-item">
                                            <h4 class="sub-title">
                                                28 JANUARY, 2020
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="themesflat-spacer clearfix" data-desktop="0" data-mobile="60" data-smobile="0">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /blog -->

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
