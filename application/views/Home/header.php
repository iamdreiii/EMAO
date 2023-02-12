<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="author" content="Municipal Agriculture Office - Pola">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>M-A-O</title>
    <meta charset="utf-8">
    
    <link rel="manifest" href="manifest.json">
    <!-- (C) SERVICE WORKER -->
    <!-- // <script>
    // if("serviceWorker" in navigator){
    // navigator.serviceWorker.register("<?=base_url()?>assets/pwa/serviceworker.js").then(registration=>{
    //   console.log("SW Registered!");
    // }).catch(error=>{
    //   console.log("SW Registration Failed");
    // });
    // }else{
    //   console.log("Not supported");
    // }
    // </script> -->
    <!-- <script>
    if ("serviceWorker" in navigator) { navigator.serviceWorker.register("<?=base_url();?>assets/pwa/serviceworker.js"); }
    </script> -->
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

    <!-- FONTAWESOME ICON -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&display=swap" rel="stylesheet">

    <!-- Favicon -->
    <!-- <link rel="icon" sizes="16x16" href="<?=base_url()?>assets/disilab/images/favicon.png"> -->

    <!-- inject:css -->
    <link rel="stylesheet" href="<?=base_url()?>assets/disilab/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/disilab/css/line-awesome.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/disilab/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/disilab/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/disilab/css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/disilab/css/style.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/disilab/css/leaflet.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/disilab/css/jquery-te-1.4.0.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/disilab/css/selectize.css">
    <!-- end inject -->
    <!-- Question Details -->
    <link rel="stylesheet" href="<?=base_url()?>assets/disilab/css/upvotejs.min.css">
    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="<?=base_url()?>assets/custom/css/sweetalert.min.css">
    <!-- Toastr -->
    <link rel="stylesheet" href="<?=base_url()?>assets/custom/css/toastr.min.css">
    <!-- COmments -->
    
</head>
<body>
<script>
    if ("serviceWorker" in navigator) { navigator.serviceWorker.register("sw.js"); }
</script>
<!-- start cssload-loader -->
<div id="preloader">
    <div class="loader">
        <svg class="spinner" viewBox="0 0 50 50">
            <circle class="path" cx="25" cy="25" r="20" fill="none" stroke-width="2"></circle>
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
                <a href="<?=base_url()?>Home" class="logo" style="display:flex;justify-content:left;align-items:center;">
                     <img src="<?=base_url()?>assets/adminuploads/MAO-dark.png" class="d-inline-block align-top" height="75px" width="150px"  alt="Logo">&nbsp;
                    <!--<span style="color:black; font-size:30px;">M-A-O</span>--></a>
                    <div class="user-action">
                        <div class="search-menu-toggle icon-element icon-element-xs shadow-sm mr-1" data-toggle="tooltip" data-placement="top" title="Search">
                            <i class="la la-search"></i>
                        </div>
                        <div class="off-canvas-menu-toggle icon-element icon-element-xs shadow-sm" data-toggle="tooltip" data-placement="top" title="Main menu">
                            <i class="la la-bars"></i>
                        </div>
                        <?php if($this->session->logged_in == true){?>
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
                                    <?php if($this->session->access == 'ca'){?>
                                    <li><a href="<?=base_url()?>Dispersal-Consultation">Dispersal Consultation</a></li>
                                    <?php }?>
                                    <li><a href="<?=base_url()?>Contact-us">Contact Us</a></li>
                                    <li><a href="<?=base_url()?>Discussion">Discussion</a></li>
                                    <li><a href="<?=base_url()?>FAQ">FAQ's</a></li>
                                    <li><a href="<?=base_url()?>About">About</a></li>
                                </ul>
                            </li>
                        </ul><!-- end ul -->
                    </nav><!-- end main-menu -->
                    <?php if($this->uri->segment(1) == 'Animal-Health-Tips' || $this->uri->segment(1) =='AnimalHealthTip-Search' || $this->uri->segment(1) == 'AnimalHealthTip-Single'){}else{?>
                    <form method="POST" action="<?=base_url()?>Home-Search" class="mr-4">
                        <div class="form-group mb-0">
                            <input class="form-control form--control form--control-bg-gray" type="text" id="search" name="search" placeholder="Type your search words...">
                            <button class="form-btn" type="submit"><i class="la la-search"></i></button>
                        </div>
                    </form>
                    <?php }?>
                    <?php if($this->session->logged_in == false){?>
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
                                        <?php if($this->session->logged_in == TRUE && $this->session->access == 'user' || $this->session->access == 'ca'){?>
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
                                    <?php if($this->session->access == 'ca'){?>
                                    <li><a href="<?=base_url()?>Dispersal-Consultation">Dispersal Consultation</a></li>
                                    <?php }?>
                                    <li><a href="<?=base_url()?>Contact-us">Contact Us</a></li>
                                    <li><a href="<?=base_url()?>Discussion">Discussion</a></li>
                                    <li><a href="<?=base_url()?>FAQ">FAQ's</a></li>
                                    <li><a href="<?=base_url()?>About">About</a></li>
                </ul>
            </li>
        </ul>
        <?php if($this->session->logged_in == false){?>
        <div class="off-canvas-btn-box px-4 pt-5 text-center">
            <a href="<?=base_url()?>Login" class="btn theme-btn theme-btn-sm theme-btn-outline" ><i class="la la-sign-in mr-1"></i> Login</a>
            <span class="fs-15 fw-medium d-inline-block mx-2">Or</span>
            <a href="<?=base_url()?>Signup" class="btn theme-btn theme-btn-sm" ><i class="la la-plus mr-1"></i> Sign up</a>
        </div>
        <?php }?>
    </div><!-- end off-canvas-menu -->
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
            <div class="tab-pane active" id="user-profile-menu" role="tabpanel" aria-labelledby="user-profile-menu-tab">
                <div class="dropdown--menu shadow-none w-auto rounded-0">
                    <div class="dropdown-item-list">
                        <?php if($this->session->logged_in == TRUE && $this->session->access == 'user' || $this->session->access == 'ca'){?>
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
    <div class="mobile-search-form">
        <div class="d-flex align-items-center">
            <form method="POST" action="<?=base_url()?>Home-Search" class="flex-grow-1 mr-3">
                <div class="form-group mb-0">
                    <input class="form-control form--control pl-40px" type="text" id="search" name="search" placeholder="Type your search words...">
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
