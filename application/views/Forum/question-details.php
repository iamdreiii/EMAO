
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
            <?php foreach($question as $row) :?>
            <ul class="breadcrumb-list pb-2">
                <li><a href="<?=base_url()?>Discussion">Discussion</a><span><svg xmlns="http://www.w3.org/2000/svg" height="19px" viewBox="0 0 24 24" width="19px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6-6-6z"/></svg></span></li>
                <li><a href="#">Activity View</a><span><svg xmlns="http://www.w3.org/2000/svg" height="19px" viewBox="0 0 24 24" width="19px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6-6-6z"/></svg></span></li>
                
            </ul>
            <h2 class="section-title"><?= $row['title'];?></h2>
            <div class="media media-card align-items-center shadow-none p-0 mb-0 rounded-0 mt-4 bg-transparent">
                <a href="#" class="media-img media-img--sm d-block mr-2 rounded-full">
                    <img src="<?=base_url()?>assets/disilab/images/img-loading.png" data-src="<?=base_url()?>assets/useruploads/<?=$row['pic_file'];?>" alt="avatar" class="rounded-full lazy">
                </a>
                <div class="media-body">
                    <h5 class="fs-14 fw-medium">By <a href="#"><?php if(empty($row['category'])){echo 'User Name';}else{echo $row['username'];} ?></a></h5>
                    <small class="meta d-block lh-20">
                        <span class="mr-2"><?php echo date('M d, Y', strtotime($row['date_created']))?></span>
                        <span class="mr-2 fs-15">.</span>
                        <a href="#comments" class="page-scroll text-gray"><i class="la la-comment mr-1"></i><?php echo number_format(count($commentview)) ?></a>
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
                <div class="question d-flex">
                <?php foreach($question as $row) {?><?php $id = $this->uri->segment(2);?>
                <div class="votes votes-styled w-auto" >
                
                            <div class="upvotejs">
                                <a href="<?=base_url()?>Votes_controller/upvote?id=<?=$id?>" class="upvote upvote-on"  data-toggle="tooltip" data-placement="right" title="This question is useful"></a>
                                <span  class="count"><?=$row['likes'];?></span>
                                <a href="<?=base_url()?>Votes_controller/downvote?id=<?=$id?>" class="downvote" data-toggle="tooltip" data-placement="right" title="This question is not useful"></a>
                               
                            </div>
                        </div><!-- end votes -->
                    <div class="card-body">
                    
                        <div class="col-lg-12">
                                <!-- <a href="<?=base_url()?>assets/media/announcement/<?=$row['pic_file'];?>" class="gallery-item overflow-hidden mb-4" data-fancybox="gallery">
                                    <img class="lazy" src="<?=base_url()?>assets/disilab/images/img-loading.png" data-src="<?=base_url()?>assets/media/announcement/<?=$row['pic_file'];?>" alt="review image">
                                </a> -->
                            </div><!-- end col-lg-6 -->
                        <p class="card-text pb-3" style="text-align: justify;"><?=$row['content'];?></p>
                        
                        <?php }?>
                    </div><!-- end card-body -->
                </div><!-- end card -->
                </div>
                <div class="card card-item">
                    <div class="card-body">
                        <h4 class="pb-3 fs-20"><?php echo number_format(count($commentview)) ?> Comments</h4>
                        <ul class="comments-list pt-3" id="comments">
                        <?php if(!empty($commentview)){?>
                        <?php  foreach($commentview as $crow): ?>
                            <li class="mb-3">
                                <div class="comment-avatar">
                                    <img class="lazy" src="<?=base_url()?>assets/disilab/images/img-loading.png" data-src="<?=base_url()?>assets/useruploads/<?=$row['pic_file'];?>" alt="avatar">
                                </div>
                                <div class="comment-body pt-0">
                                    <span class="comment-user text-black"><?php echo $crow['email'] ?></span>
                                    <span class="comment-separated">-</span>
                                    <span class="comment-date text-gray"><?php 
                                            $this->load->helper('date');
                                            $date=$crow['date_created'];
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
                                         
                                    <p class="comment-text pt-1 pb-2 lh-22"><?php echo html_entity_decode($crow['comment']) ?></p>
                                    
                                </div>
                                <?php if($crow['user_id'] === $this->session->id){?>
                                <div class="float-right" style="margin-right: 20px;">
                                    <a class="text-dark " href="javascript:void(0)" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="fas fa-ellipsis-v"></span>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <button data-toggle="modal" data-target="#cedit<?=$crow['id'];?>" class="dropdown-item">Edit</button>
                                    <button data-toggle="modal" data-target="#cdel<?=$crow['id'];?>" class="dropdown-item">Delete</button>
                                    </div>
                                </div>
                                <?php }?>
                            </li>
                            
                            <?php endforeach ?>
                        <?php }else{?>
                            <p class="comment-text pt-1 pb-2 lh-22">No comment/s...</p>
                            <hr>
                        <?php }?>
                        </ul>
                       
                    </div><!-- end card-body -->
                </div><!-- end card -->
                <?php if($this->session->logged_in == true){?><?php $id = $this->uri->segment(2);?>
                <form method="post" action="<?=base_url()?>Forum_controller/addcomment/<?=$id?>" class="card card-item">
                    <div class="card-body row">
                        <div class="form-group col-lg-12">
                            <h4 class="fs-20">Leave a Reply</h4>
                        </div><!-- end form-group -->
                        <div class="form-group col-lg-12">
                            <label class="fs-13 text-black lh-20">Message</label>
                            <textarea class="form-control form--control" name="message" rows="5" placeholder="Your comment here..." required="message"></textarea>
                        </div><!-- end form-group -->
                        <div class="form-group col-lg-12 mb-0">
                            <button class="btn theme-btn" type="submit">Post Comment </button>
                        </div><!-- end form-group -->
                    </div><!-- end card-body -->
                </form>
                <?php }else{?>
					<div class="card-body row">
                        <div class="form-group col-lg-12">
                            <h4 class="fs-20">Login to post comment...</h4>
                        </div>
				<?php }?>
            </div><!-- end col-lg-8 -->
            
                    
                    
                    
                    
                </div><!-- end sidebar -->
            </div><!-- end col-lg-4 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end blog-area -->
<!-- ================================
         END BLOG AREA
================================= -->
<?php $this->load->view('Forum/question-details-modals');?>
