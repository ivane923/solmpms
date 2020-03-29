<?php
class events_model extends CI_Model {
	var $baptism_id; 
	
    function __construct() {
		parent::__construct();
		// $this->record_id = $this->session->userdata('baptism_id');
		// $this->record_id = $this->session->userdata('confirmation_id');

		$this->load->helper('date');

    }

	function list_baptismal() {
		// $sql = "SELECT *, CONCAT(lname, ' ', fname,' ', mname,'.') AS FULLNAME FROM baptismal_info_tb";
		$sql = "SELECT *, CONCAT(lname, ' ', fname,' ', mname,'.') AS FULLNAME FROM baptismal_info_tb WHERE payment_status = '1' AND allowed_status = '1' ORDER BY dateTobaptise DESC";

		$query = $this->db->query($sql);
		return $query->result_array();
	}

	function list_baptismal_records() {
		$user_id = $this->session->userdata('user_id');
		$sql = "SELECT *, CONCAT(lname, ' ', fname,' ', mname,'.') AS FULLNAME FROM baptismal_info_tb WHERE informant = '$user_id' ORDER BY date_updated";

		$query = $this->db->query($sql);
		return $query->result_array();
	}

	function list_confirmation() {
		$sql = "SELECT * FROM confirmation_tb";

		$query = $this->db->query($sql);
		return $query->result_array();
	}

	function list_death() {
		$sql = "SELECT * FROM death_tb";

		$query = $this->db->query($sql);
		return $query->result_array();
	}
	function list_death_records() {
		$user_id = $this->session->userdata('user_id');
		$sql = "SELECT *, CONCAT(lname,' ',fname,' ',mname,'.') AS FULLNAME FROM death_tb WHERE name_informant = '$user_id' AND allowed_status != '2' ";

		$query = $this->db->query($sql);
		return $query->result_array();
	}
	function list_matrimony_records() {
		$user_id = $this->session->userdata('user_id');
		$sql = "SELECT *, CONCAT(g_fname,' ',g_lname,' & ',b_fname,' ',b_lname) AS FULLNAME FROM matrimony_tb WHERE informant = '$user_id'";

		$query = $this->db->query($sql);
		return $query->result_array();
	}

