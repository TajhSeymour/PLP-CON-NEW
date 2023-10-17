<div class="form-container2">
    <form id="code-verification-form" class="form2">
        <center>
            <h3>Verify Department Code</h3>
            <input type="text" class="form-control-verify" id="verification-code" placeholder="Enter Code" required>
            <button type="button" id="verify-code"
                class="button-caption button button-solid-light transition-el transition-el-5">Verify Code</button>
            <br>
            <br>
            <input type="button"
                class="btn-gohome button-caption button button-solid-light-grey transition-el transition-el-5"
                value="GO BACK TO HOME" id="go-back-button" onclick="goToHomePage()">
        </center>
    </form>
</div>

<div class="form-container">
    <form id="local-form" class="form form-dark notify-form" enctype="multipart/form-data" style="display: none;">
        <h3 class="text-center my-3">Local Staff Registration Form</h3>
        <br>
        <br>
        <br>
        <br>
        <div class="row">
            <div class="col-md-4">
                <label class="form-control"  for="input_first_name">First Name *</label>
                <input type="text" class="form-control" id="input_local_first_name" name="input_local_first_name"
                    required>
            </div>
            <div class="col-md-4">
                <label class="form-control"  for="input_middle_name">Middle Name</label>
                <input type="text" class="form-control" id="input_local_middle_name" name="input_local_middle_name">
            </div>
            <div class="col-md-4">
                <label class="form-control"  for="input_last_name">Last Name *</label>
                <input type="text" class="form-control" id="input_local_last_name" name="input_local_last_name"
                    required>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <label class="form-control"  for="input_gender">Gender *</label>
                <select class="form-control" id="input_local_gender" name="input_local_gender" required>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
            </div>
            <div class="col-md-4">
                <label class="form-control"  for="input_dob">Date of Birth *</label>
                <input type="date" class="form-control" id="input_local_dob" name="input_local_dob" required>
            </div>
            <div class="col-md-4">
                <label class="form-control"  for="input_department">NIB Number</label>
                <input type="number" class="form-control" id="input_local_nib" name="input_local_nib"
                    placeholder="000000">
            </div>
            <div class="col-md-4">
                <label class="form-control"  for="input_department">Your Department</label>
                <input type="text" class="form-control" id="input_local_department" name="input_local_department"
                    disabled>
            </div>

            <div class="col-md-4">
                <label class="form-control"  for="input_assignment">Conference Assignment *</label>
                <select class="form-control" id="input_local_assignment" name="input_local_assignment" required>
                    <option value="GOV OFFICIAL">GOV OFFICIAL</option>
                    <option value="LOGISTICS">LOGISTICS</option>
                    <!--<option value="MEDIA">MEDIA</option>-->
                    <option value="MEDICAL">MEDICAL</option>
                    <option value="NGO/CIVIL SOCIETY">NGO/CIVIL SOCIETY</option>
                    <option value="PROTOCOL/LIASON OFFICER">PROTOCOL/LIASON OFFICER</option>
                    <option value="SECURITY">SECURITY</option>
                </select>
            </div>
            <div class="col-md-4">
                <label class="form-control"  for="input_job_title">Job Title</label>
                <input type="text" class="form-control" id="input_local_job_title" name="input_local_job_title">
            </div>
        </div>

        <div class="row">
            <!-- First column -->
            <div class="col-md-6">
                <label class="form-control"  for="conference_photo">Upload Photo ID *</label>
                <input class="form-control" type="file" accept=".jpg, .jpeg, .png" id="input_local_badge_photo"
                    name="input_local_badge_photo" required>
                <label class="form-control"  for="upload_invite1">Accepts .jpg, .jpeg, .png</label>
            </div>
            <div class="col-md-6">
                <label class="form-control"  for="conference_photo2">Preview</label>
                <img src="" alt="Badge Photo Preview" id="badge_local_photo_preview"
                    style="max-width: 150px; max-height: 110px; display: none;">
                <br>
            </div>
        </div>
        <br>
        <br>
        <br>

        <div class="row">
            <!-- First column -->
            <div class="col-md-6">
                <label class="form-control"  for="conference_photo">Upload Government ID *</label>
                <input class="form-control" type="file" accept=".jpg, .jpeg, .png" id="input_local_govid_photo"
                    name="input_local_govid_photo" required>
                <label class="form-control"  for="upload_invite1">Accepts .jpg, .jpeg, .png</label>
            </div>
            <div class="col-md-6">
                <label class="form-control"  for="conference_photo2">Preview</label>
                <img src="" alt="Gov ID Photo Preview" id="gov_local_photo_preview"
                    style="max-width: 150px; max-height: 110px; display: none;">
                <br>
            </div>
        </div>
        <br>
        <br>
        <br>
        <div class="row">
            <div class="col-md-1">
                <input type="checkbox" id="declaration" name="declaration" required>
            </div>
            <div class="col-md-10">
                <label class="form-control"  for="declaration"><strong><h5></h5>By checking this box, I confirm that the information provided is
                        accurate and complete. I understand that my registration is subject to approval and that any
                        inaccurate or incomplete information may result in the rejection of my registration request.
                        I also agree to comply with the rules and guidelines of the conference and any related
                        events.</h5></strong></label><br><br>
            </div>
        </div>
            <div class="text-center mt-3">
                <input type="submit" id="submit-local" class="button-caption button button-solid-light transition-el transition-el-5"
                    value="SUBMIT REGISTRATION">
            </div>
            <input type="button"
                class="btn-gohome button-caption button button-solid-light-grey transition-el transition-el-5"
                value="GO BACK TO HOME" id="go-back-button-local" onclick="goToHomePage()">
        </div>
    </form>
