
<link rel="stylesheet" href="<?=base_url()?>assets/widget/style.css">
<div class="fabs">
  <div class="chat">
    <div class="chat_header">
      <div class="chat_option">
      <div class="header_img">
        <img src="<?=base_url()?>assets/adminuploads/1.png"/>
        </div>
        <span id="chat_head">Admin</span> <br> <span class="agent">Agent</span> <span class="online">(Online)</span> 
       </div>
    </div>
    <div id="chat_converse" class="chat_conversion chat_converse">
      <span class="chat_msg_item chat_msg_item_admin">
            <div class="chat_avatar">
               <img src="<?=base_url()?>assets/adminuploads/1.png"/>
            </div>Hey there! Any question?</span>
      <span class="chat_msg_item chat_msg_item_user">
            Hello!</span>
            <span class="status">20m ago</span>
      <span class="chat_msg_item chat_msg_item_admin">
            <div class="chat_avatar">
               <img src="<?=base_url()?>assets/adminuploads/1.png"/>
            </div>Hey! Would you like to talk sales, support, or anyone?</span>
      <span class="chat_msg_item chat_msg_item_user">
            Lorem Ipsum is simply dummy text of the printing and typesetting industry.</span>
             <span class="status2">Just now. Not seen yet</span>
    </div>
    <div class="fab_field">
      <a id="fab_camera" class="fab"><i class="zmdi zmdi-camera"></i></a>
      <a id="fab_send" class="fab"><i class="zmdi zmdi-mail-send"></i></a>
      <textarea id="chatSend" name="chat_message" placeholder="Send a message" class="chat_field chat_message"></textarea>
    </div>
  </div>
    <a id="prime" class="fab"><i class="prime zmdi zmdi-comment-outline"></i></a>
</div>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script><script  src="<?=base_url()?>assets/widget/script.js"></script>
<script src='http://code.jquery.com/jquery-1.11.3.min.js'></script>