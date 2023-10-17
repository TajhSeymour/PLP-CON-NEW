<?php include 'layouts/session.php'; ?>
<?php include 'layouts/head-main.php'; ?>

<head>

    <title> Home | DTU - Admin & Dashboard</title>
    <?php include 'layouts/title-meta.php'; ?>

    <!--datatable css -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" />
    <!--datatable responsive css-->
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap.min.css" />

    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css">


    <?php include 'layouts/head-css.php'; ?>
    <link href="assets/libs/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css" />
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
                            <h4 class="mb-sm-0">CONFERENCE ANALYTICS</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">DASHBOARD</a></li>

                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-xxl-3 col-sm-6">
                        <div class="card card-animate">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <p class="fw-medium text-muted mb-0">TOTAL REGISTRANTS</p>
                                        <h2 class="mt-4 ff-secondary fw-semibold"><span class="counter-value" data-target="<?php echo $total_users_count; ?>">0</span> </h2>

                                    </div>
                                    <div>
                                        <div class="avatar-sm flex-shrink-0">
                                            <span class="avatar-title bg-soft-info text-info rounded-circle fs-4">
                                                <i class=" ri-team-fill"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- end card body -->
                        </div> <!-- end card-->
                    </div>
                    <!--end col-->
                    <div class="col-xxl-3 col-sm-6">
                        <div class="card card-animate">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <p class="fw-medium text-muted mb-0">PENDING SECURITY CHECKS</p>
                                        <h2 class="mt-4 ff-secondary fw-semibold"><span class="counter-value" data-target="<?php echo $pending_users_count; ?>">0</span></h2>

                                    </div>
                                    <div>
                                        <div class="avatar-sm flex-shrink-0">
                                            <span class="avatar-title bg-soft-info text-info rounded-circle fs-4">
                                                <i class=" ri-shield-user-fill"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- end card body -->
                        </div>
                    </div>
                    <!--end col-->
                    <div class="col-xxl-3 col-sm-6">
                        <div class="card card-animate">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <p class="fw-medium text-muted mb-0">APPROVED REGISTRANTS</p>
                                        <h2 class="mt-4 ff-secondary fw-semibold"><span class="counter-value" data-target="<?php echo $printer_users_count; ?>">0</span></h2>

                                    </div>
                                    <div>
                                        <div class="avatar-sm flex-shrink-0">
                                            <span class="avatar-title bg-soft-info text-info rounded-circle fs-4">
                                                <i class="ri-thumb-up-fill"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- end card body -->
                        </div>
                    </div>
                    <!--end col-->
                    <div class="col-xxl-3 col-sm-6">
                        <div class="card card-animate">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <p class="fw-medium text-muted mb-0">BADGES PRINTED</p>
                                        <h2 class="mt-4 ff-secondary fw-semibold"><span class="counter-value" data-target="<?php echo $printed_badges_count; ?>">0</span></h2>

                                    </div>
                                    <div>
                                        <div class="avatar-sm flex-shrink-0">
                                            <span class="avatar-title bg-soft-info text-info rounded-circle fs-4">
                                                <i class="ri-printer-fill"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- end card body -->
                        </div>




                    </div>
                    <!--end col-->

                    <div class="col-xxl-3 col-sm-6">
                        <div class="card card-animate">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <p class="fw-medium text-muted mb-0">BADGES IN PRINT QUEUE</p>
                                        <h2 class="mt-4 ff-secondary fw-semibold"><span class="counter-value" data-target="<?php echo $printed_badges_count; ?>">0</span></h2>

                                    </div>
                                    <div>
                                        <div class="avatar-sm flex-shrink-0">
                                            <span class="avatar-title bg-soft-info text-info rounded-circle fs-4">
                                                <i class="ri-printer-cloud-fill"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- end card body -->
                        </div>
                    </div>
                    <div class="col-xxl-3 col-sm-6">
                        <div class="card card-animate">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <p class="fw-medium text-muted mb-0">DENIED REGISTRANTS</p>
                                        <h2 class="mt-4 ff-secondary fw-semibold"><span class="counter-value" data-target="<?php echo $denied_users_count; ?>">0</span></h2>

                                    </div>
                                    <div>
                                        <div class="avatar-sm flex-shrink-0">
                                            <span class="avatar-title bg-soft-info text-info rounded-circle fs-4">
                                                <i class=" ri-thumb-down-fill"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- end card body -->
                        </div>
                    </div>

                    <div class="col-xxl-3 col-sm-6">
                        <div class="card card-animate">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <p class="fw-medium text-muted mb-0">MALE REGISTRANTS</p>
                                        <h2 class="mt-4 ff-secondary fw-semibold"><span class="counter-value" data-target="<?php echo $male_users_count; ?>">0</span></h2>

                                    </div>
                                    <div>
                                        <div class="avatar-sm flex-shrink-0">
                                            <span class="avatar-title bg-soft-info text-info rounded-circle fs-4">
                                                <i class="bx bx-male"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- end card body -->
                        </div>
                    </div>

                    <div class="col-xxl-3 col-sm-6">
                        <div class="card card-animate">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <p class="fw-medium text-muted mb-0">FEMALE REGISTRANTS</p>
                                        <h2 class="mt-4 ff-secondary fw-semibold"><span class="counter-value" data-target="<?php echo $female_users_count; ?>">0</span></h2>

                                    </div>
                                    <div>
                                        <div class="avatar-sm flex-shrink-0">
                                            <span class="avatar-title bg-soft-info text-info rounded-circle fs-4">
                                                <i class="bx bx-female"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- end card body -->
                        </div>
                    </div>


                </div>
                <!--end row-->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card" id="ticketsList">
                            <div class="card-header border-0">
                                <div class="d-flex align-items-center">
                                    <h5 class="card-title mb-0 flex-grow-1">QUICK REGISTER</h5>
                                    <div class="flex-shrink-0">
                                        <div class="d-flex flex-wrap gap-2">
                                            <button class="btn btn-danger add-btn" data-bs-toggle="modal" data-bs-target="#showModal"><i class="ri-add-line align-bottom me-1"></i> Add New Registrant</button>
                                            <button class="btn btn-success" id="remove-actions" onClick="deleteMultiple()"><i class="ri-delete-bin-2-line"></i></button>
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
                                <!-- Nav tabs -->
                                <ul class="nav nav-pills nav-justified mb-3" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link waves-effect waves-light active" data-bs-toggle="tab" href="#pill-all-registrants" role="tab">
                                            ALL REGISTRANTS
                                        </a>
                                    </li>
                                    <li class="nav-item d-none d-sm-block"> <!-- This list item will be hidden on mobile devices -->
                                        <a class="nav-link waves-effect waves-light" data-bs-toggle="tab" href="#pill-security-checks" role="tab">
                                            PENDING SECURITY CHECKS
                                        </a>
                                    </li>
                                    <li class="nav-item d-none d-sm-block"> <!-- This list item will be hidden on mobile devices -->
                                        <a class="nav-link waves-effect waves-light" data-bs-toggle="tab" href="#pill-approved-registrants" role="tab">
                                            APPROVED REGISTRANTS
                                        </a>
                                    </li>
                                    <li class="nav-item d-none d-sm-block"> <!-- This list item will be hidden on mobile devices -->
                                        <a class="nav-link waves-effect waves-light" data-bs-toggle="tab" href="#pill-printed-badges" role="tab">
                                            PRINTED BADGES
                                        </a>
                                    </li>
                                </ul>
                                <!-- Tab panes -->
                                <div class="tab-content text-muted">
                                    <div class="tab-pane active" id="pill-all-registrants" role="tabpanel">
                                        <!--   <div class="d-flex"> -->

                                        <table id="all-registrants" class="display table table-bordered dt-responsive" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>First Name</th>
                                                    <th>Middle Name</th>
                                                    <th>Last Name</th>
                                                    <th>NIB Number</th>
                                                    <th>Assignment</th>
                                                   <th>Priority</th>

                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>First Name</th>
                                                    <th>Middle Name</th>
                                                    <th>Last Name</th>
                                                    <th>NIB Number</th>
                                                    <th>Assignment</th>
                                                    <th>Priority</th>

                                                </tr>
                                            </tfoot>
                                        </table>

                                    </div> <!--END OF PILL -->

                                    <div class="tab-pane" id="pill-security-checks" role="tabpanel">
                                        <table id="pending-security" class="display table table-bordered dt-responsive" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>First Name</th>
                                                    <th>Middle Name</th>
                                                    <th>Last Name</th>
                                                    <th>NIB Number</th>
                                                    <th>Assignment</th>
                                                    <th>Priority</th>

                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>First Name</th>
                                                    <th>Middle Name</th>
                                                    <th>Last Name</th>
                                                    <th>NIB Number</th>
                                                    <th>Assignment</th>
                                                    <th>Priority</th>

                                                </tr>
                                            </tfoot>
                                        </table>

                                    </div>


                                    <div class="tab-pane" id="pill-approved-registrants" role="tabpanel">
                                        <table id="approved-registrants" class="display table table-bordered dt-responsive" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>First Name</th>
                                                    <th>Middle Name</th>
                                                    <th>Last Name</th>
                                                    <th>NIB Number</th>
                                                    <th>Assignment</th>
                                                    <th>Priority</th>

                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>First Name</th>
                                                    <th>Middle Name</th>
                                                    <th>Last Name</th>
                                                    <th>NIB Number</th>
                                                    <th>Assignment</th>
                                                    <th>Priority</th>

                                                </tr>
                                            </tfoot>
                                        </table>

                                    </div>


                                    <div class="tab-pane" id="pill-printed-badges" role="tabpanel">

                                        <table id="printed-badges" class="display table table-bordered dt-responsive" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>First Name</th>
                                                    <th>Middle Name</th>
                                                    <th>Last Name</th>
                                                    <th>NIB Number</th>
                                                    <th>Assignment</th>
                                                    <th>Priority</th>

                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>First Name</th>
                                                    <th>Middle Name</th>
                                                    <th>Last Name</th>
                                                    <th>NIB Number</th>
                                                    <th>Assignment</th>
                                                    <th>Priority</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>

                                </div>
                            </div><!-- end card-body -->
                        </div><!-- end card -->
                    </div><!--end col-->
                </div><!-- end row -->
               




                <!-- Modal -->
                <div class="modal fade flip" id="deleteOrder" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-body p-5 text-center">
                                <lord-icon src="https://cdn.lordicon.com/gsqxdxog.json" trigger="loop" colors="primary:#405189,secondary:#f06548" style="width:90px;height:90px">
                                </lord-icon>
                                <div class="mt-4 text-center">
                                    <h4>You are about to delete a order ?</h4>
                                    <p class="text-muted fs-14 mb-4">Deleting your order will remove all
                                        of
                                        your information from our database.</p>
                                    <div class="hstack gap-2 justify-content-center remove">
                                        <button class="btn btn-link link-success fw-medium text-decoration-none" id="deleteRecord-close" data-bs-dismiss="modal"><i class="ri-close-line me-1 align-middle"></i>
                                            Close</button>
                                        <button class="btn btn-danger" id="delete-record">Yes, Delete
                                            It</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end modal -->
            </div>
            <!--end card-body-->
        </div>
        <!--end card-->
    </div>
    <!--end col-->
