 <?php
/**
 * 
 */
class Model_home extends CI_Model
{
        
	 public function get_images()
	{
		$sql = $this->db->query("select * from tbl_img");
		return $sql->result();
	}
	 public function get_image($img_id)
	{
		$sql = $this->db->query("select * from tbl_img where img_id='".$img_id."' ");
		return $sql->row();
	}
	
	function save_image()
	{
		$img_name = $_FILES['img_file']['name'];
		$img_size = $_FILES['img_file']['size'];
		$img_type = $_FILES['img_file']['type'];
		$img_link = $this->input->post('img_link');
		$ext 	  = pathinfo($img_name, PATHINFO_EXTENSION);
		$img_name = time().'.'.$ext;
		$this->db->query("insert into tbl_img(img_name,img_link) values('".$img_name."','".$img_link."')");
		move_uploaded_file($_FILES["img_file"]["tmp_name"],"assets/uploads/" .$img_name);
		if($this->db->insert_id())
		return 1;
		else return 0;
		
	}
	
	function edit_image()
	{
		$img_name = $_FILES['img_file']['name'];
		$img_size = $_FILES['img_file']['size'];
		$img_type = $_FILES['img_file']['type'];
		$img_link = $this->input->post('img_link');
		$img_id   = $this->input->post('img_id');
		$ext 	  = pathinfo($img_name, PATHINFO_EXTENSION);
		$img_name = time().'.'.$ext;
		$this->db->query("update tbl_img set img_name='".$img_name."',img_link='".$img_link."' where img_id='".$img_id."'");
		move_uploaded_file($_FILES["img_file"]["tmp_name"],"assets/uploads/" .$img_name);
		return 1;
		
	}
	function delete_image($img_id)
	{
		$sql = $this->db->query("select * from tbl_img where img_id='".$img_id."'");
		$res = $sql->row();
		$this->db->query("delete from tbl_img where img_id='".$img_id."'");
		unlink('assets/uploads/'.$res->img_name);
		return 1;
		
	}
	function get_image_name_update($img_id)
	{
		$sql = $this->db->query("select img_name from tbl_img where img_id='".$img_id."'");
		return $sql->row();
	}
}

