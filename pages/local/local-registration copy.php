<div class="container-fluid p-0 fullheight">

    <div class="row g-0 fullheight">
        <div class="col-12">

            <!-- Notify Controls Start 
      <div class="notify__controls">
        <a class="button-square button-outline-light section-close" href="#0" id="notify-close">
          <i class="fa-solid fa-xmark"></i>
        </a>
      </div>-->
            <!-- Notify Controls End -->

            <!-- Notify Content Start -->
        
                           <!-- Notify Content Block Title Start 
        <div class="content-block margin-bottom-s">
          <p class="popup__title light transition-el transition-el-1">Conference Registration</p>
          <p class="popup__subtitle light transition-el transition-el-2">
            Register sub text notification about the launch of our brand new site.</p>
        </div>
         Notify Content Block Title End -->



                <!-- Notify Content Block Form Start -->
                <div class="content-block grid-block">
                    <div class="form-container">

                        <!-- Code Verification Form -->
                        <form class="form form-light notify-form" id="code-verification-form">
                            <p class="popup__title light transition-el transition-el-1">Verify Department Code</p>
                            <input type="text" id="verification-code" placeholder="Enter Code" required>
                            <button type="submit"
                                class="button-caption button button-solid-light transition-el transition-el-5"
                                id="verify-code">Verify Code</button>
                        </form>

                        <!-- Main Multi-Step Form -->
                        <form class="form form-light notify-form" id="notify-form" style="display: none;"
                            enctype="multipart/form-data">

                            <!-- Step 1 -->
                            <div class="step">
                                <h3> Step 1: Personal Information</h3>
                                <div class="row">
                                    <!-- First column -->
                                    <div class="col-md-6">
                                        <!-- Other input fields for Step 1 -->
                                        <label class="text-lable" for="first_name">First Name *</label>
                                        <input type="text" class="form-control2" name="input_first_name"
                                            id="input_first_name" required>
                                    </div>
                                    <!-- Second column -->
                                    <div class="col-md-6">
                                        <label for="middle name" class="text-lable">Middle Name</label>
                                        <input type="text" class="form-control2" name="input_middle_name"
                                            id="input_middle_name">
                                    </div>

                                    <!-- Third column -->
                                    <div class="col-md-6">
                                        <label for="last_name" class="text-lable">Last Name *</label>
                                        <input type="text" class="form-control2" name="input_last_name"
                                            id="input_last_name" required>
                                    </div>
                                    <!-- Fourth column -->
                                    <div class="col-md-6">
                                        <label class="text-lable" for="gender">Gender: *</label>
                                        <select class="form-control" required id="input_gender" name="input_gender">
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>
                                    </div>
                                    <!-- Fifth column -->
                                    <div class="col-md-6">
                                        <label class="text-lable" for="dob">Date of Birth *</label>
                                        <input required type="date" id="input_dob" name="input_dob">
                                    </div>
                                    <!-- Sixth column
                                    <div class="col-md-6">
                                        <label class="text-lable" for="nib">NIB Number *</label>
                                        <input required type="number" id="input_nib" name="input_nib" oninput="this.value = this.value.replace(/[^0-9]/g, '');">>

                                    </div> -->
                                    <!-- End of first step columns -->
                                </div>

                                <br>
                                <h3>Your Department</h3>
                                <input type="text" class="form-control2" disabled name="input_department"
                                    id="input_department" placeholder="Department">
                                <br>
                                <input type="button" id="next" value="Next >>>">
                            </div>

                            <!-- Step 2: Address Information -->
                            <div class="step">

                                <h3> Step 2: Job Details & Document Uploads</h3>
                                <div class="row">
                                    <!-- First column -->
                                    <div class="col-md-6">
                                        <!-- Other input fields for Step 1 -->
                                        <label class="text-lable" for="assignment_name">Conference Assignment *</label>

                                        <select class="transition-el transition-el-3 form select"
                                            name="input_assignment" required>
                                            <option value="" disabled selected>Assignment*</option>
                                        </select>

                                    </div>
                                    <!-- Second column -->
                                    <div class="col-md-6">
                                        <label for="middle name" class="text-lable">Job Title</label>
                                        <input required type="text" class="form-control2" name="input_job_title"
                                            id="input_job_title">
                                    </div>


                                    <br>
                                    <h3>Upload Badge Photo - White Background (png or jpg)</h3>
                                    <input type="file" accept=".jpg, .jpeg, .png" id="badge_photo" name="badge_photo"
                                        required>
                                    <img src="" alt="Badge Photo Preview" id="badge_photo_preview"
                                        style="max-width: 150px; max-height: 110px; display: none;">
                                    <br>

                                    <h3>Upload Gov-ID</h3>
                                    <input type="file" accept=".jpg, .jpeg, .png" id="gov_id" name="gov_id" required>
                                    <img src="" alt="Gov-ID Preview" id="gov_id_preview"
                                        style="max-width: 150px; max-height: 110px; display: none;">

                                    <br>

                                    <input type="button" id="prev" value="<<< Prev">
                                    <button id="submit" class="button-caption button button-solid-light"
                                        style="display: none;">
                                        <span class="button-caption">Submit</span>
                                    </button>

                                    <a href="#" id="home-trigger" class="home-trigger">GO TO HOME PAGE</a></li>
                                </div>
                        </form>


                        <!-- Add jQuery library -->

                        <script>
                            // Function to show a specific step and hide other steps
                            function showStep(stepNumber) {
                                $('.step').hide();
                                $('.step:eq(' + stepNumber + ')').show();
                                if (stepNumber === 0) {
                                    $('#prev').hide();
                                    $('#next').show();
                                    $('#submit').hide();
                                } else if (stepNumber === $('.step').length - 1) {
                                    $('#prev').show();
                                    $('#next').hide();
                                    $('#submit').show();
                                } else {
                                    $('#prev').show();
                                    $('#next').show();
                                    $('#submit').hide();
                                }
                            }

                            // Code verification form submission
                            $('#code-verification-form').submit(function (e) {
                                e.preventDefault();
                                var enteredCode = $('#verification-code').val();

                                // Perform an AJAX call to check the code against the database
                                $.ajax({
                                    url: 'api/fetch_data/check_code.php',
                                    type: 'POST',
                                    data: {
                                        code: enteredCode
                                    },
                                    dataType: 'json',
                                    success: function (response) {
                                        if (response.status === 'success') {
                                            // Code is verified successfully
                                            $('#code-verification-form').hide();
                                            $('#notify-form').show();
                                            $('#input_department').val(response.department); // Update input_department value
                                            showStep(0); // Show Step 1 if the code is correct
                                        } else {
                                            // Code verification failed
                                            alert(response.message);
                                        }
                                    },
                                    error: function () {
                                        // Error occurred during code verification
                                        alert('Error occurred. Please try again later.');
                                    }
                                });
                            });

                            // Navigation to next step
                            $('#next').click(function () {
                                var currentStep = $('.step:visible').index();

                                // Checks if all required fields in the current step are filled
                                var allRequiredFieldsFilled = true;
                                $('.step:visible').find('input[required],select[required],textarea[required]').each(function () {
                                    if ($(this).val() === '') {
                                        allRequiredFieldsFilled = false;
                                        return false; // Breaks the .each() loop
                                    }
                                });

                                if (allRequiredFieldsFilled) {
                                    showStep(currentStep + 1);
                                } else {
                                    alert('Please fill in all required fields before proceeding.');
                                }
                            });

                            // Navigation to previous step
                            $('#prev').click(function () {
                                var currentStep = $('.step:visible').index();
                                showStep(currentStep - 1);
                            });

                            // Badge Photo preview
                            const badgePhotoInput = document.getElementById('badge_photo');
                            const badgePhotoPreview = document.getElementById('badge_photo_preview');

                            badgePhotoInput.addEventListener('change', function () {
                                const file = this.files[0];
                                if (file) {
                                    if (/\.(jpe?g|png)$/i.test(file.name) && file.size <= 5 * 1024 * 1024) {
                                        const reader = new FileReader();
                                        reader.addEventListener('load', function () {
                                            badgePhotoPreview.src = reader.result;
                                            badgePhotoPreview.style.display = 'block';
                                        });
                                        reader.readAsDataURL(file);
                                    } else {
                                        alert('Please select a PNG or JPG image not exceeding 5MB in size.');
                                        this.value = ''; // Reset the file input to allow re-selection
                                        badgePhotoPreview.src = '';
                                        badgePhotoPreview.style.display = 'none';
                                    }
                                }
                            });

                            // Gov-ID preview
                            const govIdInput = document.getElementById('gov_id');
                            const govIdPreview = document.getElementById('gov_id_preview');

                            govIdInput.addEventListener('change', function () {
                                const file = this.files[0];
                                if (file) {
                                    if (/\.(jpe?g|png)$/i.test(file.name) && file.size <= 5 * 1024 * 1024) {
                                        const reader = new FileReader();
                                        reader.addEventListener('load', function () {
                                            govIdPreview.src = reader.result;
                                            govIdPreview.style.display = 'block';
                                        });
                                        reader.readAsDataURL(file);
                                    } else {
                                        alert('Please select a PNG or JPG image not exceeding 5MB in size.');
                                        this.value = ''; // Reset the file input to allow re-selection
                                        govIdPreview.src = '';
                                        govIdPreview.style.display = 'none';
                                    }
                                }
                            });

                            // Function to fetch assignments and populate the select box
                            function populateAssignments() {
                                $.ajax({
                                    url: 'api/fetch_data/get_form_data.php',
                                    type: 'GET',
                                    dataType: 'json',
                                    success: function (assignments) {
                                        var selectBox = $('select[name="input_assignment"]');
                                        var options = '';

                                        assignments.forEach(function (assignment) {
                                            options += '<option value="' + assignment + '">' + assignment + '</option>';
                                        });

                                        // Populate the select box with the options
                                        selectBox.html(options);
                                    },
                                    error: function () {
                                        alert('Error occurred while fetching assignments. Please try again later.');
                                    }
                                });
                            }

                            // Call the function to populate the assignments when the window has finished loading
                            $(document).ready(function () {
                                populateAssignments();
                            });
                            // Form submission
                            $('#notify-form').submit(function (e) {
                                e.preventDefault();

                                // Serialize form data
                                var formData = new FormData(this);

                                // Submit the form data to 'api/insert/add_record' using AJAX
                                $.ajax({
                                    url: 'api/insert/add_record.php',
                                    type: 'POST',
                                    data: formData,
                                    processData: false,
                                    contentType: false,
                                    dataType: 'json', // Expect JSON response
                                    success: function (response) {
                                        // Check the response status
                                        if (response.status === 'success') {
                                            // Display success alert
                                            alert('Success! ' + response.message);
                                            // Redirect to the home page after successful form submission
                                            window.location.href = 'index.php?message=You are now registered!';
                                        } else {
                                            // Display error alert
                                            alert('Error! ' + response.message);
                                        }
                                    },
                                    error: function () {
                                        // Display error alert for AJAX error
                                        alert('Error occurred while submitting the form.');
                                    },
                                });
                            });
                        </script>
