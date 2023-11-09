@extends('admin.index-admin')
@section('container')
    <div class="container-fluid">

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Daftar toko</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Nama Toko</th>
                                <th>Alamat</th>
                                <th>No Telp</th>
                                <th>Email</th>
                                <th>Kota</th>
                                <th>Kecamatan</th>
                                <th>Provinsi</th>
                                <th>Kode Pos</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($tokos as $toko)
                                <tr>
                                    <td>{{ $toko->nama_toko }}</td>
                                    <td>{{ $toko->alamat_toko }}</td>
                                    <td>{{ $toko->no_telp }}</td>
                                    <td>{{ $toko->email }}</td>
                                    <td>{{ $toko->kota }}</td>
                                    <td>{{ $toko->kecamatan }}</td>
                                    <td>{{ $toko->provinsi }}</td>
                                    <td>{{ $toko->kode_pos }}</td>
                                    <td>
                                        <a href="{{ route('toko.edit', $toko->id) }}" class="btn btn-primary">Edit</a>
                                        <form method="POST" action="{{ route('toko.delete', $toko->id) }}">
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
