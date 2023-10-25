<div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content border-0">
        <div class="modal-header p-3 bg-soft-info">
            <h5 class="modal-title" id="exampleModalLabel">ADD NEW USER</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close-modal"></button>
        </div>
        <form id="registration-form" action="/api/dashboard/insert/insert_system_users.php" method="post" enctype="multipart/form-data" class="tablelist-form" autocomplete="off">
            <div class="modal-body">
                <div class="row g-3">
                    <!--  <div class="row g-3">
                       <div class="col-lg-6">

                            <select class="form-control" data-plugin="choices" name="input_priority" id="input_priority" required>
                                <option value="">Select Priority</option>
                                <option value="High">High</option>
                                <option value="Medium">Medium</option>
                                <option value="Normal">Normal</option>
                            </select>
                        </div> 
                    </div>-->
                    <div class="col-lg-6">
                        <div>
                            <label for="first_name" class="form-label">First Name: *</label>
                            <input type="text" name="input_first_name" id="input_first_name" class="form-control" placeholder="First Name" required />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div>
                            <label for="middle_name" class="form-label">Middle Name:</label>
                            <input type="text" name="input_middle_name" id="input_middle_name" class="form-control" placeholder="Middle Name" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div>
                            <label for="last_name" class="form-label">Last Name: *</label>
                            <input type="text" name="input_last_name" id="input_last_name" class="form-control" placeholder="Last Name" required />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div>
                            <label for="email" class="form-label">Email Address: *</label>
                            <input type="email" name="input_email" id="input_email" class="form-control" placeholder="Email Address" required />
                        </div>
                    </div>

               <!-- The code you provided is creating a form input field for the NIB Number. Here's
                 what each part of the code does: -->
                    <div class="col-lg-6">
                        <div>
                            <label for="nib_number" class="form-label">NIB Number: *</label>
                            <input  type="number" id="input_nib" class="form-control" name="input_nib" placeholder="NIB Number" oninput="this.value = this.value.replace(/[^0-9]/g, '');">
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <label for="assignments" class="form-label">System User Roles</label>
                        <select class="form-control" data-plugin="choices" name="input_system_assignment" id="input_system_assignment" required>
                            <option value="">Select Access Roles</option>
                               <option value="Officer">Officer</option>
                                <option value="Supervisor">Supervisor</option>
                                <option value="System Administrator">System Administrator</option>
                            </select>
                        </select>
                    </div>

                    <!--  <div class="col-lg-6">
                        <div>
                            <label for="job_title" class="form-label">Job Title:*</label>
                            <input type="text" name="input_job_title" id="input_job_title" class="form-control" placeholder="Job Title" required />
                        </div>
                    </div>

                   <div class="col-lg-6">
                        <label for="dob" class="form-label">Date of Birth</label>
                        <input type="text" id="input_dob" name="input_dob" class="form-control" data-provider="flatpickr" data-date-format="Y-m-d" placeholder="Please enter your date of birth" required />

                    </div>
                </div>
            <div class="row g-3">
                    <div class="col-lg-6">
                        <label for="imageUpload" class="form-label">Government ID (PNG/JPG only):</label>
                        <input type="file" class="form-control" id="gov_id" name="gov_id" accept=".jpg, .jpeg, .png" />
                        <small id="fileHelp" class="form-text text-muted">Please upload a .jpg, .jpeg, or .png file.</small>
                    </div>

                    <div class="col-lg-6">
                        <label for="imageUpload" class="form-label">Badge ID Photo (PNG/JPG only):</label>
                        <input type="file" class="form-control" id="badge_photo" name="badge_photo" accept=".jpg, .jpeg, .png" />
                        <small id="fileHelp" class="form-text text-muted">Please upload a .jpg, .jpeg, or .png file.</small>
                    </div>
                </div>
            </div> -->
            <div class="modal-footer">
                <div class="hstack gap-2 justify-content-end">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                    
                    <button type="submit" id="add-btn" class="btn btn-success custom-toggle">
    <span class="icon-on"><i class="ri-thumb-up-line align-bottom me-1"></i> Submit Registration</span>
 
</button> 
                    
                    
            
                    
                    
                     <!--<button type="submit" class="btn btn-success btn-load" id="add-btn">Submit Registration</button> -->
                    
                    
                    <!-- <button type="button" class="btn btn-success" id="edit-btn">Update</button> -->
                </div>
            </div>
        </form>
    </div>
</div>


<!-- Include the combined JavaScript code for form submission and SweetAlert -->
<script>
  // Get the reference to the form element
  const registrationForm = document.getElementById('registration-form');
  const modalContainer = document.getElementById('showModal');

  // Function to close the modal
  function closeModal() {
    // Reset the form fields to clear any previous data
    registrationForm.reset();

    // Manually close the modal by removing the 'show' class
    modalContainer.classList.remove('show');

    // Clear the backdrop class to hide the backdrop
    document.body.classList.remove('modal-open');
  }

  // Add an event listener to the form's submit event
  registrationForm.addEventListener('submit', async function(event) {
    // Prevent the default form submission behavior
    event.preventDefault();

    try {
      // Handle the form submission using AJAX or any other logic you need
      // Here, you can use AJAX to submit the form data to the server without a full page reload
      const response = await fetch(registrationForm.action, {
        method: 'POST',
        body: new FormData(registrationForm)
      });

      const data = await response.json();

      // Show a SweetAlert message based on the response status
      if (data.status === 'success') {
        // Show a success message using SweetAlert
        await Swal.fire({
          icon: 'success',
          title: 'Success',
          text: 'Record added successfully!',
          confirmButtonColor: '#28a745'
        }).then(() => {
          // Close the modal after successful registration
          closeModal();

          // Reload the page after successful submission
          window.location.reload();
        });
      } else if (data.status === 'error') {
        // Show an error message using SweetAlert
        await Swal.fire({
          icon: 'error',
          title: 'Error',
          text: 'Failed to add record to the database.',
          confirmButtonColor: '#dc3545'
        });
      }
    } catch (error) {
      // Handle any errors that occurred during form submission
      console.error('Error:', error);
      // Show an error message using SweetAlert for unexpected errors
      await Swal.fire({
        icon: 'error',
        title: 'Error',
        text: 'An unexpected error occurred. Please try again later.',
        confirmButtonColor: '#dc3545'
      });
    }
  });
</script>

