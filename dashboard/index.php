<?php include 'layouts/session.php'; ?>
<?php include 'layouts/head-main.php'; ?>

<head>
    <title>PLP Convention Administration Panel</title>
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
                                        <p class="fw-medium text-muted mb-0">TOTAL CHECKED-IN DELEGATES</p>
                                        <h2 class="mt-4 ff-secondary fw-semibold"><span class="counter-value"
                                                data-target="<?php echo $total_checked_in_users_count; ?>">0</span>
                                        </h2>

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
                                        <p class="fw-medium text-muted mb-0">TOTAL STALWART COUNCILLORS</p>
                                        <h2 class="mt-4 ff-secondary fw-semibold"><span class="counter-value"
                                                data-target="<?php echo $total_stalwart_councillor; ?>">0</span> </h2>
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
                                        <p class="fw-medium text-muted mb-0">TOTAL VOTING DELEGATES</p>
                                        <h2 class="mt-4 ff-secondary fw-semibold"><span class="counter-value"
                                                data-target="<?php echo $total_voting_delegates; ?>">0</span> </h2>

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
                                        <p class="fw-medium text-muted mb-0">TOTAL OBSERVER DELEGATES</p>
                                        <h2 class="mt-4 ff-secondary fw-semibold"><span class="counter-value"
                                                data-target="<?php echo $total_observer_delegates; ?>">0</span> </h2>

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
                                        <p class="fw-medium text-muted mb-0">TOTAL STALWART COUNCILLORS PAID</p>
                                        <h2 class="mt-4 ff-secondary fw-semibold"><span class="counter-value"
                                                data-target="<?php echo $total_stalwart_councillor_paid; ?>">0</span>
                                        </h2>

                                    </div>
                                    <div>
                                        <div class="avatar-sm flex-shrink-0">
                                            <span class="avatar-title bg-soft-info text-info rounded-circle fs-4">
                                                <i class=" mdi-account-cash"></i>
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
                                        <p class="fw-medium text-muted mb-0">TOTAL VOTING DELEGATES PAID</p>
                                        <h2 class="mt-4 ff-secondary fw-semibold"><span class="counter-value"
                                                data-target="<?php echo $total_voting_delegates_paid; ?>">0</span> </h2>

                                    </div>
                                    <div>
                                        <div class="avatar-sm flex-shrink-0">
                                            <span class="avatar-title bg-soft-info text-info rounded-circle fs-4">
                                                <i class=" mdi-account-cash"></i>
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
                                        <p class="fw-medium text-muted mb-0">TOTAL OBSERVER DELEGATES PAID</p>
                                        <h2 class="mt-4 ff-secondary fw-semibold"><span class="counter-value"
                                                data-target="<?php echo $total_observer_delegates_paid; ?>">0</span>
                                        </h2>

                                    </div>
                                    <div>
                                        <div class="avatar-sm flex-shrink-0">
                                            <span class="avatar-title bg-soft-info text-info rounded-circle fs-4">
                                                <i class=" mdi-account-cash"></i>
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
                                        <p class="fw-medium text-muted mb-0">TOTAL PENDING PAYMENT</p>
                                        <h2 class="mt-4 ff-secondary fw-semibold"><span class="counter-value"
                                                data-target="<?php echo $total_pending_payment; ?>">0</span>
                                        </h2>

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

                    <div class="col-xxl-3 col-sm-6">
                        <div class="card card-animate">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <p class="fw-medium text-muted mb-0">TOTAL DELEGATES TRAVELLING</p>
                                        <h2 class="mt-4 ff-secondary fw-semibold"><span class="counter-value"
                                                data-target="<?php echo $total_delegates_travelling; ?>">0</span> </h2>

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
                                        <p class="fw-medium text-muted mb-0">DELEGATES REQUESTING TRANSPORATION
                                            ASSISTANCE</p>
                                        <h2 class="mt-4 ff-secondary fw-semibold"><span class="counter-value"
                                                data-target="<?php echo $total_delegates_requesting_transportation_assistance; ?>">0</span>
                                        </h2>

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



                    <!--end col-->
                    <div class="col-xxl-3 col-sm-6">
                        <div class="card card-animate">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <p class="fw-medium text-muted mb-0">BADGES PRINTED</p>
                                        <h2 class="mt-4 ff-secondary fw-semibold"><span class="counter-value"
                                                data-target="<?php echo $badge_printed; ?>">0</span></h2>

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
                                        <h2 class="mt-4 ff-secondary fw-semibold"><span class="counter-value"
                                                data-target="<?php echo $badge_printed_pending; ?>">0</span></h2>

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
                                        <p class="fw-medium text-muted mb-0">MALE REGISTRANTS</p>
                                        <h2 class="mt-4 ff-secondary fw-semibold"><span class="counter-value"
                                                data-target="<?php echo $male_users_count; ?>">0</span></h2>

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
                                        <h2 class="mt-4 ff-secondary fw-semibold"><span class="counter-value"
                                                data-target="<?php echo $female_users_count; ?>">0</span></h2>
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
                                            <button class="btn btn-danger add-btn" data-bs-toggle="modal"
                                                data-bs-target="#showModal"><i
                                                    class="ri-add-line align-bottom me-1"></i> ADD NEW MEMBER</button>
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
                                <!-- Nav tabs -->
                                <ul class="nav nav-pills nav-justified mb-3" role="tablist">
                                    <?php if ($_SESSION['super_admin'] || $_SESSION['supervisor'] || $_SESSION['officer'] || $_SESSION['print_officer']): ?>
                                        <li class="nav-item">
                                            <a class="nav-link waves-effect waves-light active" data-bs-toggle="tab"
                                                href="#pill-all-registrants" role="tab">
                                                ALL REGISTRANTS
                                            </a>
                                        </li>
                                    <?php endif; ?>


                                    <?php if ($_SESSION['super_admin'] || $_SESSION['supervisor'] || $_SESSION['officer'] || $_SESSION['print_officer']): ?>
                                        <li class="nav-item d-none d-sm-block">
                                            <!-- This list item will be hidden on mobile devices -->
                                            <a class="nav-link waves-effect waves-light" data-bs-toggle="tab"
                                                href="#pill-pending-payment" role="tab">
                                                PENDING PAYMENT
                                            </a>
                                        </li>
                                    <?php endif; ?>

                                    <?php if ($_SESSION['super_admin'] || $_SESSION['supervisor'] || $_SESSION['officer'] || $_SESSION['print_officer']): ?>
                                        <li class="nav-item d-none d-sm-block">
                                            <!-- This list item will be hidden on mobile devices -->
                                            <a class="nav-link waves-effect waves-light" data-bs-toggle="tab"
                                                href="#pill-pending-badges" role="tab">
                                                BADGES PENDING PRINT
                                            </a>
                                        </li>
                                    <?php endif; ?>

                                    <?php if ($_SESSION['super_admin'] || $_SESSION['supervisor'] || $_SESSION['officer'] || $_SESSION['print_officer']): ?>
                                        <li class="nav-item d-none d-sm-block">
                                            <!-- This list item will be hidden on mobile devices -->
                                            <a class="nav-link waves-effect waves-light" data-bs-toggle="tab"
                                                href="#pill-printed-badges" role="tab">
                                                BADGES PRINTED
                                            </a>
                                        </li>
                                    <?php endif; ?>
                                </ul>
                                <!-- Tab panes -->
                                <div class="tab-content text-muted">
                                    <div class="tab-pane active" id="pill-all-registrants" role="tabpanel">
                                        <!--   <div class="d-flex"> -->
                                        <table id="all-registrants" class="display table table-bordered dt-responsive"
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
                                                    <th>CONSTITUENCY</th>
                                                    <th>AFFILIATED BRANCH</th>
                                                    <th>MEMBERSHIP TYPE</th>
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
                                                    <th>CONSTITUENCY</th>
                                                    <th>AFFILIATED BRANCH</th>
                                                    <th>MEMBERSHIP TYPE</th>
                                                    <th>REGISTRATION DATE</th>

                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div> <!--END OF PILL -->

                                    <div class="tab-pane" id="pill-pending-payment" role="tabpanel">
                                        <table id="pending-payment" class="display table table-bordered dt-responsive"
                                            style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>PLP ID</th>
                                                    <th>PRIORITY</th>
                                                    <th>FIRST NAME</th>
                                                    <th>MIDDLE NAME</th>
                                                    <th>LAST NAME</th>
                                                    <th>GENDER</th>
                                                    <th>MEMBERSHIP TYPE</th>
                                                    <th>PRICE</th>
                                                    <th>RECEIPT NUMBER</th>
                                                    <th>PAYMENT METHOD</th>
                                                    <th>REP. BRANCH</th>
                                                    <th>BADGE REPRINT</th>
                                                    <th>DOB</th>
                                                    <th>NIB NUMBER</th>
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
                                                    <th>MEMBERSHIP TYPE</th>
                                                    <th>PRICE</th>
                                                    <th>RECEIPT NUMBER</th>
                                                    <th>PAYMENT METHOD</th>
                                                    <th>REP. BRANCH</th>
                                                    <th>BADGE REPRINT</th>
                                                    <th>DOB</th>
                                                    <th>NIB NUMBER</th>
                                                    <th>REGISTRATION DATE</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                    <div class="tab-pane" id="pill-pending-badges" role="tabpanel">
                                        <table id="pending-print"
                                            class="display table table-bordered dt-responsive" style="width:100%">
                                            <thead>
                                                <tr>
                                                <th>PLP ID</th>
                                                    <th>PRIORITY</th>
                                                    <th>FIRST NAME</th>
                                                    <th>MIDDLE NAME</th>
                                                    <th>LAST NAME</th>
                                                    <th>GENDER</th>
                                                    <th>MEMBERSHIP TYPE</th>
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
                                                    <th>MEMBERSHIP TYPE</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                    <div class="tab-pane" id="pill-printed-badges" role="tabpanel">

                                        <table id="printed-badges" class="display table table-bordered dt-responsive"
                                            style="width:100%">
                                            <thead>
                                                <tr>
                                                <th>PLP ID</th>
                                                    <th>PRIORITY</th>
                                                    <th>FIRST NAME</th>
                                                    <th>MIDDLE NAME</th>
                                                    <th>LAST NAME</th>
                                                    <th>GENDER</th>
                                                    <th>MEMBERSHIP TYPE</th>

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
                                                    <th>MEMBERSHIP TYPE</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>

                                </div>
                            </div><!-- end card-body -->
                        </div><!-- end card -->
                    </div><!--end col-->
                </div><!-- end row -->
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

