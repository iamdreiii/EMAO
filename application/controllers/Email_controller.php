<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Email_controller extends CI_Controller {

    public function contactus() { 

        $this->form_validation->set_error_delimiters('<div class="alert alert-danger">','</div>');
        $this->form_validation->set_rules('email', 'email', 'required');
        $this->form_validation->set_rules('phone', 'contact', 'required');
        $this->form_validation->set_rules('name', 'name', 'required');
        $this->form_validation->set_rules('subject', 'subject', 'required');
        $this->form_validation->set_rules('message', 'message', 'required');
        if ($this->form_validation->run()) {

             $from_email = "dept.of.agriculture.polaormin@gmail.com"; 
             $name = $this->input->post('name');
             $to_email = $this->input->post('email');
             $contact = $this->input->post('phone');
             $subject = $this->input->post('subject'); 
             $message = $this->input->post('message');  
       
             $this->load->library('email'); 
             $this->email->from($from_email, 'Municipal Agriculture Office - Pola'); 
             $this->email->to($to_email);
             $this->email->subject($subject); 
             $this->email->message("<p>Dear $name,</p>
                <p>This is to confirm that we have received your email regarding the Subject : <b>'$subject'</b>. Again, We would like to thank you for your concern, We will reply as soon as we can.</p>
                <p>Best regards,</p>
                <p>Department of Agriculture - Pola</p>"); 
             // Insert Messages in DB
             $chkinsert = $this->Contact_model->insertemail();
             //Send mail 
             if($this->email->send() && $chkinsert){ 
                $this->session->set_tempdata("user_success","Email sent successfully.",1); 
                redirect('Contact-us');
             }else{ 
                $this->session->set_tempdata("user_failed","Error in sending Email.",1); 
                redirect('Contact-us'); 
             }          
        }else{
            $page = "contact"; 

            if(!file_exists(APPPATH.'views/Home/'.$page.'.php')){
                show_404();
            }
            $data['respo'] = $this->Mail_model->resp();
            $data['user'] = $this->User_model->getuser();
            $this->load->view('Home/header', $data);
		    $this->load->view('Home/'.$page, $data);
            $this->load->view('Home/footer');
        }
      } 
}
