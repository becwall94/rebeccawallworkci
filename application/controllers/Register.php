<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Register extends CI_Controller{
 public function __construct()
 {
  parent::__construct();
  $this->load->model('register_model');
 }
  public function index()
 {
  if(($this->session->userdata('username')!=""))
  {
   $this->user();
  }
  else{
   $data['title']= 'Home';
   $this->load->view('header',$data);
    $this->load->view('nav',$data);
   $this->load->view("registration.php", $data);
   $this->load->view('footer', $data);
  }
 }
 public function user()
 {
  $data['title']= 'Welcome';
  $this->load->view('header',$data);
  $this->load->view('nav',$data);
  $this->load->view('user_view.php', $data);
  $this->load->view('footer',$data);
 }
  public function thank()
 {
  $data['title']= 'Thank';
  $this->load->view('header',$data);
  $this->load->view('nav',$data);
  $this->load->view('thank_view.php', $data);
  $this->load->view('footer',$data);
 }
 public function registration()
 {
  $this->load->library('form_validation');
  // field name, error message, validation rules
  $this->form_validation->set_rules('username', 'User Name', 'trim|required|min_length[4]');
  $this->form_validation->set_rules('Email', 'Email', 'trim|required|valid_email');
  $this->form_validation->set_rules('Password', 'Password', 'trim|required|min_length[4]|max_length[32]');

  if($this->form_validation->run() == FALSE)
  {
   $this->index();
  }
  else
  {
   $this->register_model->add_user();
   $this->thank();
  }
 }

}
?>