@include('backend.include.header')
<!-- partial -->
<div class="container-fluid page-body-wrapper">
    <!-- partial:partials/_sidebar.html -->

    @include('backend.include.sidebar')
    <!-- partial -->
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title"> Booking List</h4>

                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th> Vehicle Name </th>
                                    <th> Vehicle Price </th>
                                    <th> Vehicle Location </th>

                                    <th> Action </th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $item)
                                    <tr>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->price }}</td>
                                        <td>{{ $item->location }}</td>
                                        <td>
                                            <button class="btn btn-danger btn-sm payment-button"
                                                data-amount="{{ $item->price }}"  data-id="{{ $item->booked_vehicleid }}">Pay Via Khalti</button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>

        @include('admin.include.footer')

        <script>
            function confirmDelete(categoryId) {
                if (confirm('Are you sure you want to delete this category?')) {
                    document.getElementById('deleteForm' + categoryId).submit();
                }
            }
        </script>
        <script src="https://khalti.s3.ap-south-1.amazonaws.com/KPG/dist/2020.12.17.0.0.0/khalti-checkout.iffe.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"
            integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

            <script>
                document.addEventListener("DOMContentLoaded", function() {
                    var paymentButtons = document.querySelectorAll(".payment-button");
            
                    paymentButtons.forEach(function(button) {
                        button.addEventListener("click", function() {
                            var amount = parseFloat(button.getAttribute("data-amount"));
                            var itemId = button.getAttribute("data-id");
            
                            var config = {
                                "publicKey": "test_public_key_28af381cd221410baf31b558b8e51d89",
                                "productIdentity": itemId, 
                                "productName": "Dragon",
                                "productUrl": "http://gameofthrones.wikia.com/wiki/Dragons",
                                "paymentPreference": [
                                    "KHALTI",
                                    "EBANKING",
                                    "MOBILE_BANKING",
                                    "CONNECT_IPS",
                                    "SCT",
                                ],
                                "eventHandler": {
                                    onSuccess(payload) {
                                        $.ajax({
                                            type: 'POST',
                                            url: "{{ route('khalti.verifyPayment') }}",
                                            data: {
                                                token: payload.token,
                                                amount: payload.amount,
                                               
                                                "_token": "{{ csrf_token() }}"
                                            },
                                            success: function(res) {
                                                $.ajax({
                                                    type: "POST",
                                                    url: "{{ route('khalti.storePayment') }}",
                                                    data: {
                                                        response: res,
                                                        itemId:itemId,
                                                        "_token": "{{ csrf_token() }}"
                                                    },
                                                    success: function(res) {
                                                        console.log('transaction successful');
                                                        Swal.fire({
                                                            icon: 'success',
                                                            title: 'Transaction Successful',
                                                            text: 'Your payment has been processed successfully!',
                                                        });
                                                        window.reload();
                                                    }
                                                });
                                                console.log(res);
                                            }
                                        });
                                        console.log(payload);
                                    },
                                    onError(error) {
                                        console.log(error);
                                    },
                                    onClose() {
                                        console.log('widget is closing');
                                    }
                                }
                            };
            
                            var checkout = new KhaltiCheckout(config);
                            checkout.show({
                                amount: amount * 100
                            });
                        });
                    });
                });
            </script>
            
