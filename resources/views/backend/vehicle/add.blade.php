@include('backend.include.header')
<!-- partial -->
<div class="container-fluid page-body-wrapper">
    <!-- partial:partials/_sidebar.html -->

    @include('backend.include.sidebar')
    <!-- partial -->
    <div class="main-panel">
        <div class="content-wrapper">

            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Add Vehicles</h4>

                        <form class="forms-sample" enctype="multipart/form-data">

                            <div class="form-group">
                                <label for="exampleInputName1">Vehicle Name</label>
                                <input type="text" class="form-control" id="vehicleName" name="vehiclename"
                                    placeholder="Vehicle Name">
                                <!-- Add '' attribute for client-side validation -->
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Select Vechicle Brand</label>
                                <select class="form-control form-control-lg" name="vehicle_brand" id="vehiclecategory">
                                    @foreach ($vehiclecategory as $item)
                                        <option value="{{ $item->id }}">{{ $item->brand_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputName1">Vehicle Price</label>
                                <input type="text" class="form-control" id="vehiclePrice" name="vehicleprice"
                                    placeholder="Vehicle Price">
                                <!-- Add '' attribute for client-side validation -->
                            </div>
                            <div class="form-group">
                                <label for="exampleInputName1">Location</label>
                                <input type="text" class="form-control" id="vehicleLocation" name="vehiclelocation"
                                    placeholder="Vehicle Location">


                            </div>

                            <div class="form-group">
                                <div class="container mt-4">
                                    <div class="form-group">
                                        <label for="exampleInputInfo">Info</label>
                                        <input type="text" class="form-control" id="exampleInputInfo"
                                            placeholder="Enter Info">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputValue">Value</label>
                                        <input type="text" class="form-control" id="exampleInputValue"
                                            placeholder="Enter Value">
                                    </div>

                                    <button type="button" class="btn btn-dark" onclick="addCarInfo()">Add</button>

                                    <div class="form-group mt-4">
                                        <table class="table" id="carInfoTable">
                                            <thead>
                                                <tr>
                                                    <th>Info</th>
                                                    <th>Value</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>


                            <div class="form-group">
                                <!-- Key Features Form -->
                                <div class="container mt-4">
                                    <div class="form-group">
                                        <label for="exampleInputKeyFeature">Key Features</label>
                                        <input type="text" class="form-control" id="exampleInputKeyFeature"
                                            placeholder="Enter Key Features">
                                    </div>

                                    <button type="button" class="btn btn-dark"
                                        onclick="addCarKeyFeatures()">Add</button>

                                    <!-- Key Features Table -->
                                    <div class="form-group mt-4">
                                        <table class="table" id="carKeyFeaturesTable">
                                            <thead>
                                                <tr>
                                                    <th>Info</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <!-- Overview Form -->
                                <div class="container mt-4">
                                    <div class="form-group">
                                        <label for="overviewInfo">Overview</label>
                                        <input type="text" class="form-control" id="overviewInfo"
                                            placeholder="Enter Overview">
                                    </div>

                                    <div class="form-group">
                                        <label for="overviewInfoValue">Value</label>
                                        <input type="text" class="form-control" id="overviewInfoValue"
                                            placeholder="Enter Value">
                                    </div>

                                    <button type="button" class="btn btn-dark" onclick="addCarOverview()">Add</button>

                                    <!-- Overview Table -->
                                    <div class="form-group mt-4">
                                        <table class="table" id="carOverviewTable">
                                            <thead>
                                                <tr>
                                                    <th>Overview</th>
                                                    <th>Value</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="container mt-4">
                                    <div class="form-group">
                                        <label for="exampleInputInfo">Engine Performance</label>
                                        <input type="text" class="form-control" id="engineperformanceInfo"
                                            placeholder="Enter Info">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputValue">Value</label>
                                        <input type="text" class="form-control" id="engineperformanceValue"
                                            placeholder="Enter Value">
                                    </div>

                                    <button type="button" class="btn btn-dark"
                                        onclick="addEnginePerformance()">Add</button>

                                    <div class="form-group mt-4">
                                        <table class="table" id="engineperformanceTable">
                                            <thead>
                                                <tr>
                                                    <th>Info</th>
                                                    <th>Value</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>



                            <button onclick="submitForm();" class="btn btn-success mr-2">Submit</button>
                            <button type="button" class="btn btn-light">Cancel</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
        <script>
            function addCarInfo() {
                var infoInput = document.getElementById("exampleInputInfo");
                var valueInput = document.getElementById("exampleInputValue");

                var infoValue = infoInput.value.trim();
                var valueValue = valueInput.value.trim();

                if (infoValue !== "" && valueValue !== "") {
                    var tableBody = document.querySelector("#carInfoTable tbody");

                    var newRow = tableBody.insertRow();
                    var infoCell = newRow.insertCell(0);
                    var valueCell = newRow.insertCell(1);
                    var actionCell = newRow.insertCell(2);

                    infoCell.textContent = infoValue;
                    valueCell.textContent = valueValue;


                    actionCell.innerHTML =
                        '<button type="button" class="btn btn-danger btn-sm" onclick="deleteRow(this)">Delete</button>';


                    infoInput.value = "";
                    valueInput.value = "";
                } else {
                    alert("Please enter both info and value.");
                }
            }

            function addCarKeyFeatures() {
                var keyFeatureInput = document.getElementById("exampleInputKeyFeature");
                var keyFeatureValue = keyFeatureInput.value.trim();

                if (keyFeatureValue !== "") {
                    var tableBody = document.querySelector("#carKeyFeaturesTable tbody");

                    var newRow = tableBody.insertRow();
                    var infoCell = newRow.insertCell(0);
                    var actionCell = newRow.insertCell(1);

                    infoCell.textContent = keyFeatureValue;

                    // Add action button to delete row
                    actionCell.innerHTML =
                        '<button type="button" class="btn btn-danger btn-sm" onclick="deleteRow(this)">Delete</button>';

                    // Clear input field after adding to table
                    keyFeatureInput.value = "";
                } else {
                    alert("Please enter a key feature.");
                }
            }

            function addCarOverview() {
                var overviewInfoInput = document.getElementById("overviewInfo");
                var overviewValueInput = document.getElementById("overviewInfoValue");

                var overviewInfoValue = overviewInfoInput.value.trim();
                var overviewValueValue = overviewValueInput.value.trim();

                if (overviewInfoValue !== "" && overviewValueValue !== "") {
                    var tableBody = document.querySelector("#carOverviewTable tbody");

                    var newRow = tableBody.insertRow();
                    var infoCell = newRow.insertCell(0);
                    var valueCell = newRow.insertCell(1);
                    var actionCell = newRow.insertCell(2);

                    infoCell.textContent = overviewInfoValue;
                    valueCell.textContent = overviewValueValue;


                    actionCell.innerHTML =
                        '<button type="button" class="btn btn-danger btn-sm" onclick="deleteRow(this)">Delete</button>';


                    overviewInfoInput.value = "";
                    overviewValueInput.value = "";
                } else {
                    alert("Please enter both overview and value.");
                }
            }

            function addEnginePerformance() {
                var engineInfoInput = document.getElementById("engineperformanceInfo");
                var engineValueInput = document.getElementById("engineperformanceValue");

                var engineInfoValue = engineInfoInput.value.trim();
                var engineValueValue = engineValueInput.value.trim();

                if (engineInfoValue !== "" && engineValueValue !== "") {
                    var tableBody = document.querySelector("#engineperformanceTable tbody");

                    var newRow = tableBody.insertRow();
                    var infoCell = newRow.insertCell(0);
                    var valueCell = newRow.insertCell(1);
                    var actionCell = newRow.insertCell(2);

                    infoCell.textContent = engineInfoValue;
                    valueCell.textContent = engineValueValue;

                    // Add action button to delete row
                    actionCell.innerHTML =
                        '<button type="button" class="btn btn-danger btn-sm" onclick="deleteRow(this)">Delete</button>';

                    // Clear input fields after adding to table
                    engineInfoInput.value = "";
                    engineValueInput.value = "";
                } else {
                    alert("Please enter both engine performance info and value.");
                }
            }

            function deleteRow(button) {
                var row = button.parentNode.parentNode;
                row.parentNode.removeChild(row);
            }

            function submitForm() {
                // Prevent the default form submission behavior
                event.preventDefault();

                // Collect form data
                var formData = {
                    vehiclename: document.getElementById('vehicleName').value,
                    vehiclecategory: document.getElementById('vehiclecategory').value,
                    vehicleprice: document.getElementById('vehiclePrice').value,
                    vehiclelocation: document.getElementById('vehicleLocation').value,
                    // Add other form fields here using their respective IDs
                };

                // Collect data from carInfoTable
                var carInfoTableData = [];
                var carInfoRows = document.querySelectorAll("#carInfoTable tbody tr");
                carInfoRows.forEach(function(row) {
                    var info = row.cells[0].textContent;
                    var value = row.cells[1].textContent;
                    carInfoTableData.push({
                        info: info,
                        value: value
                    });
                });
                formData.carInfo = carInfoTableData;

                // Collect data from carKeyFeaturesTable
                var carKeyFeaturesTableData = [];
                var carKeyFeaturesRows = document.querySelectorAll("#carKeyFeaturesTable tbody tr");
                carKeyFeaturesRows.forEach(function(row) {
                    var feature = row.cells[0].textContent;
                    carKeyFeaturesTableData.push(feature);
                });
                formData.carKeyFeatures = carKeyFeaturesTableData;

                // Collect data from carOverviewTable
                var carOverviewTableData = [];
                var carOverviewRows = document.querySelectorAll("#carOverviewTable tbody tr");
                carOverviewRows.forEach(function(row) {
                    var overview = row.cells[0].textContent;
                    var value = row.cells[1].textContent;
                    carOverviewTableData.push({
                        overview: overview,
                        value: value
                    });
                });
                formData.carOverview = carOverviewTableData;

                // Collect data from enginePerformanceTable
                var enginePerformanceTableData = [];
                var enginePerformanceRows = document.querySelectorAll("#engineperformanceTable tbody tr");
                enginePerformanceRows.forEach(function(row) {
                    var info = row.cells[0].textContent;
                    var value = row.cells[1].textContent;
                    enginePerformanceTableData.push({
                        info: info,
                        value: value
                    });
                });
                formData.enginePerformance = enginePerformanceTableData;

                // Make AJAX request
                $.ajax({
                    type: "POST",
                    url: "{{ route('vehicle.store') }}",
                    data: formData,
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        Swal.fire({
                            icon: 'success',
                            title: 'Vehicle Added',
                            text: 'Your vehicle has been added successfully!',
                        });
                        // window.location.reload();
                    },
                    error: function(xhr, status, error) {
                        // Handle error response
                        console.error("Error occurred:", error);
                    }
                });
            }
        </script>
        <!-- content-wrapper ends -->
        @include('backend.include.footer')
