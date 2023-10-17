<?php include 'layouts/session.php'; ?>
<?php include 'layouts/head-main.php'; ?>

    <head>
        
        <title>DTU - System Administration| Printer Queue </title>
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
                                    <h4 class="mb-sm-0">Printer Queue</h4>
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);"></a></li>
                                            <li class="breadcrumb-item active">DASHBOARD</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->
                        <!-- start of messaging -->
                        <?php if (array_key_exists('message', $_GET) && isset($_GET['message'])): ?>
                            <div class="alert alert-success d-flex alert-dismissible fade show align-items-center" role="alert">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-check-circle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
                                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                                </svg>
                                <div>
                                    <strong>Message:</strong> <?= urldecode($_GET['message']) ?>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            </div>
                        <?php elseif (array_key_exists('error', $_GET) && isset($_GET['error'])): ?>
                            <div class="alert alert-danger d-flex alert-dismissible fade show align-items-center" role="alert">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
                                    <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                                </svg>
                                <div>
                                    <strong>Error:</strong> <?= urldecode($_GET['error']) ?>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            </div>
                        <?php endif; ?>
                        <!-- end of messaging -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <!-- Nav tabs -->
                                <ul class="nav nav-pills nav-justified mb-3" role="tablist">
                                <li class="nav-item"> 
                                            <a class="active nav-link waves-effect waves-light" data-bs-toggle="tab" href="#pill-pending-printed-badges" role="tab">
                                                BADGES PENDING TO BE PRINT
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
            
                                    <div class="tab-pane active" id="pill-pending-printed-badges" role="tabpanel">
                                        <table id="pending-print-badges" class="display table table-bordered dt-responsive" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>First Name</th>
                                                    <th>Middle Name</th>
                                                    <th>Last Name</th>
                                                    <th>NIB Number</th>
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

                    </div>
                    <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

                <?php include 'layouts/footer.php'; ?>
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

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
        <!-- END PRINT DELEGATE BADGE MODAL row-->

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
        <!-- END EDIT DELEGATE MODAL row-->

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
        <!-- END UPLOAD NEW PHOTOGRAPH MODAL -->

        <!-- TAKE DELEGATE PORTRAIT -->
        <div 
            class="modal fade" 
            id="takeDelegatePortrait" 
            tabindex="-1" 
            aria-labelledby="takeDelegatePortraitLabel" 
            aria-modal="true"
        >
            <?php include 'modals/take-portrait-photo.php' ;?>
        </div>
        <!-- END TAKE DELEGATE PORTRAIT -->

        <!-- off canvas for delegates -->
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offCanvasRight" aria-labelledby="offCanvasRightLabel">
            <?php include 'offcanvas/oc-print-badge.php'; ?>
        </div>
        

        <?php include 'layouts/vendor-scripts.php'; ?>
        
        <!-- App js -->
        <script src="assets/js/app.js"></script>
    </body>

    <script>
    $(document).ready(function() {
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
                $('td:eq(5)', row).html('<span class="' + badgeClass + '">' + priority + '</span>');
            }

            var gender = data.gender.toLowerCase(); // Assuming "gender" is available in the array as a property
            var iconClass = "mdi mdi-22px " + (gender === 'female' ? 'mdi-human-female' : 'mdi-human-male');
            $('td:eq(1)', row).html('<i class="' + iconClass + '"></i> ' + data.first_name);
        }

        // Initialize DataTable for "printed-badges"
     var pendingPrintTable = $('#pending-print-badges').DataTable({
            "processing": false,
            "serverSide": false,
            "ajax": {
                "url": "/api/dashboard/fetch_data/get_registrants_tb_badges_pending_print.php",
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
                    "data": "nib", visible: false,
                },
                {
                    "data": "priority"
                }
            ],
            "fnCreatedRow": function(nRow, aData, iDataIndex) {
                $(nRow).attr('id', aData.id); // Assuming "id" is the property representing the "ID" column in the dataset
                addBadge(nRow, aData);
            },
            "dom": 'lBfrtip',
            "buttons": ['copy', 'csv', 'excel', 'pdf', 'print'],
            "pageLength": 25,
            "lengthMenu": [
                [25, 50, 75, 100, -1],
                [25, 50, 75, 100, "All"]
            ],
            "order": [
                [5, 'asc']
            ],
            "searching": true,
            "paging": true,
            "info": true,
            "scrollX": false,
            "searchDelay": 550,
        });

        const offcanvas = new bootstrap.Offcanvas(document.getElementById('offCanvasRight'));

        $('#pending-print-badges tbody').on('click', 'tr', function() {
        console.log(`Row ${this.rowIndex} selected`);
        this.style.cursor = 'pointer'
        const rowData = pendingPrintTable.row(this).data();
        const id = rowData.id;
        const first_name = rowData.first_name;
        const middle_name = rowData.middle_name ?? '';
        const last_name = rowData.last_name;
        const dob = rowData.dob;
        const gender = rowData.gender;
        const assignment = rowData.assignment;
        const job_title = rowData.job_title;
        const priority = rowData.priority;
        const badge_photo = `/uploads/delegate-photos${rowData.badge_photo}`;
        const gov_id = `/uploads/govid/gov_id.png`;
        // const gov_id = `/uploads/govid${rowData.gov_id}`;


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
        sessionStorage.setItem('gov_id', gov_id);

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

        const displayedBadgePhotoElements = document.querySelectorAll('.delegate-image');
        displayedBadgePhotoElements.forEach(element => element.src = badge_photo);

        const displayedGovIdElements = document.querySelectorAll('.gov_id');
        displayedGovIdElements.forEach(element => element.src = gov_id);
        
        offcanvas.show(); // Show the offcanvas
    });

    // Initialize DataTable for "printed-badges"
    const printedTable = $('#printed-badges').DataTable({
            "processing": false,
            "serverSide": false,
            "ajax": {
                "url": "/api/dashboard/fetch_data/get_registrants_tb_badges_printed.php",
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
                    "data": "nib", visible: false,
                },
                {
                    "data": "priority"
                }
            ],
            "fnCreatedRow": function(nRow, aData, iDataIndex) {
                $(nRow).attr('id', aData.id); // Assuming "id" is the property representing the "ID" column in the dataset
                addBadge(nRow, aData);
            },
            "dom": 'lBfrtip',
            "buttons": ['copy', 'csv', 'excel', 'pdf', 'print'],
            "pageLength": 25,
            "lengthMenu": [
                [25, 50, 75, 100, -1],
                [25, 50, 75, 100, "All"]
            ],
            "order": [
                [5, 'asc']
            ],
            "searching": true,
            "paging": true,
            "info": true,
            "scrollX": false,
            "searchDelay": 550,
        });

        $('#printed-badges tbody').on('click', 'tr', function() {
            console.log(`Row ${this.rowIndex} selected`);
            this.style.cursor = 'pointer'
            const rowData = printedTable.row(this).data();
            console.log(rowData);
            const id = rowData.id;
            const first_name = rowData.first_name;
            const middle_name = rowData.middle_name ?? '';
            const last_name = rowData.last_name;
            const dob = rowData.dob;
            const gender = rowData.gender;
            const job_title = rowData.job_title;
            const priority = rowData.priority;
            const badge_photo = `/uploads/delegate-photos${rowData.badge_photo}`;
            const gov_id = `/uploads/govid${rowData.gov_id}`;


            //  setting session variables
            sessionStorage.setItem('id', id);
            sessionStorage.setItem('first_name', first_name);
            sessionStorage.setItem('middle_name', middle_name);
            sessionStorage.setItem('last_name', last_name);
            sessionStorage.setItem('dob', dob);
            sessionStorage.setItem('gender', gender);
            sessionStorage.setItem('job_title', job_title);
            sessionStorage.setItem('priority', priority);
            sessionStorage.setItem('badge_photo', badge_photo);
            sessionStorage.setItem('gov_id', gov_id);

            console.log(id, first_name, middle_name, last_name, job_title)

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

            const displayedJobTitleElements = document.querySelectorAll('.job_title');
            displayedJobTitleElements.forEach(element => element.value = job_title);

            const displayedPriorityElements = document.querySelectorAll('.priority');
            displayedPriorityElements.forEach(element => element.value = priority);

            const displayedBadgePhotoElements = document.querySelectorAll('.delegate-image');
            displayedBadgePhotoElements.forEach(element => element.src = badge_photo);

            const displayedGovIdElements = document.querySelectorAll('.gov_id');
            displayedGovIdElements.forEach(element => element.src = gov_id);
            
            offcanvas.show(); // Show the offcanvas
        });
    });
</script>

<style>
    #all-registrants thead th,
    #all-registrants tfoot th,
    #pending-security thead th,
    #pending-security tfoot th,
    #approved-registrants thead th,
    #approved-registrants tfoot th,
    #pending-print-badges thead th,
    #pending-print-badges tfoot th,
    #printed-badges thead th,
    #printed-badges tfoot th {
        color: white;
        background-color: #0a2b3d;
    }
</style>




</html>