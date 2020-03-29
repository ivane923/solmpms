<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Blog extends CI_Controller {
	public $data;
	public function __construct()
	{//Core controller constructor
		parent::__construct();
		$this->load->model('blog_model');
		$this->load->model('users_model');

		$this->data['posts'] = $this->blog_model->list_post_0();
		$this->data['other_posts'] = $this->blog_model->list_post_1();
		$this->data['comments']=$this->blog_model->get_comments();	

	}
	public function displaycomments() {
    	$data['comments']=$this->blog_model->get_comments();
    	$this->load->view('home/displaycomments', $data);
  	}
  	public function insert_comments() {
		$insertinfo=$this->blog_model->insertcomments_article();
		$data['comments']=$this->blog_model->get_comments();
		$this->load->view('home/displaycomments', $data);
	}	
	public function displaynotification() {
    	$data['notifications']=$this->blog_model->get_notify_1();
    	$this->load->view('home/displaynotification', $data);
  	}
  	public function notification_total() {
        $result = $this->blog_model->get_notification_total_1();

        $this->output->set_content_type('application/json');
        $this->output->set_output(json_encode($result));

        return $result;
  	}
  	public function displayNUpdatenotification() {
		$updatecomment=$this->blog_model->displayNUpdatenotification_1();
    	$data['notifications']=$this->blog_model->get_notify_1();
    	$this->load->view('home/displaynotification', $data);
  	}

}
/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */