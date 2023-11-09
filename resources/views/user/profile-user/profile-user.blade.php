@extends('user.profile-user.index-profile-user')

@section('container')
    <div class="profiles-user" style="width: 100%; height: 100%;background-color: #EDCEB1">
            <h3>Profile Saya</h3>
            <div class="w-100 h-100 container">
                <label for="inputPassword6" class="col-form-label">Username</label>
                <div class="col-md-8 mx-2">
                    <input value="{{ $user->nama }}" type="text" name="username" id="username" class="form-control"
                        disabled>
                </div>
                <label for="inputPassword6" class="col-form-label">Email</label>
                <div class="col-md-8 mx-2">
                    <input value="{{ $user->email }}" type="email" name="email" id="email" class="form-control"
                        disabled>
                </div>
                <label for="inputPassword6" class="col-form-label">Nomor Telepon</label>
                <div class="col-md-8 mx-2">
                    <input value="{{ $user->no_telp }}" type="number" name="nomor_telepon" id="nomor_telepon"
                        class="form-control" disabled>
                </div>
                <label for="inputPassword6" class="col-form-label">Jenis Kelamin</label>
                <div class="col-md-8 mx-2">
                    <input value="{{ $user->gender }}" type="text" name="edit_gender" id="edit-nomor-telepon"
                        class="form-control" disabled>
                </div>
                <div class="col-md-8 mx-2">
                    <button type="button" class="btn btn-primary my-2" data-bs-toggle="modal"
                        data-bs-target="#edit-profile-modal">
                        Edit Profile
                    </button>
                    @include('user.profile-user.edit-profile-modal')
                </div>
        </div>
@endsection
