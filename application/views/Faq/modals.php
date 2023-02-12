
<div class="modal fade" id="addfaq">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            
            <div class="modal-header">
              <h4 class="modal-title">Create Topic Form</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form id="myForm" method="POST" action="<?=base_url()?>Faq_controller/faqadd" >
            <div class="modal-body">
            <label for="question">Question</label>
              <div class="input-group mb-3">
                  <input type="text" class="form-control" id="question" name="question" placeholder="Enter Question" required>
                </div>
               
                <div class="form-group">
                    <label for="description">Answer</label>
                    <textarea id="summernote" name="answer"   rows="8" class="form-control"  required></textarea>
                  
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
      
      <?php foreach ($faqs as $row) { ?>
<div class="modal fade" id="faqdelete<?=$row['id'];?>">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Delete FAQ?</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            
            <div class="modal-body">
              <p>Are you sure to delete this Question? This Process cannot be undone.&hellip;</p>
            </div>
            <div class="modal-footer justify-content-between">
              <input type="hidden" id="id" name="id" value="<?=$row['id'];?>">
              <button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button>
              <a href="<?=base_url('Faq_controller/faqdelete/'.$row['id'].'');?>"><button type="button" class="btn btn-danger">Delete</button></a>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
<?php }?>

<?php  foreach($faqs as $row) {?>
<div class="modal fade" id="faqedit<?=$row['id'];?>" role="dialog" >
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
           
            <div class="modal-header">
              <h4 class="modal-title">Edit FAQ Form</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form id="myForm" method="POST" action="<?=base_url();?>Faq_controller/updatefaq/<?=$row['id'];?>" novalidate>
            <div class="modal-body">
            <div class="form-group">
                    <label for="answer">Question</label>
                    <input class="form-control" type="text" name="question" id="question" value="<?=$row['question'];?>" required>
                </div>
                <div class="form-group">
                    <label for="answer">Answer</label>
                    <textarea id="summernotes<?=$row['id'];?>" name="answer" class="form-control" rows="8"   required><?=$row['answer'];?></textarea>
                    <script>
                      $(function () {
                        // Summernote
                        $('#summernotes<?=$row['id'];?>').summernote()
                      })
                    </script>
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