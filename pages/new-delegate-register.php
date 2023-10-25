<div class="form-container">
    <h3 class="text-center my-3">
        <div class="logo">
            <img src="assets/images/logo-b.png" alt="Site Logo">
        </div>
    </h3>
    <br>

    <!-- Main Multi-Step Form -->
    <form class="form form-dark notify-form" action="" id="notify-form-new"
        enctype="multipart/form-data">
        <!-- <h3 class="text-center my-3">Conference Registration Form</h3>-->
        <br>

        <!-- Step 1 -->

        <div class="step step-1">
            <center>
                <h3>Information Sharing </h3>
            </center>
            <div class="row">
                <label class="form-control" for="declaration-english"><strong>
                        <p> I, hereby grant authorization to the
                            The Progressive Liberal Party (PLP) to mention my participation in the 55th PLP National
                            Convention, hereinafter referred to as the "Convention," for promotional
                            purposes. This authorization allows the General Secretariat to utilize my name, images, and
                            relevant information in various promotional materials, both physical and digital, with the
                            aim of raising awareness and participation in this significant political event. These
                            promotional materials may include newspaper announcements, reports, websites, social
                            networks, and other
                            appropriate means of publication, encompassing print, audio, photography, video, in-person,
                            or virtual formats. This authorization shall be effective upon submitting this registration
                            form.



                        </p>
                    </strong></label><br><br>
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
                    <label class="form-control" for="plp_selection"><strong>Have you been issued a PLP ID Card?
                            *</label></strong>
                    <select class="form-control" required id="input_new_del_id_question" name="input_new_del_id_question">
                        <option value="" disabled selected>Select an Option</option>
                        <option value="YES">No, I'm a new member / Never issued a PLP ID Card</option>
                        <option value="LOST">Yes, I'm a registered member, but I've misplaced my PLP ID Card</option>
                        <!--- <option value="NO">No, I'm a new member / Never issued a PLP ID Card</option>
                     <option value="NOD">No, I'm registring as a Observer Delegate</option> --->
                    </select>
                    <label class="form-control" for="plp_selection">
                    <h5 class="blue-text">Please Note: All Stalwart Councillors must register at the PLP HQ or Conference Registration Desk.
                           </h5>
                    </label>

                </div>

                <div id="have-id-section">
                    <br>
                    <br>
                    <br>
                    <br>
                    <h3>Step 3: GENERAL INFORMATION</h3>
                    <div class="row">
                        <div class="col-md-1">
                            <label class="form-control" for="input_first_name">ID Photo</label>
                            <img id="id-image" src="https://plpconvention.org/idbadge/unknown.jpg" alt="ID Badge">
                        </div>

                        <div class="col-md-4">
                            <label class="form-control" for="input_first_name">First Name *</label>
                            <input type="text" class="form-control" id="input_new_del_first_name"
                                name="input_new_del_first_name" >


                        </div>
                        <div class="col-md-3">
                            <label class="form-control" for="input_middle_name">Middle Name</label>
                            <input type="text" class="form-control" id="input_new_del_middle_name" 
                                name="input_new_del_middle_name" >

                        </div>
                        <div class="col-md-4">
                            <label class="form-control" for="input_last_name">Last Name *</label>
                            <input type="text" class="form-control" id="input_new_del_last_name" name="input_new_del_last_name"
                                >

                        </div>
                        <div class="col-md-4">
                            <label class="form-control" for="gender">Gender: *</label>
                            <select class="form-control" required id="input_new_del_gender" name="input_new_del_gender">
                                <option value="" disabled selected>Select Gender</option>
                                <option value="MALE">MALE</option>
                                <option value="FEMALE">FEMALE</option>
                            </select>
                        </div>

                        <div class="col-md-4">
                            <label class="form-control" for="gender">Membership Type</label>
                            <select class="form-control"  id="input_new_del_membership_type"
                                name="input_new_del_membership_type">
                                <option value="" disabled selected>Select Membership Type</option>
                                <option value="BRANCH MEMBER">Constituency Branch Member</option>
                                <option value="DIRECT MEMBER">Direct Member</option>
                                

                            </select>


                        </div>
                        <!-- Fifth column -->
                        <div class="col-md-4">
                            <label class="form-control" for="dob">Date of Birth *</label>
                            <input required type="date" id="input_new_del_dob" value="2000-12-31" name="input_new_del_dob"
                                min="1920-01-01" max="2010-12-31">
                        </div>
                        <div class="col-md-4">
                            <label class="form-control" for="Nationality">NIB Number *</label>
                            <input type="number" class="form-control" required id="input_new_del_nib" name="input_new_del_nib">
                        </div>
                        <div class="col-md-4">
                            <label class="form-control" for="country_name">Your Constituency *</label>
                            <select class="form-control" id="input_new_del_constituency" name="input_new_del_constituency"
                                required>
                                <option value="" disabled selected>Select your constituency</option>
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
                        <div class="col-md-4">
                            <label class="form-control" for="Nationality">Affiliated Branch Membership *</label>
                            <select class="form-control" id="input_new_del_affiliated_branch" required
                                name="input_new_del_affiliated_branch">
                                <option value="None" disabled selected> N/A
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
                            <strong>Please choose the main branch to which you are an active member.</strong>
                        </div>
                    </div>


                    <h3>Step 4: ADDRESS & CONTACT INFORMATION</h3>
                    <div class="row">
                    <div class="col-md-4">
                            <label class="form-control" for="input_new_del_house_number">House/Property Number</label>
                            <input type="number" class="form-control" id="input_new_del_house_number" name="input_new_del_house_number"
                            placeholder="10">
                        </div>
                        <div class="col-md-8">
                            <label class="form-control" for="input_new_del_street_address">Home Street Address *</label>
                            <input type="text" class="form-control" id="input_new_del_street_address" name="input_new_del_street_address"
                                required>
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-md-4">
                            <label class="form-control" for="input_new_del_email">Email Address</label>
                            <input type="email" class="form-control" id="input_new_del_email" name="input_new_del_email"
                                >
                        </div>
                        <div class="col-md-4">
                            <label class="form-control" for="input_del_mobile">Mobile Number</label>
                            <input class="form-control" type="text" id="input_new_del_mobile" name="input_new_del_mobile"
                                placeholder="Enter Your Mobile Number"
                                oninput="formatPhoneNumber('input_new_del_mobile'); validatePhoneNumber('input_new_del_mobile')">
                            <div id="input_new_del_mobile-validation"></div>
                        </div>
                        <div class="col-md-4">
                            <label class="form-control" for="input_del_telephone">Telephone Number (Other)</label>
                            <input class="form-control" type="text" id="input_new_del_telephone" name="input_new_del_telephone"
                                placeholder="Enter Your Telephone Number"
                                oninput="formatPhoneNumber('input_new_del_telephone'); validatePhoneNumber('input_new_del_telephone')">
                            <div id="input_new_del_telephone-validation"></div>
                        </div>

                        <div class="col-md-4">
                            <label class="form-control" for="input_del_emergency_name">Emergency Contact Name</label>
                            <input type="text" class="form-control" id="input_new_del_emergency_name"
                                name="input_new_del_emergency_name">

                        </div>

                        <div class="col-md-4">
                            <label class="form-control" for="gender">Contact Relationship</label>
                            <select class="form-control" id="input_new_del_emergency_relationship"
                                name="input_new_del_emergency_relationship">
                                <option value="" disabled selected>Select Relationship</option>
                                <option value="SPOUSE">Spouse</option>
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
                        <!-- Fifth column -->
                        <div class="col-md-4">
                            <label class="form-control" for="input_del_emergency_telephone">Emergency Telephone</label>
                            <input class="form-control" type="text" id="input_new_del_emergency_telephone"
                                name="input_new_del_emergency_telephone" placeholder="Enter Emergency Telephone Number"
                                oninput="formatPhoneNumber('input_new_del_emergency_telephone'); validatePhoneNumber('input_new_del_emergency_telephone')">
                            <div id="input_new_del_emergency_telephone-validation"></div>

                        </div>
                    </div>
                    <h3>Step 5A: CONVENTION REGISTRATION</h3>
                    <div class="row">
                        <div class="col-md-4">
                            <label class="form-control" for="travel_question">Are you voting or observer
                                delegate?</label>
                            <select class="form-control" required id="input_vote_new_del_question"
                                name="input_vote_new_del_question" required>
                                <option value="0" selected>Observer Delegate</option>
                                <option value="1">Voting Delegate</option>
                            </select>
                            <strong>Voting Delegates include elected branch delegates, current/former national party
                                officers, and parliamentary members who have voting eligibility at the
                                convention.</strong>
                        </div>
                        <div class="col-md-4">
                            <label class="form-control" for="travel_question">Enter Branch Code: *</label>
                            <input type="text" class="form-control"  id="input_new_del_branch_id_code"
                               required  name="input_new_del_branch_id_code">
                            <strong>Please enter the unique branch code then press "VERIFY CODE" to proceed to the next
                                step.</strong>
                        </div>

                        <div class="col-md-4">
                            <br>
                            <button width="100%" type="button" id="verify-plp-branch-code-new" name="verify-plp-branch-code-new"
                                class="button-caption button button-solid-light transition-el transition-el-5">VERIFY
                                CODE</button>
                            <br>
                        </div>
                        <div class="col-md-6">
                            <label class="form-control" for="travel_question">Delegate Branch *</label>
                            <input type="text" class="form-control" id="input_vote_new_del_nomination_question"
                                name="input_vote_new_del_nomination_question" required disabled>
                            <strong>Please be aware that your delegate status will undergo verification by The
                                Convention Committee before payment is processed. </strong>
                                
            
                        </div>


                        <div class="col-md-4">
                            <label class="form-control" for="travel_question">Would you like a badge reprint/replacement?</label>
                            <br>

                            <select class="form-control" required id="input_vote_new_del_badge_question"
                                name="input_vote_new_del_badge_question">
                                <option value="1" selected>Yes</option>
                               <!-- <option value="0" selected> No</option>
                                <option value="1">Yes</option> -->
                            </select>
                            <strong>Please Note: New applicants badges are free. </strong>
                        </div>
                        <div class="row">
                            <!-- First column -->
                            <div class="col-md-6">
                                <br>
                                <br>
                                <label class="form-control" for="conference_photo">Upload New Badge Photo ID (JPG IMAGES
                                    ONLY)*</label>
                                <input class="form-control" type="file" accept="image/jpg" id="input_new_del_badge_photo"
                                    name="input_new_del_badge_photo" disabled >
                            </div>
                            <div class="col-md-6">
                                <label class="form-control" for="conference_photo2">Preview</label>
                                <img src="https://plpconvention.org/idbadge/unknown.jpg" alt="Badge Photo Preview" id="new_del_badge_photo_preview"
                                    style="max-width: 150px; max-height: 110px; display: none;">
                                <br>
                            </div>
                        </div>


                    </div>
                    <br>
                    <br>
                    <div class="row">

                        <div class="col-md-3">
                            <label class="form-control" for="travel_new_del_question">Are you traveling to the
                                convention?</label>
                            <select class="form-control" required id="input_new_del_travel_question"
                                name="input_new_del_travel_question">
                                <option value="No" selected> No</option>
                                <option value="Yes">Yes</option>
                            </select>
                        </div>
                        <div class="col-md-8">
                            <label class="form-control" for="travel_question">Do you require ground transportation
                                assistance?</label>
                            <select class="form-control" required id="input_new_del_ground_transportation_question"
                                name="input_new_del_ground_transportation_question">
                                <option value="Yes-Airport">Yes, I require transportation assistance from the Airport
                                </option>
                                <option value="Yes-Constituency">Yes, I require transportation assistance from
                                    Consituency Office (New Providence) </option>
                                <option value="Yes-PLPHQ">Yes, I require transportation assistance from PLP HQ (New
                                    Providence) </option>
                                <option value="No" selected>No, I do not require transportation assistance. </option>

                            </select>
                        </div>
                        <div id="arrival-section" style="display: none;">
                            <h3>STEP 5B: Tentative Arrival, Hotel & Departure Information (OPTIONAL)</h3>

                            <div class="row">
                                <!-- First column -->
                                <div class="col-md-4">
                                    <label class="form-control" for="Arrival_Date">Arrival Date & Time</label>
                                    <input type="datetime-local" id="input_new_del_arrival_date_time"
                                        name="input_new_del_arrival_date_time" value="2023-09-01T19:30" min="2023-08-01T00:00"
                                        max="2023-10-31T00:00" />
                                </div>
                                <!-- Second column -->
                                <div class="col-md-4">
                                    <label class="form-control" for="Airline"> Arrival Airline</label>
                                    <select class="form-control" name="input_new_del_arrival_airline">
                                        <option value="">SELECT AIRLINE</option>
                                        <option value="BAHAMAS AIR">BAHAMAS AIR</option>
                                        <option value="FLAMINGO AIR">FLAMINGO AIR</option>
                                        <option value="LEAIR">LEAIR</option>
                                        <option value="Pineapple Air">Pineapple Air</option>
                                        <option value="Southern Air">Southern Air</option>
                                        <option value="WESTERN AIR">WESTERN AIR</option>
                                        <option value="OTHER">OTHER</option>
                                    </select>
                                </div>
                                <!-- First column -->
                                <div class="col-md-4">
                                    <label class="form-control" for="input_flight_number"> Arrival Flight Number
                                    </label>
                                    <input type="text" class="form-control" name="input_new_del_arrival_flight_number"
                                        id="input_new_del_arrival_flight_number">
                                </div>
                            </div>

                            <div class="row">

                                <h5>Hotel Accommodation</h5>
                                <p>Discount Hotel rates are provided by Brezzers (All Inclusive) & The Baha Mar
                                    Resort<br> <a href="#.pdf" target="_blank"
                                        style="color: blue; font-weight: bold;">Click here</a> for more information.</p>
                                <br>
                                <div class="col-md-8">
                                    <select class="form-control" name="input_new_del_hotel">
                                        <option value="">SELECT HOTEL</option>
                                        <option value="A STONE'S THROW AWAY">A STONE'S THROW AWAY</option>
                                        <option value="ALBANY RESORT">ALBANY RESORT</option>
                                        <option value="ARAWAK INN">ARAWAK INN</option>
                                        <option value="ATLANTIS BEACH & CORAL TOWERS">ATLANTIS BEACH & CORAL TOWERS
                                        </option>
                                        <option value="ATLANTIS ROYAL TOWERS">ATLANTIS ROYAL TOWERS</option>
                                        <option value="BAYVIEW SUITES PARADISE ISLAND">BAYVIEW SUITES PARADISE ISLAND
                                        </option>
                                        <option value="BREEZES BAHAMAS RESORT & SPA">BREEZES BAHAMAS RESORT & SPA
                                        </option>
                                        <option value="BRITISH COLONIAL HOTEL">BRITISH COLONIAL HOTEL</option>
                                        <option value="CASUARINAS OF CABLE BEACH">CASUARINAS OF CABLE BEACH</option>
                                        <option value="CLUB LAND">CLUB LAND</option>
                                        <option value="COLONY CLUB INN & SUITES">COLONY CLUB INN & SUITES</option>
                                        <option value="COMFORT SUITES PARADISE ISLAND">COMFORT SUITES PARADISE ISLAND
                                        </option>
                                        <option value="COMPASS POINT BEACH RESORT">COMPASS POINT BEACH RESORT</option>
                                        <option value="CORAL HARBOUR BEACH HOUSE & VILLAS">CORAL HARBOUR BEACH HOUSE &
                                            VILLAS</option>
                                        <option value="COURTYARD MARRIOT">COURTYARD MARRIOT</option>
                                        <option value="DEANA SMITH GUEST HOUSE">DEANA SMITH GUEST HOUSE</option>
                                        <option value="DORAN'S HOTEL & CAFÉ">DORAN'S HOTEL & CAFÉ</option>
                                        <option value="EL GRECO HOTEL">EL GRECO HOTEL</option>
                                        <option value="GLOWELL MOTEL VILLAS RESORT">GLOWELL MOTEL VILLAS RESORT</option>
                                        <option value="GRAND HYATT BAHA MAR">GRAND HYATT BAHA MAR</option>
                                        <option value="GRAYCLIFF HOTEL">GRAYCLIFF HOTEL</option>
                                        <option value="HARBORSIDE RESORT AT ATLANTIS">HARBORSIDE RESORT AT ATLANTIS
                                        </option>
                                        <option value="HIBISCUS INN GUEST HOUSE">HIBISCUS INN GUEST HOUSE</option>
                                        <option value="HOLIDAY INN EXPRESS & SUITES">HOLIDAY INN EXPRESS & SUITES
                                        </option>
                                        <option value="KENTUCKY SPRINGS MOTEL">KENTUCKY SPRINGS MOTEL</option>
                                        <option value="LANDSHARK HOTEL & DIVE RESORT">LANDSHARK HOTEL & DIVE RESORT
                                        </option>
                                        <option value="LYFORD CAY CLUB (PRIVATE CLUB)">LYFORD CAY CLUB (PRIVATE CLUB)
                                        </option>
                                        <option value="MARGARITAVILLE BEACH RESORT">MARGARITAVILLE BEACH RESORT</option>
                                        <option value="MARLEY RESORT & SPA">MARLEY RESORT & SPA</option>
                                        <option value="MELIA NASSAU BEACH RESORT">MELIA NASSAU BEACH RESORT</option>
                                        <option value="MORRIS MOTEL">MORRIS MOTEL</option>
                                        <option value="NASSAU HARBOUR CLUB AND MARINA">NASSAU HARBOUR CLUB AND MARINA
                                        </option>
                                        <option value="OCEAN WEST BOUTIQUE HOTEL">OCEAN WEST BOUTIQUE HOTEL</option>
                                        <option value="ORANGE HILL BEACH INN">ORANGE HILL BEACH INN</option>
                                        <option value="PARADISE HARBOUR CLUB & MARINA">PARADISE HARBOUR CLUB & MARINA
                                        </option>
                                        <option value="PARADISE ISLAND BEACH CLUB">PARADISE ISLAND BEACH CLUB</option>
                                        <option value="RIU PALACE PARADISE ISLAND">RIU PALACE PARADISE ISLAND</option>
                                        <option value="ROSEWOOD BAHA MAR">ROSEWOOD BAHA MAR</option>
                                        <option value="SANDALS ROYAL BAHAMIAN SPA RESORT">SANDALS ROYAL BAHAMIAN SPA
                                            RESORT</option>
                                        <option value="SANDYPORT BEACH RESORT">SANDYPORT BEACH RESORT</option>
                                        <option value="SIR CHARLES HOTEL">SIR CHARLES HOTEL</option>
                                        <option value="SIVANANDA ASHRAM YOGA RETREAT">SIVANANDA ASHRAM YOGA RETREAT
                                        </option>
                                        <option value="SLS BAHA MAR">SLS BAHA MAR</option>
                                        <option value="SMITH'S MOTEL NO. 1">SMITH'S MOTEL NO. 1</option>
                                        <option value="SMITH'S MOTEL NO. 2">SMITH'S MOTEL NO. 2</option>
                                        <option value="SUN FUN RESORTS">SUN FUN RESORTS</option>
                                        <option value="SUNRISE BEACH CLUB & VILLAS">SUNRISE BEACH CLUB & VILLAS</option>
                                        <option value="SUNSHINE PARADISE SUITES">SUNSHINE PARADISE SUITES</option>
                                        <option value="THE COVE">THE COVE</option>
                                        <option value="THE ISLAND HOUSE NASSAU">THE ISLAND HOUSE NASSAU</option>
                                        <option value="THE OCEAN CLUB, A FOUR SEASONS RESORT">THE OCEAN CLUB, A FOUR
                                            SEASONS RESORT</option>
                                        <option value="THE ORCHARD GARDEN HOTEL">THE ORCHARD GARDEN HOTEL</option>
                                        <option value="THE REEF">THE REEF</option>
                                        <option value="TOWNE HOTEL">TOWNE HOTEL</option>
                                        <option value="WARWICK PARADISE ISLAND">WARWICK PARADISE ISLAND</option>
                                        <option value="WESTWIND CLUB ASSOC. LTD.">WESTWIND CLUB ASSOC. LTD.</option>
                                        <option value="WESTWIND II CLUB">WESTWIND II CLUB</option>

                                    </select>
                                </div>
                                <!-- Second column -->

                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <label class="form-control" for="Departure_date">Departure Date & Time
                                    </label>
                                    <input type="datetime-local" id="input_new_del_departure_date_time"
                                        name="input_new_del_departure_date_time" value="2023-09-01T19:30" min="2023-08-01T00:00"
                                        max="2023-10-31T00:00" />
                                </div>
                                <!-- First column -->
                                <div class="col-md-4">
                                    <label class="form-control" for="Airline"> Departure Airline </label>
                                    <select class="form-control" name="input_new_del_departure_airline">
                                        <option value="">SELECT AIRLINE</option>
                                        <option value="BAHAMAS AIR">BAHAMAS AIR</option>
                                        <option value="FLAMINGO AIR">FLAMINGO AIR</option>
                                        <option value="LEAIR">LEAIR</option>
                                        <option value="Pineapple Air">Pineapple Air</option>
                                        <option value="Southern Air">Southern Air</option>
                                        <option value="WESTERN AIR">WESTERN AIR</option>
                                        <option value="OTHER">OTHER</option>
                                    </select>

                                </div>
                                <!-- Second column -->
                                <div class="col-md-4">
                                    <label class="form-control" for="input_departure_flight_number">Departure
                                        Flight Number </label>
                                    <input type="text" class="form-control" name="input_new_del_departure_flight_number"
                                        id="input_new_del_departure_flight_number">
                                </div>
                            </div>
                        </div>

                        <h3>Step 6: CONVENTION PAYMENT INSTRUCTIONS</h3>
                        <strong>Please keep your receipt/s for proof of payment.</strong>
                        <div class="row">
                            <div class="col-md-4">
                                <label class="form-control" for="travel_question">Preferred Payment Method *</label>
                                <select class="form-control" required id="input_new_del_pay_method_question"
                                    name="input_new_del_pay_method_question" onchange="showPaymentInstructionsNew()">
                                    <option value="" selected>Select Method</option>
                                    <option value="Cash">CASH (PLP HQ)</option>
                                    <option value="Bank">BANK WIRE TRANSFER</option>
                                    <option value="Paid via Branch">PAID WITH BRANCH</option>
                                </select>
                            </div>
                        </div>

                        <div id="payment-instructions-bank-new" style="display: none;">
                            <div class="row">
                                <br>
                                <br>
                                <div class="col-md-4">
                                    <label class="form-control" for="travel_question">Bank Name</label>
                                    <select class="form-control" id="input_new_del_bank_name_question" disabled
                                        name="input_new_del_bank_name_question">

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
                                    <input type="text" class="form-control" name="input_new_del_bank_account_name" disabled
                                        id="input_new_del_bank_account_name" value="Progressive Liberal">
                                </div>
                                <div class="col-md-4">
                                    <label class="form-control" for="travel_question">Account Number</label>
                                    <input type="text" class="form-control" name="input_new_del_bank_account_number" disabled
                                        id="input_new_del_bank_account_number" value="1260642">
                                </div>
                                <div class="col-md-4">
                                    <label class="form-control" for="travel_question">Bank ABA Number</label>
                                    <input type="text" class="form-control" name="input_new_del_ABA_Number" disabled
                                        id="input_new_del_ABA_Number" value="290670101">
                                </div>

                                <div class="col-md-4">
                                    <label class="form-control" for="travel_question">Branch Location & Number</label>
                                    <input type="text" class="form-control" name="input_new_del_branch_location" disabled
                                        id="input_new_del_ABA_Number" value="JFK - 29067 | Nassau, Bahamas">
                                </div>
                            </div>
                        </div>
                        <div id="payment-instructions-cash-new" style="display: none;">
                            <div class="col-md-8">
                                <label class="form-control" for="travel_question">Instructions</label>
                                <textarea class="form-control" name="input_new_del_cash_instructions" readonly
                                    id="input_new_del_cash_instructions">Please make your payment at the PLP HQ and remember to retain your receipt. A registration clerk will be available to assist with processing your registration package.</textarea>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <label class="form-control" for="travel_question">Total Cost</label>
                            <input type="text" class="form-control" name="input_new_del_total_cost" disabled
                                id="input_new_del_total_cost">
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-1">
                            <input type="checkbox" id="new_del_declaration" name="new_del_declaration" required>
                        </div>
                        <div class="col-md-10">
                            <label class="form-control" for="declaration"><strong>By checking this box, I confirm that
                                    the
                                    information provided is
                                    accurate and complete. I understand that my registration is subject to approval and
                                    that any
                                    inaccurate or incomplete information may result in the rejection of my registration
                                    request.
                                    I also agree to comply with the rules and guidelines of the convention and any
                                    related
                                    events.</strong></label><br><br>
                        </div>
                    </div>

                </div>

                <div id="have-id-section-no" style="display: none;">This is the section for new members.</div>

                <div id="have-id-section-lost" style="display: none;">

                    <h3>
                        Manual registration is required. Kindly visit our headquarters or the registration desk with a
                        valid photo ID to complete the process.</h3>
                </div>


                <!-- SECTION FOR OBSERVER DELEGATES ONLY-->
                <div id="have-id-section-nob" style="display: none;">







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

            <input type="submit" id="submit-button-new"
                class="btn-submit button-caption button button-solid-light transition-el  transition-el-5"
                value="SUBMIT REGISTRATION">

            <input type="button"
                class="btn-gohome button-caption button button-solid-light-grey transition-el transition-el-5"
                value="GO BACK TO HOME" id="go-back-button-new" onclick="goToHomePage()">
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
        //document.getElementById('submit-button').style.display = 'none';

    });

