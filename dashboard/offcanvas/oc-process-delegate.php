<div class="offcanvas-header">
    <h2 id="displayedDelegateName">{First & Last Name}</h2>
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
</div>
<div class="offcanvas-body">
  <div class="mb-3">
    <label for="oc_delegate_id">ID:</label>
    <input type="number" class="form-control delegate_id" name="oc_delegate_id" id="oc_delegate_id" min="0" disabled >
  </div>
  <div class="mb-3">
    <label for="oc_first_name" class="form-label">First Name:</label>
    <input type="text" class="form-control first_name" id="oc_first_name" name="oc_first_name" disabled >
  </div>
  <div class="mb-3">
    <label for="oc_middle_name" class="form-label">Middle Name:</label>
    <input type="text" class="form-control middle_name" id="oc_middle_name" name="oc_middle_name" disabled >
  </div>
  <div class="mb-3">
    <label for="oc_last_name" class="form-label">Last Name:</label>
    <input type="text" class="form-control last_name" id="oc_last_name" name="oc_last_name" disabled >
  </div>
  <div class="mb-3">
    <label for="oc_job_title" class="form-label">Job Title:</label>
    <input type="text" class="form-control job_title" id="oc_job_title" name="oc_job_title" disabled >
  </div>
  <div class="mb-3">
    <label for="oc_assignment" class="form-label">Assignment:</label>
    <input type="text" class="form-control assignment" id="oc_assignment" name="oc_assignment" disabled >
  </div>
  <div class="mb-3">
    <label for="oc_priority" class="form-label">Priority</label>
    <input type="text" class="form-control priority" id="oc_priority" name="oc_priority" disabled >
  </div>
  <div class="d-flex flex-column mb-3 justify-content-center align-items-center">
      <label class="text-center" for="delegate_photo">Portrait</label>
      <div style="width: 230px;height: 240px">
        <img class="cursor-pointer badge_photo w-100 h-100" alt="delegate's picture">
      </div>
  </div>
  <div class="d-grid gap-2 mt-2" >
    <button class="btn btn-primary waves-effect waves-light" id="print-delegate-badge" type="button">Print Badge</button>
    <button class="btn btn-primary waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#editDelegate" type="button">Edit Delegate</button>
    <button class="btn btn-primary waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#uploadDelegatePhoto" type="button">Upload New Delegate Photo</button>
    <button class="btn btn-primary waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#takeDelegatePortrait" type="button">Take New Portrait Photo</button>
    <button class="btn btn-danger waves-effect waves-light"  id="delete-application" type="button">Delete Application</button>
  </div>
</div>

  <style>
  .offcanvas-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    text-align: center;
  }

  .offcanvas-header h2 {
    flex: 1;
  }
</style>

<script>
  const printDelegateBadgeElement = document.querySelector('#print-delegate-badge');
  printDelegateBadgeElement.addEventListener('click', function () {
    const printDelegateBadgeMode = new bootstrap.Modal(document.querySelector('#printDelegateBadge'));
    
    document.querySelector('#pd_delegate_name').innerHTML = `${sessionStorage.getItem('first_name')} ${sessionStorage.getItem('last_name')}`;
    document.querySelector('#pd_assignment').innerHTML = sessionStorage.getItem('assignment');
    document.querySelector('#pd_job-title').innerHTML = sessionStorage.getItem('job_title');

    // Get the badge photo URL from sessionStorage
    const badgePhoto = sessionStorage.getItem('badge_photo');
    // Set the badge photo URL to the img element
    document.querySelector('#pd_badge_photo').src = badgePhoto;
  });
</script>

