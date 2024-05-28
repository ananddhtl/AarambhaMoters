@extends('welcome')
@section('content')
    @if (session('error'))
        <script>
            Swal.fire({
                icon: 'danger',
                title: 'Invalid Credentials',
                text: 'You have entered invalid credentials',
                onClose: () => {
                    $('#logInModal01').modal('show');
                }
            });
        </script>
    @endif
    @if (session('login'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Login Successfully',
                text: ' You have been login successfully',
            });
        </script>
    @endif
    @if (session('register'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Register Successfully',
                text: ' You have been register successfully',
            });
        </script>
    @endif

    @if (session('success'))
        <script>
            Swal.fire({
                icon: 'success',
                text: ' You password has been changed successfully',
            });
        </script>
    @endif
    @if (session('message'))
        <script>
            Swal.fire({
                icon: 'danger',
                text: ' Please login first to continue',
            });
        </script>
    @endif

    <div class="home6-banner-area">
        <div class="container-fluid">
            <div class="row g-lg-4 gy-5">
                <div class="col-lg-7 d-flex align-items-center">
                    <div class="banner-content">
                        <span>Elite Car Dealer</span>
                        <h1>Aarambha Motors</h1>
                        <p>Ride on Wheels !</p>
                    </div>
                </div>
                <div class="col-lg-5 d-flex justify-content-lg-end">
                    <div class="banner-img-group">
                        <div class="top-img-group">
                            <div class="top-left-card">
                                <div class="icon">
                                    <img src="assets/img/home6/icon/banner-icon.svg" alt>
                                </div>
                                <div class="content">
                                    <h4>10,000+</h4>
                                    <span>Total Vehicles</span>
                                </div>
                            </div>
                            <div class="top-right-img">
                                <img src="{{ asset('assets/img/slider1.jpg') }}" alt>
                            </div>
                        </div>
                        <div class="bottom-img-group">
                            <div class="bottom-left-img">
                                <img src="{{ asset('assets/img/slider2.jpg') }}" alt>
                            </div>
                            <div class="bottom-right-img">
                                <img src="{{ asset('assets/img/slider3.jpg') }}" alt>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="how-it-work-section style-3 mb-100">
        <div class="container">
            <div class="row mb-50 wow fadeInUp animated" data-wow-delay="200ms"
                style="visibility: visible; animation-delay: 200ms;">
                <div class="col-lg-12 d-flex align-items-end justify-content-between gap-3 flex-wrap">
                    <div class="section-title-2">
                        <h2>How Does It Work</h2>
                    </div>
                </div>
            </div>
            <div class="row wow fadeInUp" data-wow-delay="300ms" style="visibility: visible; animation-delay: 300ms;">
                <div class="col-lg-12">
                    <div class="work-process-group">
                        <div class="row justify-content-center g-xl-0 gy-5">
                            <div class="col-lg-3 col-sm-6">
                                <div class="single-work-process text-center">
                                    <div class="steps">
                                        <span>01</span>
                                    </div>
                                    <div class="icon">
                                        <img src="{{ asset('assets/img/location.png') }}" alt>
                                    </div>
                                    <div class="content">
                                        <h6>Choose Any where</h6>
                                        <p>Choose location for suitable delivery of Vehicles.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="single-work-process text-center">
                                    <div class="steps">
                                        <span>02</span>
                                    </div>
                                    <div class="icon">
                                        <img src="assets/img/contact.png" alt>
                                    </div>
                                    <div class="content">
                                        <h6>Contact With Us</h6>
                                        <p>Contact Us to get vehicle of your choice at an effective price tag.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="single-work-process text-center">
                                    <div class="steps">
                                        <span>03</span>
                                    </div>
                                    <div class="icon">
                                        <img src="assets/img/pay.png" alt>
                                    </div>
                                    <div class="content">
                                        <h6>Pay For The Vehicle</h6>
                                        <p>Pay for the Vehicle after the Test Ride.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="single-work-process text-center">
                                    <div class="steps d-lg-none d-block">
                                        <span>04</span>
                                    </div>
                                    <div class="icon">
                                        <img src="assets/img/receive.png" alt>
                                    </div>
                                    <div class="content">
                                        <h6>Recieve The Vehicle</h6>
                                        <p>Receive the vehicle after the payment.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>


    <div class="home6-letest-car-section mb-100">
        <div class="container">
            <div class="row mb-50 wow fadeInUp" data-wow-delay="200ms">
                <div class="col-lg-12">
                    <div class="section-title-2">
                        <h2>Latest Vehicles</h2>
                    </div>
                </div>
            </div>

            <div class="row mb-40">
                <div class="col-lg-12">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="featured-car" role="tabpanel"
                            aria-labelledby="featured-car-tab">
                            <div class="row g-4">
                                @foreach ($vehicles as $item)
                                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                                        <div class="product-card4 style-3">
                                            <div class="product-img">
                                                <div class="swiper product-img-slider">
                                                    <div class="swiper-wrapper">
                                                        @foreach ($item->image_path as $image)
                                                            <div class="swiper-slide">
                                                                <img src="{{ asset($image) }}" alt="image">
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="location">
                                                    <a href="#"><i class="bi bi-geo-alt"></i>
                                                        {{ $item->location }}</a>
                                                </div>
                                                <h6><a
                                                        href="{{ route('vehicledetails', ['id' => $item->id]) }}">{{ $item->name }}</a>
                                                </h6>
                                                <div class="button-and-price">
                                                    <a class="primary-btn7"
                                                        href="{{ route('vehicledetails', ['id' => $item->id]) }}">View
                                                        Details</a>
                                                    <div class="price-area">
                                                        <span>Great Price</span>
                                                        <h6>Rs:- {{ $item->price }}/-</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach



                            </div>
                        </div>

                    </div>
                </div>
                <div class="explore-btn d-lg-none d-flex">
                    <a class="explore-btn2 two" href="car-listing-left-sidebar.html">Explore More <i
                            class="bi bi-arrow-right-short"></i></a>
                </div>
            </div>
        </div>
    </div>

    <div class="home6-brand-section mb-100 pb-90 pt-90">
        <div class="container">
            <div class="row mb-60 wow fadeInUp" data-wow-delay="200ms" style="visibility: visible; animation-delay: 200ms;">
                <div class="col-lg-12 d-flex align-items-end justify-content-between flex-wrap gap-4">
                    <div class="section-title-2">
                        <h2>Brand Category</h2>
                        <p>To get the most accurate and up-to-date information.</p>
                    </div>
                    <div class="slider-btn-group2 style-6">
                        <div class="slider-btn prev-1" tabindex="0" role="button" aria-label="Previous slide"
                            aria-controls="swiper-wrapper-6b64b73f7fbd7f6f" aria-disabled="false">
                            <svg width="9" height="15" viewBox="0 0 8 13" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0 6.50008L8 0L2.90909 6.50008L8 13L0 6.50008Z"></path>
                            </svg>
                        </div>
                        <div class="slider-btn next-1" tabindex="0" role="button" aria-label="Next slide"
                            aria-controls="swiper-wrapper-6b64b73f7fbd7f6f" aria-disabled="false">
                            <svg width="9" height="15" viewBox="0 0 8 13" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8 6.50008L0 0L5.09091 6.50008L0 13L8 6.50008Z"></path>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 mb-50 wow fadeInUp" data-wow-delay="300ms"
                    style="visibility: visible; animation-delay: 300ms;">
                    <div
                        class="swiper home6-brand-category-slider swiper-initialized swiper-horizontal swiper-pointer-events">
                        <div class="swiper-wrapper" id="swiper-wrapper-6b64b73f7fbd7f6f" aria-live="off"
                            style="transform: translate3d(-691.5px, 0px, 0px); transition-duration: 0ms;">

                            <div class="swiper-slide swiper-slide-active" role="group" aria-label="4 / 7"
                                style="width: 215.5px; margin-right: 15px;">
                                <a href="single-brand-category.html" class="car-category text-center">
                                    <div class="icon">
                                        <img src="assets/img/home2/icon/tesla.svg" alt="">
                                    </div>
                                    <div class="content">
                                        <h6>Tesla Car</h6>
                                        <span>(5463)</span>
                                    </div>
                                </a>
                            </div>



                        </div>
                        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <div class="news-section five six pb-90 pt-90">
        <div class="container">
            <div class="row mb-60 wow fadeInUp" data-wow-delay="200ms"
                style="visibility: visible; animation-delay: 200ms;">
                <div class="col-lg-12 d-flex align-items-end justify-content-between flex-wrap gap-4">
                    <div class="section-title-2">
                        <h2>Latest Car Advice</h2>
                    </div>
                </div>
            </div>
            <div class="row g-4 justify-content-center">
                @foreach ($blog as $item)
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="200ms"
                        style="visibility: visible; animation-delay: 200ms;">
                        <div class="news-card style-2 dark">
                            <div class="news-img">
                                <a href="{{ route('blog.description', ['id' => $item->id]) }}"><img
                                        src="{{ $item->thumbnail }}" alt=""></a>
                                <div class="date">
                                    <a
                                        href="{{ route('blog.description', ['id' => $item->id]) }}">{{ $item->title }}</a>
                                </div>
                            </div>
                            <div class="content">
                                <h6><a href="">{{ $item->description }}</a>
                                </h6>
                                <div class="news-btm d-flex align-items-center justify-content-between">
                                    <div class="author-area">

                                        <div class="author-content">
                                            <h6>Admin</h6>
                                            <a href="#">{{ $item->created_at }}</a>
                                        </div>
                                    </div>
                                    <div class="social-area">


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
@endsection
