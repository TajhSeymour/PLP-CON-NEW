<div class="form-container">
    <h3 class="text-center my-3">
        <div class="logo">
            <img src="assets/images/logo-b.png" alt="Site Logo">
        </div>
    </h3>
    <br>

    <!-- Main Multi-Step Form -->
    <form class="form form-dark notify-form" action="send_media_applicant_email.php" id="notify-form"
        enctype="multipart/form-data">
        <!-- <h3 class="text-center my-3">Conference Registration Form</h3>-->
        <br>

        <!-- Step 1 -->

        <div class="step step-1">
            <center>
                <h3>Information Sharing </h3>
            </center>
            <div class="row">
               <label class="form-control" for="declaration-english"><strong> <p> I, hereby grant authorization to the
                            The Progressive Liberal Party (PLP) to mention my participation in the 55th PLP National
                            Convention, hereinafter referred to as the "Convention," for promotional
                            purposes. This authorization allows the General Secretariat to utilize my name, images, and
                            relevant information in various promotional materials, both physical and digital, with the
                            aim
                            of raising awareness and participation in this significant political event. These
                            promotional
                            materials may include newspaper announcements, reports, websites, social networks, and other
                            appropriate means of publication, encompassing print, audio, photography, video, in-person,
                            or
                            virtual formats. This authorization shall be effective upon submitting this registration
                            form.
                            </p></strong></label><br><br>
            </div>
            <center>
                <h3>Code of Conduct</h3>
            </center>
            <div class="row">
                <label class="form-control" for="declaration-english"><strong>
                        <p>The Progressive Liberal Party is dedicated to fostering a secure and inclusive environment
                            where all participants can freely express their opinions, share perspectives, and actively
                            engage in activities without the fear of reprisal, intimidation, or harassment. We uphold
                            the following principles in our Code of Conduct:
                            <br>
                            <br>1. Respect and Inclusivity: We celebrate diversity and encourage all individuals,
                            regardless of their background, beliefs, or identities, to participate in our convention.
                            Attendees are expected to treat each other with respect, empathy, and inclusivity.
                            Discrimination or harassment based on factors such as gender, race, religion, age,
                            disability, or sexual orientation is strictly prohibited.
                            <br>
                            <br>2. Freedom of Expression: We value open and constructive dialogue. Attendees are
                            encouraged to express their opinions and ideas freely while respecting the opinions of
                            others. Differences in perspective should be addressed through civil discourse, promoting a
                            positive and enriching exchange of ideas.
                            <br>
                            <br>3. Safety and Well-being: The safety and well-being of all participants are of utmost
                            importance. Any concerns related to safety or security should be reported to convention
                            staff immediately. Weapons, illegal substances, and any items that may jeopardize the safety
                            of others are strictly prohibited.
                            <br>
                            <br>4. Professionalism: Attendees are expected to conduct themselves in a professional and
                            courteous manner throughout the convention. Disruptive or offensive behavior, including but
                            not limited to intimidation, aggressive conduct, or verbal abuse, will not be tolerated.
                            <br>
                            <br>5. Compliance: By participating in The Progressive Liberal Party Convention, attendees
                            agree to abide by this Code of Conduct. Failure to comply may result in expulsion from the
                            convention without refund and, if necessary, legal action.
                            <br>
                            We invite all participants to actively contribute to the creation of a welcoming,
                            respectful, and inclusive atmosphere at our convention. Together, we can ensure that
                            everyone's voices are heard and respected as we work towards a progressive and inclusive
                            future.

                        </p>
                    </strong></label><br><br>
            </div>
            <br>
            <br>
            <center>
                <h4>Please acknowledge below that you have read and understood the conditions of the code of conduct
                    <br>
                    <br>
                    <br>
                </h4>
            </center>

            <div class="row">
                <div class="col-md-1">
                    <input type="checkbox" id="declaration-2" name="declaration" required>
                </div>
                <div class="col-md-10">
                    <label class="form-control" for="declaration"><strong>I hereby confirm that I have reviewed and
                            comprehended the Information Sharing & Code of Conduct terms outlined in The Convention, and
                            I willingly commit to abide by these stipulations.</strong></label><br><br>

                </div>
            </div>
        </div>



        <div class="step step-2">
            <br>
            <br>
            <h3>Step 1: REGISTRATION CLASSIFICATION </h3>
            <div class="row">
                <!-- First column -->
                <div class="col-md-4">
                    <center><img src="assets/images/idcarddemo.png" alt="Site Logo"></center>
                    <!-- Other input fields for Step 1 -->

                </div>

                <div class="col-md-8">
                    <br>
                    <br>
                    <label class="form-control" for="School-Type-1"><strong>Have you been issued a PLP ID Card?
                            *</label></strong>
                    <select class="form-control" required id="input_del_id_question" name="input_del_id_question">
                        <option value="" disabled selected>Select an Option</option>
                        <option value="YES">Yes, I possess a PLP ID Card</option>
                        <option value="LOST">Yes, I'm a registered member, but I've misplaced my PLP ID Card</option>
                        <option value="NO">No, I'm a new member / Never issued a PLP ID Card</option>
                        <option value="NOD">No, I'm registring as a Observer Delegate</option>
                    </select>

                </div>


                <div id="have-id-section" style="display: none;">
                    <br>
                    <br>
                    <br>
                    <br>
                    <h3>Step 2: Please Enter Your PLP ID Information</h3>
                    <div class="row">

                        <div class="col-md-6">
                            <label class="form-control" for="id_number">Enter Your PLP ID Number *</label>
                            <input type="number" class="form-control" name="input_id_number" id="input_id_number">
                        </div>
                        <div class="col-md-6">
                            <label class="form-control" for="id_number">Enter Your Surname *</label>
                            <input type="text" class="form-control" name="input_id_surname" id="input_id_surname">
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <button width="100%" type="button" id="verify-plp-code"
                                class="button-caption button button-solid-light transition-el transition-el-5">VERIFY
                                YOUR ID</button>
                            <br>
                        </div>
                    </div>
                </div>


                <div id="have-id-section-no" style="display: none;">This is the section for new members.</div>

                <div id="have-id-section-lost" style="display: none;">This is the section for registered members who
                    lost their ID.</div>

                <div id="have-id-section-nob" style="display: none;">This is the section for Observer Delegate members
                    who
                    lost their ID.</div>


                <div id="have-id-section-info">
                    <br>
                    <br>
                    <br>
                    <br>
                    <h3>Step 3: GENERAL INFORMATION</h3>
                    <div class="row">
                        <div class="col-md-1">
                            <label class="form-control" for="input_first_name">ID Photo</label>
                            <img id="id-image" src="" alt="ID Badge">
                        </div>

                        <div class="col-md-4">
                            <label class="form-control" for="input_first_name">First Name *</label>
                            <input type="text" class="form-control" id="input_del_first_name"
                                name="input_del_first_name" disabled required>
                        </div>
                        <div class="col-md-3">
                            <label class="form-control" for="input_middle_name">Middle Name</label>
                            <input type="text" class="form-control" id="input_del_middle_name" disabled
                                name="input_del_middle_name" disabled>
                        </div>
                        <div class="col-md-4">
                            <label class="form-control" for="input_last_name">Last Name *</label>
                            <input type="text" class="form-control" id="input_del_last_name" name="input_del_last_name"
                                disabled required>
                        </div>
                        <div class="col-md-4">
                            <label class="form-control" for="gender">Gender: *</label>
                            <select class="form-control" required id="input_del_gender" name="input_del_gender"
                                disabled>
                                <option value="" disabled selected>Select Gender</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>

                        <div class="col-md-4">
                            <label class="form-control" for="gender">Membership Type</label>
                            <select class="form-control" disabled id="input_del_membership_type"
                                name="input_del_membership_type">
                                <option value="" disabled selected>---</option>

                            </select>
                        </div>
                        <!-- Fifth column -->
                        <div class="col-md-4">
                            <label class="form-control" for="dob">Date of Birth *</label>
                            <input required type="date" id="input_del_dob" value="2000-12-31" name="input_del_dob"
                                min="1920-01-01" max="2007-12-31">
                        </div>
                        <div class="col-md-4">
                            <label class="form-control" for="Nationality">NIB Number *</label>
                            <input type="number" required class="form-control" required id="input_del_nib"
                                name="input_del_nib">
                        </div>
                        <div class="col-md-4">
                            <label class="form-control" for="country_name">Constituency *</label>
                            <select class="form-control" id="input_del_constituency" name="input_del_constituency"
                                required>
                                <option value="" disabled selected>Select your constituency</option>
                            </select>

                        </div>
                        <div class="col-md-4">
                            <label class="form-control" for="Nationality">Affiliated Branch Membership *</label>
                            <select class="form-control" id="input_del_affiliated_branch"
                                name="input_del_affiliated_branch">
                                <option value="" disabled selected>Select the branch your a delegate </option>
                            </select>
                        </div>
                    </div>


                    <h3>Step 4: CONTACT INFORMATION</h3>
                    <div class="row">

                        <div class="col-md-4">
                            <label class="form-control" for="input_del_email">Email Address *</label>
                            <input type="email" class="form-control" id="input_del_email" name="input_del_email"
                                required>
                        </div>
                        <div class="col-md-4">
                            <label class="form-control" for="input_del_mobile">Mobile Number</label>
                            <input type="number" class="form-control" id="input_del_mobile" name="input_del_mobile">
                        </div>
                        <div class="col-md-4">
                            <label class="form-control" for="input_del_telephone">Telphone Number (Other)</label>
                            <input type="number" class="form-control" id="input_del_telephone"
                                name="input_del_telephone">
                        </div>

                        <div class="col-md-4">
                            <label class="form-control" for="input_del_emergency_name">Emergency Contact Name *</label>
                            <input type="text" class="form-control" required id="input_del_emergency_name"
                                name="input_del_emergency_name">

                        </div>

                        <div class="col-md-4">
                            <label class="form-control" for="gender">Contact Relationship</label>
                            <select class="form-control" id="input_del_emergency_name" required
                                name="input_del_emergency_name">
                                <option value="" disabled selected>Select relationship</option>
                                <option value="Parent">Parent</option>
                                <option value="Grand Parent">Grand Parent</option>
                                <option value="Siblings">Sibling</option>
                                <option value="Aunt">Aunt</option>
                                <option value="Uncle">Uncle</option>
                                <option value="Cousin">Cousin</option>
                                <option value="Friend">Friend</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                        <!-- Fifth column -->
                        <div class="col-md-4">
                            <label class="form-control" for="input_del_emergency_telephone">Emergency Telphone Number
                                *</label>
                            <input type="number" class="form-control" id="input_del_emergency_telephone"
                                name="input_del_emergency_telephone" required>
                        </div>
                    </div>

                    <h3>Step 5A: CONVENTION REGISTRATION</h3>
                    <div class="row">
                        <div class="col-md-3">
                            <label class="form-control" for="travel_question">Are you a convention voting
                                delegate?</label>
                            <select class="form-control" required id="input_vote_del_question"
                                name="input_vote_del_question">
                                <option value="No" selected> No</option>
                                <option value="Yes">Yes</option>
                            </select>
                            <strong>Voting Delegates include elected branch members, current/former national party
                                officers, and parliamentary members who have voting eligibility at the
                                convention.</strong>
                        </div>
                        <div class="col-md-4">
                            <label class="form-control" for="travel_question">Which branch nominated you as a voting
                                delegate?</label>
                            <select class="form-control" required id="input_vote_del_nomination_question"
                                name="input_vote_del_nomination_question">
                                <option value="" disabled selected> Please select</option>
                            </select>
                            <strong>Please be aware that your delegate status will undergo verification by The
                                Convention Committee before payment is processed. </strong>
                        </div>

                        <div class="col-md-4">
                            <label class="form-control" for="travel_question">Would you like a badge reprint?</label>
                            <br>
                            <br>
                            <select class="form-control" required id="input_vote_del_badge_question"
                                name="input_vote_del_badge_question">
                                <option value="" disabled selected> Please select</option>
                                <option value="No" selected> No</option>
                                <option value="Yes">Yes</option>
                            </select>
                            <strong>Please be aware that badge reprint will be an additonal $10.00 to your conventions
                                dues. </strong>
                        </div>
                        <div class="row">
                            <!-- First column -->
                            <div class="col-md-6">
                                <br>
                                <br>
                                <label class="form-control" for="conference_photo">Upload New Badge Photo ID (JPG IMAGES
                                    ONLY)*</label>
                                <input class="form-control" type="file" accept=".jpg" id="input_badge_photo"
                                    name="input_badge_photo" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-control" for="conference_photo2">Preview</label>
                                <img src="" alt="Badge Photo Preview" id="badge_photo_preview"
                                    style="max-width: 150px; max-height: 110px; display: none;">
                                <br>
                            </div>
                        </div>


                    </div>
                    <br>
                    <br>
                    <div class="row">

                        <div class="col-md-3">
                            <label class="form-control" for="travel_question">Are you traveling to the
                                convention?</label>
                            <select class="form-control" required id="input_travel_question"
                                name="input_travel_question">
                                <option value="No" selected> No</option>
                                <option value="Yes">Yes</option>
                            </select>
                        </div>
                        <div class="col-md-8">
                            <label class="form-control" for="travel_question">Do you require ground transportation
                                assistance?</label>
                            <select class="form-control" required id="input_ground_transportation_question"
                                name="input_ground_transportation_question">
                                <option value="" disabled selected> Please select</option>
                                <option value="Yes-Airport">Yes, I require transportation assistance from the Airport
                                </option>
                                <option value="Yes-Constituency">Yes, I require transportation assistance from
                                    Consituency Office (New Providence) </option>
                                <option value="Yes-HQ">Yes, I require transportation assistance from PLP HQ (New
                                    Providence) </option>
                                <option value="No">No, I do not require transportation assistance. </option>

                            </select>
                        </div>
                        <div id="arrival-section" style="display: none;">
                            <h3>STEP 5B: Tentative Arrival, Hotel & Departure Information (OPTIONAL)</h3>

                            <div class="row">
                                <!-- First column -->
                                <div class="col-md-4">
                                    <label class="form-control" for="Arrival_Date">Arrival Date & Time</label>
                                    <input type="datetime-local" id="input_arrival_date_time"
                                        name="input_arrival_date_time" value="2023-09-01T19:30" min="2023-08-01T00:00"
                                        max="2023-10-31T00:00" />
                                </div>
                                <!-- Second column -->
                                <div class="col-md-4">
                                    <label class="form-control" for="Airline"> Arrival Airline</label>
                                    <select class="form-control" name="input_arrival_airline">
                                        <option value="" disabled selected>Select Airline*</option>
                                    </select>
                                </div>
                                <!-- First column -->
                                <div class="col-md-4">
                                    <label class="form-control" for="input_flight_number"> Arrival Flight Number
                                    </label>
                                    <input type="text" class="form-control" name="input_arrival_flight_number"
                                        id="input_arrival_flight_number">
                                </div>
                            </div>

                            <div class="row">

                                <h5>Hotel Accommodation</h5>
                                <p>Discount Hotel rates are provided by Brezzers (All Inclusive) & The Baha Mar
                                    Resort<br> <a href="#.pdf" target="_blank"
                                        style="color: blue; font-weight: bold;">Click here</a> for more information.</p>
                                <br>
                                <div class="col-md-8">
                                    <select class="form-control" name="input_hotel">
                                        <option value="">Select Hotel</option>
                                    </select>
                                </div>
                                <!-- Second column -->

                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <label class="form-control" for="Departure_date">Departure Date & Time
                                    </label>
                                    <input type="datetime-local" id="input_departure_date_time"
                                        name="input_departure_date_time" value="2023-09-01T19:30" min="2023-08-01T00:00"
                                        max="2023-10-31T00:00" />
                                </div>
                                <!-- First column -->
                                <div class="col-md-4">
                                    <label class="form-control" for="Airline"> Departure Airline </label>
                                    <select class="form-control" name="input_departure_airline">
                                        <option value="">Select Airline</option>
                                    </select>
                                </div>
                                <!-- Second column -->
                                <div class="col-md-4">
                                    <label class="form-control" for="input_departure_flight_number">Departure
                                        Flight Number </label>
                                    <input type="text" class="form-control" name="input_departure_flight_number"
                                        id="input_departure_flight_number">
                                </div>
                            </div>
                        </div>

                        <h3>Step 6: CONVENTION PAYMENT INSTRUCTIONS</h3>
                        <div class="row">
                            <div class="col-md-4">
                                <label class="form-control" for="travel_question">Preferred Payment Method</label>
                                <select class="form-control" required id="input_pay_methon_question"
                                    name="input_pay_methon_question">
                                    <option value="Cash" selected>CASH (PLP HQ)</option>
                                    <option value="Bank">BANK WIRE TRANSFER</option>
                                </select>
                                <strong>Please keep your receipt/s for proof of payment.</strong>
                            </div>
                        </div>
                        <div id="payment-instructions-bank">
                            <div class="row">
                                <br>
                                <br>
                                <div class="col-md-4">
                                    <label class="form-control" for="travel_question">Bank Name</label>
                                    <select class="form-control" required id="input_bank_name_question" disabled
                                        name="input_bank_name_question">

                                        <option value="Bank of The Bahamas">Bank of The Bahamas</option>
                                        <option value="Commonwealth Bank">Commonwealth Bank</option>
                                        <option value="Fidelity Bank">Fidelity Bank</option>
                                        <option value="First Caribbean Bank" selected>First Caribbean Bank</option>
                                        <option value="Royal Bank of Canada">Royal Bank of Canada</option>
                                        <option value="Scotiabank">Scotiabank</option>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <label class="form-control" for="travel_question">Account Name</label>
                                    <input type="text" class="form-control" name="input_bank_account_name" disabled
                                        id="input_bank_account_name" value="Progressive Liberal">
                                </div>
                                <div class="col-md-4">
                                    <label class="form-control" for="travel_question">Account Number</label>
                                    <input type="text" class="form-control" name="input_bank_account_number" disabled
                                        id="input_bank_account_number" value="1260642">
                                </div>
                                <div class="col-md-4">
                                    <label class="form-control" for="travel_question">Bank ABA Number</label>
                                    <input type="text" class="form-control" name="input_ABA_Number" disabled
                                        id="input_ABA_Number" value="290670101">
                                </div>

                                <div class="col-md-4">
                                    <label class="form-control" for="travel_question">Branch Location & Number</label>
                                    <input type="text" class="form-control" name="input_branch_location" disabled
                                        id="input_ABA_Number" value="JFK - 29067 | Nassau, Bahamas">
                                </div>


                            </div>

                            <div id="payment-instructions-cash">

                                <div class="col-md-8">
                                    <label class="form-control" for="travel_question">Instructions</label>
                                    <textarea class="form-control" name="input_cash_instructions" readonly
                                        id="input_cash_instructions">Please make your payment at the PLP HQ and remember to retain your receipt. A registration clerk will be available to assist with processing your registration package.</textarea>
                                </div>



                            </div>

                            <div class="col-md-4">
                                <label class="form-control" for="travel_question">Total Cost</label>
                                <input type="text" class="form-control" name="input_total_cost_wire" disabled
                                    id="input_total_cost">
                            </div>
                        </div>









                    </div>


                </div>



            </div>

        </div>
        <br>
        <br>
        <br>
        <div class="step-navigation">
            <input type="button" class="next-btn button-caption button button-solid-light-grey" id="next"
                value="NEXT >>>">
            <input type="button" class="prev-btn button-caption button button-solid-light-grey" id="prev"
                value="<<< PREVIOUS">
            <input type="submit" id="submit-button"
                class="btn-submit button-caption button button-solid-light transition-el transition-el-5"
                value="SUBMIT REGISTRATION">

            <input type="button"
                class="btn-gohome button-caption button button-solid-light transition-el transition-el-5"
                value="GO BACK TO HOME" id="go-back-button" onclick="goToHomePage()">
        </div>
    </form>