</script>

<script>
    // Get the dropdown element
    var dropdownIDQuestionNew = document.getElementById("input_new_del_id_question");

    // Add an event listener to handle changes in the dropdown
    dropdownIDQuestionNew.addEventListener("change", function () {
        var selectedValue = dropdownIDQuestionNew.value;

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
       // document.getElementById('input_new_del_id_question').disabled = true;//recheck this logic
    });

</script>

<script>

    // Get references to the input elements
var nominationQuestionInput = document.getElementById("input_vote_new_del_nomination_question");
var hiddenInput = document.getElementById("input_vote_new_del_nomination_question_hidden");

// Check if both input elements exist
if (nominationQuestionInput && hiddenInput) {
  // Function to update the visible input when the hidden input changes
  function updateVisibleInput() {
    nominationQuestionInput.value = hiddenInput.value;
  }

  // Add an event listener to the hidden input to detect changes
  hiddenInput.addEventListener("change", updateVisibleInput);

  // Call the update function initially to ensure the initial value is copied
  updateVisibleInput();
}

   // document.addEventListener("DOMContentLoaded", function () {
      //  var dropdownDelQuestionNew = document.getElementById("input_vote_new_del_nomination_question");
      //  var inputDelNominationQuestion = document.getElementById("input_vote_new_del_nomination_question");
     //   var inputBranchCode = document.getElementById("input_new_del_branch_id_code");
        //var buttonVerify = document.getElementById("verify-plp-branch-code");


        // Add an event listener to handle changes in the dropdown
       // dropdownDelQuestionNew.addEventListener("change", function () {
       //     var selectedValue = dropdownDelQuestionNew.value;

       //     if (selectedValue === "0") {
       //         inputDelNominationQuestion.disabled = true;
       //         inputDelNominationQuestion.removeAttribute("required");
       //         inputDelNominationQuestion.value = "";
       //         inputBranchCode.disabled = true;
       //         inputBranchCode.removeAttribute("required");
       //         inputBranchCode.value = "";


           // } else {
                //inputDelNominationQuestion.disabled = false;
           //     inputBranchCode.disabled = false;
                //buttonVerify.disabled = false;
          //      inputBranchCode.setAttribute("required", "required");
               // inputDelNominationQuestion.setAttribute("required", "required");
          //  }
       // });
    //});

