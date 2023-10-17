<?php include 'layouts/session.php'; ?>
<?php include 'layouts/head-main.php'; ?>

<head>

    <title>DTU - System Administration| OAS Applicant Checks</title>
    <?php include 'layouts/title-meta.php'; ?>
    <?php include 'layouts/head-css.php'; ?>

</head>

<?php include 'layouts/body.php'; ?>

<!-- Begin page -->
<div id="layout-wrapper">

    <?php include 'layouts/menu.php'; ?>

    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0"></h4>
                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                                    <li class="breadcrumb-item active">OAS Security Check</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end page title -->
                <div id="staffName" style="display: none;">
                    <?php echo json_encode($_SESSION['name']); ?>
                    <!-- This would be your staff name from PHP session -->
                </div>

                <!--<div class="row">
                    <div class="col-lg-12">
                        <div class="card" id="ticketsList">
                            <div class="card-header border-0">
                                <div class="d-flex align-items-center">
                                    <h5 class="card-title mb-0 flex-grow-1">QUICK REGISTER</h5>
                                    <div class="flex-shrink-0">
                                        <div class="d-flex flex-wrap gap-2">
                                            <button class="btn btn-danger add-btn" data-bs-toggle="modal"
                                                data-bs-target="#showModal"><i
                                                    class="ri-add-line align-bottom me-1"></i>Add New
                                                Registrant</button>
                                            <button class="btn btn-success" id="remove-actions"
                                                onClick="deleteMultiple()"><i class="ri-delete-bin-2-line"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
                <!--end card-body-->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <ul class="nav nav-pills nav-justified mb-3" role="tablist">

                                    <li class="nav-item">
                                        <a class="nav-link waves-effect waves-light active" data-bs-toggle="tab"
                                            href="#pill-pending-oas-check" role="tab">
                                            Pending OAS Checks
                                        </a>
                                    </li>

                                    <li class="nav-item d-none d-sm-block">
                                        <!-- This list item will be hidden on mobile devices -->
                                        <a class="nav-link waves-effect waves-light" data-bs-toggle="tab"
                                            href="#pill-approved-oas-check" role="tab">
                                            Approved OAS Checks
                                        </a>
                                    </li>

                                </ul>
                                <!-- Tab panes -->
                                <div class="tab-content text-muted">
                                    <div class="button-container" style="margin-bottom: 20px; text-align: right;">
                                        <button id="approveAllUsers" class="btn btn-success">Approve All Users</button>
                                    </div>
                                    <div class="tab-pane active" id="pill-pending-oas-check" role="tabpanel">
                                        <!--   <div class="d-flex"> -->
                                        <table id="pending-security" class="display table table-bordered dt-responsive"
                                            style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Priority</th>
                                                    <th>Invite Letter</th>
                                                    <th>First Name</th>
                                                    <th>Middle Name</th>
                                                    <th>Last Name</th>
                                                    <th>DOB</th>
                                                    <th>Gender</th>
                                                    <th>Country</th>
                                                    <th>Nationality</th>
                                                    <th>Passport Type</th>
                                                    <th>Passport Number</th>
                                                    <th>Organization</th>
                                                    <th>Occupation</th>
                                                    <th>Job Title</th>
                                                    <th>Email</th>
                                                    <th>Mobile Number</th>
                                                    <th>Telephone Contact</th>
                                                    <th>Fax Number</th>
                                                    <th>Registration Date</th>
                                                    <th>Badge Photo</th>
                                                    <th>Gov ID Photo</th>
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr>
                                                <th>ID</th>
                                                    <th>Priority</th>
                                                    <th>Invite Letter</th>
                                                    <th>First Name</th>
                                                    <th>Middle Name</th>
                                                    <th>Last Name</th>
                                                    <th>DOB</th>
                                                    <th>Gender</th>
                                                    <th>Country</th>
                                                    <th>Nationality</th>
                                                    <th>Passport Type</th>
                                                    <th>Passport Number</th>
                                                    <th>Organization</th>
                                                    <th>Occupation</th>
                                                    <th>Job Title</th>
                                                    <th>Email</th>
                                                    <th>Mobile Number</th>
                                                    <th>Telephone Contact</th>
                                                    <th>Fax Number</th>
                                                    <th>Registration Date</th>
                                                    <th>Badge Photo</th>
                                                    <th>Gov ID Photo</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                        <!-- </div> -->
                                    </div>
                                    <div class="tab-pane" id="pill-approved-oas-check" role="tabpanel">

                                        <table id="approved-security" class="display table table-bordered dt-responsive"
                                            style="width:100%">
                                            <thead>
                                                <tr>
                                                <th>ID</th>
                                                    <th>Priority</th>
                                                    <th>Invite Letter</th>
                                                    <th>First Name</th>
                                                    <th>Middle Name</th>
                                                    <th>Last Name</th>
                                                    <th>DOB</th>
                                                    <th>Gender</th>
                                                    <th>Country</th>
                                                    <th>Nationality</th>
                                                    <th>Passport Type</th>
                                                    <th>Passport Number</th>
                                                    <th>Organization</th>
                                                    <th>Occupation</th>
                                                    <th>Job Title</th>
                                                    <th>Email</th>
                                                    <th>Mobile Number</th>
                                                    <th>Telephone Contact</th>
                                                    <th>Fax Number</th>
                                                    <th>Registration Date</th>
                                                    <th>Badge Photo</th>
                                                    <th>Gov ID Photo</th>
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr>
                                                <th>ID</th>
                                                    <th>Priority</th>
                                                    <th>Invite Letter</th>
                                                    <th>First Name</th>
                                                    <th>Middle Name</th>
                                                    <th>Last Name</th>
                                                    <th>DOB</th>
                                                    <th>Gender</th>
                                                    <th>Country</th>
                                                    <th>Nationality</th>
                                                    <th>Passport Type</th>
                                                    <th>Passport Number</th>
                                                    <th>Organization</th>
                                                    <th>Occupation</th>
                                                    <th>Job Title</th>
                                                    <th>Email</th>
                                                    <th>Mobile Number</th>
                                                    <th>Telephone Contact</th>
                                                    <th>Fax Number</th>
                                                    <th>Registration Date</th>
                                                    <th>Badge Photo</th>
                                                    <th>Gov ID Photo</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div><!-- end card-body -->
                                </div><!-- end card -->
                            </div><!--end col-->
                        </div><!-- end row -->

                        <!-- Modal -->
                        <div class="modal fade flip" id="createNotesModel" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-body p-5 text-center">
                                        <lord-icon src="https://cdn.lordicon.com/puvaffet.json" trigger="loop"
                                            colors="primary:#405189,secondary:#f06548" style="width:90px;height:90px">
                                        </lord-icon>
                                        <h4>ADD NOTES TO RECORD</h4>
                                        <div class="mt-4 text-center">
                                            <form id="notesForm">
                                                <textarea class="form-control" id="input_note" rows="10"></textarea>
                                                <br>
                                                <div class="hstack gap-2 justify-content-center remove">
                                                    <button class="btn btn-danger" id="deleteRecord-close"
                                                        data-bs-dismiss="modal">
                                                        <i class="ri-close-line me-1 align-middle"></i> Close
                                                    </button>
                                                    <button type="submit" class="btn btn-success"
                                                        id="submit-note">Submit
                                                        Note</button>
                                                </div>
                                            </form>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end modal -->

                        <div class="modal fade zoomIn" id="notesModel" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <?php include 'modals/mod-view-notes.php'; ?>
                        </div>


                    </div>
                    <!--end card-body-->
                </div>
                <!--end card-->
            </div>
            <!--end col-->
        </div>
        <!--end row-->
        <!--ADD NEW REGISTRANT MODAL row-->

        <div class="modal fade zoomIn" id="showModal" tabindex="-1" aria-hidden="true">
            <?php include 'modals/quick-register.php'; ?>
        </div>

        <!-- container-fluid -->
    </div>
    <!-- End Page-content -->
