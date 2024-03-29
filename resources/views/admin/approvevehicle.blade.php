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
                    <div style="overflow-x: auto;" class="card-body">
                        <h4 class="card-title">Approved Vehicle</h4>
                        <table class="table table-striped" style="min-width: 1000px;">
                            <thead>
                                <tr>
                                    <th> Seller's Name </th>
                                    <th> Vehicle Name </th>
                                    <th> Vehicle Price </th>
                                    <th> Location </th>
                                    <th> Car Info </th>
                                    <th> Overview </th>
                                    <th> Engine </th>
                                    

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($list as $item)
                                    <tr>
                                        <td>{{ $item->fullname }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->price }}</td>
                                        <td>{{ $item->location }}</td>
                                        <td>
                                            @if ($item->car_info)
                                                <table>
                                                    <thead>
                                                        <tr>
                                                            <th>Info</th>
                                                            <th>Value</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach (json_decode($item->car_info, true) as $performance)
                                                            <tr>
                                                                <td>{{ $performance['info'] }}</td>
                                                                <td>{{ $performance['value'] }}</td>
                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            @else
                                                No Engine Performance Data
                                            @endif
                                        </td>

                                        <td>
                                            @if ($item->overviews)
                                                <table>
                                                    <thead>
                                                        <tr>
                                                            <th>Info</th>
                                                            <th>Value</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach (json_decode($item->overviews, true) as $performance)
                                                            <tr>
                                                                <td>{{ $performance['overview'] }}</td>
                                                                <td>{{ $performance['value'] }}</td>
                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            @else
                                                No Engine Performance Data
                                            @endif
                                        </td>
                                        <td>
                                            @if ($item->engine_performance)
                                                <table>
                                                    <thead>
                                                        <tr>
                                                            <th>Info</th>
                                                            <th>Value</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach (json_decode($item->engine_performance, true) as $performance)
                                                            <tr>
                                                                <td>{{ $performance['info'] }}</td>
                                                                <td>{{ $performance['value'] }}</td>
                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            @else
                                                No Engine Performance Data
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
