<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        if($this->session->userdata('username'))
        {
            $data = $this->session->userdata;
            //$user = $this->session->userdata('username');
            $id = $this->session->userdata('userid');
            $this->load->view('user_header',$data);
            $this->load->model('app');
            $data['app']=$this->app->get_app($id);
            $this->load->view('side_menu', $data);
            $this->load->view('dashboard',$data);
            $this->load->view('footer');
        }
        else
        {
            //If no session, redirect to login page
            redirect('Welcome', 'refresh');
        }
    }

    function new_application()
    {
        if ($this->session->userdata('username')) {
            $data = $this->session->userdata;
            //$user = $this->session->userdata('username');
            $id = $this->session->userdata('userid');
            $this->load->view('user_header', $data);
            $this->load->model('app');
            $this->load->view('side_menu', $data);
            $this->load->view('new_app');
            $this->load->view('footer');
        } else {
            //If no session, redirect to login page
            redirect('Welcome', 'refresh');
        }
    }

    function logout()
    {
        $this->session->unset_userdata('logged_in');
        session_destroy();
        redirect('Welcome', 'refresh');
    }

}
?>
