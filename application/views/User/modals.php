<?php if($this->session->access === 'user') :?>
<!-- ///////////////////////////////////////////////ADD RECORDS///////////////////////////////////////////////////// -->
<div class="modal fade modal-container login-form" id="addmodal" tabindex="-1" role="dialog" aria-labelledby="loginModalTitle" aria-hidden="true">
<!-- <?=form_open(base_url().'Pet_controller/addmypet')?> -->
<form method="post" action="<?=base_url('Pet_controller/addmypet')?>" enctype="multipart/form-data">
<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header align-items-center">
                <h5 class="modal-title" id="loginModalTitle">Add Record Form</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="la la-times"></span>
                </button>
            </div>
           
            <div class="modal-body">
               <div class="form-group">
                    <label class="fs-14 text-black fw-medium lh-18">Pet Profile</label><br>
                    <input type="file" class="form-control" name="petimage" id="petimage" size="20" />
                </div><!-- end form-group -->

                <div class="form-group">
                    <label class="fs-14 text-black fw-medium lh-18">Pet Name</label>
                    <input type="text" name="name" id="name" class="form-control form--control" placeholder="Pet Name" >
                </div><!-- end form-group -->
                <div class="form-group">
                    <label class="fs-14 text-black fw-medium lh-18">Birthdate</label>
                    <input type="date" name="birthdate" id="birthdate" class="form-control form--control" >
                </div><!-- end form-group -->
                <div class="input-box">
                    <label for="sel_cat" class="fs-14 text-black fw-medium mb-0">Pet Species</label>
                    <div class="form-group">
                        <select id="sel_cats" class="form-control form--control" name="type" required>
                            <option selected disabled>Select Pet Type</option>
                            <?php foreach($category as $cat){
                            echo "<option value='".$cat['cat_id']."'>".$cat['category']."</option>";
                            }
                            ?>
                        </select>
                    </div>
                </div><!-- end input-box -->
                <div class="input-box">
                    <label for="sel_subcat" class="fs-14 text-black fw-medium mb-0">Breed</label>
                    <div class="form-group">
                        <select id="sel_subcats" class="form-control form--control" name="breed" required>
                            <option selected disabled>Select Pet Breed</option>
                        </select>
                    </div>
                </div><!-- end input-box -->
                <div class="input-box">
                    <label for="sex" class="fs-14 text-black fw-medium mb-0">Gender</label>
                    <div class="form-group">
                        <select id="sex" class="form-control form--control" name="sex" required>
                            <option selected disabled>Select Pet Gender</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </div>
                </div><!-- end input-box -->
                <div class="input-box">
                    <label for="sterilization" class="fs-14 text-black fw-medium mb-0">Sterilization</label>
                    <div class="form-group">
                        <select id="sterilization" class="form-control form--control" name="sterilization" required>
                            <option selected disabled>Select</option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                        </select>
                    </div>
                </div><!-- end input-box -->
                <div class="input-box">
                    <label for="vaccination" class="fs-14 text-black fw-medium mb-0">Vaccination</label>
                    <div class="form-group">
                        <select id="vaccination" class="form-control form--control" name="vaccination" required>
                            <option selected disabled>Select</option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                        </select>
                    </div>
                </div><!-- end input-box -->
                <div class="form-group">
                    <label class="fs-14 text-black fw-medium lh-18">Color</label>
                    <input type="text" name="color" id="color" class="form-control form--control" placeholder="Color" >
                </div><!-- end form-group -->
                <div class="input-box">
                    <label for="sel_subcat" class="fs-14 text-black fw-medium mb-0">Size</label>
                    <div class="form-group">
                        <select id="size" class="form-control form--control" name="size" required>
                            <option selected disabled>Select</option>
                            <option value="small">Small under 20 lb</option>
                            <option value="medium" type>Medium 20-40lb</option>
                            <option value="large" type>Large 41-80lb</option>
                        </select>
                    </div>
                </div><!-- end input-box -->
                <div class="form-group">
                    <label class="fs-14 text-black fw-medium lh-18">Description</label>
                            <textarea name="description" class="form-control form--control" id="description" cols="30" rows="3"></textarea>
                </div><!-- end form-group -->
                <div class="form-group">
                        <label class="fs-14 text-black fw-medium lh-18">Owner Email</label>
                        <input type="text" class="form-control form--control" name="owner" id="owner" value="<?=$this->session->email?>" readonly>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-outline-primary">Add</button>
                </div>
            </div>
            
        </div>
    </div>
</form>
  <!-- <?=form_close()?> -->
