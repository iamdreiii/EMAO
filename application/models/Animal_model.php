<?php 

class Animal_model extends CI_Model{

    protected $table = 'animalhealthtips';
    public function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->library('session');
    }
    public function get_count() {
        return $this->db->count_all($this->table);
    }
    public function get_authors($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get($this->table);
        return $query->result_array();
    }

    public function aht_insert(){

        $data = array(
            'link' => $this->input->post('link'),
            'title' => $this->input->post('title'),
            'subtitle' => $this->input->post('subtitle'),
            'slug' => url_title($this->input->post('title'), '-', true),
            'body' => $this->input->post('body')
        );
        return $this->db->insert('animalhealthtips', $data);

    }
    public function get_tips_single($param)
    {
        //SINGLE-LINE GET
        $this->db->where('slug', $param);
        $result = $this->db->get('animalhealthtips');
        return $result->result_array();
    }
    
    public function get_tip_edit($param){
        $this->db->where('id', $param);
        $result = $this->db->get('animalhealthtips');
        return $result->row_array();
    }

    public function update_tip(){

        $id = $this->input->post('id');
        $data = array(
            'link' => $this->input->post('link'),
            'title' => $this->input->post('title'),
            'subtitle' => $this->input->post('subtitle'),
            'body' => $this->input->post('body')
        );
        $this->db->where('id', $id);
        return $this->db->update('animalhealthtips', $data);

    }

    public function delete_tip()
    {
        $id = $this->input->post('id');
        $this->db->where('id',$id);
        return $this->db->delete('animalhealthtips');
        
    }
    public function get_all_tips()
    {

        $this->db->order_by('date_added', 'ASC');
        $query = $this->db->get('animalhealthtips');
        return $query->result_array(); 
    }
    public function getanimalspecies()
    {
        $this->db->order_by('species', 'ASC');
        $query = $this->db->get('animal_category');
        return $query->result_array(); 
    }
}