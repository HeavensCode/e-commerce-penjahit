@extends('admin.index-admin')
@section('container')
    <div class="container-fluid">

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Daftar product</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Nama product</th>
                                <th>Stock</th>
                                <th>Rating</th>
                                <th>Harga</th>
                                <th>Gambar</th>
                                <th>Rating</th>
                                <th>Merk</th>
                                <th>Motif</th>
                                <th>panjang_kain</th>
                                <th>Seller</th>
                                <th>Bahan</th>
                                <th>Size</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                                <tr>
                                    <td>{{ $product->nama_product }}</td>
                                    <td>{{ $product->stock }}</td>
                                    <td>{{ $product->rating }}</td>
                                    <td>{{ $product->harga }}</td>
                                    <td>{{ $product->gambar }}</td>
                                    <td>{{ $product->rating }}</td>
                                    <td>{{ $product->merk }}</td>
                                    <td>{{ $product->motif }}</td>
                                    <td>{{ $product->panjang_kain }}</td>
                                    <td>{{ $product->seller }}</td>
                                    <td>{{ $product->bahan }}</td>
                                    <td>{{ $product->size }}</td>
                                    <td>
                                        <a href="{{ route('product.edit', $product->id) }}" class="btn btn-primary">Edit</a>
                                        <form method="POST" action="{{ route('product.delete', $product->id) }}">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger"
                                                onclick="return confirm('Yakin ingin menghapus pengguna ini?')">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>


    </div>
@endsection
