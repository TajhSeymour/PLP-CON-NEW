<?php include 'layouts/session.php'; ?>
<?php include 'layouts/head-main.php'; ?>
<?php include 'permission/security-check-permission.php'; ?>

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
                            <h4 class="mb-sm-0"></h4>
                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                                    <li class="breadcrumb-item active">Security Check</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end page title -->
                <div id="staffName" style="display: none;">
        <?php echo json_encode($_SESSION['name']); ?> <!-- This would be your staff name from PHP session -->
    </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card" id="ticketsList">
                            <div class="card-header border-0">
                                <div class="d-flex align-items-center">
                                    <h5 class="card-title mb-0 flex-grow-1">QUICK REGISTER</h5>
                                    <div class="flex-shrink-0">
                                        <div class="d-flex flex-wrap gap-2">
                                            <button class="btn btn-danger add-btn" data-bs-toggle="modal" data-bs-target="#showModal"><i class="ri-add-line align-bottom me-1"></i>ADD NEW DELEGATE</button>
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
                                <ul class="nav nav-pills nav-justified mb-3" role="tablist">
                                    <?php if ($_SESSION['super_admin'] || $_SESSION['supervisor'] || $_SESSION['officer'] || $_SESSION['print_officer']) : ?>
                                            <li class="nav-item">
                                                <a class="nav-link waves-effect waves-light active" data-bs-toggle="tab" href="#pill-all-delegates" role="tab">
                                                    ALL PLP DELEGATES (NOT CHECKED IN)
                                                </a>
                                            </li>
                                        <?php endif; ?>
                                            <?php if ($_SESSION['super_admin'] || $_SESSION['supervisor'] || $_SESSION['officer'] || $_SESSION['print_officer']) : ?>
                                            <li class="nav-item d-none d-sm-block"> <!-- This list item will be hidden on mobile devices -->
                                                <a class="nav-link waves-effect waves-light" data-bs-toggle="tab" href="#pill-checked-in-delegates" role="tab">
                                                    ALL CHECKED-IN PLP DELEGATES
                                                </a>
                                            </li>
                                        <?php endif; ?>
                                    </ul>
                                    <!-- Tab panes -->
                                    <div class="tab-content text-muted">
                                  
                                    <div class="tab-pane active" id="pill-all-delegates" role="tabpanel">
                                            <table id="all-delegates" class="display table table-bordered dt-responsive" style="width:100%">
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
                                                    <th>EMAIL ADDRESS</th>
                                                    <th>MOBILE NUMBER</th>
                                                    <th>TELEPHONE NUMBER</th>
                                                    <th>STREET ADDRESS</th>
                                                    <th>HOUSE NUMBER</th>
                                                    <th>EMERGENCY CONTACT NAME</th>
                                                    <th>EMERGENCY RELATIONSHIP </th>
                                                    <th>EMERGENCY TELEPHONE</th>
                                                  
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
                                                    <th>EMAIL ADDRESS</th>
                                                    <th>MOBILE NUMBER</th>
                                                    <th>TELEPHONE NUMBER</th>
                                                    <th>STREET ADDRESS</th>
                                                    <th>HOUSE NUMBER</th>
                                                    <th>EMERGENCY CONTACT NAME</th>
                                                    <th>EMERGENCY RELATIONSHIP </th>
                                                    <th>EMERGENCY TELEPHONE</th>
                                                    
                                                    <th>REGISTRATION DATE</th>
                                                    </tr>
                                                </tfoot>
                                            </table>

                                            </div>
                                    <div class="tab-pane" id="pill-checked-in-delegates" role="tabpanel">
                                        <table id="checked-in-delegates" class="display table table-bordered dt-responsive" style="width:100%">
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
                                                    <th>EMAIL ADDRESS</th>
                                                    <th>MOBILE NUMBER</th>
                                                    <th>TELEPHONE NUMBER</th>
                                                    <th>STREET ADDRESS</th>
                                                    <th>HOUSE NUMBER</th>
                                                    <th>EMERGENCY CONTACT NAME</th>
                                                    <th>EMERGENCY RELATIONSHIP </th>
                                                    <th>EMERGENCY TELEPHONE</th>
                                                    <th>BADGE REPRINT</th>
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
                                                    <th>EMAIL ADDRESS</th>
                                                    <th>MOBILE NUMBER</th>
                                                    <th>TELEPHONE NUMBER</th>
                                                    <th>STREET ADDRESS</th>
                                                    <th>HOUSE NUMBER</th>
                                                    <th>EMERGENCY CONTACT NAME</th>
                                                    <th>EMERGENCY RELATIONSHIP </th>
                                                    <th>EMERGENCY TELEPHONE</th>
                                                    <th>BADGE REPRINT</th>
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
              
                <div class="modal fade zoomIn" id="notesModel" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
    <?php include 'offcanvas/oc-security-checks.php'; ?>
