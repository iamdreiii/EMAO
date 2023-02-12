<?php

class PetCategory_model extends CI_Model{
	public function fetchcategory()
    {
        $this->db->order_by('cat_id', 'DESC');
        $query = $this->db->get('tbl_petcategory');
        return $query->result_array(); 
    }
    public function fetchsubcategory()
    {
        $this->db->order_by('cat_id', 'DESC');
        $query = $this->db->get('tbl_petsubcategory');
        return $query->result_array(); 
    }

    public function categoryadd()
    {
    	$data = array(
            'category' => $this->input->post('category')
             );
        return $this->db->insert('tbl_petcategory', $data);
    }
    public function subcategoryadd()
    {
    	$data = array(
    		'cat_id' => $this->input->post('cat_id'),
            'subcategory' => $this->input->post('subcategory')
             );
        return $this->db->insert('tbl_petsubcategory', $data);
    }
    public function categoryupdate($cat_id)
    {
    	$data = array(
            'category' => $this->input->post('category')
             );
    	$this->db->where('cat_id', $cat_id);
        return $this->db->update('tbl_petcategory', $data);
    }
    public function subcategoryupdate($id)
    {
    	$data = array(
            'subcategory' => $this->input->post('subcategory')
             );
    	$this->db->where('id', $id);
        return $this->db->update('tbl_petsubcategory', $data);
    }
    public function categorydelete($cat_id)
    {
    	$this->db->where('cat_id', $cat_id);
        return $this->db->delete('tbl_petcategory');
    }
    public function subcategorydelete($id)
    {
    	$this->db->where('id', $id);
        return $this->db->delete('tbl_petsubcategory');
    }
}