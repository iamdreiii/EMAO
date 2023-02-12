<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css"> -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dispersal Duration Setting</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
               <!-- <button data-toggle="modal" data-target="#category-add" class="btn btn-sm btn-success mr-2">
                            <span class="fas fa-plus"></span> Register User
                        </button> -->
            </ol>
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
              <div class="card-body table-responsive">
                <table id="example1" class="table table-bordered table-striped">
                  <thead style="background-color: rgb(204,204,0);">
                  <tr>
                    <th>#</th>
                    <th>Animal Type</th>
                    <th>Dispersal Period</th>
                    <th style="width:6%">Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php foreach ($dispersalperiod as $row){ ?>
                    <tr>
                    <td><?= $row['id'];?></td>
                    <td><?= $row['animaltype'];?></td>
                    <td><?= $row['days'];?></td>
                    <td><button type="button" data-toggle="modal" data-target="#updateperiod<?= $row['id'];?>" class="btn btn-sm btn-secondary"><span class="fas fa-pen"></span></button></td>
                  </tr>
                  
                  <?php }?>
                  <?php if(empty($dispersalperiod)) { ?>
                    <tr class="text-center"><td colspan="8">No Data found</td></tr>
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
 
<?php foreach($dispersalperiod as $row) :?>
<!-- Modal -->
<div class="modal fade modal-container" id="updateperiod<?=$row['id']?>" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header align-items-center">
                <h5 class="modal-title">Update Dispersal Period/Span</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="la la-times"></span>
                </button>
            </div>
            <form action="<?=base_url();?>Dispersal_controller/udpatedispersalperiod/<?=$row['id']?>" method="POST">
            <div class="modal-body">
                <div class="form-group">
                    <label class="fs-14 text-black fw-medium lh-18">Dispersal Duration</label>  
                    <input type="text" class="form-control" name="duration" value="<?=$row['days']?>">
                </div>
            </div>
            <div class="modal-footer center">
                    <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-outline-success">Update</button>
                </div>
            </form>
            
    </div>
</div>
</div>
 <?php endforeach?>