<?php

class Pet_model extends CI_Model{
    var $tblpet = 'tblpet';

	public function __construct() {
        
        $this->load->database();
        $this->load->library('session');
    }
    public function get_all_pet()
    {
        $this->db->order_by('name', 'ASC');
        $query = $this->db->get('tblpet');
        return $query->result_array(); 
    }
    public function vaccinated()
    {
        $this->db->where('vaccination', 'yes');
        $query = $this->db->get('tblpet');
        return $query->result_array(); 
    }
    public function get_user_pet()
    {
        $email = $this->session->email;
       // $this->db->order_by('name', 'ASC');
       // $this->db->where('owner', $this->session->email);
       //  $query = $this->db->get('tblpet');
        $query = $this->db->query('SELECT * FROM `tblpet` INNER JOIN `tbl_petcategory` ON `tbl_petcategory`.`cat_id` = `tblpet`.`type` WHERE `owner` = "'.$email.'" ');
        return $query->result_array(); 
    }
    public function get_user_pets()
    {
       $this->db->order_by('name', 'ASC');
       $this->db->select('*, tblpethistory.id as tp_id, tblpethistory.date as tp_date, tblpethistory.vaccine as tp_vaccine');
       $this->db->from('tblpet');
       $this->db->join('tblpethistory', 'tblpet.id = tblpethistory.id');
       $this->db->where('owner', $this->session->email);
        $query = $this->db->get();
        return $query->result_array(); 
    }

    public function get_user_pet_per_id($id=null)
    {
        if ($id!=null) {
            $this->db->order_by('date', 'ASC');
            $this->db->where('id', $id);
            $query = $this->db->get('tblpethistory');  
            return $query->result_array(); 
        }
    }
    public function get_user_petid($id=null)
    {
        if ($id!=null) {
            
            $this->db->where('id', $id);
            $query = $this->db->get('tblpet');  
            return $query->result_array(); 
        }
    }
    public function get_pethistoryid($id=null)
    {
        if ($id!=null) {
            $this->db->limit('1');
            $this->db->order_by('date', 'DESC');
            $this->db->where('id', $id);
            $query = $this->db->get('tblpethistory');  
            return $query->result_array(); 
        }
    }

    public function updatepethistory(){
       
        $data = array(
            'id' => $this->input->post('id'),
            'vaccine' => $this->input->post('vaccine'),
            'date' => $this->input->post('date')
             );
        return $this->db->insert('tblpethistory', $data);
    }

    public function get_user_petss()
    {
        
        $this->db->join('tblpet', 'tblpet.id = tblpethistory.id');
        $query = $this->db->get('tblpethistory'); 
        return $query->result_array(); 
    }


    public function get_pet_view($param){
        //SINGLE-LINE GET
        $this->db->select('`tblpet`.`id`, `tblpet`.`name`,  `tblpet`.`type`, `tblpet`.`birthdate`, `tblpet`.`breed`, `tblpet`.`sex`, `tblpet`.`sterilization`, `tblpet`.`vaccination`, `tblpet`.`color`, `tblpet`.`size`, `tblpet`.`description`, `tblpet`.`owner`, `user`.`email`, `user`.`last_name`, `user`.`first_name`, `user`.`mid_name`');
        $this->db->from('tblpet');
        $this->db->join('user', 'user.email = tblpet.owner', 'LEFT');
        $this->db->where('`tblpet`.`id`', $param);
        $result = $this->db->get();
        //MULTI-LINE GET $result = $this->db->get_where('post', array('id' => $param));
        
        return $result->row_array();
    }
    public function get_pet_edit($param){
        //SINGLE-LINE GET
        $this->db->where('id', $param);
        $result = $this->db->get('tblpet');
        //MULTI-LINE GET $result = $this->db->get_where('post', array('id' => $param));
        return $result->row_array();
    }

    public function updatepet($data)
    {
        $id = $this->input->post('id');
        $this->db->select('img_file')->where('id', $id);
        $query = $this->db->get('tblpet');

        if ($query->num_rows() > 0) {
            $oldpic =  $query->row()->pic_file;
            unlink("./assets/useruploads/petprofile/$oldpic");
            $data = array(
                'img_file' => $data['petimage'],
                'name' => $this->input->post('name'),
                'type' => $this->input->post('type'),
                'birthdate' => $this->input->post('birthdate'),
                'breed' => $this->input->post('breed'),
                'sex' => $this->input->post('sex'),
                'sterilization' => $this->input->post('sterilization'),
                'vaccination' => $this->input->post('vaccination'),
                'color' => $this->input->post('color'),
                'size' => $this->input->post('size'),
                'description' => $this->input->post('description'),
                'status' => $this->input->post('status')
             );
            $this->db->where('id', $id);
            return $this->db->update('tblpet', $data);
        }else{
        $data = array(
            'img_file' => $data['petimage'],
            'name' => $this->input->post('name'),
            'type' => $this->input->post('type'),
            'birthdate' => $this->input->post('birthdate'),
            'breed' => $this->input->post('breed'),
            'sex' => $this->input->post('sex'),
            'sterilization' => $this->input->post('sterilization'),
            'vaccination' => $this->input->post('vaccination'),
            'color' => $this->input->post('color'),
            'size' => $this->input->post('size'),
            'description' => $this->input->post('description'),
            'status' => $this->input->post('status')
             );
        $this->db->where('id', $id);
        return $this->db->update('tblpet', $data);
    }
    }
    public function addpet($data)
    {   
        $data = array(
            'img_file' => $data['petimage'],
            'name' => $this->input->post('name'),
            'type' => $this->input->post('type'),
            'birthdate' => $this->input->post('birthdate'),
            'breed' => $this->input->post('breed'),
            'sex' => $this->input->post('sex'),
            'sterilization' => $this->input->post('sterilization'),
            'vaccination' => $this->input->post('vaccination'),
            'color' => $this->input->post('color'),
            'size' => $this->input->post('size'),
            'description' => $this->input->post('description'),
            'owner' => $this->input->post('owner'),
             );
        return $this->db->insert('tblpet', $data);
    }
    
    public function updateuserpet($data, $id)
    {
        $this->db->where('id', $id);
        return $this->db->update('tblpet', $data);
    }
    function fetch_data($id)
    {
        $this->db->where('id', $id);

        $query = $this->db->get($this->tblpet);
        return $query->row_array();
    }
    
    
    public function chart3(){
        $query =  $this->db->query("SELECT COUNT(id) as count,MONTHNAME(date_recorded) as month_name FROM tblpet
            GROUP BY YEAR(date_recorded),MONTH(date_recorded)"); 

            $record = $query->result_array();
            $data = [];

            foreach($record as $row) {
            $data['label3'][] = $row['month_name'];
            $data['data3'][] = (int) $row['count'];
            }
           return $data['chart_data'] = json_encode($data);

    }

    public function getcategory(){
        $response = array();
        // Select record
        $this->db->select('*');
        $q = $this->db->get('tbl_petcategory');
        $response = $q->result_array();
        return $response;
      }
      // Get pet subcategory
    public function getsubcategory($postData){
        $response = array();
     
        // Select record
        $this->db->select('cat_id,subcategory');
        $this->db->where('cat_id', $postData['type']);
        $q = $this->db->get('tbl_petsubcategory');
        $response = $q->result_array();
    
        return $response;
      }

}