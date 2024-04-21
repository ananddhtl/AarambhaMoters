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
                                <div class="input-group">
                                    <input type="password"
                                        class="form-control @error('oldpassword') is-invalid @enderror" id="oldpassword"
                                        name="oldpassword" placeholder="Enter Old Password" required>
                                    
                                </div>
                                @error('oldpassword')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="newpassword">New Password</label>
                                <div class="input-group">
                                    <input type="password"
                                        class="form-control @error('newpassword') is-invalid @enderror" id="newpassword"
                                        name="newpassword" placeholder="Enter New Password" required>
                                  
                                </div>
                                @error('newpassword')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="confirmpassword">Confirm New Password</label>
                                <div class="input-group">
                                    <input type="password"
                                        class="form-control @error('confirmpassword') is-invalid @enderror"
                                        id="confirmpassword" name="confirmpassword" placeholder="Confirm New Password"
                                        required>
                                   
                                </div>
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
        <script>
        
                document.getElementById('toggleOldPassword').addEventListener('click', function() {
                    togglePasswordVisibility('oldpassword');
                });
            document.getElementById('toggleNewPassword').addEventListener('click', function() {
                togglePasswordVisibility('newpassword');
            });
            document.getElementById('toggleConfirmPassword').addEventListener('click', function() {
                togglePasswordVisibility('confirmpassword');
            });

            function togglePasswordVisibility(inputId) {
                var input = document.getElementById(inputId);
                var icon = document.getElementById('toggle' + inputId.charAt(0).toUpperCase() + inputId.slice(1)).querySelector(
                    'i');

                if (input.type === 'password') {
                    input.type = 'text';
                    icon.classList.remove('fa-eye');
                    icon.classList.add('fa-eye-slash');
                } else {
                    input.type = 'password';
                    icon.classList.remove('fa-eye-slash');
                    icon.classList.add('fa-eye');
                }
            }
      
        </script>
        <!-- content-wrapper ends -->
        @include('backend.include.footer')
