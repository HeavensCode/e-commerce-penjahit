@extends('user.index-user')

@section('container')
    <section class="feature-section reveal active my-4 mb-5" id="payment-details-section ">
        <div class="container-features container">
            <!-- Judul content -->
            <div class="header border-bottom my-5 mb-4 mt-5">
                <h2 class="section-title text-start"><i class="fas fa-shopping-cart"></i>
                    Shopping Cart</h2>
            </div>
            <!-- Isi content -->
            <div class="content my-5 mb-3 mt-5">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <h2 class="title text-start">Payment Detail</h2>
                        <div class="row p-3">
                            <div class="col-12">
                                <div class="row card mb-3 rounded border p-2">
                                    <div class="col-12">alamat: {{ $lokasiUser ? $lokasiUser->alamat : 'alamat belum diisi' }}</div>
                                    <div class="col-12">Kota: {{ $lokasiUser ? $lokasiUser->kota : 'alamat belum diisi' }}</div>
                                    <div class="col-12">Provinsi: {{ $lokasiUser ? $lokasiUser->provinsi : 'alamat belum diisi' }}</div>
                                    <div class="col-12">Kode Pos: {{ $lokasiUser ? $lokasiUser->kode_pos : 'alamat belum diisi' }}</div>
                                </div>
                                <div class="row card mb-3 rounded">
                                    <div class="col-12 btn btn-primary p-2 text-center">My Profile</div>
                                </div>
                                <div class="row card mb-3 rounded">
                                    <div class="col-12 btn btn-info p-2 text-center">Hubungi Penjual</div>
                                </div>
                                <form action="{{ route('handle-payment') }}" method="POST" id="paymentForm">
                                    @csrf
                                    <div class="mb-3">
                                        <input type="hidden" name="jumlah_pembelian" id="jumlah_pembelian">
                                        <input type="hidden" name="total_pembayaran" id="total_pembayaran">
                                        <input type="hidden" name="sub_total" id="sub_total">
                                        <input type="hidden" name="nama_product" id="nama_product">
                                        <input type="hidden" name="total_biaya" id="total_biaya">
                                        <input type="hidden" name="pemasukan_admin" id="pemasukan_admin">
                                        <label for="exampleInputEmail1" class="form-label">Bukti Bayar</label>
                                        <input type="file" class="form-control" id="bukti_pembayaran" name="bukti_pembayaran" required >
                                      </div>
                                    <div class="row card mb-3 rounded">
                                        <button type="submit" class="btn btn-primary" onclick="preparePayment()">Bayar</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <h2 class="title text-start">Order Summary</h2>
                        <div class="row p-3">
                            @php
                                $totalOrder = 0;
                            @endphp

                            @foreach ($cart as $productId => $item)
                                <div class="col-12 border-bottom pb-4">
                                    <div class="row card-produk mb-3 rounded border p-2">
                                        <!-- Konten kartu produk ... -->

                                        <div class="col-12 mb-2">
                                            <input type="text" name="subtotal"
                                                value="Rp. {{ number_format($item['price'] * $item['quantity']) }}"
                                                class="form-control" id="subtotal" readonly>
                                        </div>

                                        <div class="col">
                                            <div class="row">
                                                <div class="col-12 mb-2"><b>{{ $item['name'] }}</b></div>
                                                <div class="col-12 mb-2">
                                                    <form action="{{ route('update-cart', ['productId' => $productId]) }}"
                                                        method="POST">
                                                        @csrf
                                                        <div class="d-flex justify-content-center">
                                                            <button type="submit" name="action" value="decrement"
                                                                class="btn btn-link">
                                                                <i class="fas fa-minus"></i>
                                                            </button>
                                                            <input type="text" name="quantity"
                                                                value="{{ $item['quantity'] }}" class="form-control">
                                                            <button type="submit" name="action" value="increment"
                                                                class="btn btn-link">
                                                                <i class="fas fa-plus"></i>
                                                            </button>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="col-12 mb-2">
                                                    (Harga Satuan)
                                                    <input type="text" name="subtotal"
                                                        value="Rp. {{ $item['price'] }}"
                                                        class="form-control" id="subtotal" readonly>
                                                </div>
                                                <div class="col-12 mb-2">
                                                    <input type="text" name="subtotal" value="Rp. {{ ($item['price'] * $item['quantity']) }}" class="form-control subtotal" readonly>
                                                </div>
                                                <div class="col-12 mb-2">
                                                    <input type="text" name="merk" value="{{ $item['merk'] }}"
                                                        class="form-control" id="merk" readonly>
                                                </div>
                                            </div>


                                        <div class="col-12 mb-2">
                                            <input type="text" name="merk" value="{{ $item['merk'] }}"
                                                class="form-control" id="merk" readonly>
                                        </div>

                                        @php
                                            $totalOrder += $item['price'] * $item['quantity'];
                                        @endphp
                                    </div>
                                </div>
                            @endforeach

                            <div class="col-12 totals pt-4">
                                <h2 class="title text-start">Order Total</h2>
                                <div class="row">
                                    <div class="col-12 border-bottom pt-3">
                                        <div class="d-flex w-100 justify-content-between">
                                            <p>Ongkos Kirim</p>
                                            <p class="ml-auto">Rp 15.000</p>
                                        </div>
                                    </div>
                                    <div class="col-12 border-bottom pt-3">
                                        <div class="d-flex w-100 justify-content-between">
                                            <p><b>Total</b></p>
                                            <p class="ml-auto"><b>Rp. {{ number_format($totalOrder) }}</b></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
<script>
    document.addEventListener('DOMContentLoaded', function () {
    var subtotalElements = document.querySelectorAll('.subtotal');
    var totalPrice = 0;
    subtotalElements.forEach(function (subtotalElement) {
        var subtotalValue = parseFloat(subtotalElement.value.replace('Rp. ', '').replace(',', ''));
        totalPrice += subtotalValue;
    });
    var ongkosKirim = 15000;
    totalPrice += ongkosKirim;
    document.getElementById('totalPrice').value = totalPrice;
    document.getElementById('yourFormId').addEventListener('submit', function (event) {
        var totalHarga = document.getElementById('totalPrice').value;
        var totalHargaInput = document.createElement('input');
        totalHargaInput.type = 'number';
        totalHargaInput.name = 'totalharga';
        totalHargaInput.value = totalHarga;
        this.appendChild(totalHargaInput);
    });
});

function preparePayment() {
    var totalharga = document.getElementById('totalPrice').value;

    var totalBiayaValue = parseFloat(totalharga) * 0.1;
    document.getElementById('jumlah_pembelian').value = document.querySelector('.form-control[name="quantity"]').value;

    document.getElementById('total_pembayaran').value = totalharga;
    document.getElementById('jumlah_pembelian').value = document.querySelector('.form-control[name="quantity"]').value;

    // Extract only the numeric part of the subtotal value
    var subtotalNumeric = parseFloat(document.querySelector('.form-control.subtotal').value.replace('Rp. ', '').replace(',', ''));
    document.getElementById('sub_total').value = subtotalNumeric;

    document.getElementById('nama_product').value = document.querySelector('.col-12.mb-2 b').innerText;
    document.getElementById('total_biaya').value = totalBiayaValue.toFixed(2);
    document.getElementById('pemasukan_admin').value = (parseFloat(totalharga) * 0.1).toFixed(2);

    document.getElementById('paymentForm').submit();
}

</script>
