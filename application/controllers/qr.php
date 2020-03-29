<?php

class Qr extends CI_Controller {
    var $data;
	var $userID;
	
	function __construct() {
		parent::__construct();
		
		$this->load->library('email');

		include "meRaviQr/qrlib.php";
		include "config.php";
	}

	function index() {
//		if ($this->session->userdata('admin_flag')<>'1') redirect(base_url());

		if ($this->session->userdata('user_id')=='') redirect(base_url()."user/login");

		$this->data['title'] = "QR";
        $this->data['page'] = "qr/index";
		$this->data['menu'] = "qr";
			
	    $this->load->view('index', $this->data);

	}

}

/* End of file user.php */
/* Location: ./application/controllers/user.php */
