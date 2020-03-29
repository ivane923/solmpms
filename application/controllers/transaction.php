	<?php

class Transaction extends CI_Controller {
    var $data;
	var $userID;
	
	function __construct() {
		parent::__construct();
		$this->load->model('transaction_model');
		$this->load->helper('directory');

		// $this->load->library('email');
	}

	function index() {
		if ($this->session->userdata('user_type')!='Administrator') redirect(base_url()."redirect");
		
		$this->data['title'] = "Transaction";
        $this->data['page'] = "settings/transaction";
		$this->data['menu'] = "transaction";
        
		$this->data['transactions'] = $this->transaction_model->list_transaction();  
		$this->load->view('index', $this->data);
		
	}

	function edit() {
		
		if ($_POST) {
			$payment_id = $this->input->post('payment_id');
			$cash = $this->input->post('cash');

			$payment_status = '1';
			$checkrecord = $this->transaction_model->check_payment($payment_status);
			if (@$checkrecord) {
				echo
				 	'<div id="gritter-notice-wrapper">
				        <div id="gritter-item-1" class="gritter-item-wrapper" >
				            <div class="gritter-top"></div>
				            <div class="gritter-item">
				                <div class="gritter-close"></div>
				                    <div class="gritter-without-image">
				                        <span class="gritter-title">Failed</span>
				                        <p>Sorry, The transaction you are trying to update is already paid.</p>
				                    </div>
				                    <div style="clear:both"></div>
				                </div>	
				            <div class="gritter-bottom"></div>
				        </div>
				    </div> ';
				    echo "";
			} else {
			    $return = $this->transaction_model->update_transaction($payment_id, $cash);
				if (!$return) {
					echo "Sorry, System is not currently unavailable. Please try again!";
				}
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
