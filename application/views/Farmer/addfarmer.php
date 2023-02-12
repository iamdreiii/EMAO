 
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add Farmer Information</h1>
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
            <form method="post" action="<?=base_url()?>Farmer-Add">
            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile form-group">
                
                <div class="form-group">
                <label for="lastname">Last Name</label>
                <input name="lastname" type="text" class="form-control" id="lastname"   placeholder="Enter Last Name">
                <?php echo form_error('lastname');?>
                </div>
                <div class="form-group">
                <label for="firstname">First Name</label>
                <input name="firstname" type="text" class="form-control" id="firstname"   placeholder="Enter First Name">
                <?php echo form_error('firstname');?>
                </div>
                <div class="form-group">
                <label for="midname">Middle Name</label>
                <input name="midname" type="text" class="form-control" id="midname" placeholder="Enter Middle Name">
                <?php echo form_error('midname');?>
                </div>
                <div class="form-group">
                <label for="extension">Extension</label>
                <input name="extension" type="text" class="form-control" id="extension" placeholder="Enter Name Extension Sr./Jr.">
                </div>
                <div class="form-group">
                <label for="address">Address</label>
                <input name="address" type="text" class="form-control" id="address"  placeholder="Enter Barangay Address">
                <?php echo form_error('address');?>
                </div>
                <div class="form-group">
                <label for="contact">Contact Number</label>
                <input name="contact" type="text" class="form-control" id="contact" placeholder="Enter Contact Number">
                <?php echo form_error('contact');?>
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
                    <div name="birthday" class="input-group date" id="reservationdate" data-target-input="nearest">
                        <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate"  name="birthday" placeholder="Enter/Select Birthday">
                        <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div>
                    </div>
                </div>
                
                <div class="form-group">
                <label for="age">Age</label>
                <input name="age" type="text" class="form-control" id="age"  required="" placeholder="Enter Age">
                </div>
                <div class="form-group">
                  <label for="sex">Sex</label>
                  <select class="custom-select rounded-0" name="sex" id="sex" >
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
                <input name="farmlocation" type="text" class="form-control" id="farmlocation" placeholder="Enter Farm Location">
                </div>
                </p>

                <hr>

                <strong><i class="far fa-file-alt mr-1"></i> Reference Numbers</strong>

                <p class="text-muted">
                <div class="form-group">
                <label for="regional">Regional</label>
                <input name="regional" type="text" class="form-control" id="regional" placeholder="Regional Reference Number" >
                </div>
                <div class="form-group">
                <label for="provincial">Provincial</label>
                <input name="provincial" type="text" class="form-control" id="provincial"  placeholder="Provincial Reference Number">
                </div>
                <div class="form-group">
                <label for="municipal">Municipal</label>
                <input name="municipal" type="text" class="form-control" id="municipal" placeholder="Municipal Reference Number" >
                </div>
                <div class="form-group">
                <label for="barangay">Barangay</label>
                <input name="barangay" type="text" class="form-control" id="barangay"  placeholder="Barangay Reference Number">
                </div>
                <div class="form-group">
                <label for="farmer">Farmer</label>
                <input name="farmer" type="text" class="form-control" id="farmer" placeholder="Farmer Reference Number" >
                </div>
              </p>

              <hr>

              <strong><i class="ion ion-stats-bars mr-1"></i> Farm Information</strong>

                <p class="text-muted">
                
                <div class="form-group">
                <label for="cornarea">Corn Area (ha.)</label>
                <input name="cornarea" type="text" class="form-control" id="cornarea"  placeholder="Corn Area">
                </div>
                <div class="form-group">
                <label for="ricearea">Rice Area (ha.)</label>
                <input name="ricearea" type="text" class="form-control" id="ricearea"  placeholder=" Rice Area">
                </div>
                <div class="form-group">
                <label for="hvcarea">HVC Area</label>
                <input name="hvcarea" type="text" class="form-control" id="hvcarea"  placeholder="High Value Crops">
                </div>
                <div class="form-group">
                <label for="coconutarea">Coconut Area</label>
                <input name="coconutarea" type="text" class="form-control" id="coconutarea" placeholder="Coconut Area">
                </div>
                <div class="form-group">
                <label for="lpcount">No. of Land & Poultry</label>
                <input name="lpcount" type="text" class="form-control" id="lpcount" placeholder="Number of L and P">
                </div>
                </p>

                <hr>
                <div class="form-group">
                  <label for="remarks">Remarks</label>
                  <select class="custom-select rounded-0" name="remarks" id="remarks">
                    <option value="COMPLETE">COMPLETE</option>
                    <option value="INCOMPLETE" >INCOMPLETE</option>
                    <option value="NO REMARKS" >NO REMARKS</option>
                  </select>
                </div>
              </div>
               <div class="card-footer">
                  <button type="submit" name="insert" class="btn btn-primary">Insert</button>
                </div>
              <!-- /.card-body -->
            </div>
            </form>
            </div>

          
            <!-- /.card -->
          </div>
          <!-- /.col -->

          <!-- /.col -->
        </div>
    </section>
    <!-- /.content -->
  </div>
  