<?php

class Login extends CI_Controller {
    var $data;
	var $userID;
	
	function __construct() {
		parent::__construct();

		$this->load->model('users_model');
	}

	function index() {
		if ($this->session->userdata('user_id')!='') redirect(base_url()."dashboard");
		// if ($this->session->userdata('admin_flag')<>'1') redirect(base_url()."admin/login");
		// if ($this->session->userdata('ID')!='')redirect(base_url()."home");

		$this->data['title'] = "Member Login";
        $this->data['page'] = "website/login";
		$this->data['menu'] = "website";

		$this->data['members'] = $this->users_model->list_members();
		
	    $this->load->view('index', $this->data);
	}
	
	function login_validation() {
		if ($_POST) {
			$username = $this->input->post('username');
            $password = $this->input->post('password');

           	$user = $this->users_model->check_login_member($username, $password);
			if (@$user->status_flag==1) {
            	$sessdata_mem= array(
                	'ID'          => @$user->ID,
                  	'fullname'	  => ucfirst(@$user->lname) . ', ' . ucfirst(@$user->fname),
                  	'fullname1'	  => ucfirst(@$user->fname) . ' ' .ucfirst(@$user->lname),
                 	'fname'       => @$user->fname,
                 	'username'    => @$user->username,
                  	'password'    => @$user->password,
                  	'email'       => @$user->email
              	);
             	$this->session->set_userdata($sessdata_mem);
			} else {
				echo "Password or Username is invalid<br><br>";
			}		
		} else {
			if ($this->session->userdata('ID')!='') redirect(base_url()."home");
			
			// $this->data['title'] = "Home";
			// $this->data['page'] = "website/home";
			// $this->load->view('index', $this->data);
		}
	}

	function logout() {
		if ($this->session->userdata('ID')!='') redirect(base_url()."home");
      	$this->session->unset_userdata('ID');
    	$this->session->sess_destroy();	
		redirect(base_url() . "login"); 
	}

	function logout_member() {
		$this->session->unset_userdata('front_logged_in', true);
		$this->session->sess_destroy();
		redirect(base_url() . "login");
	}

	function add() {
		if ($this->session->userdata('user_id')=='') redirect(base_url()."user/login");

		if ($_POST) {
			$username=$this->input->post('username');
			$firstname=$this->input->post('firstname');
			$lastname=$this->input->post('lastname');
			$password=$this->input->post('password');
			$cpassword=$this->input->post('cpassword');
			$access_flag = $this->input->post('access_flag');
			$branch_id = $this->input->post('branch_id');
			$email_id = $this->input->post('email_id');
 
			$user = $this->users_model->check_username($username);
			if (@$user->status_flag==1) {
				echo "Sorry, Username already Exist!";
			}else {
				$return = $this->users_model->insert_user($username, $firstname, $lastname, $password, $access_flag, $branch_id, $email_id);

				if (!$return) {
					echo "Sorry, System is not currently unavailable. Please try again!";
				}
			}
		}
	}

	function activate(){
		$mem_id =  $this->uri->segment(3);
		$code = $this->uri->segment(4);
		$mem = $this->users_model->getUser($mem_id);
		if($mem['code'] == $code){
			$data['status_flag'] = 1;
			$query = $this->users_model->activate($data, $mem_id);
			if($query){
				$this->session->set_flashdata('message', 'User activated successfully');
			} else{
				$this->session->set_flashdata('message', 'Something went wrong in activating account');
			}
		}
		else{
			$this->session->set_flashdata('message', 'Cannot activate account. Code didnt match');
		}
		redirect('login');
	}

	function edit() {
		if($_POST){
			$username = $this->input->post('username');
			$firstname = $this->input->post('firstname');
			$lastname = $this->input->post('lastname');
			$email_id = $this->input->post('email_id');
			$branch_id = $this->input->post('branch_id');
			$access_flag = $this->input->post('access_flag');
 			
            $return = $this->users_model->update_user($username, $firstname, $lastname, $access_flag, $branch_id, $email_id);

			if (!$return) {
				echo "Sorry, System is not currently unavailable. Please try again!";
			}
		}
	}

	function delete() {
		if ($this->session->userdata('user_id')=='') redirect(base_url()."user/login");

		if($_POST) {
			$username = $this->input->post('username');

			$return = $this->users_model->remove_user($username);

			if (!$return) {
				echo "Sorry, System is not currently unavailable. Please try again!";
			}
		}
	}

	function change_password() {
		if ($this->session->userdata('user_id')=='') redirect(base_url());

		if ($_POST) {
			$user_id = $this->input->post('user_id');
			$new_password=$this->input->post('newpass');

			$return = $this->users_model->update_password($user_id, $new_password);

			if (!$return) {
				echo "Sorry, System is not currently unavailable. Please try again!";
			}
		}
	}	
}

/* End of file user.php */
/* Location: ./application/controllers/user.php */
