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
                                src="https://drive.google.com/uc?export=view&amp;id=11_bcVtOkyxTuHO4K0cEHoU634hj2xsUz"
                                width="700" height="700" loading="lazy" alt="Lumpia Setengah Masak"
                                data-product-display="" class="">
                        </figure>
                    </div>

                    <div class="row g-2">
                        <div class="product-thumbnail-item col">
                            <img class="h-100 w-100"
                                src="https://drive.google.com/uc?export=view&amp;id=11_bcVtOkyxTuHO4K0cEHoU634hj2xsUz"
                                width="700" height="700" loading="lazy" alt="Lumpia Setengah Masak"
                                data-product-thumbnail="" class="active">
                        </div>
                        <div class="product-thumbnail-item col">
                            <img class="h-100 w-100"
                                src="https://drive.google.com/uc?export=view&amp;id=1g5RL3IzYcODwY3guzZOjQebQgABDz_lq"
                                width="700" height="700" loading="lazy" alt="Lumpia Setengah Masak"
                                data-product-thumbnail="" class="">
                        </div>
                        <div class="product-thumbnail-item col">
                            <img class="h-100 w-100"
                                src="https://drive.google.com/uc?export=view&amp;id=1DPdsUiL6p5DrZ0Bm5N1SfNtxFJ8w5Hcb"
                                width="700" height="700" loading="lazy" alt="Lumpia Setengah Masak"
                                data-product-thumbnail="" class="">
                        </div>
                        <div class="product-thumbnail-item col">
                            <img class="h-100 w-100"
                                src="https://drive.google.com/uc?export=view&amp;id=1YvIexZDuBEtKDGmlnm8tCRRe1fGMZoCn"
                                width="700" height="700" loading="lazy" alt="Lumpia Setengah Masak"
                                data-product-thumbnail="" class="">
                        </div>

                    </div>

                    <!-- Foto Kecil Produk -->

                </div>

                <!-- Container Product Details Content -->
                <div class="col-md-8 col-12">
                    <div class="row g-3">

                        <!-- Judul Produk -->
                        <h3 class="product-title col-12">Lumpia Setengah Masak</h3>

                        <!-- Harga Produk -->
                        <data class="product-price bg-body-secondary row col-12 px-3">Rp8000</data>

                        <!-- Rating Star Produk -->
                        <div class="rating-wrapper col-12">
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                        </div>

                        <!-- Deskripsi Singkat Produk -->
                        <div class="product-text col-12">
                            <p>Pengiriman : <span>Pre Order</span></p>
                        </div>

                        <!-- Berat Produk -->
                        <div class="product-text col-12">
                            <div class="row align-items-center g-2">
                                <div class="col-4 col-md-2 text-center">
                                    <p class="m-0 p-1 text-start">Berat : </p>
                                </div>
                                <div class="col-4 col-md-2 rounded text-center">
                                    <p class="bg-warning-subtle m-0 rounded p-1"><b>300 gr</b></p>
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
                    Hi!! Guyss👋🏻 Selamat Datang Di Platform Frizfoo❄️⛄.
                    <br> <br>
                    Anda Dapat Mencari Berbagai Macam Varian Makanan Beku / Makanan Beku Setengah Jadi Yg Cocok Untuk
                    Kebutuhan
                    Anda Dan
                    Dapat Disajikan Untuk Semua Keluarga Atau Di Semua Situasi👌🏻👌🏻.
                    <br> <br>
                    🔥🔥 BUDAYAKAN MEMBACA DESKRIPSI PRODUK YA 🔥🔥
                    <br> <br>
                    Jalangkote &amp; Lumpia Asli Lasinrang cabang BTP Kami akan mengirim produk dalam bentuk setengah masak
                    dan
                    frozen. Lumpia, memiliki isian sayur serta bahan lainnya yang digulung ke dalam lembaran tipis dari
                    tepung
                    beras atau tepung gandum. Kulit Lumpia yang agak tipis sehingga ketika digoreng akan menghasilkan
                    tekstur
                    yang gurih, renyah dan crunchy ketika digigit. Dan juga saus sambal yang terbuat dari tauco, sehingga
                    kental
                    dan berhasil memperkaya rasa pedas, manis, serta gurih. Jalangkote &amp; Lumpia Asli Lasinrang sendiri
                    sudah
                    berdiri sejak 1985, sehingga soal rasa dan kualitasnya sudah tidak perlu di ragukan. Dalam keadaan beku
                    (di
                    dalam Freezer) mampu bertahan hingga maksimal 3 minggu - Oleh Oleh Khas Makassar.
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
                                    <td>Bahan Produk</td>
                                </tr>
                                <tr>
                                    <th scope="row">Ukuran</th>
                                    <td>Ukuran Produk</td>
                                </tr>
                                <tr>
                                    <th scope="row">Motif</th>
                                    <td>Motif Produk</td>
                                </tr>
                                <tr>
                                    <th scope="row">Stok</th>
                                    <td>Stok Produk</td>
                                </tr>
                                <tr>
                                    <th scope="row">Dikirim dari</th>
                                    <td>Lokasi Pengiriman</td>
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
