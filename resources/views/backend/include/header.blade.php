{{-- Seller Dashboard --}}

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Dashboard</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('assets1/vendors/iconfonts/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets1/vendors/iconfonts/ionicons/dist/css/ionicons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets1/vendors/iconfonts/flag-icon-css/css/flag-icon.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets1/vendors/css/vendor.bundle.base.css') }}">
    <link rel="stylesheet" href="{{ asset('assets1/vendors/css/vendor.bundle.addons.css') }}">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('assets1/css/shared/style.css') }}">
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{ asset('assets1/css/demo_1/style.css') }}">

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- End Layout styles -->

</head>
<style>
    .item-purchase-banner {
        display: none;
    }
</style>

<body>
    <div style="margin-top:-10px;" class="container-scroller">
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
                <a class="navbar-brand brand-logo" href="index.html">

                    {{-- <img src="{{ asset('assets1/images/logo.svg') }}" alt="logo" /> </a> --}}
                    <a class="navbar-brand brand-logo-mini" href="index.html">
                        <img src="asset('assets1/images/logo-mini.svg')}}" alt="logo" /> </a>
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-center">

                <ul class="navbar-nav ml-auto">

                    <li class="nav-item dropdown d-none d-xl-inline-block user-dropdown">
                        <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown"
                            aria-expanded="false">
                            @if (!empty(Auth::user()->thumbnail))
                                <img class="img-xs rounded-circle"
                                    src="{{ asset('userinformation/' . Auth::user()->thumbnail) }}" alt="Profile image">
                            @else
                                <img class="img-xs rounded-circle" src="{{ asset('logo.jpg') }}" alt="Profile image">
                            @endif
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                            <div class="dropdown-header text-center">

                                <p class="mb-1 mt-3 font-weight-semibold">{{ Auth::user()->name }}</p>
                                <p class="font-weight-light text-muted mb-0">{{ Auth::user()->email }}</< /p>
                            </div>
                            <a href="{{ route('userinformation.list') }}" class="dropdown-item">My Profile <i
                                    class="dropdown-item-icon ti-dashboard"></i></a>
                            <a href="{{ route('userinformation.getchangepassword') }}" class="dropdown-item">Change
                                Password <i class="dropdown-item-icon ti-dashboard"></i></a>

                            <a href="{{ route('userinformation.logout') }}"class="dropdown-item">Sign Out<i
                                    class="dropdown-item-icon ti-power-off"></i></a>
                        </div>
                    </li>
                </ul>
                <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
                    data-toggle="offcanvas">
                    <span class="mdi mdi-menu"></span>
                </button>
            </div>
        </nav>
