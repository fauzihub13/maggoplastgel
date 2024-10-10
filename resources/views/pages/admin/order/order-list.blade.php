@extends('layouts.app')

@section('title', 'Daftar Pesanan')

@push('style')
    <!-- CSS Libraries -->
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Daftar Pesanan</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item">Daftar pesanan</div>
                </div>
            </div>

            <div class="section-body">
                <h2 class="section-title">Pesanan</h2>
                <p class="section-lead">
                    Anda dapat mengelola semua pesanan.
                </p>

                <div class="row mb-4">
                    <div class="col-12">
                        <div class="card mb-0">
                            <div class="card-body">
                                <ul class="nav nav-pills">
                                    <li class="nav-item">
                                        <a class="nav-link active"
                                            data-toggle="tab"
                                            href="#all"
                                            role="tab"
                                            aria-controls="all"
                                            aria-selected="true">Belum dibayar<span class="badge badge-primary">1</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link"
                                            data-toggle="tab"
                                            href="#draft"
                                            role="tab"
                                            aria-controls="draft"
                                            aria-selected="false">Diproses <span class="badge badge-primary">1</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link"
                                            data-toggle="tab"
                                            href="#pending"
                                            role="tab"
                                            aria-controls="pending"
                                            aria-selected="false">Dalam pengiriman <span class="badge badge-primary">1</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link"
                                            data-toggle="tab"
                                            href="#trash"
                                            role="tab"
                                            aria-controls="trash"
                                            aria-selected="false">Tiba ditujuan <span class="badge badge-primary">1</span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h4>Daftar Pesanan</h4>
                        <div class="card-header-form">
                            <form>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search">
                                    <div class="input-group-btn">
                                        <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table-fit table">
                                <tbody>
                                    <tr>
                                        <th>Pesanan</th>
                                        <th>Alamat</th>
                                        <th>Waktu Pemesanan</th>
                                        <th>Status</th>
                                    </tr>
                                    @foreach ($orders as $order)
                                    <tr>
                                        <td class="pt-2">
                                            <div class="d-flex align-items-center">
                                                <i class="fa fa-user me-1"></i>
                                                <p class="m-0 ml-2">{{ $order->user->name }}</p>
                                            </div>
                                            @foreach ($order->orderItems as $item)
                                            <div class="card">
                                                <div class="card-body border">
                                                    <div class="d-flex justify-content-between">
                                                        <div class="d-flex align-items-center">
                                                            <img alt="image" src="/storage/{{ $item->product->productImages[0]->path ?? "" }}" class="rounded me-2 border" width="56" height="56" data-toggle="tooltip" title="{{ $item->product->name ?? "" }}">
                                                            <p class="m-0 ml-2">{{ $item->product->name ?? "" }}</p>
                                                        </div>
                                                        <p class="m-0 d-flex align-items-center">{{ $item->quantity }} x  <span class="rupiah"> {{ $item->price }}</span></p>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach

                                        </td>
                                        <td class="align-middle">
                                            @php
                                                $user = $order->user
                                            @endphp
                                            {{ $user->phone_number }}
                                            <br>
                                            {{ $user->address_detail }}
                                            <br>
                                            {{ "$user->kelurahan, $user->kecamatan, $user->city, $user->province" }} 
                                            <br> 
                                            {{ $user->zip_code }}
                                        </td>
                                        <td>
                                            {{ $order->created_at->format('Y-m-d') }}
                                            <br>
                                            {{ $order->created_at->format('H:i') }}
                                        </td>
                                        <td>
                                            <div class="badge badge-{{ $order_status_color[$order->status] }}">{{ $order_status_message[$order->status] }}</div>
                                        </td>
                                    </tr>
                                    <tr class="border border-left-0 border-right-0">
                                        <td colspan="4">
                                           <strong>Total Penjualan</strong>
                                        </td>
                                        <td>
                                            <strong class="rupiah">{{ $order->orderItems->sum(function($item){
                                                return $item->price * $item->quantity;
                                            }) }}</strong>
                                        </td>
                                    </tr>
                                    @endforeach
                                    {{-- <tr>
                                        <td>
                                            2
                                        </td>
                                        <td>Redesign homepage</td>
                                        <td>
                                            <img alt="image" src="/assets/img/avatar/avatar-1.png" class="rounded-circle" width="35" data-toggle="tooltip" title="Nur Alpiana">
                                            <img alt="image" src="/assets/img/avatar/avatar-3.png" class="rounded-circle" width="35" data-toggle="tooltip" title="Hariono Yusup">
                                            <img alt="image" src="/assets/img/avatar/avatar-4.png" class="rounded-circle" width="35" data-toggle="tooltip" title="Bagus Dwi Cahya">
                                        </td>
                                        <td>2018-04-10</td>
                                        <td>
                                            <div class="badge badge-info">Todo</div>
                                        </td>
                                    </tr> --}}
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@push('scripts')
    <!-- JS Libraies -->

    <!-- Page Specific JS File -->
    <script src="{{ asset('js/rupiah.js') }}"></script>
@endpush
