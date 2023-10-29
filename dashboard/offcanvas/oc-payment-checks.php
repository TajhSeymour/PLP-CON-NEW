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
  <form id="update-staff-info-form" enctype="multipart/form-data"  class="tablelist-form" autocomplete="off">
    <div class="modal-body">
      <div class="row g-3">
       
        <center>
        <br>
  
          <h4>General Information</h4>
        </center>
        <div>
          <input type="hidden" name="input_userid" id="input_userid" />
        </div>

        <div class="mb-3">
        <label for="oc_first_name" class="form-label">Process Priority:</label>
          <select class="form-control" data-plugin="choices" name="oc_priority" id="oc_priority">
            <option value="HIGH">HIGH</option>
            <option value="MEDIUM">MEDIUM</option>
            <option  value="NORMAL">NORMAL</option>
          </select>
        </div>

        <div class="mb-3">
        <label for="oc_first_name" class="form-label">Requires New Badge?: *</label>
          <select class="form-control" data-plugin="choices" name="oc_new_badge" id="oc_new_badge">
            <option value="0">No</option>
            <option value="1">Yes</option>
      
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
          <label for="oc_dob" class="form-label">Date of Birth: *</label>
          <input type="date" class="form-control" id="oc_dob" name="oc_dob" data-provider="flatpickr"
            data-date-format="Y-m-d" placeholder="Please enter your date of birth" required />
        </div>
        
        <div class="mb-3">
          <label for="nib_number" class="form-label">NIB Number: *</label>
          <input type="number" class="form-control" id="oc_nib_number" name="oc_nib_number" required>
        </div>

        <div class="mb-3">
          <label for="membership_type" class="form-label">Membership Type: *</label>
          <select class="form-control" data-plugin="choices" name="oc_membership_type" id="oc_membership_type" required>
          <option value="">Select Membership</option>
          <option value="BRANCH MEMBER">Branch Member</option>
          <option value="DIRECT MEMBER">Direct Member</option>
            <option value="STALWART COUNCILLOR">Stalwart Councillor</option>
            <option value="LIFETIME MEMBER">Lifetime Member</option>
          </select>
        </div>

        <div class="mb-3">
          <label for="membership_type" class="form-label">Delegate Type: *</label>
          <select class="form-control" data-plugin="choices" name="oc_delegate_type" id="oc_delegate_type" required>
          <option select value="Observer Delegate">Observer Delegate (Non-Voting)</option>
          <option value="Voting Delegate">Voting Delegate</option>
          <option value="Stalwart Councillor">Stalwart Councillor</option>
          
          </select>
        </div>
       
        <div class="mb-3">
          <label for="membership_type" class="form-label">Representing Branch: *</label>
          <select class="form-control" data-plugin="choices" name="oc_affiliated_branch" id="oc_affiliated_branch"
            >
            <option value="">Select Branch</option>

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

      

        <div class="mb-3">
        <label for="imageUpload" class="form-label">Badge ID Photo:</label>
                        <input type="file" class="form-control" id="oc_badge_photo" disabled
                            name="oc_badge_photo" accept="image/jpg"  />
                        <small id="fileHelp" class="form-text text-muted">Please upload a .jpg file.</small>

        </div>

        <div class="mb-3">
          <label for="nib_number" class="form-label">Receipt Number: *</label>
          <input type="text" class="form-control" id="oc_receipt_number" name="oc_receipt_number" required>
        </div>

        <div class="mb-3">
        <label for="oc_dob" class="form-label">Notes:</label>
        <textarea class="form-control" id="oc_notes" name="oc_notes" rows="5" spellcheck="false"></textarea>
        </div>

        <div class="mb-3">
          <label for="oc_dob" class="form-label">Registration Date</label>
          <input type="date" class="form-control" id="oc_date" name="oc_pay_date" data-provider="flatpickr"
            data-date-format="Y-m-d" disabled />
        </div>
        <div class="d-grid gap-2">
         <!-- <button name="add-notes-btn" id="add-notes-btn" class="btn btn-dark waves-effect waves-light"
            type="button">ADD NOTES</button>-->
            <button name="update-btn" id="update-btn" class="btn btn-dark waves-effect waves-light"
            type="button"> UPDATE RECORD</button>
          <button name="approve-pay-btn" id="approve-pay-btn" class="btn btn-success waves-effect waves-light"
            type="button"> ACTIVATE CARD / APPROVE PAYMENT</button>
         <button name="deny-btn" id="deny-btn" class="btn btn-danger waves-effect waves-light" type="button">VOID PAYMENT</button>
        </div>
      </div>
    </div>

  </form>




