<?php 

class Vaccination_model extends CI_Model{

	public function __construct(){

        $this->load->database();
        $this->load->library('session');
    }
    public function postsched(){
    	$data = array(
            'title' => $this->input->post('title'),
            'description' => $this->input->post('description'),
            'start_datetime' => $this->input->post('start_datetime'),
            'end_datetime' => $this->input->post('end_datetime'),
        );
         return $this->db->insert('schedule_list', $data);
    }

    public function allsched(){
       $query = $this->db->get('schedule_list');
        return $query->result_array();
    }

    public function vaccine_sched(){
        $this->db->limit(5);
        $this->db->where('start_datetime >=',date('y,m,d'));
         $query = $this->db->get('schedule_list');
        return $query->result_array();
    }
    public function schedupdate($data, $id){
        $this->db->where('id', $id);
        return $this->db->update('schedule_list', $data);

    }
    public function sched_remove($id){
        $this->db->where('id', $id);
        return $this->db->delete('schedule_list');

    }
    public function getevents(){
        $query = $this->db->get('events');
         return $query->result_array();
     }
     public function fetchuseremail()
    {
        $query = $this->db->query("SELECT * FROM `user` WHERE `usertype` != 'admin' && `usertype` != 'user' ");
        return $query->result(); 
    }
   
}
