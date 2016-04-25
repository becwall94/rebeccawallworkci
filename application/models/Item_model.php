<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Item_model extends CI_Model 
{
  function read(){
      $query = $this->db->get('testProduct')
  }
  
  
   
}
?>