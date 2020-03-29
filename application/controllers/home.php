<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {
	var $data;

	public function __construct() {
		parent::__construct();
		$this->load->model('blog_model');

		$this->data['posts'] = $this->blog_model->list_post_0();
		$this->data['other_posts'] = $this->blog_model->list_post_1();
		$this->data['comments']=$this->blog_model->get_comments();	

	}
	function index() {
		// if ($this->session->userdata('user_type')=='Cashier') redirect(base_url()."accounting/index");
		// if ($this->session->userdata('user_id')!='') redirect(base_url()."dashboard");

		$this->data['title'] = "Home";
		$this->data['page'] = "website/home";
		$this->data['menu'] = "home";

		$this->load->view('index', $this->data);
	}

}

/* End of file home.php */
/* Location: ./application/controllers/home.php */
