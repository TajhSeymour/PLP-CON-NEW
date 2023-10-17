<div class="modal-dialog modal-dialog-centered">
    <div class="modal-content"> 
        <header class="modal-header">
            <h2 class="modal-title" id="uploadDelegatePhotoLabel">UPLOAD NEW PHOTO</h2>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </header>
        <form action="/api/dashboard/update/update_registrant_photos_delegate.php" method="post" enctype="multipart/form-data">
            <div class="modal-body">
                <input type="hidden" name="delegate_id" id="delegate_id" class="delegate_id">
                <div class="mb-4">
                    <label for="badgePhotoFile" class="form-label">Delegate's Photograph</label>
                    <input class="form-control" type="file" id="badgePhotoFile" name="nBadgePhotoFile">
                </div>
                <div>
                    <label for="govIdPhotoFile" class="form-label">Delegate's Government ID Photograph</label>
                    <input class="form-control" type="file" id="govIdPhotoFile" name="nGovIdPhotoFile">
                </div>
            </div>
            <div class="modal-footer hstack gap-2 justify-content-center">
                <a href="javascript:void(0);" type="button" class="btn btn-link link-danger" data-bs-dismiss="modal" fw-medium><i class="ri-close-line me-1 align-middle"></i> Close</a>
                <button type="submit" class="btn btn-success">Upload Photo</button>
            </div>
        </form>
    </div>
</div>