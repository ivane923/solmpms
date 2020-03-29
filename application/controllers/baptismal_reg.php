<?php

class Baptismal_reg extends CI_Controller {
    var $data;
	var $userID;
	
	function __construct() {
		parent::__construct();
		$this->load->model('events_model');
		$this->load->model('Qrimages');
		// $this->load->library('phpqrcode/qrlib');

		$this->load->helper('url');
		$this->load->library('meRaviQr/qrlib');
		// $this->load->library('email');
	}

	function index() {
		if ($this->session->userdata('ID')=='') redirect(base_url()."login");
		
		$this->data['title'] = "Baptismal";
        $this->data['page'] = "events/baptismal";
		$this->data['menu'] = "baptismal";

		$this->data['baptismals'] = $this->events_model->list_baptismal();
	   
		 $this->load->view('index', $this->data);  
	}

	function addBaptism() {
		if ($_POST) {
			$fname = ucfirst($this->input->post('fname'));
			$mname=ucfirst($this->input->post('mname'));
			$lname=ucfirst($this->input->post('lname'));
			$dateTobaptise=$this->input->post('dateTobaptise');
			$birthdate=$this->input->post('birthdate');
			$birthplace=ucfirst($this->input->post('birthplace'));
			$father=ucfirst($this->input->post('father'));
			$father_birthplace=ucfirst($this->input->post('father_birthplace'));
			$mother=ucfirst($this->input->post('mother'));
			$mother_birthplace=ucfirst($this->input->post('mother_birthplace'));
			$address=ucfirst($this->input->post('address'));
			$mobile_no=$this->input->post('mobile_no');
			$email=$this->input->post('email');
			$marriage=$this->input->post('marriage');
			$informant=ucfirst($this->input->post('Appointedby'));
			$attendance=$this->input->post('attendance');
			$doc_status=$this->input->post('doc_status');
			$GodFather=ucfirst($this->input->post('GodFather'));
			$GodFather_bplace=ucfirst($this->input->post('GodFather_bplace'));
			$GodMother=ucfirst($this->input->post('GodMother'));
			$GodMother_bplace=ucfirst($this->input->post('GodMother_bplace'));
			$additional_GodFather=ucfirst($this->input->post('additional_GodFather'));
			$additional_GodMother=ucfirst($this->input->post('additional_GodMother'));
			$tran_id=$this->input->post('tran_id');
			$amount=$this->input->post('amount');

			$baptismal = "Baptismal";
			$applicant = $fname." ".$mname." ".$lname; 
			
			$record_id_user="MEM-".''. $this->session->userdata('ID');
 			
			$checkrecord = $this->events_model->check_baptismal_record($fname, $mname, $lname);
			$checkrecord2 = $this->events_model->check_tranID_record($tran_id);
			if (@$checkrecord) {
				echo "Sorry, Record has already Exist!";
			} else if(@$checkrecord2) {
				echo "Sorry, Record has already Exist!";
			} else {
			    $qrs = QRcode::png($tran_id,"img/qr/$tran_id.png","H","6","6");
				$workDir = $_SERVER['HTTP_HOST'];
			    // $qrlink = $workDir."/qrcode".$tran_id_img.".png";
			    $qrlink = "img/qr/".$tran_id.".png";

					$return = $this->events_model->insert_baptismal($fname, $mname, $lname, $dateTobaptise, $birthdate, $birthplace, $father, $father_birthplace, $mother, $mother_birthplace, $address, $mobile_no, $email, $marriage, $informant, $attendance, $doc_status, $GodFather, $GodFather_bplace, $GodMother, $GodMother_bplace, $additional_GodFather, $additional_GodMother,$tran_id);

					$return2 = $this->events_model->insert_transaction($tran_id,  $baptismal, $informant, $applicant, $qrlink, $amount, $record_id_user);

					// $return = $this->baptismal_model->insert_transaction($tran_id,$Appointedby);
				if (!$return) {
					echo "Sorry, System is not currently unavailable. Please try again!";
				}
			}
		}
	}

	function addConfirmation() {
		// if ($this->session->userdata('ID')=='') redirect(base_url()."login");
				
		if ($_POST) {
			$fname = ucfirst($this->input->post('fname'));
			$mname=ucfirst($this->input->post('mname'));
			$lname=ucfirst($this->input->post('lname'));
			$dateToConfirm=$this->input->post('dateToConfirm');
			$birthdate=$this->input->post('birthdate');
			$age=$this->input->post('age');
			$baptismPlace=ucfirst($this->input->post('baptismPlace'));
			$parish=ucfirst($this->input->post('parish'));
			$baptismDate=$this->input->post('baptismDate');
			$purpose=$this->input->post('purpose');
			$father=ucfirst($this->input->post('father'));
			$mother=ucfirst($this->input->post('mother'));
			$address=ucfirst($this->input->post('address'));
			$Appointedby=ucfirst($this->input->post('Appointedby'));
			$attendance=$this->input->post('attendance');
			$doc_status=$this->input->post('doc_status');
			$GodFather=ucfirst($this->input->post('GodFather'));
			$GodFather_bplace=ucfirst($this->input->post('GodFather_bplace'));
			$GodMother=ucfirst($this->input->post('GodMother'));
			$GodMother_bplace=ucfirst($this->input->post('GodMother_bplace'));

			$checkrecord = $this->events_model->check_confirmation_record($fname, $mname, $lname);
			if (@$checkrecord) {
				echo "Sorry, Record has already Exist!";
			} else if(@$checkrecord) {
				echo "Sorry, Record has already Exist!";
			} else {
			   	$return = $this->events_model->insert_confirmation($fname,  $mname, $lname, $dateToConfirm, $birthdate, $age, $baptismPlace, $parish, $baptismDate, $purpose, $father, $mother, $address, $Appointedby, $attendance, $doc_status, $GodFather, $GodFather_bplace, $GodMother, $GodMother_bplace);
				if (!$return) {
					echo "Sorry, System is not currently unavailable. Please try again!";
				}
			}
		}
	}

