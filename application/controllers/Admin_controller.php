<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_controller extends CI_Controller{
	
	public function dashboard()
	{
		if ($this->session->logged_in == TRUE && $this->session->access == 'admin'){
			$page = "dashboard"; 

			if(!file_exists(APPPATH.'views/Admin/'.$page.'.php')){
				show_404();
				}
				$data['allfarmer'] = $this->Farmer_model->get_all_farmer();
				$data['ftotal'] = count($data['allfarmer']);
				$data['allpet'] = $this->Pet_model->get_all_pet();
				$data['ptotal'] = count($data['allpet']);
				$data['allvacc'] = $this->Pet_model->vaccinated();
				$data['vtotal'] = count($data['allvacc']);
				$data['alldisp'] = $this->Dispersal_model->dispersalrecords();
				$data['dispersedtotal'] = count($data['alldisp']);
				$data['allmessages'] = $this->Contact_model->get_all_messages();
				$data['mtotal'] = count($data['allmessages']);
				$data['alldispersal'] = $this->Dispersal_model->get_all_limit();
				$data['dtotal'] = count($data['alldispersal']);
				// $data['chart1_data'] = $this->Farmer_model->chart1();
				// $data['chart2_data'] = $this->Dispersal_model->chart2();
				// $data['chart3_data'] = $this->Pet_model->chart3();
				// $data['chart4_data'] = $this->User_model->chart4();
				// DISPERSAL
				$data['dispersal'] = $this->ChartModel->fetch_dispersal();
				$monthsdispersal = array("Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec");
				$yearsdispersal = array();
				$data_pointsdispersal = array();
				foreach ($data['dispersal'] as $result) {
				if (!in_array($result->year, $yearsdispersal)) {
					$yearsdispersal[] = $result->year;
					$data_pointsdispersal[$result->year] = array_fill(0, 12, 0);
				}
				$data_pointsdispersal[$result->year][$result->month - 1] = (int) $result->value;
				}
				$data['monthsdispersal'] = json_encode($monthsdispersal);
				$data['yearsdispersal'] = json_encode($yearsdispersal);
				$data['data_pointsdispersal'] = json_encode(array_values($data_pointsdispersal));
				// USER
				$data['user'] = $this->ChartModel->fetch_users();
				$monthsuser = array("Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec");
				$yearsuser = array();
				$data_pointsuser = array();
				foreach ($data['user'] as $result) {
				if (!in_array($result->year, $yearsuser)) {
					$yearsuser[] = $result->year;
					$data_pointsuser[$result->year] = array_fill(0, 12, 0);
				}
				$data_pointsuser[$result->year][$result->month - 1] = (int) $result->value;
				}
				$data['monthsuser'] = json_encode($monthsuser);
				$data['yearsuser'] = json_encode($yearsuser);
				$data['data_pointsuser'] = json_encode(array_values($data_pointsuser));
				// FARMER
				$data['farmer'] = $this->ChartModel->fetch_farmers();
				$monthsfarmer = array("Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec");
				$yearsfarmer = array();
				$data_pointsfarmer = array();
				foreach ($data['farmer'] as $result) {
				if (!in_array($result->year, $yearsfarmer)) {
					$yearsfarmer[] = $result->year;
					$data_pointsfarmer[$result->year] = array_fill(0, 12, 0);
				}
				$data_pointsfarmer[$result->year][$result->month - 1] = (int) $result->value;
				}
				$data['monthsfarmer'] = json_encode($monthsfarmer);
				$data['yearsfarmer'] = json_encode($yearsfarmer);
				$data['data_pointsfarmer'] = json_encode(array_values($data_pointsfarmer));
				// PET
				$data['pet'] = $this->ChartModel->fetch_pets();
				$monthspet = array("Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec");
				$yearspet = array();
				$data_pointspet = array();
				foreach ($data['pet'] as $result) {
				if (!in_array($result->year, $yearspet)) {
					$yearspet[] = $result->year;
					$data_pointspet[$result->year] = array_fill(0, 12, 0);
				}
				$data_pointspet[$result->year][$result->month - 1] = (int) $result->value;
				}
				$data['monthspet'] = json_encode($monthspet);
				$data['yearspet'] = json_encode($yearspet);
				$data['data_pointspet'] = json_encode(array_values($data_pointspet));
				$this->load->view('Admin/header');
				$this->load->view('Admin/navbar',$data);
				$this->load->view('Admin/sidebar',$data);
				$this->load->view('Admin/'.$page, $data);
				$this->load->view('Admin/footer');

				}else{
					redirect(base_url());
				}
	}
	public function generatereport()
	{
		if ($this->session->logged_in == true && $this->session->access == 'admin'){
		$page = "report";
		if(!file_exists(APPPATH.'views/Admin/'.$page.'.php')){
			   show_404();
			   }
			   $data['allusers'] = $this->User_model->getallusers();
			   $data['utotal'] = count($data['allusers']);
			   $data['ca_users'] = $this->User_model->getall_ca();
			   $data['ca_total'] = count($data['ca_users']);
			   $data['a_users'] = $this->User_model->getall_a();
			   $data['a_total'] = count($data['a_users']);
			   $data['p_users'] = $this->User_model->getall_p();
			   $data['pet_total'] = count($data['p_users']);
			   $data['allfarmer'] = $this->Farmer_model->get_all_farmer();
			   $data['ftotal'] = count($data['allfarmer']);
			   $data['allpet'] = $this->Pet_model->get_all_pet();
			   $data['ptotal'] = count($data['allpet']);
			   $data['allvacc'] = $this->Pet_model->vaccinated();
			   $data['vtotal'] = count($data['allvacc']);
			   $data['alldisp'] = $this->Dispersal_model->dispersalrecords();
			   $data['dispersedtotal'] = count($data['alldisp']);
			   $data['allmessages'] = $this->Contact_model->get_all_messages();
			   $data['mtotal'] = count($data['allmessages']);
			   $data['alldispersal'] = $this->Dispersal_model->get_all_limit();
			   $data['dtotal'] = count($data['alldispersal']);
			   $data['chart1_data'] = $this->Farmer_model->chart1();
			   $data['chart2_data'] = $this->Dispersal_model->chart2();
			   $data['chart3_data'] = $this->Pet_model->chart3();
			   $data['chart4_data'] = $this->User_model->chart4();
			   $data['listdisp'] = $this->Dispersal_model->get_all_dispersal1();
			   $data['listdispdue'] = $this->Dispersal_model->get_all_dispersaldue();
			   $data['users'] = $this->User_model->getalluser();
			   $data['forum'] = $this->Forum_model->alltopics_user_report();
			   $data['signatory'] = $this->Signatory_model->fetchsignatory();
			   $this->load->view('Admin/'.$page, $data);
			}else{
				redirect(base_url());
			}
   	}
	public function farmerreport()
	{
		if ($this->session->logged_in === TRUE && $this->session->access == 'admin'){
		$page = "farmer_reports";
		if(!file_exists(APPPATH.'views/Reports/'.$page.'.php')){
			show_404();
			}
			$data['allfarmer'] = $this->Farmer_model->get_all_farmer();
			$this->load->view('Reports/'.$page, $data);
		}else{
			show_404();
		}
		}
	public function dispersalreport()
	{
		if ($this->session->logged_in === TRUE && $this->session->access == 'admin'){
		$page = "dispersal_reports";
		if(!file_exists(APPPATH.'views/Reports/'.$page.'.php')){
			show_404();
			}
			$data['alldispersal'] = $this->Dispersal_model->get_all_limit();
			$data['listdisp'] = $this->Dispersal_model->get_all_dispersal1();
			$data['listdispdue'] = $this->Dispersal_model->get_all_dispersaldue();
			$this->load->view('Reports/'.$page, $data);
		}else{
			show_404();
		}
	}
	public function petreport()
	{
		if ($this->session->logged_in === TRUE && $this->session->access == 'admin'){
		$page = "pet_reports";
		if(!file_exists(APPPATH.'views/Reports/'.$page.'.php')){
			show_404();
			}
			$data['allpet'] = $this->Pet_model->get_all_pet();
			$this->load->view('Reports/'.$page, $data);
		}else{
			show_404();
		}
	}
	public function forumreport()
	{
		if ($this->session->logged_in === TRUE && $this->session->access == 'admin'){
		$page = "forum_reports";
		if(!file_exists(APPPATH.'views/Reports/'.$page.'.php')){
			show_404();
			}
			$data['forum'] = $this->Forum_model->alltopics_user_report();
			$this->load->view('Reports/'.$page, $data);
		}else{
			show_404();
		}
	}
	public function userreport()
	{
		if ($this->session->logged_in == TRUE && $this->session->access === 'admin'){
		$page = "user_reports";
		if(!file_exists(APPPATH.'views/Reports/'.$page.'.php')){
			show_404();
			}
			$data['users'] = $this->User_model->getalluser();
			$this->load->view('Reports/'.$page, $data);
		}else{
			show_404();
		}
	}
   public function updateuserstatus()
   	{
		if ($this->session->logged_in == TRUE && $this->session->access == 'admin'){
    	$chkup = $this->User_model->updateuserstat();
        if ($chkup) {
            $this->session->set_tempdata('user_success','Status Updated',1);
            redirect('Users');
        }else{
            $this->session->set_tempdata('user_failed','Status Update Failed',1);
            redirect('Users');
        }
		}else{
			redirect(base_url());
		}
    }
	public function userslist()
	{
        if ($this->session->logged_in == true && $this->session->access == 'admin'){
            $page = "users"; 

            if(!file_exists(APPPATH.'views/Admin/'.$page.'.php')){
                show_404();
            }
            $data['allmessages'] = $this->Contact_model->get_all_messages();
            $data['mtotal'] = count($data['allmessages']);
            $data['allusers'] = $this->User_model->get_all_users();
			$this->load->view('Admin/header');
			$this->load->view('Admin/navbar',$data);
			$this->load->view('Admin/sidebar',$data);
			$this->load->view('Admin/'.$page, $data);
			$this->load->view('Admin/footer');
        }else{
            redirect(base_url());
        }
    }
	public function announcement()
	{
        if ($this->session->logged_in == true && $this->session->access == 'admin'){
            $page = "announcement";
                $data['allmessages'] = $this->Contact_model->get_all_messages();
                $data['mtotal'] = count($data['allmessages']);
                $data['allpost'] = $this->Announcement_model->allpost();
                $this->load->view('Admin/header');
				$this->load->view('Admin/navbar',$data);
				$this->load->view('Admin/sidebar',$data);
				$this->load->view('Admin/'.$page, $data);
                $this->load->view('Admin/a_modals');
				$this->load->view('Admin/footer');
        }
        else{
            redirect(base_url());
        }
    }
	public function addpost()
	{
		if ($this->session->logged_in == true && $this->session->access == 'admin'){
		$config['upload_path'] = 'assets/media/announcement/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['max_size'] = '0';
		$config['max_width'] = '0';
		$config['max_height'] = '0';
	
		$this->load->library('upload', $config);
	
		if(!$this->upload->do_upload('postimage')) {
			$error = array('error' => $this->upload->display_errors());
			 $this->session->set_tempdata('user_failed','Failed to Upload Background Image',2);
			redirect('announcement');
		}else{
			$updata =  $this->upload->data();
			$data['pic_file'] = $updata['file_name'];
			$data['id'] = $this->uri->segment('1');
	
	
			$chkadd = $this->Announcement_model->post_announcement($data);
			if ($chkadd) {
					$this->session->set_tempdata('user_success','Announcement Posted',1);
				redirect('Announcement');
			}else{
				$this->session->set_tempdata('user_failed','Failed to Post Announcement',1);
				redirect('Announcement');
			}
		}    
		}
		else{
			redirect(base_url());
		} 
	}
	public function deletepost($id)
	{
		if ($this->session->logged_in == true && $this->session->access == 'admin'){
		$chkdel = $this->Announcement_model->delete_announcement($id);
			if ($chkdel) {
					$this->session->set_tempdata('user_success','Announcement Deleted',1);
				redirect('Announcement');
			}else{
				$this->session->set_tempdata('user_failed','Failed to Delete Announcement',1);
				redirect('Announcement');
			}
		}
        else{
            redirect(base_url());
        }
	}
	public function updateimage()
	{
		if ($this->session->logged_in == true && $this->session->access == 'admin'){
		$config['upload_path'] = 'assets/media/announcement/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['max_size'] = '0';
		$config['max_width'] = '0';
		$config['max_height'] = '0';
	
		$this->load->library('upload', $config);
	
		if(!$this->upload->do_upload('postimage')) {
			$error = array('error' => $this->upload->display_errors());
			 $this->session->set_tempdata('user_failed','Failed to Update Background Image',1);
			redirect('Announcement');
		}else{
			$updata =  $this->upload->data();
			$data['pic_file'] = $updata['file_name'];
	
			$imgup = $this->Announcement_model->updateimage($data);
			if ($imgup) {
					$this->session->set_tempdata('user_success','Background Image Updated',1);
				redirect('Announcement');
			}else{
				$this->session->set_tempdata('user_failed','Failed to Update Image',1);
				redirect('Announcement');
			}
		}     
		}else{
			redirect(base_url());
		}
	}
	public function updateannounce()
	{
		if ($this->session->logged_in == true && $this->session->access == 'admin'){
		$chkpost = $this->Announcement_model->updatepost();
            if ($chkpost === TRUE) {
                $this->session->set_tempdata('user_success','Updated!',1);
                redirect('Announcement');
            }else{
                $this->session->set_tempdata('user_failed','Failed!',1);
                redirect('Announcement');
            }
		}else{
			redirect(base_url());
		}
	}
	public function notif()
	{
		$data['notif'] = $this->Mail_model->notif();
		echo $data['notif'] = count($data['notif']);
	}
	public function changeadminpass()
	{
		if ($this->session->logged_in == true && $this->session->access == 'admin'){
		$chkupdate = $this->User_model->changeadminpass();
			if ($chkupdate) {
					$this->session->set_tempdata('user_success','Password Changed',1);
				redirect('Admin');
			}else{
				$this->session->set_tempdata('user_failed','Failed to Change Password',1);
				redirect('Admin');
			}
		}else{
			redirect(base_url());
		}
	}

	public function chart()
	{
		$data['dispersal'] = $this->ChartModel->fetch_dispersal();
		$monthsdispersal = array("Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec");
		$yearsdispersal = array();
		$data_pointsdispersal = array();
		foreach ($data['dispersal'] as $result) {
		if (!in_array($result->year, $yearsdispersal)) {
			$yearsdispersal[] = $result->year;
			$data_pointsdispersal[$result->year] = array_fill(0, 12, 0);
		}
		$data_pointsdispersal[$result->year][$result->month - 1] = (int) $result->value;
		}
		$data['monthsdispersal'] = json_encode($monthsdispersal);
		$data['yearsdispersal'] = json_encode($yearsdispersal);
		$data['data_pointsdispersal'] = json_encode(array_values($data_pointsdispersal));

		$this->load->view('Admin/chart', $data);
	}
}
