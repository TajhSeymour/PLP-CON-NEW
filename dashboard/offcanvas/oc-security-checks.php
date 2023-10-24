<div class="offcanvas-header">
  <h1 id="offcanvasSecurityLabel">{First & Last Name}</h1>
  <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  <p id="displayedId">ID will be displayed here</p>
  <p id="displayGovID">ID will be displayed here</p>


</div>
<div class="offcanvas-body">
  <!-- Responsive Images -->
  <center>
    <h4>Badge Photo</h4>
  </center>
  <div class="img-container-photo">
    <!-- The image will be inserted here by the JavaScript code -->
  </div>
  <form id="update-staff-info-form" class="tablelist-form" autocomplete="off">
    <div class="modal-body">
      <div class="row g-3">
        <br>
        <center>
          <h4>General Information</h4>
        </center>
        <div>
          <input type="hidden" name="input_userid" id="input_userid" />
        </div>

        <div class="mb-3">
        <label for="oc_first_name" class="form-label">Process Priority"</label>
          <select class="form-control" data-plugin="choices" name="oc_priority" id="oc_priority">
            <option value="high">HIGH</option>
            <option value="medium">MEDIUM</option>
            <option  value="normal">NORMAL</option>
          </select>
        </div>

        <div class="mb-3">
          <label for="oc_first_name" class="form-label">First Name:</label>
          <input type="text" class="form-control" id="oc_first_name" name="oc_first_name" disabled>
        </div>

        <div class="mb-3">
          <label for="oc_middle_name" class="form-label">Middle Name:</label>
          <input type="text" class="form-control" id="oc_middle_name" name="oc_middle_name" disabled>
        </div>

        <div class="mb-3">
          <label for="oc_last_name" class="form-label">Last Name:</label>
          <input type="text" class="form-control" id="oc_last_name" name="oc_last_name" disabled>
        </div>

        <div class="mb-3">
        <label for="oc_last_name" class="form-label">Gender: </label>
          <select class="form-control" data-plugin="choices" name="oc_gender" id="oc_gender" required>
            <option value="">Select Gender</option>
            <option value="MALE">MALE</option>
            <option value="FEMALE">FEMALE</option>
          </select>
        </div>

        <div class="mb-3">
          <label for="oc_dob" class="form-label">Date of Birth</label>
          <input type="date" class="form-control" id="oc_dob" name="oc_dob" data-provider="flatpickr"
            data-date-format="Y-m-d" placeholder="Please enter your date of birth" required />
        </div>

        <div class="mb-3">
          <label for="nib_number" class="form-label">NIB Number</label>
          <input type="number" class="form-control" id="oc_nib_number" name="oc_nib_number">
        </div>

        <div class="mb-3">
          <label for="membership_type" class="form-label">Membership Type</label>
          <select class="form-control" data-plugin="choices" name="oc_membership_type" id="oc_membership_type" required>
            <option value="DIRECT MEMEBER">Direct Memeber</option>
            <option value="STALWART COUNCILLOR">Stalwart Councillor</option>
            <option value="LIFETIME MEMBER">Lifetime Member</option>
          </select>
        </div>

        <div class="mb-3">
          <label for="constitution" class="form-label">Current Constituency</label>
          <select class="form-control" data-plugin="choices" name="oc_constituency" id="oc_constituency" required>
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

        <div class="mb-3">
          <label for="house_number" class="form-label">House Number</label>
          <input type="number" class="form-control" id="oc_house_number" name="oc_house_number">
        </div>


        <div class="mb-3">
          <label for="street_name" class="form-label">Street Address</label>
          <input type="text" class="form-control" id="oc_street_address" name="oc_street_address">
        </div>

        <div class="mb-3">
          <label for="membership_type" class="form-label">Affiliated Branch</label>
          <select class="form-control" data-plugin="choices" name="oc_affiliated_branch" id="oc_affiliated_branch"
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


        <div class="mb-3">
          <label for="oc_email" class="form-label">Email Address</label>
          <input type="email" class="form-control" id="oc_email_address" name="oc_email_address">
        </div>

        <div class="mb-3">
          <label for="oc_mobile" class="form-label">Mobile Number</label>
          <input type="text" class="form-control" id="oc_mobile_number" name="oc_mobile_number"
            placeholder="Enter Your Mobile Number"
            oninput="formatPhoneNumber('oc_mobile_number'); validatePhoneNumber('oc_mobile_number')">
          <div id="oc_mobile_number-validation"></div>
        </div>

        <div class="mb-3">
          <label for="oc_mobile" class="form-label">Telephone Number (Other)</label>
          <input type="text" class="form-control" id="oc_telephone_number" name="oc_telephone_number"
            placeholder="Enter Your Mobile Number"
            oninput="formatPhoneNumber('oc_telephone_number'); validatePhoneNumber('oc_telephone_number')">
          <div id="oc_telephone_number-validation"></div>
        </div>

        <div class="mb-3">
          <label for="oc_emergency_contact_name" class="form-label">Emergency Contact Name</label>
          <input type="text" class="form-control" id="oc_emergency_contact_name" name="oc_emergency_contact_name">
        </div>

        <div class="mb-3">
          <label for="oc_emergency_contact_name" class="form-label">Emergency Contact Relationship</label>
          <select class="form-control" id="oc_emergency_contact_name" name="oc_emergency_contact_name">
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

        <div class="mb-3">
          <label for="oc_mobile" class="form-label">Emergency Telephone Number</label>
          <input type="text" class="form-control" id="oc_emergency_contact_telephone_number" name="oc_emergency_contact_telephone_number"
            placeholder="Enter Your Mobile Number"
            oninput="formatPhoneNumber('oc_emergency_contact_telephone_number'); validatePhoneNumber('oc_emergency_contact_telephone_number')">
          <div id="oc_emergency_contact_telephone_number-validation"></div>
        </div>


        <div class="mb-3">
          <label for="oc_dob" class="form-label">Registration Date</label>
          <input type="date" class="form-control" id="oc_date" name="oc_date" data-provider="flatpickr"
            data-date-format="Y-m-d" disabled />
        </div>

        <div class="d-grid gap-2">
          <button name="add-notes-btn" id="add-notes-btn" class="btn btn-dark waves-effect waves-light"
            type="button">ADD NOTES</button>
          <button name="view-notes-btn" id="view-notes-btn" class="btn btn-dark waves-effect waves-light"
            data-bs-toggle="modal" data-bs-target="#notesModel" type="button">VIEW NOTES</button>
          <button name="approve-btn" id="approve-btn" class="btn btn-success waves-effect waves-light"
            type="button">APPROVE APPLICANT</button>
          <button name="deny-btn" id="deny-btn" class="btn btn-danger waves-effect waves-light" type="button">DENY
            APPLICANT</button>
        </div>
      </div>
    </div>

  </form>




