@extends('admin.index-admin')
@section('container')
    <div class="container-fluid">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Edit Product</h6>
            </div>
            <div class="container py-3">
                <form action="{{ route('toko.update', ['id' => $products->id]) }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Nama Product</label>
                        <input type="text" class="form-control" name="nama_product"
                            value="{{ old('nama_toko', $products->nama_product) }}">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Stock</label>
                        <input type="number" class="form-control" name="number"
                            value="{{ old('alamat_toko', $products->stock) }}">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Rating</label>
                        <input type="number" class="form-control" name="rating"
                            value="{{ old('no_telp', $products->rating) }}">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Rating</label>
                        <input type="number" class="form-control" name="harga"
                            value="{{ old('no_telp', $products->harga) }}">
                    </div>
                        <input type="hidden" name="id_toko" id="id_toko" value="{{ $products->id_toko }}">
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
@endsection
