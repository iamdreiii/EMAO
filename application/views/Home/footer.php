
<!-- ================================
         END FOOTER AREA
================================= -->
<section class="footer-area pt-80px bg-dark position-relative">
    <span class="vertical-bar-shape vertical-bar-shape-1"></span>
    <span class="vertical-bar-shape vertical-bar-shape-2"></span>
    <span class="vertical-bar-shape vertical-bar-shape-3"></span>
    <span class="vertical-bar-shape vertical-bar-shape-4"></span>
    <div class="container">
        <div class="row">
            <div class="col-lg-3 responsive-column-half">
                <div class="footer-item">
                    <h3 class="fs-18 fw-bold pb-2 text-white">Office</h3>
                    <ul class="generic-list-item generic-list-item-hover-underline pt-3 generic-list-item-white">
                        <li><a href="<?=base_url()?>About">About</a></li>
                        <li><a href="<?=base_url()?>Contact-us">Contact</a></li>
                    </ul>
                </div><!-- end footer-item -->
            </div><!-- end col-lg-3 -->
            <div class="col-lg-3 responsive-column-half">
                <div class="footer-item">
                    <h3 class="fs-18 fw-bold pb-2 text-white">Legals</h3>
                    <ul class="generic-list-item generic-list-item-hover-underline pt-3 generic-list-item-white">
                        <li><a href="<?=base_url()?>Privacy-Policy">Privacy Policy</a></li>
                        <li><a href="<?=base_url()?>Privacy-Policy">Terms of Service</a></li>
                        <li><a href="<?=base_url()?>Privacy-Policy">Cookie Policy</a></li>
                    </ul>
                </div><!-- end footer-item -->
            </div><!-- end col-lg-3 -->
           
            <div class="col-lg-3 responsive-column-half">
                <div class="footer-item">
                    <h3 class="fs-18 fw-bold pb-2 text-white">Connect with us</h3>
                    <ul class="generic-list-item generic-list-item-hover-underline pt-3 generic-list-item-white">
                        <li><a href="#"><i class="la la-facebook mr-1"></i> Facebook</a></li>
                        <li><a href="#"><i class="la la-twitter mr-1"></i> Twitter</a></li>
                        <li><a href="#"><i class="la la-linkedin mr-1"></i> LinkedIn</a></li>
                        <li><a href="#"><i class="la la-instagram mr-1"></i> Instagram</a></li>
                    </ul>
                </div><!-- end footer-item -->
            </div><!-- end col-lg-3 -->
        </div><!-- end row -->
    </div><!-- end container -->
    <hr class="border-top-gray my-5">
    <div class="container">
        <div class="row align-items-center pb-4 copyright-wrap">
            <div class="col-lg-6">
                <a href="index.html" class="d-inline-block">
                    <img src="<?=base_url()?>assets/adminuploads/MAO-light.png" height="75px" width="150px" alt="footer logo" class="footer-logo">
                    <!-- <h4 style="color: white;">Municipal Agriculture Office</h4> -->
                </a>
            </div><!-- end col-lg-6 -->
            <div class="col-lg-6">
                <p class="copyright-desc text-right fs-14">Copyright &copy; 2021 <a href="<?=base_url()?>">Municipal Agriculture Office</a></p>
            </div><!-- end col-lg-6 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end footer-area -->
<!-- ================================
          END FOOTER AREA
================================= -->
<?php if($this->uri->segment(1) == 'User-Profile'){
    $this->load->view('Rtc/chatwid');
}
    ?>
<!-- start back to top -->
<div id="back-to-top" data-toggle="tooltip" data-placement="top" title="Return to top">
    <i class="la la-arrow-up"></i>
</div>
<!-- end back to top -->
<?php $this->load->view('Home/helper');?>

<!-- template js files -->
<script src="<?=base_url()?>assets/disilab/js/jquery-3.4.1.min.js"></script>
<script src="<?=base_url()?>assets/disilab/js/bootstrap.bundle.min.js"></script>
<script src="<?=base_url()?>assets/disilab/js/owl.carousel.min.js"></script>
<script src="<?=base_url()?>assets/disilab/js/jquery.fancybox.min.js"></script>
<script src="<?=base_url()?>assets/disilab/js/jquery.lazy.min.js"></script>
<script src="<?=base_url()?>assets/disilab/js/main.js"></script>
<!-- Contact_us InCase -->
<!-- <script src="<?=base_url()?>assets/disilab/js/leaflet.js"></script>
<script src="<?=base_url()?>assets/disilab/js/map.js"></script> -->
<!-- Discussion -->
<script src="<?=base_url()?>assets/disilab/js/selectize.min.js"></script>
<!-- FAQ -->
<script src="<?=base_url()?>assets/disilab/js/jquery-te-1.4.0.min.js"></script>
<script src="<?=base_url()?>assets/disilab/js/jquery.multi-file.min.js"></script>
<!-- About -->
<script src="<?=base_url()?>assets/disilab/js/tilt.jquery.min.js"></script>
<!-- Question Details -->
<script src="<?=base_url()?>assets/disilab/js/upvote.vanilla.js"></script>
<script src="<?=base_url()?>assets/disilab/js/upvote-script.js"></script>

</body>
</html>
