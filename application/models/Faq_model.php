<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Faq_model extends CI_Model{

    public function updatefaq(){

        $id = $this->input->post('id');
        $data = array(
            'question' => $this->input->post('question'),
            'answer' => $this->input->post('answer')
        );
        $this->db->where('id', $id);
        return $this->db->update('tbl_faq', $data);

    }
    public function deletefaq($id){
        $this->db->where('id', $id);
         return $this->db->delete('tbl_faq');
    }
    public function faqdelete(){
        $id = $this->input->post('id');
        $this->db->where('id', $id);
         return $this->db->delete('tbl_faq');
    }
    public function fetchfaq()
    {
        $this->db->order_by('id', 'DEC');
        $query = $this->db->get('tbl_faq');
        return $query->result_array(); 
    }
    public function addfaq(){
    	$data = array(
            'question' => $this->input->post('question'),
            'answer' => $this->input->post('answer'),
            'date_created' => date('y-m-d')
        );
         return $this->db->insert('tbl_faq', $data);
    }
}