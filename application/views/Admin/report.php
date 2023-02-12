
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
   padding-left: 50px;
}
div.b {
   padding-left: 50px;
}
#signature {
  width: 300px;
  border-bottom: 1px solid black;
  padding-left: 50px;
  padding-top: 80px;
  padding-bottom: 0px;
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
    
      <div class="container-fluid">
      <div class="row invoice-info">
      <div class="col-sm-3 invoice-col">
        <h5><strong>Total Farmer Records :</strong> <?=$ftotal;?></h5>
        <address>
        </address>
      </div>
      <!-- /.col -->
      <div class="col-sm-3 invoice-col">
        <h5><strong>Total Animal Registered : </strong> <?=$ptotal;?></h5>
        <address>
        <strong>Total Animal Vaccinated :</strong> <?=$vtotal;?>
        </address>
      </div>
      <div class="col-sm-3 invoice-col">
        <h5><strong>Total Farmer Records :</strong> <?=$ftotal;?></h5>
        <address>
        </address>
      </div>
      <!-- /.col -->
      <div class="col-sm-3 invoice-col">
        <h5><strong>Total User Registered : </strong> <?=$utotal;?></h5>
        <address>
        <strong>Total Pet-owner Account :</strong> <?=$pet_total;?><br>
        <strong>Total Consultation Account :</strong> <?=$ca_total;?><br>
        <strong>Total Admin Account :</strong> <?=$a_total;?><br>
        </address>
      </div>
      <!-- /.col -->
      
      <!-- /.col -->
    </div><br>
        
       

    </section>
    <hr>
    <br>
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
  </div>
</div>
<hr>
<br>
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
  </div>
</div>
<hr>
<br>
<div>
      <div>
        <h2><center>Pet Records</center></h2>
      </div>
      <table id="example1" class="table table-bordered table-striped">
                  <thead >

                  <tr>
                    <th>ID No</th>
                    <th>Pet Name</th>
                    <th>Pet Type</th>
                    <th>Pet Breed</th>
                    <th>Vaccination Status</th>
                    <th style="width: 14px;">Owner Email</th>
                  </tr>
                  </thead>
                  <tbody>
                    
                  <?php foreach ($allpet as $row){ ?>
                    <tr>
                    <td><?= $row['id'];?></td>
                    <td><?= $row['name'];?></td>
                    <td><?php if($row['type'] == '1'){echo 'Dog';} elseif($row['type'] == '2'){echo 'Cat';}?></td>
                    <td><?= $row['breed'];?></td>
                    <td><?= $row['vaccination'];?></td>
                    <td><?= $row['owner'];?></td>
                  </tr>
                  <?php }?>
                  </tbody>
                 
                </table>
  </div>

<hr>
<br>
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
</div>
<hr>
<br>
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

<?php foreach ($signatory as  $row) {?>
<?php if($row['signatory_for'] == 'All Report'){?>
<div id="signature"></div>
<div class="a"><?= $row['fname']?> <?= $row['mname']?> <?= $row['lname']?> <?= $row['extension']?></div>
<div class="b"><?= $row['position']?></div>
<?php }?>
<?php }?>

</div>

</div>
</body>
</html>

<!-- <script>
  window.addEventListener("load", window.print());
</script> -->