	function insert_baptismal($fname = '', $mname = '', $lname = '', $eventDate, $eventTime = '', $birthdate, $birthplace = '', $father = '', $father_birthplace = '', $mother = '', $mother_birthplace = '', $address = '', $mobile_no = '', $email = '', $marriage = '', $informant = '', $attendance, $doc_status, $GodFather = '', $GodFather_bplace = '', $GodMother = '', $GodMother_bplace = '', $additional_GodFather = '', $additional_GodMother, $tran_id) {
		// $sql = "INSERT INTO baptismal_info_tb (fname) VALUES ('$fname')";
		$sql = "INSERT INTO baptismal_info_tb (fname, mname, lname, dateTobaptise, timeTobaptise, birthdate, birthplace, father, father_birthplace, mother, mother_birthplace, address,mobile_no, email,marriage, informant, payment_status, attendance, doc_status, GodFather, GodFather_bplace, GodMother, GodMother_bplace, additional_GodFather, additional_GodMother, tran_id, date_added, date_updated, notif_status) VALUES(".$this->db->escape($fname).", ".$this->db->escape($mname).", ".$this->db->escape($lname).", ".$this->db->escape($eventDate).", ".$this->db->escape($eventTime).", ".$this->db->escape($birthdate).", ".$this->db->escape($birthplace).", ".$this->db->escape($father).", ".$this->db->escape($father_birthplace).", ".$this->db->escape($mother).", ".$this->db->escape($mother_birthplace).", ".$this->db->escape($address).", ".$this->db->escape($mobile_no).", ".$this->db->escape($email).", ".$this->db->escape($marriage).", ".$this->db->escape($informant).", '0', '0', '0', ".$this->db->escape($GodFather).", ".$this->db->escape($GodFather_bplace).", ".$this->db->escape($GodMother).", ".$this->db->escape($GodMother_bplace).", ".$this->db->escape($additional_GodFather).", ".$this->db->escape($additional_GodMother).", ".$this->db->escape($tran_id).", NOW(), NOW(), '1')";

		// echo ("$sql"); die();
		$query = $this->db->query($sql);
		return @$this->db->insert_id();
	}
	function insert_transaction($tran_id = '', $baptismal ='', $informant ='', $applicant ='', $qrlink ='', $amount, $record_id_user, $eventDate) {
		$sql = "INSERT INTO payment_transaction_tb (tran_id, events, informant, applicant_name, qrcode_image, payment_amount, user_id, payment_status, dateTobaptise, date_updated) VALUES (".$this->db->escape($tran_id).", ".$this->db->escape($baptismal).", ".$this->db->escape($informant).", ".$this->db->escape($applicant).", ".$this->db->escape($qrlink).", ".$this->db->escape($amount).", ".$this->db->escape($record_id_user).", '0', ".$this->db->escape($eventDate).", NOW())";
		// echo ("$sql"); die();

		$query = $this->db->query($sql);
		return @$this->db->insert_id();
	}
	function insert_calendar($title = '', $description='', $eventDate = '', $eventTime = '', $record_id_user='', $allowed_status='') {
		$sql = "INSERT INTO calendar_events (title, description, color, start, startTime, user_id, allowed_status) VALUES (".$this->db->escape($title).", ".$this->db->escape($description).", '#FF0000',  ".$this->db->escape($eventDate).", ".$this->db->escape($eventTime).", '$record_id_user', '$allowed_status')";
		// echo ("$sql"); die();	

		$query = $this->db->query($sql);
		return @$this->db->insert_id();
	}
	function insert_post_comment($record_id_user, $comment) {
		$sql = "INSERT INTO post_comments_tb(name, comment) VALUES ('$record_id_user',  '$comment')";
		// echo ("$sql"); die();

		$query = $this->db->query($sql);
		return @$this->db->insert_id();
	}

	// `father`, `mother`, `GodFather`, `Godfather_address`, `GodMother`, `Godmother_address`, `purpose`, `informant`, `event_priest`, `attendance`, `doc_status`, `date_added`, `date_updated`

	function insert_confirmation($fname = '', $mname = '', $lname = '', $dateToConfirm = '', $birthdate = '', $age = 0, $baptismPlace = '', $parish = '', $baptismDate = '', $purpose = '', $father = '', $mother = '', $address = '', $Appointedby = '', $attendance = '', $doc_status = '', $GodFather = '', $GodFather_bplace = '', $GodMother = '', $GodMother_bplace = '') {
		$sql = "INSERT INTO confirmation_tb (fname, mname, lname, confirmation_date, birthdate, age, place_baptism, parish, date_baptism, purpose, father, mother, address, informant, event_priest, attendance, doc_status, GodFather, Godfather_address, GodMother, Godmother_address, date_added, date_updated) VALUES(".$this->db->escape($fname).", ".$this->db->escape($mname).", ".$this->db->escape($lname).",  ".$this->db->escape($dateToConfirm).",  ".$this->db->escape($birthdate).", ".$this->db->escape($age).",  ".$this->db->escape($baptismPlace).", ".$this->db->escape($parish).", ".$this->db->escape($baptismDate).", ".$this->db->escape($purpose).", ".$this->db->escape($father).", ".$this->db->escape($mother).", ".$this->db->escape($address).", ".$this->db->escape($Appointedby).", '', '0', '0', ".$this->db->escape($GodFather).", ".$this->db->escape($GodFather_bplace).", ".$this->db->escape($GodMother).", ".$this->db->escape($GodMother_bplace).", NOW(), NOW())";

		// echo ("$sql"); die();
		$query = $this->db->query($sql);
		return @$this->db->insert_id();
	}