</div>
</div>
<!-- END layout-wrapper -->

<?php include 'layouts/vendor-scripts.php'; ?>

<!-- App js -->

<script src="assets/js/app.js"></script>

<script>
     function reloadData(table) {
    table.ajax.reload(null, false); // Reload the data without resetting the current page
}
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
        var alldelegats = $('#all-delegates').DataTable({
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
                "data": "email_address", visible: false
            },
            {
                "data": "mobile_number", visible: false
            },
            {
                "data": "telephone_number", visible: false
            },
            {
                "data": "street_address", visible: false
            },
            {
                "data": "house_number", visible: false
            },
            {
                "data": "emergency_contact_name", visible: false
            },
            {
                "data": "emergency_contact_relationship", visible: false
            },
            {
                "data": "emergency_contact_telephone_number", visible: false
            },
           
            {
                "data": "date"
            }
      

            ],
            /* This is a JavaScript function that is being used in a DataTables plugin for PHP. */
            "fnCreatedRow": function(nRow, aData, iDataIndex) {
                $(nRow).attr('id', aData.id); // Assuming "id" is the property representing the "ID" column in the dataset
                addBadge(nRow, aData);
            },
            "ajax": {
                "url": "/api/dashboard/fetch_data/get_all_registrants_tb_not_checked_in.php",
                "type": "GET",
                "dataType": 'json',
                "error": function(jqXHR, textStatus, errorThrown) {
                    console.error('Ajax request failed:', textStatus, errorThrown);
                },
            },
            "dom": 'lfrtip',//'lBfrtip',
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

        $('#all-delegates tbody').on('click', 'tr', function() {
            console.log("Row Clicked!"); // Add this line for testing
            const rowData = alldelegats.row(this).data();

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
       // const badge = rowData.badge_reprint;

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

           
         //  const displayedBadgeRequestElement = document.getElementById("oc_new_badge");
         //  displayedBadgeRequestElement.value = badge;




            offcanvas.show(); // Show the offcanvas
        });
        // Reload data for the DataTable every 15 seconds
        setInterval(function () {
            reloadData(alldelegats); // Replace 'table' with your DataTable variable
        }, 14000); // 15 seconds (14000 milliseconds)
    });
  
</script>

<script>
    function reloadData(table) {
    table.ajax.reload(null, false); // Reload the data without resetting the current page
}
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
        var checkedin = $('#checked-in-delegates').DataTable({
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
                "data": "email_address", visible: false
            },
            {
                "data": "mobile_number", visible: false
            },
            {
                "data": "telephone_number", visible: false
            },
            {
                "data": "street_address", visible: false
            },
            {
                "data": "house_number", visible: false
            },
            {
                "data": "emergency_contact_name", visible: false
            },
            {
                "data": "emergency_contact_relationship", visible: false
            },
            {
                "data": "emergency_contact_telephone_number", visible: false
            },
            {
                "data": "badge_reprint", visible: false
            },
            {
                "data": "date"
            }
            
      

            ],
            /* This is a JavaScript function that is being used in a DataTables plugin for PHP. */
            "fnCreatedRow": function(nRow, aData, iDataIndex) {
                $(nRow).attr('id', aData.id); // Assuming "id" is the property representing the "ID" column in the dataset
                addBadge(nRow, aData);
            },
            "ajax": {
                "url": "/api/dashboard/fetch_data/get_all_registrants_tb_checked_in.php",
                "type": "GET",
                "dataType": 'json',
                "error": function(jqXHR, textStatus, errorThrown) {
                    console.error('Ajax request failed:', textStatus, errorThrown);
                },
            },
            "dom": 'lfrtip',//'lBfrtip',
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

        $('#checked-in-delegates tbody').on('click', 'tr', function() {
            console.log("Row Clicked!"); // Add this line for testing
            const rowData = checkedin.row(this).data();

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
        const badge = rowData.badge_reprint;
        
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

           const displayedBadgeRequestElement = document.getElementById("oc_new_badge");
           displayedBadgeRequestElement.value = badge;




            offcanvas.show(); // Show the offcanvas

            
        });
        // Reload data for the DataTable every 15 seconds
        setInterval(function () {
            reloadData(checkedin); // Replace 'table' with your DataTable variable
        }, 14000); // 15 seconds (14000 milliseconds)
    
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