@extends('welcome')

@section('content')
    @if (session('success'))
        <script>
            Swal.fire({
                icon: 'success',

                text: '{{ session('success') }}',
            });
        </script>
    @endif
    <div class="inner-page-banner">
        <div class="banner-wrapper">
            <div class="container-fluid">
                <ul class="breadcrumb-list">
                    <li><a href="index.html">Home</a></li>
                    <li>Compare Vehicle</li>
                </ul>
                <div class="banner-main-content-wrap">
                    <div class="row">
                        <div class="col-xl-6 col-lg-7 d-flex align-items-center">
                            <div class="banner-content">
                                <span class="sub-title">Compare Vehicles</span>
                                <h1>Find The Best vehicle</h1>
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
                            <form action="{{ route('user.compare') }}" method="POST">
                                @csrf
                                <div class="change-model">
                                    <select name="vehicle_id">
                                        <option value="1">Select Car </option>
                                        @foreach ($list as $item)
                                            <option value="{{ $item->id }}"> {{ $item->name }}</option>
                                        @endforeach

                                    </select>

                                </div><br>
                                <div style="margin-top:20px;" class="button-and-price ">
                                    <button type="submit" class="primary-btn7">Submit
                                        Details</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="uploded-product-group">
                        <div class="row g-4">
                            @foreach ($vehiclesData as $vehicleData)
                                <div class="col-md-6">
                                    <div class="product-card style-2 compare">
                                        <div class="close-btn">
                                            <i class="bi bi-x"></i>
                                        </div>
                                        <div class="product-img">
                                            @foreach ($vehicleData['images'] as $image)
                                                <img src="{{ asset($image->vehicle_images) }}" alt="image">
                                                {{-- Assuming 'image_path' is the column name where image path is stored --}}
                                            @break

                                            {{-- Break after showing the first image --}}
                                        @endforeach
                                    </div>
                                    <div class="product-content">
                                        <div class="content-top">
                                            <div class="price-and-title">
                                                <h5 class="price">${{ $vehicleData['vehicle']->price }}</h5>
                                                <h5><a href="">{{ $vehicleData['vehicle']->name }}</a></h5>
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

        <div class="row">
            <div class="col-lg-12">
                <div data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-offset="0" class="scrollspy-example"
                    tabindex="0">
                    <div class="single-compare mb-50" id="car-info">
                        <div class="section-title mb-20">
                            <h5>Summary</h5>
                        </div>
                        <div class="table-wrapper">
                            <table class="eg-table compare-table">
                                <thead>
                                    <tr>
                                        <th>Basic Info</th>
                                        @foreach ($vehiclesData as $vehicleData)
                                            <th>{{ $vehicleData['vehicle']->name }}</th>
                                        @endforeach
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach (['car_info', 'key_features', 'overviews', 'engine_performance'] as $field)
                                        <tr>
                                            <td>{{ ucfirst(str_replace('_', ' ', $field)) }}</td>
                                            @foreach ($vehiclesData as $vehicleData)
                                                <td>
                                                    @php
                                                        $decodedData = json_decode($vehicleData['vehicle']->$field);
                                                        if (
                                                            $decodedData &&
                                                            is_array($decodedData) &&
                                                            isset($decodedData[0]->value)
                                                        ) {
                                                            echo $decodedData[0]->value;
                                                        } else {
                                                            echo 'N/A'; // Or any default value you want to display
                                                        }
                                                    @endphp
                                                </td>
                                            @endforeach
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- Add more comparison sections like 'engine', 'performance', 'comfort', etc., using similar structure -->
                </div>



            </div>
        </div>
    </div>
</div>
@endsection
