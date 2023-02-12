<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Farmer_controller extends CI_Controller{

	public function farmer()
    {
        if ($this->session->logged_in == true && $this->session->access == 'admin'){
            $page = "farmer"; 

            if(!file_exists(APPPATH.'views/Farmer/'.$page.'.php')){
                show_404();
            }
            $data['farmerlist'] = $this->Farmer_model->farmer_list();
            $data['allmessages'] = $this->Contact_model->get_all_messages();
            $data['mtotal'] = count($data['allmessages']);
            $this->load->view('Admin/header');
            $this->load->view('Admin/navbar',$data);
            $this->load->view('Admin/sidebar');
            $this->load->view('Farmer/'.$page, $data);
            $this->load->view('Admin/footer');
            }else{
                redirect(base_url());
            } 
    }
    public function viewfarmer($param){

        if ($this->session->logged_in == true && $this->session->access == 'admin'){
            $page = "viewfarmer"; 

            if(!file_exists(APPPATH.'views/Farmer/'.$page.'.php')){
                show_404();
            }
            
            $data['view_farmer'] = $this->Farmer_model->farmer_list_view($param);
            $data['lastname'] = $data['view_farmer']['lastname']; 
            $data['firstname'] = $data['view_farmer']['firstname']; 
            $data['midname'] = $data['view_farmer']['midname']; 
            $data['extension'] = $data['view_farmer']['extension'];
            $data['fullname'] = $data['view_farmer']['firstname'].' '.$data['view_farmer']['lastname'].' '.$data['view_farmer']['midname'].' '.$data['view_farmer']['extension'];
            $data['address'] = $data['view_farmer']['address']; 
            $data['farmlocation'] = $data['view_farmer']['farmlocation'];
            $data['contact'] = $data['view_farmer']['contact'];
            // FARMER REFERENCE NO
            $data['regional'] = $data['view_farmer']['regional'];
            $data['provincial'] = $data['view_farmer']['provincial'];
            $data['municipal'] = $data['view_farmer']['municipal'];
            $data['barangay'] = $data['view_farmer']['barangay'];
            $data['farmer'] = $data['view_farmer']['farmer'];
            // FARM DATA
            $data['cornarea'] = $data['view_farmer']['cornarea'];
            $data['ricearea'] = $data['view_farmer']['ricearea'];
            $data['hvcarea'] = $data['view_farmer']['hvcarea'];
            $data['coconutarea'] = $data['view_farmer']['coconutarea'];
            $data['lpcount'] = $data['view_farmer']['lpcount'];
            // END
            $data['birthday'] = $data['view_farmer']['birthday'];
            $data['age'] = $data['view_farmer']['age'];
            $data['sex'] = $data['view_farmer']['sex'];
            $data['remarks'] = $data['view_farmer']['remarks'];
            $data['id'] = $data['view_farmer']['id'];
            // print_r($data);
            $data['allmessages'] = $this->Contact_model->get_all_messages();
            $data['mtotal'] = count($data['allmessages']);
            if ($data['view_farmer']) {
            $this->load->view('Admin/header');
            $this->load->view('Admin/navbar',$data);
            $this->load->view('Admin/sidebar');
            $this->load->view('Farmer/'.$page, $data);
            $this->load->view('Admin/footer');
            }else{
                show_404();
               }
            
            }else{
                redirect(base_url());
            }
    }
    public function editfarmer($param)
    {
        if ($this->session->logged_in == true && $this->session->access == 'admin') {
        $this->form_validation->set_error_delimiters('<div class="text text-danger">','</div>');
        $this->form_validation->set_rules('lastname', 'lastname', 'required');
        $this->form_validation->set_rules('firstname', 'firstname', 'required');
        $this->form_validation->set_rules('midname', 'midname', 'required');
        $this->form_validation->set_rules('address', 'address', 'required');
        
        if($this->form_validation->run() == FALSE){
                $page = "editfarmer"; 

            if(!file_exists(APPPATH.'views/Farmer/'.$page.'.php')){
                show_404();
            }
            
            $data['editfarmer'] = $this->Farmer_model->farmer_list_edit($param);
            $data['lastname'] = $data['editfarmer']['lastname']; 
            $data['firstname'] = $data['editfarmer']['firstname']; 
            $data['midname'] = $data['editfarmer']['midname']; 
            $data['extension'] = $data['editfarmer']['extension'];
            $data['fullname'] = $data['editfarmer']['firstname'].' '.$data['editfarmer']['lastname'].' '.$data['editfarmer']['midname'].' '.$data['editfarmer']['extension'];
            $data['address'] = $data['editfarmer']['address']; 
            $data['farmlocation'] = $data['editfarmer']['farmlocation'];
            $data['contact'] = $data['editfarmer']['contact'];
            // FARMER REFERENCE NO
            $data['regional'] = $data['editfarmer']['regional'];
            $data['provincial'] = $data['editfarmer']['provincial'];
            $data['municipal'] = $data['editfarmer']['municipal'];
            $data['barangay'] = $data['editfarmer']['barangay'];
            $data['farmer'] = $data['editfarmer']['farmer'];
            // FARM DATA
            $data['cornarea'] = $data['editfarmer']['cornarea'];
            $data['ricearea'] = $data['editfarmer']['ricearea'];
            $data['hvcarea'] = $data['editfarmer']['hvcarea'];
            $data['coconutarea'] = $data['editfarmer']['cornarea'];
            $data['lpcount'] = $data['editfarmer']['lpcount'];
            // END
            $data['birthday'] = $data['editfarmer']['birthday'];
            $data['age'] = $data['editfarmer']['age'];
            $data['sex'] = $data['editfarmer']['sex'];

            $data['remarks'] = $data['editfarmer']['remarks'];
            $data['id'] = $data['editfarmer']['id'];
            
            $data['allmessages'] = $this->Contact_model->get_all_messages();
            $data['mtotal'] = count($data['allmessages']);

            $this->load->view('Admin/header');
            $this->load->view('Admin/navbar',$data);
            $this->load->view('Admin/sidebar');
            $this->load->view('Farmer/'.$page, $data);
            $this->load->view('Admin/footer');

            }else{
                
                $chkupdate = $this->Farmer_model->updatefarmer();
                if ($chkupdate == true) {
                    $this->session->set_tempdata('user_success','Farmer Information Updated',1);
                redirect(base_url().'Farmer-Edit/'.$param);
                }else{
                    $this->session->set_tempdata('user_failed','Update Failed',1);
                redirect(base_url().'Farmer-Edit/'.$param);
                }
            }
        }else{
            redirect(base_url());
        }  
    }
    public function addfarmer(){
        $this->form_validation->set_error_delimiters('<div class="text text-danger">','</div>');
        $this->form_validation->set_rules('lastname', 'lastname', 'required');
        $this->form_validation->set_rules('firstname', 'firstname', 'required');
        $this->form_validation->set_rules('midname', 'midname', 'required');
        $this->form_validation->set_rules('address', 'address', 'required');
        $this->form_validation->set_rules('contact', 'contact', 'required');
        
        if ($this->session->logged_in == true && $this->session->access == 'admin') {
            if($this->form_validation->run() == false){

            $page = "addfarmer"; 

            if(!file_exists(APPPATH.'views/Farmer/'.$page.'.php')){
                show_404();
            }
            $data['allmessages'] = $this->Contact_model->get_all_messages();
            $data['mtotal'] = count($data['allmessages']);
                $this->load->view('Admin/header');
                $this->load->view('Admin/navbar',$data);
                $this->load->view('Admin/sidebar');
                $this->load->view('Farmer/'.$page);
                $this->load->view('Admin/footer');

            }else{             
                $chkadd = $this->Farmer_model->insert_farmer();
                if ($chkadd == true) {
                    $this->session->set_tempdata('user_success','Farmer Added',1);
                redirect('Farmer-Profiling');
                }else{
                    $this->session->set_tempdata('user_failed','Insert Failed',1);
                redirect('Farmer-Profiling');
                }
            }
        }else{
            redirect(base_url());
        }

    }
    public function print($param)
    {
        if ($this->session->logged_in == true && $this->session->access == 'admin') {
        $page = "print"; 

            if(!file_exists(APPPATH.'views/Farmer/'.$page.'.php')){
                show_404();
            }
            $data['view_farmer'] = $this->Farmer_model->farmer_list_view($param);
            $data['lastname'] = $data['view_farmer']['lastname']; 
            $data['firstname'] = $data['view_farmer']['firstname']; 
            $data['midname'] = $data['view_farmer']['midname']; 
            $data['extension'] = $data['view_farmer']['extension'];
            $data['fullname'] = $data['view_farmer']['firstname'].' '.$data['view_farmer']['lastname'].' '.$data['view_farmer']['midname'].' '.$data['view_farmer']['extension'];
            $data['address'] = $data['view_farmer']['address']; 
            $data['farmlocation'] = $data['view_farmer']['farmlocation'];
            $data['contact'] = $data['view_farmer']['contact'];
            // FARMER REFERENCE NO
            $data['regional'] = $data['view_farmer']['regional'];
            $data['provincial'] = $data['view_farmer']['provincial'];
            $data['municipal'] = $data['view_farmer']['municipal'];
            $data['barangay'] = $data['view_farmer']['barangay'];
            $data['farmer'] = $data['view_farmer']['farmer'];
            // FARM DATA
            $data['cornarea'] = $data['view_farmer']['cornarea'];
            $data['ricearea'] = $data['view_farmer']['ricearea'];
            $data['hvcarea'] = $data['view_farmer']['hvcarea'];
            $data['coconutarea'] = $data['view_farmer']['cornarea'];
            $data['lpcount'] = $data['view_farmer']['lpcount'];
            // END
            $data['birthday'] = $data['view_farmer']['birthday'];
            $data['age'] = $data['view_farmer']['age'];
            $data['sex'] = $data['view_farmer']['sex'];

            $data['remarks'] = $data['view_farmer']['remarks'];
            $data['id'] = $data['view_farmer']['id'];
            $this->load->view('Admin/header');
            $this->load->view('Farmer/'.$page,$data);
        }else{
            redirect(base_url());
        } 
                
                
             
    }

}

