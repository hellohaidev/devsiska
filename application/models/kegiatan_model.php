<?php

class Kegiatan_model extends CI_Model {

    public function getKegiatan(){

        // $query = $this->db->get('Ref_Kecamatan');
        $query = $this->db->query('
        	SELECT * FROM Ref_Kegiatan 
        	');
        return $query->result();

    }

    

}

?>