<!-- Modal edit produk -->
<div class="modal fade" id="edit-produk-modal{{ $product->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="{{ route('edit-product', ['id' => $product->id]) }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Produk</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <input type="hidden" id="edit-product-id" name="edit_product_id">
                    <div class="mb-3">
                        <label for="gambarProduk" class="form-label">Upload Gambar</label>
                        <input type="file" class="form-control" id="gambarProduk" name="gambarProduk[]" multiple>
                    </div>
                    <div class="mb-3">
                        <label for="existingImages" class="form-label">Existing Images</label>
                        @foreach ($product->detailGambarProduct as $detailGambar)
                            <img src="{{ asset('storage/gambar/' . $detailGambar->gambar) }}" alt="Gambar Produk" width="100px">
                        @endforeach
                    </div>
                    <div class="mb-3">
                        <label for="namaProduk" class="form-label">Nama Produk</label>
                        <input value="{{ $product->nama_product }}" type="text" class="form-control"
                            id="edit-namaProduk" name="edit_namaProduk" required>
                    </div>
                    <div class="mb-3">
                        <label for="stok" class="form-label">Stok</label>
                        <input value="{{ $product->stock }}" type="text" class="form-control" id="edit-stok"
                            name="edit_stok" required>
                    </div>
                    <div class="mb-3">
                        <label for="merk" class="form-label">Merk</label>
                        <input value="{{ $product->detailProduct->merk }}" type="text" class="form-control"
                            id="edit-merk" name="edit_merk" required>
                    </div>
                    <div class="mb-3">
                        <label for="harga" class a="form-label">Harga</label>
                        <input value="{{ $product->harga }}" type="text" class="form-control" id="edit-harga"
                            name="edit_harga" required>
                    </div>
                    <div class="mb-3">
                        <label for="rating" class="form-label">Rating</label>
                        <input value="{{ $product->detailProduct->rating }}" type="text" class="form-control"
                            id="edit-rating" name="edit_rating" required>
                    </div>
                    <div class="mb-3">
                        <label for="deskripsi" class="form-label">Deskripsi Produk</label>
                        <textarea class="form-control" id="edit-deskripsi" name="edit_deskripsi" rows="3" required>{{ $product->detailProduct->deskripsi }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="motif" class="form-label">Motif</label>
                        <input value="{{ $product->detailProduct->motif }}" type="text" class="form-control"
                            id="edit-motif" name="edit_motif" required>
                    </div>
                    <div class="mb-3">
                        <label for="panjangKain" class="form-label">Panjang Kain</label>
                        <input value="{{ $product->detailProduct->panjang_kain }}" type="text" class="form-control"
                            id="edit-panjangKain" name="edit_panjangKain" required>
                    </div>
                    <div class="mb-3">
                        <label for="seller" class="form-label">Seller</label>
                        <input value="{{ $product->detailProduct->seller }}" type="text" class="form-control"
                            id="edit-seller" name="edit_seller" required>
                    </div>
                    <div class="mb-3">
                        <label for="bahan" class="form-label">Bahan</label>
                        <input value="{{ $product->detailProduct->bahan }}" type="text" class="form-control"
                            id="edit-bahan" name="edit_bahan" required>
                    </div>
                    <div class="mb-3">
                        <label for="size" class="form-label">Size</label>
                        <input value="{{ $product->detailProduct->size }}" type="text" class="form-control"
                            id="edit-size" name="edit_size" required>
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
