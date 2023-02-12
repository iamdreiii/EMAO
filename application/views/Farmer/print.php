
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Invoice Print</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?=base_url();?>/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?=base_url();?>/dist/css/adminlte.min.css">
</head>
<body>
<div class="wrapper">
  <!-- Main content -->
  <section class="invoice">
    <!-- title row -->
    <div class="row">
      <div class="col-12">
        <h2 class="page-header">
          <img src="<?=base_url();?>assets/adminuploads/doa.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8" height="80px" width="80px"> Municipal Agriculture Office
          <small class="float-right">Date: 2/10/2014</small>
        </h2>
      </div>
      <!-- /.col -->
    </div><br>
    <!-- info row -->
    <div class="row invoice-info">
      <div class="col-sm-4 invoice-col">
        <h5><strong>Farmer Profile</strong></h5>
        <address>
          <strong>Name:</strong> <?=$fullname;?><br>
          <strong>Address:</strong> <?=$address;?><br>
          <strong>Farm Address:</strong> <?=$farmlocation;?><br>
          <strong>Phone:</strong> +63<?=$contact;?> <br>
        </address>
      </div>
      <!-- /.col -->
      <div class="col-sm-4 invoice-col">
        Reference #
        <address>
          <strong>Regional:</strong>&emsp; <?=$regional;?><br>
          <strong>Provincial:</strong>&nbsp;&nbsp;&nbsp;<?=$provincial;?><br>
          <strong>Municipal:</strong>&nbsp;&nbsp;&nbsp; <?=$municipal;?><br>
          <strong>Barangay:</strong>&emsp;<?=$barangay;?> <br>
          <strong>Farmer:</strong>&emsp;&emsp;<?=$farmer;?> <br>
        </address>
      </div>
      <!-- /.col -->
      <div class="col-sm-4 invoice-col">
        <b>REMARKS:</b> <?php if($remarks){echo $remarks;}else{ echo 'NO REMARKS';}?><br>
        
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
    <h5><strong>Additional Information :</strong></h5>
    <hr>
    <div class="row invoice-info">
      <div class="col-sm-4 invoice-col">
        <address>
          <strong>Birthday:</strong> <?=$birthday;?><br>
          <strong>Age:</strong> <?=$age;?><br>
          <strong>Sex:</strong> <?=$sex;?><br>
          
        </address>
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
    
    <!-- Table row -->
    <div class="row">
      <div class="col-12 table-responsive">
        <table class="table table-striped">
          <thead>
          <tr>
            <th>Corn Area</th>
            <th>Rice Area</th>
            <th>HVC Area</th>
            <th>Coconut Area</th>
            <th>L & P</th>
          </tr>
          </thead>
          <tbody>
          <tr>
            <td><?php if($cornarea){echo $cornarea;}else{ echo 'No Registered Area';}?></td>
            <td><?php if($ricearea){echo $ricearea;}else{ echo 'No Registered Area';}?></td>
            <td><?php if($hvcarea){echo $hvcarea;}else{ echo 'No Registered Area';}?></td>
            <td><?php if($coconutarea){echo $coconutarea;}else{ echo 'No Registered Area';}?></td>
            <td><?php if($lpcount){echo $lpcount;}else{ echo 'No Registered Area';}?></td>
          </tr>
          
          </tbody>
        </table>
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
    
  </section>
  <!-- /.content -->
</div>
<!-- ./wrapper -->
<!-- Page specific script -->
<script>
  window.addEventListener("load", window.print());
</script>
</body>
</html>
