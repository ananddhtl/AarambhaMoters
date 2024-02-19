@include('backend.include.header')
<!-- partial -->
<div class="container-fluid page-body-wrapper">
    <!-- partial:partials/_sidebar.html -->

    @include('backend.include.sidebar')
    <!-- partial -->
    <div class="main-panel">
        <div class="content-wrapper">

            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">User Information</h4>

                        <form class="forms-sample" method="POST" action="{{ route('userinformation.updateinformation') }}"
                            enctype="multipart/form-data">
                            @csrf <!-- Add CSRF token for security -->
                            <div class="form-group">
                                <label for="exampleInputName1">Name</label>
                                <input type="text" class="form-control" id="exampleInputName1" value="{{$userInformation->name}}" name="name"
                                    placeholder="Name" required>
                                <!-- Add 'required' attribute for client-side validation -->
                            </div>

                            <div class="form-group">
                                <label>Thumbnail</label>
                                <input type="file" name="thumbnail" class="form-control" accept="image/*">
                                <!-- Add 'required' attribute for client-side validation -->
                            </div>

                            <div class="form-group">
                                <label for="exampleInputName1">Email</label>
                                <input type="email" class="form-control" id="exampleInputName1" value="{{$userInformation->email}}" name="email"
                                    placeholder="Email" required>
                                <!-- Add 'required' attribute for client-side validation -->
                            </div>
                           

                            <button type="submit" class="btn btn-success mr-2">Update</button>
                           
                        </form>

                    </div>
                </div>
            </div>
        </div>

        <!-- content-wrapper ends -->
        @include('backend.include.footer')
