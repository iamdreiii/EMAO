<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="author" content="EMAO">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>M-A-O</title>
    <link rel="manifest" href="<?=base_url();?>manifest.json">
    <!-- (C) SERVICE WORKER -->
    <script>
    if ("serviceWorker" in navigator) { navigator.serviceWorker.register("<?=base_url();?>sw.js"); }
    </script>
    <link rel="icon" href="<?=base_url();?>assets/pwaimages/icon-64x64.png" type="image/png">
    <!-- (D2) ANDROID/CHROME -->
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="theme-color" content="white">
    <!-- (D3) IOS APP ICON + MOBILE SAFARI -->
    <link rel="apple-touch-icon" href="<?=base_url();?>assets/pwaimages/icon-512x512.png">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="white">
    <meta name="apple-mobile-web-app-title" content="Hello World">
    <!-- (D4) WINDOWS -->
    <meta name="msapplication-TileImage" content="<?=base_url();?>assets/pwaimages/icon-512x512.png">
    <meta name="msapplication-TileColor" content="#ffffff">
    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&display=swap" rel="stylesheet">

    <!-- Favicon -->
    <link rel="icon" sizes="16x16" href="<?=base_url()?>assets/disilab/images/favicon.png">

    <!-- inject:css -->
    <link rel="stylesheet" href="<?=base_url()?>assets/disilab/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/disilab/css/line-awesome.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/disilab/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/disilab/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/disilab/css/selectize.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/disilab/css/style.css">
    
    <!-- end inject -->
</head>
<body>

<!-- start cssload-loader -->
<div id="preloader">
    <div class="loader">
        <svg class="spinner" viewBox="0 0 50 50">
            <circle class="path" cx="25" cy="25" r="20" fill="none" stroke-width="5"></circle>
        </svg>
    </div>
</div>
<!-- end cssload-loader -->

<!--======================================
        START HEADER AREA
    ======================================-->