</div>


<script>
    function goToHomePage() {
        window.location.href = 'index.php';
    }
</script>


<script>
    $('#verify-code').click(function () {
        var enteredCode = $('#verification-code').val();

        // Perform an AJAX call to check the code against the database
        $.ajax({
            url: 'api/fetch_data/check_code.php', // Update with correct URL
            type: 'POST',
            data: {
                code: enteredCode
            },
            dataType: 'json',
            success: function (response) {
                if (response.status === 'success') {
                    // Code is verified successfully
                    $('#code-verification-form').hide();
                    $('#local-form').show();
                    $('#input_local_department').val(response.department); // Update input_department value
                    showStep(0); // Show Step 1 if the code is correct

                    // Display Noty success alert
                    new Noty({
                        type: 'success',
                        text: 'Code verification successful!',
                        timeout: 3000 // Optional: Set the alert to automatically close after 3 seconds
                    }).show();
                } else {
                    // Code verification failed
                    new Noty({
                        type: 'error',
                        text: response.message,
                        timeout: 3000
                    }).show();
                }
            },
            error: function () {
                // Error occurred during code verification
                new Noty({
                    type: 'error',
                    text: 'Error occurred. Please try again later.',
                    timeout: 3000
                }).show();
            }
        });
    });


    // Badge Photo preview
    const localbadgePhotoInput = document.getElementById('input_local_badge_photo');
    const localbadgePhotoPreview = document.getElementById('badge_local_photo_preview');

    localbadgePhotoInput.addEventListener('change', function () {
        const file = this.files[0];
        if (file) {
            if (/\.(jpe?g|png)$/i.test(file.name) && file.size <= 5 * 1024 * 1024) {
                const reader = new FileReader();
                reader.addEventListener('load', function () {
                    localbadgePhotoPreview.src = reader.result;
                    localbadgePhotoPreview.style.display = 'block';
                });
                reader.readAsDataURL(file);
            } else {
                alert('Please select a PNG or JPG image not exceeding 5MB in size.');
                this.value = ''; // Reset the file input to allow re-selection
                localbadgePhotoPreview.src = '';
                localbadgePhotoPreview.style.display = 'none';
            }
        }
    });

    // Gov-ID preview
    const localgovIdInput = document.getElementById('input_local_govid_photo');
    const localgovIdPreview = document.getElementById('gov_local_photo_preview');

    localgovIdInput.addEventListener('change', function () {
        const file = this.files[0];
        if (file) {
            if (/\.(jpe?g|png)$/i.test(file.name) && file.size <= 5 * 1024 * 1024) {
                const reader = new FileReader();
                reader.addEventListener('load', function () {
                    localgovIdPreview.src = reader.result;
                    localgovIdPreview.style.display = 'block';
                });
                reader.readAsDataURL(file);
            } else {
                alert('Please select a PNG or JPG image not exceeding 5MB in size.');
                this.value = ''; // Reset the file input to allow re-selection
                localgovIdPreview.src = '';
                localgovIdPreview.style.display = 'none';
            }
        }
    });
</script>


<script>
    // On form submit
    document.getElementById('local-form').addEventListener('submit', (event) => {
        event.preventDefault(); // Prevent actual form submission for this example

        // Additional validation (if needed) before form submission
        if (isFormValid()) { // Replace isStepValid() with isFormValid()
            // Form is valid, submit the data using AJAX
            const formData = new FormData(event.target);

            $.ajax({
                url: 'api/insert/add_local_record.php',
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
        } else {
            // Form is not fully filled or valid, show an alert or handle the error accordingly
            alert('Please complete the form before submitting.');
        }
    });

    function isFormValid() {
        const firstName = document.getElementById('input_local_first_name').value;
        const lastName = document.getElementById('input_local_last_name').value;
        const gender = document.getElementById('input_local_gender').value;
        const dob = document.getElementById('input_local_dob').value;
        const assignment = document.getElementById('input_local_assignment').value;
        const badgePhoto = document.getElementById('input_local_badge_photo').files[0];
        const govIdPhoto = document.getElementById('input_local_govid_photo').files[0];

        // Perform your validation checks here
        if (!firstName || !lastName || !gender || !dob || !assignment || !badgePhoto || !govIdPhoto) {
            // If any required fields are empty or not valid, return false
            return false;
        }

        // Additional validation checks can be added here

        return true; // All checks passed, the form is valid
    }
</script>


<!-- Include Bootstrap JS and jQuery -->
<style>
    .form-control-verify {
        display: block;
        width: 100%;
        padding: 0.375rem 0.75rem;
        font-size: 1.5rem;
        font-weight: 400;
        line-height: 1.5;
        color: black;
        background-color: lightgray;
        background-clip: padding-box;
        border: 2px solid rgba(255, 255, 255, 0.6);
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        border-radius: 0.25rem;
        transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
    }

    .form-control {
        display: block;
        width: 100%;
        padding: 0.375rem 0.75rem;
        font-size: 1.5rem;
        font-weight: 400;
        line-height: 1.5;
        color: #212529;
        background-color: #fff;
        background-clip: padding-box;
        border: 1px solid rgba(255, 255, 255, 0.6);
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        border-radius: 0.25rem;
        transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
    }

    .form-container2 {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        background-color: rgba(255, 255, 255, 0.8);
    }

    .button-solid-light-grey {
        background-color: #F8F8FF;
        color: black;
        /* Add any other styling you need */
    }
</style>