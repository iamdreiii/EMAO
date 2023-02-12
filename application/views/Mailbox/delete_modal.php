<!-- Modal -->
<div class="modal fade" id="delete_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
      </div>
      <div class="modal-body">
        <?= form_open('Mail_controller/deletemail/'.$id);?>
        <h4>Are you sure you want to delete post?</h4>
        <input type="hidden" name="id" value="<?= $id;?>">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-danger ">Delete</button>
      </div>
    </div>
  </div>
</div>

