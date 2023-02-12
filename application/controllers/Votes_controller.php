<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Votes_controller extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');        /**LOADING HELPER TO AVOID PHP ERROR ****/
        $this->load->model('Forum_model','welcome'); /* Welcome_model as welcome */
    }

	public function upvote()
    {
        $id = $_GET['id'];
        if($this->session->logged_in == TRUE)
            {
                $this->Forum_model->upvote($id);
                redirect('Question-Details/'.$id);
            }else{
                redirect('Question-Details/'.$id);
            }
	}
	public function downvote()
    {
        $id = $_GET['id'];
        if($this->session->logged_in == TRUE)
            {
                $this->Forum_model->downvote($id);
                redirect('Question-Details/'.$id);
            }else{
                redirect('Question-Details/'.$id);
            }
	}
}

    
