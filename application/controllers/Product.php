<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Product extends CI_Controller {
function __construct()

{

parent::__construct();

$this->load->helper('url');

$this->load->model('product_model');

}

public function index()

{

$data['product_list'] = $this->product_model->getproduct();
$this->load->view('header');
$this->load->view('nav');
$this->load->view('product', $data);
$this->load->view('footer');
}

public function add_form()

{
$this->load->view('header');
$this->load->view('nav');    
$this->load->view('insert');
$this->load->view('footer');
}


public function insert_product()

{
    
$pdata['Name'] = $this->input->post('Name');
$pdata['Type'] = $this->input->post('Type');
$pdata['Price'] = $this->input->post('Price');

$this->load->library('form_validation');
  // field name, error message, validation rules
$this->form_validation->set_rules('Name', 'Name', 'trim|required');
$this->form_validation->set_rules('Type', 'Type', 'trim|required');
$this->form_validation->set_rules('Price', 'Price', 'trim|required'); 

  if($this->form_validation->run() == FALSE)
  {
   $this->add_form();
   } else {
            $this->product_model->insert_product($pdata);
            $this->index(); 
        } 
}
public function delete(){
    $this->product_model->delete_record();
    $this->index();
}

public function edit(){
   $value = array();
if($data = $this->product_model->edit_record()){
   $value['product_list'] = $data;
  }
  $this->load->view('header');
  $this->load->view('nav');  
  $this->load->view('edit', $value);
  $this->load->view('footer');
}

public function update(){
    $data =array('id'=>$this->input->post('id'),
         'Name'=>$this->input->post('Name'),
         'Type'=>$this->input->post('Type'),
         'Price'=>$this->input->post('Price'));
    if(!empty($data['Name'] && !empty($data['Type']) && !empty($data['Price']))){
        $this->product_model->update_record($data);
    }
    else {
         echo '<script>alert("Not all fields completed, unable to update");</script>';
        }
    $this->index();
    }
            
}
?>
