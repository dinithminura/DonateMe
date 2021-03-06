<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class VerifyLogin extends CI_Controller {
    function __construct()
    {
        parent::__construct();
        $this->load->model('Dblink','',TRUE);
    }
    function index()
    {
        //This method will have the credentials validation
        $this->load->library('form_validation');
        $this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|callback_check_database');
        if($this->form_validation->run() == FALSE)
        {
            //Field validation failed.  User redirected to login page
            $this->load->view('login_view');
        }
        else
        {
            //Go to private area
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            if ($this->Dblink->findUserType($username, $password)==0){
                redirect('/newapp', 'refresh');
            }
            else{
                redirect('/addbanner', 'refresh');
            }

        }
    }
    function check_database($password)
    {
        //Field validation succeeded.  Validate against database
        $username = $this->input->post('username');

        //query the database
        $result = $this->Dblink->findUser($username, $password);
        if($result)
        {/*
            foreach ($result as $row)
            {
                $this->session->set_userdata('userid', $row->userno);
                $this->session->set_userdata('username', $row->username);
                $this->session->set_userdata('level', $row->isuser);
            }
            return TRUE;*/
            return true;
        }
        else
        {
            $this->form_validation->set_message('check_database', 'Invalid username or password');
            return false;
        }
    }

    function checkui(){
        $this->load->view('new_app');
    }
}
?>