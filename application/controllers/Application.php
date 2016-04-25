<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Application extends CI_Controller {

	public function index() //loads view called welcome message when app starts.
	{	

		$this->load->view('header');		
		$this->load->view('nav');
	    $this->load->view('content');
		$this->load->view('footer');
	
	}
	
}
