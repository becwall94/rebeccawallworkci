<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class User_model extends CI_Model {
 public function __construct()
 {
  parent::__construct();
 }
 function login($email,$password)
 {
  $this->db->where("Email",$email);
  $this->db->where("Password",$password);

  $query=$this->db->get("Member");
  if($query->num_rows()>0)
  {
   foreach($query->result() as $rows)
   {
    //add all data to session
    $newdata = array(
      'ID'  => $rows->ID,
      'username'  => $rows->username,
      'Email'    => $rows->Email,
      'logged_in'  => TRUE,
    );
   }
   $this->session->set_userdata($newdata);
   return true;
  }
  return false;
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