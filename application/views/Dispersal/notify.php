 <?php foreach($alldispersal as $row) { 
$dateformat1 = date('m/d/y', strtotime($row['calvingstart']));
$dateformat2 = date('m/d/y');
$date1 = new DateTime($dateformat1);
$date2 = new DateTime($dateformat2);
$diff = $date1->diff($date2);
?> 

 <div class="modal fade" id="notifyModal<?= $row['id']?>">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Email Dispersal Due Date </h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form method="POST" action="<?=base_url();?>Dispersal_controller/notifyemail">
            <div class="modal-body">
              
                <div class="form-group">
                  <input type="email" name="email" class="form-control" placeholder="To :" value="<?= $row['email'];?>">
                </div>
                <div class="form-group">
                  <input class="form-control" placeholder="Subject :"  type="text" name="subject" value="Dispersal Due ">
                </div>
                <div class="form-group">
                    <textarea  name="message" class="form-control" style="height: 200px">Estimated Animal Dispersal Period is <?= $diff->days;?> days from today. Please be reminded that we will be paying a visit to check your animal - Municipal Agriculture Office</textarea>
                </div>
                
            </div>

            
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
             <input type="hidden" id="contact" name="contact" value="<?=$row['contact']?>">
             <button type="submit" class="btn btn-primary"><i class="far fa-envelope"></i> Notify</button>
            </div>
            </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->
      <?php }?>

