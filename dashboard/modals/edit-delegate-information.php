<!-- DELEGATE MODEL -->
<div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="modal-body p-3">
            <div>
                <h2 class="text-center mb-3" id="editDelegateLabel">Edit Delegate</h2>
                
                <form action="" method="post">
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
                        <label for="m_job_title" class="form-label">Job Title</label>
                        <input type="text" class="form-control job_title" id="m_job_title" name="m_job_title" placeholder="Job Title">
                    </div>
                    <div class="mb-3">
                        <label for="m_assignment" class="form-label">Assignment</label>
                        <input type="text" class="form-control assignment" id="m_assignment" name="m_assignment" placeholder="Assignment">
                    </div>
                    <div class="mb-3">
                        <label for="m_priority" class="form-label">Priority</label>
                        <input type="text" class="form-control priority" id="m_priority" name="m_priority" placeholder="Priority">
                    </div>
                    <div class="hstack gap-2 justify-content-center">
                        <a href="javascript:void(0);" class="btn btn-link link-danger fw-medium" data-bs-dismiss="modal"><i class="ri-close-line me-1 align-middle"></i> Close</a>
                        <a href="javascript:void(0);" class="btn btn-success">Update Delegate</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>

</script>