</script>

<script>
    var dropdownBadgeQuestionNew = document.getElementById("input_vote_new_del_badge_question");
    var inputBadgeUploadNew = document.getElementById("input_new_del_badge_photo");

    // Add an event listener to handle changes in the dropdown
    dropdownBadgeQuestionNew.addEventListener("change", function () {
        var selectedValue = dropdownBadgeQuestionNew.value;

        if (selectedValue === "0") {
            inputBadgeUploadNew.disabled = true;
            inputBadgeUploadNew.removeAttribute("required");
            inputBadgeUploadNew.value = "";

        } else {
            inputBadgeUploadNew.disabled = false;
            inputBadgeUploadNew.setAttribute("required", "required");
        }
    });

</script>

<script>
    document.getElementById('verify-plp-branch-code-new').addEventListener('click', verifyPLPBranchInfo);

    function verifyPLPBranchInfo() {
        // Get the input values
        const branchCode = document.getElementById('input_new_del_branch_id_code').value;

        // Check if the input values are empty
        if (branchCode.trim() === '') {
            alert('Please enter the branch code.');
            return;
        }

        // Create a FormData object with the POST data
        const formData = new FormData();
        formData.append('input_new_del_branch_id_code', branchCode);


        // Make an AJAX request to the PHP API using the Fetch API
        fetch('api/fetch_data/check_branch_code.php', {
            method: 'POST',
            body: formData,
        })
            .then(response => response.json())
            .then(response => {
                if (response.success) {
                    new Noty({
                        type: 'success',
                        text: 'Code verification successful!',
                        timeout: 3000 // Optional: Set the alert to automatically close after 3 seconds
                    }).show();
                    // Disable the input fields
                    document.getElementById('input_new_del_branch_id_code').disabled = true;

                    // Update the form fields with the retrieved data
                    document.getElementById('input_vote_new_del_nomination_question').value = response.data.name;

                } else {
                    // Code verification failed
                    new Noty({
                        type: 'error',
                        text: response.message,
                        timeout: 3000
                    }).show();

                    document.getElementById('input_vote_new_del_nomination_question').value = "0";
                    document.getElementById('input_vote_new_del_nomination_question').value = "";
                    document.getElementById('input_new_del_branch_id_code').value = "";
                   // document.getElementById('input_new_del_branch_id_code').disabled = true;

                }
            })
            .catch(error => {
                new Noty({
                    type: 'error',
                    text: 'Error occurred. Please try again later.',
                    timeout: 3000
                }).show();
                console.error('Error:', error);
            });
    }


