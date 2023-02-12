<?php foreach($commentview as $row){ ?>
<!-- Modal -->
<div class="modal fade modal-container login-form" id="cdel<?=$row['id']?>" tabindex="-1" role="dialog" aria-labelledby="loginModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header align-items-center">
                <h5 class="modal-title" id="loginModalTitle">Delete Comment?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="la la-times"></span>
                </button>
            </div>
            <form action="<?=base_url();?>Forum_controller/cdelete" method="POST">
            <div class="modal-body">
              <div class="card-body">
                  
                </div>
            </div>
            <div class="modal-footer center">
                    <input type="hidden" name="id" value="<?=$row['id'];?>">
                    <input type="hidden" name="qid_id" value="<?= $this->uri->segment(2)?>">
                    <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-outline-danger">Delete</button>
                </div>
            </form>
    </div>
</div>
</div>
<?php }?>
<?php foreach($commentview as $row){ ?>
<!-- Modal -->
<div class="modal fade modal-container login-form" id="cedit<?=$row['id']?>" tabindex="-1" role="dialog" aria-labelledby="loginModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header align-items-center">
                <h5 class="modal-title" id="loginModalTitle">Comment Details</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="la la-times"></span>
                </button>
            </div>
            <form action="<?=base_url();?>Forum_controller/cupdate" method="POST">
            <div class="modal-body">
                <div class="form-group">
                    <label class="fs-14 text-black fw-medium lh-18">Comment</label>
                    <input type="text" name="comment" id="comment" class="form-control form--control" placeholder="Comment" value="<?=ucfirst($row['comment']);?>" required>
                </div>
            </div>
            <div class="modal-footer center">
                    <input type="hidden" name="id" value="<?=$row['id'];?>">
                    <input type="hidden" name="qid_id" value="<?= $this->uri->segment(2)?>">
                    <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-outline-success">Update</button>
                </div>
            </form>
            
    </div>
</div>
</div>
<?php }?>