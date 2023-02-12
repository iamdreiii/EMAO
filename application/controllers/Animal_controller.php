<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Animal_controller extends CI_Controller {

    public function animalhealthtips()
    {
        if ($this->session->logged_in == true && $this->session->access == 'admin') {
                $page = "animalhealthtips"; 
        
                if(!file_exists(APPPATH.'views/Animal/'.$page.'.php')){
                    show_404();
                }
               
                $data['tips'] = $this->Animal_model->get_all_tips();
                $data['ahtotal'] = count($data['tips']);
                $data['allmessages'] = $this->Contact_model->get_all_messages();
                $data['mtotal'] = count($data['allmessages']);
                //print_r($data['headd']);
                $data['aht'] = $this->Animal_model->get_all_tips();
                $this->load->view('Admin/header');
                $this->load->view('Admin/navbar',$data);
                $this->load->view('Admin/sidebar');
                $this->load->view('Animal/'.$page, $data);
                $this->load->view('Admin/footer');
        }
    }
    public function insert(){
        $ahtadd = $this->Animal_model->aht_insert();
            if ($ahtadd) {
                $this->session->set_tempdata('user_success','Health Tip Information Added',1);
            redirect('Animal-Tips-List');
            }else{
                $this->session->set_tempdata('user_failed','Failed To Insert Health Tip!',1);
            redirect('Animal-Tips-List');
            }
    }
    public function update(){
        $chktip = $this->Animal_model->update_tip();
            if ($chktip) {
                $this->session->set_tempdata('user_success','Health Tip Information Updated!',1);
                redirect('Animal-Tips-List');
            }else{
                $this->session->set_tempdata('user_failed','Failed To Update Health Tip!',1);
            redirect('Animal-Tips-List');
            }
    }
    public function delete(){
        $chktip = $this->Animal_model->delete_tip();
            if ($chktip === TRUE) {
                $this->session->set_tempdata('user_success','Health Tip Deleted!',1);
                redirect('Animal-Tips-List');
            }else{
                $this->session->set_tempdata('user_failed','Failed To Delete Health Tip!',1);
            redirect('Animal-Tips-List');
            }
    }
}