</div>
<!--end row-->
<!--ADD NEW REGISTRANT MODAL row-->
<div class="modal fade zoomIn" id="showModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<?php include 'modals/quick-register.php'; ?>
</div>


</div>
<!-- container-fluid -->


</div>

</div>
<!-- End Page-content -->

<!-- container-fluid -->
<?php include 'layouts/footer.php'; ?>
</div>
<!-- end main content-->

</div>
<!-- END layout-wrapper -->





<?php include 'layouts/vendor-scripts.php'; ?>







<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<!--list pagination js-->

<script src="assets/libs/sweetalert2/sweetalert2.min.js"></script>

<!--datatable js-->
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.print.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>

<!--<script src="assets/js/pages/datatables.init.js"></script>
App js -->
<script src="assets/js/app.js"></script>

<!-- Your HTML code for the DataTables goes here -->

<script>
$(document).ready(function() {
    // Function to add the appropriate badge based on the "Priority" column value
    function addDangerBadge(row, data) {
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
            $('td:eq(6)', row).html('<h5><span class="' + badgeClass + '">' + priority + '</span></h5>');
        }
    }

    // Initialize DataTable for "all-registrants"
    $('#all-registrants').DataTable({
        "processing": false,
        "serverSide": false,
        "ajax": {
            "url": "https://conference.gov.bs/api/dashboard/fetch_data/get_registrants_tb_all.php",
            "type": "post"
        },
        "columns": [
            { "data": "id" },
            { "data": "first_name" },
            { "data": "middle_name" },
            { "data": "last_name" },
            { "data": "nib" },
            { "data": "assignment" },
            { "data": "priority" }
        ],
        "fnCreatedRow": function(nRow, aData, iDataIndex) {
            $(nRow).attr('id', aData.id); // Assuming "id" is the property representing the "ID" column in the dataset
            addDangerBadge(nRow, aData);
        },
        "dom": 'lBfrtip',
        "buttons": ['copy', 'csv', 'excel', 'pdf', 'print'],
        "pageLength": 25,
        "lengthMenu": [
            [25, 50, 75, 100, -1],
            [25, 50, 75, 100, "All"]
        ],
        "order": [[6, 'asc']],
        "searching": true,
        "paging": true,
        "info": true,
        "scrollX": false,
        "searchDelay": 550,
    });

    // Initialize DataTable for "pending-security"
    $('#pending-security').DataTable({
        "processing": false,
        "serverSide": false,
        "ajax": {
            "url": "https://conference.gov.bs/api/dashboard/fetch_data/get_registrants_tb_security_checks.php",
            "type": "POST"
        },
        "columns": [
            { "data": "id" },
            { "data": "first_name" },
            { "data": "middle_name" },
            { "data": "last_name" },
            { "data": "nib" },
            { "data": "assignment" },
            { "data": "priority" }
        ],
        "fnCreatedRow": function(nRow, aData, iDataIndex) {
            $(nRow).attr('id', aData.id); // Assuming "id" is the property representing the "ID" column in the dataset
            addDangerBadge(nRow, aData);
        },
        "dom": 'lBfrtip',
        "buttons": ['copy', 'csv', 'excel', 'pdf', 'print'],
        "pageLength": 25,
        "lengthMenu": [
            [25, 50, 75, 100, -1],
            [25, 50, 75, 100, "All"]
        ],
        "order": [[6, 'asc']],
        "searching": true,
        "paging": true,
        "info": true,
        "scrollX": false,
        "searchDelay": 550,
    });

    // Initialize DataTable for "approved-registrants"
    $('#approved-registrants').DataTable({
        "processing": false,
        "serverSide": false,
        "ajax": {
            "url": "https://conference.gov.bs/api/dashboard/fetch_data/get_registrants_tb_approved.php",
            "type": "POST"
        },
        "columns": [
            { "data": "id" },
            { "data": "first_name" },
            { "data": "middle_name" },
            { "data": "last_name" },
            { "data": "nib" },
            { "data": "assignment" },
            { "data": "priority" }
        ],
        "fnCreatedRow": function(nRow, aData, iDataIndex) {
            $(nRow).attr('id', aData.id); // Assuming "id" is the property representing the "ID" column in the dataset
            addDangerBadge(nRow, aData);
        },
        "dom": 'lBfrtip',
        "buttons": ['copy', 'csv', 'excel', 'pdf', 'print'],
        "pageLength": 25,
        "lengthMenu": [
            [50, 75, 100, -1],
            [50, 75, 100, "All"]
        ],
        "order": [[6, 'asc']],
        "searching": true,
        "paging": true,
        "info": true,
        "scrollX": false,
        "searchDelay": 550,
    });

    // Initialize DataTable for "printed-badges"
    $('#printed-badges').DataTable({
        "processing": false,
        "serverSide": false,
        "ajax": {
            "url": "https://conference.gov.bs/api/dashboard/fetch_data/get_registrants_tb_badges_printed.php",
            "type": "POST"
        },
        "columns": [
            { "data": "id" },
            { "data": "first_name" },
            { "data": "middle_name" },
            { "data": "last_name" },
            { "data": "nib" },
            { "data": "assignment" },
            { "data": "priority" }
        ],
        "fnCreatedRow": function(nRow, aData, iDataIndex) {
            $(nRow).attr('id', aData.id); // Assuming "id" is the property representing the "ID" column in the dataset
            addDangerBadge(nRow, aData);
        },
        "dom": 'lBfrtip',
        "buttons": ['copy', 'csv', 'excel', 'pdf', 'print'],
        "pageLength": 25,
        "lengthMenu": [
            [25, 50, 75, 100, -1],
            [25, 50, 75, 100, "All"]
        ],
        "order": [[6, 'asc']],
        "searching": true,
        "paging": true,
        "info": true,
        "scrollX": false,
        "searchDelay": 550,
    });
});
</script>


</body>

