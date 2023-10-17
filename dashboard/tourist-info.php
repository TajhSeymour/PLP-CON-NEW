<?php include 'layouts/session.php'; ?>
<?php include 'layouts/head-main.php'; ?>

<head>

    <title>DTU - System Administration</title>
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
                                    <li class="breadcrumb-item active">Tourist Travel Info</li>
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
                                    <h5 class="card-title mb-0 flex-grow-1">Tourist Travel Information</h5>
                                    <div class="flex-shrink-0">
                                        <div class="d-flex flex-wrap gap-2">
                                            <!-- <button class="btn btn-danger add-btn" data-bs-toggle="modal" data-bs-target="#showModal"><i class="ri-add-line align-bottom me-1"></i> Add New Delegate</button> -->
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
                                <table id="tourist-info" class="display table table-bordered dt-responsive" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>First Name</th>
                                            <th>Middle Name</th>
                                            <th>Last Name</th>
                                            <th>Nationality</th>
                                            <th>Arrival Date & Time</th>
                                            <th>Arrival Airline Name</th>
                                            <th>Arrival Airline Flight Number</th>
                                            <th>Departure Airline Name</th>
                                            <th>Departure Airline Flight Number</th>
                                            <th>Departure Date & Time</th>
                                            <th>Hotel Name</th>
                                            <th>Conference Attendance</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>First Name</th>
                                            <th>Middle Name</th>
                                            <th>Last Name</th>
                                            <th>Nationality</th>
                                            <th>Arrival Date & Time</th>
                                            <th>Arrival Airline Name</th>
                                            <th>Arrival Airline Flight Number</th>
                                            <th>Departure Airline Name</th>
                                            <th>Departure Airline Flight Number</th>
                                            <th>Departure Date & Time</th>
                                            <th>Hotel Name</th>
                                            <th>Conference Attendance</th>
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
        var table = $('#tourist-info').DataTable({
            "columns": [{
                    "data": "first_name"
                },
                {
                    "data": "middle_name"
                },
                {
                    "data": "last_name"
                },
                {
                    "data": "nationality"
                },
                {
                    "data": "arrival_date_time"
                },
                {
                    "data": "arrival_airline_name"
                },
                {
                    "data": "arrival_airline_flight_number"
                },
                {
                    "data": "departure_airline_name"
                },
                {
                    "data": "departure_airline_flight_number"
                },
                {
                    "data": "departure_date_time"
                },
                {
                    "data": "hotel_name"
                },
                {
                    "data": "conference_attendance"
                },
            ],
            "ajax": {
                "url": "/api/dashboard/fetch_data/get_registrants_foreign_tb_travel_info.php",
                "type": "GET"
            },
            "dom": 'lBfrtip',
            "buttons": ['copy', 'csv', 'excel', 'pdf', 'print'],
            "pageLength": 25,
            "lengthMenu": [
                [25, 50, 75, 100, -1],
                [25, 50, 75, 100, "All"]
            ],
            "order": [
                [11, 'asc']
            ],
            "searching": true,
            "paging": true,
            "info": true,
            "scrollX": false,
            "searchDelay": 550,
        });

        const offcanvas = new bootstrap.Offcanvas(document.getElementById("offcanvasRight"));

        $('#tourist-info tbody').on('click', 'tr', function() {
            console.log(`Row ${this.rowIndex} selected`);
            const rowData = table.row(this).data();
            const first_name = rowData.first_name;
            const middle_name = rowData.middle_name ?? '';
            const last_name = rowData.last_name;
            const nationality = rowData.nationality;
            const arrival_date_time = rowData.arrival_date_time;
            const arrival_airline_name = rowData.arrival_airline_name;
            const arrival_airline_flight_number = rowData.arrival_airline_flight_number;
            const departure_airline_name = rowData.departure_airline_name;
            const departure_airline_flight_number = rowData.departure_airline_flight_number;
            const departure_date_time = rowData.departure_date_time;
            const hotel_name = rowData.hotel_name;
            const conference_attendance = rowData.conference_attendance;
            const badge_photo = `/uploads/photos${rowData.badge_photo}`;

            //  setting session variables
            sessionStorage.setItem('id', id);
            sessionStorage.setItem('first_name', first_name);
            sessionStorage.setItem('middle_name', middle_name);
            sessionStorage.setItem('last_name', last_name);
            sessionStorage.setItem('nationality', nationality);
            sessionStorage.setItem('arrival_date_time', arrival_date_time);
            sessionStorage.setItem('arrival_airline_name', arrival_airline_name);
            sessionStorage.setItem('arrival_airline_flight_number', arrival_airline_flight_number);
            sessionStorage.setItem('departure_airline_name', departure_airline_name);
            sessionStorage.setItem('departure_airline_flight_number', departure_airline_flight_number);
            sessionStorage.setItem('departure_date_time', departure_date_time);
            sessionStorage.setItem('hotel_name', hotel_name);
            sessionStorage.setItem('conference_attendance', conference_attendance);

            console.log(id, first_name, middle_name, last_name, nationality, arrival_date_time, arrival_airline_name, arrival_airline_flight_number, departure_airline_name, departure_airline_flight_number, departure_date_time, hotel_name, conference_attendance);

            const displayedNameElement = document.querySelector('#displayedDelegateName');
            displayedNameElement.innerHTML = `${first_name} ${last_name}`;

            const displayFirstNameElements = document.querySelectorAll('.first_name')
            displayFirstNameElements.forEach(element => element.value = first_name);

            const displayMiddleNameElements = document.querySelectorAll('.middle_name')
            displayMiddleNameElements.forEach(element => element.value = middle_name);

            const displayLastNameElements = document.querySelectorAll('.last_name')
            displayLastNameElements.forEach(element => element.value = last_name);

            const displayNationalityElements = document.querySelectorAll('.nationality')
            displayNationalityElements.forEach(element => element.value = nationality);

            const displayArrivalDateTimeElements = document.querySelectorAll('.arrival_date_time')
            displayArrivalDateTimeElements.forEach(element => element.value = arrival_date_time);

            const displayArrivalAirlineNameElements = document.querySelectorAll('.arrival_airline_name')
            displayArrivalAirlineNameElements.forEach(element => element.value = arrival_airline_name);

            const displayArrivalAirlineFlightNumberElements = document.querySelectorAll('.arrival_airline_flight_number')
            displayArrivalAirlineFlightNumberElements.forEach(element => element.value = arrival_airline_flight_number);

            const displayDepartureAirlineNameElements = document.querySelectorAll('.departure_airline_name')
            displayDepartureAirlineNameElements.forEach(element => element.value = departure_airline_name);

            const displayDepartureAirlineFlightNumberElements = document.querySelectorAll('.departure_airline_flight_number')
            displayDepartureAirlineFlightNumberElements.forEach(element => element.value = departure_airline_flight_number);

            const displayDepartureDateTimeElements = document.querySelectorAll('.departure_date_time')
            displayDepartureDateTimeElements.forEach(element => element.value = departure_date_time);

            const displayHotelNameElements = document.querySelectorAll('.hotel_name')
            displayHotelNameElements.forEach(element => element.value = hotel_name);

            const displayConferenceAttendanceElements = document.querySelectorAll('.conference_attendance')
            displayConferenceAttendanceElements.forEach(element => element.value = conference_attendance);

            offcanvas.show(); // Show the offcanvas
        });
    });
</script>

<style>
    #tourist-info thead th,
    #tourist-info tfoot th {
        color: white;
        background-color: #0a2b3d;
    }
</style>

</body>

</html>