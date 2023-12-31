<div class="offcanvas-header">
  <h1 id="nameOasCheck">{First & Last Name}</h1>
  <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  <p id="displayedId">ID will be displayed here</p>
  <p id="displayGovID">ID will be displayed here</p>
</div>
<div class="offcanvas-body">

  <form id="update-staff-info-form" class="tablelist-form" autocomplete="off">
    <div class="modal-body">
      <div class="row g-3">
      <center><h4>General Information</h4></center>
      <div>
        <input type="hidden" name="input_userid" id="input_userid" />
      </div>
      <div class="mb-3">
    <label for="oc_first_name" class="form-label">First Name:</label>
    <input type="text" class="form-control" id="oc_first_name" name="oc_first_name" disabled >
  </div>
  <div class="mb-3">
    <label for="oc_middle_name" class="form-label">Middle Name:</label>
    <input type="text" class="form-control" id="oc_middle_name" name="oc_middle_name" disabled >
  </div>
  <div class="mb-3">
    <label for="oc_last_name" class="form-label">Last Name:</label>
    <input type="text" class="form-control" id="oc_last_name" name="oc_last_name" disabled >
  </div>
  <div class="mb-3">
    <label for="oc_dob" class="form-label">Date of Birth</label>
    <input type="date" class="form-control" id="oc_dob" name="oc_dob" disabled >
  </div>


  <!-- Responsive Images -->
<center><h4>Badge Photo</h4></center>
  <div class="img-container-photo">
        <!-- The image will be inserted here by the JavaScript code -->
    </div>
    <center><h4>Government ID</h4></center>
  <div class="img-container-govid">
        <!-- The image will be inserted here by the JavaScript code -->
    </div>
        <div class="d-grid gap-2">
          <button name="add-notes-btn" id="add-notes-btn" class="btn btn-dark waves-effect waves-light"  type="button">ADD NOTES</button>
          <button name="view-notes-btn" id="view-notes-btn" class="btn btn-dark waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#notesModel" type="button">VIEW NOTES</button>
          <!-- <button name="" id="view-letter-btn" class="btn btn-primary waves-effect waves-light" type="button">VIEW LETTER</button> -->
          <button name="approve-btn" id="approve-btn" class="btn btn-success waves-effect waves-light" type="button">APPROVE APPLICANT</button>
          <button name="deny-btn" id="deny-btn" class="btn btn-danger waves-effect waves-light" type="button">DENY APPLICANT</button>
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
const callback = function(mutationsList, observer) {
    for (let mutation of mutationsList) {
        if (mutation.type === 'childList') {
            // The innerText of displayedId has changed
            let userID = targetNode.innerText;

            // Fetch the photo image for the new userID and insert it into the document
            fetch(`/api/dashboard/fetch_data/get_photo_image.php`, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded',
                },
                body: `userID=${userID}`
            })
            .then(response => response.text())
            .then(data => {
                // Insert the HTML into your document
                // Replace .img-container-photo with the selector for the element where you want to insert the photo image
                document.querySelector(".img-container-photo").innerHTML = data;
            });

            // Fetch the govid image for the new userID and insert it into the document
            fetch(`/api/dashboard/fetch_data/get_govid_image.php`, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded',
                },
                body: `userID=${userID}`
            })
            .then(response => response.text())
            .then(data => {
                // Insert the HTML into your document
                // Replace .img-container-govid with the selector for the element where you want to insert the govid image
                document.querySelector(".img-container-govid").innerHTML = data;
            });
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
  document.getElementById("approve-btn").addEventListener("click", function() {
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

  // const viewletterbtn = document.getElementById('view-letter-btn');

  // // Assuming the invite letter path is available when the user ID is updated:
  // fetch(`/api/dashboard/fetch_data/get_registrants_invite_letter.php`, {
  //     method: 'POST',
  //     headers: {
  //         'Content-Type': 'application/x-www-form-urlencoded',
  //     },
  //     body: `userID=${userID}`
  // })
  // .then(response => response.text())
  // .then(data => {
  //     viewletterbtn.innerHTML = '<a href="uploads/delegate-letters' + data + '" target="_blank">View Letter</a>';
  // });


  function callApprovedRegAPI(userID) {
    // Make the API call to registrant-oas-check api passing the userID
    // Implement your API call here, using fetch, Axios, or any other method you prefer
    // Example using fetch:
    fetch("/api/dashboard/update/registrant-oas-check-approved.php", {
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
          title: "OAS Security Clearance Completed!",  
          text: "Registrant is now cleared to particpate!",
        }).then(() => {
        // Reload the page after the success message is closed
        window.location.reload();
      });
      })
      .catch((error) => {
        // Handle any errors that occur during the API call
        console.error("Error in OAS security check approval:", error);
        // Show an error message using SweetAlert
        Swal.fire({
          icon: "error",
          title: "Error",
          text: "An error occurred while approving registrant's sponsorship and clearance. Please try again later.",
        });
      });
  }
</script>

<script>
  // DELETE OFFICER ACCOUNT
  document.getElementById("deny-btn").addEventListener("click", function() {
    // Get the UserID from the displayedId element
    const userID = document.getElementById("displayedId").innerText;

    // Show the SweetAlert with the icon and the delete confirmation
    Swal.fire({
      icon: "question", // Icon "Warning"
      title: "Deny Registrant",
      text: `Are you sure that you want to deny this registrant sponsorship and approval?`,
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
    fetch("/api/dashboard/update/registrant-oas-check-denied.php", {
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
            title: "Registrant Account Denied Sponsorship!",
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

  

  #displayedId
  {
    display: none;
  }
  
  #displayGovID
  {
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
            width: 375px;
            height: 240px;
        }
        .img-container-photo img {
            width: 100%;
            height: 100%;
        }
</style>