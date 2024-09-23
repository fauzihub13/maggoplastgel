@extends('layouts.app')

@section('title', 'Tambah Produk')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet"
        href="{{ asset('library/summernote/dist/summernote-bs4.css') }}">
    <link rel="stylesheet"
        href="{{ asset('library/selectric/public/selectric.css') }}">
    <link rel="stylesheet"

        href="{{ asset('library/bootstrap-tagsinput/dist/bootstrap-tagsinput.css') }}">
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <div class="section-header-back">
                    <a href="features-posts.html"
                        class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
                </div>
                <h1>{{ isset($product) ? "Edit Artikel" : "Tambah Produk Baru" }}</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="#">Produk</a></div>
                    <div class="breadcrumb-item">{{ isset($product) ? "Edit Produk" : "Tambah Produk Baru" }}</div>
                </div>
            </div>

            <div class="section-body">
                <h2 class="section-title">{{ isset($product) ? "Edit Produk" : "Tambah Produk Baru" }}</h2>
                <p class="section-lead">
                    {{ isset($product) ? "Di halaman ini Anda dapat mengubah data produk" : "Di halaman ini Anda dapat menambah produk baru dan mengisi semua kolom." }}
                </p>

                <div class="row">
                    <div class="col-12">
                        <form class="card" id="form" method="post" action="" enctype="multipart/form-data">
                            @csrf
                            @isset($product)
                                @method('PUT')
                            @endisset
                            <div class="card-header">
                                
                            </div>
                            <div class="card-body">
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama Produk</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text"
                                            class="form-control" 
                                            name="name"
                                            value="{{ isset($product) ? $product->name : "" }}"
                                            required>
                                        @error('name')
                                        <div class="invalid-feedback">
                                            Nama produk tidak valid
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Foto Produk</label>
                                    <div class="col-sm-12 col-md-7 d-flex justify-content-start flex-wrap">
                                        <div id="image-preview-1"
                                            class="image-preview image-preview-product" style="{{ isset($article) ? "background-image: url('/storage/$article->thumbnail'); background-size: cover; background-position: center" : ""}}">
                                            <label for="image-upload-1"
                                                id="image-label">Foto 1</label>
                                            <input type="file"
                                                name="images[]"
                                                id="image-upload-1" 
                                                accept="image/png, image/gif, image/jpeg, image/jpg"
                                                {{ isset($article) ? "" : "required" }}/>
                                        </div>
                                        <div id="image-preview-2"
                                            class="image-preview image-preview-product" style="{{ isset($article) ? "background-image: url('/storage/$article->thumbnail'); background-size: cover; background-position: center" : ""}}">
                                            <label for="image-upload-2"
                                                id="image-label">Foto 2</label>
                                            <input type="file"
                                                name="images[]"
                                                id="image-upload-2" 
                                                accept="image/png, image/gif, image/jpeg, image/jpg"/>
                                                {{-- {{ isset($article) ? "" : "required" }}/> --}}
                                        </div>
                                        <div id="image-preview-3"
                                            class="image-preview image-preview-product" style="{{ isset($article) ? "background-image: url('/storage/$article->thumbnail'); background-size: cover; background-position: center" : ""}}">
                                            <label for="image-upload-3"
                                                id="image-label">Foto 3</label>
                                            <input type="file"
                                                name="images[]"
                                                id="image-upload-3" 
                                                accept="image/png, image/gif, image/jpeg, image/jpg"/>
                                                {{-- {{ isset($article) ? "" : "required" }}/> --}}
                                        </div>
                                        <div id="image-preview-4"
                                            class="image-preview image-preview-product" style="{{ isset($article) ? "background-image: url('/storage/$article->thumbnail'); background-size: cover; background-position: center" : ""}}">
                                            <label for="image-upload-4"
                                                id="image-label">Foto 4</label>
                                            <input type="file"
                                                name="images[]"
                                                id="image-upload-4" 
                                                accept="image/png, image/gif, image/jpeg, image/jpg"/>
                                                {{-- {{ isset($article) ? "" : "required" }}/> --}}
                                        </div>
                                        <div id="image-preview-5"
                                            class="image-preview image-preview-product" style="{{ isset($article) ? "background-image: url('/storage/$article->thumbnail'); background-size: cover; background-position: center" : ""}}">
                                            <label for="image-upload-5"
                                                id="image-label">Foto 5</label>
                                            <input type="file"
                                                name="images[]"
                                                id="image-upload-5" 
                                                accept="image/png, image/gif, image/jpeg, image/jpg"/>
                                                {{-- {{ isset($article) ? "" : "required" }}/> --}}
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Deskripsi Produk</label>
                                    <div class="col-sm-12 col-md-7">
                                        <textarea class="form-control"
                                            data-height="150"
                                            name="description"
                                            required=""></textarea>
                                        @error('description')
                                        <div class="invalid-feedback">
                                            Nama produk tidak valid
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Harga Produk</label>
                                    <div class="col-sm-12 col-md-7">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    Rp
                                                </div>
                                            </div>
                                            <input type="text"
                                                class="form-control currency"
                                                name="price">
                                        </div>
                                        @error('price')
                                        <div class="invalid-feedback">
                                            Nama produk tidak valid
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Stok Produk</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="number"
                                            class="form-control" 
                                            name="stock"
                                            min="0"
                                            value="{{ isset($product) ? $product->stock : "" }}"
                                            required>
                                        @error('stock')
                                        <div class="invalid-feedback">
                                            Nama produk tidak valid
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Berat Produk</label>
                                    <div class="col-sm-12 col-md-3">
                                        <div class="input-group">
                                            <input type="number"
                                                class="form-control"
                                                name="weight"
                                                min="1">
                                            <div class="input-group-append">
                                                <div class="input-group-text">
                                                    gram
                                                </div>
                                            </div>
                                        </div>
                                        @error('weight')
                                        <div class="invalid-feedback">
                                            Nama produk tidak valid
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Ukuran Produk </br> (optional)</label>
                                    <div class="col-sm-12 col-md-2 mb-4">
                                        <div class="input-group">
                                            <input type="number"
                                                class="form-control"
                                                placeholder="Panjang"
                                                name="length">
                                            <div class="input-group-append">
                                                <div class="input-group-text">
                                                    cm
                                                </div>
                                            </div>
                                            @error('length')
                                            <div class="invalid-feedback">
                                                Nama produk tidak valid
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-2 mb-4">
                                        <div class="input-group">
                                            <input type="number"
                                                class="form-control"
                                                placeholder="Lebar"
                                                name="width">
                                            <div class="input-group-append">
                                                <div class="input-group-text">
                                                    cm
                                                </div>
                                            </div>
                                            @error('width')
                                            <div class="invalid-feedback">
                                                Nama produk tidak valid
                                            </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-sm-12 col-md-2 mb-4">
                                        <div class="input-group">
                                            <input type="number"
                                                class="form-control"
                                                placeholder="Tinggi"
                                                name="height">
                                            <div class="input-group-append">
                                                <div class="input-group-text">
                                                    cm
                                                </div>
                                            </div>
                                            @error('height')
                                            <div class="invalid-feedback">
                                                Nama produk tidak valid
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Status Produk</label>
                                    <div class="col-sm-12 col-md-7">
                                        <label class="mt-2">
                                            <input type="checkbox"
                                                name="status"
                                                class="custom-switch-input"
                                                value="1"
                                                checked>
                                            <span class="custom-switch-indicator"></span>
                                            <span class="custom-switch-description">Aktif</span>
                                        </label>
                                        @error('status')
                                        <div class="invalid-feedback">
                                            Nama produk tidak valid
                                        </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                                    <div class="col-sm-12 col-md-7">
                                        <button class="btn btn-primary" type="submit">{{ isset($product) ? "Edit" : "Tambah" }} Produk</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@push('scripts')
    <!-- JS Libraies -->
    <script src="{{ asset('library/summernote/dist/summernote-bs4.js') }}"></script>
    <script src="{{ asset('library/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js') }}"></script>
    <script src="{{ asset('library/selectric/public/jquery.selectric.min.js') }}"></script>
    <script src="{{ asset('library/upload-preview/upload-preview.js') }}"></script>
    <script src="{{ asset('library/cleave.js/dist/cleave.min.js') }}"></script>

    <!-- Page Specific JS File -->
    <script>
        $("select").selectric();
        $.uploadPreview({
            input_field: "#image-upload-1",   // Default: .image-upload
            preview_box: "#image-preview-1",  // Default: .image-preview
            label_field: "#image-label-1",    // Default: .image-label
            label_default: "Choose File",   // Default: Choose File
            label_selected: "Change File",  // Default: Change File
            no_label: false,                // Default: false
            success_callback: null          // Default: null
        });
        $.uploadPreview({
            input_field: "#image-upload-2",   // Default: .image-upload
            preview_box: "#image-preview-2",  // Default: .image-preview
            label_field: "#image-label-2",    // Default: .image-label
            label_default: "Choose File",   // Default: Choose File
            label_selected: "Change File",  // Default: Change File
            no_label: false,                // Default: false
            success_callback: null          // Default: null
        });
        $.uploadPreview({
            input_field: "#image-upload-3",   // Default: .image-upload
            preview_box: "#image-preview-3",  // Default: .image-preview
            label_field: "#image-label-3",    // Default: .image-label
            label_default: "Choose File",   // Default: Choose File
            label_selected: "Change File",  // Default: Change File
            no_label: false,                // Default: false
            success_callback: null          // Default: null
        });
        $.uploadPreview({
            input_field: "#image-upload-4",   // Default: .image-upload
            preview_box: "#image-preview-4",  // Default: .image-preview
            label_field: "#image-label-4",    // Default: .image-label
            label_default: "Choose File",   // Default: Choose File
            label_selected: "Change File",  // Default: Change File
            no_label: false,                // Default: false
            success_callback: null          // Default: null
        });
        $.uploadPreview({
            input_field: "#image-upload-5",   // Default: .image-upload
            preview_box: "#image-preview-5",  // Default: .image-preview
            label_field: "#image-label-5",    // Default: .image-label
            label_default: "Choose File",   // Default: Choose File
            label_selected: "Change File",  // Default: Change File
            no_label: false,                // Default: false
            success_callback: null          // Default: null
        });
        $(".inputtags").tagsinput('items');
        var cleaveC = new Cleave(".currency", {
            numeral: true,
            numeralThousandsGroupStyle: "thousand",
        });

        document.getElementById("form").addEventListener("submit", function (event) {
            // Ambil input dengan class 'currency'
            var input = document.querySelector(".currency");

            // Set nilai input ke raw value (tanpa format) sebelum form dikirim
            input.value = cleaveC.getRawValue();
        });
    </script>
@endpush