</script>




<script>
    const inputTravelQuestionNew = document.getElementById('input_new_del_travel_question');
    const arrivalSectionNew = document.getElementById('arrival-section');
    //const inputNationality = document.querySelector('[name="input_nationality"]');
    const inputArrivalFlightNumberNew = document.querySelector('[name="input_new_del_arrival_flight_number"]');
    const inputDepartureFlightNumberNew = document.querySelector('[name="input_new_del_departure_flight_number"]');
    const inputHotelNew = document.querySelector('[name="input_new_del_hotel"]');
    const inputArrivalAirlineNew = document.querySelector('[name="input_new_del_arrival_airline"]');
    const inputDepartureAirlineNew = document.querySelector('[name="input_new_del_departure_airline"]');
    const inputArrivalDateTimeNew = document.querySelector('[name="input_new_del_arrival_date_time"]');
    const inputDepartureDateTimeNew = document.querySelector('[name="input_new_del_departure_date_time"]');
    // Function to handle the country selection
    function handleTravelQuestionSelection() {
        if (input_new_del_travel_question.value === 'No') {
            arrivalSectionNew.style.display = 'none';
            //inputNationality.value = 'Bahamian';
            inputArrivalFlightNumberNew.value = '';
            inputDepartureFlightNumberNew.value = '';
            inputArrivalAirlineNew.value = '';
            inputDepartureAirlineNew.value = '';
            inputHotelNew.value = '';
            inputArrivalDateTimeNew.value = '';
            inputDepartureDateTimeNew.value = '';
            // Remove the 'required' attribute from the hidden inputs
            inputArrivalFlightNumberNew.removeAttribute('required');
            inputDepartureFlightNumberNew.removeAttribute('required');
            inputArrivalAirlineNew.removeAttribute('required');
            inputDepartureAirlineNew.removeAttribute('required');
            inputHotelNew.removeAttribute('required');
            inputArrivalDateTimeNew.removeAttribute('required');
            inputDepartureDateTimeNew.removeAttribute('required');
        } else {
            arrivalSectionNew.style.display = 'block';
            //inputNationality.value = ''; // Reset the value to allow user input
            inputArrivalFlightNumberNew.value = ''; // Reset the value to allow user input
            inputDepartureFlightNumberNew.value = ''; // Reset the value to allow user input
            // Add the 'required' attribute back to the inputs
            // inputArrivalFlightNumberNew.setAttribute('required', 'required');
            // inputDepartureFlightNumberNew.setAttribute('required', 'required');
        }
    }

    // Add an event listener to the inputCountry element
    inputTravelQuestionNew.addEventListener('change', handleTravelQuestionSelection);

    // Call the function initially to handle the initial state
    handleTravelQuestionSelection();
