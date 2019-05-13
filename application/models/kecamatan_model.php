<?php

class Kecamatan_model extends CI_Model {


	public function getKecamatan(){
		$query = $this->db->get('Ref_Kecamatan');
		return $query->result();
	}

    public function getKecamatanJoinWithDesa(){

        // $query = $this->db->get('Ref_Kecamatan');
        $query = $this->db->query('
        	SELECT * FROM Ref_Desa 
        	INNER JOIN Ref_Kecamatan 
        	ON Ref_Desa.Kd_Kec = Ref_Kecamatan.Kd_Kec');
        return $query->result();

    }

    

}

?>