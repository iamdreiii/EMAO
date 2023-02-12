  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Announcement Updates/Post</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#addpost" ><i class="fas fa-plus"></i> Add</button>
            </ol>
          </div>
        </div>
      </div>
      <!-- /.container-fluid -->
    </section>
  
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col">
            <div class="card">
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-responsive table-striped">
                  <thead style="background-color: rgb(204,204,0);">
                  <tr>
                    <th>#</th>
                    <th>Announcement Title</th>
                    <th>Sub Title</th>
                    <!-- <th>Body</th> -->
                    <th style="width:12%">Posted</th>
                    <th style="width:12%">Action</th>
                    <th style="width:8%">Image</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php foreach ($allpost as $row){ ?>
                    <tr>
                    <td><?= $row['id'];?></td>
                    <td><?= $row['title'];?></td>
                    <td><?= $row['subtitle'];?></td>
                    <!-- <td><?php $string = $row['body'];
                        $string = character_limiter($string, 15);
                        echo $string;
                        ?></td> -->
                    <td><?= date('m/d/Y', strtotime($row['date_published']))?></td>
                    <td>
                    <div class="form-row">
                    <button type="button" class="btn btn-secondary btn-sm" data-toggle="modal" data-target="#edit<?= $row['id'];?>">
                     Edit
                    </button>&nbsp;
                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#modal-lg<?= $row['id'];?>">
                     View
                    </button></div></td>
                    <td>
                    <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#image<?= $row['id'];?>">
                     Update
                    </button></td>
                  </tr>
                  <?php }?>
                  <?php if(empty($allpost)) { ?>
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
  <!-- /.content-wrapper -->