	function insert_death($fname = '', $mname = '', $lname = '', $date_deceased = '', $eventTime='', $eventDate='', $age = '', $civil_status = '', $informant = '', $address = '', $sacrament = '', $death_caused = '', $place_burial = '', $administer_priest = '', $attendance = '', $doc_status = '') {
		$sql = "INSERT INTO death_tb(fname, mname, lname, date_deceased, eventTime, date_burial, age, civil_status, name_informant, address, sacrament, death_caused, place_burial, administer_priest, date_filing, attendance, doc_status, notif_status) VALUES(".$this->db->escape($fname).", ".$this->db->escape($mname).", ".$this->db->escape($lname).",  ".$this->db->escape($date_deceased).",  ".$this->db->escape($eventTime).", ".$this->db->escape($eventDate).",  ".$this->db->escape($age).",  ".$this->db->escape($civil_status).",  ".$this->db->escape($informant).",  ".$this->db->escape($address).", ".$this->db->escape($sacrament).", ".$this->db->escape($death_caused).", ".$this->db->escape($place_burial).", '', NOW(), '0', '0', '1')";

		// echo ("$sql"); die();
		$query = $this->db->query($sql);
		return @$this->db->insert_id();
	}

	function insert_marriage($fname_g='', $mname_g='', $lname_g='', $birthdate_g, $age_g, $address_g, $lenght_years_g, $occupation_g, $nationality_g, $religion_g, $parish_address_g, $father_name_g='', $father_religion_g, $father_placebirth_g, $mother_name_g='', $mother_religion_g, $mother_placebirth_g, $baptismal_status_g, $proof_gaptismal_g, $baptismal_date_g, $parish_gaptismal_g, $parish_gaptismal_address_g, $confirmation_status_g, $proof_confirmation_g, $confirmation_date_g, $parish_confirmation_g, $fname_b='', $mname_b='', $lname_b='', $birthdate_b, $age_b, $address_b, $lenght_years_b, $occupation_b, $nationality_b, $religion_b, $parish_address_b, $father_name_b='', $father_religion_b, $father_placebirth_b, $mother_name_b='', $mother_religion_b, $mother_placebirth_b, $baptismal_status_b, $proof_baptismal_b, $baptismal_date_b, $parish_baptismal_b, $parish_baptismal_address_b, $confirmation_status_b, $proof_confirmation_b, $confirmation_date_b, $parish_confirmation_b, $record_id_user, $date_added, $date_updated) {

		$sql = "INSERT INTO matrimony_tb(g_fname, g_mname, g_lname, g_datebirth, g_age, g_placebirth, g_presentAddress, g_LengthYears, g_occupation, g_nationality, g_religion, g_pParishAdd, g_fatherFname, g_fatherReligion, g_fatherBPlace, g_motherFname, g_motherReligion, g_motherBPlace, g_baptismStatus, g_baptismProof, g_baptismDate, g_baptismParish, g_baptismParishAddress, g_confirmationStatus, g_confirmationProof, g_confirmationDate, g_confirmationParish, b_fname, b_mname, b_lname, b_datebirth, b_age, b_placebirth, b_presentAddress, b_LengthYears, b_occupation, b_nationality, b_religion, b_pParishAdd, b_fatherFname, b_fatherReligion, b_fatherBPlace, b_motherFname, b_motherReligion, b_motherBPlace, b_baptismStatus, b_baptismProof, b_baptismDate, b_baptismParish, b_baptismParishAddress, b_confirmationStatus, b_confirmationProof, b_confirmationDate, b_confirmationParish, informant, date_added, date_updated, notif_status) 
			VALUES (".$this->db->escape($fname_g).",".$this->db->escape($mname_g).", ".$this->db->escape($lname_g).", '$birthdate_g','$age_g','$address_g','$address_g','$lenght_years_g','$occupation_g','$nationality_g','$religion_g','$parish_address_g',".$this->db->escape($father_name_g).",'$father_religion_g','$father_placebirth_g',".$this->db->escape($mother_name_g).",'$mother_religion_g','$mother_placebirth_g','$baptismal_status_g','$proof_gaptismal_g','$baptismal_date_g','$parish_gaptismal_g','$parish_gaptismal_address_g','$confirmation_status_g','$proof_confirmation_g','$confirmation_date_g','$parish_confirmation_g', ".$this->db->escape($fname_b).",".$this->db->escape($mname_b).", ".$this->db->escape($lname_b).", '$birthdate_b','$age_b','$address_b','$address_b','$lenght_years_b','$occupation_b','$nationality_b','$religion_b','$parish_address_b',".$this->db->escape($father_name_b).",'$father_religion_b','$father_placebirth_b',".$this->db->escape($mother_name_b).",'$mother_religion_b','$mother_placebirth_b','$baptismal_status_b','$proof_baptismal_b','$baptismal_date_b','$parish_baptismal_b','$parish_baptismal_address_b','$confirmation_status_b','$proof_confirmation_b','$confirmation_date_b','$parish_confirmation_b', '$record_id_user', '$date_added', '$date_updated', '1')";
		// echo ("$sql"); die();
		$query = $this->db->query($sql);
		return @$this->db->insert_id();

		// $this->db->insert('matrimony_tb');	
		// return $this->db->insert_id();
	}

