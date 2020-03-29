<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Redirect extends CI_Controller {
	var $data;

	public function __construct() {
		parent::__construct();
		
		$this->load->model('blog_model');
		$this->load->model('users_model');

		$this->data['posts'] = $this->blog_model->list_post_0();
		$this->data['other_posts'] = $this->blog_model->list_post_1();
		$this->data['comments']=$this->blog_model->get_comments();	
		$this->data['sermons']=$this->blog_model->get_sermons();	

	}
	function index() {
		$this->data['title'] = "Home";
		$this->data['page'] = "website/home";
		$this->data['menu'] = "home";

		$this->load->view('index', $this->data);
	}

	public function login() {
		// if ($this->session->userdata('user_id')!='') redirect(base_url()."");
		
		$this->data['title'] = "Member Login";
        $this->data['page'] = "website/login";
		$this->data['menu'] = "website";

		$this->data['members'] = $this->users_model->list_members();
		
	    $this->load->view('index', $this->data);
	}
	function logout_member() {
		$this->session->unset_userdata('front_logged_in', true);
		$this->session->sess_destroy();
		redirect(base_url() . "redirect/login");
	}
	public function my_profile() {
		if ($this->session->userdata('user_id')=='') redirect(base_url()."redirect/login");
  		if ($this->session->userdata('user_type')!='Member')redirect(base_url()."redirect/login");
		
		$this->data['title'] = "My account";
        $this->data['page'] = "website/my_profile";
		$this->data['menu'] = "my_account";
		
	    $this->load->view('index', $this->data);
	}
	public function registration() {
		if ($this->session->userdata('user_id')!='') redirect(base_url()."redirect");
		
		$this->load->model('users_model');

		$this->data['title'] = "Registation";
		$this->data['page'] = "website/registration";
		$this->data['menu'] = "registration";
		$this->data['members'] = $this->users_model->list_members();

	    $this->load->view('index', $this->data);
	}
	public function events() {
		$this->data['title'] = "Events";
		$this->data['page'] = "website/events";
		$this->data['menu'] = "events";

		$this->data['users'] = $this->users_model->list_users();

		$this->load->view('index', $this->data);
	}	
	public function baptismal_reg() {
		if ($this->session->userdata('user_id')=='') redirect(base_url()."redirect/login");

		$this->load->model('events_model');
		$this->load->helper('url');
		$this->load->library('meRaviQr/qrlib');
		
		$this->data['title'] = "Baptismal";
        $this->data['page'] = "events/baptismal";
		$this->data['menu'] = "baptismal_reg";

		$this->data['baptismals'] = $this->events_model->list_baptismal_records();
	   
		$this->load->view('index', $this->data);  
	}
	public function confirmation_reg() {
		if ($this->session->userdata('user_id')=='') redirect(base_url()."redirect/login");
		$this->load->model('events_model');
		$this->data['title'] = "Confirmation";
        $this->data['page'] = "events/confirmation";
		$this->data['menu'] = "confirmation_reg";

		$this->data['baptismals'] = $this->events_model->list_baptismal();
	   
		$this->load->view('index', $this->data);
	}
	public function conversion_reg() {
		if ($this->session->userdata('user_id')=='') redirect(base_url()."redirect/login");	
		$this->load->model('events_model');
		$this->data['title'] = "Conversion";
        $this->data['page'] = "events/conversion";
		$this->data['menu'] = "conversion_reg";
	   
		$this->load->view('index', $this->data);
	}
	public function communion_reg() {
		if ($this->session->userdata('user_id')=='') redirect(base_url()."redirect/login");	
		$this->load->model('events_model');
		$this->data['title'] = "Conversion";
        $this->data['page'] = "events/communion";
		$this->data['menu'] = "communion_reg";
		$this->load->view('index', $this->data);	
	}
	public function death_reg() {
		if ($this->session->userdata('user_id')=='') redirect(base_url()."redirect/login");
		$this->load->model('events_model');
		$this->data['title'] = "Death";
        $this->data['page'] = "events/death";
		$this->data['menu'] = "death_reg";

		$this->data['deaths'] = $this->events_model->list_death_records();
	   
		$this->load->view('index', $this->data);
	}
	public function matrimony_reg() {
		if ($this->session->userdata('user_id')=='') redirect(base_url()."redirect/login");
		$this->load->model('events_model');
		$this->data['title'] = "Matrominy";
        $this->data['page'] = "events/matrimony";
		$this->data['menu'] = "matrimony_reg";

		$this->data['matrimonys'] = $this->events_model->list_matrimony_records();
		
	    $this->load->view('index', $this->data);
	}
	public function members_records() {
		if ($this->session->userdata('user_id')=='') redirect(base_url()."login");
		$this->load->model('transaction_model');
		$this->data['title'] = "Transaction";
        $this->data['page'] = "website/transaction";
		$this->data['menu'] = "transaction";

		$this->data['transactions'] = $this->transaction_model->list_transaction_mem();
	   
		$this->load->view('index', $this->data);
	}
	public function calendar() {
		$this->data['title'] = "Calendar";
        $this->data['page'] = "website/calendar";
        $this->data['menu'] = "calendar";
       
        $this->load->view('index', $this->data);
	}
	public function about() {
		$this->data['title'] = "About";
        $this->data['page'] = "website/about";
		$this->data['menu'] = "about";
	   
        $this->load->view('index', $this->data);
	}
	public function contact_us() {
		$this->data['title'] = "Contact Us";
        $this->data['page'] = "website/contact_us";
		$this->data['menu'] = "contact_us";
	   
        $this->load->view('index', $this->data);
	}

	function login_validation() {
		if ($_POST) {
			$username = $this->input->post('username');
            $password = $this->input->post('password');

           	$user = $this->users_model->check_login_member($username, $password);
			if (@$user->status_flag==1) {
            	$sessdata = array(
                	'user_id'       => @$user->user_id,
                  	// 'back_fullname'		=> ucfirst(@$user->fname). ' ' . ucfirst(@$user->mname). '. ' . ucfirst(@$user->lname),
                  	'fname'			=> @$user->fname,
                  	'mname'			=> @$user->mname,
                  	'lname'			=> @$user->lname,
                  	'fullname'		=> ucfirst(@$user->fname). ' ' . ucfirst(@$user->mname). '. ' . ucfirst(@$user->lname),
                 	'username'      => @$user->username,
                  	'password'      => @$user->password, 	
                  	'user_type'      => @$user->user_type,
                  	'mobile_no'      => @$user->mobile_no,
                  	'address'      => @$user->address,
                  	'profile'      => @$user->profile,
                  	'back_logged_in' => true
              	);
             	$this->session->set_userdata($sessdata);
			} else {
				echo "Sorry, username or password is incorrect.<br>";
			}		
		} else {
			// if ($this->session->userdata('user_type') == 'Member') {
			// 	redirect("redirect/login");	
			// } else if ($this->session->userdata('user_type') == 'Administrator') {
			// 	redirect("main_c/");	
			// }
			if ($this->session->userdata('user_type') != '')redirect(base_url().'redirect/login');


			// $this->data['title'] = "Log In";
   //          $this->data['page'] = "website/login";
			
	  //       $this->load->view('index', $this->data);
		}
	}
	public function displaycomments() {
    	$data['comments']=$this->blog_model->get_comments();
    	$this->load->view('home/displaycomments', $data);
  	}
  	function update_user() {
  		if ($this->session->userdata('user_id')!='')redirect(base_url()."redirect/login");

		$this->load->library('form_validation');
		$this->form_validation->set_rules('email',' ','required|valid_email');
		$this->form_validation->set_rules('address',' ','required|min_length[10]');
		$this->form_validation->set_rules('username',' ','required|alpha_numeric|max_length[12]|is_unique[user_info_tb.username]');
		$this->form_validation->set_rules('pass0',' ','required|max_length[12]|min_length[5]');
		$this->form_validation->set_rules('pass1',' ','required|max_length[12]|min_length[5]');
		
		$email = $this->input->post('email');
		$address = ucwords($this->input->post('address'));
		$password_0 = $this->input->post('pass0');
		$password_1 = $this->input->post('pass1');
		// $picture = $this->input->post('picture');
		if(!empty($_FILES['picture']['name'])){ 
            $config['upload_path'] = 'img/user/';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            $config['file_name'] = $_FILES['picture']['name'];
            $this->load->library('upload',$config);
            $this->upload->initialize($config);
            $this->upload->do_upload('picture');
            $uploadData = $this->upload->data();
            $dir = 'img/user/';
            $picture = $dir .''. $uploadData['file_name'];
        } else {
			$picture = 'img/user/user-logo.png';
        }
		if ($this->form_validation->run() != TRUE) {
			$this->data['title'] = "User Profile"; 
			$this->data['page'] = "home/user_profile";
			$this->data['menu'] = "user_profile";
			$this->load->view('index', $this->data);
		} else {

		}
		if ($email != '' || $address != '' || $password_1 != '' || $password_0 != '') {
			$user['mobile_no'] = $email;
			$user['address'] = $address;
			$user['password'] = md5($password_1);
			$user['profile'] = $picture;
			if ($this->users_model->update_user($user)) {
				$this->session->set_flashdata('msg','Your Account has been updated');
				$this->session->set_flashdata('msg_class','alert-success');
			} elseif (!$this->users_model->update_user($user)) {
				$this->session->set_flashdata('msg','Articles not added Please try again!!');
				$this->session->set_flashdata('msg_class','alert-danger');
			}
			return redirect ('main_c/user_profile');
		}
		
		
	}	

}

/* End of file home.php */
/* Location: ./application/controllers/home.php */
