<?php

class Communion extends CI_Controller {
    var $data;
	var $userID;
	
	function __construct() {
		parent::__construct();
		$this->load->model('events_model');
	}

	function index() {
		if ($this->session->userdata('ID')=='') redirect(base_url()."login");	
		
		$this->data['title'] = "Conversion";
        $this->data['page'] = "website/events/communion";
		$this->data['menu'] = "conversion";
		$this->load->view('index', $this->data);	
	}

	function add() {
		if ($this->session->userdata('ID')=='') redirect(base_url()."login");	

		$insertinfo = $this->events_model->insert_communion();
		// $data['comments']=$this->blog_model->get_comments();
		$this->load->view('website/events/communion');
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

 
			$checkrecord = $this->baptismal_model->check_baptismal_record($fname, $mname, $lname, $tran_id);
			if (@$checkrecord) {
				echo "Sorry, Record has already Exist!";
			} else {
			    $return = $this->baptismal_model->update_baptismal($baptism_id, $fname, $mname, $lname, $dateTobaptise, $birthdate, $birthplace, $father, $father_birthplace, $mother, $mother_birthplace, $address, $mobile_no, $email, $marriage, $informant, $attendance, $doc_status, $GodFather, $GodFather_bplace, $GodMother, $GodMother_bplace, $additional_GodFather, $additional_GodMother, $tran_id);

				$return2 = $this->baptismal_model->update_transaction($baptismal, $informant, $applicant, $tran_id, $amount);

				// if (!$return) {
				// 	echo "Sorry, System is not currently unavailable. Please try again!";
				// }
			}
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
