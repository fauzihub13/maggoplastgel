@extends('layouts.main')

@section('title', '')

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
                                Produk
                            </div>
                            <div class="page-title-content link-style6">
                                <span><a class="home" href="{{ route('user.home') }}">Beranda</a></span><span class="page-title-content-inner">Produk</span>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
        <!-- /.page-title -->


        <!-- Contact -->
        <section class="flat-contact-page">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 wow fadeInUp">
                        <div class="contact-left">
                            <div class="main-image mb-1">
                                <img src="{{asset('images/testimonials/young-beautiful-florist-watering-flowers.jpg')}}" alt="images">
                            </div>
                            <div class="slider-images d-flex">
                                <div class="single-image image-active" index='1'>
                                    <img src="{{asset('images/testimonials/young-beautiful-florist-watering-flowers.jpg')}}" alt="images">
                                </div>
                                <div class="single-image" index='2'>
                                    <img src="{{asset('images/team/novia.webp')}}" alt="images">
                                </div>
                                <div class="single-image" index='3'>
                                    <img src="{{asset('images/testimonials/young-beautiful-florist-watering-flowers.jpg')}}" alt="images">
                                </div>
                                <div class="single-image" index='4'>
                                    <img src="{{asset('images/testimonials/young-beautiful-florist-watering-flowers.jpg')}}" alt="images">
                                </div>
                                <div class="single-image" index='5'>
                                    <img src="{{asset('images/testimonials/young-beautiful-florist-watering-flowers.jpg')}}" alt="images">
                                </div>
                            </div>
                        </div>
                        <div class="themesflat-spacer clearfix" data-desktop="0" data-mobile="30" data-smobile="30"></div>
                    </div>
                    <div class="col-md-6 wow fadeInUp">
                        <div class="contact-right">
                            <div class="section-title mb-1">Pilihan terbaik untuk setiap luka</div>
                            <div class="product-price mb-2">Rp25.000</div>
                            <div class="section-desc mb-2">
                                MaggoPlast-Gel adalah solusi modern dalam perawatan luka yang terbuat dari bahan alami dan organik,
                                termasuk maggot BSF dan brotowali, yang dikenal karena manfaat penyembuhannya.
                            </div>
                            <div class="quantity-section">
                                <div class="minus-counter active" id="minus-counter">
                                    <span>-</span>
                                </div>
                                <div class="order-quantity">
                                    <input type="number" name="quantity" id="quantity" value="1" required>
                                </div>
                                <div class="plus-counter active" id="plus-counter">
                                    <span>+</span>
                                </div>
                            </div>
                            <div class="button">
                                <button type="submit" class=" btn btn-left">Beli Sekarang</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Contact -->

    </div>

@endsection


@push('scripts')

@endpush
