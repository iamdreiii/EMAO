<?php 

class Contact_model extends CI_Model{

	public function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->library('session');
    }
    public function insertemail()
    {
        $data = array(
            'name' => $this->input->post('name'),
            'email' => $this->input->post('email'),
            'contact' => $this->input->post('phone'),
            'subject' => $this->input->post('subject'),
            'slug' => url_title($this->input->post('name').'-'.$this->input->post('subject'), '-', true),
            'message' => $this->input->post('message')
        );
        return $this->db->insert('tblmessages', $data);
    }
    public function get_all_messages()
    {
        $this->db->order_by('date_added', 'DESC');
        $this->db->where('status', 1);
        // $this->db->limit(5);
        $query = $this->db->get('tblmessages');
        return $query->result_array(); 
    }
    public function message($param)
    {
        $this->db->where('id', $param);
        $result = $this->db->get('tblmessages');
        return $result->row_array();
    }
    public function readmessage($param){
        //$this->db->limit(5);
        $this->db->where('id', $param);
        $this->db->set('status', 0);
        $chk = $this->db->update('tblmessages');
        if ($chk) {
            return TRUE;
        }else{
            return FALSE;
        }
    }
    public function chkemail()
    {
        $query = $this->db->get('tbldispersal');
        return $query->result_array(); 
    }
    public function fetchuseremail()
    {
        $query = $this->db->get('user');
        return $query->result_array(); 
    }
}