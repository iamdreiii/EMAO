
<!--======================================
        START HERO AREA
======================================-->
<section class="hero-area pattern-bg-2 bg-white shadow-sm overflow-hidden pt-50px pb-50px">
    <span class="stroke-shape stroke-shape-1"></span>
    <span class="stroke-shape stroke-shape-2"></span>
    <span class="stroke-shape stroke-shape-3"></span>
    <span class="stroke-shape stroke-shape-4"></span>
    <span class="stroke-shape stroke-shape-5"></span>
    <span class="stroke-shape stroke-shape-6"></span>
    <div class="container">
        <div class="hero-content text-center">
            
            <h2 class="section-title pb-3">Pet Vaccination History</h2>
            <ul class="breadcrumb-list">
                <li><a href="<?=base_url()?>">Home</a><span><svg xmlns="http://www.w3.org/2000/svg" height="19px" viewBox="0 0 24 24" width="19px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6-6-6z"/></svg></span></li>
                <li>History</li>
            </ul><br>
            <div class="col-lg-4" style="margin: auto;">
                <div class="row">
                <div class="hero-btn-box ">
                    <a href="<?=base_url()?>User-Profile" class="btn theme-btn theme-btn-outline theme-btn-outline-gray"><i class="la la-gear mr-1"></i> Back To Profile</a>
                </div>&emsp;
                <div class="hero-btn-box ">
                <button type="button" class="btn theme-btn theme-btn-outline theme-btn-outline-gray" data-toggle="modal" data-target="#pethistory">Add Vacc. History</button>
                </div>
                </div>
            </div><!-- end col-lg-4 -->
        </div><!-- end hero-content -->
       
    </div><!-- end container -->
    
</section><!-- end hero-area -->
<!--======================================
        END HERO AREA
======================================-->

<!-- ================================
         START BLOG AREA
================================= -->
<link rel="stylesheet" href="<?=base_url()?>assets/timeline/style.css">

<section class="timeline">
        <ol>
        <?php foreach($allpets as $row){?>
            <li>
            <div>
                <time><?=date('Y-m-d',strtotime($row['date']))?></time> Your Pet was Vaccinated on this Date, Vaccine Type : <?=$row['vaccine'];?>
            </div>
            </li>
        <?php }?>
        <li></li>
        </ol>
  
        <div class="arrows">
            <button class="arrow arrow__prev disabled" disabled>
            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/162656/arrow_prev.svg" alt="prev timeline arrow">
            </button>
            <button class="arrow arrow__next">
            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/162656/arrow_next.svg" alt="next timeline arrow">
            </button>
        </div> 
</section><!-- end blog-area -->
<!-- ================================
         END BLOG AREA
================================= -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/hammer.js/2.0.8/hammer.min.js'></script><script  src="<?=base_url()?>assets/timeline/script.js"></script>

<!-- ///////////////////////////////////////////////ADD PET Vacc History///////////////////////////////////////////////////// -->
<?php foreach($viewpetid as $row){?>
<div class="modal fade modal-container login-form" id="pethistory" tabindex="-1" role="dialog<?=$row['id']?>" aria-labelledby="loginModalTitle<?=$row['id']?>" aria-hidden="true">
<?=form_open(base_url().'Pet_controller/pethistoryadd')?>
<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header align-items-center">
                <h5 class="modal-title" id="loginModalTitle">Add Vaccine History Form</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="la la-times"></span>
                </button>
            </div>
           
            <div class="modal-body">
                <div class="input-box">
                    <label for="sel_subcat" class="fs-14 text-black fw-medium mb-0">Vaccine</label>
                    <div class="form-group">
                        <select id="size" class="form-control form--control" name="vaccine" required>
                          <?php if($row['type'] == '1'){ echo '?>
                          <option disabled="disabled">Vaccine Type for Dog</option>
                          <option value="RABIES">Rabies</option>
                          <option value="DAP">DAP(Distemper,Adenovirus/Hepatitis,Parvovirus)</option>
                           ';} elseif($row['type'] == '2'){ echo '?>
                          <option disabled="disabled">Vaccine Type for Cat</option>
                          <option value="RBC">Rabies Cat</option>
                          <option value="DAPC">DAP CAT</option>
                          ';}?>
                        </select>
                    </div>
                </div><!-- end input-box -->
                <div class="form-group">
                    <label class="fs-14 text-black fw-medium lh-18">Color</label>
                    <input type="date" name="date" id="date" class="form-control form--control" placeholder="Color" required>
                </div><!-- end form-group -->
                <div class="modal-footer">
                    <input type="text" class="form-control" id="id" name="id" value="<?=$row['id'];?>" hidden="true">
                    <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-outline-primary">Update</button>
                </div>
            </div>
           
        </div>
    </div>
</div>
<?php }?>