<?php include 'layouts/session.php'; ?>
<?php include 'layouts/head-main.php'; ?>
<?php include 'permission/security-check-permission.php'; ?>

<head>

    <title>PLP Convention Payments</title>
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
                                    <li class="breadcrumb-item active">Payment Checks</li>
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

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card" id="ticketsList">
                            <div class="card-header border-0">
                                <div class="d-flex align-items-center">
                                    <h5 class="card-title mb-0 flex-grow-1">QUICK REGISTER</h5>
                                    <div class="flex-shrink-0">
                                        <div class="d-flex flex-wrap gap-2">
                                            <button class="btn btn-danger add-btn" data-bs-toggle="modal"
                                                data-bs-target="#showModal"><i
                                                    class="ri-add-line align-bottom me-1"></i>ADD NEW DELEGATE</button>
                                            <button class="btn btn-success" id="remove-actions"
                                                onClick="deleteMultiple()"><i class="ri-delete-bin-2-line"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end card-body-->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <ul class="nav nav-pills nav-justified mb-3" role="tablist">
                                    <?php if ($_SESSION['super_admin'] || $_SESSION['supervisor'] || $_SESSION['officer'] || $_SESSION['print_officer']): ?>
                                        <li class="nav-item">
                                            <a class="nav-link waves-effect waves-light active" data-bs-toggle="tab"
                                                href="#pill-all-delegates" role="tab">
                                                ALL PLP DELEGATES PENDING PAYMENTS
                                            </a>
                                        </li>
                                    <?php endif; ?>
                                    <?php if ($_SESSION['super_admin'] || $_SESSION['supervisor'] || $_SESSION['officer'] || $_SESSION['print_officer']): ?>
                                        <li class="nav-item d-none d-sm-block">
                                            <!-- This list item will be hidden on mobile devices -->
                                            <a class="nav-link waves-effect waves-light" data-bs-toggle="tab"
                                                href="#pill-checked-in-delegates" role="tab">
                                                ALL PAID PLP DELEGATES
                                            </a>
                                        </li>
                                    <?php endif; ?>
                                </ul>
                                <!-- Tab panes -->
                                <div class="tab-content text-muted">

                                    <div class="tab-pane active" id="pill-all-delegates" role="tabpanel">
                                        <table id="all-delegates" class="display table table-bordered dt-responsive"
                                            style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>PLP ID</th>
                                                    <th>PRIORITY</th>
                                                    <th>FIRST NAME</th>
                                                    <th>MIDDLE NAME</th>
                                                    <th>LAST NAME</th>
                                                    <th>GENDER</th>
                                                    <th>DOB</th>
                                                    <th>NIB NUMBER</th>
                                                    <th>RECEIPT NUMBER</th>
                                                    <th>METHOD</th>
                                                    <th>DELEGATE TYPE</th>
                                                    <th>REP. BRANCH</th>
                                                    <th>MEMBERSHIP TYPE</th>
                                                    <th>BADGE REPRINT</th>
                                                    <th>PRICE</th>
                                                    <th>NOTES</th>
                                                    <th>REGISTRATION DATE</th>

                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr>
                                                    <th>PLP ID</th>
                                                    <th>PRIORITY</th>
                                                    <th>FIRST NAME</th>
                                                    <th>MIDDLE NAME</th>
                                                    <th>LAST NAME</th>
                                                    <th>GENDER</th>
                                                    <th>DOB</th>
                                                    <th>NIB NUMBER</th>
                                                    <th>RECEIPT NUMBER</th>
                                                    <th>METHOD</th>
                                                    <th>DELEGATE TYPE</th>
                                                    <th>REP. BRANCH</th>
                                                    <th>MEMBERSHIP TYPE</th>
                                                    <th>BADGE REPRINT</th>
                                                    <th>PRICE</th>
                                                    <th>NOTES</th>
                                                    <th>REGISTRATION DATE</th>
                                                </tr>
                                            </tfoot>
                                        </table>

                                    </div>
                                    <div class="tab-pane" id="pill-checked-in-delegates" role="tabpanel">
                                        <table id="checked-in-delegates"
                                            class="display table table-bordered dt-responsive" style="width:100%">
                                            <thead>
                                                <tr>
                                                <th>PLP ID</th>
                                                    <th>PRIORITY</th>
                                                    <th>FIRST NAME</th>
                                                    <th>MIDDLE NAME</th>
                                                    <th>LAST NAME</th>
                                                    <th>GENDER</th>
                                                    <th>DOB</th>
                                                    <th>NIB NUMBER</th>
                                                    <th>RECEIPT NUMBER</th>
                                                    <th>METHOD</th>
                                                    <th>DELEGATE TYPE</th>
                                                    <th>REP. BRANCH</th>
                                                    <th>MEMBERSHIP TYPE</th>
                                                    <th>BADGE REPRINT</th>
                                                    <th>PRICE</th>
                                                    <th>NOTES</th>
                                                    <th>REGISTRATION DATE</th>

                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr>
                                                <th>PLP ID</th>
                                                    <th>PRIORITY</th>
                                                    <th>FIRST NAME</th>
                                                    <th>MIDDLE NAME</th>
                                                    <th>LAST NAME</th>
                                                    <th>GENDER</th>
                                                    <th>DOB</th>
                                                    <th>NIB NUMBER</th>
                                                    <th>RECEIPT NUMBER</th>
                                                    <th>METHOD</th>
                                                    <th>DELEGATE TYPE</th>
                                                    <th>REP. BRANCH</th>
                                                    <th>MEMBERSHIP TYPE</th>
                                                    <th>BADGE REPRINT</th>
                                                    <th>PRICE</th>
                                                    <th>NOTES</th>
                                                    <th>REGISTRATION DATE</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div><!-- end card-body -->
                                </div><!-- end card -->
                            </div><!--end col-->
                        </div><!-- end row -->
                        <!-- Modal -->

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
<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasSecurity" aria-labelledby="offcanvasSecurityLabel">
    <?php include 'offcanvas/oc-payment-checks.php'; ?>
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
                var priorityColumnIndex = $("#all-delegates thead th").filter(function () {
                    return $(this).text() === "PRIORITY";
                }).index();

                $('td:eq(' + priorityColumnIndex + ')', row).html('<span class="' + badgeClass + '">' + priority + '</span>');
            }

            var gender = data.gender.toLowerCase(); // Assuming "gender" is available in the array as a property
            var iconClass = "mdi mdi-22px " + (gender === 'female' ? 'mdi-human-female' : 'mdi-human-male');
            $('td:eq(2)', row).html('<i class="' + iconClass + '"></i> ' + data.first_name);
        }
        // Initialize DataTable
        /* The code below is using the DataTables plugin in jQuery to create a table with specific columns.
        The columns are defined using the "columns" option, and each column is specified with its
        corresponding data property. Some columns are set to be visible or hidden using the "visible"
        option. */
        var table = $('#all-delegates').DataTable({

            "columns": [{
                "data": "plp_id"
            },
            {
                "data": "priority"
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
                "data": "gender", visible: false
            },
            {
                "data": "dob"
            },
            {
                "data": "nib_number", visible: false
            },
            {
                "data": "receipt_number"
            },
            {
                "data": "method", visible: false
            },
            {
                "data": "delegate_type"
            },
            {
                "data": "branch", visible: true
            },
            {
                "data": "badge_reprint_status", visible: false
            },
            {
                "data": "price", visible: false
            },
            {
                "data": "notes", visible: false
            },
            {
                "data": "membership_type", visible: false
            },
            {
                "data": "date"
            }


            ],
            /* This is a JavaScript function that is being used in a DataTables plugin for PHP. */
            "fnCreatedRow": function (nRow, aData, iDataIndex) {
                $(nRow).attr('id', aData.id); // Assuming "id" is the property representing the "ID" column in the dataset
                addBadge(nRow, aData);
            },
            "ajax": {
                "url": "/api/dashboard/fetch_data/get_registrants_tb_pending_payment.php",
                "type": "GET",
                "dataType": 'json',
                "error": function (jqXHR, textStatus, errorThrown) {
                    console.error('Ajax request failed:', textStatus, errorThrown);
                },
            },
            "dom": 'lfrtip',
            "buttons": ['copy', 'csv', 'excel', 'pdf', 'print'],
            "pageLength": 50,
            "lengthMenu": [
                [25, 50, 75, 100, -1],
                [25, 50, 75, 100, "All"]
            ],
            "order": [
                [6, 'asc']
            ],
            "searching": true,
            "paging": true,
            "info": true,
            "scrollX": false,
            "searchDelay": 550,
        });

        const offcanvas = new bootstrap.Offcanvas(document.getElementById("offcanvasSecurity"));

        $('#all-delegates tbody').on('click', 'tr', function () {
            console.log("Row Clicked!"); // Add this line for testing
            const rowData = table.row(this).data();

            /* The above code is declaring and assigning values to several constants in PHP. The constants are
            named id, first_name, middle_name, last_name, email, nib, assignment, and priority. The values
            of these constants are being assigned from the corresponding properties of an object named
            rowData. */
            const id = rowData.plp_id;
            const first_name = rowData.first_name;
            const middle_name = rowData.middle_name;
            const last_name = rowData.last_name;
            const email = rowData.email_address;
            const priority = rowData.priority;
            const dob = rowData.dob;
            const gender = rowData.gender;
            const nib_number = rowData.nib_number;
            // const constituency = rowData.constituency;
            const affiliated_branch = rowData.branch;
            const membership_type = rowData.membership_type;
            const delegate_type = rowData.delegate_type;
            const date = rowData.date;
            const receipt = rowData.receipt_number;
            const notes = rowData.notes;
            

            // const mobile_number = rowData.mobile_number;
            // const telephone_number = rowData.telephone_number;
            // const street_address = rowData.street_address;
            //  const house_number = rowData.house_number;
            //  const emergency_contact_name = rowData.emergency_contact_name;
            //   const emergency_contact_relationship = rowData.emergency_contact_relationship;
            //const emergency_contact_telephone_number = rowData.emergency_contact_telephone_number;

            const displayedIdElement = document.getElementById("displayedId");
            displayedIdElement.textContent = id

            const displayedIdElement2 = document.getElementById("input_user_id");
            displayedIdElement.value = id;


            const displayedNameElement = document.getElementById("offcanvasSecurityLabel");
            displayedNameElement.textContent = first_name + " " + last_name;

            //THE INPUT TEXT FORM

            const displayedFirstNameElement = document.getElementById("oc_first_name");
            displayedFirstNameElement.value = first_name;

            const displayedMiddleNameElement = document.getElementById("oc_middle_name");
            displayedMiddleNameElement.value = middle_name;

            const displayedLastNameElement = document.getElementById("oc_last_name");
            displayedLastNameElement.value = last_name;

            const displayedDOBElement = document.getElementById("oc_dob");
            displayedDOBElement.value = dob;

            const displayedPriorityElement = document.getElementById("oc_priority");
            displayedPriorityElement.value = priority;

            const displayedGenderElement = document.getElementById("oc_gender");
            displayedGenderElement.value = gender;

            const displayedNIBElement = document.getElementById("oc_nib_number");
            displayedNIBElement.value = nib_number;

            const displayedAffiliatedBranchElement = document.getElementById("oc_affiliated_branch");
            displayedAffiliatedBranchElement.value = affiliated_branch;

            const displayedMembershipTypeElement = document.getElementById("oc_membership_type");
            displayedMembershipTypeElement.value = membership_type;

            const displayedDateElement = document.getElementById("oc_date");
            displayedDateElement.value = date;

            const displayedNotesElement = document.getElementById("oc_notes");
            displayedNotesElement.value = notes;

            const displayedReceiptElement = document.getElementById("oc_receipt_number");
            displayedReceiptElement.value = receipt;

            const displayDelegateTypeElement = document.getElementById("oc_delegate_type");
            displayDelegateTypeElement.value = delegate_type;

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
                var priorityColumnIndex = $("#checked-in-delegates thead th").filter(function () {
                    return $(this).text() === "PRIORITY";
                }).index();

                $('td:eq(' + priorityColumnIndex + ')', row).html('<span class="' + badgeClass + '">' + priority + '</span>');
            }

            var gender = data.gender.toLowerCase(); // Assuming "gender" is available in the array as a property
            var iconClass = "mdi mdi-22px " + (gender === 'female' ? 'mdi-human-female' : 'mdi-human-male');
            $('td:eq(2)', row).html('<i class="' + iconClass + '"></i> ' + data.first_name);
        }
        // Initialize DataTable
        /* The code below is using the DataTables plugin in jQuery to create a table with specific columns.
        The columns are defined using the "columns" option, and each column is specified with its
        corresponding data property. Some columns are set to be visible or hidden using the "visible"
        option. */
        var table = $('#checked-in-delegates').DataTable({
            "columns": [{
                "data": "plp_id"
            },
            {
                "data": "priority"
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
                "data": "gender", visible: false
            },
            {
                "data": "dob"
            },
            {
                "data": "nib_number", visible: false
            },
            {
                "data": "receipt_number"
            },
            {
                "data": "method", visible: false
            },
            {
                "data": "delegate_type"
            },
            {
                "data": "branch", visible: true
            },
            {
                "data": "badge_reprint_status", visible: false
            },
            {
                "data": "price", visible: false
            },
            {
                "data": "notes", visible: false
            },
            {
                "data": "membership_type", visible: false
            },
            {
                "data": "date"
            }


            ],
            /* This is a JavaScript function that is being used in a DataTables plugin for PHP. */
            "fnCreatedRow": function (nRow, aData, iDataIndex) {
                $(nRow).attr('id', aData.id); // Assuming "id" is the property representing the "ID" column in the dataset
                addBadge(nRow, aData);
            },
            "ajax": {
                "url": "/api/dashboard/fetch_data/get_registrants_tb_paid.php",
                "type": "GET",
                "dataType": 'json',
                "error": function (jqXHR, textStatus, errorThrown) {
                    console.error('Ajax request failed:', textStatus, errorThrown);
                },
            },
            "dom": 'lfrtip',
            "buttons": ['copy', 'csv', 'excel', 'pdf', 'print'],
            "pageLength": 50,
            "lengthMenu": [
                [25, 50, 75, 100, -1],
                [25, 50, 75, 100, "All"]
            ],
            "order": [
                [6, 'asc']
            ],
            "searching": true,
            "paging": true,
            "info": true,
            "scrollX": false,
            "searchDelay": 550,
        });

        const offcanvas = new bootstrap.Offcanvas(document.getElementById("offcanvasSecurity"));

        $('#checked-in-delegates tbody').on('click', 'tr', function () {
            console.log("Row Clicked!"); // Add this line for testing
            const rowData = table.row(this).data();

            /* The above code is declaring and assigning values to several constants in PHP. The constants are
            named id, first_name, middle_name, last_name, email, nib, assignment, and priority. The values
            of these constants are being assigned from the corresponding properties of an object named
            rowData. */
            const id = rowData.plp_id;
            const first_name = rowData.first_name;
            const middle_name = rowData.middle_name;
            const last_name = rowData.last_name;
            const email = rowData.email_address;
            const priority = rowData.priority;
            const dob = rowData.dob;
            const gender = rowData.gender;
            const nib_number = rowData.nib_number;
            // const constituency = rowData.constituency;
            const affiliated_branch = rowData.branch;
            const membership_type = rowData.membership_type;
            const delegate_type = rowData.delegate_type;
            const date = rowData.date;
            const receipt = rowData.receipt_number;
            const notes = rowData.notes;

            // const mobile_number = rowData.mobile_number;
            // const telephone_number = rowData.telephone_number;
            // const street_address = rowData.street_address;
            //  const house_number = rowData.house_number;
            //  const emergency_contact_name = rowData.emergency_contact_name;
            //   const emergency_contact_relationship = rowData.emergency_contact_relationship;
            //const emergency_contact_telephone_number = rowData.emergency_contact_telephone_number;

            const displayedIdElement = document.getElementById("displayedId");
            displayedIdElement.textContent = id

            const displayedIdElement2 = document.getElementById("input_user_id");
            displayedIdElement.value = id;


            const displayedNameElement = document.getElementById("offcanvasSecurityLabel");
            displayedNameElement.textContent = first_name + " " + last_name;

            //THE INPUT TEXT FORM

            const displayedFirstNameElement = document.getElementById("oc_first_name");
            displayedFirstNameElement.value = first_name;

            const displayedMiddleNameElement = document.getElementById("oc_middle_name");
            displayedMiddleNameElement.value = middle_name;

            const displayedLastNameElement = document.getElementById("oc_last_name");
            displayedLastNameElement.value = last_name;

            const displayedDOBElement = document.getElementById("oc_dob");
            displayedDOBElement.value = dob;

            const displayedPriorityElement = document.getElementById("oc_priority");
            displayedPriorityElement.value = priority;

            const displayedGenderElement = document.getElementById("oc_gender");
            displayedGenderElement.value = gender;

            const displayedNIBElement = document.getElementById("oc_nib_number");
            displayedNIBElement.value = nib_number;

            const displayedAffiliatedBranchElement = document.getElementById("oc_affiliated_branch");
            displayedAffiliatedBranchElement.value = affiliated_branch;

            const displayedMembershipTypeElement = document.getElementById("oc_membership_type");
            displayedMembershipTypeElement.value = membership_type;

            const displayedDateElement = document.getElementById("oc_date");
            displayedDateElement.value = date;

            const displayedNotesElement = document.getElementById("oc_notes");
            displayedNotesElement.value = notes;

            const displayedReceiptElement = document.getElementById("oc_receipt_number");
            displayedReceiptElement.value = receipt;

            const displayDelegateTypeElement = document.getElementById("oc_delegate_type");
            displayDelegateTypeElement.value = delegate_type;



            offcanvas.show(); // Show the offcanvas
        });
    });
</script>





<script>
    // Function to populate DataTable with the provided user ID
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
            "columns": [
                {
                    "data": "id", visible: false
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

<style>
    #all-delegates thead th,
    #all-delegates tfoot th,
    #checked-in-delegates thead th,
    #checked-in-delegates tfoot th {
        color: white;
        background-color: #0a2b3d;
    }
</style>

</body>



</html>