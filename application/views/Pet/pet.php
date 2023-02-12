  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Pet List</h1>
          </div>
          <!-- <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <a href="<?=base_url();?>addpet"><button type="button" class="btn btn-block btn-primary btn-sm " ><i class="fas fa-plus fa-fw"></i>Add</button></a>
            </ol>
          </div> -->
        </div>
      </div>
      <!-- /.container-fluid -->
    </section>
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
                    <th>ID No</th>
                    <th>Name</th>
                    <th>Type</th>
                    <th>Breed</th>
                    <th>Vaccination</th>
                    <th>Short Description</th>
                    <th style="width:6%">Action</th>
                    <!-- <th style="width:12%">Qr</th> -->
                  </tr>
                  </thead>
                  <tbody>
                    
                  <?php foreach ($allpet as $row){ ?>
                    <tr>
                    <td><?= $row['id'];?></td>
                    <td><?= $row['name'];?></td>
                    <td><?php if($row['type'] == 1){echo 'Dog';}elseif($row['type'] == 2){echo 'Cat';}?></td>
                    <td><?= $row['breed'];?></td>
                    <td><?= $row['vaccination'];?></td>
                    <td><?= $row['description'];?></td>
                    <td>
                      <!-- <a href="<?=base_url();?>editpet/<?= $row['id'];?>"><button type="button" class="btn btn-block btn-secondary btn-sm" id="<?php echo $row['id'] ?>">Edit</button></a>&nbsp; -->
                      <button type="button" class="btn btn-outline-primary btn-sm" data-toggle="modal" data-target="#petmodal<?=$row['id']?>">View</button></td>

                    <!-- <td>
                      <button data-toggle="modal" data-target="#modalShow<?php echo $row['id'] ?>" class="btn btn-sm btn-success mr-2">
                            <span class="fas fa-eye"></span> Show
                        </button>
                    </td> -->
                  </tr>
                  <?php }?>
                  <?php if(empty($allpet)) { ?>
                    <tr class="text-center"><td colspan="8">Data not found</td></tr>
                <?php } ?>
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
<?php 
    $this->load->view('Pet/modals');
?>
