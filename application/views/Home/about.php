<?php foreach ($about as $row) :?>
<!--======================================
        START HERO AREA
======================================-->
<section class="hero-area section-padding " style="background-color: hsl(120, 60%, 70%,0.3);">
    <span class="icon-shape icon-shape-1 is-scale"></span>
    <span class="icon-shape icon-shape-2 is-bounce"></span>
    <span class="icon-shape icon-shape-3 is-swing"></span>
    <span class="icon-shape icon-shape-4 is-spin"></span>
    <span class="icon-shape icon-shape-5 is-spin"></span>
    <span class="icon-shape icon-shape-6 is-bounce"></span>
    <span class="icon-shape icon-shape-7 is-tilt"></span>
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="hero-content">
                    <h2 class="fs-25 fw-medium pb-3">About Us</h2>
                    <p class="lh-26 pb-3"><?=$row['who'];?></p>
                </div><!-- end hero-content -->
            </div><!-- end col-lg-6 -->
            <div class="col-lg-6">
                <div class="generic-img-box h-100">
                    <img class="lazy" src="<?=base_url()?>assets/disilab/images/img-loading.png" data-src="<?=base_url()?>assets/adminuploads/pola1.png" alt="image">
                    <img class="lazy" src="<?=base_url()?>assets/disilab/images/img-loading.png" data-src="<?=base_url()?>assets/adminuploads/doa.png" alt="image">
                    <!-- <img class="lazy" src="<?=base_url()?>assets/disilab/images/img-loading.png" data-src="<?=base_url()?>assets/adminuploads/pola1.png" alt="image"> -->
                    <!-- <img class="lazy" src="<?=base_url()?>assets/disilab/images/img-loading.png" data-src="<?=base_url()?>assets/adminuploads/doa.png" alt="image"> -->
                </div>
            </div><!-- end col-lg-6 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section>
<!--======================================
        END HERO AREA
======================================-->


<!-- ================================
         START AWARD AREA
================================= -->
<section class="award-area pt-120px pb-70px">
    <div class="container">
        <div class="row">
            
            <div class="col-lg-10 mx-auto">
                <div class="award-content text-center">
                <h2 class="section-title fs-30 pb-3 lh-40">Our Vision</h2>
                    <p class="section-desc pb-3"><?=$row['vision'];?></p>
                </div>
            </div>
        </div><!-- end row-->
    </div><!-- end container -->
</section><!-- end award-area -->
<!-- ================================
         END AWARD AREA
================================= -->

<!-- ================================
         START ABOUT AREA
================================= -->
<section class="about-area pb-120px">
    <div class="container">
        <div class="about-box bg-white shadow-md rounded-rounded px-5 pt-40px pb-90px">
            <div class="about-content pb-90px text-center">
                <h2 class="section-title fs-30 pb-3 lh-40">Our Mission</h2>
                <p class="section-desc pb-3"><?=$row['mission'];?></p>
            </div><!-- end about-content -->
        </div><!-- end about-box -->
    </div><!-- end container -->
</section><!-- end about-area -->
<!-- ================================
         END ABOUT AREA
================================= -->


<!-- ================================
         START ABOUT AREA
================================= -->
<section class="about-area pb-120px">
    <div class="container">
    <div class="card card-item" >
                <div class="card-body">
                    <h3 class="fs-19 pb-3 fw-semi-bold">Office Location</h3>
                    <div class="divider"><span></span></div>
                    <?php $this->load->view('Home/map');?>
                </div>
            </div><!-- end card-item -->
    </div><!-- end container -->
</section><!-- end about-area -->
<!-- ================================
         END ABOUT AREA
================================= -->
<?php endforeach?>