@extends('user.profile-user.index-profile-user')

@section('container')
    <div class="profiles-user" style="width: 100%; height: 100%;background-color: #EDCEB1">
        <div class="mx-5 py-5">
            <div class="title">
                <h3 class="section-title">Daftar Pembelian</h3>
            </div>
            <div class="row align-content-start">

                @if(count($purchases) > 0)
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nama Produk</th>
                                <th scope="col">Nama Toko</th>
                                <th scope="col">Jumlah Pembelian</th>
                                <th scope="col">Nama Seller</th>
                                <th scope="col">Total Biaya</th>
                                <th scope="col">Action</th>
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
