<?php

class my_records extends CI_Controller {
    var $data;
	var $userID;
	
	function __construct() {
		parent::__construct();
		$this->load->model('transaction_model');
		$this->load->helper('directory');
	}

	function index() {
		if ($this->session->userdata('user_id')=='') redirect(base_url()."login");
		
		$this->data['title'] = "Transaction";
        $this->data['page'] = "website/transaction";
		$this->data['menu'] = "transaction";

		$this->data['transactions'] = $this->transaction_model->list_transaction_mem();
	   
		$this->load->view('index', $this->data);
		
	}

}

/* End of file user.php */
/* Location: ./application/controllers/user.php */
