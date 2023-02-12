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
            <h1 class="m-0">Users</h1>
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
                    <th>Name</th>
                    <th>Email</th>
                    <th style="width:16%">Registered</th>
                    <th style="width:4%">Type</th>
                    <th style="width:8%">Status</th>
                    <!-- <th style="width:10%">Action</th> -->
                  </tr>
                  </thead>
                  <tbody>
                  <?php foreach ($allusers as $row){ ?>
                    <tr>
                    <td><?= $row['id'];?></td>
                    <td><?= $row['last_name'];?>, <?= $row['first_name'];?> <?= $row['mid_name'];?></td>
                    <td><?= $row['email'];?></td>
                    <td><?= $row['date_registered'];?></td>
                    <td><?php if($row['usertype'] == 'admin'){ echo 'Admin';}elseif($row['usertype'] == 'user'){ echo 'P.O';}elseif($row['usertype'] == 'ca'){ echo 'C.A';}?></td>
                    <!-- <td><?php if($row['status'] == 'active'){ echo '<span class="badge bg-success">active</span>';}else{echo '<span class="badge bg-danger">inactive</span>';}?></td> -->
                    <td>
                    <?php if($row['status'] == 'active'){ ?>

<button class="btn btn-sm btn-success user_status" uid="<?php echo $row['id']; ?>"  ustatus="<?php echo $row['status']; ?>">Active</button>

<?php }else{ ?>

<button class="btn btn-sm btn-danger user_status" uid="<?php echo $row['id']; ?>"  ustatus="<?php echo $row['status']; ?>">Inactive</button>

<?php } ?>


                    </td>
                    <!-- <td> <button type="button" data-toggle="modal" data-target="#category-edit<?= $row['id'];?>" class="btn btn-sm btn-secondary">Edit</button> -->
                    <!-- <button type="button" class="btn btn-sm btn-danger mr-2" data-toggle="modal" data-target="#delete-modal<?=$row['id'];?>">
                  Delete
                </button>
                <div class="form-row">
                    <button type="button" class="btn btn-sm btn-primary dropdown-toggle" data-toggle="dropdown">
                      Action
                    </button>
                    <ul class="dropdown-menu">
                      <li class="dropdown-item"><a href="#">Edit</a></li>
                      <li class="dropdown-item"><a href="#">Delete</a></li>
                    </ul>
                  </div></td>  -->
                   
                  </tr>
                  
                  <?php }?>
                  <?php if(empty($allusers)) { ?>
                    <tr class="text-center"><td colspan="8">No Categories found</td></tr>
                <?php } ?>
                  </tbody>
                  
                  
                </table>
                <footer><p class="text-warning"><strong>NOTE:</strong> P.O = Pet Owner ,  C.A = Consultation Account</p></footer>
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
  <div class="modal modal-danger fade" id="modal_popup">

    <div class="modal-dialog modal-sm">

        <!-- //create form to change user status -->
    	<form action="<?php echo base_url(); ?>Admin_controller/updateuserstatus" method="post"> 
	     	 <div class="modal-content">

		        <div class="modal-body" style="height: 80px;">

		          	<h4 style="text-align: justify;">Change User Status?</h4>

                   <!-- //getting value in hidden field with the hep of ID's -->
					<input type="hidden" name="id" id="user_id" value="">
					<input type="hidden" name="status" id="user_status" value="">

		        </div>

		        <div class="modal-footer">

		            <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">No</button>

		            <button type="submit" name="submit" class="btn btn-success">Yes</button>

		        </div>

	        </div>

        </form>

    </div>

 </div>
  <script type="text/javascript">
	$(document).on('click','.user_status',function(){

		var id = $(this).attr('uid'); //get attribute value in variable
		var status = $(this).attr('ustatus'); //get attribute value in variable

		$('#user_id').val(id); //pass attribute value in ID
		$('#user_status').val(status);  //pass attribute value in ID

		$('#modal_popup').modal({backdrop: 'static', keyboard: true, show: true}); //show modal popup

	});
</script>
  