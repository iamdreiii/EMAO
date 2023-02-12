<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Signatory_model extends CI_Model{

    public function signatoryupdate(){

        $id = $this->input->post('id');
        $data = array(
            'lname' => $this->input->post('lname'),
            'fname' => $this->input->post('fname'),
            'mname' => $this->input->post('mname'),
            'position' => $this->input->post('position'),
            'extension' => $this->input->post('extension'),
            'signatory_for' => $this->input->post('signatory_for'),
            'created_at' => date('Y-m-d_H-i')
        );
        $this->db->where('id', $id);
        return $this->db->update('signatory', $data);

    }
    public function signatorydelete($id){
        $id = $id;
        $this->db->where('id', $id);
         return $this->db->delete('signatory');
    }
    public function fetchsignatory()
    {
        $this->db->order_by('id', 'DEC');
        $query = $this->db->get('signatory');
        return $query->result_array(); 
    }
    public function signatoryadd(){
    	$data = array(
            'lname' => $this->input->post('lname'),
            'fname' => $this->input->post('fname'),
            'mname' => $this->input->post('mname'),
            'position' => $this->input->post('position'),
            'extension' => $this->input->post('extension'),
            'signatory_for' => $this->input->post('signatory_for'),
            'created_at' => date('Y-m-d_H-i')
        );
         return $this->db->insert('signatory', $data);
    }
}