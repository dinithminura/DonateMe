<?php

Class User extends CI_Model
{
    function login($username, $password)
    {
        $this -> db -> select('userno, username, contactno,pwd,isuser');
        $this -> db -> from('userdata');
        $this -> db -> where('username', $username);
        $this -> db -> where('pwd', MD5($password));
        $this -> db -> limit(1);

        $query = $this -> db -> get();

        if($query -> num_rows() == 1)
        {
            return $query->result();
        }
        else
        {
            return false;
        }
    }
}
?>