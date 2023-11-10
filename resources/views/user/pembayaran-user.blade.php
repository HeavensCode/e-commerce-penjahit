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
                                    <div class="col-12">alamat : </div>
                                    <div class="col-12">Kota : </div>
                                    <div class="col-12">Provinsi : </div>
                                    <div class="col-12">Kode Pos : </div>
                                </div>
                                <div class="row card mb-3 rounded">
                                    <div class="col-12 btn btn-primary p-2 text-center">My Profile</div>
                                </div>
                                <div class="row card mb-3 rounded">
                                    <div class="col-12 btn btn-info p-2 text-center">Hubungi Penjual</div>
                                </div>
                                <div class="row card mb-3 rounded">
                                    <div class="col-12 btn btn-success p-2 text-center">Bayar</div>
                                </div>
                            </div>
                        </div>
                    </div>
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
                                                    <input type="text" name="subtotal"
                                                        value="Rp. {{ number_format($item['price'] * $item['quantity']) }}"
                                                        class="form-control" id="subtotal" readonly>
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

                            <div class="col-12 totals pt-4">
                                <h2 class="title text-start">Order Total</h2>
                                <div class="row">
                                    <div class="col-12 border-bottom pt-3">
                                        <div class="d-flex w-100 justify-content-between">
                                            <p>Ongkos Kirim</p>
                                            <p class="ml-auto">Belum Termasuk</p>
                                        </div>
                                    </div>
                                    <div class="col-12 border-bottom pt-3">
                                        <div class="d-flex w-100 justify-content-between">
                                            <p><b>Total</b></p>
                                            <p class="ml-auto"><b>Rp 8.0000</b></p>
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
