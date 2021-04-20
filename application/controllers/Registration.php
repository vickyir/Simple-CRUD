<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registration extends CI_Controller {

	
	public function index()
	{
		$this->load->view('Front_End/index_registration');
	}

}
