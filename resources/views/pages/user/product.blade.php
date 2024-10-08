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
                        <div class=""></div>
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
                                @if (isset($product))
                                    <img src="{{ ('storage/'.$product->productImages[0]->path) }}" alt="Maggoplastgel">
                                @else
                                    <img src="{{asset('images/testimonials/young-beautiful-florist-watering-flowers.jpg')}}" alt="Maggoplastgel">
                                @endif
                            </div>
                            <div class="slider-images d-flex">
                                @if (isset($product))
                                    @foreach ($product->productImages as $index => $image)
                                        <div class="single-image {{ $index === 0 ? 'image-active' : '' }}" >
                                            <img src="{{('storage/'.$image->path)}}" alt="Maggoplastgel">
                                        </div>
                                    @endforeach
                                @else
                                    <div class="single-image" >
                                        <img src="{{asset('images/testimonials/young-beautiful-florist-watering-flowers.jpg')}}" alt="Maggoplastgel">
                                    </div>
                                @endif
                            </div>
                        </div>
                        <div class="themesflat-spacer clearfix" data-desktop="0" data-mobile="30" data-smobile="30"></div>
                    </div>
                    <div class="col-md-6 wow fadeInUp">
                        <div class="contact-right">
                            @if (isset($product))
                                <div class="section-title mb-1">{{ $product->name }}</div>
                                <div class="product-price mb-2">{{ $product->price }}</div>
                                <div class="section-desc mb-2">
                                    {{ $product->description }}
                                </div>
                            @endif
                            <div class="quantity-section">
                                <div class="minus-counter active" id="minus-counter">
                                    <span>-</span>
                                </div>
                                <div class="order-quantity">
                                    <form action="{{ route ('user.checkout') }}" method="POST" id="productForm">
                                        @csrf
                                        @method('POST')
                                        <input type="number" name="quantity" id="quantity" value="1" required>
                                    </form>
                                </div>
                                <div class="plus-counter active" id="plus-counter">
                                    <span>+</span>
                                </div>
                            </div>
                            <div class="button">
                                <button type="submit" class="btn btn-left" form="productForm">Beli Sekarang</button>
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