</script>

<script>
    function goToHomePage() {
        window.location.href = 'index.php';
    }
</script>

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
    function validateFile() {
    const fileInput = document.getElementById('input_new_del_badge_photo');
    const filePath = fileInput.value;
    
    // Check file extension
    const allowedExtensions = /(\.jpg)$/i;
    if (!allowedExtensions.exec(filePath)) {
        alert('Please upload a .jpg image file only.');
        fileInput.value = '';
        return false;
    }
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

    document.getElementById('notify-form-new').addEventListener('submit', (event) => {
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
    //toggleSubmitButton();

</script>




<script>
    // Badge Photo preview
    const badgePhotoInputNew = document.getElementById('input_new_del_badge_photo');
    const badgePhotoPreviewNew = document.getElementById('new_del_badge_photo_preview');

    badgePhotoInputNew.addEventListener('change', function () {
        const file = this.files[0];
        if (file) {
            if (/\.(jpg|jpeg|png|gif)$/i.test(file.name) && file.size <= 10 * 1024 * 1024) {
                const reader = new FileReader();
                reader.addEventListener('load', function () {
                    badgePhotoPreviewNew.src = reader.result;
                    badgePhotoPreviewNew.style.display = 'block';
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
                badgePhotoPreviewNew.src = '';
                badgePhotoPreviewNew.style.display = 'none';
            }


        }
    });


    // Gov-ID preview
    const govIdInputNew = document.getElementById('gov_id');
    const govIdPreviewNew = document.getElementById('gov_id_preview');

    govIdInputNew.addEventListener('change', function () {
        const file = this.files[0];
        if (file) {
            /* The above code is checking if the file name has a .jpg, .jpeg, or .png extension
            (case-insensitive) and if the file size is less than or equal to 5 MB. */
            if (/\.(jpe?g|png)$/i.test(file.name) && file.size <= 5 * 1024 * 1024) {
                const reader = new FileReader();
                reader.addEventListener('load', function () {
                    govIdPreviewNew.src = reader.result;
                    govIdPreviewNew.style.display = 'block';
                });
                reader.readAsDataURL(file);
            } else {
                alert('Please select a PNG or JPG image not exceeding 5MB in size.');
                this.value = ''; // Reset the file input to allow re-selection
                govIdPreviewNew.src = '';
                govIdPreviewNew.style.display = 'none';
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

<script>
    var dropdownIDQuestionNew = document.getElementById("input_new_del_id_question");
    var dropdownBadgeQuestionNew = document.getElementById("input_vote_new_del_badge_question");
    var inputTotalCostNew = document.getElementById("input_new_del_total_cost");
    var dropdownDelQuestionNew = document.getElementById("input_vote_new_del_question");
   
    // Add event listeners to handle changes in the dropdowns
    dropdownIDQuestionNew.addEventListener("change", updateTotalCost);
    dropdownBadgeQuestionNew.addEventListener("change", updateTotalCost);
    dropdownDelQuestionNew.addEventListener("change", updateTotalCost);

    function updateTotalCost() {
        var idQuestionValue = dropdownIDQuestionNew.value;
        var delQuestion = dropdownDelQuestionNew.value;
        var badgeQuestionValue = dropdownBadgeQuestionNew.value;


        var baseCost = 25.00;

        // Check if delQuestionValue is "Yes" and update the base cost accordingly
        if (delQuestion === "1") {
            baseCost = 50.00;
        }

        // Check if badgeQuestionValue is "1" and add $5 to the base cost
        if (badgeQuestionValue === "1") {
            baseCost += 0.00;
        }

        // Update the total cost in the input field
        inputTotalCostNew.value = "$" + baseCost.toFixed(2);
    }

    // Initialize the total cost when the page loads
    updateTotalCost();


</script>

<script>
    function showPaymentInstructionsNew() {
        var selectedPaymentMethodNew = document.getElementById("input_new_del_pay_method_question").value;
        var cashInstructionsNew = document.getElementById("payment-instructions-cash-new");
        var bankInstructionsNew = document.getElementById("payment-instructions-bank-new");

        if (selectedPaymentMethodNew === "Cash") {
            cashInstructionsNew.style.display = "block";
            bankInstructionsNew.style.display = "none";
        } else if (selectedPaymentMethodNew === "Bank") {
            cashInstructionsNew.style.display = "none";
            bankInstructionsNew.style.display = "block";
        }
    }
</script>


<script>
    document.getElementById('notify-form-new').addEventListener('submit', async (event) => {
        event.preventDefault();

        const submitButton = document.getElementById('submit-button-new');
        const disabledFields = document.querySelectorAll('[disabled]');
        const formData = new FormData(event.target);
        submitButton.disabled = true;
        // Enable the disabled fields temporarily and add them to formData
        disabledFields.forEach((field) => {
            field.disabled = false;
            formData.append(field.name, field.value);
        });

        try {
            // Additional validation (if needed)
            // Make sure currentStep, steps, isStepValid are defined elsewhere
            if (currentStep === steps.length - 1 && isStepValid()) {
                $.ajax({
                    url: 'api/insert/add_new_delegate_record.php',
                    type: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    dataType: 'json',
                    success: function (response) {
                        if (response.status === "success") {
                            // alert('Success! ' + response.message);
                            
                            window.location.href = 'index.php?message=Congratulations, your registration is complete! Please proceed to make your payment at the registration desk.';
                        } else {
                            alert('Error! ' + response.message);
                        }
                    },
                    error: function (jqXHR, textStatus, errorThrown) {
                        alert('Error occurred while submitting the form: ' + textStatus + ': ' + errorThrown);
                        if (jqXHR.responseJSON && jqXHR.responseJSON.sql_error) {
                            alert('SQL Error: ' + jqXHR.responseJSON.sql_error);
                        }
                    }
                });
            } else {
                alert('Please complete the form before submitting.');
            }
        } catch (err) {
            console.error('An error occurred:', err.message);
            alert('An unexpected error occurred.');
        } finally {
            // Re-disable the previously disabled fields
            disabledFields.forEach((field) => {
                field.disabled = true;
            });
            submitButton.disabled = false;
        }
    });

</script>
















<style>
    .blue-text {
        color: blue;
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