@include('backend.include.header')
<!-- partial -->
<div class="container-fluid page-body-wrapper">
    <!-- partial:partials/_sidebar.html -->

    @include('backend.include.sidebar')
    @if (session('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Update Successfully',
                text: '{{ session('success') }}',
            });
        </script>
    @endif
    <div class="main-panel">
        <div class="content-wrapper">

            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Update User Password</h4>
                       
                        <form class="forms-sample" method="POST" action="{{ route('userinformation.updatepassword') }}"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="oldpassword">Old Password</label>
                                <input type="password" class="form-control @error('oldpassword') is-invalid @enderror"
                                    id="oldpassword" name="oldpassword" placeholder="Enter Old Password" required>
                                @error('oldpassword')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="newpassword">New Password</label>
                                <input type="password" class="form-control @error('newpassword') is-invalid @enderror"
                                    id="newpassword" name="newpassword" placeholder="Enter New Password" required>
                                @error('newpassword')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="confirmpassword">Confirm New Password</label>
                                <input type="password"
                                    class="form-control @error('confirmpassword') is-invalid @enderror"
                                    id="confirmpassword" name="confirmpassword" placeholder="Confirm Password" required>
                                @error('confirmpassword')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-success mr-2">Update</button>
                        </form>


                    </div>
                </div>
            </div>
        </div>

        <!-- content-wrapper ends -->
        @include('backend.include.footer')
