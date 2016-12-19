 <?php
/**
 * 
 */
class navigate_model extends CI_Model
{       
public function get_images()
	{
		$sql = $this->db->query("select * from tbl_img limit 6");
		return $sql->result();
	}
	

      
		
}

