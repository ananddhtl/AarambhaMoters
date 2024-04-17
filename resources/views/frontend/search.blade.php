@extends('welcome')
@section('content')
    <div class="inner-page-banner">
        <div class="banner-wrapper">
            <div class="container-fluid">
                <ul class="breadcrumb-list">
                    <li><a href="index.html">Search</a></li>
                    <li>Aarambha Motors</li>
                </ul>
                <div class="banner-main-content-wrap">
                    <div class="row">
                        <div class="col-xl-6 col-lg-7 d-flex align-items-center">
                            <div class="banner-content">
                                <span class="sub-title">Shop Vehicles</span>
                                <h1>Shop Vehicles</h1>
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

    <div class="product-page mb-100">
        <div class="container">
            <div class="row mb-40">
                <div class="col-lg-12">
                    <div class="show-item-and-filter"><br>
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
                                        <img src="{{ $item->image_path }}" alt>
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
                                            <a class="primary-btn2" href="#" style="margin-top: 25px;">View
                                                Details</a>
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
