<?php include 'layouts/session.php'; ?>
<?php include 'layouts/head-main.php'; ?>

<head>

    <title>DTU - System Administration| Add Delegates</title>
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
                                    <li class="breadcrumb-item active">Process Delegate</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <!--end card-body-->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <table id="process-delegates" class="display table table-bordered dt-responsive" style="width:100%">
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
                                        </tr>
                                    </tfoot>
                                </table>
                            </div><!-- end card-body -->
                        </div><!-- end card -->
                    </div><!--end col-->
                </div><!-- end row -->
                <!-- DELETE Modal NOT USED 
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
                </div>-->
              <!-- DELETE Modal  end modal -->
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
    <?php include 'modals/add-user.php'; ?>
</div>

<!-- EDIT DELEGATE MODAL row-->
<div 
    class="modal fade" 
    id="editDelegate" 
    data-bs-backdrop="static" 
    data-bs-keyboard="false" 
    tabindex="-1" 
    role="dialog" 
    aria-labelledby="editDelegateLabel" 
    aria-hidden="true"
>
    <?php include 'modals/edit-delegate-information.php'; ?>
</div>

<!-- PRINT DELEGATE BADGE MODAL row-->
<div 
    class="modal fade" 
    id="printDelegateBadge" 
    data-bs-backdrop="static" 
    data-bs-keyboard="false" 
    tabindex="-1" 
    role="dialog" 
    aria-labelledby="printDelegateBadgeLabel" 
    aria-hidden="true"
>
    <?php include 'modals/print-delegate-badge.php'; ?>
</div>

<!-- UPLOAD NEW PHOTOGRAPH MODAL -->
<div
    id="uploadDelegatePhoto" 
    class="modal fade" 
    data-bs-backdrop="static" 
    data-bs-keyboard="false" 
    tabindex="-1" 
    role="dialog" 
    aria-labelledby="uploadDelegatePhotoLabel" 
    aria-hidden="true"
>
    <?php include 'modals/upload-new-photograph.php'; ?>
</div>

<!-- TAKE DELEGATE PORTRAIT -->
<div class="modal fade" id="takeDelegatePortrait" tabindex="-1" aria-labelledby="takeDelegatePortraitLabel" aria-modal="true">
    <?php include 'modals/take-portrait-photo.php' ;?>
</div>

<!-- off canvas for delegates -->
<aside class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
    <?php include 'offcanvas/oc-process-delegate.php'; ?>
</aside>

<!-- container-fluid -->
</div>
<!-- End Page-content -->

<?php include 'layouts/footer.php'; ?>
</div>
<!-- end main content-->

</div>
<!-- END layout-wrapper -->

<?php include 'layouts/vendor-scripts.php'; ?>

<!-- App js -->

<script src="assets/js/app.js"></script>

<script>
    $(document).ready(function() {
        // Initialize DataTable
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
            var iconClass = "mdi mdi-25px " + (gender === 'female' ? 'mdi-human-female' : 'mdi-human-male');
            $('td:eq(2)', row).html('<i class="' + iconClass + '"></i> ' + data.first_name);
        }
        var table = $('#process-delegates').DataTable({
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
                        visible: false
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
                }
            ],
                /* This is a JavaScript function that is being used in a DataTables plugin for PHP. */
                "fnCreatedRow": function(nRow, aData, iDataIndex) {
                $(nRow).attr('id', aData.id); // Assuming "id" is the property representing the "ID" column in the dataset
                addBadge(nRow, aData);
            },
            "ajax": {
                "url": "/api/dashboard/fetch_data/get_registrants_tb_all.php",
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
                [9, 'asc']
            ],
            "searching": true,
            "paging": true,
            "info": true,
            "scrollX": false,
            "searchDelay": 550,
        });

        const offcanvas = new bootstrap.Offcanvas(document.getElementById("offcanvasRight"));

        $('#process-delegates tbody').on('click', 'tr', function() {
            console.log(`Row ${this.rowIndex} selected`);
            const rowData = table.row(this).data();
            const id = rowData.id;
            const first_name = rowData.first_name;
            const middle_name = rowData.middle_name ?? '';
            const last_name = rowData.last_name;
            const dob = rowData.dob;
            const invite_letter = rowData.invite_letter;
            const gender = rowData.gender;
            const assignment = rowData.assignment;
            const job_title = rowData.job_title;
            const priority = rowData.priority;
            const badge_photo = rowData.badge_photo;

            //  setting session variables
            sessionStorage.setItem('id', id);
            sessionStorage.setItem('first_name', first_name);
            sessionStorage.setItem('middle_name', middle_name);
            sessionStorage.setItem('last_name', last_name);
            sessionStorage.setItem('dob', dob);
            sessionStorage.setItem('gender', gender);
            sessionStorage.setItem('assignment', assignment);
            sessionStorage.setItem('job_title', job_title);
            sessionStorage.setItem('priority', priority);
            sessionStorage.setItem('badge_photo', badge_photo);

            console.log(id, first_name, middle_name, last_name, assignment, job_title)

            const displayedNameElement = document.querySelector('#displayedDelegateName');
            displayedNameElement.innerHTML = `${first_name} ${last_name}`;

            const displayFirstNameElements = document.querySelectorAll('.first_name')
            displayFirstNameElements.forEach(element => element.value = first_name);

            const displayMiddleNameElements = document.querySelectorAll('.middle_name')
            displayMiddleNameElements.forEach(element => element.value = middle_name);

            const displayLastNameElements = document.querySelectorAll('.last_name')
            displayLastNameElements.forEach(element => element.value = last_name);

            const displayDobElements = document.querySelectorAll('.dob')
            displayDobElements.forEach(element => element.value = dob);

            const displayGenderElements = document.querySelectorAll('.gender')
            displayGenderElements.forEach(element => {
                const options = Array.from(element.options)
                const option_to_select = options.find(option => option.value == gender)
                option_to_select.selected = true;
            });

            const displayIdElements = document.querySelectorAll('.delegate_id');
            displayIdElements.forEach(element => element.value = id)

            const displayedAssignmentElements = document.querySelectorAll('.assignment');
            displayedAssignmentElements.forEach(element => element.value = assignment);

            const displayedJobTitleElements = document.querySelectorAll('.job_title');
            displayedJobTitleElements.forEach(element => element.value = job_title);

            const displayedPriorityElements = document.querySelectorAll('.priority');
            displayedPriorityElements.forEach(element => element.value = priority);

            const displayedBadgePhotoElements = document.querySelectorAll('.badge_photo');
            displayedBadgePhotoElements.forEach(element => element.src = `/uploads/delegate-photos/${badge_photo}`);

            offcanvas.show(); // Show the offcanvas
        });
    });
</script>

<style>
    #process-delegates thead th,
    #process-delegates tfoot th {
        color: white;
        background-color: #0a2b3d;
    }
</style>

</body>



</html>