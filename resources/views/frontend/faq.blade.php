@extends('welcome')
@section('content')
<div class="inner-page-banner">
    <div class="banner-wrapper">
        <div class="container-fluid">
            <ul class="breadcrumb-list">
                <li><a href="index.html">Home</a></li>
                <li>FAQ’s</li>
            </ul>
            <div class="banner-main-content-wrap">
                <div class="row">
                    <div class="col-xl-6 col-lg-7 d-flex align-items-center">
                        <div class="banner-content">
                            <span class="sub-title">Frequently</span>
                            <h1>Answer &amp; Questions</h1>
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
                                            <div class="content">
                                            
                                        </a>
                                    </li>
                                  
                                </ul>
                            </div>
                        </div>
                    </div>
                  
                </div>
            </div>
        </div>
    </div>
</div>\
<div class="faq-page-wrap pt-100 mb-100">
    <div class="container">
        <div class="row g-lg-4 gy-5">
            <div class="col-lg-4 d-lg-flex d-none">
                <div class="faq-img">
                    <img src="assets/img/inner-page/faq-img.png" alt="">
                </div>
            </div>
            <div class="col-lg-12">
                <div class="faq-area">
                    <div class="section-title-and-filter mb-40">
                        <div class="section-title">
                            <h4>FAQ’s &amp; Latest Answer</h4>
                        </div>
                    </div>
                    <div class="faq-wrap">
                        <div class="accordion accordion-flush" id="accordionFlushExample">
                            @foreach($faq as $index => $item)
                            <div class="accordion-item">
                                <h5 class="accordion-header" id="flush-heading{{$index}}">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse{{$index}}" aria-expanded="false" aria-controls="flush-collapse{{$index}}">
                                        {{$item->question}}
                                    </button>
                                </h5>
                                <div id="flush-collapse{{$index}}" class="accordion-collapse collapse " aria-labelledby="flush-heading{{$index}}" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        {{$item->answer}}
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection