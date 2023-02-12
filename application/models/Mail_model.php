<?php 

class Mail_model extends CI_Model{
    protected $table = 'tblmessages';
	public function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->library('session');
    }
    public function get_all_inbox()
    {
        $this->db->order_by('date_added', 'desc');
        $query = $this->db->get('tblmessages');
        return $query->result_array(); 
    }
    public function get_read($param)
    {
        $this->db->where('id', $param);
        $query = $this->db->get('tblmessages');
        return $query->row_array();
    }
    public function readview($param){
        //SINGLE-LINE GET
       
        $this->db->where('id', $param);
        $result = $this->db->get('tblmessages');
        //MULTI-LINE GET $result = $this->db->get_where('post', array('id' => $param));
        return $result->row_array();
    }

    public function delete_message(){

        $id = $this->input->post('id');
        $this->db->where('id',$id);
        $this->db->delete('tblmessages');
        return true;
    }
    public function searchmail($param)
    {
        $this->db->like('email', $param);
        $this->db->or_like('name', $param);
        $this->db->or_like('subject', $param);
        $this->db->or_like('message', $param);
        $query = $this->db->get('tblmessages');
        return $query->result_array(); 
    }

    public function insertcompose(){

        $data = array(
            'to_mail' => $this->input->post('to_mail'),
            'subject' => $this->input->post('subject'),
            'message' => $this->input->post('message')
        );
        return $this->db->insert('tblsentmail', $data);

    }
    public function get_reply($param)
    {
        $this->db->where('id', $param);
        $query = $this->db->get('tblmessages');
        return $query->row_array();
    }

    public function get_authors1($limit, $start) {
        $this->db->limit($limit, $start);
        $this->db->order_by('date_added', 'DESC');
        $query = $this->db->get('tblmessages');
        return $query->result_array();
    }
    public function get_count1() {
        return $this->db->count_all_results('tblmessages');
    }
    public function resp() {
        $query = $this->db->get('tbl_response');
        return $query->result_array();
    }
    public function resp_update() {
        $data = array(
            'response' => $this->input->post('response')
        );
        $this->db->where('id', '1');
        $query = $this->db->update('tbl_response', $data);
        return $query;
    }
    public function notif(){
        $this->db->where('status', 1);
        $query = $this->db->get('tblmessages');
        return $query->result(); 
    }
}