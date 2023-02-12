<div class="modal fade" id="modal-default">
        <div class="modal-dialog">
          <div class="modal-content">
            
            <div class="modal-header">
              <h4 class="modal-title">Create Schedule</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="<?=base_url()?>Vaccination_controller/addsched" method="POST">
            <div class="modal-body">
              <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-syringe"></i></span>
                  </div>
                  <input type="text" class="form-control" id="title" name="title" placeholder="Title" required="title">
                </div>

                <!--  -->
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-location-arrow"></i></span>
                  </div>
                  <textarea name="description" class="form-control" rows="5">Description</textarea>
                </div>
                <!--  -->
              <label for="start_datetime">Start DateTime:</label> <br>
              <div class="input-group mb-3">

                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-clock"></i></span>
                  </div>
                  
                  <input class="form-control" type="datetime-local" id="start_datetime" name="start_datetime" placeholder="Start Time" required="start_datetime">
                </div>
                <!--  -->
              <label for="start_time">End DateTime:</label> <br>
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-clock"></i></span>
                  </div>
                  <input class="form-control" type="datetime-local" id="end_datetime" name="end_datetime" placeholder="End Time" required="end_datetime">
                </div>
                <!--  -->
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Post</button>
            </div>
            </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->
<!-- ==================================================================================== -->


<!-- ============================================================================================ -->
<?php foreach ($allsched as $row){ ?>
<div class="modal fade" id="modal-view<?= $row['id'];?>">
        <div class="modal-dialog">
          <div class="modal-content">
          
            <div class="modal-header">
              <h4 class="modal-title">View Schedule</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-syringe"></i></span>
                  </div>
                  <input type="text" class="form-control" name="title" placeholder="Vaccine" required="vaccine" value="<?=$row['title'];?>">
                </div>

                <!--  -->
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-location-arrow"></i></span>
                    </div>
                  <textarea name="description" class="form-control" rows="5"><?=$row['description'];?></textarea>
                  </div>
                
                <!--  -->
              <label for="start_time">Start DateTime:</label> <br>
              <div class="input-group mb-3">

                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-clock"></i></span>
                  </div>
                  
                  <input class="form-control" type="datetim-local" id="start_time" name="start_datetime" placeholder="Start Time" required="start_time" value="<?=$row['start_datetime'];?>">
                </div>
                <!--  -->
              <label for="start_time">End Time:</label> <br>
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-clock"></i></span>
                  </div>
                  <input class="form-control" type="datetim-local" id="end_datetime" name="end_time" placeholder="End Time" required="end_time" value="<?=$row['end_datetime'];?>">
                </div>
                <!--  -->
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->
<?php }?>
<!-- ================================================================================================ -->
<?php foreach ($allsched as $row) { ?>
<div class="modal fade" id="modal-edit<?= $row['id'];?>">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">View Schedule</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form id="myForm" method="POST" action="<?=base_url();?>updatesched/<?=$row['id'];?>" novalidate>
            <div class="modal-body">
              <div class="form-group mb-3">
                  <input type="text" class="form-control" name="title" placeholder="Vaccine" value="<?=$row['title'];?>" required>
                </div>
                <!--  -->
              <div class="form-group mb-3">
                <textarea name="description" class="form-control" rows="5"><?=$row['description'];?></textarea>
                </div>
                <!--  -->
              <label for="start_datetime">Start Time:</label> <br>
              <div class="form-group mb-3">
                  <input class="form-control" type="datetime-local"  name="start_datetime" placeholder="Start Time"  value="<?=$row['start_datetime'];?>" required>
                </div>
                <!--  -->
              <label for="start_datetime">End Time:</label> <br>
              <div class="form-group mb-3">
                  <input class="form-control" type="datetime-local" name="end_datetime" placeholder="End Time"  value="<?=$row['end_datetime'];?>" required>
                </div>
                <!--  -->
            </div>
            <div class="modal-footer justify-content-between">
              
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
               
             <button type="submit"  class="btn btn-primary">Update</button>
            </div>
         </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->



 <div class="modal fade" id="modal-default<?= $row['id'];?>">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Edit Schedule</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form id="myForm" method="POST" action="<?=base_url()?>Vaccination_controller/updatesched/<?=$row['id'];?>" novalidate>
            <div class="modal-body">
            <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-syringe"></i></span>
                  </div>
                  <input type="text" class="form-control" id="title" name="title" placeholder="Title" value="<?=$row['title'];?>">
                </div>
                <!--  -->
                <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-location-arrow"></i></span>
                  </div>
                  <textarea name="description" class="form-control" rows="5"><?=$row['description'];?></textarea>
                </div>
                <!--  -->
              <label for="start_datetime">Start Time:</label> <br>
              <div class="form-group mb-3">
                  <input class="form-control" type="datetime-local"  name="start_datetime" placeholder="Start Time"  value="<?=$row['start_datetime'];?>" required>
                </div>
                <!--  -->
              <label for="start_datetime">End Time:</label> <br>
              <div class="form-group mb-3">
                  <input class="form-control" type="datetime-local" name="end_datetime" placeholder="End Time"  value="<?=$row['end_datetime'];?>" required>
                </div>
                <!--  -->
            </div>
            <div class="modal-footer justify-content-between">
              <input type="hidden" name="id" value="<?=$row['id'];?>">
              <button type="submit" class="btn btn-primary">Update</button>
              <a href="<?=base_url();?>Vaccination_controller/sched_remove/<?=$row['id'];?>"><button type="button" class="btn btn-danger">Delete</button></a>
            </div>
         </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->
      <?php }?>