<?php 

class Dispersal_model extends CI_Model{

    protected $table = 'tbldispersal';
	public function __construct(){

        $this->load->database();
        $this->load->library('session');
        
    }
    public function get_all_limit()
    {
        $this->db->order_by('date_recorded', 'ASC');
        $this->db->where('calvingstart >=', date('Y-m-d_H-i'));
        $this->db->limit(10);
        $query = $this->db->get('tbldispersal');
        return $query->result_array(); 
    }
    public function get_all_dispersal()
    { 
         $this->db->where('calvingstart >=', date('Y-m-d'));
        $query = $this->db->get('tbldispersal');
        return $query->result_array(); 
    }
    public function get_all_dispersaldue()
    { 

        $this->db->order_by('date_recorded', 'DESC');
        $this->db->where('calvingstart <', date('Y-m-d'));
        $query = $this->db->get('tbldispersal');
        return $query->result_array(); 
    }
    //FETCH DISPERSAL RECORDS TODAY
    public function dispersaldue_today()
    { 
        //$this->db->order_by('date_recorded', 'DESC');
        $this->db->where('calvingstart =', date('Y-m-d'));
        $query = $this->db->get('tbldispersal');
        return $query->result_array(); 
    }
    public function getdispersalcount_today() {
        $this->db->where('calvingstart =', date('Y-m-d'));
        return $this->db->count_all_results('tbldispersal');
    }


    public function get_all_dispersal1()
    { 
        $this->db->order_by('type', 'ASC');
        // $this->db->where('calvingstart >=', date('y-m-d'));
        $query = $this->db->get('tbldispersal');
        return $query->result_array(); 
    }
    public function dispersalrecords()
    { 
        $this->db->where('calvingstart <=', date('Y-m-d'));
        $query = $this->db->get('tbldispersal');
        return $query->result_array(); 
    }
    public function chart2(){
        $query =  $this->db->query("SELECT COUNT(id) as count,MONTHNAME(date_recorded) as month_name FROM tbldispersal WHERE YEAR(date_recorded) = '" . date('Y') . "'
            GROUP BY YEAR(date_recorded),MONTH(date_recorded)"); 

            $record = $query->result();
            $data = [];

            foreach($record as $row) {
            $data['label2'][] = $row->month_name;
            $data['data2'][] = (int) $row->count;
            }
           return $data['chart_data'] = json_encode($data);

    }
    public function consultationinsert(){ 
         $data = array(
            'lastname' => $this->input->post('lastname'),
            'firstname' => $this->input->post('firstname'),
            'email' => $this->input->post('email'),
            'user_id' => $this->session->id,
            'contact' => $this->input->post('phone'),
            'location' => $this->input->post('brgy'),
            'street' => $this->input->post('street'),
            'type' => $this->input->post('type'),
            'age' => $this->input->post('age'),
            'lastdispersal' => $this->input->post('lastdispersal'),
            'description' => $this->input->post('message')
        );
        return $this->db->insert('tbldispersalconsultation', $data);
    }
    public function allconsultation()
    { 
        $this->db->order_by('status', 'ASC');
        $query = $this->db->get('tbldispersalconsultation');
        return $query->result_array(); 
    }
    public function pendingconsultation()
    {
        $this->db->where('status', '1');
        $this->db->order_by('date_added', 'DESC');
        $query = $this->db->get('tbldispersalconsultation');
        return $query->result_array(); 
    }
    public function ongoingconsultation()
    { 
        $this->db->where('status', '2');
        $this->db->order_by('date_added', 'DESC');
        $query = $this->db->get('tbldispersalconsultation');
        return $query->result_array(); 
    }
    public function acceptedconsultation()
    { 
        $this->db->where('status', '0');
        $this->db->order_by('date_accepted', 'DESC');
        $query = $this->db->get('tbldispersalconsultation');
        return $query->result_array(); 
    }
    public function getuserCstat()
    { 
        $this->db->order_by('id', 'DESC');
        $this->db->where('email', $this->session->email);
        $this->db->or_where('user_id', $this->session->id);
        $query = $this->db->get('tbldispersalconsultation');
        return $query->result_array(); 
    }
    public function dmonitoradd($data)
    { 
        return $this->db->insert('tbldispersal', $data);
    }
    public function updatemonitor($data, $id)
    { 
        $this->db->where('id', $id);
        return $this->db->update('tbldispersal', $data);
    }
    public function consult_update($id)
    {
        $this->db->where('id', $id);
        $data = array(
            'status' => $this->input->post('status'),
            'date_accepted' =>  date('y-m-d h:i:s a')
        );
        return $this->db->update('tbldispersalconsultation', $data);

    }

    public function fetchajaxdata(){ 
        $data = null;
        if($data != NULL){
            return $this->db->insert('tbldispersal', $data);
        }
    }
    public function get_count() {
        $this->db->where('calvingstart <', date('Y-m-d_H-i'));
        return $this->db->count_all_results('tbldispersal');
    }
    public function get_authors($limit, $start) {
        $this->db->limit($limit, $start);
        $this->db->where('calvingstart <', date('Y-m-d_H-i'));
        $query = $this->db->get($this->table);
        return $query->result_array();
    }

    public function get_count1() {
        $this->db->where('calvingstart >=', date('Y-m-d_H-i'));
        return $this->db->count_all_results('tbldispersal');
    }
    public function get_authors1($limit, $start) {
        $this->db->limit($limit, $start);
        $this->db->where('calvingstart >=', date('Y-m-d_H-i'));
        $query = $this->db->get($this->table);
        return $query->result_array();
    }
    public function animaldates()
    { 
        $query = $this->db->get('tblanimaldispersaldays');
        return $query->result_array(); 
    }
    public function dispersalperiod()
    { 
        $query = $this->db->get('tblanimaldispersaldays');
        return $query->result_array(); 
    }
    public function udpatedispersalperiod($id)
    { 
        $this->db->where('id', $id);
        $data = array(
            'days' => $this->input->post('duration')
        );
        return $this->db->update('tblanimaldispersaldays', $data);
    }
    public function deletemonitor($id)
    { 
        $this->db->where('id', $id);
        return $this->db->delete('tbldispersal'); 
    }
}
