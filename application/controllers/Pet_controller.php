<?php

class Pet_controller extends CI_Controller{
    public function __construct() 
    {
      parent::__construct();
      $this->load->helper('url', 'form');
    }
    public function pets(){

        if ($this->session->logged_in == true && $this->session->access == 'admin' ){
            $page = "pet"; 

            if(!file_exists(APPPATH.'views/Pet/'.$page.'.php')){
                show_404();
            }
            $data['allmessages'] = $this->Contact_model->get_all_messages();
            $data['mtotal'] = count($data['allmessages']);
            $data['allpet'] = $this->Pet_model->get_all_pet();
            $this->load->view('Admin/header');
            $this->load->view('Admin/navbar',$data);
            $this->load->view('Admin/sidebar');
            $this->load->view('Pet/'.$page, $data);
            $this->load->view('Admin/footer');
        }else{
            redirect(base_url());
        }
        
    }
    public function userpet(){
        
        if ($this->session->logged_in == true && $this->session->access == 'user' ){
            $page = "userpet"; 

            if(!file_exists(APPPATH.'views/pet/'.$page.'.php')){
                show_404();
            }
            $data['user'] = $this->User_model->getuser();
            $data['category'] = $this->Pet_model->getcategory();
            $data['allmessages'] = $this->Contact_model->get_all_messages();
            $data['mtotal'] = count($data['allmessages']);
            $data['allpet'] = $this->Pet_model->get_user_pet();
            $this->load->view('Admin/header');
            $this->load->view('Admin/navbar',$data);
            $this->load->view('Admin/sidebar');
            $this->load->view('pet/'.$page, $data);
            $this->load->view('Admin/footer');
        }else{
            redirect(base_url());
        }
    }
    public function getsubcategory(){ 
        // POST data 
        $postData = $this->input->post();
        // get data 
        $data = $this->Pet_model->getsubcategory($postData);
        echo json_encode($data); 
    }

    public function userpetid($id=null){

    if ($this->session->logged_in == true && $this->session->access == 'user' ){
            $page = "userpet_history"; 

            if(!file_exists(APPPATH.'views/User/'.$page.'.php')){
                show_404();
            }
            $data['user'] = $this->User_model->getuser();
            
            $data['allmessages'] = $this->Contact_model->get_all_messages();
            $data['mtotal'] = count($data['allmessages']);
            
            $data['allpets']  = $this->Pet_model->get_user_pet_per_id($id);
            $data['pethistoryid']  = $this->Pet_model->get_pethistoryid($id);
            $data['viewpetid'] = $this->Pet_model->get_user_petid($id);
            $this->load->view('Home/header', $data);
            $this->load->view('User/'.$page, $data);
            $this->load->view('Home/footer');
        }else{
            redirect(base_url());
        }
    }
    public function pethistoryadd()
    {
        if ($this->session->logged_in == true && $this->session->access == 'user' ) {
            $id = $this->input->post('id');
            $data = $this->input->post('id');
            $data = $this->input->post('vaccine');
            $data = $this->input->post('date');

            $chkpet = $this->Pet_model->updatepethistory($data);
                if ($chkpet) {
                    $this->session->set_tempdata('user_success','Vaccine History Updated',1);
                redirect('Fetch-Pet-Vaccine-History/'.$id);
                }else{
                    $this->session->set_tempdata('user_failed','Update Failed',1);
                redirect('Fetch-Pet-Vaccine-History/'.$id);
                }
        }
    }


    public function viewpet($param){

        if ($this->session->logged_in == true && $this->session->access == 'admin'){
            $page = "view_pet"; 

            if(!file_exists(APPPATH.'views/pet/'.$page.'.php')){
                show_404();
            }
            
            $data['petinfo'] = $this->Pet_model->get_pet_view($param);
            $data['name'] = $data['petinfo']['name']; 
            
            $data['type'] = $data['petinfo']['type']; 
            $data['birthdate'] = $data['petinfo']['birthdate'];
            $data['breed'] = $data['petinfo']['breed'];
            $data['sex'] = $data['petinfo']['sex'];
            $data['sterilization'] = $data['petinfo']['sterilization'];
            $data['vaccination'] = $data['petinfo']['vaccination'];
            $data['color'] = $data['petinfo']['color'];
            $data['size'] = $data['petinfo']['size'];
            $data['description'] = $data['petinfo']['description'];
            $data['owner'] = $data['petinfo']['owner'];
            $data['last_name'] = $data['petinfo']['last_name'];
            $data['first_name'] = $data['petinfo']['first_name'];
            $data['mid_name'] = $data['petinfo']['mid_name'];
          
            
            $data['id'] = $data['petinfo']['id'];
            // print_r($data);
            
            $data['allmessages'] = $this->Contact_model->get_all_messages();
            $data['mtotal'] = count($data['allmessages']);

            if ($data['petinfo']) {
                $this->load->view('Admin/header');
                $this->load->view('Admin/navbar',$data);
                $this->load->view('Admin/sidebar');
                $this->load->view('pet/'.$page, $data);
                $this->load->view('Admin/footer');
            }else{
                show_404();
               }
            
            }else{
                redirect(base_url());
            }
    }

