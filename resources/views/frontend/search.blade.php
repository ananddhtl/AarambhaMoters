@extends('welcome')
@section('content')
    <style>
        .slidecontainer {
            width: 100%;
        }

        .slider {
            -webkit-appearance: none;
            width: 100%;
            height: 25px;
            background: #d3d3d3;
            outline: none;
            opacity: 0.7;
            -webkit-transition: .2s;
            transition: opacity .2s;
        }

        .slider:hover {
            opacity: 1;
        }

        .slider::-webkit-slider-thumb {
            -webkit-appearance: none;
            appearance: none;
            width: 25px;
            height: 25px;
            background: #04AA6D;
            cursor: pointer;
        }

        .slider::-moz-range-thumb {
            width: 25px;
            height: 25px;
            background: #04AA6D;
            cursor: pointer;
        }
    </style>
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
            {{-- <div class="row mb-40">
                <div class="col-lg-3">
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
               
            </div> --}}
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
                    {{-- <div class="row">
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
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
@endsection
