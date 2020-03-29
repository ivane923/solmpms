<?php
class deduction_model extends CI_Model {
	var $deduction_id; 
	
    function __construct() {
		parent::__construct();
		$this->deduction_id = $this->session->userdata('deduction_id');

		$this->load->helper('date');
    }

	function list_deductions() {
		$sql = "SELECT deduction_id, deduction_name, status_flag, date_created, date_updated " .
			"FROM deduction_info_tb ORDER BY deduction_name ";

		$query = $this->db->query($sql);
		return $query->result_array();
	}

	function insert_deduction($deduction_name='') {
		$sql = "INSERT INTO deduction_info_tb(deduction_name, date_created) " . 
			"VALUES(".$this->db->escape($deduction_name).", NOW()) ";

		$query = $this->db->query($sql);
		return @$this->db->insert_id();
	}
	
	function check_deduction($deduction_name='') {
		$sql = "SELECT deduction_id, deduction_name, date_created, date_updated, status_flag ".
        	"FROM deduction_info_tb WHERE md5(lcase(deduction_name)) = md5(lcase('$deduction_name')) ".
		    "AND status_flag IN (1,2)";
		   
		// echo ("$sql"); die();   
    	$query = $this->db->query($sql);
		return @$query->row();
	}

	function update_branch($deduction_id=0, $deduction_name='') { 
    	$sql = "UPDATE deduction_info_tb SET deduction_name=".$this->db->escape($deduction_name)." WHERE deduction_id='$deduction_id'";
		
		$query = $this->db->query($sql);
        return 1;
	}

	function remove_branch($deduction_id=0) {
		$sql = "DELETE FROM deduction_info_tb WHERE deduction_id='$deduction_id'";

		$query = $this->db->query($sql);
		return 1;
	}

}
?>
