
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content border-0">
            <div class="modal-header p-3 bg-soft-info">
                <h5 class="modal-title" id="exampleModalLabel">ADD NEW REGISTRANT</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close-modal"></button>
            </div>
            <form class="tablelist-form" autocomplete="off">
                <div class="modal-body">
                    <div class="row g-3">
                     <div class="col-lg-12">
                            <div id="modal-id">
                                <label for="orderId" class="form-label">ID</label>
                                <input type="text" id="orderId" class="form-control" placeholder="ID" value="#VLZ462" readonly />
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div>
                                <label for="tasksTitle-field" class="form-label">Title</label>
                                <input type="text" id="tasksTitle-field" class="form-control" placeholder="Title" required />
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div>
                                <label for="client_nameName-field" class="form-label">Client Name</label>
                                <input type="text" id="client_nameName-field" class="form-control" placeholder="Client Name" required />
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div>
                                <label for="assignedtoName-field" class="form-label">Assigned To</label>
                                <input type="text" id="assignedtoName-field" class="form-control" placeholder="Assigned to" required />
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <label for="date-field" class="form-label">Create Date</label>
                            <input type="text" id="date-field" class="form-control" data-provider="flatpickr" data-date-format="d M, Y" placeholder="Create Date" required />
                        </div>
                        <div class="col-lg-6">
                            <label for="duedate-field" class="form-label">Due Date</label>
                            <input type="text" id="duedate-field" class="form-control" data-provider="flatpickr" data-date-format="d M, Y" placeholder="Due Date" required />
                        </div>
                        <div class="col-lg-6">
                            <label for="ticket-status" class="form-label">Status</label>
                            <select class="form-control" data-plugin="choices" name="ticket-status" id="ticket-status">
                                <option value="">Status</option>
                                <option value="New">New</option>
                                <option value="Inprogress">Inprogress</option>
                                <option value="Closed">Closed</option>
                                <option value="Open">Open</option>
                            </select>
                        </div>
                        <div class="col-lg-6">
                            <label for="priority-field" class="form-label">Priority</label>
                            <select class="form-control" data-plugin="choices" name="priority-field" id="priority-field">
                                <option value="">Priority</option>
                                <option value="High">High</option>
                                <option value="Medium">Medium</option>
                                <option value="Low">Low</option>
                            </select>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <div class="hstack gap-2 justify-content-end">
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success" id="add-btn">Add Ticket</button>
                        <!-- <button type="button" class="btn btn-success" id="edit-btn">Update</button> -->
                    </div>
                </div>
            </form>
        </div>
    </div>
