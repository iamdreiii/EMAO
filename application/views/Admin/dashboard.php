<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
            
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <!-- <a href="<?=base_url();?>Admin_controller/generatereport" rel="noopener" target="_blank"><button type="button" class="btn btn-info btn-sm"><i class="fa fa-gears"></i> Generate Report</button></a> -->
            <div class="dropdown">
                  <button class="btn btn-info dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="fa fa-gears"></i> Generate Reports
                  </button>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="<?=base_url();?>Admin_controller/generatereport" rel="noopener" target="_blank">All Reports</a>
                    <a class="dropdown-item" href="<?=base_url();?>Admin_controller/dispersalreport" rel="noopener" target="_blank">Dispersal Reports</a>
                    <a class="dropdown-item" href="<?=base_url();?>Admin_controller/farmerreport" rel="noopener" target="_blank">Farmer Reports</a>
                    <a class="dropdown-item" href="<?=base_url();?>Admin_controller/petreport" rel="noopener" target="_blank">Pet Reports</a>
                    <a class="dropdown-item" href="<?=base_url();?>Admin_controller/userreport" rel="noopener" target="_blank">User Reports</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="<?=base_url();?>Admin_controller/forumreport" rel="noopener" target="_blank">Forum Reports</a>
                  </div>
            </div>
            </ol>
          </div>
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?= $dispersedtotal ?></h3>

                <p>Total Animal Dispersed</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="<?=base_url();?>Dispersal-Monitoring" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3><?= $vtotal ?></h3>

                <p>Total Animal Vaccinated</p>
              </div>
              <div class="icon">
                <i class="fas fa-syringe"></i>
              </div>
              <a href="<?=base_url();?>Vaccination" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3><?= $ptotal ?></h3>

                <p>Total Animal Registered</p>
              </div>
              <div class="icon">
                <i class="fas fa-dog"></i>
              </div>
              <a href="<?=base_url();?>Pet-List" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3><?= $ftotal ?></h3>

                <p>Total Farmer Records</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="<?=base_url();?>Farmer-Profiling" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          
          
        </div>
        <!-- /.row -->
        <div class="row">
          <div class="col-md-12">
            <!-- Custom tabs (Charts with tabs)-->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fas fa-chart-bar mr-1"></i>
                  Visualization
                </h3>
                <div class="card-tools">
                  <ul class="nav nav-pills ml-auto">
                    
                    <li class="nav-item">
                        <a class="nav-link active" href="#tab-2" data-toggle="tab">Dispersal</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#tab-3" data-toggle="tab">Pet</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#tab-1" data-toggle="tab">Farmer</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#tab-4" data-toggle="tab">Users</a>
                    </li>
                  </ul>
                </div>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <!-- Morris chart - Sales -->
                  <div class="chart tab-pane" id="tab-1" style="height: 300px; max-height: 300px;">
                      <canvas id="myChart1" style="height: 300px; width: 100%;"></canvas>
                   </div>
                   <div class="chart tab-pane active" id="tab-2" style="height: 300px; max-height: 300px">
                      <canvas id="myChart2" style=" width: 100%;"></canvas>
                   </div>
                  <div class="chart tab-pane" id="tab-3" style="height: 300px; max-height:300px;">
                      <canvas id="myChart3" style="height: 300px; width: 100%;"></canvas>
                   </div>
                   <div class="chart tab-pane" id="tab-4" style="height: 300px; max-height:300px;">
                      <canvas id="myChart4" style="height: 300px; width: 100%;"></canvas>
                   </div>
                </div>

              </div><!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <?php if($alldispersal < 0 ) { ?>
        <?php }else{ ?>
       <div class="card">
              <div class="card-header">
                <h3 class="card-title">Upcoming Dispersal</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <!-- <table id="example" class="table table-striped text-center"> -->
                <table class="table table-hover text-nowrap" id="myTable">
                  <thead class=""style="background-color: rgb(204,204,0);">
                    <tr>
                      <th>#</th>
                      <th>Species</th>
                      <th>Owner</th>
                      <th>Address</th>
                      <th>Contact</th>
                      <th>DueDate</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach($alldispersal as $row) {?>
                    <tr>
                      <td><?= $row['id'];?></td>
                      <td><?= $row['type'];?></td>
                      <td><?= $row['owner'];?></td>
                      <td><?= $row['address'];?></td>
                      <td>+63<?= $row['contact'];?></td>
                      <td><?= date('M d, Y', strtotime($row['calvingstart']))?></td>
                     </tr>
                      <?php }?>
                     <?php if(empty($alldispersal)) { ?>
                    <tr class="text-center"><td colspan="8">No Data Available</td></tr>
                     <?php } ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <?php }?>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <br><br>
  <!-- /.content-wrapper -->
<script type="text/javascript" src="<?=base_url();?>assets/adminlte/dist/js/dashchart.js"></script>

<?php $this->load->view('Admin/chart')?>
