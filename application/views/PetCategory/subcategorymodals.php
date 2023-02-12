
<div class="modal fade" id="addbreed">
        <div class="modal-dialog">
          <div class="modal-content">
            
            <div class="modal-header">
              <h4 class="modal-title">Add SubCategory/Breeds</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form id="myForm" method="POST" action="<?=base_url()?>PetCategory_controller/subcategoryadd" >
            <div class="modal-body">
                <div class="form-group">
                   <select class="form-control" name="cat_id" required>
                    <?php foreach ($petcategory as $row) { ?>
                     <option value="<?= $row['cat_id'];?>"><?= $row['category'];?></option>
                   <?php }?>
                   </select>
                </div>
                <div class="form-group">
                    <input class="form-control" type="text" name="subcategory" placeholder="SubCategory/Breeds" required>
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
      
<?php foreach ($petsubcategory as $row) { ?>
<div class="modal fade" id="subcategorydelete<?=$row['id'];?>">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Delete Category?</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            
            <div class="modal-body">
              <p>Are you sure to delete this subcategory/breed? This Process cannot be undone.&hellip;</p>
            </div>
            <div class="modal-footer justify-content-between">
              <input type="hidden" id="id" name="id" value="<?=$row['id'];?>">
              <button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button>
              <a href="<?=base_url('PetCategory_controller/subcategorydelete/'.$row['id'].'');?>"><button type="button" class="btn btn-danger">Delete</button></a>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
<?php }?>

<?php  foreach($petsubcategory as $row) {?>
<div class="modal fade" id="subcategoryedit<?=$row['id'];?>" role="dialog" >
        <div class="modal-dialog">
          <div class="modal-content">
           
            <div class="modal-header">
              <h4 class="modal-title">Edit SubCategory/Breed</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form id="myForm" method="POST" action="<?=base_url();?>PetCategory_controller/subcategoryupdate/<?=$row['id'];?>" novalidate>
            <div class="modal-body">
                 <div class="form-group">
                    <input class="form-control" type="text" name="subcategory" value="<?=$row['subcategory'];?>" required>
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