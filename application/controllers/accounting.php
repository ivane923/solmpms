<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Accounting extends CI_Controller {
	var $data;

	public function __construct() {
		parent::__construct();

		$this->load->model('transaction_model');
	}
	function index() {
		if ($this->session->userdata('user_id')=='') redirect(base_url()."admin/login");

		$this->data['title'] = "Accounting";
		$this->data['page'] = "accounting/index";
		$this->data['menu'] = "accounting";

		$this->data['transactions'] = $this->transaction_model->list_transaction();  
		$this->data['donations'] = $this->transaction_model->list_donation();  
		$this->load->view('index', $this->data);

	}

}

/* End of file home.php */
/* Location: ./application/controllers/home.php */
