@extends('user.index-user')

@section('container')
    <section class="container">
        <div class="row my-5 rounded border border-black p-3">
            <div class="col-12 col-md-6">
                <img class="w-100 img-height banner-animation" src="{{ asset('image/about-us/undraw_About_us_page.png') }}"
                    alt="undraw_About_us_page.png">
            </div>
            <div class="col-12 col-md-6">
                <div class="row h-100 justify-content-center align-items-center">
                    <div class="col-12 text-center">
                        <h2 class="about-title">What is Jahitku ?</span></h2>
                        <p>Mencari Situs Web Tempat Anda Bisa Mendapatkan Semua Jenis Produk Makanan Beku? - Situs Web
                            Kami
                            Adalah Tempat Yang Tepat Untuk Anda. Kami Lebih Dari 100% Yakin Bahwa Anda Akan Puas Dengan
                            Produk Makanan Beku Dan Layanan Yang Kami Sediakan.
                        </p>
                        <button type="button" class="btn btn-primary">Tampilkan Produk</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
