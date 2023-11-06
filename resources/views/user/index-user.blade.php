<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    {{-- navbar --}}
    {{-- <nav class="navbar navbar-expand-lg bg-body-tertiary rounded" aria-label="Thirteenth navbar example">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample11"
                aria-controls="navbarsExample11" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse d-lg-flex" id="navbarsExample11">
                <a class="navbar-brand col-lg-3 me-0" href="#"><img src="{{ assets('image/navbar/logo.png') }}"
                        alt=""></a>
                <ul class="navbar-nav col-lg-6 justify-content-lg-center">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Product</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" aria-disabled="true">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" aria-disabled="true">Contact</a>
                    </li>
                </ul>
                <div class="d-lg-flex col-lg-3 justify-content-lg-end">
                    <button class="btn btn-primary">Button</button>
                </div>
            </div>
        </div>
    </nav> --}}

    <header id="header" class="">
        <div class="maxlgcontainernav">

            <!-- Logo Frizfoo -->
            <a href="/">
                <img src="{{ asset('image/navbar/logo.png') }}" class="logo" alt="Logo Frizfoo" width="160"
                    height="50">
            </a>

            <!-- Navbar List -->
            <nav class="">
                <ul id="navbar">
                    <li><a href="/" class="active">Home</a></li>
                    <li><a href="/product">Products</a></li>
                    <li><a href="/about">About</a></li>
                    <li><a href="/contact">Contact</a></li>
                    <!-- <a href="#" id="close"><i class="far fa-times  fa-spin"></i></a> -->
                </ul>
            </nav>

            <!-- Navbar Icon Section-->
            <div class="icons">
                <ul id="nav-icon-list">
                    <!-- Untuk Icon Navigasi Mobile -->
                    <button id="menu-btn-mobile" class="fas fa-bars" aria-label="mobileNavigation"></button>
                    <!-- Untuk Icon Search -->
                    <button id="search-btn" class="fas fa-search" aria-label="searchToggle"></button>
                    <!-- Untuk Icon Cart -->
                    <a href="/cart">
                        <i class="far fa-shopping-bag"></i>
                        <div class="frizfoo-cart-number-badge">01</div>
                    </a>
                    <!-- Untuk Icon Login/Signup -->
                    <button id="signlog-btn" class="fas fa-user" aria-label="signlogToggle"></button>
                </ul>
            </div>

            <!-- Navbar Search Section -->
            <form action="/search" method="get" class="search-form" id="formsearch">
                <input type="text" name="q" placeholder="Search Product Here..." id="search-inputt"
                    required="">
                <button type="submit" for="search-box" class="fas fa-search" id="search-buttonasli"
                    aria-label="searchButton"></button>
            </form>


            <!-- Box Profile User Content -->


            <!-- Box User Login/Signup -->
            <div class="boxusersignlog pen-userpro-signlog">
                <div class="pmbungkus-box-signlog">
                    <!-- Header Box SignLog -->
                    <div class="header-box-signlog">
                        <div class="small-profile">
                            <img src="/img/Profil.webp" alt="Profile Picture">
                        </div>
                        <p>Welcome User</p>
                    </div>

                    <!-- Box SignLog List -->
                    <div class="list-box-signlog">
                        <a href="/login" class="loginbtn normalbtn">
                            <i class="fas fa-sign-in"></i>
                            Login
                        </a>

                        <a href="/register" class="signupbtn normalbtn">
                            <i class="fas fa-user-plus"></i>
                            Register
                        </a>
                    </div>

                    <!-- End Box SignLog List -->
                    <div class="footer-box-signlog">
                        <!-- <i class="fas fa-sign-out"></i> -->
                        <p>Created with <i class="fas fa-heart"></i> By Liella!</p>
                    </div>
                </div>
            </div>



        </div>
    </header>
    <div class="container">
        @yield('container')
    </div>

    {{-- footer --}}
    <div class="container">
        <footer class="row row-cols-1 row-cols-sm-2 row-cols-md-5 py-5 my-5 border-top">
            <div class="col mb-3">
                <a href="/" class="d-flex align-items-center mb-3 link-body-emphasis text-decoration-none">
                    <svg class="bi me-2" width="40" height="32">
                        <use xlink:href="#bootstrap" />
                    </svg>
                </a>
                <p class="text-body-secondary">&copy; 2023</p>
            </div>

            <div class="col mb-3">

            </div>

            <div class="col mb-3">
                <h5>Section</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Home</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Features</a>
                    </li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Pricing</a>
                    </li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">FAQs</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">About</a>
                    </li>
                </ul>
            </div>

            <div class="col mb-3">
                <h5>Section</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Home</a>
                    </li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Features</a>
                    </li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Pricing</a>
                    </li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">FAQs</a>
                    </li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">About</a>
                    </li>
                </ul>
            </div>

            <div class="col mb-3">
                <h5>Section</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Home</a>
                    </li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Features</a>
                    </li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Pricing</a>
                    </li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">FAQs</a>
                    </li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">About</a>
                    </li>
                </ul>
            </div>
        </footer>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
