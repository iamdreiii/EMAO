<?php

class Faq_controller extends CI_Controller{

    public function __construct()
	{
		parent::__construct();
		$this->load->model('Faq_model');
	}
    public function faqsadmin(){
        if ($this->session->logged_in == true && $this->session->access == 'admin'){
            $page = "faq-dash"; 

            if(!file_exists(APPPATH.'views/FAQ/'.$page.'.php')){
                show_404();
            }
            $data['allmessages'] = $this->Contact_model->get_all_messages();
            $data['mtotal'] = count($data['allmessages']);
            $data['faqs'] = $this->Faq_model->fetchfaq();
            $this->load->view('Admin/header');
            $this->load->view('Admin/navbar',$data);
            $this->load->view('Admin/sidebar',$data);
            $this->load->view('Faq/'.$page, $data);
            $this->load->view('Admin/footer');
        }else{
            redirect(base_url());
        }
    }

	public function faqs(){

		$page = "faq";
		if(!file_exists(APPPATH.'views/FAQ/'.$page.'.php')){
                show_404();
            }
            $data['faqs'] = $this->Faq_model->fetchfaq();
            $this->load->view('home/navbar');
            $this->load->view('FAQ/'.$page, $data);
            $this->load->view('templates/footer');
	}
    public function faqdelete($id){
 
        if ($this->session->logged_in == true && $this->session->access == 'admin') {
            
                $chkdelete = $this->Faq_model->deletefaq($id);
                if ($chkdelete) {
                    $this->session->set_tempdata('user_success','FAQ Deleted',1);
                    redirect('FAQ-Dash');
                }else{
                    $this->session->set_tempdata('user_failed','Failed to Delete FAQ',1);
                    redirect('FAQ-Dash');
                }
        }
    }
    public function faqadd(){
 
        if ($this->session->logged_in == true && $this->session->access == 'admin') {
                //POST DATA FROM CATEGORY MODAL
                
                $chkinsert = $this->Faq_model->addfaq();
                if ($chkinsert) {
                    $this->session->set_tempdata('user_success','FAQ Created',1);
                    redirect('FAQ-Dash');
                }else{
                    $this->session->set_tempdata('user_failed','Failed to Create FAQ',1);
                    redirect('FAQ-Dash');
                }
        }
    }
    public function updatefaq(){
 
        if ($this->session->logged_in == true && $this->session->access == 'admin') {
                
                
                $chkinsert = $this->Faq_model->updatefaq();
                if ($chkinsert) {
                    $this->session->set_tempdata('user_success','FAQ Updated',1);
                    redirect('FAQ-Dash');
                }else{
                    $this->session->set_tempdata('user_failed','Failed to Update FAQ',1);
                    redirect('FAQ-Dash');
                }
        }
    }
    

}