<!--<script src="assets/js/pages/datatables.init.js"></script>
App js -->
<script src="assets/js/app.js"></script>

<!-- Your HTML code for the DataTables goes here -->
<script>
            function reloadData(table) {
        table.ajax.reload(null, false); // Reload the data without resetting the current page
    }

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
                var priorityColumnIndex = $("#all-registrants thead th").filter(function () {
                    return $(this).text() === "PRIORITY";
                }).index();

                $('td:eq(' + priorityColumnIndex + ')', row).html('<span class="' + badgeClass + '">' + priority + '</span>');
            }

            var gender = data.gender.toLowerCase();
            var iconClass = "mdi mdi-22px " + (gender === 'female' ? 'mdi-human-female' : 'mdi-human-male');
            $('td:eq(2)', row).html('<i class="' + iconClass + '"></i> ' + data.first_name);

        }
        // Initialize DataTable for "all-registrants"
        var allRegistrantsTable = $('#all-registrants').DataTable({
            "processing": false,
            "serverSide": false,
            "ajax": {
                "url": "/api/dashboard/fetch_data/get_registrants_tb_all.php",
                "type": "POST",
                "error": function (jqXHR, textStatus, errorThrown) {
                    alert('Error loading data: ' + errorThrown);
                }
            },

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
                "data": "nib_number"
            },
            {
                "data": "constituency"
            },
            {
                "data": "affiliated_branch", visible: false
            },
            {
                "data": "membership_type"
            },
            {
                "data": "date"
            }

            ],
            "fnCreatedRow": function (nRow, aData, iDataIndex) {
                $(nRow).attr('plp_id', aData.plp_id); // Assuming "id" is the property representing the "ID" column in the dataset
                addBadge(nRow, aData);
            },
            "dom": 'lfrtip', //lBfrtip to include buttons
            "buttons": ['copy', 'csv', 'excel', 'pdf', 'print'],
            "pageLength": 25,
            "lengthMenu": [
                [25, 50, 75, 100, -1],
                [25, 50, 75, 100, "All"]
            ],
            "order": [
                [1, 'asc'],
                [4, 'asc'],
                [8, 'asc']
            ],
            "searching": true,
            "paging": true,
            "info": true,
            "scrollX": false,
            "searchDelay": 550,
        });
        const offcanvas = new bootstrap.Offcanvas(document.getElementById("offcanvasSecurity"));

