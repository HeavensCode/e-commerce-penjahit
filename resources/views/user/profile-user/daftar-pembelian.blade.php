@extends('user.profile-user.index-profile-user')

@section('container')
    <div class="profiles-user rounded-4" style="width: 100%; height: 100%;background-color: #EDCEB1">
        <div class="mx-5 py-5">
            <div>
                <h3>Daftar Pembelian</h3>
            </div>
            <div class="table-responsive">
                @if (count($purchases) > 0)
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Produk</th>
                                <th>Nama Toko</th>
                                <th>Jumlah Pembelian</th>
                                <th>Nama Seller</th>
                                <th>Total Biaya</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($purchases as $index => $purchase)
                                <tr>
                                    <th scope="row">{{ $index + 1 }}</th>
                                    <td>{{ $purchase->nama_product }}</td>
                                    <td>{{ $purchase->nama_toko }}</td>
                                    <td>{{ $purchase->jumlah_pembelian }}</td>
                                    <td>{{ $purchase->seller }}</td>
                                    <td>{{ $purchase->total_biaya }}</td>
                                    <td>
                                        <a href="{{ route('beranda') }}" class="btn btn-primary">Beli Lagi</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @else
                    <p>Belum pesan produk.</p>
                @endif

            </div>
        </div>
    </div>
@endsection
