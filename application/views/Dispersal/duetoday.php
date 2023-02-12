 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Dispersal Records (DUE TODAY)</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dispersal</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <section class="content">
      <div class="container-fluid">
        
      </div><br>
    </section>
    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card card-solid">
        <div class="card-body pb-0">

          <?php
            //Columns must be a factor of 12 (1,2,3,4,6,12)
            $numOfCols = 3;
            $rowCount = 0;
            $bootstrapColWidth = 12 / $numOfCols;
            foreach ($alldispersal as $row){
              if($rowCount % $numOfCols == 0) { ?> <div class="row"> <?php } 
                $rowCount++; ?>  
          <div class="position-relative col-sm-<?php echo $bootstrapColWidth; ?>" >
           
            <div class="thumbnail d-flex align-items-stretch flex-column">

              <div class="card bg-light d-flex flex-fill">
                <?php $end =  strtotime($row['calvingstart']);
               $start = strtotime($row['exposed']);
               $today = strtotime(date('y-m-d'));
               $total = $end - $start;
               $part = $today - $start;
               $percent = $part / $total * 100;
               $var = (int)$percent;
               if($var >= 100) {
                  echo '<div class="ribbon-wrapper ribbon-lg">
                        <div class="ribbon bg-danger text-md">
                          Due Today
                        </div>
                      </div>';
               }

                ?>
                      
                <div class="card-header border-bottom-0"><b>Type: </b> <?php if($row['type'] == 'cow'){ echo 'COW';}elseif($row['type'] == 'carabao'){ echo 'CARABAO';}elseif($row['type'] == 'goat'){ echo 'GOAT';}elseif($row['type'] == 'pig'){ echo 'PIG';}?>
                </div>
                <div class="card-body pt-0">
                  <div class="row">
                    <div class="">
                     <!-- Display Per Species -->
                      
                        <h2 class="lead"></h2>
                      
                      <!-- <p class="text-muted text-sm"><b>Address:</b> <?php $string = $row['address'];
                      $string = character_limiter($string, 6);
                      echo $string;
                      ?></p> -->
                      <p class="text-sm"><b>Owner:</b> <?php $string = $row['owner'];
                      $string = character_limiter($string, 6);
                      echo $string;
                      ?></p>
                      <p class=" text-sm"><b>Contact:</b> <?=$row['contact'];?></p>
                      
                      <p class=" text-sm"><b>Dispersal Due:</b> <?php $string = date('M d, Y ', strtotime($row['calvingstart']));
                      $string = character_limiter($string, 10);
                      echo $string;
                      ?></p>

                      
                      <p class=" text-sm"><b>Dispersal Status:</b> <?php $end =  strtotime($row['calvingstart']);
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
                                         }elseif($var = 100) {
                                            echo '<span class="badge bg-success">Due</span>';
                                         }elseif($var > 100) {
                                            echo '<span class="badge bg-success">Completed</span>';
                                         }

                                          ?></p>
                      
                        
                        <div class="text-bold" style="background-color: rgb(220,220,220)" id="<?= $row['id'];?>"></div>
                        
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v652eace1692a40cfa3763df669d7439c1639079717194" integrity="sha512-Gi7xpJR8tSkrpF7aordPZQlW2DLtzUlZcumS8dMQjwDHEnw9I7ZLyiOj/6tZStRBGtGgN6ceN6cMH8z7etPGlw==" data-cf-beacon='{"rayId":"716889339ef48c45","version":"2021.12.0","r":1,"token":"b930e9beda8c41ca92a77c802cce6368","si":100}' crossorigin="anonymous"></script>
</body>
<script language="JavaScript">

  StartCountDown("<?= $row['id'];?>","<?= date('m/d/Y h:i a -0400', strtotime($row['calvingstart']))?>")

  
  /*
    Author:   Robert Hashemian (http://www.hashemian.com/)
    Modified by:  Munsifali Rashid (http://www.munit.co.uk/)
    Modified by:  Tilesh Khatri
  */
  
  function StartCountDown(myDiv,myTargetDate)
  {
    var dthen = new Date(myTargetDate);
    var dnow  = new Date();
    ddiff   = new Date(dthen-dnow);
    gsecs   = Math.floor(ddiff.valueOf()/1000);
    CountBack(myDiv,gsecs);
  }
  
  function Calcage(secs, num1, num2)
  {
    s = ((Math.floor(secs/num1))%num2).toString();
    if (s.length < 2) 
    { 
      s = "0" + s;
    }
    return (s);
  }
  
  function CountBack(myDiv, secs)
  {
    var DisplayStr;
    var DisplayFormat = "%%D%% Days %%H%%:%%M%%:%%S%%";
    DisplayStr = DisplayFormat.replace(/%%D%%/g,  Calcage(secs,86400,100000));
    DisplayStr = DisplayStr.replace(/%%H%%/g,   Calcage(secs,3600,24));
    DisplayStr = DisplayStr.replace(/%%M%%/g,   Calcage(secs,60,60));
    DisplayStr = DisplayStr.replace(/%%S%%/g,   Calcage(secs,1,60));
    if(secs > 0)
    { 
      document.getElementById(myDiv).innerHTML = DisplayStr;
      setTimeout("CountBack('" + myDiv + "'," + (secs-1) + ");", 990);
    }
    else
    {
      document.getElementById(myDiv).innerHTML = "Dispersal is Due/Completed!";
    }
  }

</script>
                    </div>
                    <!-- <div class="col-5 text-center">
                       <img src="" class="img img-fluid">
                    </div> -->
                  </div>
                </div>
                <div class="card-footer">
                  <div class="text-right">
                     <!-- <button data-toggle="modal" data-target="#modalDelete<?= $row['id'] ?>" class="btn btn-sm btn-info">
                        <span class="fas fa-envelope"></span>
                        </button> -->
                    
                       <button type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#animalmodal<?php echo $row['id'] ?>"><i class="fas fa-eye"></i> Details</button>
                   
                  </div>
                </div>
              </div>
            </div>
           
          </div>
          <?php if($rowCount % $numOfCols == 0) { ?> </div> <?php } } ?>
          
        </div>
        </div>
        
        <!-- /.card-body -->
        <?php if(empty($alldispersal)) { ?>
            <div class="card-footer text-center">
            NO DISPERSAL DUE TODAY
            </div>
        <?php } ?>

                           <?php if($links) { ?>
                                <div class="card-footer">
                                  <nav class="pagination">
                                    <?php echo $links;?>
                                  </nav>
                                </div>
                            <?php } ?>
      

      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php
    $this->load->view('Dispersal/viewmodal');
?>

<!-- Popper -->
<script src="<?= base_url('assets/vendor/popper/popper.min.js') ?>"></script>

<!-- Bootstrap -->
<script src="<?= base_url('assets/vendor/bootstrap/js/bootstrap.min.js') ?>"></script>

<!-- jQuery UI -->
<script src="<?= base_url('assets/vendor/jquery-ui/jquery-ui.min.js') ?>"></script>