$('#all-delegates tbody').on('click', 'tr', function() {
    console.log("Row Clicked!"); // Add this line for testing
    const rowData = allRegistrantsTable.row(this).data();

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
    const constituency = rowData.constituency;
    const affiliated_branch = rowData.affiliated_branch;
    const membership_type = rowData.membership_type;
    const date = rowData.date;
    const mobile_number = rowData.mobile_number;
    const telephone_number = rowData.telephone_number;
    const street_address = rowData.street_address;
    const house_number = rowData.house_number;
    const emergency_contact_name = rowData.emergency_contact_name;
    const emergency_contact_relationship = rowData.emergency_contact_relationship;
const emergency_contact_telephone_number = rowData.emergency_contact_telephone_number;

    const displayedIdElement = document.getElementById("displayedId");
    displayedIdElement.textContent = id

    const displayedIdElement2 = document.getElementById("input_userid");
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

    const displayedEmailElement = document.getElementById("oc_email_address");
    displayedEmailElement.value = email;

    const displayedPriorityElement = document.getElementById("oc_priority");
    displayedPriorityElement.value = priority;

   const displayedGenderElement = document.getElementById("oc_gender");
    displayedGenderElement.value = gender;

     const displayedNIBElement = document.getElementById("oc_up_nib_number");
     displayedNIBElement.value = nib_number;

   const displayedConstituencyElement = document.getElementById("oc_constituency");
    displayedConstituencyElement.value = constituency;

    const displayedAffiliatedBranchElement = document.getElementById("oc_affiliated_branch");
     displayedAffiliatedBranchElement.value = affiliated_branch;

      const displayedMembershipTypeElement = document.getElementById("oc_membership_type");
     displayedMembershipTypeElement.value = membership_type;

 const displayedDateElement = document.getElementById("oc_date");
 displayedDateElement.value = date;

const displayedMobileNumberElement = document.getElementById("oc_mobile_number");
 displayedMobileNumberElement.value = mobile_number;

   const displayedTelephoneNumberElement = document.getElementById("oc_telephone_number");
    displayedTelephoneNumberElement.value = telephone_number;

  const displayedStreetAddressElement = document.getElementById("oc_street_address");
   displayedStreetAddressElement.value = street_address;

const displayedHouseNumberElement = document.getElementById("oc_house_number");
    displayedHouseNumberElement.value = house_number;

 const displayedEmergencyContactNameElement = document.getElementById("oc_emergency_contact_name");
 displayedEmergencyContactNameElement.value = emergency_contact_name;

   const displayedEmergencyContactRelationshipElement = document.getElementById("oc_emergency_contact_relationship");
   displayedEmergencyContactRelationshipElement.value = emergency_contact_relationship;

    const displayedEmergencyContactTelephoneNumberElement = document.getElementById("oc_emergency_contact_telephone_number");
   displayedEmergencyContactTelephoneNumberElement.value = emergency_contact_telephone_number;

   



    offcanvas.show(); // Show the offcanvas
});

        // Initialize DataTable for "all-registrants"
        var pendingPaymentTable = $('#pending-payment').DataTable({
            "processing": false,
            "serverSide": false,
            "ajax": {
                "url": "/api/dashboard/fetch_data/get_registrants_tb_pending_payment.php",
                "type": "POST",
                "error": function (jqXHR, textStatus, errorThrown) {
                    alert('Error loading data: ' + errorThrown);
                }
            },

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
                "data": "delegate_type"
            },
            {
                "data": "price"
            },
            {
                "data": "receipt_number"
            },
            {
                "data": "method"
            },
            {
                "data": "branch"
            },
            {
                "data": "badge_reprint_status"
            },
            {
                "data": "dob", visible: false
            },
            {
                "data": "nib_number", visible: false
            },
            {
                "data": "date", visible: false
            }

            ],
            "fnCreatedRow": function (nRow, aData, iDataIndex) {
                $(nRow).attr('plp_id', aData.plp_id); // Assuming "id" is the property representing the "ID" column in the dataset
                addBadge(nRow, aData);
            },
            "dom": 'lfrtip', //lBfrtip to include buttons
            "buttons": ['copy', 'csv', 'excel', 'pdf', 'print'],
            "pageLength": 25,
            "lengthMenu": [
                [25, 50, 75, 100, -1],
                [25, 50, 75, 100, "All"]
            ],
            "order": [
                [1, 'asc']

            ],
            "searching": true,
            "paging": true,
            "info": true,
            "scrollX": false,
            "searchDelay": 550,
        });

