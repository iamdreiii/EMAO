 
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Farmer Information</h1>
               
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
            <?= form_open('Farmer-Edit/'.$id);?>
            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile form-group">
                
                <div class="form-group">
                <label for="lastname">Last Name</label>
                <input name="lastname" type="text" class="form-control" id="lastname" value="<?=$lastname?>" required="">
                </div>
                <div class="form-group">
                <label for="firstname">First Name</label>
                <input name="firstname" type="text" class="form-control" id="firstname" value="<?=$firstname?>" required="">
                </div>
                <div class="form-group">
                <label for="midname">Middle Name</label>
                <input name="midname" type="text" class="form-control" id="midname" value="<?=$midname?>" required="">
                </div>
                <div class="form-group">
                <label for="extension">Extension</label>
                <input name="extension" type="text" class="form-control" id="extension" value="<?=$extension?>" >
                </div>
                <div class="form-group">
                <label for="address">Address</label>
                <input name="address" type="text" class="form-control" id="address" value="<?=$address?>" required="">
                </div>
                <div class="form-group">
                <label for="contact">Contact Number</label>
                <input name="contact" type="text" class="form-control" id="contact" value="<?=$contact?>" >
                </div>

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
                
                 <div class="form-group">
                  <label for="birthday">Date:</label>
                    <div name="birthday" class="input-group date" name="birthday" id="birthday" data-target-input="nearest">
                        <input type="date" class="form-control form_datetime" name="birthday" value="birthday">
                        </div>
                    </div>
                
                
                <div class="form-group">
                <label for="age">Age</label>
                <input name="age" type="text" class="form-control" id="age" value="<?=$age?>" required="">
                </div>
                <div class="form-group">
                  <label for="sex">Sex</label>
                  <select class="custom-select rounded-0" name="sex" id="sex" value="<?=$sex?>">
                    <option selected="true" disabled="disabled"><?php if($sex == 'M')
                            {
                             echo 'Male';
                            }else{
                             echo 'Female';
                           }?></option>
                    <option value="M">Male</option>
                    <option value="F" >Female</option>
                  </select>
                </div>
               
                
                </p>

                <hr>

                <strong><i class="fas fa-map-marker-alt mr-1"></i> Farm Location</strong>

                <p class="text-muted">
                  <div class="form-group">
                <label for="farmlocation">Farm Address</label>
                <input name="farmlocation" type="text" class="form-control" id="farmlocation" value="<?=$farmlocation?>">
                </div>
                </p>

                <hr>

                <strong><i class="far fa-file-alt mr-1"></i> Reference Numbers</strong>

                <p class="text-muted">
                <div class="form-group">
                <label for="regional">Regional</label>
                <input name="regional" type="text" class="form-control" id="regional" value="<?=$regional?>" >
                </div>
                <div class="form-group">
                <label for="provincial">Provincial</label>
                <input name="provincial" type="text" class="form-control" id="provincial" value="<?=$provincial?>" >
                </div>
                <div class="form-group">
                <label for="municipal">Municipal</label>
                <input name="municipal" type="text" class="form-control" id="municipal" value="<?=$municipal?>" >
                </div>
                <div class="form-group">
                <label for="barangay">Barangay</label>
                <input name="barangay" type="text" class="form-control" id="barangay" value="<?=$barangay?>" >
                </div>
                <div class="form-group">
                <label for="farmer">Farmer</label>
                <input name="farmer" type="text" class="form-control" id="farmer" value="<?=$farmer?>" >
                </div>
              </p>

              <hr>

              <strong><i class="ion ion-stats-bars mr-1"></i> Farm Information</strong>

                <p class="text-muted">
                
                <div class="form-group">
                <label for="cornarea">Corn Area (ha.)</label>
                <input name="cornarea" type="text" class="form-control" id="cornarea" value="<?=$cornarea?>" >
                </div>
                <div class="form-group">
                <label for="ricearea">Rice Area (ha.)</label>
                <input name="ricearea" type="text" class="form-control" id="ricearea" value="<?=$ricearea?>" >
                </div>
                <div class="form-group">
                <label for="hvcarea">HVC Area</label>
                <input name="hvcarea" type="text" class="form-control" id="hvcarea" value="<?=$hvcarea?>" >
                </div>
                <div class="form-group">
                <label for="coconutarea">Coconut Area</label>
                <input name="coconutarea" type="text" class="form-control" id="coconutarea" value="<?=$coconutarea?>" >
                </div>
                <div class="form-group">
                <label for="lpcount">No. of L & P</label>
                <input name="lpcount" type="text" class="form-control" id="lpcount" value="<?=$lpcount?>" >
                </div>
                </p>

                <hr>
                <div class="form-group">
                  <label for="remarks">Remarks</label>
                  <input type="text" class="form-control" name="remarks" list="remarkss" value="<?=$remarks?>">
                  <datalist  name="remarks" id="remarkss" >
                    <!-- <option selected="true" disabled="disabled"><?php if($remarks == NULL){ ?>
                        <?php echo "NO REMARKS";?>
                        <?php }elseif($remarks == 'COMPLETE'){?>
                          <?php echo "COMPLETE";?>
                        <?php }else{ echo "INCOMPLETE"; }?></option> -->
                    <option value="COMPLETE">
                    <option value="INCOMPLETE" >
                    <option value="NO REMARKS" >
                    
                  </datalist>
                </div>
              </div>
               <div class="card-footer">
                  <input type="hidden" name="id" value="<?= $id?>">
                  <button type="submit" name="editfarmer" class="btn btn-primary">Update</button>
                </div>
              <!-- /.card-body -->
            </div>
            
            </div>

          
            <!-- /.card -->
          </div>
          <!-- /.col -->

    </section>
    <!-- /.content -->
  </div>

  