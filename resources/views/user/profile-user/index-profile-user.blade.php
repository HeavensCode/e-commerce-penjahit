<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- font awesome --}}
    <meta name="description" content="">
    <meta name="author" content="">
    {{-- font awesome --}}
    <script src="https://kit.fontawesome.com/9f3246d2c8.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&amp;display=swap"
        rel="stylesheet">
    <link href="https://site-assets.fontawesome.com/releases/v5.15.4/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/profile.css') }}">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="https://kit.fontawesome.com/9f3246d2c8.js" crossorigin="anonymous"></script>
    <title>Admin</title>
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar" style="background-color: #F9B572">


            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link">
                    <span>
                        <h4 style="text-align: start">Welcome {{ Auth::user()->nama }}</h4>
                    </span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Menu
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fa-solid fa-user"></i>
                    <span>Profile</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Menu:</h6>
                        <a class="collapse-item" href="{{ route('profile') }}">Profile Saya</a>
                        {{-- <a class="collapse-item" href="cards.html">Jumlah Toko</a> --}}
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fa-solid fa-house"></i>
                    <span>Alamat</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Menu Alamat</h6>
                        <a class="collapse-item" href="{{ route('alamat') }}">Alamat Saya</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilitiess"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fa-solid fa-store"></i>
                    <span>Toko Saya</span>
                </a>
                <div id="collapseUtilitiess" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Menu Toko:</h6>
                        <a class="collapse-item" href="{{ route('toko') }}">Daftar Product</a>
                    </div>
                </div>
            </li>
            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilitiesss"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fa-solid fa-cart-shopping"></i>
                    <span>Daftar Pembelian</span>
                </a>
                <div id="collapseUtilitiesss" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Menu Pembelian:</h6>
                        <a class="collapse-item" href="{{ route('daftar-pembelian') }}">Daftar Pembelian</a>
                    </div>
                </div>
            </li>
            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse"
                    data-target="#collapseUtilitiessss" aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fa-solid fa-money-check"></i>
                    <span>Daftar Transaksi</span>
                </a>
                <div id="collapseUtilitiessss" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Menu Transaksi:</h6>
                        <a class="collapse-item" href="{{ route('daftar-transaksi') }}">Daftar Pembelian</a>
                    </div>
                </div>
            </li>
            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse"
                    data-target="#collapseUtilitiesssss" aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fa-solid fa-money-check"></i>
                    <span>Main Menu</span>
                </a>
                <div id="collapseUtilitiesssss" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Main Menu</h6>
                        <a class="collapse-item" href="{{ route('beranda') }}">Home</a>
                        <a class="collapse-item" href="{{ route('produk') }}">Product</a>
                        <a class="collapse-item" href="{{ route('about') }}">About</a>
                        <a class="collapse-item" href="{{ route('contact') }}">Contact</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">




            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->

                <!-- Sidebar Toggle (Topbar) -->
                <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                    <i class="fa fa-bars"></i>
                </button>

                {{-- navbar --}}
                <nav class="navbar navbar-expand-lg p-0" aria-label="Thirteenth navbar example">
                    <div class="container-fluid">
                        {{-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarsExample11" aria-controls="navbarsExample11" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button> --}}
                        <div class="navbar-collapse d-lg-flex collapse" id="navbarsExample11">
                            <a class="navbar-brand col-lg-3 me-0 p-0" href="#">
                                <img src="{{ asset('image/navbar/logo.png') }}" alt="">
                            </a>
                            <ul class="navbar-nav col-lg-6 justify-content-lg-center">
                                <li class="nav-item linav">
                                    <a class="nav-link navlink active text-white" aria-current="page"
                                        href="{{ route('beranda') }}">Home</a>
                                </li>
                                <li class="nav-item linav">
                                    <a class="nav-link navlink active text-white"
                                        href="{{ route('produk') }}">Product</a>
                                </li>
                                <li class="nav-item linav">
                                    <a class="nav-link navlink active text-white"
                                        href="{{ route('about') }}">About</a>
                                </li>
                                <li class="nav-item linav">
                                    <a class="nav-link navlink active text-white"
                                        href="{{ route('contact') }}">Contact</a>
                                </li>
                            </ul>
                            <div class="d-flex col-lg-3 justify-content-center">
                                <button id="searchButton" class="btn btn-light" style="margin: 0 5px 0 5px">
                                    <i class="fa-solid fa-magnifying-glass"></i>
                                </button>
                                <form action="{{ route('shopping-cart') }}" method="GET">
                                    <button class="btn btn-light" type="submit" style="margin: 0 5px 0 5px">
                                        <i class="fa-solid fa-bag-shopping"></i>
                                        <span class="badge bg-danger">{{ count($cart) }}</span>

                                    </button>
                                </form>
                                <button id="userButton" class="btn btn-light" style="margin: 0 5px 0 5px">
                                    <i class="fa-solid fa-user"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </nav>
                <div class="position-absolute container"
                    style="display: flex; justify-content: flex-end; z-index: 99;">
                    <div id="userDropdown"
                        class="user-dropdown position-absolute shadow-blur bg-opacity-25 p-3 shadow"
                        style="margin-left: auto;">
                        <div class="judul d-flex justify-content-end">
                            <img src="{{ asset('image/logo-user.jpg') }}" alt="" width="50px"
                                class="rounded-circle">
                            @auth
                                <h4 style="text-align: start">Welcome {{ Auth::user()->nama }}</h4>
                            @endauth
                            @guest
                                <h4 style="text-align: start">Welcome User</h4>
                            @endguest
                        </div>
                        <div class="row justify-content-center pt-3">
                            @auth
                                <a class="btn btn-danger col-5 mx-1" href="{{ route('logout') }}"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    <i class="fa-solid fa-right-to-bracket"></i>Logout
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    style="display: none;">
                                    @csrf
                                </form>
                            @endauth
                            @guest
                                <a class="btn btn-danger col-5 mx-1" href="{{ route('form-login-user') }}">
                                    <i class="fa-solid fa-right-to-bracket"></i>Login
                                </a>
                            @endguest
                            @auth
                                <a class="btn btn-success col-5 mx-1" href="{{ route('profile') }}">Profil</a>
                            @endauth
                            @guest
                                <a class="btn btn-primary col-5 mx-1" href="/register">Register</a>
                            @endguest
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

                {{-- alert --}}
                <div class="container">
                    <div class="row my-3">
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                        @if (session('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                        @endif
                    </div>
                </div>
                <!-- End of Topbar -->


                <!-- Begin Page Content -->
                <div class="container-fluid">
                    @yield('container')
                </div>
            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            {{-- footer --}}
            <footer class="footer mt-5" id="footer" style="background-color: #ED7D31">
                <section class="footer" id="footer">
                    <div class="container">
                        <footer class="row justify-content-center py-5">
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
                                    <li class="nav-item fs-5 mb-2"><a href="/produk"
                                            class="nav-link text-body-secondary p-0"><i class="fa fa-arrow-right"></i>
                                            Products</a>
                                    </li>
                                    <li class="nav-item fs-5 mb-2"><a href="/about"
                                            class="nav-link text-body-secondary p-0"><i class="fa fa-arrow-right"></i>
                                            About
                                            Us</a>
                                    </li>
                                    <li class="nav-item fs-5 mb-2"><a href="/contact"
                                            class="nav-link text-body-secondary p-0"><i class="fa fa-arrow-right"></i>
                                            Contact
                                            Us</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col mb-4">
                                <h5>Address</h5>
                                <hr>
                                <ul class="nav flex-column">
                                    <li class="nav-item fs-5 mb-2"><a href="#"
                                            class="nav-link text-body-secondary p-0"><i
                                                class="fa-solid fa-location-dot"></i>
                                            Makassar, Indonesia</a>
                                    </li>
                                    <li class="nav-item fs-5 mb-2"><a href="#"
                                            class="nav-link text-body-secondary p-0"><i class="fa-solid fa-phone"></i>
                                            08123489045</a>
                                    </li>
                                    <li class="nav-item fs-5 mb-2"><a href="#"
                                            class="nav-link text-body-secondary p-0"><i
                                                class="fa-solid fa-envelope"></i>
                                            jahitku@gmail.com</a>
                                    </li>
                                </ul>
                            </div>
                        </footer>
                    </div>
                </section>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"></span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('jquery/jquery.min.js') }}"></script>

    <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('js/sb-admin-2.js') }}"></script>

    <script src="{{ asset('js/main.js') }}"></script>
    <!-- Custom scripts for all pages-->
    <script src="{{ asset('chart.js/Chart.min.js') }}"></script>

    <!-- Page level plugins -->
    <script src="{{ asset('js/demo/chart-area-demo.js') }}"></script>

    <!-- Page level custom scripts -->
    <script src="{{ asset('js/demo/chart-pie-demo.js') }}"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script id="dsq-count-scr" src="//jahitku.disqus.com/count.js" async></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>