// Initialize DataTable for "all-registrants"
var printedBadgesTable = $('#printed-badges').DataTable({
            "processing": false,
            "serverSide": false,
            "ajax": {
                "url": "/api/dashboard/fetch_data/get_registrants_tb_badges_printed.php",
                "type": "POST",
                "error": function (jqXHR, textStatus, errorThrown) {
                    alert('Error loading data: ' + errorThrown);
                }
            },

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
                "data": "membership_type"
            }

            ],
            "fnCreatedRow": function (nRow, aData, iDataIndex) {
                $(nRow).attr('plp_id', aData.plp_id); // Assuming "id" is the property representing the "ID" column in the dataset
                addBadge(nRow, aData);
            },
            "dom": 'lfrtip', //lBfrtip to include buttons
            "buttons": ['copy', 'csv', 'excel', 'pdf', 'print'],
            "pageLength": 25,
            "lengthMenu": [
                [25, 50, 75, 100, -1],
                [25, 50, 75, 100, "All"]
            ],
            "order": [
                [1, 'asc']

            ],
            "searching": true,
            "paging": true,
            "info": true,
            "scrollX": false,
            "searchDelay": 550,
        });

// Initialize DataTable for "all-registrants"
var pendingPrintTable = $('#pending-print').DataTable({
            "processing": false,
            "serverSide": false,
            "ajax": {
                "url": "/api/dashboard/fetch_data/get_registrants_tb_badges_pending_print.php",
                "type": "POST",
                "error": function (jqXHR, textStatus, errorThrown) {
                    alert('Error loading data: ' + errorThrown);
                }
            },

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
                "data": "membership_type"
            }

            ],
            "fnCreatedRow": function (nRow, aData, iDataIndex) {
                $(nRow).attr('plp_id', aData.plp_id); // Assuming "id" is the property representing the "ID" column in the dataset
                addBadge(nRow, aData);
            },
            "dom": 'lfrtip', //lBfrtip to include buttons
            "buttons": ['copy', 'csv', 'excel', 'pdf', 'print'],
            "pageLength": 25,
            "lengthMenu": [
                [25, 50, 75, 100, -1],
                [25, 50, 75, 100, "All"]
            ],
            "order": [
                [1, 'asc']

            ],
            "searching": true,
            "paging": true,
            "info": true,
            "scrollX": false,
            "searchDelay": 550,
        });

         // Reload data for all DataTables every 15 seconds
    setInterval(function () {
        reloadData(allRegistrantsTable);
        reloadData(pendingPaymentTable);
        reloadData(printedBadgesTable);
        reloadData(pendingPrintTable);
    }, 15000); // 15 seconds (15000 milliseconds)

    });
</script>

<style>
    #all-registrants thead th,
    #all-registrants tfoot th,
    #pending-payment thead th,
    #pending-payment tfoot th,
    #pending-print thead th,
    #pending-print tfoot th,
    #printed-badges thead th,
    #printed-badges tfoot th {
        color: white;
        background-color: #0a2b3d;
    }
</style>


</body>