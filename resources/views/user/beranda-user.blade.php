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
            <div class="header">
                <h2 class="section-title text-center underline">Why Choose Us ?</h2>
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
                        <img src="/img/banner/features-banner.webp" width="369" height="318" loading="lazy"
                            alt="Features Banner" class="banner-animation img-fluid">
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
        <div class="header">
            <h2 class="section-title text-center underline">Featured Products</h2>
            <p class="text-center">Makanan adalah setiap zat yang dikonsumsi untuk memberikan dukungan nutrisi bagi suatu
                organisme.</p>
        </div>

        <!-- Product Recommendation List -->
        <div class="pro-container container">
            <div class="row">
                <div class="col-md-6 col-lg-3">
                    <div class="pro-card rounded border p-3">
                        <a href="/product-details/635cd5265139db4f31a56e8a">
                            <!-- image product -->
                            <div class="pro-image">
                                <img src="https://drive.google.com/uc?export=view&amp;id=1zXf6sINrE3JjhvHmVpJ-TUOz78P60XdB"
                                    alt="Jalangkote Setengah Masak" class="pro-animation img-fluid rounded"
                                    loading="lazy">
                            </div>

                            <!-- product info -->
                            <div class="des-pro">
                                <h3>Jalangkote Setengah Masak</h3>
                                <div class="star">
                                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                        class="fas fa-star"></i><i class="fas fa-star"></i>
                                </div>
                                <h4>8.000</h4>
                            </div>
                        </a>

                        <!-- input hidden untuk id toko penjual, berat produk, no telp penjual -->
                        <input type="hidden" name="idpenjual" value="635ccda31ae2ee8f47d58c43">
                        <input type="hidden" name="beratproduct" value="80 gr">
                        <input type="hidden" name="notelppenjual" value="6281250502698">

                        <!-- product button Cart -->
                        <i class="fal fa-shopping-cart btn-cart" data-idproduct="635cd5265139db4f31a56e8a"></i>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="pro-card rounded border p-3">
                        <a href="/product-details/635cd74cd494311aaaed7792">
                            <!-- image product -->
                            <div class="pro-image">
                                <img src="https://drive.google.com/uc?export=view&amp;id=11_bcVtOkyxTuHO4K0cEHoU634hj2xsUz"
                                    alt="Lumpia Setengah Masak" class="pro-animation img-fluid rounded" loading="lazy">
                            </div>

                            <!-- product info -->
                            <div class="des-pro">
                                <h3>Lumpia Setengah Masak</h3>
                                <div class="star">
                                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                        class="fas fa-star"></i><i class="fas fa-star"></i>
                                </div>
                                <h4>8.000</h4>
                            </div>
                        </a>

                        <!-- input hidden untuk id toko penjual, berat produk, no telp penjual -->
                        <input type="hidden" name="idpenjual" value="635ccda31ae2ee8f47d58c43">
                        <input type="hidden" name="beratproduct" value="100 gr">
                        <input type="hidden" name="notelppenjual" value="6281250502698">

                        <!-- product button Cart -->
                        <i class="fal fa-shopping-cart btn-cart" data-idproduct="635cd74cd494311aaaed7792"></i>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="pro-card rounded border p-3">
                        <a href="/product-details/635cdc8b27fbd724c7b1da4e">
                            <!-- image product -->
                            <div class="pro-image">
                                <img src="https://drive.google.com/uc?export=view&amp;id=1wuU2zn5mb0fhVPi30JzszNcBawmIM64c"
                                    alt="Otak-Otak Ikan Tenggiri Setengah Masak" class="pro-animation img-fluid rounded"
                                    loading="lazy">
                            </div>

                            <!-- product info -->
                            <div class="des-pro">
                                <h3>Otak-Otak Ikan Tenggiri Setengah Masak</h3>
                                <div class="star">
                                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                        class="fas fa-star"></i><i class="fas fa-star"></i>
                                </div>
                                <h4>8.000</h4>
                            </div>
                        </a>

                        <!-- input hidden untuk id toko penjual, berat produk, no telp penjual -->
                        <input type="hidden" name="idpenjual" value="635ccda31ae2ee8f47d58c43">
                        <input type="hidden" name="beratproduct" value="60 gr">
                        <input type="hidden" name="notelppenjual" value="6281250502698">

                        <!-- product button Cart -->
                        <i class="fal fa-shopping-cart btn-cart" data-idproduct="635cdc8b27fbd724c7b1da4e"></i>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="pro-card rounded border p-3">
                        <a href="/product-details/635cf06035a01423faf720c1">
                            <!-- image product -->
                            <div class="pro-image">
                                <img src="https://drive.google.com/uc?export=view&amp;id=1W0TpW7qsmnLKNLxqW9J2dHTN7Mrpm8Om"
                                    alt="Bakso Halus Teryxu" class="pro-animation img-fluid rounded" loading="lazy">
                            </div>

                            <!-- product info -->
                            <div class="des-pro">
                                <h3>Bakso Halus Teryxu</h3>
                                <div class="star">
                                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                        class="fas fa-star"></i><i class="fas fa-star"></i>
                                </div>
                                <h4>37.000</h4>
                            </div>
                        </a>

                        <!-- input hidden untuk id toko penjual, berat produk, no telp penjual -->
                        <input type="hidden" name="idpenjual" value="635ce4404646d439fe0d89d8">
                        <input type="hidden" name="beratproduct" value="300 gr / 18-20 biji">
                        <input type="hidden" name="notelppenjual" value="6285298989518">

                        <!-- product button Cart -->
                        <i class="fal fa-shopping-cart btn-cart" data-idproduct="635cf06035a01423faf720c1"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- <section class="banncta-section reveal active" id="banner-cta-section">
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
                            <h3 class="banner-title">Try Our Delicious Tasty Product!</h3>
                            <p class="banner-text">Free Admin Fees! For Any Transaction</p>
                            <button class="btn"><a href="/product">Order Now</a></button>
                        </div>
                    </div>
                </li>

                <!-- Small Banner1 -->
                <li class="banner-item banner-sm banner-sm1">
                    <div class="banner-card">
                        <img src="/img/banner/cta-banner2.webp" width="550" height="465" loading="lazy"
                            alt="CTA Banner Picture" class="banner-img">

                        <div class="banner-item-content">
                            <h3 class="banner-title">Delicious Sausage</h3>

                            <p class="banner-text">100% Free Admin Fees</p>

                            <button class="btn"><a href="/product">Order Now</a></button>
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

                            <button class="btna"><a href="/product">Order Now</a></button>
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

                            <button class="btn"><a href="/product">Order Now</a></button>
                        </div>
                    </div>
                </li>
            </ul>

        </div>
    </section> --}}
@endsection
