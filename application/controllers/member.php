
<?php

class Member extends CI_Controller {
    var $data;
	var $userID;
	
	function __construct() {
		parent::__construct();

		$this->load->model('users_model');
	}

	function index() {
		if ($this->session->userdata('ID')=='') redirect(base_url()."login");

		$this->data['title'] = "Log In";
        $this->data['page'] = ("member/profile");
		// $this->uri->segment(3) = 'profile';
		
        $this->load->view('index', $this->data);

	}
}

/* End of file user.php */
/* Location: ./application/controllers/user.php */
