
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
        <h2><center>Dispersal Records</center></h2>
      </div>
      <table id="example1" class="table table-bordered display nowrap" cellspacing="0" width="100%">
                  <thead >
                      <tr>
                                  <th style="width: 1px">#</th>
                                <th>Owner</th>
                                <th>Species</th>
                                <th>Date Exposed</th>
                                <th>Dispersal Due</th> 
                                <th style="width: 40px">Status</th>
                              </tr>
                      </tr>
                  </thead>
                  <tbody>
                  <?php $i = 1; foreach($listdisp as $row) {?>
                    <tr>
                      <td><?php echo $i;
                    $i++;?></td>
                      <td><?=$row['owner']?></td>
                      <td><?=$row['type']?></td>
                      <td><?=$row['exposed']?></td>
                      <td><?=$row['calvingstart']?></td>
                     
                      <td><?php $end =  strtotime($row['calvingstart']);
                                         $start = strtotime($row['exposed']);
                                         $today = strtotime(date('y-m-d'));
                                         $total = $end - $start;
                                         $part = $today - $start;
                                         $percent = $part / $total * 100;
                                         $var = (int)$percent;
                                         if ($var <= 25) {
                                          echo '<span class="badge bg-danger">'.$var.'%</span>';
                                         }elseif($var >= 26 && $var <=50) {
                                            echo '<span class="badge bg-warning">'.$var.'%</span>';
                                         }elseif($var >= 51 && $var <=75) {
                                            echo '<span class="badge bg-primary">'.$var.'%</span>';
                                         }elseif($var >= 76 && $var <=99) {
                                            echo '<span class="badge bg-success">'.$var.'%</span>';
                                         }elseif($var >= 100) {
                                            echo '<span class="badge bg-success">Completed</span>';
                                         }

                                          ?>
                                        </td>
                    </tr>
                    <?php }?>
                  </tbody>
                </table>
                <?php if(empty($listdisp)){?>
                  <tfoot>
                  <tr>
                    <center><td colspan='6'>No Records Found</td></center>
                  </tr>
                  </tfoot>
                <?php }?>
    </div>
    <hr>
    <br>
  <div>
      <div>
        <h2><center>Dispersal Records (Monitoring)</center></h2>
      </div>
      <table id="example1" class="table table-bordered display nowrap" cellspacing="0" width="100%">
                  <thead >
                      <tr>
                                  <th style="width: 1px">#</th>
                                <th>Owner</th>
                                <th>Species</th>
                                <th>Date Exposed</th>
                                <th>Dispersal Due</th> 
                                <th style="width: 40px">Status</th>
                              </tr>
                      </tr>
                  </thead>
                  <tbody>
                  <?php $i = 1; foreach($alldispersal as $row) {?>
                    <tr>
                      <td><?php echo $i;
                    $i++;?></td>
                      <td><?=$row['owner']?></td>
                      <td><?=$row['type']?></td>
                      <td><?=$row['exposed']?></td>
                      <td><?=$row['calvingstart']?></td>
                     
                      <td><?php $end =  strtotime($row['calvingstart']);
                                         $start = strtotime($row['exposed']);
                                         $today = strtotime(date('y-m-d'));
                                         $total = $end - $start;
                                         $part = $today - $start;
                                         $percent = $part / $total * 100;
                                         $var = (int)$percent;
                                         if ($var <= 25) {
                                          echo '<span class="badge bg-danger">'.$var.'%</span>';
                                         }elseif($var >= 26 && $var <=50) {
                                            echo '<span class="badge bg-warning">'.$var.'%</span>';
                                         }elseif($var >= 51 && $var <=75) {
                                            echo '<span class="badge bg-primary">'.$var.'%</span>';
                                         }elseif($var >= 76 && $var <=99) {
                                            echo '<span class="badge bg-success">'.$var.'%</span>';
                                         }elseif($var >= 100) {
                                            echo '<span class="badge bg-success">Completed</span>';
                                         }

                                          ?>
                                        </td>
                    </tr>
                    <?php }?>
                  </tbody>
                </table>
                <?php if(empty($alldispersal)){?>
                  <tfoot>
                  <tr>
                    <center><td colspan='6'>No Records Found</td></center>
                  </tr>
                  </tfoot>
                <?php }?>
  </div>
</div>
<hr>
    <br>
  <div>
      <div>
        <h2><center>Dispersal Records (Completed)</center></h2>
      </div>
      <table id="example1" class="table table-bordered display nowrap" cellspacing="0" width="100%">
                  <thead >
                      <tr>
                                  <th style="width: 1px">#</th>
                                <th>Owner</th>
                                <th>Species</th>
                                <th>Date Exposed</th>
                                <th>Dispersal Due</th> 
                                <th style="width: 40px">Status</th>
                              </tr>
                      </tr>
                  </thead>
                  <tbody>
                  <?php $i = 1; foreach($listdispdue as $row) {?>
                    <tr>
                      <td><?php echo $i;
                    $i++;?></td>
                      <td><?=$row['owner']?></td>
                      <td><?=$row['type']?></td>
                      <td><?=$row['exposed']?></td>
                      <td><?=$row['calvingstart']?></td>
                     
                      <td><?php $end =  strtotime($row['calvingstart']);
                                         $start = strtotime($row['exposed']);
                                         $today = strtotime(date('y-m-d'));
                                         $total = $end - $start;
                                         $part = $today - $start;
                                         $percent = $part / $total * 100;
                                         $var = (int)$percent;
                                         if ($var <= 25) {
                                          echo '<span class="badge bg-danger">'.$var.'%</span>';
                                         }elseif($var >= 26 && $var <=50) {
                                            echo '<span class="badge bg-warning">'.$var.'%</span>';
                                         }elseif($var >= 51 && $var <=75) {
                                            echo '<span class="badge bg-primary">'.$var.'%</span>';
                                         }elseif($var >= 76 && $var <=99) {
                                            echo '<span class="badge bg-success">'.$var.'%</span>';
                                         }elseif($var >= 100) {
                                            echo '<span class="badge bg-success">Completed</span>';
                                         }

                                          ?>
                                        </td>
                    </tr>
                    <?php }?>
                    
                  </tbody>
                </table>
                <div class="a">Name</div>
                <div class="b">Designation</div>
                <?php if(empty($listdispdue)){?>
                  <tfoot>
                  <tr>
                    <center><td colspan='6'>No Records Found</td></center>
                  </tr>
                  </tfoot>
                <?php }?>
                <br>
  </div>
</div>
</body>
</html>

<!-- <script>
  window.addEventListener("load", window.print());
</script> -->