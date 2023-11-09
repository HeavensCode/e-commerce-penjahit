@extends('admin.index-admin')
@section('container')
    <div class="container-fluid">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Edit Product</h6>
            </div>
            <div class="container py-3">
                <form action="{{ route('product.update', ['id' => $products->id]) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Nama Product</label>
                        <input type="text" class="form-control" name="nama_product"
                            value="{{ old('nama_product', $products->nama_product) }}">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Stock</label>
                        <input type="number" class="form-control" name="number"
                            value="{{ old('stock', $products->stock) }}">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Rating</label>
                        <input type="number" class="form-control" name="rating" placeholder="pilih 1 - 5"
                            value="{{ old('rating', $products->rating) }}">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Harga</label>
                        <input type="number" class="form-control" name="Harga"
                            value="{{ old('rating', $products->harga) }}">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Deskripsi</label>
                        <input type="text" class="form-control" name="deskripsi"
                            value="{{ old('deskripsi', $products->deskripsi) }}">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Merk</label>
                        <input type="text" class="form-control" name="merk"
                            value="{{ old('merk', $products->merk) }}">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Motif</label>
                        <input type="text" class="form-control" name="motif"
                            value="{{ old('motif', $products->motif) }}">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Panjang Kain</label>
                        <input type="text" class="form-control" name="panjang_kain"
                            value="{{ old('panjang_kain', $products->panjang_kain) }}">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Seller</label>
                        <input type="text" class="form-control" name="seller"
                            value="{{ old('seller', $products->seller) }}">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Size</label>
                        <input type="text" class="form-control" name="size"
                            value="{{ old('size', $products->size) }}">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Bahan</label>
                        <input type="text" class="form-control" name="bahan"
                            value="{{ old('no_telp', $products->bahan) }}">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Gambar</label>
                        <input type="file" class="form-control" name="gambar"
                          >
                    </div>
                        <input type="hidden" name="id_toko" id="id_toko" value="{{ $products->id_toko }}">
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
@endsection
