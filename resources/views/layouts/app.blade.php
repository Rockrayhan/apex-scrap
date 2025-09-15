<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title> Apex scrap - Dashboard </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="{{ asset('img/favicon.ico') }}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css') }}" rel="stylesheet" />

    <!-- Customized Bootstrap 5 Stylesheet -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <style>
        footer {
            position: fixed;
            left: 0;
            bottom: 0;
            width: auto;
            z-index: 999;
        }

        .active {
            background-color: rgba(0, 128, 0, 0.445) !important;
            color: #262626 !important;
        }
    </style>
</head>

<body>
    <div class="container-xxl position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner"
            class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-light navbar-light">
                <a href="/apex-admin" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-success"> Apex-Scrap</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        {{-- <img class="rounded-circle" src="{{ asset('img/user.jpg') }}" alt=""
                            style="width: 40px; height: 40px;"> --}}

                        <img src="{{ url('img/user.jpg') }}" alt="" class="rounded-circle"
                            style="width:40px; height:40px;">

                        <div
                            class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1">
                        </div>
                    </div>
                    <div class="ms-3">
                        {{-- <h6 class="mb-0">Jhon Doe</h6> --}}
                        <span class="text-success">Admin</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="{{ route('dashboard') }}"
                        class="nav-item nav-link {{ Route::is('dashboard') ? 'active' : '' }}">
                        <i class="bi bi-speedometer2 me-2"></i> Dashboard
                    </a>

                    <a href="{{ route('admin.categories.index') }}"
                        class="nav-item nav-link {{ Route::is('admin.categories.index') ? 'active' : '' }}">
                        <i class="bi bi-tags me-2"></i> Categories
                    </a>

                    <a href="{{ route('admin.products.index') }}"
                        class="nav-item nav-link {{ Route::is('admin.products.index') ? 'active' : '' }}">
                        <i class="bi bi-box-seam me-2"></i> Products
                    </a>

                    <a href="{{ route('blogs.index') }}"
                        class="nav-item nav-link {{ Route::is('blogs.index') ? 'active' : '' }}">
                        <i class="bi bi-journal-text me-2"></i> Blogs
                    </a>


                </div>
            </nav>
        </div>
        <!-- Sidebar End -->



        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0">
                <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="mb-0"><i class="fa fa-hashtag"></i></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0 text-success">
                    <i class="fa fa-bars"></i>
                </a>

                <span class="text-success mx-3 fs-6"> Admin Dashboard </span>

                <div class="navbar-nav align-items-center ms-auto">
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img class="rounded-circle me-lg-2" src="{{ url('img/user.jpg') }}" alt=""
                                style="width: 40px; height: 40px;">
                            <span class="d-none d-lg-inline-flex">Admin</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="{{ route('admin.change.password.form') }}" class="dropdown-item">Change
                                Password</a>
                            <a href="{{ route('admin.logout') }}" class="dropdown-item"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                Log Out
                            </a>
                            <form id="logout-form" action="{{ route('admin.logout') }}" method="GET" class="d-none">
                            </form>
                        </div>

                    </div>
                </div>
            </nav>
            <!-- Navbar End -->

            <div class="my-5 pb-5">
                @yield('content')
            </div>

            <!-- Footer Start -->
            <footer class="container-fluid pt-4 px-4">
                <div class="bg-light rounded-top p-4">
                    <div class="row container">
                        <div class="col-12 col-sm-6 text-center text-sm-start">
                            &copy; <a href="#">Apex-scrap</a> - All Right Reserved.
                        </div>
                        {{-- <div class="col-12 col-sm-6 text-center text-sm-end">
                            Designed By <a href="https://htmlcodex.com">HTML Codex</a>
                            </br>
                            Distributed By <a class="border-bottom" href="https://themewagon.com"
                                target="_blank">ThemeWagon</a>
                        </div> --}}
                    </div>
                </div>
            </footer>
            <!-- Footer End -->

        </div>


        <!-- Back to Top -->
        {{-- <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a> --}}
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('lib/chart/chart.min.js') }}"></script>
    <script src="{{ asset('lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('lib/tempusdominus/js/moment.min.js') }}"></script>
    <script src="{{ asset('lib/tempusdominus/js/moment-timezone.min.js') }}"></script>
    <script src="{{ asset('lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('js/main.js') }}"></script>

    <!-- TinyMCE Script -->

    <script src="https://cdn.tiny.cloud/1/zu7ey1ky86td80nvbsd6smu0wwwj1g7mn0xca8ugraat9wdw/tinymce/6/tinymce.min.js"
        referrerpolicy="origin"></script>



    <script>
        tinymce.init({
            selector: '.getTinyMce',
            plugins: 'code lists',
            toolbar: 'undo redo | blocks | bold italic | alignleft aligncenter alignright | indent outdent | bullist numlist',
            height: 300
        });

        function syncTinyMCEContent() {
            tinymce.triggerSave(); // Synchronize TinyMCE content with the original <textarea>
        }
    </script>


{{-- alert popup --}}
    <script>
        const toastElList = [].slice.call(document.querySelectorAll('.toast'));
        const toastList = toastElList.map(function(toastEl) {
            return new bootstrap.Toast(toastEl, {
                delay: 3500,
                autohide: true
            });
        });
        toastList.forEach(toast => toast.show());
    </script>


</body>

</html>
