
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
        <div class="hero-content">
            <?php foreach($ahtsingle as $row) :?>
            <ul class="breadcrumb-list pb-2">
                <li><a href="<?=base_url()?>Animal-Health-Tips">Animal Health Tips</a><span><svg xmlns="http://www.w3.org/2000/svg" height="19px" viewBox="0 0 24 24" width="19px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6-6-6z"/></svg></span></li>
                <li><a href="#">Tip View</a><span><svg xmlns="http://www.w3.org/2000/svg" height="19px" viewBox="0 0 24 24" width="19px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6-6-6z"/></svg></span></li>
                
            </ul>
            <h2 class="section-title"><?= $row['title'];?></h2>
            <div class="media media-card align-items-center shadow-none p-0 mb-0 rounded-0 mt-4 bg-transparent">
                <a href="#" class="media-img media-img--sm d-block mr-2 rounded-full">
                    <img src="<?=base_url()?>assets/disilab/images/img-loading.png" data-src="<?=base_url()?>assets/disilab/images/img1.jpg" alt="avatar" class="rounded-full lazy">
                </a>
                <div class="media-body">
                    <h5 class="fs-14 fw-medium">By <a href="#">Admin</a></h5>
                    <small class="meta d-block lh-20">
                        <span class="mr-2"><?php echo date('M d, Y', strtotime($row['date_added']))?></span>
                        <span class="mr-2 fs-15">.</span>
                    </small>
                </div>
            </div>
            <?php endforeach?>
        </div><!-- end hero-content -->
    </div><!-- end container -->
</section><!-- end hero-area -->

<!--======================================
        END HERO AREA
======================================-->

<!-- ================================
         START BLOG AREA
================================= -->
<section class="blog-area pt-80px pb-80px">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card card-item">
                    <div class="card-body">
                        <div class="card card-item" >
                        <?php foreach($ahtsingle as $row) { $link = $row['link'];?>
                            <?php if ($link){ ?>
                                <?php 
                                $videoURL = $link;
                                $convertedURL1 = str_replace("youtu.be/","youtube.com/embed/", $videoURL);
                                $convertedURL2 = str_replace("watch?v=","embed/", $videoURL); ?>
                                    <iframe  src="<?php if (strpos($videoURL, "youtu.be")==true){
                                    echo $convertedURL1 ;
                                }elseif (strpos($videoURL, "watch?v=")==true) {
                                echo $convertedURL2;
                                }else{
                                echo $link;}?>" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"  height="300" allowfullscreen></iframe>
                            <?php }else{ ?>
                                <img class="img-fluid" src="dist/img/unavailable.png" alt="Photo" >
                            <?php } ?>
                           
                            
                            <?php }?>
                        </div>
                        <p class="card-text pb-3" style="text-align: justify;"><?=$row['body'];?></p>
                        <div class="pager text-center pt-30px">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination generic-pagination justify-content-center">
                            
                            
                                <!-- <div class="btn-group">
                                    <a href="<?=base_url();?>edit/" class="btn theme-btn theme-btn-outline mr-2">Edit</a>&emsp;
                                    
                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal">
                                Delete
                                </button>
                                </div> -->
                            
                            
                            </ul>
                        </nav>
                    </div> 
                    </div><!-- end card-body -->
                    
                </div><!-- end card -->
                
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end blog-area -->
<!-- ================================
         END BLOG AREA
================================= -->


