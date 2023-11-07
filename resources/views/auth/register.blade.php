@extends('user.index-user')

@section('container')
    <div class="register">
        <div class="container kontainer">
            <div class="judulregister d-flex justify-content-center text-center">
                <h1 class="text-dark">Register</h1>
            </div>
            <div class="d-flex justify-content-center">
                <a href="" class="text-decoration-none text-dark">Home</a> /
                <a href="" class="text-decoration-none text-dark">Register</a>
            </div>
        </div>
    </div>
    <div class="container">
        <form class="row mt-5 px-4 py-4 border border-black rounded" style="background-color: #A17449">
            <h4>Registration</h4>
            <div class="col-md-6">
                <label for="inputEmail4" class="form-label">Full Name *</label>
                <input type="text" class="form-control" id="full_name" name="full_name" required>
            </div>
            <div class="col-md-6">
                <label for="inputPassword4" class="form-label">Username *</label>
                <input type="text" class="form-control" id="username" name="username" required>
            </div>
            <div class="col-md-6">
                <label for="inputPassword4" class="form-label">Email *</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="col-md-6">
                <label for="inputPassword4" class="form-label">Phone Number *</label>
                <input type="number" class="form-control" id="phone_number" name="phone_number" required>
            </div>
            <div class="col-md-6">
                <label for="inputPassword4" class="form-label">Password *</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <div class="col-md-6">
                <label for="inputPassword4" class="form-label">Confirm Password *</label>
                <input type="password" class="form-control" id="confirm_password" name="confirm_password" required>
            </div>
            <div class="col-md-6">
                <label for="inputState" class="form-label">Gender</label>
                <div class="radio-group">
                    <div>
                        <input type="radio" id="gender" name="gender" value="male"> Male
                    </div>
                    <div>
                        <input type="radio" id="gender" name="gender" value="female"> Female
                    </div>
                    <div>
                        <input type="radio" id="gender" name="gender" value="none"> Tidak Dulu
                    </div>
                </div>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary w-100">Register</button>
            </div>
            <div class="text-center">
                <p>Sudah Punya Akun? <a href="/login" class="text-decoration-none text" style="color: #AC1818">Login</a>
                </p>
            </div>
        </form>
    </div>
@endsection
