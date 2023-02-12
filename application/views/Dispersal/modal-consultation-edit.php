 <?php foreach ($alldispersalconsultation as $row) {?>
 <div class="modal fade" id="modal-default<?= $row['id'];?>">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Update Status</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form id="myForm" method="POST" action="<?=base_url();?>Dispersal_controller/consultation_update" novalidate>
            <div class="modal-body">
             <div class="form-group">
                  <label for="status">Consultation Status</label>
                  <select class="custom-select rounded-0" name="status" id="status" value="<?= set_value('status');?>">
                     <option selected="true" disabled="disabled">Select</option>
                    <option value="0">Accepted</option>
                    <option value="2" type>OnGoing</option>
                    <option value="1">Pending</option>
                  </select>
                </div>
            </div>
            <div class="modal-footer justify-content-between">
              
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <input type="hidden" name="id" value="<?=$row['id'];?>">
              <input type="hidden" name="email" value="<?=$row['email'];?>">
             <button type="submit"  class="btn btn-primary">Update</button>
            </div>
         </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->
<?php }?>