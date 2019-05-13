<?php

/**
 * 
 */
class Dashboard_model extends CI_Model
{
	
	/*
		Total Kecamatan
	*/
	public function get_count_kegiatan(){
		$query_count = $this->db->count_all_results('Ref_Kegiatan');
		return $query_count;
	}

	/*
		Total Desa
	*/

	public function get_count_desa(){
		$query_count = $this->db->count_all_results('Ref_Desa');
		return $query_count;
	}


}