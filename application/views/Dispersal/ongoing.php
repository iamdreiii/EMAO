
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Ongoing Consultation</h1>
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
              <div class="card-body">

                <table  class="table table-bordered table-striped">
                  <thead style="background-color: rgb(204,204,0);">

                  <tr>
                    <th>#</th>
                    <th>Owner' Name</th>
                    <th>Address</th>
                    <th>Animal Name</th>
                    <th>Type</th>
                    <th>Status</th>
                    <th style="width:12%">Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php foreach ($alldispersalconsultation as $row){ ?>
                    <tr>
                    <td><?= $row['id'];?></td>
                    <td><?= $row['lastname'];?>, <?= $row['firstname'];?></td>
                    <td><?= $row['location'];?></td>
                    <td><?php if($row['animalname'] == ''){echo 'No Name';}else{echo $row['animalname'];} ?></td>
                    <td><?= $row['type'];?></td>
                    <td><?php if($row['status'] == 1) { echo '<span class="badge bg-danger">Pending</span>';?>
                      <?php }elseif($row['status'] == 2){ echo '<span class="badge bg-warning">OnGoing</span>';?>
                      <?php }else{ echo '<span class="badge bg-success">Accepted</span>'; }?>
                    </td>
                    <td>
                    <div class="row">
                      <button type="button" class="btn btn-secondary btn-sm" data-toggle="modal" data-target="#modal-default<?php echo $row['id'];?>">
                     Edit</button>&nbsp;
                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#viewconsult<?php echo $row['id'] ?>">
                     View</button></div></td>
                  </tr>
                  <?php }?>
                  <?php if(empty($alldispersalconsultation)) { ?>
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
<?php
    $this->load->view('Dispersal/modal-consultation');
    $this->load->view('Dispersal/modal-consultation-view');
    $this->load->view('Dispersal/modal-consultation-edit');
?>
<!-- Popper -->
<script src="<?= base_url('assets/adminlte/plugins/popper/popper.min.js') ?>"></script>

<!-- Bootstrap -->
<script src="<?= base_url('assets/adminlte/plugins/bootstrap/js/bootstrap.min.js') ?>"></script>

<!-- jQuery UI -->
<script src="<?= base_url('assets/adminlte/plugins/jquery-ui/jquery-ui.min.js') ?>"></script>
