<?php $this->load->view('Home/helper');?>
<!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
     M-A-O
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2021-2022 <a href="<?=base_url()?>">Municipal Agriculture Office</a>.</strong> All rights reserved.
  </footer>
</div>
<script src="<?=base_url()?>assets/adminlte/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- jQuery -->
<script src="<?=base_url()?>assets/adminlte/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?=base_url()?>assets/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?=base_url()?>assets/adminlte/dist/js/adminlte.min.js"></script>
<!-- SCRIPTS -->
<script src="<?=base_url();?>assets/adminlte/plugins/jquery-knob/jquery.knob.min.js"></script>
<script src="<?=base_url();?>assets/adminlte/dist/js/pages/dashboard2.js"></script>
<script src="<?=base_url();?>assets/adminlte/plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="<?=base_url();?>assets/adminlte/plugins/raphael/raphael.min.js"></script>
<script src="<?=base_url();?>assets/adminlte/plugins/jquery-ui/jquery-ui.min.js"></script>
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<script src="<?=base_url();?>assets/adminlte/plugins/chart.js/Chart.min.js"></script>
<script src="<?=base_url();?>assets/adminlte/plugins/sparklines/sparkline.js"></script>
<script src="<?=base_url();?>assets/adminlte/plugins/moment/moment.min.js"></script>
<script src="<?=base_url();?>assets/adminlte/plugins/daterangepicker/daterangepicker.js"></script>

<script src="<?=base_url();?>assets/adminlte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<script src="<?=base_url();?>assets/adminlte/plugins/summernote/summernote-bs4.min.js"></script>
<script src="<?=base_url();?>assets/adminlte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>

<script src="<?=base_url();?>assets/adminlte/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?=base_url();?>assets/adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?=base_url();?>assets/adminlte/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?=base_url();?>assets/adminlte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="<?=base_url();?>assets/adminlte/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?=base_url();?>assets/adminlte/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="<?=base_url();?>assets/adminlte/plugins/jszip/jszip.min.js"></script>
<script src="<?=base_url();?>assets/adminlte/plugins/pdfmake/pdfmake.min.js"></script>
<script src="<?=base_url();?>assets/adminlte/plugins/pdfmake/vfs_fonts.js"></script>
<script src="<?=base_url();?>assets/adminlte/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="<?=base_url();?>assets/adminlte/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="<?=base_url();?>assets/adminlte/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<script src="<?=base_url();?>assets/adminlte/plugins/sweetalert2/sweetalert2.min.js"></script>
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>
