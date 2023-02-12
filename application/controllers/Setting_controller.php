<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Setting_controller extends CI_Controller {

    public function setting()
    {
        if ($this->session->logged_in === TRUE && $this->session->access === 'admin')
        {
			$page = "setting"; 

			if(!file_exists(APPPATH.'views/Admin/'.$page.'.php')){
				show_404();
				}
                $data['allmessages'] = $this->Contact_model->get_all_messages();
                $data['mtotal'] = count($data['allmessages']);
				$data['about'] = $this->Setting_model->getdata();
				$this->load->view('Admin/header');
				$this->load->view('Admin/navbar',$data);
				$this->load->view('Admin/sidebar',$data);
				$this->load->view('Admin/'.$page, $data);
				$this->load->view('Admin/footer');

        }else{
            redirect(base_url());
        }
    }
    public function update()
    {
        $id = $this->input->post('id');
        $chupdate = $this->Setting_model->update($id);
        if($chupdate){
            $this->session->set_tempdata('user_success','Data Updated!',1);
            redirect('Setting');
        }else{
            $this->session->set_tempdata('user_success','Update Failed!',1);
            redirect('Setting');
        }
    }
    
}