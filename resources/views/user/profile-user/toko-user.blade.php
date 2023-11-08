@extends('user.profile-user.index-profile-user')

@section('container')
    <section class="profiles-user mb-3" style="width: 100%; height: 100%;background-color: #EDCEB1">
        <div class="mx-5 py-5">
            <div class="title row">
                <h3 class="section-title p-0">Toko Saya</h3>
                <p class="p-0">Kelola Informasi toko. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quibusdam
                    expedita,
                    aliquam voluptatibus nulla necessitatibus aut!</p>
            </div>
            <div class="row align-content-start">
                <div class="col-12">
                    <div class="mb-3">
                        <h5>Produk : <b>15</b></h5>
                    </div>
                    <div class="mb-3">
                        <h5>Lokasi : <b>Indonesia</b></h5>
                    </div>
                    <div class="row mb-3 gap-3">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-success col-12 col-md-3" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">
                            Tambah Produk
                        </button>
                        <button type="button" class="btn btn-secondary col-12 col-md-3" data-bs-toggle="modal"
                            data-bs-target="#modal-edit-produk">
                            Edit Produk
                        </button>
                        @include('user.profile-user.tambah-produk-modal')
                    </div>
                </div>
            </div>
        </div>

    </section>
    <section class="profiles-user" style="width: 100%; height: 100%; background-color: #EDCEB1">
        <div class="mx-5 py-5">
            <div class="title row">
                <h3 class="section-title p-0">Produk Saya</h3>
                <p class="p-0">Kelola Informasi toko. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quibusdam
                    expedita,
                    aliquam voluptatibus nulla necessitatibus aut!</p>
            </div>

            <div class="row my-1 filter">
                <div class="col-6 col-md-2 col-lg-3 p-2">
                    <a
                        class="text-decoration-none filter-btn d-flex justify-content-center align-items-center p-2 text-black">Terbaru</a>
                </div>
                <div class="col-6 col-md-2 col-lg-3 p-2">
                    <a
                        class="text-decoration-none filter-btn d-flex justify-content-center align-items-center p-2 text-black">Terlama</a>
                </div>
                <div class="col-6 col-md-2 col-lg-3 p-2">
                    <a
                        class="text-decoration-none filter-btn d-flex justify-content-center align-items-center p-2 text-black">Nama</a>
                </div>
                <div class="col-6 col-md-2 col-lg-3 p-2">
                    <a
                        class="text-decoration-none filter-btn d-flex justify-content-center align-items-center p-2 text-black">Terlaris</a>
                </div>
            </div>


            <!-- Tabel Data Produk -->
            <div class="table-responsive row my-2">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Nama Produk</th>
                            <th>Harga</th>
                            <th>Stok</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Produk 1</td>
                            <td>100.00</td>
                            <td>50</td>
                        </tr>
                        <tr>
                            <td>Produk 2</td>
                            <td>75.00</td>
                            <td>30</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <script>
        document.getElementById("gambarProduk").addEventListener("change", function() {
            var preview = document.getElementById("previewGambar");
            var file = this.files[0];
            var reader = new FileReader();

            reader.onload = function() {
                preview.src = reader.result;
            }

            if (file) {
                reader.readAsDataURL(file);
            } else {
                preview.src = "";
            }
        });
    </script>
@endsection
