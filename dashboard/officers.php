<?php include 'layouts/session.php'; ?>
<?php include 'layouts/head-main.php'; ?>

<head>

    <title> Officers | DTU - Admin & Dashboard</title>
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
                            <h4 class="mb-sm-0">SYSTEM USERS</h4>

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
                    <div class="col-lg-12">
                        <div class="card" id="addSystemUser">
                            <div class="card-header border-0">
                                <div class="d-flex align-items-center">
                                    <h5 class="card-title mb-0 flex-grow-1">ADD SYSTEM USER</h5>
                                    <div class="flex-shrink-0">
                                        <div class="d-flex flex-wrap gap-3">
                                            <button class="btn btn-danger add-btn" data-bs-toggle="modal" data-bs-target="#showModal"><i class="ri-add-line align-bottom me-1"></i> ADD NEW</button>
                                            <button class="btn btn-success" id="remove-actions" onClick="deleteMultiple()"><i class="ri-delete-bin-2-line"></i></button>
                                        </div>
            
                                    </div>
                                    <div class="flex-shrink-0">
                                        <div class="d-flex flex-wrap gap-3">
                                            <button class="btn btn-danger add-btn" data-bs-toggle="modal" data-bs-target="#showModal"><i class="ri-add-line align-bottom me-1"></i> ADD NEW</button>
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
                                    <li class="nav-item">
                                        <a class="nav-link waves-effect waves-light" data-bs-toggle="tab" href="#pill-security-checks" role="tab">
                                            PENDING SECURITY CHECKS
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link waves-effect waves-light" data-bs-toggle="tab" href="#pill-approved-registrants" role="tab">
                                            APPROVED REGISTRANTS
                                        </a>
                                    </li>
                                    <li class="nav-item">
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

<script type="text/javascript">
     document.addEventListener('DOMContentLoaded', function () {
       if ($.fn.DataTable.isDataTable('#all-registrants')) {
     //If DataTable is already initialized, destroy it first.
       $('#all-registrants').DataTable().destroy();
     $('#pending-security').DataTable().destroy();
     $('#approved-registrants').DataTable().destroy();
     $('#printed-badges').DataTable().destroy();
      }
    $(document).ready(function() {
        $('#all-registrants').DataTable({
            "fnCreatedRow": function(nRow, aData, iDataIndex) {
          $(nRow).attr('id', aData[0]);
            },
            "processing": false,
            "serverSide": false,
            "ajax": {
                "url": "https://conference.gov.bs/api/dashboard/fetch_data/get_registrants_tb_all.php",
                "type": "post"
            },
            "columns": [{
                    "data": "id"
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
                    "data": "nib"
                },
                {
                    "data": "assignment"
                },
                {
                    "data": "priority"
                }
            ],
            "dom": 'lBfrtip',
            "buttons": ['copy', 'csv', 'excel', 'pdf', 'print'],
            "pageLength": 25, // sets initial page length
            "lengthMenu": [
                [25, 50, 75, 100, -1],
                [25, 50, 75, 100, "All"]
            ], // sets entries in length dropdown
            "order": [
              [6, 'asc']
           ], // sets initial order to column 1 (0-indexed), ascending
            "searching": true, // enables search functionality
            "paging": true, // enables pagination
            "info": true, // enables table information display
            "scrollX": false, // disables horizontal scroll
            "searchDelay": 550, // Delay of 350 milliseconds
        });
    });
    $(document).on('submit', '#addUser', function(e) {
      e.preventDefault();
      var city = $('#addCityField').val();
      var username = $('#addUserField').val();
      var mobile = $('#addMobileField').val();
      var email = $('#addEmailField').val();
      if (city != '' && username != '' && mobile != '' && email != '') {
        $.ajax({
          url: "add_user.php",
          type: "post",
          data: {
            city: city,
            username: username,
            mobile: mobile,
            email: email
          },
          success: function(data) {
            var json = JSON.parse(data);
            var status = json.status;
            if (status == 'true') {
              mytable = $('#example').DataTable();
              mytable.draw();
              $('#addUserModal').modal('hide');
            } else {
              alert('failed');
            }
          }
        });
      } else {
        alert('Fill all the required fields');
      }
    });

    $(document).ready(function() {
        $('#pending-security').DataTable({
            "processing": false,
            "serverSide": false,
            "ajax": {
                "url": "https://conference.gov.bs/api/dashboard/fetch_data/get_registrants_tb_security_checks.php",
                "type": "POST"
            },
            "columns": [{
                    "data": "id"
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
                    "data": "nib"
                },
                {
                    "data": "assignment"
                },
                {
                    "data": "priority"
                }
            ],
            "dom": 'lBfrtip',
            "buttons": ['copy', 'csv', 'excel', 'pdf', 'print'],
            "pageLength": 25, // sets initial page length
            "lengthMenu": [
                [25, 50, 75, 100, -1],
                [25, 50, 75, 100, "All"]
            ], // sets entries in length dropdown
            "order": [
                [6, 'asc']
            ], // sets initial order to column 1 (0-indexed), ascending
            "searching": true, // enables search functionality
            "paging": true, // enables pagination
            "info": true, // enables table information display
            "scrollX": false, // disables horizontal scroll
            "searchDelay": 550, // Delay of 350 milliseconds
        });
    });
    $(document).ready(function() {
        $('#approved-registrants').DataTable({
            "processing": false,
            "serverSide": false,
            "ajax": {
                "url": "https://conference.gov.bs/api/dashboard/fetch_data/get_registrants_tb_approved.php",
                "type": "POST"
            },
            "columns": [{
                    "data": "id"
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
                    "data": "nib"
                },
                {
                    "data": "assignment"
                },
                {
                    "data": "priority"
                }
            ],
            "dom": 'lBfrtip',
            "buttons": ['copy', 'csv', 'excel', 'pdf', 'print'],
            "pageLength": 25, // sets initial page length
            "lengthMenu": [
                [50, 75, 100, -1],
                [50, 75, 100, "All"]
            ], // sets entries in length dropdown
            "order": [
                [6, 'asc']
            ], // sets initial order to column 1 (0-indexed), ascending
            "searching": true, // enables search functionality
            "paging": true, // enables pagination
            "info": true, // enables table information display
            "scrollX": false, // disables horizontal scroll
            "searchDelay": 550, // Delay of 350 milliseconds
        });
    });
    $(document).ready(function() {
        $('#printed-badges').DataTable({
            "processing": false,
            "serverSide": false,
            "ajax": {
                "url": "https://conference.gov.bs/api/dashboard/fetch_data/get_registrants_tb_badges_printed.php",
                "type": "POST"
            },
            "columns": [{
                    "data": "id"
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
                    "data": "nib"
                },
                {
                    "data": "assignment"
                },
                {
                    "data": "priority"
                }
            ],
            "dom": 'lBfrtip',
            "buttons": ['copy', 'csv', 'excel', 'pdf', 'print'],
            "pageLength": 25, // sets initial page length
            "lengthMenu": [
                [25, 50, 75, 100, -1],
                [25, 50, 75, 100, "All"]
            ], // sets entries in length dropdown
            "order": [
                [6, 'asc']
            ], // sets initial order to column 1 (0-indexed), ascending
            "searching": true, // enables search functionality
            "paging": true, // enables pagination
            "info": true, // enables table information display
            "scrollX": false, // disables horizontal scroll
            "searchDelay": 550, // Delay of 350 milliseconds
        });
    });



});
</script>

</body>

