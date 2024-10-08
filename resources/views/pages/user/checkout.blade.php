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
                    <div class="">
                        {{-- <div class="overlay-image"></div> --}}
                        <div class="banner-title">
                            <div class="page-title-heading">
                                Checkout
                            </div>
                            <div class="page-title-content link-style6">
                                <span><a class="home" href="{{ route('user.home') }}">Beranda</a></span><span class="page-title-content-inner"><a class="home" href="{{ route('user.product') }}">Produk</a></span><span class="page-title-content-inner">Checkout</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.page-title -->


        <!-- Address -->
        <section class="section-address">
            <div class="container chekcout-section border-top box-shadow wow fadeInUp">
                <div class="row mb-1">
                    <div class="col-12">
                        <div class="d-flex">
                            <span class="icon-map"><i class="color-primary fa fa-solid fa-location-dot"></i></span>
                            <h3 class="section-heading-rubik-size20 text-custom-primary">Alamat Pengiriman</h3>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-3 mb-1">
                       <strong><h3 class="text-custom-primary section-custom-medium">Fauzi Adi Saputra <br>(0123213313123)</h3></strong>
                    </div>
                    <div class="col-md-7 mb-1">
                        <p class="desc-box text-custom-primary">
                            Jl. Kumbang No.14, RT.02/RW.06, Babakan, Kecamatan Bogor Tengah, Kota Bogor, Jawa Barat 16128
                        </p>
                    </div>
                    <div class="col-md-2">
                        <a href="" class="desc-box text-custom-grey text-right ">Ubah</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Desktop View -->
        <section class="large-view-product ">
            <div class="container chekcout-section box-shadow wow fadeInUp">
                <div class="row mb-1">
                    <div class="col-12">
                        <div class="d-flex">
                            <h3 class="section-heading-rubik-size20 text-custom-primary">Pesanan Anda</h3>
                        </div>
                    </div>
                </div>

                <div class="row">

                    <table class="table">
                        <thead>
                            <tr>
                                <th class="text-center"><strong>Produk</strong></th>
                                <th class="text-center"><strong>Harga Satuan</strong></th>
                                <th class="text-center"><strong>Jumlah</strong></th>
                                <th class="text-center"><strong>Subtotal</strong></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="row-product">
                                <td>
                                    <div class=" d-flex">
                                        <div class="product-small">
                                            <img src="{{asset('images/testimonials/young-beautiful-florist-watering-flowers.jpg')}}" alt="images">
                                        </div>
                                        <p class="vertical-center">Maggoplastgel ahuy</p>
                                    </div>
                                </td>
                                <td class="vertical-center text-center">Rp30.000</td>
                                <td class="vertical-center text-center">5</td>
                                <td class="vertical-center text-center">Rp150.000</td>
                            </tr>
                            <tr class="row-product-subtotal">
                                <td colspan="3" class="text-right">
                                    <strong>Total Produk (5)</strong>
                                </td>
                                <td class="text-center">Rp150.000</td>

                            </tr>
                        </tbody>
                    </table>

                </div>

            </div>
        </section>

        {{-- Mobile View --}}
        <section class="small-view-product  box-shadow">
            <div class="container  wow fadeInUp">
                <div class="row mb-1">
                    <div class="col-12">
                        <div class="d-flex">
                            <h3 class="section-heading-rubik-size20 text-custom-primary">Pesanan Anda</h3>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="d-flex">
                        <div class="">
                            <div class="product-small">
                                <img src="{{asset('images/testimonials/young-beautiful-florist-watering-flowers.jpg')}}" alt="images">
                            </div>
                        </div>
                        <div class="">
                            <p class="text-custom-primary">{{ Str::substr('Maggoplast ahutttt Maggoplast ahutttt Maggoplast ahutttt Maggoplast ahutttt', 0, 60)  }}..</p>
                            <p class="text-custom-primary text-custom-grey text-right">5x</p>
                            <p class="text-custom-primary text-custom-grey text-right">Rp30.000</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <hr>
                    <div class="mobile-subtotal-product">
                        <h3 class="section-custom-medium text-custom-primary"><strong>Total Produk (5)</strong></h3>
                        <p class="text-custom-primary text-right">Rp150.000</p>
                    </div>

                </div>

            </div>
        </section>

        <div class="row mt-5"></div>
        <div class="row mt-5"></div>
        <div class="row mt-5"></div>
        <!-- /Contact -->

    </div>

@endsection


@push('scripts')

@endpush