</div>

<?php //include 'layouts/footer.php'; 
?>
</div>
<!-- end main content-->
<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasOasCheck" aria-labelledby="offcanvasOasCheckLabel">
    <?php include 'offcanvas/oc-oas-checks.php'; ?>
</div>
</div>
<!-- END layout-wrapper -->

<?php include 'layouts/vendor-scripts.php'; ?>

<!-- App js -->

<script src="assets/js/app.js"></script>

<script>
    $(document).ready(function () {
        // Function to add the badge and gender icon based on the "Priority" and "Gender" column values
        function addBadge(row, data) {
            var priority = data.priority.toLowerCase(); // Assuming "priority" is the property representing the "Priority" column in the dataset
            var badgeClass = "";
            if (priority === 'high') {
                badgeClass = "badge text-bg-danger";
            } else if (priority === 'medium') {
                badgeClass = "badge text-bg-warning";
            } else if (priority === 'normal') {
                badgeClass = "badge text-bg-info";
            }

            if (badgeClass !== "") {
                $('td:eq(1)', row).html('<span class="' + badgeClass + '">' + priority + '</span>');
            }

            var gender = data.gender.toLowerCase(); // Assuming "gender" is available in the array as a property
            var iconClass = "mdi mdi-22px " + (gender === 'female' ? 'mdi-human-female' : 'mdi-human-male');
            $('td:eq(3)', row).html('<i class="' + iconClass + '"></i> ' + data.first_name);
        }
        // Initialize DataTable
        /* The code below is using the DataTables plugin in jQuery to create a table with specific columns.
        The columns are defined using the "columns" option, and each column is specified with its
        corresponding data property. Some columns are set to be visible or hidden using the "visible"
        option. */
        var table = $('#pending-security').DataTable({
            "columns": [{
                "data": "id"
            },
            {
                "data": "priority"
            },
            {
                "data": "invite_letter",
                "render": function (data, type, row, meta) {
                    if (type === 'display' && data) {
                        return '<a href="/uploads/delegate-letters' + data + '" target="_blank">View Letter</a>';
                    }
                    return data;
                },
                visible: true
            },
            {
                "data": "first_name"
            },
            {
                "data": "middle_name"
            },
            {
                "data": "last_name"
            },
            {
                "data": "dob"
            },
            {
                "data": "gender"
            },
            {
                "data": "country"
            },
            {
                "data": "nationality"
            },
            {
                "data": "passport_type"
            },
            {
                "data": "passport_number"
            },
            {
                "data": "organization"
            },
            {
                "data": "occupation"
            },
            {
                "data": "job_title"
            },
            {
                "data": "email"
            },
            {
                "data": "mobile"
            },
            {
                "data": "telephone"
            },
            {
                "data": "fax_number"
            },
            {
                "data": "registered_date"
            },
            {
                "data": "badge_photo",
                visible: false
            },
            {
                "data": "gov_id",
                visible: false
            }
            ],
            /* This is a JavaScript function that is being used in a DataTables plugin for PHP. */
            "fnCreatedRow": function (nRow, aData, iDataIndex) {
                $(nRow).attr('id', aData.id); // Assuming "id" is the property representing the "ID" column in the dataset
                addBadge(nRow, aData);
            },
            "ajax": {
                "url": "/api/dashboard/fetch_data/get_registrants_tb_oas_pending_security.php",
                "type": "post"
            },
            "dom": 'lBfrtip',
            "buttons": ['copy', 'csv', 'excel', 'pdf', 'print'],
            "pageLength": 50,
            "lengthMenu": [
                [25, 50, 75, 100, -1],
                [25, 50, 75, 100, "All"]
            ],
            "order": [
                [7, 'asc']
            ],
            "searching": true,
            "paging": true,
            "info": true,
            "scrollX": false,
            "searchDelay": 550,
        });

        const offcanvas = new bootstrap.Offcanvas(document.getElementById("offcanvasOasCheck"));

        $('#pending-security tbody').on('click', 'tr', function () {
            console.log("Row Clicked!"); // Add this line for testing
            const rowData = table.row(this).data();

            /* The above code is declaring and assigning values to several constants in PHP. The constants are
            named id, first_name, middle_name, last_name, email, nib, assignment, and priority. The values
            of these constants are being assigned from the corresponding properties of an object named
            rowData. */
            const id = rowData.id;
            const first_name = rowData.first_name;
            const middle_name = rowData.middle_name;
            const last_name = rowData.last_name;
            const email = rowData.email;
            //const nib = rowData.nib;
            const priority = rowData.priority;
            const badge_photo = rowData.badge_photo;
            const gov_id = rowData.gov_id;
            const dob = rowData.dob;
            const invite_letter = rowData.invite_letter;

            //const nib = rowData.nib;


            const displayedIdElement = document.getElementById("displayedId");
            displayedIdElement.textContent = id

            const displayedIdElement2 = document.getElementById("input_user_id");
            displayedIdElement.value = id;


            const displayedNameElement = document.getElementById("nameOasCheck");
            displayedNameElement.textContent = first_name + " " + last_name;

            const displayedGovIDPhotoElement = document.getElementById("displayGovID");
            displayedGovIDPhotoElement.textContent = "/uploads/govid" + gov_id;

            //THE INPUT TEXT FORM

            const displayedFirstNameElement = document.getElementById("oc_first_name");
            displayedFirstNameElement.value = first_name;

            const displayedMiddleNameElement = document.getElementById("oc_middle_name");
            displayedMiddleNameElement.value = middle_name;

            const displayedLastNameElement = document.getElementById("oc_last_name");
            displayedLastNameElement.value = last_name;

            const displayedDOBElement = document.getElementById("oc_dob");
            displayedDOBElement.value = dob;


            offcanvas.show(); // Show the offcanvas
        });
    });
