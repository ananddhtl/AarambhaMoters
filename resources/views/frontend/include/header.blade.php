<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/jquery-ui.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css"
        integrity="sha384-4LISF5TTJX/fLmGSxO53rV4miRxdg84mZsxmO8Rx5jGtp/LbrixFETvWa5a6sESd" crossorigin="anonymous">

    <link href="{{ asset('assets/css/all.min.css') }}" rel="stylesheet">

    <link href="{{ asset('assets/css/animate.min.css') }}" rel="stylesheet">

    <link href="{{ asset('assets/css/jquery.fancybox.min.css') }}" rel="stylesheet">

    <link href="{{ asset('assets/css/fontawesome.min.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/slick-theme.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">

    <link href="{{ asset('assets/css/boxicons.min.css') }}" rel="stylesheet">

    <link href="{{ asset('assets/css/nice-select.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <title>Aarambha Motors</title>
    <link rel="icon" href="{{ asset('assets/img/sm-logo.svg') }}" type="image/gif" sizes="20x20">
</head>
<style>
    .dropdown-menu {

        font-size: .875rem;
        line-height: 22px;
        max-width: 500px;
        color: #5c5776;
        border: none;
        box-shadow: 0 10px 30px 0 rgba(31, 45, 61, 0.1);
        border-radius: .5rem;

    }

    .dropdown-menu {
        display: block;
        visibility: hidden;
        opacity: 0;
        -webkit-transform: translateY(20px);
        -ms-transform: translateY(20px);
        transform: translateY(20px);
        -webkit-transition: all 0.3s ease-in;
        -o-transition: all 0.3s ease-in;
        transition: all 0.3s ease-in;
    }

    .dropdown {
        &:hover {
            >.dropdown-menu {
                -webkit-transform: scaleY(1);
                -ms-transform: scaleY(1);
                transform: scaleY(1);
                opacity: 1;
                visibility: visible;
            }
        }
    }

    .dropdown-submenu {
        &:hover {
            >.dropdown-menu {
                -webkit-transform: scaleY(1);
                -ms-transform: scaleY(1);
                transform: scaleY(1);
                opacity: 1;
                visibility: visible;
            }
        }
    }

    .password-container {
        position: relative;
    }

    .password-container input {
        padding-right: 30px;
        /* Adjust as needed to accommodate the icon */
    }

    .password-container .eye-icon {
        position: absolute;
        right: 5px;
        top: 100%;
        transform: translateY(-50%);
        cursor: pointer;
    }

    .password-container .eye-icon1 {
        position: absolute;
        right: 5px;
        top: 40%;
        transform: translateY(-50%);
        cursor: pointer;
    }





    .dropdown-toggle::after {
        display: inline-block;
        margin-left: .255em;
        vertical-align: .255em;
        content: ">";
        border-top: 0rem;
        border-right: 0rem;
        border-bottom: 0;
        border-left: 0rem;
        float: right;

    }

    .avatar-md {
        width: 56px;
        height: 56px;

    }

    .avatar img {
        width: 100%;
        height: 100%;
        -o-object-fit: cover;
        object-fit: cover;
    }


    .avatar {
        position: relative;
        display: inline-block;
        width: 3rem;
        height: 3rem;
        font-size: 1rem;
    }


    .avatar-online:before {
        background-color: green;
    }


    .avatar-indicators:before {
        content: "";
        position: absolute;
        bottom: 0px;
        right: 5%;
        width: 30%;
        height: 30%;
        border-radius: 50%;
        border: 2px solid #fff;
        display: table;

    }
</style>

