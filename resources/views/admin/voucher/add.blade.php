@extends('admin.index-admin')
@section('container')
    <div class="container-fluid">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Tambah Voucher</h6>
            </div>
            <div class="container py-3">
                <form action="{{ route('voucher.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Kode Voucher</label>
                        <input type="text" class="form-control" name="kode_voucher">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Jumlah Potongan</label>
                        <input type="number" class="form-control" name="jumlah_potongan">
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan Data</button>
                </form>
            </div>
        </div>
    </div>
@endsection