	function update_baptismal($baptism_id, $fname = '', $mname = '', $lname = '', $eventDate, $eventTime, $birthdate, $birthplace = '', $father = '', $father_birthplace = '', $mother = '', $mother_birthplace = '', $address = '', $mobile_no = '', $email = '', $marriage = '', $informant = '', $attendance =0, $doc_status, $GodFather = '', $GodFather_bplace = '', $GodMother = '', $GodMother_bplace = '', $additional_GodFather = '', $additional_GodMother ='') {
		$sql = "UPDATE baptismal_info_tb SET fname = ".$this->db->escape($fname).", mname = ".$this->db->escape($mname).", lname = ".$this->db->escape($lname).", dateTobaptise = '$eventDate', timeTobaptise = '$eventTime', birthdate = ".$this->db->escape($birthdate).", birthplace = ".$this->db->escape($birthplace).", father = ".$this->db->escape($father).", father_birthplace = ".$this->db->escape($father_birthplace).", mother = ".$this->db->escape($mother).", mother_birthplace = ".$this->db->escape($mother_birthplace).", address = ".$this->db->escape($address).", mobile_no = ".$this->db->escape($mobile_no).", email = ".$this->db->escape($email).", marriage = ".$this->db->escape($marriage).", informant = ".$this->db->escape($informant).", attendance = ".$this->db->escape($attendance).", doc_status = ".$this->db->escape($doc_status).", GodFather = ".$this->db->escape($GodFather).", GodFather_bplace = ".$this->db->escape($GodFather_bplace).", GodMother = ".$this->db->escape($GodMother).", GodMother_bplace = ".$this->db->escape($GodMother_bplace).", additional_GodFather = ".$this->db->escape($additional_GodFather).", additional_GodMother = ".$this->db->escape($additional_GodMother).", date_updated = NOW() WHERE baptism_id = '$baptism_id' ";
		
		// echo ("$sql"); die();
		$query = $this->db->query($sql);
		return 1;
	}

	function update_death($death_id, $fname='',  $mname='', $lname='', $date_deceased, $eventDate, $eventTime, $age, $civil_status, $informant, $address, $sacrament, $death_caused, $place_burial) {
		$sql = "UPDATE death_tb SET fname = ".$this->db->escape($fname).", mname = ".$this->db->escape($mname).", lname = ".$this->db->escape($lname).", date_deceased = '$date_deceased', date_burial = '$eventDate', eventTime = '$eventTime',  age = '$age', civil_status = '$civil_status', name_informant = '$informant', address = '$address', sacrament = '$sacrament', death_caused = '$death_caused', place_burial = '$place_burial' WHERE ID = '$death_id'";
		// echo ("$sql"); die();
		$query = $this->db->query($sql);
		return 1;
	}

