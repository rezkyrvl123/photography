<?php

class M_Login extends CI_Model
{
    function auth_admin($username,$password)
	{
		$result = $this->db->query("select * from admin where username='$username' and password='$password' LIMIT 1");
		return $result;
	}
}
