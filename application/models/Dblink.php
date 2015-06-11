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

public function addTask($taskid,$devid,$appkey){ //appdata
        
        $data = array(
			'taskid' =>$taskid,
			'devid' => $devid,
            'appkey' =>$appkey
		);
       $this->db->insert('appdata',$data); 
        
    }

public function addfetchdata($banid,$taskid){
        
        $data = array(
			'banid' =>$banid,
			'fetchescount' => 0,
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
    //var_dump($query->result());
    if($query->num_rows == 1){
        return true;
    }
    else{
        return false;
    }
    }

public function findBanner($islimit,$time)
{ //islimit define the time range
    $jst_nw = new DateTime();//date("Y-m-d 0:0:0");
    $jst_nw_str = $jst_nw->format('Y-m-d');
    if ($islimit == null) {
    $nextdate = date_add($jst_nw, date_interval_create_from_date_string("365 days"));
        }
    else{
    $nextdate = date_add($jst_nw, date_interval_create_from_date_string("$time days"));
        }
    $nextdate=$nextdate->format('Y-m-d');
    $query = $this->db->query("Select * from banner  where enddate <= $nextdate and enddate >= $jst_nw_str");
    $res=$query->num_rows();
    return $res;

    }

public function getfetchtime($bannid){
    $query=$this->db->query("Select * from fetchdata where banid = '$bannid'");
    $res=$query->result();
    return $res[0]->fetchescount;
    }

//public function
}

?>