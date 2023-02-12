<?php 

class Search_model extends CI_Model{

	public function __construct()
    {
        $this->load->database();
        $this->load->library('session');
    }
    public function homesearch($param)
    {
        $param = $this->input->post('search');
        $this->db->like('title', $param);
        $this->db->order_by('id', 'DESC');
        $query = $this->db->get('tblannouncement');
        return $query->result_array(); 
    }
    public function animalhealtsearch($param)
    {
        $this->db->like('title', $param);
        $this->db->order_by('id', 'DESC');
        $query = $this->db->get('animalhealthtips');
        return $query->result_array(); 
    }
    public function discussionsearch($param)
    {
        $this->db->like('title', $param);
        $this->db->order_by('id', 'DESC');
        $query = $this->db->get('forum_topics');
        return $query->result_array(); 
    }
}