</div>



<script>
  // Select the node that will be observed for mutations
  const targetNode = document.getElementById('displayedId');

  // Options for the observer (which mutations to observe)
  const config = { attributes: false, childList: true, subtree: false };

  // Callback function to execute when mutations are observed
  const callback = function (mutationsList, observer) {
    for (let mutation of mutationsList) {
      if (mutation.type === 'childList') {
        // The innerText of displayedId has changed
        let userID = targetNode.innerText;

        // Construct the photo URL using the userID
        let photoURL = `https://plpconvention.org/idbadge/${userID}.jpg`;

        // Update the .img-container-photo with the new photo image
        let photoContainer = document.querySelector(".img-container-photo");
        photoContainer.innerHTML = `<img src="${photoURL}" alt="Photo of user ${userID}">`;

        // If you still want to fetch the govid image from the API, 
        // you can retain that portion of the code here.
      }
    }
  };

  // Create an observer instance linked to the callback function
  const observer = new MutationObserver(callback);

  // Start observing the target node for configured mutations
  observer.observe(targetNode, config);

</script>




<!-- Reset Password Script -->
<script>

  //APPROVE APPLICANT'S REGISTRATION
  document.getElementById("approve-btn").addEventListener("click", function () {
    // Get the UserID from the displayedId element
    const userID = document.getElementById("displayedId").innerText;

    // Show the SweetAlert with the icon and the reset confirmation
    Swal.fire({
      icon: "question", // Icon "
      title: "Approve Applicant",
      text: `Are you sure that you want to clear this officer's registration?`,
      showCancelButton: true,
      confirmButtonText: "Confirm",
      cancelButtonText: "Cancel",
    }).then((result) => {
      if (result.isConfirmed) {
        // Call the API to reset the password with the obtained userID
        callApprovedRegAPI(userID);
      }
    });
  });

  function callApprovedRegAPI(userID) {
    // Make the API call to egistrant-security-check api passing the userID
    // Implement your API call here, using fetch, Axios, or any other method you prefer
    // Example using fetch:
    fetch("/api/dashboard/update/local_staff_security_check_approved.php", {
      method: "POST", // Use the appropriate method for your API
      body: JSON.stringify({
        userID
      }), // Send the userID in the request body
      headers: {
        "Content-Type": "application/json",
      },
    })
      .then((response) => response.json())
      .then((data) => {
        // Handle the response from the API if necessary
        // For example, show a success message using SweetAlert
        Swal.fire({
          icon: "success",
          title: "Security Clearance Completed!",
          text: "Registrant is now cleared to particpate!",
        }).then(() => {
          // Reload the page after the success message is closed
          window.location.reload();
        });
      })
      .catch((error) => {
        // Handle any errors that occur during the API call
        console.error("Error in security check approval:", error);
        // Show an error message using SweetAlert
        Swal.fire({
          icon: "error",
          title: "Error",
          text: "An error occurred while approving registrant's application. Please try again later.",
        });
      });
  }
