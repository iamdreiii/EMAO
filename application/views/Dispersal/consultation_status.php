
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Consultation Status</h1>
          </div><!-- /.col -->
          
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            

            <div class="card">
             
              <!-- /.card-header -->
              <div class="card-body table-responsive">

                <table id="s" class="table  table-striped">
                  <thead style="background-color: rgb(204,204,0);">

                  <tr>
                    <th>#</th>
                    <th>Owner' Name</th>
                    <th>Address</th>
                    <th>Animal Name</th>
                    <th>Type</th>
                    <th>Status</th>
                    <th style="width:10%">Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php foreach ($userCstat as $row){ ?>
                    <tr>
                    <td><?= $row['id'];?></td>
                    <td><?= $row['lastname'];?>, <?= $row['firstname'];?></td>
                    <td><?= $row['location'];?></td>
                    <td><?= $row['animalname'];?></td>
                    <td><?= $row['type'];?></td>
                    <td><?php if($row['status'] == 1) { echo '<span class="badge bg-danger">Pending</span>';?>
                      <?php }elseif($row['status'] == 2){ echo '<span class="badge bg-warning">OnGoing</span>';?>
                      <?php }else{ echo '<span class="badge bg-success">Accepted</span>'; }?>
                    </td>
                    <td>
                   
                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#viewconsult<?php echo $row['id'] ?>">
                     View</button></td>
                  </tr>
                  <?php }?>
                  <?php if(empty($userCstat)) { ?>
                    <tr class="text-center"><td colspan="8">Data not found</td></tr>
                <?php } ?>
                  </tbody>
                 
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
<br>

<!-- Popper -->
<script src="<?= base_url('assets/vendor/popper/popper.min.js') ?>"></script>

<!-- Bootstrap -->
<script src="<?= base_url('assets/vendor/bootstrap/js/bootstrap.min.js') ?>"></script>

<!-- jQuery UI -->
<script src="<?= base_url('assets/vendor/jquery-ui/jquery-ui.min.js') ?>"></script>
 <?php foreach($userCstat as $row) { ?>
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