<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Chat_controller extends CI_Controller{
     
      public function chats()
      {
      if ($this->session->logged_in === TRUE && $this->session->access === 'admin'){
            $pages = 'chats';
           if(!file_exists(APPPATH.'views/Rtc/'.$pages.'.php')){
                show_404();
            }   
            $data['allmessages'] = $this->Contact_model->get_all_messages();

            $data['mtotal'] = count($data['allmessages']);
            $data['allinbox'] = $this->Mail_model->get_all_inbox();
            $data['alltotal'] = $this->Mail_model->get_count1(); 
            $data['chatlist'] = $this->Chat_model->chatlist();
            $this->load->view('Admin/header');
            $this->load->view('Admin/navbar',$data);
            $this->load->view('Admin/sidebar',$data);
            $this->load->view('Rtc/'.$pages, $data);
            $this->load->view('Admin/footer');
      }else{
            redirect(base_url());
      }     
      }
      public function showchats(){
            $outgoing_id = $this->session->email;
            $incoming_id = $_GET['receiver_id'];
            $output = "";
            $sql = $this->db->query("SELECT * FROM rtc LEFT JOIN user ON user.email = rtc.receiver_id
                    WHERE (receiver_id = '$outgoing_id' AND sender_id = '$incoming_id')
                    OR (receiver_id = '$incoming_id' AND sender_id = '$outgoing_id') ORDER BY rtc.id");
            $query =  $sql->result();
            if($sql->num_rows() > 0){
                foreach($query as $row){
                    if($row->receiver_id === $outgoing_id){
                        $output .= '
                        <div class="direct-chat-msg right">
                              <div class="direct-chat-infos clearfix">
                              <span class="direct-chat-name float-right">'.$row->username.'</span>
                              <span class="direct-chat-timestamp float-left">'.$row->time.'</span>
                              </div>
                              <img class="direct-chat-img" src="'.base_url().'assets/useruploads/'.$row->pic_file.'"  alt="Profile">
                              <div class="direct-chat-text">'.$row->message.'</div>
                        </div>';
                    }else{
                        $output .= '
                        <div class="direct-chat-msg">
                              <div class="direct-chat-infos clearfix">
                              <span class="direct-chat-name float-left">'.$row->username.'</span>
                              <span class="direct-chat-timestamp float-right">'.$row->time.'</span>
                              </div>
                              <img class="direct-chat-img" src="'.base_url().'assets/useruploads/'.$row->pic_file.'" alt="Profile">
                              <div class="direct-chat-text">'.$row->message.'</div>
                        </div>';
                    }
                }
            }else{
                $output .= '<div class="text">No messages are available. Once you send message they will appear here.</div>';
            }
            echo $output;
	}
      public function showchat(){
            $outgoing_id = $this->session->email;
            $incoming_id = $_GET['receiver_id'];
            $output = "";
            $sql = $this->db->query("SELECT * FROM rtc LEFT JOIN user ON user.email = rtc.receiver_id
                    WHERE (receiver_id = '$outgoing_id' AND sender_id = '$incoming_id')
                    OR (receiver_id = '$incoming_id' AND sender_id = '$outgoing_id') ORDER BY rtc.id");
            $query =  $sql->result();
            if($sql->num_rows() > 0){
                foreach($query as $row){
                    if($row->receiver_id === $outgoing_id){
                        $output .= '
                        <div class="d-flex justify-content-between">
                              <p class="small mb-1 text-muted">'.$row->time.'</p>
                              <p class="small mb-1">'.$row->username.'</p>
                        </div>
                        <div class="d-flex flex-row justify-content-end">
                        <div>
                        <p class="small p-2 me-3 mb-3 text-white rounded-3" style="background-color:#28a745; border-radius:10px;width:250px; text-align:right;">'.$row->message.'</div>
                        &nbsp;<img src="'.base_url().'assets/useruploads/'.$row->pic_file.'"
                        alt="avatar 1" style="width: 45px; height: 100%; border-radius: 50px;">
                        </div>';
                    }else{
                        $output .= '
                        <div class="d-flex justify-content-between">
                        <p class="small mb-1">'.$row->username.'</p>
                        <p class="small mb-1 text-muted">'.$row->time.'</p>
                        </div>
                        <div class="d-flex flex-row justify-content-start">
                        &nbsp;<img src="'.base_url().'assets/useruploads/'.$row->pic_file.'"
                        alt="avatar 1" style="width: 45px; height: 100%; border-radius: 50px;">
                        <div>
                        <p class="small p-2 ms-3 mb-3 rounded-3" style="background-color: #f5f6f7;border-radius:10px;width:250px; text-align:left;">'.$row->message.'</div>
                        </div>';
                    }
                }
            }else{
                $output .= '<div class="text">No messages are available. Once you send message they will appear here.</div>';
            }
            echo $output;
	}
      public function sendmessage()
      {
		$query = $this->Chat_model->sendmessage();
            if($query === TRUE){
                  $this->session->set_flashdata('user_success','Sent', 1);
            }else{
                  $this->session->set_flashdata('user_failed','Failed', 1);
            }
	}
      public function chatlist()
      {
		$data = $this->Chat_model->chatlist();
		$output = "";
		foreach($data as $row){
                  if(!empty($data)){
			$output .= '
			<li class="selectVendor show" data-id="'.$row->email.'" value="'.$row->id.'" title="'.$row->username.'" >
                        <img src="'.base_url().'assets/useruploads/'.$row->pic_file.'" alt="Profile" style="width:50px;">
                        <a class="users-list-name" href="#">'.$row->username.'</a>
                  </li>
                  ';
                  }else{
                        $output .= '<li class="text">No messages are available. Once you send message they will appear here.</li>';
                    }
		}
            echo $output;
            
	}
      public function userchatlist()
      {
		$data = $this->Chat_model->userchatlist();
		$output = "";
		foreach($data as $row){
                  if(!empty($data)){
			$output .= '
			<li class="selectVendor show" data-id="'.$row->email.'" value="'.$row->id.'" title="'.$row->username.'" >
                        <img src="'.base_url().'assets/useruploads/'.$row->pic_file.'" alt="Profile" style="width:50px;">
                        <a class="users-list-name" href="#">'.$row->username.'</a>
                  </li>
                  ';
                  }else{
                        $output .= '<li class="text">No messages are available. Once you send message they will appear here.</li>';
                    }
		}
            echo $output;
            
	}
      public function chatlists()
      {
		$data = $this->Chat_model->chatlist();
            echo $data;
	}
      public function count(){
		$data['count'] = $this->Chat_model->chatlist();
		echo $data['count'] = count($data['count']);
	}
      public function clearchat(){
		$receiver_id = $_GET['receiver_id'];
		$this->Chat_model->TrashById($receiver_id); 
	}
}