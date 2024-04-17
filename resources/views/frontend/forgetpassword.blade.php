@extends('welcome')
@section('content')
    <div class="contact-page pt-100 mb-100">
        <div class="container">
            <div class="row g-4 justify-content-center mb-100">
           
           
            <div class="row g-4 mb-100">
              
                <div class="col-lg-12">
                    <div style="box-shadow: 5px 5px  5px 5px  lightblue;" class="inquiry-form">
                        <form action="{{route('publicuser.storeforgetpassword')}}" method="POST">
                            @csrf
                            <div class="row">
                                
                                <div class="col-md-6">
                                    <div class="form-inner mb-30">
                                        <label>Email </label>
                                        <input type="email" name="email" placeholder="Ex- info@gmail.com">
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
@endsection
