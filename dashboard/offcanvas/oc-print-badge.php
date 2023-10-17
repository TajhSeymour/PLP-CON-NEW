<div class="offcanvas-header">
    <h2 id="displayedDelegateName"></h2>
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
      <div style="width: 375px;height: 250px">
        <img class="cursor-pointer delegate-image w-100 h-100" alt="delegate's picture" id="delegate_photo">
      </div>
  </div>
  <div class="d-flex flex-column mb-3 justify-content-center align-items-center">
      <label class="text-center" for="delegate_gov_id_photo">Government ID</label>
      <div style="width: 375px;height: 250px">
        <img class="cursor-pointer gov_id w-100 h-100" alt="delegate's picture" id="delegate_gov_id_photo">
      </div>
  </div>
  <div class="d-grid gap-2 mt-2" >
    <button class="btn btn-primary waves-effect waves-light" id="print-delegate-badge" type="button">Print Badge</button>
    <button class="btn btn-primary waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#editDelegate" type="button">Edit Delegate</button>
    <button class="btn btn-primary waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#uploadDelegatePhoto" type="button">Upload New Images</button>
    <button class="btn btn-primary waves-effect waves-light" id="take-delegate-portrait" type="button">Take New Portrait Photo</button>
    <button class="btn btn-danger waves-effect waves-light"  id="delete-application" type="button">Delete Photo</button>
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

<script
  type="text/javascript"
  src="https://unpkg.com/webcam-easy/dist/webcam-easy.min.js"
></script>

<script>
  const printDelegateBadgeElement = document.querySelector('#print-delegate-badge')
  printDelegateBadgeElement.addEventListener('click', function () {
    const printDelegateBadgeMode = new bootstrap.Modal(document.querySelector('#printDelegateBadge'))
    
    console.log(document.querySelector('.gov_id_photo'))
    console.log(sessionStorage.getItem('gov_id'))
    document.querySelector('#pd_delegate_name').innerHTML = `${sessionStorage.getItem('first_name')} ${sessionStorage.getItem('last_name')}`
    document.querySelector('#pd_assignment').innerHTML = sessionStorage.getItem('assignment')
    document.querySelector('#pd_job-title').innerHTML = sessionStorage.getItem('job_title')
    document.querySelector('.delegate-image').src = sessionStorage.getItem('badge_photo')
    document.querySelector('.gov_id').src = sessionStorage.getItem('gov_id')
    document.querySelector('.delegate_id').innerHTML = sessionStorage.getItem('id')

    printDelegateBadgeMode.show()
  })

    const displayedDelegateName = document.querySelector('#displayedDelegateName');
    displayedDelegateName.innerHTML = `${sessionStorage.getItem('first_name')} ${sessionStorage.getItem('last_name')}`;

    const takeDelegatePortraitElement = document.querySelector('#take-delegate-portrait')
    takeDelegatePortraitElement.addEventListener('click', async function () {
    const takeDelegatePortraitMode = new bootstrap.Modal(document.querySelector('#takeDelegatePortrait'))
    const canvasElement = document.querySelector('#canvas')
    const videoElement = document.querySelector('#video')
    const captureElement = document.querySelector('#capture')
    const flipCamElement = document.querySelector('#flip-btn')

    function dataUriToBlob(dataUri) {
      let byteString
      if (dataUri.split(',')[0].indexOf('base64') >= 0) {
          byteString = atob(dataUri.split(',')[1])
      } else {
          byteString = unescape(dataUri.split(',')[1])
      }

      const mimeString = dataUri.split(',')[0].split(':')[1].split(';')[0]

      const ia = new Uint8Array(byteString.length)
      for (let i = 0; i < byteString.length; i++) {
          ia[i] = byteString.charCodeAt(i)
      }

      return new Blob([ia], { type: mimeString })
    }

  
    const webcam = new Webcam(videoElement, 'user', canvasElement)
    try {
      await webcam.start()
      console.log('Webcam started')
    } catch (error) {
      console.error(error)
    }

    captureElement.addEventListener('click', async () => {
      const id = parseInt(document.querySelector('.delegate_id').value)
      console.log(id)
      const dataUri = webcam.snap()
      const file = dataUriToBlob(dataUri)

      const formData = new FormData()
      formData.set('id', id)
      formData.set('image', file)

      const response = await fetch(
          '/api/dashboard/update/take-new-portrait-photo.php',
          {
              method: 'POST',
              body: formData
          }
      )

      const result = await response.json()

      window.location.href = '/dashboard/printer-queue.php?' + (result['error'] ? 'error' : 'message') + '=' + encodeURI(result['message'])
    })

    flipCamElement.addEventListener('click', (event) => {
      webcam.flip()
      webcam.start()
    })

    takeDelegatePortraitMode.show()

  })

  const deleteApplicationElement = document.querySelector('#delete-application')
  deleteApplicationElement.addEventListener('click', async function () {
    const delegate_id = document.querySelector('.delegate_id').value
    
    const data = { id: delegate_id }

    const response = await fetch(
      '/api/dashboard/delete/delete_delegate_application.php', 
      {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json'
        },
        body: JSON.stringify(data)
      }
    )

    const deletedDelegateMessage = await response.json()

    window.location.href = '/dashboard/printer-queue.php?' + encodeURI((deletedDelegateMessage.error ? 'error' : 'message') + '=' + deletedDelegateMessage.message)
  })

</script>
