<?php 

class Farmer_model extends CI_Model{

	public function __construct(){

        $this->load->database();
        $this->load->library('session');
    }
    public function farmer_list(){

    	$this->db->order_by('lastname', 'ASC');
        $query = $this->db->get('tblfarmer');
        return $query->result_array();
    }
    public function get_all_farmer(){
        $query = $this->db->get('tblfarmer');
        return $query->result_array();
    }
    public function farmer_list_view($param){
        //SINGLE-LINE GET
        $this->db->where('id', $param);
        $result = $this->db->get('tblfarmer');
        //MULTI-LINE GET $result = $this->db->get_where('post', array('id' => $param));
        return $result->row_array();
    }
     public function farmer_list_edit($param){
        //SINGLE-LINE GET
        $this->db->where('id', $param);
        $result = $this->db->get('tblfarmer');
        //MULTI-LINE GET $result = $this->db->get_where('post', array('id' => $param));
        return $result->row_array();
    }
    public function updatefarmer(){

        $id = $this->input->post('id');
        $data = array(
            'lastname' => $this->input->post('lastname'),
            'firstname' => $this->input->post('firstname'),
            'midname' => $this->input->post('midname'),
            'extension' => $this->input->post('extension'),
            'address' => $this->input->post('address'),
            'farmlocation' => $this->input->post('farmlocation'),
            'contact' => $this->input->post('contact'),
            'birthday' => $this->input->post('birthday'),
            'age' => $this->input->post('age'),
            'sex' => $this->input->post('sex'),
            'cornarea' => $this->input->post('cornarea'),
            'ricearea' => $this->input->post('ricearea'),
            'hvcarea' => $this->input->post('hvcarea'),
            'coconutarea' => $this->input->post('coconutarea'),
            'lpcount' => $this->input->post('lpcount'),
            'regional' => $this->input->post('regional'),
            'provincial' => $this->input->post('provincial'),
            'municipal' => $this->input->post('municipal'),
            'barangay' => $this->input->post('barangay'),
            'farmer' => $this->input->post('farmer'),
            'remarks' => $this->input->post('remarks')
             );
        $this->db->where('id', $id);
        return $this->db->update('tblfarmer', $data);

    }
    public function insert_farmer(){

        $data = array(
            'lastname' => $this->input->post('lastname'),
            'firstname' => $this->input->post('firstname'),
            'midname' => $this->input->post('midname'),
            'extension' => $this->input->post('extension'),
            'address' => $this->input->post('address'),
            'farmlocation' => $this->input->post('farmlocation'),
            'contact' => $this->input->post('contact'),
            'birthday' => $this->input->post('birthday'),
            'age' => $this->input->post('age'),
            'sex' => $this->input->post('sex'),
            'cornarea' => $this->input->post('cornarea'),
            'ricearea' => $this->input->post('ricearea'),
            'hvcarea' => $this->input->post('hvcarea'),
            'coconutarea' => $this->input->post('coconutarea'),
            'lpcount' => $this->input->post('lpcount'),
            'regional' => $this->input->post('regional'),
            'provincial' => $this->input->post('provincial'),
            'municipal' => $this->input->post('municipal'),
            'barangay' => $this->input->post('barangay'),
            'farmer' => $this->input->post('farmer'),
            'remarks' => $this->input->post('remarks')
             );
        return $this->db->insert('tblfarmer', $data);
    }
    public function chart1(){
       $query =  $this->db->query("SELECT COUNT(id) as count,MONTHNAME(date_recorded) as month_name FROM tblfarmer WHERE YEAR(date_recorded) = '" . date('Y') . "'
            GROUP BY YEAR(date_recorded),MONTH(date_recorded)"); 

            $record = $query->result();
            $data = [];

            foreach($record as $row) {
            $data['label1'][] = $row->month_name;
            $data['data1'][] = (int) $row->count;
            }
            return $data['chart_data'] = json_encode($data);
    }
}

            