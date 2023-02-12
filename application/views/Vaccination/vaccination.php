<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Schedule Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
               <button data-toggle="modal" data-target="#modal-default" class="btn btn-sm btn-success mr-2">
                            <span class="fas fa-plus"></span> Schedule
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
                    <th>Title</th>
                    <th>Location</th>
                    <th>Start-DateTime</th>
                    <th>End-DateTime</th>
                    <th style="width:12%">Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php foreach ($allsched as $row){ ?>
                    <tr>
                    <td><?= $row['id'];?></td>
                    <td><?= $row['title'];?></td>
                    <td><?= $row['description'];?></td>
                    <td><?= date('M d Y - h:ia ', strtotime($row['start_datetime']));?></td>
                    <td><?= date('M d Y - h:ia ', strtotime($row['end_datetime']));?></td>
                    <td>
                    <div class="form-row">
                    <button type="button" data-toggle="modal" data-target="#modal-default<?= $row['id'];?>" class="btn btn-sm btn-secondary mr-2">Edit
                        </button>&nbsp;
                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#modal-view<?= $row['id'];?>">
                     View
                    </button></div></td>
                   
                  </tr>
                  
                  <?php }?>
                  <?php if(empty($allsched)) { ?>
                    <tr class="text-center"><td colspan="8">Data is Empty</td></tr>
                <?php } ?>
                  </tbody>
                  <?php $this->load->view('Vaccination/modals');?>
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
  