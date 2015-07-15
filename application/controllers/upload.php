<?php
class Upload extends CI_Controller {

function __construct()
{
parent::__construct();
$this->load->helper(array('form', 'url'));
    $this->load->model('Dblink','',TRUE);
}

function index()
{
$this->load->view('addban2', array('error' => ' ' ));


}

function do_upload()
{
    $banname = $this->input->post('banname');
    $sdate = $this->input->post('sdate');
    $edate = $this->input->post('endate');
    $contactno= $this->input->post('cnno');
    $apptype= $this->input->post('apptype');
    $file= $this->input->post('banfile');



    $UserNo="1";
    $this->Dblink->addBaner($UserNo,$sdate,$edate,$apptype,$contactno);
    $bid=$this->Dblink->findbannerid($UserNo,$sdate,$edate,$apptype,$contactno);
    var_dump($bid);

    $config['upload_path'] = '../images/';
    $config['allowed_types'] = 'jpg';
    $config['max_size']	= '100';
    $config['file_name'] = $bid[0]->banid;


    $this->load->library('upload', $config);


if ( ! $this->upload->do_upload())
{
    $error = array('error' => $this->upload->display_errors());

    $this->load->view('add_banner',$error);

}

else
{

    $data = array('upload_data' => $this->upload->data());

    $this->load->view('upload_success', $data);
}
}
}
?>
