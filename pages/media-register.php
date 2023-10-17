<div class="form-container">
    <form id="media-form" action="send_media_applicant_email.php" class="form form-dark notify-form" enctype="multipart/form-data">
        <h3 class="text-center my-3">Media Clearance Registration Form</h3>
        <br>
        <br>
        <br>
        <br>
        <div class="row">
            <h3>Personal Details</h3>
            <br>
            <br>
            <div class="col-md-4">
                <!-- Other input fields for Step 1 -->
                <label class="form-control" for="first_name">Nombre/First Name *</label>
                <input type="text" class="form-control" name="input_media_first_name" id="input_media_first_name"
                    required>
            </div>

            <div class="col-md-4">
                <!-- Other input fields for Step 1 -->
                <label class="form-control" for="middle_name">Segundo Nombre/Middle Name</label>
                <input type="text" class="form-control" name="input_media_middle_name" id="input_media_middle_name"
                    required>
            </div>

            <!-- Third column -->
            <div class="col-md-4">
                <label class="form-control" for="last_name">Apellido/Last Name *</label>
                <input type="text" class="form-control" name="input_media_last_name" id="input_media_last_name"
                    required>
            </div>
            <!-- Fourth column -->
            <div class="col-md-4">
                <label class="form-control"  for="gender">Gender: *</label>
                <select class="form-control" required id="input_media_gender" name="input_media_gender">
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
            </div>
            <!-- Fifth column -->
            <div class="col-md-4">
                <label class="form-control" for="dob">Date of Birth *</label>
                <input required type="date" id="input_media_dob" value="2000-12-31" name="input_media_dob"
                    min="1920-01-01" max="2007-12-31">
            </div>
            <div class="col-md-4">
                <label class="form-control"  for="country_name">Member Country *</label>
                <select class="form-control" id="input_media_country" name="input_media_country" required>
                    <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                    <option value="Argentina">Argentina</option>
                    <option value="The Bahamas">The Bahamas</option>
                    <option value="Barbados">Barbados</option>
                    <option value="Belize">Belize</option>
                    <option value="Bolivia">Bolivia</option>
                    <option value="Brazil">Brazil</option>
                    <option value="Canada">Canada</option>
                    <option value="Chile">Chile</option>
                    <option value="Colombia">Colombia</option>
                    <option value="Costa Rica">Costa Rica</option>
                    <option value="Cuba">Cuba</option>
                    <option value="Dominica">Dominica</option>
                    <option value="Dominican Republic">Dominican Republic</option>
                    <option value="Ecuador">Ecuador</option>
                    <option value="El Salvador">El Salvador</option>
                    <option value="Grenada">Grenada</option>
                    <option value="Guatemala">Guatemala</option>
                    <option value="Guyana">Guyana</option>
                    <option value="Haiti">Haiti</option>
                    <option value="Honduras">Honduras</option>
                    <option value="Jamaica">Jamaica</option>
                    <option value="Mexico">Mexico</option>
                    <option value="Nicaragua">Nicaragua</option>
                    <option value="Panama">Panama</option>
                    <option value="Paraguay">Paraguay</option>
                    <option value="Peru">Peru</option>
                    <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                    <option value="Saint Lucia">Saint Lucia</option>
                    <option value="Saint Vincent and the Grenadines">Saint Vincent and the
                        Grenadines</option>
                    <option value="Suriname">Suriname</option>
                    <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                    <option value="United States">United States</option>
                    <option value="Uruguay">Uruguay</option>
                    <option value="Venezuela">Venezuela</option>
                </select>
            </div>
            <div class="col-md-4">
                <label class="form-control"  for="Nationality">Nationality *</label>
                <select class="form-control" name="input_media_nationality" id="input_media_nationality" required>
                    <option value="American">American</option>
                    <option value="Antiguan and Barbudan">Antiguan and Barbudan</option>
                    <option value="Argentine">Argentine</option>
                    <option value="Bahamian">Bahamian</option>
                    <option value="Barbadian">Barbadian</option>
                    <option value="Belizean">Belizean</option>
                    <option value="Bolivian">Bolivian</option>
                    <option value="Brazilian">Brazilian</option>
                    <option value="Canadian">Canadian</option>
                    <option value="Chilean">Chilean</option>
                    <option value="Colombian">Colombian</option>
                    <option value="Costa Rican">Costa Rican</option>
                    <option value="Cuban">Cuban</option>
                    <option value="Dominican">Dominican</option>
                    <option value="Ecuadorian">Ecuadorian</option>
                    <option value="Salvadoran">Salvadoran</option>
                    <option value="Grenadian">Grenadian</option>
                    <option value="Guatemalan">Guatemalan</option>
                    <option value="Guyanese">Guyanese</option>
                    <option value="Haitian">Haitian</option>
                    <option value="Honduran">Honduran</option>
                    <option value="Jamaican">Jamaican</option>
                    <option value="Mexican">Mexican</option>
                    <option value="Nicaraguan">Nicaraguan</option>
                    <option value="Panamanian">Panamanian</option>
                    <option value="Paraguayan">Paraguayan</option>
                    <option value="Peruvian">Peruvian</option>
                    <option value="Kittitian and Nevisian">Kittitian and Nevisian</option>
                    <option value="Saint Lucian">Saint Lucian</option>
                    <option value="Vincentian">Vincentian</option>
                    <option value="Surinamese">Surinamese</option>
                    <option value="Trinidadian or Tobagonian">Trinidadian or Tobagonian</option>
                    <option value="Uruguayan">Uruguayan</option>
                    <option value="Venezuelan">Venezuelan</option>
                </select>
            </div>
        </div> <!--end row-->
        <br>
        <br>
        <div class="row">
            <h3>Personal Contact & Emergency Information</h3>
            <br>
            <br>
            <div class="col-md-4">
                <label class="form-control"  for="email">Email Address *</label>
                <input required type="email" class="form-control" id="input_media_email" name="input_media_email"
                    placeholder="Email Address" oninput="validateEmail()">
            </div>
            <div class="col-md-4">
                <label class="form-control"  for="phone">Mobile Number *</label>
                <input required type="text" class="form-control" id="input_media_mobile_phone" name="input_media_mobile_phone"
                    placeholder="Mobile Number">
            </div>
            <div class="row">
                <div class="col-md-4">
                    <label class="form-control" for="address">Emergency Contact Name *</label>
                    <input required type="text" class="form-control" id="input_media_emergency_name"
                        name="input_media_emergency_name" placeholder=" Emergency Contact Name">
                </div>
                <div class="col-md-4">
                    <label class="form-control" for="address">Emergency Contact Phone Number *</label>
                    <input required type="tel" class="form-control" id="input_media_emergency_phone"
                        name="input_media_emergency_phone" placeholder="">
                </div>
            </div> <!--end row-->
        </div> <!--end row-->
        <br>
        <br>
        <div class="row">
            <h3>Organization Information</h3>
            <br>
            <br>
            <div class="col-md-4">
                <label class="form-control" for="organization">Organization Name *</label>
                <input required type="text" class="form-control" id="input_media_organization"
                    name="input_media_organization" placeholder="Organization">
            </div>
            <div class="col-md-4">
                <label class="form-control" for="position">Your Position *</label>
                <input required type="text" class="form-control" id="input_media_position" name="input_media_position"
                    placeholder="News Reporter, Cameraman, etc">
            </div>
            <br>
            <br>
            <div class="row">
                <div class="col-md-6">
                    <label class="form-control" for="equipment_list"><strong>Equipment List</strong></label>
                    <textarea class="form-control" id="input_media_equipment_list" name="input_media_equipment_list"
                        placeholder="Equipment List"> </textarea>
                </div>
            </div> <!--end row-->
        </div> <!--end row-->
        <br>
        <br>
        <div class="row">
            <h3>Upload Credentials</h3>
            <br>
            <br>
            <div class="col-md-6">
                <label class="form-control" for="press_id_photo">Upload your Press ID Badge *</label>
                <input required type="file" accept=".jpg, .jpeg, .png" class="form-control"
                    id="input_media_press_id_photo" name="input_media_press_id_photo" placeholder="Press ID Photo">
            </div>
            <div class="col-md-6">
                <label class="form-control" for="conference_photo2">Press ID Badge Preview</label>
                <img src="" alt="Badge Photo Preview" name="input_media_press_id_photo_preview" id="input_media_press_id_photo_preview"
                    style="max-width: 150px; max-height: 110px; display: none;">
                <br>
            </div>
        </div> <!--end row-->
        <div class="row">

            <div class="col-md-6">
                <label class="form-control"  for="gov_id_photo">Upload your Government ID*</label>
                <input required type="file" accept=".jpg, .jpeg, .png" class="form-control"
                    id="input_media_gov_id_photo" name="input_media_gov_id_photo" placeholder="Government ID Photo">
            </div>
            <div class="col-md-6">
                <label class="form-control"  for="conference_photo2">Government ID Preview</label>
                <img src="" alt="Badge Photo Preview" name="input_media_gov_id_photo_preview" id="input_media_gov_id_photo_preview"
                    style="max-width: 150px; max-height: 110px; display: none;">
                <br>
            </div>
        </div> <!--end row-->
        <div class="row">
            <div class="col-md-6">
                <label class="form-control"  for="badge_photo">Upload a Conference Badge Photo *</label>
                <input required type="file" accept=".jpg, .jpeg, .png" class="form-control" id="input_media_badge_photo"
                    name="input_media_badge_photo" placeholder="Badge Photo">
            </div>
            <div class="col-md-6">
                <label class="form-control"  for="conference_photo2">Badge Photo Preview</label>
                <img src="" alt="Badge Photo Preview" name="input_media_badge_photo_preview" id="input_media_badge_photo_preview"
                    style="max-width: 150px; max-height: 110px; display: none;">
                <br>
            </div>
        </div> <!--end row-->

        <br>
        <br>
        <br>
        <div class="row">
            <div class="col-md-1">
                <input type="checkbox" id="declaration-media" name="declaration-media" required>
            </div>
            <div class="col-md-10">
                <label class="form-control" for="declaration"><strong>
                        <h5></h5>By checking this box, I confirm that the information provided is
                        accurate and complete. I understand that my registration is subject to approval and that any
                        inaccurate or incomplete information may result in the rejection of my registration request.
                        I also agree to comply with the rules and guidelines of the conference and any related
                        events.</h5>
                    </strong></label><br><br>
            </div>
        </div>
        <div class="text-center mt-3">
            <input type="submit" id="submit-media"
                class="button-caption button button-solid-light transition-el transition-el-5"
                value="SUBMIT REGISTRATION">

        </div>
        <input type="button"
            class="btn-gohome button-caption button button-solid-light-grey transition-el transition-el-5"
            value="GO BACK TO HOME" id="go-back-button-media" onclick="goToHomePage()">

    </form>
