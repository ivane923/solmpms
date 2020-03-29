<?php

class Payment extends CI_Controller {
    var $data;
	var $userID;
	
	function __construct() {
		parent::__construct();
		$this->load->model('transaction_model');
		$this->load->helper('directory');

		// $this->load->library('email');
	}

	function index() {
//		if ($this->session->userdata('admin_flag')<>'1') redirect(base_url());
		// if ($this->session->userdata('user_id')=='') redirect(base_url()."admin/login");
		
		$this->data['title'] = "Transaction";
        $this->data['page'] = "website/transaction";
		$this->data['menu'] = "transaction";

		$this->data['transactions'] = $this->transaction_model->list_transaction_mem();
	   
		$this->load->view('index', $this->data);
		
	}

	function edit() {
		
		if ($_POST) {
			$payment_id = $this->input->post('payment_id');
			$cash = $this->input->post('cash');

			// $checkrecord = $this->baptismal_model->check_baptismal_record($fname, $mname, $lname, $tran_id);
			// if (@$checkrecord) {
			// 	echo "Sorry, Record has already Exist!";
			// } else {
			    $return = $this->transaction_model->update_transaction($payment_id, $cash);

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
