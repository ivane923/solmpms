<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {
  var $data;
	var $data1;
	var $status;

	public function __construct() {
		parent::__construct();

		$this->load->model('blog_model');
		$this->load->model('users_model');
		$this->load->helper(array('form', 'url'));	

		$this->data['title'] = "Dashboard"; 
		$this->data['page'] = "home/index";
		$this->data['menu'] = "dashboard";
		$this->data['users'] = $this->users_model->list_users_1();
		// $this->data['posts'] = $this->blog_model->list_comments();
		$this->data['other_posts'] = $this->blog_model->list_comments_other();
		$this->data['comments']=$this->blog_model->get_comments();
	}

	function index() {
		if ($this->session->userdata('user_type')=='Cashier') redirect(base_url()."accounting/index");
		if ($this->session->userdata('ID')!='') redirect(base_url()."home");
		if ($this->session->userdata('user_id')=='') redirect(base_url()."admin/login");
		$this->load->view('index', $this->data);
	}

	function add(){
		if ($this->session->userdata('user_id')=='') redirect(base_url()."admin/login");
		
    	$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
		
		$this->form_validation->set_rules('titleName', 'Title', 'required|min_length[5]|max_length[30]');
		$this->form_validation->set_rules('articleBody', 'Body', 'required|min_length[5]');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('index', $this->data);
		} else {
			
		}
		if ($this->input->post('titleName') == '' || $this->input->post('articleBody') == ''){
			
		} else {
           
            if(!empty($_FILES['picture']['name'])){ 
	            $config['upload_path'] = 'img/post/';
	            $config['allowed_types'] = 'jpg|jpeg|png|gif';
	            $config['file_name'] = $_FILES['picture']['name'];
	            $this->load->library('upload',$config);
	            $this->upload->initialize($config);
	            $this->upload->do_upload('picture');
	            $uploadData = $this->upload->data();
	            $dir = 'img/post/';
	            $picture = $dir .''. $uploadData['file_name'];
            } else {
				$picture = '';
            }
            $userData = array(
                'status_title' => $this->input->post('titleName'),
                'status_body' => $this->input->post('articleBody'),
                'status_image' => $picture
            );
            $insertUserData = $this->blog_model->insert($userData);
            redirect('dashboard'); 
		}
    }
	public function insert_comments() {
		$insertinfo=$this->blog_model->insertcomments_article();
		$data['comments']=$this->blog_model->get_comments();
		$this->load->view('home/displaycomments', $data);
	}	
  	public function displaycomments() {
    	$data['comments']=$this->blog_model->get_comments();
    	$this->load->view('home/displaycomments', $data);
  	}
  	public function displaynotification() {
    	$data['comments']=$this->blog_model->get_notify();
    	$this->load->view('home/displaynotification', $data);
  	}
}

/* End of file home.php */
/* Location: ./application/controllers/home.php */
 