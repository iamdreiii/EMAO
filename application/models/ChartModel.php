<?php 

class ChartModel extends CI_Model{

    public function fetch_dispersal()
    {
        $this->db->select('YEAR(date_recorded) as year, MONTH(date_recorded) as month, COUNT(id) as value');
    $this->db->group_by(array("year", "month"));
    $query = $this->db->get('tbldispersal');
    return $query->result();
    }
    
    public function fetch_users()
    {
        $this->db->select('YEAR(date_registered) as year, MONTH(date_registered) as month, COUNT(id) as value');
    $this->db->group_by(array("year", "month"));
    $query = $this->db->get('user');
    return $query->result();
    }

    public function fetch_farmers()
    {
        $this->db->select('YEAR(date_recorded) as year, MONTH(date_recorded) as month, COUNT(id) as value');
    $this->db->group_by(array("year", "month"));
    $query = $this->db->get('tblfarmer');
    return $query->result();
    }

    public function fetch_pets()
    {
        $this->db->select('YEAR(date_recorded) as year, MONTH(date_recorded) as month, COUNT(id) as value');
    $this->db->group_by(array("year", "month"));
    $query = $this->db->get('tblpet');
    return $query->result();
    }
}