</script>

<script>
    $(document).ready(function () {
        // Function to add the badge and gender icon based on the "Priority" and "Gender" column values
        function addBadge(row, data) {
            var priority = data.priority.toLowerCase(); // Assuming "priority" is the property representing the "Priority" column in the dataset
            var badgeClass = "";
            if (priority === 'high') {
                badgeClass = "badge text-bg-danger";
            } else if (priority === 'medium') {
                badgeClass = "badge text-bg-warning";
            } else if (priority === 'normal') {
                badgeClass = "badge text-bg-info";
            }

            if (badgeClass !== "") {
                $('td:eq(1)', row).html('<span class="' + badgeClass + '">' + priority + '</span>');
            }

            var gender = data.gender.toLowerCase(); // Assuming "gender" is available in the array as a property
            var iconClass = "mdi mdi-22px " + (gender === 'female' ? 'mdi-human-female' : 'mdi-human-male');
            $('td:eq(3)', row).html('<i class="' + iconClass + '"></i> ' + data.first_name);
        }
        // Initialize DataTable
        /* The code below is using the DataTables plugin in jQuery to create a table with specific columns.
        The columns are defined using the "columns" option, and each column is specified with its
        corresponding data property. Some columns are set to be visible or hidden using the "visible"
        option. */
        var table = $('#approved-security').DataTable({
            "columns": [{
                "data": "id"
            },
            {
                "data": "priority"
            },
            {
                "data": "invite_letter",
                "render": function (data, type, row, meta) {
                    if (type === 'display' && data) {
                        return '<a href="/uploads/delegate-letters' + data + '" target="_blank">View Letter</a>';
                    }
                    return data;
                },
                visible: true
            },
            {
                "data": "first_name"
            },
            {
                "data": "middle_name"
            },
            {
                "data": "last_name"
            },
            {
                "data": "dob"
            },
            {
                "data": "gender"
            },
            {
                "data": "country"
            },
            {
                "data": "nationality"
            },
            {
                "data": "passport_type",
                visible: false
            },
            {
                "data": "passport_number",
                visible: false
            },
            {
                "data": "organization"
            },
            {
                "data": "occupation"
            },
            {
                "data": "job_title"
            },
            {
                "data": "email"
            },
            {
                "data": "mobile",
                visible: false
            },
            {
                "data": "telephone",
                visible: false
            },
            {
                "data": "fax_number",
                visible: false
            },
            {
                "data": "registered_date",
                visible: false
            },
            {
                "data": "badge_photo",
                visible: false
            },
            {
                "data": "gov_id",
                visible: false
            }
            ],
            /* This is a JavaScript function that is being used in a DataTables plugin for PHP. */
            "fnCreatedRow": function (nRow, aData, iDataIndex) {
                $(nRow).attr('id', aData.id); // Assuming "id" is the property representing the "ID" column in the dataset
                addBadge(nRow, aData);
            },
            "ajax": {
                "url": "/api/dashboard/fetch_data/get_registrants_tb_oas_approved_security.php",
                "type": "post"
            },
            "dom": 'lBfrtip',
            "buttons": ['copy', 'csv', 'excel', 'pdf', 'print'],
            "pageLength": 50,
            "lengthMenu": [
                [25, 50, 75, 100, -1],
                [25, 50, 75, 100, "All"]
            ],
            "order": [
                [7, 'asc']
            ],
            "searching": true,
            "paging": true,
            "info": true,
            "scrollX": false,
            "searchDelay": 550,
        });

        const offcanvas = new bootstrap.Offcanvas(document.getElementById("offcanvasOasCheck"));

        $('#approved-security tbody').on('click', 'tr', function () {
            console.log("Row Clicked!"); // Add this line for testing
            const rowData = table.row(this).data();

            /* The above code is declaring and assigning values to several constants in PHP. The constants are
            named id, first_name, middle_name, last_name, email, nib, assignment, and priority. The values
            of these constants are being assigned from the corresponding properties of an object named
            rowData. */
            const id = rowData.id;
            const first_name = rowData.first_name;
            const middle_name = rowData.middle_name;
            const last_name = rowData.last_name;
            const email = rowData.email;
           // const nib = rowData.nib;
            const priority = rowData.priority;
            const badge_photo = rowData.badge_photo;
            const gov_id = rowData.gov_id;
            const dob = rowData.dob;

            //const nib = rowData.nib;


            const displayedIdElement = document.getElementById("displayedId");
            displayedIdElement.textContent = id

            const displayedIdElement2 = document.getElementById("input_user_id");
            displayedIdElement.value = id;


            const displayedNameElement = document.getElementById("nameOasCheck");
            displayedNameElement.textContent = first_name + " " + last_name;

            const displayedGovIDPhotoElement = document.getElementById("displayGovID");
            displayedGovIDPhotoElement.textContent = "/uploads/govid" + gov_id;


            //THE INPUT TEXT FORM

            const displayedFirstNameElement = document.getElementById("oc_first_name");
            displayedFirstNameElement.value = first_name;

            const displayedMiddleNameElement = document.getElementById("oc_middle_name");
            displayedMiddleNameElement.value = middle_name;

            const displayedLastNameElement = document.getElementById("oc_last_name");
            displayedLastNameElement.value = last_name;

            const displayedDOBElement = document.getElementById("oc_dob");
            displayedDOBElement.value = dob;


            offcanvas.show(); // Show the offcanvas
        });
    });
