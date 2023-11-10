@extends('user.index-user')

@section('container')
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
                @foreach ($products as $product)
                    <div class="col-6 col-lg-3" data-aos="zoom-in-down">
                        <a class="text-decoration-none" href="{{ route('detail', ['id' => $product->id]) }}">
                            <div class="pro-card rounded border p-3">
                                <!-- image product -->
                                <div class="pro-image d-flex align-items-center justify-content-center rounded">
                                    @if ($product->detailGambarProduct->isNotEmpty())
                                        <img src="{{ asset('storage/gambar/' . $product->detailGambarProduct[0]->gambar) }}"
                                            alt="{{ $product->nama_product }}" class="pro-animation img-fluid rounded"
                                            loading="lazy">
                                    @endif
                                </div>

                                <!-- product info -->
                                <div class="des-pro">
                                    <h5 class="judul-card my-2">{{ $product->nama_product }}</h5>
                                    <div class="star">
                                        <p class="rating-card m-0">
                                            <i class="fas fa-star"></i>
                                            {{ $product->rating }}
                                        </p>
                                    </div>
                                    <p class="harga-card m-0">{{ $product->harga }}</p>
                                    <p class="lokasi-card m-0"><i class="fa-solid fa-location-dot"></i>
                                        {{ $product->toko->kota }}</p>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
