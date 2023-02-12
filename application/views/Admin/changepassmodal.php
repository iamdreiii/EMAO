<div class="modal fade" id="admin-pass">
    <?=form_open(base_url().'Admin_controller/changeadminpass')?>
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title">Change Admin Password</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
        <label class="fs-14 text-black fw-medium lh-18">Password</label>
        <div class="input-group">
            <input type="password" name="password" autocomplete="current-password" class="form-control" required="" id="id_password">
            <i class="far fa-eye" id="togglePassword" style="margin-top: 8px;margin-left: 10px; cursor: pointer;"></i>
        </div>
        </div>
        <div class="modal-footer justify-content-between">
            <input type="hidden" id="id" value="<?=$this->session->email?>" name="id">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <?=form_close()?>
<!-- /.modal-dialog -->
</div>
<script>
    const togglePassword = document.querySelector('#togglePassword');
  const password = document.querySelector('#id_password');

  togglePassword.addEventListener('click', function (e) {
    // toggle the type attribute
    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    password.setAttribute('type', type);
    // toggle the eye slash icon
    this.classList.toggle('fa-eye-slash');
});
</script>