</div>

<script>
    // Hide the div with id "have-id-section-info" when the page loads
    window.addEventListener('load', function () {
        document.getElementById('have-id-section').style.display = 'none';
        document.getElementById('have-id-section-info').style.display = 'none';
        document.getElementById('have-id-section-info-false').style.display = 'none';
        document.getElementById('arrival-section').style.display = 'none';

    });

</script>

<script>
    // Get the dropdown element
    var dropdown = document.getElementById("input_del_id_question");

    // Add an event listener to handle changes in the dropdown
    dropdown.addEventListener("change", function () {
        var selectedValue = dropdown.value;

        // Hide all sections
        document.getElementById("have-id-section").style.display = "none";
        document.getElementById("have-id-section-no").style.display = "none";
        document.getElementById("have-id-section-lost").style.display = "none";
        document.getElementById("have-id-section-nob").style.display = "none";

        // Show the appropriate section based on the selected value
        if (selectedValue === "YES") {
            document.getElementById("have-id-section").style.display = "block";
            document.getElementById("have-id-section-no").style.display = "none";
            document.getElementById("have-id-section-lost").style.display = "none";
            document.getElementById("have-id-section-nob").style.display = "none";
        } else if (selectedValue === "NO") {
            document.getElementById("have-id-section-no").style.display = "block";
            document.getElementById("have-id-section").style.display = "none";
            document.getElementById("have-id-section-lost").style.display = "none";
            document.getElementById("have-id-section-nob").style.display = "none";
        } else if (selectedValue === "LOST") {
            document.getElementById("have-id-section-lost").style.display = "block";
            document.getElementById("have-id-section-no").style.display = "none";
            document.getElementById("have-id-section").style.display = "none";
            document.getElementById("have-id-section-nob").style.display = "none";
        }
        else {
            document.getElementById("have-id-section-nob").style.display = "block";
            document.getElementById("have-id-section-no").style.display = "none";
            document.getElementById("have-id-section-lost").style.display = "none";
            document.getElementById("have-id-section").style.display = "none";
        }
        document.getElementById('input_del_id_question').disabled = true;//recheck this logic
    });
