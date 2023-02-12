<link rel="stylesheet" href="<?=base_url();?>plugins/summernote/summernote-bs4.min.css">
<style>
body { padding-right: 0 !important }
/* hide scrollbar but allow scrolling */
body {
  -ms-overflow-style: none; /* for Internet Explorer, Edge */
  scrollbar-width: none; /* for Firefox */
  overflow-y: scroll; 
}

body::-webkit-scrollbar {
  display: none; /* for Chrome, Safari, and Opera */
}

</style>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Signatories</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
               <button data-toggle="modal" data-target="#addfaq" class="btn btn-sm btn-success mr-2">
                            <span class="fas fa-plus"></span> Add
                        </button>
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
             
              <!-- /.card-header -->
              <div class="card-body table-responsive">

                <table id="example1" class="table table-bordered table-striped">
                  <thead style="background-color: rgb(204,204,0);">

                  <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Position</th>
                    <th>Signatory for</th>
                    <th>Created</th>
                    <th style="width:6%">Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php foreach ($signatory as $row){ ?>
                    <tr>
                    <td><?= $row['id'];?></td>
                    <td><?= $row['lname'];?>, <?= $row['fname'];?> <?= $row['mname'];?> <?= $row['extension'];?></td>
                    <td><?= $row['position'];?></td>
                    <td><?= $row['signatory_for'];?></td>
                    <td><?= date('M d, Y ', strtotime($row['created_at']));?></td>
                    <td><div class="row"><button type="button" data-toggle="modal" data-target="#signatoryedit<?= $row['id'];?>" class="btn btn-sm btn-secondary"><i class="fas fa-pen"></i></button> &nbsp;
                    <button type="button" data-toggle="modal" data-target="#signatorydelete<?= $row['id'];?>" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button></div></td> 
                   
                  </tr>
                  
                  <?php }?>
                  <?php if(empty($signatory)) { ?>
                    <tr class="text-center"><td colspan="8">No Data Found</td></tr>
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
$this->load->view('Signatory/modals');

?>