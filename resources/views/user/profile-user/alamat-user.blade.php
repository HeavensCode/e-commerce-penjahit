@extends('user.profile-user.index-profile-user')

@section('container')
    <div class="profiles-user rounded-4" style="width: 100%; height: 100%;background-color: #EDCEB1">
        <div class="mx-5 py-5">
            <div class="title">
                <h3 class="">Alamat Toko</h3>
                <p>Deskripsi singkat tentang kelola informasi alamat Anda...</p>
            </div>
            <div class="row align-content-start">
                <div class="col-md-8">
                    <div class="mb-3">
                        <label for="alamatLengkap" class="form-label">Alamat Lengkap</label>
                        <input value="{{ $toko->alamat_toko }}" type="text" name="alamatLengkap" id="alamatLengkap"
                            class="form-control" disabled>
                    </div>
                    <div class="mb-3">
                        <label for="kota" class="form-label">Kota</label>
                        <input value="{{ $toko->kota }}" type="text" name="kota" id="kota" class="form-control"
                            disabled>
                    </div>
                    <div class="mb-3">
                        <label for="kecamatan" class="form-label">Kecamatan</label>
                        <input value="{{ $toko->kecamatan }}" type="text" name="kecamatan" id="kecamatan"
                            class="form-control" disabled>
                    </div>
                    <div class="mb-3">
                        <label for="provinsi" class="form-label">Provinsi</label>
                        <input value="{{ $toko->provinsi }}" type="text" name="provinsi" id="provinsi"
                            class="form-control" disabled>
                    </div>
                    <div class="mb-3">
                        <label for="kodePos" class="form-label">Kode Pos</label>
                        <input value="{{ $toko->kode_pos }}" type="text" name="kodePos" id="kodePos"
                            class="form-control" disabled>
                    </div>
                    <div class="mb-3">
                        <button type="button" class="btn btn-primary col-12 col-md-3" data-bs-toggle="modal"
                            data-bs-target="#modal-edit-alamat-toko">
                            Edit Alamat Toko
                        </button>
                        @include('user.profile-user.tambah-produk-modal')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
