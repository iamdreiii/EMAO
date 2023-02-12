<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Municipal Agriculture Office</title>
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?=base_url();?>/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="<?=base_url();?>/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?=base_url();?>/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="<?=base_url();?>/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?=base_url();?>/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?=base_url();?>/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?=base_url();?>/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="<?=base_url();?>/plugins/summernote/summernote-bs4.min.css">
   
   <!-- DataTables -->
  <link rel="stylesheet" href="<?=base_url();?>/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?=base_url();?>/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="<?=base_url();?>/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?=base_url();?>/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
   <!-- SWAL X TOAST -->
    <!-- SweetAlert2 -->
  <link rel="stylesheet" href="<?=base_url();?>/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
  <!-- Toastr -->
  <link rel="stylesheet" href="<?=base_url();?>/plugins/toastr/toastr.min.css">

</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">



 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Post/Updates Information</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Updates</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
 <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md">
            <?= form_open('editpost/'.$id);?>
            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile form-group">
                
                <div class="form-group">
                <label for="title">Title </label>
                <input name="title" type="text" class="form-control" id="title" value="<?=$title?>">
                <?php echo form_error('title');?>
                </div>
                <div class="form-group">
                <label for="subtitle">SubTitle</label>
                <input name="subtitle" type="text" class="form-control" id="subtitle" value="<?=$subtitle?>" >
                <?php echo form_error('subtitle');?>
                </div>

                <div class="form-group">
                <label for="body">Body</label>
                <textarea name="body" type="text" class="form-control" id="summernote"><?=$body;?></textarea>
                <?php echo form_error('body');?>
                </div>
                <div>
                  <input type="hidden" name="id" value="<?= $id;?>">
                  <button type="submit" class="btn btn-primary">
                    Submit
                  </button>
                </div>

              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

  <?php $this->load->view('aht/script');?>