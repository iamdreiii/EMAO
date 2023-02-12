<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Setting (About Us)</h1>
          </div><!-- /.col -->
         
        </div>
      </div>
    </div>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-body table-responsive">
                <table id="example1" class="table table-bordered table-striped">
                  <thead style="background-color: rgb(204,204,0);">
                  <tr>
                    <th>About Website</th>
                    <th>Vision</th>
                    <th>Mission</th>
                    <th style="width:6%">Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php foreach ($about as $row){ ?>
                    <tr>
                    <td><?=mb_strimwidth($row['who'], 0, 80, "...")?></td>
                    <td><?=mb_strimwidth($row['vision'], 0, 80, "...")?></td>
                    <td><?=mb_strimwidth($row['mission'], 0, 80, "...")?></td>
                    <td><button type="button" data-toggle="modal" data-target="#update<?= $row['id'];?>" class="btn btn-sm btn-secondary"><span class="fas fa-pen"></span></button></td>
                  </tr>
                  
                  <?php }?>
                  <?php if(empty($about)) { ?>
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
 
<?php foreach($about as $row) :?>
<!-- Modal -->
<div class="modal fade modal-container login-form" id="update<?=$row['id']?>" tabindex="-1" role="dialog" aria-labelledby="loginModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header align-items-center">
                <h5 class="modal-title" id="loginModalTitle">Website Details</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="la la-times"></span>
                </button>
            </div>
            <form action="<?=base_url();?>Setting_controller/update" method="POST">
            <div class="modal-body">
                <div class="form-group">
                        <label class="fs-14 text-black fw-medium lh-18">About Website</label>
                                <textarea name="who" class="form-control form--control" id="who" rows="5"  required><?=ucfirst($row['who']);?></textarea>
                </div><!-- end form-group -->
                <div class="form-group">
                        <label class="fs-14 text-black fw-medium lh-18">Vision</label>
                                <textarea name="vision" class="form-control form--control" id="vision" rows="5"  required><?=ucfirst($row['vision']);?></textarea>
                </div><!-- end form-group -->
                <div class="form-group">
                        <label class="fs-14 text-black fw-medium lh-18">Mission</label>
                                <textarea name="mission" class="form-control form--control" id="mission" rows="5"  required><?=ucfirst($row['mission']);?></textarea>
                </div><!-- end form-group -->
                
            </div>
            <div class="modal-footer center">
                    <input type="hidden" name="id" value="<?=$row['id'];?>">
                    <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-outline-success">Update</button>
                </div>
            </form>
            
    </div>
</div>
</div>
 <?php endforeach?>