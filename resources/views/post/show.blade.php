<!-- Modal -->
<div class="modal fade" id="detail" tabindex="-1" role="dialog" aria-labelledby="modelTitleId">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" readonly id="title" placeholder="Title" required>
                    <small id="emailHelpId" class="form-text text-muted">Judul post</small>
                </div>
                <div class="form-group">
                    <label for="">Content</label>
                    <textarea id="content" readonly class="form-control" placeholder="Content" cols="30" rows="5" required></textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>