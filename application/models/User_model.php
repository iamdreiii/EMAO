<?php

class User_model extends CI_Model{

	public function __construct(){

        $this->load->database();
        $this->load->library('session');  
    }
    public function login(){
        $this->db->where('email', $this->input->post('email', true));
        $this->db->where('password', md5($this->input->post('password', true)));
        $result = $this->db->get('user');
        if($result->num_rows() == 1){
            $data = array(
                'user_status' => 'active'
                );
                $this->db->where('email', $this->input->post('email', true));
                $this->db->update('user', $data);
            return $result->row_array();
        }else{
            return false;
        }
    }
    public function logoutUser($status, $date)
    {
		if(isset($this->session->email)){
			$currentSession = $this->session->email;
			$this->db->query("UPDATE user SET user_status = '$status' , last_logout = '$date' WHERE 
			email = '$currentSession'");
		}
	}
    public function register()
    {
        $unique_id = 'MAO'.date('y').'-'.substr(md5(microtime()), rand(0,25), 6);
        $user_status = 'active';
    	$data = array(
            'unique_id' => $unique_id,
            'username' => $this->input->post('username'),
            'email' => $this->input->post('email'),
            'usertype' => $this->input->post('usertype'),
            'pic_file' => '1.png',
            'password' => md5($this->input->post('password')),
            'user_status' => $user_status
        );
        $this->db->where('email',$this->input->post('email', true));
        $chkuser = $this->db->get('user');
        
        if ($chkuser->num_rows() > 0) {
        	 return false;
        }else{
           
            return $this->db->insert('user', $data);
        }
         
    }
    public function userupdate($data)
    {
        $id = $this->session->id;
        $this->db->select('pic_file')->where('id', $id);
        $query = $this->db->get('user');

        if ($query->num_rows() > 0) {
            $oldpic =  $query->row()->pic_file;
            unlink("./assets/useruploads/$oldpic");
            $data = array(
                'pic_file' => $data['pic_file'],
                'last_name' => $this->input->post('last_name'),
                'first_name' => $this->input->post('first_name'),
                'mid_name' => $this->input->post('mid_name'),
                'email' => $this->input->post('email'),
                'contact' => $this->input->post('contact'),
                'barangay' => $this->input->post('barangay'),
                'date_edited' => date('y,m,d')
                );
                $this->db->where('id', $id);
                return $this->db->update('user', $data);
        }else{
        $data = array(
        'pic_file' => $data['pic_file'],
        'last_name' => $this->input->post('last_name'),
        'first_name' => $this->input->post('first_name'),
        'mid_name' => $this->input->post('mid_name'),
        'email' => $this->input->post('email'),
        'contact' => $this->input->post('contact'),
        'municipality' => $this->input->post('municipality'),
        'barangay' => $this->input->post('barangay'),
        'date_edited' => date('y,m,d')
        );
        $this->db->where('id', $id);
        return $this->db->update('user', $data);
        }   
    }
    public function updateinfo($data)
    {
        $id = $this->session->id;
        $data = array(
            'last_name' => $this->input->post('lastname'),
            'first_name' => $this->input->post('firstname'),
            'mid_name' => $this->input->post('midname'),
            'contact' => $this->input->post('phone'),
            'barangay' => $this->input->post('brgy'),
            'date_edited' => date('y,m,d')
            );
            $this->db->where('id', $id);
            return $this->db->update('user', $data);
    }
    public function changeprofile($data)
    {
        $id = $this->session->id;
        $this->db->select('pic_file')->where('id', $id);
        $query = $this->db->get('user');

        if ($query->num_rows() > 0) {
            $oldpic =  $query->row()->pic_file;
            unlink("./assets/useruploads/$oldpic");
            $data = array(
                'pic_file' => $data['pic_file']
                );
                $this->db->where('id', $id);
                return $this->db->update('user', $data);
        }else{
        $data = array(
        'pic_file' => $data['pic_file']
        );
        $this->db->where('id', $id);
        return $this->db->update('user', $data);
        }   
    }
    public function changepass()
    {
        $id = $this->session->id;
        $data = array(
            'password' => md5($this->input->post('password'))
             );
        $this->db->where('id', $id);
        return $this->db->update('user', $data);
    }
    public function updatepass($pass)
    {
        $id = $this->session->id;
        $data = array(
            'password' => md5($pass)
             );
        $this->db->where('id', $id);
        return $this->db->update('user', $data);
    }
    public function changepassword($password, $decrypted_email)
    {
        // $salt="this_Is_mao_system_id_salt_encrypt";
        // $email = $this->uri->segment(2);;
        // $rawemail = base64_decode($email);
        // $decrypted_email = preg_replace(sprintf('/%s/', $salt), '', $rawemail);
        // $passencrypt = md5($pass);
        //$del = $this->db->query("DELETE FROM `tbl_codes` where `email` = '$decrypted_email'");
        // return $this->db->query("UPDATE user SET password = '$passencrypt' WHERE email = '$decrypted_email' ");
        // $data = array(
        //     'password' => md5($password)
        //      );
        // $this->db->where('id', $decrypted_email);
        // return $this->db->update('user', $data);
        $pass = md5($password);
        $query = $this->db->query('UPDATE `user` SET `password` = "'.$pass.'" WHERE `email` = "'.$decrypted_email.'"');
        if($query === TRUE){
            return true;
        }else{
            return false;
        }
    }
    public function getuser()
    {
       $this->db->where('id', $this->session->id);
        $query = $this->db->get('user');
        return $query->result_array(); 
    }
    public function getuseraddress()
    {
        $query = $this->db->query('SELECT user.municipality, user.barangay, barangay.subcategory from user join barangay on user.municipality =  barangay.cat_id');
        return $query->result_array(); 
    }
    public function getuser1($param)
    {
       $this->db->where('id', $param);
        $query = $this->db->get('user');
        return $query->row_array(); 
    }
    public function activate_email($email)
    {
        $data = array(
            'status' => 'active'
             );
        $this->db->where('email', $email);
        return $this->db->update('user', $data);
    }
    public function getallusers(){
        $query =  $this->db->get('user');
        return $query->result();
    }
    public function getalluser(){
        $this->db->where('usertype !=', 'admin');
        $query =  $this->db->get('user');
        return $query->result_array();
    }
    public function getall_a(){
        $this->db->where('usertype', 'admin' );
        $query =  $this->db->get('user');
        return $query->result();
    }
    public function getall_ca(){
        $this->db->where('usertype', 'ca' );
        $query =  $this->db->get('user');
        return $query->result();
    }
    public function getall_p(){
        
        $this->db->where('usertype', 'user' );
        $query =  $this->db->get('user');
        return $query->result();
    }
    public function chart4(){
        $query =  $this->db->query("SELECT COUNT(id) as count,MONTHNAME(date_registered) as month_name FROM user WHERE YEAR(date_registered) = '" . date('Y') . "'
            GROUP BY YEAR(date_registered),MONTH(date_registered)"); 

            $record = $query->result();
            $data = [];

            foreach($record as $row) {
            $data['label4'][] = $row->month_name;
            $data['data4'][] = (int) $row->count;
            }
           return $data['chart_data'] = json_encode($data);

    }
    function getCity(){
        $response = array();
        $this->db->select('*');
        $q = $this->db->get('municipality');
        $response = $q->result_array();
    
        return $response;
      }
      function getCityDepartment($postData){
        $response = array();
        $this->db->select('cat_id,subcategory');
        $this->db->where('cat_id', $postData['municipality']);
        $q = $this->db->get('barangay');
        $response = $q->result_array();
    
        return $response;
      }
    public function get_all_users(){
        $query =  $this->db->get('user');
        return $query->result_array();
    }
    public function latestuser(){
        $this->db->limit('1');
        $this->db->order_by('id', 'desc');
        $query =  $this->db->get('user');
        return $query->result_array();
    }
    public function updateuserstat()
    {
        $status = $this->input->post('status');
	if($status == 'active'){
		$status = 'inactive';
	}
	else{
		$status = 'active';
	}
    $data = array(
        'status' => $status
         );
        $id = $this->input->post('id');
        $this->db->where('id', $id);
        return  $this->db->update('user', $data);
    }
    public function requestaccountdeletion(){
         $this->db->where('email', $this->session->email);
        return $this->db->delete('user');
    }
    public function updateemail(){
        $email = $this->input->post('email');
         $this->db->where('email', $this->session->email);
         $data = array(
            'email' => $email
        );
        return $this->db->update('user', $data);
    }
    public function changeadminpass()
    {
        $email = $this->session->email;
        $data = array(
            'password' => md5($this->input->post('password'))
             );
        $this->db->where('email', $email);
        return $this->db->update('user', $data);
    }
}