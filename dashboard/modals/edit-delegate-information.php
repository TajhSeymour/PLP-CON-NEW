<!-- DELEGATE MODEL -->
<div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="modal-body p-3">
            <div>
                <h2 class="text-center mb-3" id="editDelegateLabel">Edit Delegate</h2>
                <form action="/api/dashboard/update/update_registrant.php" method="post">
                    <input type="hidden" class="delegate_id" name="m_delegate_id">
                    <div class="mb-3">
                        <label for="m_first_name" class="form-label">First Name</label>
                        <input type="text" class="form-control first_name" id="m_first_name" name="m_first_name" placeholder="First Name">
                    </div>
                    <div class="mb-3">
                        <label for="m_middle_name" class="form-label">Middle Name</label>
                        <input type="text" class="form-control middle_name" id="m_middle_name" name="m_middle_name" placeholder="Middle Name">
                    </div>
                    <div class="mb-3">
                        <label for="m_last_name" class="form-label">Last Name</label>
                        <input type="text" class="form-control last_name" id="m_last_name" name="m_last_name" placeholder="Last Name">
                    </div>
                    <div class="mb-3">
                        <label for="m_job_title" class="form-label">Job Title</label>
                        <select class="form-select job_title" id="m_job_title" name="m_job_title">
                            <option value="">Select Job Title...</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="m_email" class="form-label">Email</label>
                        <input type="email" class="form-control email" id="m_email" name="m_email" placeholder="Email">
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <label for="m_dob" class="form-label">Date of Birth</label>
                                <input type="date" class="form-control dob" id="m_dob" name="m_dob" placeholder="date of birth">
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3">
                                <label for="m_gender" class="form-label">Gender</label>
                                <select class="form-select gender" id="m_gender" name="m_gender">
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="m_priority" class="form-label">Priority</label>
                        <select disable class="form-select priority" id="m_priority" name="m_priority">
                            <option value="Normal">Normal</option>
                            <option value="Medium">Medium</option>
                            <option value="High">High</option>
                        </select>
                    </div>

                    <div class="hstack gap-2 justify-content-center">
                        <a href="javascript:void(0);" class="btn btn-link link-danger fw-medium" data-bs-dismiss="modal"><i class="ri-close-line me-1 align-middle"></i> Close</a>
                        <button type="submit" class="btn btn-success">Update Delegate</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script type="text/javascript">
  const jobTitleSelectElement = document.querySelector('#m_job_title')
  
  async function loadAssignments(selectElement) {
    const response = await fetch('/api/fetch_data/get_job_titles.php')
    const jobTitles = await response.json()
    selectElement.innerHTML = ''
    jobTitles.forEach(jobTitle => {
      const optionElement = document.createElement('option')
      optionElement.value = jobTitle
      optionElement.innerText = jobTitle

      if (jobTitle.toUpperCase() === sessionStorage.getItem('job_title')) {
        optionElement.selected = true
      }

      selectElement.appendChild(optionElement)
    })
  }

  loadAssignments(jobTitleSelectElement)
</script>
<script>
    $(document).ready(function(){
        // Fetch the job titles when the page is loaded
        $.ajax({
            type: 'GET',
            url: '/api/fetch_data/get_job_titles.php',
            dataType: 'json',
            success: function(data) {
                // If data is fetched successfully, populate the select dropdown
                $('#m_job_title').empty(); // Clear existing options
                $.each(data, function(key, value) {
                    $('#m_job_title').append('<option value="'+ value +'">'+ value +'</option>');
                });
            },
            error: function(error) {
                console.error("There was an error fetching the job titles: ", error);
            }
        });
    });
</script>
