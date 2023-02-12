<?php

class PetCategory_controller extends CI_Controller{
    public function __construct() 
    {
      parent::__construct();
      $this->load->helper('url', 'form');
    }
    public function petcategory(){
        if ($this->session->logged_in == true && $this->session->access == 'admin'){
            $page = "petcategory"; 

            if(!file_exists(APPPATH.'views/PetCategory/'.$page.'.php')){
                show_404();
            }
            $data['allmessages'] = $this->Contact_model->get_all_messages();
            $data['mtotal'] = count($data['allmessages']);
            $data['petcategory'] = $this->PetCategory_model->fetchcategory();
            $this->load->view('Admin/header');
            $this->load->view('Admin/navbar',$data);
            $this->load->view('Admin/sidebar',$data);
            $this->load->view('PetCategory/'.$page, $data);
            $this->load->view('Admin/footer');
        }else{
            redirect(base_url());
        }
    }
    public function petsubcategory(){
        if ($this->session->logged_in == true && $this->session->access == 'admin'){
            $page = "petsubcategory"; 

            if(!file_exists(APPPATH.'views/PetCategory/'.$page.'.php')){
                show_404();
            }
            $data['allmessages'] = $this->Contact_model->get_all_messages();
            $data['mtotal'] = count($data['allmessages']);
            $data['petsubcategory'] = $this->PetCategory_model->fetchsubcategory();
            $data['petcategory'] = $this->PetCategory_model->fetchcategory();
            $this->load->view('Admin/header');
            $this->load->view('Admin/navbar',$data);
            $this->load->view('Admin/sidebar',$data);
            $this->load->view('PetCategory/'.$page, $data);
            $this->load->view('Admin/footer');
        }else{
            redirect(base_url());
        }
    }
    public function categorydelete($cat_id){
        if ($this->session->logged_in == true && $this->session->access == 'admin') {
            
                $chkdelete = $this->PetCategory_model->categorydelete($cat_id);
                if ($chkdelete) {
                    $this->session->set_tempdata('user_success','Category Deleted',1);
                    redirect('petcategory');
                }else{
                    $this->session->set_tempdata('user_failed','Failed to Delete Category',1);
                    redirect('petcategory');
                }
        }
    }
    public function subcategorydelete($id){
 
        if ($this->session->logged_in == true && $this->session->access == 'admin') {
            
                $chkdelete = $this->PetCategory_model->subcategorydelete($id);
                if ($chkdelete) {
                    $this->session->set_tempdata('user_success','Breed Deleted',1);
                    redirect('petsubcategory');
                }else{
                    $this->session->set_tempdata('user_failed','Failed to Delete Breed',1);
                    redirect('petsubcategory');
                }
        }
    }
    public function categoryadd(){
 
        if ($this->session->logged_in == true && $this->session->access == 'admin') {
                
                $chkinsert = $this->PetCategory_model->categoryadd();
                if ($chkinsert) {
                    $this->session->set_tempdata('user_success','Category Added',1);
                    redirect('petcategory');
                }else{
                    $this->session->set_tempdata('user_failed','Failed to Add Category',1);
                    redirect('petcategory');
                }
        }
    }
    public function subcategoryadd(){
 
        if ($this->session->logged_in == true && $this->session->access == 'admin') {
                
                $chkinsert = $this->PetCategory_model->subcategoryadd();
                if ($chkinsert) {
                    $this->session->set_tempdata('user_success','New Breed Added',1);
                    redirect('petsubcategory');
                }else{
                    $this->session->set_tempdata('user_failed','Failed to Add Breed',1);
                    redirect('petsubcategory');
                }
        }
    }
    public function categoryupdate($cat_id){
 
        if ($this->session->logged_in == true && $this->session->access == 'admin') {
                
                
                $chkinsert = $this->PetCategory_model->categoryupdate($cat_id);
                if ($chkinsert) {
                    $this->session->set_tempdata('user_success','Category Updated',1);
                    redirect('petcategory');
                }else{
                    $this->session->set_tempdata('user_failed','Failed to Update Category',1);
                    redirect('petcategory');
                }
        }
    }
    public function subcategoryupdate($id){
 
        if ($this->session->logged_in == true && $this->session->access == 'admin') {
                
                
                $chkup = $this->PetCategory_model->subcategoryupdate($id);
                if ($chkup) {
                    $this->session->set_tempdata('user_success','Breed Updated',1);
                    redirect('petsubcategory');
                }else{
                    $this->session->set_tempdata('user_failed','Failed to Update Breed',1);
                    redirect('petsubcategory');
                }
        }
    }
}