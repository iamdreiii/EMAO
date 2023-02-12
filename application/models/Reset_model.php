<?php 

class Reset_model extends CI_Model{

	public function __construct(){

        $this->load->database();
        $this->load->library('session');
    }

    public function fetchcodes($decrypted_email){
       $this->db->order_by('id', 'desc');
       $this->db->LIMIT('1');
       $this->db->select('expire');
        $this->db->where('email',$decrypted_email);
         $query = $this->db->get('tbl_codes');
        return $query->result_array();
    }
    public function deletecode($decrypted_email){
        $query = $this->db->query('DELETE FROM `tbl_codes` where `email` = "'.$decrypted_email.'"');
        return $query;
    }
}
