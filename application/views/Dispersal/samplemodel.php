<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.0/css/jquery.dataTables.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/datetime/1.1.2/css/dataTables.dateTime.min.css">
</head>
<body>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>List of Dispersal</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dispersal</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <section class="content">
        <div class="container-fluid">
        <div class="row">
          <div class="col-12">
          <div class="card">
              
              <!-- /.card-header -->
              <div class="card-body table-responsive">
                <div class="row">
                    <div class="col">
                    Mindate: <input type="text" id="min" name="min">&emsp;
             
                    Maxdate: <input type="text" id="max" name="max">
                    </div>
              
              </div><br>
                <table id="example" class="table table-bordered display nowrap" cellspacing="0"
  width="100%">
        <thead style="background-color: rgb(204,204,0);">
            <tr>
                        <th style="width: 1px">#</th>
                      <th>Owner</th>
                       <th>Species</th>
                      <th>Date Exposed</th>
                      <th>Dispersal Due</th> 
                       <th>Progress</th> 
                      <th style="width: 40px">Label</th>
                    </tr>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; foreach($alldispersal1 as $row) {?>
                    <tr>
                      <td><?php echo $i;
                    $i++;?></td>
                      <td><?=$row['owner']?></td>
                      <td><?=$row['type']?></td>
                      <td><?=$row['exposed']?></td>
                      <td><?=$row['calvingstart']?></td>
                      <td><?php $end =  strtotime($row['calvingstart']);
                                         $start = strtotime($row['exposed']);
                                         $today = strtotime(date('y-m-d'));
                                         $total = $end - $start;
                                         $part = $today - $start;
                                         $percent = $part / $total * 100;
                                         $var = (int)$percent;
                                         if ($var <= 25) {
                                          echo '<div class="progress progress-xs progress-striped active">
                                                                                       <div class="progress-bar bg-danger" style="width: '.$var.'%"></div>
                                                                                     </div>';
                                         }elseif($var >= 26 && $var <=50) {
                                          echo '<div class="progress progress-xs progress-striped active">
                                                                                       <div class="progress-bar bg-warning" style="width: '.$var.'%"></div>
                                                                                     </div>';
                                         }elseif($var >= 51 && $var <=75) {
                                          echo '<div class="progress progress-xs progress-striped active">
                                                                                       <div class="progress-bar bg-primary" style="width: '.$var.'%"></div>
                                                                                     </div>';
                                         }elseif($var >= 76 && $var <=100) {
                                          echo '<div class="progress progress-xs progress-striped active">
                                                                                       <div class="progress-bar bg-success" style="width: '.$var.'%"></div>
                                                                                     </div>';
                                         }else{
                                          echo '<div class="progress progress-xs progress-striped active">
                                                                                       <div class="progress-bar bg-success" style="width: '.$var.'%"></div>
                                                                                     </div>';
                                         }
                                      ?>
                      </td>
                      <td><?php $end =  strtotime($row['calvingstart']);
                                         $start = strtotime($row['exposed']);
                                         $today = strtotime(date('y-m-d'));
                                         $total = $end - $start;
                                         $part = $today - $start;
                                         $percent = $part / $total * 100;
                                         $var = (int)$percent;
                                         if ($var <= 25) {
                                          echo '<span class="badge bg-danger">'.$var.'%</span>';
                                         }elseif($var >= 26 && $var <=50) {
                                            echo '<span class="badge bg-warning">'.$var.'%</span>';
                                         }elseif($var >= 51 && $var <=75) {
                                            echo '<span class="badge bg-primary">'.$var.'%</span>';
                                         }elseif($var >= 76 && $var <=99) {
                                            echo '<span class="badge bg-success">'.$var.'%</span>';
                                         }elseif($var >= 100) {
                                            echo '<span class="badge bg-success">Completed</span>';
                                         }

                                          ?>
                                        </td>
                    </tr>
                    <?php }?>
        </tbody>
    </table>

              </div>
            </div>
            </div>
            </div>
            </div>
    </section>
</div>
</body>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.12.0/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.2/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/datetime/1.1.2/js/dataTables.dateTime.min.js"></script>
<script type="text/javascript">
    var minDate, maxDate;
 
// Custom filtering function which will search data in column four between two values
$.fn.dataTable.ext.search.push(
    function( settings, data, dataIndex ) {
        var min = minDate.val();
        var max = maxDate.val();
        var date = new Date( data[4] );
 
        if (
            ( min === null && max === null ) ||
            ( min === null && date <= max ) ||
            ( min <= date   && max === null ) ||
            ( min <= date   && date <= max )
        ) {
            return true;
        }
        return false;
    }
);
 
$(document).ready(function() {
    // Create date inputs
    minDate = new DateTime($('#min'), {
        format: 'MMMM Do YYYY'
    });
    maxDate = new DateTime($('#max'), {
        format: 'MMMM Do YYYY'
    });
 
    // DataTables initialisation
    var table = $('#example').DataTable();
 
    // Refilter the table
    $('#min, #max').on('change', function () {
        table.draw();
    });
});
</script>

</html>
<br>
<br>
