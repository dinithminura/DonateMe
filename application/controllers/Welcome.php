<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {


	public function index()
	{

		$this->load->view('login_view');
        $this->load->model('Dblink');
        $this->Dblink->addUser('svvsvd','sdvdbsd','sfg',true);
        //$this->Dblink->addBaner('UserNo','startdate','enddate','typeid','contact');
        $this->Dblink->addTask('taskid','devid','appkey');
        $this->Dblink->addfetchdata('banid','appkey');
        //$this->Dblink->addtypetasklink('typeid','tasid');
       // $this->Dblink->findUser('svvsvd','sfg');
        //$this->Dblink->getfetchtime(0);
        $this->Dblink->findBanner(true,1);
        $this->Dblink->makeappkey("","test");
      
	}
}
