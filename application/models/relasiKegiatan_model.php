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

	public function get_realisasi_detail_by_kode_desa_info($idKeg,$idDesa){
		$this->db->select('*');
        $this->db->from('Ta_KegiatanOutput');
        $this->db->join('Ta_Kegiatan', 'Ta_Kegiatan.Kd_Keg = Ta_KegiatanOutput.Kd_Keg','inner');
        $this->db->where('Ta_Kegiatan.Kd_Keg',$idKeg);
        $this->db->where('Ta_KegiatanOutput.Kd_Keg',$idDesa);
      	
        $dataInfoRealisasi = $this->db->get();
       
		return $dataInfoRealisasi->row();
	}

	public function get_realisasi_detail_by_kode_desa($idKeg,$idDesa){
		$this->db->select('*');
        $this->db->from('Ta_KegiatanOutput');
        $this->db->join('Ta_Kegiatan', 'Ta_Kegiatan.Kd_Keg = Ta_KegiatanOutput.Kd_Keg','inner');
        $this->db->where('Ta_Kegiatan.Kd_Keg',$idKeg);
        $this->db->where('Ta_KegiatanOutput.Kd_Keg',$idDesa);
      	
        $dataInfoRealisasi = $this->db->get();
       
		return $dataInfoRealisasi->result();
	}

	public function get_sum_anggaran_realisasi_kegiatan($idKeg,$idDesa){
		$this->db->select_sum('Anggaran');
        $this->db->from('Ta_KegiatanOutput');
        $this->db->join('Ta_Kegiatan', 'Ta_Kegiatan.Kd_Keg = Ta_KegiatanOutput.Kd_Keg','inner');
        $this->db->where('Ta_Kegiatan.Kd_Keg',$idKeg);
        $this->db->where('Ta_KegiatanOutput.Kd_Keg',$idDesa);
		$query = $this->db->get();
		
      	
		if ($query->num_rows()>0)
		{
			return $query->row()->Anggaran;
		}
		else
		{
			return 0;
		}			
	}
	public function get_sum_volume_realisasi_kegiatan($idKeg,$idDesa){
		$this->db->select_sum('Volume');
        $this->db->from('Ta_KegiatanOutput');
        $this->db->join('Ta_Kegiatan', 'Ta_Kegiatan.Kd_Keg = Ta_KegiatanOutput.Kd_Keg','inner');
        $this->db->where('Ta_Kegiatan.Kd_Keg',$idKeg);
        $this->db->where('Ta_KegiatanOutput.Kd_Keg',$idDesa);
		$query = $this->db->get();
		
      	
		if ($query->num_rows()>0)
		{
			return $query->row()->Volume;
		}
		else
		{
			return 0;
		}			
	}

	
}