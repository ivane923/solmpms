<?php

class Registration extends CI_Controller {
	var $data;
	var $userID;
	
	function __construct() {
		parent::__construct();

		$this->load->model('users_model');
		
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->load->library('session');

		$this->data['title'] = "Registation";
		$this->data['page'] = "website/registration";
		$this->data['menu'] = "registration";
		$this->data['members'] = $this->users_model->list_members();

	}

	function index() {
		if ($this->session->userdata('ID')!='') redirect(base_url()."home");

		$this->load->view('index', $this->data);


	}

	function login() {
		if ($_POST) {
			$username = $this->input->post('username');
			$password = $this->input->post('password');

			$user = $this->users_model->check_login_member($username, $password);
			if (@$user->status_flag==1) {
				$sessdata = array(
					'ID'       => @$user->ID,
					'fullname'		=> ucfirst(@$user->lname) . ', ' . ucfirst(@$user->fname),
					'fname'      => @$user->fname,
					'username'      => @$user->username,
					'password'      => @$user->password 	
                  	// 'profile'       => @$user->profile
                	// 'company_id'	=> @$user->company_id,
                  	// 'admin_flag'	=> @$user->admin_flag, 
                  	// 'status_flag' 	=> @$user->status_flag,
                  	// 'email_address'	=> @$user->email_address
				);

				$this->session->set_userdata($sessdata);
			} else {
				echo "Sorry, username/password is Invalid. Please try again.<br><br>";
			}		
		} else {
			// if ($this->session->userdata('user_id')!='') redirect(base_url()."admin/login");

			// $this->data['title'] = "Log In";
   //          $this->data['page'] = "admin/login";
			
	  //       $this->load->view('index', $this->data);
		}
	}

	function logout() {

		$this->session->sess_destroy();
		redirect(base_url() . "admin/login");
	}

	function alpha_dash_space($str_in){

		if (! preg_match("/^([-a-z0-9_ ])+$/i", $str_in)) {
			$this->form_validation->set_message('alpha_dash_space', 'The %s field may only contain alpha-numeric characters, spaces, underscores, and dashes.');
			return FALSE;
		} else {
			return TRUE;
		}
	} 

	function add() {
		$this->load->library('form_validation');
		$this->form_validation->set_rules('fname',' ','trim|required|callback_alpha_dash_space|max_length[15]|min_length[3]');
		$this->form_validation->set_rules('mi',' ','required|alpha|max_length[1]|min_length[1]');
		$this->form_validation->set_rules('lname',' ','required|alpha|max_length[15]|min_length[2]');
		$this->form_validation->set_rules('email',' ','required|valid_email');
		$this->form_validation->set_rules('address',' ','required|min_length[10]');
		$this->form_validation->set_rules('username',' ','required|max_length[12]|is_unique[user_info_tb.username]');
		$this->form_validation->set_rules('password0',' ','required|max_length[12]|min_length[5]');
		$this->form_validation->set_rules('password1',' ','required|max_length[12]|min_length[5]');
		
		if($this->form_validation->run() == TRUE) {
			$fname = ucwords($this->input->post('fname'));
			$mname = ucwords($this->input->post('mi'));
			$lname = ucwords($this->input->post('lname'));
			$gender = "Female";
			$email = $this->input->post('email');
			$address = ucwords($this->input->post('address'));
			$username = $this->input->post('username');
			$password = $this->input->post('password0');

			$set = '123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
			$mem_code = substr(str_shuffle($set), 0, 12);

			$user['fname'] = $fname;
			$user['mname'] = $mname;
			$user['lname'] = $lname;
			$user['gender'] = $gender;
			$user['mobile_no'] = $email;
			$user['address'] = $address;
			$user['username'] = $username;
			$user['password'] = md5($password);
			$user['profile'] = 'img/user-img.png';
			$user['status_flag'] = '0';
			$user['user_type'] = 'Member';
			$user['code'] = $mem_code;
			$user['date_added'] = date("Y-m-d H:i:s");
			
			if ($mem_id = $this->users_model->insert($user)) {
				$this->session->set_flashdata('msg','Thank you for registering, Please visit your email to verify your account.');
				$this->session->set_flashdata('msg_class','alert-success');

				
			} elseif (!$this->users_model->insert($user)) {
				$this->session->set_flashdata('msg','Articles not added Please try again!!');
				$this->session->set_flashdata('msg_class','alert-danger');
			}

			$config = array(
				'protocol' 	=> 'smtp',
				'smtp_host' => 'ssl://smtp.googlemail.com',
				'smtp_port' => 465,
		  		'smtp_user' => 'solmp.noreply@gmail.com',
		  		'smtp_pass' => '101csdserver',
		  		'mailtype' 	=> 'html',
		  		'charset' 	=> 'iso-8859-1',
		  		'wordwrap' 	=> TRUE
		  	);
			$message = '<p> Dear Mr/Ms <b>'.$fname.' '. $mname.'. ' .$lname.',</b><br><br> Thank you for registering on Shrine of Our lady of Mercy website. To
			activate your account,<br> Please click the link below</p> 
			<a href="'.base_url().'login/activate/'.$mem_id.'/'.$mem_code.'">This link will redirect you to verify your account</a>
			<p>You may now reserve to any event and join with all announcement posted by our shrine staff 
			and serve byour church.</p>';    

			$this->load->library('email', $config);
			$this->email->set_newline("\r\n");
			$this->email->from($config['smtp_user']);
			$this->email->to($email);
			$this->email->subject('Signup Verification Email');
			$this->email->message($message);

			if (!$this->email->send()) {
	          	show_error($this->email->print_debugger()); 
	      	} else {
				
	      	}
			return redirect('redirect/registration');


		} else {
			$this->load->view('index', $this->data);
		}

		// $this->load->library('email');
        
  //       $config['mailtype'] = 'html';
  //       $config['set_newline'] = "\r\n";
        
  //       $htmlContent = '<h1>Shrine of Our Lady of Mercy Account Verificat</h1>';
  //       $htmlContent .= '<p> Dear Mr/Ms <b>'.$fname.' '. $mname.'. ' .$lname.',</b><br><br> Thank you for registering on Shrine of Our lady of Mercy website. To
		// 			activate your account,<br> Please click the link below</p> 
		//         	<a href="'.base_url().'login/activate/'.$mem_id.'/'.$mem_code.'">This link will redirect you to verify your account</a>
		//         	<p>You may now reserve to any event and join with all announcement posted by our shrine staff 
		//         	and serve byour church.</p>';
        
  //       $this->email->initialize($config);
  //       $this->email->to($email);
  //       $this->email->from('solmp.noreply@gmail.com','Shrine of Our Lady');
  //       $this->email->subject('SOLMP Account');
  //       $this->email->message($htmlContent);
		
	 //    if (!$this->email->send()) {
  //         	show_error($this->email->print_debugger()); 
	 //        echo "Please connect to internet connection";
  //     	} else {
  //     		redirect ('home');
  //       }

	}	
	function activate(){
		$mem_id =  $this->uri->segment(3);
		$code = $this->uri->segment(4);
		//fetch user details
		$mem = $this->users_model->getUser($mem_id);
		//if code matches
		if($mem['code'] == $code){
			//update user active status
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
		redirect('registration');
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
