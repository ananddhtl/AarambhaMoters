@extends('welcome')
@section('content')
    <div class="inner-page-banner">
        <div class="banner-wrapper">
            <div class="container-fluid">
                <ul class="breadcrumb-list">
                    <li><a href="index.html">Home</a></li>
                    <li>Blog Standard</li>
                    <li>Blog Details</li>
                </ul>
                <div class="banner-main-content-wrap">
                    <div class="row">
                        <div class="col-xl-6 col-lg-7 d-flex align-items-center">
                            <div class="banner-content">
                                <span class="sub-title">Blog Details</span>
                                <h1>Car Blog Details</h1>
                                <div class="customar-review">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <div class="review-top">
                                                    <div class="logo">
                                                        <img src="assets/img/home1/icon/trstpilot-logo.svg" alt="">
                                                    </div>
                                                    <div class="star">
                                                        <img src="assets/img/home1/icon/trustpilot-star.svg" alt="">
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="review-top">
                                                    <div class="logo">
                                                        <img src="assets/img/home1/icon/google-logo.svg" alt="">
                                                    </div>
                                                    {{-- <div class="star">
                                                        <ul>
                                                            <li><i class="bi bi-star-fill"></i></li>
                                                            <li><i class="bi bi-star-fill"></i></li>
                                                            <li><i class="bi bi-star-fill"></i></li>
                                                            <li><i class="bi bi-star-fill"></i></li>
                                                            <li><i class="bi bi-star-half"></i></li>
                                                        </ul>
                                                    </div> --}}
                                                </div>

                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-5 d-lg-flex d-none align-items-center justify-content-end">
                            <div class="banner-img">
                                <img src="assets/img/inner-page/blog-dt-bannner-img.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="blog-details-page pt-100 mb-100">
        <div class="container">
            <div class="row g-lg-4 gy-5">
                <div class="col-lg-8">
                    <div class="post-thumb">
                        <img src="{{ $blogdesc->thumbnail }}" alt="">
                        {{-- <div class="date">
                            <a href="blog-standard.html">Car Advice</a>
                        </div> --}}
                    </div>
                    <h3 class="post-title">{{ $blogdesc->title }}</h3>
                    <div class="author-area">

                        <div class="author-content">
                            <h6>Admin</h6>
                            <a href="blog-standard.html">{{ $blogdesc->created_at }}</a>
                        </div>
                    </div>
                    <p>{{ $blogdesc->description }}</p>





                </div>
                <div class="col-lg-4">
                    <div class="blog-sidebar mb-50">

                        {{-- <div class="single-widgets widget_egns_recent_post mb-20">
                            <div class="widget-title blog-title mb-20">
                                <h6>Recent Blog</h6>
                                <div class="slider-btn-group2 d-flex align-items-center justify-content-between">
                                    <div class="slider-btn prev-51" tabindex="0" role="button"
                                        aria-label="Previous slide" aria-controls="swiper-wrapper-b46b9110c7f7c63ef"
                                        aria-disabled="false">
                                        <svg width="7" height="12" viewBox="0 0 8 13"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0 6.50008L8 0L2.90909 6.50008L8 13L0 6.50008Z"></path>
                                        </svg>
                                    </div>
                                    <div class="slider-btn next-51" tabindex="0" role="button"
                                        aria-label="Next slide" aria-controls="swiper-wrapper-b46b9110c7f7c63ef"
                                        aria-disabled="false">
                                        <svg width="7" height="12" viewBox="0 0 8 13"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8 6.50008L0 0L5.09091 6.50008L0 13L8 6.50008Z"></path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div class="recent-post-wraper">
                                <div
                                    class="swiper recent-post-sidebar-slider swiper-initialized swiper-horizontal swiper-pointer-events">
                                    <div class="swiper-wrapper" id="swiper-wrapper-b46b9110c7f7c63ef" aria-live="off"
                                        style="transform: translate3d(-310px, 0px, 0px); transition-duration: 1500ms;">
                                        <div class="swiper-slide swiper-slide-prev" role="group" aria-label="1 / 3"
                                            style="width: 286px; margin-right: 24px;">
                                            <div class="widget-cnt">
                                                <div class="wi">
                                                    <a href="blog-details.html"><img
                                                            src="assets/img/inner-page/blog-st-01.png" alt="image"></a>
                                                </div>
                                                <div class="wc">
                                                    <a class="date" href="blog-standard.html">May 18, 2023</a>
                                                    <h6><a href="blog-details.html">The Environmental Impact of Cars and
                                                            How to Minimize It.</a></h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide swiper-slide-active" role="group" aria-label="2 / 3"
                                            style="width: 286px; margin-right: 24px;">
                                            <div class="widget-cnt">
                                                <div class="wi">
                                                    <a href="blog-details.html"><img
                                                            src="assets/img/inner-page/blog-st-02.png" alt="image"></a>
                                                </div>
                                                <div class="wc">
                                                    <a class="date" href="blog-standard.html">May 18, 2023</a>
                                                    <h6><a href="blog-details.html">The Environmental Impact of Cars and
                                                            How to Minimize It.</a></h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide swiper-slide-next" role="group" aria-label="3 / 3"
                                            style="width: 286px; margin-right: 24px;">
                                            <div class="widget-cnt">
                                                <div class="wi">
                                                    <a href="blog-details.html"><img
                                                            src="assets/img/inner-page/blog-st-03.png" alt="image"></a>
                                                </div>
                                                <div class="wc">
                                                    <a class="date" href="blog-standard.html">May 18, 2023</a>
                                                    <h6><a href="blog-details.html">The Environmental Impact of Cars and
                                                            How to Minimize It.</a></h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                                </div>
                            </div>
                        </div> --}}

                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
