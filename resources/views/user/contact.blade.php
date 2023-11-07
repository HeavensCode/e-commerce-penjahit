@extends('user.index-user')

@section('container')
    <div class="contact-us">
        <div class="kontainer">
            <div class="judulregister d-flex justify-content-center text-center">
                <h1 class="text-dark">Contact Us</h1>
            </div>
            <div class="d-flex justify-content-center">
                <a href="/user/beranda" class="text-decoration-none text-dark">Home</a> /
                <a href="/contact" class="text-decoration-none text-dark">Contact</a>
            </div>
        </div>
    </div>
    <div class="container my-5 py-5  border border-black rounded ">
        <div class="row">
            <div class="col-md-6">
                <img src="{{ asset('image/contact2.png') }}" alt="working" width="500px" class="animated-image">
            </div>
            <div class="col-md-6">
                <h2 class="text-center">Tell Us Something</h2>
                <form action="">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Name *</label>
                        <input type="text" class="form-control" id="name" placeholder="Enter Your Name">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Email *</label>
                        <input type="email" class="form-control" id="email" placeholder="Enter Your Email">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Messages</label>
                        <textarea class="form-control" id="messages" name="messages" rows="3" placeholder="Enter Your Messages"></textarea>
                    </div>
                    <div class="text-center pt-3">
                        <button type="submit" class="btn btn-primary w-100">Send Message</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
