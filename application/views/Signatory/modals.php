
<div class="modal fade" id="addfaq">
        <div class="modal-dialog">
          <div class="modal-content">
            
            <div class="modal-header">
              <h4 class="modal-title">Add Signatory</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form id="myForm" method="POST" action="<?=base_url()?>Signatory_controller/signatoryadd" >
            <div class="modal-body">
                <div class="form-group">
                    <input class="form-control" type="text" name="lname" placeholder="Last Name" required>
                </div>
                <div class="form-group">
                    <input class="form-control" type="text" name="fname" placeholder="First Name" required>
                </div>
                <div class="form-group">
                    <input class="form-control" type="text" name="mname" placeholder="Middle Name">
                </div>
                <div class="form-group">
                    <input class="form-control" type="text" name="extension" placeholder="Extension ex: Sr. Jr. I, II, III">
                </div>
                <div class="form-group">
                    <input class="form-control" type="text" name="position" placeholder="Position/Designation" required>
                </div>
                <div class="form-group">
                    <select class="form-control" name="signatory_for">
                      <option>All Report</option>
                      <option>Dispersal Report</option>
                      <option>Farmer Report</option>
                      <option>Forum Report</option>
                      <option>Pet Report</option>
                      <option>User Report</option>
                    </select>
                </div>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Save</button>
            </div>
          </div>
                    </form>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->
      
<?php foreach ($signatory as $row) { ?>
<div class="modal fade" id="signatorydelete<?=$row['id'];?>">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Delete Signatory?</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            
            <div class="modal-body">
              <p>Are you sure to delete this signatory? This Process cannot be undone.&hellip;</p>
            </div>
            <div class="modal-footer justify-content-between">
              <input type="hidden" id="id" name="id" value="<?=$row['id'];?>">
              <button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button>
              <a href="<?=base_url('Signatory_controller/signatorydelete/'.$row['id'].'');?>"><button type="button" class="btn btn-danger">Delete</button></a>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
<?php }?>

<?php  foreach($signatory as $row) {?>
<div class="modal fade" id="signatoryedit<?=$row['id'];?>" role="dialog" >
        <div class="modal-dialog">
          <div class="modal-content">
           
            <div class="modal-header">
              <h4 class="modal-title">Edit Signatory</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form id="myForm" method="POST" action="<?=base_url();?>Signatory_controller/signatoryupdate/<?=$row['id'];?>" novalidate>
            <div class="modal-body">
                <div class="form-group">
                    <label for="answer">Last Name</label>
                    <input class="form-control" type="text" name="lname" value="<?=$row['lname'];?>" required>
                </div>
                <div class="form-group">
                    <label for="answer">First Name</label>
                    <input class="form-control" type="text" name="fname" value="<?=$row['fname'];?>" required>
                </div>
                <div class="form-group">
                    <label for="answer">Middle Name</label>
                    <input class="form-control" type="text" name="mname" value="<?=$row['mname'];?>">
                </div>
                <div class="form-group">
                    <label for="answer">Extension ex: Jr. Sr.</label>
                    <input class="form-control" type="text" name="extension" value="<?=$row['extension'];?>">
                </div>
                 <div class="form-group">
                    <input class="form-control" type="text" name="position" value="<?=$row['position'];?>" required>
                </div>
                <div class="form-group">
                    <select class="form-control" name="signatory_for">
                      <option><?= $row['signatory_for'];?></option>
                      <option>All Report</option>
                      <option>Dispersal Report</option>
                      <option>Farmer Report</option>
                      <option>Forum Report</option>
                      <option>Pet Report</option>
                      <option>User Report</option>
                    </select>
                </div>
            </div>
            
            <div class="modal-footer">
            <input type="hidden" name="id" value="<?=$row['id'];?>">  
          <button type="submit" class="btn btn-primary">Save</button>
            </div>
          </div>
          </form>
          
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->

<?php }?>
<script>
  $(function () {
    // Summernote
    $('#summernote').summernote()
  })
</script>