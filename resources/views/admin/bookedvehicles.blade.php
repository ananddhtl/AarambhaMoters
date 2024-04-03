@include('admin.include.header')
<!-- partial -->
<div class="container-fluid page-body-wrapper">
    <!-- partial:partials/_sidebar.html -->

    @include('admin.include.sidebar')
    <!-- partial -->
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">List Bookings</h4>

                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th> Vehicle Name </th>
                                    <th> Seller Name </th>
                                    <th> Booked Person Name </th>
                                    <th> Booked Person Email </th>
                                    <th> Booked Person Phone </th>
                                    <th> Booked Person Message </th>
                                    <th> Visiting Date </th>
                                    <th> Action </th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $item)
                                    <tr>
                                        <td>{{ $item->vehicle_name }}</td> 

                                        <td>{{ $item->seller_name }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->email }}</td> 
                                        <td>{{ $item->phone }}</td> 
                                        <td>{{ $item->message }}</td>  
                                        <td>{{ $item->visiting_date }}</td> 
                                        <td>
                                            @if($item->status === 0)
                                                <button type="button" class="btn btn-info btn-sm"
                                                   onclick="confirmBooking('{{ url('/confirmbooking/' . $item->id) }}')">Confirm Booking</button>
                                                   @elseif($item->status === 1)
                                                   <button type="button" class="btn btn-info btn-sm"
                                                   onclick="notifyseller('{{ url('/notifyseller/' . $item->id) }}')"> Notify Seller</button>
                                                   @endif
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
        
        <!-- content-wrapper ends -->
        @include('admin.include.footer')
