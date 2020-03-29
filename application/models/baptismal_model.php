<?php
class Baptismal_model extends CI_Model {
	var $baptism_id; 
	
    function __construct() {
		parent::__construct();
		$this->record_id = $this->session->userdata('baptism_id');

		$this->load->helper('date');
    }

	function list_baptismal() {
		// $sql = "SELECT baptism_id, fname, mname, lname FROM baptismal_info_tb";
		$sql = "SELECT * FROM baptismal_info_tb WHERE payment_status = '1' AND doc_status = '0'";

		$query = $this->db->query($sql);
		return $query->result_array();
	}
	// , $mname = '', $lname = '', $dateTobaptise = '', $birthdate = '', $birthplace = '', $father = '', $father_birthplace = '', $mother = '', $mother_birthplace = '', $address = '', $mobile_no = '', $email = '', $marriage = '', $Appointedby = '', $attendance = '', $doc_status = '', $GodFather = '', $GodFather_bplace = '', $GodMother = '', $GodMother_bplace = '', $additional_GodFather = '', $additional_GodMother
	function insert_baptismal($fname = '', $mname = '', $lname = '', $dateTobaptise, $birthdate, $birthplace = '', $father = '', $father_birthplace = '', $mother = '', $mother_birthplace = '', $address = '', $mobile_no = '', $email = '', $marriage = '', $informant = '', $attendance, $doc_status, $GodFather = '', $GodFather_bplace = '', $GodMother = '', $GodMother_bplace = '', $additional_GodFather = '', $additional_GodMother, $tran_id) {
		// $sql = "INSERT INTO baptismal_info_tb (fname) VALUES ('$fname')";
		$sql = "INSERT INTO baptismal_info_tb (fname, mname, lname, dateTobaptise, birthdate, birthplace, father, father_birthplace, mother, mother_birthplace, address,mobile_no, email,marriage, informant, attendance, doc_status, GodFather, GodFather_bplace, GodMother, GodMother_bplace, additional_GodFather, additional_GodMother, tran_id, date_added, date_updated, notif_status) VALUES(".$this->db->escape($fname).", ".$this->db->escape($mname).", ".$this->db->escape($lname).", ".$this->db->escape($dateTobaptise).", ".$this->db->escape($birthdate).", ".$this->db->escape($birthplace).", ".$this->db->escape($father).", ".$this->db->escape($father_birthplace).", ".$this->db->escape($mother).", ".$this->db->escape($mother_birthplace).", ".$this->db->escape($address).", ".$this->db->escape($mobile_no).", ".$this->db->escape($email).", ".$this->db->escape($marriage).", ".$this->db->escape($informant).", '0', '0', ".$this->db->escape($GodFather).", ".$this->db->escape($GodFather_bplace).", ".$this->db->escape($GodMother).", ".$this->db->escape($GodMother_bplace).", ".$this->db->escape($additional_GodFather).", ".$this->db->escape($additional_GodMother).", ".$this->db->escape($tran_id).", NOW(), NOW(), '1')";

		// echo ("$sql"); die();
		$query = $this->db->query($sql);
		return @$this->db->insert_id();
	}
	function insert_transaction($tran_id = '', $baptismal ='', $informant ='', $applicant ='', $qrlink ='', $amount, $record_id_user) {
		$sql = "INSERT INTO payment_transaction_tb (tran_id, events, informant, applicant_name, qrcode_image, payment_amount, payment_status, user_id, date_added, date_updated) VALUES (".$this->db->escape($tran_id).", ".$this->db->escape($baptismal).", ".$this->db->escape($informant).", ".$this->db->escape($applicant).", ".$this->db->escape($qrlink).", ".$this->db->escape($amount).", '0', ".$this->db->escape($record_id_user)." , NOW(), NOW())";
		echo ("$sql"); die();

		$query = $this->db->query($sql);
		return @$this->db->insert_id();
	}

	function update_status($baptism_id, $attendance = '') {
		$sql = "UPDATE baptismal_info_tb SET attendance = ".$this->db->escape($attendance)." WHERE baptism_id = '$baptism_id' ";
		// echo ("$sql"); die();
		$query = $this->db->query($sql);
		return 1;
	}
	function update_baptismal($baptism_id, $fname = '', $mname = '', $lname = '', $dateTobaptise, $birthdate, $birthplace = '', $father = '', $father_birthplace = '', $mother = '', $mother_birthplace = '', $address = '', $mobile_no = '', $email = '', $marriage = '', $informant = '', $attendance =0, $doc_status, $GodFather = '', $GodFather_bplace = '', $GodMother = '', $GodMother_bplace = '', $additional_GodFather = '', $additional_GodMother ='') {
		$sql = "UPDATE baptismal_info_tb SET fname = ".$this->db->escape($fname).", mname = ".$this->db->escape($mname).", lname = ".$this->db->escape($lname).", dateTobaptise = ".$this->db->escape($dateTobaptise).", birthdate = ".$this->db->escape($birthdate).", birthplace = ".$this->db->escape($birthplace).", father = ".$this->db->escape($father).", father_birthplace = ".$this->db->escape($father_birthplace).", mother = ".$this->db->escape($mother).", mother_birthplace = ".$this->db->escape($mother_birthplace).", address = ".$this->db->escape($address).", mobile_no = ".$this->db->escape($mobile_no).", email = ".$this->db->escape($email).", marriage = ".$this->db->escape($marriage).", informant = ".$this->db->escape($informant).", attendance = ".$this->db->escape($attendance).", doc_status = ".$this->db->escape($doc_status).", GodFather = ".$this->db->escape($GodFather).", GodFather_bplace = ".$this->db->escape($GodFather_bplace).", GodMother = ".$this->db->escape($GodMother).", GodMother_bplace = ".$this->db->escape($GodMother_bplace).", additional_GodFather = ".$this->db->escape($additional_GodFather).", additional_GodMother = ".$this->db->escape($additional_GodMother).", date_updated = NOW() WHERE baptism_id = '$baptism_id' ";
		
		// echo ("$sql"); die();
		$query = $this->db->query($sql);
		return 1;
	}

	function update_transaction($baptismal ='', $informant ='', $applicant ='', $tran_id = '', $amount) {
		$sql = "UPDATE payment_transaction_tb SET events = ".$this->db->escape($baptismal).", informant = ".$this->db->escape($informant).", applicant_name = ".$this->db->escape($applicant).", payment_amount = ".$this->db->escape($amount).", date_updated = NOW() WHERE tran_id = '$tran_id' ";
		// echo ("$sql"); die();

		$query = $this->db->query($sql);
		return 1;
	}
	
	function check_baptismal_record($fname = '' , $mname = '' , $lname = '') {
		$id = $this->session->userdata('user_id');
		$sql = "SELECT fname, mname, lname, tran_id FROM baptismal_info_tb WHERE fname = '$fname' AND mname = '$mname' AND Lname ='$lname' AND informant = '$id'";
		   
		// echo ("$sql"); die();   
    	$query = $this->db->query($sql);
		return @$query->row();
	}

	function check_confirmation_record($fname = '' , $mname = '' , $lname = '') {
		$sql = "SELECT fname, mname, lname FROM confirmation_tb WHERE fname = '$fname' AND mname = '$mname' AND Lname ='$lname'";
		   
		// echo ("$sql"); die();   
    	$query = $this->db->query($sql);
		return @$query->row();
	}

	function check_tranID_record($tran_id = '') {
		
		$sql = "SELECT tran_id FROM baptismal_info_tb WHERE tran_id ='$tran_id'";
		   
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
