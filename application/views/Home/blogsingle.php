
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
            <?php foreach($blogsingle as $row) :?>
            <ul class="breadcrumb-list pb-2">
                <li><a href="<?=base_url()?>">Home</a><span><svg xmlns="http://www.w3.org/2000/svg" height="19px" viewBox="0 0 24 24" width="19px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6-6-6z"/></svg></span></li>
                <li><a href="#">Activity View</a><span><svg xmlns="http://www.w3.org/2000/svg" height="19px" viewBox="0 0 24 24" width="19px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6-6-6z"/></svg></span></li>
                
            </ul>
            <h2 class="section-title"><?= $row['title'];?></h2>
            <div class="media media-card align-items-center shadow-none p-0 mb-0 rounded-0 mt-4 bg-transparent">
                <a href="#" class="media-img media-img--sm d-block mr-2 rounded-full">
                    <img src="<?=base_url()?>assets/disilab/images/img-loading.png" data-src="<?=base_url()?>assets/media/home/1.png" alt="avatar" class="rounded-full lazy">
                </a>
                <div class="media-body">
                    <h5 class="fs-14 fw-medium">By <a href="#">Admin</a></h5>
                    <small class="meta d-block lh-20">
                        <span class="mr-2"><?php echo date('M d, Y', strtotime($row['date_published']))?></span>
                        <span class="mr-2 fs-15">.</span>
                        <a href="#comments" class="page-scroll text-gray"><i class="la la-comment mr-1"></i><?php echo number_format(count($comments)) ?></a>
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
                    <?php foreach($blogsingle as $row) {?>
                        <div class="col-lg-12">
                                <a href="<?=base_url()?>assets/media/announcement/<?=$row['pic_file'];?>" class="gallery-item overflow-hidden mb-4" data-fancybox="gallery">
                                    <img class="lazy" src="<?=base_url()?>assets/disilab/images/img-loading.png" data-src="<?=base_url()?>assets/media/announcement/<?=$row['pic_file'];?>" alt="review image">
                                </a>
                            </div><!-- end col-lg-6 -->
                        <p class="card-text pb-3" style="text-align: justify;"><?=$row['body'];?></p>
                        
                        <?php }?>
                    </div><!-- end card-body -->
                </div><!-- end card -->
                <div class="card card-item">
                    <div class="card-body">
                        <h4 class="pb-3 fs-20"><?php echo number_format(count($comments)) ?> Comments</h4>
                        <ul class="comments-list pt-3" id="comments">
                        <?php if(!empty($comments)){?>
                        <?php  function hideEmailAddress($email)
                                    {
                                        if(filter_var($email, FILTER_VALIDATE_EMAIL))
                                        {
                                            list($first, $last) = explode('@', $email);
                                            $first = str_replace(substr($first, '3'), str_repeat('*', strlen($first)-3), $first);
                                            $last = explode('.', $last);
                                            $last_domain = str_replace(substr($last['0'], '1'), str_repeat('*', strlen($last['0'])-1), $last['0']);
                                            $hideEmailAddress = $first.'@'.$last_domain.'.'.$last['1'];
                                            return $hideEmailAddress;
                                        }
                                    }
                                    foreach($comments as $row): ?>
                            <li class="mb-3">
                                <div class="comment-avatar">
                                    <img class="lazy" src="<?=base_url()?>assets/disilab/images/img-loading.png" data-src="<?=base_url()?>assets/media/home/1.png" alt="avatar">
                                </div>
                                <div class="comment-body pt-0">
                                    <span class="comment-user text-black">
                                    <?php
                                    
                                    $email = $row['email'];
                                    echo hideEmailAddress($email);
                                    ?>
                                    </span>
                                    <span class="comment-separated">-</span>
                                    <span class="comment-date text-gray"><?php 
                                            $this->load->helper('date');
                                            $date=$row['date_created'];
                                            $last = new DateTime($date);
                                            $now = new DateTime( date( 'Y-m-d h:i:s', time() )) ; 
                                            $interval = $last->diff($now);
                                            $years = (int)$interval->format('%Y');
                                            $months = (int)$interval->format('%m');
                                            $days = (int)$interval->format('%d');
                                            $hours = (int)$interval->format('%H');
                                            $minutes = (int)$interval->format('%i');
                                            if($years > 0)
                                            {
                                            echo $years.' Year/s  ago' ;
                                            }
                                            else if($months > 0)
                                            {
                                            echo $months.' Month/s  ago' ;
                                            }
                                            else if($days > 0)
                                            {
                                            echo $days.' Day/s ago' ;
                                            }
                                            else if($hours > 0)
                                            {
                                            echo  $hours.' Hour/s  ago' ;
                                            }
                                            else
                                            {
                                            echo $minutes.' minute/s ago' ;
                                            }
                                         ?></span>
                                    <p class="comment-text pt-1 pb-2 lh-22"><?= $row['comment'];?></p>
                                    
                                </div>
                            </li>
                            <?php endforeach?>
                            <?php }else{?>
                            <p class="comment-text pt-1 pb-2 lh-22">No comment/s...</p>
                            <hr>
                        <?php }?>
                        </ul>
                    </div><!-- end card-body -->
                </div><!-- end card -->
                <form method="post" action="<?=base_url()?>Home_controller/addannouncement_comment" class="card card-item">
                    <div class="card-body row">
                        <div class="form-group col-lg-12">
                            <h4 class="fs-20">Leave a Reply</h4>
                            <p class="fs-14">Your email address will not be published. Required fields are marked *</p>
                        </div><!-- end form-group -->
                        <div class="form-group col-lg-6">
                            <label class="fs-13 text-black lh-20">Name</label>
                            <input class="form-control form--control" type="text" name="name" placeholder="Your name" required="name">
                        </div><!-- end form-group -->
                        <div class="form-group col-lg-6">
                            <label class="fs-13 text-black lh-20">Email</label>
                            <input class="form-control form--control" type="email" name="email" placeholder="Your email" required="email">
                        </div><!-- end form-group -->
                        <div class="form-group col-lg-12">
                            <label class="fs-13 text-black lh-20">Comment</label>
                            <textarea class="form-control form--control" name="comment" rows="5" placeholder="Your comment here..." required="comment"></textarea>
                        </div><!-- end form-group -->
                        <div class="form-group col-lg-12 mb-0">
                            <!-- <div class="custom-control custom-checkbox fs-14 mb-3">
                                <input type="checkbox" class="custom-control-input" id="saveAll">
                                <label class="custom-control-label custom--control-label" for="saveAll">Save my name and email in this browser for the next time I comment.</label>
                            </div> -->
                            <input type="hidden" id="id" name="id" value="<?=$this->uri->segment(2);?>">
                            <button class="btn theme-btn" type="submit">Post Comment </button>
                        </div><!-- end form-group -->
                    </div><!-- end card-body -->
                </form>
            </div><!-- end col-lg-8 -->
            
                    
                    
                    
                    
                </div><!-- end sidebar -->
            </div><!-- end col-lg-4 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end blog-area -->
<!-- ================================
         END BLOG AREA
================================= -->
