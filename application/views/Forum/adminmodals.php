<div class="modal fade" id="category-add">
        <div class="modal-dialog">
          <div class="modal-content">
            
            <div class="modal-header">
              <h4 class="modal-title">Category Form</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form method="post" action="<?=base_url()?>Forum_controller/addcategory" novalidate>
            <div class="modal-body">
              <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-folder"></i></span>
                  </div>
                  <input type="text" class="form-control" id="categoryadd" name="categoryadd" placeholder="Category Name" required="categoryadd">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea name="descriptionadd"  rows="4" class="form-control"  required="descriptionadd"></textarea>
                    
                  </div>
            </div>
            
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Save</button>
            </div>
            </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->

<!-- ============================================================================================= -->
<?php foreach ($categories as $row) { ?>
<div class="modal fade" id="delete-modal<?=$row['id'];?>">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Are you sure to delete (<?=$row['category'];?>) category?</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            
            <div class="modal-body">
              <p>This Process cannot be undone.&hellip;</p>
            </div>
            <div class="modal-footer justify-content-between">
              <input type="hidden" id="id" name="id" value="<?=$row['id'];?>">
              <button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button>
              <a href="<?=base_url('Forum_controller/deletecategory/'.$row['id'].'');?>"><button type="button" class="btn btn-danger">Delete</button></a>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <?php }?>
<!-- ============================================================================================= -->
<?php foreach ($categories as $row) { ?>
 <div class="modal fade" id="category-edit<?= $row['id'];?>">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Category Details</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form id="myForm" method="POST" action="<?=base_url()?>Forum_controller/updatecategory/<?=$row['id'];?>" novalidate>
            <div class="modal-body">
              <div class="form-group mb-3">
                  <input type="text" class="form-control" name="category" placeholder="Category Name" value="<?=$row['category'];?>" required>
                </div>
                <!--  -->
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea id="summernote" name="description"  rows="4"  dialogs-in-body="true" class="form-control"   required><?=$row['description'];?></textarea>
                   
                  </div>
                  
            </div>
            <div class="modal-footer ">
              <input type="hidden" name="id" value="<?=$row['id'];?>">
              <button type="submit" class="btn btn-primary">Update</button>
              
            </div>
         </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->
      
      <?php }?>
      

 