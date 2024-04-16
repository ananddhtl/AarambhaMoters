@extends('welcome')
@section('content')
    @if (session('error'))
        <script>
            Swal.fire({
                icon: 'danger',
                title: 'Invalid Credentials',
                text: ' You have enter invalid  credentials',
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
                                <img src="{{ asset('html/assets/img/slider1.jpg') }}" alt>
                            </div>
                        </div>
                        <div class="bottom-img-group">
                            <div class="bottom-left-img">
                                <img src="{{ asset('html/assets/img/slider2.jpg') }}" alt>
                            </div>
                            <div class="bottom-right-img">
                                <img src="{{ asset('html/assets/img/slider3.jpg') }}" alt>
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
                                        <img src="{{ asset('assets/img/home2/icon/loaction.svg') }}" alt>
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
                                @foreach ($vehicles as $item)
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
                            @foreach ($category as $item)
                                <div class="swiper-slide">
                                    <a href="single-brand-category.html" class="car-category text-center">
                                        <div class="icon">
                                            <img src="{{ $item->brand_image }}" alt>
                                        </div>
                                        <div class="content">
                                            <h6>{{ $item->brand_name }}</h6>
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
    <div class="compare-car-section two pt-90 pb-90 mb-100">
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
            <div class="row mb-60 wow fadeInUp" data-wow-delay="200ms"
                style="visibility: visible; animation-delay: 200ms;">
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
                            <button class="nav-link" id="mercedes-tab" data-bs-toggle="tab" data-bs-target="#mercedes"
                                type="button" role="tab" aria-controls="mercedes" aria-selected="false"
                                tabindex="-1">Mercedes</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="tesla-tab" data-bs-toggle="tab" data-bs-target="#tesla"
                                type="button" role="tab" aria-controls="tesla" aria-selected="false"
                                tabindex="-1">Tesla</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="mazda-tab" data-bs-toggle="tab" data-bs-target="#mazda"
                                type="button" role="tab" aria-controls="mazda" aria-selected="false"
                                tabindex="-1">Mazda</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="ferrari-tab" data-bs-toggle="tab" data-bs-target="#ferrari"
                                type="button" role="tab" aria-controls="ferrari" aria-selected="false"
                                tabindex="-1">Ferrari</button>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row wow fadeInUp" data-wow-delay="300ms" style="visibility: visible; animation-delay: 300ms;">
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
                                                d="M3.25973 0C3.15692 0 3.05831 0.0413135 2.98561 0.114852C2.91291 0.18839 2.87207 0.28813 2.87207 0.392129C2.87207 0.496128 2.91291 0.595867 2.98561 0.669405C3.05831 0.742944 3.15692 0.784257 3.25973 0.784257H4.81038C4.91319 0.784257 5.0118 0.742944 5.0845 0.669405C5.1572 0.595867 5.19804 0.496128 5.19804 0.392129C5.19804 0.28813 5.1572 0.18839 5.0845 0.114852C5.0118 0.0413135 4.91319 0 4.81038 0H3.25973ZM5.77953 0C5.67672 0 5.57812 0.0413135 5.50542 0.114852C5.43271 0.18839 5.39187 0.28813 5.39187 0.392129C5.39187 0.496128 5.43271 0.595867 5.50542 0.669405C5.57812 0.742944 5.67672 0.784257 5.77953 0.784257H10.3346C10.4374 0.784257 10.536 0.742944 10.6087 0.669405C10.6814 0.595867 10.7222 0.496128 10.7222 0.392129C10.7222 0.28813 10.6814 0.18839 10.6087 0.114852C10.536 0.0413135 10.4374 0 10.3346 0H5.77953Z">
                                            </path>
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M4.22966 2.74658C4.12685 2.74658 4.02824 2.7879 3.95554 2.86143C3.88284 2.93497 3.842 3.03471 3.842 3.13871C3.842 3.24271 3.88284 3.34245 3.95554 3.41599C4.02824 3.48953 4.12685 3.53084 4.22966 3.53084H13.1459C14.6535 3.53084 15.5827 3.76847 16.3261 4.15021C16.958 4.4745 17.4677 4.90564 18.106 5.4456C18.238 5.55716 18.3754 5.67323 18.5206 5.79421L18.6106 5.8691L18.7265 5.88145C22.2658 6.25829 23.0627 7.4684 23.2251 8.08796V9.60883C23.2251 9.71283 23.1842 9.81257 23.1115 9.88611C23.0388 9.95965 22.9402 10.001 22.8374 10.001H21.8361C21.6516 8.8883 20.6948 8.04032 19.5423 8.04032C18.3898 8.04032 17.433 8.8883 17.2485 10.001H10.2062C10.0217 8.8883 9.06497 8.04032 7.91245 8.04032C6.75993 8.04032 5.80318 8.8883 5.61865 10.001H3.74508C3.64227 10.001 3.54367 10.0423 3.47097 10.1158C3.39826 10.1894 3.35742 10.2891 3.35742 10.3931C3.35742 10.4971 3.39826 10.5968 3.47097 10.6704C3.54367 10.7439 3.64227 10.7852 3.74508 10.7852H5.61865C5.80318 11.8979 6.75993 12.7459 7.91245 12.7459C9.06497 12.7459 10.0217 11.8979 10.2062 10.7852H17.2485C17.433 11.8979 18.3898 12.7459 19.5423 12.7459C20.6948 12.7459 21.6516 11.8979 21.8361 10.7852H22.8374C23.1459 10.7852 23.4417 10.6613 23.6598 10.4407C23.8779 10.22 24.0004 9.92083 24.0004 9.60883V7.99562L23.9905 7.95209C23.7436 6.87001 22.5796 5.52874 18.9244 5.11425C18.8222 5.02877 18.722 4.94368 18.6232 4.85996C17.9833 4.31784 17.3947 3.81905 16.6771 3.45065C15.7971 2.99911 14.7396 2.74658 13.1459 2.74658H4.22966ZM17.9917 10.3931C17.9917 9.9771 18.155 9.57814 18.4458 9.28398C18.7366 8.98983 19.131 8.82458 19.5423 8.82458C19.9536 8.82458 20.348 8.98983 20.6388 9.28398C20.9296 9.57814 21.0929 9.9771 21.0929 10.3931C21.0929 10.8091 20.9296 11.208 20.6388 11.5022C20.348 11.7964 19.9536 11.9616 19.5423 11.9616C19.131 11.9616 18.7366 11.7964 18.4458 11.5022C18.155 11.208 17.9917 10.8091 17.9917 10.3931ZM7.91245 8.82458C7.50119 8.82458 7.10678 8.98983 6.81597 9.28398C6.52517 9.57814 6.3618 9.9771 6.3618 10.3931C6.3618 10.8091 6.52517 11.208 6.81597 11.5022C7.10678 11.7964 7.50119 11.9616 7.91245 11.9616C8.3237 11.9616 8.71812 11.7964 9.00892 11.5022C9.29972 11.208 9.46309 10.8091 9.46309 10.3931C9.46309 9.9771 9.29972 9.57814 9.00892 9.28398C8.71812 8.98983 8.3237 8.82458 7.91245 8.82458Z">
                                            </path>
                                            <path
                                                d="M0 5.09867C0 4.99467 0.0408428 4.89493 0.113543 4.82139C0.186244 4.74786 0.284847 4.70654 0.387662 4.70654H4.74886C4.85167 4.70654 4.95027 4.74786 5.02297 4.82139C5.09567 4.89493 5.13652 4.99467 5.13652 5.09867C5.13652 5.20267 5.09567 5.30241 5.02297 5.37595C4.95027 5.44949 4.85167 5.4908 4.74886 5.4908H0.387662C0.284847 5.4908 0.186244 5.44949 0.113543 5.37595C0.0408428 5.30241 0 5.20267 0 5.09867ZM15.6836 5.60569C15.7563 5.67923 15.7971 5.77895 15.7971 5.88293C15.7971 5.98691 15.7563 6.08663 15.6836 6.16016L15.6532 6.19095C15.2897 6.55859 14.7968 6.76516 14.2828 6.76522H8.14089C8.03808 6.76522 7.93948 6.7239 7.86678 6.65037C7.79408 6.57683 7.75323 6.47709 7.75323 6.37309C7.75323 6.26909 7.79408 6.16935 7.86678 6.09581C7.93948 6.02227 8.03808 5.98096 8.14089 5.98096H14.2826C14.4354 5.98098 14.5866 5.95057 14.7277 5.89146C14.8688 5.83235 14.997 5.74571 15.105 5.63648L15.1355 5.60569C15.2082 5.53218 15.3068 5.49088 15.4096 5.49088C15.5123 5.49088 15.6109 5.53218 15.6836 5.60569ZM8.52856 14.6078C8.52856 14.5038 8.5694 14.4041 8.6421 14.3305C8.7148 14.257 8.8134 14.2157 8.91622 14.2157H10.5638C10.6666 14.2157 10.7652 14.257 10.8379 14.3305C10.9106 14.4041 10.9514 14.5038 10.9514 14.6078C10.9514 14.7118 10.9106 14.8115 10.8379 14.8851C10.7652 14.9586 10.6666 14.9999 10.5638 14.9999H8.91622C8.8134 14.9999 8.7148 14.9586 8.6421 14.8851C8.5694 14.8115 8.52856 14.7118 8.52856 14.6078ZM11.2422 14.6078C11.2422 14.5038 11.283 14.4041 11.3557 14.3305C11.4284 14.257 11.527 14.2157 11.6299 14.2157H15.991C16.0939 14.2157 16.1925 14.257 16.2652 14.3305C16.3379 14.4041 16.3787 14.5038 16.3787 14.6078C16.3787 14.7118 16.3379 14.8115 16.2652 14.8851C16.1925 14.9586 16.0939 14.9999 15.991 14.9999H11.6299C11.527 14.9999 11.4284 14.9586 11.3557 14.8851C11.283 14.8115 11.2422 14.7118 11.2422 14.6078Z">
                                            </path>
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
                                                d="M3.25973 0C3.15692 0 3.05831 0.0413135 2.98561 0.114852C2.91291 0.18839 2.87207 0.28813 2.87207 0.392129C2.87207 0.496128 2.91291 0.595867 2.98561 0.669405C3.05831 0.742944 3.15692 0.784257 3.25973 0.784257H4.81038C4.91319 0.784257 5.0118 0.742944 5.0845 0.669405C5.1572 0.595867 5.19804 0.496128 5.19804 0.392129C5.19804 0.28813 5.1572 0.18839 5.0845 0.114852C5.0118 0.0413135 4.91319 0 4.81038 0H3.25973ZM5.77953 0C5.67672 0 5.57812 0.0413135 5.50542 0.114852C5.43271 0.18839 5.39187 0.28813 5.39187 0.392129C5.39187 0.496128 5.43271 0.595867 5.50542 0.669405C5.57812 0.742944 5.67672 0.784257 5.77953 0.784257H10.3346C10.4374 0.784257 10.536 0.742944 10.6087 0.669405C10.6814 0.595867 10.7222 0.496128 10.7222 0.392129C10.7222 0.28813 10.6814 0.18839 10.6087 0.114852C10.536 0.0413135 10.4374 0 10.3346 0H5.77953Z">
                                            </path>
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M4.22966 2.74658C4.12685 2.74658 4.02824 2.7879 3.95554 2.86143C3.88284 2.93497 3.842 3.03471 3.842 3.13871C3.842 3.24271 3.88284 3.34245 3.95554 3.41599C4.02824 3.48953 4.12685 3.53084 4.22966 3.53084H13.1459C14.6535 3.53084 15.5827 3.76847 16.3261 4.15021C16.958 4.4745 17.4677 4.90564 18.106 5.4456C18.238 5.55716 18.3754 5.67323 18.5206 5.79421L18.6106 5.8691L18.7265 5.88145C22.2658 6.25829 23.0627 7.4684 23.2251 8.08796V9.60883C23.2251 9.71283 23.1842 9.81257 23.1115 9.88611C23.0388 9.95965 22.9402 10.001 22.8374 10.001H21.8361C21.6516 8.8883 20.6948 8.04032 19.5423 8.04032C18.3898 8.04032 17.433 8.8883 17.2485 10.001H10.2062C10.0217 8.8883 9.06497 8.04032 7.91245 8.04032C6.75993 8.04032 5.80318 8.8883 5.61865 10.001H3.74508C3.64227 10.001 3.54367 10.0423 3.47097 10.1158C3.39826 10.1894 3.35742 10.2891 3.35742 10.3931C3.35742 10.4971 3.39826 10.5968 3.47097 10.6704C3.54367 10.7439 3.64227 10.7852 3.74508 10.7852H5.61865C5.80318 11.8979 6.75993 12.7459 7.91245 12.7459C9.06497 12.7459 10.0217 11.8979 10.2062 10.7852H17.2485C17.433 11.8979 18.3898 12.7459 19.5423 12.7459C20.6948 12.7459 21.6516 11.8979 21.8361 10.7852H22.8374C23.1459 10.7852 23.4417 10.6613 23.6598 10.4407C23.8779 10.22 24.0004 9.92083 24.0004 9.60883V7.99562L23.9905 7.95209C23.7436 6.87001 22.5796 5.52874 18.9244 5.11425C18.8222 5.02877 18.722 4.94368 18.6232 4.85996C17.9833 4.31784 17.3947 3.81905 16.6771 3.45065C15.7971 2.99911 14.7396 2.74658 13.1459 2.74658H4.22966ZM17.9917 10.3931C17.9917 9.9771 18.155 9.57814 18.4458 9.28398C18.7366 8.98983 19.131 8.82458 19.5423 8.82458C19.9536 8.82458 20.348 8.98983 20.6388 9.28398C20.9296 9.57814 21.0929 9.9771 21.0929 10.3931C21.0929 10.8091 20.9296 11.208 20.6388 11.5022C20.348 11.7964 19.9536 11.9616 19.5423 11.9616C19.131 11.9616 18.7366 11.7964 18.4458 11.5022C18.155 11.208 17.9917 10.8091 17.9917 10.3931ZM7.91245 8.82458C7.50119 8.82458 7.10678 8.98983 6.81597 9.28398C6.52517 9.57814 6.3618 9.9771 6.3618 10.3931C6.3618 10.8091 6.52517 11.208 6.81597 11.5022C7.10678 11.7964 7.50119 11.9616 7.91245 11.9616C8.3237 11.9616 8.71812 11.7964 9.00892 11.5022C9.29972 11.208 9.46309 10.8091 9.46309 10.3931C9.46309 9.9771 9.29972 9.57814 9.00892 9.28398C8.71812 8.98983 8.3237 8.82458 7.91245 8.82458Z">
                                            </path>
                                            <path
                                                d="M0 5.09867C0 4.99467 0.0408428 4.89493 0.113543 4.82139C0.186244 4.74786 0.284847 4.70654 0.387662 4.70654H4.74886C4.85167 4.70654 4.95027 4.74786 5.02297 4.82139C5.09567 4.89493 5.13652 4.99467 5.13652 5.09867C5.13652 5.20267 5.09567 5.30241 5.02297 5.37595C4.95027 5.44949 4.85167 5.4908 4.74886 5.4908H0.387662C0.284847 5.4908 0.186244 5.44949 0.113543 5.37595C0.0408428 5.30241 0 5.20267 0 5.09867ZM15.6836 5.60569C15.7563 5.67923 15.7971 5.77895 15.7971 5.88293C15.7971 5.98691 15.7563 6.08663 15.6836 6.16016L15.6532 6.19095C15.2897 6.55859 14.7968 6.76516 14.2828 6.76522H8.14089C8.03808 6.76522 7.93948 6.7239 7.86678 6.65037C7.79408 6.57683 7.75323 6.47709 7.75323 6.37309C7.75323 6.26909 7.79408 6.16935 7.86678 6.09581C7.93948 6.02227 8.03808 5.98096 8.14089 5.98096H14.2826C14.4354 5.98098 14.5866 5.95057 14.7277 5.89146C14.8688 5.83235 14.997 5.74571 15.105 5.63648L15.1355 5.60569C15.2082 5.53218 15.3068 5.49088 15.4096 5.49088C15.5123 5.49088 15.6109 5.53218 15.6836 5.60569ZM8.52856 14.6078C8.52856 14.5038 8.5694 14.4041 8.6421 14.3305C8.7148 14.257 8.8134 14.2157 8.91622 14.2157H10.5638C10.6666 14.2157 10.7652 14.257 10.8379 14.3305C10.9106 14.4041 10.9514 14.5038 10.9514 14.6078C10.9514 14.7118 10.9106 14.8115 10.8379 14.8851C10.7652 14.9586 10.6666 14.9999 10.5638 14.9999H8.91622C8.8134 14.9999 8.7148 14.9586 8.6421 14.8851C8.5694 14.8115 8.52856 14.7118 8.52856 14.6078ZM11.2422 14.6078C11.2422 14.5038 11.283 14.4041 11.3557 14.3305C11.4284 14.257 11.527 14.2157 11.6299 14.2157H15.991C16.0939 14.2157 16.1925 14.257 16.2652 14.3305C16.3379 14.4041 16.3787 14.5038 16.3787 14.6078C16.3787 14.7118 16.3379 14.8115 16.2652 14.8851C16.1925 14.9586 16.0939 14.9999 15.991 14.9999H11.6299C11.527 14.9999 11.4284 14.9586 11.3557 14.8851C11.283 14.8115 11.2422 14.7118 11.2422 14.6078Z">
                                            </path>
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
                                                    <h6 class="title"><a href="car-deatils.html">Tesla Roadster</a></h6>
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
                                                d="M3.25973 0C3.15692 0 3.05831 0.0413135 2.98561 0.114852C2.91291 0.18839 2.87207 0.28813 2.87207 0.392129C2.87207 0.496128 2.91291 0.595867 2.98561 0.669405C3.05831 0.742944 3.15692 0.784257 3.25973 0.784257H4.81038C4.91319 0.784257 5.0118 0.742944 5.0845 0.669405C5.1572 0.595867 5.19804 0.496128 5.19804 0.392129C5.19804 0.28813 5.1572 0.18839 5.0845 0.114852C5.0118 0.0413135 4.91319 0 4.81038 0H3.25973ZM5.77953 0C5.67672 0 5.57812 0.0413135 5.50542 0.114852C5.43271 0.18839 5.39187 0.28813 5.39187 0.392129C5.39187 0.496128 5.43271 0.595867 5.50542 0.669405C5.57812 0.742944 5.67672 0.784257 5.77953 0.784257H10.3346C10.4374 0.784257 10.536 0.742944 10.6087 0.669405C10.6814 0.595867 10.7222 0.496128 10.7222 0.392129C10.7222 0.28813 10.6814 0.18839 10.6087 0.114852C10.536 0.0413135 10.4374 0 10.3346 0H5.77953Z">
                                            </path>
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M4.22966 2.74658C4.12685 2.74658 4.02824 2.7879 3.95554 2.86143C3.88284 2.93497 3.842 3.03471 3.842 3.13871C3.842 3.24271 3.88284 3.34245 3.95554 3.41599C4.02824 3.48953 4.12685 3.53084 4.22966 3.53084H13.1459C14.6535 3.53084 15.5827 3.76847 16.3261 4.15021C16.958 4.4745 17.4677 4.90564 18.106 5.4456C18.238 5.55716 18.3754 5.67323 18.5206 5.79421L18.6106 5.8691L18.7265 5.88145C22.2658 6.25829 23.0627 7.4684 23.2251 8.08796V9.60883C23.2251 9.71283 23.1842 9.81257 23.1115 9.88611C23.0388 9.95965 22.9402 10.001 22.8374 10.001H21.8361C21.6516 8.8883 20.6948 8.04032 19.5423 8.04032C18.3898 8.04032 17.433 8.8883 17.2485 10.001H10.2062C10.0217 8.8883 9.06497 8.04032 7.91245 8.04032C6.75993 8.04032 5.80318 8.8883 5.61865 10.001H3.74508C3.64227 10.001 3.54367 10.0423 3.47097 10.1158C3.39826 10.1894 3.35742 10.2891 3.35742 10.3931C3.35742 10.4971 3.39826 10.5968 3.47097 10.6704C3.54367 10.7439 3.64227 10.7852 3.74508 10.7852H5.61865C5.80318 11.8979 6.75993 12.7459 7.91245 12.7459C9.06497 12.7459 10.0217 11.8979 10.2062 10.7852H17.2485C17.433 11.8979 18.3898 12.7459 19.5423 12.7459C20.6948 12.7459 21.6516 11.8979 21.8361 10.7852H22.8374C23.1459 10.7852 23.4417 10.6613 23.6598 10.4407C23.8779 10.22 24.0004 9.92083 24.0004 9.60883V7.99562L23.9905 7.95209C23.7436 6.87001 22.5796 5.52874 18.9244 5.11425C18.8222 5.02877 18.722 4.94368 18.6232 4.85996C17.9833 4.31784 17.3947 3.81905 16.6771 3.45065C15.7971 2.99911 14.7396 2.74658 13.1459 2.74658H4.22966ZM17.9917 10.3931C17.9917 9.9771 18.155 9.57814 18.4458 9.28398C18.7366 8.98983 19.131 8.82458 19.5423 8.82458C19.9536 8.82458 20.348 8.98983 20.6388 9.28398C20.9296 9.57814 21.0929 9.9771 21.0929 10.3931C21.0929 10.8091 20.9296 11.208 20.6388 11.5022C20.348 11.7964 19.9536 11.9616 19.5423 11.9616C19.131 11.9616 18.7366 11.7964 18.4458 11.5022C18.155 11.208 17.9917 10.8091 17.9917 10.3931ZM7.91245 8.82458C7.50119 8.82458 7.10678 8.98983 6.81597 9.28398C6.52517 9.57814 6.3618 9.9771 6.3618 10.3931C6.3618 10.8091 6.52517 11.208 6.81597 11.5022C7.10678 11.7964 7.50119 11.9616 7.91245 11.9616C8.3237 11.9616 8.71812 11.7964 9.00892 11.5022C9.29972 11.208 9.46309 10.8091 9.46309 10.3931C9.46309 9.9771 9.29972 9.57814 9.00892 9.28398C8.71812 8.98983 8.3237 8.82458 7.91245 8.82458Z">
                                            </path>
                                            <path
                                                d="M0 5.09867C0 4.99467 0.0408428 4.89493 0.113543 4.82139C0.186244 4.74786 0.284847 4.70654 0.387662 4.70654H4.74886C4.85167 4.70654 4.95027 4.74786 5.02297 4.82139C5.09567 4.89493 5.13652 4.99467 5.13652 5.09867C5.13652 5.20267 5.09567 5.30241 5.02297 5.37595C4.95027 5.44949 4.85167 5.4908 4.74886 5.4908H0.387662C0.284847 5.4908 0.186244 5.44949 0.113543 5.37595C0.0408428 5.30241 0 5.20267 0 5.09867ZM15.6836 5.60569C15.7563 5.67923 15.7971 5.77895 15.7971 5.88293C15.7971 5.98691 15.7563 6.08663 15.6836 6.16016L15.6532 6.19095C15.2897 6.55859 14.7968 6.76516 14.2828 6.76522H8.14089C8.03808 6.76522 7.93948 6.7239 7.86678 6.65037C7.79408 6.57683 7.75323 6.47709 7.75323 6.37309C7.75323 6.26909 7.79408 6.16935 7.86678 6.09581C7.93948 6.02227 8.03808 5.98096 8.14089 5.98096H14.2826C14.4354 5.98098 14.5866 5.95057 14.7277 5.89146C14.8688 5.83235 14.997 5.74571 15.105 5.63648L15.1355 5.60569C15.2082 5.53218 15.3068 5.49088 15.4096 5.49088C15.5123 5.49088 15.6109 5.53218 15.6836 5.60569ZM8.52856 14.6078C8.52856 14.5038 8.5694 14.4041 8.6421 14.3305C8.7148 14.257 8.8134 14.2157 8.91622 14.2157H10.5638C10.6666 14.2157 10.7652 14.257 10.8379 14.3305C10.9106 14.4041 10.9514 14.5038 10.9514 14.6078C10.9514 14.7118 10.9106 14.8115 10.8379 14.8851C10.7652 14.9586 10.6666 14.9999 10.5638 14.9999H8.91622C8.8134 14.9999 8.7148 14.9586 8.6421 14.8851C8.5694 14.8115 8.52856 14.7118 8.52856 14.6078ZM11.2422 14.6078C11.2422 14.5038 11.283 14.4041 11.3557 14.3305C11.4284 14.257 11.527 14.2157 11.6299 14.2157H15.991C16.0939 14.2157 16.1925 14.257 16.2652 14.3305C16.3379 14.4041 16.3787 14.5038 16.3787 14.6078C16.3787 14.7118 16.3379 14.8115 16.2652 14.8851C16.1925 14.9586 16.0939 14.9999 15.991 14.9999H11.6299C11.527 14.9999 11.4284 14.9586 11.3557 14.8851C11.283 14.8115 11.2422 14.7118 11.2422 14.6078Z">
                                            </path>
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
                                                d="M3.25973 0C3.15692 0 3.05831 0.0413135 2.98561 0.114852C2.91291 0.18839 2.87207 0.28813 2.87207 0.392129C2.87207 0.496128 2.91291 0.595867 2.98561 0.669405C3.05831 0.742944 3.15692 0.784257 3.25973 0.784257H4.81038C4.91319 0.784257 5.0118 0.742944 5.0845 0.669405C5.1572 0.595867 5.19804 0.496128 5.19804 0.392129C5.19804 0.28813 5.1572 0.18839 5.0845 0.114852C5.0118 0.0413135 4.91319 0 4.81038 0H3.25973ZM5.77953 0C5.67672 0 5.57812 0.0413135 5.50542 0.114852C5.43271 0.18839 5.39187 0.28813 5.39187 0.392129C5.39187 0.496128 5.43271 0.595867 5.50542 0.669405C5.57812 0.742944 5.67672 0.784257 5.77953 0.784257H10.3346C10.4374 0.784257 10.536 0.742944 10.6087 0.669405C10.6814 0.595867 10.7222 0.496128 10.7222 0.392129C10.7222 0.28813 10.6814 0.18839 10.6087 0.114852C10.536 0.0413135 10.4374 0 10.3346 0H5.77953Z">
                                            </path>
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M4.22966 2.74658C4.12685 2.74658 4.02824 2.7879 3.95554 2.86143C3.88284 2.93497 3.842 3.03471 3.842 3.13871C3.842 3.24271 3.88284 3.34245 3.95554 3.41599C4.02824 3.48953 4.12685 3.53084 4.22966 3.53084H13.1459C14.6535 3.53084 15.5827 3.76847 16.3261 4.15021C16.958 4.4745 17.4677 4.90564 18.106 5.4456C18.238 5.55716 18.3754 5.67323 18.5206 5.79421L18.6106 5.8691L18.7265 5.88145C22.2658 6.25829 23.0627 7.4684 23.2251 8.08796V9.60883C23.2251 9.71283 23.1842 9.81257 23.1115 9.88611C23.0388 9.95965 22.9402 10.001 22.8374 10.001H21.8361C21.6516 8.8883 20.6948 8.04032 19.5423 8.04032C18.3898 8.04032 17.433 8.8883 17.2485 10.001H10.2062C10.0217 8.8883 9.06497 8.04032 7.91245 8.04032C6.75993 8.04032 5.80318 8.8883 5.61865 10.001H3.74508C3.64227 10.001 3.54367 10.0423 3.47097 10.1158C3.39826 10.1894 3.35742 10.2891 3.35742 10.3931C3.35742 10.4971 3.39826 10.5968 3.47097 10.6704C3.54367 10.7439 3.64227 10.7852 3.74508 10.7852H5.61865C5.80318 11.8979 6.75993 12.7459 7.91245 12.7459C9.06497 12.7459 10.0217 11.8979 10.2062 10.7852H17.2485C17.433 11.8979 18.3898 12.7459 19.5423 12.7459C20.6948 12.7459 21.6516 11.8979 21.8361 10.7852H22.8374C23.1459 10.7852 23.4417 10.6613 23.6598 10.4407C23.8779 10.22 24.0004 9.92083 24.0004 9.60883V7.99562L23.9905 7.95209C23.7436 6.87001 22.5796 5.52874 18.9244 5.11425C18.8222 5.02877 18.722 4.94368 18.6232 4.85996C17.9833 4.31784 17.3947 3.81905 16.6771 3.45065C15.7971 2.99911 14.7396 2.74658 13.1459 2.74658H4.22966ZM17.9917 10.3931C17.9917 9.9771 18.155 9.57814 18.4458 9.28398C18.7366 8.98983 19.131 8.82458 19.5423 8.82458C19.9536 8.82458 20.348 8.98983 20.6388 9.28398C20.9296 9.57814 21.0929 9.9771 21.0929 10.3931C21.0929 10.8091 20.9296 11.208 20.6388 11.5022C20.348 11.7964 19.9536 11.9616 19.5423 11.9616C19.131 11.9616 18.7366 11.7964 18.4458 11.5022C18.155 11.208 17.9917 10.8091 17.9917 10.3931ZM7.91245 8.82458C7.50119 8.82458 7.10678 8.98983 6.81597 9.28398C6.52517 9.57814 6.3618 9.9771 6.3618 10.3931C6.3618 10.8091 6.52517 11.208 6.81597 11.5022C7.10678 11.7964 7.50119 11.9616 7.91245 11.9616C8.3237 11.9616 8.71812 11.7964 9.00892 11.5022C9.29972 11.208 9.46309 10.8091 9.46309 10.3931C9.46309 9.9771 9.29972 9.57814 9.00892 9.28398C8.71812 8.98983 8.3237 8.82458 7.91245 8.82458Z">
                                            </path>
                                            <path
                                                d="M0 5.09867C0 4.99467 0.0408428 4.89493 0.113543 4.82139C0.186244 4.74786 0.284847 4.70654 0.387662 4.70654H4.74886C4.85167 4.70654 4.95027 4.74786 5.02297 4.82139C5.09567 4.89493 5.13652 4.99467 5.13652 5.09867C5.13652 5.20267 5.09567 5.30241 5.02297 5.37595C4.95027 5.44949 4.85167 5.4908 4.74886 5.4908H0.387662C0.284847 5.4908 0.186244 5.44949 0.113543 5.37595C0.0408428 5.30241 0 5.20267 0 5.09867ZM15.6836 5.60569C15.7563 5.67923 15.7971 5.77895 15.7971 5.88293C15.7971 5.98691 15.7563 6.08663 15.6836 6.16016L15.6532 6.19095C15.2897 6.55859 14.7968 6.76516 14.2828 6.76522H8.14089C8.03808 6.76522 7.93948 6.7239 7.86678 6.65037C7.79408 6.57683 7.75323 6.47709 7.75323 6.37309C7.75323 6.26909 7.79408 6.16935 7.86678 6.09581C7.93948 6.02227 8.03808 5.98096 8.14089 5.98096H14.2826C14.4354 5.98098 14.5866 5.95057 14.7277 5.89146C14.8688 5.83235 14.997 5.74571 15.105 5.63648L15.1355 5.60569C15.2082 5.53218 15.3068 5.49088 15.4096 5.49088C15.5123 5.49088 15.6109 5.53218 15.6836 5.60569ZM8.52856 14.6078C8.52856 14.5038 8.5694 14.4041 8.6421 14.3305C8.7148 14.257 8.8134 14.2157 8.91622 14.2157H10.5638C10.6666 14.2157 10.7652 14.257 10.8379 14.3305C10.9106 14.4041 10.9514 14.5038 10.9514 14.6078C10.9514 14.7118 10.9106 14.8115 10.8379 14.8851C10.7652 14.9586 10.6666 14.9999 10.5638 14.9999H8.91622C8.8134 14.9999 8.7148 14.9586 8.6421 14.8851C8.5694 14.8115 8.52856 14.7118 8.52856 14.6078ZM11.2422 14.6078C11.2422 14.5038 11.283 14.4041 11.3557 14.3305C11.4284 14.257 11.527 14.2157 11.6299 14.2157H15.991C16.0939 14.2157 16.1925 14.257 16.2652 14.3305C16.3379 14.4041 16.3787 14.5038 16.3787 14.6078C16.3787 14.7118 16.3379 14.8115 16.2652 14.8851C16.1925 14.9586 16.0939 14.9999 15.991 14.9999H11.6299C11.527 14.9999 11.4284 14.9586 11.3557 14.8851C11.283 14.8115 11.2422 14.7118 11.2422 14.6078Z">
                                            </path>
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
                                                d="M3.25973 0C3.15692 0 3.05831 0.0413135 2.98561 0.114852C2.91291 0.18839 2.87207 0.28813 2.87207 0.392129C2.87207 0.496128 2.91291 0.595867 2.98561 0.669405C3.05831 0.742944 3.15692 0.784257 3.25973 0.784257H4.81038C4.91319 0.784257 5.0118 0.742944 5.0845 0.669405C5.1572 0.595867 5.19804 0.496128 5.19804 0.392129C5.19804 0.28813 5.1572 0.18839 5.0845 0.114852C5.0118 0.0413135 4.91319 0 4.81038 0H3.25973ZM5.77953 0C5.67672 0 5.57812 0.0413135 5.50542 0.114852C5.43271 0.18839 5.39187 0.28813 5.39187 0.392129C5.39187 0.496128 5.43271 0.595867 5.50542 0.669405C5.57812 0.742944 5.67672 0.784257 5.77953 0.784257H10.3346C10.4374 0.784257 10.536 0.742944 10.6087 0.669405C10.6814 0.595867 10.7222 0.496128 10.7222 0.392129C10.7222 0.28813 10.6814 0.18839 10.6087 0.114852C10.536 0.0413135 10.4374 0 10.3346 0H5.77953Z">
                                            </path>
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M4.22966 2.74658C4.12685 2.74658 4.02824 2.7879 3.95554 2.86143C3.88284 2.93497 3.842 3.03471 3.842 3.13871C3.842 3.24271 3.88284 3.34245 3.95554 3.41599C4.02824 3.48953 4.12685 3.53084 4.22966 3.53084H13.1459C14.6535 3.53084 15.5827 3.76847 16.3261 4.15021C16.958 4.4745 17.4677 4.90564 18.106 5.4456C18.238 5.55716 18.3754 5.67323 18.5206 5.79421L18.6106 5.8691L18.7265 5.88145C22.2658 6.25829 23.0627 7.4684 23.2251 8.08796V9.60883C23.2251 9.71283 23.1842 9.81257 23.1115 9.88611C23.0388 9.95965 22.9402 10.001 22.8374 10.001H21.8361C21.6516 8.8883 20.6948 8.04032 19.5423 8.04032C18.3898 8.04032 17.433 8.8883 17.2485 10.001H10.2062C10.0217 8.8883 9.06497 8.04032 7.91245 8.04032C6.75993 8.04032 5.80318 8.8883 5.61865 10.001H3.74508C3.64227 10.001 3.54367 10.0423 3.47097 10.1158C3.39826 10.1894 3.35742 10.2891 3.35742 10.3931C3.35742 10.4971 3.39826 10.5968 3.47097 10.6704C3.54367 10.7439 3.64227 10.7852 3.74508 10.7852H5.61865C5.80318 11.8979 6.75993 12.7459 7.91245 12.7459C9.06497 12.7459 10.0217 11.8979 10.2062 10.7852H17.2485C17.433 11.8979 18.3898 12.7459 19.5423 12.7459C20.6948 12.7459 21.6516 11.8979 21.8361 10.7852H22.8374C23.1459 10.7852 23.4417 10.6613 23.6598 10.4407C23.8779 10.22 24.0004 9.92083 24.0004 9.60883V7.99562L23.9905 7.95209C23.7436 6.87001 22.5796 5.52874 18.9244 5.11425C18.8222 5.02877 18.722 4.94368 18.6232 4.85996C17.9833 4.31784 17.3947 3.81905 16.6771 3.45065C15.7971 2.99911 14.7396 2.74658 13.1459 2.74658H4.22966ZM17.9917 10.3931C17.9917 9.9771 18.155 9.57814 18.4458 9.28398C18.7366 8.98983 19.131 8.82458 19.5423 8.82458C19.9536 8.82458 20.348 8.98983 20.6388 9.28398C20.9296 9.57814 21.0929 9.9771 21.0929 10.3931C21.0929 10.8091 20.9296 11.208 20.6388 11.5022C20.348 11.7964 19.9536 11.9616 19.5423 11.9616C19.131 11.9616 18.7366 11.7964 18.4458 11.5022C18.155 11.208 17.9917 10.8091 17.9917 10.3931ZM7.91245 8.82458C7.50119 8.82458 7.10678 8.98983 6.81597 9.28398C6.52517 9.57814 6.3618 9.9771 6.3618 10.3931C6.3618 10.8091 6.52517 11.208 6.81597 11.5022C7.10678 11.7964 7.50119 11.9616 7.91245 11.9616C8.3237 11.9616 8.71812 11.7964 9.00892 11.5022C9.29972 11.208 9.46309 10.8091 9.46309 10.3931C9.46309 9.9771 9.29972 9.57814 9.00892 9.28398C8.71812 8.98983 8.3237 8.82458 7.91245 8.82458Z">
                                            </path>
                                            <path
                                                d="M0 5.09867C0 4.99467 0.0408428 4.89493 0.113543 4.82139C0.186244 4.74786 0.284847 4.70654 0.387662 4.70654H4.74886C4.85167 4.70654 4.95027 4.74786 5.02297 4.82139C5.09567 4.89493 5.13652 4.99467 5.13652 5.09867C5.13652 5.20267 5.09567 5.30241 5.02297 5.37595C4.95027 5.44949 4.85167 5.4908 4.74886 5.4908H0.387662C0.284847 5.4908 0.186244 5.44949 0.113543 5.37595C0.0408428 5.30241 0 5.20267 0 5.09867ZM15.6836 5.60569C15.7563 5.67923 15.7971 5.77895 15.7971 5.88293C15.7971 5.98691 15.7563 6.08663 15.6836 6.16016L15.6532 6.19095C15.2897 6.55859 14.7968 6.76516 14.2828 6.76522H8.14089C8.03808 6.76522 7.93948 6.7239 7.86678 6.65037C7.79408 6.57683 7.75323 6.47709 7.75323 6.37309C7.75323 6.26909 7.79408 6.16935 7.86678 6.09581C7.93948 6.02227 8.03808 5.98096 8.14089 5.98096H14.2826C14.4354 5.98098 14.5866 5.95057 14.7277 5.89146C14.8688 5.83235 14.997 5.74571 15.105 5.63648L15.1355 5.60569C15.2082 5.53218 15.3068 5.49088 15.4096 5.49088C15.5123 5.49088 15.6109 5.53218 15.6836 5.60569ZM8.52856 14.6078C8.52856 14.5038 8.5694 14.4041 8.6421 14.3305C8.7148 14.257 8.8134 14.2157 8.91622 14.2157H10.5638C10.6666 14.2157 10.7652 14.257 10.8379 14.3305C10.9106 14.4041 10.9514 14.5038 10.9514 14.6078C10.9514 14.7118 10.9106 14.8115 10.8379 14.8851C10.7652 14.9586 10.6666 14.9999 10.5638 14.9999H8.91622C8.8134 14.9999 8.7148 14.9586 8.6421 14.8851C8.5694 14.8115 8.52856 14.7118 8.52856 14.6078ZM11.2422 14.6078C11.2422 14.5038 11.283 14.4041 11.3557 14.3305C11.4284 14.257 11.527 14.2157 11.6299 14.2157H15.991C16.0939 14.2157 16.1925 14.257 16.2652 14.3305C16.3379 14.4041 16.3787 14.5038 16.3787 14.6078C16.3787 14.7118 16.3379 14.8115 16.2652 14.8851C16.1925 14.9586 16.0939 14.9999 15.991 14.9999H11.6299C11.527 14.9999 11.4284 14.9586 11.3557 14.8851C11.283 14.8115 11.2422 14.7118 11.2422 14.6078Z">
                                            </path>
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


    <div class="news-section five six pb-90 pt-90">
        <div class="container">
            <div class="row mb-60 wow fadeInUp" data-wow-delay="200ms"
                style="visibility: visible; animation-delay: 200ms;">
                <div class="col-lg-12 d-flex align-items-end justify-content-between flex-wrap gap-4">
                    <div class="section-title-2">
                        <h2>Latest Car Advice</h2>
                        <p>Here are some of the featured cars in different categories</p>
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
   
    <script>
        var botmanWidget = {
            aboutText: 'ssdsd',
            introMessage: "✋ Hi! I'm form ItSolutionStuff.com"
        };
    </script>

    <script src='https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/js/widget.js'></script>
@endsection
