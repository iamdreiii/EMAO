<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

/* Button used to open the chat form - fixed at the bottom of the page */
/* .open-button {
  cursor: pointer;
  display: flex;
  align-items: center;
  justify-content: center;
  background-color: #555;
  color: white;
  padding: 10px 12px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 23px;
  left: 28px;
  width: 60px;
  border-radius: 20px;
} */

.open-button {
  cursor: pointer;
  display: flex;
  align-items: center;
  justify-content: center;
  background-color: #555;
  color: white;
  padding: 10px 12px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  width: 60px;
  border-radius: 20px;
  position: fixed;
  left:    28px;
  bottom:   23px;
} 

/* The popup chat - hidden by default */
.card.cardinfo {
  cursor: pointer;
  display: none;
  position: fixed;
  max-width: 340px;
  max-height: 500px;
  height: auto;
  bottom: 15px;
  left: 15px;
  border-radius: 10px;
  z-index: 1;
  overflow-y: scroll;
}

</style>
</head>
<body>

<button class="open-button" onclick="openForm()"><span class="fa fa-comment fa-2x"></span></button>


            <div class="card cardinfo" id="myForm">
                    <div class="card-header d-flex justify-content-between align-items-center p-3"
                        style="border-top: 4px solid #ffa900;">
                        <h5 class="mb-0">Chat Admin </h5><button type="button" class="btn cancel" onclick="closeForm()"><span class="fa fa-times"></span></button>
                    </div>
                    <div class="card-body" data-mdb-perfect-scrollbar="false">
                        <div class="content" id="content">
                            <div id="chatbox"></div>
                        </div>
                        
                    </div>
                    <div class="card-footer text-muted d-flex justify-content-between align-items-center p-3">
                              <div class="input-group mb-0">
                                  <input type="text" class="form-control" placeholder="Type message" id="message" name="message"  aria-label="Recipient's username" aria-describedby="button-addon2" />&nbsp;
                                      <input type="hidden" id="messageTxt" name="messageTxt" value="admin@gmail.com">
                                  <button class="btn btn-warning btnSend" type="button" id="button-addon2" style="height:37px;">send</button>
                              </div>
                      </div>
            </div>
        
<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<script>
$(function() {

$('#message').keypress(function(event){
  var keycode = (event.keyCode ? event.keyCode : event.which);
  if(keycode == '13'){
      
    $(".btnSend").click();
  }
});
$('.btnSend').click(function(){
     sendTxtMessage($('#message').val());
});
$('.selectVendor').click(function(){
	//ChatSection(1);
      var receiver_id = $(this).attr('id');
	  //alert(receiver_id);
	  $('#ReciverId_txt').val(receiver_id);
	  $('#receiver_text').html($(this).attr('title'));
	  
	  GetChatHistory(receiver_id);
 				
});

function sendTxtMessage(message){
	var messageTxt = message.trim();
	if(messageTxt!=''){
		console.log(message);
 		//DisplayMessage(messageTxt);
		
				var receiver_id = $('#messageTxt').val();
				$.ajax({
						  dataType : "json",
						  type : 'post',
						  data : {messageTxt : messageTxt, receiver_id : receiver_id },
						  url: '<?=base_url()?>Chat_controller/sendmessage',
						  success:function(data)
						  {
                
  							GetChatHistory(receiver_id)		 
						  },
						  error: function (jqXHR, status, err) {
 							 // alert('Local error callback');
						  }
 					});
					
		
		
		ScrollDown();
		$('#message').val('');
		$('#message').focus();
	}else{
		$('#message').focus();
	}
}
function ScrollDown(){
	var elmnt = document.getElementById("myForm");
    var h = elmnt.scrollHeight;
   $('#myForm').animate({scrollTop: h}, 1000);
}
function GetChatHistory(receiver_id){
				$.ajax({
						  //dataType : "json",
  						  url: '<?=base_url()?>Chats-History?receiver_id=admin@gmail.com',
						  success:function(data)
						  {
  							$('#chatbox').html(data);
							ScrollDown();	 
						  },
						  error: function (jqXHR, status, err) {
 							 // alert('Local error callback');
						  }
 					});
}

setInterval(function(){ 
	var receiver_id = $('#ReciverId_txt').val();
	if(receiver_id!=''){GetChatHistory(receiver_id);}
}, 3000);

});	///end of jquery

</script>
</div>
</body>
</html>