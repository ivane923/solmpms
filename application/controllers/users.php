<?php

class Users extends CI_Controller {
    var $data;
	var $userID;
	
	function __construct() {
		parent::__construct();

		$this->load->model('users_model');
		
		$this->load->library('email');
	}

	function index() {
		// if ($this->session->userdata('user_type')<>'Cashier') redirect(base_url()."home/index");

		if ($this->session->userdata('user_id')=='') redirect(base_url()."admin/login");

		$this->data['title'] = "Users";
        $this->data['page'] = "settings/users";
		$this->data['menu'] = "users";

		$this->data['employees'] = $this->users_model->list_users();
		$this->data['priests'] = $this->users_model->list_priests();
		$this->data['members'] = $this->users_model->list_members();
			
		// if ($this->session->userdata('admin_flag')<>'Administrator') redirect(base_url()'users/index');
			$this->load->view('index', $this->data);

	}

	function update_user_0() {
  		if ($this->session->userdata('user_id')=='')redirect(base_url()."redirect/login");

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

		if ($this->form_validation->run() == FALSE) {
			$this->data['title'] = "User Profile"; 
			$this->data['page'] = "home/user_profile";
			$this->data['menu'] = "user_profile";
		
	    	$this->load->view('index', $this->data);
		}
		
		if ($email && $address && $password_1 && $password_0 == $password_1) {
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
				$picture = $this->session->userdata('profile');
	        }
	        $user['mobile_no'] = $email;
			$user['address'] = $address;
			$user['password'] = md5($password_1);
			$user['profile'] = $picture;
			if ($this->users_model->update_user($user)) {
				$this->session->set_flashdata('msg','<span class="gritter-title">Success</span> Your Account has been updated.</b> <br> Please re-sign in your account to apply changes. Thank you!');
				$this->session->set_flashdata('msg_class','alert-success');
				return redirect ('main_c/my_profile');
			}
		} elseif ($password_0 == '' && $password_0 == '') {
			$this->session->set_flashdata('msg','<span class="gritter-title">Failed</span> Your Account was not been update. <br> - Password is required!');
			$this->session->set_flashdata('msg_class','alert-success');
			return redirect ('main_c/my_profile');
		} elseif ($password_0 != $password_1) {
			$this->session->set_flashdata('msg','<span class="gritter-title">Failed</span> Your Account was not been update. <br> - Password mismatch!');
			$this->session->set_flashdata('msg_class','alert-success');
			return redirect ('main_c/my_profile');
		}
	}	
	function update_user_1() {
  		if ($this->session->userdata('user_id')=='')redirect(base_url()."redirect/login");
  		if ($this->session->userdata('user_type')!='Member')redirect(base_url()."redirect/login");

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

		if ($this->form_validation->run() == FALSE) {
			$this->data['title'] = "My account";
	        $this->data['page'] = "website/my_profile";
			$this->data['menu'] = "my_account";
		
	    	$this->load->view('index', $this->data);
		}
		
		if ($email && $address && $password_1 && $password_0 == $password_1) {
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
				$picture = $this->session->userdata('profile');
	        }
	        $user['mobile_no'] = $email;
			$user['address'] = $address;
			$user['password'] = md5($password_1);
			$user['profile'] = $picture;
			if ($this->users_model->update_user($user)) {
				$this->session->set_flashdata('msg','<span class="gritter-title">Success</span> Your Account has been updated.</b> <br> Please re-sign in your account to apply changes. Thank you!');
				$this->session->set_flashdata('msg_class','alert-success');
				return redirect ('redirect/my_profile');
			}
		} elseif ($password_0 == '' && $password_0 == '') {
			$this->session->set_flashdata('msg','<span class="gritter-title">Failed</span> Your Account was not been update. <br> - Password is required!');
			$this->session->set_flashdata('msg_class','alert-success');
			return redirect ('redirect/my_profile');
		} elseif ($password_0 != $password_1) {
			$this->session->set_flashdata('msg','<span class="gritter-title">Failed</span> Your Account was not been update. <br> - Password mismatch!');
			$this->session->set_flashdata('msg_class','alert-success');
			return redirect ('redirect/my_profile');
		}
	}		

	function edit() {
		if($_POST){
			$deduction_id = $this->input->post('deduction_id');
			$deduction_name = $this->input->post('deduction_name');
			
            $return = $this->deduction_model->update_branch($deduction_id, $deduction_name);

			if (!$return) {
				echo "Sorry, System is not currently unavailable. Please try again!";
			}
		}
	}

	function delete() {
		if ($this->session->userdata('user_id')=='') redirect(base_url()."user/login");

		if($_POST) {
			$deduction_id = $this->input->post('deduction_id');

			$return = $this->deduction_model->remove_branch($deduction_id);

			if (!$return) {
				echo "Sorry, System is not currently unavailable. Please try again!";
			}
		}
	}

	function change_password() {
		if ($this->session->userdata('user_id')=='') redirect(base_url('redirect/login'));

		if ($_POST) {
			$user_id = $this->input->post('user_id');
			$new_password=$this->input->post('newpass');

			$return = $this->users_model->update_password($user_id, $new_password);
			if (!$return) {
				echo "Sorry, System is not currently unavailable. Please try again!";
			}
		}
	}	

	function change_password_member() {
		if ($this->session->userdata('ID')=='') redirect(base_url());

		if ($_POST) {
			$user_id_member = $this->input->post('user_id_member');
			$new_password_member=$this->input->post('newpassMember');

			$return = $this->users_model->update_password_member($user_id_member, $new_password_member);
			if (!$return) {
				echo "Sorry, System is not currently unavailable. Please try again!";
			}
		}
	}	

}

/* End of file user.php */
/* Location: ./application/controllers/user.php */
