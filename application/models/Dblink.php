class Dblink extends CI_Model {

public function addUser($UserName,$ContactNo,$pwd,$isuser){

        $data = array(
			'username' => $this->$UserName,
			'pwd' => $this->$pwd,
            'contactno' => $this->$ContactNo,
            'isuser' => $this->$isuser
		);

$this->db->insert("userdata",$data);
}



}