<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vaccination_controller extends CI_Controller
{
	public function vaccination()
    {
        $this->load->library('form_validation');
        if ($this->session->logged_in == true && $this->session->access == 'admin'){
         
            $page = "vaccination"; 
            if(!file_exists(APPPATH.'views/Vaccination/'.$page.'.php')){
                show_404();
            }
            $data['allmessages'] = $this->Contact_model->get_all_messages();
            $data['mtotal'] = count($data['allmessages']);
            $data['allsched'] = $this->Vaccination_model->allsched();
            $this->load->view('Admin/header');
            $this->load->view('Admin/navbar',$data);
            $this->load->view('Admin/sidebar',$data);
            $this->load->view('Vaccination/'.$page, $data);
            $this->load->view('Admin/footer'); 
        }else{
            redirect(base_url());
        }
    }
    public function sh()
    {
         $chkemail =  $this->Vaccination_model->fetchuseremail();
            foreach($chkemail as $row)
            {
                    $title =  strtoupper($this->input->post('title'));
                    $desc =  $this->input->post('description');
                    $start = date('M d, Y h:i A', strtotime($this->input->post('start_datetime')));
                    $end =  date('M d, Y h:i A', strtotime($this->input->post('end_datetime')));
                    $email = implode(',', Array($row['email']));
                    $name = implode(',', Array($row['username']));
                    $this->load->library('email'); 
                    $this->email->from('municipalagricultureoffice.pola@gmail.com', 'Municipal Agriculture Office - Pola'); 
                    $this->email->bcc($email);
                    $this->email->subject('Event Reminder'); 
                    $this->email->message("<p>Hello $name,<p>
                    <p>This is an event reminder from Municipal Agriculture Office - Pola.</p>
                    <p>WHAT : $title</p>
                    <p>DESCRIPTION : $desc</p>
                    <p>WHEN : $start to $end</p>"); 
                    $emailsent = $this->email->send();
                    if($emailsent && $this->Vaccination_model->postsched()){
                        $this->session->set_tempdata('user_success','Schedule Posted',3);
                        redirect('CalendarAdmin');
                    }else{
                        $this->session->set_tempdata('user_failed','Failed to Post Schedule',3);
                        redirect('CalendarAdmin');
                    }
                
            }
    }
    public function addsched()
    {
        $chkemail =  $this->Vaccination_model->fetchuseremail();
        $emails = array();
        $names = array();
        foreach ($chkemail as $row) {
            $emails[] = $row->email;
            $names[] = $row->username;
        }
        foreach($chkemail as  $row)
        {
                $title =  strtoupper($this->input->post('title'));
                $desc =  $this->input->post('description');
                $start = date('M d, Y h:i A', strtotime($this->input->post('start_datetime')));
                $end =  date('M d, Y h:i A', strtotime($this->input->post('end_datetime')));
                $email = implode(',', $emails);
                $name = implode(',', $names);
                $this->load->library('email'); 
                $this->email->from('municipalagricultureoffice.pola@gmail.com', 'Municipal Agriculture Office - Pola'); 
                $this->email->bcc($email);
                $this->email->subject('Event Reminder'); 
                $this->email->message("<p>Hello,<p>
                <p>This is an event reminder from Municipal Agriculture Office - Pola.</p>
                <p>WHAT : $title</p>
                <p>DESCRIPTION : $desc</p>
                <p>WHEN : $start to $end</p>"); 
                $emailsent = $this->email->send();
                if($emailsent && $this->Vaccination_model->postsched()){
                    $this->session->set_tempdata('user_success','Schedule Posted',3);
                    redirect('CalendarAdmin');
                }else{
                    $this->session->set_tempdata('user_failed','Failed to Post Schedule',3);
                    redirect('CalendarAdmin');
                }
            
        }
        
    }
    public function sched_remove($id)
    {
        if ($this->session->logged_in == true && $this->session->access == 'admin') {
            
                $chkdelete = $this->Vaccination_model->sched_remove($id);
                if ($chkdelete) {
                    $this->session->set_tempdata('user_success','Schedule Deleted',3);
                    redirect('CalendarAdmin');
                }else{
                    $this->session->set_tempdata('user_failed','Failed to Delete Schedule',3);
                    redirect('CalendarAdmin');
                }
        }else{
            redirect(base_url());
        }
    }

    public function updatesched()
    {
        if ($this->session->logged_in == true && $this->session->access == 'admin') {
            $id = $this->input->post('id');
            $data['title'] = $this->input->post('title');
            $data['description'] = $this->input->post('description');
            $data['start_datetime'] = $this->input->post('start_datetime');
            $data['end_datetime'] = $this->input->post('end_datetime');

            $query = $this->Vaccination_model->schedupdate($data, $id);
                if ($query) {
                    $this->session->set_tempdata('user_success','Schedule Updated',3);
                    redirect('CalendarAdmin');
                }else{
                    $this->session->set_tempdata('user_failed','Failed to Update Schedule',3);
                    redirect('CalendarAdmin');
                }
            }else{
                redirect(base_url());
            }
        
    }
}