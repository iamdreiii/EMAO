
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>View</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">View</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        
          
        <div class="col-md-12">
          <div class="card card-primary card-outline">
            <div class="card-header">
              <h3 class="card-title">Read Mail</h3>
             
              <div class="card-tools">
                <a href="#" class="btn btn-tool" title="Previous"><i class="fas fa-chevron-left"></i></a>
                <a href="#" class="btn btn-tool" title="Next"><i class="fas fa-chevron-right"></i></a>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
              <div class="mailbox-read-info">
                <h5><?=$subject?></h5>
                <h6>From: <?= $email?>
                <h6>Contact: <?= $contact?>
                  <span class="mailbox-read-time float-right"><?php echo date('d M Y h:ia ', strtotime($date_added)); ?></span></h6>
              </div>
              <!-- /.mailbox-read-info -->
              <div class="mailbox-controls with-border text-center">
                
                  <h4><i class="fas fa-envelope"></i> Message</h4>
              
              </div>
              <!-- /.mailbox-controls -->
              <div class="mailbox-read-message">
                <p><?=$message?></p>

              </div>
              <!-- /.mailbox-read-message -->
            </div>
            <!-- /.card-body -->
            
            <div class="card-footer">
              <div class="float-right">
                <button type="button" class="btn btn-default"><a href="<?=base_url();?>Reply/<?= $id?>"><i class="fas fa-reply"></i> Reply</a></button>
                <!-- <button type="button" class="btn btn-default"><i class="fas fa-share"></i> Forward</button> -->
              </div>
              <button type="button" class="btn btn-danger rounded" data-toggle="modal" data-target="#delete_modal">
                             Delete
                            </button>
              <!-- <button type="button" class="btn btn-default"><i class="fas fa-print"></i> Print</button> -->
            </div>
            <!-- /.card-footer -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  <!-- /.content-wrapper -->
