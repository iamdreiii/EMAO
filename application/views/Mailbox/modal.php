<div class="modal fade modal-container login-form" id="edit" tabindex="-1" role="dialog" aria-labelledby="loginModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header align-items-center">
                <h5 class="modal-title" id="loginModalTitle">Response Time</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="la la-times"></span>
                </button>
            </div>
            <form action="<?=base_url();?>Mail_controller/resp_update" method="POST">
            <div class="modal-body">
            <div class="input-box">
                <label class="fs-14 text-black fw-medium mb-0">Average Response Time</label>
                <div class="form-group">
                <?php foreach($resp as $row){?>
                <input type="text" class="form-control" name="response" list="response" placeholder="<?=$row['response']?>">
                <?php }?>    
                <datalist id="response">
                        <option value="within an hour">
                        <option value="1-2 hours">
                        <option value="2-3 hours">
                        <option value="within a day">
                    </datalist>
                </div>
            </div><!-- end input-box -->
            </div>
            <div class="modal-footer center">
                    <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-outline-success">Update</button>
                </div>
            </form>
            
    </div>
</div>
</div>