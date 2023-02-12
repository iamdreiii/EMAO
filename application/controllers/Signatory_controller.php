<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signatory_controller extends CI_Controller{

	public function signatory(){
        if ($this->session->logged_in == true && $this->session->access == 'admin'){
            $page = "signatory"; 

            if(!file_exists(APPPATH.'views/Signatory/'.$page.'.php')){
                show_404();
            }
            $data['allmessages'] = $this->Contact_model->get_all_messages();
            $data['mtotal'] = count($data['allmessages']);
            $data['signatory'] = $this->Signatory_model->fetchsignatory();
            $this->load->view('Admin/header');
            $this->load->view('Admin/navbar',$data);
            $this->load->view('Admin/sidebar',$data);
            $this->load->view('Signatory/'.$page, $data);
            $this->load->view('Admin/footer');
        }else{
            redirect(base_url());
        }
    }
    public function signatorydelete($id){
 
        if ($this->session->logged_in == true && $this->session->access == 'admin') {
            
                $chkdelete = $this->Signatory_model->signatorydelete($id);
                if ($chkdelete) {
                    $this->session->set_tempdata('user_success','Signatory Deleted',1);
                    redirect('signatory');
                }else{
                    $this->session->set_tempdata('user_failed','Failed to Delete Signatoy',1);
                    redirect('signatory');
                }
        }
    }
    public function signatoryadd(){
 
        if ($this->session->logged_in == true && $this->session->access == 'admin') {
                
                $chkinsert = $this->Signatory_model->signatoryadd();
                if ($chkinsert) {
                    $this->session->set_tempdata('user_success','Signatory Added',1);
                    redirect('signatory');
                }else{
                    $this->session->set_tempdata('user_failed','Failed to Add Signatory',1);
                    redirect('signatory');
                }
        }
    }
    public function signatoryupdate(){
 
        if ($this->session->logged_in == true && $this->session->access == 'admin') {
                
                
                $chkinsert = $this->Signatory_model->signatoryupdate();
                if ($chkinsert) {
                    $this->session->set_tempdata('user_success','Signatory Updated',1);
                    redirect('signatory');
                }else{
                    $this->session->set_tempdata('user_failed','Failed to Update Signatory',1);
                    redirect('signatory');
                }
        }
    }
}