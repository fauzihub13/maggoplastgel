@extends('layouts.app')

@section('title', 'Daftar Artikel')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet"
        href="{{ asset('library/selectric/public/selectric.css') }}">
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Produk</h1>
                <div class="section-header-button">
                    <a href="/produk/tambah-produk"
                        class="btn btn-primary">Tambah Produk</a>
                </div>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="#">Produk</a></div>
                    <div class="breadcrumb-item">Semua produk</div>
                </div>
            </div>
            <div class="section-body">
                <h2 class="section-title">Produk</h2>
                <p class="section-lead">
                    Anda dapat mengelola semua produk, seperti mengedit, menghapus, dan lainnya.
                </p>

                {{-- <div class="row">
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
                                            aria-selected="true">All <span class="badge badge-white">{{ $articles->count() }}</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link"
                                            data-toggle="tab"
                                            href="#draft"
                                            role="tab"
                                            aria-controls="draft"
                                            aria-selected="false">Draft <span class="badge badge-primary">{{ $draft->count() }}</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link"
                                            data-toggle="tab"
                                            href="#pending"
                                            role="tab"
                                            aria-controls="pending"
                                            aria-selected="false">Pending <span class="badge badge-primary">{{ $pending->count() }}</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link"
                                            data-toggle="tab"
                                            href="#trash"
                                            role="tab"
                                            aria-controls="trash"
                                            aria-selected="false">Trash <span class="badge badge-primary">{{ $trash->count() }}</span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div> --}}
                <div class="row mt-4">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Semua Artikel</h4>
                            </div>
                            <div class="card-body tab-content">
                                <div class="float-left">
                                    <select class="form-control selectric">
                                        <option>Action For Selected</option>
                                        <option>Move to Draft</option>
                                        <option>Move to Pending</option>
                                        <option>Delete Pemanently</option>
                                    </select>
                                </div>
                                <div class="float-right">
                                    <form>
                                        <div class="input-group">
                                            <input type="text"
                                                class="form-control"
                                                placeholder="Search">
                                            <div class="input-group-append">
                                                <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                                <div class="clearfix mb-3"></div>

                                <div class="table-responsive">
                                    <table class="table-striped table">
                                        <tr>
                                            <th>
                                                <div class="custom-checkbox custom-control">
                                                    <input type="checkbox"
                                                        data-checkboxes="mygroup"
                                                        data-checkbox-role="dad"
                                                        class="custom-control-input"
                                                        id="checkbox-all">
                                                    <label for="checkbox-all"
                                                        class="custom-control-label">&nbsp;</label>
                                                </div>
                                            </th>
                                            <th>Produk</th>
                                            <th>Harga</th>
                                            <th>Berat</th>
                                            <th>Stok</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                        @foreach ($products as $product)
                                        <tr>
                                            <td class="p-0 text-center">
                                                <div class="custom-checkbox custom-control">
                                                    <input type="checkbox"
                                                        data-checkboxes="mygroup"
                                                        class="custom-control-input"
                                                        id="checkbox-1">
                                                    <label for="checkbox-1"
                                                        class="custom-control-label">&nbsp;</label>
                                                </div>
                                            </td>
                                            <td>
                                                <figure class="avatar avatar-md mr-2">
                                                    <img src="/storage/{{ $product->productImages()->first()->path ?? '' }}" alt="...">
                                                </figure>
                                                {{ $product->name }}
                                            </td>
                                            <td class="align-middle currency">
                                                {{ $product->price }}
                                            </td>
                                            <td>
                                                {{ $product->weight }}
                                            </td>
                                            <td>
                                                {{ $product->stock }}
                                            </td>
                                            <td>
                                                <div class="badge badge-{{ $product->status ? "success" : "danger" }}">{{ $product->status ? "Aktif" : "Non-aktif" }}</div>
                                            </td>
                                            <td><a href="#"
                                                    class="btn btn-primary">Detail</a></td>
                                        </tr>
                                        @endforeach
                                    </table>
                                </div>

                                <div class="float-right">
                                    <nav>
                                        <ul class="pagination">
                                            <li class="page-item disabled">
                                                <a class="page-link"
                                                    href="#"
                                                    aria-label="Previous">
                                                    <span aria-hidden="true">&laquo;</span>
                                                    <span class="sr-only">Previous</span>
                                                </a>
                                            </li>
                                            <li class="page-item active">
                                                <a class="page-link"
                                                    href="#">1</a>
                                            </li>
                                            <li class="page-item">
                                                <a class="page-link"
                                                    href="#">2</a>
                                            </li>
                                            <li class="page-item">
                                                <a class="page-link"
                                                    href="#">3</a>
                                            </li>
                                            <li class="page-item">
                                                <a class="page-link"
                                                    href="#"
                                                    aria-label="Next">
                                                    <span aria-hidden="true">&raquo;</span>
                                                    <span class="sr-only">Next</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div> 
@endsection

@push('scripts')
    <!-- JS Libraies -->
    <script src="{{ asset('library/selectric/public/jquery.selectric.min.js') }}"></script>
    <script src="{{ asset('library/cleave.js/dist/cleave.min.js') }}"></script>
    <script src="{{ asset('library/sweetalert/dist/sweetalert.min.js') }}"></script>

    <!-- Page Specific JS File -->
    <script src="{{ asset('js/page/features-posts.js') }}"></script>
    <script>
        var cleaveC = new Cleave(".currency", {
            numeral: true,
            numeralThousandsGroupStyle: "thousand",
        });
    </script>
    
@endpush
