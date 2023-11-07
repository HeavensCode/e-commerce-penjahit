<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    {{-- font awesome --}}
    <script src="https://kit.fontawesome.com/9f3246d2c8.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&amp;display=swap"
        rel="stylesheet">
    <link href="https://site-assets.fontawesome.com/releases/v5.15.4/css/all.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    {{-- navbar --}}
    <nav class="navbar navbar-expand-lg" aria-label="Thirteenth navbar example">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample11"
                aria-controls="navbarsExample11" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-collapse d-lg-flex collapse" id="navbarsExample11">
                <a class="navbar-brand col-lg-3 me-0" href="#"><img src="{{ asset('image/navbar/logo.png') }}"
                        alt=""></a>
                <ul class="navbar-nav col-lg-6 justify-content-lg-center">
                    <li class="nav-item">
                        <a class="nav-link navlink active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link navlink active" href="#">Product</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link navlink active" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link navlink active" href="#">Contact</a>
                    </li>
                </ul>
                <div class="d-lg-flex col-lg-3 justify-content-lg-start">
                    <button id="searchButton" class="btn btn-light" style="margin: 0 5px 0 5px">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </button>
                    <button class="btn btn-light" style="margin: 0 5px 0 5px">
                        <i class="fa-solid fa-bag-shopping"></i>
                    </button>
                    <button id="userButton" class="btn btn-light" style="margin: 0 5px 0 5px">
                        <i class="fa-solid fa-user"></i>
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <div class="container">
        <div id="userDropdown" class="user-dropdown">
            <div class="judul d-flex justify-content-end">
                <img src="{{ asset('image/logo-user.jpg') }}" alt="" width="50px" class="rounded-circle">
                <h4 style="text-align: start">Welcome User</h4>
            </div>
            <div class="d-flex justify-content-end pt-3">
                <a class="btn btn-danger mx-3" href="/login"> <i class="fa-solid fa-right-to-bracket"></i> Login</a>
                <a class="btn btn-primary" href="/register"><i class="fa-solid fa-plus"></i> Register</a>
            </div>
        </div>
    </div>

    {{-- form searching --}}
    <div class="container">
        <form id="searchForm" action="" class="form-inline" style="display: none;">
            <div class="input-group"> <!-- Tambahkan input-group -->
                <input type="text" class="form-control" placeholder="Cari Product">
                <div class="input-group-append"> <!-- Tambahkan input-group-append -->
                    <button type="submit" class="btn buttoncarii btn-light"><i
                            class="fa-solid fa-magnifying-glass"></i></button>
                </div>
            </div>
        </form>
    </div>

    {{-- main content --}}
    <div>
        @yield('container')
    </div>



    {{-- footer --}}
    <footer class="footer mt-5" id="footer" style="background-color: #ED7D31">
        <div class="container pt-4 py-0">
            <footer>
                <div class="row">
                    <div class="col-6 col-md-6 mb-3">
                        <h2>Subscribe for Offers and News</h1>
                            <h6>Get E-mail updates about our latest Products and <span class="text-warning">
                                    Special offers. </span> </h6>
                    </div>
                    <div class="col-md-4 offset-md-1 mb-3">
                        <form>
                            <div class="d-flex">
                                <label for="newsletter1" class="visually-hidden">Your Email address</label>
                                <input id="newsletter1" type="text" class="form-control"
                                    placeholder="Your Email Address">
                                <button class="btn btn-primary" type="button">Subscribe</button>
                            </div>
                        </form>
                    </div>
                </div>
            </footer>
        </div>
        <section class="footer" id="footer">
            <div class="container">
                <footer class="row py-5  justify-content-center">
                    <div class="col mb-4">
                        <h5>About Us</h5>
                        <hr>
                        <p class="fs-5">Jahitku Merupakan suatu web application yang dapat menghubungkan pembeli dan
                            penjual dalam suatu
                            komunitas.</p>
                    </div>

                    <div class="col mb-4">
                        <h5>Company</h5>
                        <hr>
                        <ul class="nav flex-column">
                            <li class="nav-item mb-2 fs-5"><a href="#"
                                    class="nav-link p-0 text-body-secondary"><i class="fa fa-arrow-right"></i>
                                    Products</a>
                            </li>
                            <li class="nav-item mb-2 fs-5"><a href="#"
                                    class="nav-link p-0 text-body-secondary"><i class="fa fa-arrow-right"></i> About
                                    Us</a>
                            </li>
                            <li class="nav-item mb-2 fs-5"><a href="#"
                                    class="nav-link p-0 text-body-secondary"><i class="fa fa-arrow-right"></i> Contact
                                    Us</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col mb-4">
                        <h5>Address</h5>
                        <hr>
                        <ul class="nav flex-column">
                            <li class="nav-item mb-2 fs-5"><a href="#"
                                    class="nav-link p-0 text-body-secondary"><i class="fa-solid fa-location-dot"></i>
                                    Makassar, Indonesia</a>
                            </li>
                            <li class="nav-item mb-2 fs-5"><a href="#"
                                    class="nav-link p-0 text-body-secondary"><i class="fa-solid fa-phone"></i>
                                    08123489045</a>
                            </li>
                            <li class="nav-item mb-2 fs-5"><a href="#"
                                    class="nav-link p-0 text-body-secondary"><i class="fa-solid fa-envelope"></i>
                                    jahitku@gmail.com</a>
                            </li>
                        </ul>
                    </div>
                </footer>
            </div>
        </section>
    </footer>
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