</div>

<script>
// Get the dropdown and the oc_affiliated_branch element
const MemberShipDropdown = document.getElementById("oc_membership_type");
const ocDelegateType = document.getElementById("oc_delegate_type");

// Add a 'change' event listener to the dropdown
MemberShipDropdown.addEventListener("change", function() {
    const selection = this.value;
    if (selection === "Stalwart Councillor") {
      ocDelegateType.value = "Stalwart Councillor";
  
        
    }
});


// Get the dropdown and the oc_affiliated_branch element
const delegateDropdown = document.getElementById("oc_delegate_type");
const ocAffiliatedBranch = document.getElementById("oc_affiliated_branch");

// Add a 'change' event listener to the dropdown
delegateDropdown.addEventListener("change", function() {
    const selection = this.value;
    if (selection === "Observer Delegate" || selection === "Voting Delegate") {
        ocAffiliatedBranch.disabled = false;
    } else {
        ocAffiliatedBranch.disabled = true;

    }
});

</script>

<script>
    document.getElementById('oc_new_badge').addEventListener('input', function() {
        var newBadgeValue = this.value;
        var badgePhotoInput = document.getElementById('oc_badge_photo');
        
        if (newBadgeValue === '1') {
            badgePhotoInput.removeAttribute('disabled');
        } else {
            badgePhotoInput.setAttribute('disabled', 'true');
        }
    });
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
  document.getElementById("update-btn").addEventListener("click", function () {
  // Prevent the default form submission behavior
  event.preventDefault();

    // Check if required fields are empty
    const dobFeild = document.getElementById("oc_dob").value;
    const nibNumber = document.getElementById("oc_nib_number").value;
    const membershipType = document.getElementById("oc_membership_type").value;
    const affiliateBranch = document.getElementById("oc_affiliated_branch").value;
    const receiptNumber = document.getElementById("oc_receipt_number").value;

    
    if (!dobFeild || !nibNumber  || !membershipType  || !affiliateBranch  || !receiptNumber ) {
        // Display an error message and exit
        Swal.fire({
            icon: "error",
            title: "Error",
            text: "Please fill out all required fields.",
        });
        return; // Stop the execution of the function
    }

  // Get the user ID from the displayedId element
  const userID = document.getElementById("displayedId").innerText;

  // Get the form data
  const formData = new FormData(document.getElementById("update-staff-info-form"));
  formData.append("input_userid", userID); // Add the user ID to the form data

  // Make the API call to update the user information
  callUpdateUserAPI(formData);
});
function callUpdateUserAPI(formData) {
  // Make the API call to update_user.php with the provided data
  // Implement your API call here, using fetch, Axios, or any other method you prefer
  // Example using fetch:
  fetch("/api/dashboard/update/update_payment_record_only.php", {
    method: "POST", // Use the appropriate method for your API
    body: formData, // Send the form data in the request body
  })
    .then((response) => response.json())
    .then((data) => {
      // Handle the response from the API if necessary
      // For example, show a success message using SweetAlert
      Swal.fire({
        icon: "success",
        title: "User Updated",
        text: "User information has been successfully updated!",
      }).then(() => {
        // Reload the page after the success message is closed
        window.location.reload();
      });
    })
    .catch((error) => {
      // Handle any errors that occur during the API call
      console.error("Error updating user:", error);
      // Show an error message using SweetAlert
      Swal.fire({
        icon: "error",
        title: "Error",
        text: "An error occurred while updating the user information. Please try again later.",
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
      title: "Duplicate Registrant",
      text: `Are you sure that this is a duplicate registrant?`,
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
    fetch("/api/dashboard/update/update_delegate_info_duplicate.php", {
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
            title: "Duplicate Registrant Account Deleged",
            text: "This duplicate registrant has been successfully deleted!",
          }).then(() => {
            // Reload the page after the success message is closed
            window.location.reload();
          });
        } else {
          // If the response is not successful, handle the error
          throw new Error("Failed to delete duplicated registrant.");
        }
      })
      .catch((error) => {
        // Handle any errors that occur during the API call
        console.error("Failed to delete duplicated registrant:", error);
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