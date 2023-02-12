
<!--======================================
        START HERO AREA
======================================-->
<section class="hero-area pattern-bg-2 bg-white shadow-sm overflow-hidden pt-50px pb-50px" style="background-image: url(<?=base_url()?>assets/adminuploads/aboutus.png);">
    <span class="stroke-shape stroke-shape-1"></span>
    <span class="stroke-shape stroke-shape-2"></span>
    <span class="stroke-shape stroke-shape-3"></span>
    <span class="stroke-shape stroke-shape-4"></span>
    <span class="stroke-shape stroke-shape-5"></span>
    <span class="stroke-shape stroke-shape-6"></span>
    <div class="container">
        <div class="hero-content text-center">
            
            <h2 class="section-title pb-3">Municipal Agriculture Office - Calendar</h2>
            <ul class="breadcrumb-list">
                <li><a href="<?=base_url()?>">Home</a><span><svg xmlns="http://www.w3.org/2000/svg" height="19px" viewBox="0 0 24 24" width="19px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6-6-6z"/></svg></span></li>
                <li>Calendar</li>
            </ul>
        </div><!-- end hero-content -->
    </div><!-- end container -->
</section><!-- end hero-area -->
<!--======================================
        END HERO AREA
======================================-->


<!-- <link href='<?=base_url()?>assets/calendar/main.css' rel='stylesheet' /> -->
<!-- <script src='<?=base_url()?>assets/calendar/main.js'></script> -->

<!-- <link rel="stylesheet" href="<?=base_url()?>assets/adminlte/dist/css/adminlte.min.css"> -->

<link rel="stylesheet" href="<?=base_url()?>assets/adminlte/plugins/fullcalendar/main.css">
<style>

#calendar-container {
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  
}
 /*
  the calendar will be butting up against the edges,
  but let's scoot in the header's buttons
  */
/* .fc-header-toolbar {
 
  padding-top: 1em;
  padding-left: 1em;
  padding-right: 1em;
} */
/* ----------------------------- */
/* body {
  margin: 40px 10px;
  padding: 0;
  font-family: Arial, Helvetica Neue, Helvetica, sans-serif;
  font-size: 14px;
} */

@media(max-width: 767px) {
  .fc-toolbar.fc-header-toolbar {
    display: flex;
    flex-direction: column;
  }
  .fc-toolbar.fc-header-toolbar .fc-left {
    order: 3;
  }
  .fc-toolbar.fc-header-toolbar .fc-center {
    order: 1;
  }
  .fc-toolbar.fc-header-toolbar .fc-right {
    order: 2;
  }
}
</style>
<section class="blog-area" style="background-color: hsl(120, 60%, 70%,0.3);">
    <div class="calendar-container">
        
            <div class="col-lg-12 responsive"><br>
                <div class="card card-item" style="opacity:0.9;">
                    <div id='calendar'></div>
                </div>
            </div>
        
    </div>
</section>

<script>
  var events = <?php echo json_encode($data) ?>;
    
   
  document.addEventListener('DOMContentLoaded', function() {
  var calendarEl = document.getElementById('calendar');

  var calendar = new FullCalendar.Calendar(calendarEl, {
    
      headerToolbar: {
        left  : 'prev,next today',
        center: 'title',
        right : 'dayGridMonth,timeGridWeek,timeGridDay'
      },
      initialView: 'dayGridMonth',
      navLinks: true, // can click day/week names to navigate views
      selectable: true,
      selectMirror: true,
      eventClick: function(info) {
        var eventObj = info.event;  
        var dateSettings = { "year": "numeric", "month": "2-digit", "day": "2-digit" };
        var timeSettings = { "hour": "2-digit", "minute": "2-digit", "hour12": true };

        var startdate = calendar.formatDate(info.event.start,  dateSettings);
        var starttime = calendar.formatDate(info.event.start,  timeSettings);
        var enddate = calendar.formatDate(info.event.end,  dateSettings);
        var endtime = calendar.formatDate(info.event.end,  timeSettings);
        
        $("#title").html(info.event.title);
        $("#description").html(eventObj.extendedProps.description);
        $("#startdate").html(startdate);
        $("#starttime").html(starttime);
        $("#enddate").html(enddate);
        $("#endtime").html(endtime);
        $("#exampleModal").modal("show");
        },
      // timeZone: 'local',
      editable: false,
      dayMaxEvents: true, // allow "more" link when too many events
      
      events: events
    });

    calendar.render();
  });
</script>
<style>
  div p {
    margin-left:  35px;
  }
  div h6{
    font-weight: bold;
  text-decoration: underline;
  }
</style>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Announcement Details</h5>
      </div>
      <div class="modal-body">
       <h6>WHAT :</h6>  <p id="title"></p>
       <h6>WHERE :</h6>  <p id="description"></p>
       <h6>START :</h6>
       <div class="row">
            <p id="startdate"></p>&emsp;  -<p id="starttime"></p>
       </div>
       <h6>END :</h6>
       <div class="row">
          <p id="enddate"></p>&emsp;  -<p id="endtime"></p>
       </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- fullCalendar 2.2.5 -->
<script src="<?=base_url()?>assets/adminlte/plugins/moment/moment.min.js"></script>
<script src="<?=base_url()?>assets/adminlte/plugins/fullcalendar/main.js"></script>
  <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script> -->
