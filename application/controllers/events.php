<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Events extends CI_Controller {
	var $data;

	public function __construct() {
		parent::__construct();

		$this->load->model('users_model');
	}

	function index() {
		// if ($this->session->userdata('ID')=='') redirect(base_url()."login");

		$this->data['title'] = "Events";
		$this->data['page'] = "website/events";
		$this->data['menu'] = "events";

		$this->data['users'] = $this->users_model->list_users();

		$this->load->view('index', $this->data);
	}
	function add() {
		// if ($this->session->userdata('ID')=='') redirect(base_url()."login");

		if ($_POST) {
			$fname = $this->input->post('fname');
			$mname=$this->input->post('mname');
			$lname=$this->input->post('lname');

			$checkrecord = $this->events_model->check_confirmation_record($fname, $mname, $lname);
			if (@$checkrecord) {
				echo "Sorry, Record has already Exist!";
			} else if(@$checkrecord) {
				echo "Sorry, Record has already Exist!";
			} else {
			   	$return = $this->events_model->insert_confirmation($fname, $mname, $lname);
				if (!$return) {
					echo "Sorry, System is not currently unavailable. Please try again!";
				}
			}
		}
	}

}

/* End of file home.php */
/* Location: ./application/controllers/home.php */
