<?php

class Events_reg extends CI_Controller {
    var $data;
	var $userID;
	
	function __construct() {
		parent::__construct();
		$this->load->model('events_model');
		$this->load->model('blog_model');
		$this->load->model('Qrimages');
		// $this->load->library('phpqrcode/qrlib');

		$this->load->helper('url');
		$this->load->library('meRaviQr/qrlib');
		// $this->load->library('email');
		$this->load->helper('date');
	}

	function index() {
//		if ($this->session->userdata('admin_flag')<>'1') redirect(base_url());
		if ($this->session->userdata('ID')=='') redirect(base_url()."login");
		
		$this->data['title'] = "Baptismal";
        $this->data['page'] = "website/events/baptismal";
		$this->data['menu'] = "baptismal";

		$this->data['baptismals'] = $this->events_model->list_baptismal();
	   
		$this->load->view('index', $this->data);
	
	}

	public function addBaptism() {
		// if ($this->session->userdata('ID')=='') redirect(base_url()."login");
		if ($_POST) {
			
			$fname= ucfirst($this->input->post('fname'));
			$mname=ucfirst($this->input->post('mname'));
			$lname=ucfirst($this->input->post('lname'));
			$eventDate=$this->input->post('dateTobaptise');
			$eventTime=$this->input->post('eventTime');
			$birthdate=$this->input->post('birthdate');
			$birthplace=ucfirst($this->input->post('birthplace'));
			$father=ucfirst($this->input->post('father'));
			$father_birthplace=ucfirst($this->input->post('father_birthplace'));
			$mother=ucfirst($this->input->post('mother'));
			$mother_birthplace=ucfirst($this->input->post('mother_birthplace'));
			$address=ucfirst($this->input->post('address'));
			$mobile_no="0".$this->input->post('mobile_no');
			$email=$this->session->userdata('mobile_no');
			$marriage=$this->input->post('marriage');
			$informant=$this->session->userdata('user_id');
			$attendance="";
			$doc_status="";
			$GodFather=ucfirst($this->input->post('GodFather'));
			$GodFather_bplace=ucfirst($this->input->post('GodFather_bplace'));
			$GodMother=ucfirst($this->input->post('GodMother'));
			$GodMother_bplace=ucfirst($this->input->post('GodMother_bplace'));
			$additional_GodFather=ucfirst($this->input->post('additional_GodFather'));
			$additional_GodMother=ucfirst($this->input->post('additional_GodMother'));
			// $tran_id=$this->input->post('tran_id');
			$amount=$this->input->post('amount');
			$dayIndex = $this->input->post('dayIndex');

			$set = '123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
			$tran_id = substr(str_shuffle($set), 0, 12);

			$baptismal = "Baptismal";
			$applicant = $fname." ".$mname." ".$lname; 
			$record_id_user= $this->session->userdata('user_id');
 			
			$checkrecord1 = $this->events_model->check_baptismal_record($fname, $mname, $lname, $record_id_user);
			$checkrecord2 = $this->events_model->check_tranID_record($tran_id);
			$checkrecord3 = $this->events_model->check_reserve_Record($eventDate, $eventTime, $dayIndex, $record_id_user);
			

			$timeZone = '';
            if ($eventTime >= '08' AND $eventTime <= '12') {
            	$timeZone = 'am';
            } else {
            	$timeZone = 'pm';
            }

            $dateY = date('Y');
            $minDateEvent_0 = $dateY.'-12-31';
            $minDateEvent_1 = strtotime($minDateEvent_0);
			$dateTobaptise_0 = strtotime($eventDate); 

			 
            if (@$checkrecord1) {
				echo
				 	'<div id="gritter-notice-wrapper">
				        <div id="gritter-item-1" class="gritter-item-wrapper" >
				            <div class="gritter-top"></div>
				            <div class="gritter-item">
				                <div class="gritter-close"></div>
				                    <div class="gritter-without-image">
				                        <span class="gritter-title">Failed</span>
				                        <p>Sorry, Child Name Already Exist!</p>
				                    </div>
				                    <div style="clear:both"></div>
				                </div>	
				            <div class="gritter-bottom"></div>
				        </div>
				    </div> ';
			} else if(@$checkrecord3) {
				echo
				 	'<div id="gritter-notice-wrapper">
				        <div id="gritter-item-1" class="gritter-item-wrapper" >
				            <div class="gritter-top"></div>
				            <div class="gritter-item">
				                <div class="gritter-close"></div>
				                    <div class="gritter-without-image">
				                        <span class="gritter-title">Failed</span>
				                        <p>Sorry, There was an event scheduled in that particular date and time</p>
				                    </div>
				                    <div style="clear:both"></div>
				                </div>	
				            <div class="gritter-bottom"></div>
				        </div>
				    </div> ';
					    
			} else if($eventDate <= date("Y-m-d") || $dateTobaptise_0 > $minDateEvent_1) {
				// echo '<h5 class="text-center">Sorry, the date you are trying to reserve are not available </h5>';
				echo
				 	'<div id="gritter-notice-wrapper">
				        <div id="gritter-item-1" class="gritter-item-wrapper" >
				            <div class="gritter-top"></div>
				            <div class="gritter-item">
				                <div class="gritter-close"></div>
				                    <div class="gritter-without-image">
				                        <span class="gritter-title">Failed</span>
				                        <p>Sorry, the date you are trying to reserve are not available</p>
				                    </div>
				                    <div style="clear:both"></div>
				                </div>	
				            <div class="gritter-bottom"></div>
				        </div>
				    </div> ';
			} else if($birthdate >= date("Y-m-d")) {
				// echo '<h5 class="text-center">Sorry, Birthdate are not acceptable </h5>';
				echo
				 	'<div id="gritter-notice-wrapper">
				        <div id="gritter-item-1" class="gritter-item-wrapper" >
				            <div class="gritter-top"></div>
				            <div class="gritter-item">
				                <div class="gritter-close"></div>
				                    <div class="gritter-without-image">
				                        <span class="gritter-title">Failed</span>
				                        <p>Sorry, Birthdate are not acceptable </p>
				                    </div>
				                    <div style="clear:both"></div>
				                </div>	
				            <div class="gritter-bottom"></div>
				        </div>
				    </div> ';
			} else {
			   $qrs = QRcode::png($tran_id,"img/qr/$tran_id.png","H","6","6");
				$workDir = $_SERVER['HTTP_HOST'];
			    $qrlink = "img/qr/".$tran_id.".png";
				
				$return = $this->events_model->insert_baptismal($fname, $mname, $lname, $eventDate, $eventTime, $birthdate, $birthplace, $father, $father_birthplace, $mother, $mother_birthplace, $address, $mobile_no, $email, $marriage, $informant, $attendance, $doc_status, $GodFather, $GodFather_bplace, $GodMother, $GodMother_bplace, $additional_GodFather, $additional_GodMother,$tran_id);
				$return2 = $this->events_model->insert_transaction($tran_id,  $baptismal, $informant, $applicant, $qrlink, $amount, $record_id_user, $eventDate);				

				$title = $eventTime .''. $timeZone . " Reserved";
				$allowed_status = "0";
				$description = 'Baptismal';
				$return3 = $this->events_model->insert_calendar($title, $description, $eventDate, $eventTime, $record_id_user, $allowed_status);
				
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
			$Appointedby=$this->session->userdata('fullname1');
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
		if ($this->session->userdata('user_id')=='') redirect(base_url()."redirect/login");
				
		if ($_POST) {
			$fname = ucwords($this->input->post('fname'));
			$mname= ucwords($this->input->post('mname'));
			$lname= ucwords($this->input->post('lname'));
			$date_deceased=$this->input->post('date_deceased');
			$eventTime= $this->input->post('eventTime');
			$eventTime_1= $this->input->post('eventTime_1');
			$eventDate=$this->input->post('date_burial');
			$eventDate_1=$this->input->post('date_burial_1');
			$age=$this->input->post('age');
			$civil_status= ucwords($this->input->post('civil_status'));
			$informant=$this->session->userdata('user_id');
			$address= ucwords($this->input->post('address'));
			$sacrament= ucwords($this->input->post('sacrament'));
			$death_caused=ucwords($this->input->post('death_caused'));
			$place_burial=ucwords($this->input->post('place_burial'));
			$administer_priest='';
			// $date_filing=$this->input->post('date_filing');
			$attendance=$this->input->post('attendance');
			$doc_status=$this->input->post('doc_status');


			$timeZone = '';
            if ($eventTime >= '08' AND $eventTime <= '12') {
            	$timeZone = 'am';
            } else {
            	$timeZone = 'pm';
            }

		   	$title = $eventTime .''. $timeZone . " Reserved";
		   	$description = "Death";
			$record_id_user= $this->session->userdata('user_id');
			$allowed_status = "0";
			$dayIndex = '1';

			$checkrecord1 = $this->events_model->check_death_record($fname, $mname, $lname);
			$checkrecord3 = $this->events_model->check_reserve_Record($eventDate, $eventTime, $dayIndex);

			if (@$checkrecord1) {
				echo
			 	'<div id="gritter-notice-wrapper">
			        <div id="gritter-item-1" class="gritter-item-wrapper" >
			            <div class="gritter-top"></div>
			            <div class="gritter-item">
			                <div class="gritter-close"></div>
			                    <div class="gritter-without-image">
			                        <span class="gritter-title">Failed</span>
			                        <p>Sorry, The Deceased information has Already Exist!</p>
			                    </div>
			                    <div style="clear:both"></div>
			                </div>	
			            <div class="gritter-bottom"></div>
			        </div>
			    </div> ';
			} else if(@$checkrecord3) {
				echo
			 	'<div id="gritter-notice-wrapper">
			        <div id="gritter-item-1" class="gritter-item-wrapper" >
			            <div class="gritter-top"></div>
			            <div class="gritter-item">
			                <div class="gritter-close"></div>
			                    <div class="gritter-without-image">
			                        <span class="gritter-title">Failed</span>
			                        <p>Sorry, There was an event scheduled in that particular date and time</p>
			                    </div>
			                    <div style="clear:both"></div>
			                </div>	
			            <div class="gritter-bottom"></div>
			    </div> ';
			} else if($date_deceased > date("Y-m-d")) {
			    echo
			 	'<div id="gritter-notice-wrapper">
			        <div id="gritter-item-1" class="gritter-item-wrapper" >
			            <div class="gritter-top"></div>
			            <div class="gritter-item">
			                <div class="gritter-close"></div>
			                    <div class="gritter-without-image">
			                        <span class="gritter-title">Failed</span>
			                        <p>Sorry, Please input the right date when the Deceased died!</p>
			                    </div>
			                    <div style="clear:both"></div>
			                </div>	
			            <div class="gritter-bottom"></div>
			        </div>
			    </div> ';
			} else if($eventDate <= date("Y-m-d")) {
			    echo
			 	'<div id="gritter-notice-wrapper">
			        <div id="gritter-item-1" class="gritter-item-wrapper" >
			            <div class="gritter-top"></div>
			            <div class="gritter-item">
			                <div class="gritter-close"></div>
			                    <div class="gritter-without-image">
			                        <span class="gritter-title">Failed</span>
			                        <p>Sorry, Please choose when the Deceased have been burial!</p>
			                    </div>
			                    <div style="clear:both"></div>
			                </div>	
			            <div class="gritter-bottom"></div>
			        </div>
			    </div> ';
			} else {
			   	$return1 = $this->events_model->insert_death($fname,  $mname, $lname, $date_deceased, $eventTime, $eventDate, $age, $civil_status, $informant, $address, $sacrament, $death_caused, $place_burial, $administer_priest, $attendance, $doc_status);

				$return2 = $this->events_model->insert_calendar($title, $description, $eventDate, $eventTime, $record_id_user, $allowed_status);

				if (!$return1) {
					echo "Sorry, System is not currently unavailable. Please try again!";
				}
			}
		}
	}

	function addMarriage() {
		if ($this->session->userdata('user_id')=='') redirect(base_url()."redirect/login");
		if ($_POST) {
			$fname_g                = ucwords($this->input->post('fname_g'));
            $mname_g                = ucwords($this->input->post('mname_g'));
            $lname_g                = ucwords($this->input->post('lname_g'));
            $birthdate_g            = $this->input->post('birthdate_g');
            $age_g                  = $this->input->post('age_g');
            $address_g              = ucwords($this->input->post('address_g'));
            $lenght_years_g         = $this->input->post('lenght_years_g');
            $occupation_g           = $this->input->post('occupation_g');
            $nationality_g          = ucwords($this->input->post('nationality_g'));
            $religion_g             = ucwords($this->input->post('religion_g'));
            $parish_address_g       = ucwords($this->input->post('parish_address_g'));
            $father_name_g          = ucwords($this->input->post('father_name_g'));
            $father_religion_g      = ucwords($this->input->post('father_religion_g'));
            $father_placebirth_g    = ucwords($this->input->post('father_placebirth_g'));
            $mother_name_g          = ucwords($this->input->post('mother_name_g'));
            $mother_religion_g      = ucwords($this->input->post('mother_religion_g'));
            $mother_placebirth_g    = ucwords($this->input->post('mother_placebirth_g'));
            $baptismal_status_g     = $this->input->post('baptismal_status_g');
            $confirmation_status_g  = $this->input->post('confirmation_status_g'); 
            
            if ($baptismal_status_g == 1) {
	            $proof_gaptismal_g      = ucwords($this->input->post('proof_gaptismal_g'));
	            $baptismal_date_g      	= $this->input->post('baptismal_date_g');
	            $parish_gaptismal_g     = ucwords($this->input->post('parish_gaptismal_g'));
	            $parish_gaptismal_address_g= $this->input->post('parish_gaptismal_address_g');
            } else {
            	$proof_gaptismal_g      = '';
	            $baptismal_date_g      	= date('Y-m-d');
	            $parish_gaptismal_g     = '';
	            $parish_gaptismal_address_g= '';
            }

            if ($confirmation_status_g == 1) {
	            $proof_confirmation_g   = ucwords($this->input->post('proof_confirmation_g')); 
	            $confirmation_date_g    = $this->input->post('confirmation_date_g');
	            $parish_confirmation_g  = ucwords($this->input->post('parish_confirmation_g')); 
            } else {
            	$proof_confirmation_g   = ''; 
	            $confirmation_date_g    = date('Y-m-d');
	            $parish_confirmation_g  = ''; 
            }
			
		    $fname_b                = ucwords($this->input->post('fname_b'));
            $mname_b                = ucwords($this->input->post('mname_b'));
            $lname_b                = $this->input->post('lname_b');
            $birthdate_b            = $this->input->post('birthdate_b');
            $age_b                  = $this->input->post('age_b');
            $address_b              = ucwords($this->input->post('address_b'));
            $lenght_years_b         = $this->input->post('lenght_years_b');
            $occupation_b           = ucwords($this->input->post('occupation_b'));
            $nationality_b          = ucwords($this->input->post('nationality_b'));
            $religion_b             = ucwords($this->input->post('religion_b'));
            $parish_address_b       = ucwords($this->input->post('parish_address_b'));
            $father_name_b          = ucwords($this->input->post('father_name_b'));
            $father_religion_b      = ucwords($this->input->post('father_religion_b'));
            $father_placebirth_b    = ucwords($this->input->post('father_placebirth_b'));
            $mother_name_b          = ucwords($this->input->post('mother_name_b'));
            $mother_religion_b      = ucwords($this->input->post('mother_religion_b'));
            $mother_placebirth_b    = ucwords($this->input->post('mother_placebirth_b'));

            $baptismal_status_b     = $this->input->post('baptismal_status_b'); 
            $confirmation_status_b  = $this->input->post('confirmation_status_b'); 
            if ($baptismal_status_b == 1) {
	            $proof_baptismal_b      = ucwords($this->input->post('proof_baptismal_b')); 
	            $baptismal_date_b      	= $this->input->post('baptismal_date_b'); 
	            $parish_baptismal_b     = ucwords($this->input->post('parish_baptismal_b')); 
	            $parish_baptismal_address_b= $this->input->post('parish_baptismal_address_b');
            } else {
            	$proof_baptismal_b      = ''; 
            	$baptismal_date_b      = date('Y-m-d'); 
	            $parish_baptismal_b     = ''; 
	            $parish_baptismal_address_b= '';
            }

            if ($confirmation_status_b == 1) {
	            $proof_confirmation_b   = ucwords($this->input->post('proof_confirmation_b')); 
	            $confirmation_date_b    = $this->input->post('confirmation_date_b'); 
	            $parish_confirmation_b  = ucwords($this->input->post('parish_confirmation_b')); 
            } else {
            	$proof_confirmation_b   = ''; 
	            $confirmation_date_b    = date('Y-m-d');
	            $parish_confirmation_b  = ''; 
            }

			$record_id_user= $this->session->userdata('user_id');
			$date_added = date('Y-m-d');
			$date_updated = date('Y-m-d');
			// $allowed_status = "0";

			$checkrecord1 = $this->events_model->check_marriage_record($fname_g, $mname_g, $lname_g, $fname_b, $mname_b, $lname_b, $record_id_user);
			if ($checkrecord1) {
				echo
			 	'<div id="gritter-notice-wrapper">
			        <div id="gritter-item-1" class="gritter-item-wrapper" >
			            <div class="gritter-top"></div>
			            <div class="gritter-item">
			                <div class="gritter-close"></div>
			                    <div class="gritter-without-image">	
			                        <span class="gritter-title">Failed</span>
			                        <p>Sorry, The record is already added!</p>
			                    </div>
			                    <div style="clear:both"></div>
			                </div>	
			            <div class="gritter-bottom"></div>
			        </div>
			    </div> ';
			} else if($birthdate_g >= date("Y-m-d")) {
				echo
			 	'<div id="gritter-notice-wrapper">
			        <div id="gritter-item-1" class="gritter-item-wrapper" >
			            <div class="gritter-top"></div>
			            <div class="gritter-item">
			                <div class="gritter-close"></div>
			                    <div class="gritter-without-image">	
			                        <span class="gritter-title">Failed</span>
			                        <p>Please enter the right Groom birth date!</p>
			                    </div>
			                    <div style="clear:both"></div>
			                </div>	
			            <div class="gritter-bottom"></div>
			        </div>
			    </div> ';
			} else if($birthdate_b >= date("Y-m-d")) {
				echo
			 	'<div id="gritter-notice-wrapper">
			        <div id="gritter-item-1" class="gritter-item-wrapper" >
			            <div class="gritter-top"></div>
			            <div class="gritter-item">
			                <div class="gritter-close"></div>
			                    <div class="gritter-without-image">	
			                        <span class="gritter-title">Failed</span>
			                        <p>Please enter the right Bride birth date!</p>
			                    </div>
			                    <div style="clear:both"></div>
			                </div>	
			            <div class="gritter-bottom"></div>
			        </div>
			    </div> ';
			} else if($baptismal_date_g > date("Y-m-d") || $baptismal_date_b > date("Y-m-d") || $confirmation_date_g > date("Y-m-d") || $confirmation_date_b > date("Y-m-d")) {
				echo
			 	'<div id="gritter-notice-wrapper">
			        <div id="gritter-item-1" class="gritter-item-wrapper" >
			            <div class="gritter-top"></div>
			            <div class="gritter-item">
			                <div class="gritter-close"></div>
			                    <div class="gritter-without-image">	
			                        <span class="gritter-title">Failed</span>
			                        <p>Please Check your entered event date. Make sure that you input not equal today or in advance date. Thank you!</p>
			                    </div>
			                    <div style="clear:both"></div>
			                </div>	
			            <div class="gritter-bottom"></div>
			        </div>
			    </div> ';
			} else {
				$return1 = $this->events_model->insert_marriage($fname_g, $mname_g, $lname_g, $birthdate_g, $age_g, $address_g, $lenght_years_g, $occupation_g, $nationality_g, $religion_g, $parish_address_g, $father_name_g, $father_religion_g, $father_placebirth_g, $mother_name_g, $mother_religion_g, $mother_placebirth_g, $baptismal_status_g, $proof_gaptismal_g, $baptismal_date_g, $parish_gaptismal_g, $parish_gaptismal_address_g, $confirmation_status_g, $proof_confirmation_g, $confirmation_date_g, $parish_confirmation_g, $fname_b, $mname_b, $lname_b, $birthdate_b, $age_b, $address_b, $lenght_years_b, $occupation_b, $nationality_b, $religion_b, $parish_address_b, $father_name_b, $father_religion_b, $father_placebirth_b, $mother_name_b, $mother_religion_b, $mother_placebirth_b, $baptismal_status_b, $proof_baptismal_b, $baptismal_date_b, $parish_baptismal_b, $parish_baptismal_address_b, $confirmation_status_b, $proof_confirmation_b, $confirmation_date_b, $parish_confirmation_b, $record_id_user, $date_added, $date_updated);
				if(!$return1) {
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

	public function Baptismal_Notif() {
        $result = $this->events_model->get_baptismal_notif();

        $this->output->set_content_type('application/json');
        $this->output->set_output(json_encode($result));

        return $result;
  	}
  	public function Death_Notif() {
        $result = $this->events_model->get_death_notif();

        $this->output->set_content_type('application/json');
        $this->output->set_output(json_encode($result));

        return $result;
  	}
  	public function marriage_Notif() {
        $result = $this->events_model->get_marriage_notif();

        $this->output->set_content_type('application/json');
        $this->output->set_output(json_encode($result));

        return $result;
  	}
  	public function displayNUpdatenotificationBaptismal() {
		$updatecomment=$this->events_model->displayNUpdatenotification_baptismal();
    	// $data['notifications']=$this->blog_model->get_notify_1();
    	// $this->load->view('home/displaynotification', $data);
  	}
  	public function displayNUpdatenotificationDeath() {
		$updatecomment=$this->events_model->displayNUpdatenotification_death();
    	// $data['notifications']=$this->blog_model->get_notify_1();
    	// $this->load->view('home/displaynotification', $data);
  	}
  	public function displayNUpdatenotificationMarriage() {
		$updatecomment=$this->events_model->displayNUpdatenotification_marriage();
    	// $data['notifications']=$this->blog_model->get_notify_1();
    	// $this->load->view('home/displaynotification', $data);
  	}

  	function editBaptismal() {
		
		if ($_POST) {
			$baptism_id =$this->input->post('baptism_id');
			$fname =ucwords($this->input->post('fname'));
			$mname=ucwords($this->input->post('mname'));
			$lname=ucwords($this->input->post('lname'));
			$eventDate=$this->input->post('dateTobaptise');
			$eventDate_1=$this->input->post('dateTobaptise_1');
			$eventTime=$this->input->post('eventTime');
			$eventTime_1=$this->input->post('eventTime_1');
			$birthdate=$this->input->post('birthdate');
			$birthplace=ucwords($this->input->post('birthplace'));
			$father=ucwords($this->input->post('father'));
			$father_birthplace=ucwords($this->input->post('father_birthplace'));
			$mother=ucwords($this->input->post('mother'));
			$mother_birthplace=ucwords($this->input->post('mother_birthplace'));
			$address=ucwords($this->input->post('address'));
			$mobile_no=$this->input->post('mobile_no');
			$email=$this->input->post('email');
			$marriage=ucwords($this->input->post('marriage'));
			$informant=$this->session->userdata('user_id');
			$attendance=$this->input->post('attendance');
			$doc_status=$this->input->post('doc_status');
			$GodFather=ucwords($this->input->post('GodFather'));
			$GodFather_bplace=ucwords($this->input->post('GodFather_bplace'));
			$GodMother=ucwords($this->input->post('GodMother'));
			$GodMother_bplace=ucwords($this->input->post('GodMother_bplace'));
			$additional_GodFather=ucwords($this->input->post('additional_GodFather'));
			$additional_GodMother=ucwords($this->input->post('additional_GodMother'));
			$amount=$this->input->post('amount');
			$tran_id=$this->input->post('tran_id');
			$dayIndex = $this->input->post('dayIndex');

			$baptismal = "Baptismal";
			$applicant = $fname." ".$mname." ".$lname; 
			$record_id_user= $this->session->userdata('user_id');

			$dateY = date('Y');
            $minDateEvent_0 = $dateY.'-12-31';
            $minDateEvent_1 = strtotime($minDateEvent_0);
			$dateTobaptise_0 = strtotime($eventDate); 

			$timeZone = '';
            if ($eventTime >= '08' AND $eventTime <= '12') {
            	$timeZone = 'am';
            } else {
            	$timeZone = 'pm';
            }
			$title = $eventTime .''. $timeZone . " Reserved";
			$eventNtime = $eventTime_1.$timeZone.' Reserved';


			$checkrecord1 = $this->events_model->check_baptismal_record_1($fname, $mname, $lname, $record_id_user);
			$checkrecord2 = $this->events_model->check_tranID_record($tran_id);
			$checkrecord3 = $this->events_model->check_reserve_Record_1($eventDate, $eventTime, $dayIndex, $record_id_user);
            if (@$checkrecord1) {
				echo
				 	'<div id="gritter-notice-wrapper">
				        <div id="gritter-item-1" class="gritter-item-wrapper" >
				            <div class="gritter-top"></div>
				            <div class="gritter-item">
				                <div class="gritter-close"></div>
				                    <div class="gritter-without-image">
				                        <span class="gritter-title">Failed</span>
				                        <p>Sorry, Child Name Already Exist!</p>
				                    </div>
				                    <div style="clear:both"></div>
				                </div>	
				            <div class="gritter-bottom"></div>
				        </div>
				    </div> ';
			} else if(@$checkrecord3) {
				echo
				 	'<div id="gritter-notice-wrapper">
				        <div id="gritter-item-1" class="gritter-item-wrapper" >
				            <div class="gritter-top"></div>
				            <div class="gritter-item">
				                <div class="gritter-close"></div>
				                    <div class="gritter-without-image">
				                        <span class="gritter-title">Failed</span>
				                        <p>Sorry, There was an event scheduled in that particular date and time</p>
				                    </div>
				                    <div style="clear:both"></div>
				                </div>	
				            <div class="gritter-bottom"></div>
				        </div>
				    </div> ';
			
			} else if($eventDate <= date("Y-m-d") || $dateTobaptise_0 > $minDateEvent_1) {
				// echo '<h5 class="text-center">Sorry, the date you are trying to reserve are not available </h5>';
				echo
				 	'<div id="gritter-notice-wrapper">
				        <div id="gritter-item-1" class="gritter-item-wrapper" >
				            <div class="gritter-top"></div>
				            <div class="gritter-item">
				                <div class="gritter-close"></div>
				                    <div class="gritter-without-image">
				                        <span class="gritter-title">Failed</span>
				                        <p>Sorry, the date you are trying to reserve are not available</p>
				                    </div>
				                    <div style="clear:both"></div>
				                </div>	
				            <div class="gritter-bottom"></div>
				        </div>
				    </div> ';
			} else if($birthdate >= date("Y-m-d")) {
				// echo '<h5 class="text-center">Sorry, Birthdate are not acceptable </h5>';
				echo
				 	'<div id="gritter-notice-wrapper">
				        <div id="gritter-item-1" class="gritter-item-wrapper" >
				            <div class="gritter-top"></div>
				            <div class="gritter-item">
				                <div class="gritter-close"></div>
				                    <div class="gritter-without-image">
				                        <span class="gritter-title">Failed</span>
				                        <p>Sorry, Birthdate are not acceptable </p>
				                    </div>
				                    <div style="clear:both"></div>
				                </div>	
				            <div class="gritter-bottom"></div>
				        </div>
				    </div> ';
			} else {
			    $return = $this->events_model->update_baptismal($baptism_id, $fname, $mname, $lname, $eventDate, $eventTime, $birthdate, $birthplace, $father, $father_birthplace, $mother, $mother_birthplace, $address, $mobile_no, $email, $marriage, $informant, $attendance, $doc_status, $GodFather, $GodFather_bplace, $GodMother, $GodMother_bplace, $additional_GodFather, $additional_GodMother, $tran_id);

				$return2 = $this->events_model->update_transaction($applicant, $amount, $eventDate, $tran_id);
				$return3 = $this->events_model->update_calendar($title, $eventDate, $eventTime, $record_id_user, $eventDate_1, $eventNtime);
			}

		}
	}

	 function editDeath() {
		if ($this->session->userdata('user_id')=='') redirect(base_url()."redirect/login");
				
		if ($_POST) {
			$death_id = $this->input->post('death_id');
			$fname = ucwords($this->input->post('fname'));
			$mname= ucwords($this->input->post('mname'));
			$lname= ucwords($this->input->post('lname'));
			$date_deceased=$this->input->post('date_deceased');
			$eventTime= $this->input->post('eventTime');
			$eventTime_1= $this->input->post('eventTime_1');
			$eventDate=$this->input->post('date_burial');
			$eventDate_1=$this->input->post('date_burial_1');
			$age=$this->input->post('age');
			$civil_status= ucwords($this->input->post('civil_status'));
			$informant=$this->session->userdata('user_id');
			$address= ucwords($this->input->post('address'));
			$sacrament= ucwords($this->input->post('sacrament'));
			$death_caused=ucwords($this->input->post('death_caused'));
			$place_burial=ucwords($this->input->post('place_burial'));


			$timeZone = '';
            if ($eventTime >= '08' AND $eventTime <= '12') {
            	$timeZone = 'am';
            } else {
            	$timeZone = 'pm';
            }
			$title = $eventTime .''. $timeZone . " Reserved";
			$eventNtime = $eventTime_1 .''. $timeZone . " Reserved";

		   	$description = "Death";
			$record_id_user= $this->session->userdata('user_id');
			$allowed_status = "0";
			$dayIndex = '1';

			$title = $eventTime .''. $timeZone . " Reserved";

			$checkrecord1 = $this->events_model->check_death_record_1($fname, $mname, $lname);
			$checkrecord3 = $this->events_model->check_reserve_Record_1($eventDate, $eventTime, $dayIndex, $record_id_user);
			if (@$checkrecord1) {
				echo
			 	'<div id="gritter-notice-wrapper">
			        <div id="gritter-item-1" class="gritter-item-wrapper" >
			            <div class="gritter-top"></div>
			            <div class="gritter-item">
			                <div class="gritter-close"></div>
			                    <div class="gritter-without-image">
			                        <span class="gritter-title">Failed</span>
			                        <p>Sorry, The Deceased information has Already Exist!</p>
			                    </div>
			                    <div style="clear:both"></div>
			                </div>	
			            <div class="gritter-bottom"></div>
			        </div>
			    </div> ';
			} else if(@$checkrecord3) {
				echo
			 	'<div id="gritter-notice-wrapper">
			        <div id="gritter-item-1" class="gritter-item-wrapper" >
			            <div class="gritter-top"></div>
			            <div class="gritter-item">
			                <div class="gritter-close"></div>
			                    <div class="gritter-without-image">
			                        <span class="gritter-title">Failed</span>
			                        <p>Sorry, There was an event scheduled in that particular date and time</p>
			                    </div>
			                    <div style="clear:both"></div>
			                </div>	
			            <div class="gritter-bottom"></div>
			    </div> ';
			} else if($date_deceased > date("Y-m-d")) {
			    echo
			 	'<div id="gritter-notice-wrapper">
			        <div id="gritter-item-1" class="gritter-item-wrapper" >
			            <div class="gritter-top"></div>
			            <div class="gritter-item">
			                <div class="gritter-close"></div>
			                    <div class="gritter-without-image">
			                        <span class="gritter-title">Failed</span>
			                        <p>Sorry, Please input the right date when the Deceased died!</p>
			                    </div>
			                    <div style="clear:both"></div>
			                </div>	
			            <div class="gritter-bottom"></div>
			        </div>
			    </div> ';
			} else {
			   	$return1 = $this->events_model->update_death($death_id, $fname,  $mname, $lname, $date_deceased, $eventDate, $eventTime, $age, $civil_status, $informant, $address, $sacrament, $death_caused, $place_burial);
			   	
			   	$return3 = $this->events_model->update_calendar($title, $eventDate, $eventTime, $record_id_user, $eventDate_1, $eventNtime);

				if (!$return1) {
					echo "Sorry, System is not currently unavailable. Please try again!";
				}
			}
		}
	}

  	

}

/* End of file user.php */
/* Location: ./application/controllers/user.php */
