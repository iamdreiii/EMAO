     
<!-- ============================================FORUMS=================================================== -->
<div class="modal fade" id="aht-add">
        <div class="modal-dialog">
          <div class="modal-content">
            
            <div class="modal-header">
              <h4 class="modal-title">Animal Health Tips</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form method="POST" action="<?=base_url()?>Animal_controller/insert" novalidate>
            <div class="modal-body">
                <div class="form-group">
                    <label for="link">Link</label>
                    <input type="url" name="link" class="form-control"  id="link"   placeholder="https://example.com"
                pattern="https://.*">
                  </div>
                  <div class="form-group">
                    <label for="title">Title</label>
                    <input type="title" name="title"  class="form-control" id="title" placeholder="Enter Health Tips Title">
                  
                  </div>
                  <div class="form-group">
                    <label for="subtitle">SubTitle</label>
                    <input type="subtitle" name="subtitle"  class="form-control" id="subtitle" placeholder="Enter SubTitle">
                    
                  </div>
                  
                  <div class="form-group">
                    <label for="body">Body</label>
                    <textarea name="body"  rows="4" id="summernote" class="form-control" placeholder="Enter Body here." value="<?=set_value('body');?>"></textarea>
                    
                  </div>
            </div>
            
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Insert</button>
            </div>
            </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->

<!-- ============================================================================================= -->
<?php foreach ($aht as $row) { ?>
<div class="modal fade" id="aht-delete<?=$row['id'];?>">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Are you sure to delete this?</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="<?=base_url()?>Animal_controller/delete" method="POST">
            <div class="modal-body">
              <p>This Process cannot be undone.&hellip;</p>
            </div>
            <div class="modal-footer justify-content-between">
              <input type="hidden" id="id" name="id" value="<?=$row['id'];?>">
              <button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button>
              <button type="submit" class="btn btn-danger">Delete</button>
            </div>
            </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <?php }?>
<!-- ============================================================================================= -->
<?php foreach ($aht as $row) { ?>
 <div class="modal fade" id="aht-edit<?= $row['id'];?>">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Animal Health Details</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form id="myForm" method="POST" action="<?=base_url()?>Animal_controller/update/<?=$row['id'];?>" novalidate>
            <div class="modal-body">
            <div class="form-group">
                    <label for="link">Link</label>
                    <input type="url" name="link" class="form-control"  id="link"   placeholder="https://example.com"
                pattern="https://.*" value="<?=$row['link'];?>">
                  </div>
                  <div class="form-group">
                    <label for="title">Title</label>
                    <input type="title" name="title"  class="form-control" id="title" placeholder="Enter Health Tips Title" value="<?=$row['title'];?>">
                  
                  </div>
                  <div class="form-group">
                    <label for="subtitle">SubTitle</label>
                    <input type="subtitle" name="subtitle"  class="form-control" id="subtitle" placeholder="Enter SubTitle" value="<?=$row['subtitle'];?>">
                    
                  </div>
                  
                  <div class="form-group">
                    <label for="body">Body</label>
                    <textarea name="body"  rows="4" id="summernote" class="form-control" placeholder="Enter Body here." ><?=$row['body'];?></textarea>
                    
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
      

      