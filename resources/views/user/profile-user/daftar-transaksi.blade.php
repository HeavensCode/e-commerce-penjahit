@extends('user.profile-user.index-profile-user')

@section('container')
    <div class="profiles-user rounded-4" style="width: 100%; height: 100%;background-color: #EDCEB1">
        <div class="mx-5 py-5">
            <div>
                <h3>Daftar Transaksi</h3>
            </div>
            <div class="row align-content-start table-responsive rounded-3">
                @if (count($transactions) > 0)
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama Produk</th>
                                <th scope="col">User</th>
                                <th scope="col">Jumlah Pembelian</th>
                                <th scope="col">Total Biaya</th>
                                <th scope="col">Bukti Pembayaran</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($transactions as $index => $transaction)
                                <tr>
                                    <th scope="row">{{ $index + 1 }}</th>
                                    <td>{{ $transaction->nama_product }}</td>
                                    <td>{{ $transaction->nama_user }}</td>
                                    <td>{{ $transaction->jumlah_pembelian }}</td>
                                    <td>{{ $transaction->total_biaya }}</td>
                                    <td>
                                        @if ($transaction->bukti_pembayaran)
                                            <img src="{{ asset('storage/bukti/' . $transaction->bukti_pembayaran) }}"
                                                alt="Bukti Pembayaran" width="100px">
                                        @else
                                            Tidak Ada Bukti Pembayaran
                                        @endif
                                    </td>
                                    <td>
                                        <a type="button" class="btn btn-primary" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal{{ $index }}">
                                            Bukti Pembelian
                                        </a>
                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModal{{ $index }}" tabindex="-1"
                                            aria-labelledby="exampleModalLabel{{ $index }}" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5"
                                                            id="exampleModalLabel{{ $index }}">Modal title</h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        @if ($transaction->bukti_pembayaran)
                                                            <img src="{{ asset('storage/bukti/' . $transaction->bukti_pembayaran) }}"
                                                                alt="Bukti Pembayaran" width="100px">
                                                        @else
                                                            Tidak Ada Bukti Pembayaran
                                                        @endif
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Close</button>
                                                        <button type="button" class="btn btn-primary">Save changes</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @else
                    <p>Belum Ada Pembelian.</p>
                @endif
            </div>
        </div>
    </div>
@endsection
