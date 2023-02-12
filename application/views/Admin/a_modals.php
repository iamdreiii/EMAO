<div class="modal fade" id="addpost">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <form method="post" action="<?=base_url('Admin_controller/addpost')?>" enctype="multipart/form-data">
            <div class="modal-header bg-primary">
              <h4 class="modal-title">Post Update</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            
              <div class="card-body">
                <div class="col-sm-12">
                      <label>Background Image</label>
                      <div class="custom-file">
                         <input class="form-control" type="file" id="postimage" name="postimage" size="33"  />
                      </div>
                    </div><br>
                <div class="col-sm-12">
                  <label>Title</label>
                  <input class="form-control" type="text" id="title" name="title"  required="title">
                </div><br>
                
                <div class="col-sm-12">
                  <label>SubTitle</label>
                  <input class="form-control" type="text" id="subtitle" name="subtitle"  required="subtitle">
                </div><br>
                <div class="col-sm-12">
                  <label>Body</label>
                  <textarea name="body" type="text" rows="6" id="summernote" class="form-control" placeholder="Enter Body here."></textarea>
                </div><br>
                
              </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->
<?php foreach($allpost as $row){?>
<div class="modal fade" id="edit<?=$row['id'];?>">
  <div class="modal-dialog">
    <div class="modal-content">
      <form method="POST" action="<?=base_url('Admin_controller/updateannounce')?>" enctype="multipart/form-data">
      <div class="modal-header bg-primary">
        <h4 class="modal-title">Update Post</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <div class="card-body">
          <div class="col-sm-12">
            <label>Title</label>
            <input class="form-control" type="text" id="title" name="title" value="<?=$row['title'];?>" required="title">
          </div><br>
          
          <div class="col-sm-12">
            <label>SubTitle</label>
            <input class="form-control" type="text" id="subtitle" name="subtitle" value="<?=$row['subtitle'];?>" required="subtitle">
          </div><br>
          <div class="col-sm-12">
            <label>Body</label>
            <textarea name="body" type="text" rows="4" class="form-control" placeholder="Enter Body here."><?=$row['body'];?></textarea>
          </div><br>
          
        </div>
      <div class="modal-footer justify-content-between">
        <input type="hidden" id="id" name="id" value="<?=$row['id'];?>">
        <a href="<?=base_url()?>Admin_controller/deletepost/<?=$row['id']?>"><button type="button" class="btn btn-danger" >Delete</button></a>
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
<?php }?>
<?php foreach($allpost as $row){?>
<div class="modal fade" id="modal-lg<?=$row['id'];?>">
        <div class="modal-dialog modal-md">
          <div class="modal-content">
            <div class="modal-header bg-info">
              <h4 class="modal-title">View Update Info</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <strong>Title : </strong> <?=$row['title'];?><br>
              <strong>Subtitle :</strong> <?=$row['subtitle'];?><br>
              <strong>Body :</strong><p> <?=$row['body'];?>&hellip;</p>
            </div>
            <div class="col-auto">
              <label>Background Image :</label>
                  <?php if ($row['pic_file']){ ?>
                     <img class="img-fluid" src="<?=base_url();?>assets/media/announcement/<?=$row['pic_file'];?>" alt="<?=$row['pic_file'];?>" width="1024" height="768">
                  <?php }else{ ?>
                  <?= 'No Background Image';?>
                  <?php } ?>
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

<?php foreach($allpost as $row){?>
<div class="modal fade" id="image<?=$row['id'];?>">
        <div class="modal-dialog modal-md">
          <div class="modal-content">
            <form method="post" action="<?=base_url();?>Admin_controller/updateimage" enctype="multipart/form-data">
            <div class="modal-header bg-warning">
              <h4 class="modal-title">Edit Post Update</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            
              <div class="card-body">
                <div class="col-sm-12">
                      <label>Background Image</label>
                      <div class="custom-file">
                         <!-- <input class="form-control" type="file" id="postimage" name="postimage" size="60"  /> -->
                         <input type="file" class="custom-file-input" id="customFile" name="postimage" size="60">
                        <label class="custom-file-label" for="customFile">Choose file</label>
                      </div>
                    </div>
              </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <input type="hidden" name="id" value="<?= $row['id'];?>">
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
<script>
$(function () {
  bsCustomFileInput.init();
});
</script>