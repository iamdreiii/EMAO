
<!--======================================
        START HERO AREA
======================================-->
<section class="hero-area pattern-bg-2 bg-white shadow-sm overflow-hidden pt-50px pb-50px" style="background-image: url(<?=base_url()?>assets/adminuploads/aboutus.png);">
    <span class="stroke-shape stroke-shape-1"></span>
    <span class="stroke-shape stroke-shape-2"></span>
    <span class="stroke-shape stroke-shape-3"></span>
    <span class="stroke-shape stroke-shape-4"></span>
    <span class="stroke-shape stroke-shape-5"></span>
    <span class="stroke-shape stroke-shape-6"></span>
    <div class="container" >
        <div class="hero-content text-center">
            
            <h2 class="section-title pb-3">Municipal Agriculture Office - Activities</h2>
            <ul class="breadcrumb-list">
                <li><a href="<?=base_url()?>">Home</a><span><svg xmlns="http://www.w3.org/2000/svg" height="19px" viewBox="0 0 24 24" width="19px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6-6-6z"/></svg></span></li>
                <li>Activities</li>
            </ul>
        </div><!-- end hero-content -->
    </div><!-- end container -->
</section><!-- end hero-area -->
<!--======================================
        END HERO AREA
======================================-->

<!-- ================================
         START BLOG AREA
================================= -->
<!-- style="background-image: url(<?=base_url()?>assets/adminuploads/aboutus.png);" -->
<section class="blog-area pt-80px pb-80px" style="background-color: hsl(120, 60%, 70%, 0.3);">
    <div class="container">
        <div class="row">
            <?php foreach($blog as $row) :?>
            <div class="col-lg-6 responsive-column-half">
                <div class="card card-item hover-y">
                    <a href="<?=base_url()?>Blog-Single/<?php echo $row['slug'];?>" class="card-img">
                        <img class="lazy" src="<?=base_url()?>assets/disilab/images/img-loading.png" data-src="<?=base_url()?>assets/media/announcement/<?php echo $row['pic_file'];?>" alt="Card image">
                    </a>
                    <div class="card-body pt-0">
                        <a href="#" class="card-link">M-A-O</a>
                        <h5 class="card-title fw-medium"><a href="<?=base_url()?>Blog-Single/<?php echo $row['slug'];?>"><?php echo $row['title'];?></a></h5>
                        <div class="media media-card align-items-center shadow-none p-0 mb-0 rounded-0 mt-4 bg-transparent">
                            <a href="#" class="media-img media-img--sm d-block mr-2 rounded-full">
                                <img src="<?=base_url()?>assets/adminuploads/1.png" alt="avatar" class="rounded-full">
                            </a>
                            <div class="media-body">
                                <h5 class="fs-14 fw-medium">By <a href="#">Admin</a></h5>
                                <small class="meta d-block lh-20">
                                    <span><?php echo date('M d, Y', strtotime($row['date_published']))?></span>
                                </small>
                            </div>
                        </div>
                    </div><!-- end card-body -->
                </div><!-- end card -->
            </div><!-- end col-lg-4 -->
            <?php endforeach ?>
            
        </div><!-- end row -->
        <div class="pager text-center pt-30px">
            <nav aria-label="Page navigation example">
                <ul class="generic-pagination justify-content-center">
                    <?php if(empty($blog)){echo 'No Matching Result';}?>
                </ul>
            </nav>   
        </div>
        <div class="pager text-center pt-30px">
            <nav aria-label="Page navigation example">
                <ul class="generic-pagination justify-content-center">
                    <?php if(!empty($links)){echo $links;}else{} ?>
                </ul>
            </nav>         
        </div>
    </div><!-- end container -->
</section><!-- end blog-area -->
<!-- ================================
         END BLOG AREA
================================= -->
