
<!--======================================
        START RECOVERY AREA
======================================-->
<section class="recovery-area pt-200px pb-80px position-relative">
    <div class="container">
        <div action="#" class="card card-item login-form">
            <div class="card-body row p-0">
                <div class="col-lg-6">
                    <div class="form-content py-4 pr-60px pl-60px border-right border-right-gray h-100 d-flex align-items-center justify-content-center">
                        <img src="<?=base_url()?>assets/disilab/images/undraw-forgot-password.svg" alt="Image" class="img-fluid">
                    </div>
                </div><!-- end col-lg-6 -->
                <div class="col-lg-5 mx-auto">
                    <div class="form-action-wrapper py-5">
                        <div class="form-group">
                            <h3 class="fs-22 pb-3 fw-bold">Create Your New Password</h3>
                            <div class="divider"><span></span></div></div>
                        <?php if($this->session->tempdata('success',1)) : ?>
                            <?= '<p class="alert alert-success">'.$this->session->tempdata('success',1).'</p>'?>
                        <?php endif;?>
                        <?php if($this->session->tempdata('failed',1)) : ?>
                            <?= '<p class="alert alert-danger">'.$this->session->tempdata('failed',1).'</p>'?>
                        <?php endif;?>
                    
                        <?= validation_errors();?>
                        <!-- <?= form_open('Change-Password');?> -->
                        <form action="<?=base_url()?>Change-Password" method="POST">
                        <div class="form-group">
                            
                            <label class="fs-14 text-black fw-medium lh-18">New Password</label>
                            <div class="input-group mb-1">
                                <input class="form-control form--control password-field" type="password" name="password" placeholder="Enter New Password">
                                <div class="input-group-append">
                                    <button class="btn theme-btn-outline theme-btn-outline-gray toggle-password" type="button">
                                        <svg class="eye-on" xmlns="http://www.w3.org/2000/svg" height="22px" viewBox="0 0 24 24" width="22px" fill="#7f8897"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 6c3.79 0 7.17 2.13 8.82 5.5C19.17 14.87 15.79 17 12 17s-7.17-2.13-8.82-5.5C4.83 8.13 8.21 6 12 6m0-2C7 4 2.73 7.11 1 11.5 2.73 15.89 7 19 12 19s9.27-3.11 11-7.5C21.27 7.11 17 4 12 4zm0 5c1.38 0 2.5 1.12 2.5 2.5S13.38 14 12 14s-2.5-1.12-2.5-2.5S10.62 9 12 9m0-2c-2.48 0-4.5 2.02-4.5 4.5S9.52 16 12 16s4.5-2.02 4.5-4.5S14.48 7 12 7z"/></svg>
                                        <svg class="eye-off" xmlns="http://www.w3.org/2000/svg" height="22px" viewBox="0 0 24 24" width="22px" fill="#7f8897"><path d="M0 0h24v24H0V0zm0 0h24v24H0V0zm0 0h24v24H0V0zm0 0h24v24H0V0z" fill="none"/><path d="M12 6c3.79 0 7.17 2.13 8.82 5.5-.59 1.22-1.42 2.27-2.41 3.12l1.41 1.41c1.39-1.23 2.49-2.77 3.18-4.53C21.27 7.11 17 4 12 4c-1.27 0-2.49.2-3.64.57l1.65 1.65C10.66 6.09 11.32 6 12 6zm-1.07 1.14L13 9.21c.57.25 1.03.71 1.28 1.28l2.07 2.07c.08-.34.14-.7.14-1.07C16.5 9.01 14.48 7 12 7c-.37 0-.72.05-1.07.14zM2.01 3.87l2.68 2.68C3.06 7.83 1.77 9.53 1 11.5 2.73 15.89 7 19 12 19c1.52 0 2.98-.29 4.32-.82l3.42 3.42 1.41-1.41L3.42 2.45 2.01 3.87zm7.5 7.5l2.61 2.61c-.04.01-.08.02-.12.02-1.38 0-2.5-1.12-2.5-2.5 0-.05.01-.08.01-.13zm-3.4-3.4l1.75 1.75c-.23.55-.36 1.15-.36 1.78 0 2.48 2.02 4.5 4.5 4.5.63 0 1.23-.13 1.77-.36l.98.98c-.88.24-1.8.38-2.75.38-3.79 0-7.17-2.13-8.82-5.5.7-1.43 1.72-2.61 2.93-3.53z"/></svg>
                                    </button>
                                </div>
                            </div>
                            <p class="fs-13 lh-18">Passwords must contain at least eight characters, including at least 1 letter and 1 number.</p>
                        </div><!-- end form-group -->
                        <div class="form-group">
                        
                            <input type="hidden" name="email" id="" value="<?=$this->uri->segment(2);?>"/>
                            <button id="send-message-btn" class="btn theme-btn w-100" type="submit">Submit <i class="la la-arrow-right icon ml-1"></i></button>
                        </div><!-- end form-group -->
                        </form>
                    </div><!-- end form-action-wrapper -->
                </div><!-- end col-lg-5 -->
            </div><!-- end row -->
    </div>
        <p class="text-center"><a href="<?=base_url()?>Login" class="text-color hover-underline">Return to log in</a></p>
    </div><!-- end container -->
    <div class="position-absolute bottom-0 left-0 w-100 h-100 z-index-n1">
        <svg class="w-100 h-100" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path fill="#2d86eb" d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z" opacity=".07"></path>
            <path fill="#2d86eb" d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z" opacity=".06"></path>
            <path fill="#2d86eb" d="M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z" opacity=".04"></path>
        </svg>
    </div>
</section>
<!--======================================
        END RECOVERY AREA
======================================-->

<!-- template js files -->
<script src="<?=base_url()?>assets/disilab/js/jquery-3.4.1.min.js"></script>
<script src="<?=base_url()?>assets/disilab/js/bootstrap.bundle.min.js"></script>
<script src="<?=base_url()?>assets/disilab/js/main.js"></script>
</body>
</html>