	function update_transaction($applicant = '', $amount, $eventDate, $tran_id) {
		$sql = "UPDATE payment_transaction_tb SET applicant_name = ".$this->db->escape($applicant).", payment_amount = ".$this->db->escape($amount).", dateToBaptise = '$eventDate',  date_updated = NOW() WHERE tran_id = '$tran_id' ";
		// echo ("$sql"); die();

		$query = $this->db->query($sql);
		return 1;
	}
	function update_calendar($title, $eventDate, $eventTime, $record_id_user, $eventDate_1, $eventNtime) {
		$sql = "UPDATE calendar_events SET title = '$title', start = '$eventDate',  startTime = '$eventTime' WHERE start = '$eventDate_1' AND title = '$eventNtime' AND user_id = '$record_id_user' ";
		// echo ("$sql"); die();

		$query = $this->db->query($sql);
		return 1;
	}
	
	function check_baptismal_record($fname = '' , $mname = '' , $lname = '', $record_id_user) {
		$sql = "SELECT fname, mname, lname FROM baptismal_info_tb WHERE fname = '$fname' AND mname = '$mname' AND Lname ='$lname' AND informant = '$record_id_user'";
		   
		// echo ("$sql"); die();   
    	$query = $this->db->query($sql);
		return @$query->row();
	}
	function check_baptismal_record_1($fname = '' , $mname = '' , $lname = '', $record_id_user) {
		$sql = "SELECT fname, mname, lname FROM baptismal_info_tb WHERE fname = '$fname' AND mname = '$mname' AND Lname ='$lname' AND informant != '$record_id_user'";
		   
		// echo ("$sql"); die();   
    	$query = $this->db->query($sql);
		return @$query->row();
	}

	function check_confirmation_record($fname = '' , $mname = '' , $lname = '') {
		$sql = "SELECT fname, mname, lname FROM confirmation_tb WHERE fname = '$fname' AND mname = '$mname' AND lname ='$lname'";
		   
		// echo ("$sql"); die();   
    	$query = $this->db->query($sql);
		return @$query->row();
	}

	function check_death_record($fname = '' , $mname = '' , $lname = '') {
		$user_id = $this->session->userdata('user_id');
		$sql = "SELECT fname, mname, lname FROM death_tb WHERE fname = '$fname' AND mname = '$mname' AND lname ='$lname' AND name_informant= '$user_id' ";
		   
		// echo ("$sql"); die();   
    	$query = $this->db->query($sql);
		return @$query->row();
	}
	function check_death_record_1($fname = '' , $mname = '' , $lname = '') {
		$user_id = $this->session->userdata('user_id');
		$sql = "SELECT fname, mname, lname FROM death_tb WHERE fname = '$fname' AND mname = '$mname' AND lname ='$lname' AND name_informant!= '$user_id' ";
		   
		// echo ("$sql"); die();   
    	$query = $this->db->query($sql);
		return @$query->row();
	}

