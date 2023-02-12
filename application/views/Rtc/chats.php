
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Chat Support</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
          <div class="col-md-8" id="chatSection">
            <!-- DIRECT CHAT PRIMARY -->
            <div class="card card-primary card-outline direct-chat direct-chat-primary">
              <div class="card-header">
                <h3 class="card-title" id="receiver_text">Select User at Chat List</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                      <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn ClearChat">
                  <span data-toggle="tooltip" title="Clear Chat" class="ClearChat"><i class="fa fa-comments"></i></span>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <!-- Conversations are loaded here -->
                <div class="direct-chat-messages" id="content">
                  <div id="chatbox"></div>
                </div>
                <div class="direct-chat-contacts">
                  <ul class="contacts-list">
                    <li>
                      <a href="#">
                        <img class="contacts-list-img" src="" alt="User Avatar">

                        <div class="contacts-list-info">
                          <span class="contacts-list-name">
                            Count Dracula
                            <small class="contacts-list-date float-right">2/28/2015</small>
                          </span>
                          <span class="contacts-list-msg">How have you been? I was...</span>
                        </div>
                        <!-- /.contacts-list-info -->
                      </a>
                    </li>
                    <!-- End Contact Item -->
                  </ul>
                  <!-- /.contatcts-list -->
                </div>
                <!-- /.direct-chat-pane -->
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <form action="#">
                  <div class="input-group">
                    <input type="text" id="message" name="message" placeholder="Type Message ..." class="form-control" autocomplete="off">
                    <span class="input-group-append">
                    <input type="hidden" id="ReciverId_txt">
                      <button type="button" class="btn btn-primary btnSend" id="btnSend" >Send</button>
                    </span>
                  </div>
                </form>
              </div>
              <!-- /.card-footer-->
            </div>
            <!--/.direct-chat -->
          </div>
          <div class="col-md-4">
            <!-- DIRECT CHAT PRIMARY -->
            <div class="card card-warning card-outline direct-chat direct-chat-primary">
              <div class="card-header">
                <h3 class="card-title">Chats</h3>

                <div class="card-tools">
                <span title="3 New Messages" class="badge bg-primary" id="chats"></span>
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                      <i class="fas fa-minus"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="box-body no-padding">
                    <ul class="users-list clearfix" id="chatlist">
                    <!-- <?php
                    $output = "";
                    $data = $this->Chat_model->chatlist();
                    foreach($data as $row){
                      if(!empty($data)){
                      $output .= '
                      <li class="selectVendor" id="'.$row->email.'" title="'.$row->username.'">
                                        <img src="'.base_url().'assets/useruploads/'.$row->pic_file.'" alt="Profile" style="width:50px;">
                                        <a class="users-list-name" href="#">'.$row->username.'</a>
                                  </li>
                      ';
                      }else{
                            $output .= '<li class="text">No messages are available. Once you send message they will appear here.</li>';
                        }
                     }
                     echo $output;
                    ?> -->
                    </ul>
                    <hr>
                    <center><h5>User Lists</h5></center>
                    <ul class="users-list clearfix" id="userchatlist"></ul>
            </div>
            <!--/.direct-chat -->
          </div>
     
        </div>
    </section>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<script>
 
  var audioreceived = new Audio('<?=base_url()?>assets/rtc/sound/message_received.mp3');
  var audiosent = new Audio('<?=base_url()?>assets/rtc/sound/message_sent.mp3');
  // 
  // $(document).on('click', '.show', function(){
	// 	var id = $(this).data('id');
	// 	console.log(id);
  //   console.log(JSON.stringify(id));
	// });
  // 