</div>
<?php endif?>
<!-- ///////////////////////////////////////////////CONSULTATION DETAILS///////////////////////////////////////////////////// -->
<?php if($this->session->access === 'ca') :?>
<?php foreach($userCstat as $row){ ?>
<!-- Modal -->
<div class="modal fade modal-container login-form" id="previewmodal<?=$row['id']?>" tabindex="-1" role="dialog<?=$row['id']?>" aria-labelledby="loginModalTitle<?=$row['id']?>" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header align-items-center">
                <h5 class="modal-title" id="loginModalTitle">Consultation Details</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="la la-times"></span>
                </button>
            </div>
            <div class="modal-body">
              <div class="card-body">
                  
                    <div class="col-12">
                      <h2 class="lead"><b>Owner Name :</b> <?=$row['lastname'];?> <?=$row['firstname'];?> </h2>
                        <p class="justify-content-between"><b>Information: <br></b>
                        &emsp;Email add: <?=$row['email'];?><br>
                        &emsp;Contact: <?=$row['contact'];?><br> 
                        &emsp;Address: <?=$row['location'];?><br> 
                       </p>
                        <p class="justify-content-between"><b>Dispersal Info:</b><br>
                        &emsp;Animal Species: <?=$row['type'];?><br>
                        &emsp;Age: <?=$row['age'];?><br>
                        &emsp;Last Dispersal: <?=$row['lastdispersal'];?><br>
                       &emsp;Description: <?=$row['description'];?></p>
                  </div>
                </div>
            </div>
            
    </div>
</div>
</div>
<?php }?>
<?php endif?>
<?php if($this->session->access === 'user') :?>
<!-- ///////////////////////////////////////////////VIEW PET///////////////////////////////////////////////////// -->
<?php foreach($allpet as $row){ ?>
<!-- Modal -->
<div class="modal fade modal-container login-form" id="petmodal<?=$row['id']?>" tabindex="-1" role="dialog<?=$row['id']?>" aria-labelledby="loginModalTitle<?=$row['id']?>" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header align-items-center">
                <h5 class="modal-title" id="loginModalTitle">Pet Profile</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="la la-times"></span>
                </button>
            </div>
            <div class="modal-body">
              <div class="card-body">
                    <div class="col-12">
                      <h2 class="lead"><b>Type :</b> <?= $row['name'];?> </h2>
                        <p class="justify-content-between"><b>Details: <br></b>
                        &emsp;Type: <?php if($row['type'] == '1'){echo 'Dog';}elseif($row['type'] == '2'){echo 'Cat';}?><br>
                        &emsp;Age: <?php 
                        $dateOfBirth = date('Y-m-d', strtotime($row['birthdate']));
                        $todays = date("Y-m-d");
                        $diff = date_diff(date_create($dateOfBirth), date_create($todays));
                        echo ''.$diff->format('%y years, %m months, %d days');?><br>
                        &emsp;Breed: <?=ucfirst($row['breed']);?><br> 
                        &emsp;Gender: <?=ucfirst($row['sex']);?><br>
                        &emsp;Sterilization: <?=ucfirst($row['sterilization']);?><br>
                        &emsp;Vaccination: <?=ucfirst($row['vaccination']);?><br> 
                       </p>
                        <p class="justify-content-between"><b>Visual Info:</b><br>
                        &emsp;Color: <?=ucfirst($row['color']);?><br>
                        &emsp;Size: <?=ucfirst($row['size']);?><br> 
                        </p>
                        <p class="justify-content-between"><b>Additional Info:</b><br>
                        &emsp;Description: <?=ucfirst($row['description']);?><br>
                        &emsp;Owner Email: <?=ucfirst($row['owner']);?><br> 
                        </p>
                        <p class="justify-content-between"><b>Suggested Vaccine:</b><br>
                        &emsp;Vaccine:<?php if($row['type'] == '1') {?>
                        <?php 
                        $dateOfBirth = date('Y-m-d', strtotime($row['birthdate']));
                        $todays = date("Y-m-d");
                        $diff = date_diff(date_create($dateOfBirth), date_create($todays));
                        $ress       = $diff->format("%a")/7;
                        if ($ress < 6) {
                          echo 'Puppy, Start taking vaccine when 6 week old above';
                        }elseif($ress >= 6 && $ress <= 8) {
                          echo '6 - 8  Weeks,  Core(DAP) | Non-Core(Bordetella, Parainfluenza)';
                        }elseif ($ress >= 10 && $ress <= 12) {
                          echo '10 - 12 weeks Core(DAP) | Non-Core(Leptospirosis, Lyme, Canine Influenza)';
                        }elseif ($ress >= 14 && $ress <= 16) {
                          echo '14 - 16 weeks, Core(DAP, Rabies) | Non-Core(Leptospirosis, Lyme, Canine Influenza)';
                        }else{
                          echo "Annual and 3-year, Core(Rabies - starting 1 year after initial series) | Non-Core(Leptospirosis, Lyme, Canine Influenza, Bordetella or every 6 months) | 3-Year Core(DAP, Rabies)";
                        }
                          ?>
                        <?php }elseif($row['type'] == '2'){?>
                        <?php 
                        $dateOfBirth = date('Y-m-d', strtotime($row['birthdate']));
                        $todays = date("Y-m-d");
                        $diff = date_diff(date_create($dateOfBirth), date_create($todays));
                        $ress       = $diff->format("%a")/7;
                        
                        if($ress >= 9 && $ress <= 15) {
                          echo '9 - 15  Weeks, Feline Distemper(Feline rhinotracheitis-calici-panleukopenia-chlamydia-psittaci-viruses)';
                        }elseif ($ress == 18) {
                          echo '18 weeks, Rabies';
                        }elseif($ress > 18){
                          echo 'Feline Distemper and Rabies(Yearly Vaccination)';
                        }elseif($ress < 9){
                          echo 'Wait for kitten to turn 9 weeks of age to take Vaccine';
                        }
                          ?>
                        <?php }?><br>
                        </p><br>
                        <p>
                        <?php if($row['type'] == '1'){?>
                          <h6 class="text-warning"><b>NOTE :</b> DAP(Distemper,Adenovirus/Hepatitis,Parvovirus)<br>Also reffered as DHP or DHPP is parainfluenza in included!</h6>
                          <?php }?>
                        </p>
                  </div>
                </div>
            </div>
    </div>
</div>
</div>
<?php }?>
<?php endif?>