</script>


<script>
    // Function to populate DataTable with the provided user ID
    function populateDataTableWithUserID(userID) {

        // Check if DataTable is already initialized
        if ($.fn.DataTable.isDataTable('#view-notes')) {
            $('#view-notes').DataTable().destroy(); // Destroy existing DataTable
        }

        $('#view-notes').DataTable({
            autoWidth: false,
            "processing": false,
            "serverSide": false,
            "ajax": {
                "url": "/api/dashboard/fetch_data/get_registrant_notes.php",
                "type": "post",
                "data": {
                "userID": userID
                }
            },
            "columns": [{
                "data": "id",
                visible: false
            },
            {
                "data": "note"
            },
            {
                "data": "staff_name"
            },
            {
                "data": "date_created"
            }
            ],
            "dom": 'Bfrtip',
            "buttons": ['copy', 'csv', 'excel', 'pdf', 'print'],
            "pageLength": 5,
            "lengthMenu": [
                [25, 50, 75, 100, -1],
                [25, 50, 75, 100, "All"]
            ],
            "order": [
                [0, 'asc']
            ],
            "searching": true,
            "paging": true,
            "info": true,
            "scrollX": false,
            "searchDelay": 550,
        });
    }

    // When the modal is shown, get the userID from the displayed element and populate the DataTable
    $('#notesModel').on('shown.bs.modal', function () {
        // Get the userID from the displayed element
        var userID = document.getElementById("displayedId").innerText.trim();

        // Call the function to populate the DataTable with the userID
        populateDataTableWithUserID(userID);
    });
