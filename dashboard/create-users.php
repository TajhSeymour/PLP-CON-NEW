<?php include 'layouts/session.php'; ?>
<?php include 'layouts/head-main.php'; ?>

<head>

    <title>DTU - System Administration| Create System Users</title>
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
                                    <li class="breadcrumb-item active">Create User</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end page title -->


                <div class="row">
                    <div class="col-lg-12">
                        <div class="card" id="ticketsList">
                            <div class="card-header border-0">
                                <div class="d-flex align-items-center">
                                    <h5 class="card-title mb-0 flex-grow-1">CREATE SYSTEM USER</h5>
                                    <div class="flex-shrink-0">
                                        <div class="d-flex flex-wrap gap-2">
                                            <button class="btn btn-danger add-btn" data-bs-toggle="modal" data-bs-target="#showModal"><i class="ri-add-line align-bottom me-1"></i> Add New User</button>
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
                                <table id="create-users" class="display table table-bordered dt-responsive" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>First Name</th>
                                            <th>Middle Name</th>
                                            <th>Last Name</th>
                                            <th>Email Address</th>
                                            <th>NIB Number</th>
                                            <th>User Access</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>ID</th>
                                            <th>First Name</th>
                                            <th>Middle Name</th>
                                            <th>Last Name</th>
                                            <th>Email Address</th>
                                            <th>NIB Number</th>
                                            <th>User Access</th>
                                        </tr>
                                    </tfoot>
                                </table>
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



<div class="modal fade zoomIn" id="showModal" tabindex="-1" aria-hidden="true">
    <?php include 'modals/mod-create-user.php'; ?>
</div>





<!-- container-fluid -->
</div>
<!-- End Page-content -->
</div>

<?php //include 'layouts/footer.php'; ?>
</div>
<!-- end main content-->
<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
<?php include 'offcanvas/oc-create-users.php'; ?>
</div>
</div>
<!-- END layout-wrapper -->

<?php include 'layouts/vendor-scripts.php'; ?>

<!-- App js -->

<script src="assets/js/app.js"></script>

<script>
    $(document).ready(function() {
        // Initialize DataTable
        var table = $('#create-users').DataTable({
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
                    "data": "email"
                },
                {
                    "data": "nib"
                },
                {
                    "data": "system_roles"
                },
            ],
            "ajax": {
                "url": "/api/dashboard/fetch_data/get_staff_tb_all.php",
                "type": "post"
            },
            "dom": 'lBfrtip',
            "buttons": ['copy', 'csv', 'excel', 'pdf', 'print'],
            "pageLength": 25,
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

        const offcanvas = new bootstrap.Offcanvas(document.getElementById("offcanvasRight"));

        $('#create-users tbody').on('click', 'tr', function() {
            console.log("Row Clicked!"); // Add this line for testing
            const rowData = table.row(this).data();

      const id = rowData.id;
      const first_name = rowData.first_name;
      const middle_name = rowData.middle_name;
      const last_name = rowData.last_name;
       const email = rowData.email;
       const nib = rowData.nib;
      // const system_roles = rowData.system_roles;

      const displayedIdElement = document.getElementById("displayedId");
      displayedIdElement.textContent = id

      const displayedIdElement2 = document.getElementById("input_user_id");
      displayedIdElement.value = id;
      

      const displayedNameElement = document.getElementById("displayFirstLastName");
      displayedNameElement.textContent = first_name + " " + last_name;

      //THE INPUT TEXT FORM


      const displayedFirstNameElement = document.getElementById("input_first_name_oc");
        displayedFirstNameElement.value = first_name;

       const displayedMiddleNameElement = document.getElementById("input_middle_name_oc");
     displayedMiddleNameElement.value = middle_name;

      const displayedLastNameElement = document.getElementById("input_last_name_oc");
      displayedLastNameElement.value = last_name;

      const displayedEmailElement = document.getElementById("input_email_oc");
      displayedEmailElement.value = email;

      const displayedNIBElement = document.getElementById("input_nib_oc");
      displayedNIBElement.value = nib;


    


      offcanvas.show(); // Show the offcanvas
        });
    });
</script>

<style>
    #create-users thead th,
    #create-users tfoot th {
        color: white;
        background-color: #0a2b3d;
    }
</style>

</body>



</html>