    function addDeath() {
		// if ($this->session->userdata('ID')=='') redirect(base_url()."login");
				
		if ($_POST) {
			

			$fname = $this->input->post('fname');
			$mname=$this->input->post('mname');
			$lname=$this->input->post('lname');
			$date_deceased=$this->input->post('date_deceased');
			$age=$this->input->post('age');
			$civil_status=$this->input->post('civil_status');
			$name_informant=$this->input->post('name_informant');
			$address=$this->input->post('address');
			$sacrament=$this->input->post('sacrament');
			$death_caused=$this->input->post('death_caused');
			$place_burial=$this->input->post('place_burial');
			$administer_priest=$this->input->post('administer_priest');
			// $date_filing=$this->input->post('date_filing');
			$attendance=$this->input->post('attendance');
			$doc_status=$this->input->post('doc_status');

			$checkrecord = $this->events_model->check_death_record($fname, $mname, $lname);
			if (@$checkrecord) {
				echo "Sorry, Record has already Exist!";
			} else {
			   	$return = $this->events_model->insert_death($fname,  $mname, $lname, $date_deceased, $age, $civil_status, $name_informant, $address, $sacrament, $death_caused, $place_burial, $administer_priest, $attendance, $doc_status);
				if (!$return) {
					echo "Sorry, System is not currently unavailable. Please try again!";
				}
			}
		}
	}
	function edit() {
		
		if ($_POST) {
			$baptism_id = $this->input->post('baptism_id');
			$fname = $this->input->post('fname');
			$mname=$this->input->post('mname');
			$lname=$this->input->post('lname');
			$dateTobaptise=$this->input->post('dateTobaptise');
			$birthdate=$this->input->post('birthdate');
			$birthplace=$this->input->post('birthplace');
			$father=$this->input->post('father');
			$father_birthplace=$this->input->post('father_birthplace');
			$mother=$this->input->post('mother');
			$mother_birthplace=$this->input->post('mother_birthplace');
			$address=$this->input->post('address');
			$mobile_no=$this->input->post('mobile_no');
			$email=$this->input->post('email');
			$marriage=$this->input->post('marriage');
			$informant=$this->input->post('Appointedby');
			$attendance=$this->input->post('attendance');
			$doc_status=$this->input->post('doc_status');
			$GodFather=$this->input->post('GodFather');
			$GodFather_bplace=$this->input->post('GodFather_bplace');
			$GodMother=$this->input->post('GodMother');
			$GodMother_bplace=$this->input->post('GodMother_bplace');
			$additional_GodFather=$this->input->post('additional_GodFather');
			$additional_GodMother=$this->input->post('additional_GodMother');
			$tran_id=$this->input->post('tran_id');
			$amount=$this->input->post('amount');

			$baptismal = "Baptismal";
			$applicant = $fname." ".$mname." ".$lname; 

 
			// $checkrecord = $this->baptismal_model->check_baptismal_record($fname, $mname, $lname, $tran_id);
			// if (@$checkrecord) {
			// 	echo "Sorry, Record has already Exist!";
			// } else {
			    $return = $this->events_model->update_baptismal($baptism_id, $fname, $mname, $lname, $dateTobaptise, $birthdate, $birthplace, $father, $father_birthplace, $mother, $mother_birthplace, $address, $mobile_no, $email, $marriage, $informant, $attendance, $doc_status, $GodFather, $GodFather_bplace, $GodMother, $GodMother_bplace, $additional_GodFather, $additional_GodMother, $tran_id);

				$return2 = $this->events_model->update_transaction($baptismal, $informant, $applicant, $tran_id, $amount);

				// if (!$return) {
				// 	echo "Sorry, System is not currently unavailable. Please try again!";
				// }
			// }
		}
	}

	function delete() {
		if ($this->session->userdata('user_id')=='') redirect(base_url()."user/login");

		if($_POST) {
			$deduction_id = $this->input->post('deduction_id');


			$return = $this->deduction_model->remove_branch($deduction_id);

			if (!$return) {
				echo "Sorry, System is not currently unavailable. Please try again!";
			}
		}
	}

}

/* End of file user.php */
/* Location: ./application/controllers/user.php */