</script>

<script>
  // DELETE OFFICER ACCOUNT
  document.getElementById("deny-btn").addEventListener("click", function () {
    // Get the UserID from the displayedId element
    const userID = document.getElementById("displayedId").innerText;

    // Show the SweetAlert with the icon and the delete confirmation
    Swal.fire({
      icon: "question", // Icon "Warning"
      title: "Deny Registrant",
      text: `Are you sure that you want to deny this registration?`,
      showCancelButton: true,
      confirmButtonText: "Confirm",
      cancelButtonText: "Cancel",
      dangerMode: true,
    }).then((result) => {
      if (result.isConfirmed) {
        // Call the API to delete the officer's account with the obtained userID
        callDeleteOfficerAPI(userID);
      }
    });
  });

  function callDeleteOfficerAPI(userID) {
    // Make the API call to delete the officer's account using DELETE method
    // Implement your API call here, using fetch, Axios, or any other method you prefer
    // Example using fetch:
    fetch("/api/dashboard/update/local_staff_security_check_denied.php", {
      method: "POST", // Use the appropriate method for your API
      body: JSON.stringify({
        userID
      }), // Send the userID in the request body
      headers: {
        "Content-Type": "application/json",
      },
    })
      .then((response) => {
        if (response.ok) {
          // If the response is successful (status code 2xx), show success message
          Swal.fire({
            icon: "success",
            title: "Registrant Account Denied",
            text: "This registrant has been successfully denied!",
          }).then(() => {
            // Reload the page after the success message is closed
            window.location.reload();
          });
        } else {
          // If the response is not successful, handle the error
          throw new Error("Failed to update account status.");
        }
      })
      .catch((error) => {
        // Handle any errors that occur during the API call
        console.error("Error update account status:", error);
        // Show an error message using SweetAlert
        Swal.fire({
          icon: "error",
          title: "Error",
          text: "An error occurred while updating account status. Please try again later.",
        });
      });
  }
</script>

<!-- Modal HTML code remains the same -->

<script>
  (document.getElementById("ajax-alert"))
  document.getElementById("add-notes-btn").addEventListener("click", function () {
    Swal.fire({
      title: 'Submit email to run ajax request',
      input: 'email',
      showCancelButton: true,
      confirmButtonText: 'Submit',
      showLoaderOnConfirm: true,
      confirmButtonClass: 'btn btn-primary w-xs me-2',
      cancelButtonClass: 'btn btn-danger w-xs',
      buttonsStyling: false,
      showCloseButton: true,
      preConfirm: function (email) {
        return new Promise(function (resolve, reject) {
          setTimeout(function () {
            if (email === 'taken@example.com') {
              reject('This email is already taken.')
            } else {
              resolve()
            }
          }, 2000)
        })
      },
      allowOutsideClick: false
    }).then(function (email) {
      Swal.fire({
        icon: 'success',
        title: 'Ajax request finished!',
        confirmButtonClass: 'btn btn-primary w-xs',
        buttonsStyling: false,
        html: 'Submitted email: ' + email
      })
    })
  });
</script>

<!-- CSS code remains the same -->





<style>
  /* CSS to style the footer */



  #displayedId {
    display: none;
  }

  #displayGovID {
    display: none;
  }

  .offcanvas-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    text-align: center;
  }

  .offcanvas-header h1 {
    flex: 1;
  }

  /* Adjust the styles as needed */
  .img-container-govid {
    width: 375px;
    height: 240px;
  }

  .img-container-govid img {
    width: 100%;
    height: 100%;
  }

  /* Adjust the styles as needed */
  .img-container-photo {
    width: 360px;
    height: 250px;
  }

  .img-container-photo img {
    width: 100%;
    height: 100%;
  }
</style>