<?php
/**
 * Created by PhpStorm.
 * User: Dinith Minura
 * Date: 6/13/2015
 * Time: 6:01 PM
 */

class App extends CI_Model
{
    function get_app($userid)
    {

        $query = $this->db->query("SELECT * FROM appdata WHERE devid='$userid'");

        return $query->result();
    }
}