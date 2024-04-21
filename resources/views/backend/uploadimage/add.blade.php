@include('backend.include.header')
<!-- partial -->
<div class="container-fluid page-body-wrapper">
    <!-- partial:partials/_sidebar.html -->

    @include('backend.include.sidebar')
    <!-- partial -->
    <div class="main-panel">
        <div class="content-wrapper">

            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Upload Image for Vehicle</h4>

                        <form class="forms-sample" method="POST" action="{{ route('vehicleimage.store') }}"
                            enctype="multipart/form-data">
                            @csrf <!-- Add CSRF token for security -->
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Select Vehicle Name</label>
                                <select class="form-control form-control-lg" name="vehicle_id"
                                    id="exampleFormControlSelect1">
                                    @foreach ($vehicle as $item)
                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                    @endforeach
                                </select></div>

                                <div class="form-group">
                                    <label>Vehicle Images</label>
                                    <input type="file" name="img" class="form-control" accept="image/*" required>
                                    <!-- Add 'required' attribute for client-side validation -->
                                </div>



                                <button type="submit" class="btn btn-success mr-2">Submit</button>
                                <button type="button" class="btn btn-light">Cancel</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>

        <!-- content-wrapper ends -->
        @include('backend.include.footer')
