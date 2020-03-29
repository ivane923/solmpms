<?php

class About extends CI_Controller {
    var $data;
	var $userID;
	
	function __construct() {
		parent::__construct();
	}

	function index() {
		
		$this->data['title'] = "About";
        $this->data['page'] = "website/about";
		$this->data['menu'] = "about";
	   
		$this->load->view('index', $this->data);
	
	}


}

/* End of file user.php */
/* Location: ./application/controllers/user.php */
