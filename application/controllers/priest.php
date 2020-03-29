<?php

class Priest extends CI_Controller {
    var $data;
	var $userID;
	
	function __construct() {
		parent::__construct();

		$this->load->model('users_model');
		$this->load->model('blog_model');
		$this->load->library('email');
	}

	function index() {
		if ($this->session->userdata('admin_flag')<>'Priest') {
			
		} else {
			redirect(base_url()."redirect/login");
		}

		if ($this->session->userdata('user_id')=='') redirect(base_url()."redirect/login");

		$this->data['title'] = "Priest";
        $this->data['page'] = "priest/index";
		$this->data['menu'] = "priest";

		$this->data['users'] = $this->users_model->list_users();
		$this->data['sermons'] = $this->blog_model->list_sermon();
		
			
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
                	'branch_id'		=> @$user->account_id,
                 	'username'      => @$user->username,
                  	'firstname'     => @$user->firstname,
                  	'lastname'      => @$user->lastname,
                  	'fullname'		=> @$user->lastname .', '. @$user->firstname,
                  	'password'      => @$user->password,
                  	'admin_flag'	=> @$user->admin_flag, 
                  	'fullaccess_flag' => @$user->fullaccess_flag
              	);

             	$this->session->set_userdata($sessdata);
			} else {
				echo "Sorry, username/password is Invalid. Please try again.<br><br>";
			}		
		} else {
			if ($this->session->userdata('user_id')!='') redirect(base_url()."user/login");

			$this->data['title'] = "Log In";
            $this->data['page'] = "user/login";
			
	        $this->load->view('index', $this->data);
		}
	}

	function logout() {
		$this->session->sess_destroy();
		redirect(base_url() . "user/login");
	}

	function add() {
		if ($this->session->userdata('user_id')=='') redirect(base_url()."user/login");

		if ($_POST) {
			$username=$this->input->post('username');
			$firstname=$this->input->post('firstname');
			$lastname=$this->input->post('lastname');
			$password=$this->input->post('password');
			$admin_flag = $this->input->post('admin_flag');
 
			$user = $this->users_model->check_username($username);
			if (@$user->status_flag==1) {
				echo "Sorry, Username already Exist!";
			}else {
				$return = $this->users_model->insert_user($username, $firstname, $lastname, $admin_flag, $password);

				if (!$return) {
					echo "Sorry, System is not currently unavailable. Please try again!";
				}
			}
		}
	}
	public function add_sermon() {
		if ($this->session->userdata('user_id')=='') redirect(base_url()."user/login");

		if ($this->input->post('articleBody_0') != '') {
			$articleBody = ucwords($this->input->post('articleBody_0'));
			$title_0 = ucwords($this->input->post('title_0'));

			$user['title'] = $title_0;
			$user['content'] = $articleBody_0;
			$user['date_added'] = date("Y-m-d H:i:s");

			if ($mem_id = $this->blog_model->save_sermon($user)) {
				$this->session->set_flashdata('msg','<span class="gritter-title">Success</span> has been added');
				$this->session->set_flashdata('msg_class','alert-success');				
			} elseif (!$this->users_model->insert($user)) {
				$this->session->set_flashdata('msg','<span class="gritter-title">Failed</span> Sermon was not added!');
				$this->session->set_flashdata('msg_class','alert-danger');
			}
			return redirect('priest/index');
		} else {
			$this->data['title'] = "Priest";
	        $this->data['page'] = "priest/index";
			$this->data['menu'] = "priest";

			$this->data['sermons'] = $this->blog_model->list_sermon();	
			$this->load->view('index', $this->data);
		}
	}

	function edit() {
		if($_POST){
			$username = $this->input->post('username');
			$firstname = $this->input->post('firstname');
			$lastname = $this->input->post('lastname');
			$admin_flag = $this->input->post('admin_flag');
			
            $return = $this->users_model->update_user($username, $firstname, $lastname, $admin_flag);

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
	
}

/* End of file user.php */
/* Location: ./application/controllers/user.php */
