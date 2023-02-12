
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Generate Report</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?=base_url();?>assets/adminlte/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?=base_url();?>assets/adminlte/dist/css/adminlte.min.css">
</head>
<style>
@media print {
  #printPageButton {
    display: none;
  }
}
div.a {
   -webkit-text-decoration-line: overline; /* Safari */
   text-decoration-line: overline; 
   padding-top: 80px;
   padding-left: 50px;
}
div.b {
   padding-left: 50px;
}
</style>

<body>
<button class="float-right" id="printPageButton" onClick="window.print();">Print</button>
<br><br><br>
<div class="wrapper">
  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-12">
        <h2 class="page-header">
          <img src="<?=base_url();?>assets/adminuploads/pola1.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8" height="80px" width="80px"> Municipal Agriculture Office Reports
          <small class="float-right">Report Date: <?= date('M d, Y')?></small>
        </h2>
      </div>
      <!-- /.col -->
    </div><br>
    <div>
      <div>
        <h2><center>User Records</center></h2>
      </div>
      <table id="example1" class="table table-bordered table-striped">
                  <thead >
                  <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th style="width:16%">Registered</th>
                    <th style="width:4%">Usertype</th>
                    <th style="width:8%">Status</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php foreach($users as $row){ ?>
                    <tr>
                    <td><?= $row['id'];?></td>
                    <td><?= $row['last_name'];?>, <?= $row['first_name'];?> <?= $row['mid_name'];?></td>
                    <td><?= $row['email'];?></td>
                    <td><?= $row['date_registered'];?></td>
                    <td><?php if($row['usertype'] == 'admin'){ echo 'Admin';}elseif($row['usertype'] == 'user'){ echo 'P.O';}elseif($row['usertype'] == 'ca'){ echo 'C.A';}?></td>
                    <!-- <td><?php if($row['status'] == 'active'){ echo '<span class="badge bg-success">active</span>';}else{echo '<span class="badge bg-danger">inactive</span>';}?></td> -->
                    <td><?=ucfirst($row['status']);?></td>
                  </tr>
                  
                  <?php }?> 
                  </tbody>
                  
                </table>
                <footer><p class="text-warning"><strong>NOTE:</strong> P.O = Pet Owner ,  C.A = Consultation Account</p></footer>
                <div class="a">Name</div>
                <div class="b">Designation</div>
  </div>

</div>
</body>
</html>

<!-- <script>
  window.addEventListener("load", window.print());
</script> -->