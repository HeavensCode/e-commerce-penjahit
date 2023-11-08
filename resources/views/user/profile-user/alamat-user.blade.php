@extends('user.profile-user.index-profile-user')

@section('container')
    <div class="profiles-user" style="width: 100%; height: 100%;background-color: #EDCEB1">
        <form action="" class="mx-5 py-5">
            <div class="title">
                <h3 class="section-title">Alamat Toko</h3>
                <p>Deskripsi singkat tentang kelola informasi alamat Anda...</p>
            </div>
            <div class="row align-content-start">
                <div class="col-md-8">
                    <div class="mb-3">
                        <label for="alamatLengkap" class="form-label">Alamat Lengkap</label>
                        <input type="text" name="alamatLengkap" id="alamatLengkap" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="kota" class="form-label">Kota</label>
                        <input type="text" name="kota" id="kota" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="kecamatan" class="form-label">Kecamatan</label>
                        <input type="text" name="kecamatan" id="kecamatan" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="provinsi" class="form-label">Provinsi</label>
                        <input type="text" name "provinsi" id="provinsi" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="kodePos" class="form-label">Kode Pos</label>
                        <input type="text" name="kodePos" id="kodePos" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-success">Simpan</button>
                    </div>
                </div>
            </div>
        </form>

    </div>
@endsection
