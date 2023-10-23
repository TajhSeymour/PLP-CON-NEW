<div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content border-0">
        <div class="modal-header p-3 bg-soft-info">
            <h5 class="modal-title" id="exampleModalLabel">ADD NEW DELEGATE</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                id="close-modal"></button>
        </div>
        <form id="registration-form" method="post" enctype="multipart/form-data" class="tablelist-form"
            autocomplete="off">
            <div class="modal-body">
                <div class="row g-3">
                    <div class="row g-3">
                        <div class="col-lg-6">

                            <select class="form-control" data-plugin="choices" name="input_priority" id="input_priority"
                                required>
                                <option value="Normal">Select Priority</option>
                                <option value="High">High</option>
                                <option value="Medium">Medium</option>
                                <option value="Normal">Normal</option>
                            </select>
                        </div>

                    </div>
                    <div class="col-lg-6">
                        <div>
                            <label for="first_name" class="form-label">First Name: *</label>
                            <input type="text" name="first_name" id="input_first_name" class="form-control"
                                placeholder="First Name" required />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div>
                            <label for="middle_name" class="form-label">Middle Name:</label>
                            <input type="text" name="middle_name" id="input_middle_name" class="form-control"
                                placeholder="Middle Name" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div>
                            <label for="last_name" class="form-label">Last Name: *</label>
                            <input type="text" name="last_name" id="input_last_name" class="form-control"
                                placeholder="Last Name" required />
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <label for="gender" class="form-label">Gender: *</label>
                        <select required class="form-control" data-plugin="choices" name="gender" id="input_gender">
                            <option value="">Gender</option>
                            <option value="MALE">Male</option>
                            <option value="FEMALE">Female</option>

                        </select>
                    </div>
                    <div class="col-lg-6">
                        <div>
                            <label for="last_name" class="form-label">NIB Number: *</label>
                            <input type="number" name="last_name" id="input_nib_number" class="form-control"
                                placeholder="NIB Number" required />
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <label for="assignments" class="form-label">Memebership Type</label>
                        <select class="form-control" data-plugin="choices" name="input_membership_type" id="input_membership_type"
                            required>
                            <option value="">Select Memebership</option>
                            <option value="DIRECT MEMEBER">Direct Memeber</option>
                            <option value="STALWART COUNCILLOR">Stalwart Councillor</option>
                            <option value="LIFETIME MEMBER">Lifetime Member</option>
                        </select>
                    </div>
                    <div class="col-lg-6">
                        <label for="dob" class="form-label">Date of Birth</label>
                        <input type="text" id="input_dob" name="dob" class="form-control" data-provider="flatpickr"
                            data-date-format="Y-m-d" placeholder="Please enter your date of birth" required />

                    </div>

                    <div class="col-lg-6">
                        <label class="form-label" for="country_name">Your Constituency *</label>
                        <select class="form-control" id="input_new_del_constituency" name="input_new_del_constituency"
                            required>
                            <option value="" disabled selected>Select constituency</option>
                            <option value="BAINS & GRANTS TOWN">Bains & Grants Town</option>
                            <option value="BAMBOO TOWN">Bamboo Town</option>
                            <option value="CARMICHAEL">Carmichael</option>
                            <option value="CAT ISL, R.CAY & SAN SAL">Cat Isl, R.Cay & San Sal</option>
                            <option value="CENTRAL & SOUTH ABACO">Central & South Abaco</option>
                            <option value="CENTRAL & SOUTH ELEUTHERA">Central & South Eleuthera</option>
                            <option value="CENTRAL GRAND BAHAMA">Central Grand Bahama</option>
                            <option value="CENTREVILLE">Centreville</option>
                            <option value="EAST GRAND BAHAMA">East Grand Bahama</option>
                            <option value="ELIZABETH">Elizabeth</option>
                            <option value="ENGLERSTON">Englerston</option>
                            <option value="EXUMAS & RAGGED ISL">Exumas & Ragged Isl</option>
                            <option value="FORT CHARLOTTE">Fort Charlotte</option>
                            <option value="FOX HILL">Fox Hill</option>
                            <option value="FREE TOWN">Free Town</option>
                            <option value="GARDEN HILLS">Garden Hills</option>
                            <option value="GOLDEN GATES">Golden Gates</option>
                            <option value="GOLDEN ISLES">Golden Isles</option>
                            <option value="KILLARNEY">Killarney</option>
                            <option value="LONG ISLAND">Long Island</option>
                            <option value="MANGROVE CAY & S. ANDROS">Mangrove Cay & S. Andros</option>
                            <option value="MARATHON">Marathon</option>
                            <option value="MARCO CITY">Marco City</option>
                            <option value="MICAL">MICAL</option>
                            <option value="MOUNT MORIAH">Mount Moriah</option>
                            <option value="N. ANDROS & BERRY ISL">N. Andros & Berry Isl</option>
                            <option value="NASSAU VILLAGE">Nassau Village</option>
                            <option value="NORTH ABACO">North Abaco</option>
                            <option value="NORTH ELEUTHERA">North Eleuthera</option>
                            <option value="PINERIDGE">Pineridge</option>
                            <option value="PINEWOOD">Pinewood</option>
                            <option value="SEABREEZE">Seabreeze</option>
                            <option value="SOUTH BEACH">South Beach</option>
                            <option value="SOUTHERN SHORES">Southern Shores</option>
                            <option value="ST. ANNE'S">St. Anne's</option>
                            <option value="ST. BARNABAS">St. Barnabas</option>
                            <option value="TALL PINES">Tall Pines</option>
                            <option value="WEST GB & BIMINI">West GB & Bimini</option>
                            <option value="YAMACRAW">Yamacraw</option>
                        </select>

                    </div>
                    <div class="col-lg-6">

                        <label class="form-label" for="Nationality">Affiliated Branch Membership *</label>
                        <select class="form-control" id="input_new_del_affiliated_branch" required
                            name="input_new_del_affiliated_branch">
                            <option value="None" disabled selected> Select Affiliate Branch
                            </option>
                            <option value="PYL">PYL</option>
                            <option value="PYL-GB">PYL-GB</option>
                            <option value="NPI">NPI</option>
                            <option value="NPI-GB">NPI-GB</option>
                            <option value="MEN'S BRANCH">Men's Branch</option>
                            <option value="WOMEN'S BRANCH">Women's Branch</option>
                            <option value="BAINS & GRANTS TOWN">Bains & Grants Town</option>
                            <option value="BAMBOO TOWN">Bamboo Town</option>
                            <option value="CARMICHAEL">Carmichael</option>
                            <option value="CAT ISL, R.CAY & SAN SAL">Cat Isl, R.Cay & San Sal</option>
                            <option value="CENTRAL & SOUTH ABACO">Central & South Abaco</option>
                            <option value="CENTRAL & SOUTH ELEUTHERA">Central & South Eleuthera</option>
                            <option value="CENTRAL GRAND BAHAMA">Central Grand Bahama</option>
                            <option value="CENTREVILLE">Centreville</option>
                            <option value="EAST GRAND BAHAMA">East Grand Bahama</option>
                            <option value="ELIZABETH">Elizabeth</option>
                            <option value="ENGLERSTON">Englerston</option>
                            <option value="EXUMAS & RAGGED ISL">Exumas & Ragged Isl</option>
                            <option value="FORT CHARLOTTE">Fort Charlotte</option>
                            <option value="FOX HILL">Fox Hill</option>
                            <option value="FREE TOWN">Free Town</option>
                            <option value="GARDEN HILLS">Garden Hills</option>
                            <option value="GOLDEN GATES">Golden Gates</option>
                            <option value="GOLDEN ISLES">Golden Isles</option>
                            <option value="KILLARNEY">Killarney</option>
                            <option value="LONG ISLAND">Long Island</option>
                            <option value="MANGROVE CAY & S. ANDROS">Mangrove Cay & S. Andros</option>
                            <option value="MARATHON">Marathon</option>
                            <option value="MARCO CITY">Marco City</option>
                            <option value="MICAL">MICAL</option>
                            <option value="MOUNT MORIAH">Mount Moriah</option>
                            <option value="N. ANDROS & BERRY ISL">N. Andros & Berry Isl</option>
                            <option value="NASSAU VILLAGE">Nassau Village</option>
                            <option value="NORTH ABACO">North Abaco</option>
                            <option value="NORTH ELEUTHERA">North Eleuthera</option>
                            <option value="PINERIDGE">Pineridge</option>
                            <option value="PINEWOOD">Pinewood</option>
                            <option value="SEABREEZE">Seabreeze</option>
                            <option value="SOUTH BEACH">South Beach</option>
                            <option value="SOUTHERN SHORES">Southern Shores</option>
                            <option value="ST. ANNE'S">St. Anne's</option>
                            <option value="ST. BARNABAS">St. Barnabas</option>
                            <option value="TALL PINES">Tall Pines</option>
                            <option value="WEST GB & BIMINI">West GB & Bimini</option>
                            <option value="YAMACRAW">Yamacraw</option>
                        </select>
                    </div>
                    <div class="col-lg-6">
                        <div>
                            <label class="form-label" for="input_new_del_email">Email Address *</label>
                            <input type="email" class="form-control" placeholder="Enter Email Address" id="input_new_del_email" name="input_new_del_email"
                                required>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div>
                            <label class="form-label" for="input_del_mobile">Mobile Number</label>
                            <input class="form-control" type="text" id="input_new_del_mobile"
                                name="input_new_del_mobile" placeholder="Enter Your Mobile Number"
                                oninput="formatPhoneNumber('input_new_del_mobile'); validatePhoneNumber('input_new_del_mobile')">
                            <div id="input_new_del_mobile-validation"></div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div>
                            <label class="form-label" for="input_del_telephone">Telephone Number (Other)</label>
                            <input class="form-control" type="text" id="input_new_del_telephone"
                                name="input_new_del_telephone" placeholder="Enter Your Telephone Number"
                                oninput="formatPhoneNumber('input_new_del_telephone'); validatePhoneNumber('input_new_del_telephone')">
                            <div id="input_new_del_telephone-validation"></div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div>
                            <label class="form-label" for="input_del_emergency_name">Emergency Contact Name</label>
                            <input type="text" class="form-control" id="input_new_del_emergency_name"  placeholder="Enter Full Name"
                                name="input_new_del_emergency_name">
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <label class="form-label" for="gender">Emergency Contact Relationship</label>
                        <select class="form-control" id="input_new_del_emergency_relationship"
                            name="input_new_del_emergency_relationship">
                            <option value="" disabled selected>Select Relationship</option>
                            <option value="PARENT">Parent</option>
                            <option value="GRAND PARENT">Grand Parent</option>
                            <option value="CHILD">Child</option>
                            <option value="SIBLING">Sibling</option>
                            <option value="AUNT">Aunt</option>
                            <option value="UNCLE">Uncle</option>
                            <option value="COUSIN">Cousin</option>
                            <option value="FRIEND">Friend</option>
                            <option value="OTHER">Other</option>
                        </select>
                    </div>

                    <div class="col-lg-6">
                    <label class="form-label" for="input_del_emergency_telephone">Emergency Telephone</label>
                            <input class="form-control" type="text" id="input_new_del_emergency_telephone"
                                name="input_new_del_emergency_telephone" placeholder="Enter Emergency Telephone Number"
                                oninput="formatPhoneNumber('input_new_del_emergency_telephone'); validatePhoneNumber('input_new_del_emergency_telephone')">
                            <div id="input_new_del_emergency_telephone-validation"></div>
                    </div>

                
                    <div class="col-lg-6">
                    <label class="form-label" for="travel_question">House/Property Number</label>
                    <input type="number" class="form-control" id="input_new_del_house_number"  placeholder=""
                                name="input_new_del_house_number">
                    </div>
                    <div class="col-lg-6">
                    <label class="form-label" for="travel_question">Street Address *</label>
                    <input type="text" class="form-control" id="input_new_del_street_address"  placeholder="Enter Street Address"
                                name="input_new_del_street_address">
                    </div>


                </div>
