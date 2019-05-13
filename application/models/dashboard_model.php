<?php

/**
 * 
 */
class Dashboard_model extends CI_Model
{
	
	public function get_count_kegiatan(){
		$query_count = $this->db->count_all_results('Ref_Kegiatan');
		return $query_count;
	}
}