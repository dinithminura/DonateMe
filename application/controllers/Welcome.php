<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {


	public function index()
	{

		$this->load->view('login_view');
        $this->load->model('Dblink');
        $this->Dblink->addUser('svvsvd','sdvdbsd','sfg',true);
	}
}
