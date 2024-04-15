@include('admin.include.header')
<!-- partial -->
<div class="container-fluid page-body-wrapper">
    <!-- partial:partials/_sidebar.html -->

    @include('admin.include.sidebar')
    @if (session('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: ' Successfully Done',
                text: '{{ session('success') }}',
            });
        </script>
    @endif
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">List Blog</h4>

                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th> Blog Title </th>
                                    <th> Description </th>
                                    <th> Image </th>
                                    <th> Action </th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($list as $category)
                                    <tr>
                                        <td>{{ $category->title }}</td>
                                        <td>{{ $category->description }}</td>
                                        <td>
                                            @if ($category->thumbnail)
                                                <img src="{{ asset($category->brand_image) }}" alt="Category Image"
                                                    style="max-width: 100px;">
                                            @else
                                                No Image
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{ route('categories.edit', ['id' => $category->id]) }}"
                                                class="btn btn-primary btn-sm">Edit</a>
                                            <button type="button" class="btn btn-danger btn-sm"
                                                onclick="confirmDelete('{{ url('/deletecategory/' . $category->id) }}')">Delete</button>

                                        </td>

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
