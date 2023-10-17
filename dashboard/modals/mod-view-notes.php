<div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content border-0">
        <div class="modal-header p-3 bg-soft-info">
            <h5 class="modal-title" id="exampleModalLabel">VIEW APPLICANT NOTES</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close-modal"></button>
        </div>
        <div>
          </div>
              <table id="view-notes" class="display table table-bordered dt-responsive" style="width:100%">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Contents</th>
                    <th>From</th>
                    <th>Date Created</th>
                </tr>
            </thead>
        </table>
       
        <div class="modal-footer">
            <div class="hstack gap-2 justify-content-end">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                <!-- <button type="submit" id="add-btn" class="btn btn-success custom-toggle">
                    <span class="icon-on"><i class="ri-thumb-up-line align-bottom me-1"></i> Submit Note</span>
                </button> -->
            </div>
        </div>

    </div>
</div>

<!-- Include the combined JavaScript code for form submission and SweetAlert -->


<style>
    #view-notes thead th,
    #view-notes tfoot th {
        color: white;
        background-color: #0a2b3d;
    }

    #view-notes td {
        word-wrap: break-word;
    }
</style>