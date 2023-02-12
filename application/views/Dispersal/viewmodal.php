<?php foreach($alldispersal as $row) { ?>
<div class="modal fade" id="animalmodal<?= $row['id'];?>">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Dispersal Information</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="card-body">
            
              <div class="col-12">
                <!-- IF COW -->
                <?php if($row['type'] == 'cow') {?>
                <h2 class="lead"><b>Type :</b> <?php if($row['type'] == 'cow'){ echo 'COW';}elseif($row['type'] == 'carabao'){ echo 'CARABAO';}elseif($row['type'] == 'goat'){ echo 'GOAT';}elseif($row['type'] == 'pig'){ echo 'PIG';}?></h2>
                  <p class="text-muted  justify-content-between"><b>Dispersal Info: <br></b>
                  &emsp;<b>Exposed Date: </b><?php echo date('M d, Y ', strtotime($row['exposed'])); ?><br>
                  &emsp;<b>Calving Start: </b><?php echo date('M d, Y ', strtotime($row['calvingstart'])); ?><br> 
                  &emsp;<b>End of PostPartum: </b><?php $date = date('M d, Y ', strtotime($row['calvingstart'].' + 55 day')); echo $date; ?><br> 
                  </p>

                  <p class="text-muted  justify-content-between"><b>Owner Info:</b><br>
                  &emsp;Owner Name: <?=$row['owner'];?><br>
                  &emsp;Owner Email: <?=$row['email'];?><br>
                  &emsp;Owner Contact: <?=$row['contact'];?><br>
                  &emsp;Address: <?=$row['address'];?></p>
                  <h5 class="text-warning text-md">This is based on average Dispersal Period/Species!</h5>
                
                <!-- IF CARABAO -->
                <?php }elseif($row['type'] == 'carabao') {?>
                <h2 class="lead"><b>Type :</b> <?php if($row['type'] == 'cow'){ echo 'COW';}elseif($row['type'] == 'carabao'){ echo 'CARABAO';}elseif($row['type'] == 'goat'){ echo 'GOAT';}elseif($row['type'] == 'pig'){ echo 'PIG';}?></h2>
                  <p class="text-muted  justify-content-between"><b>Dispersal Info: <br></b>
                  &emsp;<b>Exposed Date: </b><?php echo date('M d, Y ', strtotime($row['exposed'])); ?><br>
                  &emsp;<b>Calving Start: </b><?php echo date('M d, Y ', strtotime($row['calvingstart'])); ?><br> 
                  &emsp;<b>End of PostPartum: </b><?php $date = date('M d, Y ', strtotime($row['calvingstart'].' + 60 day')); echo $date; ?> - <?php $date = date('M d, Y ', strtotime($row['calvingstart'].' + 90 day')); echo $date; ?><br> 
                  </p>

                  <p class="text-muted  justify-content-between"><b>Owner Info:</b><br>
                  &emsp;Owner Name: <?=$row['owner'];?><br>
                  &emsp;Owner Email: <?=$row['email'];?><br>
                  &emsp;Owner Contact: <?=$row['contact'];?><br>
                  &emsp;Address: <?=$row['address'];?></p>
                  <h5 class="text-warning text-md">This is based on average Dispersal Period/Species!</h5>

                <!-- IF GOAT  -->
                <?php }elseif($row['type'] == 'goat') {?>
                <h2 class="lead"><b>Type :</b> <?php if($row['type'] == 'cow'){ echo 'COW';}elseif($row['type'] == 'carabao'){ echo 'CARABAO';}elseif($row['type'] == 'goat'){ echo 'GOAT';}elseif($row['type'] == 'pig'){ echo 'PIG';}?></h2>
                  <p class="text-muted  justify-content-between"><b>Dispersal Info: </b><br>
                  &emsp;<b>Exposed Date: </b><?php echo date('M d, Y ', strtotime($row['exposed'])); ?><br>
                  &emsp;<b>Dispersal Start: </b><?php echo date('M d, Y ', strtotime($row['calvingstart'])); ?><br> 
                  
                  </p>

                  <p class="text-muted  justify-content-between"><b>Owner Info:</b><br>
                  &emsp;Owner Name: <?=$row['owner'];?><br>
                  &emsp;Owner Email: <?=$row['email'];?><br>
                  &emsp;Owner Contact: <?=$row['contact'];?><br>
                  &emsp;Address: <?=$row['address'];?></p>
                  <h5 class="text-warning text-md">This is based on average Dispersal Period/Species!</h5>

                  <!-- IF PIG -->
                  <?php }elseif($row['type'] == 'pig') {?>
                  <h2 class="lead"><b>Type :</b> <?php if($row['type'] == 'cow'){ echo 'COW';}elseif($row['type'] == 'carabao'){ echo 'CARABAO';}elseif($row['type'] == 'goat'){ echo 'GOAT';}elseif($row['type'] == 'pig'){ echo 'PIG';}?></h2>
                  <p class="text-muted  justify-content-between"><b>Dispersal Info: </b><br>
                  &emsp;<b>Exposed Date: </b><?php echo date('M d, Y ', strtotime($row['exposed'])); ?><br>
                  &emsp;<b>Dispersal Start: </b><?php echo date('M d, Y ', strtotime($row['calvingstart'])); ?><br> 
                  
                  </p>
                  <p class="text-muted  justify-content-between"><b>Owner Info:</b><br>
                  &emsp;Owner Name: <?=$row['owner'];?><br>
                  &emsp;Owner Email: <?=$row['email'];?><br>
                  &emsp;Owner Contact: <?=$row['contact'];?><br>
                  &emsp;Address: <?=$row['address'];?></p>
                  <h5 class="text-warning text-md">This is based on average Dispersal Period/Species!</h5>
                <?php }?>
            </div>
          </div>
      </div>
      <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <!--  <button type="button" class="btn btn-primary">Save changes</button> -->
        <!--  -->
      </div>
    </div>
  </div>
</div>
<?php }?>


