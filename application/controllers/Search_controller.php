<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search_controller extends CI_Controller {

    public function homesearch()
	{
            $param = $this->input->post('search');
            if(!file_exists(APPPATH.'views/Home/home.php')){
                show_404();
            }
            $config = array();
            $config["base_url"] = base_url() . "Home";
            $config["total_rows"] = $this->Home_model->get_count();
            $config["per_page"] = 9;
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
            $data['blog'] = $this->Home_model->get_authors($config["per_page"], $page);
            $data['blog'] = $this->Search_model->homesearch($param);
            $data['user'] = $this->User_model->getuser();
            $this->load->view('Home/header',$data);
            $this->load->view('Home/home',$data);
            $this->load->view('Home/footer');
	}
	public function animalhealthsearch()
	{
        $param = $this->input->post('search');
        if(!file_exists(APPPATH.'views/Animal/animalhealth.php')){
            show_404();
        }
        $config = array();
        $config["base_url"] = base_url() . "Animal-Health-Tips";
        $config["total_rows"] = $this->Animal_model->get_count();
        $config["per_page"] = 9;
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
        $data['animalhealth'] = $this->Animal_model->get_authors($config["per_page"], $page);
        $data['animalhealth'] = $this->Search_model->animalhealtsearch($param);
        $data['user'] = $this->User_model->getuser();
        $this->load->view('Home/header',$data);
        $this->load->view('Animal/animalhealth',$data);
        $this->load->view('Home/footer');
	}
    public function discussionsearch()
	{
        $param = $this->input->post('search');
        if(!file_exists(APPPATH.'views/Forum/discussion.php')){
            show_404();
        }
        $config = array();
        $config["base_url"] = base_url() . "Discussion";
        $config["total_rows"] = $this->Forum_model->get_count();
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
        $data['forum'] = $this->Forum_model->get_author($config["per_page"], $page);
        $data['forum'] = $this->Search_model->discussionsearch($param);
        $data['forumlist'] = $this->Forum_model->fetchforums();
        $data['categories'] = $this->Forum_model->fetchcategories();
        $data['topic_comments'] = $this->Forum_model->fetchtopic_comments();
        $data['ltopics'] = $this->Forum_model->getpostuser_limit();
        $data['categoriesall'] = $this->Forum_model->get_categories();
        $data['latestuser'] = $this->User_model->latestuser();
        $data['allusers'] = $this->User_model->get_all_users();
        $data['utotal'] = count($data['allusers']);
        $data['user'] = $this->User_model->getuser();
        $data['ctotal'] = $this->Forum_model->get_counttopics();
        $data['ftotal'] = $this->Forum_model->get_countforums();
        $data['total'] = $this->Forum_model->get_count();
        $data['user'] = $this->User_model->getuser();
        $this->load->view('Forum/discussion', $data);
        $this->load->view('Home/footer');
	}
  
}