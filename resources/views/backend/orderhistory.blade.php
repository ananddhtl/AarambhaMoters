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
                        <h4 class="card-title"> Order Hisotry List</h4>

                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th> Vehicle Name </th>
                                    <th> Vehicle Price </th>
                                    <th> Vehicle Location </th>
                                   

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $item)
                                    <tr>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->price }}</td>
                                        <td>{{ $item->location }}</td>

                                       

                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
        <script>
            function confirmDelete(categoryId) {
                if (confirm('Are you sure you want to delete this category?')) {
                    document.getElementById('deleteForm' + categoryId).submit();
                }
            }
        </script>
        <!-- content-wrapper ends -->
        @include('admin.include.footer')
