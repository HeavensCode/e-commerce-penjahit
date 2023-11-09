@extends('admin.index-admin')
@section('container')
    <div class="container-fluid">

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Daftar voucher</h6>
            </div>
            <a href="tambah-voucher" class="btn btn-primary">Tambah Data</a>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Kode Voucher</th>
                                <th>Jumlah Potongan</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($vouchers as $voucher)
                                <tr>
                                    <td>{{ $voucher->kode_voucher }}</td>
                                    <td>{{ $voucher->jumlah_potongan }}</td>
                                    <td>
                                        <a href="{{ route('voucher.edit', $voucher->id) }}" class="btn btn-primary">Edit</a>
                                        <form method="POST" action="{{ route('voucher.delete', $voucher->id) }}">
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
