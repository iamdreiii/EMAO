<?php foreach($allpet as $row){ ?>
<!-- Modal -->
<div class="modal fade modal-container login-form" id="petmodal<?=$row['id']?>" tabindex="-1" role="dialog<?=$row['id']?>" aria-labelledby="loginModalTitle<?=$row['id']?>" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header align-items-center">
                <h5 class="modal-title" id="loginModalTitle">Pet Profile</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
              <div class="card-body">
                    <div class="col-12">
                      <h2 class="lead"><b>Pet Name :</b> <?php if($row['type'] === '1'){echo 'Dog';}elseif($row['type'] === '2'){echo 'Cat';}?> </h2>
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