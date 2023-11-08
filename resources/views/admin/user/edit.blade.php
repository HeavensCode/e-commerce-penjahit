@extends('admin.index-admin')
@section('container')
    <div class="container-fluid">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Edit Product</h6>
            </div>
            <div class="container py-3">
                <form action="{{ route('user.update', ['id' => $user->id]) }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Nama</label>
                        <input type="text" class="form-control" name="nama" value="{{ old('nama', $user->nama) }}">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" value="{{ old('email', $user->email) }}">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Nomor Telepon</label>
                        <input type="number" class="form-control" name="no_telp"
                            value="{{ old('no_telp', $user->no_telp) }}">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" value="{{ old('email', $user->email) }}">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Gender</label>
                        <select name="gender" id="gender" class="form-control">
                            <option value="laki-laki" {{ old('gender') === 'laki-laki' ? 'selected' : '' }}>Laki - Laki
                            </option>
                            <option value="Perempuan" {{ old('gender') === 'Perempuan' ? 'selected' : '' }}>Perempuan
                            </option>
                            <option value="Tidak Memilih" {{ old('gender') === 'Tidak Memilih' ? 'selected' : '' }}>Tidak
                                Memilih</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Role</label>
                        <select name="role" id="role" class="form-control">
                            <option value="admin" {{ old('role') === 'Admin' ? 'selected' : '' }}>Admin
                            </option>
                            <option value="user" {{ old('role') === 'User' ? 'selected' : '' }}>User
                            </option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
@endsection