<header class="header-area bg-white">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-2">
                <div class="logo-box">
                    <a href="<?=base_url()?>" class="logo"><h4>M-A-O</h4></a>
                    <div class="user-action">
                        <div class="search-menu-toggle icon-element icon-element-xs shadow-sm mr-1" data-toggle="tooltip" data-placement="top" title="Search">
                            <i class="la la-search"></i>
                        </div>
                        <div class="off-canvas-menu-toggle icon-element icon-element-xs shadow-sm" data-toggle="tooltip" data-placement="top" title="Main menu">
                            <i class="la la-bars"></i>
                        </div>
                        <?php if($this->session->logged_in == TRUE){?>
                        <div class="user-off-canvas-menu-toggle icon-element icon-element-xs shadow-sm" data-toggle="tooltip" data-placement="top" title="User menu">
                            <i class="la la-user"></i>
                        </div>
                        <?php }?>
                    </div>
                </div>
            </div><!-- end col-lg-2 -->
            <div class="col-lg-10">
                <div class="menu-wrapper border-left border-left-gray pl-4 justify-content-end">
                    <nav class="menu-bar mr-auto">
                        <ul>
                            <li><a href="<?=base_url()?>">Home </i></a></li>
                            <li><a href="<?=base_url()?>Calendar">Calendar </i></a></li>
                            <li>
                                <a href="#">Menu <i class="la la-angle-down fs-11"></i></a>
                                <ul class="dropdown-menu-item">
                                    <li><a href="<?=base_url()?>Animal-Health-Tips">Animal Health Tips</a></li>
                                    <li><a href="<?=base_url()?>Contact-us">Contact Us</a></li>
                                    <li><a href="<?=base_url()?>Discussion">Discussion</a></li>
                                    <li><a href="<?=base_url()?>FAQ">FAQ's</a></li>
                                    <li><a href="<?=base_url()?>About">About</a></li>
                                </ul>
                            </li>
                        </ul><!-- end ul -->
                    </nav><!-- end main-menu -->
                    <form method="POST" action="<?=base_url()?>/Discussion-Search" class="mr-4" >
                        <div class="form-group mb-0">
                            <input class="form-control form--control form--control-bg-gray" type="text" name="search" placeholder="Type your search words...">
                            <button class="form-btn" type="submit"><i class="la la-search"></i></button>
                        </div>
                    </form>
                    <?php if($this->session->logged_in == FALSE){?>
                    <div class="nav-right-button">
                        <a href="<?=base_url()?>Login" class="btn theme-btn theme-btn-outline mr-2" ><i class="la la-sign-in mr-1"></i> Login</a>
                        <a href="<?=base_url()?>Signup" class="btn theme-btn" ><i class="la la-user mr-1"></i> Sign up</a>
                    </div><!-- end nav-right-button -->
                    <?php }else{?>
                        <div class="nav-right-button">
                        <ul class="user-action-wrap d-flex align-items-center">
                            
                            <li class="dropdown user-dropdown">
                                <a class="nav-link dropdown-toggle dropdown--toggle pl-2" href="#" id="userMenuDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <div class="media media-card media--card shadow-none mb-0 rounded-0 align-items-center bg-transparent">
                                        <div class="media-img media-img-xs flex-shrink-0 rounded-full mr-2">
                                            <?php foreach($user as $row){?>
                                            <img src="<?=base_url()?>assets/useruploads/<?=$row['pic_file'];?>" alt="avatar" class="rounded-full">
                                            <?php }?>
                                        </div>
                                        <div class="media-body p-0 border-left-0">
                                            <h5 class="fs-14"><?= $this->session->username?></h5>
                                        </div>
                                    </div>
                                </a>
                                <div class="dropdown-menu dropdown--menu dropdown-menu-right mt-3 keep-open" aria-labelledby="userMenuDropdown">
                                    <h6 class="dropdown-header">Hi, <?= $this->session->username?></h6>
                                    <div class="dropdown-divider border-top-gray mb-0"></div>
                                    <div class="dropdown-item-list">
                                        <?php if($this->session->access == 'user' || $this->session->access == 'ca'){?>
                                        <a class="dropdown-item" href="<?=base_url()?>User-Profile"><i class="la la-user mr-2"></i>Profile</a>
                                        <a class="dropdown-item" href="<?=base_url()?>User-Setting"><i class="la la-gear mr-2"></i>Settings</a>
                                        <a class="dropdown-item" href="<?=base_url()?>Logout"><i class="la la-power-off mr-2"></i>Log out</a>
                                        <?php }elseif($this->session->access == 'admin'){?>
                                        <a class="dropdown-item" href="<?=base_url()?>Admin"><i class="la la-gear mr-2"></i>Dashboard</a>
                                        <a class="dropdown-item" href="<?=base_url()?>Logout"><i class="la la-power-off mr-2"></i>Log out</a>
                                        <?php }?>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div><!-- end nav-right-button -->
                    <?php }?>
                </div><!-- end menu-wrapper -->
            </div><!-- end col-lg-10 -->
        </div><!-- end row -->
    </div><!-- end container -->
    <div class="off-canvas-menu custom-scrollbar-styled">
        <div class="off-canvas-menu-close icon-element icon-element-sm shadow-sm" data-toggle="tooltip" data-placement="left" title="Close menu">
            <i class="la la-times"></i>
        </div><!-- end off-canvas-menu-close -->
        <ul class="generic-list-item off-canvas-menu-list pt-90px">
            <li><a href="<?=base_url()?>">Home</a></li>
            <li><a href="<?=base_url()?>Calendar">Calendar</a></li>
            <li>
                <a href="#">Menu</a>
                <ul class="sub-menu">
                                    <li><a href="<?=base_url()?>Animal-Health-Tips">Animal Health Tips</a></li>
                                    <li><a href="<?=base_url()?>Contact-us">Contact Us</a></li>
                                    <li><a href="<?=base_url()?>Discussion">Discussion</a></li>
                                    <li><a href="<?=base_url()?>FAQ">FAQ's</a></li>
                                    <li><a href="<?=base_url()?>About">About</a></li>
                </ul>
            </li>
        </ul>
        <?php if($this->session->logged_in == FALSE){?>
        <div class="off-canvas-btn-box px-4 pt-5 text-center">
            <a href="<?=base_url()?>Login" class="btn theme-btn theme-btn-sm theme-btn-outline" ><i class="la la-sign-in mr-1"></i> Login</a>
            <span class="fs-15 fw-medium d-inline-block mx-2">Or</span>
            <a href="<?=base_url()?>Signup" class="btn theme-btn theme-btn-sm" ><i class="la la-plus mr-1"></i> Sign up</a>
        </div>
       <?php }?>
    </div><!-- end off-canvas-menu -->
    <?php if($this->session->logged_in == TRUE){?>
    <div class="user-off-canvas-menu custom-scrollbar-styled">
        <div class="user-off-canvas-menu-close icon-element icon-element-sm shadow-sm" data-toggle="tooltip" data-placement="left" title="Close menu">
            <i class="la la-times"></i>
        </div><!-- end user-off-canvas-menu-close -->
        <ul class="nav nav-tabs generic-tabs generic--tabs pt-90px pl-4 shadow-sm" id="myTab2" role="tablist">
            <li class="nav-item"><div class="anim-bar"></div></li>
            <li class="nav-item">
                <a class="nav-link active" id="user-profile-menu-tab" data-toggle="tab" href="#user-profile-menu" role="tab" aria-controls="user-profile-menu" aria-selected="false">Profile</a>
            </li>
        </ul>
        <div class="tab-content pt-3" id="myTabContent2">
            
            <div class="tab-pane fade show active" id="user-profile-menu" role="tabpanel" aria-labelledby="user-profile-menu-tab">
                <div class="dropdown--menu shadow-none w-auto rounded-0">
                    <div class="dropdown-item-list">
                    <?php if($this->session->access == 'user' || $this->session->access == 'ca'){?>
                        <a class="dropdown-item" href="<?=base_url()?>User-Profile"><i class="la la-user mr-2"></i>Profile</a>
                        <a class="dropdown-item" href="<?=base_url()?>User-Setting"><i class="la la-gear mr-2"></i>Settings</a>
                        <a class="dropdown-item" href="<?=base_url()?>Logout"><i class="la la-power-off mr-2"></i>Log out</a>
                        <?php }elseif($this->session->access == 'admin'){?>
                        <a class="dropdown-item" href="<?=base_url()?>Admin"><i class="la la-gear mr-2"></i>Dashboard</a>
                        <a class="dropdown-item" href="<?=base_url()?>Logout"><i class="la la-power-off mr-2"></i>Log out</a>
                        <?php }?>
                    </div>
                </div>
            </div><!-- end tab-pane -->
        </div>
    </div><!-- end user-off-canvas-menu -->
    <?php }?>
    <div class="mobile-search-form">
        <div class="d-flex align-items-center">
            <form method="POST" action="<?=base_url()?>/Discussion-Search" class="flex-grow-1 mr-3">
                <div class="form-group mb-0">
                    <input class="form-control form--control pl-40px" type="text" name="search" placeholder="Type your search words...">
                    <span class="la la-search input-icon"></span>
                </div>
            </form>
            
            <div class="search-bar-close icon-element icon-element-sm shadow-sm">
                <i class="la la-times"></i>
            </div><!-- end off-canvas-menu-close -->
        </div>
    </div><!-- end mobile-search-form -->
    <div class="body-overlay"></div>
