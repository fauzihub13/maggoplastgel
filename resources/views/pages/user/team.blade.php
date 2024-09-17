@extends('layouts.main')

@section('title', 'Team - ')

@push('style')

@endpush

@section('main')

<div class="boxed blog">

        <!-- page title -->
        <div class="page-title">
            <div class="container-fluid">
                <div class="row">
                    <div class="inner-title">
                        <div class="overlay-image"></div>
                        <div class="banner-title">
                            <div class="page-title-heading">
                                Team Member
                            </div>
                            <div class="page-title-content link-style6">
                                <span><a class="home" href="{{ route('user.home') }}">Home</a></span><span class="page-title-content-inner">Team Member</span>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
        <!-- /.page-title -->


        <!-- Our team -->
        <section class="flat-team flat-team-page">
            <!-- list team -->
            <div class="container">
                <div class="row">
                    <div class="list-team">
                        <div class="item-three-column mg-bottom30">
                            <div class="team-box hover-up-style2 wow fadeInUp">
                                <div class="image-staff">
                                    <div class="backround-overlay"></div>
                                    <div class="list-icon-hidden">
                                        <ul class="widgets-nav-social link-style3">
                                            <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                        </ul>
                                    </div>
                                    <img src="{{asset('assets/images/team/staff1.png')}}" alt="images">
                                    <a class="icon-top" href="#"></a>
                                </div>
                                <div class="info-staff">
                                    <h3 class="section-heading-rubik-size20 text-pri2-color"> Doris Jordan </h3>
                                    <p class="section-desc-2"> Design Expert </p>
                                </div>
                            </div>
                        </div>
                        <div class="item-three-column mg-bottom30">
                            <div class="team-box hover-up-style2 wow fadeInUp">
                                <div class="image-staff">
                                    <div class="backround-overlay"></div>
                                    <div class="list-icon-hidden">
                                        <ul class="widgets-nav-social link-style3">
                                            <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                        </ul>
                                    </div>
                                    <img src="{{asset('assets/images/team/staff2.png')}}" alt="images">
                                    <a class="icon-top" href="#"></a>
                                </div>
                                <div class="info-staff">
                                    <h3 class="section-heading-rubik-size20 text-pri2-color"> Johnny Ramirez </h3>
                                    <p class="section-desc-2"> Design Expert </p>
                                </div>
                            </div>
                        </div>
                        <div class="item-three-column mg-bottom30">
                            <div class="team-box hover-up-style2 wow fadeInUp">
                                <div class="image-staff">
                                    <div class="backround-overlay"></div>
                                    <div class="list-icon-hidden">
                                        <ul class="widgets-nav-social link-style3">
                                            <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                        </ul>
                                    </div>
                                    <img src="{{asset('assets/images/team/staff3.png')}}" alt="images">
                                    <a class="icon-top" href="#"></a>
                                </div>
                                <div class="info-staff">
                                    <h3 class="section-heading-rubik-size20 text-pri2-color"> Diana Wagner </h3>
                                    <p class="section-desc-2"> Design Expert </p>
                                </div>
                            </div>
                        </div>
                        <div class="item-three-column">
                            <div class="team-box hover-up-style2 wow fadeInUp">
                                <div class="image-staff">
                                    <div class="backround-overlay"></div>
                                    <div class="list-icon-hidden">
                                        <ul class="widgets-nav-social link-style3">
                                            <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                        </ul>
                                    </div>
                                    <img src="{{asset('assets/images/team/staff1.png')}}" alt="images">
                                    <a class="icon-top" href="#"></a>
                                </div>
                                <div class="info-staff">
                                    <h3 class="section-heading-rubik-size20 text-pri2-color"> Doris Jordan </h3>
                                    <p class="section-desc-2"> Design Expert </p>
                                </div>
                            </div>
                        </div>
                        <div class="item-three-column">
                            <div class="team-box hover-up-style2 wow fadeInUp">
                                <div class="image-staff">
                                    <div class="backround-overlay"></div>
                                    <div class="list-icon-hidden">
                                        <ul class="widgets-nav-social link-style3">
                                            <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                        </ul>
                                    </div>
                                    <img src="{{asset('assets/images/team/staff2.png')}}" alt="images">
                                    <a class="icon-top" href="#"></a>
                                </div>
                                <div class="info-staff">
                                    <h3 class="section-heading-rubik-size20 text-pri2-color"> Johnny Ramirez </h3>
                                    <p class="section-desc-2"> Design Expert </p>
                                </div>
                            </div>
                        </div>
                        <div class="item-three-column">
                            <div class="team-box hover-up-style2 wow fadeInUp">
                                <div class="image-staff">
                                    <div class="backround-overlay"></div>
                                    <div class="list-icon-hidden">
                                        <ul class="widgets-nav-social link-style3">
                                            <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                        </ul>
                                    </div>
                                    <img src="{{asset('assets/images/team/staff3.png')}}" alt="images">
                                    <a class="icon-top" href="#"></a>
                                </div>
                                <div class="info-staff">
                                    <h3 class="section-heading-rubik-size20 text-pri2-color"> Diana Wagner </h3>
                                    <p class="section-desc-2"> Design Expert </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Our team -->

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