
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="<?=base_url()?>dispersal_home" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="<?=base_url();?>Admin" class="nav-link">Home</a>
      </li>
     <li class="nav-item d-none d-sm-inline-block">
        <a href="<?=base_url();?>" class="nav-link">Landing Page</a>
      </li>
    </ul>
    <?php if($this->session->tempdata('success',2)) : ?>
                    <?= '<p class="text text-success">'.$this->session->tempdata('success',2).'</p>'?>
                <?php endif;?>
                <?php if($this->session->tempdata('failed',2)) : ?>
                    <?= '<p class="text text-danger">'.$this->session->tempdata('failed',2).'</p>'?>
                <?php endif;?>
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
    <?php if($this->session->logged_in == true && $this->session->access== 'admin'){?>
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-danger navbar-badge"><i id="notif"></i></span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <?php foreach (array_slice($allmessages, 0, 5) as $row): ?>
          
          <a href="<?=base_url();?>Read/<?=$row['id']?>" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                <i class="fas fa-envelope mr-2"></i> <?= $row['name'];?>
                  <span class="float-right text-sm text-danger"></span>
                </h3>
                <p class="text-sm">&emsp;&emsp;<?= $row['subject'];?></p>
                <p class="text-sm text-muted">&emsp;<i class="far fa-clock mr-1"></i><?php echo date('M, d Y', strtotime($row['date_added'])) ?> at <?php echo date('h:i A', strtotime($row['date_added'])) ?></p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <?php endforeach; ?>
          <a href="<?=base_url();?>Inbox" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <?php };?>
      <?php if ($this->session->access == 'admin') {?>
      <li class="nav-item dropdown user-menu">
        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
          <?=$this->session->access;?>
         </span>
        </a>
        <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <!-- User image -->
          <li class="user-header" style="background-color: rgb(2,75,48); color:white;">
            <img src="<?=base_url();?>assets/adminuploads/1.png" class="img-circle" alt="User Image">
            <p>
              <?=$this->session->fullname;?>
              <small>since <?=$this->session->date_registered;?></small>
            </p>
          </li>
          <li class="user-footer">
          <button type="button" class="btn btn-default" data-toggle="modal" data-target="#admin-pass">
                  Change Password
                </button>
            <!-- <a href="<?=base_url();?>adminprofile" class="btn btn-default btn-flat">Profile</a> -->
            <a href="<?=base_url();?>Logout" class="btn btn-default btn-flat float-right">Sign out</a>
          </li>
        </ul>
      </li>
     <?php }elseif ($this->session->access == 'user') {?>
      <li class="nav-item dropdown user-menu">
        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"><?=$this->session->access;?>
         </span>
        </a>
        <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <!-- User image -->
          <?php foreach($user as $row) {?>
          <li class="user-header" style="background-color: rgb(2,75,48); color: white;">
            <img src="<?=base_url();?>dist/img/<?=$row['pic_file'];?>" class="img-circle" alt="User Image">
            <p>
              <?=$this->session->fullname;?>
              <small>Member since <?php $date = $this->session->date_registered; echo date('M d, Y', strtotime($date)); ?></small>
            </p>
          </li><?php }?>
          <!-- Menu Footer-->
          <li class="user-footer">
            <a href="<?=base_url();?>adminprofile" class="btn btn-default btn-flat">Profile</a>
            <a href="<?=base_url();?>logout" class="btn btn-default btn-flat float-right">Sign out</a>
          </li>
        </ul>
      </li>
     <?php }elseif ($this->session->access == 'ca') {?>
      <li class="nav-item dropdown user-menu">
        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"><?=$this->session->access;?>
         </span>
        </a>
        <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <!-- User image -->
          <?php foreach($user as $row) {?>
          <li class="user-header" style="background-color: rgb(2,75,48); color:white;">
            <img src="<?=base_url();?>dist/img/<?=$row['pic_file'];?>" class="img-circle" alt="User Image">
            <p>
              <?=$this->session->fullname;?>
              <small>Member since <?php $date = $this->session->date_registered; echo date('M d, Y', strtotime($date)); ?></small>
            </p>
          </li><?php }?>
          <!-- Menu Footer-->
          <li class="user-footer">
            <a href="<?=base_url();?>adminprofile" class="btn btn-default btn-flat">Profile</a>
            <a href="<?=base_url();?>logout" class="btn btn-default btn-flat float-right">Sign out</a>
          </li>
        </ul>
      </li>
       <?php };?>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
        </ul>
  </nav>
  <?php $this->load->view('Admin/changepassmodal')?>
  <script>
   function notif() {
       $.ajax({
           type: "GET",
           url: "<?=base_url();?>Admin_controller/notif",
           async: true,
           cache: false,
           timeout: 50000,
           success: function (data) {
				   $('#notif').html(data);
               setTimeout(
                       notif,
                       2000
                       );
},
           error: function (XMLHttpRequest, textStatus, errorThrown) {
               addmsg("error", textStatus + " (" + errorThrown + ")");
               setTimeout(
                       notif,
                       15000);
           }
       });
   };
   $(document).ready(function () {
	   notif();
   });
</script>
