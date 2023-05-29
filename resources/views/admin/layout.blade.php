<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> AF-Admin </title>
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css"
          href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700"/>
    <!-- Nucleo Icons -->
    <link href="{{ asset('storage/admin/assets/css/nucleo-icons.css') }} " rel="stylesheet"
          type="text/css">
    <link href="{{ asset('storage/admin/assets/css/nucleo-svg.css') }} " rel="stylesheet"
          type="text/css">

    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">

    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <!-- CSS Files -->
    <!-- <link href="{{ asset('storage/admin/assets/css/material-dashboard.css') }} " rel="stylesheet" -->
    <link href="{{ asset('storage/admin/assets/css/material-dashboard.min.css') }} " rel="stylesheet"
          type="text/css">

    @yield('style')
</head>

<body class="g-sidenav-show  bg-gray-200">
<aside
    class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 bg-gradient-dark bg-white"
    id="sidenav-main">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
           aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0" href="/" target="_blank">
            <!-- <span class="ms-1 font-weight-bold text-white">IT-Expert</span> -->
        </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto h-auto" id="sidenav-collapse-main">
        <ul class="navbar-nav">

            <li class="nav-item">
                <a class="nav-link text-white" href="/">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">dashboard</i>
                    </div>
                    <span class="nav-link-text ms-1">Dashboard</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link text-white" href="{{ route('order.index') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">shopping_cart</i>
                    </div>
                    <span class="nav-link-text ms-1">Orders</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link text-white" href="{{ route('customer.index') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">group</i>
                    </div>
                    <span class="nav-link-text ms-1">Customers</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link text-white" href="{{ route('product.index') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">category</i>
                    </div>
                    <span class="nav-link-text ms-1">Products</span>
                </a>
            </li>

            <li class="nav-item">
                <a data-bs-toggle="collapse" href="#dashboardsExamples" class="nav-link text-white collapsed"
                   aria-controls="dashboardsExamples" role="button" aria-expanded="false">
                    <i class="material-icons-round opacity-10">settings</i>
                    <span class="nav-link-text ms-2 ps-1">Settings</span>
                </a>
                <div class="collapse" id="dashboardsExamples" style="">
                    <ul class="nav ">
                        <li class="nav-item ">
                            <a class="nav-link text-white" href="{{ route('category.index') }}">
                                <span class="sidenav-mini-icon"> C </span>
                                <span class="sidenav-normal  ms-2  ps-1"> Category </span>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link text-white" href="{{ route('description.index') }}">
                                <span class="sidenav-mini-icon"> D </span>
                                <span class="sidenav-normal  ms-2  ps-1"> Description </span>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link text-white" href="{{ route('product_options.index') }}">
                                <span class="sidenav-mini-icon"> P </span>
                                <span class="sidenav-normal  ms-2  ps-1"> Product Options </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>

    </div>
</aside>
<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur"
         data-scroll="true">
        <div class="container-fluid py-1 px-3">
            <nav aria-label="breadcrumb">

            </nav>

        </div>
    </nav>


    <!-- End Navbar -->
    <div class="container-fluid py-4">

        @yield('content')


    </div>
</main>
<!--   Core JS Files   -->
<script src="{{ asset('storage/admin/assets/js/core/popper.min.js') }} "></script>
<script src="{{ asset('storage/admin/assets/js/core/bootstrap.min.js') }} "></script>
<script src="{{ asset('storage/admin/assets/js/plugins/perfect-scrollbar.min.js') }} "></script>
<script src="{{ asset('storage/admin/assets/js/plugins/smooth-scrollbar.min.js') }} "></script>
<script src="{{ asset('storage/admin/assets/js/plugins/chartjs.min.js') }} "></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js">
</script>

<script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
        var options = {
            damping: '0.5'
        }
        Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
</script>

<script>
    function search() {
        let search = document.getElementById('searchInput').value;
        if (search.length > 2) {
            window.location.href = "/cliente/" + search;
        }
    }
</script>
<!-- Github buttons -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
<!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
<script src="{{ asset('storage/admin/assets/js/material-dashboard.min.js') }} "></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

@yield('script')

</body>

</html>