</script>

<!-- Include SweetAlert library -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.all.min.js"></script>

<script>
    // Function to handle the form submission
    function submitForm(event) {
        event.preventDefault();

        // Get the user ID from the displayed element
        var userID = document.getElementById("displayedId").innerText.trim();
        var staffName = document.getElementById("staffName").innerText.trim();

        // Get the form data
        var form = document.getElementById("notesForm");
        var formData = new FormData(form);

        // Append the user ID to the form data
        formData.append("input_userid", userID);
        formData.append("input_staff_name", staffName);

        // Send the POST request to insert_notes.php
        fetch("/api/dashboard/insert/insert_notes.php", {
            method: "POST",
            body: formData,
        })
            .then(function (response) {
                // Check if the request was successful
                if (response.ok) {
                    // Display a success SweetAlert
                    return Swal.fire({
                        icon: "success",
                        title: "Note added successfully!",
                    });
                } else {
                    // Display an error SweetAlert
                    return Swal.fire({
                        icon: "error",
                        title: "Oops...",
                        text: "Something went wrong!",
                    });
                }
            })
            .then(function () {
                // Reload the website after the SweetAlert is closed
                // location.reload();
            })
            .catch(function (error) {
                // Display an error SweetAlert if an exception occurs
                Swal.fire({
                    icon: "error",
                    title: "Oops...",
                    text: "Something went wrong!",
                });
            });
    }

    // Add a submit event listener to the form
    document.getElementById("notesForm").addEventListener("submit", submitForm);