<body class="tt-magic-cursor">
    <div class="anchor-element"></div>




    <div class="modal signUp-modal fade" id="signUpModal01" tabindex="-1" aria-labelledby="signUpModal01Label"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <a href=""><img src="assets/img/logo.png" alt height="190px" width="200px"
                        style="margin-bottom: 10px; margin-left: 200px;"></a>

                <div class="modal-header">
                    <h4 class="modal-title" id="signUpModal01Label">Sign Up</h4>
                    <p>Already have an account? <button type="button" data-bs-toggle="modal"
                            data-bs-target="#logInModal01">Log In</button></p>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i
                            class="bi bi-x"></i></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('userregister') }}" method="POST">
                        @csrf
                        <div class="col-md-12">
                            <div class="form-inner">
                                <label>First Name*</label>
                                <input type="text" name="fname" id="fname" placeholder="First Name" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-inner">
                                <label>Last Name*</label>
                                <input type="text" name="lname" id="lname" placeholder="Last name" required>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-inner">
                                <label>Enter your email address*</label>
                                <input type="email" name="email" placeholder="Type email" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-inner password-container">
                                <label>Password*</label>
                                <div style="">
                                    <input id="password" name="password" type="password" placeholder="*** ***"
                                        required>
                                    <div class="eye-icon" onclick="togglePassword('password')">
                                        <i class="bi bi-eye-slash" id="togglePassword3"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-inner password-container">
                                <label>Confirm Password*</label>
                                <div style="position: relative;">
                                    <input id="password2" type="password" placeholder="*** ***" required>
                                    <div class="eye-icon" onclick="togglePassword('password2')">
                                        <i class="bi bi-eye-slash" id="togglePassword3"></i>
                                    </div>
                                </div>
                                <p id="passwordMatchError" style="color: red; display: none;">Passwords do not match.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-inner">
                                <button type="submit" class="primary-btn2" type="submit">Sign Up Now</button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>

        </div>
    </div>

    {{-- <ul class="social-icon">
                            <li><a href="#"><img src="assets/img/home1/icon/google.svg" alt></a></li>
                            <li><a href="#"><img src="assets/img/home1/icon/facebook.svg" alt></a></li>
                            <li><a href="#"><img src="assets/img/home1/icon/twiter.svg" alt></a></li>
                        </ul> --}}
    {{-- </form>
    </div>
    </div>
    </div>
    </div> --}}
    <div class="modal signUp-modal fade" id="logInModal01" tabindex="-1" aria-labelledby="logInModal01Label"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <a href="index.html"><img src="assets/img/logo.png" alt height="190px" width="200px"
                        style="margin-bottom: 10px; margin-left: 200px;"></a>
                <div class="modal-header">
                    <h4 class="modal-title" id="logInModal01Label">Log In</h4>
                    <p>Don’t have any account? <button type="button" data-bs-toggle="modal"
                            data-bs-target="#signUpModal01">Sign Up</button></p>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i
                            class="bi bi-x"></i></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('userlogin') }}" method="POST">
                        @csrf
                        <div class="row g-4">
                            <div class="col-md-12">
                                <div class="form-inner">
                                    <label>Enter your email address*</label>
                                    <input type="email" name="email" placeholder="Type email" required>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-inner password-container">
                                    <label>Password*</label>
                                    <div style="position: relative;">
                                        <input id="password3" type="password" name="password" placeholder="*** ***"
                                            required>
                                        <i class="bi bi-eye-slash eye-icon1" id="togglePassword3"
                                            onclick="togglePassword('password3', 'togglePassword3')"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-agreement form-inner d-flex justify-content-between flex-wrap">

                                    <a href="{{ route('publicuser.forgetpassword') }}" class="forgot-pass">Forget
                                        Password?</a>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-inner">
                                    <button class="primary-btn2" type="submit">Log In</button>
                                </div>
                            </div>
                        </div>
                        {{-- <ul class="social-icon">
                            <li><a href="#"><img src="assets/img/home1/icon/google.svg" alt></a></li>
                            <li><a href="#"><img src="assets/img/home1/icon/facebook.svg" alt></a></li>
                            <li><a href="#"><img src="assets/img/home1/icon/twiter.svg" alt></a></li>
                        </ul> --}}
                    </form>
                </div>
            </div>
        </div>
    </div>


    <div class="top-bar">
        <div class="company-logo">
            <a href="/"><img src="{{ asset('assets/img/logo.png') }}" alt height="190px" width="200px"></a>
        </div>
        <div class="search-area">
            <form action="{{ route('search') }}" method="GET">
                @csrf
                <div class="form-inner">
                    <input type="text" name="query" placeholder="Search Vehicles.....">
                    <button type="submit"><i class="bi bi-search"></i></button>
                </div>
            </form>
        </div>


        <div class="topbar-right">
            <ul>

                <li><a href="compare"><button class="sell-btn" type="button" data-bs-toggle="modal"
                            data-bs-target="#sellUsModal01"
                            style="margin-right: 40px; margin-left:40px; background-color:white;">
                            <svg width="16" height="16" viewBox="0 0 18 18"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M17.5588 0C17.447 0.00287726 17.3409 0.0492946 17.2629 0.129351L15.4245 1.97099L14.8707 1.4164C14.5627 1.10919 14.2078 0.938606 13.8585 0.928904C13.6483 0.923245 13.4543 0.953158 13.2231 0.985496L10.2237 1.40265C9.12021 1.55626 8.55995 2.02839 7.84852 2.69132L0.470643 9.56715C0.467641 9.5698 0.464677 9.5725 0.46175 9.57523C0.142414 9.89053 0.00416943 10.3206 0.000127199 10.7442C-0.00472348 11.1679 0.12867 11.6166 0.484386 11.9205L0.460133 11.8971L6.10309 17.5417L6.08045 17.5174C6.38443 17.8731 6.8323 18.0057 7.25674 18.0009C7.68036 17.9968 8.11127 17.8586 8.42575 17.54C8.42849 17.5368 8.43119 17.5336 8.43384 17.5303L8.94073 16.9863L10.9586 17.7381C11.1627 17.8161 11.3805 17.8522 11.5988 17.8442C11.8172 17.8361 12.0317 17.7841 12.2295 17.6912C12.6135 17.5109 12.9474 17.2062 13.101 16.7858L15.3161 10.1452C15.9758 9.4378 16.4455 8.87674 16.5983 7.77725L17.0155 4.77792C17.0478 4.5467 17.0777 4.35186 17.0721 4.14248C17.0624 3.79323 16.8926 3.43913 16.5846 3.1303L16.03 2.57652L17.87 0.736494C17.932 0.676327 17.9743 0.598838 17.9915 0.51419C18.0086 0.429542 17.9998 0.341686 17.9661 0.262143C17.9325 0.182601 17.8756 0.115085 17.8029 0.0684494C17.7302 0.0218141 17.6451 -0.00176348 17.5588 0.000808484V0ZM13.8351 1.78505C14.0032 1.78909 14.0372 1.79394 14.2643 2.02192L14.8189 2.57571L13.8351 3.5604C13.6631 3.47636 13.4743 3.43241 13.2829 3.43185C12.5779 3.43185 11.9967 4.01393 11.9967 4.71809C11.9967 5.42306 12.5779 6.00352 13.2821 6.00352C13.9871 6.00352 14.5683 5.42306 14.5683 4.71809C14.5683 4.52083 14.5214 4.33408 14.4406 4.16592L15.4245 3.18123L15.9783 3.73583C16.2062 3.963 16.2111 3.99696 16.2151 4.16431C16.2104 4.33015 16.1942 4.49547 16.1666 4.65907L15.7503 7.65841C15.6209 8.58812 15.342 8.85976 14.6831 9.56796L7.81537 16.9369C7.70462 17.0493 7.47583 17.1407 7.24704 17.1431C7.01825 17.1463 6.8226 17.0647 6.73286 16.9596C6.72537 16.9512 6.71755 16.9431 6.70942 16.9353L1.06647 11.2908C1.05869 11.2826 1.0506 11.2748 1.04221 11.2673C0.937116 11.1784 0.854655 10.9819 0.857888 10.7531C0.860314 10.5252 0.951668 10.2956 1.06404 10.1848L8.43303 3.31786C9.14123 2.65817 9.41286 2.38006 10.3426 2.25071L13.3419 1.83356C13.5731 1.80122 13.7348 1.78181 13.8351 1.78505ZM13.2829 4.28881C13.5246 4.28881 13.7114 4.47637 13.7114 4.71809C13.7114 4.95982 13.5246 5.14657 13.2829 5.14657C13.0404 5.14657 12.8544 4.95982 12.8544 4.71809C12.8544 4.47637 13.0404 4.28881 13.2829 4.28881ZM5.99314 8.99881C5.90784 8.99872 5.82446 9.0241 5.75367 9.07168C5.68288 9.11926 5.6279 9.18689 5.59578 9.2659C5.56365 9.34492 5.55584 9.43172 5.57334 9.5152C5.59084 9.59868 5.63286 9.67504 5.69401 9.7345L8.26568 12.3054C8.6699 12.7096 9.27624 12.1032 8.87201 11.699L6.30035 9.12816C6.26038 9.08717 6.2126 9.05461 6.15984 9.03239C6.10707 9.01017 6.05039 8.99876 5.99314 8.99881ZM4.70771 10.2834C4.62224 10.2832 4.53865 10.3085 4.46769 10.3561C4.39672 10.4037 4.34161 10.4715 4.30945 10.5507C4.27729 10.6299 4.26955 10.7168 4.28721 10.8005C4.30488 10.8841 4.34714 10.9605 4.40858 11.0199L6.98025 13.5908C7.38447 14.0217 8.01749 13.3879 7.58658 12.9845L5.01573 10.4144C4.9758 10.373 4.92795 10.3401 4.87503 10.3176C4.82212 10.2951 4.76521 10.2835 4.70771 10.2834ZM13.9094 11.6537L12.2958 16.4907C12.2408 16.6386 12.071 16.8181 11.8641 16.9151C11.6571 17.0121 11.4493 17.0097 11.32 16.9612L9.57213 16.3072L13.9094 11.6537Z">
                                </path>
                            </svg> COMPARE
                        </button></li></a>
                @if (Auth::check())
                    <div class="container py-5">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-12">
                                <ul class="list-unstyled">
                                    <li class="dropdown ml-2">
                                        <a class="rounded-circle" href="#" role="button" id="dropdownUser"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <div class="avatar avatar-md avatar-indicators avatar-online">
                                                @if (!empty(Auth::user()->thumbnail))
                                                    <img class="img-xs rounded-circle"
                                                        src="{{ asset('userinformation/' . Auth::user()->thumbnail) }}"
                                                        alt="Profile image">
                                                @else
                                                    <img class="img-xs rounded-circle" src="{{ asset('logo.jpg') }}"
                                                        alt="Profile image">
                                                @endif
                                            </div>
                                        </a>

                                        <div class="dropdown-menu pb-2" aria-labelledby="dropdownUser">
                                            <div class="dropdown-item">
                                                <div class="d-flex py-2">
                                                    <div class="avatar avatar-md avatar-indicators avatar-online">
                                                        @if (!empty(Auth::user()->thumbnail))
                                                            <img class="img-xs rounded-circle"
                                                                src="{{ asset('userinformation/' . Auth::user()->thumbnail) }}"
                                                                alt="Profile image">
                                                        @else
                                                            <img class="img-xs rounded-circle"
                                                                src="{{ asset('logo.jpg') }}" alt="Profile image">
                                                        @endif
                                                    </div>
                                                    <div class="ml-3 lh-1">
                                                        <h5 class="mb-0">{{ Auth::user()->name }}</h5>
                                                        <p class="mb-0">{{ Auth::user()->email }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="dropdown-divider"></div>
                                            <div class="">
                                                <ul class="list-unstyled">
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="{{ route('user.dashboard') }}">
                                                            <span class="mr-1">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                                    height="12" viewBox="0 0 24 24" fill="none"
                                                                    stroke="currentColor" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round"
                                                                    class="feather feather-user">
                                                                    <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2">
                                                                    </path>
                                                                    <circle cx="12" cy="7" r="4">
                                                                    </circle>
                                                                </svg>
                                                            </span>User Dashboard
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="dropdown-divider"></div>
                                            <ul class="list-unstyled">
                                                <li>
                                                    <a class="dropdown-item"
                                                        href="{{ route('userinformation.logout') }}">
                                                        <span class="mr-2">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="14"
                                                                height="14" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="feather feather-power">
                                                                <path d="M18.36 6.64a9 9 0 1 1-12.73 0"></path>
                                                                <line x1="12" y1="2" x2="12"
                                                                    y2="12"></line>
                                                            </svg>Sign Out
                                                        </span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                @else
                    <li>
                        <button type="button" class="primary-btn1" data-bs-toggle="modal"
                            data-bs-target="#signUpModal01">
                            <svg width="16" height="16" viewBox="0 0 16 16"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M14.4311 12.759C15.417 11.4291 16 9.78265 16 8C16 3.58169 12.4182 0 8 0C3.58169 0 0 3.58169 0 8C0 12.4182 3.58169 16 8 16C10.3181 16 12.4058 15.0141 13.867 13.4387C14.0673 13.2226 14.2556 12.9957 14.4311 12.759ZM13.9875 12C14.7533 10.8559 15.1999 9.48009 15.1999 8C15.1999 4.02355 11.9764 0.799983 7.99991 0.799983C4.02355 0.799983 0.799983 4.02355 0.799983 8C0.799983 9.48017 1.24658 10.8559 2.01245 12C2.97866 10.5566 4.45301 9.48194 6.17961 9.03214C5.34594 8.45444 4.79998 7.49102 4.79998 6.39995C4.79998 4.63266 6.23271 3.19993 8 3.19993C9.76729 3.19993 11.2 4.63266 11.2 6.39995C11.2 7.49093 10.654 8.45444 9.82039 9.03206C11.5469 9.48194 13.0213 10.5565 13.9875 12ZM13.4722 12.6793C12.3495 10.8331 10.3188 9.59997 8.00008 9.59997C5.68126 9.59997 3.65049 10.8331 2.52776 12.6794C3.84829 14.2222 5.80992 15.2 8 15.2C10.1901 15.2 12.1517 14.2222 13.4722 12.6793ZM8 8.79998C9.32551 8.79998 10.4 7.72554 10.4 6.39995C10.4 5.07444 9.32559 3.99992 8 3.99992C6.6744 3.99992 5.59997 5.07452 5.59997 6.40003C5.59997 7.72554 6.67449 8.79998 8 8.79998Z" />
                            </svg>
                            Login / Register
                        </button>
                    </li>
                @endif

            </ul>

        </div>



    </div>

    <header class="header-area style-1">
        <div class="header-logo d-lg-none d-flex">
            <a href="index.html"><img alt="image" class="img-fluid"
                    src="{{ asset('assets/img/logo.png') }}"></a>
        </div>
        <div class="main-menu">
            <div class="mobile-logo-area d-lg-none d-flex justify-content-between align-items-center">
                <div class="mobile-logo-wrap">
                    <a href="index.html"><img alt="image" src="{{ asset('assets/img/logo.png') }}"></a>
                </div>
            </div>
            <ul class="menu-list">
                <li class="active">
                    <a href="/" style="font-size: 20px;">HOME</a>

                </li>
                <li>
                    <a href="/dashboard" style="font-size: 20px;">BECOME A SELLER</a>
                </li>
                <li>
                    <a href="/aboutus" style="font-size: 20px;">ABOUT US</a>

                </li>

                <li>
                    <a href="/contactus" style="font-size: 20px;">CONTACT US</a>
                </li>
                <li>
                    <a href="/faq" style="font-size: 20px;">FAQ</a>
                </li>
            </ul>
        </div>




        {{-- <div class="topbar-right d-lg-none d-block">
            <a href="#">
                <svg width="16" height="16" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M17.5588 0C17.447 0.00287726 17.3409 0.0492946 17.2629 0.129351L15.4245 1.97099L14.8707 1.4164C14.5627 1.10919 14.2078 0.938606 13.8585 0.928904C13.6483 0.923245 13.4543 0.953158 13.2231 0.985496L10.2237 1.40265C9.12021 1.55626 8.55995 2.02839 7.84852 2.69132L0.470643 9.56715C0.467641 9.5698 0.464677 9.5725 0.46175 9.57523C0.142414 9.89053 0.00416943 10.3206 0.000127199 10.7442C-0.00472348 11.1679 0.12867 11.6166 0.484386 11.9205L0.460133 11.8971L6.10309 17.5417L6.08045 17.5174C6.38443 17.8731 6.8323 18.0057 7.25674 18.0009C7.68036 17.9968 8.11127 17.8586 8.42575 17.54C8.42849 17.5368 8.43119 17.5336 8.43384 17.5303L8.94073 16.9863L10.9586 17.7381C11.1627 17.8161 11.3805 17.8522 11.5988 17.8442C11.8172 17.8361 12.0317 17.7841 12.2295 17.6912C12.6135 17.5109 12.9474 17.2062 13.101 16.7858L15.3161 10.1452C15.9758 9.4378 16.4455 8.87674 16.5983 7.77725L17.0155 4.77792C17.0478 4.5467 17.0777 4.35186 17.0721 4.14248C17.0624 3.79323 16.8926 3.43913 16.5846 3.1303L16.03 2.57652L17.87 0.736494C17.932 0.676327 17.9743 0.598838 17.9915 0.51419C18.0086 0.429542 17.9998 0.341686 17.9661 0.262143C17.9325 0.182601 17.8756 0.115085 17.8029 0.0684494C17.7302 0.0218141 17.6451 -0.00176348 17.5588 0.000808484V0ZM13.8351 1.78505C14.0032 1.78909 14.0372 1.79394 14.2643 2.02192L14.8189 2.57571L13.8351 3.5604C13.6631 3.47636 13.4743 3.43241 13.2829 3.43185C12.5779 3.43185 11.9967 4.01393 11.9967 4.71809C11.9967 5.42306 12.5779 6.00352 13.2821 6.00352C13.9871 6.00352 14.5683 5.42306 14.5683 4.71809C14.5683 4.52083 14.5214 4.33408 14.4406 4.16592L15.4245 3.18123L15.9783 3.73583C16.2062 3.963 16.2111 3.99696 16.2151 4.16431C16.2104 4.33015 16.1942 4.49547 16.1666 4.65907L15.7503 7.65841C15.6209 8.58812 15.342 8.85976 14.6831 9.56796L7.81537 16.9369C7.70462 17.0493 7.47583 17.1407 7.24704 17.1431C7.01825 17.1463 6.8226 17.0647 6.73286 16.9596C6.72537 16.9512 6.71755 16.9431 6.70942 16.9353L1.06647 11.2908C1.05869 11.2826 1.0506 11.2748 1.04221 11.2673C0.937116 11.1784 0.854655 10.9819 0.857888 10.7531C0.860314 10.5252 0.951668 10.2956 1.06404 10.1848L8.43303 3.31786C9.14123 2.65817 9.41286 2.38006 10.3426 2.25071L13.3419 1.83356C13.5731 1.80122 13.7348 1.78181 13.8351 1.78505ZM13.2829 4.28881C13.5246 4.28881 13.7114 4.47637 13.7114 4.71809C13.7114 4.95982 13.5246 5.14657 13.2829 5.14657C13.0404 5.14657 12.8544 4.95982 12.8544 4.71809C12.8544 4.47637 13.0404 4.28881 13.2829 4.28881ZM5.99314 8.99881C5.90784 8.99872 5.82446 9.0241 5.75367 9.07168C5.68288 9.11926 5.6279 9.18689 5.59578 9.2659C5.56365 9.34492 5.55584 9.43172 5.57334 9.5152C5.59084 9.59868 5.63286 9.67504 5.69401 9.7345L8.26568 12.3054C8.6699 12.7096 9.27624 12.1032 8.87201 11.699L6.30035 9.12816C6.26038 9.08717 6.2126 9.05461 6.15984 9.03239C6.10707 9.01017 6.05039 8.99876 5.99314 8.99881ZM4.70771 10.2834C4.62224 10.2832 4.53865 10.3085 4.46769 10.3561C4.39672 10.4037 4.34161 10.4715 4.30945 10.5507C4.27729 10.6299 4.26955 10.7168 4.28721 10.8005C4.30488 10.8841 4.34714 10.9605 4.40858 11.0199L6.98025 13.5908C7.38447 14.0217 8.01749 13.3879 7.58658 12.9845L5.01573 10.4144C4.9758 10.373 4.92795 10.3401 4.87503 10.3176C4.82212 10.2951 4.76521 10.2835 4.70771 10.2834ZM13.9094 11.6537L12.2958 16.4907C12.2408 16.6386 12.071 16.8181 11.8641 16.9151C11.6571 17.0121 11.4493 17.0097 11.32 16.9612L9.57213 16.3072L13.9094 11.6537Z">
                    </path>
                </svg>
                SELL WITH US
            </a>
            <a href="#">
                <svg width="16" height="16" viewBox="0 0 14 14" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M7.00012 2.40453L6.37273 1.75966C4.90006 0.245917 2.19972 0.76829 1.22495 2.67141C0.767306 3.56653 0.664053 4.8589 1.4997 6.50827C2.30473 8.09639 3.97953 9.99864 7.00012 12.0706C10.0207 9.99864 11.6946 8.09639 12.5005 6.50827C13.3362 4.85803 13.2338 3.56653 12.7753 2.67141C11.8005 0.76829 9.10019 0.245042 7.62752 1.75879L7.00012 2.40453ZM7.00012 13.125C-6.41666 4.25953 2.86912 -2.65995 6.84612 1.00016C6.89862 1.04829 6.95024 1.09816 7.00012 1.14979C7.04949 1.09821 7.10087 1.04859 7.15413 1.00104C11.1302 -2.6617 20.4169 4.25865 7.00012 13.125Z">
                    </path>
                </svg>
                SAVE
            </a>
            <a class="primary-btn3" href="#">
                <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M14.4311 12.759C15.417 11.4291 16 9.78265 16 8C16 3.58169 12.4182 0 8 0C3.58169 0 0 3.58169 0 8C0 12.4182 3.58169 16 8 16C10.3181 16 12.4058 15.0141 13.867 13.4387C14.0673 13.2226 14.2556 12.9957 14.4311 12.759ZM13.9875 12C14.7533 10.8559 15.1999 9.48009 15.1999 8C15.1999 4.02355 11.9764 0.799983 7.99991 0.799983C4.02355 0.799983 0.799983 4.02355 0.799983 8C0.799983 9.48017 1.24658 10.8559 2.01245 12C2.97866 10.5566 4.45301 9.48194 6.17961 9.03214C5.34594 8.45444 4.79998 7.49102 4.79998 6.39995C4.79998 4.63266 6.23271 3.19993 8 3.19993C9.76729 3.19993 11.2 4.63266 11.2 6.39995C11.2 7.49093 10.654 8.45444 9.82039 9.03206C11.5469 9.48194 13.0213 10.5565 13.9875 12ZM13.4722 12.6793C12.3495 10.8331 10.3188 9.59997 8.00008 9.59997C5.68126 9.59997 3.65049 10.8331 2.52776 12.6794C3.84829 14.2222 5.80992 15.2 8 15.2C10.1901 15.2 12.1517 14.2222 13.4722 12.6793ZM8 8.79998C9.32551 8.79998 10.4 7.72554 10.4 6.39995C10.4 5.07444 9.32559 3.99992 8 3.99992C6.6744 3.99992 5.59997 5.07452 5.59997 6.40003C5.59997 7.72554 6.67449 8.79998 8 8.79998Z">
                    </path>
                </svg>
                SIGN UP
            </a>
        </div> --}}

        </div>
        <div class="nav-right d-flex jsutify-content-end align-items-center">


            <div class="hotline-area d-xl-flex d-none">
                <div class="icon">
                    <img src="assets/img/home1/icon/hotline-icon.svg" alt>
                </div>
                <div class="content">
                    <span>For More Inquiry</span>
                    <h6><a href="tel:+990737621432">+977-9806773885</a></h6>
                </div>
            </div>
            <div class="sidebar-button mobile-menu-btn ">
                <span></span>
            </div>
        </div>
    </header>

    <script>
        const passwordInput = document.getElementById('password');
        const confirmPasswordInput = document.getElementById('password2');
        const passwordMatchError = document.getElementById('passwordMatchError');

        function checkPasswordMatch() {
            if (confirmPasswordInput.value !== '') { // Check only when Confirm Password field is not empty
                if (passwordInput.value !== confirmPasswordInput.value) {
                    passwordMatchError.style.display = 'block';
                    confirmPasswordInput.setCustomValidity('Passwords do not match.');
                } else {
                    passwordMatchError.style.display = 'none';
                    confirmPasswordInput.setCustomValidity('');
                }
            } else {
                passwordMatchError.style.display = 'none'; // Hide error if Confirm Password field is empty
                confirmPasswordInput.setCustomValidity('');
            }
        }

        confirmPasswordInput.addEventListener('input', checkPasswordMatch);
    </script>

    <script>
        const fnameInput = document.getElementById('fname');
        const lnameInput = document.getElementById('lname');

        // Add event listeners to validate input on keypress event
        fnameInput.addEventListener('keypress', restrictNumbers);
        lnameInput.addEventListener('keypress', restrictNumbers);

        function restrictNumbers(event) {
            const charCode = event.charCode;

            // Check if the entered character is a number
            if (charCode >= 48 && charCode <= 57) {
                // Prevent the default action (typing the character)
                event.preventDefault();
            }
        }
    </script>

    <script>
        function togglePassword(inputId) {
            var x = document.getElementById(inputId);
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }
    </script>

    <script>
        function togglePassword(inputId, eyeIconId) {
            var x = document.getElementById(inputId);
            var eyeIcon = document.getElementById(eyeIconId);
            if (x.type === "password") {
                x.type = "text";
                eyeIcon.classList.remove("bi-eye-slash");
                eyeIcon.classList.add("bi-eye");
            } else {
                x.type = "password";
                eyeIcon.classList.remove("bi-eye");
                eyeIcon.classList.add("bi-eye-slash");
            }
        }
    </script>
</body>
