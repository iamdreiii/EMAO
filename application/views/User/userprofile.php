<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
$(document).ready(function(){
	$('a[data-toggle="tab"]').on('show.bs.tab', function(e) {
		localStorage.setItem('activeTab', $(e.target).attr('href'));
	});
	var activeTab = localStorage.getItem('activeTab');
	if(activeTab){
		$('#myTab a[href="' + activeTab + '"]').tab('show');
	}
});
</script>
<!--======================================
        START HERO AREA
======================================-->
<section class="hero-area bg-white shadow-sm overflow-hidden pt-60px">
    <span class="stroke-shape stroke-shape-1"></span>
    <span class="stroke-shape stroke-shape-2"></span>
    <span class="stroke-shape stroke-shape-3"></span>
    <span class="stroke-shape stroke-shape-4"></span>
    <span class="stroke-shape stroke-shape-5"></span>
    <span class="stroke-shape stroke-shape-6"></span>
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="hero-content">
                    <div class="media media-card align-items-center shadow-none p-0 mb-0 rounded-0 bg-transparent">
                        <div class="media-img media--img">
                            <?php foreach($user as $row){?>
                            <img src="<?=base_url()?>assets/useruploads/<?=$row['pic_file'];?>" onError="this.onerror=null;this.src='<?=base_url()?>assets/useruploads/no-image.png';">
                            <?php }?>
                        </div>
                        <div class="media-body">
                            <h5><?=$this->session->username?></h5>
                            <small class="meta d-block lh-20 pb-2">
                                <span>member since <?= date('Y-m-d', strtotime($this->session->date_registered))?></span>
                            </small>
                        </div>
                    </div><!-- end media -->
                </div><!-- end hero-content -->
            </div><!-- end col-lg-8 -->
            <div class="col-lg-4">
                <div class="hero-btn-box text-right py-3">
                    <a href="<?=base_url()?>User-Setting" class="btn theme-btn theme-btn-outline theme-btn-outline-gray"><i class="la la-gear mr-1"></i> Edit Profile</a>
                </div>
            </div><!-- end col-lg-4 -->
            <div class="col-lg-12">
                <ul class="nav nav-tabs generic-tabs generic--tabs generic--tabs-2 mt-4" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="user-profile-tab" data-toggle="tab" href="#user-profile" role="tab" aria-controls="user-profile" aria-selected="true">Profile</a>
                    </li>
                    <?php if($this->session->access === 'ca'){?>
                    <li class="nav-item">
                        <a class="nav-link" id="user-activity-tab" data-toggle="tab" href="#user-activity" role="tab" aria-controls="user-activity" aria-selected="false">Consultation Schedule</a>
                    </li>
                    <?php }elseif($this->session->access === 'user'){?>
                    <li class="nav-item">
                        <a class="nav-link" id="user-activity-tab" data-toggle="tab" href="#user-activity" role="tab" aria-controls="user-activity" aria-selected="false">My Pets</a>
                    </li>
                    <?php }?>
                </ul>
            </div><!-- end col-lg-4 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section>
<!--======================================
        END HERO AREA
======================================-->

<!-- ================================
         START USER DETAILS AREA