<br>
<br>
                <div class="row g-3">
                    <div class="col-lg-6">
                        <label for="imageUpload" class="form-label">Badge ID Photo (JPG Only):</label>
                        <input type="file" class="form-control" id="input_new_del_badge_photo" name="input_new_del_badge_photo"
                            accept=".jpg" />
                        <small id="fileHelp" class="form-text text-muted">Please upload a .jpg
                            file.</small>
                    </div>

               
                </div>
            </div>
            <div class="modal-footer">
                <div class="hstack gap-2 justify-content-end">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success" id="add-btn">Submit Registration</button>
                    <!-- <button type="button" class="btn btn-success" id="edit-btn">Update</button> -->
                </div>
            </div>
        </form>
    </div>
</div>

<script>
    function formatPhoneNumber(inputId) {
        var input = document.getElementById(inputId);
        var value = input.value.replace(/\D/g, ''); // Remove non-numeric characters

        if (value.length >= 3) {
            value = '(' + value.substring(0, 3) + ')' + (value.length > 3 ? value.substring(3, 6) + '-' + value.substring(6, 10) : '');
        }

        input.value = value;
    }

    function validatePhoneNumber(inputId) {
        var phoneNumber = document.getElementById(inputId).value;
        var regex = /^\(\d{3}\)\d{3}-\d{4}$/; // Regex pattern for (XXX)XXX-XXXX format
        var validationMessage = document.getElementById(inputId + '-validation');

        if (regex.test(phoneNumber)) {
            validationMessage.textContent = 'Phone number is valid.';
        } else {
            validationMessage.textContent = 'Phone number is not valid. Please enter it in the format (XXX)XXX-XXXX.';
        }
    }
</script>



<script>
    const registrationForm = document.getElementById('registration-form');

    function closeModal() {
        registrationForm.reset();
        $('#showModal').modal('hide'); // Close the Bootstrap modal
    }

    registrationForm.addEventListener('submit', async function (event) {
        event.preventDefault();

        try {
            const formData = new FormData(registrationForm);
            const response = await fetch('https://plpconvention.org/api/dashboard/insert/insert_quick_register.php', {
                method: 'POST',
                body: formData
            });

            const data = await response.json();

            if (data.status === 'success') {
                Swal.fire({
                    icon: 'success',
                    title: 'Success',
                    text: 'Record added successfully!',
                    confirmButtonColor: '#28a745'
                }).then(() => {
                    closeModal();
                    window.location.reload();
                });
            } else if (data.status === 'error') {
                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: data.message,
                    confirmButtonColor: '#dc3545'
                });
            }
        } catch (error) {
            console.error('Error:', error);
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: data.message,
                confirmButtonColor: '#dc3545'
            });
        }
    });
</script>