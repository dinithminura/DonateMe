<?php
/**
 * Created by PhpStorm.
 * User: NRV
 * Date: 7/12/2015
 * Time: 12:29 PM
 */

class newapp extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Dblink','',TRUE);
    }
    function index()
    {
        //This method will have the credentials validation
        $this->load->library('form_validation');
       $this->form_validation->set_rules('appname', 'Appname', 'trim|required|xss_clean');
        $this->form_validation->set_rules('apptype[]', 'Apptype', 'required');

        if($this->form_validation->run() == FALSE)
        {
            //Field validation failed.  User redirected to login page
            $x["lstappkey"]=null;
            $this->load->view('new_app',$x);
            $this->load->view('footer');
        }
        else
        {
            //Go to private area
            $x["lstappkey"]=$this->create_hash();
            $this->load->view('new_app',$x);
            //redirect('new_app', 'refresh');
        }
    }

    function create_hash()
    {
        //Field validation succeeded.  Validate against database
        $appname = $this->input->post('appname');
        $hashkey = $this->input->post('hashkey');
        $apptype = $this->input->post('apptype');

        //$userid = $this->input->post('apptype');
        $userid =1;
/*
        echo var_dump($appname);
        echo var_dump($hashkey);
        echo var_dump($apptype);
*/
        $appkey= $this->Dblink->makeappkey($userid,$appname,$hashkey);

        return $appkey;

    }



} 