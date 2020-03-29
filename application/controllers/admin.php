<?php

class Admin extends CI_Controller {
    var $data;
	var $userID;
	
	function __construct() {
		parent::__construct();

		$this->load->model('users_model');
	}

	function index() {
		if ($this->session->userdata('user_id')!='') redirect(base_url()."main_c");

		$this->data['title'] = "Login";
        $this->data['page'] = "admin/login";
		$this->data['menu'] = "login";	

		$this->data['users'] = $this->users_model->list_users();
			
	    $this->load->view('index', $this->data);

	}
	function login() {
		if ($_POST) {
			$username = $this->input->post('username');
            $password = $this->input->post('password');

           	$user = $this->users_model->check_login($username, $password);
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
			if ($this->session->userdata('user_id')!='') redirect(base_url()."main_c");

			$this->data['title'] = "Log In";
            $this->data['page'] = "admin/login";
			
	        $this->load->view('index', $this->data);
		}
	}

	function logout() {
        // Unset User Data
		$this->session->unset_userdata('back_logged_in');
		// if ($this->session->userdata('logged_in') == true) {
			$this->session->sess_destroy();
			redirect(base_url() . "redirect/login");
			// echo ($id);die();
		// } else {
			// $this->session->sess_destroy();
			// redirect(base_url() . "site");
		// }
		 
	}

	function forget() {
		$data['account']=$this->blog_model->get_account();
		$this->load->view('admin/login', $data);
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
