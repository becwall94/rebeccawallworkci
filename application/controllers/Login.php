<?php if (! defined('BASEPATH')) exit('No direct script access allowed');
class Login extends CI_Controller{
 public function __construct()
 {
  parent::__construct();
  $this->load->model('login_model');
 }
 public function index()
 {
  if(($this->session->userdata('username')!=""))
  {
   $this->welcome();
  }
  else{
   $this->load->view('header');
   $this->load->view('nav');
   $this->load->view("login_view.php");
   $this->load->view('footer');
  }
 }
 public function welcome()
 {
  $this->load->view('header');
   $this->load->view('nav');
  $this->load->view('welcome_view.php');
  $this->load->view('footer');
 }
 
 public function login()
 {
  $email=$this->input->post('Email');
  $password=$this->input->post('Password');
   $this->load->library('form_validation');
  // field name, error message, validation rules
  $this->form_validation->set_rules('Password', 'Password', 'trim|required');
  $this->form_validation->set_rules('Email', 'Email', 'trim|required|valid_email');
  
  if($this->form_validation->run() == FALSE)
  {
   $this->index();
   } else {
            $this->login_model->login($email,$password);
            $this->welcome(); 
        } 
}

  public function account()
 {
  $this->load->view('header');
  $this->load->view('nav');
  $this->load->view('account.php');
  $this->load->view('footer');
 }
 
 public function logout()
 {
  $newdata = array(
  'ID'   =>'',
  'username'  =>'',
  'Email'     => '',
  'logged_in' => FALSE,
  );
  $this->session->unset_userdata($newdata );
  $this->session->sess_destroy();
  $this->index();
 }
}
?>