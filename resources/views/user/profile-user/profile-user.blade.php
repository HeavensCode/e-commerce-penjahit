@extends('user.profile-user.index-profile-user')

@section('container')
    <div class="profiles-user" style="width: 100%; height: 100%;background-color: #EDCEB1">
        <form action="" class="py-5 mx-5 ">
            <h3>Profile Saya</h3>
            <div class="container w-100 h-100">
                <div class="col-md2"></div>
                <div class="d-flex my-2 ">
                    <label for="inputPassword6" class="col-form-label">Username</label>
                    <div class="col-md-8 mx-2">
                        <input type="text" name="username" id="username" class="form-control" required>
                    </div>
                </div>
                <div class="d-flex my-2 ">
                    <label for="inputPassword6" class="col-form-label">Nama</label>
                    <div class="col-md-8 mx-2">
                        <input type="text" name="nama" id="nama" class="form-control" required>
                    </div>
                </div>
                <div class="d-flex my-2 ">
                    <label for="inputPassword6" class="col-form-label">Email</label>
                    <div class="col-md-8 mx-2">
                        <input type="email" name="email" id="email" class="form-control" required>
                    </div>
                </div>
                <div class="d-flex my-2 ">
                    <label for="inputPassword6" class="col-form-label">Nomor Telepon</label>
                    <div class="col-md-8 mx-2">
                        <input type="number" name="nomor_telepon" id="nomor_telepon" class="form-control" required>
                    </div>
                </div>
                <div class="d-flex my-2 ">
                    <label for="inputPassword6" class="col-form-label">Nama Toko</label>
                    <div class="col-md-8 mx-2">
                        <input type="text" name="nama_toko" id="nama_toko" class="form-control ">
                    </div>
                </div>
                <div class="d-flex my-2 ">
                    <label for="inputPassword6" class="col-form-label">Jenis Kelamin</label>
                    <div class="col-md-8 mx-2">
                        <input type="radio" name="jenis_kelamin" id="jenis_kelamin" value="Laki- Laki"> Laki - Laki
                        <input type="radio" name="jenis_kelamin" id="jenis_kelamin" value="Laki- Laki"> Perempuan
                        <input type="radio" name="jenis_kelamin" id="jenis_kelamin" value="Laki- Laki"> Lainnya
                    </div>

                </div>
        </form>
    </div>
@endsection
