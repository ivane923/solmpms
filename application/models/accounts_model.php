<?php
class Users_model extends CI_Model {
	var $account_id; 
	var $account_pic;
	var $ads_path;
	var $ads_path_url;
	
    function __construct() {
		parent::__construct();
		$this->account_id = $this->session->userdata('account_id');

		$this->load->helper('date');
    }

	function list_users() {
		$sql = "SELECT user_id, account_id, username, firstname, lastname, password, status_flag, admin_flag, " .
			"fullaccess_flag, date_created, date_updated FROM user_info_tb WHERE account_id='$this->account_id' " .
			"ORDER BY username"; 

		$query = $this->db->query($sql);
		return $query->result_array();
	}

	function insert_user($username='', $firstname='', $lastname='', $admin_flag=0, $password='') {
		$sql = "INSERT INTO user_info_tb(username, firstname, lastname, admin_flag, password, date_created, account_id) " . 
			"VALUES(".$this->db->escape($username).", ".$this->db->escape($firstname).", ".$this->db->escape($lastname).", '$admin_flag', " .
			"md5('$password'), NOW(), '$this->account_id') ";

		$query = $this->db->query($sql);
		return @$this->db->insert_id();
	}
	
	function check_login($username='', $password='') {
		$sql = "SELECT user_id, account_id, username, password, firstname, lastname, status_flag, date_created, " .
			"date_updated, admin_flag, fullaccess_flag ".
			"FROM user_info_tb WHERE md5(lcase(username)) = md5(lcase('$username')) ".
		   	"AND password = md5('$password') AND status_flag IN (1,2)";
		
		$query = $this->db->query($sql);
    	return @$query->row();
	}

	function check_username($username='') {
		$sql = "SELECT user_id, username, password, firstname, lastname, status_flag, account_id, date_created, date_updated ".
        	"FROM user_info_tb WHERE md5(lcase(username)) = md5(lcase('$username')) ".
		    "AND status_flag IN (1,2)";

    	$query = $this->db->query($sql);
		return @$query->row();
	}

	function update_password($user_id=0, $password='') {
		$sql = "UPDATE user_info_tb SET password=md5('$password') WHERE user_id='$user_id'";

        $query = $this->db->query($sql);
        return 1;
	}

	function update_user($username='', $firstname='', $lastname='', $admin_flag=0) { 
    	$sql = "UPDATE user_info_tb SET firstname=".$this->db->escape($firstname).", lastname=".$this->db->escape($lastname).", " .
    		"admin_flag='$admin_flag' WHERE username='$username'";
		
		$query = $this->db->query($sql);
        return 1;
	}

	function remove_user($username='') {
		$sql = "DELETE FROM user_info_tb WHERE username='$username'";

		$query = $this->db->query($sql);
		return 1;
	}

}
?>
