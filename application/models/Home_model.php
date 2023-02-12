<?php

class Home_model extends CI_Model{

	protected $table = 'tblannouncement';
	public function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->library('session');
    }
	public function get_count() 
    {
        return $this->db->count_all($this->table);
    }
    public function get_authors($limit, $start) {
        $this->db->limit($limit, $start);
        $this->db->order_by('date_published', 'DESC');
        $query = $this->db->get($this->table);
        return $query->result_array();
    }
	public function allpost()
    {
        $query = $this->db->get('tblannouncement');
        return $query->result_array(); 
    }

    public function post_announcement($data)
    {
        $data = array(
            'pic_file' => $data['pic_file'],
            'title' => $this->input->post('title'),
            'slug' => url_title($this->input->post('title'), '-', true),
            'subtitle' => $this->input->post('subtitle'),
            'body' => $this->input->post('body')
        );
        return $this->db->insert('tblannouncement', $data);

    }
    public function updateimage($data)
    {
        $id = $this->input->post('id');
        $this->db->select('pic_file')->where('id', $id);
        $query = $this->db->get('tblannouncement');

        if ($query->num_rows() > 0) {
            $oldpic =  $query->row()->pic_file;
            unlink("./dist/imgpost/$oldpic");
        $data = array(
            'pic_file' => $data['pic_file']
             );
        $this->db->where('id', $id);
        return $this->db->update('tblannouncement', $data);
    }else{
        $data = array(
            'pic_file' => $data['pic_file']
             );
        $this->db->where('id', $id);
        return $this->db->update('tblannouncement', $data);
    }

    }
    public function updatepost()
    {
        $id = $this->input->post('id');
        $data = array(
            'title' => $this->input->post('title'),
            'slug' => url_title($this->input->post('title'), '-', true),
            'subtitle' => $this->input->post('subtitle'),
            'body' => $this->input->post('body'),
            'date_edited' => date('y,m,d')
             );
        $this->db->where('id', $id);
        return $this->db->update('tblannouncement', $data);
    }
    public function getpost($param)
    {
        $this->db->where('id', $param);
        $result = $this->db->get('tblannouncement');
        return $result->row_array();
    }
    public function getpostsingle($param)
    {
        $this->db->where('slug', $param);
        $result = $this->db->get('tblannouncement');
        return $result->result_array();
    }
    public function save_announcement_comment($id)
    {
        $data = array(
            'announcement_slug' => $id,
            'name' =>$this->input->post('name'),
            'email' => $this->input->post('email'),
            'comment' => $this->input->post('comment'),
            'date_created' => date('y,m,d h:i a')
        );
         return $this->db->insert('announcement_comment', $data);
    }
    public function fetchannouncement_comment($param){
        $this->db->select(" c.* ");
        $this->db->from('announcement_comment c');
        $this->db->join('tblannouncement a', 'c.announcement_slug = a.slug');
        $this->db->where('c.announcement_slug', $param);
        $this->db->order_by('unix_timestamp(c.date_created)', 'ASC');
        $query = $this->db->get();
        return $query->result_array(); 
    }
    public function getbarangay()
    {
        $response = array();
        $this->db->select('cat_id,subcategory');
        $this->db->where('cat_id', '10');
        $q = $this->db->get('barangay');
        $response = $q->result_array();
    
        return $response;
      }

}