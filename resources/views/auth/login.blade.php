@extends('user.index-user')

@section('container')
    <div class="login">
        <div class="kontainer container">
            <div class="judulregister d-flex justify-content-center text-center">
                <h1 class="text-dark">Login</h1>
            </div>
            <div class="d-flex justify-content-center">
                <a href="" class="text-decoration-none text-dark">Home</a> /
                <a href="/login" class="text-decoration-none text-dark">Login</a>
            </div>
        </div>
    </div>
    <div class="form-signin w-50 container">
        <form class="row mt-5 rounded border border-black px-4 py-4" method="post" action="{{ route('login.user') }}"
            style="background-color: #A17449">
            @csrf
            <h4 class="text-center">Login Dulu</h4>
            <div class="d-flex">
                <div class="h-70 d-flex justify-content-center rounded"
                    style="width: 50px; align-items: center; background-color: #FFFFD9">
                    <i class="fa-solid fa-user fs-3"></i>
                </div>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="d-flex fs-3 mt-2">
                <div class="h-70 d-flex justify-content-center rounded"
                    style="width: 50px; align-items: center; background-color: #FFFFD9">
                    <i class="fa-solid fa-lock"></i>
                </div>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <div class="pt-3 text-center">
                <button type="submit" class="btn btn-primary w-100">Login</button>
            </div>
            <div class="text-center">
                <p>Belum Punya Akun? <a href="/register" class="text-decoration-none text" style="color: #AC1818">Sign
                        Up</a>
                </p>
            </div>
        </form>
    </div>
@endsection
