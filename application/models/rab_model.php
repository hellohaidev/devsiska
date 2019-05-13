<?php 

/**
 * 
 */
class Rab_model extends CI_Model
{
	
	public function getRab(){
    	$query = $this->db->query('
    		SELECT * FROM dbo.Ta_RAB INNER JOIN
                      dbo.Ta_RABRinci ON dbo.Ta_RAB.Tahun = dbo.Ta_RABRinci.Tahun AND dbo.Ta_RAB.Kd_Desa = dbo.Ta_RABRinci.Kd_Desa AND 
                      dbo.Ta_RAB.Kd_Keg = dbo.Ta_RABRinci.Kd_Keg AND dbo.Ta_RAB.Kd_Rincian = dbo.Ta_RABRinci.Kd_Rincian AND 
                      dbo.Ta_RAB.Kd_SubRinci = dbo.Ta_RABRinci.Kd_SubRinci
            	
    		');
    	return $query->result();
    }

}