</script>

<script>

    // Function to send a request to the PHP API and update Step 3 info without refreshing
    function verifyPLPInfo() {
        const plpId = document.getElementById('input_id_number').value;
        const surname = document.getElementById('input_id_surname').value;

        // Make an AJAX request to the PHP API
        const xhr = new XMLHttpRequest();
        xhr.open('POST', 'api/fetch_data/check_code.php', true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xhr.onreadystatechange = function () {
            if (xhr.readyState === 4 && xhr.status === 200) {
                const response = JSON.parse(xhr.responseText);

                // Check if the API response indicates success
                if (response.success) {
                    // Disable the input fields
                    document.getElementById('input_id_number').disabled = true;
                    document.getElementById('input_id_surname').disabled = true;

                    // Update the Step 3 fields with the retrieved data
                    document.getElementById('input_del_first_name').value = response.data.firstName;
                    document.getElementById('input_del_middle_name').value = response.data.middleName;
                    document.getElementById('input_del_last_name').value = response.data.lastName;
                    document.getElementById('input_del_gender').value = response.data.gender;
                    document.getElementById('input_del_membership_type').value = response.data.membershipType;
                    document.getElementById('input_del_dob').value = response.data.dateOfBirth;
                    document.getElementById('input_del_constituency').value = response.data.constituency;

                    // Update the image source based on the PLP ID
                    const imageUrl = `https://nextgenplp.com/idbadge/${plpId}.jpg`;
                    document.getElementById('id-image').src = imageUrl;

                    // Show the div when verification is successful
                    document.getElementById('have-id-section-info').style.display = 'block';
                    // Hide the div for failed verification (if shown)
                    document.getElementById('have-id-section-info-false').style.display = 'none';
                } else {
                    alert('Verification failed. Please check your PLP ID and Surname.');
                    // Show the div for failed verification
                    document.getElementById('have-id-section-info-false').style.display = 'block';
                    // Hide the div for successful verification (if shown)
                    document.getElementById('have-id-section-info').style.display = 'none';
                }
            }
        };

        // Send the PLP ID and Surname as POST parameters
        xhr.send(`plpId=${plpId}&surname=${surname}`);
    }

    // Add a click event listener to the "VERIFY YOUR ID" button
    document.getElementById('verify-plp-code').addEventListener('click', function () {
        verifyPLPInfo();
    });
</script>


<script>
    const inputTravelQuestion = document.getElementById('input_travel_question');
    const arrivalSection = document.getElementById('arrival-section');
    //const inputNationality = document.querySelector('[name="input_nationality"]');
    const inputArrivalFlightNumber = document.querySelector('[name="input_arrival_flight_number"]');
    const inputDepartureFlightNumber = document.querySelector('[name="input_departure_flight_number"]');
    const inputHotel = document.querySelector('[name="input_hotel"]');
    const inputArrivalAirline = document.querySelector('[name="input_arrival_airline"]');
    const inputDepartureAirline = document.querySelector('[name="input_departure_airline"]');
    const inputArrivalDateTime = document.querySelector('[name="input_arrival_date_time"]');
    const inputDepartureDateTime = document.querySelector('[name="input_departure_date_time"]');
    // Function to handle the country selection
    function handleTravelQuestionSelection() {
        if (input_travel_question.value === 'No') {
            arrivalSection.style.display = 'none';
            //inputNationality.value = 'Bahamian';
            inputArrivalFlightNumber.value = '';
            inputDepartureFlightNumber.value = '';
            inputArrivalAirline.value = '';
            inputDepartureAirline.value = '';
            inputHotel.value = '';
            inputArrivalDateTime.value = '';
            inputDepartureDateTime.value = '';
            // Remove the 'required' attribute from the hidden inputs
            inputArrivalFlightNumber.removeAttribute('required');
            inputDepartureFlightNumber.removeAttribute('required');
            inputArrivalAirline.removeAttribute('required');
            inputDepartureAirline.removeAttribute('required');
            inputHotel.removeAttribute('required');
            inputArrivalDateTime.removeAttribute('required');
            inputDepartureDateTime.removeAttribute('required');
        } else {
            arrivalSection.style.display = 'block';
            //inputNationality.value = ''; // Reset the value to allow user input
            inputArrivalFlightNumber.value = ''; // Reset the value to allow user input
            inputDepartureFlightNumber.value = ''; // Reset the value to allow user input
            // Add the 'required' attribute back to the inputs
            // inputArrivalFlightNumber.setAttribute('required', 'required');
            // inputDepartureFlightNumber.setAttribute('required', 'required');
        }
    }

    // Add an event listener to the inputCountry element
    inputTravelQuestion.addEventListener('change', handleTravelQuestionSelection);

    // Call the function initially to handle the initial state
    handleTravelQuestionSelection();
</script>




<script>
    function goToHomePage() {
        window.location.href = 'index.php';
    }
</script>





<script>
    const steps = document.querySelectorAll('.step');
    const prevBtn = document.querySelector('.prev-btn');
    const nextBtn = document.querySelector('.next-btn');
    const submitBtn = document.querySelector('.btn-submit');

    let currentStep = 0;

    function showStep(stepIndex) {
        steps.forEach((step, index) => {
            step.style.display = index === stepIndex ? 'block' : 'none';
        });
    }

    function isStepValid() {
        const currentStepInputs = steps[currentStep].querySelectorAll('input[required], select[required], input[type="checkbox"][required]');
        for (const input of currentStepInputs) {
            if (input.type === 'checkbox') {
                if (!input.checked) {
                    return false;
                }
            } else {
                if (!input.value.trim()) {
                    return false;
                }
            }
        }
        return true;
    }

    function goToNextStep() {
        if (currentStep < steps.length - 1) {
            if (isStepValid()) {
                currentStep++;
                showStep(currentStep);
                togglePreviousButton();
                toggleSubmitButton();
            } else {
                // Show a Noty error alert
                new Noty({
                    type: 'error', // Alert type (success, error, warning, info)
                    text: 'Please fill out all required fields before proceeding.',
                    timeout: 8000, // Time the alert will be displayed (in milliseconds)
                    layout: 'topRight', // Set layout to center
                    theme: 'nest', // Use the 'nest' theme, which has a blue color scheme
                }).show();
            }
        }
    }
    function goToPrevStep() {
        if (currentStep > 0) {
            currentStep--;
            showStep(currentStep);
            togglePreviousButton();
            toggleSubmitButton();
        }
    }

    function togglePreviousButton() {
        prevBtn.style.display = currentStep === 0 ? 'none' : 'block';
    }

    function toggleSubmitButton() {
        nextBtn.style.display = currentStep === steps.length - 1 ? 'none' : 'block';
        submitBtn.style.display = currentStep === steps.length - 1 ? 'block' : 'none';
    }

    nextBtn.addEventListener('click', goToNextStep);
    prevBtn.addEventListener('click', goToPrevStep);

    document.getElementById('notify-form').addEventListener('submit', (event) => {
        event.preventDefault();

        if (currentStep === steps.length - 1 && isStepValid()) {
            // Display a success notification using Noty at the top center
            //new Noty({
            //    type: 'success',
            // text: 'Form submitted successfully!',
            // timeout: 8000,
            // layout: 'topRight', // Set the notification position
            // }).show();

            // You can also redirect to another page or perform other actions after successful submission
        } else {
            // Display an error notification using Noty at the top center
            new Noty({
                type: 'error',
                text: 'Please complete all steps before submitting the form.',
                timeout: 8000,
                layout: 'topRight', // Set the notification position
                theme: 'nest', // Use the 'nest' theme, which has a blue color scheme
            }).show();
        }


    });

    // Show the first step initially and hide the "Previous" button
    showStep(currentStep);
    togglePreviousButton();
    toggleSubmitButton();

</script>




<script>
    // Badge Photo preview
    const badgePhotoInput = document.getElementById('input_badge_photo');
    const badgePhotoPreview = document.getElementById('badge_photo_preview');

    badgePhotoInput.addEventListener('change', function () {
        const file = this.files[0];
        if (file) {
            if (/\.(jpg|jpeg|png|gif)$/i.test(file.name) && file.size <= 10 * 1024 * 1024) {
                const reader = new FileReader();
                reader.addEventListener('load', function () {
                    badgePhotoPreview.src = reader.result;
                    badgePhotoPreview.style.display = 'block';
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
            /* The above code is checking if the file name has a .jpg, .jpeg, or .png extension
            (case-insensitive) and if the file size is less than or equal to 5 MB. */
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
</script>

<script>
    function validateEmailDel() {
        const emailInput = document.getElementById('input_email');
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


<style>
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
        width: 75%;
        height: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        background-color: rgba(255, 255, 255, 0.8);
    }


    .step-4,
    .step-5 {
        display: none;
    }

    .button-solid-light-grey {
        background-color: lightgrey;
        /* Add any other styling you need */
    }

    /* Add these styles to your CSS */
    .loading-spinner {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
        justify-content: center;
        align-items: center;
        z-index: 9999;
    }
</style>