    public function editpet($param){

        $this->form_validation->set_error_delimiters('<div class="text text-danger">','</div>');
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('breed', 'Breed', 'required');
        $this->form_validation->set_rules('color', 'Color', 'required');
        $this->form_validation->set_rules('description', 'Description', 'required');
        
        if($this->form_validation->run() == FALSE){
                $page = "edit_pet"; 

            if(!file_exists(APPPATH.'views/Pet/'.$page.'.php')){
                show_404();
            }
            $data['petinfo'] = $this->Pet_model->get_pet_edit($param);
            $data['name'] = $data['petinfo']['name']; 
            $data['type'] = $data['petinfo']['type']; 
            $data['birthdate'] = $data['petinfo']['birthdate'];
            $data['breed'] = $data['petinfo']['breed'];
            $data['sex'] = $data['petinfo']['sex'];
            $data['sterilization'] = $data['petinfo']['sterilization'];
            $data['vaccination'] = $data['petinfo']['vaccination'];
            $data['color'] = $data['petinfo']['color'];
            $data['size'] = $data['petinfo']['size'];
            $data['description'] = $data['petinfo']['description'];
            $data['status'] = $data['petinfo']['status'];
            $data['owner'] = $data['petinfo']['owner'];
            $data['id'] = $data['petinfo']['id'];
            
            $data['allmessages'] = $this->Contact_model->get_all_messages();
            $data['mtotal'] = count($data['allmessages']);
            $data['category'] = $this->Pet_model->getcategory();
            $this->load->view('Admin/header');
            $this->load->view('Admin/navbar',$data);
            $this->load->view('Admin/sidebar');
            $this->load->view('Pet/'.$page, $data);
            $this->load->view('Admin/footer');

            }else{
                
                $chkpet = $this->Pet_model->updatepet();
                if ($chkpet) {
                    $this->session->set_tempdata('pet_updated','Pet Information Updated',3);
                redirect(base_url().'viewpet/'.$param);
                }else{
                    $this->session->set_tempdata('pet_failed','Update Failed',3);
                redirect(base_url().'viewpet/'.$param);
                }
            }
    }
    
    public function addpet()
    {
        $this->form_validation->set_error_delimiters('<div class="text text-danger">','</div>');
        $this->form_validation->set_rules('name', 'name', 'required');
        $this->form_validation->set_rules('sex', 'sex', 'required');
        $this->form_validation->set_rules('breed', 'breed', 'required');
        $this->form_validation->set_rules('type', 'type', 'required');
        $this->form_validation->set_rules('color', 'color', 'required');
        $this->form_validation->set_rules('sterilization', 'sterilization', 'required');
        $this->form_validation->set_rules('vaccination', 'vaccination', 'required');
        $this->form_validation->set_rules('description', 'description', 'required');
        
        if($this->form_validation->run() == FALSE){
                $page = "add_pet"; 

            if(!file_exists(APPPATH.'views/Pet/'.$page.'.php')){
                show_404();
            }

            $data['allmessages'] = $this->Contact_model->get_all_messages();
            $data['mtotal'] = count($data['allmessages']);
            $data['category'] = $this->Pet_model->getcategory();
            $data['user'] = $this->User_model->getuser();
            $this->load->view('Admin/header');
            $this->load->view('Admin/navbar',$data);
            $this->load->view('Admin/sidebar');
            $this->load->view('Pet/'.$page, $data);
            $this->load->view('Admin/footer');

            }else{
                
                
                $chkpet = $this->Pet_model->addpet();
                if ($chkpet) {
                    $this->session->set_tempdata('pet_added','Pet Information Added',3);
                    if ($this->session->access== 'user') {
                        redirect(base_url().'userpet');
                    }elseif ($this->session->access== 'admin') {
                        redirect(base_url().'pet');
                    }
                }else{
                 $this->session->set_tempdata('pet_failed_add','Insert Failed',3);
                    if ($this->session->access== 'user') {
                        redirect(base_url().'userpet');
                    }elseif ($this->session->access== 'admin') {
                        redirect(base_url().'pet');
                    }
                }

            }
            
            

    }

