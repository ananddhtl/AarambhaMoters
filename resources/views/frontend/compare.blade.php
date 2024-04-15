@extends('welcome')
@section('content')
    <div class="inner-page-banner">
        <div class="banner-wrapper">
            <div class="container-fluid">
                <ul class="breadcrumb-list">
                    <li><a href="index.html">Home</a></li>
                    <li>Compare Cars</li>
                </ul>
                <div class="banner-main-content-wrap">
                    <div class="row">
                        <div class="col-xl-6 col-lg-7 d-flex align-items-center">
                            <div class="banner-content">
                                <span class="sub-title">Compare Cars</span>
                                <h1>Find The Best Car</h1>
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
                                                        <img src="assets/img/home1/icon/google-logo.svg" alt="">
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
                                <img src="assets/img/inner-page/inner-banner-img.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="compare-page pt-100 mb-100">
        <div class="container">
            <div class="row g-4 mb-50">
                <div class="col-lg-4">
                    <div class="product-upload-area text-center">
                        <div class="upload-area">
                            <i class="bi bi-plus"></i>
                        </div>
                        <div class="comparea-content">
                            <h6>Add to Compare</h6>
                            <div class="change-model">
                                <select style="display: none;">
                                    <option value="1">Select Car </option>
                                    <option value="2">C-Class-2020</option>
                                    <option value="3">C-Class-2021</option>
                                    <option value="4">C-Class-2022</option>
                                    <option value="5">C-Class-2023</option>
                                </select>
                                <div class="nice-select" tabindex="0"><span class="current">Select Car</span>
                                    <ul class="list">
                                        <li data-value="1" class="option selected">Select Car </li>
                                        <li data-value="2" class="option">C-Class-2020</li>
                                        <li data-value="3" class="option">C-Class-2021</li>
                                        <li data-value="4" class="option">C-Class-2022</li>
                                        <li data-value="5" class="option">C-Class-2023</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="uploded-product-group">
                        <div class="row g-4">
                            <div class="col-md-6">
                                <div class="product-card style-2 compare">
                                    <div class="close-btn">
                                        <i class="bi bi-x"></i>
                                    </div>
                                    <div class="product-img">
                                        <img src="assets/img/home1/product-img-12.png" alt="image">
                                    </div>
                                    <div class="product-content">
                                        <div class="content-top">
                                            <div class="price-and-title">
                                                <h5 class="price">$896564.00</h5>
                                                <h5><a href="car-deatils.html">Tesla Model S-2023</a></h5>
                                            </div>
                                            <div class="company-logo">
                                                <img src="assets/img/home1/icon/tesla-01.svg" alt="">
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="product-card style-2 compare">
                                    <div class="close-btn">
                                        <i class="bi bi-x"></i>
                                    </div>
                                    <div class="product-img">
                                        <img src="assets/img/home1/product-img-13.png" alt="image">
                                    </div>
                                    <div class="product-content">
                                        <div class="content-top">
                                            <div class="price-and-title">
                                                <h5 class="price">$896564.00</h5>
                                                <h5><a href="#">Benz AMG GT C-Class-2023</a></h5>
                                            </div>
                                            <div class="company-logo">
                                                <img src="assets/img/home1/icon/mercedes-01.svg" alt="">
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-50">
                <div class="col-lg-12 position-relative">
                    <div class="car-details-menu">
                        <nav id="navbar-example2" class="navbar">
                            <ul class="nav nav-pills">
                                <li class="nav-item">
                                    <a class="nav-link" href="#car-info">Car Info</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#engine">Overview</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#performance">Key Feature</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#comfort">Engine Performance</a>
                                </li>
                               
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-offset="0"
                        class="scrollspy-example" tabindex="0">
                        <div class="single-compare mb-50" id="car-info">
                            <div class="section-title mb-20">
                                <h5>Summary</h5>
                            </div>
                            <div class="table-wrapper">
                                <table class="eg-table compare-table">
                                    <thead>
                                        <tr>
                                            <th>Basic Info</th>
                                            <th>Tesla Model S</th>
                                            <th>Benz AMG GT</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Brand Name</td>
                                            <td>Tesla Model </td>
                                            <td>Mercedes-Benz </td>
                                        </tr>
                                        <tr>
                                            <td>Price</td>
                                            <td>$60,321.00</td>
                                            <td>$54,321.00</td>
                                        </tr>
                                        <tr>
                                            <td>Engine Speed</td>
                                            <td>35,533 cc</td>
                                            <td>34,563 cc</td>
                                        </tr>
                                        <tr>
                                            <td>Body Type</td>
                                            <td>Hatchback</td>
                                            <td>Convertible</td>
                                        </tr>
                                        <tr>
                                            <td>Max. Power</td>
                                            <td>142 kw 7000 rpm</td>
                                            <td>140 kw 7000 rpm</td>
                                        </tr>
                                        <tr>
                                            <td>Mileage</td>
                                            <td>6,378 miles</td>
                                            <td>6,7053 miles</td>
                                        </tr>
                                        <tr>
                                            <td>Steering</td>
                                            <td>Left</td>
                                            <td>Right</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="single-compare mb-50" id="engine">
                            <div class="section-title mb-20">
                                <h5>Engine</h5>
                            </div>
                            <div class="table-wrapper">
                                <table class="eg-table compare-table">
                                    <tbody>
                                        <tr>
                                            <td>Engine Type</td>
                                            <td>1.55 L Petrol Engine</td>
                                            <td>1.5 L Gas Engine</td>
                                        </tr>
                                        <tr>
                                            <td>No Of Cylinders</td>
                                            <td>04</td>
                                            <td>04</td>
                                        </tr>
                                        <tr>
                                            <td>Engine Speed</td>
                                            <td>35,533 cc</td>
                                            <td>34,563 cc</td>
                                        </tr>
                                        <tr>
                                            <td>Transmission</td>
                                            <td>Manual</td>
                                            <td>Automatic</td>
                                        </tr>
                                        <tr>
                                            <td>Max. Power</td>
                                            <td>142 kw 7000 rpm</td>
                                            <td>140 kw 7000 rpm</td>
                                        </tr>
                                        <tr>
                                            <td>Gear Box</td>
                                            <td>8 Speed</td>
                                            <td>8 Speed</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="single-compare mb-50" id="performance">
                            <div class="section-title mb-20">
                                <h5>Performance</h5>
                            </div>
                            <div class="table-wrapper">
                                <table class="eg-table compare-table">
                                    <tbody>
                                        <tr>
                                            <td>Braking (80-0 kmph)</td>
                                            <td>00</td>
                                            <td>40 Meters</td>
                                        </tr>
                                        <tr>
                                            <td>Fuel Type</td>
                                            <td>Petrol</td>
                                            <td>Gasoline</td>
                                        </tr>
                                        <tr>
                                            <td>Fuel Capacity</td>
                                            <td>40 Liters</td>
                                            <td>40 Liters</td>
                                        </tr>
                                        <tr>
                                            <td>Mileage</td>
                                            <td>140 kw 7000 rpm</td>
                                            <td>142 kw 7000 rpm</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="single-compare mb-50" id="comfort">
                            <div class="section-title mb-20">
                                <h5>Comfort</h5>
                            </div>
                            <div class="table-wrapper">
                                <table class="eg-table compare-table">
                                    <tbody>
                                        <tr>
                                            <td>Connectivity</td>
                                            <td>Apple CarPlay</td>
                                            <td>Apple CarPlay</td>
                                        </tr>
                                        <tr>
                                            <td>USB Charger</td>
                                            <td>Rear</td>
                                            <td>Rear</td>
                                        </tr>
                                        <tr>
                                            <td>Air Conditioner</td>
                                            <td>Yes</td>
                                            <td>Yes</td>
                                        </tr>
                                        <tr>
                                            <td>Parking Sensor</td>
                                            <td>Yes</td>
                                            <td>No</td>
                                        </tr>
                                        <tr>
                                            <td>Automatic Climate Control</td>
                                            <td>No</td>
                                            <td>Rear</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="single-compare mb-50" id="safety">
                            <div class="section-title mb-20">
                                <h5>Safety</h5>
                            </div>
                            <div class="table-wrapper">
                                <table class="eg-table compare-table">
                                    <tbody>
                                        <tr>
                                            <td>Seat Belts</td>
                                            <td><i class="bi bi-check2"></i></td>
                                            <td><i class="bi bi-check2"></i></td>
                                        </tr>
                                        <tr>
                                            <td>360 Degree Camera</td>
                                            <td><i class="bi bi-check2"></i></td>
                                            <td><i class="bi bi-check2"></i></td>
                                        </tr>
                                        <tr>
                                            <td>No.of Airbags</td>
                                            <td>05</td>
                                            <td>05</td>
                                        </tr>
                                        <tr>
                                            <td>Head-up Display</td>
                                            <td><i class="bi bi-check2"></i></td>
                                            <td><i class="bi bi-check2"></i></td>
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
@endsection
