<?php

class desa_model extends CI_Model {
	
	public function getDesa(){
		
		$query = $this->db->query('Ref_Desa');
		return $query->result();
	
	}

}
?>