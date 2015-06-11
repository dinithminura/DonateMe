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



}
?>