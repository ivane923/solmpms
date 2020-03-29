<?php 
  class Email extends CI_Controller { 
    function __construct() {
    parent::__construct();
    // $this->load->helper('form');
    // $this->config->item('protocol');
    $this->load->model('users_model');

    $this->load->helper(array('form', 'url'));
    $this->load->library('form_validation');
    $this->load->library('session');
    }
    public function index() {
      $this->data['title'] = "Email";
      $this->data['page'] = "website/email";
      $this->data['menu'] = "email";
      $this->load->view('index', $this->data);

      $config = Array(
      'protocol' => 'smtp',
      'smtp_host' => 'ssl://smtp.googlemail.com',
      'smtp_port' => '465',
      'smtp_user' => 'solmp.noreply@gmail.com',
      'smtp_pass' => '101csdserver',
      'mailtype'  => 'html', 
      'charset' => 'utf-8',
      'wordwrap(str)ordwrap' => TRUE
      );
      $ss = 'page';
      $this->load->library('email', $config);
      $this->email->set_newline("\r\n");
      $this->email->from($this->config->item('email_account'), $this->config->item('email_name'));
      $this->email->to('csdserver101@gmail.com'); 
      $this->email->subject("SOLMP Account Verification");
      $ID= $this->session->userdata('ID');
      $message = '<p> Dear <b>IVANE</b><br> Thank you for registering on Shrine of Our lady of Mercy website. To activate your
                account,<br> Please 
                click the link below to verify your account</p> 
                <a href="http://localhost/solmpms/email/"">This link will redirect you to verify your account</a>
                <p>You may now reserve to any event and join with all announcement posted by our shrine staff and serve by  
                our church.</p>';         
      $this->email->message($message);
      $this->email->send();
      // echo $this->email->print_debugger();
      $this->load->view('website/email');
    }
    function verify($verificationText=NULL){    
      $noRecords = $this->HomeModel->verifyEmailAddress($verificationText);   
      if ($noRecords > 0){ 
          $error = array( 'success' => "Email Verified Successfully!");   
      }else{ 
          $error = array( 'error' => "Sorry Unable to Verify Your Email!");   
      } 
      $data['errormsg'] = $error; 
      $this->load->view('index.php', $data);  
      
    }
  }
?>