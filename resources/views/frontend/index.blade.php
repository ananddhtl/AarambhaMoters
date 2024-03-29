@extends('welcome')
@section('content')
<div class="home6-banner-area">
    <div class="container-fluid">
        <div class="row g-lg-4 gy-5">
            <div class="col-lg-7 d-flex align-items-center">
                <div class="banner-content">
                    <span>Elite Car Dealer</span>
                    <h1>Premier Auto Sales</h1>
                    <p>Car dealerships may sell new cars from one or several manufacturers.</p>
                    <div class="banner-content-bottom">
                        <a href="single-brand-category.html" class="primary-btn7">
                            <svg width="24" height="15" viewBox="0 0 24 15" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M3.25985 0C3.15704 0 3.05844 0.0413135 2.98574 0.114852C2.91304 0.18839 2.87219 0.28813 2.87219 0.392129C2.87219 0.496128 2.91304 0.595867 2.98574 0.669405C3.05844 0.742944 3.15704 0.784257 3.25985 0.784257H4.8105C4.91332 0.784257 5.01192 0.742944 5.08462 0.669405C5.15732 0.595867 5.19816 0.496128 5.19816 0.392129C5.19816 0.28813 5.15732 0.18839 5.08462 0.114852C5.01192 0.0413135 4.91332 0 4.8105 0H3.25985ZM5.77966 0C5.67684 0 5.57824 0.0413135 5.50554 0.114852C5.43284 0.18839 5.39199 0.28813 5.39199 0.392129C5.39199 0.496128 5.43284 0.595867 5.50554 0.669405C5.57824 0.742944 5.67684 0.784257 5.77966 0.784257H10.3347C10.4375 0.784257 10.5361 0.742944 10.6088 0.669405C10.6815 0.595867 10.7223 0.496128 10.7223 0.392129C10.7223 0.28813 10.6815 0.18839 10.6088 0.114852C10.5361 0.0413135 10.4375 0 10.3347 0H5.77966Z">
                                </path>
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M4.22917 2.7464C4.12636 2.7464 4.02776 2.78771 3.95505 2.86125C3.88235 2.93479 3.84151 3.03453 3.84151 3.13853C3.84151 3.24253 3.88235 3.34227 3.95505 3.4158C4.02776 3.48934 4.12636 3.53066 4.22917 3.53066H13.1454C14.653 3.53066 15.5822 3.76829 16.3256 4.15002C16.9575 4.47431 17.4672 4.90546 18.1055 5.44542C18.2375 5.55698 18.3749 5.67305 18.5201 5.79402L18.6101 5.86892L18.726 5.88127C22.2653 6.25811 23.0622 7.46822 23.2246 8.08778V9.60865C23.2246 9.71265 23.1838 9.81239 23.1111 9.88593C23.0384 9.95947 22.9398 10.0008 22.8369 10.0008H21.8356C21.6511 8.88811 20.6943 8.04014 19.5418 8.04014C18.3893 8.04014 17.4325 8.88811 17.248 10.0008H10.2058C10.0212 8.88811 9.06448 8.04014 7.91196 8.04014C6.75944 8.04014 5.80269 8.88811 5.61816 10.0008H3.7446C3.64178 10.0008 3.54318 10.0421 3.47048 10.1156C3.39778 10.1892 3.35693 10.2889 3.35693 10.3929C3.35693 10.4969 3.39778 10.5966 3.47048 10.6702C3.54318 10.7437 3.64178 10.785 3.7446 10.785H5.61816C5.80269 11.8977 6.75944 12.7457 7.91196 12.7457C9.06448 12.7457 10.0212 11.8977 10.2058 10.785H17.248C17.4325 11.8977 18.3893 12.7457 19.5418 12.7457C20.6943 12.7457 21.6511 11.8977 21.8356 10.785H22.8369C23.1454 10.785 23.4412 10.6611 23.6593 10.4405C23.8774 10.2199 23.9999 9.92065 23.9999 9.60865V7.99543L23.99 7.95191C23.7431 6.86983 22.5791 5.52855 18.9239 5.11407C18.8217 5.02859 18.7215 4.9435 18.6227 4.85978C17.9828 4.31766 17.3942 3.81887 16.6766 3.45047C15.7966 2.99893 14.7391 2.7464 13.1454 2.7464H4.22917ZM17.9912 10.3929C17.9912 9.97691 18.1545 9.57795 18.4453 9.2838C18.7361 8.98965 19.1306 8.82439 19.5418 8.82439C19.9531 8.82439 20.3475 8.98965 20.6383 9.2838C20.9291 9.57795 21.0925 9.97691 21.0925 10.3929C21.0925 10.8089 20.9291 11.2079 20.6383 11.502C20.3475 11.7962 19.9531 11.9614 19.5418 11.9614C19.1306 11.9614 18.7361 11.7962 18.4453 11.502C18.1545 11.2079 17.9912 10.8089 17.9912 10.3929ZM7.91196 8.82439C7.5007 8.82439 7.10629 8.98965 6.81549 9.2838C6.52468 9.57795 6.36131 9.97691 6.36131 10.3929C6.36131 10.8089 6.52468 11.2079 6.81549 11.502C7.10629 11.7962 7.5007 11.9614 7.91196 11.9614C8.32322 11.9614 8.71763 11.7962 9.00843 11.502C9.29923 11.2079 9.46261 10.8089 9.46261 10.3929C9.46261 9.97691 9.29923 9.57795 9.00843 9.2838C8.71763 8.98965 8.32322 8.82439 7.91196 8.82439Z">
                                </path>
                                <path
                                    d="M0 5.09873C0 4.99473 0.0408428 4.89499 0.113543 4.82146C0.186244 4.74792 0.284847 4.7066 0.387662 4.7066H4.74886C4.85167 4.7066 4.95027 4.74792 5.02297 4.82146C5.09567 4.89499 5.13652 4.99473 5.13652 5.09873C5.13652 5.20273 5.09567 5.30247 5.02297 5.37601C4.95027 5.44955 4.85167 5.49086 4.74886 5.49086H0.387662C0.284847 5.49086 0.186244 5.44955 0.113543 5.37601C0.0408428 5.30247 0 5.20273 0 5.09873ZM15.6836 5.60575C15.7563 5.67929 15.7971 5.77901 15.7971 5.88299C15.7971 5.98697 15.7563 6.08669 15.6836 6.16022L15.6532 6.19101C15.2897 6.55865 14.7968 6.76522 14.2828 6.76528H8.14089C8.03808 6.76528 7.93948 6.72397 7.86678 6.65043C7.79408 6.57689 7.75323 6.47715 7.75323 6.37315C7.75323 6.26915 7.79408 6.16941 7.86678 6.09587C7.93948 6.02234 8.03808 5.98102 8.14089 5.98102H14.2826C14.4354 5.98104 14.5866 5.95063 14.7277 5.89152C14.8688 5.83241 14.997 5.74577 15.105 5.63654L15.1355 5.60575C15.2082 5.53224 15.3068 5.49094 15.4096 5.49094C15.5123 5.49094 15.6109 5.53224 15.6836 5.60575ZM8.52856 14.6079C8.52856 14.5039 8.5694 14.4041 8.6421 14.3306C8.7148 14.257 8.8134 14.2157 8.91622 14.2157H10.5638C10.6666 14.2157 10.7652 14.257 10.8379 14.3306C10.9106 14.4041 10.9514 14.5039 10.9514 14.6079C10.9514 14.7118 10.9106 14.8116 10.8379 14.8851C10.7652 14.9587 10.6666 15 10.5638 15H8.91622C8.8134 15 8.7148 14.9587 8.6421 14.8851C8.5694 14.8116 8.52856 14.7118 8.52856 14.6079ZM11.2422 14.6079C11.2422 14.5039 11.283 14.4041 11.3557 14.3306C11.4284 14.257 11.527 14.2157 11.6298 14.2157H15.991C16.0939 14.2157 16.1925 14.257 16.2652 14.3306C16.3379 14.4041 16.3787 14.5039 16.3787 14.6079C16.3787 14.7118 16.3379 14.8116 16.2652 14.8851C16.1925 14.9587 16.0939 15 15.991 15H11.6298C11.527 15 11.4284 14.9587 11.3557 14.8851C11.283 14.8116 11.2422 14.7118 11.2422 14.6079Z">
                                </path>
                            </svg>
                            Find Your Bikes
                        </a>

                    </div>
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
                                <h4>4,56,730+</h4>
                                <span>Total Bikes</span>
                            </div>
                        </div>
                        <div class="top-right-img">
                            <img src="{{asset('html/assets/img/slider1.jpg')}}" alt>
                        </div>
                    </div>
                    <div class="bottom-img-group">
                        <div class="bottom-left-img">
                            <img src="{{asset('html/assets/img/slider2.jpg')}}" alt>
                        </div>
                        <div class="bottom-right-img">
                            <img src="{{asset('html/assets/img/slider3.jpg')}}" alt>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="home6-search-area mb-100">
    <div class="container">
        <form>
            <div class="row row-cols-xl-5 row-cols-md-3 row-cols-sm-2 row-cols-1 g-3 justify-content-center">
                <div class="col">
                    <div class="form-inner">
                        <label>Vehicle Condition*</label>
                        <select>
                            <option>Used Car</option>
                            <option>New Car</option>
                            <option>Recondition Car</option>
                        </select>
                    </div>
                </div>
                <div class="col">
                    <div class="form-inner">
                        <label>Select Brand*</label>
                        <select>
                            <option>Toyota</option>
                            <option>Suzuki</option>
                            <option>Tata</option>
                            <option>Tesla</option>
                            <option>Mazda</option>
                        </select>
                    </div>
                </div>
                <div class="col">
                    <div class="form-inner">
                        <label>Select Model*</label>
                        <select>
                            <option>RS e tron GT</option>
                            <option>S-2023</option>
                            <option>Sonata-2022</option>
                        </select>
                    </div>
                </div>
                <div class="col">
                    <div class="form-inner">
                        <label>Select Budget*</label>
                        <select>
                            <option>Ex: 1 - 5 lakh</option>
                            <option>Ex: 5 - 10 lakh</option>
                            <option>Ex: 10 - 15 lakh</option>
                            <option>Ex: 15 - 20 lakh</option>
                        </select>
                    </div>
                </div>
                <div class="col d-flex align-items-end">
                    <div class="form-inner">
                        <button class="primary-btn3" type="submit">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14">
                                <path
                                    d="M10.2746 9.04904C11.1219 7.89293 11.5013 6.45956 11.3371 5.0357C11.1729 3.61183 10.4771 2.30246 9.38898 1.36957C8.30083 0.436668 6.90056 -0.050966 5.46831 0.00422091C4.03607 0.0594078 2.67747 0.653346 1.66433 1.66721C0.651194 2.68107 0.0582276 4.04009 0.00406556 5.47238C-0.0500965 6.90466 0.43854 8.30458 1.37222 9.39207C2.30589 10.4795 3.61575 11.1744 5.03974 11.3376C6.46372 11.5008 7.89682 11.1203 9.05232 10.2722H9.05145C9.07769 10.3072 9.10569 10.3405 9.13719 10.3729L12.5058 13.7415C12.6699 13.9057 12.8924 13.9979 13.1245 13.998C13.3566 13.9981 13.5793 13.906 13.7435 13.7419C13.9076 13.5779 13.9999 13.3553 14 13.1232C14.0001 12.8911 13.908 12.6685 13.7439 12.5043L10.3753 9.13566C10.344 9.104 10.3104 9.07562 10.2746 9.04904ZM10.5004 5.68567C10.5004 6.31763 10.3759 6.9434 10.1341 7.52726C9.89223 8.11112 9.53776 8.64162 9.0909 9.08849C8.64403 9.53535 8.11352 9.88983 7.52967 10.1317C6.94581 10.3735 6.32003 10.498 5.68807 10.498C5.05611 10.498 4.43034 10.3735 3.84648 10.1317C3.26262 9.88983 2.73211 9.53535 2.28525 9.08849C1.83838 8.64162 1.48391 8.11112 1.24207 7.52726C1.00023 6.9434 0.875753 6.31763 0.875753 5.68567C0.875753 4.40936 1.38276 3.18533 2.28525 2.28284C3.18773 1.38036 4.41177 0.873346 5.68807 0.873346C6.96438 0.873346 8.18841 1.38036 9.0909 2.28284C9.99338 3.18533 10.5004 4.40936 10.5004 5.68567Z">
                                </path>
                            </svg>
                            Search
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<div class="how-it-work-section style-3 mb-100">
    <div class="container">
        <div class="row mb-50 wow fadeInUp animated" data-wow-delay="200ms"
            style="visibility: visible; animation-delay: 200ms;">
            <div class="col-lg-12 d-flex align-items-end justify-content-between gap-3 flex-wrap">
                <div class="section-title-2">
                    <h2>How Does It Work</h2>
                    <p>Here are some of the featured cars in different categories</p>
                </div>
                <div class="video-btn">
                    <a class="video-popup"
                        href="https://www.youtube.com/watch?v=u31qwQUeGuM&amp;pp=ygURcGxhY2Vob2xkZXIgdmlkZW8%3D"><i
                            class="bi bi-play-circle"></i> Watch video</a>
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
                                    <img src="{{asset('assets/img/home2/icon/loaction.svg')}}" alt>
                                </div>
                                <div class="content">
                                    <h6>Choose Any where</h6>
                                    <p>Car servicing is the regular maintenance and inspection of a vehicle to
                                        ensure.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="single-work-process text-center">
                                <div class="steps">
                                    <span>02</span>
                                </div>
                                <div class="icon">
                                    <img src="assets/img/home2/icon/contact.svg" alt>
                                </div>
                                <div class="content">
                                    <h6>Contact With Us</h6>
                                    <p>Car servicing is the regular maintenance and inspection of a vehicle to
                                        ensure.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="single-work-process text-center">
                                <div class="steps">
                                    <span>03</span>
                                </div>
                                <div class="icon">
                                    <img src="assets/img/home2/icon/pay.svg" alt>
                                </div>
                                <div class="content">
                                    <h6>Pay For The Car</h6>
                                    <p>Car servicing is the regular maintenance and inspection of a vehicle to
                                        ensure.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="single-work-process text-center">
                                <div class="steps d-lg-none d-block">
                                    <span>04</span>
                                </div>
                                <div class="icon">
                                    <img src="assets/img/home2/icon/recieve.svg" alt>
                                </div>
                                <div class="content">
                                    <h6>Recieve The Car</h6>
                                    <p>Car servicing is the regular maintenance and inspection of a vehicle to
                                        ensure.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row wow fadeInUp" data-wow-delay="400ms" style="visibility: visible; animation-delay: 400ms;">
            <div class="col-lg-12 d-flex justify-content-center">
                <div class="trustpilot-review">
                    <strong>Excellent!</strong>
                    <img src="assets/img/home1/icon/trustpilot-star2.svg" alt>
                    <p>5.0 Rating out of <strong>5.0</strong> based on <a href="#"><strong>245354</strong>
                            reviews</a></p>
                    <img src="assets/img/home1/icon/trustpilot-logo.svg" alt>
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
                    <h2>Latest Vehicle</h2>
                    <p>To get the most accurate and up-to-date information.</p>
                </div>
            </div>
        </div>

        <div class="row mb-40">
            <div class="col-lg-12">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="featured-car" role="tabpanel"
                        aria-labelledby="featured-car-tab">
                        <div class="row g-4">
                            @foreach($vehicles as $item)
                            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                                <div class="product-card4 style-3">
                                    <div class="product-img">
                                        <a href="#" class="fav">
                                            <svg width="14" height="13" viewBox="0 0 14 14"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M7.00012 2.40453L6.37273 1.75966C4.90006 0.245917 2.19972 0.76829 1.22495 2.67141C0.767306 3.56653 0.664053 4.8589 1.4997 6.50827C2.30473 8.09639 3.97953 9.99864 7.00012 12.0706C10.0207 9.99864 11.6946 8.09639 12.5005 6.50827C13.3362 4.85803 13.2338 3.56653 12.7753 2.67141C11.8005 0.76829 9.10019 0.245042 7.62752 1.75879L7.00012 2.40453ZM7.00012 13.125C-6.41666 4.25953 2.86912 -2.65995 6.84612 1.00016C6.89862 1.04829 6.95024 1.09816 7.00012 1.14979C7.04949 1.09821 7.10087 1.04859 7.15413 1.00104C11.1302 -2.6617 20.4169 4.25865 7.00012 13.125Z">
                                                </path>
                                            </svg>
                                        </a>
                                        <div class="slider-btn-group">
                                            <div class="product-stand-next swiper-arrow">
                                                <svg width="8" height="13" viewBox="0 0 8 13"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M0 6.50008L8 0L2.90909 6.50008L8 13L0 6.50008Z"></path>
                                                </svg>
                                            </div>
                                            <div class="product-stand-prev swiper-arrow">
                                                <svg width="8" height="13" viewBox="0 0 8 13"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8 6.50008L0 0L5.09091 6.50008L0 13L8 6.50008Z"></path>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="swiper product-img-slider">
                                            <div class="swiper-wrapper">
                                                @foreach($item->image_path as $image)
                                                <div class="swiper-slide">
                                                    <img src="{{ asset($image) }}" alt="image">
                                                </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="location">
                                            <a href="#"><i class="bi bi-geo-alt"></i> {{ $item->location }}</a>
                                        </div>
                                        <h6><a href="{{ route('vehicledetails', ['id' => $item->id]) }}">{{ $item->name }}</a></h6>
                                        <div class="button-and-price">
                                            <a class="primary-btn7" href="{{ route('vehicledetails', ['id' => $item->id]) }}">View Details</a>
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


    <div class="home6-brand-section mb-100 pb-90 pt-90">
        <div class="container">
            <div class="row mb-60 wow fadeInUp" data-wow-delay="200ms">
                <div class="col-lg-12 d-flex align-items-end justify-content-between flex-wrap gap-4">
                    <div class="section-title-2">
                        <h2>Brand Category</h2>
                        <p>To get the most accurate and up-to-date information.</p>
                    </div>
                    <div class="slider-btn-group2 style-6">
                        <div class="slider-btn prev-1">
                            <svg width="9" height="15" viewBox="0 0 8 13" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0 6.50008L8 0L2.90909 6.50008L8 13L0 6.50008Z"></path>
                            </svg>
                        </div>
                        <div class="slider-btn next-1">
                            <svg width="9" height="15" viewBox="0 0 8 13" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8 6.50008L0 0L5.09091 6.50008L0 13L8 6.50008Z"></path>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 mb-50 wow fadeInUp" data-wow-delay="300ms">
                    <div class="swiper home6-brand-category-slider">
                        <div class="swiper-wrapper">
                            @foreach($category as $item)
                            <div class="swiper-slide">
                                <a href="single-brand-category.html" class="car-category text-center">
                                    <div class="icon">
                                        <img src="{{$item->brand_image}}" alt>
                                    </div>
                                    <div class="content">
                                        <h6>{{$item->brand_name}}</h6>
                                        <span>(5463)</span>
                                    </div>
                                </a>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <!-- <div class="col-lg-12">
                    <div class="our-activetis">
                        <div class="row justify-content-center g-lg-4 gy-5">
                            <div class="col-lg-3 col-sm-4 col-sm-6 divider d-flex justify-content-lg-start justify-content-sm-center wow fadeInUp"
                                data-wow-delay="200ms">
                                <div class="single-activiti">
                                    <div class="icon">
                                        <img src="assets/img/home1/icon/av-car.svg" alt>
                                    </div>
                                    <div class="content">
                                        <div class="number">
                                            <h5 class="counter">600</h5>
                                            <span>K+</span>
                                        </div>
                                        <p>Car Available</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-4 col-sm-6 divider d-flex justify-content-sm-center wow fadeInUp"
                                data-wow-delay="300ms">
                                <div class="single-activiti">
                                    <div class="icon">
                                        <img src="assets/img/home1/icon/sold-car.svg" alt>
                                    </div>
                                    <div class="content">
                                        <div class="number">
                                            <h5 class="counter">400</h5>
                                            <span>K+</span>
                                        </div>
                                        <p>Car Sold</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-4 col-sm-6 divider d-flex justify-content-sm-center wow fadeInUp"
                                data-wow-delay="400ms">
                                <div class="single-activiti">
                                    <div class="icon">
                                        <img src="assets/img/home1/icon/use-car.svg" alt>
                                    </div>
                                    <div class="content">
                                        <div class="number">
                                            <h5 class="counter">200</h5>
                                            <span>K+</span>
                                        </div>
                                        <p>Used Cars</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-4 col-sm-6 d-flex justify-content-lg-end justify-content-sm-center wow fadeInUp"
                                data-wow-delay="500ms">
                                <div class="single-activiti">
                                    <div class="icon">
                                        <img src="assets/img/home1/icon/happy-customar.svg" alt>
                                    </div>
                                    <div class="content">
                                        <div class="number">
                                            <h5 class="counter">98.50</h5>
                                            <span>%</span>
                                        </div>
                                        <p>Customer Satisfaction</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </div>



    <!-- <div class="home4-inner-banner-section style-2 mb-100">
        <div class="container">
            <div class="row gy-5">
                <div class="col-lg-6 d-flex align-items-center">
                    <div class="section-title-2 wow fadeInUp" data-wow-delay="200ms">
                        <h2>Sell Your Car With Drivco?</h2>
                        <p>Car servicing is the regular maintenance and inspection of a vehicle to ensure that it is
                            operating safely and efficiently.</p>
                        <div class="sell-btn-and-contact-info">
                            <button class="primary-btn6" type="button" data-bs-toggle="modal"
                                data-bs-target="#sellUsModal01">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    viewBox="0 0 20 20">
                                    <path
                                        d="M19.5097 0C19.3856 0.00319696 19.2676 0.0547717 19.181 0.143724L17.1383 2.18999L16.523 1.57377C16.1807 1.23243 15.7864 1.0429 15.3983 1.03212C15.1648 1.02583 14.9492 1.05906 14.6923 1.095L11.3597 1.5585C10.1336 1.72918 9.51106 2.25377 8.72058 2.99035L0.522936 10.6302C0.519601 10.6331 0.516307 10.6361 0.513055 10.6391C0.158237 10.9895 0.0046327 11.4674 0.000141332 11.9381C-0.00524831 12.4087 0.142967 12.9073 0.538207 13.245L0.511259 13.219L6.78121 19.4907L6.75605 19.4638C7.09381 19.859 7.59145 20.0063 8.06304 20.001C8.53374 19.9965 9.01252 19.8429 9.36195 19.4889C9.36499 19.4854 9.36799 19.4818 9.37093 19.4782L9.93414 18.8736L12.1762 19.709C12.403 19.7957 12.645 19.8358 12.8876 19.8268C13.1302 19.8179 13.3685 19.7601 13.5883 19.6569C14.015 19.4566 14.386 19.118 14.5567 18.6508L17.0179 11.2724C17.7509 10.4864 18.2728 9.86304 18.4426 8.64139L18.9061 5.30879C18.942 5.05189 18.9753 4.8354 18.969 4.60275C18.9582 4.2147 18.7696 3.82125 18.4273 3.47811L17.8111 2.8628L19.8556 0.818327C19.9244 0.751474 19.9715 0.665376 19.9905 0.571322C20.0096 0.477269 19.9998 0.379651 19.9624 0.29127C19.925 0.20289 19.8618 0.127872 19.781 0.0760549C19.7002 0.0242379 19.6057 -0.00195942 19.5097 0.000898315V0ZM15.3723 1.98339C15.5591 1.98788 15.5969 1.99327 15.8493 2.24658L16.4655 2.8619L15.3723 3.956C15.1812 3.86262 14.9714 3.81379 14.7588 3.81317C13.9755 3.81317 13.3296 4.45993 13.3296 5.24232C13.3296 6.02562 13.9755 6.67058 14.7579 6.67058C15.5412 6.67058 16.187 6.02562 16.187 5.24232C16.187 5.02314 16.1349 4.81564 16.0451 4.6288L17.1383 3.53471L17.7536 4.15092C18.0069 4.40334 18.0123 4.44106 18.0168 4.62701C18.0115 4.81128 17.9935 4.99496 17.9629 5.17675L17.5003 8.50934C17.3566 9.54236 17.0467 9.84418 16.3146 10.6311L8.68375 18.8188C8.56069 18.9437 8.30647 19.0452 8.05226 19.0479C7.79805 19.0515 7.58067 18.9608 7.48096 18.844C7.47263 18.8347 7.46395 18.8257 7.45491 18.817L1.18496 12.5453C1.17633 12.5363 1.16734 12.5276 1.15802 12.5192C1.04124 12.4204 0.949616 12.2021 0.953209 11.9479C0.955904 11.6946 1.05741 11.4395 1.18227 11.3164L9.37003 3.68651C10.1569 2.95352 10.4587 2.64452 11.4918 2.50079L14.8243 2.03728C15.0813 2.00135 15.2609 1.97979 15.3723 1.98339ZM14.7588 4.76534C15.0274 4.76534 15.2349 4.97374 15.2349 5.24232C15.2349 5.51091 15.0274 5.71841 14.7588 5.71841C14.4893 5.71841 14.2827 5.51091 14.2827 5.24232C14.2827 4.97374 14.4893 4.76534 14.7588 4.76534ZM6.65904 9.99868C6.56427 9.99858 6.47162 10.0268 6.39297 10.0796C6.31431 10.1325 6.25323 10.2077 6.21753 10.2954C6.18183 10.3832 6.17315 10.4797 6.1926 10.5724C6.21204 10.6652 6.25873 10.75 6.32668 10.8161L9.18409 13.6726C9.63322 14.1218 10.3069 13.448 9.85779 12.9989L7.00038 10.1424C6.95598 10.0969 6.90289 10.0607 6.84426 10.036C6.78563 10.0113 6.72265 9.99862 6.65904 9.99868ZM5.23079 11.426C5.13583 11.4258 5.04295 11.4539 4.9641 11.5068C4.88524 11.5597 4.82401 11.635 4.78828 11.723C4.75255 11.811 4.74394 11.9076 4.76357 12.0005C4.7832 12.0934 4.83016 12.1784 4.89843 12.2444L7.75583 15.1009C8.20497 15.5797 8.90832 14.8754 8.42954 14.4272L5.57303 11.5716C5.52867 11.5256 5.4755 11.489 5.4167 11.464C5.35791 11.439 5.29468 11.4261 5.23079 11.426ZM15.4549 12.9486L13.662 18.323C13.6009 18.4874 13.4123 18.6868 13.1823 18.7946C12.9523 18.9024 12.7215 18.8997 12.5778 18.8458L10.6357 18.1191L15.4549 12.9486Z" />
                                </svg>
                                Sell Your Car
                            </button>
                            <span>Or,</span>
                            <div class="hotline-area">
                                <div class="icon">
                                    <svg width="32" height="32" viewBox="0 0 32 32"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M31.1603 24.6852L24.6834 20.3658C23.8615 19.8221 22.7597 20.001 22.152 20.7769L20.2654 23.2027C20.1481 23.3573 19.9789 23.4645 19.789 23.5045C19.599 23.5444 19.4011 23.5145 19.2314 23.4203L18.8725 23.2224C17.6828 22.574 16.2025 21.7667 13.22 18.7831C10.2375 15.7995 9.42859 14.3181 8.78012 13.1306L8.58334 12.7717C8.48781 12.6021 8.45678 12.4037 8.49597 12.213C8.53516 12.0223 8.64193 11.8522 8.79662 11.734L11.2208 9.84792C11.9964 9.2402 12.1756 8.13874 11.6324 7.31655L7.31309 0.83963C6.75648 0.00237835 5.63977 -0.24896 4.77809 0.269026L2.06967 1.89597C1.21867 2.39626 0.594346 3.20652 0.327557 4.15695C-0.647737 7.71055 0.0859667 13.8435 9.12038 22.879C16.3071 30.0651 21.6572 31.9976 25.3345 31.9976C26.1809 32.0013 27.0239 31.8912 27.8409 31.6703C28.7915 31.4038 29.6018 30.7794 30.1018 29.9281L31.7304 27.2214C32.2491 26.3595 31.9979 25.2421 31.1603 24.6852ZM30.8115 26.6742L29.1867 29.3826C28.8277 29.997 28.2449 30.4488 27.5603 30.6432C24.2797 31.5439 18.5483 30.7979 9.87489 22.1245C1.20149 13.4511 0.455538 7.72017 1.35622 4.4391C1.55097 3.75367 2.00324 3.17011 2.61841 2.81053L5.32682 1.1857C5.7007 0.960737 6.18538 1.06978 6.4269 1.4331L8.77324 4.95577L10.7426 7.90946C10.9784 8.26609 10.9009 8.74409 10.5645 9.00798L8.13978 10.8941C7.40188 11.4583 7.19117 12.4792 7.64547 13.2895L7.83801 13.6393C8.51953 14.8892 9.36684 16.4442 12.4603 19.5371C15.5537 22.63 17.1081 23.4773 18.3575 24.1588L18.7078 24.3518C19.518 24.8061 20.539 24.5954 21.1032 23.8575L22.9893 21.4328C23.2533 21.0966 23.7311 21.0191 24.0879 21.2547L30.5642 25.5741C30.9278 25.8154 31.0368 26.3004 30.8115 26.6742ZM18.1324 5.33496C23.1367 5.34053 27.1921 9.39599 27.1977 14.4003C27.1977 14.6948 27.4364 14.9335 27.7309 14.9335C28.0255 14.9335 28.2642 14.6948 28.2642 14.4003C28.258 8.8072 23.7255 4.27462 18.1324 4.2685C17.8378 4.2685 17.5991 4.50721 17.5991 4.80173C17.5991 5.09625 17.8378 5.33496 18.1324 5.33496Z">
                                        </path>
                                        <path
                                            d="M18.1324 8.53424C21.3704 8.53805 23.9944 11.162 23.9982 14.4001C23.9982 14.5415 24.0544 14.6771 24.1544 14.7771C24.2544 14.8771 24.39 14.9333 24.5314 14.9333C24.6728 14.9333 24.8085 14.8771 24.9085 14.7771C25.0085 14.6771 25.0646 14.5415 25.0646 14.4001C25.0602 10.5733 21.9591 7.47215 18.1324 7.46777C17.8378 7.46777 17.5991 7.70649 17.5991 8.00101C17.5991 8.29553 17.8378 8.53424 18.1324 8.53424Z">
                                        </path>
                                        <path
                                            d="M18.1324 11.7344C19.6041 11.7362 20.7968 12.9289 20.7986 14.4007C20.7986 14.5422 20.8548 14.6778 20.9548 14.7778C21.0548 14.8778 21.1905 14.934 21.3319 14.934C21.4733 14.934 21.6089 14.8778 21.7089 14.7778C21.8089 14.6778 21.8651 14.5422 21.8651 14.4007C21.8627 12.3402 20.1929 10.6703 18.1324 10.668C17.8378 10.668 17.5991 10.9067 17.5991 11.2012C17.5991 11.4957 17.8378 11.7344 18.1324 11.7344Z">
                                        </path>
                                    </svg>
                                </div>
                                <div class="content">
                                    <span>Call Now</span>
                                    <h6><a href="tel:+990737621432">+990-737 621 432</a></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 d-flex justify-content-lg-end justify-content-sm-center justify-content-end">
                    <div class="inner-banner-img">
                        <div class="background-img">
                            <img src="assets/img/home4/inner-banner-img1.png" alt>
                        </div>
                        <div class="car-img wow zoomIn" data-wow-delay="400ms">
                            <img src="assets/img/home4/inner-banner-img2.png" alt>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="home6-upcoming-car-section mb-100">
        <div class="container">
            <div class="row mb-60 wow fadeInUp" data-wow-delay="200ms">
                <div class="col-lg-12 d-flex align-items-end justify-content-between flex-wrap gap-4">
                    <div class="section-title-2">
                        <h2>Top Upcoming Car</h2>
                        <p>To get the most accurate and up-to-date information.</p>
                    </div>
                    <div class="slider-btn-group2 style-6">
                        <div class="slider-btn prev-2">
                            <svg width="9" height="15" viewBox="0 0 8 13"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M0 6.50008L8 0L2.90909 6.50008L8 13L0 6.50008Z"></path>
                            </svg>
                        </div>
                        <div class="slider-btn next-2">
                            <svg width="9" height="15" viewBox="0 0 8 13"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M8 6.50008L0 0L5.09091 6.50008L0 13L8 6.50008Z"></path>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row wow fadeInUp" data-wow-delay="300ms">
                <div class="col-lg-12">
                    <div class="swiper home6-top-use-car-slider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="product-card4 style-3">
                                    <div class="product-img">
                                        <a href="#" class="fav">
                                            <svg width="14" height="13" viewBox="0 0 14 14"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M7.00012 2.40453L6.37273 1.75966C4.90006 0.245917 2.19972 0.76829 1.22495 2.67141C0.767306 3.56653 0.664053 4.8589 1.4997 6.50827C2.30473 8.09639 3.97953 9.99864 7.00012 12.0706C10.0207 9.99864 11.6946 8.09639 12.5005 6.50827C13.3362 4.85803 13.2338 3.56653 12.7753 2.67141C11.8005 0.76829 9.10019 0.245042 7.62752 1.75879L7.00012 2.40453ZM7.00012 13.125C-6.41666 4.25953 2.86912 -2.65995 6.84612 1.00016C6.89862 1.04829 6.95024 1.09816 7.00012 1.14979C7.04949 1.09821 7.10087 1.04859 7.15413 1.00104C11.1302 -2.6617 20.4169 4.25865 7.00012 13.125Z">
                                                </path>
                                            </svg>
                                        </a>
                                        <div class="slider-btn-group">
                                            <div class="product-stand-next swiper-arrow">
                                                <svg width="8" height="13" viewBox="0 0 8 13"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M0 6.50008L8 0L2.90909 6.50008L8 13L0 6.50008Z" />
                                                </svg>
                                            </div>
                                            <div class="product-stand-prev swiper-arrow">
                                                <svg width="8" height="13" viewBox="0 0 8 13"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8 6.50008L0 0L5.09091 6.50008L0 13L8 6.50008Z" />
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="swiper product-img-slider">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <img src="assets/img/home6/product-img-01.png" alt="image">
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="assets/img/home6/product-img-01.png" alt="image">
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="assets/img/home6/product-img-01.png" alt="image">
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="assets/img/home6/product-img-01.png" alt="image">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="location">
                                            <a href="#"><i class="bi bi-geo-alt"></i> Sydne City</a>
                                        </div>
                                        <h6><a href="car-deatils.html">Tesla Model S-2023</a></h6>
                                        <ul class="features">
                                            <li>
                                                <img src="assets/img/home4/icon/miles.svg" alt>
                                                2500 miles
                                            </li>
                                            <li>
                                                <img src="assets/img/home4/icon/fuel.svg" alt>
                                                Petrol + Gas
                                            </li>
                                            <li>
                                                <img src="assets/img/home4/icon/electric.svg" alt>
                                                Electric
                                            </li>
                                        </ul>
                                        <div class="button-and-price">
                                            <a class="primary-btn7" href="car-deatils.html">View Details</a>
                                            <div class="price-area">
                                                <span>Great Price</span>
                                                <h6>$4,564.00</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="product-card4 style-3">
                                    <div class="product-img">
                                        <a href="#" class="fav">
                                            <svg width="14" height="13" viewBox="0 0 14 14"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M7.00012 2.40453L6.37273 1.75966C4.90006 0.245917 2.19972 0.76829 1.22495 2.67141C0.767306 3.56653 0.664053 4.8589 1.4997 6.50827C2.30473 8.09639 3.97953 9.99864 7.00012 12.0706C10.0207 9.99864 11.6946 8.09639 12.5005 6.50827C13.3362 4.85803 13.2338 3.56653 12.7753 2.67141C11.8005 0.76829 9.10019 0.245042 7.62752 1.75879L7.00012 2.40453ZM7.00012 13.125C-6.41666 4.25953 2.86912 -2.65995 6.84612 1.00016C6.89862 1.04829 6.95024 1.09816 7.00012 1.14979C7.04949 1.09821 7.10087 1.04859 7.15413 1.00104C11.1302 -2.6617 20.4169 4.25865 7.00012 13.125Z">
                                                </path>
                                            </svg>
                                        </a>
                                        <div class="slider-btn-group">
                                            <div class="product-stand-next swiper-arrow">
                                                <svg width="8" height="13" viewBox="0 0 8 13"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M0 6.50008L8 0L2.90909 6.50008L8 13L0 6.50008Z" />
                                                </svg>
                                            </div>
                                            <div class="product-stand-prev swiper-arrow">
                                                <svg width="8" height="13" viewBox="0 0 8 13"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8 6.50008L0 0L5.09091 6.50008L0 13L8 6.50008Z" />
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="swiper product-img-slider">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <img src="assets/img/home6/product-img-02.png" alt="image">
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="assets/img/home6/product-img-02.png" alt="image">
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="assets/img/home6/product-img-02.png" alt="image">
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="assets/img/home6/product-img-02.png" alt="image">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="location">
                                            <a href="#"><i class="bi bi-geo-alt"></i> Panama City</a>
                                        </div>
                                        <h6><a href="car-deatils.html">Mercedes-Benz Class-2023</a></h6>
                                        <ul class="features">
                                            <li>
                                                <img src="assets/img/home4/icon/miles.svg" alt>
                                                7800 miles
                                            </li>
                                            <li>
                                                <img src="assets/img/home4/icon/fuel.svg" alt>
                                                Petrol + Gas
                                            </li>
                                            <li>
                                                <img src="assets/img/home4/icon/electric.svg" alt>
                                                Electric
                                            </li>
                                        </ul>
                                        <div class="button-and-price">
                                            <a class="primary-btn7" href="car-deatils.html">View Details</a>
                                            <div class="price-area">
                                                <span>Excellent Price</span>
                                                <h6>$33,564.00</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="product-card4 style-3">
                                    <div class="product-img">
                                        <a href="#" class="fav">
                                            <svg width="14" height="13" viewBox="0 0 14 14"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M7.00012 2.40453L6.37273 1.75966C4.90006 0.245917 2.19972 0.76829 1.22495 2.67141C0.767306 3.56653 0.664053 4.8589 1.4997 6.50827C2.30473 8.09639 3.97953 9.99864 7.00012 12.0706C10.0207 9.99864 11.6946 8.09639 12.5005 6.50827C13.3362 4.85803 13.2338 3.56653 12.7753 2.67141C11.8005 0.76829 9.10019 0.245042 7.62752 1.75879L7.00012 2.40453ZM7.00012 13.125C-6.41666 4.25953 2.86912 -2.65995 6.84612 1.00016C6.89862 1.04829 6.95024 1.09816 7.00012 1.14979C7.04949 1.09821 7.10087 1.04859 7.15413 1.00104C11.1302 -2.6617 20.4169 4.25865 7.00012 13.125Z">
                                                </path>
                                            </svg>
                                        </a>
                                        <div class="slider-btn-group">
                                            <div class="product-stand-next swiper-arrow">
                                                <svg width="8" height="13" viewBox="0 0 8 13"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M0 6.50008L8 0L2.90909 6.50008L8 13L0 6.50008Z" />
                                                </svg>
                                            </div>
                                            <div class="product-stand-prev swiper-arrow">
                                                <svg width="8" height="13" viewBox="0 0 8 13"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8 6.50008L0 0L5.09091 6.50008L0 13L8 6.50008Z" />
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="swiper product-img-slider">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <img src="assets/img/home6/product-img-03.png" alt="image">
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="assets/img/home6/product-img-03.png" alt="image">
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="assets/img/home6/product-img-03.png" alt="image">
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="assets/img/home6/product-img-03.png" alt="image">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="location">
                                            <a href="#"><i class="bi bi-geo-alt"></i> Canada City</a>
                                        </div>
                                        <h6><a href="car-deatils.html">Ferrari 458 Italia-2023</a></h6>
                                        <ul class="features">
                                            <li>
                                                <img src="assets/img/home4/icon/miles.svg" alt>
                                                2500 miles
                                            </li>
                                            <li>
                                                <img src="assets/img/home4/icon/fuel.svg" alt>
                                                Petrol + Gas
                                            </li>
                                            <li>
                                                <img src="assets/img/home4/icon/electric.svg" alt>
                                                Electric
                                            </li>
                                        </ul>
                                        <div class="button-and-price">
                                            <a class="primary-btn7" href="car-deatils.html">View Details</a>
                                            <div class="price-area">
                                                <span>Great Price</span>
                                                <h6>$4,564.00</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="product-card4 style-3">
                                    <div class="product-img">
                                        <a href="#" class="fav">
                                            <svg width="14" height="13" viewBox="0 0 14 14"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M7.00012 2.40453L6.37273 1.75966C4.90006 0.245917 2.19972 0.76829 1.22495 2.67141C0.767306 3.56653 0.664053 4.8589 1.4997 6.50827C2.30473 8.09639 3.97953 9.99864 7.00012 12.0706C10.0207 9.99864 11.6946 8.09639 12.5005 6.50827C13.3362 4.85803 13.2338 3.56653 12.7753 2.67141C11.8005 0.76829 9.10019 0.245042 7.62752 1.75879L7.00012 2.40453ZM7.00012 13.125C-6.41666 4.25953 2.86912 -2.65995 6.84612 1.00016C6.89862 1.04829 6.95024 1.09816 7.00012 1.14979C7.04949 1.09821 7.10087 1.04859 7.15413 1.00104C11.1302 -2.6617 20.4169 4.25865 7.00012 13.125Z">
                                                </path>
                                            </svg>
                                        </a>
                                        <div class="slider-btn-group">
                                            <div class="product-stand-next swiper-arrow">
                                                <svg width="8" height="13" viewBox="0 0 8 13"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M0 6.50008L8 0L2.90909 6.50008L8 13L0 6.50008Z" />
                                                </svg>
                                            </div>
                                            <div class="product-stand-prev swiper-arrow">
                                                <svg width="8" height="13" viewBox="0 0 8 13"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8 6.50008L0 0L5.09091 6.50008L0 13L8 6.50008Z" />
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="swiper product-img-slider">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <img src="assets/img/home6/product-img-04.png" alt="image">
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="assets/img/home6/product-img-04.png" alt="image">
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="assets/img/home6/product-img-04.png" alt="image">
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="assets/img/home6/product-img-04.png" alt="image">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="location">
                                            <a href="#"><i class="bi bi-geo-alt"></i> Sydne City</a>
                                        </div>
                                        <h6><a href="car-deatils.html">BMW 3 Series-2023</a></h6>
                                        <ul class="features">
                                            <li>
                                                <img src="assets/img/home4/icon/miles.svg" alt>
                                                2500 miles
                                            </li>
                                            <li>
                                                <img src="assets/img/home4/icon/fuel.svg" alt>
                                                Petrol + Gas
                                            </li>
                                            <li>
                                                <img src="assets/img/home4/icon/electric.svg" alt>
                                                Electric
                                            </li>
                                        </ul>
                                        <div class="button-and-price">
                                            <a class="primary-btn7" href="car-deatils.html">View Details</a>
                                            <div class="price-area">
                                                <span>Excellent Price</span>
                                                <h6>$21,564.00</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="product-card4 style-3">
                                    <div class="product-img">
                                        <a href="#" class="fav">
                                            <svg width="14" height="13" viewBox="0 0 14 14"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M7.00012 2.40453L6.37273 1.75966C4.90006 0.245917 2.19972 0.76829 1.22495 2.67141C0.767306 3.56653 0.664053 4.8589 1.4997 6.50827C2.30473 8.09639 3.97953 9.99864 7.00012 12.0706C10.0207 9.99864 11.6946 8.09639 12.5005 6.50827C13.3362 4.85803 13.2338 3.56653 12.7753 2.67141C11.8005 0.76829 9.10019 0.245042 7.62752 1.75879L7.00012 2.40453ZM7.00012 13.125C-6.41666 4.25953 2.86912 -2.65995 6.84612 1.00016C6.89862 1.04829 6.95024 1.09816 7.00012 1.14979C7.04949 1.09821 7.10087 1.04859 7.15413 1.00104C11.1302 -2.6617 20.4169 4.25865 7.00012 13.125Z">
                                                </path>
                                            </svg>
                                        </a>
                                        <div class="slider-btn-group">
                                            <div class="product-stand-next swiper-arrow">
                                                <svg width="8" height="13" viewBox="0 0 8 13"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M0 6.50008L8 0L2.90909 6.50008L8 13L0 6.50008Z" />
                                                </svg>
                                            </div>
                                            <div class="product-stand-prev swiper-arrow">
                                                <svg width="8" height="13" viewBox="0 0 8 13"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8 6.50008L0 0L5.09091 6.50008L0 13L8 6.50008Z" />
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="swiper product-img-slider">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <img src="assets/img/home6/product-img-05.png" alt="image">
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="assets/img/home6/product-img-05.png" alt="image">
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="assets/img/home6/product-img-05.png" alt="image">
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="assets/img/home6/product-img-05.png" alt="image">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="location">
                                            <a href="#"><i class="bi bi-geo-alt"></i> New Delhi</a>
                                        </div>
                                        <h6><a href="car-deatils.html">Hyundai Sonata-2022</a></h6>
                                        <ul class="features">
                                            <li>
                                                <img src="assets/img/home4/icon/miles.svg" alt>
                                                2500 miles
                                            </li>
                                            <li>
                                                <img src="assets/img/home4/icon/fuel.svg" alt>
                                                Petrol + Gas
                                            </li>
                                            <li>
                                                <img src="assets/img/home4/icon/electric.svg" alt>
                                                Electric
                                            </li>
                                        </ul>
                                        <div class="button-and-price">
                                            <a class="primary-btn7" href="car-deatils.html">View Details</a>
                                            <div class="price-area">
                                                <span>Fair Price</span>
                                                <h6>$11,564.00</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="product-card4 style-3">
                                    <div class="product-img">
                                        <a href="#" class="fav">
                                            <svg width="14" height="13" viewBox="0 0 14 14"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M7.00012 2.40453L6.37273 1.75966C4.90006 0.245917 2.19972 0.76829 1.22495 2.67141C0.767306 3.56653 0.664053 4.8589 1.4997 6.50827C2.30473 8.09639 3.97953 9.99864 7.00012 12.0706C10.0207 9.99864 11.6946 8.09639 12.5005 6.50827C13.3362 4.85803 13.2338 3.56653 12.7753 2.67141C11.8005 0.76829 9.10019 0.245042 7.62752 1.75879L7.00012 2.40453ZM7.00012 13.125C-6.41666 4.25953 2.86912 -2.65995 6.84612 1.00016C6.89862 1.04829 6.95024 1.09816 7.00012 1.14979C7.04949 1.09821 7.10087 1.04859 7.15413 1.00104C11.1302 -2.6617 20.4169 4.25865 7.00012 13.125Z">
                                                </path>
                                            </svg>
                                        </a>
                                        <div class="slider-btn-group">
                                            <div class="product-stand-next swiper-arrow">
                                                <svg width="8" height="13" viewBox="0 0 8 13"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M0 6.50008L8 0L2.90909 6.50008L8 13L0 6.50008Z" />
                                                </svg>
                                            </div>
                                            <div class="product-stand-prev swiper-arrow">
                                                <svg width="8" height="13" viewBox="0 0 8 13"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8 6.50008L0 0L5.09091 6.50008L0 13L8 6.50008Z" />
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="swiper product-img-slider">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <img src="assets/img/home6/product-img-06.png" alt="image">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="location">
                                            <a href="#"><i class="bi bi-geo-alt"></i> Australia City</a>
                                        </div>
                                        <h6><a href="car-deatils.html">Lamborghini Aventador-2023</a></h6>
                                        <ul class="features">
                                            <li>
                                                <img src="assets/img/home4/icon/miles.svg" alt>
                                                2500 miles
                                            </li>
                                            <li>
                                                <img src="assets/img/home4/icon/fuel.svg" alt>
                                                Petrol + Gas
                                            </li>
                                            <li>
                                                <img src="assets/img/home4/icon/electric.svg" alt>
                                                Electric
                                            </li>
                                        </ul>
                                        <div class="button-and-price">
                                            <a class="primary-btn7" href="car-deatils.html">View Details</a>
                                            <div class="price-area">
                                                <span>Great Price</span>
                                                <h6>$31,564.00</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 -->



    <!-- <div class="home6-top-used-car-section mb-100">
        <div class="container">
            <div class="row mb-50 wow fadeInUp" data-wow-delay="200ms">
                <div class="col-lg-12">
                    <div class="section-title-2">
                        <h2>Top New Cars</h2>
                        <p>To get the most accurate and up-to-date information.</p>
                    </div>
                </div>
            </div>
            <div class="row mb-40 wow fadeInUp" data-wow-delay="300ms">
                <div class="col-lg-12">
                    <div class="home6-filter-area d-flex align-items-center justify-content-between">
                        <ul class="nav nav-tabs" id="myTab3" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="popular1-tab" data-bs-toggle="tab"
                                    data-bs-target="#popular1" type="button" role="tab"
                                    aria-controls="popular1" aria-selected="true">Popular</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="latest2-tab" data-bs-toggle="tab"
                                    data-bs-target="#latest2" type="button" role="tab" aria-controls="latest2"
                                    aria-selected="false">Latest</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="upcomming3-tab" data-bs-toggle="tab"
                                    data-bs-target="#upcomming3" type="button" role="tab"
                                    aria-controls="upcomming3" aria-selected="false">Upcoming</button>
                            </li>
                        </ul>
                        <div class="slider-btn-group2 style-6 d-lg-flex d-none">
                            <div class="slider-btn prev-2">
                                <svg width="9" height="15" viewBox="0 0 8 13"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0 6.50008L8 0L2.90909 6.50008L8 13L0 6.50008Z"></path>
                                </svg>
                            </div>
                            <div class="slider-btn next-2">
                                <svg width="9" height="15" viewBox="0 0 8 13"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8 6.50008L0 0L5.09091 6.50008L0 13L8 6.50008Z"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row  wow fadeInUp" data-wow-delay="400ms">
                <div class="col-lg-12">
                    <div class="tab-content" id="myTab3Content">
                        <div class="tab-pane fade show active" id="popular1" role="tabpanel"
                            aria-labelledby="popular1-tab">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="swiper home6-top-use-car-slider">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <div class="product-card4 style-3">
                                                    <div class="product-img">
                                                        <a href="#" class="fav">
                                                            <svg width="14" height="13" viewBox="0 0 14 14"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M7.00012 2.40453L6.37273 1.75966C4.90006 0.245917 2.19972 0.76829 1.22495 2.67141C0.767306 3.56653 0.664053 4.8589 1.4997 6.50827C2.30473 8.09639 3.97953 9.99864 7.00012 12.0706C10.0207 9.99864 11.6946 8.09639 12.5005 6.50827C13.3362 4.85803 13.2338 3.56653 12.7753 2.67141C11.8005 0.76829 9.10019 0.245042 7.62752 1.75879L7.00012 2.40453ZM7.00012 13.125C-6.41666 4.25953 2.86912 -2.65995 6.84612 1.00016C6.89862 1.04829 6.95024 1.09816 7.00012 1.14979C7.04949 1.09821 7.10087 1.04859 7.15413 1.00104C11.1302 -2.6617 20.4169 4.25865 7.00012 13.125Z">
                                                                </path>
                                                            </svg>
                                                        </a>
                                                        <div class="slider-btn-group">
                                                            <div class="product-stand-next swiper-arrow">
                                                                <svg width="8" height="13" viewBox="0 0 8 13"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M0 6.50008L8 0L2.90909 6.50008L8 13L0 6.50008Z" />
                                                                </svg>
                                                            </div>
                                                            <div class="product-stand-prev swiper-arrow">
                                                                <svg width="8" height="13" viewBox="0 0 8 13"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M8 6.50008L0 0L5.09091 6.50008L0 13L8 6.50008Z" />
                                                                </svg>
                                                            </div>
                                                        </div>
                                                        <div class="swiper product-img-slider">
                                                            <div class="swiper-wrapper">
                                                                <div class="swiper-slide">
                                                                    <img src="assets/img/home6/product-img-01.png"
                                                                        alt="image">
                                                                </div>
                                                                <div class="swiper-slide">
                                                                    <img src="assets/img/home6/product-img-01.png"
                                                                        alt="image">
                                                                </div>
                                                                <div class="swiper-slide">
                                                                    <img src="assets/img/home6/product-img-01.png"
                                                                        alt="image">
                                                                </div>
                                                                <div class="swiper-slide">
                                                                    <img src="assets/img/home6/product-img-01.png"
                                                                        alt="image">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-content">
                                                        <div class="location">
                                                            <a href="#"><i class="bi bi-geo-alt"></i> Sydne
                                                                City</a>
                                                        </div>
                                                        <h6><a href="car-deatils.html">Tesla Model S-2023</a></h6>
                                                        <ul class="features">
                                                            <li>
                                                                <img src="assets/img/home4/icon/miles.svg" alt>
                                                                2500 miles
                                                            </li>
                                                            <li>
                                                                <img src="assets/img/home4/icon/fuel.svg" alt>
                                                                Petrol + Gas
                                                            </li>
                                                            <li>
                                                                <img src="assets/img/home4/icon/electric.svg" alt>
                                                                Electric
                                                            </li>
                                                        </ul>
                                                        <div class="button-and-price">
                                                            <a class="primary-btn7" href="car-deatils.html">View
                                                                Details</a>
                                                            <div class="price-area">
                                                                <span>Great Price</span>
                                                                <h6>$4,564.00</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="product-card4 style-3">
                                                    <div class="product-img">
                                                        <a href="#" class="fav">
                                                            <svg width="14" height="13" viewBox="0 0 14 14"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M7.00012 2.40453L6.37273 1.75966C4.90006 0.245917 2.19972 0.76829 1.22495 2.67141C0.767306 3.56653 0.664053 4.8589 1.4997 6.50827C2.30473 8.09639 3.97953 9.99864 7.00012 12.0706C10.0207 9.99864 11.6946 8.09639 12.5005 6.50827C13.3362 4.85803 13.2338 3.56653 12.7753 2.67141C11.8005 0.76829 9.10019 0.245042 7.62752 1.75879L7.00012 2.40453ZM7.00012 13.125C-6.41666 4.25953 2.86912 -2.65995 6.84612 1.00016C6.89862 1.04829 6.95024 1.09816 7.00012 1.14979C7.04949 1.09821 7.10087 1.04859 7.15413 1.00104C11.1302 -2.6617 20.4169 4.25865 7.00012 13.125Z">
                                                                </path>
                                                            </svg>
                                                        </a>
                                                        <div class="slider-btn-group">
                                                            <div class="product-stand-next swiper-arrow">
                                                                <svg width="8" height="13" viewBox="0 0 8 13"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M0 6.50008L8 0L2.90909 6.50008L8 13L0 6.50008Z" />
                                                                </svg>
                                                            </div>
                                                            <div class="product-stand-prev swiper-arrow">
                                                                <svg width="8" height="13" viewBox="0 0 8 13"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M8 6.50008L0 0L5.09091 6.50008L0 13L8 6.50008Z" />
                                                                </svg>
                                                            </div>
                                                        </div>
                                                        <div class="swiper product-img-slider">
                                                            <div class="swiper-wrapper">
                                                                <div class="swiper-slide">
                                                                    <img src="assets/img/home6/product-img-02.png"
                                                                        alt="image">
                                                                </div>
                                                                <div class="swiper-slide">
                                                                    <img src="assets/img/home6/product-img-02.png"
                                                                        alt="image">
                                                                </div>
                                                                <div class="swiper-slide">
                                                                    <img src="assets/img/home6/product-img-02.png"
                                                                        alt="image">
                                                                </div>
                                                                <div class="swiper-slide">
                                                                    <img src="assets/img/home6/product-img-02.png"
                                                                        alt="image">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-content">
                                                        <div class="location">
                                                            <a href="#"><i class="bi bi-geo-alt"></i> Panama
                                                                City</a>
                                                        </div>
                                                        <h6><a href="car-deatils.html">Mercedes-Benz Class-2023</a></h6>
                                                        <ul class="features">
                                                            <li>
                                                                <img src="assets/img/home4/icon/miles.svg" alt>
                                                                7800 miles
                                                            </li>
                                                            <li>
                                                                <img src="assets/img/home4/icon/fuel.svg" alt>
                                                                Petrol + Gas
                                                            </li>
                                                            <li>
                                                                <img src="assets/img/home4/icon/electric.svg" alt>
                                                                Electric
                                                            </li>
                                                        </ul>
                                                        <div class="button-and-price">
                                                            <a class="primary-btn7" href="car-deatils.html">View
                                                                Details</a>
                                                            <div class="price-area">
                                                                <span>Excellent Price</span>
                                                                <h6>$33,564.00</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="product-card4 style-3">
                                                    <div class="product-img">
                                                        <a href="#" class="fav">
                                                            <svg width="14" height="13" viewBox="0 0 14 14"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M7.00012 2.40453L6.37273 1.75966C4.90006 0.245917 2.19972 0.76829 1.22495 2.67141C0.767306 3.56653 0.664053 4.8589 1.4997 6.50827C2.30473 8.09639 3.97953 9.99864 7.00012 12.0706C10.0207 9.99864 11.6946 8.09639 12.5005 6.50827C13.3362 4.85803 13.2338 3.56653 12.7753 2.67141C11.8005 0.76829 9.10019 0.245042 7.62752 1.75879L7.00012 2.40453ZM7.00012 13.125C-6.41666 4.25953 2.86912 -2.65995 6.84612 1.00016C6.89862 1.04829 6.95024 1.09816 7.00012 1.14979C7.04949 1.09821 7.10087 1.04859 7.15413 1.00104C11.1302 -2.6617 20.4169 4.25865 7.00012 13.125Z">
                                                                </path>
                                                            </svg>
                                                        </a>
                                                        <div class="slider-btn-group">
                                                            <div class="product-stand-next swiper-arrow">
                                                                <svg width="8" height="13" viewBox="0 0 8 13"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M0 6.50008L8 0L2.90909 6.50008L8 13L0 6.50008Z" />
                                                                </svg>
                                                            </div>
                                                            <div class="product-stand-prev swiper-arrow">
                                                                <svg width="8" height="13" viewBox="0 0 8 13"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M8 6.50008L0 0L5.09091 6.50008L0 13L8 6.50008Z" />
                                                                </svg>
                                                            </div>
                                                        </div>
                                                        <div class="swiper product-img-slider">
                                                            <div class="swiper-wrapper">
                                                                <div class="swiper-slide">
                                                                    <img src="assets/img/home6/product-img-03.png"
                                                                        alt="image">
                                                                </div>
                                                                <div class="swiper-slide">
                                                                    <img src="assets/img/home6/product-img-03.png"
                                                                        alt="image">
                                                                </div>
                                                                <div class="swiper-slide">
                                                                    <img src="assets/img/home6/product-img-03.png"
                                                                        alt="image">
                                                                </div>
                                                                <div class="swiper-slide">
                                                                    <img src="assets/img/home6/product-img-03.png"
                                                                        alt="image">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-content">
                                                        <div class="location">
                                                            <a href="#"><i class="bi bi-geo-alt"></i> Canada
                                                                City</a>
                                                        </div>
                                                        <h6><a href="car-deatils.html">Ferrari 458 Italia-2023</a></h6>
                                                        <ul class="features">
                                                            <li>
                                                                <img src="assets/img/home4/icon/miles.svg" alt>
                                                                2500 miles
                                                            </li>
                                                            <li>
                                                                <img src="assets/img/home4/icon/fuel.svg" alt>
                                                                Petrol + Gas
                                                            </li>
                                                            <li>
                                                                <img src="assets/img/home4/icon/electric.svg" alt>
                                                                Electric
                                                            </li>
                                                        </ul>
                                                        <div class="button-and-price">
                                                            <a class="primary-btn7" href="car-deatils.html">View
                                                                Details</a>
                                                            <div class="price-area">
                                                                <span>Great Price</span>
                                                                <h6>$4,564.00</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="product-card4 style-3">
                                                    <div class="product-img">
                                                        <a href="#" class="fav">
                                                            <svg width="14" height="13" viewBox="0 0 14 14"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M7.00012 2.40453L6.37273 1.75966C4.90006 0.245917 2.19972 0.76829 1.22495 2.67141C0.767306 3.56653 0.664053 4.8589 1.4997 6.50827C2.30473 8.09639 3.97953 9.99864 7.00012 12.0706C10.0207 9.99864 11.6946 8.09639 12.5005 6.50827C13.3362 4.85803 13.2338 3.56653 12.7753 2.67141C11.8005 0.76829 9.10019 0.245042 7.62752 1.75879L7.00012 2.40453ZM7.00012 13.125C-6.41666 4.25953 2.86912 -2.65995 6.84612 1.00016C6.89862 1.04829 6.95024 1.09816 7.00012 1.14979C7.04949 1.09821 7.10087 1.04859 7.15413 1.00104C11.1302 -2.6617 20.4169 4.25865 7.00012 13.125Z">
                                                                </path>
                                                            </svg>
                                                        </a>
                                                        <div class="slider-btn-group">
                                                            <div class="product-stand-next swiper-arrow">
                                                                <svg width="8" height="13" viewBox="0 0 8 13"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M0 6.50008L8 0L2.90909 6.50008L8 13L0 6.50008Z" />
                                                                </svg>
                                                            </div>
                                                            <div class="product-stand-prev swiper-arrow">
                                                                <svg width="8" height="13" viewBox="0 0 8 13"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M8 6.50008L0 0L5.09091 6.50008L0 13L8 6.50008Z" />
                                                                </svg>
                                                            </div>
                                                        </div>
                                                        <div class="swiper product-img-slider">
                                                            <div class="swiper-wrapper">
                                                                <div class="swiper-slide">
                                                                    <img src="assets/img/home6/product-img-04.png"
                                                                        alt="image">
                                                                </div>
                                                                <div class="swiper-slide">
                                                                    <img src="assets/img/home6/product-img-04.png"
                                                                        alt="image">
                                                                </div>
                                                                <div class="swiper-slide">
                                                                    <img src="assets/img/home6/product-img-04.png"
                                                                        alt="image">
                                                                </div>
                                                                <div class="swiper-slide">
                                                                    <img src="assets/img/home6/product-img-04.png"
                                                                        alt="image">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-content">
                                                        <div class="location">
                                                            <a href="#"><i class="bi bi-geo-alt"></i> Sydne
                                                                City</a>
                                                        </div>
                                                        <h6><a href="car-deatils.html">BMW 3 Series-2023</a></h6>
                                                        <ul class="features">
                                                            <li>
                                                                <img src="assets/img/home4/icon/miles.svg" alt>
                                                                2500 miles
                                                            </li>
                                                            <li>
                                                                <img src="assets/img/home4/icon/fuel.svg" alt>
                                                                Petrol + Gas
                                                            </li>
                                                            <li>
                                                                <img src="assets/img/home4/icon/electric.svg" alt>
                                                                Electric
                                                            </li>
                                                        </ul>
                                                        <div class="button-and-price">
                                                            <a class="primary-btn7" href="car-deatils.html">View
                                                                Details</a>
                                                            <div class="price-area">
                                                                <span>Excellent Price</span>
                                                                <h6>$21,564.00</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="product-card4 style-3">
                                                    <div class="product-img">
                                                        <a href="#" class="fav">
                                                            <svg width="14" height="13" viewBox="0 0 14 14"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M7.00012 2.40453L6.37273 1.75966C4.90006 0.245917 2.19972 0.76829 1.22495 2.67141C0.767306 3.56653 0.664053 4.8589 1.4997 6.50827C2.30473 8.09639 3.97953 9.99864 7.00012 12.0706C10.0207 9.99864 11.6946 8.09639 12.5005 6.50827C13.3362 4.85803 13.2338 3.56653 12.7753 2.67141C11.8005 0.76829 9.10019 0.245042 7.62752 1.75879L7.00012 2.40453ZM7.00012 13.125C-6.41666 4.25953 2.86912 -2.65995 6.84612 1.00016C6.89862 1.04829 6.95024 1.09816 7.00012 1.14979C7.04949 1.09821 7.10087 1.04859 7.15413 1.00104C11.1302 -2.6617 20.4169 4.25865 7.00012 13.125Z">
                                                                </path>
                                                            </svg>
                                                        </a>
                                                        <div class="slider-btn-group">
                                                            <div class="product-stand-next swiper-arrow">
                                                                <svg width="8" height="13" viewBox="0 0 8 13"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M0 6.50008L8 0L2.90909 6.50008L8 13L0 6.50008Z" />
                                                                </svg>
                                                            </div>
                                                            <div class="product-stand-prev swiper-arrow">
                                                                <svg width="8" height="13" viewBox="0 0 8 13"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M8 6.50008L0 0L5.09091 6.50008L0 13L8 6.50008Z" />
                                                                </svg>
                                                            </div>
                                                        </div>
                                                        <div class="swiper product-img-slider">
                                                            <div class="swiper-wrapper">
                                                                <div class="swiper-slide">
                                                                    <img src="assets/img/home6/product-img-05.png"
                                                                        alt="image">
                                                                </div>
                                                                <div class="swiper-slide">
                                                                    <img src="assets/img/home6/product-img-05.png"
                                                                        alt="image">
                                                                </div>
                                                                <div class="swiper-slide">
                                                                    <img src="assets/img/home6/product-img-05.png"
                                                                        alt="image">
                                                                </div>
                                                                <div class="swiper-slide">
                                                                    <img src="assets/img/home6/product-img-05.png"
                                                                        alt="image">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-content">
                                                        <div class="location">
                                                            <a href="#"><i class="bi bi-geo-alt"></i> New
                                                                Delhi</a>
                                                        </div>
                                                        <h6><a href="car-deatils.html">Hyundai Sonata-2022</a></h6>
                                                        <ul class="features">
                                                            <li>
                                                                <img src="assets/img/home4/icon/miles.svg" alt>
                                                                2500 miles
                                                            </li>
                                                            <li>
                                                                <img src="assets/img/home4/icon/fuel.svg" alt>
                                                                Petrol + Gas
                                                            </li>
                                                            <li>
                                                                <img src="assets/img/home4/icon/electric.svg" alt>
                                                                Electric
                                                            </li>
                                                        </ul>
                                                        <div class="button-and-price">
                                                            <a class="primary-btn7" href="car-deatils.html">View
                                                                Details</a>
                                                            <div class="price-area">
                                                                <span>Fair Price</span>
                                                                <h6>$11,564.00</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="product-card4 style-3">
                                                    <div class="product-img">
                                                        <a href="#" class="fav">
                                                            <svg width="14" height="13" viewBox="0 0 14 14"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M7.00012 2.40453L6.37273 1.75966C4.90006 0.245917 2.19972 0.76829 1.22495 2.67141C0.767306 3.56653 0.664053 4.8589 1.4997 6.50827C2.30473 8.09639 3.97953 9.99864 7.00012 12.0706C10.0207 9.99864 11.6946 8.09639 12.5005 6.50827C13.3362 4.85803 13.2338 3.56653 12.7753 2.67141C11.8005 0.76829 9.10019 0.245042 7.62752 1.75879L7.00012 2.40453ZM7.00012 13.125C-6.41666 4.25953 2.86912 -2.65995 6.84612 1.00016C6.89862 1.04829 6.95024 1.09816 7.00012 1.14979C7.04949 1.09821 7.10087 1.04859 7.15413 1.00104C11.1302 -2.6617 20.4169 4.25865 7.00012 13.125Z">
                                                                </path>
                                                            </svg>
                                                        </a>
                                                        <div class="slider-btn-group">
                                                            <div class="product-stand-next swiper-arrow">
                                                                <svg width="8" height="13" viewBox="0 0 8 13"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M0 6.50008L8 0L2.90909 6.50008L8 13L0 6.50008Z" />
                                                                </svg>
                                                            </div>
                                                            <div class="product-stand-prev swiper-arrow">
                                                                <svg width="8" height="13" viewBox="0 0 8 13"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M8 6.50008L0 0L5.09091 6.50008L0 13L8 6.50008Z" />
                                                                </svg>
                                                            </div>
                                                        </div>
                                                        <div class="swiper product-img-slider">
                                                            <div class="swiper-wrapper">
                                                                <div class="swiper-slide">
                                                                    <img src="assets/img/home6/product-img-06.png"
                                                                        alt="image">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-content">
                                                        <div class="location">
                                                            <a href="#"><i class="bi bi-geo-alt"></i> Australia
                                                                City</a>
                                                        </div>
                                                        <h6><a href="car-deatils.html">Lamborghini Aventador-2023</a></h6>
                                                        <ul class="features">
                                                            <li>
                                                                <img src="assets/img/home4/icon/miles.svg" alt>
                                                                2500 miles
                                                            </li>
                                                            <li>
                                                                <img src="assets/img/home4/icon/fuel.svg" alt>
                                                                Petrol + Gas
                                                            </li>
                                                            <li>
                                                                <img src="assets/img/home4/icon/electric.svg" alt>
                                                                Electric
                                                            </li>
                                                        </ul>
                                                        <div class="button-and-price">
                                                            <a class="primary-btn7" href="car-deatils.html">View
                                                                Details</a>
                                                            <div class="price-area">
                                                                <span>Great Price</span>
                                                                <h6>$31,564.00</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="latest2" role="tabpanel" aria-labelledby="latest2-tab">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="swiper home6-top-use-car-slider">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <div class="product-card4 style-3">
                                                    <div class="product-img">
                                                        <a href="#" class="fav">
                                                            <svg width="14" height="13" viewBox="0 0 14 14"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M7.00012 2.40453L6.37273 1.75966C4.90006 0.245917 2.19972 0.76829 1.22495 2.67141C0.767306 3.56653 0.664053 4.8589 1.4997 6.50827C2.30473 8.09639 3.97953 9.99864 7.00012 12.0706C10.0207 9.99864 11.6946 8.09639 12.5005 6.50827C13.3362 4.85803 13.2338 3.56653 12.7753 2.67141C11.8005 0.76829 9.10019 0.245042 7.62752 1.75879L7.00012 2.40453ZM7.00012 13.125C-6.41666 4.25953 2.86912 -2.65995 6.84612 1.00016C6.89862 1.04829 6.95024 1.09816 7.00012 1.14979C7.04949 1.09821 7.10087 1.04859 7.15413 1.00104C11.1302 -2.6617 20.4169 4.25865 7.00012 13.125Z">
                                                                </path>
                                                            </svg>
                                                        </a>
                                                        <div class="slider-btn-group">
                                                            <div class="product-stand-next swiper-arrow">
                                                                <svg width="8" height="13" viewBox="0 0 8 13"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M0 6.50008L8 0L2.90909 6.50008L8 13L0 6.50008Z" />
                                                                </svg>
                                                            </div>
                                                            <div class="product-stand-prev swiper-arrow">
                                                                <svg width="8" height="13" viewBox="0 0 8 13"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M8 6.50008L0 0L5.09091 6.50008L0 13L8 6.50008Z" />
                                                                </svg>
                                                            </div>
                                                        </div>
                                                        <div class="swiper product-img-slider">
                                                            <div class="swiper-wrapper">
                                                                <div class="swiper-slide">
                                                                    <img src="assets/img/home6/product-img-01.png"
                                                                        alt="image">
                                                                </div>
                                                                <div class="swiper-slide">
                                                                    <img src="assets/img/home6/product-img-01.png"
                                                                        alt="image">
                                                                </div>
                                                                <div class="swiper-slide">
                                                                    <img src="assets/img/home6/product-img-01.png"
                                                                        alt="image">
                                                                </div>
                                                                <div class="swiper-slide">
                                                                    <img src="assets/img/home6/product-img-01.png"
                                                                        alt="image">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-content">
                                                        <div class="location">
                                                            <a href="#"><i class="bi bi-geo-alt"></i> Sydne
                                                                City</a>
                                                        </div>
                                                        <h6><a href="car-deatils.html">Tesla Model S-2023</a></h6>
                                                        <ul class="features">
                                                            <li>
                                                                <img src="assets/img/home4/icon/miles.svg" alt>
                                                                2500 miles
                                                            </li>
                                                            <li>
                                                                <img src="assets/img/home4/icon/fuel.svg" alt>
                                                                Petrol + Gas
                                                            </li>
                                                            <li>
                                                                <img src="assets/img/home4/icon/electric.svg" alt>
                                                                Electric
                                                            </li>
                                                        </ul>
                                                        <div class="button-and-price">
                                                            <a class="primary-btn7" href="car-deatils.html">View
                                                                Details</a>
                                                            <div class="price-area">
                                                                <span>Great Price</span>
                                                                <h6>$4,564.00</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="product-card4 style-3">
                                                    <div class="product-img">
                                                        <a href="#" class="fav">
                                                            <svg width="14" height="13" viewBox="0 0 14 14"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M7.00012 2.40453L6.37273 1.75966C4.90006 0.245917 2.19972 0.76829 1.22495 2.67141C0.767306 3.56653 0.664053 4.8589 1.4997 6.50827C2.30473 8.09639 3.97953 9.99864 7.00012 12.0706C10.0207 9.99864 11.6946 8.09639 12.5005 6.50827C13.3362 4.85803 13.2338 3.56653 12.7753 2.67141C11.8005 0.76829 9.10019 0.245042 7.62752 1.75879L7.00012 2.40453ZM7.00012 13.125C-6.41666 4.25953 2.86912 -2.65995 6.84612 1.00016C6.89862 1.04829 6.95024 1.09816 7.00012 1.14979C7.04949 1.09821 7.10087 1.04859 7.15413 1.00104C11.1302 -2.6617 20.4169 4.25865 7.00012 13.125Z">
                                                                </path>
                                                            </svg>
                                                        </a>
                                                        <div class="slider-btn-group">
                                                            <div class="product-stand-next swiper-arrow">
                                                                <svg width="8" height="13" viewBox="0 0 8 13"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M0 6.50008L8 0L2.90909 6.50008L8 13L0 6.50008Z" />
                                                                </svg>
                                                            </div>
                                                            <div class="product-stand-prev swiper-arrow">
                                                                <svg width="8" height="13" viewBox="0 0 8 13"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M8 6.50008L0 0L5.09091 6.50008L0 13L8 6.50008Z" />
                                                                </svg>
                                                            </div>
                                                        </div>
                                                        <div class="swiper product-img-slider">
                                                            <div class="swiper-wrapper">
                                                                <div class="swiper-slide">
                                                                    <img src="assets/img/home6/product-img-02.png"
                                                                        alt="image">
                                                                </div>
                                                                <div class="swiper-slide">
                                                                    <img src="assets/img/home6/product-img-02.png"
                                                                        alt="image">
                                                                </div>
                                                                <div class="swiper-slide">
                                                                    <img src="assets/img/home6/product-img-02.png"
                                                                        alt="image">
                                                                </div>
                                                                <div class="swiper-slide">
                                                                    <img src="assets/img/home6/product-img-02.png"
                                                                        alt="image">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-content">
                                                        <div class="location">
                                                            <a href="#"><i class="bi bi-geo-alt"></i> Panama
                                                                City</a>
                                                        </div>
                                                        <h6><a href="car-deatils.html">Mercedes-Benz Class-2023</a></h6>
                                                        <ul class="features">
                                                            <li>
                                                                <img src="assets/img/home4/icon/miles.svg" alt>
                                                                7800 miles
                                                            </li>
                                                            <li>
                                                                <img src="assets/img/home4/icon/fuel.svg" alt>
                                                                Petrol + Gas
                                                            </li>
                                                            <li>
                                                                <img src="assets/img/home4/icon/electric.svg" alt>
                                                                Electric
                                                            </li>
                                                        </ul>
                                                        <div class="button-and-price">
                                                            <a class="primary-btn7" href="car-deatils.html">View
                                                                Details</a>
                                                            <div class="price-area">
                                                                <span>Excellent Price</span>
                                                                <h6>$33,564.00</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="product-card4 style-3">
                                                    <div class="product-img">
                                                        <a href="#" class="fav">
                                                            <svg width="14" height="13" viewBox="0 0 14 14"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M7.00012 2.40453L6.37273 1.75966C4.90006 0.245917 2.19972 0.76829 1.22495 2.67141C0.767306 3.56653 0.664053 4.8589 1.4997 6.50827C2.30473 8.09639 3.97953 9.99864 7.00012 12.0706C10.0207 9.99864 11.6946 8.09639 12.5005 6.50827C13.3362 4.85803 13.2338 3.56653 12.7753 2.67141C11.8005 0.76829 9.10019 0.245042 7.62752 1.75879L7.00012 2.40453ZM7.00012 13.125C-6.41666 4.25953 2.86912 -2.65995 6.84612 1.00016C6.89862 1.04829 6.95024 1.09816 7.00012 1.14979C7.04949 1.09821 7.10087 1.04859 7.15413 1.00104C11.1302 -2.6617 20.4169 4.25865 7.00012 13.125Z">
                                                                </path>
                                                            </svg>
                                                        </a>
                                                        <div class="slider-btn-group">
                                                            <div class="product-stand-next swiper-arrow">
                                                                <svg width="8" height="13" viewBox="0 0 8 13"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M0 6.50008L8 0L2.90909 6.50008L8 13L0 6.50008Z" />
                                                                </svg>
                                                            </div>
                                                            <div class="product-stand-prev swiper-arrow">
                                                                <svg width="8" height="13" viewBox="0 0 8 13"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M8 6.50008L0 0L5.09091 6.50008L0 13L8 6.50008Z" />
                                                                </svg>
                                                            </div>
                                                        </div>
                                                        <div class="swiper product-img-slider">
                                                            <div class="swiper-wrapper">
                                                                <div class="swiper-slide">
                                                                    <img src="assets/img/home6/product-img-03.png"
                                                                        alt="image">
                                                                </div>
                                                                <div class="swiper-slide">
                                                                    <img src="assets/img/home6/product-img-03.png"
                                                                        alt="image">
                                                                </div>
                                                                <div class="swiper-slide">
                                                                    <img src="assets/img/home6/product-img-03.png"
                                                                        alt="image">
                                                                </div>
                                                                <div class="swiper-slide">
                                                                    <img src="assets/img/home6/product-img-03.png"
                                                                        alt="image">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-content">
                                                        <div class="location">
                                                            <a href="#"><i class="bi bi-geo-alt"></i> Canada
                                                                City</a>
                                                        </div>
                                                        <h6><a href="car-deatils.html">Ferrari 458 Italia-2023</a></h6>
                                                        <ul class="features">
                                                            <li>
                                                                <img src="assets/img/home4/icon/miles.svg" alt>
                                                                2500 miles
                                                            </li>
                                                            <li>
                                                                <img src="assets/img/home4/icon/fuel.svg" alt>
                                                                Petrol + Gas
                                                            </li>
                                                            <li>
                                                                <img src="assets/img/home4/icon/electric.svg" alt>
                                                                Electric
                                                            </li>
                                                        </ul>
                                                        <div class="button-and-price">
                                                            <a class="primary-btn7" href="car-deatils.html">View
                                                                Details</a>
                                                            <div class="price-area">
                                                                <span>Great Price</span>
                                                                <h6>$4,564.00</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="product-card4 style-3">
                                                    <div class="product-img">
                                                        <a href="#" class="fav">
                                                            <svg width="14" height="13" viewBox="0 0 14 14"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M7.00012 2.40453L6.37273 1.75966C4.90006 0.245917 2.19972 0.76829 1.22495 2.67141C0.767306 3.56653 0.664053 4.8589 1.4997 6.50827C2.30473 8.09639 3.97953 9.99864 7.00012 12.0706C10.0207 9.99864 11.6946 8.09639 12.5005 6.50827C13.3362 4.85803 13.2338 3.56653 12.7753 2.67141C11.8005 0.76829 9.10019 0.245042 7.62752 1.75879L7.00012 2.40453ZM7.00012 13.125C-6.41666 4.25953 2.86912 -2.65995 6.84612 1.00016C6.89862 1.04829 6.95024 1.09816 7.00012 1.14979C7.04949 1.09821 7.10087 1.04859 7.15413 1.00104C11.1302 -2.6617 20.4169 4.25865 7.00012 13.125Z">
                                                                </path>
                                                            </svg>
                                                        </a>
                                                        <div class="slider-btn-group">
                                                            <div class="product-stand-next swiper-arrow">
                                                                <svg width="8" height="13" viewBox="0 0 8 13"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M0 6.50008L8 0L2.90909 6.50008L8 13L0 6.50008Z" />
                                                                </svg>
                                                            </div>
                                                            <div class="product-stand-prev swiper-arrow">
                                                                <svg width="8" height="13" viewBox="0 0 8 13"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M8 6.50008L0 0L5.09091 6.50008L0 13L8 6.50008Z" />
                                                                </svg>
                                                            </div>
                                                        </div>
                                                        <div class="swiper product-img-slider">
                                                            <div class="swiper-wrapper">
                                                                <div class="swiper-slide">
                                                                    <img src="assets/img/home6/product-img-04.png"
                                                                        alt="image">
                                                                </div>
                                                                <div class="swiper-slide">
                                                                    <img src="assets/img/home6/product-img-04.png"
                                                                        alt="image">
                                                                </div>
                                                                <div class="swiper-slide">
                                                                    <img src="assets/img/home6/product-img-04.png"
                                                                        alt="image">
                                                                </div>
                                                                <div class="swiper-slide">
                                                                    <img src="assets/img/home6/product-img-04.png"
                                                                        alt="image">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-content">
                                                        <div class="location">
                                                            <a href="#"><i class="bi bi-geo-alt"></i> Sydne
                                                                City</a>
                                                        </div>
                                                        <h6><a href="car-deatils.html">BMW 3 Series-2023</a></h6>
                                                        <ul class="features">
                                                            <li>
                                                                <img src="assets/img/home4/icon/miles.svg" alt>
                                                                2500 miles
                                                            </li>
                                                            <li>
                                                                <img src="assets/img/home4/icon/fuel.svg" alt>
                                                                Petrol + Gas
                                                            </li>
                                                            <li>
                                                                <img src="assets/img/home4/icon/electric.svg" alt>
                                                                Electric
                                                            </li>
                                                        </ul>
                                                        <div class="button-and-price">
                                                            <a class="primary-btn7" href="car-deatils.html">View
                                                                Details</a>
                                                            <div class="price-area">
                                                                <span>Excellent Price</span>
                                                                <h6>$21,564.00</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="product-card4 style-3">
                                                    <div class="product-img">
                                                        <a href="#" class="fav">
                                                            <svg width="14" height="13" viewBox="0 0 14 14"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M7.00012 2.40453L6.37273 1.75966C4.90006 0.245917 2.19972 0.76829 1.22495 2.67141C0.767306 3.56653 0.664053 4.8589 1.4997 6.50827C2.30473 8.09639 3.97953 9.99864 7.00012 12.0706C10.0207 9.99864 11.6946 8.09639 12.5005 6.50827C13.3362 4.85803 13.2338 3.56653 12.7753 2.67141C11.8005 0.76829 9.10019 0.245042 7.62752 1.75879L7.00012 2.40453ZM7.00012 13.125C-6.41666 4.25953 2.86912 -2.65995 6.84612 1.00016C6.89862 1.04829 6.95024 1.09816 7.00012 1.14979C7.04949 1.09821 7.10087 1.04859 7.15413 1.00104C11.1302 -2.6617 20.4169 4.25865 7.00012 13.125Z">
                                                                </path>
                                                            </svg>
                                                        </a>
                                                        <div class="slider-btn-group">
                                                            <div class="product-stand-next swiper-arrow">
                                                                <svg width="8" height="13" viewBox="0 0 8 13"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M0 6.50008L8 0L2.90909 6.50008L8 13L0 6.50008Z" />
                                                                </svg>
                                                            </div>
                                                            <div class="product-stand-prev swiper-arrow">
                                                                <svg width="8" height="13" viewBox="0 0 8 13"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M8 6.50008L0 0L5.09091 6.50008L0 13L8 6.50008Z" />
                                                                </svg>
                                                            </div>
                                                        </div>
                                                        <div class="swiper product-img-slider">
                                                            <div class="swiper-wrapper">
                                                                <div class="swiper-slide">
                                                                    <img src="assets/img/home6/product-img-05.png"
                                                                        alt="image">
                                                                </div>
                                                                <div class="swiper-slide">
                                                                    <img src="assets/img/home6/product-img-05.png"
                                                                        alt="image">
                                                                </div>
                                                                <div class="swiper-slide">
                                                                    <img src="assets/img/home6/product-img-05.png"
                                                                        alt="image">
                                                                </div>
                                                                <div class="swiper-slide">
                                                                    <img src="assets/img/home6/product-img-05.png"
                                                                        alt="image">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-content">
                                                        <div class="location">
                                                            <a href="#"><i class="bi bi-geo-alt"></i> New
                                                                Delhi</a>
                                                        </div>
                                                        <h6><a href="car-deatils.html">Hyundai Sonata-2022</a></h6>
                                                        <ul class="features">
                                                            <li>
                                                                <img src="assets/img/home4/icon/miles.svg" alt>
                                                                2500 miles
                                                            </li>
                                                            <li>
                                                                <img src="assets/img/home4/icon/fuel.svg" alt>
                                                                Petrol + Gas
                                                            </li>
                                                            <li>
                                                                <img src="assets/img/home4/icon/electric.svg" alt>
                                                                Electric
                                                            </li>
                                                        </ul>
                                                        <div class="button-and-price">
                                                            <a class="primary-btn7" href="car-deatils.html">View
                                                                Details</a>
                                                            <div class="price-area">
                                                                <span>Fair Price</span>
                                                                <h6>$11,564.00</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="product-card4 style-3">
                                                    <div class="product-img">
                                                        <a href="#" class="fav">
                                                            <svg width="14" height="13" viewBox="0 0 14 14"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M7.00012 2.40453L6.37273 1.75966C4.90006 0.245917 2.19972 0.76829 1.22495 2.67141C0.767306 3.56653 0.664053 4.8589 1.4997 6.50827C2.30473 8.09639 3.97953 9.99864 7.00012 12.0706C10.0207 9.99864 11.6946 8.09639 12.5005 6.50827C13.3362 4.85803 13.2338 3.56653 12.7753 2.67141C11.8005 0.76829 9.10019 0.245042 7.62752 1.75879L7.00012 2.40453ZM7.00012 13.125C-6.41666 4.25953 2.86912 -2.65995 6.84612 1.00016C6.89862 1.04829 6.95024 1.09816 7.00012 1.14979C7.04949 1.09821 7.10087 1.04859 7.15413 1.00104C11.1302 -2.6617 20.4169 4.25865 7.00012 13.125Z">
                                                                </path>
                                                            </svg>
                                                        </a>
                                                        <div class="slider-btn-group">
                                                            <div class="product-stand-next swiper-arrow">
                                                                <svg width="8" height="13" viewBox="0 0 8 13"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M0 6.50008L8 0L2.90909 6.50008L8 13L0 6.50008Z" />
                                                                </svg>
                                                            </div>
                                                            <div class="product-stand-prev swiper-arrow">
                                                                <svg width="8" height="13" viewBox="0 0 8 13"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M8 6.50008L0 0L5.09091 6.50008L0 13L8 6.50008Z" />
                                                                </svg>
                                                            </div>
                                                        </div>
                                                        <div class="swiper product-img-slider">
                                                            <div class="swiper-wrapper">
                                                                <div class="swiper-slide">
                                                                    <img src="assets/img/home6/product-img-06.png"
                                                                        alt="image">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-content">
                                                        <div class="location">
                                                            <a href="#"><i class="bi bi-geo-alt"></i> Australia
                                                                City</a>
                                                        </div>
                                                        <h6><a href="car-deatils.html">Lamborghini Aventador-2023</a></h6>
                                                        <ul class="features">
                                                            <li>
                                                                <img src="assets/img/home4/icon/miles.svg" alt>
                                                                2500 miles
                                                            </li>
                                                            <li>
                                                                <img src="assets/img/home4/icon/fuel.svg" alt>
                                                                Petrol + Gas
                                                            </li>
                                                            <li>
                                                                <img src="assets/img/home4/icon/electric.svg" alt>
                                                                Electric
                                                            </li>
                                                        </ul>
                                                        <div class="button-and-price">
                                                            <a class="primary-btn7" href="car-deatils.html">View
                                                                Details</a>
                                                            <div class="price-area">
                                                                <span>Great Price</span>
                                                                <h6>$31,564.00</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="upcomming3" role="tabpanel" aria-labelledby="upcomming3-tab">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="swiper home6-top-use-car-slider">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <div class="product-card4 style-3">
                                                    <div class="product-img">
                                                        <a href="#" class="fav">
                                                            <svg width="14" height="13" viewBox="0 0 14 14"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M7.00012 2.40453L6.37273 1.75966C4.90006 0.245917 2.19972 0.76829 1.22495 2.67141C0.767306 3.56653 0.664053 4.8589 1.4997 6.50827C2.30473 8.09639 3.97953 9.99864 7.00012 12.0706C10.0207 9.99864 11.6946 8.09639 12.5005 6.50827C13.3362 4.85803 13.2338 3.56653 12.7753 2.67141C11.8005 0.76829 9.10019 0.245042 7.62752 1.75879L7.00012 2.40453ZM7.00012 13.125C-6.41666 4.25953 2.86912 -2.65995 6.84612 1.00016C6.89862 1.04829 6.95024 1.09816 7.00012 1.14979C7.04949 1.09821 7.10087 1.04859 7.15413 1.00104C11.1302 -2.6617 20.4169 4.25865 7.00012 13.125Z">
                                                                </path>
                                                            </svg>
                                                        </a>
                                                        <div class="slider-btn-group">
                                                            <div class="product-stand-next swiper-arrow">
                                                                <svg width="8" height="13" viewBox="0 0 8 13"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M0 6.50008L8 0L2.90909 6.50008L8 13L0 6.50008Z" />
                                                                </svg>
                                                            </div>
                                                            <div class="product-stand-prev swiper-arrow">
                                                                <svg width="8" height="13" viewBox="0 0 8 13"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M8 6.50008L0 0L5.09091 6.50008L0 13L8 6.50008Z" />
                                                                </svg>
                                                            </div>
                                                        </div>
                                                        <div class="swiper product-img-slider">
                                                            <div class="swiper-wrapper">
                                                                <div class="swiper-slide">
                                                                    <img src="assets/img/home6/product-img-01.png"
                                                                        alt="image">
                                                                </div>
                                                                <div class="swiper-slide">
                                                                    <img src="assets/img/home6/product-img-01.png"
                                                                        alt="image">
                                                                </div>
                                                                <div class="swiper-slide">
                                                                    <img src="assets/img/home6/product-img-01.png"
                                                                        alt="image">
                                                                </div>
                                                                <div class="swiper-slide">
                                                                    <img src="assets/img/home6/product-img-01.png"
                                                                        alt="image">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-content">
                                                        <div class="location">
                                                            <a href="#"><i class="bi bi-geo-alt"></i> Sydne
                                                                City</a>
                                                        </div>
                                                        <h6><a href="car-deatils.html">Tesla Model S-2023</a></h6>
                                                        <ul class="features">
                                                            <li>
                                                                <img src="assets/img/home4/icon/miles.svg" alt>
                                                                2500 miles
                                                            </li>
                                                            <li>
                                                                <img src="assets/img/home4/icon/fuel.svg" alt>
                                                                Petrol + Gas
                                                            </li>
                                                            <li>
                                                                <img src="assets/img/home4/icon/electric.svg" alt>
                                                                Electric
                                                            </li>
                                                        </ul>
                                                        <div class="button-and-price">
                                                            <a class="primary-btn7" href="car-deatils.html">View
                                                                Details</a>
                                                            <div class="price-area">
                                                                <span>Great Price</span>
                                                                <h6>$4,564.00</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="product-card4 style-3">
                                                    <div class="product-img">
                                                        <a href="#" class="fav">
                                                            <svg width="14" height="13" viewBox="0 0 14 14"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M7.00012 2.40453L6.37273 1.75966C4.90006 0.245917 2.19972 0.76829 1.22495 2.67141C0.767306 3.56653 0.664053 4.8589 1.4997 6.50827C2.30473 8.09639 3.97953 9.99864 7.00012 12.0706C10.0207 9.99864 11.6946 8.09639 12.5005 6.50827C13.3362 4.85803 13.2338 3.56653 12.7753 2.67141C11.8005 0.76829 9.10019 0.245042 7.62752 1.75879L7.00012 2.40453ZM7.00012 13.125C-6.41666 4.25953 2.86912 -2.65995 6.84612 1.00016C6.89862 1.04829 6.95024 1.09816 7.00012 1.14979C7.04949 1.09821 7.10087 1.04859 7.15413 1.00104C11.1302 -2.6617 20.4169 4.25865 7.00012 13.125Z">
                                                                </path>
                                                            </svg>
                                                        </a>
                                                        <div class="slider-btn-group">
                                                            <div class="product-stand-next swiper-arrow">
                                                                <svg width="8" height="13" viewBox="0 0 8 13"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M0 6.50008L8 0L2.90909 6.50008L8 13L0 6.50008Z" />
                                                                </svg>
                                                            </div>
                                                            <div class="product-stand-prev swiper-arrow">
                                                                <svg width="8" height="13" viewBox="0 0 8 13"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M8 6.50008L0 0L5.09091 6.50008L0 13L8 6.50008Z" />
                                                                </svg>
                                                            </div>
                                                        </div>
                                                        <div class="swiper product-img-slider">
                                                            <div class="swiper-wrapper">
                                                                <div class="swiper-slide">
                                                                    <img src="assets/img/home6/product-img-02.png"
                                                                        alt="image">
                                                                </div>
                                                                <div class="swiper-slide">
                                                                    <img src="assets/img/home6/product-img-02.png"
                                                                        alt="image">
                                                                </div>
                                                                <div class="swiper-slide">
                                                                    <img src="assets/img/home6/product-img-02.png"
                                                                        alt="image">
                                                                </div>
                                                                <div class="swiper-slide">
                                                                    <img src="assets/img/home6/product-img-02.png"
                                                                        alt="image">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-content">
                                                        <div class="location">
                                                            <a href="#"><i class="bi bi-geo-alt"></i> Panama
                                                                City</a>
                                                        </div>
                                                        <h6><a href="car-deatils.html">Mercedes-Benz Class-2023</a></h6>
                                                        <ul class="features">
                                                            <li>
                                                                <img src="assets/img/home4/icon/miles.svg" alt>
                                                                7800 miles
                                                            </li>
                                                            <li>
                                                                <img src="assets/img/home4/icon/fuel.svg" alt>
                                                                Petrol + Gas
                                                            </li>
                                                            <li>
                                                                <img src="assets/img/home4/icon/electric.svg" alt>
                                                                Electric
                                                            </li>
                                                        </ul>
                                                        <div class="button-and-price">
                                                            <a class="primary-btn7" href="car-deatils.html">View
                                                                Details</a>
                                                            <div class="price-area">
                                                                <span>Excellent Price</span>
                                                                <h6>$33,564.00</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="product-card4 style-3">
                                                    <div class="product-img">
                                                        <a href="#" class="fav">
                                                            <svg width="14" height="13" viewBox="0 0 14 14"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M7.00012 2.40453L6.37273 1.75966C4.90006 0.245917 2.19972 0.76829 1.22495 2.67141C0.767306 3.56653 0.664053 4.8589 1.4997 6.50827C2.30473 8.09639 3.97953 9.99864 7.00012 12.0706C10.0207 9.99864 11.6946 8.09639 12.5005 6.50827C13.3362 4.85803 13.2338 3.56653 12.7753 2.67141C11.8005 0.76829 9.10019 0.245042 7.62752 1.75879L7.00012 2.40453ZM7.00012 13.125C-6.41666 4.25953 2.86912 -2.65995 6.84612 1.00016C6.89862 1.04829 6.95024 1.09816 7.00012 1.14979C7.04949 1.09821 7.10087 1.04859 7.15413 1.00104C11.1302 -2.6617 20.4169 4.25865 7.00012 13.125Z">
                                                                </path>
                                                            </svg>
                                                        </a>
                                                        <div class="slider-btn-group">
                                                            <div class="product-stand-next swiper-arrow">
                                                                <svg width="8" height="13" viewBox="0 0 8 13"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M0 6.50008L8 0L2.90909 6.50008L8 13L0 6.50008Z" />
                                                                </svg>
                                                            </div>
                                                            <div class="product-stand-prev swiper-arrow">
                                                                <svg width="8" height="13" viewBox="0 0 8 13"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M8 6.50008L0 0L5.09091 6.50008L0 13L8 6.50008Z" />
                                                                </svg>
                                                            </div>
                                                        </div>
                                                        <div class="swiper product-img-slider">
                                                            <div class="swiper-wrapper">
                                                                <div class="swiper-slide">
                                                                    <img src="assets/img/home6/product-img-03.png"
                                                                        alt="image">
                                                                </div>
                                                                <div class="swiper-slide">
                                                                    <img src="assets/img/home6/product-img-03.png"
                                                                        alt="image">
                                                                </div>
                                                                <div class="swiper-slide">
                                                                    <img src="assets/img/home6/product-img-03.png"
                                                                        alt="image">
                                                                </div>
                                                                <div class="swiper-slide">
                                                                    <img src="assets/img/home6/product-img-03.png"
                                                                        alt="image">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-content">
                                                        <div class="location">
                                                            <a href="#"><i class="bi bi-geo-alt"></i> Canada
                                                                City</a>
                                                        </div>
                                                        <h6><a href="car-deatils.html">Ferrari 458 Italia-2023</a></h6>
                                                        <ul class="features">
                                                            <li>
                                                                <img src="assets/img/home4/icon/miles.svg" alt>
                                                                2500 miles
                                                            </li>
                                                            <li>
                                                                <img src="assets/img/home4/icon/fuel.svg" alt>
                                                                Petrol + Gas
                                                            </li>
                                                            <li>
                                                                <img src="assets/img/home4/icon/electric.svg" alt>
                                                                Electric
                                                            </li>
                                                        </ul>
                                                        <div class="button-and-price">
                                                            <a class="primary-btn7" href="car-deatils.html">View
                                                                Details</a>
                                                            <div class="price-area">
                                                                <span>Great Price</span>
                                                                <h6>$4,564.00</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="product-card4 style-3">
                                                    <div class="product-img">
                                                        <a href="#" class="fav">
                                                            <svg width="14" height="13" viewBox="0 0 14 14"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M7.00012 2.40453L6.37273 1.75966C4.90006 0.245917 2.19972 0.76829 1.22495 2.67141C0.767306 3.56653 0.664053 4.8589 1.4997 6.50827C2.30473 8.09639 3.97953 9.99864 7.00012 12.0706C10.0207 9.99864 11.6946 8.09639 12.5005 6.50827C13.3362 4.85803 13.2338 3.56653 12.7753 2.67141C11.8005 0.76829 9.10019 0.245042 7.62752 1.75879L7.00012 2.40453ZM7.00012 13.125C-6.41666 4.25953 2.86912 -2.65995 6.84612 1.00016C6.89862 1.04829 6.95024 1.09816 7.00012 1.14979C7.04949 1.09821 7.10087 1.04859 7.15413 1.00104C11.1302 -2.6617 20.4169 4.25865 7.00012 13.125Z">
                                                                </path>
                                                            </svg>
                                                        </a>
                                                        <div class="slider-btn-group">
                                                            <div class="product-stand-next swiper-arrow">
                                                                <svg width="8" height="13" viewBox="0 0 8 13"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M0 6.50008L8 0L2.90909 6.50008L8 13L0 6.50008Z" />
                                                                </svg>
                                                            </div>
                                                            <div class="product-stand-prev swiper-arrow">
                                                                <svg width="8" height="13" viewBox="0 0 8 13"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M8 6.50008L0 0L5.09091 6.50008L0 13L8 6.50008Z" />
                                                                </svg>
                                                            </div>
                                                        </div>
                                                        <div class="swiper product-img-slider">
                                                            <div class="swiper-wrapper">
                                                                <div class="swiper-slide">
                                                                    <img src="assets/img/home6/product-img-04.png"
                                                                        alt="image">
                                                                </div>
                                                                <div class="swiper-slide">
                                                                    <img src="assets/img/home6/product-img-04.png"
                                                                        alt="image">
                                                                </div>
                                                                <div class="swiper-slide">
                                                                    <img src="assets/img/home6/product-img-04.png"
                                                                        alt="image">
                                                                </div>
                                                                <div class="swiper-slide">
                                                                    <img src="assets/img/home6/product-img-04.png"
                                                                        alt="image">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-content">
                                                        <div class="location">
                                                            <a href="#"><i class="bi bi-geo-alt"></i> Sydne
                                                                City</a>
                                                        </div>
                                                        <h6><a href="car-deatils.html">BMW 3 Series-2023</a></h6>
                                                        <ul class="features">
                                                            <li>
                                                                <img src="assets/img/home4/icon/miles.svg" alt>
                                                                2500 miles
                                                            </li>
                                                            <li>
                                                                <img src="assets/img/home4/icon/fuel.svg" alt>
                                                                Petrol + Gas
                                                            </li>
                                                            <li>
                                                                <img src="assets/img/home4/icon/electric.svg" alt>
                                                                Electric
                                                            </li>
                                                        </ul>
                                                        <div class="button-and-price">
                                                            <a class="primary-btn7" href="car-deatils.html">View
                                                                Details</a>
                                                            <div class="price-area">
                                                                <span>Excellent Price</span>
                                                                <h6>$21,564.00</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="product-card4 style-3">
                                                    <div class="product-img">
                                                        <a href="#" class="fav">
                                                            <svg width="14" height="13" viewBox="0 0 14 14"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M7.00012 2.40453L6.37273 1.75966C4.90006 0.245917 2.19972 0.76829 1.22495 2.67141C0.767306 3.56653 0.664053 4.8589 1.4997 6.50827C2.30473 8.09639 3.97953 9.99864 7.00012 12.0706C10.0207 9.99864 11.6946 8.09639 12.5005 6.50827C13.3362 4.85803 13.2338 3.56653 12.7753 2.67141C11.8005 0.76829 9.10019 0.245042 7.62752 1.75879L7.00012 2.40453ZM7.00012 13.125C-6.41666 4.25953 2.86912 -2.65995 6.84612 1.00016C6.89862 1.04829 6.95024 1.09816 7.00012 1.14979C7.04949 1.09821 7.10087 1.04859 7.15413 1.00104C11.1302 -2.6617 20.4169 4.25865 7.00012 13.125Z">
                                                                </path>
                                                            </svg>
                                                        </a>
                                                        <div class="slider-btn-group">
                                                            <div class="product-stand-next swiper-arrow">
                                                                <svg width="8" height="13" viewBox="0 0 8 13"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M0 6.50008L8 0L2.90909 6.50008L8 13L0 6.50008Z" />
                                                                </svg>
                                                            </div>
                                                            <div class="product-stand-prev swiper-arrow">
                                                                <svg width="8" height="13" viewBox="0 0 8 13"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M8 6.50008L0 0L5.09091 6.50008L0 13L8 6.50008Z" />
                                                                </svg>
                                                            </div>
                                                        </div>
                                                        <div class="swiper product-img-slider">
                                                            <div class="swiper-wrapper">
                                                                <div class="swiper-slide">
                                                                    <img src="assets/img/home6/product-img-05.png"
                                                                        alt="image">
                                                                </div>
                                                                <div class="swiper-slide">
                                                                    <img src="assets/img/home6/product-img-05.png"
                                                                        alt="image">
                                                                </div>
                                                                <div class="swiper-slide">
                                                                    <img src="assets/img/home6/product-img-05.png"
                                                                        alt="image">
                                                                </div>
                                                                <div class="swiper-slide">
                                                                    <img src="assets/img/home6/product-img-05.png"
                                                                        alt="image">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-content">
                                                        <div class="location">
                                                            <a href="#"><i class="bi bi-geo-alt"></i> New
                                                                Delhi</a>
                                                        </div>
                                                        <h6><a href="car-deatils.html">Hyundai Sonata-2022</a></h6>
                                                        <ul class="features">
                                                            <li>
                                                                <img src="assets/img/home4/icon/miles.svg" alt>
                                                                2500 miles
                                                            </li>
                                                            <li>
                                                                <img src="assets/img/home4/icon/fuel.svg" alt>
                                                                Petrol + Gas
                                                            </li>
                                                            <li>
                                                                <img src="assets/img/home4/icon/electric.svg" alt>
                                                                Electric
                                                            </li>
                                                        </ul>
                                                        <div class="button-and-price">
                                                            <a class="primary-btn7" href="car-deatils.html">View
                                                                Details</a>
                                                            <div class="price-area">
                                                                <span>Fair Price</span>
                                                                <h6>$11,564.00</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="product-card4 style-3">
                                                    <div class="product-img">
                                                        <a href="#" class="fav">
                                                            <svg width="14" height="13" viewBox="0 0 14 14"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M7.00012 2.40453L6.37273 1.75966C4.90006 0.245917 2.19972 0.76829 1.22495 2.67141C0.767306 3.56653 0.664053 4.8589 1.4997 6.50827C2.30473 8.09639 3.97953 9.99864 7.00012 12.0706C10.0207 9.99864 11.6946 8.09639 12.5005 6.50827C13.3362 4.85803 13.2338 3.56653 12.7753 2.67141C11.8005 0.76829 9.10019 0.245042 7.62752 1.75879L7.00012 2.40453ZM7.00012 13.125C-6.41666 4.25953 2.86912 -2.65995 6.84612 1.00016C6.89862 1.04829 6.95024 1.09816 7.00012 1.14979C7.04949 1.09821 7.10087 1.04859 7.15413 1.00104C11.1302 -2.6617 20.4169 4.25865 7.00012 13.125Z">
                                                                </path>
                                                            </svg>
                                                        </a>
                                                        <div class="slider-btn-group">
                                                            <div class="product-stand-next swiper-arrow">
                                                                <svg width="8" height="13" viewBox="0 0 8 13"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M0 6.50008L8 0L2.90909 6.50008L8 13L0 6.50008Z" />
                                                                </svg>
                                                            </div>
                                                            <div class="product-stand-prev swiper-arrow">
                                                                <svg width="8" height="13" viewBox="0 0 8 13"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M8 6.50008L0 0L5.09091 6.50008L0 13L8 6.50008Z" />
                                                                </svg>
                                                            </div>
                                                        </div>
                                                        <div class="swiper product-img-slider">
                                                            <div class="swiper-wrapper">
                                                                <div class="swiper-slide">
                                                                    <img src="assets/img/home6/product-img-06.png"
                                                                        alt="image">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-content">
                                                        <div class="location">
                                                            <a href="#"><i class="bi bi-geo-alt"></i> Australia
                                                                City</a>
                                                        </div>
                                                        <h6><a href="car-deatils.html">Lamborghini Aventador-2023</a></h6>
                                                        <ul class="features">
                                                            <li>
                                                                <img src="assets/img/home4/icon/miles.svg" alt>
                                                                2500 miles
                                                            </li>
                                                            <li>
                                                                <img src="assets/img/home4/icon/fuel.svg" alt>
                                                                Petrol + Gas
                                                            </li>
                                                            <li>
                                                                <img src="assets/img/home4/icon/electric.svg" alt>
                                                                Electric
                                                            </li>
                                                        </ul>
                                                        <div class="button-and-price">
                                                            <a class="primary-btn7" href="car-deatils.html">View
                                                                Details</a>
                                                            <div class="price-area">
                                                                <span>Great Price</span>
                                                                <h6>$31,564.00</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 -->

    <!-- <div class="compare-car-section two pt-90 pb-90 mb-100">
        <div class="modal compare-modal two fade" id="compareModal01" tabindex="-1"
            aria-labelledby="compareModal01Label" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="compareModal01Label">Comparision</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i
                                class="bi bi-x"></i></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="compare-top">
                                    <div class="single-car">
                                        <div class="car-img">
                                            <img src="assets/img/home1/compare-md-01.png" alt="car">
                                        </div>
                                        <div class="content text-center">
                                            <h6 class="title"><a href="#">Mercedes-Benz C-Class-2023</a></h6>
                                            <h6 class="price">$68, 219.000</h6>
                                        </div>
                                    </div>
                                    <div class="vs">
                                        <span>VS</span>
                                    </div>
                                    <div class="single-car">
                                        <div class="car-img">
                                            <img src="assets/img/home1/compare-md-02.png" alt="car">
                                        </div>
                                        <div class="content text-center">
                                            <h6 class="title"><a href="#">Jeep Grand Cherokee-2023</a></h6>
                                            <h6 class="price">$78, 729.000</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="compare-btm">
                                    <div class="table-wrapper">
                                        <table class="eg-table">
                                            <thead>
                                                <tr>
                                                    <th>SUV</th>
                                                    <th>TOYOTA</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><strong>Engine Speed:</strong> 34,563 cc</td>
                                                    <td><strong>Engine Speed:</strong> 35,533 cc</td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Body Type:</strong> Convertible</td>
                                                    <td><strong>Body Type:</strong> Hatchback</td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Max. Power:</strong> 140 kw 7000 rpm</td>
                                                    <td><strong>Max. Power:</strong> 142 kw 7000 rpm</td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Steering:</strong> Right</td>
                                                    <td><strong>Steering:</strong> Left</td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Engine Type:</strong> 1.5 L Gas Engine</td>
                                                    <td><strong>Engine Type:</strong> 1.55 L Petrol Engine</td>
                                                </tr>
                                                <tr>
                                                    <td><strong>No Of Cylinders:</strong> 04</td>
                                                    <td><strong>No Of Cylinders:</strong> 04</td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Transmission:</strong> Automatic</td>
                                                    <td><strong>Transmission:</strong> Manual</td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Fuel Type:</strong> Petrol</td>
                                                    <td><strong>Fuel Type:</strong> Gasoline</td>
                                                </tr>
                                                <tr>
                                                    <td><a class="primary-btn2" href="car-deatils.html">View Details</a>
                                                    </td>
                                                    <td><a class="primary-btn2" href="car-deatils.html">View Details</a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-xl container-fluid">
            <div class="row mb-60 wow fadeInUp" data-wow-delay="200ms">
                <div class="col-lg-12 d-flex align-items-end justify-content-between gap-3 flex-wrap">
                    <div class="section-title-2">
                        <h2>Comparing Car Brand</h2>
                        <p>Here are some of the featured cars in different categories</p>
                    </div>
                    <ul class="nav nav-tabs" id="myTab5" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="toyota-tab" data-bs-toggle="tab"
                                data-bs-target="#toyota" type="button" role="tab" aria-controls="toyota"
                                aria-selected="true">Toyota</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="mercedes-tab" data-bs-toggle="tab"
                                data-bs-target="#mercedes" type="button" role="tab" aria-controls="mercedes"
                                aria-selected="false">Mercedes</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="tesla-tab" data-bs-toggle="tab" data-bs-target="#tesla"
                                type="button" role="tab" aria-controls="tesla"
                                aria-selected="false">Tesla</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="mazda-tab" data-bs-toggle="tab" data-bs-target="#mazda"
                                type="button" role="tab" aria-controls="mazda"
                                aria-selected="false">Mazda</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="ferrari-tab" data-bs-toggle="tab" data-bs-target="#ferrari"
                                type="button" role="tab" aria-controls="ferrari"
                                aria-selected="false">Ferrari</button>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row wow fadeInUp" data-wow-delay="300ms">
                <div class="col-lg-12">
                    <div class="tab-content">
                        <div class="tab-pane active" id="toyota" role="tabpanel" aria-labelledby="toyota-tab">
                            <div class="row g-4 justify-content-center mb-30">
                                <div class="col-lg-4 col-sm-2">
                                    <div class="single-compare-card style-2">
                                        <div class="compare-top">
                                            <div class="single-car">
                                                <div class="car-img">
                                                    <img src="assets/img/home1/cc-merceds.png" alt="car">
                                                </div>
                                                <div class="content text-center">
                                                    <h6 class="title"><a href="car-deatils.html">Toyota 86</a></h6>
                                                    <h6 class="price">$68, 219.000</h6>
                                                </div>
                                            </div>
                                            <div class="vs">
                                                <span>VS</span>
                                            </div>
                                            <div class="single-car">
                                                <div class="car-img">
                                                    <img src="assets/img/home1/cc-bmw.png" alt="car">
                                                </div>
                                                <div class="content text-center">
                                                    <h6 class="title"><a href="car-deatils.html">Toyota Prius</a></h6>
                                                    <h6 class="price">$78, 729.000</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="compare-btm">
                                            <button type="button" class="primary-btn2" data-bs-toggle="modal"
                                                data-bs-target="#compareModal01">
                                                Comparing Car
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-2">
                                    <div class="single-compare-card style-2">
                                        <div class="compare-top">
                                            <div class="single-car">
                                                <div class="car-img">
                                                    <img src="assets/img/home1/cc-sucuki.png" alt="car">
                                                </div>
                                                <div class="content text-center">
                                                    <h6 class="title"><a href="car-deatils.html">Toyota 86</a></h6>
                                                    <h6 class="price">$70, 219.000</h6>
                                                </div>
                                            </div>
                                            <div class="vs">
                                                <span>VS</span>
                                            </div>
                                            <div class="single-car">
                                                <div class="car-img">
                                                    <img src="assets/img/home1/cc-tesla.png" alt="car">
                                                </div>
                                                <div class="content text-center">
                                                    <h6 class="title"><a href="car-deatils.html">Toyota Prius</a></h6>
                                                    <h6 class="price">$78, 729.000</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="compare-btm">
                                            <button type="button" class="primary-btn2" data-bs-toggle="modal"
                                                data-bs-target="#compareModal01">
                                                Comparing Car
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-2">
                                    <div class="single-compare-card style-2">
                                        <div class="compare-top">
                                            <div class="single-car">
                                                <div class="car-img">
                                                    <img src="assets/img/home1/cc-sucuki.png" alt="car">
                                                </div>
                                                <div class="content text-center">
                                                    <h6 class="title"><a href="car-deatils.html">Toyota Prius</a></h6>
                                                    <h6 class="price">$90, 319.000</h6>
                                                </div>
                                            </div>
                                            <div class="vs">
                                                <span>VS</span>
                                            </div>
                                            <div class="single-car">
                                                <div class="car-img">
                                                    <img src="assets/img/home1/cc-toyota.png" alt="car">
                                                </div>
                                                <div class="content text-center">
                                                    <h6 class="title"><a href="car-deatils.html">Toyota 86</a></h6>
                                                    <h6 class="price">$93, 740.000</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="compare-btm">
                                            <button type="button" class="primary-btn2" data-bs-toggle="modal"
                                                data-bs-target="#compareModal01">
                                                Comparing Car
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="compare-btn-and-slider-btn">
                                <div class="see-all-btn">
                                    <a class="view-btn2" href="compare.html">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="15"
                                            viewBox="0 0 24 15">
                                            <path
                                                d="M3.25973 0C3.15692 0 3.05831 0.0413135 2.98561 0.114852C2.91291 0.18839 2.87207 0.28813 2.87207 0.392129C2.87207 0.496128 2.91291 0.595867 2.98561 0.669405C3.05831 0.742944 3.15692 0.784257 3.25973 0.784257H4.81038C4.91319 0.784257 5.0118 0.742944 5.0845 0.669405C5.1572 0.595867 5.19804 0.496128 5.19804 0.392129C5.19804 0.28813 5.1572 0.18839 5.0845 0.114852C5.0118 0.0413135 4.91319 0 4.81038 0H3.25973ZM5.77953 0C5.67672 0 5.57812 0.0413135 5.50542 0.114852C5.43271 0.18839 5.39187 0.28813 5.39187 0.392129C5.39187 0.496128 5.43271 0.595867 5.50542 0.669405C5.57812 0.742944 5.67672 0.784257 5.77953 0.784257H10.3346C10.4374 0.784257 10.536 0.742944 10.6087 0.669405C10.6814 0.595867 10.7222 0.496128 10.7222 0.392129C10.7222 0.28813 10.6814 0.18839 10.6087 0.114852C10.536 0.0413135 10.4374 0 10.3346 0H5.77953Z" />
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M4.22966 2.74658C4.12685 2.74658 4.02824 2.7879 3.95554 2.86143C3.88284 2.93497 3.842 3.03471 3.842 3.13871C3.842 3.24271 3.88284 3.34245 3.95554 3.41599C4.02824 3.48953 4.12685 3.53084 4.22966 3.53084H13.1459C14.6535 3.53084 15.5827 3.76847 16.3261 4.15021C16.958 4.4745 17.4677 4.90564 18.106 5.4456C18.238 5.55716 18.3754 5.67323 18.5206 5.79421L18.6106 5.8691L18.7265 5.88145C22.2658 6.25829 23.0627 7.4684 23.2251 8.08796V9.60883C23.2251 9.71283 23.1842 9.81257 23.1115 9.88611C23.0388 9.95965 22.9402 10.001 22.8374 10.001H21.8361C21.6516 8.8883 20.6948 8.04032 19.5423 8.04032C18.3898 8.04032 17.433 8.8883 17.2485 10.001H10.2062C10.0217 8.8883 9.06497 8.04032 7.91245 8.04032C6.75993 8.04032 5.80318 8.8883 5.61865 10.001H3.74508C3.64227 10.001 3.54367 10.0423 3.47097 10.1158C3.39826 10.1894 3.35742 10.2891 3.35742 10.3931C3.35742 10.4971 3.39826 10.5968 3.47097 10.6704C3.54367 10.7439 3.64227 10.7852 3.74508 10.7852H5.61865C5.80318 11.8979 6.75993 12.7459 7.91245 12.7459C9.06497 12.7459 10.0217 11.8979 10.2062 10.7852H17.2485C17.433 11.8979 18.3898 12.7459 19.5423 12.7459C20.6948 12.7459 21.6516 11.8979 21.8361 10.7852H22.8374C23.1459 10.7852 23.4417 10.6613 23.6598 10.4407C23.8779 10.22 24.0004 9.92083 24.0004 9.60883V7.99562L23.9905 7.95209C23.7436 6.87001 22.5796 5.52874 18.9244 5.11425C18.8222 5.02877 18.722 4.94368 18.6232 4.85996C17.9833 4.31784 17.3947 3.81905 16.6771 3.45065C15.7971 2.99911 14.7396 2.74658 13.1459 2.74658H4.22966ZM17.9917 10.3931C17.9917 9.9771 18.155 9.57814 18.4458 9.28398C18.7366 8.98983 19.131 8.82458 19.5423 8.82458C19.9536 8.82458 20.348 8.98983 20.6388 9.28398C20.9296 9.57814 21.0929 9.9771 21.0929 10.3931C21.0929 10.8091 20.9296 11.208 20.6388 11.5022C20.348 11.7964 19.9536 11.9616 19.5423 11.9616C19.131 11.9616 18.7366 11.7964 18.4458 11.5022C18.155 11.208 17.9917 10.8091 17.9917 10.3931ZM7.91245 8.82458C7.50119 8.82458 7.10678 8.98983 6.81597 9.28398C6.52517 9.57814 6.3618 9.9771 6.3618 10.3931C6.3618 10.8091 6.52517 11.208 6.81597 11.5022C7.10678 11.7964 7.50119 11.9616 7.91245 11.9616C8.3237 11.9616 8.71812 11.7964 9.00892 11.5022C9.29972 11.208 9.46309 10.8091 9.46309 10.3931C9.46309 9.9771 9.29972 9.57814 9.00892 9.28398C8.71812 8.98983 8.3237 8.82458 7.91245 8.82458Z" />
                                            <path
                                                d="M0 5.09867C0 4.99467 0.0408428 4.89493 0.113543 4.82139C0.186244 4.74786 0.284847 4.70654 0.387662 4.70654H4.74886C4.85167 4.70654 4.95027 4.74786 5.02297 4.82139C5.09567 4.89493 5.13652 4.99467 5.13652 5.09867C5.13652 5.20267 5.09567 5.30241 5.02297 5.37595C4.95027 5.44949 4.85167 5.4908 4.74886 5.4908H0.387662C0.284847 5.4908 0.186244 5.44949 0.113543 5.37595C0.0408428 5.30241 0 5.20267 0 5.09867ZM15.6836 5.60569C15.7563 5.67923 15.7971 5.77895 15.7971 5.88293C15.7971 5.98691 15.7563 6.08663 15.6836 6.16016L15.6532 6.19095C15.2897 6.55859 14.7968 6.76516 14.2828 6.76522H8.14089C8.03808 6.76522 7.93948 6.7239 7.86678 6.65037C7.79408 6.57683 7.75323 6.47709 7.75323 6.37309C7.75323 6.26909 7.79408 6.16935 7.86678 6.09581C7.93948 6.02227 8.03808 5.98096 8.14089 5.98096H14.2826C14.4354 5.98098 14.5866 5.95057 14.7277 5.89146C14.8688 5.83235 14.997 5.74571 15.105 5.63648L15.1355 5.60569C15.2082 5.53218 15.3068 5.49088 15.4096 5.49088C15.5123 5.49088 15.6109 5.53218 15.6836 5.60569ZM8.52856 14.6078C8.52856 14.5038 8.5694 14.4041 8.6421 14.3305C8.7148 14.257 8.8134 14.2157 8.91622 14.2157H10.5638C10.6666 14.2157 10.7652 14.257 10.8379 14.3305C10.9106 14.4041 10.9514 14.5038 10.9514 14.6078C10.9514 14.7118 10.9106 14.8115 10.8379 14.8851C10.7652 14.9586 10.6666 14.9999 10.5638 14.9999H8.91622C8.8134 14.9999 8.7148 14.9586 8.6421 14.8851C8.5694 14.8115 8.52856 14.7118 8.52856 14.6078ZM11.2422 14.6078C11.2422 14.5038 11.283 14.4041 11.3557 14.3305C11.4284 14.257 11.527 14.2157 11.6299 14.2157H15.991C16.0939 14.2157 16.1925 14.257 16.2652 14.3305C16.3379 14.4041 16.3787 14.5038 16.3787 14.6078C16.3787 14.7118 16.3379 14.8115 16.2652 14.8851C16.1925 14.9586 16.0939 14.9999 15.991 14.9999H11.6299C11.527 14.9999 11.4284 14.9586 11.3557 14.8851C11.283 14.8115 11.2422 14.7118 11.2422 14.6078Z" />
                                        </svg>
                                        See All Compare Car
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="mercedes" role="tabpanel" aria-labelledby="mercedes-tab">
                            <div class="row g-4 justify-content-center mb-30">
                                <div class="col-lg-4 col-sm-2">
                                    <div class="single-compare-card style-2">
                                        <div class="compare-top">
                                            <div class="single-car">
                                                <div class="car-img">
                                                    <img src="assets/img/home1/cc-merceds.png" alt="car">
                                                </div>
                                                <div class="content text-center">
                                                    <h6 class="title"><a href="car-deatils.html">E Class</a></h6>
                                                    <h6 class="price">$68, 219.000</h6>
                                                </div>
                                            </div>
                                            <div class="vs">
                                                <span>VS</span>
                                            </div>
                                            <div class="single-car">
                                                <div class="car-img">
                                                    <img src="assets/img/home1/cc-bmw.png" alt="car">
                                                </div>
                                                <div class="content text-center">
                                                    <h6 class="title"><a href="car-deatils.html">Glc</a></h6>
                                                    <h6 class="price">$78, 729.000</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="compare-btm">
                                            <button type="button" class="primary-btn2" data-bs-toggle="modal"
                                                data-bs-target="#compareModal01">
                                                Comparing Car
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-2">
                                    <div class="single-compare-card style-2">
                                        <div class="compare-top">
                                            <div class="single-car">
                                                <div class="car-img">
                                                    <img src="assets/img/home1/cc-sucuki.png" alt="car">
                                                </div>
                                                <div class="content text-center">
                                                    <h6 class="title"><a href="car-deatils.html">Gla</a></h6>
                                                    <h6 class="price">$70, 219.000</h6>
                                                </div>
                                            </div>
                                            <div class="vs">
                                                <span>VS</span>
                                            </div>
                                            <div class="single-car">
                                                <div class="car-img">
                                                    <img src="assets/img/home1/cc-tesla.png" alt="car">
                                                </div>
                                                <div class="content text-center">
                                                    <h6 class="title"><a href="car-deatils.html">A Class</a></h6>
                                                    <h6 class="price">$78, 729.000</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="compare-btm">
                                            <button type="button" class="primary-btn2" data-bs-toggle="modal"
                                                data-bs-target="#compareModal01">
                                                Comparing Car
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-2">
                                    <div class="single-compare-card style-2">
                                        <div class="compare-top">
                                            <div class="single-car">
                                                <div class="car-img">
                                                    <img src="assets/img/home1/cc-sucuki.png" alt="car">
                                                </div>
                                                <div class="content text-center">
                                                    <h6 class="title"><a href="car-deatils.html">A Class</a></h6>
                                                    <h6 class="price">$90, 319.000</h6>
                                                </div>
                                            </div>
                                            <div class="vs">
                                                <span>VS</span>
                                            </div>
                                            <div class="single-car">
                                                <div class="car-img">
                                                    <img src="assets/img/home1/cc-toyota.png" alt="car">
                                                </div>
                                                <div class="content text-center">
                                                    <h6 class="title"><a href="car-deatils.html">GLB</a></h6>
                                                    <h6 class="price">$93, 740.000</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="compare-btm">
                                            <button type="button" class="primary-btn2" data-bs-toggle="modal"
                                                data-bs-target="#compareModal01">
                                                Comparing Car
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="compare-btn-and-slider-btn">
                                <div class="see-all-btn">
                                    <a class="view-btn2" href="compare.html">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="15"
                                            viewBox="0 0 24 15">
                                            <path
                                                d="M3.25973 0C3.15692 0 3.05831 0.0413135 2.98561 0.114852C2.91291 0.18839 2.87207 0.28813 2.87207 0.392129C2.87207 0.496128 2.91291 0.595867 2.98561 0.669405C3.05831 0.742944 3.15692 0.784257 3.25973 0.784257H4.81038C4.91319 0.784257 5.0118 0.742944 5.0845 0.669405C5.1572 0.595867 5.19804 0.496128 5.19804 0.392129C5.19804 0.28813 5.1572 0.18839 5.0845 0.114852C5.0118 0.0413135 4.91319 0 4.81038 0H3.25973ZM5.77953 0C5.67672 0 5.57812 0.0413135 5.50542 0.114852C5.43271 0.18839 5.39187 0.28813 5.39187 0.392129C5.39187 0.496128 5.43271 0.595867 5.50542 0.669405C5.57812 0.742944 5.67672 0.784257 5.77953 0.784257H10.3346C10.4374 0.784257 10.536 0.742944 10.6087 0.669405C10.6814 0.595867 10.7222 0.496128 10.7222 0.392129C10.7222 0.28813 10.6814 0.18839 10.6087 0.114852C10.536 0.0413135 10.4374 0 10.3346 0H5.77953Z" />
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M4.22966 2.74658C4.12685 2.74658 4.02824 2.7879 3.95554 2.86143C3.88284 2.93497 3.842 3.03471 3.842 3.13871C3.842 3.24271 3.88284 3.34245 3.95554 3.41599C4.02824 3.48953 4.12685 3.53084 4.22966 3.53084H13.1459C14.6535 3.53084 15.5827 3.76847 16.3261 4.15021C16.958 4.4745 17.4677 4.90564 18.106 5.4456C18.238 5.55716 18.3754 5.67323 18.5206 5.79421L18.6106 5.8691L18.7265 5.88145C22.2658 6.25829 23.0627 7.4684 23.2251 8.08796V9.60883C23.2251 9.71283 23.1842 9.81257 23.1115 9.88611C23.0388 9.95965 22.9402 10.001 22.8374 10.001H21.8361C21.6516 8.8883 20.6948 8.04032 19.5423 8.04032C18.3898 8.04032 17.433 8.8883 17.2485 10.001H10.2062C10.0217 8.8883 9.06497 8.04032 7.91245 8.04032C6.75993 8.04032 5.80318 8.8883 5.61865 10.001H3.74508C3.64227 10.001 3.54367 10.0423 3.47097 10.1158C3.39826 10.1894 3.35742 10.2891 3.35742 10.3931C3.35742 10.4971 3.39826 10.5968 3.47097 10.6704C3.54367 10.7439 3.64227 10.7852 3.74508 10.7852H5.61865C5.80318 11.8979 6.75993 12.7459 7.91245 12.7459C9.06497 12.7459 10.0217 11.8979 10.2062 10.7852H17.2485C17.433 11.8979 18.3898 12.7459 19.5423 12.7459C20.6948 12.7459 21.6516 11.8979 21.8361 10.7852H22.8374C23.1459 10.7852 23.4417 10.6613 23.6598 10.4407C23.8779 10.22 24.0004 9.92083 24.0004 9.60883V7.99562L23.9905 7.95209C23.7436 6.87001 22.5796 5.52874 18.9244 5.11425C18.8222 5.02877 18.722 4.94368 18.6232 4.85996C17.9833 4.31784 17.3947 3.81905 16.6771 3.45065C15.7971 2.99911 14.7396 2.74658 13.1459 2.74658H4.22966ZM17.9917 10.3931C17.9917 9.9771 18.155 9.57814 18.4458 9.28398C18.7366 8.98983 19.131 8.82458 19.5423 8.82458C19.9536 8.82458 20.348 8.98983 20.6388 9.28398C20.9296 9.57814 21.0929 9.9771 21.0929 10.3931C21.0929 10.8091 20.9296 11.208 20.6388 11.5022C20.348 11.7964 19.9536 11.9616 19.5423 11.9616C19.131 11.9616 18.7366 11.7964 18.4458 11.5022C18.155 11.208 17.9917 10.8091 17.9917 10.3931ZM7.91245 8.82458C7.50119 8.82458 7.10678 8.98983 6.81597 9.28398C6.52517 9.57814 6.3618 9.9771 6.3618 10.3931C6.3618 10.8091 6.52517 11.208 6.81597 11.5022C7.10678 11.7964 7.50119 11.9616 7.91245 11.9616C8.3237 11.9616 8.71812 11.7964 9.00892 11.5022C9.29972 11.208 9.46309 10.8091 9.46309 10.3931C9.46309 9.9771 9.29972 9.57814 9.00892 9.28398C8.71812 8.98983 8.3237 8.82458 7.91245 8.82458Z" />
                                            <path
                                                d="M0 5.09867C0 4.99467 0.0408428 4.89493 0.113543 4.82139C0.186244 4.74786 0.284847 4.70654 0.387662 4.70654H4.74886C4.85167 4.70654 4.95027 4.74786 5.02297 4.82139C5.09567 4.89493 5.13652 4.99467 5.13652 5.09867C5.13652 5.20267 5.09567 5.30241 5.02297 5.37595C4.95027 5.44949 4.85167 5.4908 4.74886 5.4908H0.387662C0.284847 5.4908 0.186244 5.44949 0.113543 5.37595C0.0408428 5.30241 0 5.20267 0 5.09867ZM15.6836 5.60569C15.7563 5.67923 15.7971 5.77895 15.7971 5.88293C15.7971 5.98691 15.7563 6.08663 15.6836 6.16016L15.6532 6.19095C15.2897 6.55859 14.7968 6.76516 14.2828 6.76522H8.14089C8.03808 6.76522 7.93948 6.7239 7.86678 6.65037C7.79408 6.57683 7.75323 6.47709 7.75323 6.37309C7.75323 6.26909 7.79408 6.16935 7.86678 6.09581C7.93948 6.02227 8.03808 5.98096 8.14089 5.98096H14.2826C14.4354 5.98098 14.5866 5.95057 14.7277 5.89146C14.8688 5.83235 14.997 5.74571 15.105 5.63648L15.1355 5.60569C15.2082 5.53218 15.3068 5.49088 15.4096 5.49088C15.5123 5.49088 15.6109 5.53218 15.6836 5.60569ZM8.52856 14.6078C8.52856 14.5038 8.5694 14.4041 8.6421 14.3305C8.7148 14.257 8.8134 14.2157 8.91622 14.2157H10.5638C10.6666 14.2157 10.7652 14.257 10.8379 14.3305C10.9106 14.4041 10.9514 14.5038 10.9514 14.6078C10.9514 14.7118 10.9106 14.8115 10.8379 14.8851C10.7652 14.9586 10.6666 14.9999 10.5638 14.9999H8.91622C8.8134 14.9999 8.7148 14.9586 8.6421 14.8851C8.5694 14.8115 8.52856 14.7118 8.52856 14.6078ZM11.2422 14.6078C11.2422 14.5038 11.283 14.4041 11.3557 14.3305C11.4284 14.257 11.527 14.2157 11.6299 14.2157H15.991C16.0939 14.2157 16.1925 14.257 16.2652 14.3305C16.3379 14.4041 16.3787 14.5038 16.3787 14.6078C16.3787 14.7118 16.3379 14.8115 16.2652 14.8851C16.1925 14.9586 16.0939 14.9999 15.991 14.9999H11.6299C11.527 14.9999 11.4284 14.9586 11.3557 14.8851C11.283 14.8115 11.2422 14.7118 11.2422 14.6078Z" />
                                        </svg>
                                        See All Compare Car
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="tesla" role="tabpanel" aria-labelledby="tesla-tab">
                            <div class="row g-4 justify-content-center mb-30">
                                <div class="col-lg-4 col-sm-2">
                                    <div class="single-compare-card style-2">
                                        <div class="compare-top">
                                            <div class="single-car">
                                                <div class="car-img">
                                                    <img src="assets/img/home1/cc-merceds.png" alt="car">
                                                </div>
                                                <div class="content text-center">
                                                    <h6 class="title"><a href="car-deatils.html">Tesla Model S</a></h6>
                                                    <h6 class="price">$68, 219.000</h6>
                                                </div>
                                            </div>
                                            <div class="vs">
                                                <span>VS</span>
                                            </div>
                                            <div class="single-car">
                                                <div class="car-img">
                                                    <img src="assets/img/home1/cc-bmw.png" alt="car">
                                                </div>
                                                <div class="content text-center">
                                                    <h6 class="title"><a href="car-deatils.html">Tesla Model 3</a></h6>
                                                    <h6 class="price">$78, 729.000</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="compare-btm">
                                            <button type="button" class="primary-btn2" data-bs-toggle="modal"
                                                data-bs-target="#compareModal01">
                                                Comparing Car
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-2">
                                    <div class="single-compare-card style-2">
                                        <div class="compare-top">
                                            <div class="single-car">
                                                <div class="car-img">
                                                    <img src="assets/img/home1/cc-sucuki.png" alt="car">
                                                </div>
                                                <div class="content text-center">
                                                    <h6 class="title"><a href="car-deatils.html">Tesla Model X</a></h6>
                                                    <h6 class="price">$70, 219.000</h6>
                                                </div>
                                            </div>
                                            <div class="vs">
                                                <span>VS</span>
                                            </div>
                                            <div class="single-car">
                                                <div class="car-img">
                                                    <img src="assets/img/home1/cc-tesla.png" alt="car">
                                                </div>
                                                <div class="content text-center">
                                                    <h6 class="title"><a href="car-deatils.html">Tesla Model Y</a></h6>
                                                    <h6 class="price">$78, 729.000</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="compare-btm">
                                            <button type="button" class="primary-btn2" data-bs-toggle="modal"
                                                data-bs-target="#compareModal01">
                                                Comparing Car
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-2">
                                    <div class="single-compare-card style-2">
                                        <div class="compare-top">
                                            <div class="single-car">
                                                <div class="car-img">
                                                    <img src="assets/img/home1/cc-sucuki.png" alt="car">
                                                </div>
                                                <div class="content text-center">
                                                    <h6 class="title"><a href="car-deatils.html">Tesla Roadster</a>
                                                    </h6>
                                                    <h6 class="price">$90, 319.000</h6>
                                                </div>
                                            </div>
                                            <div class="vs">
                                                <span>VS</span>
                                            </div>
                                            <div class="single-car">
                                                <div class="car-img">
                                                    <img src="assets/img/home1/cc-toyota.png" alt="car">
                                                </div>
                                                <div class="content text-center">
                                                    <h6 class="title"><a href="car-deatils.html">Tesla Cybertruck</a>
                                                    </h6>
                                                    <h6 class="price">$93, 740.000</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="compare-btm">
                                            <button type="button" class="primary-btn2" data-bs-toggle="modal"
                                                data-bs-target="#compareModal01">
                                                Comparing Car
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="compare-btn-and-slider-btn">
                                <div class="see-all-btn">
                                    <a class="view-btn2" href="compare.html">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="15"
                                            viewBox="0 0 24 15">
                                            <path
                                                d="M3.25973 0C3.15692 0 3.05831 0.0413135 2.98561 0.114852C2.91291 0.18839 2.87207 0.28813 2.87207 0.392129C2.87207 0.496128 2.91291 0.595867 2.98561 0.669405C3.05831 0.742944 3.15692 0.784257 3.25973 0.784257H4.81038C4.91319 0.784257 5.0118 0.742944 5.0845 0.669405C5.1572 0.595867 5.19804 0.496128 5.19804 0.392129C5.19804 0.28813 5.1572 0.18839 5.0845 0.114852C5.0118 0.0413135 4.91319 0 4.81038 0H3.25973ZM5.77953 0C5.67672 0 5.57812 0.0413135 5.50542 0.114852C5.43271 0.18839 5.39187 0.28813 5.39187 0.392129C5.39187 0.496128 5.43271 0.595867 5.50542 0.669405C5.57812 0.742944 5.67672 0.784257 5.77953 0.784257H10.3346C10.4374 0.784257 10.536 0.742944 10.6087 0.669405C10.6814 0.595867 10.7222 0.496128 10.7222 0.392129C10.7222 0.28813 10.6814 0.18839 10.6087 0.114852C10.536 0.0413135 10.4374 0 10.3346 0H5.77953Z" />
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M4.22966 2.74658C4.12685 2.74658 4.02824 2.7879 3.95554 2.86143C3.88284 2.93497 3.842 3.03471 3.842 3.13871C3.842 3.24271 3.88284 3.34245 3.95554 3.41599C4.02824 3.48953 4.12685 3.53084 4.22966 3.53084H13.1459C14.6535 3.53084 15.5827 3.76847 16.3261 4.15021C16.958 4.4745 17.4677 4.90564 18.106 5.4456C18.238 5.55716 18.3754 5.67323 18.5206 5.79421L18.6106 5.8691L18.7265 5.88145C22.2658 6.25829 23.0627 7.4684 23.2251 8.08796V9.60883C23.2251 9.71283 23.1842 9.81257 23.1115 9.88611C23.0388 9.95965 22.9402 10.001 22.8374 10.001H21.8361C21.6516 8.8883 20.6948 8.04032 19.5423 8.04032C18.3898 8.04032 17.433 8.8883 17.2485 10.001H10.2062C10.0217 8.8883 9.06497 8.04032 7.91245 8.04032C6.75993 8.04032 5.80318 8.8883 5.61865 10.001H3.74508C3.64227 10.001 3.54367 10.0423 3.47097 10.1158C3.39826 10.1894 3.35742 10.2891 3.35742 10.3931C3.35742 10.4971 3.39826 10.5968 3.47097 10.6704C3.54367 10.7439 3.64227 10.7852 3.74508 10.7852H5.61865C5.80318 11.8979 6.75993 12.7459 7.91245 12.7459C9.06497 12.7459 10.0217 11.8979 10.2062 10.7852H17.2485C17.433 11.8979 18.3898 12.7459 19.5423 12.7459C20.6948 12.7459 21.6516 11.8979 21.8361 10.7852H22.8374C23.1459 10.7852 23.4417 10.6613 23.6598 10.4407C23.8779 10.22 24.0004 9.92083 24.0004 9.60883V7.99562L23.9905 7.95209C23.7436 6.87001 22.5796 5.52874 18.9244 5.11425C18.8222 5.02877 18.722 4.94368 18.6232 4.85996C17.9833 4.31784 17.3947 3.81905 16.6771 3.45065C15.7971 2.99911 14.7396 2.74658 13.1459 2.74658H4.22966ZM17.9917 10.3931C17.9917 9.9771 18.155 9.57814 18.4458 9.28398C18.7366 8.98983 19.131 8.82458 19.5423 8.82458C19.9536 8.82458 20.348 8.98983 20.6388 9.28398C20.9296 9.57814 21.0929 9.9771 21.0929 10.3931C21.0929 10.8091 20.9296 11.208 20.6388 11.5022C20.348 11.7964 19.9536 11.9616 19.5423 11.9616C19.131 11.9616 18.7366 11.7964 18.4458 11.5022C18.155 11.208 17.9917 10.8091 17.9917 10.3931ZM7.91245 8.82458C7.50119 8.82458 7.10678 8.98983 6.81597 9.28398C6.52517 9.57814 6.3618 9.9771 6.3618 10.3931C6.3618 10.8091 6.52517 11.208 6.81597 11.5022C7.10678 11.7964 7.50119 11.9616 7.91245 11.9616C8.3237 11.9616 8.71812 11.7964 9.00892 11.5022C9.29972 11.208 9.46309 10.8091 9.46309 10.3931C9.46309 9.9771 9.29972 9.57814 9.00892 9.28398C8.71812 8.98983 8.3237 8.82458 7.91245 8.82458Z" />
                                            <path
                                                d="M0 5.09867C0 4.99467 0.0408428 4.89493 0.113543 4.82139C0.186244 4.74786 0.284847 4.70654 0.387662 4.70654H4.74886C4.85167 4.70654 4.95027 4.74786 5.02297 4.82139C5.09567 4.89493 5.13652 4.99467 5.13652 5.09867C5.13652 5.20267 5.09567 5.30241 5.02297 5.37595C4.95027 5.44949 4.85167 5.4908 4.74886 5.4908H0.387662C0.284847 5.4908 0.186244 5.44949 0.113543 5.37595C0.0408428 5.30241 0 5.20267 0 5.09867ZM15.6836 5.60569C15.7563 5.67923 15.7971 5.77895 15.7971 5.88293C15.7971 5.98691 15.7563 6.08663 15.6836 6.16016L15.6532 6.19095C15.2897 6.55859 14.7968 6.76516 14.2828 6.76522H8.14089C8.03808 6.76522 7.93948 6.7239 7.86678 6.65037C7.79408 6.57683 7.75323 6.47709 7.75323 6.37309C7.75323 6.26909 7.79408 6.16935 7.86678 6.09581C7.93948 6.02227 8.03808 5.98096 8.14089 5.98096H14.2826C14.4354 5.98098 14.5866 5.95057 14.7277 5.89146C14.8688 5.83235 14.997 5.74571 15.105 5.63648L15.1355 5.60569C15.2082 5.53218 15.3068 5.49088 15.4096 5.49088C15.5123 5.49088 15.6109 5.53218 15.6836 5.60569ZM8.52856 14.6078C8.52856 14.5038 8.5694 14.4041 8.6421 14.3305C8.7148 14.257 8.8134 14.2157 8.91622 14.2157H10.5638C10.6666 14.2157 10.7652 14.257 10.8379 14.3305C10.9106 14.4041 10.9514 14.5038 10.9514 14.6078C10.9514 14.7118 10.9106 14.8115 10.8379 14.8851C10.7652 14.9586 10.6666 14.9999 10.5638 14.9999H8.91622C8.8134 14.9999 8.7148 14.9586 8.6421 14.8851C8.5694 14.8115 8.52856 14.7118 8.52856 14.6078ZM11.2422 14.6078C11.2422 14.5038 11.283 14.4041 11.3557 14.3305C11.4284 14.257 11.527 14.2157 11.6299 14.2157H15.991C16.0939 14.2157 16.1925 14.257 16.2652 14.3305C16.3379 14.4041 16.3787 14.5038 16.3787 14.6078C16.3787 14.7118 16.3379 14.8115 16.2652 14.8851C16.1925 14.9586 16.0939 14.9999 15.991 14.9999H11.6299C11.527 14.9999 11.4284 14.9586 11.3557 14.8851C11.283 14.8115 11.2422 14.7118 11.2422 14.6078Z" />
                                        </svg>
                                        See All Compare Car
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="mazda" role="tabpanel" aria-labelledby="mazda-tab">
                            <div class="row g-4 justify-content-center mb-30">
                                <div class="col-lg-4 col-sm-2">
                                    <div class="single-compare-card style-2">
                                        <div class="compare-top">
                                            <div class="single-car">
                                                <div class="car-img">
                                                    <img src="assets/img/home1/cc-merceds.png" alt="car">
                                                </div>
                                                <div class="content text-center">
                                                    <h6 class="title"><a href="car-deatils.html">Mazda3</a></h6>
                                                    <h6 class="price">$68, 219.000</h6>
                                                </div>
                                            </div>
                                            <div class="vs">
                                                <span>VS</span>
                                            </div>
                                            <div class="single-car">
                                                <div class="car-img">
                                                    <img src="assets/img/home1/cc-bmw.png" alt="car">
                                                </div>
                                                <div class="content text-center">
                                                    <h6 class="title"><a href="car-deatils.html">Mazda6</a></h6>
                                                    <h6 class="price">$78, 729.000</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="compare-btm">
                                            <button type="button" class="primary-btn2" data-bs-toggle="modal"
                                                data-bs-target="#compareModal01">
                                                Comparing Car
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-2">
                                    <div class="single-compare-card style-2">
                                        <div class="compare-top">
                                            <div class="single-car">
                                                <div class="car-img">
                                                    <img src="assets/img/home1/cc-sucuki.png" alt="car">
                                                </div>
                                                <div class="content text-center">
                                                    <h6 class="title"><a href="car-deatils.html">Mazda MX-5</a></h6>
                                                    <h6 class="price">$70, 219.000</h6>
                                                </div>
                                            </div>
                                            <div class="vs">
                                                <span>VS</span>
                                            </div>
                                            <div class="single-car">
                                                <div class="car-img">
                                                    <img src="assets/img/home1/cc-tesla.png" alt="car">
                                                </div>
                                                <div class="content text-center">
                                                    <h6 class="title"><a href="car-deatils.html">Mazda CX-3</a></h6>
                                                    <h6 class="price">$78, 729.000</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="compare-btm">
                                            <button type="button" class="primary-btn2" data-bs-toggle="modal"
                                                data-bs-target="#compareModal01">
                                                Comparing Car
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-2">
                                    <div class="single-compare-card style-2">
                                        <div class="compare-top">
                                            <div class="single-car">
                                                <div class="car-img">
                                                    <img src="assets/img/home1/cc-sucuki.png" alt="car">
                                                </div>
                                                <div class="content text-center">
                                                    <h6 class="title"><a href="car-deatils.html">Mazda Demio</a></h6>
                                                    <h6 class="price">$90, 319.000</h6>
                                                </div>
                                            </div>
                                            <div class="vs">
                                                <span>VS</span>
                                            </div>
                                            <div class="single-car">
                                                <div class="car-img">
                                                    <img src="assets/img/home1/cc-toyota.png" alt="car">
                                                </div>
                                                <div class="content text-center">
                                                    <h6 class="title"><a href="car-deatils.html">Mazda CX-9</a></h6>
                                                    <h6 class="price">$93, 740.000</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="compare-btm">
                                            <button type="button" class="primary-btn2" data-bs-toggle="modal"
                                                data-bs-target="#compareModal01">
                                                Comparing Car
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="compare-btn-and-slider-btn">
                                <div class="see-all-btn">
                                    <a class="view-btn2" href="compare.html">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="15"
                                            viewBox="0 0 24 15">
                                            <path
                                                d="M3.25973 0C3.15692 0 3.05831 0.0413135 2.98561 0.114852C2.91291 0.18839 2.87207 0.28813 2.87207 0.392129C2.87207 0.496128 2.91291 0.595867 2.98561 0.669405C3.05831 0.742944 3.15692 0.784257 3.25973 0.784257H4.81038C4.91319 0.784257 5.0118 0.742944 5.0845 0.669405C5.1572 0.595867 5.19804 0.496128 5.19804 0.392129C5.19804 0.28813 5.1572 0.18839 5.0845 0.114852C5.0118 0.0413135 4.91319 0 4.81038 0H3.25973ZM5.77953 0C5.67672 0 5.57812 0.0413135 5.50542 0.114852C5.43271 0.18839 5.39187 0.28813 5.39187 0.392129C5.39187 0.496128 5.43271 0.595867 5.50542 0.669405C5.57812 0.742944 5.67672 0.784257 5.77953 0.784257H10.3346C10.4374 0.784257 10.536 0.742944 10.6087 0.669405C10.6814 0.595867 10.7222 0.496128 10.7222 0.392129C10.7222 0.28813 10.6814 0.18839 10.6087 0.114852C10.536 0.0413135 10.4374 0 10.3346 0H5.77953Z" />
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M4.22966 2.74658C4.12685 2.74658 4.02824 2.7879 3.95554 2.86143C3.88284 2.93497 3.842 3.03471 3.842 3.13871C3.842 3.24271 3.88284 3.34245 3.95554 3.41599C4.02824 3.48953 4.12685 3.53084 4.22966 3.53084H13.1459C14.6535 3.53084 15.5827 3.76847 16.3261 4.15021C16.958 4.4745 17.4677 4.90564 18.106 5.4456C18.238 5.55716 18.3754 5.67323 18.5206 5.79421L18.6106 5.8691L18.7265 5.88145C22.2658 6.25829 23.0627 7.4684 23.2251 8.08796V9.60883C23.2251 9.71283 23.1842 9.81257 23.1115 9.88611C23.0388 9.95965 22.9402 10.001 22.8374 10.001H21.8361C21.6516 8.8883 20.6948 8.04032 19.5423 8.04032C18.3898 8.04032 17.433 8.8883 17.2485 10.001H10.2062C10.0217 8.8883 9.06497 8.04032 7.91245 8.04032C6.75993 8.04032 5.80318 8.8883 5.61865 10.001H3.74508C3.64227 10.001 3.54367 10.0423 3.47097 10.1158C3.39826 10.1894 3.35742 10.2891 3.35742 10.3931C3.35742 10.4971 3.39826 10.5968 3.47097 10.6704C3.54367 10.7439 3.64227 10.7852 3.74508 10.7852H5.61865C5.80318 11.8979 6.75993 12.7459 7.91245 12.7459C9.06497 12.7459 10.0217 11.8979 10.2062 10.7852H17.2485C17.433 11.8979 18.3898 12.7459 19.5423 12.7459C20.6948 12.7459 21.6516 11.8979 21.8361 10.7852H22.8374C23.1459 10.7852 23.4417 10.6613 23.6598 10.4407C23.8779 10.22 24.0004 9.92083 24.0004 9.60883V7.99562L23.9905 7.95209C23.7436 6.87001 22.5796 5.52874 18.9244 5.11425C18.8222 5.02877 18.722 4.94368 18.6232 4.85996C17.9833 4.31784 17.3947 3.81905 16.6771 3.45065C15.7971 2.99911 14.7396 2.74658 13.1459 2.74658H4.22966ZM17.9917 10.3931C17.9917 9.9771 18.155 9.57814 18.4458 9.28398C18.7366 8.98983 19.131 8.82458 19.5423 8.82458C19.9536 8.82458 20.348 8.98983 20.6388 9.28398C20.9296 9.57814 21.0929 9.9771 21.0929 10.3931C21.0929 10.8091 20.9296 11.208 20.6388 11.5022C20.348 11.7964 19.9536 11.9616 19.5423 11.9616C19.131 11.9616 18.7366 11.7964 18.4458 11.5022C18.155 11.208 17.9917 10.8091 17.9917 10.3931ZM7.91245 8.82458C7.50119 8.82458 7.10678 8.98983 6.81597 9.28398C6.52517 9.57814 6.3618 9.9771 6.3618 10.3931C6.3618 10.8091 6.52517 11.208 6.81597 11.5022C7.10678 11.7964 7.50119 11.9616 7.91245 11.9616C8.3237 11.9616 8.71812 11.7964 9.00892 11.5022C9.29972 11.208 9.46309 10.8091 9.46309 10.3931C9.46309 9.9771 9.29972 9.57814 9.00892 9.28398C8.71812 8.98983 8.3237 8.82458 7.91245 8.82458Z" />
                                            <path
                                                d="M0 5.09867C0 4.99467 0.0408428 4.89493 0.113543 4.82139C0.186244 4.74786 0.284847 4.70654 0.387662 4.70654H4.74886C4.85167 4.70654 4.95027 4.74786 5.02297 4.82139C5.09567 4.89493 5.13652 4.99467 5.13652 5.09867C5.13652 5.20267 5.09567 5.30241 5.02297 5.37595C4.95027 5.44949 4.85167 5.4908 4.74886 5.4908H0.387662C0.284847 5.4908 0.186244 5.44949 0.113543 5.37595C0.0408428 5.30241 0 5.20267 0 5.09867ZM15.6836 5.60569C15.7563 5.67923 15.7971 5.77895 15.7971 5.88293C15.7971 5.98691 15.7563 6.08663 15.6836 6.16016L15.6532 6.19095C15.2897 6.55859 14.7968 6.76516 14.2828 6.76522H8.14089C8.03808 6.76522 7.93948 6.7239 7.86678 6.65037C7.79408 6.57683 7.75323 6.47709 7.75323 6.37309C7.75323 6.26909 7.79408 6.16935 7.86678 6.09581C7.93948 6.02227 8.03808 5.98096 8.14089 5.98096H14.2826C14.4354 5.98098 14.5866 5.95057 14.7277 5.89146C14.8688 5.83235 14.997 5.74571 15.105 5.63648L15.1355 5.60569C15.2082 5.53218 15.3068 5.49088 15.4096 5.49088C15.5123 5.49088 15.6109 5.53218 15.6836 5.60569ZM8.52856 14.6078C8.52856 14.5038 8.5694 14.4041 8.6421 14.3305C8.7148 14.257 8.8134 14.2157 8.91622 14.2157H10.5638C10.6666 14.2157 10.7652 14.257 10.8379 14.3305C10.9106 14.4041 10.9514 14.5038 10.9514 14.6078C10.9514 14.7118 10.9106 14.8115 10.8379 14.8851C10.7652 14.9586 10.6666 14.9999 10.5638 14.9999H8.91622C8.8134 14.9999 8.7148 14.9586 8.6421 14.8851C8.5694 14.8115 8.52856 14.7118 8.52856 14.6078ZM11.2422 14.6078C11.2422 14.5038 11.283 14.4041 11.3557 14.3305C11.4284 14.257 11.527 14.2157 11.6299 14.2157H15.991C16.0939 14.2157 16.1925 14.257 16.2652 14.3305C16.3379 14.4041 16.3787 14.5038 16.3787 14.6078C16.3787 14.7118 16.3379 14.8115 16.2652 14.8851C16.1925 14.9586 16.0939 14.9999 15.991 14.9999H11.6299C11.527 14.9999 11.4284 14.9586 11.3557 14.8851C11.283 14.8115 11.2422 14.7118 11.2422 14.6078Z" />
                                        </svg>
                                        See All Compare Car
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="ferrari" role="tabpanel" aria-labelledby="ferrari-tab">
                            <div class="row g-4 justify-content-center mb-30">
                                <div class="col-lg-4 col-sm-2">
                                    <div class="single-compare-card style-2">
                                        <div class="compare-top">
                                            <div class="single-car">
                                                <div class="car-img">
                                                    <img src="assets/img/home1/cc-merceds.png" alt="car">
                                                </div>
                                                <div class="content text-center">
                                                    <h6 class="title"><a href="car-deatils.html">Ferrari 488</a></h6>
                                                    <h6 class="price">$68, 219.000</h6>
                                                </div>
                                            </div>
                                            <div class="vs">
                                                <span>VS</span>
                                            </div>
                                            <div class="single-car">
                                                <div class="car-img">
                                                    <img src="assets/img/home1/cc-bmw.png" alt="car">
                                                </div>
                                                <div class="content text-center">
                                                    <h6 class="title"><a href="car-deatils.html">Ferrari 458</a></h6>
                                                    <h6 class="price">$78, 729.000</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="compare-btm">
                                            <button type="button" class="primary-btn2" data-bs-toggle="modal"
                                                data-bs-target="#compareModal01">
                                                Comparing Car
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-2">
                                    <div class="single-compare-card style-2">
                                        <div class="compare-top">
                                            <div class="single-car">
                                                <div class="car-img">
                                                    <img src="assets/img/home1/cc-sucuki.png" alt="car">
                                                </div>
                                                <div class="content text-center">
                                                    <h6 class="title"><a href="car-deatils.html">Ferrari F430</a></h6>
                                                    <h6 class="price">$70, 219.000</h6>
                                                </div>
                                            </div>
                                            <div class="vs">
                                                <span>VS</span>
                                            </div>
                                            <div class="single-car">
                                                <div class="car-img">
                                                    <img src="assets/img/home1/cc-tesla.png" alt="car">
                                                </div>
                                                <div class="content text-center">
                                                    <h6 class="title"><a href="car-deatils.html">Ferrari F40</a></h6>
                                                    <h6 class="price">$78, 729.000</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="compare-btm">
                                            <button type="button" class="primary-btn2" data-bs-toggle="modal"
                                                data-bs-target="#compareModal01">
                                                Comparing Car
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-2">
                                    <div class="single-compare-card style-2">
                                        <div class="compare-top">
                                            <div class="single-car">
                                                <div class="car-img">
                                                    <img src="assets/img/home1/cc-sucuki.png" alt="car">
                                                </div>
                                                <div class="content text-center">
                                                    <h6 class="title"><a href="car-deatils.html">Ferrari Enzo</a></h6>
                                                    <h6 class="price">$90, 319.000</h6>
                                                </div>
                                            </div>
                                            <div class="vs">
                                                <span>VS</span>
                                            </div>
                                            <div class="single-car">
                                                <div class="car-img">
                                                    <img src="assets/img/home1/cc-toyota.png" alt="car">
                                                </div>
                                                <div class="content text-center">
                                                    <h6 class="title"><a href="car-deatils.html">Ferrari 250 GTO</a>
                                                    </h6>
                                                    <h6 class="price">$93, 740.000</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="compare-btm">
                                            <button type="button" class="primary-btn2" data-bs-toggle="modal"
                                                data-bs-target="#compareModal01">
                                                Comparing Car
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="compare-btn-and-slider-btn">
                                <div class="see-all-btn">
                                    <a class="view-btn2" href="compare.html">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="15"
                                            viewBox="0 0 24 15">
                                            <path
                                                d="M3.25973 0C3.15692 0 3.05831 0.0413135 2.98561 0.114852C2.91291 0.18839 2.87207 0.28813 2.87207 0.392129C2.87207 0.496128 2.91291 0.595867 2.98561 0.669405C3.05831 0.742944 3.15692 0.784257 3.25973 0.784257H4.81038C4.91319 0.784257 5.0118 0.742944 5.0845 0.669405C5.1572 0.595867 5.19804 0.496128 5.19804 0.392129C5.19804 0.28813 5.1572 0.18839 5.0845 0.114852C5.0118 0.0413135 4.91319 0 4.81038 0H3.25973ZM5.77953 0C5.67672 0 5.57812 0.0413135 5.50542 0.114852C5.43271 0.18839 5.39187 0.28813 5.39187 0.392129C5.39187 0.496128 5.43271 0.595867 5.50542 0.669405C5.57812 0.742944 5.67672 0.784257 5.77953 0.784257H10.3346C10.4374 0.784257 10.536 0.742944 10.6087 0.669405C10.6814 0.595867 10.7222 0.496128 10.7222 0.392129C10.7222 0.28813 10.6814 0.18839 10.6087 0.114852C10.536 0.0413135 10.4374 0 10.3346 0H5.77953Z" />
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M4.22966 2.74658C4.12685 2.74658 4.02824 2.7879 3.95554 2.86143C3.88284 2.93497 3.842 3.03471 3.842 3.13871C3.842 3.24271 3.88284 3.34245 3.95554 3.41599C4.02824 3.48953 4.12685 3.53084 4.22966 3.53084H13.1459C14.6535 3.53084 15.5827 3.76847 16.3261 4.15021C16.958 4.4745 17.4677 4.90564 18.106 5.4456C18.238 5.55716 18.3754 5.67323 18.5206 5.79421L18.6106 5.8691L18.7265 5.88145C22.2658 6.25829 23.0627 7.4684 23.2251 8.08796V9.60883C23.2251 9.71283 23.1842 9.81257 23.1115 9.88611C23.0388 9.95965 22.9402 10.001 22.8374 10.001H21.8361C21.6516 8.8883 20.6948 8.04032 19.5423 8.04032C18.3898 8.04032 17.433 8.8883 17.2485 10.001H10.2062C10.0217 8.8883 9.06497 8.04032 7.91245 8.04032C6.75993 8.04032 5.80318 8.8883 5.61865 10.001H3.74508C3.64227 10.001 3.54367 10.0423 3.47097 10.1158C3.39826 10.1894 3.35742 10.2891 3.35742 10.3931C3.35742 10.4971 3.39826 10.5968 3.47097 10.6704C3.54367 10.7439 3.64227 10.7852 3.74508 10.7852H5.61865C5.80318 11.8979 6.75993 12.7459 7.91245 12.7459C9.06497 12.7459 10.0217 11.8979 10.2062 10.7852H17.2485C17.433 11.8979 18.3898 12.7459 19.5423 12.7459C20.6948 12.7459 21.6516 11.8979 21.8361 10.7852H22.8374C23.1459 10.7852 23.4417 10.6613 23.6598 10.4407C23.8779 10.22 24.0004 9.92083 24.0004 9.60883V7.99562L23.9905 7.95209C23.7436 6.87001 22.5796 5.52874 18.9244 5.11425C18.8222 5.02877 18.722 4.94368 18.6232 4.85996C17.9833 4.31784 17.3947 3.81905 16.6771 3.45065C15.7971 2.99911 14.7396 2.74658 13.1459 2.74658H4.22966ZM17.9917 10.3931C17.9917 9.9771 18.155 9.57814 18.4458 9.28398C18.7366 8.98983 19.131 8.82458 19.5423 8.82458C19.9536 8.82458 20.348 8.98983 20.6388 9.28398C20.9296 9.57814 21.0929 9.9771 21.0929 10.3931C21.0929 10.8091 20.9296 11.208 20.6388 11.5022C20.348 11.7964 19.9536 11.9616 19.5423 11.9616C19.131 11.9616 18.7366 11.7964 18.4458 11.5022C18.155 11.208 17.9917 10.8091 17.9917 10.3931ZM7.91245 8.82458C7.50119 8.82458 7.10678 8.98983 6.81597 9.28398C6.52517 9.57814 6.3618 9.9771 6.3618 10.3931C6.3618 10.8091 6.52517 11.208 6.81597 11.5022C7.10678 11.7964 7.50119 11.9616 7.91245 11.9616C8.3237 11.9616 8.71812 11.7964 9.00892 11.5022C9.29972 11.208 9.46309 10.8091 9.46309 10.3931C9.46309 9.9771 9.29972 9.57814 9.00892 9.28398C8.71812 8.98983 8.3237 8.82458 7.91245 8.82458Z" />
                                            <path
                                                d="M0 5.09867C0 4.99467 0.0408428 4.89493 0.113543 4.82139C0.186244 4.74786 0.284847 4.70654 0.387662 4.70654H4.74886C4.85167 4.70654 4.95027 4.74786 5.02297 4.82139C5.09567 4.89493 5.13652 4.99467 5.13652 5.09867C5.13652 5.20267 5.09567 5.30241 5.02297 5.37595C4.95027 5.44949 4.85167 5.4908 4.74886 5.4908H0.387662C0.284847 5.4908 0.186244 5.44949 0.113543 5.37595C0.0408428 5.30241 0 5.20267 0 5.09867ZM15.6836 5.60569C15.7563 5.67923 15.7971 5.77895 15.7971 5.88293C15.7971 5.98691 15.7563 6.08663 15.6836 6.16016L15.6532 6.19095C15.2897 6.55859 14.7968 6.76516 14.2828 6.76522H8.14089C8.03808 6.76522 7.93948 6.7239 7.86678 6.65037C7.79408 6.57683 7.75323 6.47709 7.75323 6.37309C7.75323 6.26909 7.79408 6.16935 7.86678 6.09581C7.93948 6.02227 8.03808 5.98096 8.14089 5.98096H14.2826C14.4354 5.98098 14.5866 5.95057 14.7277 5.89146C14.8688 5.83235 14.997 5.74571 15.105 5.63648L15.1355 5.60569C15.2082 5.53218 15.3068 5.49088 15.4096 5.49088C15.5123 5.49088 15.6109 5.53218 15.6836 5.60569ZM8.52856 14.6078C8.52856 14.5038 8.5694 14.4041 8.6421 14.3305C8.7148 14.257 8.8134 14.2157 8.91622 14.2157H10.5638C10.6666 14.2157 10.7652 14.257 10.8379 14.3305C10.9106 14.4041 10.9514 14.5038 10.9514 14.6078C10.9514 14.7118 10.9106 14.8115 10.8379 14.8851C10.7652 14.9586 10.6666 14.9999 10.5638 14.9999H8.91622C8.8134 14.9999 8.7148 14.9586 8.6421 14.8851C8.5694 14.8115 8.52856 14.7118 8.52856 14.6078ZM11.2422 14.6078C11.2422 14.5038 11.283 14.4041 11.3557 14.3305C11.4284 14.257 11.527 14.2157 11.6299 14.2157H15.991C16.0939 14.2157 16.1925 14.257 16.2652 14.3305C16.3379 14.4041 16.3787 14.5038 16.3787 14.6078C16.3787 14.7118 16.3379 14.8115 16.2652 14.8851C16.1925 14.9586 16.0939 14.9999 15.991 14.9999H11.6299C11.527 14.9999 11.4284 14.9586 11.3557 14.8851C11.283 14.8115 11.2422 14.7118 11.2422 14.6078Z" />
                                        </svg>
                                        See All Compare Car
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="customar-feedback-area style-2 mb-100">
        <div class="container">
            <div class="row mb-60 wow fadeInUp" data-wow-delay="200ms">
                <div class="col-lg-12">
                    <div class="section-title-2">
                        <h2>What Our Customers Are Saying</h2>
                        <p>To get the most accurate and up-to-date information the featured cars in different.</p>
                    </div>
                </div>
            </div>
            <div class="row g-4 mb-100">
                <div class="col-lg-3 wow fadeInUp" data-wow-delay="200ms">
                    <div class="customer-feedback-left">
                        <a href="#" class="trustpilot">
                            <h5>Excellent!</h5>
                            <img class="star" src="assets/img/home1/icon/trustpilot-star3.svg" alt>
                            <span>Based On <strong>2348</strong> Reviews</span>
                            <img class="logo" src="assets/img/home1/icon/trustpilot-log3.svg" alt>
                        </a>
                        <a href="#" class="google">
                            <img class="logo" src="assets/img/home1/icon/google3.svg" alt>
                            <div class="star">
                                <ul>
                                    <li class="active"><i class="bi bi-star-fill"></i></li>
                                    <li><i class="bi bi-star-fill"></i></li>
                                    <li><i class="bi bi-star-fill"></i></li>
                                    <li><i class="bi bi-star-fill"></i></li>
                                    <li class><i class="bi bi-star-half"></i></li>
                                </ul>
                            </div>
                            <span>Based On <strong>1448</strong> Reviews</span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-9 wow fadeInUp" data-wow-delay="200ms">
                    <div class="customer-feedback-right">
                        <div class="swiper customer-feedback-slider mb-40">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="feedback-card">
                                        <div class="feedback-top">
                                            <div class="stat-area">
                                                <div class="star">
                                                    <ul>
                                                        <li class="active"><i class="bi bi-star-fill"></i></li>
                                                        <li><i class="bi bi-star-fill"></i></li>
                                                        <li><i class="bi bi-star-fill"></i></li>
                                                        <li><i class="bi bi-star-fill"></i></li>
                                                        <li class><i class="bi bi-star-half"></i></li>
                                                    </ul>
                                                </div>
                                                <span>Great Services!</span>
                                            </div>
                                            <div class="logo">
                                                <img src="assets/img/home1/icon/google3.svg" alt>
                                            </div>
                                        </div>
                                        <p><strong>Drivco-Agency</strong> to the actively encourage customers to leave
                                            reviews to the help promote their products and services.”</p>
                                        <div class="author-name">
                                            <h6>Nowry Jahan</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="feedback-card">
                                        <div class="feedback-top">
                                            <div class="stat-area">
                                                <img src="assets/img/home1/icon/trustpilot-star.svg" alt>
                                                <span>Trusted Company</span>
                                            </div>
                                            <div class="logo">
                                                <img src="assets/img/home1/icon/trustpilot-log3.svg" alt>
                                            </div>
                                        </div>
                                        <p><strong>Drivco-Agency</strong> customer feedback is an invaluable source of
                                            information that can help businesses improve their offerings and provide
                                            better experiences.</p>
                                        <div class="author-name">
                                            <h6>Jhon Abraham</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="feedback-card">
                                        <div class="feedback-top">
                                            <div class="stat-area">
                                                <div class="star">
                                                    <ul>
                                                        <li class="active"><i class="bi bi-star-fill"></i></li>
                                                        <li><i class="bi bi-star-fill"></i></li>
                                                        <li><i class="bi bi-star-fill"></i></li>
                                                        <li><i class="bi bi-star-fill"></i></li>
                                                        <li class><i class="bi bi-star-half"></i></li>
                                                    </ul>
                                                </div>
                                                <span>Great Services!</span>
                                            </div>
                                            <div class="logo">
                                                <img src="assets/img/home1/icon/google3.svg" alt>
                                            </div>
                                        </div>
                                        <p><strong>Drivco-Agency</strong> to the actively encourage customers to leave
                                            reviews to the help promote their products and services.”</p>
                                        <div class="author-name">
                                            <h6>Nowry Jahan</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="feedback-card">
                                        <div class="feedback-top">
                                            <div class="stat-area">
                                                <img src="assets/img/home1/icon/trustpilot-star.svg" alt>
                                                <span>Trusted Company</span>
                                            </div>
                                            <div class="logo">
                                                <img src="assets/img/home1/icon/trustpilot-log3.svg" alt>
                                            </div>
                                        </div>
                                        <p><strong>Drivco-Agency</strong> customer feedback is an invaluable source of
                                            information that can help businesses improve their offerings and provide
                                            better experiences.</p>
                                        <div class="author-name">
                                            <h6>Jhon Abraham</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row ">
                            <div class="col-lg-12 divider">
                                <div class="slider-btn-group style-2 justify-content-md-between justify-content-center">
                                    <div class="slider-btn prev-4 d-md-flex d-none">
                                        <svg width="11" height="19" viewBox="0 0 8 13"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0 6.50008L8 0L2.90909 6.50008L8 13L0 6.50008Z"></path>
                                        </svg>
                                    </div>
                                    <div class="view-btn-area">
                                        <p>Thousand of People Reviews to Us</p>
                                        <a class="view-btn" href="customer-review.html">View All Review</a>
                                    </div>
                                    <div class="slider-btn next-4 d-md-flex d-none">
                                        <svg width="11" height="19" viewBox="0 0 8 13"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8 6.50008L0 0L5.09091 6.50008L0 13L8 6.50008Z"></path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row wow fadeInUp" data-wow-delay="400ms">
                <div class="col-lg-12">
                    <div class="sub-title">
                        <h6>Our Trusted Partners</h6>
                        <div class="dash"></div>
                    </div>
                    <div class="partner-slider">
                        <div class="marquee_text2">
                            <img src="assets/img/home1/company-logo-01.png" alt>
                            <img src="assets/img/home1/company-logo-02.png" alt>
                            <img src="assets/img/home1/company-logo-03.png" alt>
                            <img src="assets/img/home1/company-logo-04.png" alt>
                            <img src="assets/img/home1/company-logo-05.png" alt>
                            <img src="assets/img/home1/company-logo-06.png" alt>
                            <img src="assets/img/home1/company-logo-01.png" alt>
                            <img src="assets/img/home1/company-logo-02.png" alt>
                            <img src="assets/img/home1/company-logo-03.png" alt>
                            <img src="assets/img/home1/company-logo-04.png" alt>
                            <img src="assets/img/home1/company-logo-05.png" alt>
                            <img src="assets/img/home1/company-logo-06.png" alt>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 -->

    <!-- <div class="news-section five six pb-90 pt-90">
        <div class="container">
            <div class="row mb-60 wow fadeInUp" data-wow-delay="200ms">
                <div class="col-lg-12 d-flex align-items-end justify-content-between flex-wrap gap-4">
                    <div class="section-title-2">
                        <h2>Latest Car Advice</h2>
                        <p>Here are some of the featured cars in different categories</p>
                    </div>
                </div>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                    <div class="news-card style-2 dark">
                        <div class="news-img">
                            <a href="blog-details.html"><img src="assets/img/home1/news-01.png" alt></a>
                            <div class="date">
                                <a href="blog-standard.html">Buying Advice</a>
                            </div>
                        </div>
                        <div class="content">
                            <h6><a href="blog-details.html">The Car Enthusiast: Exploring the World of Cars and
                                    Driving.</a>
                            </h6>
                            <div class="news-btm d-flex align-items-center justify-content-between">
                                <div class="author-area">
                                    <div class="author-img">
                                        <img src="assets/img/home1/author-01.png" alt>
                                    </div>
                                    <div class="author-content">
                                        <h6>Mr. Morris Mannu</h6>
                                        <a href="blog-standard.html">Posted on - 03 April, 2023</a>
                                    </div>
                                </div>
                                <div class="social-area">
                                    <ul class="social-icons">
                                        <li><a href="https://www.facebook.com/"><i class="bx bxl-facebook"></i></a></li>
                                        <li><a href="https://twitter.com/"><i class="bx bxl-twitter"></i></a></li>
                                        <li><a href="https://www.pinterest.com/"><i
                                                    class="bx bxl-pinterest-alt"></i></a></li>
                                        <li><a href="https://www.instagram.com/"><i class="bx bxl-instagram"></i></a>
                                        </li>
                                    </ul>
                                    <div class="share-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="13"
                                            viewBox="0 0 12 13">
                                            <path
                                                d="M10.125 0.750223C9.82667 0.750223 9.54052 0.868748 9.32955 1.07972C9.11857 1.2907 9.00005 1.57684 9.00005 1.8752C9.00005 2.17357 9.11857 2.45971 9.32955 2.67069C9.54052 2.88166 9.82667 3.00019 10.125 3.00019C10.4234 3.00019 10.7095 2.88166 10.9205 2.67069C11.1315 2.45971 11.25 2.17357 11.25 1.8752C11.25 1.57684 11.1315 1.2907 10.9205 1.07972C10.7095 0.868748 10.4234 0.750223 10.125 0.750223ZM8.25006 1.8752C8.25001 1.43529 8.40464 1.00936 8.68691 0.671933C8.96917 0.33451 9.3611 0.107081 9.79411 0.0294379C10.2271 -0.0482056 10.6736 0.0288801 11.0556 0.247208C11.4375 0.465536 11.7305 0.811204 11.8833 1.22373C12.0361 1.63626 12.0389 2.08939 11.8914 2.50382C11.7439 2.91826 11.4553 3.26762 11.0762 3.49078C10.6971 3.71395 10.2515 3.7967 9.81758 3.72456C9.38362 3.65243 8.98883 3.42999 8.7023 3.09618L3.66389 5.43615C3.77972 5.80322 3.77972 6.19705 3.66389 6.56413L8.7023 8.90409C9.00518 8.55184 9.42804 8.32458 9.88893 8.26634C10.3498 8.2081 10.8159 8.32303 11.1969 8.58886C11.5779 8.85469 11.8466 9.25249 11.951 9.70517C12.0554 10.1578 11.988 10.6332 11.7619 11.039C11.5359 11.4448 11.1672 11.7523 10.7273 11.9018C10.2875 12.0512 9.8078 12.0321 9.38125 11.8481C8.9547 11.6641 8.61165 11.3282 8.4186 10.9057C8.22554 10.4832 8.19621 10.004 8.33631 9.56108L3.29789 7.22112C3.04847 7.51179 2.71602 7.7191 2.34524 7.81517C1.97447 7.91124 1.58317 7.89145 1.22398 7.75847C0.864793 7.62548 0.554947 7.38569 0.336124 7.07133C0.117301 6.75698 0 6.38315 0 6.00014C0 5.61712 0.117301 5.24329 0.336124 4.92894C0.554947 4.61459 0.864793 4.37479 1.22398 4.24181C1.58317 4.10882 1.97447 4.08903 2.34524 4.1851C2.71602 4.28117 3.04847 4.48848 3.29789 4.77916L8.33631 2.4392C8.27896 2.2567 8.24987 2.0665 8.25006 1.8752ZM1.87517 4.87515C1.5768 4.87515 1.29066 4.99368 1.07969 5.20465C0.868711 5.41563 0.750187 5.70177 0.750187 6.00014C0.750187 6.2985 0.868711 6.58464 1.07969 6.79562C1.29066 7.00659 1.5768 7.12512 1.87517 7.12512C2.17353 7.12512 2.45968 7.00659 2.67065 6.79562C2.88162 6.58464 3.00015 6.2985 3.00015 6.00014C3.00015 5.70177 2.88162 5.41563 2.67065 5.20465C2.45968 4.99368 2.17353 4.87515 1.87517 4.87515ZM10.125 9.00009C9.82667 9.00009 9.54052 9.11861 9.32955 9.32959C9.11857 9.54056 9.00005 9.8267 9.00005 10.1251C9.00005 10.4234 9.11857 10.7096 9.32955 10.9205C9.54052 11.1315 9.82667 11.25 10.125 11.25C10.4234 11.25 10.7095 11.1315 10.9205 10.9205C11.1315 10.7096 11.25 10.4234 11.25 10.1251C11.25 9.8267 11.1315 9.54056 10.9205 9.32959C10.7095 9.11861 10.4234 9.00009 10.125 9.00009Z" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                    <div class="news-card style-2 dark">
                        <div class="news-img">
                            <a href="blog-details.html"><img src="assets/img/home1/news-02.png" alt></a>
                            <div class="date">
                                <a href="blog-standard.html">Car Advice</a>
                            </div>
                        </div>
                        <div class="content">
                            <h6><a href="blog-details.html">The Best Car Brands for Performance and Reliability.</a>
                            </h6>
                            <div class="news-btm d-flex align-items-center justify-content-between">
                                <div class="author-area">
                                    <div class="author-img">
                                        <img src="assets/img/home1/author-02.png" alt>
                                    </div>
                                    <div class="author-content">
                                        <h6>Daniel Scoot</h6>
                                        <a href="blog-standard.html">Posted on - 03 April, 2023</a>
                                    </div>
                                </div>
                                <div class="social-area">
                                    <ul class="social-icons">
                                        <li><a href="https://www.facebook.com/"><i class="bx bxl-facebook"></i></a></li>
                                        <li><a href="https://twitter.com/"><i class="bx bxl-twitter"></i></a></li>
                                        <li><a href="https://www.pinterest.com/"><i
                                                    class="bx bxl-pinterest-alt"></i></a></li>
                                        <li><a href="https://www.instagram.com/"><i class="bx bxl-instagram"></i></a>
                                        </li>
                                    </ul>
                                    <div class="share-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="13"
                                            viewBox="0 0 12 13">
                                            <path
                                                d="M10.125 0.750223C9.82667 0.750223 9.54052 0.868748 9.32955 1.07972C9.11857 1.2907 9.00005 1.57684 9.00005 1.8752C9.00005 2.17357 9.11857 2.45971 9.32955 2.67069C9.54052 2.88166 9.82667 3.00019 10.125 3.00019C10.4234 3.00019 10.7095 2.88166 10.9205 2.67069C11.1315 2.45971 11.25 2.17357 11.25 1.8752C11.25 1.57684 11.1315 1.2907 10.9205 1.07972C10.7095 0.868748 10.4234 0.750223 10.125 0.750223ZM8.25006 1.8752C8.25001 1.43529 8.40464 1.00936 8.68691 0.671933C8.96917 0.33451 9.3611 0.107081 9.79411 0.0294379C10.2271 -0.0482056 10.6736 0.0288801 11.0556 0.247208C11.4375 0.465536 11.7305 0.811204 11.8833 1.22373C12.0361 1.63626 12.0389 2.08939 11.8914 2.50382C11.7439 2.91826 11.4553 3.26762 11.0762 3.49078C10.6971 3.71395 10.2515 3.7967 9.81758 3.72456C9.38362 3.65243 8.98883 3.42999 8.7023 3.09618L3.66389 5.43615C3.77972 5.80322 3.77972 6.19705 3.66389 6.56413L8.7023 8.90409C9.00518 8.55184 9.42804 8.32458 9.88893 8.26634C10.3498 8.2081 10.8159 8.32303 11.1969 8.58886C11.5779 8.85469 11.8466 9.25249 11.951 9.70517C12.0554 10.1578 11.988 10.6332 11.7619 11.039C11.5359 11.4448 11.1672 11.7523 10.7273 11.9018C10.2875 12.0512 9.8078 12.0321 9.38125 11.8481C8.9547 11.6641 8.61165 11.3282 8.4186 10.9057C8.22554 10.4832 8.19621 10.004 8.33631 9.56108L3.29789 7.22112C3.04847 7.51179 2.71602 7.7191 2.34524 7.81517C1.97447 7.91124 1.58317 7.89145 1.22398 7.75847C0.864793 7.62548 0.554947 7.38569 0.336124 7.07133C0.117301 6.75698 0 6.38315 0 6.00014C0 5.61712 0.117301 5.24329 0.336124 4.92894C0.554947 4.61459 0.864793 4.37479 1.22398 4.24181C1.58317 4.10882 1.97447 4.08903 2.34524 4.1851C2.71602 4.28117 3.04847 4.48848 3.29789 4.77916L8.33631 2.4392C8.27896 2.2567 8.24987 2.0665 8.25006 1.8752ZM1.87517 4.87515C1.5768 4.87515 1.29066 4.99368 1.07969 5.20465C0.868711 5.41563 0.750187 5.70177 0.750187 6.00014C0.750187 6.2985 0.868711 6.58464 1.07969 6.79562C1.29066 7.00659 1.5768 7.12512 1.87517 7.12512C2.17353 7.12512 2.45968 7.00659 2.67065 6.79562C2.88162 6.58464 3.00015 6.2985 3.00015 6.00014C3.00015 5.70177 2.88162 5.41563 2.67065 5.20465C2.45968 4.99368 2.17353 4.87515 1.87517 4.87515ZM10.125 9.00009C9.82667 9.00009 9.54052 9.11861 9.32955 9.32959C9.11857 9.54056 9.00005 9.8267 9.00005 10.1251C9.00005 10.4234 9.11857 10.7096 9.32955 10.9205C9.54052 11.1315 9.82667 11.25 10.125 11.25C10.4234 11.25 10.7095 11.1315 10.9205 10.9205C11.1315 10.7096 11.25 10.4234 11.25 10.1251C11.25 9.8267 11.1315 9.54056 10.9205 9.32959C10.7095 9.11861 10.4234 9.00009 10.125 9.00009Z" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                    <div class="news-card style-2 dark">
                        <div class="news-img">
                            <a href="blog-details.html"><img src="assets/img/home1/news-03.png" alt></a>
                            <div class="date">
                                <a href="blog-standard.html">Driving Advice</a>
                            </div>
                        </div>
                        <div class="content">
                            <h6><a href="blog-details.html">The Environmental Impact of Cars and How to Minimize It.</a>
                            </h6>
                            <div class="news-btm d-flex align-items-center justify-content-between">
                                <div class="author-area">
                                    <div class="author-img">
                                        <img src="assets/img/home1/author-03.png" alt>
                                    </div>
                                    <div class="author-content">
                                        <h6>Mulish Kary</h6>
                                        <a href="blog-standard.html">Posted on - 03 April, 2023</a>
                                    </div>
                                </div>
                                <div class="social-area">
                                    <ul class="social-icons">
                                        <li><a href="https://www.facebook.com/"><i class="bx bxl-facebook"></i></a></li>
                                        <li><a href="https://twitter.com/"><i class="bx bxl-twitter"></i></a></li>
                                        <li><a href="https://www.pinterest.com/"><i
                                                    class="bx bxl-pinterest-alt"></i></a></li>
                                        <li><a href="https://www.instagram.com/"><i class="bx bxl-instagram"></i></a>
                                        </li>
                                    </ul>
                                    <div class="share-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="13"
                                            viewBox="0 0 12 13">
                                            <path
                                                d="M10.125 0.750223C9.82667 0.750223 9.54052 0.868748 9.32955 1.07972C9.11857 1.2907 9.00005 1.57684 9.00005 1.8752C9.00005 2.17357 9.11857 2.45971 9.32955 2.67069C9.54052 2.88166 9.82667 3.00019 10.125 3.00019C10.4234 3.00019 10.7095 2.88166 10.9205 2.67069C11.1315 2.45971 11.25 2.17357 11.25 1.8752C11.25 1.57684 11.1315 1.2907 10.9205 1.07972C10.7095 0.868748 10.4234 0.750223 10.125 0.750223ZM8.25006 1.8752C8.25001 1.43529 8.40464 1.00936 8.68691 0.671933C8.96917 0.33451 9.3611 0.107081 9.79411 0.0294379C10.2271 -0.0482056 10.6736 0.0288801 11.0556 0.247208C11.4375 0.465536 11.7305 0.811204 11.8833 1.22373C12.0361 1.63626 12.0389 2.08939 11.8914 2.50382C11.7439 2.91826 11.4553 3.26762 11.0762 3.49078C10.6971 3.71395 10.2515 3.7967 9.81758 3.72456C9.38362 3.65243 8.98883 3.42999 8.7023 3.09618L3.66389 5.43615C3.77972 5.80322 3.77972 6.19705 3.66389 6.56413L8.7023 8.90409C9.00518 8.55184 9.42804 8.32458 9.88893 8.26634C10.3498 8.2081 10.8159 8.32303 11.1969 8.58886C11.5779 8.85469 11.8466 9.25249 11.951 9.70517C12.0554 10.1578 11.988 10.6332 11.7619 11.039C11.5359 11.4448 11.1672 11.7523 10.7273 11.9018C10.2875 12.0512 9.8078 12.0321 9.38125 11.8481C8.9547 11.6641 8.61165 11.3282 8.4186 10.9057C8.22554 10.4832 8.19621 10.004 8.33631 9.56108L3.29789 7.22112C3.04847 7.51179 2.71602 7.7191 2.34524 7.81517C1.97447 7.91124 1.58317 7.89145 1.22398 7.75847C0.864793 7.62548 0.554947 7.38569 0.336124 7.07133C0.117301 6.75698 0 6.38315 0 6.00014C0 5.61712 0.117301 5.24329 0.336124 4.92894C0.554947 4.61459 0.864793 4.37479 1.22398 4.24181C1.58317 4.10882 1.97447 4.08903 2.34524 4.1851C2.71602 4.28117 3.04847 4.48848 3.29789 4.77916L8.33631 2.4392C8.27896 2.2567 8.24987 2.0665 8.25006 1.8752ZM1.87517 4.87515C1.5768 4.87515 1.29066 4.99368 1.07969 5.20465C0.868711 5.41563 0.750187 5.70177 0.750187 6.00014C0.750187 6.2985 0.868711 6.58464 1.07969 6.79562C1.29066 7.00659 1.5768 7.12512 1.87517 7.12512C2.17353 7.12512 2.45968 7.00659 2.67065 6.79562C2.88162 6.58464 3.00015 6.2985 3.00015 6.00014C3.00015 5.70177 2.88162 5.41563 2.67065 5.20465C2.45968 4.99368 2.17353 4.87515 1.87517 4.87515ZM10.125 9.00009C9.82667 9.00009 9.54052 9.11861 9.32955 9.32959C9.11857 9.54056 9.00005 9.8267 9.00005 10.1251C9.00005 10.4234 9.11857 10.7096 9.32955 10.9205C9.54052 11.1315 9.82667 11.25 10.125 11.25C10.4234 11.25 10.7095 11.1315 10.9205 10.9205C11.1315 10.7096 11.25 10.4234 11.25 10.1251C11.25 9.8267 11.1315 9.54056 10.9205 9.32959C10.7095 9.11861 10.4234 9.00009 10.125 9.00009Z" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>--->
    @endsection