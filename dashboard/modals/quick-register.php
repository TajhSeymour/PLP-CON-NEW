<div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content border-0">
        <div class="modal-header p-3 bg-soft-info">
            <h5 class="modal-title" id="exampleModalLabel">ADD NEW LOCAL STAFF</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close-modal"></button>
        </div>
        <form id="registration-form"  method="post" enctype="multipart/form-data" class="tablelist-form" autocomplete="off">
            <div class="modal-body">
                <div class="row g-3">
                    <div class="row g-3">
                        <div class="col-lg-6">

                            <select class="form-control" data-plugin="choices" name="input_priority" id="input_priority" required>
                                <option value="">Select Priority</option>
                                <option value="High">High</option>
                                <option value="Medium">Medium</option>
                                <option value="Normal">Normal</option>
                            </select>
                        </div>

                        <div class="col-lg-6">
                        <label for="first_name" class="form-label">Have a PLP ID Card ? *</label>
<select class="form-control" data-plugin="choices" name="input_priority" id="input_priority" required>
    <option select value="YES">No, new member / Never issued a PLP ID Card</option>
 
</select>
</div>

                    </div>
                    <div class="col-lg-6">
                        <div>
                            <label for="first_name" class="form-label">First Name: *</label>
                            <input type="text" name="first_name" id="input_first_name" class="form-control" placeholder="First Name" required />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div>
                            <label for="middle_name" class="form-label">Middle Name:</label>
                            <input type="text" name="middle_name" id="input_middle_name" class="form-control" placeholder="Middle Name" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div>
                            <label for="last_name" class="form-label">Last Name: *</label>
                            <input type="text" name="last_name" id="input_last_name" class="form-control" placeholder="Last Name" required />
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <label for="gender" class="form-label">Gender: *</label>
                        <select  required class="form-control" data-plugin="choices" name="gender" id="input_gender">
                            <option value="">Gender</option>
                            <option value="MALE">Male</option>
                            <option value="FEMALE">Female</option>

                        </select>
                    </div>
                        <div class="col-lg-6">
                        <label for="assignments" class="form-label">Memebership Type</label>
                        <select class="form-control" data-plugin="choices" name="assignment" id="input_assignment" required>
                            <option value="">Select Memebership</option>
                            <option value="BRANCH MEMEBER">Constituency Branch Memeber</option>
                            <option value="DIRECT MEMEBER">Direct Memeber</option>
                            <option value="STALWART COUNCILLOR">STALWART COUNCILLOR</option>
                            <option value="LIFETIME MEMBER">LIFETIME MEMBER</option>
                        </select>

                        <label for="assignments" class="form-label">Memebership Type</label>
                        <select class="form-control" data-plugin="choices" name="assignment" id="input_assignment" required>
                            <option value="">Select Memebership</option>
                            <option value="BRANCH MEMEBER">Constituency Branch Memeber</option>
                            <option value="DIRECT MEMEBER">Direct Memeber</option>
                            <option value="STALWART COUNCILLOR">STALWART COUNCILLOR</option>
                            <option value="LIFETIME MEMBER">LIFETIME MEMBER</option>
                        </select>
                    </div>

                    <div class="col-lg-6">
                        <div>
                            <label for="job_title" class="form-label">Job Title:*</label>
                            <input type="text" name="job_title" id="input_job_title" class="form-control" placeholder="Job Title" required />
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <label for="dob" class="form-label">Date of Birth</label>
                        <input type="text" id="input_dob" name="dob" class="form-control" data-provider="flatpickr" data-date-format="Y-m-d" placeholder="Please enter your date of birth" required />

                    </div>
                </div>
                <div class="row g-3">
                   

                    <div class="col-lg-6">
                        <label for="imageUpload" class="form-label">Badge ID Photo (PNG/JPG only):</label>
                        <input type="file" class="form-control" id="badge_photo" name="local_badge_photo_path" accept=".jpg, .jpeg, .png" />
                        <small id="fileHelp" class="form-text text-muted">Please upload a .jpg, .jpeg, or .png file.</small>
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
  const registrationForm = document.getElementById('registration-form');

  function closeModal() {
    registrationForm.reset();
    $('#showModal').modal('hide'); // Close the Bootstrap modal
  }

  registrationForm.addEventListener('submit', async function(event) {
    event.preventDefault();

    try {
      const formData = new FormData(registrationForm);
      const response = await fetch('https://oasministersregister.gov.bs/api/insert/add_local_record.php', {
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
          text: 'Failed to add record to the database.',
          confirmButtonColor: '#dc3545'
        });
      }
    } catch (error) {
      console.error('Error:', error);
      Swal.fire({
        icon: 'error',
        title: 'Error',
        text: 'An unexpected error occurred. Please try again later.',
        confirmButtonColor: '#dc3545'
      });
    }
  });
</script>

