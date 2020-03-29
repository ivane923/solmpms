<?php
class Branch_model extends CI_Model {
	var $branch_id; 
	
    function __construct() {
		parent::__construct();
		$this->branch_id = $this->session->userdata('branch_id');

		$this->load->helper('date');
    }

	function list_branches() {
		$sql = "SELECT rec_id, branch_id, branch_name, status_flag, date_created, date_updated " .
			"FROM branch_tb ORDER BY branch_name ";

		$query = $this->db->query($sql);
		return $query->result_array();
	}

	function insert_branch($branch_id=0, $branch_name='') {
		$sql = "INSERT INTO branch_tb(branch_id, branch_name, date_created) " . 
			"VALUES('$branch_id', ".$this->db->escape($branch_name).", NOW()) ";

		$query = $this->db->query($sql);
		return @$this->db->insert_id();
	}
	
	function check_branch($branch_name='') {
		$sql = "SELECT rec_id, branch_id, branch_name, date_created, date_updated ".
        	"FROM branch_tb WHERE md5(lcase(branch_name)) = md5(lcase('$branch_name')) ".
		    "AND status_flag IN (1,2)";
		    
    	$query = $this->db->query($sql);
		return @$query->row();
	}

	function update_branch($branch_id=0, $branch_name='') { 
    	$sql = "UPDATE branch_tb SET branch_name=".$this->db->escape($branch_name)." WHERE branch_id='$branch_id'";
		
		$query = $this->db->query($sql);
        return 1;
	}

	function remove_branch($branch_id=0) {
		$sql = "DELETE FROM branch_tb WHERE branch_id='$branch_id'";

		$query = $this->db->query($sql);
		return 1;
	}

}
?>
