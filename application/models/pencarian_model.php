<?php

/**
 * 
 */
class pencarian_model extends CI_Model
{
	
	public function get_result_by_keyword($keyword){

		$this->db->select('*');
        $this->db->from('Ref_Desa');
        $this->db->like('Kd_Kec',$keyword);
        $dataInfo = $this->db->get();

		
       
		return $dataInfo->result();

	}

	public function get_result_pagu($keyDesa){

		$this->db->select('*');
        $this->db->from('Ref_Kegiatan');
        $this->db->join('Ta_Kegiatan', 'Ta_Kegiatan.ID_Keg = Ref_Kegiatan.ID_Keg','inner');
        $this->db->join('Ref_Desa', 'dbo.Ref_Desa.Kd_Desa = Ta_Kegiatan.Kd_Desa','inner');
        $this->db->join('Ref_Kecamatan', 'dbo.Ref_Desa.Kd_Kec = Ref_Kecamatan.Kd_Kec','inner');
        $this->db->like('dbo.Ref_Desa.Kd_Desa',$keyDesa);
        $dataInfo = $this->db->get();

		
       
		return $dataInfo->result();
	}
}