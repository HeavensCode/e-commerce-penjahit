<!-- Modal tambah -->
<div class="modal fade" id="tambah-produk-toko-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="{{ route('store-produk') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Produk</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="namaProduk" class="form-label">Nama Produk</label>
                        <input type="text" class="form-control" id="namaProduk" name="namaProduk" required>
                    </div>
                    <div class="mb-3">
                        <label for="stok" class="form-label">Stok</label>
                        <input type="number" class="form-control" id="stok" name="stok" required>
                    </div>
                    <div class="mb-3">
                        <label for="merk" class="form-label">Merk</label>
                        <input type="text" class="form-control" id="merk" name="merk" required>
                    </div>
                    <div class="mb-3">
                        <label for="harga" class="form-label">Harga</label>
                        <input type="number" class="form-control" id="harga" name="harga" required>
                    </div>
                    <div class="mb-3">
                        <label for="rating" class="form-label">Rating</label>
                        <input type="number" class="form-control" id="rating" name="rating" required>
                    </div>
                    <div class="mb-3">
                        <label for="deskripsi" class="form-label">Deskripsi Produk</label>
                        <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="motif" class="form-label">Motif</label>
                        <input type="text" class="form-control" id="motif" name="motif" required>
                    </div>
                    <div class="mb-3">
                        <label for="panjangKain" class="form-label">Panjang Kain</label>
                        <input type="number" class="form-control" id="panjangKain" name="panjangKain" required>
                    </div>
                    <div class="mb-3">
                        <label for="seller" class="form-label">Seller</label>
                        <input type="text" class="form-control" id="seller" name="seller" required>
                    </div>
                    <div class="mb-3">
                        <label for="bahan" class="form-label">Bahan</label>
                        <input type="text" class="form-control" id="bahan" name="bahan" required>
                    </div>
                    <div class="mb-3">
                        <label for="size" class="form-label">Size</label>
                        <input type="text" class="form-control" id="size" name="size" required>
                    </div>
                    <div class="mb-3">
                        <label for="gambarProduk" class="form-label">Upload Gambar</label>
                        <input type="file" class="form-control" id="gambarProduk" name="gambarProduk[]" multiple>
                        <button type="button" class="btn btn-primary text-center" id="btntambahgambar">Tambah Gambar</button>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>


<!-- Modal edit toko -->
<div class="modal fade" id="modal-edit-alamat-toko" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Alamat Toko</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('edit-alamat-toko') }}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="row align-content-start">
                        <div class="col-12">
                            <div class="mb-3">
                                <label for="alamatLengkap" class="form-label">Alamat Lengkap</label>
                                <input value="{{ $toko->alamat_toko }}" type="text" name="alamatLengkap"
                                    id="alamatLengkap" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label for="kota" class="form-label">Kota</label>
                                <input value="{{ $toko->id }}" type="hidden" name="id">
                                <input value="{{ $toko->kota }}" type="text" name="kota" id="kota"
                                    class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label for="kecamatan" class="form-label">Kecamatan</label>
                                <input value="{{ $toko->kecamatan }}" type="text" name="kecamatan" id="kecamatan"
                                    class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label for="provinsi" class="form-label">Provinsi</label>
                                <input value="{{ $toko->provinsi }}" type="text" name="provinsi" id="provinsi"
                                    class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label for="kodePos" class="form-label">Kode Pos</label>
                                <input value="{{ $toko->kode_pos }}" type="text" name="kodePos" id="kodePos"
                                    class="form-control" required>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>


<!-- Modal edit user -->
<div class="modal fade" id="modal-edit-toko" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Data Toko</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('edit-toko') }}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="row align-content-start">
                        <div class="col-12">
                            <div class="mb-3">
                                <input value="{{ $toko->id }}" type="hidden" name="id">
                                <label for="namaToko" class="form-label">Nama Toko</label>
                                <input value="{{ $toko->nama_toko }}" type="text" name="namaToko" id="namaToko"
                                    class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label for="noTelp" class="form-label">Nomor Telepon</label>
                                <input value="{{ $toko->no_telp }}" type="text" name="noTelp" id="noTelp"
                                    class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input value="{{ $toko->email }}" type="email" name="email" id="email"
                                    class="form-control" required>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        var btnTambahGambar = document.getElementById("btntambahgambar");
        var modalBody = document.querySelector(".modal-body");
        btnTambahGambar.addEventListener("click", function () {
            var newInput = document.createElement("input");
            newInput.type = "file";
            newInput.className = "form-control";
            newInput.name = "gambarProduk[]";
            newInput.multiple = true;
            var inputContainer = document.createElement("div");
            inputContainer.className = "mb-3";
            inputContainer.appendChild(newInput);
            modalBody.appendChild(inputContainer);
        });
    });
</script>

