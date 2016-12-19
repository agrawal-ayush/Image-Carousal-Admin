<?php
/**
 * 
 */
class Model_login extends CI_Model
{
	function login_check()
	{
		$id=$this->input->post('did');
		$pass=$this->input->post('password');
		$query=$this->db->query('select * from admin_user where user_id="'.$id.'" and password="'.$pass.'"');
		if($query->num_rows()>0)
		{
		return($query->result());
		}
		else
		{
		return 0;
		}
	}
	
	
	
}


		