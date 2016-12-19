 <?php
/**
 * 
 */
class reg_model extends CI_Model
{       
        public function save($userN,$passD,$name,$date,$mnum)
	   {
            $this->db->set('user_id', $userN);
            $this->db->set('password', $passD);
            $this->db->set('name', $name);
            $this->db->set('date', $date);
			$this->db->set('mno', $mnum);
            $this->db->insert('admin_user');
			redirect(base_url(),'refresh');
	   }

       
		
}

