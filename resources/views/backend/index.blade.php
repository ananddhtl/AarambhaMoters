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
            <div class="row">
                <div class="col-md-12 grid-margin stretch-card">
                    <div class="card">
                        @if (Auth::user()->status == 0)
                            <div class="card-body">
                                <h4 class="card-title">Welcome the Arrambha Moters.If you want to be the seller click
                                    the
                                    want to be seller button.</h4>

                                </p>
                                <ul class="list-ticked">
                                    <li>Lorem ipsum dolor sit amet</li>
                                    <li>Consectetur adipiscing elit</li>
                                    <li>Integer molestie lorem at massa</li>
                                    <li>Facilisis in pretium nisl aliquet</li>
                                    <li>Nulla volutpat aliquam velit&gt;</li>
                                </ul>
                                <form method="POST" action="{{ route('userinformation.update') }}">
                                    @csrf
                                    <button type="submit" class="btn btn-info btn-block">Become a Seller</button>
                                </form>
                            </div>
                    </div>
                @else
                    <div class="card-body">
                        <h4 class="card-title">You can sell your items here now</h4>

                        </p>
                        <ul class="list-ticked">
                            <li>Lorem ipsum dolor sit amet</li>
                            <li>Consectetur adipiscing elit</li>
                            <li>Integer molestie lorem at massa</li>
                            <li>Facilisis in pretium nisl aliquet</li>
                            <li>Nulla volutpat aliquam velit&gt;</li>
                        </ul>
                        <div class="app-main__outer">
                            <div class="app-main__inner">
                                
                                <div class="row">
                                    <div class="col-md-6 col-xl-4">
                                        <div class="card mb-3 widget-content bg-midnight-bloom">
                                            <div class="widget-content-wrapper text-white">
                                                <div class="widget-content-left">
                                                    <div class="widget-heading">Total Orders</div>
                                                    <div class="widget-subheading">Last year expenses</div>
                                                </div>
                                                <div class="widget-content-right">
                                                    <div class="widget-numbers text-white"><span>1896</span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-xl-4">
                                        <div class="card mb-3 widget-content bg-arielle-smile">
                                            <div class="widget-content-wrapper text-white">
                                                <div class="widget-content-left">
                                                    <div class="widget-heading">Clients</div>
                                                    <div class="widget-subheading">Total Clients Profit</div>
                                                </div>
                                                <div class="widget-content-right">
                                                    <div class="widget-numbers text-white"><span>$ 568</span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-xl-4">
                                        <div class="card mb-3 widget-content bg-grow-early">
                                            <div class="widget-content-wrapper text-white">
                                                <div class="widget-content-left">
                                                    <div class="widget-heading">Followers</div>
                                                    <div class="widget-subheading">People Interested</div>
                                                </div>
                                                <div class="widget-content-right">
                                                    <div class="widget-numbers text-white"><span>46%</span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-xl-none d-lg-block col-md-6 col-xl-4">
                                        <div class="card mb-3 widget-content bg-premium-dark">
                                            <div class="widget-content-wrapper text-white">
                                                <div class="widget-content-left">
                                                    <div class="widget-heading">Products Sold</div>
                                                    <div class="widget-subheading">Revenue streams</div>
                                                </div>
                                                <div class="widget-content-right">
                                                    <div class="widget-numbers text-warning"><span>$14M</span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 col-lg-6">
                                        <div class="mb-3 card">
                                            <div class="card-header-tab card-header-tab-animation card-header">
                                                <div class="card-header-title">
                                                    <i class="header-icon lnr-apartment icon-gradient bg-love-kiss">
                                                    </i>
                                                    Sales Report
                                                </div>
                                                <ul class="nav">
                                                    <li class="nav-item"><a href="javascript:void(0);"
                                                            class="active nav-link">Last</a>
                                                    </li>
                                                    <li class="nav-item"><a href="javascript:void(0);"
                                                            class="nav-link second-tab-toggle">Current</a></li>
                                                </ul>
                                            </div>
                                            <div class="card-body">
                                                <div class="tab-content">
                                                    <div class="tab-pane fade show active" id="tabs-eg-77">
                                                        <div
                                                            class="card mb-3 widget-chart widget-chart2 text-left w-100">
                                                            <div class="widget-chat-wrapper-outer">
                                                                <div
                                                                    class="widget-chart-wrapper widget-chart-wrapper-lg opacity-10 m-0">
                                                                    <canvas id="canvas"></canvas>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <h6
                                                            class="text-muted text-uppercase font-size-md opacity-5 font-weight-normal">
                                                            Top Authors</h6>
                                                        <div class="scroll-area-sm">
                                                            <div class="scrollbar-container">
                                                                <ul
                                                                    class="rm-list-borders rm-list-borders-scroll list-group list-group-flush">
                                                                    <li class="list-group-item">
                                                                        <div class="widget-content p-0">
                                                                            <div class="widget-content-wrapper">
                                                                                <div class="widget-content-left mr-3">
                                                                                    <img width="42"
                                                                                        class="rounded-circle"
                                                                                        src="assets/images/avatars/9.jpg"
                                                                                        alt="">
                                                                                </div>
                                                                                <div class="widget-content-left">
                                                                                    <div class="widget-heading">
                                                                                        Ella-Rose Henry
                                                                                    </div>
                                                                                    <div class="widget-subheading">Web
                                                                                        Developer</div>
                                                                                </div>
                                                                                <div class="widget-content-right">
                                                                                    <div
                                                                                        class="font-size-xlg text-muted">
                                                                                        <small
                                                                                            class="opacity-5 pr-1">$</small>
                                                                                        <span>129</span>
                                                                                        <small
                                                                                            class="text-danger pl-2">
                                                                                            <i
                                                                                                class="fa fa-angle-down"></i>
                                                                                        </small>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li class="list-group-item">
                                                                        <div class="widget-content p-0">
                                                                            <div class="widget-content-wrapper">
                                                                                <div class="widget-content-left mr-3">
                                                                                    <img width="42"
                                                                                        class="rounded-circle"
                                                                                        src="assets/images/avatars/5.jpg"
                                                                                        alt="">
                                                                                </div>
                                                                                <div class="widget-content-left">
                                                                                    <div class="widget-heading">Ruben
                                                                                        Tillman
                                                                                    </div>
                                                                                    <div class="widget-subheading">UI
                                                                                        Designer
                                                                                    </div>
                                                                                </div>
                                                                                <div class="widget-content-right">
                                                                                    <div
                                                                                        class="font-size-xlg text-muted">
                                                                                        <small
                                                                                            class="opacity-5 pr-1">$</small>
                                                                                        <span>54</span>
                                                                                        <small
                                                                                            class="text-success pl-2">
                                                                                            <i
                                                                                                class="fa fa-angle-up"></i>
                                                                                        </small>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li class="list-group-item">
                                                                        <div class="widget-content p-0">
                                                                            <div class="widget-content-wrapper">
                                                                                <div class="widget-content-left mr-3">
                                                                                    <img width="42"
                                                                                        class="rounded-circle"
                                                                                        src="assets/images/avatars/4.jpg"
                                                                                        alt="">
                                                                                </div>
                                                                                <div class="widget-content-left">
                                                                                    <div class="widget-heading">Vinnie
                                                                                        Wagstaff
                                                                                    </div>
                                                                                    <div class="widget-subheading">Java
                                                                                        Programmer</div>
                                                                                </div>
                                                                                <div class="widget-content-right">
                                                                                    <div
                                                                                        class="font-size-xlg text-muted">
                                                                                        <small
                                                                                            class="opacity-5 pr-1">$</small>
                                                                                        <span>429</span>
                                                                                        <small
                                                                                            class="text-warning pl-2">
                                                                                            <i
                                                                                                class="fa fa-dot-circle"></i>
                                                                                        </small>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li class="list-group-item">
                                                                        <div class="widget-content p-0">
                                                                            <div class="widget-content-wrapper">
                                                                                <div class="widget-content-left mr-3">
                                                                                    <img width="42"
                                                                                        class="rounded-circle"
                                                                                        src="assets/images/avatars/3.jpg"
                                                                                        alt="">
                                                                                </div>
                                                                                <div class="widget-content-left">
                                                                                    <div class="widget-heading">
                                                                                        Ella-Rose Henry
                                                                                    </div>
                                                                                    <div class="widget-subheading">Web
                                                                                        Developer</div>
                                                                                </div>
                                                                                <div class="widget-content-right">
                                                                                    <div
                                                                                        class="font-size-xlg text-muted">
                                                                                        <small
                                                                                            class="opacity-5 pr-1">$</small>
                                                                                        <span>129</span>
                                                                                        <small
                                                                                            class="text-danger pl-2">
                                                                                            <i
                                                                                                class="fa fa-angle-down"></i>
                                                                                        </small>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li class="list-group-item">
                                                                        <div class="widget-content p-0">
                                                                            <div class="widget-content-wrapper">
                                                                                <div class="widget-content-left mr-3">
                                                                                    <img width="42"
                                                                                        class="rounded-circle"
                                                                                        src="assets/images/avatars/2.jpg"
                                                                                        alt="">
                                                                                </div>
                                                                                <div class="widget-content-left">
                                                                                    <div class="widget-heading">Ruben
                                                                                        Tillman
                                                                                    </div>
                                                                                    <div class="widget-subheading">UI
                                                                                        Designer
                                                                                    </div>
                                                                                </div>
                                                                                <div class="widget-content-right">
                                                                                    <div
                                                                                        class="font-size-xlg text-muted">
                                                                                        <small
                                                                                            class="opacity-5 pr-1">$</small>
                                                                                        <span>54</span>
                                                                                        <small
                                                                                            class="text-success pl-2">
                                                                                            <i
                                                                                                class="fa fa-angle-up"></i>
                                                                                        </small>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-lg-6">
                                        <div class="mb-3 card">
                                            <div class="card-header-tab card-header">
                                                <div class="card-header-title">
                                                    <i class="header-icon lnr-rocket icon-gradient bg-tempting-azure">
                                                    </i>
                                                    Bandwidth Reports
                                                </div>
                                                <div class="btn-actions-pane-right">
                                                    <div class="nav">
                                                        <a href="javascript:void(0);"
                                                            class="border-0 btn-pill btn-wide btn-transition active btn btn-outline-alternate">Tab
                                                            1</a>
                                                        <a href="javascript:void(0);"
                                                            class="ml-1 btn-pill btn-wide border-0 btn-transition  btn btn-outline-alternate second-tab-toggle-alt">Tab
                                                            2</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-content">
                                                <div class="tab-pane fade active show" id="tab-eg-55">
                                                    <div class="widget-chart p-3">
                                                        <div style="height: 350px">
                                                            <canvas id="line-chart"></canvas>
                                                        </div>
                                                        <div class="widget-chart-content text-center mt-5">
                                                            <div class="widget-description mt-0 text-warning">
                                                                <i class="fa fa-arrow-left"></i>
                                                                <span class="pl-1">175.5%</span>
                                                                <span class="text-muted opacity-8 pl-1">increased
                                                                    server
                                                                    resources</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="pt-2 card-body">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="widget-content">
                                                                    <div class="widget-content-outer">
                                                                        <div class="widget-content-wrapper">
                                                                            <div class="widget-content-left">
                                                                                <div
                                                                                    class="widget-numbers fsize-3 text-muted">
                                                                                    63%</div>
                                                                            </div>
                                                                            <div class="widget-content-right">
                                                                                <div class="text-muted opacity-6">
                                                                                    Generated
                                                                                    Leads</div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="widget-progress-wrapper mt-1">
                                                                            <div
                                                                                class="progress-bar-sm progress-bar-animated-alt progress">
                                                                                <div class="progress-bar bg-danger"
                                                                                    role="progressbar"
                                                                                    aria-valuenow="63"
                                                                                    aria-valuemin="0"
                                                                                    aria-valuemax="100"
                                                                                    style="width: 63%;"></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="widget-content">
                                                                    <div class="widget-content-outer">
                                                                        <div class="widget-content-wrapper">
                                                                            <div class="widget-content-left">
                                                                                <div
                                                                                    class="widget-numbers fsize-3 text-muted">
                                                                                    32%</div>
                                                                            </div>
                                                                            <div class="widget-content-right">
                                                                                <div class="text-muted opacity-6">
                                                                                    Submitted
                                                                                    Tickers</div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="widget-progress-wrapper mt-1">
                                                                            <div
                                                                                class="progress-bar-sm progress-bar-animated-alt progress">
                                                                                <div class="progress-bar bg-success"
                                                                                    role="progressbar"
                                                                                    aria-valuenow="32"
                                                                                    aria-valuemin="0"
                                                                                    aria-valuemax="100"
                                                                                    style="width: 32%;"></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="widget-content">
                                                                    <div class="widget-content-outer">
                                                                        <div class="widget-content-wrapper">
                                                                            <div class="widget-content-left">
                                                                                <div
                                                                                    class="widget-numbers fsize-3 text-muted">
                                                                                    71%</div>
                                                                            </div>
                                                                            <div class="widget-content-right">
                                                                                <div class="text-muted opacity-6">
                                                                                    Server
                                                                                    Allocation</div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="widget-progress-wrapper mt-1">
                                                                            <div
                                                                                class="progress-bar-sm progress-bar-animated-alt progress">
                                                                                <div class="progress-bar bg-primary"
                                                                                    role="progressbar"
                                                                                    aria-valuenow="71"
                                                                                    aria-valuemin="0"
                                                                                    aria-valuemax="100"
                                                                                    style="width: 71%;"></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="widget-content">
                                                                    <div class="widget-content-outer">
                                                                        <div class="widget-content-wrapper">
                                                                            <div class="widget-content-left">
                                                                                <div
                                                                                    class="widget-numbers fsize-3 text-muted">
                                                                                    41%</div>
                                                                            </div>
                                                                            <div class="widget-content-right">
                                                                                <div class="text-muted opacity-6">
                                                                                    Generated
                                                                                    Leads</div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="widget-progress-wrapper mt-1">
                                                                            <div
                                                                                class="progress-bar-sm progress-bar-animated-alt progress">
                                                                                <div class="progress-bar bg-warning"
                                                                                    role="progressbar"
                                                                                    aria-valuenow="41"
                                                                                    aria-valuemin="0"
                                                                                    aria-valuemax="100"
                                                                                    style="width: 41%;"></div>
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
                                <div class="row">
                                    <div class="col-md-6 col-xl-4">
                                        <div class="card mb-3 widget-content">
                                            <div class="widget-content-outer">
                                                <div class="widget-content-wrapper">
                                                    <div class="widget-content-left">
                                                        <div class="widget-heading">Total Orders</div>
                                                        <div class="widget-subheading">Last year expenses</div>
                                                    </div>
                                                    <div class="widget-content-right">
                                                        <div class="widget-numbers text-success">1896</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-xl-4">
                                        <div class="card mb-3 widget-content">
                                            <div class="widget-content-outer">
                                                <div class="widget-content-wrapper">
                                                    <div class="widget-content-left">
                                                        <div class="widget-heading">Products Sold</div>
                                                        <div class="widget-subheading">Revenue streams</div>
                                                    </div>
                                                    <div class="widget-content-right">
                                                        <div class="widget-numbers text-warning">$3M</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-xl-4">
                                        <div class="card mb-3 widget-content">
                                            <div class="widget-content-outer">
                                                <div class="widget-content-wrapper">
                                                    <div class="widget-content-left">
                                                        <div class="widget-heading">Followers</div>
                                                        <div class="widget-subheading">People Interested</div>
                                                    </div>
                                                    <div class="widget-content-right">
                                                        <div class="widget-numbers text-danger">45,9%</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-xl-none d-lg-block col-md-6 col-xl-4">
                                        <div class="card mb-3 widget-content">
                                            <div class="widget-content-outer">
                                                <div class="widget-content-wrapper">
                                                    <div class="widget-content-left">
                                                        <div class="widget-heading">Income</div>
                                                        <div class="widget-subheading">Expected totals</div>
                                                    </div>
                                                    <div class="widget-content-right">
                                                        <div class="widget-numbers text-focus">$147</div>
                                                    </div>
                                                </div>
                                                <div class="widget-progress-wrapper">
                                                    <div class="progress-bar-sm progress-bar-animated-alt progress">
                                                        <div class="progress-bar bg-info" role="progressbar"
                                                            aria-valuenow="54" aria-valuemin="0" aria-valuemax="100"
                                                            style="width: 54%;"></div>
                                                    </div>
                                                    <div class="progress-sub-label">
                                                        <div class="sub-label-left">Expenses</div>
                                                        <div class="sub-label-right">100%</div>
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
                @endif


            </div>
        </div>
    </div>




    <link href="https://demo.dashboardpack.com/architectui-html-free/main.css" rel="stylesheet">




    <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
</div>
</div>
<script type="text/javascript" src="https://demo.dashboardpack.com/architectui-html-free/assets/scripts/main.js">
</script>
</body>

</html>

@include('backend.include.footer')
