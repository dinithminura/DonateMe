<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {


	public function index()
	{

		$this->load->view('login_view');
        $this->load->model('Dblink');
        //$this->Dblink->addUser('svvsvd','sdvdbsd','sfg',true);
        //$this->Dblink->addBaner('UserNo','2016-06-5','2016-06-15','typeid','contact');
        //$this->Dblink->addTask('devid','appkey');
        //$this->Dblink->addfetchdata('banid','appkey');
        //$this->Dblink->inceasefetch(0,92,5);
        //$this->Dblink->addtypetasklink('typeid','tasid');
       //var_dump($this->Dblink->findUser('svvsvd','sfg'));
        //$this->Dblink->getfetchtime(0);
        //$this->Dblink->findBanner(true,1);
        //$this->Dblink->makeappkey("","test");
        //var_dump($this->Dblink->findBanner(true,3,null));
        //echo $this->Dblink->fetcher(0,'appkey');
      
	}
}
