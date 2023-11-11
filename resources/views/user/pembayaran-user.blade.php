@extends('user.index-user')

@section('container')
    <script>
document.addEventListener('DOMContentLoaded', function() {
            var subtotalElements = document.querySelectorAll('.subtotal');
            var totalPrice = 0;
            subtotalElements.forEach(function(subtotalElement) {
                var subtotalValue = parseFloat(subtotalElement.value.replace('Rp. ', '').replace(',', ''));
                totalPrice += subtotalValue;
            });
            var voucherDiscountElement = document.querySelector('.voucher-discount');
            totalPrice -= voucherDiscountElement.value;

            var ongkosKirim = 15000;
            totalPrice += ongkosKirim;

            // Set the calculated total price in the input field
            var totalPriceInput = document.getElementById('totalPrice');
            if (totalPriceInput) {
                totalPriceInput.value = 'Rp ' + totalPrice.toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,');
         }
});
        function preparePayment() {
            var subtotalElements = document.querySelectorAll('.subtotal');
            var totalPrice = 0;

            subtotalElements.forEach(function(subtotalElement) {
                var subtotalValue = parseFloat(subtotalElement.value.replace('Rp. ', '').replace(',', ''));
                totalPrice += subtotalValue;
            });

            var ongkosKirim = 15000;
            totalPrice += ongkosKirim;

            document.getElementById('totalPrice').value = totalPrice;

            var totalHargaInput = document.createElement('input');
            totalHargaInput.type = 'number';
            totalHargaInput.name = 'totalharga';
            totalHargaInput.value = totalPrice.toFixed(2);

            var quantityInputs = document.querySelectorAll('[name="quantity"]');
            var jumlahPembelian = 0;
            quantityInputs.forEach(function(input) {
                jumlahPembelian += parseInt(input.value, 10) || 0;
            });
            var totalPembayaran = totalPrice;
            var pemasukanAdmin = totalPembayaran * 0.1;
            document.getElementById('pemasukan_admin').value = pemasukanAdmin.toFixed(2);

            document.getElementById('jumlah_pembelian').value = jumlahPembelian;
            document.getElementById('total_pembayaran').value = totalPembayaran;
            // document.getElementById('paymentForm').appendChild(totalHargaInput);
            document.getElementById('paymentForm').submit();
        }
    </script>

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
                        <h2 class="title text-start">Order Summary</h2>
                        <div class="row p-3">
                            @foreach ($cart as $productId => $item)
                                <div class="col-12 border-bottom pb-4">
                                    <div class="row card-produk mb-3 rounded border p-2">
                                        <div class="col-3">
                                            <img src="{{ asset('storage/gambar/' . $item['gambar']) }}"
                                                alt="{{ $item['name'] }}" class="pro-animation img-fluid rounded"
                                                loading="lazy">
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
                                                    <input type="text" name="subtotal" value="Rp. {{ $item['price'] }}"
                                                        class="form-control" id="subtotal" readonly>
                                                </div>
                                                <div class="col-12 mb-2">
                                                    <input type="text" name="subtotal"
                                                        value="Rp. {{ $item['price'] * $item['quantity'] }}"
                                                        class="form-control subtotal" readonly>
                                                </div>
                                                <div class="col-12 mb-2">
                                                    <input type="text" name="merk" value="{{ $item['merk'] }}"
                                                        class="form-control" id="merk" readonly>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            @endforeach

                            <div class="col-12 totals border-bottom py-4">
                                <h2 class="title text-start">Voucher</h2>
                                <p>Note : Harap check voucher terlebih dahulu sebelum membayar untuk mendapatkan potongan
                                    harga</p>
                                <form action="{{ route('checkVoucher') }}" method="POST" class="row">
                                    @csrf
                                    <div class="col-12 col-md-8 pt-3">
                                        <input type="text" name="voucher" value="{{ $voucher->kode_voucher ?? '' }}"
                                            class="form-control" id="voucher">
                                    </div>
                                    <div class="col-12 col-md-4 pt-3">
                                        <button type="submit" class="btn btn-success">Check Voucher</button>
                                    </div>
                                </form>
                            </div>
                            <div class="col-12 totals pt-4">
                                <h2 class="title text-start">Order Total</h2>
                                <div class="row">
                                    <div class="col-12 border-bottom pt-3">
                                        @foreach ($cart as $productId => $item)
                                            <div class="d-flex w-100 justify-content-between">
                                                <p>{{ $item['name'] }} x {{ $item['quantity'] }}</p>
                                                <p class="ml-auto">Rp {{ $item['price'] * $item['quantity'] }}</p>
                                            </div>
                                        @endforeach
                                        <div class="d-flex w-100 justify-content-between">
                                            <p>Ongkos Kirim</p>
                                            <p class="ml-auto">Rp 15.000</p>
                                        </div>
                                        <div class="d-flex w-100 justify-content-between">
                                            <p>Voucher</p>
                                            <p class="ml-auto">- Rp
                                                @if (session('voucherDiscount') > 0)
                                                    {{ session('voucherDiscount') }}
                                                @else
                                                    {{ $voucher->jumlah_potongan ?? 0 }}
                                                @endif
                                            </p>
                                            <input type="hidden" value="@if (session('voucherDiscount') > 0) {{ session('voucherDiscount') }} @else {{ $voucher->jumlah_potongan ?? 0 }} @endif" class="voucher-discount">
                                        </div>
                                    </div>
                                    <div class="col-12 border-bottom py-3">
                                        <div class="d-flex flex-column w-100 align-items-start">
                                            <p><b>Total</b></p>
                                            <input class="form-control py-1 text-end" type="text" name="totalharga"
                                                id="totalPrice" readonly style="font-weight: bold;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">

                        <h2 class="title text-start">Payment Detail</h2>
                        <div class="row p-3">
                            <div class="col-12">
                                <div class="row card mb-3 rounded border p-2">
                                    <div class="col-12">
                                        Kota: {{ $lokasiUser ? $lokasiUser->kota : 'belum diisi' }}
                                    </div>
                                    <div class="col-12">
                                        Kecamatan: {{ $lokasiUser ? $lokasiUser->kecamatan : 'belum diisi' }}
                                    </div>
                                    <div class="col-12">
                                        Provinsi:{{ $lokasiUser ? $lokasiUser->provinsi : 'belum diisi' }}
                                    </div>
                                    <div class="col-12">
                                        Kode Pos : {{ $lokasiUser ? $lokasiUser->kode_pos : 'belum diisi' }}
                                    </div>
                                </div>
                                <div class="row card mb-3 rounded">
                                    <div class="col-12 btn btn-primary p-2 text-center">My Profile</div>
                                </div>
                                <div class="row card mb-3 rounded">
                                    <div class="col-12 btn btn-info p-2 text-center">Hubungi Penjual</div>
                                    @foreach ($cart as $item)
                                    @if (isset($phoneNumbers[$item['id_toko']]))
                                        <p>Nomor Telepon Penjual: {{ $phoneNumbers[$item['id_toko']] }}</p>
                                        <a href="https://api.whatsapp.com/send?phone=+62{{ $phoneNumbers[$item['id_toko']] }}&text=Halo,%20saya%20ingin%20membeli%20barang%20ini"
                                            class="btn btn-success" target="_blank">
                                            Hubungi via WhatsApp
                                        </a>
                                    @else
                                        <p>Nomor Telepon Penjual: Belum Tersedia</p>
                                    @endif
                                @endforeach
                                </div>
                                <form action="{{ route('handle-payment') }}" method="POST" id="paymentForm"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="mb-3">
                                        <input type="hidden" name="jumlah_pembelian" id="jumlah_pembelian">
                                        <input type="hidden" name="total_pembayaran" id="total_pembayaran">
                                        <input type="hidden" name="nama_product" id="nama_product">
                                        <input type="hidden" name="total_biaya" id="total_biaya">
                                        <input type="hidden" name="pemasukan_admin" id="pemasukan_admin">
                                        <label for="exampleInputEmail1" class="form-label">Bukti Bayar</label>
                                        <input type="file" class="form-control" id="bukti_pembayaran"
                                            name="bukti_pembayaran" required>
                                        @foreach ($cart as $productId => $item)
                                            <div class="mb-3">
                                                <input type="hidden" name="id_produk_array[]"
                                                    value="{{ $productId }}">
                                                <input type="hidden" name="id_toko_array[]"
                                                    value="{{ $item['id_toko'] }}">
                                                <input type="hidden" name="jumlah_pembelian_array[]"
                                                    value="{{ $item['quantity'] }}">
                                                <input type="hidden" name="sub_total_array[]"
                                                    value="{{ $item['quantity'] * $item['price'] }}">
                                                <input type="hidden" name="nama_product_array[]"
                                                    value="{{ $item['name'] }}">
                                            </div>
                                        @endforeach
                                    </div>
                                    <div class="row card mb-3 rounded">
                                        <button type="submit" class="btn btn-primary"
                                            onclick="preparePayment()">Bayar</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