</header><!-- end header-area -->
<!--======================================
        END HEADER AREA
======================================-->

<!-- ================================
         START QUESTION AREA
================================= -->
<section class="question-area" >
    <div class="container" >
        <div class="row" >
            <div class="col-lg-2 pr-0">
                <div class="sidebar position-sticky top-0 pt-40px">
                    <ul class="generic-list-item generic-list-item-highlight fs-15">
                        <li class="lh-26"><a href="<?=base_url()?>Discussion"><i class="la la-home mr-1 text-black"></i> Home</a></li>
                        <li class="lh-26 bottom-2"><a href="<?=base_url()?>Discussion"><i class="la la-globe mr-1 text-black"></i> Questions</a></li>
                        <!-- <li class="lh-26"><a href="category-list.html"><i class="la la-sort mr-1 text-black"></i> Categories</a></li>
                        <li class="lh-26"><a href="companies.html"><i class="la la-briefcase mr-1 text-black"></i> Forums</a></li> -->
                        <li class="lh-26"><a href="#"><i class="la la-briefcase mr-1 text-black"></i> Forums</a></li>
                        <?php foreach($forumlist as $row){?>
                                            <ul class="media-body">
                                                <li class="lh-26" style="padding-left: 20px;"><a href="<?=base_url();?>Filter-Forum/<?=$row['id'];?>"><?= $row['title'];?></a></li>
                                            </ul>
                                        <?php }?>
                    </ul>
                </div><!-- end sidebar -->
            </div><!-- end col-lg-2 -->
            <div class="col-lg-7 px-0" >
                <div class="question-main-bar border-left border-left-gray pt-40px pb-40px">
                    <div class="filters pb-4 pl-3">
                        <?php if($this->session->logged_in === true) :?>
                        <div class="d-flex flex-wrap align-items-center justify-content-between pb-3">
                            <h3 class="fs-22 fw-medium">All Questions</h3>
                            <a href="<?=base_url()?>Ask-Question" class="btn theme-btn theme-btn-sm">Ask Question</a>
                        </div>
                        <?php endif?>
                        <div class="d-flex flex-wrap align-items-center justify-content-between">
                            <p class="pt-1 fs-15 fw-medium lh-20"><?=$total?> questions</p>
                            <div class="filter-option-box w-20">
                                <form method="POST" action="<?=base_url()?>Filter">
                                <select class="custom-select" name="filter" onchange="this.form.submit()">
                                    <option value="" selected>Select</option>
                                    <option value="newest">Newest </option>
                                    <option  value="votes">Votes </option>
                                    <option  value="views">Views </option>
                                    <option  value="unanswered">Unanswered </option>
                                </select>
                                </form>
                            </div>
                        </div>
                    </div><!-- end filters -->
                    <div class="questions-snippet border-top border-top-gray">
                    <?php
                    if(isset($forum) && is_array($forum) && count($forum)): $i=1;
                    foreach ($forum as $key => $row) { 
                    ?>
                    
                    <div class="media media-card rounded-0 shadow-none mb-0 bg-transparent p-3 border-bottom border-bottom-gray">
                            <div class="votes text-center votes-2">
                                <div class="vote-block">
                                    <span class="vote-counts d-block text-center pr-0 lh-20 fw-medium">
                                    <?=$row['likes'];?>
                                    </span>
                                    <span class="vote-text d-block fs-13 lh-18">votes</span>
                                </div>
                                <div class="answer-block answered my-2">
                                    <span class="answer-counts d-block lh-20 fw-medium">
                                        <?php $topicid = $row['id'];
										$qr = $this->db->query("SELECT COUNT(*) as countc FROM forum_comments join forum_topics on forum_topics.id = forum_comments.topic_id where forum_topics.id = $topicid");
										$query = $qr->result_array();
										foreach($query as $cmrow){
									?></span><?php echo number_format($cmrow['countc']) ?>
                                    <span class="answer-text d-block fs-13 lh-18">answers</span>
                                    <?php }?>
                                </div>
                                <div class="view-block">
                                    <span class="view-counts d-block lh-20 fw-medium"><?=$row['views'];?></span>
                                    <span class="view-text d-block fs-13 lh-18">views</span>
                                </div>
                            </div>
                            <div class="media-body">
                                <h5 class="mb-2 fw-medium"><a href="<?=base_url()?>Question-Details/<?=$row['id'];?>"><?=$row['title'];?></a></h5>
                                <p class="mb-2 truncate lh-20 fs-15"><?=$row['content'];?></p>
                                <div class="tags">
                                <a href="#" class="tag-link"><?php if(empty($row['forumtitle'])){echo 'Forum Unavailable';}else{echo $row['forumtitle'];} ?></a> <b>:</b>
                                <a href="#" class="tag-link"><?php if(empty($row['category'])){echo 'Category Unavailable';}else{echo $row['category'];} ?></a>
                                </div>
                                <div class="media media-card user-media align-items-center px-0 border-bottom-0 pb-0">
                                    <a href="#" class="media-img d-block">
                                        <img src="<?=base_url()?>assets/useruploads/<?=$row['pic_file'];?>" alt="avatar">
                                    </a>
                                    <div class="media-body d-flex flex-wrap align-items-center justify-content-between">
                                        <div>
                                            <h5 class="pb-1"><a href="#"><?php if(empty($row['category'])){echo 'User Name';}else{echo $row['username'];} ?></a></h5>
                                            <div class="divider"><span></span></div>
                                        </div>
                                        <small class="meta d-block text-right">
                                            <span class="text-black d-block lh-18">asked</span>
                                            <span class="d-block lh-18 fs-12">
                                            <?php 
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
                                        </small>
                                    </div>
                                </div>
                            </div>
                        </div><!-- end media -->
                        <?php }endif?>
                        <?php if(empty($forum)) { ?>
                            <div class="card-footer text-center">
                            <h4>No Questions Found</h4>
                            </div>
                        <?php } ?>
                    </div><!-- end questions-snippet -->
                    <div class="pager pt-30px px-3">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination generic-pagination pr-1">
                                <?php if(!empty($links)){echo $links;}else{} ?>
                            </ul>
                        </nav>
                        
                    </div>
                </div><!-- end question-main-bar -->
            </div><!-- end col-lg-7 -->
            <div class="col-lg-3">
                <div class="sidebar pt-40px">
                <div class="card card-item">
                        <div class="card-body">
                            <h3 class="fs-17 pb-3">Discussion Stats</h3>
                            <div class="divider"><span></span></div>
                            <div class="row no-gutters text-center">
                                <div class="col-lg-6 responsive-column-half">
                                    <div class="icon-box pt-3">
                                        <span class="fs-20 fw-bold text-color"><?=$total?></span>
                                        <p class="fs-14">Questions</p>
                                    </div><!-- end icon-box -->
                                </div><!-- end col-lg-6 -->
                                <div class="col-lg-6 responsive-column-half">
                                    <div class="icon-box pt-3">
                                        <span class="fs-20 fw-bold text-color-2"><?=$ctotal?></span>
                                        <p class="fs-14">Answers</p>
                                    </div><!-- end icon-box -->
                                </div><!-- end col-lg-6 -->
                                <div class="col-lg-6 responsive-column-half">
                                    <div class="icon-box pt-3">
                                        <span class="fs-20 fw-bold text-color-3"><?=$ftotal?></span>
                                        <p class="fs-14">Forums</p>
                                    </div><!-- end icon-box -->
                                </div><!-- end col-lg-6 -->
                                <div class="col-lg-6 responsive-column-half">
                                    <div class="icon-box pt-3">
                                        <span class="fs-20 fw-bold text-color-4"><?=$utotal?></span>
                                        <p class="fs-14">Users</p>
                                    </div><!-- end icon-box -->
                                </div><!-- end col-lg-6 -->
                                <div class="col-lg-12 pt-3">
                                    <p class="fs-14">To get answer of question <a href="<?=base_url()?>Signup" class="text-color hover-underline">Join<i class="la la-arrow-right ml-1"></i></a></p>
                                </div>
                            </div><!-- end row -->
                        </div>
                    </div><!-- end card -->
                    <div class="card card-item">
                        <div class="card-body">
                            <h3 class="fs-17 pb-3">Latest Questions</h3>
                            <div class="divider"><span></span></div>
                            <div class="sidebar-questions pt-3">
                            <?php foreach($ltopics as $row){?>
                                <div class="media media-card media--card media--card-2">
                                    <div class="media-body">
                                        <h5><a href="<?=base_url()?>Question-Details/<?=$row['id'];?>"><?= $row['title'];?></a></h5>
                                        <small class="meta">
                                            <span class="pr-1"><?php 
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
                                            echo $years.' year/s  ago' ;
                                            }
                                            else if($months > 0)
                                            {
                                            echo $months.' month/s  ago' ;
                                            }
                                            else if($days > 0)
                                            {
                                            echo $days.' day/s  ago' ;
                                            }
                                            else if($hours > 0)
                                            {
                                            echo  $hours.' hour/s ago' ;
                                            }
                                            else
                                            {
                                            echo $minutes.' minute/s ago' ;
                                            }
                             ?>
                                            <span class="pr-1">. by</span>
                                            <a href="#" class="author"><?= $row['username'];?></a>
                                        </small>
                                    </div>
                                </div><!-- end media -->
                                <?php }?>
                            </div><!-- end sidebar-questions -->
                        </div>
                    </div><!-- end card -->
                    <!-- <div class="card card-item">
                        <div class="card-body">
                            <h3 class="fs-17 pb-3">Forums</h3>
                            <div class="divider"><span></span></div>
                            <div class="sidebar-questions pt-3">
                            <?php foreach($forumlist as $row){?>
                                <div class="media media-card media--card media--card media--card-2">
                                    <div class="media-body">
                                        <h6><a href="<?=base_url();?>Filter-Forum/<?=$row['id'];?>"><?= $row['title'];?></a></h6>
                                        
                                    </div>
                                </div>
                                <?php }?>
                            </div>
                        </div>
                    </div> -->
                    <div class="card card-item">
                        <div class="card-body">
                            <h3 class="fs-17 pb-3">Categories</h3>
                            <div class="divider"><span></span></div>
                            <div class="tags pt-4">
                                <?php foreach($categoriesall as $row){?>
                                <div class="tag-item">
                                    <a href="<?=base_url();?>Filter-Category/<?=$row['id'];?>" class="tag-link tag-link-md"><?=$row['category'];?></a>
                                    <span class="item-multiplier fs-13">
                                    <span>×</span>
                                    <span><?=$row['count'];?></span>
                                </span>
                                </div><!-- end tag-item -->
                                
                                <?php }?>
                                
                            </div><!-- end collapse -->
                            </div>
                        </div>
                    </div><!-- end card -->
                    <!-- ADS -->
                    <!-- <div class="ad-card">
                        <h4 class="text-gray text-uppercase fs-13 pb-3 text-center">Advertisements</h4>
                        <div class="ad-banner mb-4 mx-auto">
                            <span class="ad-text">290x500</span>
                        </div>
                    </div>end ad-card -->
                </div><!-- end sidebar -->
            </div><!-- end col-lg-3 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end question-area -->
<!-- ================================
         END QUESTION AREA
================================= -->
