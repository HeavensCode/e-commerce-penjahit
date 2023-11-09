@extends('user.index-user')

@section('container')
    <section class="prodetails-section reveal active container-md" id="product-details-section">
        <div class="prodetails-section-card w-100 rounded border p-4">
            <!-- Product Details img & content -->
            <div class="row border-bottom pb-4">
                <!-- Container Foto Kiri Detail Produk -->
                <div class="col-md-4 col-12">
                    <!-- Foto Besar Produk -->
                    <div class="row">
                        <figure class="product-display col">
                            <img class="h-100 w-100"
                                src="{{ asset('storage/gambar/' . $product->detailGambarProduct[0]->gambar) }}" width="700"
                                height="700" loading="lazy" alt="{{ $product->nama_product }}">
                        </figure>
                    </div>

                    <div class="row g-2" style="overflow-x: auto; white-space: nowrap;">
                        @foreach ($product->detailGambarProduct as $gambar)
                            <div class="product-thumbnail-item col" style="max-width: 25%; overflow: hidden;">
                                <img class="h-100 w-100" src="{{ asset('storage/gambar/' . $gambar->gambar) }}"
                                    width="700" height="700" loading="lazy" alt="{{ $product->nama_product }}">
                            </div>
                        @endforeach
                    </div>
                </div>

                <!-- Container Product Details Content -->
                <div class="col-md-8 col-12">
                    <div class="row g-3">
                        <!-- Judul Produk -->
                        <h3 class="product-title col-12">{{ $product->nama_product }}</h3>

                        <!-- Harga Produk -->
                        <data class="product-price bg-body-secondary row col-12 px-3">Rp{{ $product->harga }}</data>

                        <!-- Rating Produk -->
                        <div class="rating-wrapper col-12">
                            @php
                                $rating = floatval($product->rating);
                            @endphp

                            @for ($i = 1; $i <= 5; $i++)
                                @if ($i <= $rating)
                                    <i class="fas fa-star text-warning"></i>
                                @elseif ($i - 0.5 <= $rating)
                                    <i class="fas fa-star-half-alt text-warning"></i>
                                @else
                                    <i class="fas fa-star"></i>
                                @endif
                            @endfor
                        </div>


                        <!-- Deskripsi Singkat Produk -->
                        <div class="product-text col-12">
                            <p>Deskripsi Singkat : <span>{{ $product->detailProduct->deskripsi }}</span></p>
                        </div>

                        <!-- Berat Produk -->
                        <div class="product-text col-12">
                            <div class="row align-items-center g-2">
                                <div class="col-4 col-md-2 text-center">
                                    <p class="m-0 p-1 text-start">Brand : </p>
                                </div>
                                <div class="col-8 col-md-4 rounded text-center">
                                    <p class="bg-warning-subtle m-0 rounded p-1">
                                        <b>{{ $product->detailProduct->merk }}</b>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Kuantitas Produk -->
                        <div class="product-text col-12">
                            <div class="row align-items-center g-2">
                                <div class="col-4 col-md-2 text-center">
                                    <p class="m-0 p-1 text-start">Kuantitas: </p>
                                </div>
                                <div class="col-4 col-md-2 kuantitas">
                                    <div class="input-group">
                                        <input type="number" class="form-control text-center" id="quantityInput"
                                            value="1" min="1" max="50">
                                    </div>
                                </div>
                                <div class="col-4 col-md-2 text-center">
                                    <a href="#" class="text-decoration-none p-0">
                                        <button class="btn btn-primary">Add to Cart</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Description & Information Product Details -->
            <div class="row border-bottom py-4">
                <h4 class="description-title">Deskripsi Produk : </h4>
                <p class="description-text">
                    {{ $product->detailProduct->deskripsi }}
                </p>
            </div>

            <div class="row border-bottom py-4">
                <h4 class="description-title">Spesifiksi Produk : </h4>
                <div class="row">
                    <div class="col-12 col-sm-10 col-md-8 col-lg-6">
                        <table class="table-responsive table">
                            <tbody>
                                <tr>
                                    <th scope="row">Bahan</th>
                                    <td>{{ $product->detailProduct->bahan }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Ukuran</th>
                                    <td>{{ $product->detailProduct->size }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Motif</th>
                                    <td>{{ $product->detailProduct->motif }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Stok</th>
                                    <td>{{ $product->stock }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Dikirim dari</th>
                                    <td>{{ $product->toko->nama_toko }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <script>
        // Ambil semua elemen thumbnail
        const thumbnailItems = document.querySelectorAll(".product-thumbnail-item");

        // Ambil elemen display gambar
        const displayImage = document.querySelector(".product-display img");

        // Tambahkan event listener ke setiap elemen thumbnail
        thumbnailItems.forEach((thumbnail) => {
            thumbnail.addEventListener("click", () => {
                // Dapatkan URL gambar dari thumbnail yang diklik
                const imageURL = thumbnail.querySelector("img").src;

                // Atur gambar di display untuk menampilkan gambar yang dipilih
                displayImage.src = imageURL;

                // Hapus kelas "active" dari thumbnail sebelumnya dan tambahkan ke thumbnail yang dipilih
                thumbnailItems.forEach((item) => {
                    item.classList.remove("active");
                });
                thumbnail.classList.add("active");
            });
        });
    </script>
@endsection
