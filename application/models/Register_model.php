<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Register_model extends CI_Model {
 public function __construct()
 {
  parent::__construct();
 }
 public function add_user()
 {
  $data=array(
    'username'=>$this->input->post('username'),
    'Email'=>$this->input->post('Email'),
    'Password'=>$this->input->post('Password')
  );
  $this->db->insert('Member',$data);
 }
}
?>