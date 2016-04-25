<?php
class Product_model extends CI_Model {

function __construct()

{
parent::__construct();
$this->load->database();

}

public function getproduct()

{

$query = $this->db->get('testProduct');

return $query->result();

}

public function insert_product($data)
{

return $this->db->insert('testProduct', $data);
}

public function delete_record(){
    $this->db->where('id', $this->uri->segment(3));
    $this->db->delete('testProduct');
}

public function edit_record(){
    $this->db->where('id',$this->uri->segment(3));
    $query = $this->db->get('testProduct');
    return $query->result();
    
}

public function update_record($data){
    $this->db->where('id', $data['id']);
    $this->db->update('testProduct', $data);
}

}

?> 
