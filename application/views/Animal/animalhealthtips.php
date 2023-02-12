

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Animal Health Tips <small>Total : <?= $ahtotal?></small></h1>
           
                 
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
               <button data-toggle="modal" data-target="#aht-add" class="btn btn-sm btn-success mr-2">
                            <span class="fas fa-plus"></span> Add Tip
                        </button>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
    <div class="col-lg-12">
            <div class="card">
              <!-- /.card-header -->
              <div class="card-body table-responsive">

                <table id="example1" class="table table-bordered table-striped">
                  <thead style="background-color: rgb(204,204,0);">
                  <tr>
                    <th>#</th>
                    <th>Link</th>
                    <th>Title</th>
                    <th>SubTitle</th>
                    <th style="width:6%">Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php foreach ($aht as $row){ ?>
                    <tr>
                    <td><?=$row['id'];?></td>
                    <td><?= $row['link'];?></td>
                    <td><?= $row['title'];?></td>
                    <td><?= $row['subtitle'];?></td>
                    <td><div class="row"><button type="button" data-toggle="modal" data-target="#aht-edit<?= $row['id'];?>" class="btn btn-sm btn-secondary"><i class="fas fa-pen"></i></button>
                    &nbsp;<button type="button" class="btn btn-sm btn-danger mr-2" data-toggle="modal" data-target="#aht-delete<?=$row['id'];?>"><i class="fa fa-trash"></i></button></div></td> 
                   
                  </tr>
                  
                  <?php }?>
                  <?php if(empty($aht)) { ?>
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
          
    </section>
    <!-- /.content -->
  </div>
  <?php $this->load->view('Animal/modals');?>