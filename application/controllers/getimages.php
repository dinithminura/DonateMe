<?php
/**
 * Created by PhpStorm.
 * User: NRV
 * Date: 7/12/2015
 * Time: 8:35 PM
 */

class getimages extends CI_Controller{

    function images($file){
        $this->load->view("images/".$file.".jpg");
    }

} 