
<div class="modal fade" id="addfaq">
        <div class="modal-dialog">
          <div class="modal-content">
            
            <div class="modal-header">
              <h4 class="modal-title">Add Category/Species</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form id="myForm" method="POST" action="<?=base_url()?>PetCategory_controller/categoryadd" >
            <div class="modal-body">
                <div class="form-group">
                    <input class="form-control" type="text" name="category" placeholder="Category" required>
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
      
<?php foreach ($petcategory as $row) { ?>
<div class="modal fade" id="categorydelete<?=$row['cat_id'];?>">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Delete Category?</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            
            <div class="modal-body">
              <p>Are you sure to delete this category? This Process cannot be undone.&hellip;</p>
            </div>
            <div class="modal-footer justify-content-between">
              <input type="hidden" id="id" name="id" value="<?=$row['cat_id'];?>">
              <button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button>
              <a href="<?=base_url('PetCategory_controller/categorydelete/'.$row['cat_id'].'');?>"><button type="button" class="btn btn-danger">Delete</button></a>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
<?php }?>

<?php  foreach($petcategory as $row) {?>
<div class="modal fade" id="categoryedit<?=$row['cat_id'];?>" role="dialog" >
        <div class="modal-dialog">
          <div class="modal-content">
           
            <div class="modal-header">
              <h4 class="modal-title">Edit Category</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form id="myForm" method="POST" action="<?=base_url();?>PetCategory_controller/categoryupdate/<?=$row['cat_id'];?>" novalidate>
            <div class="modal-body">
                 <div class="form-group">
                    <input class="form-control" type="text" name="category" value="<?=$row['category'];?>" required>
                </div>
            </div>
            
            <div class="modal-footer">
            <input type="hidden" name="id" value="<?=$row['cat_id'];?>">  
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