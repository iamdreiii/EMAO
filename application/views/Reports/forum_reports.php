
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
    <h2><center>Forum Discussion Reports(Questions)</center></h2>
  </div>
  <table id="example1" class="table table-bordered table-striped">
    <thead >
    <tr>
      <th>ID</th>
      <th>Question</th>
      <th>Forum</th>
      <th>Category</th>
      <th>Likes</th>
      <th>Views</th>
    </tr>
    </thead>
    <tbody>
      
    <?php foreach ($forum as $row){ ?>
      <tr>
      <td><?= $row['id'];?></td>
      <td><?= ucfirst($row['title']);?></td>
      <td><?= ucfirst($row['ftitle']);?></td>
      <td><?= ucfirst($row['category']);?></td>
      <td><?= $row['likes'];?></td>
      <td><?= $row['views'];?></td>
    </tr>
    <?php }?>
    </tbody>
    
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