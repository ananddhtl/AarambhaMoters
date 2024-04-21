@include('admin.include.header')
<!-- partial -->
<div class="container-fluid page-body-wrapper">
    <!-- partial:partials/_sidebar.html -->

    @include('admin.include.sidebar')
    <!-- partial -->
    <div class="main-panel">
        <div class="content-wrapper">
            <!-- Page Title Header Starts-->
            <div class="row page-title-header">
                <div class="col-12">
                    <div class="page-header">
                        <h4 class="page-title">Hello Admin ! Welcome to your Dashboard</h4>

                    </div>
                </div>

            </div>
            <!-- Page Title Header Ends-->

            <div class="row">
                <div class="col-md-12 grid-margin">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-3 col-md-6">
                                    <div class="d-flex">
                                        <div class="wrapper">
                                            <h3 class="mb-0 font-weight-semibold">{{ $vehicles }}</h3>
                                            <h5 class="mb-0 font-weight-medium text-primary">Total Vehicles</h5>

                                        </div>
                                        <div class="wrapper my-auto ms-auto ms-lg-4">
                                            <div class="chartjs-size-monitor">
                                                <div class="chartjs-size-monitor-expand">
                                                    <div class=""></div>
                                                </div>
                                                <div class="chartjs-size-monitor-shrink">
                                                    <div class=""></div>
                                                </div>
                                            </div>
                                            <canvas height="50" width="100" id="stats-line-graph-1"
                                                class="chartjs-render-monitor" style="display: block;"></canvas>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 mt-md-0 mt-4">
                                    <div class="d-flex">
                                        <div class="wrapper">
                                            <h3 class="mb-0 font-weight-semibold">{{ $buyer }}</h3>
                                            <h5 class="mb-0 font-weight-medium text-primary">Total Buyer</h5>

                                        </div>
                                        <div class="wrapper my-auto ms-auto ms-lg-4">
                                            <div class="chartjs-size-monitor">
                                                <div class="chartjs-size-monitor-expand">
                                                    <div class=""></div>
                                                </div>
                                                <div class="chartjs-size-monitor-shrink">
                                                    <div class=""></div>
                                                </div>
                                            </div>
                                            <canvas height="50" width="100" id="stats-line-graph-2"
                                                class="chartjs-render-monitor" style="display: block;"></canvas>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 mt-md-0 mt-4">
                                    <div class="d-flex">
                                        <div class="wrapper">
                                            <h3 class="mb-0 font-weight-semibold">{{ $seller }}</h3>
                                            <h5 class="mb-0 font-weight-medium text-primary">Total Seller</h5>

                                        </div>
                                        <div class="wrapper my-auto ms-auto ms-lg-4">
                                            <div class="chartjs-size-monitor">
                                                <div class="chartjs-size-monitor-expand">
                                                    <div class=""></div>
                                                </div>
                                                <div class="chartjs-size-monitor-shrink">
                                                    <div class=""></div>
                                                </div>
                                            </div>
                                            <canvas height="50" width="100" id="stats-line-graph-3"
                                                class="chartjs-render-monitor" style="display: block;"></canvas>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <div class="chartjs-size-monitor">
                                <div class="chartjs-size-monitor-expand">
                                    <div class=""></div>
                                </div>
                                <div class="chartjs-size-monitor-shrink">
                                    <div class=""></div>
                                </div>
                            </div>
                            <h4 class="card-title mb-0">Sales Statistics Overview</h4>
                            <div class="d-flex flex-column flex-lg-row">
                                <p>Lorem ipsum is placeholder text commonly used</p>
                                <ul class="nav nav-tabs sales-mini-tabs ms-lg-auto mb-4 mb-md-0" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="sales-statistics_switch_1" data-bs-toggle="tab"
                                            role="tab" aria-selected="true">1D</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="sales-statistics_switch_2" data-bs-toggle="tab"
                                            role="tab" aria-selected="false">5D</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="sales-statistics_switch_3" data-bs-toggle="tab"
                                            role="tab" aria-selected="false">1M</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="sales-statistics_switch_4" data-bs-toggle="tab"
                                            role="tab" aria-selected="false">1Y</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="d-flex flex-column flex-lg-row">
                                <div class="data-wrapper d-flex mt-2 mt-lg-0">
                                    <div class="wrapper pe-5">
                                        <h5 class="mb-0">Total Cost</h5>
                                        <div class="d-flex align-items-center">
                                            <h4 class="font-weight-semibold mb-0">15,263</h4>
                                            <small class="ms-2 text-gray d-none d-lg-block"><b>89.5%</b> of 20,000
                                                Total</small>
                                        </div>
                                    </div>
                                    <div class="wrapper">
                                        <h5 class="mb-0">Total Revenue</h5>
                                        <div class="d-flex align-items-center">
                                            <h4 class="font-weight-semibold mb-0">$753,098</h4>
                                            <small class="ms-2 text-gray d-none d-lg-block"><b>10.5%</b> of 20,000
                                                Total</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="ms-lg-auto" id="sales-statistics-legend">
                                    <div class="chartjs-legend">
                                        <ul>
                                            <li><span style="background-color:#8862e0"></span>Revenue</li>
                                            <li><span style="background-color:#19d895"></span>Sales</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <canvas class="mt-5 chartjs-render-monitor" height="338" id="sales-statistics-overview"
                                style="display: block; width: 424px; height: 169px;" width="848"></canvas>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body d-flex flex-column">
                            <div class="chartjs-size-monitor">
                                <div class="chartjs-size-monitor-expand">
                                    <div class=""></div>
                                </div>
                                <div class="chartjs-size-monitor-shrink">
                                    <div class=""></div>
                                </div>
                            </div>
                            <div class="wrapper">
                                <h4 class="card-title mb-0">Net Profit Margin</h4>
                                <p>Started collecting data from February 2019</p>
                                <div class="mb-4" id="net-profit-legend">
                                    <div class="chartjs-legend">
                                        <ul>
                                            <li><span style="background-color:rgba(88, 208, 222,0.8)"></span>Sales</li>
                                            <li><span style="background-color:rgba(150, 77, 247,1)"></span>Orders</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <canvas class="my-auto mx-auto chartjs-render-monitor" height="284" id="net-profit"
                                width="342" style="display: block; width: 171px; height: 142px;"></canvas>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>

</script>
@include('admin.include.footer')
