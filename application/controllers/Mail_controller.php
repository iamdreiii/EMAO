<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mail_controller extends CI_Controller{
     
      public function inbox(){
         
            $pages = 'inbox';
           if(!file_exists(APPPATH.'views/Mailbox/'.$pages.'.php')){
                show_404();
            }    

            $config = array();
            $config["base_url"] = base_url() . "Inbox";
            $config["total_rows"] = $this->Mail_model->get_count1();
            $config["per_page"] = 10;
            $config["uri_segment"] = 2;
            $config['first_tag_open'] = '<li class="page-item"><span class="page-link">';        
            $config['first_tag_close'] = '</span></li>';        
            $config['prev_link'] = '&laquo';        
            $config['prev_tag_open'] = '<li class="page-item"><span class="page-link">';        
            $config['prev_tag_close'] = '</span></li>';        
            $config['next_link'] = '&raquo';        
            $config['next_tag_open'] = '<li class="page-item"><span class="page-link">';        
            $config['next_tag_close'] = '</span></li>';        
            $config['last_tag_open'] = '<li class="page-item"><span class="page-link">';        
            $config['last_tag_close'] = '</span></li>';        
            $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';        
            $config['cur_tag_close'] = '</a></li>';        
            $config['num_tag_open'] = '<li class="page-item"><span class="page-link">';        
            $config['num_tag_close'] = '</span></li>';
            $this->pagination->initialize($config);
            $page = ($this->uri->segment(2)) ? $this->uri->segment(2) : 0;
            $data["links"] = $this->pagination->create_links();
            $data['allinbox'] = $this->Mail_model->get_authors1($config["per_page"], $page);

            $data['allmessages'] = $this->Contact_model->get_all_messages();
            $data['resp'] = $this->Mail_model->resp();
            $data['mtotal'] = count($data['allmessages']);
            //$data['allinbox'] = $this->Mail_model->get_all_inbox();
            $data['alltotal'] = $this->Mail_model->get_count1(); 
            $this->load->view('Admin/header');
            $this->load->view('Admin/navbar',$data);
            $this->load->view('Admin/sidebar',$data);
            $this->load->view('Mailbox/'.$pages, $data);
            $this->load->view('Admin/footer');
                     
      }
      public function resp_update(){
          $chk = $this->Mail_model->resp_update();
          if ($chk) {
             $this->session->set_tempdata('user_success','Reponse Time Updated',1);
             redirect('Inbox');
      }
     }
      public function searchmail(){

            $page = 'inbox';
            if(!file_exists(APPPATH.'views/Mailbox/'.$page.'.php')){
                show_404();
            } 
            $param = $this->input->post('searchmail');
            $data['allinbox'] = $this->Mail_model->searchmail($param);
            $data['allmessages'] = $this->Contact_model->get_all_messages();
            $data['mtotal'] = count($data['allmessages']);  
            $data['alltotal'] = $this->Mail_model->get_count1();  
            $this->load->view('Admin/header');
            $this->load->view('Admin/navbar',$data);
            $this->load->view('Admin/sidebar',$data);
            $this->load->view('Mailbox/'.$page, $data);
            $this->load->view('Admin/footer');
          
      }
      public function read($param){
           $page = 'read';
           if(!file_exists(APPPATH.'views/Mailbox/'.$page.'.php')){
                show_404();
            }   
           
            $this->Contact_model->readmessage($param);
            $data['allmessages'] = $this->Contact_model->get_all_messages();
            $data['mtotal'] = count($data['allmessages']);

            $data['singleview'] = $this->Mail_model->readview($param);
            $data['id'] = $data['singleview']['id']; 
            $data['name'] = $data['singleview']['name'];
            $data['email'] = $data['singleview']['email'];
            $data['contact'] = $data['singleview']['contact'];
            $data['subject'] = $data['singleview']['subject'];
            $data['message'] = $data['singleview']['message'];
            $data['date_added'] = $data['singleview']['date_added'];
            //print_r($data);
            $this->load->view('Admin/header');
            $this->load->view('Admin/navbar',$data);
            $this->load->view('Admin/sidebar',$data);
            $this->load->view('Mailbox/'.$page, $data);
            $this->load->view('Mailbox/delete_modal');
            $this->load->view('Admin/footer');
           
            
          
      }
    public function deletemail(){
            $chkdelete = $this->Mail_model->delete_message();
            if ($chkdelete) {
               $this->session->set_tempdata('user_success','Message Deleted!',2);
               redirect('Inbox');
        }
   }

    public function compose() { 
        $this->form_validation->set_error_delimiters('<div class="text text-danger">','</div>');
        $this->form_validation->set_rules('to_mail', 'to_mail', 'required');
        if ($this->form_validation->run()) {

             $from_email = "dept.of.agriculture.polaormin@gmail.com"; 
             $to_mail = $this->input->post('to_mail');
             $subject = $this->input->post('subject'); 
             $message = $this->input->post('message');  
       
             //Load email library 
             $this->load->library('email'); 
       
             $this->email->from($from_email, 'Department of Agriculture - Pola'); 
             $this->email->to($to_mail);
             $this->email->subject($subject); 
             $this->email->message("<p>Dear $to_mail,</p>
                <p>$message</p>
                <p>Best regards,</p>
                <p>Department of Agriculture - Pola</p>"); 
             // Insert Messages in DB
             
             //Send mail 
             if($this->email->send()){ 
                $chkinsert = $this->Mail_model->insertcompose();
                $this->session->set_tempdata("user_success","Email sent successfully.",1); 
                redirect('Inbox');
             }else{ 
                $this->session->set_tempdata("user_failed","Error in sending Email.",1); 
                redirect('Inbox'); 
             }          
        }else{
             $page = 'compose';
           if(!file_exists(APPPATH.'views/Mailbox/'.$page.'.php')){
                show_404();
            }      
            $data['allmessages'] = $this->Contact_model->get_all_messages();
            $data['mtotal'] = count($data['allmessages']);   
            $this->load->view('Admin/header');
            $this->load->view('Admin/navbar',$data);
            $this->load->view('Admin/sidebar',$data);
            $this->load->view('Mailbox/'.$page, $data);
            $this->load->view('Admin/footer');
        }
      } 
    public function reply($param){
           $page = 'reply';
           if(!file_exists(APPPATH.'views/Mailbox/'.$page.'.php')){
                show_404();
            }   
             
            $data['allmessages'] = $this->Contact_model->get_all_messages();
            $data['mtotal'] = count($data['allmessages']);

            $data['singleview'] = $this->Mail_model->get_reply($param);
            $data['id'] = $data['singleview']['id']; 
            $data['email'] = $data['singleview']['email'];
            $this->load->view('Admin/header');
            $this->load->view('Admin/navbar',$data);
            $this->load->view('Admin/sidebar',$data);
            $this->load->view('Mailbox/'.$page, $data);
            $this->load->view('Admin/footer');
      }

   
}