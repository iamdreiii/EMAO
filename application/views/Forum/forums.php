

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Forum List</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
               <button data-toggle="modal" data-target="#forum-add" class="btn btn-sm btn-success mr-2">
                            <span class="fas fa-plus"></span> Add Forum
                        </button>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <section class="content" >
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <!-- /.card-header -->
              <div class="card-body table-responsive">

                <table id="example1" class="table table-bordered table-striped">
                  <thead style="background-color: rgb(204,204,0);">

                  <tr>
                    <th>#</th>
                    <th>Category</th>
                    <th style="width:10%">Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php foreach ($forums as $row){ ?>
                    <tr>
                    <td><?= $row['id'];?></td>
                    <td><?= $row['title'];?></td>
                    <td><button type="button" data-toggle="modal" data-target="#forum-edit<?= $row['id'];?>" class="btn btn-sm btn-secondary">Edit</button>
                    <!-- <button type="button" class="btn btn-sm btn-danger mr-2" data-toggle="modal" data-target="#delete-modal<?=$row['id'];?>">
                  Delete
                </button> --></td> 
                   
                  </tr>
                  
                  <?php }?>
                  <?php if(empty($forums)) { ?>
                    <tr class="text-center"><td colspan="8">No Forums found</td></tr>
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
  $this->load->view('Forum/forummodals');
  ?>
  