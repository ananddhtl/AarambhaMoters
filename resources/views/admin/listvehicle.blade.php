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
                        <h4 class="card-title">List Vehicle</h4>
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
                                    <th> Status </th>
                                    <th> Action </th>

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
                                        @if ($item->status === 0)
                                            <td>
                                                <label class="badge badge-warning">Pending</label>
                                            </td>
                                        @else
                                            <td>
                                                <label class="badge badge-success">Approved</label>
                                            </td>
                                        @endif
                                        <td>

                                             <button type="button" class="btn btn-success btn-sm"
                                                onclick="confirmUpdate('{{ url('/updatevehicle/' . $item->id) }}')">Accept</button>
                                            <button type="button" class="btn btn-danger btn-sm"
                                                onclick="confirmDelete('{{ url('/deletecategory/' . $item->id) }}')">Delete</button>

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
