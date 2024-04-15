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

                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
    <!-- content-wrapper ends -->
    @include('backend.include.footer')