</div>

<script>
    document.getElementById('media-form').addEventListener('submit', async (event) => {
    event.preventDefault();

    const submitButton = document.getElementById('submit-media');

    // Disable the submit button to prevent double submissions
    submitButton.disabled = true;

    try {
        const formData = new FormData(event.target);
        const response = await $.ajax({
            url: 'api/insert/add_media_record.php',
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            dataType: 'json',
        });

        if (response.status === 'success') {
            // Redirect to the home page after successful form submission
            window.location.href = 'index.php?message=You have successfully registered for The Conference!';
        } else {
            showErrorNotification(response.message);
        }
    } catch (error) {
        showErrorNotification('Error occurred while submitting the form.');
    } finally {
        // Re-enable the submit button after the form submission is complete or in case of error
        submitButton.disabled = false;
    }
});

function showErrorNotification(message) {
    new Noty({
        type: 'error',
        text: 'Error! ' + message,
        timeout: 3000,
        layout: 'topCenter',
    }).show();
}

</script>


<script>
    // Press ID Badge Photo preview
    const pressBadgePhotoInput = document.getElementById('input_media_press_id_photo');
    const pressBadgePhotoPreview = document.getElementById('input_media_press_id_photo_preview');

    pressBadgePhotoInput.addEventListener('change', function () {
        const file = this.files[0];
        if (file) {
            if (/\.(jpg|jpeg|png|gif)$/i.test(file.name) && file.size <= 10 * 1024 * 1024) {
                const reader = new FileReader();
                reader.addEventListener('load', function () {
                    pressBadgePhotoPreview.src = reader.result;
                    pressBadgePhotoPreview.style.display = 'block';
                });
                reader.readAsDataURL(file);
            } else {
                new Noty({
                    type: 'error',
                    text: 'Please select an image (JPEG, PNG, GIF) not exceeding 10MB in size.',
                    timeout: 3000,
                    layout: 'topRight', // Set the notification position
                }).show();
                // alert('Please select an image (JPEG, PNG, GIF) not exceeding 10MB in size.');
                this.value = ''; // Reset the file input to allow re-selection
                pressBadgePhotoPreview.src = '';
                pressBadgePhotoPreview.style.display = 'none';
            }
        }
    });

    // Gov-ID preview
    const mediaGovIdInput = document.getElementById('input_media_gov_id_photo');
    const mediaGovIdPreview = document.getElementById('input_media_gov_id_photo_preview');

    mediaGovIdInput.addEventListener('change', function () {
        const file = this.files[0];
        if (file) {
            /* The above code is checking if the file name has a .jpg, .jpeg, or .png extension
            (case-insensitive) and if the file size is less than or equal to 5 MB. */
            if (/\.(jpg|jpeg|png|gif)$/i.test(file.name) && file.size <= 10 * 1024 * 1024) {
                const reader = new FileReader();
                reader.addEventListener('load', function () {
                    mediaGovIdPreview.src = reader.result;
                    mediaGovIdPreview.style.display = 'block';
                });
                reader.readAsDataURL(file);
            } else {
                alert('Please select a PNG or JPG image not exceeding 5MB in size.');
                this.value = ''; // Reset the file input to allow re-selection
                mediaGovIdPreview.src = '';
                mediaGovIdPreview.style.display = 'none';
            }
        }
    });

    // Conference Badge Photo preview
    const conferenceBadgePhotoInput = document.getElementById('input_media_badge_photo');
    const conferenceBadgePhotoPreview = document.getElementById('input_media_badge_photo_preview');

    conferenceBadgePhotoInput.addEventListener('change', function () {
        const file = this.files[0];
        if (file) {
            if (/\.(jpg|jpeg|png|gif)$/i.test(file.name) && file.size <= 10 * 1024 * 1024) {
                const reader = new FileReader();
                reader.addEventListener('load', function () {
                    conferenceBadgePhotoPreview.src = reader.result;
                    conferenceBadgePhotoPreview.style.display = 'block';
                });
                reader.readAsDataURL(file);
            } else {
                new Noty({
                    type: 'error',
                    text: 'Please select an image (JPEG, PNG, GIF) not exceeding 10MB in size.',
                    timeout: 3000,
                    layout: 'topRight', // Set the notification position
                }).show();
                // alert('Please select an image (JPEG, PNG, GIF) not exceeding 10MB in size.');
                this.value = ''; // Reset the file input to allow re-selection
                conferenceBadgePhotoPreview.src = '';
                conferenceBadgePhotoPreview.style.display = 'none';
            }


        }
    });
</script>

<script>
    function validateEmail() {
        const emailInput = document.getElementById('input_media_email');
        const emailError = document.getElementById('emailError');

        // Regular expression for email validation
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

        if (!emailRegex.test(emailInput.value)) {
            emailError.textContent = 'Please enter a valid email address.';
            document.getElementById('next').disabled = true; // Disable the "Next" button
        } else {
            emailError.textContent = '';
            document.getElementById('next').disabled = false; // Enable the "Next" button
        }
    }
</script>