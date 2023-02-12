<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Forum_controller extends CI_Controller{
    public function discussion()
	{
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
        $data['forumlist'] = $this->Forum_model->fetchforums();
        $data['user'] = $this->User_model->getuser();
        $this->load->view('Forum/discussion', $data);
        $this->load->view('Home/footer');
	}
    public function filterbyforum($param)
    {
        if(!file_exists(APPPATH.'views/Forum/discussion.php')){
            show_404();
        }
        $data['forum'] = $this->Forum_model->filterforum($param);
        $data['user'] = $this->User_model->getuser();
        $data['categories'] = $this->Forum_model->fetchcategories();
        $data['topic_comments'] = $this->Forum_model->fetchtopic_comments();
        $data['ltopics'] = $this->Forum_model->getpostuser_limit();
        $data['categoriesall'] = $this->Forum_model->get_categories();
        $data['alltopics'] = $this->Forum_model->alltopics();
        $data['ttotal'] = count($data['alltopics']);
        $data['allusers'] = $this->User_model->get_all_users();
        $data['latestuser'] = $this->User_model->latestuser();
        $data['ftotal'] = $this->Forum_model->get_countforums();
        $data['utotal'] = count($data['allusers']);
        $data['user'] = $this->User_model->getuser();
        $data['ctotal'] = $this->Forum_model->get_counttopics();
        $data['total'] = $this->Forum_model->get_count();
        $data['ftotal'] = $this->Forum_model->get_countforums();
        $data['forumlist'] = $this->Forum_model->fetchforums();
        $this->load->view('Forum/discussion', $data);
        $this->load->view('Home/footer');
    }
    public function filter($id)
    {
        if(!file_exists(APPPATH.'views/Forum/discussion.php')){
            show_404();
        }
        $data['forum'] = $this->Forum_model->filterforum($id);
        $data['user'] = $this->User_model->getuser();
        $data['categories'] = $this->Forum_model->fetchcategories();
        $data['topic_comments'] = $this->Forum_model->fetchtopic_comments();
        $data['ltopics'] = $this->Forum_model->getpostuser_limit();
        $data['categoriesall'] = $this->Forum_model->get_categories();
        $data['alltopics'] = $this->Forum_model->alltopics();
        $data['ttotal'] = count($data['alltopics']);
        $data['allusers'] = $this->User_model->get_all_users();
        $data['latestuser'] = $this->User_model->latestuser();
        $data['ftotal'] = $this->Forum_model->get_countforums();
        $data['utotal'] = count($data['allusers']);
        $data['user'] = $this->User_model->getuser();
        $data['ctotal'] = $this->Forum_model->get_counttopics();
        $data['total'] = $this->Forum_model->get_count();
        $data['ftotal'] = $this->Forum_model->get_countforums();
        $data['forumlist'] = $this->Forum_model->fetchforums();
        $this->load->view('Forum/discussion', $data);
        $this->load->view('Home/footer');
    }
    public function filterbycategory($param)
    {
        if(!file_exists(APPPATH.'views/Forum/discussion.php')){
            show_404();
        }
        $data['forum'] = $this->Forum_model->filtercategory($param);
        $data['user'] = $this->User_model->getuser();
        $data['categories'] = $this->Forum_model->fetchcategories();
        $data['topic_comments'] = $this->Forum_model->fetchtopic_comments();
        $data['ltopics'] = $this->Forum_model->getpostuser_limit();
        $data['categoriesall'] = $this->Forum_model->get_categories();
        $data['alltopics'] = $this->Forum_model->alltopics();
        $data['ttotal'] = count($data['alltopics']);
        $data['allusers'] = $this->User_model->get_all_users();
        $data['latestuser'] = $this->User_model->latestuser();
        $data['ftotal'] = $this->Forum_model->get_countforums();
        $data['utotal'] = count($data['allusers']);
        $data['user'] = $this->User_model->getuser();
        $data['ctotal'] = $this->Forum_model->get_counttopics();
        $data['total'] = $this->Forum_model->get_count();
        $data['ftotal'] = $this->Forum_model->get_countforums();
        $data['forumlist'] = $this->Forum_model->fetchforums();
        $this->load->view('Forum/discussion', $data);
        $this->load->view('Home/footer');
    }
    public function filtercategory()
    {
        $param = $this->input->post('search');
        if(!file_exists(APPPATH.'views/Forum/discussion.php')){
            show_404();
        }
        $data['forum'] = $this->Forum_model->filterbycat($param);
        $data['categories'] = $this->Forum_model->fetchcategories();
        $data['topic_comments'] = $this->Forum_model->fetchtopic_comments();
        $data['ltopics'] = $this->Forum_model->getpostuser_limit();
        $data['categoriesall'] = $this->Forum_model->get_categories();
        $data['latestuser'] = $this->User_model->latestuser();
        $data['allusers'] = $this->User_model->get_all_users();
        $data['utotal'] = count($data['allusers']);
        $data['user'] = $this->User_model->getuser();
        $data['ctotal'] = $this->Forum_model->get_counttopics();
        $data['total'] = $this->Forum_model->get_count();
        $data['ftotal'] = $this->Forum_model->get_countforums();
        $data['forumlist'] = $this->Forum_model->fetchforums();
        $this->load->view('Home/header');
        $this->load->view('Forum/discussion', $data);
        $this->load->view('Home/footer');
    }
    public function askquestion()
	{
        $page = "ask-question"; 

            if(!file_exists(APPPATH.'views/Forum/'.$page.'.php')){
                show_404();
            }
            $data['category'] = $this->Forum_model->fetchcategories();
            $data['forum'] = $this->Forum_model->fetchforums();
            $data['user'] = $this->User_model->getuser();
            $this->load->view('Home/header',$data);
		    $this->load->view('Forum/'.$page, $data);
            $this->load->view('Home/footer');
	}
    public function postquestion()
    {
        $chkinsert = $this->Forum_model->addtopic();
                if ($chkinsert) {
                    $this->session->set_tempdata('user_success','Question Published',1);
                    redirect('Discussion');
                }else{
                    $this->session->set_tempdata('user_failed','Failed to Publish your Question',1);
                    redirect('Ask-Question');
                }    
    }
    public function questiondetails($id)
	{
            $page = "question-details"; 

            if(!file_exists(APPPATH.'views/Forum/'.$page.'.php')){
                show_404();
            }
            if($this->session->logged_in === true){
            $this->Forum_model->addview($id);
            }
            $data['user'] = $this->User_model->getuser();
            $data['question'] = $this->Forum_model->fetchtopic($id);
            $data['commentview'] = $this->Forum_model->fetchtopic_comment($id);
            // $data['replyview'] = $this->Forum_model->fetchtopic_replies($id);
            $data['user'] = $this->User_model->getuser();
            $this->load->view('Home/header',$data);
		    $this->load->view('Forum/'.$page, $data);
            $this->load->view('Home/footer');
	}
    public function addcomment(){
        
        if ($this->session->logged_in == true || $this->session->access == 'admin' || $this->session->access == 'user' || $this->session->access == 'ca') {
                $id = $this->uri->segment(3);
                $chkinsert = $this->Forum_model->save_comment($id);
                if ($chkinsert) {
                    $this->session->set_tempdata('user_success','Commented',1);
                    redirect(base_url().'Question-Details/'.$id);
                }else{
                    $this->session->set_tempdata('user_failed','Failed to Comment',1);
                    redirect(base_url().'Question-Details/'.$id);
                }
        }
    }
    public function filterdiscussion()
    {
        if(!file_exists(APPPATH.'views/Forum/discussion.php')){
            show_404();
        }
        $chkdata = $this->input->post('filter');
        if($chkdata == 'newest'){
            $data['forum'] = $this->Forum_model->filterdiscussionnew();
        }elseif($chkdata == 'votes'){
            $data['forum'] = $this->Forum_model->filterdiscussionvotes();
        }elseif($chkdata == 'views'){
            $data['forum'] = $this->Forum_model->filterdiscussionviews();
        }elseif($chkdata == 'unanswered'){
            $data['forum'] = $this->Forum_model->filterdiscussionnocomment();
        }
        $data['categories'] = $this->Forum_model->fetchcategories();
        $data['topic_comments'] = $this->Forum_model->fetchtopic_comments();
        $data['ltopics'] = $this->Forum_model->getpostuser_limit();
        $data['categoriesall'] = $this->Forum_model->get_categories();
        $data['latestuser'] = $this->User_model->latestuser();
        $data['allusers'] = $this->User_model->get_all_users();
        $data['utotal'] = count($data['allusers']);
        $data['user'] = $this->User_model->getuser();
        $data['ctotal'] = $this->Forum_model->get_counttopics();
        $data['total'] = $this->Forum_model->get_count();
        $data['ftotal'] = $this->Forum_model->get_countforums();
        $data['forumlist'] = $this->Forum_model->fetchforums();
        $this->load->view('Forum/discussion', $data);
        $this->load->view('Home/footer');
    }
    // ADMIN///////////////////////////////////////////////////
    public function categories(){
        $this->load->library('form_validation');
        if ($this->session->logged_in == true && $this->session->access == 'admin'){
            $page = "category"; 

            if(!file_exists(APPPATH.'views/Forum/'.$page.'.php')){
                show_404();
            }
            $data['allmessages'] = $this->Contact_model->get_all_messages();
            $data['mtotal'] = count($data['allmessages']);
            $data['categories'] = $this->Forum_model->fetchcategories();
            
            $this->load->view('Admin/header');
            $this->load->view('Admin/navbar',$data);
            $this->load->view('Admin/sidebar',$data);
            $this->load->view('Forum/'.$page, $data);
            $this->load->view('Admin/footer');
        }else{
            redirect(base_url());
        }
    }
    public function addcategory(){
 
        if ($this->session->logged_in == true && $this->session->access == 'admin') {
                //POST DATA FROM CATEGORY MODAL
                
                $chkinsert = $this->Forum_model->addcategory();
                if ($chkinsert) {
                    $this->session->set_tempdata('user_success','Category Added',1);
                    redirect('Forum-Categories');
                }else{
                    $this->session->set_tempdata('user_failed','Failed to Add Category',1);
                    redirect('Forum-Categories');
                }
        }
    }
    public function deletecategory($id){
 
        if ($this->session->logged_in == true && $this->session->access == 'admin') {
            
                $chkdelete = $this->Forum_model->deletecategory($id);
                if ($chkdelete) {
                    $this->session->set_tempdata('user_success','Category Deleted',1);
                    redirect('Forum-Categories');
                }else{
                    $this->session->set_tempdata('user_failed','Failed to Delete Category',1);
                    redirect('Forum-Categories');
                }
        }
    }
    public function updatecategory(){
        
        $id = $this->input->post('id');
        $data['category'] = $this->input->post('category');
        $data['description'] = $this->input->post('description');

        $query = $this->Forum_model->updatecategory($data, $id);
            if ($query) {
                $this->session->set_tempdata('user_success','Category Updated',1);
                redirect('Forum-Categories');
            }else{
                $this->session->set_tempdata('user_failed','Failed to Update Category',1);
                redirect('Forum-Categories');
            }
    }
    // ADMIN FORUMS
    public function forums(){
        $this->load->library('form_validation');
        if ($this->session->logged_in == true && $this->session->access == 'admin'){
            $page = "forums"; 

            if(!file_exists(APPPATH.'views/Forum/'.$page.'.php')){
                show_404();
            }
            $data['allmessages'] = $this->Contact_model->get_all_messages();
            $data['mtotal'] = count($data['allmessages']);
            $data['forums'] = $this->Forum_model->fetchforumlist();
            
            $this->load->view('Admin/header');
            $this->load->view('Admin/navbar',$data);
            $this->load->view('Admin/sidebar',$data);
            $this->load->view('Forum/'.$page, $data);
            $this->load->view('Admin/footer');
        }else{
            redirect(base_url());
        }
    }
    public function addforum(){
 
        if ($this->session->logged_in == true && $this->session->access == 'admin') {
                //POST DATA FROM CATEGORY MODAL
                
                $chkinsert = $this->Forum_model->addforum();
                if ($chkinsert) {
                    $this->session->set_tempdata('user_success','Forum Added',1);
                    redirect('Forum-Forums');
                }else{
                    $this->session->set_tempdata('user_failed','Failed to Add Forum',1);
                    redirect('Forum-Forums');
                }
        }
    }
    public function deleteforum($id){
 
        if ($this->session->logged_in == true && $this->session->access == 'admin') {
            
                $chkdelete = $this->Forum_model->deletecategory($id);
                if ($chkdelete) {
                    $this->session->set_tempdata('user_success','Category Deleted',1);
                    redirect('Forum-Forums');
                }else{
                    $this->session->set_tempdata('user_failed','Failed to Delete Category',1);
                    redirect('Forum-Forums');
                }
        }
    }
    public function updateforum(){
        
        $id = $this->input->post('id');
        $data['title'] = $this->input->post('forum');

        $query = $this->Forum_model->updateforum($data, $id);
            if ($query) {
                $this->session->set_tempdata('user_success','Category Updated',1);
                redirect('Forum-Forums');
            }else{
                $this->session->set_tempdata('user_failed','Failed to Update Category',1);
                redirect('Forum-Forums');
            }
    }
    public function qdelete()
    {
        $chkdel = $this->Forum_model->qdelete();
        if ($chkdel) {
            $this->session->set_tempdata('user_success','Question Deleted',1);
            redirect('User-Profile');
        }else{
            $this->session->set_tempdata('user_failed','Failed to Delete Question',1);
            redirect('User-Profile');
        }
    }
    public function qupdate()
    {
        $chkupdate = $this->Forum_model->qupdate();
        if ($chkupdate) {
            $this->session->set_tempdata('user_success','Question Updated',1);
            redirect('User-Profile');
        }else{
            $this->session->set_tempdata('user_failed','Failed to Delete Question',1);
            redirect('User-Profile');
        }
    }
    public function cdelete()
    {
        $qid = $this->input->post('qid_id');
        $chkdel = $this->Forum_model->cdelete();
        if ($chkdel) {
            $this->session->set_tempdata('user_success','Comment Deleted',1);
            redirect('Question-Details/'.$qid);
        }else{
            $this->session->set_tempdata('user_failed','Failed to Delete Comment',1);
            redirect('Question-Details/'.$qid);
        }
    }
    public function cupdate()
    {
        $qid = $this->input->post('qid_id');
        $chkupdate = $this->Forum_model->cupdate();
        if ($chkupdate) {
            $this->session->set_tempdata('user_success','Comment Updated',1);
            redirect('Question-Details/'.$qid);
        }else{
            $this->session->set_tempdata('user_failed','Failed to Delete Comment',1);
            redirect('Question-Details/'.$qid);
        }
    }
}