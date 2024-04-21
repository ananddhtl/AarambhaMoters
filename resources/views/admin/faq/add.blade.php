@include('admin.include.header')
<!-- partial -->
<div class="container-fluid page-body-wrapper">
    <!-- partial:partials/_sidebar.html -->

    @include('admin.include.sidebar')
    <!-- partial -->
    <div class="main-panel">
        <div class="content-wrapper">

            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Add FAQ</h4>

                        <form class="forms-sample" method="POST" action="{{ route('faq.store') }}"
                            enctype="multipart/form-data">
                            @csrf 
                            <div class="form-group">
                                <label for="exampleInputName1">Question</label>
                                <input type="text" class="form-control" id="exampleInputName1" name="question"
                                    placeholder="Question" required>
                              
                            </div>

                            <div class="form-group">
                                <label for="exampleInputName1">Answer</label>
                                <input type="text" class="form-control" id="exampleInputName1" name="answer"
                                    placeholder="Answer" required>
                              
                            </div>

                            <button type="submit" class="btn btn-success mr-2">Submit</button>
                            <button type="button" class="btn btn-light">Cancel</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>

       
        @include('backend.include.footer')
