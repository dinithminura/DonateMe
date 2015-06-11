<?php
class api extends CI_Controller {
    public function getdata($appkey,$time,$type)
    {
        $this->load->view('login_view');
        $this->load->model('Dblink');
        if ($time==null) {
            $ban=$this->Dblink->findBanner(false,null,$type);
            }
        else{
            $ban=$this->Dblink->findBanner(true,$time,$type);
        }

            $banid=$ban->banid;
var_dump($ban);
        $bantimetob=$this->Dblink->getfetchtime($banid)+1;
        echo "****",$banid;
        $this->Dblink->fetcher($banid,$appkey);
        /*while($bantimetob>$this->Dblink->getfetchtime($banid)){
            $tsid=$this->Dblink->gettaskid($appkey);
             $this->Dblink->inceasefetch($banid,$tsid,$bantimetob);
        }*/

    }
}
/**
 * Created by PhpStorm.
 * User: NRV
 * Date: 6/12/2015
 * Time: 1:04 AM
 */ 