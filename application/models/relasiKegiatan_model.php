<?php 

/**
 * 
 */
class relasiKegiatan_model extends CI_Model
{


	public function get_relasi_kegiatan_by_id($id){

		$this->db->select('*');
        $this->db->from('Ref_Kegiatan');
        $this->db->join('Ta_Kegiatan', 'Ta_Kegiatan.ID_Keg = Ref_Kegiatan.ID_Keg','inner');
        $this->db->where('Ref_Kegiatan.ID_Keg',$id);
        $dataInfo = $this->db->get();
       
		return $dataInfo->result();


	}
}