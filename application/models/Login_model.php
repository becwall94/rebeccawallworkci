<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
   class Login_model extends CI_Model {

    public function __construct()
    {
            $this->load->database();
    }
    
 function login($email,$password)
 {
  $this->db->where("Email",$email);
  $this->db->where("Password", $password);

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
      'Password' =>$rows->Password,
      'logged_in'  => TRUE,
    );
   }
   $this->session->set_userdata($newdata);
   return true;
  }
  return false;
 }
 
}
?>