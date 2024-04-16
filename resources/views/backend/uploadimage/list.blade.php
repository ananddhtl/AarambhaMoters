@include('backend.include.header')
<!-- partial -->
<div class="container-fluid page-body-wrapper">
    @if (session('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Added Successfully',
                text: '{{ session('success') }}',
            });
        </script>
    @endif
    @if (session('delete'))
    <script>
        Swal.fire({
            icon: 'danger',
            title: 'Delete Successfully',
            text: '{{ session('success') }}',
        });
    </script>
@endif

    @include('backend.include.sidebar')
    <!-- partial -->
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Images of Vehicles</h4>

                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th> Vehicle Name </th>

                                    <th> Image </th>
                                    <th> Action </th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($list as $category)
                                    <tr>
                                        <td>{{ $category->vehicle_name }}</td>

                                        <td>
                                            @if ($category->vehicle_images)
                                                <img src="{{ asset($category->vehicle_images) }}" alt="Category Image"
                                                    style="max-width: 100px;">
                                            @else
                                                No Image
                                            @endif
                                        </td>
                                        <td>

                                            <button type="button" class="btn btn-danger btn-sm"
                                                onclick="confirmDelete('{{ url('/deletevehicleimages/' . $category->id) }}')">Delete</button>

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
        @include('backend.include.footer')
