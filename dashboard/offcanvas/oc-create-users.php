<div class="offcanvas-header">
  <h1 id="displayFirstLastName">{First & Last Name}</h1>
  <p id="displayedId">ID will be displayed here</p>
  <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
</div>
<div class="offcanvas-body">


  <form id="update-staff-info-form" class="tablelist-form" autocomplete="off">
    <div class="modal-body">
      <div class="row g-3">

      <div>
        <input type="hidden" name="input_userid" id="input_userid" />
        </div>

        <div>
          <label for="first_name" class="form-label">First Name: *</label>
          <input type="text" name="input_first_name_oc" id="input_first_name_oc" class="form-control" placeholder="First Name" required />
        </div>

        <div>
          <label for="middle_name" class="form-label">Middle Name:</label>
          <input type="text" name="input_middle_name_oc" id="input_middle_name_oc" class="form-control" placeholder="Middle Name" />
        </div>

        <div>
          <label for="last_name" class="form-label">Last Name: *</label>
          <input type="text" name="input_last_name_oc" id="input_last_name_oc" class="form-control" placeholder="Last Name" required />
        </div>

        <div>
          <label for="email" class="form-label">Email Address: *</label>
          <input type="email" name="input_email_oc" id="input_email_oc" class="form-control" placeholder="Email Address" required />
        </div>

        <div>
          <label for="nib_number" class="form-label">NIB Number: *</label>
          <input required type="number" id="input_nib_oc" class="form-control" name="input_nib_oc" placeholder="NIB Number" oninput="this.value = this.value.replace(/[^0-9]/g, '');">
        </div>
        <div>
          <label for="assignments" class="form-label">System User Roles</label>
          <select class="form-control" data-plugin="choices" name="input_system_assignment_oc" id="input_system_assignment_oc" required>
            <option value="">Select Access Roles</option>
            <?php
            // Function to fetch items from the API and populate the select box
            function fetchItemsOC()
            {
              $apiUrl = 'https://oasministersregister.gov.bs/api/dashboard/fetch_data/get_system_roles.php';
              $response = file_get_contents($apiUrl);
              $itemsOC = json_decode($response);

              if (!empty($itemsOC)) {
                foreach ($itemsOC as $itemsOC) {
                  echo '<option value="' . htmlspecialchars($itemsOC) . '">' . htmlspecialchars($itemsOC) . '</option>';
                }
              }
            }
            fetchItemsOC();
            ?>
          </select>
        </div>
       
        <div class="d-grid gap-2">
          <button name="reset-pw" id="reset-pw" class="btn btn-dark bg-gradient waves-effect waves-light" type="button">RESET PASSWORD</button>
          <button name="update-btn" id="update-btn" class="btn btn-primary waves-effect waves-light" type="submit">UPDATE ACCOUNT</button>
          <br>
          <button name="delete-btn" id="delete-btn" class="btn btn-danger waves-effect waves-light" type="button">DELETE ACCOUNT</button>
        </div>
      </div>
    </div>
  </form>

</div>

<!--UPDATE USER BUTTON  -->
<script>
document.getElementById("update-btn").addEventListener("click", function () {
  // Prevent the default form submission behavior
  event.preventDefault();

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
  fetch("/api/dashboard/update/update_system_user.php", {
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

<!-- Reset Password Script -->
<script>
//RESET PASSWORD

  document.getElementById("reset-pw").addEventListener("click", function() {
    // Get the UserID from the displayedId element
    const userID = document.getElementById("displayedId").innerText;

    // Show the SweetAlert with the icon and the reset confirmation
    Swal.fire({
      icon: "info", // Icon "Information"
      title: "Reset Password",
      text: `Are you sure that you want to reset this officer's password?`,
      showCancelButton: true,
      confirmButtonText: "Confirm",
      cancelButtonText: "Cancel",
    }).then((result) => {
      if (result.isConfirmed) {
        // Call the API to reset the password with the obtained userID
        callResetPasswordAPI(userID);
      }
    });
  });

  function callResetPasswordAPI(userID) {
    // Make the API call to resetpw.php passing the userID
    // Implement your API call here, using fetch, Axios, or any other method you prefer
    // Example using fetch:
    fetch("/api/dashboard/update/update_sys_usr_password.php", {
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
          title: "Password Reset",
          text: "Officer's password has been successfully reset!",
        }).then(() => {
        // Reload the page after the success message is closed
        window.location.reload();
      });
      })
      .catch((error) => {
        // Handle any errors that occur during the API call
        console.error("Error resetting password:", error);
        // Show an error message using SweetAlert
        Swal.fire({
          icon: "error",
          title: "Error",
          text: "An error occurred while resetting the password. Please try again later.",
        });
      });
  }

  
</script>

<script>
  // DELETE OFFICER ACCOUNT

  document.getElementById("delete-btn").addEventListener("click", function() {
    // Get the UserID from the displayedId element
    const userID = document.getElementById("displayedId").innerText;

    // Show the SweetAlert with the icon and the delete confirmation
    Swal.fire({
      icon: "warning", // Icon "Warning"
      title: "Delete Officer Account",
      text: `Are you sure that you want to delete this officer's account?`,
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
    fetch("/api/dashboard/delete/delete_system_user.php", {
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
            title: "Officer Account Deleted",
            text: "Officer's account has been successfully deleted!",
          }).then(() => {
        // Reload the page after the success message is closed
        window.location.reload();
      });
        } else {
          // If the response is not successful, handle the error
          throw new Error("Failed to delete officer's account.");
        }
      })
      .catch((error) => {
        // Handle any errors that occur during the API call
        console.error("Error deleting officer's account:", error);
        // Show an error message using SweetAlert
        Swal.fire({
          icon: "error",
          title: "Error",
          text: "An error occurred while deleting the officer's account. Please try again later.",
        });
      });
  }
</script>







<style>
  /* CSS to style the footer */
  /* CSS to style the footer */

  #displayedId {
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
</style>