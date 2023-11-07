@extends('user.index-user')

@section('container')
    <section class="bg-body-tertiary mx-md-4 mx-0 my-4 mb-5 overflow-hidden rounded" id="carousel-section">
        <div id="carouselExampleDark" class="carousel carousel-dark slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="10000">
                    <img src="{{ asset('image/carousel/carousel (1).png') }}" class="d-block w-100"
                        style="max-height: 355px" alt="{{ asset('image/carousel/carousel (1).png') }}">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>First slide label</h5>
                        <p>Some representative placeholder content for the first slide.</p>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                    <img src="{{ asset('image/carousel/carousel (2).png') }}" class="d-block w-100"
                        style="max-height: 355px" alt="{{ asset('image/carousel/carousel (2).png') }}">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Second slide label</h5>
                        <p>Some representative placeholder content for the second slide.</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>

    <section class="feature-section reveal active my-4 mb-5" id="feature-promo-section ">
        <div class="container-features container">
            <!-- Judul Feature -->
            <div class="header my-5 mb-3 mt-5">
                <h2 class="section-title text-center">Why Choose Us ?</h2>
            </div>
            <div class="row g-3">
                <div class="col-12 col-md-4">
                    <!-- Feature list 1 -->
                    <div class="row g-3">
                        <!-- Item list ke-1 -->
                        <div class="col-12">
                            <div class="features-card rounded border px-3 py-2">
                                <div class="row">
                                    <div class="icon col-4">
                                        <img src="{{ asset('image/why-choose-us/icon-featured (1).png') }}"
                                            alt="icon-featured (1).png" class="img-fluid">
                                    </div>
                                    <div class="content col">
                                        <h3 class="h3 title">Free Admin Fees</h3>
                                        <p class="text">
                                            Our service provides free admin fees for every transaction.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Item list ke-2 -->
                        <div class="col-12">
                            <div class="features-card rounded border px-3 py-2">
                                <div class="row">
                                    <div class="icon col-4">
                                        <img src="{{ asset('image/why-choose-us/icon-featured (1).png') }}"
                                            alt="icon-featured (1).png" class="img-fluid">
                                    </div>
                                    <div class="content col">
                                        <h3 class="h3 title">Easily Payment</h3>
                                        <p class="text">
                                            We provide payment methods that make transactions easy for you.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <!-- Feature Banner image -->
                    <div class="features-banner text-center">
                        <img src="{{ asset('image/why-choose-us/bannerwhychoose.png') }}" width="369" height="318"
                            loading="lazy" alt="Features Banner" class="banner-animation img-fluid">
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <!-- Feature list 2 -->
                    <div class="row g-3">
                        <!-- Item list ke-3 -->
                        <div class="col-12">
                            <div class="features-card rounded border px-3 py-2">
                                <div class="row">
                                    <div class="icon col-4">
                                        <img src="{{ asset('image/why-choose-us/icon-featured (1).png') }}"
                                            alt="icon-featured (1).png" class="img-fluid">
                                    </div>
                                    <div class="content col">
                                        <h3 class="h3 title">Updated Product</h3>
                                        <p class="text">
                                            Our products are constantly updated to meet your needs.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Item list ke-4 -->
                        <div class="col-12">
                            <div class="features-card rounded border px-3 py-2">
                                <div class="row">
                                    <div class="icon col-4">
                                        <img src="{{ asset('image/why-choose-us/icon-featured (1).png') }}"
                                            alt="icon-featured (1).png" class="img-fluid">
                                    </div>
                                    <div class="content col">
                                        <h3 class="h3 title">Online Order</h3>
                                        <p class="text">
                                            You can order the products you want through our online service.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="product-section reveal active my-4 mb-5" id="product-recom-section ">
        <!-- Judul dan Deskripsi Recom Section -->
        <div class="header my-5 mb-3 mt-5">
            <h2 class="section-title text-center">Rekomendasi <span class="title-span">Penjahit</span></h2>
            <p class="text-center">Makanan adalah setiap zat yang dikonsumsi untuk memberikan dukungan nutrisi bagi suatu
                organisme.</p>
        </div>

        <!-- Product Recommendation List -->
        <div class="pro-container container">
            <div class="row g-3">
                <div class="col-6 col-lg-3">
                    <a class="text-decoration-none" href="/product-details/635cd5265139db4f31a56e8a">
                        <div class="pro-card rounded border p-3">
                            <!-- image product -->
                            <div class="pro-image rounded">
                                <img src="{{ asset('image/card/card-img.png') }}" alt="Jalangkote Setengah Masak"
                                    class="pro-animation img-fluid rounded" loading="lazy">
                            </div>

                            <!-- product info -->
                            <div class="des-pro">
                                <h5 class="judul-card my-2">Jalangkote Setengah Masak</h5>
                                <div class="star">
                                    <p class="rating-card m-0">
                                        <i class="fas fa-star"></i>
                                        4.7 --5.4k Reviews
                                    </p>
                                </div>
                                <p class="harga-card m-0">8.000</p>
                                <p class="lokasi-card m-0"><i class="fa-solid fa-location-dot"></i> Makassar</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-6 col-lg-3">
                    <a class="text-decoration-none" href="/product-details/635cd5265139db4f31a56e8a">
                        <div class="pro-card rounded border p-3">
                            <!-- image product -->
                            <div class="pro-image rounded">
                                <img src="{{ asset('image/card/card-img.png') }}" alt="Jalangkote Setengah Masak"
                                    class="pro-animation img-fluid rounded" loading="lazy">
                            </div>

                            <!-- product info -->
                            <div class="des-pro">
                                <h5 class="judul-card my-2">Jalangkote Setengah Masak</h5>
                                <div class="star">
                                    <p class="rating-card m-0">
                                        <i class="fas fa-star"></i>
                                        4.7 --5.4k Reviews
                                    </p>
                                </div>
                                <p class="harga-card m-0">8.000</p>
                                <p class="lokasi-card m-0"><i class="fa-solid fa-location-dot"></i> Makassar</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-6 col-lg-3">
                    <a class="text-decoration-none" href="/product-details/635cd5265139db4f31a56e8a">
                        <div class="pro-card rounded border p-3">
                            <!-- image product -->
                            <div class="pro-image rounded">
                                <img src="{{ asset('image/card/card-img.png') }}" alt="Jalangkote Setengah Masak"
                                    class="pro-animation img-fluid rounded" loading="lazy">
                            </div>

                            <!-- product info -->
                            <div class="des-pro">
                                <h5 class="judul-card my-2">Jalangkote Setengah Masak</h5>
                                <div class="star">
                                    <p class="rating-card m-0">
                                        <i class="fas fa-star"></i>
                                        4.7 --5.4k Reviews
                                    </p>
                                </div>
                                <p class="harga-card m-0">8.000</p>
                                <p class="lokasi-card m-0"><i class="fa-solid fa-location-dot"></i> Makassar</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-6 col-lg-3">
                    <a class="text-decoration-none" href="/product-details/635cd5265139db4f31a56e8a">
                        <div class="pro-card rounded border p-3">
                            <!-- image product -->
                            <div class="pro-image rounded">
                                <img src="{{ asset('image/card/card-img.png') }}" alt="Jalangkote Setengah Masak"
                                    class="pro-animation img-fluid rounded" loading="lazy">
                            </div>

                            <!-- product info -->
                            <div class="des-pro">
                                <h5 class="judul-card my-2">Jalangkote Setengah Masak</h5>
                                <div class="star">
                                    <p class="rating-card m-0">
                                        <i class="fas fa-star"></i>
                                        4.7 --5.4k Reviews
                                    </p>
                                </div>
                                <p class="harga-card m-0">8.000</p>
                                <p class="lokasi-card m-0"><i class="fa-solid fa-location-dot"></i> Makassar</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    {{-- <section class="banncta-section reveal active" id="banner-cta-section"5
        <div class="cta-container">

            <!-- List of CTA Banner -->
            <ul class="cta-banner-list">
                <!-- Large Banner -->
                <li class="banner-item banner-lg">
                    <div class="banner-card">
                        <img src="/img/banner/cta-banner1.webp" width="550" height="450" loading="lazy"
                            alt="CTA Banner Picture" class="banner-img">

                        <div class="banner-item-content">
                            <p class="banner-subtitle">100% Free Admin Fees!</p>
                            <h4 class="banner-title">Try Our Delicious Tasty Product!</h4>
                            <p class="banner-text">Free Admin Fees! For Any Transaction</p>
                            <button class="btn"><a class="text-decoration-none" href="/product">Order Now</a></button>
                        </div>
                    </div>
                </li>

                <!-- Small Banner1 -->
                <li class="banner-item banner-sm banner-sm1">
                    <div class="banner-card">
                        <img src="/img/banner/cta-banner2.webp" width="550" height="465" loading="lazy"
                            alt="CTA Banner Picture" class="banner-img">

                        <div class="banner-item-content">
                            <h4 class="banner-title">Delicious Sausage</h4>

                            <p class="banner-text">100% Free Admin Fees</p>

                            <button class="btn"><a class="text-decoration-none" href="/product">Order Now</a></button>
                        </div>
                    </div>
                </li>

                <!-- Small Banner2 -->
                <li class="banner-item banner-sm banner-sm2">
                    <div class="banner-card">
                        <img src="/img/banner/cta-banner3.webp" width="550" height="465" loading="lazy"
                            alt="CTA Banner Picture" class="banner-img">

                        <div class="banner-item-content">
                            <h3 class="banner-title">Delicious Meatballs</h3>

                            <p class="banner-text">100% Free Admin Fees</p>

                            <button class="btna"><a class="text-decoration-none" href="/product">Order Now</a></button>
                        </div>
                    </div>
                </li>

                <!-- Medium Banner -->
                <li class="banner-item banner-md">
                    <div class="banner-card">
                        <img src="/img/banner/cta-banner4.webp" width="550" height="220" loading="lazy"
                            alt="CTA Banner Picture" class="banner-img">

                        <div class="banner-item-content">
                            <h3 class="banner-title">Delicious Fish Rolls</h3>

                            <p class="banner-text">Free Admin Fees for Certain Period</p>

                            <button class="btn"><a class="text-decoration-none" href="/product">Order Now</a></button>
                        </div>
                    </div>
                </li>
            </ul>

        </div>
    </section> --}}
@endsection