</script>

<script>
    document.getElementById("approveAllUsers").addEventListener("click", function () {
        // Show the SweetAlert to confirm the approval
        Swal.fire({
            icon: "question",
            title: "Approve All Users",
            text: "Are you sure you want to approve all pending oas users?",
            showCancelButton: true,
            confirmButtonText: "Confirm",
            cancelButtonText: "Cancel",
        }).then((result) => {
            if (result.isConfirmed) {
                // If the user confirms, make the API call
                approveAllUsers();
            }
        });
    });

    function approveAllUsers() {
        fetch("/api/dashboard/update/registrant-oas-check-approve-all.php", {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
            },
        })
            .then((response) => {
                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }
                return response.json();
            })
            .then((data) => {
                Swal.fire({
                    icon: "success",
                    title: "Approval Successful!",
                    text: "All users have been approved.",
                });
                // You may also reload the page or DataTable to reflect changes
                $('#pending-security').DataTable().ajax.reload();
            })
            .catch((error) => {
                Swal.fire({
                    icon: "error",
                    title: "Error",
                    text: "An error occurred while approving the users. Please try again later.",
                });
                console.error("Error in bulk approval:", error);
            });
    }
</script>



<style>
    #approved-security thead th,
    #approved-security tfoot th,
    #pending-security thead th,
    #pending-security tfoot th {
        color: white;
        background-color: #0a2b3d;
    }
</style>

</body>



</html>