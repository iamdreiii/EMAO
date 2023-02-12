<?php 

class Chat_model extends CI_Model{

	public function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->library('session');
    }
	private $Table = 'rtc';
    public function allUser()
    {
		if(isset($_SESSION['email'])){
			$mysession = $_SESSION['email'];
			$this->db->select('*');
			$this->db->where('email != ',$mysession);
			$data = $this->db->get('user');
			if($data->num_rows() > 0){
				return $data->result_array();
			}else{
				return false;
			}
		}
	}
	public function chatlist()
	{
		$userid = $this->session->email;
		$sql = $this->db->query("SELECT * FROM user WHERE email != '$userid' and email in (select receiver_id from rtc )  ORDER BY id DESC");
         return $sql->result();
	}
	public function userchatlist()
	{
		$userid = $this->session->email;
		$sql = $this->db->query("SELECT * FROM user WHERE email != '$userid' ORDER BY id DESC");
         return $sql->result();
	}
	public function loadchat()
	{
		$userid = $this->session->email;
		$sql = $this->db->query("SELECT *, user.email as email, user.pic_file as pic_file FROM rtc LEFT JOIN user on user.email = rtc.receiver_id where  receiver_id = '$userid'");
         return $sql->result();
	}
	public function show(){
		$query = $this->db->get('rtc');
		return $query->result(); 
	}
	public function sendmessage(){
		$time = date('y-m-d h:i:s a');
		$emailid = $_POST['receiver_id'];
		if(!empty($emailid)){
		$data = array(
			'time' => $time,
			'sender_id' => $_POST['receiver_id'],
			'receiver_id' => $this->session->email,
			'message' => $_POST['messageTxt']
		);
		$query = $this->db->insert('rtc', $data);
		return $query->result(); 
	}
	}
	public function TrashById($receiver_id)
	{  
		$ses_id = $this->session->email;
 		$res = $this->db->query("DELETE FROM `rtc`  WHERE (receiver_id = '$receiver_id' AND sender_id = '$ses_id')
		 OR (receiver_id = '$ses_id' AND sender_id = '$receiver_id')"); 
		// $this->db->where('sender_id',$receiver_id);
		// $this->db->where('AND receiver_id',$receiver_id);
		//$res = $this->db->delete($this->Table, ['receiver_id' => $session_id]); 
		if($res == 1)
			return true;
		else
			return false;
 	}
}