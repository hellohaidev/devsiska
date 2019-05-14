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
		Total Kecamatan
	*/

	public function get_count_kecamatan(){
		$query_count = $this->db->count_all_results('Ref_Kecamatan');
		return $query_count;
	}


}