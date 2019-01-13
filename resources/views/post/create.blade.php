<!-- Modal -->
<div class="modal fade" id="create" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            <div class="modal-body">
                <form method="post" action="{{ route('post.store') }}">
                    @csrf
                    <div class="form-group">
                        <label for="">Title</label>
                        <input type="text" class="form-control" name="title" placeholder="Title" required>
                        <small id="emailHelpId" class="form-text text-muted">Judul post</small>
                    </div>
                    <div class="form-group">
                        <label for="">Content</label>
                        <textarea name="content" class="form-control" placeholder="Content" cols="30" rows="5" required></textarea>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-outline-success">Simpan Data</button>
            </div>
                </form>
        </div>
    </div>
</div>