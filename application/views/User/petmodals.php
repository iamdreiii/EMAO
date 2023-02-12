
 <!-- ///////////////////////////////////////////////EDIT PET///////////////////////////////////////////////////// -->
<?php foreach($allpet as $row){ ?>
<!-- Modal -->
<div class="modal fade modal-container login-form" id="editmodal<?=$row['id']?>" tabindex="-1" role="dialog" aria-labelledby="loginModalTitle<?=$row['id']?>" aria-hidden="true">
<!-- <?=form_open(base_url().'Pet_controller/updatemypet')?> -->
<form action="<?=base_url()?>Pet_controller/updatemypet" method="POST" enctype="multipart/form-data" novalidate>
<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-md" >
        <div class="modal-content">
            <div class="modal-header align-items-center">
                <h5 class="modal-title" id="loginModalTitle">Edit Record Form</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="la la-times"></span>
                </button>
            </div>
           
            <div class="modal-body">
                <div class="form-group">
                    <label class="fs-14 text-black fw-medium lh-18">Pet Profile</label><br>
                    <input class="file-upload-input" name="petimage" type="file" />
                </div><!-- end form-group -->
                <div class="form-group">
                    <label class="fs-14 text-black fw-medium lh-18">Pet Name</label>
                    <input type="text" name="name" id="name" class="form-control form--control" placeholder="Pet Name" value="<?=ucfirst($row['name']);?>" required="name" >
                </div><!-- end form-group -->
                <div class="form-group">
                    <label class="fs-14 text-black fw-medium lh-18">Birthdate</label>
                    <input type="date" name="birthdate" id="birthdate" class="form-control form--control" value="<?=$row['birthdate'];?>" >
                </div><!-- end form-group -->
                <div class="input-box">
                    <label for="sel_cat" class="fs-14 text-black fw-medium mb-0">Pet Species</label>
                    <div class="form-group">
                        <select id="sel_cat<?=$row['id'];?>" class="form-control form--control" name="type" required="type">
                            <option selected="vaccination" value="<?=$row['type'];?>"><?=$row['category'];?></option>
                            <?php foreach($category as $cat){
                            echo "<option value='".$cat['cat_id']."'>".$cat['category']."</option>";
                            }
                            ?>
                        </select>
                    </div>
                </div><!-- end input-box -->
                <div class="input-box">
                    <label for="sel_subcat" class="fs-14 text-black fw-medium mb-0">Breed</label>
                    <div class="form-group">
                        <select id="sel_subcat<?=$row['id'];?>" class="form-control form--control" name="breed"  required="breed">
                            <option selected="vaccination" value="<?=ucfirst($row['breed']);?>"><?=$row['breed']?></option>
                        </select>
                    </div>
                </div><!-- end input-box -->
                <div class="input-box">
                    <label for="sex" class="fs-14 text-black fw-medium mb-0">Gender</label>
                    <div class="form-group">
                        <select id="sex" class="form-control form--control" name="sex" value="<?=$row['sex'];?>" required="sex">
                            <option selected="vaccination" value="<?=ucfirst($row['sex']);?>"><?=$row['sex']?></option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </div>
                </div><!-- end input-box -->
                <div class="input-box">
                    <label for="sterilization" class="fs-14 text-black fw-medium mb-0">Sterilization</label>
                    <div class="form-group">
                        <select id="sterilization" class="form-control form--control" name="sterilization" value="<?=$row['sterilization'];?>" required="sterilization">
                            <option selected="vaccination" value="<?=ucfirst($row['sterilization']);?>"><?=$row['sterilization']?></option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                        </select>
                    </div>
                </div><!-- end input-box -->
                <div class="input-box">
                    <label for="vaccination" class="fs-14 text-black fw-medium mb-0">Vaccination</label>
                    <div class="form-group">
                        <select id="vaccination" class="form-control form--control" name="vaccination" required="vaccination">
                            <option selected="vaccination" value="<?=ucfirst($row['vaccination']);?>"><?=$row['vaccination']?></option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                        </select>
                    </div>
                </div><!-- end input-box -->
                <div class="form-group">
                    <label class="fs-14 text-black fw-medium lh-18">Color</label>
                    <input type="text" name="color" id="color" class="form-control form--control" placeholder="Color" value="<?=ucfirst($row['color']);?>" required="color">
                </div><!-- end form-group -->
                <div class="input-box">
                    <label for="sel_subcat" class="fs-14 text-black fw-medium mb-0">Size</label>
                    <div class="form-group">
                        <select id="size" class="form-control form--control" name="size" value="<?=ucfirst($row['size']);?>" required="size">
                            <option selected="true" value="<?=$row['size'];?>"><?=ucfirst($row['size'])?></option>
                            <option value="small">Small under 20 lb</option>
                            <option value="medium" type>Medium 20-40lb</option>
                            <option value="large" type>Large 41-80lb</option>
                        </select>
                    </div>
                </div><!-- end input-box -->
                <div class="form-group">
                    <label class="fs-14 text-black fw-medium lh-18">Description</label>
                            <textarea name="description" class="form-control form--control" id="description" cols="30" rows="3"  required="description"><?=ucfirst($row['description']);?></textarea>
                </div><!-- end form-group -->
                <div class="input-box">
                    <label for="sel_subcat" class="fs-14 text-black fw-medium mb-0">Deceased?</label>
                    <div class="form-group">
                        <select id="sel_subcat" class="form-control form--control" name="status"  required>
                        <option value="<?=$row['status'];?>" selected="selected"><?=ucfirst($row['status']);?></option>
                        <option value="yes">Yes</option>
                        <option value="no" type>No</option>
                        </select>
                    </div>
                </div><!-- end input-box -->
                <div class="form-group">
                        <label class="fs-14 text-black fw-medium lh-18">Owner Email</label>
                        <input type="text" class="form-control form--control" name="owner" id="owner" value="<?=$this->session->email?>" readonly>
                </div>
                <div class="modal-footer">
                    <input type="hidden" id="id" name="id" value="<?=$row['id'];?>" required>
                    <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-outline-primary">Update</button>
                </div>
            </div>
           
        </div>
    </div>
    </form>
</div>
<?php }?>