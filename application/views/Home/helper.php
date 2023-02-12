<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<?php if($this->session->tempdata('user_failed',1)) : ?>
<script>
      Swal.fire({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        icon: 'error',
        title: '<?=$this->session->tempdata('user_failed',1)?>',
        timer: 1500
      })
</script>
<?php endif;?>
<?php if($this->session->tempdata('user_success',1)) : ?>
<script>
      Swal.fire({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        icon: 'success',
        title: '<?=$this->session->tempdata('user_success',1)?>',
        timer: 1500
      })
</script>
<?php endif;?>
<?php if($this->session->tempdata('user_info',1)) : ?>
<script>
      Swal.fire({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        icon: 'info',
        title: '<?=$this->session->tempdata('user_info',1)?>',
        timer: 1500
      })
</script>
<?php endif;?>
