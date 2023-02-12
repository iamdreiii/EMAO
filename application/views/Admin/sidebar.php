 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?=base_url();?>" class="brand-link">
      <img src="<?=base_url();?>assets/adminlte/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-bold text-sm">Municipal Agriculture Office</b></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
          <img src="<?=base_url()?>assets/adminuploads/<?=$this->session->pic_file?>" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?=$this->session->username;?></a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="sidebar mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <?php if($this->session->logged_in == true && $this->session->access == 'admin'){?>
          <li class="nav-item">
            <a href="<?=base_url();?>Admin" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-bars"></i>
              <p>
                Dispersal
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?=base_url();?>Dispersal-Monitoring" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Monitoring</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=base_url();?>Dispersal-Today" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Due Today</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=base_url();?>Dispersal-Due" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Due Records</p>
                </a>
              </li>
              
              <!-- <li class="nav-item">
                <a href="<?=base_url();?>dispersalmonitor" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Monitoring Model 2 </p>
                </a>
              </li> -->
              <li class="nav-item">
                <a href="<?=base_url();?>Dispersal-All" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All Records</p>
                </a>
              </li>
              
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon far fa-circle"></i>
                <p>
                  Consultation
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="<?=base_url();?>Pending-Consultation" class="nav-link">
                    <i class="far fa-dot-circle nav-icon"></i>
                    <p>Pending</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?=base_url();?>Ongoing-Consultation" class="nav-link">
                    <i class="far fa-dot-circle nav-icon"></i>
                    <p>OnGoing</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?=base_url();?>Accepted-Consultation" class="nav-link">
                    <i class="far fa-dot-circle nav-icon"></i>
                    <p>Accepted</p>
                  </a>
                </li>
              </ul>
            </li>
            </ul>
          </li>

              <li class="nav-item">
                <a href="<?=base_url();?>Announcement" class="nav-link">
                  <i class="nav-icon fas fa-file"></i>
                  <p>Activities Posts</p>
                </a>
              </li>
              <!-- ------------------ -->
              <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-envelope"></i>
              <p>
                Concerns Inbox
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?=base_url();?>Inbox" class="nav-link">
                  <i class="fa fa-inbox nav-icon"></i>
                  <p>Inbox</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=base_url();?>Compose" class="nav-link">
                  <i class="fa fa-plus-square nav-icon"></i>
                  <p>Compose</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=base_url();?>Chats" class="nav-link">
                  <i class="nav-icon fas fa-comment"></i>
                  <p>Support</p>
                </a>
              </li>
            </ul>
          </li>
          <!-- --------------------- -->
              <li class="nav-item">
                <a href="<?=base_url();?>CalendarAdmin" class="nav-link">
                  <i class="nav-icon fas fa-calendar"></i>
                  <p>Calendar Schedule</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=base_url();?>Farmer-Profiling" class="nav-link">
                  <i class="nav-icon fas fa-tree"></i>
                  <p>Farmer List</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=base_url();?>Pet-List" class="nav-link">
                  <i class="nav-icon fas fa-cat"></i>
                  <p>User Pet List</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=base_url();?>Animal-Tips-List" class="nav-link">
                  <i class="nav-icon fas fa-dog"></i>
                  <p> Animal Health Tips</p>
                </a>
              </li>
              <!-- Settings -->
              
              <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-gears"></i>
              <p>
                Settings
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                  <a href="<?=base_url();?>Setting" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                    <p>About Site</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?=base_url();?>Dispersal-Setting" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                    <p>Dispersal Setting</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?=base_url();?>FAQ-Dash" class="nav-link">
                    <i class="fa fa-question-circle nav-icon"></i>
                    <p>FAQ's</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-dog"></i>
                    <p>
                      Pet Setting
                      <i class="fas fa-angle-left right"></i>
                    </p>
                  </a>
                <ul class="nav nav-treeview">
                      <li class="nav-item">
                          <a href="<?=base_url();?>petcategory" class="nav-link">
                          <i class="far fa-dot-circle nav-icon"></i>
                            <p>Pet Category</p>
                          </a>
                      </li>

                      <li class="nav-item">
                          <a href="<?=base_url();?>petsubcategory" class="nav-link">
                          <i class="far fa-dot-circle nav-icon"></i>
                            <p>Pet Breeds</p>
                          </a>
                      </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="<?=base_url();?>signatory" class="nav-link">
                    <i class="fas fa-signature nav-icon"></i>
                      <p>Signatory</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?=base_url();?>Users" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                      <p>Users</p>
                    </a>
                </li>
                
            </ul>
          </li>
              <!-- FORUM -->
              <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-users"></i>
              <p>
                Forum
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?=base_url();?>Forum-Categories" class="nav-link">
                  <i class="fa fa-tag nav-icon"></i>
                  <p>Category/Tags</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=base_url();?>Forum-Forums" class="nav-link">
                  <i class="fa fa-tag nav-icon"></i>
                  <p>Forums</p>
                </a>
              </li>
              
            </ul>
          </li>
          
          <?php }?>
          
        </ul>
        <br>
        <br>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
  <script>
    $(function () {
    var url = window.location;
    // for single sidebar menu
    $('ul.nav-sidebar a').filter(function () {
        return this.href == url;
    }).addClass('active');

    // for sidebar menu and treeview
    $('ul.nav-treeview a').filter(function () {
        return this.href == url;
    }).parentsUntil(".nav-sidebar > .nav-treeview")
        .css({'display': 'block'})
        .addClass('menu-open').prev('a')
        .addClass('active');
  });
  </script>