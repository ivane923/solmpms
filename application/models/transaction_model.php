
<?php
class Transaction_model extends CI_Model {
	var $baptism_id; 
	
    function __construct() {
		parent::__construct();
		$record_id = $this->session->userdata('ID');

		$this->load->helper('date');
    }

	function list_transaction() {
		$sql = "SELECT * FROM payment_transaction_tb";

		$query = $this->db->query($sql);
		return $query->result_array();
	}

	function list_transaction_mem() {
		$record_id = $this->session->userdata('user_id');
		$sql = "SELECT * FROM payment_transaction_tb WHERE user_id = '$record_id'";

		$query = $this->db->query($sql);
		return $query->result_array();
	}

	function list_donation() {
		$record_id = $this->session->userdata('ID');
		$sql = "SELECT * FROM donation_tb";

		$query = $this->db->query($sql);
		return $query->result_array();
	}
	
	function update_transaction($payment_id, $cash = 0) {
		$sql = "UPDATE payment_transaction_tb SET cash = ".$this->db->escape($cash).", payment_status = '1', date_updated = NOW() WHERE payment_id = '$payment_id' ";
		
		echo ("$sql"); die();
		$query = $this->db->query($sql);
		return 1;
	}

	// function update_transaction($baptismal ='', $informant ='', $applicant ='', $tran_id = '') {
	// 	$sql = "UPDATE payment_transaction_tb SET events = ".$this->db->escape($baptismal).", informant = ".$this->db->escape($informant).", applicant_name = ".$this->db->escape($applicant)." WHERE tran_id = '$tran_id' ";
	// 	// echo ("$sql"); die();

	// 	$query = $this->db->query($sql);
	// 	return 1;
	// }
	
	function check_baptismal_record($fname = '' , $mname = '' , $lname = '', $tran_id = '') {
		$sql = "SELECT fname, mname, lname, tran_id FROM baptismal_info_tb WHERE fname = '$fname' AND mname = '$mname' AND Lname ='$lname' AND tran_id = '$tran_id' ";
		   
		// echo ("$sql"); die();   
    	$query = $this->db->query($sql);
		return @$query->row();
	}

	function check_payment($payment_status) {
		$sql = "SELECT * FROM payment_transaction_tb WHERE payment_status = '1' ";

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
