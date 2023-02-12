
<!--======================================
        START HERO AREA
======================================-->
<section class="hero-area bg-white shadow-sm pt-80px pb-80px" >
    <span class="icon-shape icon-shape-1"></span>
    <span class="icon-shape icon-shape-2"></span>
    <span class="icon-shape icon-shape-3"></span>
    <span class="icon-shape icon-shape-4"></span>
    <span class="icon-shape icon-shape-5"></span>
    <span class="icon-shape icon-shape-6"></span>
    <span class="icon-shape icon-shape-7"></span>
    <div class="container">
        <div class="hero-content text-center">
            <h2 class="section-title pb-3">Frequently Asked Questions</h2>
            <p class="section-desc">Find out everything you need to get started by taking the tour. <br>
                If you still have questions contact us:
                <a href="mailto:dept.of.agriculture.polaormin@gmail.com" class="text-color hover-underline">dept.of.agriculture.polaormin@gmail.com</a>
            </p>
        </div><!-- end hero-content -->
    </div><!-- end container -->
</section>
<!--======================================
        END HERO AREA
======================================-->

<!--======================================
        START FAQ AREA
======================================-->
<section class="faq-area pt-80px pb-80px" style="background-color: hsl(120, 60%, 70%, 0.3);">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div id="accordion" class="generic-accordion">
                <?php foreach($faqs as $row){?>
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne<?=$row['id'];?>" aria-expanded="true" aria-controls="collapseOne">
                                <span> <?=$row['question'];?></span>
                                <i class="la la-angle-down collapse-icon"></i>
                            </button>
                        </div>
                        <div id="collapseOne<?=$row['id'];?>" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                            <div class="card-body">
                                <p class="fs-15 lh-24"><?=$row['answer'];?></p>
                                
                            </div>
                        </div>
                    </div><!-- end card -->
                    <?php }?>
                </div><!-- end accordion -->
            </div><!-- end col-lg-8 -->
            
            
        </div><!-- end row -->
    </div><!-- end container -->
</section>
<!--======================================
        END FAQ AREA
======================================-->