	function check_marriage_record($fname_g, $mname_g, $lname_g, $fname_b, $mname_b, $lname_b, $record_id_user) {
		$sql = "SELECT * FROM matrimony_tb WHERE g_fname = '$fname_g' AND g_mname = '$mname_g' AND g_lname ='$lname_g' AND informant = '$record_id_user' ";
		   
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

	function check_reserve_Record($eventDate = '', $eventTime = '', $dayIndex) {
		if ($dayIndex == 0) {
			$sql = "SELECT start, startTime  FROM calendar_events WHERE start ='$eventDate' AND startTime = '$eventTime' AND allowed_status = '1' LIMIT 20";
		} else {
			$sql = "SELECT start, startTime  FROM calendar_events WHERE start ='$eventDate' AND startTime = '$eventTime' AND allowed_status = '1' ";			
		}
		 
		// echo ("$sql"); die();   
    	$query = $this->db->query($sql);
		return @$query->row();
	}
	function check_reserve_Record_1($eventDate = '', $eventTime = '', $dayIndex, $record_id_user) {
		if ($dayIndex == 0) {

			$sql = "SELECT start, startTime  FROM calendar_events WHERE start ='$eventDate' AND startTime = '$eventTime' AND allowed_status = '1' AND user_id != '$record_id_user' LIMIT 20";
		} else {
			$sql = "SELECT start, startTime  FROM calendar_events WHERE start ='$eventDate' AND startTime = '$eventTime' AND allowed_status = '1' AND user_id != '$record_id_user'";			
		}
		 
		// echo ("$sql"); die();   
    	$query = $this->db->query($sql);
		return @$query->row();
	}
	function check_date($dateTobaptise = '') {
		
		$sql = "SELECT dateTobaptise FROM baptismal_info_tb WHERE dateTobaptise <= 'NOW()' ";
		   
		echo ("$sql"); die();   
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

	public function get_baptismal_notif() {
        $id = $this->session->userdata('user_id');
        $this->db->select()->from('baptismal_info_tb');  
        $this->db->where('notif_status','1');
        // $this->db->where('status_flag','1');
        $this->db->where('informant', $id);
        $query = $this->db->get();

        return $query->num_rows();
    }
    public function get_death_notif() {
        $id = $this->session->userdata('user_id');
        $this->db->select()->from('death_tb');  
        $this->db->where('notif_status','1');
        $this->db->where('name_informant', $id);
        $query = $this->db->get();

        return $query->num_rows();
    }
    public function get_marriage_notif() {
        $id = $this->session->userdata('user_id');
        $this->db->select()->from('matrimony_tb');  
        $this->db->where('notif_status','1');
        $this->db->where('informant', $id);
        $query = $this->db->get();

        return $query->num_rows();
    }
    public function displayNUpdatenotification_baptismal() {
        $id = $this->session->userdata('user_id');
        $this->db->where('informant', $id);
        $this->db->update('baptismal_info_tb',array('notif_status'=>'0'));
        return;
    }
    public function displayNUpdatenotification_death() {
        $id = $this->session->userdata('user_id');
        $this->db->where('name_informant', $id);
        $this->db->update('death_tb',array('notif_status'=>'0'));
        return;
    }
    public function displayNUpdatenotification_marriage() {
        $id = $this->session->userdata('user_id');
        $this->db->where('informant', $id);
        $this->db->update('matrimony_tb',array('notif_status'=>'0'));
        return;
    }

    public function updateBaptismal() {
        // $updatecomment=$this->db->update('baptismal_info_tb',array('n_status'=>$status));
        $id = '6';
		$fname = $this->input->post('fname');

        // $mname                 = $this->input->post('');
        // $lname                 = $this->input->post('');
        // $dateTobaptise         = $this->input->post('');
        // $eventTime             = $this->input->post('');
        // $birthdate             = $this->input->post('');
        // $birthplace            = $this->input->post('');
        // $father                = $this->input->post('');
        // $father_birthplace     = $this->input->post('');
        // $mother                = $this->input->post('');
        // $mother_birthplace     = $this->input->post('');
        // $address               = $this->input->post('');
        // $mobile_no             = $this->input->post('');
        // $email                 = $this->input->post('');
        // $marriage              = $this->input->post('');
        // $Appointedby           = $this->input->post('');
        // $GodFather             = $this->input->post('');
        // $GodFather_bplace      = $this->input->post('');
        // $GodMother             = $this->input->post('');
        // $GodMother_bplace      = $this->input->post('');
        // $additional_GodFather  = $this->input->post('');
        // $additional_GodMother  = $this->input->post('');
        $this->db->where('baptism_id', $id);
        $this->db->update('baptismal_info_tb', array('fname' => $fname));
		return;	
    }

}
?>
