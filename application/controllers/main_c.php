<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main_c extends CI_Controller {
  var $data;
	var $data1;
	var $status;

	public function __construct() {
		parent::__construct();

		$this->load->model('blog_model');
		$this->load->model('users_model');

		$this->load->helper(array('form', 'url'));	

		$this->data['title'] = "Main"; 
		$this->data['page'] = "home/index";
		$this->data['menu'] = "Main_c";
		
		$this->data['users'] = $this->users_model->list_users_1();
		$this->data['posts'] = $this->blog_model->list_post_0();
		$this->data['other_posts'] = $this->blog_model->list_post_1();
		$this->data['comments']=$this->blog_model->get_comments();	

		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->load->library('session');
	}

	function index() {
		if ($this->session->userdata('user_type')=='Cashier') redirect(base_url()."accounting/index");
		if ($this->session->userdata('user_type')=='Priest') redirect(base_url()."priest/index");
		if ($this->session->userdata('user_type') == 'Member') redirect(base_url()."redirect");
		if ($this->session->userdata('user_id')=='') redirect(base_url()."redirect/login");
		$this->load->view('index', $this->data);
	}

	function add(){
		if ($this->session->userdata('user_type')=='Cashier') redirect(base_url()."accounting/index");
		if ($this->session->userdata('user_type')=='Priest') redirect(base_url()."priest/index");
		if ($this->session->userdata('user_type') == 'Member') redirect(base_url()."redirect");
		if ($this->session->userdata('user_id')=='') redirect(base_url()."redirect/login");
		
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
            redirect('main_c'); 
		}
    }
    
	public function insert_comments() {
		if ($this->session->userdata('user_type')=='Cashier') redirect(base_url()."accounting/index");
		if ($this->session->userdata('user_type')=='Priest') redirect(base_url()."priest/index");
		if ($this->session->userdata('user_type') == 'Member') redirect(base_url()."redirect");
		if ($this->session->userdata('user_id')=='') redirect(base_url()."redirect/login");

		$insertinfo=$this->blog_model->insertcomments_article();
		$data['comments']=$this->blog_model->get_comments();
		$this->load->view('home/displaycomments', $data);
	}	

	function edit_p(){
		if ($this->session->userdata('user_type')=='Cashier') redirect(base_url()."accounting/index");
		if ($this->session->userdata('user_type')=='Priest') redirect(base_url()."priest/index");
		if ($this->session->userdata('user_type') == 'Member') redirect(base_url()."redirect");
		if ($this->session->userdata('user_id')=='') redirect(base_url()."redirect/login");

    	if ($this->session->userdata('user_id')=='') redirect(base_url()."redirect/login");
		
    	if ($this->input->post('titleName_1') == '' || $this->input->post('articleBody_1') == ''){
			// echo "alert('Please fill necessary information')";
		} else {

			$data = array(
		        'table' => 'post_tb',
		        'status_title' => $this->input->post('titleName_1'),
	            'status_body' => $this->input->post('articleBody_1'),
	            'post_id' => $this->input->post('post_id_1')
	      	);
		    $this->load->model('blog_model'); // First load the model
		    if($this->blog_model->update_p($data))  {
		        redirect('main_c'); 
		    } else  {
		        // update not successfu	l...
		    }
	    }
    }
    public function delete_p($post_id) {
    	if ($this->session->userdata('user_type')=='Cashier') redirect(base_url()."accounting/index");
		if ($this->session->userdata('user_type')=='Priest') redirect(base_url()."priest/index");
		if ($this->session->userdata('user_type') == 'Member') redirect(base_url()."redirect");
		if ($this->session->userdata('user_id')=='') redirect(base_url()."redirect/login");

		$data = array(
	        'table' => 'post_tb',
	        'post_id' => $post_id
      	);
	    $this->load->model('blog_model');
	    if($this->blog_model->delete_p($data)) {
	    	redirect ('main_c');
		} else {

		}
    }
    public function delete_c() {
		if ($this->session->userdata('user_type')=='Cashier') redirect(base_url()."accounting/index");
		if ($this->session->userdata('user_type')=='Priest') redirect(base_url()."priest/index");
		if ($this->session->userdata('user_type') == 'Member') redirect(base_url()."redirect");
		if ($this->session->userdata('user_id')=='') redirect(base_url()."redirect/login");

    	$id = $this->input->post('commentID');
    	// $id = 5;
		$data = array(
	        'table' => 'post_comments_tb',
	        'comment_id' => $id
      	);
	    $this->load->model('blog_model');
	    if($this->blog_model->update_c($data)) {
	    	// redirect ('main_c');
		} else {

		}
    }
    public function update_n() {
    	if ($this->session->userdata('user_type')=='Cashier') redirect(base_url()."accounting/index");
		if ($this->session->userdata('user_type')=='Priest') redirect(base_url()."priest/index");
		if ($this->session->userdata('user_type') == 'Member') redirect(base_url()."redirect");
		if ($this->session->userdata('user_id')=='') redirect(base_url()."redirect/login");

    	$status = '1';
		$data = array(
	        'table' => 'post_comments_tb',
	        'comment_id' => $status
      	);
	    $this->load->model('blog_model');
	    if($this->blog_model->update_n($data)) {
	    	// redirect ('main_c');
	    	$result = $this->blog_model->get_notification_total();
	        $this->output->set_content_type('application/json');
	        $this->output->set_output(json_encode($result));
		} else {

		}
    }
  	public function displaycomments() {
    	$data['comments']=$this->blog_model->get_comments();
    	$this->load->view('home/displaycomments', $data);
  	}
  	public function displaynotification() {
    	$data['comments']=$this->blog_model->get_notify();
    	$this->load->view('home/displaynotification_0', $data);
  	}
  	public function displayNUpdatenotification() {
		$updatecomment=$this->blog_model->displayNUpdatenotification();
    	$data['comments']=$this->blog_model->get_notify();
    	$this->load->view('home/displaynotification_0', $data);
  	}
  	public function comment_total() {
    	// $id = $this->input->get('no_Comment');
    	$id = $this->input->post('id');
        $result = $this->blog_model->get_comment_total($id);

        $this->output->set_content_type('application/json');
        $this->output->set_output(json_encode($result));

        return $result;
  	}
  	public function notification_total() {
    	$id = $this->input->post('id');
        $result = $this->blog_model->get_notification_total();

        $this->output->set_content_type('application/json');
        $this->output->set_output(json_encode($result));

        return $result;
  	}

  	public function users() {
		if ($this->session->userdata('user_type')=='Cashier') redirect(base_url()."accounting/index");
		if ($this->session->userdata('user_type')=='Priest') redirect(base_url()."priest/index");
		if ($this->session->userdata('user_type') == 'Member') redirect(base_url()."redirect");
		if ($this->session->userdata('user_id')=='') redirect(base_url()."redirect/login");

  		$this->data['title'] = "Users";
        $this->data['page'] = "settings/users";
		$this->data['menu'] = "users";
		
		$this->data['comments']=$this->blog_model->get_notify();
		$this->data['employees'] = $this->users_model->list_users();
		$this->data['priests'] = $this->users_model->list_priests();
		$this->data['members'] = $this->users_model->list_members();

		$this->load->view('index', $this->data);
  	}
	public function priest() {
		if ($this->session->userdata('user_type')=='Cashier') redirect(base_url()."accounting/index");
		if ($this->session->userdata('user_type')=='Priest') redirect(base_url()."priest/index");
		if ($this->session->userdata('user_type') == 'Member') redirect(base_url()."redirect");
		if ($this->session->userdata('user_id')=='') redirect(base_url()."redirect/login");

  		$this->data['title'] = "Priest";
        $this->data['page'] = "priest/index";
		$this->data['menu'] = "priest";
		
		$this->data['comments']=$this->blog_model->get_notify();
		$this->data['employees'] = $this->users_model->list_users();
		$this->data['priests'] = $this->users_model->list_priests();
		$this->data['members'] = $this->users_model->list_members();
		

		$this->load->view('index', $this->data);
  	}
  	public function my_profile() {
  		if ($this->session->userdata('user_id')=='')redirect(base_url()."redirect/login");
		if ($this->session->userdata('user_type') == 'Member') redirect(base_url()."redirect");

  		$this->data['title'] = "User Profile"; 
		$this->data['page'] = "home/user_profile";
		$this->data['menu'] = "user_profile";

		$this->load->view('index', $this->data);	
  	}
  	public function transaction() {
		if ($this->session->userdata('user_type')=='Priest') redirect(base_url()."priest/index");
		if ($this->session->userdata('user_type') == 'Member') redirect(base_url()."redirect");
		if ($this->session->userdata('user_id')=='') redirect(base_url()."redirect/login");
		
		$this->load->model('transaction_model');
		$this->load->model('blog_model');
 	 		
		$this->data['title'] = "Transaction";
        $this->data['page'] = "settings/transaction";
		$this->data['menu'] = "transaction";
        
		$this->data['transactions'] = $this->transaction_model->list_transaction();
		$this->data['posts'] = $this->blog_model->list_post_0();

		$this->load->view('index', $this->data);	
  	}
	public function baptismal() {
  		if ($this->session->userdata('user_id')=='')redirect(base_url()."redirect/login");
		$this->load->model('events_model');
		$this->data['title'] = "Baptismal";
        $this->data['page'] = "events_1/baptismal";
		$this->data['menu'] = "baptismal";

		$this->data['baptismals'] = $this->events_model->list_baptismal();
	   
		$this->load->view('index', $this->data);
  	}
  	public function confirmation() {
  		if ($this->session->userdata('user_id')=='')redirect(base_url()."redirect/login");
		$this->load->model('events_model');
		$this->data['title'] = "confirmation";
        $this->data['page'] = "events_1/confirmation";
		$this->data['menu'] = "confirmation";

		$this->data['confirmations'] = $this->events_model->list_baptismal();
	   
		$this->load->view('index', $this->data);
  	}

  	function update_user() {
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
			} elseif (!$this->users_model->insert($user)) {
				$this->session->set_flashdata('msg','Articles not added Please try again!!');
				$this->session->set_flashdata('msg_class','alert-danger');
			}
			return redirect ('main_c/user_profile');
		}
		
		
	}	
}

/* End of file home.php */
/* Location: ./application/controllers/home.php */
 