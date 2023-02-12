 <?php foreach($alldispersalconsultation as $row) { ?>
 <div class="modal fade" id="viewconsult<?= $row['id'];?>">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Consultation Information</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="card-body">
                  
                    <div class="col-12">
                      <h2 class="lead"><b>Owner Name :</b> <?=$row['lastname'];?> <?=$row['firstname'];?> </h2>
                        <p class="justify-content-between"><b>Information: <br></b>
                        &emsp;Email add: <?=$row['email'];?><br>
                        &emsp;Contact: <?=$row['contact'];?><br> 
                        &emsp;Address: <?=$row['location'];?><br> 
                       </p>

                        <p class="justify-content-between"><b>Dispersal Info:</b><br>
                        &emsp;Animal Species: <?=$row['type'];?><br>
                        &emsp;Animal Name: <?=$row['animalname'];?><br>
                        &emsp;Age: <?=$row['age'];?><br>
                        &emsp;Last Dispersal: <?=$row['lastdispersal'];?><br>
                       &emsp;Description: <?=$row['description'];?></p>
                      
                   
                   
                  </div>
                </div>

            </div>
            
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
             <!--  <button type="button" class="btn btn-primary">Save changes</button> -->
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->
      <?php }?>