    function generate_qrcode($data)
    {
        /* Load QR Code Library */
        $this->load->library('ciqrcode');
        
        /* Data */
        $hex_data   = bin2hex($data);
        $save_name  = $hex_data.'.png';

        /* QR Code File Directory Initialize */
        $dir = 'assets/media/qrcode/';
        if (!file_exists($dir)) {
            mkdir($dir, 0775, true);
        }

        /* QR Configuration  */
        $config['cacheable']    = true;
        $config['imagedir']     = $dir;
        $config['quality']      = true;
        $config['size']         = '1024';
        $config['black']        = array(255,255,255);
        $config['white']        = array(255,255,255);
        $this->ciqrcode->initialize($config);
  
        /* QR Data  */
        $params['data']     = $data;
        $params['level']    = 'L';
        $params['size']     = 10;
        $params['savename'] = FCPATH.$config['imagedir']. $save_name;
        
        $this->ciqrcode->generate($params);

        /* Return Data */
        $return = array(
            'content' => $data,
            'file'    => $dir. $save_name
        );
        return $return;
    }

    public function edit_data($id)
    {
        /* Old QR Data */
        $old_data = $this->Qr_model->fetch_data($id);
        $old_file = $old_data['file'];

        /* Generate New QR Code */
        $data = $this->input->post('content');
        $qr   = $this->generate_qrcode($data);

        /* Edit Data */
        if($this->Qr_model->update_data($id, $old_file, $qr)) {
            $this->session->set_tempdata('pet_added','Pet Information Added',3);
        } else {
            $this->session->set_tempdata('pet_failed','Pet Information Deleted',3);
        }
        redirect(base_url().'userpet');
    }

    public function remove_data($id)
    {
        /* Current QR Data */
        $qr_data = $this->Qr_model->fetch_data($id);
        $qr_file = $qr_data['file'];

        /* Delete Data */
        if($this->Qr_model->delete_data($id, $qr_file)) {
            $this->session->set_tempdata('pet_delete', 'Delete Data Success',2);
        }else {
            $this->session->set_tempdata('pet_delete_error','Delete Data Failed', 2);
        }
        redirect(base_url().'userpet');
    }


    public function addmypet()
    {
        $config['upload_path'] = 'assets/useruploads/petprofile/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size'] = 1024 * 10;
        $config['max_width'] = 1024 * 10;
        $config['max_height'] = 1024 * 10;
        $this->load->library('upload', $config);
        $this->upload->do_upload('petimage');
        // if (empty($this->upload->do_upload('petimage'))) {
        //   $error = array('error' => $this->upload->display_errors());
        //   $this->session->set_tempdata('user_failed','Photo Is Empty',2);
        //   redirect('User-Profile');
        // } else {
          
          $updata =  $this->upload->data();
          $data['petimage'] = $updata['file_name'];

          $chkadd = $this->Pet_model->addpet($data);
          if($chkadd){
              $this->session->set_tempdata('user_success','Pet Information Updated',2);
              redirect('User-Profile');
          }

        // }
    }
    public function updatemypet()
    {
        $this->form_validation->set_error_delimiters('<div class="text text-danger">','</div>');
        $this->form_validation->set_rules('name', 'name', 'required');
        $this->form_validation->set_rules('sex', 'sex', 'required');
        $this->form_validation->set_rules('breed', 'breed', 'required');
        $this->form_validation->set_rules('type', 'type', 'required');
        $this->form_validation->set_rules('color', 'color', 'required');
        $this->form_validation->set_rules('sterilization', 'sterilization', 'required');
        $this->form_validation->set_rules('vaccination', 'vaccination', 'required');
        $this->form_validation->set_rules('description', 'description', 'required');
        $config['upload_path'] = 'assets/useruploads/petprofile/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size'] = 1024 * 10;
        $config['max_width'] = 1024 * 10;
        $config['max_height'] = 1024 * 10;
        $this->load->library('upload', $config);

        if (empty($this->upload->do_upload('petimage'))) {
          $error = array('error' => $this->upload->display_errors());
          $this->session->set_tempdata('user_failed','Photo Is Empty',1);
          redirect('User-Profile');
        } else {
          
            $updata =  $this->upload->data();
            $data['petimage'] = $updata['file_name'];
            $query = $this->Pet_model->updatepet($data);
            if ($query == TRUE) {
                $this->session->set_tempdata('user_success','Pet Information Updated',1);
            redirect('User-Profile');
            }else{
                $this->session->set_tempdata('user_failed','Update Failed',1);
            redirect('User-Profile');
            } 
        }
    }
    
}