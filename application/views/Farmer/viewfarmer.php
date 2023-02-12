 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Farmer Profile</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Farmer Profile</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
 <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <!-- <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle"
                       src="<?=base_url();?>dist/img/user1.png"
                       alt="Farmer profile picture">
                </div> -->

                <h3 class="profile-username text-center"> <?=$fullname;?></h3>
                <br>
                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>Farmer Ref. No</b> <a class="float-right"><?=$farmer;?></a>
                  </li>
                  <li class="list-group-item">
                    <b>Remarks</b> <a class="float-right"><?php if($remarks == NULL){ ?>
                        <?php echo "NO REMARKS";?>
                        <?php }elseif($remarks == 'COMPLETE'){?>
                          <?php echo "COMPLETE";?>
                        <?php }else{ echo "INCOMPLETE"; }?></a>
                  </li>
                  <li class="list-group-item">
                    <b>User ID</b> <a class="float-right"><?=$id;?></a>
                  </li>
                  <li class="list-group-item">
                    <b>Address</b> <a class="float-right"><?=$address;?></a>
                  </li>
                  <li class="list-group-item">
                    <b>Contact</b> <a class="float-right">
                      <?php if($contact)
                            {
                             echo $contact;
                            }else{
                             echo 'No Contact Number';
                           }?>
                     
                    </a>
                  </li>
                </ul>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- About Me Box -->
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">About Farmer</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <strong><i class="fas fa-calendar mr-1"></i> Information</strong>

                <p class="text-muted">
                
                <b>Birthday :</b> <?php if($birthday)
                            {
                             echo date('M, d Y', strtotime($birthday));
                            }else{
                             echo 'No Data';
                           }?>
                <br>
                <b>Age :</b> <?php if($age)
                            {
                             echo $age;
                            }else{
                             echo 'No Data';
                           }?>
                <br>
                <b>Sex :</b> <?php if($sex)
                            {
                             echo $sex;
                            }else{
                             echo 'No Data';
                           }?>
                <br>
                </p>

                <hr>

                <strong><i class="fas fa-map-marker-alt mr-1"></i> Farm Location</strong>

                <p class="text-muted"><?php if($farmlocation)
                            {
                             echo $farmlocation;
                            }else{
                             echo 'No Data';
                           }?></p>

                <hr>

                <strong><i class="far fa-file-alt mr-1"></i> Reference Numbers</strong>

                <p class="text-muted">
                <b>Regional :</b> <?php if($regional)
                            {
                             echo $regional;
                            }else{
                             echo 'No Data';
                           }?>
                <br>
                <b>Provincial :</b> <?php if($provincial)
                            {
                             echo $provincial;
                            }else{
                             echo 'No Data';
                           }?> 
                <br>
                <b>Municipal :</b> <?php if($municipal)
                            {
                             echo $municipal;
                            }else{
                             echo 'No Data';
                           }?> 
                <br>
                <b>Barangay :</b> <?php if($barangay)
                            {
                             echo $barangay;
                            }else{
                             echo 'No Data';
                           }?> 
                <br>
                <b>Farmer :</b> <?php if($farmer)
                            {
                             echo $farmer;
                            }else{
                             echo 'No Data';
                           }?> 
                <br>
              </p>

              <hr>

              <strong><i class="ion ion-stats-bars mr-1"></i> Farm Information</strong>

                <p class="text-muted">
                <b>Corn Area (ha.) :</b> <?php if($cornarea)
                            {
                             echo $cornarea;
                            }else{
                             echo 'No Data';
                           }?>
                <br>
                <b>Rice Area (ha.) :</b> <?php if($ricearea)
                            {
                             echo $ricearea;
                            }else{
                             echo 'No Data';
                           }?> 
                <br>
                <b>HVC Area :</b> <?php if($hvcarea)
                            {
                             echo $hvcarea;
                            }else{
                             echo 'No Data';
                           }?> 
                <br>
                <b>Coconut Area :</b> <?php if($coconutarea)
                            {
                             echo $coconutarea;
                            }else{
                             echo 'No Data';
                           }?> 
                <br>
                <b>No. of Land & Poultry :</b> <?php if($lpcount)
                            {
                             echo $lpcount;
                            }else{
                             echo 'No Data';
                           }?> 
                <br>
                </p>

                <hr>
                           <div class="col px-3">
                                <div class="btn-group">
                                <a href="<?=base_url();?>Farmer-Edit/<?= $id;?>" ><button type="submit" class="btn btn-primary rounded">Edit</button></a>&emsp;
                                <!-- Button trigger modal -->
                         
                            </div>
                            </div>
              </div>

              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->

          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>