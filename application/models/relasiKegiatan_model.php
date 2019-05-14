<?php 

/**
 * 
 */
class relasiKegiatan_model extends CI_Model
{
	public function get_relasi_kegiatan(){

		$query = $this->db->query('
				SELECT  *  FROM dbo.Ref_Kegiatan 
				INNER JOIN dbo.Ta_Kegiatan 
				ON dbo.Ref_Kegiatan.ID_Keg = dbo.Ta_Kegiatan.ID_Keg
			');
		return $query->result();


	}
}