================================= -->
<section class="user-details-area pt-30px pb-60px">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <?php if($this->session->access === 'ca'){?>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="user-profile" role="tabpanel" aria-labelledby="user-profile-tab">
                        <div class="user-panel-main-bar">
                            <div class="user-panel mb-30px">
                            <?php foreach($user as $row){?>
                            <div class="user-panel mb-30px">
                                <p class="pb-2"><strong>User-ID :</strong> <?php if($this->session->unique_id){echo $this->session->unique_id;}else{echo 'Not Available';}?></p>
                                <p class="pb-2"><strong>Usertype :</strong> <?php if($this->session->access === 'ca'){echo 'Consultation Account';}elseif($this->session->access === 'user'){echo 'Pet Owner';}?> </p>
                                <p class="pb-2"><strong>Email :</strong> <?=$this->session->email?></p>
                                <p class="pb-2"><strong>Phone# :</strong> <?php if($row['contact']){echo $row['contact'];}else{echo 'Not Available';}?></p>
                            </div><!-- end user-panel -->
                            <div class="user-panel mb-30px pt-30px border-top border-top-gray">
                            <p class="pl-0"><strong>Address :</strong></p>
                                    <p class="pl-0"><strong>Municipality :</strong> <?php if($row['municipality'] == '1'){
                                            echo 'Baco';
                                            }elseif($row['municipality'] == '2'){
                                            echo 'Bansud';
                                            }elseif($row['municipality'] == '3'){
                                            echo 'Bongabong';
                                            }elseif($row['municipality'] == '4'){
                                            echo 'Bulalacao';
                                            }elseif($row['municipality'] == '5'){
                                            echo 'Calapan';
                                            }elseif($row['municipality'] == '6'){
                                            echo 'Gloria';
                                            }elseif($row['municipality'] == '7'){
                                            echo 'Mansalay';
                                            }elseif($row['municipality'] == '8'){
                                            echo 'Naujan';
                                            }elseif($row['municipality'] == '9'){
                                            echo 'Pinamalayan';
                                            }elseif($row['municipality'] == '10'){
                                            echo 'Pola';
                                            }elseif($row['municipality'] == '11'){
                                            echo 'Puerto Galera';
                                            }elseif($row['municipality'] == '12'){
                                            echo 'Roxas';
                                            }elseif($row['municipality'] == '13'){
                                            echo 'San Teodoro';
                                            }elseif($row['municipality'] == '14'){
                                            echo 'Socorro';
                                            }elseif($row['municipality'] == '15'){
                                            echo 'Victoria';
                                            }else{
                                                echo 'Not Available';
                                            }
                                            ;?></p>
                                    <p class="pl-0"><strong>Barangay :</strong> <?php if($row['barangay']){echo $row['barangay'];}else{echo 'Not Available';}?></p>
                                
                            </div><!-- end user-panel -->
                            <?php }?>
                                <div class="bg-gray p-3 rounded-rounded d-flex align-items-center justify-content-between">
                                    <h3 class="fs-17">My posts <span>(<?=$qcount?>)</span></h3>
                                </div>
                                
                                <div class="vertical-list">
                                <?php foreach($myquestions as $row){?>
                                    <div class="item p-0">
                                        <div class="media media-card media--card align-items-center shadow-none rounded-0 mb-0 bg-transparent">
                                            <div class="votes py-2 answered-accepted">
                                                <div class="vote-block d-flex align-items-center justify-content-between" title="Votes">
                                                    <span class="vote-counts"><?=$row['likes']?></span>
                                                    <span class="vote-icon"></span>
                                                </div>
                                                
                                                <div class="answer-block d-flex align-items-center justify-content-between" title="Answers">
                                                <?php $topicid = $row['id'];
                                                    $qr = $this->db->query("SELECT COUNT(*) as countc FROM forum_comments join forum_topics on forum_topics.id = forum_comments.topic_id where forum_topics.id = $topicid");
                                                    $query = $qr->result_array();
                                                    foreach($query as $cmrow){
                                                ?></span>
                                                <span class="vote-counts"><?php echo number_format($cmrow['countc']) ?></span>
                                                    <span class="answer-icon"></span>
                                                </div>
                                                <?php }?>
                                            </div>
                                            <div class="media-body">
                                                <h5><a href="<?=base_url()?>Question-Details/<?=$row['id'];?>"><?=$row['title'];?></a></h5>
                                                <small class="meta">
                                                    <span><?php 
                                            $this->load->helper('date');
                                            $date=$row['date_created'];
                                            $last = new DateTime($date);
                                            $now = new DateTime( date( 'Y-m-d h:i:s', time() )) ; 
                                            $interval = $last->diff($now);
                                            $years = (int)$interval->format('%Y');
                                            $months = (int)$interval->format('%m');
                                            $days = (int)$interval->format('%d');
                                            $hours = (int)$interval->format('%H');
                                            $minutes = (int)$interval->format('%i');
                                            if($years > 0)
                                            {
                                            echo $years.' Year/s  ago' ;
                                            }
                                            else if($months > 0)
                                            {
                                            echo $months.' Month/s  ago' ;
                                            }
                                            else if($days > 0)
                                            {
                                            echo $days.' Day/s ago' ;
                                            }
                                            else if($hours > 0)
                                            {
                                            echo  $hours.' Hour/s  ago' ;
                                            }
                                            else
                                            {
                                            echo $minutes.' minute/s ago' ;
                                            }
                                         ?></span>
                                                </small>
                                            </div>
                                            <?php if($row['user_id'] === $this->session->id){?>
                                                <div class="float-right" style="margin-right: 20px;">
                                                    <a class="text-dark " href="javascript:void(0)" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <span class="fas fa-ellipsis-v"></span>
                                                    </a>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <button data-toggle="modal" data-target="#qedit<?=$row['id'];?>" class="dropdown-item">Edit</button>
                                                    <button data-toggle="modal" data-target="#qdel<?=$row['id'];?>" class="dropdown-item">Delete</button>
                                                    </div>
                                                </div>
                                                <?php }?>
                                        </div><!-- end media -->
                                    </div><!-- end item -->
                                    <?php }?>
                                    <div class="view-more pt-3 px-3">
                                        <a href="<?=base_url()?>Discussion" class="btn-text fs-15">View all questions and answers in Forum<i class="la la-arrow-right icon ml-1"></i></a>
                                    </div>
                                </div><!-- end vertical-list -->
                            </div><!-- end user-panel -->
                            
                        </div><!-- end user-panel-main-bar -->
                    </div><!-- end tab-pane -->
                    <div class="tab-pane fade" id="user-activity" role="tabpanel" aria-labelledby="user-activity-tab">
                        <div class="user-panel-main-bar">
                            
                        <div class="card-body table-responsive user-panel mb-30px">
                        <table id="s" class="table  table-striped">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Address</th>
                            <th>Type</th>
                            <th>Status</th>
                            <th style="width:10%">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($userCstat as $row){ ?>
                            <tr>
                            <td><?= $row['id'];?></td>
                            <td><?= $row['lastname'];?>, <?= $row['firstname'];?></td>
                            <td><?= $row['location'];?></td>
                            <td><?= $row['type'];?></td>
                            <td><?php if($row['status'] == 1) { echo 'Pending';?>
                            <?php }elseif($row['status'] == 2){ echo 'OnGoing';?>
                            <?php }else{ echo 'Accepted'; }?></td>
                            <td><a href="#" class="btn theme-btn theme-btn-outline mr-2 " data-toggle="modal" data-target="#previewmodal<?=$row['id']?>">View</a></td>
                        </tr>
                        <?php }?>
                        <?php if(empty($userCstat)) { ?>
                            <tr class="text-center"><td colspan="8">Data not found</td></tr>
                        <?php } ?>
                        </tbody>
                        <tfoot>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Address</th>
                            <th>Type</th>
                            <th>Status</th>
                            <th style="width:10%">Action</th>
                        </tr>
                        </tfoot>
                        </table>
                        </div>
                            
                        </div><!-- end user-panel-main-bar -->
                    </div><!-- end tab-pane -->
                </div>
                <?php }elseif($this->session->access === 'user'){?>
                <!-- //////////////////////////////////////////////////PET OWNER//////////////////////////////////////////////////////////// -->
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="user-profile" role="tabpanel" aria-labelledby="user-profile-tab">
                        <div class="user-panel-main-bar">
                            <div class="user-panel mb-30px">
                            <?php foreach($user as $row){?>
                            <div class="user-panel mb-30px">
                            <p class="pb-2"><strong>User-ID :</strong> <?php if($this->session->unique_id){echo $this->session->unique_id;}else{echo 'Not Available';}?></p>
                                <p class="pb-2"><strong>Usertype :</strong> <?php if($this->session->access === 'ca'){echo 'Consultation Account';}elseif($this->session->access === 'user'){echo 'Pet Owner';}?> </p>
                                <p class="pb-2"><strong>Email :</strong> <?=$this->session->email?></p>
                                <p class="pb-2"><strong>Phone# :</strong> <?php if($row['contact']){echo $row['contact'];}else{echo 'Not Available';}?></p>
                            </div><!-- end user-panel -->
                            <div class="user-panel mb-30px pt-30px border-top border-top-gray">
                            <p class="pl-0"><strong>Address :</strong></p>
                                    <p class="pl-0"><strong>Municipality :</strong> <?php if($row['municipality'] == '1'){
                                            echo 'Baco';
                                            }elseif($row['municipality'] == '2'){
                                            echo 'Bansud';
                                            }elseif($row['municipality'] == '3'){
                                            echo 'Bongabong';
                                            }elseif($row['municipality'] == '4'){
                                            echo 'Bulalacao';
                                            }elseif($row['municipality'] == '5'){
                                            echo 'Calapan';
                                            }elseif($row['municipality'] == '6'){
                                            echo 'Gloria';
                                            }elseif($row['municipality'] == '7'){
                                            echo 'Mansalay';
                                            }elseif($row['municipality'] == '8'){
                                            echo 'Naujan';
                                            }elseif($row['municipality'] == '9'){
                                            echo 'Pinamalayan';
                                            }elseif($row['municipality'] == '10'){
                                            echo 'Pola';
                                            }elseif($row['municipality'] == '11'){
                                            echo 'Puerto Galera';
                                            }elseif($row['municipality'] == '12'){
                                            echo 'Roxas';
                                            }elseif($row['municipality'] == '13'){
                                            echo 'San Teodoro';
                                            }elseif($row['municipality'] == '14'){
                                            echo 'Socorro';
                                            }elseif($row['municipality'] == '15'){
                                            echo 'Victoria';
                                            }else{
                                                echo 'Not Available';
                                            }
                                            ;?></p>
                                    <p class="pl-0"><strong>Barangay :</strong> <?php if($row['barangay']){echo $row['barangay'];}else{echo 'Not Available';}?></p>
                                
                            </div><!-- end user-panel -->
                            <?php }?>
                                <div class="bg-gray p-3 rounded-rounded d-flex align-items-center justify-content-between">
                                    <h3 class="fs-17">My posts <span>(<?=$qcount?>)</span></h3>
                                </div>
                                <div class="vertical-list">
                                <?php foreach($myquestions as $row){?>
                                    <div class="item p-0">
                                        <div class="media media-card media--card align-items-center shadow-none rounded-0 mb-0 bg-transparent">
                                            <div class="votes py-2 answered-accepted">
                                                <div class="vote-block d-flex align-items-center justify-content-between" title="Votes">
                                                    <span class="vote-counts"><?=$row['likes']?></span>
                                                    <span class="vote-icon"></span>
                                                </div>
                                               
                                                <div class="answer-block d-flex align-items-center justify-content-between" title="Answers">
                                                <?php $topicid = $row['id'];
                                                    $qr = $this->db->query("SELECT COUNT(*) as countc FROM forum_comments join forum_topics on forum_topics.id = forum_comments.topic_id where forum_topics.id = $topicid");
                                                    $query = $qr->result_array();
                                                    foreach($query as $cmrow){
                                                ?></span>
                                                <span class="vote-counts"><?php echo number_format($cmrow['countc']) ?></span>
                                                    <span class="answer-icon"></span>
                                                </div>
                                                <?php }?>
                                            </div>
                                            <div class="media-body">
                                                <h5><a href="<?=base_url()?>Question-Details/<?=$row['id'];?>"><?=$row['title'];?></a></h5>
                                                <small class="meta">
                                                    <span><?php 
                                            $this->load->helper('date');
                                            $date=$row['date_created'];
                                            $last = new DateTime($date);
                                            $now = new DateTime( date( 'Y-m-d h:i:s', time() )) ; 
                                            $interval = $last->diff($now);
                                            $years = (int)$interval->format('%Y');
                                            $months = (int)$interval->format('%m');
                                            $days = (int)$interval->format('%d');
                                            $hours = (int)$interval->format('%H');
                                            $minutes = (int)$interval->format('%i');
                                            if($years > 0)
                                            {
                                            echo $years.' Year/s  ago' ;
                                            }
                                            else if($months > 0)
                                            {
                                            echo $months.' Month/s  ago' ;
                                            }
                                            else if($days > 0)
                                            {
                                            echo $days.' Day/s ago' ;
                                            }
                                            else if($hours > 0)
                                            {
                                            echo  $hours.' Hour/s  ago' ;
                                            }
                                            else
                                            {
                                            echo $minutes.' minute/s ago' ;
                                            }
                                         ?></span>
                                                </small>
                                            </div>
                                            <?php if($row['user_id'] === $this->session->id){?>
                                                <div class="float-right" style="margin-right: 20px;">
                                                    <a class="text-dark " href="javascript:void(0)" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <span class="fas fa-ellipsis-v"></span>
                                                    </a>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <button data-toggle="modal" data-target="#qedit<?=$row['id'];?>" class="dropdown-item">Edit</button>
                                                    <button data-toggle="modal" data-target="#qdel<?=$row['id'];?>" class="dropdown-item">Delete</button>
                                                    </div>
                                                </div>
                                                <?php }?>
                                        </div><!-- end media -->
                                    </div><!-- end item -->
                                    <?php }?>
                                    <div class="view-more pt-3 px-3">
                                        <a href="<?=base_url()?>Discussion" class="btn-text fs-15">View all questions and answers in Forum<i class="la la-arrow-right icon ml-1"></i></a>
                                    </div>
                                </div><!-- end vertical-list -->
                            </div><!-- end user-panel -->
                        </div><!-- end user-panel-main-bar -->
                    </div><!-- end tab-pane -->
                    <div class="tab-pane fade" id="user-activity" role="tabpanel" aria-labelledby="user-activity-tab">
                        <div class="user-panel-main-bar">
                            <div class="container row">
                                <div class="col-lg-10"></div>
                            <button type="button" class="btn btn-outline-info btn-sm col-lg-2" data-toggle="modal" data-target="#addmodal">Add Record</button>
                            </div><br>
                        <div class="row">
                        <?php foreach($allpet as $row) :?>
                        <div class="col-lg-4 responsive-column-half">
                            <div class="card card-item hover-y">
                                <div class="card-body pt-0">
                                    <a href="#" class="card-link" ><?php if($row['status'] == 'no'){?><b>Pet Profile :</b> <?= $row['category'];}?><b><?php if($row['status'] == 'yes'){?><div class="float-right">Status: Deceased Pet</div><?php }?></b></a>
                                    <!-- IMG -->
                                    <center><div class="media-img media--img">
                                        <img src="<?=base_url()?>assets/useruploads/petprofile/<?=$row['img_file'];?>" onError="this.onerror=null;this.src='<?=base_url()?>assets/useruploads/no-image.png';" style="height: 150px; width: 150px; border-radius: 10%;">
                                    </div></center>
                                    <!-- IMG-->

                                    <center><h5 class="card-title fw-medium"><a href="<?=base_url()?>Pet-Single/<?=$row['id'];?>">Name : <?=ucfirst($row['name']);?></a></h5></center>
                                    <p class="justify-content-between"><b>About:</b>
                                    <?php if($row['type'] == '1'){echo 'Dog';}elseif($row['type'] == '2'){echo 'Cat';}?> |
                                    <?=ucfirst($row['breed']);?> | 
                                    <?=ucfirst($row['sex']);?><br>
                                    </p>
                                    <p class="justify-content-between"><b>Description:</b>
                                    <?=ucfirst($row['color']);?> | 
                                    <?=ucfirst($row['size']);?><br>
                                    </p>
                                    <div class="media media-card align-items-center shadow-none p-0 mb-0 rounded-0 mt-4 bg-transparent">
                                    <button type="button" class="btn btn-outline-primary btn-sm" data-toggle="modal" data-target="#petmodal<?=$row['id']?>">View</button>&nbsp;
                                    <button type="button" class="btn btn-outline-warning btn-sm" data-toggle="modal" data-target="#editmodal<?=$row['id']?>">Edit</button>&nbsp;
                                    <a href="<?=base_url()?>Fetch-Pet-Vaccine-History/<?=$row['id'];?>"><button type="button" class="btn btn-outline-info btn-sm" >Vacc. History</button></a>
                                    </div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div><!-- end col-lg-4 -->
                        <?php endforeach ?>
                        <?php if(empty($allpet)){?>
                            <div class="col-lg-4 responsive-column-half">
                            <div class="card card-item hover-y">
                                <div class="card-body pt-0">
                                    <a href="#" class="card-link" >No Pet Records</a>
                                    <h5 class="card-title fw-medium">NO PET RECORDS</h5>
                                    <div class="media media-card align-items-center shadow-none p-0 mb-0 rounded-0 mt-4 bg-transparent">
                                        <a href="#" class="media-img media-img--sm d-block mr-2 rounded-full">
                                            <img src="<?=base_url()?>assets/adminuploads/1.png" alt="avatar" class="rounded-full">
                                        </a>
                                        <div class="media-body">
                                            <h5 class="fs-14 fw-medium">By <a href="#">Admin</a></h5>
                                            
                                        </div>
                                    </div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div><!-- end col-lg-4 -->
                        <?php }?>
                        </div>
                        
                        </div><!-- end user-panel-main-bar -->
                    </div><!-- end tab-pane -->
                </div>
                <?php }?>
            </div><!-- end col-lg-9 -->
            <div class="col-lg-3">
                <div class="sidebar">
                    <div class="card card-item">
                        <div class="card-body">
                            <h3 class="fs-17 pb-3">Latest Questions</h3>
                            <div class="divider"><span></span></div>
                            <div class="sidebar-questions pt-3">
                            <?php foreach($ltopics as $row){?>
                                <div class="media media-card media--card media--card-2">
                                    <div class="media-body">
                                        <h5><a href="<?=base_url()?>Question-Details/<?=$row['id'];?>"><?= $row['title'];?></a></h5>
                                        <small class="meta">
                                            <span class="pr-1"><?php 
                                            $this->load->helper('date');
                                            $date=$row['date_created'];
                                            $last = new DateTime($date);
                                            $now = new DateTime( date( 'Y-m-d h:i:s', time() )) ; 
                                            $interval = $last->diff($now);
                                            $years = (int)$interval->format('%Y');
                                            $months = (int)$interval->format('%m');
                                            $days = (int)$interval->format('%d');
                                            $hours = (int)$interval->format('%H');
                                            $minutes = (int)$interval->format('%i');
                                            if($years > 0)
                                            {
                                            echo $years.' year/s  ago' ;
                                            }
                                            else if($months > 0)
                                            {
                                            echo $months.' month/s  ago' ;
                                            }
                                            else if($days > 0)
                                            {
                                            echo $days.' day/s  ago' ;
                                            }
                                            else if($hours > 0)
                                            {
                                            echo  $hours.' hour/s ago' ;
                                            }
                                            else
                                            {
                                            echo $minutes.' minute/s ago' ;
                                            }
                             ?>
                                            <span class="pr-1">. by</span>
                                            <a href="#" class="author"><?= $row['username'];?></a>
                                        </small>
                                    </div>
                                </div><!-- end media -->
                                <?php }?>
                            </div><!-- end sidebar-questions -->
                        </div>
                    </div><!-- end card -->
                    <!-- <div class="ad-card">
                        <h4 class="text-gray text-uppercase fs-13 pb-3 text-center">Advertisements</h4>
                        <div class="ad-banner mb-4 mx-auto">
                            <span class="ad-text">290x500</span>
                        </div>
                        <div class="ad-banner mb-4 ad-banner-2 mx-auto">
                            <span class="ad-text">290x300</span>
                        </div>
                    </div> --><div class="ad-banner mb-4 ad-banner-2 mx-auto">
                            <span class="ad-text">290x300</span>
                        </div>
                </div><!-- end sidebar -->
            </div><!-- end col-lg-3 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end user-details-area -->
<!-- ================================
         END USER DETAILS AREA
================================= -->
<?php $this->load->view('User/modals');?>
<?php if($this->session->access === 'user'){?>
<?php $this->load->view('User/petmodals');?>
<?php }?>
<!-- <?php $this->load->view('Rtc/chatwid');?> -->