<?php foreach($myquestions as $row) : ?>
<!-- Modal -->
<div class="modal fade modal-container login-form" id="qedit<?=$row['id']?>" tabindex="-1" role="dialog" aria-labelledby="loginModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header align-items-center">
                <h5 class="modal-title" >Question Details</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="la la-times"></span>
                </button>
            </div>
            <form action="<?=base_url();?>Forum_controller/qupdate" method="POST">
            <div class="modal-body">
            <div class="form-group">
                    <label class="fs-14 text-black fw-medium lh-18">Question</label>
                    <input type="text" name="question" id="question" class="form-control form--control" placeholder="Pet Name" value="<?=ucfirst($row['title']);?>">
            </div><!-- end form-group -->
            <div class="form-group">
                    <label class="fs-14 text-black fw-medium lh-18">Details</label>
                            <textarea name="description" class="form-control form--control" id="description" rows="3"><?=ucfirst($row['content']);?></textarea>
            </div>
            <div class="form-group">
            <label class="fs-14 text-black fw-medium mb-0">Forums</label>
                <select class="select-container" id="forum" name="forum">
                    <option selected value="<?=$row['fid'];?>"><?=$row['ft'];?></option>
                    <?php foreach($qforum as $qf){?>
                    <option value="<?=$qf['id'];?>"><?=$qf['title'];?></option>
                    <?php }?>
                </select>
            </div>
            <div class="form-group">
            <label class="fs-14 text-black fw-medium mb-0">Category</label>
                <select class="select-container" id="category" name="category">
                    <option selected value="<?=$row['fcid'];?>"><?=$row['fcc'];?></option>
                    <?php foreach($qcategory as $qc){?>
                    <option value="<?=$qc['id'];?>"><?=$qc['category'];?></option>
                    <?php }?>
                </select>
            </div>
            </div>
            <div class="modal-footer center">
                    <input type="hidden" name="id" value="<?=$row['id'];?>">
                    <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-outline-success">Update</button>
                </div>
            </form>
            
    </div>
</div>
</div>
<?php endforeach?>
<?php foreach($myquestions as $row){ ?>
<!-- Modal -->
<div class="modal fade modal-container login-form" id="qdel<?=$row['id']?>" tabindex="-1" role="dialog" aria-labelledby="loginModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header align-items-center">
                <h5 class="modal-title" >Delete Question?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="la la-times"></span>
                </button>
            </div>
            <form action="<?=base_url();?>Forum_controller/qdelete" method="POST">
            <div class="modal-body">
              <div class="card-body">
                  
                </div>
            </div>
            <div class="modal-footer center">
                    <input type="hidden" name="id" value="<?=$row['id'];?>">
                    <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-outline-danger">Delete</button>
                </div>
            </form>
    </div>
</div>
</div>
<?php }?>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<?php foreach($allpet as$row){?>
<script type='text/javascript'>
  // baseURL variable
  var baseURL= "<?php echo base_url();?>";
  $(document).ready(function(){
    // City change
    $('#sel_cat<?=$row['id'];?>').change(function(){
      var type = $(this).val();
      $.ajax({
        url:'<?=base_url()?>User_controller/getsubcategory',
        method: 'POST',
        data: {type: type},
        dataType: 'json',
        success: function(response){
          $('#sel_subcat<?=$row['id'];?>').find('option').not(':first').remove();
          // Add options
          $.each(response,function(index,data){
             $('#sel_subcat<?=$row['id'];?>').append('<option value="'+data['subcategory']+'">'+data['subcategory']+'</option>');
          });
        }
     });
   });
 });
 </script>
 <?php }?>
 <script type='text/javascript'>
  // baseURL variable
  var baseURL= "<?php echo base_url();?>";
  $(document).ready(function(){
    // City change
    $('#sel_cats').change(function(){
      var type = $(this).val();
      $.ajax({
        url:'<?=base_url()?>User_controller/getsubcategory',
        method: 'POST',
        data: {type: type},
        dataType: 'json',
        success: function(response){
          // Remove options 
          // $('#sel_user').find('option').not(':first').remove();
          $('#sel_subcats').find('option').not(':first').remove();
          // Add options
          $.each(response,function(index,data){
             $('#sel_subcats').append('<option value="'+data['subcategory']+'">'+data['subcategory']+'</option>');
          });
        }
     });
   });
 });
 </script>