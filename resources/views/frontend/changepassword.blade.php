@extends('welcome')
@section('content')
    <div class="contact-page pt-100 mb-100">
        <div class="container">
            <div class="row g-4 justify-content-center mb-100">
                <div class="row g-4 mb-100">
                    <div class="col-lg-12">
                        <div style="box-shadow: 5px 5px 5px 5px lightblue;" class="inquiry-form">
                            <form action="{{ route('publicuser.storechangepassword') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-inner mb-30">
                                            <label>New Password</label>
                                            <div class="input-group">
                                                <input type="password" id="newpassword" name="password" class="form-control"
                                                    placeholder="************">

                                                <button class="btn btn-outline-secondary toggle-password" type="button"
                                                    onclick="togglePassword('newpassword', 'togglePassword1')">
                                                    <i class="bi bi-eye-slash" id="togglePassword1"></i>
                                                </button>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-inner mb-30">
                                            <label>Confirm Password</label>
                                            <div class="input-group">
                                                <input type="password" id="confirmPassword" class="form-control"
                                                    placeholder="************">

                                                <button class="btn btn-outline-secondary toggle-password" type="button"
                                                    onclick="togglePassword('confirmPassword', 'togglePassword2')">
                                                    <i class="bi bi-eye-slash" id="togglePassword2"></i>
                                                </button>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="col-md-12">
                                            <div class="form-inner">
                                                <button type="submit" class="primary-btn3">Submit Now</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script>
        function togglePassword(inputId, iconId) {
            var input = document.getElementById(inputId);
            var icon = document.getElementById(iconId);
            if (input.type === "password") {
                input.type = "text";
                icon.classList.remove("bi-eye-slash");
                icon.classList.add("bi-eye");
            } else {
                input.type = "password";
                icon.classList.remove("bi-eye");
                icon.classList.add("bi-eye-slash");
            }
        }
    </script>
@endsection
