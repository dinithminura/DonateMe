<?php
/**
 * Created by PhpStorm.
 * User: NRV
 * Date: 7/12/2015
 * Time: 3:43 PM
 */

class addbanner extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Dblink','',TRUE);
        $this->load->helper(array('form', 'url'));
    }

    function index()
    {
        //This method will have the credentials validation
        $this->load->library('form_validation');
        $this->form_validation->set_rules('banname', 'Banname', 'trim|required|xss_clean');
        $this->form_validation->set_rules('sdate', 'Sdate', 'required');
        $this->form_validation->set_rules('endate', 'Endate', 'required');
        $this->form_validation->set_rules('userfile', 'userfile', 'required');


        if($this->form_validation->run() == FALSE)
        {
            //Field validation failed.  User redirected to login page
            $error=Array("error"=>"");
            $this->load->view('add_banner',$error);
            $this->load->view('footer');
        }
        else
        {
            //Go to private area
            $this->getdata();
            //redirect('new_app', 'refresh');
        }
    }

    function getdata(){
        $banname = $this->input->post('banname');
        $sdate = $this->input->post('sdate');
        $edate = $this->input->post('endate');
        $contactname = $this->input->post('cnno');
        $apptype= $this->input->post('apptype');
        $file= $this->input->post('banfile');

        $config['upload_path'] = '\images';
        $config['allowed_types'] = 'gif|jpg|png';
        /*$config['max_size']	= '100';
        $config['max_width']  = '1024';
        $config['max_height']  = '768';
*/
        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload()){

        }


        var_dump($banname);
        var_dump($sdate);
        var_dump($edate);
        var_dump($contactname);
        var_dump($apptype);
        var_dump($file);
    }

} 