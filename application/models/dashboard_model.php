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

	public function get_count_desa(){
		$query_count = $this->db->count_all_results('Ref_Desa');
		return $query_count;
	}

	public function get_sum_anggaran(){
		$this->db->select_sum('Anggaran');
		$query = $this->db->get('Ta_Anggaran');
		if ($query->num_rows()>0)
		{
			return $query->row()->Anggaran;
		}
		else
		{
			return 0;
		}			
	}

	public function get_sum_pak(){
		$this->db->select_sum('AnggaranStlhPAK');
		$query = $this->db->get('Ta_Anggaran');
		if ($query->num_rows()>0)
		{
			return $query->row()->AnggaranStlhPAK;
		}
		else
		{
			return 0;
		}
	}
	
}