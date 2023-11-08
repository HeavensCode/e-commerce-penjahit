<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/sidebar.css') }}">
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
                        <a class="nav-link navlink active" aria-current="page" href="/beranda">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link navlink active" href="/produk">Product</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link navlink active" href="/about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link navlink active" href="/contact">Contact</a>
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

    <div class="container" style="display: flex; justify-content: flex-end;">
        <div id="userDropdown" class="user-dropdown position-absolute" style="margin-left: auto;">
            <div class="judul d-flex justify-content-end">
                <img src="{{ asset('image/logo-user.jpg') }}" alt="" width="50px" class="rounded-circle">
                <h4 style="text-align: start">Welcome User</h4>
            </div>
            <div class="d-flex justify-content-end pt-3">
                <a class="btn btn-danger mx-3" href="/login"> <i class="fa-solid fa-right-to-bracket"></i>
                    Login</a>
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
    <!-- navbar end -->

    <!-- side bar -->
    <div class="div-main-container d-flex">
        <div class="sidebar" id="side_nav">
            <ul class="list-unstyled px-2">
                <li class="active"> <a href="" class="text-decoration-none px-3 py-2 d-block"> <i
                            class="fa-solid fa-house"></i> Dashboard</a></li>
                <hr>
                <div>
                    <li class=""> <a href="" class="text-decoration-none px-3  d-block d-flex"
                            style="padding-top: 0;"> <img src="{{ asset('image/logo-user.jpg') }}" alt="logo user"
                                class="rounded rounded-circle" width="40px">
                            <div>
                                <p>Nama User</p>
                            </div>
                    </li>
                </div>
                <div class="pt-3">
                    <li class=""> <a href="" class="text-decoration-none px-3 py-2 d-block"
                            style="padding-top: 0;"> <i class="fa-solid fa-user"></i> Profile</a></li>
                    <li class=""> <a href="" class="text-decoration-none px-3 py-2 d-block"
                            style="padding-top: 0;"> <i class="fa-solid fa-location-dot"></i> Alamat</a></li>
                    <li class=""> <a href="" class="text-decoration-none px-3 py-2 d-block">
                            <i class="fa-solid fa-store"></i> Toko Saya</a>
                    </li>
                </div>
            </ul>
            <hr class="h-color mx-2">
            <ul class="list-unstyled px-2">
                <button class="toggler-sidebar text-decoration-none px-3 py-2 d-block" onclick="toggleSidebar()"><i
                        class="fa-solid fa-arrow-right"></i></button>
            </ul>
        </div>
        <div class="content">
            {{-- main content --}}
            <div class="dashboard-content px-3 pt-4">
                <div>
                    @yield('container')
                </div>
            </div>

            {{-- footer --}}
            <footer class="footer mt-5" id="footer">
                <section class="footer" id="footer">
                    <div class="container">
                        <footer class="row py-5  justify-content-center">
                            <div class="col mb-4">
                                <h5>About Us</h5>
                                <hr>
                                <p class="fs-5">Jahitku Merupakan suatu web application yang dapat menghubungkan
                                    pembeli dan
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
                                            class="nav-link p-0 text-body-secondary"><i class="fa fa-arrow-right"></i>
                                            About
                                            Us</a>
                                    </li>
                                    <li class="nav-item mb-2 fs-5"><a href="#"
                                            class="nav-link p-0 text-body-secondary"><i class="fa fa-arrow-right"></i>
                                            Contact
                                            Us</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col mb-4">
                                <h5>Address</h5>
                                <hr>
                                <ul class="nav flex-column">
                                    <li class="nav-item mb-2 fs-5"><a href="#"
                                            class="nav-link p-0 text-body-secondary"><i
                                                class="fa-solid fa-location-dot"></i>
                                            Makassar, Indonesia</a>
                                    </li>
                                    <li class="nav-item mb-2 fs-5"><a href="#"
                                            class="nav-link p-0 text-body-secondary"><i class="fa-solid fa-phone"></i>
                                            08123489045</a>
                                    </li>
                                    <li class="nav-item mb-2 fs-5"><a href="#"
                                            class="nav-link p-0 text-body-secondary"><i
                                                class="fa-solid fa-envelope"></i>
                                            jahitku@gmail.com</a>
                                    </li>
                                </ul>
                            </div>
                        </footer>
                    </div>
                </section>
            </footer>
        </div>
    </div>
    <!-- side end -->
    {{-- main content --}}

    <script>
        $(".sidebar ul li").on("click", function() {
            $(".sidebar ul li.active").removeClass("active");
            $(this).addClass("active");
        });

        $(".open-btn").on("click", function() {
            $(".sidebar").addClass("active");
        });
        $(".close-btn").on("click", function() {
            $(".sidebar").removeClass("active");
        });

        function toggleSidebar() {
            var sidebar = document.querySelector('.sidebar');
            if (sidebar.style.width === '300px') {

                sidebar.style.width = '200px';
            } else {
                sidebar.style.width = '300px';
            }
        }
    </script>

    <script src="{{ asset('js/main.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
