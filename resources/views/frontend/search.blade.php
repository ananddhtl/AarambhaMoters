@extends('welcome')
@section('content')
    <div class="inner-page-banner">
        <div class="banner-wrapper">
            <div class="container-fluid">
                <ul class="breadcrumb-list">
                    <li><a href="index.html">Home</a></li>
                    <li>Shop Car Parts</li>
                </ul>
                <div class="banner-main-content-wrap">
                    <div class="row">
                        <div class="col-xl-6 col-lg-7 d-flex align-items-center">
                            <div class="banner-content">
                                <span class="sub-title">Shop Car Parts</span>
                                <h1>Shop Vehicles Parts</h1>
                                <div class="customar-review">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <div class="review-top">
                                                    <div class="logo">
                                                        <img src="assets/img/home1/icon/trstpilot-logo.svg" alt>
                                                    </div>
                                                    <div class="star">
                                                        <img src="assets/img/home1/icon/trustpilot-star.svg" alt>
                                                    </div>
                                                </div>
                                                <div class="content">
                                                    <ul>
                                                        <li>Trust Rating <span>5.0</span></li>
                                                        <li><span>2348</span> Reviews</li>
                                                    </ul>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="review-top">
                                                    <div class="logo">
                                                        <img src="assets/img/home1/icon/google-logo.svg" alt>
                                                    </div>
                                                    <div class="star">
                                                        <ul>
                                                            <li><i class="bi bi-star-fill"></i></li>
                                                            <li><i class="bi bi-star-fill"></i></li>
                                                            <li><i class="bi bi-star-fill"></i></li>
                                                            <li><i class="bi bi-star-fill"></i></li>
                                                            <li><i class="bi bi-star-half"></i></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="content">
                                                    <ul>
                                                        <li>Trust Rating <span>5.0</span></li>
                                                        <li><span>2348</span> Reviews</li>
                                                    </ul>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-5 d-lg-flex d-none align-items-center justify-content-end">
                            <div class="banner-img">
                                <img src="assets/img/inner-page/product-dt-bannner-img.png" alt>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="product-search-area mb-100">
        <div class="container">
            <form>
                <div class="row row-cols-xl-5 row-cols-md-3 row-cols-sm-2 row-cols-1 g-3 justify-content-center">
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
                                <option>Civic Type R</option>
                                <option>RS e tron GT</option>
                                <option>S-2023</option>
                                <option>Sonata-2022</option>
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-inner">
                            <label>Select Engine*</label>
                            <select>
                                <option>1500 cc</option>
                                <option>1800 cc</option>
                                <option>2500 cc</option>
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-inner">
                            <label>Select Parts*</label>
                            <select>
                                <option>Brake</option>
                                <option>Battery</option>
                                <option>Engine</option>
                                <option>Clutch</option>
                                <option>Radiator</option>
                                <option>Air filter</option>
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

    <div class="product-page mb-100">
        <div class="container">
            <div class="row mb-40">
                <div class="col-lg-12">
                    <div class="show-item-and-filte">
                        <p>Showing <strong>60</strong> results of <strong>1,245</strong> car parts</p>
                        <div class="filter-atra">
                            <h6>Filter By:</h6>
                            <form>
                                <div class="form-inner">
                                    <select>
                                        <option value="1">Popular</option>
                                        <option value="1">Newest</option>
                                        <option value="2">Older</option>
                                    </select>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row g-xl-4 gy-5">
                
                <div class="col-xl-12">
                    <div class="row g-4 mb-40">
                        @foreach ($vehicles as $item)
                        <div class="col-lg-4">
                            <div class="shop-card2">
                                <div class="shop-img">
                                    <img src="{{$item->image_path}}" alt>
                                    <div class="offer-batch">
                                      
                                    </div>
                                    <a href="#" class="fav">
                                        <svg width="12" height="11" viewBox="0 0 14 14"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M7.00012 2.40453L6.37273 1.75966C4.90006 0.245917 2.19972 0.76829 1.22495 2.67141C0.767306 3.56653 0.664053 4.8589 1.4997 6.50827C2.30473 8.09639 3.97953 9.99864 7.00012 12.0706C10.0207 9.99864 11.6946 8.09639 12.5005 6.50827C13.3362 4.85803 13.2338 3.56653 12.7753 2.67141C11.8005 0.76829 9.10019 0.245042 7.62752 1.75879L7.00012 2.40453ZM7.00012 13.125C-6.41666 4.25953 2.86912 -2.65995 6.84612 1.00016C6.89862 1.04829 6.95024 1.09816 7.00012 1.14979C7.04949 1.09821 7.10087 1.04859 7.15413 1.00104C11.1302 -2.6617 20.4169 4.25865 7.00012 13.125Z">
                                            </path>
                                        </svg>
                                    </a>
                                </div>
                                <div class="content">
                                    <div class="cart-btn">
                                        <a class="primary-btn2" href="#">View Details</a>
                                    </div>
                                    
                                    <h6><a href="product-details.html">{{ $item->name }}</a>
                                    </h6>
                                    <div class="content-btm">
                                        <div class="price">
                                            <h6>Rs{{ $item->price }}/-</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="pagination-and-next-prev">
                                <div class="pagination">
                                    <ul>
                                        <li class="active"><a href="#">01</a></li>
                                        <li><a href="#">02</a></li>
                                        <li><a href="#">03</a></li>
                                        <li><a href="#">04</a></li>
                                        <li><a href="#">05</a></li>
                                    </ul>
                                </div>
                                <div class="next-prev-btn">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="7" height="14"
                                                    viewBox="0 0 7 14">
                                                    <path d="M0 7.00008L7 0L2.54545 7.00008L7 14L0 7.00008Z" />
                                                </svg> Prev
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                Next
                                                <svg xmlns="http://www.w3.org/2000/svg" width="7" height="14"
                                                    viewBox="0 0 7 14">
                                                    <path d="M7 7.00008L0 0L4.45455 7.00008L0 14L7 7.00008Z" />
                                                </svg>
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
    </div>
@endsection
