@include('admin.include.header')
<!-- partial -->
<div class="container-fluid page-body-wrapper">
    <!-- partial:partials/_sidebar.html -->

    @include('admin.include.sidebar')
    <!-- partial -->
    <div class="main-panel">
        <div class="content-wrapper">

            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Add Vehicle Category</h4>

                        <form class="forms-sample" method="POST" action="{{ route('categories.store') }}"
                            enctype="multipart/form-data">
                            @csrf <!-- Add CSRF token for security -->
                            <div class="form-group">
                                <label for="exampleInputName1">Category Name</label>
                                <input type="text" class="form-control" id="exampleInputName1" name="categoryname"
                                    placeholder="Name" required>
                                <!-- Add 'required' attribute for client-side validation -->
                            </div>

                            <div class="form-group">
                                <label>Category Image</label>
                                <input type="file" name="img" class="form-control" accept="image/*"
                                    >
                                <!-- Add 'required' attribute for client-side validation -->
                            </div>

                            <div class="form-group">
                                <label for="exampleTextarea1">Category Description</label>
                                <textarea class="form-control" name="categorydescription" id="exampleTextarea1" rows="2"></textarea>
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
