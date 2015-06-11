<?php

class Dblink extends CI_Model {

public function addUser($UserName,$ContactNo,$pwd,$isuser){

        $data = array(
			'username' =>$UserName,
			'pwd' => $pwd,
            'contactno' =>$ContactNo,
            'isuser' => $isuser
		);

$this->db->insert('userdata',$data);
}

public function addBaner($UserNo,$startdate,$enddate,$typeid,$contact){
        
        $data = array(
			'userno' =>$UserNo,
			'startdate' => $startdate,
            'enddate' =>$enddate,
            'typeid' => $typeid,
            'contactno' => $contact
		);
       $this->db->insert('banner',$data); 
        
    }

public function addTask($devid,$appkey){ //appdata
        
        $data = array(
			'devid' => $devid,
            'appkey' =>$appkey
		);
       $this->db->insert('appdata',$data); 
        
    }

public function addfetchdata($banid,$taskid){
        
        $data = array(
			'banid' =>$banid,
			'fetchescount' => 1,
            'taskid' =>$taskid
		);
       $this->db->insert('fetchdata',$data); 
        
    }

public function addtypetasklink($typeid,$tasid){
        
        $data = array(
			'typeid' =>$typeid,
			'tasid' => $tasid
            
		);
       $this->db->insert('typetasklink',$data); 
        
    }

public function inceasefetch($banid,$taskid,$count){
        
        
        $data = array(
			'fetchescount' => $count, 
		);

    $this->db->where('banid' ,$banid);
    $this->db->where(  'taskid',$taskid);
       $this->db->update('fetchdata',$data); 
        
    }

public function findUser($UserName,$password){

        $data = array(
			'username' =>$UserName,
            'pwd' => $password
		);
    $query = $this->db->get_where('userdata',$data, null,null);
    //var_dump($query->num_rows());
    if($query->num_rows() == 1){
        return true;
    }
    else{
        return false;
    }
    }

public function findBanner($islimit,$time,$type)
{ //islimit define the time range
    $jst_nw = new DateTime();//date("Y-m-d 0:0:0");
    $jst_nw_str = $jst_nw->format('Y-m-d');

    if ($islimit) {
        $nextdate = date_add($jst_nw, date_interval_create_from_date_string("$time days"));
    }
    else{
    $nextdate = date_add($jst_nw, date_interval_create_from_date_string("365 days"));
        }

    $nextdate=$nextdate->format('Y-m-d');
    //echo $nextdate;
    if ($type==null) {
        $query = $this->db->query("Select * from banner  where enddate >= $nextdate and enddate >= $jst_nw_str");
    }
    else{
        $query = $this->db->query("Select * from banner  where enddate >= $nextdate and enddate >= $jst_nw_str and typeid='$type'");
    }
    $res=$query->num_rows();
   // echo $res;
    $x=rand(0,$res-1);
    $res=$query->result();

    return $res[$x];

    }

public function getfetchtime($bannid){
    $query=$this->db->query("Select * from fetchdata where banid = '$bannid'");
    $res=$query->result();
    if ($res==null){return null;}
    else {
        return $res[0]->fetchescount;
    }
    }

    public function gettaskid($appkey){
        $query=$this->db->query("Select * from appdata where appkey = '$appkey'");
        $res=$query->result();
        return $res[0]->taskid;
    }

    public function makeappkey($userid,$appname){
        $dt = new DateTime();
        $dt_str=$dt->format('Y-m-d H:i:s');
        $enc_val=$dt_str.$appname;
        $appkeygen=md5($enc_val);
        $this->addTask($userid,$appkeygen);
        $query = $this->db->query("Select * from appdata  where appkey= '$appkeygen'");
        $query=$query->result();
        $taskid=$query[0]->taskid;

        echo $appkeygen;
}

    public function makebanner($userid,$startdate,$enddate,$typeid,$contactno,$appkey){

        $this->addBaner($userid,$startdate,$enddate,$typeid,$contactno);
        $query = $this->db->query("Select * from banner  where enddtae= '$enddate' and userno = '$userid'");
        $query=$query->result();
        $banid=$query[0]->banid;
        $this->addfetchdata($banid,$this->gettaskid($appkey));

    }

    public function fetcher($banid,$appkey ){
        $tsid=$this->gettaskid($appkey);
        //echo $tsid , "4575s45f4b5///////";
        $banid=intval($banid);
        $query = $this->db->query("Select * from fetchdata  INNER JOIN banner ON fetchdata.banid=banner.banid INNER JOIN appdata ON appdata.taskid=fetchdata.taskid where appkey='$appkey'");
        if($query->num_rows()==0){

            $this->addfetchdata($banid,$tsid);
        }
        else{
         $x=  $this-> getfetchtime($banid);
            $x=$x+1;
            $this->inceasefetch($banid,$tsid,$x);
        }
    }

}

?>