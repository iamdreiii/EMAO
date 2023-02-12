
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
    <h2><center>Farmer List Records</center></h2>
  </div>
  <table id="example1"  class="table table-bordered table-striped"  >
  <col>
  <colgroup span="5"></colgroup>
  <colgroup span="5"></colgroup>
  <tr>
      <th rowspan="2">Name</th>
      <th rowspan="2">Address</th>
      <th rowspan="2">Farm Location</th>
      <th colspan="5" scope="colgroup">Farm Information</th>
      <th colspan="5" scope="colgroup">Reference Numbers</th>
      <th rowspan="2">Recorded</th>
      <th rowspan="2">Remarks</th>
  </tr>
  <tr>
    <th scope="col">Corn-Area</th>
    <th scope="col">Rice-Area</th>
    <th scope="col">Hvc-Area</th>
    <th scope="col">Coconut-Area</th>
    <th scope="col">LP-count</th>
    <th scope="col">Regional</th>
    <th scope="col">Provincial</th>
    <th scope="col">Municipal</th>
    <th scope="col">Barangay</th>
    <th scope="col">Farmer</th>
  </tr>
  </tr>
  <tr>
  <?php foreach ($allfarmer as $row){ ?>
      <td><?=ucfirst($row['lastname']);?>, <?=ucfirst($row['firstname']);?> <?=ucfirst($row['midname']);?> <?=ucfirst($row['extension']);?></td>
      <td><?= ucfirst($row['address']);?></td>
      <td><?= ucfirst($row['farmlocation']);?></td>
      
      <td><?= $row['cornarea'];?></td>
      <td><?= $row['ricearea'];?></td>
      <td><?= $row['hvcarea'];?></td>
      <td><?= $row['coconutarea'];?></td>
      <td><?= $row['lpcount'];?></td>
      
      <td><?= $row['regional'];?></td>
      <td><?= $row['provincial'];?></td>
      <td><?= $row['municipal'];?></td>
      <td><?= $row['barangay'];?></td>
      <td><?= $row['farmer'];?></td>
      <td><?= $row['date_recorded'];?></td>
      <td style="width: 12px;"><?php if(empty($row['remarks'])) {echo 'NO REMARKS';}else{ echo ucfirst($row['remarks']);}?></td>
    </tr>
  <?php }?>
</table>
<div class="a">Name</div>
                <div class="b">Designation</div>
</div>

</div>
</body>
</html>

<!-- <script>
  window.addEventListener("load", window.print());
</script> -->