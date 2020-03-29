<?php
class Users_model extends CI_Model {
	var $company_id; 
	
    function __construct() {
		parent::__construct();
		// $this->company_id = $this->session->userdata('company_id');
		$this->load->database();
		$this->load->helper('date');
    }

	function list_users() {
		// $sql = "SELECT uit.user_id, uit.company_id, uit.username, uit.lastname, uit.firstname, uit.middlename, uit.position_id, " .
		// 	"uit.rate, uit.computation_type, uit.allow_bonus_flag, uit.emp_flag, uit.password, uit.status_flag, uit.access_type, " .
		// 	"uit.email_address, uit.date_created, uit.date_updated, cit.company_name, pt.position_name FROM user_info_tb uit " .
		// 	"LEFT JOIN company_info_tb cit ON uit.company_id = cit.company_id " . 
		// 	"LEFT JOIN position_tb pt ON uit.position_id = pt.position_id " . 
		// 	"ORDER BY uit.lastname ";s
		$sql = "SELECT * FROM user_info_tb WHERE status_flag = '1' AND NOT user_type = 'Member' AND NOT user_type = 'Priest'";

		$query = $this->db->query($sql);
		return $query->result_array();
	}
	function list_users_1() {
		// $sql = "SELECT uit.user_id, uit.company_id, uit.username, uit.lastname, uit.firstname, uit.middlename, uit.position_id, " .
		// 	"uit.rate, uit.computation_type, uit.allow_bonus_flag, uit.emp_flag, uit.password, uit.status_flag, uit.access_type, " .
		// 	"uit.email_address, uit.date_created, uit.date_updated, cit.company_name, pt.position_name FROM user_info_tb uit " .
		// 	"LEFT JOIN company_info_tb cit ON uit.company_id = cit.company_id " . 
		// 	"LEFT JOIN position_tb pt ON uit.position_id = pt.position_id " . 
		// 	"ORDER BY uit.lastname ";
		$sql = "SELECT * FROM user_info_tb limit 1";

		$query = $this->db->query($sql);
		return $query->result_array();
	}

	function list_priests() {
		$sql = "SELECT * FROM user_info_tb WHERE status_flag = '1' AND user_type = 'Priest'";

		$query = $this->db->query($sql);
		return $query->result_array();
	}

	function list_members() {
		$sql = "SELECT * FROM user_info_tb WHERE status_flag = '1' AND user_type = 'Member'";

		$query = $this->db->query($sql);
		return $query->result_array();
	}	

	function insert_user($username='', $lastname='', $firstname='', $middlename='', $position_id=0, $rate=0, $computation_type='', 
		$allow_bonus_flag=0, $employee_flag=0, $status_flag=0, $user_access='', $email_address='', $company_id=0) {

		$sql = "INSERT INTO user_info_tb(username, lastname, firstname, middlename, position_id, rate, computation_type, " .
			"allow_bonus_flag, emp_flag, status_flag, access_type, email_address, company_id, date_created) " . 
			"VALUES(".$this->db->escape($username).", ".$this->db->escape($lastname).", ".$this->db->escape($firstname).", " .
			"".$this->db->escape($middlename).", '$position_id', '$rate', '$computation_type', '$allow_bonus_flag', " .
			"'$employee_flag', '$status_flag', '$user_access', '$email_address', '$company_id', NOW()) ";

		$query = $this->db->query($sql);
		return @$this->db->insert_id();
	}

	function insert_member($fname='', $mname='', $lname='', $gender='', $email='', $address='', $username='', $password='', $mem_code) {

		$sql = "INSERT INTO members_info_tb(fname, mname, lname, gender, email, address, username, password, date_added, status_flag, code) " . 
			"VALUES(".$this->db->escape($fname).", ".$this->db->escape($mname).", ".$this->db->escape($lname).",".$this->db->escape($gender).", '$email', '$address', '$username', '$password', NOW(), '0', ".$this->db->escape($mem_code).") ";

		echo ("$sql"); die();

		$query = $this->db->query($sql);
		return @$this->db->insert_id();
	}


	public function insert($mem){
		$this->db->insert('user_info_tb', $mem);
		return $this->db->insert_id(); 
	}
	public function update_user($user){
		$id = $this->session->userdata('user_id');
		// $id = '6';	
		$this->db->where('user_id', $id);
		return $this->db->update('user_info_tb', $user);
	}

	public function getUser($mem_id){
		$query = $this->db->get_where('user_info_tb',array('user_id'=>$mem_id));
		return $query->row_array();
	}

	public function activate($data, $mem_id){
		$this->db->where('user_info_tb.user_id', 	$mem_id);
		return $this->db->update('user_info_tb', $data);
	}


	function check_login($username='', $password='') {
		$sql = "SELECT user_id, fname, mname, lname, username, password, user_type, gender, mobile_no, address, date_added, profile, status_flag FROM user_info_tb WHERE md5(lcase(username)) = md5(lcase('$username')) AND password = md5('$password') AND user_type !='Member' AND status_flag = '1'";
		   	

		// echo ("$sql"); die();
		
		$query = $this->db->query($sql);
    	return @$query->row();
	}

	function check_login_member($username='', $password='') {
		$sql = "SELECT user_id, fname, mname, lname, username, password, user_type, gender, mobile_no, address, date_added, profile, status_flag FROM user_info_tb WHERE BINARY username = '$username' AND password = md5('$password') AND status_flag = '1' ";
		// echo ("$sql"); die();
		
		$query = $this->db->query($sql);
    	return @$query->row();
	}

	function check_username($username='') {
		$sql = "SELECT user_id, username, password, firstname, lastname, status_flag, company_id, date_created, date_updated ".
        	"FROM user_info_tb WHERE md5(lcase(username)) = md5(lcase('$username')) ".
		    "AND status_flag IN (0,1,2)";
		
    	$query = $this->db->query($sql);
		return @$query->row();
	}

	function check_username_member($username='') {
		$sql = "SELECT * FROM members_info_tb WHERE username = '$username' ";
		
		$query = $this->db->query($sql);
		return @$query->row();
	}

	function update_password($user_id=0, $password='') {
		$sql = "UPDATE user_info_tb SET password=md5('$password') WHERE user_id='$user_id' ";
		// $sql = "UPDATE user_info_tb SET password='$password' WHERE user_id='$user_id' ";

        $query = $this->db->query($sql);
        return 1;
	}

	function update_password_member($user_id_member=0, $password='') {
		// $sql = "UPDATE user_info_tb SET password=md5('$password') WHERE user_id='$user_id' ";
		$sql = "UPDATE members_info_tb SET password='$password' WHERE ID='$user_id_member' ";

		// echo ("$sql"); die();

        $query = $this->db->query($sql);
        return 1;
	}

	function remove_user($username='') {
		$sql = "DELETE FROM user_info_tb WHERE username='$username'";

		$query = $this->db->query($sql);
		return 1;
	}

	function remove_user_deduction($record_id=0) {
		$sql = "DELETE FROM user_deduction_tb WHERE record_id='$record_id'";

		$query = $this->db->query($sql);
		return 1;
	}

	function remove_user_earning($record_id=0) {
		$sql = "DELETE FROM user_earning_tb WHERE record_id='$record_id'";

		$query = $this->db->query($sql);
		return 1;
	}

	public function get_account() {
        $username=$this->input->post('username');
        $this->db->select('*'); 
        $this->db->from('user_info_tb');
        $this->db->where('username',$username);
        // $this->db->limit('5');
        return $this->db->get();    
    }

}
?>
