
<!--======================================
        START HERO AREA
======================================-->
<section class="hero-area bg-white shadow-sm pt-80px pb-80px">
    <span class="icon-shape icon-shape-1"></span>
    <span class="icon-shape icon-shape-2"></span>
    <span class="icon-shape icon-shape-3"></span>
    <span class="icon-shape icon-shape-4"></span>
    <span class="icon-shape icon-shape-5"></span>
    <span class="icon-shape icon-shape-6"></span>
    <span class="icon-shape icon-shape-7"></span>
    <div class="container">
        <div class="hero-content text-center">
            <h2 class="section-title pb-3">Dispersal Consultation</h2>
            <ul class="breadcrumb-list">
                <li><a href="<?=base_url()?>">Home</a><span><svg xmlns="http://www.w3.org/2000/svg" height="19px" viewBox="0 0 24 24" width="19px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"></path><path d="M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6-6-6z"></path></svg></span></li>
                <li>Consultation</li>
            </ul>
        </div><!-- end hero-content -->
    </div><!-- end container -->
</section>
<!--======================================
        END HERO AREA
======================================-->

<!--======================================
        START CHECKOUT AREA
======================================-->
<section class="checkout-area pt-80px pb-80px position-relative">
    <div class="container">
        <?=form_open('Dispersal-Consultation')?>
        <div class="checkout-form row">
            <div class="col-lg-12">
                <div class="card card-item">
                    <div class="card-body row">
                        <div class="form-group col-lg-12">
                            <h3 class="fs-22 pb-3 fw-bold">Please Enter Correct Information</h3>
                            <div class="divider"><span></span></div>
                        </div><!-- end form-group -->
                        <div class="form-group col-lg-6">
                            <label class="fs-14 text-black fw-medium lh-18">First Name</label>
                            <input type="text" name="firstname" class="form-control form--control fs-14" placeholder="e.g. Alex">
                            <?php echo form_error('firstname');?>
                        </div><!-- end form-group -->
                        <div class="form-group col-lg-6">
                            <label class="fs-14 text-black fw-medium lh-18">Last Name</label>
                            <input type="text" name="lastname" class="form-control form--control fs-14" placeholder="e.g. Smith">
                            <?php echo form_error('lastname');?>
                        </div><!-- end form-group -->
                        <div class="form-group col-lg-6">
                            <label class="fs-14 text-black fw-medium lh-18">Barangay</label>
                            <select class="select-container select--container" name="brgy" id="sel_cat">
                                <option selected value="">Select Barangay</option>
                                <?php foreach($barangay as $row){?>
                                <option value="<?=$row['subcategory'];?>"><?= $row['subcategory'];?></option>
                                    <?php }?>
                            </select>
                            <?php echo form_error('brgy');?>
                        </div><!-- end form-group -->
                        <div class="form-group col-lg-6">
                            <label class="fs-14 text-black fw-medium lh-18">Street address</label>
                            <input type="text" name="street" class="form-control form--control fs-14 mb-3" placeholder="House number and street name">
                            <?php echo form_error('street');?>
                        </div><!-- end form-group -->
                        <div class="form-group col-lg-6">
                            <label class="fs-14 text-black fw-medium lh-18">Animal Species</label>
                            <select class="select-container select--container" name="type">
                                <option selected value="">Select Scpecies</option>
                                <?php foreach($type as $row){?>
                                <option value="<?=$row['species']?>"><?=$row['species']?></option>
                                <?php }?>
                            </select>
                            <?php echo form_error('type');?>
                        </div><!-- end form-group -->
                        <div class="form-group col-lg-6">
                            <label class="fs-14 text-black fw-medium lh-18">Age of Animal</label>
                            <input type="text" name="age" class="form-control form--control fs-14" placeholder="e.g. 3">
                            <?php echo form_error('age');?>
                        </div><!-- end form-group -->
                        <div class="form-group col-lg-6">
                            <label class="fs-14 text-black fw-medium lh-18">Last Dispersal</label>
                            <input type="date" name="lastdispersal" class="form-control form--control fs-14" >
                        </div><!-- end form-group -->
                        <div class="form-group col-lg-6">
                            <label class="fs-14 text-black fw-medium lh-18">Phone Number</label>
                            <input type="tel" name="phone" class="form-control form--control fs-14" placeholder="Phone number">
                            <?php echo form_error('phone');?>
                        </div><!-- end form-group -->
                        <div class="form-group col-lg-12">
                            <label class="fs-14 text-black fw-medium lh-18">Email Address</label>
                            <input type="email" name="email" class="form-control form--control fs-14" value="<?=$this->session->email?>" readonly="readonly" placeholder="e.g. sample@gmail.com">
                            <?php echo form_error('email');?>
                        </div><!-- end form-group -->
                        <div class="form-group col-lg-12 mb-0">
                            <label class="fs-14 text-black fw-medium">Consultation Notes (optional)</label>
                            <textarea id="message" name="message" class="form-control form--control fs-14" rows="6" placeholder="Notes about your animal condition as of the moment"></textarea>
                            
                        </div><!-- end form-group -->
                        
                    </div><!-- end card-body -->
                    <div class="btn col-lg-2 " style="margin: auto;">
                            <input class="btn theme-btn w-100 fs-18 lh-40" type="submit" value="Schedule">
                    </div><!-- end proceed-to-checkout-wrap -->
                </div><!-- end card -->
                
            </div><!-- end col-lg-7 -->
            
        </div>
    </div><!-- end container -->
</section>
<!--======================================
        END CHECKOUT AREA
======================================-->
