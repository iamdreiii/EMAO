<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dispersal_controller extends CI_Controller{

	public function dispersalhome(){

        if ($this->session->logged_in == true && $this->session->access == 'admin' ){
            $pages = "monitoring"; 

            if(!file_exists(APPPATH.'views/Dispersal/'.$pages.'.php')){
                show_404();
            }
            $config = array();
            $config["base_url"] = base_url() . "Dispersal-Monitoring";
            $config["total_rows"] = $this->Dispersal_model->get_count1();
            $config["per_page"] = 12;
            $config["uri_segment"] = 2;
            $config['full_tag_open'] = '<ul class="pagination generic-pagination justify-content-center">';        
            $config['full_tag_close'] = '</ul>';        
            $config['first_link'] = 'First';        
            $config['last_link'] = 'Last';        
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
            $data['alldispersal'] = $this->Dispersal_model->get_authors1($config["per_page"], $page);
            $data['allmessages'] = $this->Contact_model->get_all_messages();
            $data['mtotal'] = count($data['allmessages']);
            $data['dtotal'] = count($data['alldispersal']);
            $this->load->view('Admin/header');
            $this->load->view('Admin/navbar',$data);
            $this->load->view('Admin/sidebar',$data);
            $this->load->view('Dispersal/'.$pages, $data);
            $this->load->view('Admin/footer');
        }else{
            redirect(base_url());
        }
        
    }
    public function duedispersal(){

        if ($this->session->logged_in == true && $this->session->access == 'admin' ){
            $pages = "duedispersal"; 

            if(!file_exists(APPPATH.'views/Dispersal/'.$pages.'.php')){
                show_404();
            }
            $config = array();
            $config["base_url"] = base_url() . "Dispersal-Due";
            $config["total_rows"] = $this->Dispersal_model->get_count();
            $config["per_page"] = 12;
            $config["uri_segment"] = 2;
            $config['full_tag_open'] = '<ul class="pagination generic-pagination justify-content-center">';        
            $config['full_tag_close'] = '</ul>';        
            $config['first_link'] = 'First';        
            $config['last_link'] = 'Last';        
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
            $data['alldispersal'] = $this->Dispersal_model->get_authors($config["per_page"], $page);
            $data['allmessages'] = $this->Contact_model->get_all_messages();
            $data['mtotal'] = count($data['allmessages']);
            //$data['alldispersal'] = $this->Dispersal_model->get_all_dispersaldue();
            $data['dtotal'] = count($data['alldispersal']);
            $this->load->view('Admin/header');
            $this->load->view('Admin/navbar',$data);
            $this->load->view('Admin/sidebar',$data);
            $this->load->view('Dispersal/'.$pages, $data);
            $this->load->view('Admin/footer');
        }else{
            redirect(base_url());
        }
        
    }
    public function duetoday(){

        if ($this->session->logged_in == true && $this->session->access == 'admin' ){
            $pages = "duetoday"; 

            if(!file_exists(APPPATH.'views/Dispersal/'.$pages.'.php')){
                show_404();
            }
            $config = array();
            $config["base_url"] = base_url() . "Dispersal-Today";
            $config["total_rows"] = $this->Dispersal_model->getdispersalcount_today();
            $config["per_page"] = 12;
            $config["uri_segment"] = 2;
            $config['full_tag_open'] = '<ul class="pagination generic-pagination justify-content-center">';        
            $config['full_tag_close'] = '</ul>';        
            $config['first_link'] = 'First';        
            $config['last_link'] = 'Last';        
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
            $data['alldispersal'] = $this->Dispersal_model->dispersaldue_today($config["per_page"], $page);

            $data['allmessages'] = $this->Contact_model->get_all_messages();
            $data['mtotal'] = count($data['allmessages']);
            //$data['alldispersal'] = $this->Dispersal_model->get_all_dispersaldue();
            $data['dtotal'] = count($data['alldispersal']);
            $this->load->view('Admin/header');
            $this->load->view('Admin/navbar',$data);
            $this->load->view('Admin/sidebar',$data);
            $this->load->view('Dispersal/'.$pages, $data);
            $this->load->view('Admin/footer');
        }else{
            redirect(base_url());
        }
        
    }

    public function dispersalmodel2(){

        if ($this->session->logged_in == true && $this->session->access == 'admin' ){
            $page = "dispersalmonitor"; 

            if(!file_exists(APPPATH.'views/Dispersal/'.$page.'.php')){
                show_404();
            }
            $data['allmessages'] = $this->Contact_model->get_all_messages();
            $data['mtotal'] = count($data['allmessages']);

        
            $data['alldispersal1'] = $this->Dispersal_model->get_all_dispersal1();
            $data['dtotal'] = count($data['alldispersal1']);
            $this->load->view('templates/header');
            $this->load->view('templates/navbar', $data);
            $this->load->view('templates/sidebar');
            $this->load->view('Dispersal/'.$page);
            $this->load->view('templates/footer');
        }else{
            redirect(base_url());
        }
        
    }
    public function dispersalmodel3(){

        if ($this->session->logged_in == true && $this->session->access == 'admin' ){
            $page = "dispersalall"; 

            if(!file_exists(APPPATH.'views/Dispersal/'.$page.'.php')){
                show_404();
            }
            $data['allmessages'] = $this->Contact_model->get_all_messages();
            $data['mtotal'] = count($data['allmessages']);
            $data['alldispersal1'] = $this->Dispersal_model->get_all_dispersal1();
            $data['dtotal'] = count($data['alldispersal1']);
            $this->load->view('Admin/header');
            $this->load->view('Admin/navbar',$data);
            $this->load->view('Admin/sidebar',$data);
            $this->load->view('Dispersal/'.$page, $data);
            $this->load->view('Admin/footer');
            
        }else{
            redirect(base_url());
        }
        
    }

    public function pendingconsultation(){

        if ($this->session->logged_in == true && $this->session->access =='admin') {
            $page = "consultation"; 

            if(!file_exists(APPPATH.'views/Dispersal/'.$page.'.php')){
                show_404();
            }
            $data['allmessages'] = $this->Contact_model->get_all_messages();
            $data['mtotal'] = count($data['allmessages']);
            $data['alldispersalconsultation'] = $this->Dispersal_model->pendingconsultation();
            $this->load->view('Admin/header');
            $this->load->view('Admin/navbar',$data);
            $this->load->view('Admin/sidebar',$data);
            $this->load->view('Dispersal/'.$page, $data);
            $this->load->view('Admin/footer');
        }
    }
    public function consultation_update()
    {
        $id = $this->input->post('id');
        $email = $this->input->post('email');
        $stat = $this->input->post('status');
            $query = $this->Dispersal_model->consult_update($id);
                if ($query) {
                    if($stat == 0){
                        $from_email = "dept.of.agriculture.polaormin@gmail.com"; 
            			$to_email = 'marcandrei.gobison@gmail.com';
            			$subject = "Dispersal Appointment Slip";   
            	
            			//Load email library 
            			$this->load->library('email'); 
            	
            			$this->email->from($from_email, 'Municipal Agriculture Office- Pola'); 
            			$this->email->to($to_email);
            			$this->email->subject($subject);
            			
            			$this->email->message("<p>Hi, $email</p>
            			<p>Please Use the attached appointment slip when you visit Municipal Agriculture Office - Pola for the Animal Dispersal Consultation</p>
            			"); 
            			$this->email->attach(base_url().'assets/upload/output/'.$email.'-appointmentslip.pdf');
            		   	$send = $this->email->send();
            			if($send){
            				unlink(FCPATH . '/assets/upload/output/'."$email".'-appointmentslip.pdf');
            			}
                    }
                    $this->session->set_tempdata('user_success','Consultation Status Updated',3);
                    redirect('Pending-Consultation');
                }else{
                    $this->session->set_tempdata('user_failed','Failed to Update Status',3);
                    redirect('Pending-Consultation');
                }
    }
    public function ongoingconsultation(){

        if ($this->session->logged_in == true && $this->session->access =='admin') {
            $page = "ongoing"; 

            if(!file_exists(APPPATH.'views/Dispersal/'.$page.'.php')){
                show_404();
            }
            $data['allmessages'] = $this->Contact_model->get_all_messages();
            $data['mtotal'] = count($data['allmessages']);
            $data['alldispersalconsultation'] = $this->Dispersal_model->ongoingconsultation();
            $this->load->view('Admin/header');
            $this->load->view('Admin/navbar',$data);
            $this->load->view('Admin/sidebar',$data);
            $this->load->view('Dispersal/'.$page, $data);
            $this->load->view('Admin/footer');
        }
    }
    public function consultation_update_ongoing(){
        $id = $this->input->post('id');
            $query = $this->Dispersal_model->consult_update($id);
                if ($query) {
                    $this->session->set_tempdata('user_success','Consultation Status Updated',3);
                    redirect('Ongoing-Consultation');
                }else{
                    $this->session->set_tempdata('user_failed','Failed to Update Status',3);
                    redirect('Ongoing-Consultation');
                }
    }
    public function acceptedconsultation(){

        if ($this->session->logged_in == true && $this->session->access =='admin') {
            $page = "accepted"; 

            if(!file_exists(APPPATH.'views/Dispersal/'.$page.'.php')){
                show_404();
            }
            $data['allmessages'] = $this->Contact_model->get_all_messages();
            $data['mtotal'] = count($data['allmessages']);
            $data['alldispersalconsultation'] = $this->Dispersal_model->acceptedconsultation();
            $this->load->view('Admin/header');
            $this->load->view('Admin/navbar',$data);
            $this->load->view('Admin/sidebar',$data);
            $this->load->view('Dispersal/'.$page, $data);
            $this->load->view('Admin/footer');
        }
    }
    public function consultation_update_accepted()
    {
        $id = $this->input->post('id');
        
            $query = $this->Dispersal_model->consult_update($id);
                if ($query) {
                    
                    $this->session->set_tempdata('user_success','Consultation Status Accepted',3);
                    redirect('Accepted-Consultation');
                }else{
                    $this->session->set_tempdata('user_failed','Failed to Update Status',3);
                    redirect('Accepted-Consultation');
                }
    }

    public function addmonitor()
    {
        if ($this->session->logged_in == true && $this->session->access =='admin') {
            $datadates = $this->Dispersal_model->animaldates();
            foreach($datadates as $row){
                if($row['animaltype'] == 'Cow'){
                    $cow = $row['days'];
                }
                elseif($row['animaltype'] == 'Carabao'){
                    $carabao = $row['days'];
                }
                elseif($row['animaltype'] == 'Goat'){
                    $goat = $row['days'];
                }
                elseif($row['animaltype'] == 'Pig'){
                    $pig = $row['days'];
                }
            }
            // $cow = '283';
            // $carabao = '320';
            // $goat = '150';
            // $pig =  '115';
            $type = $this->input->post('type');
            if ($type == 'cow') {
                echo $add = $cow;
            }else if ($type == 'carabao') {
                echo $add = $carabao;
            }else if ($type == 'goat') {
                echo $add = $goat;
            }else if ($type == 'pig') {
                echo $add = $pig;
            }
             $data = array(
            'type' => $this->input->post('type'),
            'exposed' => $this->input->post('exposed'),     
            'firstcalving' => $this->input->post('firstcalving'),

            'calvingstart' => date('Y-m-d', strtotime($this->input->post('exposed').  '+ '.$add.' day')),
            'owner' => $this->input->post('owner'),
            'address' => $this->input->post('address'),
            'email' => $this->input->post('email'),
            'contact' => $this->input->post('contact'),
            
        );
            $chkadd =  $this->Dispersal_model->dmonitoradd($data);
            if ($chkadd) {
                $this->session->set_tempdata('user_success','Animal Ready for Monitoring',2);
            redirect('Dispersal-Monitoring');
        }else{
            $this->session->set_tempdata('user_failed','Failed to Add Animal for Monitoring',2);
            redirect('Dispersal-Monitoring');
        }
        }
    }
    public function deletemonitor($id)
    {
        $chkdel =  $this->Dispersal_model->deletemonitor($id);
            if ($chkdel) {
                $this->session->set_tempdata('user_success','Record Deleted',2);
            redirect('Dispersal-Monitoring');
        }else{
            $this->session->set_tempdata('user_failed','Failed to Delete Record',2);
            redirect('Dispersal-Monitoring');
        }
    }
    public function updatemonitor($id)
    {
        if ($this->session->logged_in == true && $this->session->access =='admin') {
            $datadates = $this->Dispersal_model->animaldates();
            foreach($datadates as $row){
                if($row['animaltype'] == 'Cow'){
                    $cow = $row['days'];
                }
                elseif($row['animaltype'] == 'Carabao'){
                    $carabao = $row['days'];
                }
                elseif($row['animaltype'] == 'Goat'){
                    $goat = $row['days'];
                }
                elseif($row['animaltype'] == 'Pig'){
                    $pig = $row['days'];
                }
            }
            // $cow = '283';
            // $carabao = '320';
            // $goat = '150';
            // $pig =  '115';
            $type = $this->input->post('type');
            if ($type == 'cow') {
                echo $add = $cow;
            }else if ($type == 'carabao') {
                echo $add = $carabao;
            }else if ($type == 'goat') {
                echo $add = $goat;
            }else if ($type == 'pig') {
                echo $add = $pig;
            }
             $data = array(
            'type' => $this->input->post('type'),
            'exposed' => $this->input->post('exposed'),     
            'firstcalving' => $this->input->post('firstcalving'),

            'calvingstart' => date('Y-m-d', strtotime($this->input->post('exposed').  '+ '.$add.' day')),
            'owner' => $this->input->post('owner'),
            'address' => $this->input->post('address'),
            'email' => $this->input->post('email'),
            'contact' => $this->input->post('contact'),
            
        );
            $chkadd =  $this->Dispersal_model->updatemonitor($data, $id);
            if ($chkadd) {
                $this->session->set_tempdata('user_success','Animal Ready for Monitoring',2);
            redirect('Dispersal-Monitoring');
        }else{
            $this->session->set_tempdata('user_failed','Failed to Add Animal for Monitoring',2);
            redirect('Dispersal-Monitoring');
        }
        }
    }
    public function cow(){
        $this->load->view('Dispersal/cow');
    }

    public function dispersalfetchdata($data = NULL, $id = NULL){
        if($data != NULL && $id != NULL){
            $query = $this->Dispersal_model->fetchajaxdata($data, $id);
        }
        redirect('pendingconsultation');
    }
    public function sampledis(){
        $datadates = $this->Dispersal_model->animaldates();
            foreach($datadates as $row){
                if($row['animaltype'] == 'Cow'){
                    $cow = $row['days'];
                    var_dump('Cow ='.$cow);
                }
                elseif($row['animaltype'] == 'Carabao'){
                    $carabao = $row['days'];
                    var_dump('Carabao ='.$carabao);
                }
                elseif($row['animaltype'] == 'Goat'){
                    $goat = $row['days'];
                    var_dump('Goat ='.$goat);
                }
                elseif($row['animaltype'] == 'Pig'){
                    $pig = $row['days'];
                    var_dump('Pig ='.$pig);
                }
            }
    }
    
    public function samplemodel(){
      $data['allmessages'] = $this->Contact_model->get_all_messages();
            $data['mtotal'] = count($data['allmessages']);

        
            $data['alldispersal1'] = $this->Dispersal_model->get_all_dispersal1();
            $data['dtotal'] = count($data['alldispersal1']);
            $this->load->view('templates/header');
            $this->load->view('Dispersal/samplemodel', $data);

    }
    public function notifyemail()
    {
        if ($this->session->logged_in == true && $this->session->access =='admin') {
            $mobileno = $this->input->post('contact');
             $from_email = "dept.of.agriculture.polaormin@gmail.com"; 
             $to_email = $this->input->post('email');
             $subject = $this->input->post('subject'); 
             $message = $this->input->post('message'); 
             //Load email library 
             $this->load->library('email'); 
             $this->email->from($from_email, 'Municipal Agriculture Office - Pola'); 
             $this->email->to($to_email);
             $this->email->subject($subject); 
             $this->email->message("<p>Hi $to_email</p>
                <p>$message</p>
                <p>Best regards,</p>
                <p>Municipal Agriculture Office - Pola</p>"); 
             if($this->email->send()){
                $ch = curl_init();
                $parameters = array(
                    'apikey' => '2f078b916b6bf21f0ef9057205fff57d', //Your API KEY
                    'number' => $mobileno,
                    'message' => 'This is emao-pola sms notification. '.$message,
                    'sendername' => 'SEMAPHORE'
                );
                curl_setopt( $ch, CURLOPT_URL,'https://semaphore.co/api/v4/messages' );
                curl_setopt( $ch, CURLOPT_POST, 1 );
                //Send the parameters set above with the request
                curl_setopt( $ch, CURLOPT_POSTFIELDS, http_build_query( $parameters ) );
                // Receive response from server
                curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
                curl_exec( $ch );
                curl_close ($ch);
                //Show the server response for testing purposes
                //echo $output;
                $this->session->set_tempdata("user_success","Email sent successfully.",2); 
                redirect('Dispersal-Monitoring');
             }else{ 
                $this->session->set_tempdata("user_failed","Error in sending Email.",2); 
                redirect('Dispersal-Monitoring'); 
            }
        }
    }
    public function dispersalsetting(){

        if ($this->session->logged_in == true && $this->session->access =='admin') {
            $page = "dispersalsetting"; 

            if(!file_exists(APPPATH.'views/Admin/'.$page.'.php')){
                show_404();
            }
            $data['allmessages'] = $this->Contact_model->get_all_messages();
            $data['mtotal'] = count($data['allmessages']);
            $data['dispersalperiod'] = $this->Dispersal_model->dispersalperiod();
            $this->load->view('Admin/header');
            $this->load->view('Admin/navbar',$data);
            $this->load->view('Admin/sidebar',$data);
            $this->load->view('Admin/'.$page, $data);
            $this->load->view('Admin/footer');
        }
    }
    public function udpatedispersalperiod($id)
    {
        $chkadd =  $this->Dispersal_model->udpatedispersalperiod($id);
            if ($chkadd) {
                $this->session->set_tempdata('user_success','Dispersal Period Updated',2);
            redirect('Dispersal-Setting');
        }else{
            $this->session->set_tempdata('user_failed','Failed to Update',2);
            redirect('Dispersal-Setting');
        }
    }
}