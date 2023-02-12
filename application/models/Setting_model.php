<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Setting_model extends CI_Model {
    
    public function getdata(){
        $query = $this->db->get('tblabout');
        return $query->result_array();
    }
    public function update($id){
        $data = array(
            'who' => $this->input->post('who'),
            'vision' => $this->input->post('vision'),
            'mission' => $this->input->post('mission')
            );
        $this->db->where('id', $id);
        return $this->db->update('tblabout', $data);
        
    }
}