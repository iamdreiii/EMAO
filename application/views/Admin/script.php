<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<link href="<?=base_url();?>dist/css/summernote.css" rel="stylesheet">
<script src="<?=base_url();?>dist/js/summernote.min.js"></script>

<!-- include summernote-ko-KR -->
<script src="<?=base_url();?>dist/lang/summernote-ko-KR.js"></script>
<script>$(document).ready(function() {
  $('#summernote').summernote({
    height: 160,   //set editable area's height
    lang: 'ko-KR' // default: 'en-US'
  });
});


</script>