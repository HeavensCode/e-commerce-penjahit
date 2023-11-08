@extends('admin.index-admin')
@section('container')
    <div class="container-fluid">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Edit Product</h6>
            </div>
            <div class="container py-3">
                <form action="{{ route('toko.update', ['id' => $tokos->id]) }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Nama</label>
                        <input type="text" class="form-control" name="nama_toko"
                            value="{{ old('nama_toko', $tokos->nama_toko) }}">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Alamat Toko</label>
                        <input type="text" class="form-control" name="alamat_toko"
                            value="{{ old('alamat_toko', $tokos->alamat_toko) }}">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Nomor Telepon</label>
                        <input type="number" class="form-control" name="no_telp"
                            value="{{ old('no_telp', $tokos->no_telp) }}">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Email</label>
                        <input type="email" class="form-control" name="emails" value="{{ old('email', $tokos->email) }}">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">kota</label>
                        <input type="text" class="form-control" name="kota" value="{{ old('kota', $tokos->kota) }}">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Kecamatan</label>
                        <input type="text" class="form-control" name="kecamatan"
                            value="{{ old('kecamatan', $tokos->kecamatan) }}">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Provinsi</label>
                        <input type="text" class="form-control" name="provinsi"
                            value="{{ old('provinsi', $tokos->provinsi) }}">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">kode_pos</label>
                        <input type="number" class="form-control" name="kode_pos"
                            value="{{ old('kode_pos', $tokos->kode_pos) }}">
                    </div>

                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
@endsection
