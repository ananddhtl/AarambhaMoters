@include('backend.include.header')
<!-- partial -->
<div class="container-fluid page-body-wrapper">
    @if (session('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Login Successfully',
                text: '{{ session('success') }}',
            });
        </script>
    @endif

    @include('backend.include.sidebar')
    <!-- partial -->
    <div class="main-panel">
        <div class="content-wrapper">
            <!-- Page Title Header Starts-->
            <div class="row page-title-header">
                <div class="col-12">
                    <div class="page-header">
                        <h4 class="page-title">Dashboard</h4>

                    </div>
                </div>

            </div>
            <!-- Page Title Header Ends-->
            {{-- <div class="row">
                <div class="col-md-12 grid-margin stretch-card">
                    <div class="card">
                        @if (Auth::user()->status == 0)
                            <div class="card-body">
                                <h4 class="card-title">Welcome to Aarambha Motors. If you want to be a seller then click
                                    the
                                    Become a Seller button by figuring out all the terms and conditions below..</h4>
                                <ul>
                                    <h5><b>Terms and Conditions for becoming a Seller:</b></h5>
                                    <li>Eligibility: Sellers must meet specified qualifications and requirements.</li>
                                    <li>Registration: Sellers must complete the registration process to list vehicles
                                        for sale.</li>
                                    <li>Vehicle Criteria: Only vehicles meeting specified criteria can be listed for
                                        sale.</li>
                                    <li>Ownership Verification: Sellers must provide proof of ownership for each listed
                                        vehicle.</li>
                                    <li>Pricing: Sellers are responsible for setting prices within specified
                                        guidelines..</li>
                                    <li>Listing Terms: Terms for listing vehicles include duration, fees, and
                                        restrictions.</li>
                                    <li>Sales Process: Sellers must follow specified procedures for completing sales,
                                        including payment and paperwork.</li>
                                    <li>Updates: Sellers are notified of updates to terms and conditions.</li>

                                </ul>
                                <form method="POST" action="{{ route('userinformation.update') }}">
                                    @csrf
                                    <button type="submit" class="btn btn-info btn-block">Become a Seller</button>
                                </form>
                            </div>
                    </div>
                </div>
            </div> --}}
            <div class="row">
                <div class="col-md-12 grid-margin stretch-card">
                    <div class="card">
                        @if (Auth::user()->status == 0)
                            <div class="card-body">
                                <h4 class="card-title">Welcome to Aarambha Motors. If you want to be a seller then click
                                    the
                                    Become a Seller button by figuring out all the terms and conditions below..</h4>

                                </p>
                                <ul>
                                    <h5><b>Terms and Conditions for becoming a Seller:</b></h5>
                                    <li>Eligibility: Sellers must meet specified qualifications and requirements.</li>
                                    <li>Registration: Sellers must complete the registration process to list vehicles
                                        for sale.</li>
                                    <li>Vehicle Criteria: Only vehicles meeting specified criteria can be listed for
                                        sale.</li>
                                    <li>Ownership Verification: Sellers must provide proof of ownership for each listed
                                        vehicle.</li>
                                    <li>Pricing: Sellers are responsible for setting prices within specified
                                        guidelines..</li>
                                    <li>Listing Terms: Terms for listing vehicles include duration, fees, and
                                        restrictions.</li>
                                    <li>Sales Process: Sellers must follow specified procedures for completing sales,
                                        including payment and paperwork.</li>
                                    <li>Updates: Sellers are notified of updates to terms and conditions.</li>

                                </ul>
                                <form method="POST" action="{{ route('userinformation.update') }}">
                                    @csrf
                                    <button type="submit" class="btn btn-info btn-block">Become a Seller</button>
                                </form>
                            </div>
                    </div>
                @else
                    @endif
                </div>



            </div>
        </div>
    </div>
    {{-- <div class="col-md-12 grid-margin">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="d-flex">
                            <div class="wrapper">
                                <h3 class="mb-0 font-weight-semibold">32,451</h3>
                                <h5 class="mb-0 font-weight-medium text-primary">Visits</h5>
                                <p class="mb-0 text-muted">+14.00(+0.50%)</p>
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
                                <h3 class="mb-0 font-weight-semibold">15,236</h3>
                                <h5 class="mb-0 font-weight-medium text-primary">Impressions</h5>
                                <p class="mb-0 text-muted">+138.97(+0.54%)</p>
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
                                <h3 class="mb-0 font-weight-semibold">7,688</h3>
                                <h5 class="mb-0 font-weight-medium text-primary">Conversion</h5>
                                <p class="mb-0 text-muted">+57.62(+0.76%)</p>
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
                    <div class="col-lg-3 col-md-6 mt-md-0 mt-4">
                        <div class="d-flex">
                            <div class="wrapper">
                                <h3 class="mb-0 font-weight-semibold">1,553</h3>
                                <h5 class="mb-0 font-weight-medium text-primary">Downloads</h5>
                                <p class="mb-0 text-muted">+138.97(+0.54%)</p>
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
                                <canvas height="50" width="100" id="stats-line-graph-4"
                                    class="chartjs-render-monitor" style="display: block;"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
</div>



{{-- 
    <link href="https://demo.dashboardpack.com/architectui-html-free/main.css" rel="stylesheet"> --}}




<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
</div>
</div>
<script type="text/javascript" src="https://demo.dashboardpack.com/architectui-html-free/assets/scripts/main.js">
</script>
</body>

</html>

@include('backend.include.footer')
