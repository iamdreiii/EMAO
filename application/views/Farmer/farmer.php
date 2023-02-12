  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Farmer List</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <a href="<?=base_url();?>Farmer-Add"><button type="button" class="btn btn-block btn-primary btn-sm " ><i class="fas fa-plus fa-fw"></i>Add</button></a>
            </ol>
          </div>
        </div>
      </div>
      <!-- /.container-fluid -->
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead style="background-color: rgb(204,204,0);">
                  <tr>
                    <th>Ref. No</th>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Farm Address</th>
                    <th>Remarks</th>
                    <th style="width:12%">Action</th>
                    <th style="width:5%">Print</th>
                  </tr>
                  </thead>
                  <tbody>
                    
                  <?php foreach ($farmerlist as $row){ ?>
                    <tr>
                    <td><?= $row['farmer'];?></td>
                    <td><?= $row['lastname'];?>, <?= $row['firstname'];?> <?= $row['midname'];?> </td>
                    <td><?= $row['address'];?></td>
                    <td><?= $row['farmlocation'];?></td>
                    <td><?php if($row['remarks'] == NULL){ ?>
                        <?php echo "NO REMARKS";?>
                        <?php }elseif($row['remarks'] == 'COMPLETE'){?>
                          <?php echo "COMPLETE";?>
                        <?php }else{ echo ucfirst($row['remarks']); }?></td>
                    <td>
                      <div class="row center">
                      <a href="<?=base_url();?>Farmer-Edit/<?= $row['id'];?>"><button type="button" class="btn btn-block btn-secondary btn-sm" id="<?php echo $row['id'] ?>">Edit</button></a>&nbsp;
                    <a href="<?=base_url();?>Farmer-View/<?= $row['id'];?>"><button type="button" class="btn btn-block btn-info btn-sm" id="<?php echo $row['id'] ?>">View</button></a></div></td>
                    <td>
                     
                    <a href="<?=base_url();?>Farmer-Print/<?= $row['id'];?>" rel="noopener" target="_blank" class="btn btn-default"><i class="fas fa-print"></i></a></td>
                  </tr>
                  <?php }?>
                  
                  </tbody>
                 
                </table>
                <br>
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