$(function() {

$('#message').keypress(function(event){
    var keycode = (event.keyCode ? event.keyCode : event.which);
    if(keycode == '13'){
       
       sendTxtMessage($('#message').val());
    }
});

$('.btnSend').click(function(){
     sendTxtMessage($('#message').val());
     
});

$(document).on('click', '.show', function(){
  ChatSection(1);
      var receiver_id = $(this).data('id');
	  //alert(receiver_id);
	  $('#ReciverId_txt').val(receiver_id);
	  $('#receiver_text').html($(this).attr('title'));
	  GetChatHistory(receiver_id);
 				
});

$('.ClearChat').click(function(){
       var receiver_id = $('#ReciverId_txt').val();
  	 			$.ajax({
  						  url: '<?=base_url()?>Chat_controller/clearchat?receiver_id='+receiver_id,
						  success:function(data)
						  {
  							 GetChatHistory(receiver_id);		 
						  },
						  error: function (jqXHR, status, err) {
						  }
 					});
           
           ChatSection(0);
});

function sendTxtMessage(message){
	var messageTxt = message.trim();
	if(messageTxt!=''){
				var receiver_id = $('#ReciverId_txt').val();
				$.ajax({
						  dataType : "json",
						  type : 'post',
						  data : {messageTxt : messageTxt, receiver_id : receiver_id },
						  url: '<?=base_url()?>Chat_controller/sendmessage',
						  success:function(data)
						  {
  							GetChatHistory(receiver_id);
						  },
						  error: function (jqXHR, status, err) {
						  }
 					});
		ScrollDown();
    
		$('#message').val('');
		$('#message').focus();
    setTimeout(function(){ 
      audiosent.play();
    }, 500)
   
	}else{
		$('#message').focus();
	}
}

function ChatSection(status){
	//chatSection
	if(status==0){
		$('#chatSection :input').attr('disabled', true);
    $('#receiver_text').html('Select User at ChatList');
    } else {
        $('#chatSection :input').removeAttr('disabled');
    }   
}
ChatSection(0);


function ScrollDown(){
	var elmnt = document.getElementById("content");
    var h = elmnt.scrollHeight;
   $('#content').animate({scrollTop: h}, 1000);
}

function GetChatHistory(receiver_id){
				$.ajax({
  						  url: '<?=base_url()?>Chat-History?receiver_id='+receiver_id,
						  success:function(data)
						  {
  							$('#chatbox').html(data);
							ScrollDown();	 
						  },
						  error: function (jqXHR, status, err) {
						  }
 					});
}

setInterval(function(){ 
	var receiver_id = $('#ReciverId_txt').val();
	if(receiver_id!=''){GetChatHistory(receiver_id);}
}, 1000);

});	

</script>

<!-- CHAT LIST -->
<script>
   function chatlist() {
       $.ajax({
           type: "GET",
           url: "<?=base_url();?>Chat_controller/chatlist",
           async: true,
           cache: false,
           timeout: 50000,
           success: function (data) {
              $('#chatlist').html(data);
              setTimeout(
                chatlist,
                       1000
                       );
},
           error: function (XMLHttpRequest, textStatus, errorThrown) {
               addmsg("error", textStatus + " (" + errorThrown + ")");
               setTimeout(
                chatlist,
                       15000);
           }
       });
   };
   
   $(document).ready(function () {
    chatlist();
   });
</script>
<!-- USER CHAT LIST -->
<script>
   function userchatlist() {
       $.ajax({
           type: "GET",
           url: "<?=base_url();?>Chat_controller/userchatlist",
           async: true,
           cache: false,
           timeout: 50000,
           success: function (data) {
              $('#userchatlist').html(data);
              setTimeout(
                userchatlist,
                       1000
                       );
},
           error: function (XMLHttpRequest, textStatus, errorThrown) {
               addmsg("error", textStatus + " (" + errorThrown + ")");
               setTimeout(
                userchatlist,
                       15000);
           }
       });
   };
   
   $(document).ready(function () {
    userchatlist();
   });
</script>
<!-- WORKING > -->
<script>
   function count() {
       $.ajax({
           type: "GET",
           url: "<?=base_url();?>Chat_controller/count",
           async: true,
           cache: false,
           timeout: 50000,
           success: function (data) {
                   $('#chats').html(data);
                   
               setTimeout(
                      count,
                       1000
                       );
    },
           error: function (XMLHttpRequest, textStatus, errorThrown) {
               addmsg("error", textStatus + " (" + errorThrown + ")");
               setTimeout(
                      count,
                       15000);
           }
       });
   };
   $(document).ready(function () {
      count();
   });
</script>

</div>
</body>
</html>