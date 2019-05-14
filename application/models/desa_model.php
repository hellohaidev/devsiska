<?php

class desa_model extends CI_Model {
	
	public function getDesa(){
		
		$query = $this->db->query('
			SELECT * FROM Ref_Desa
			');
		return $query->result();
	
	}

}
?>