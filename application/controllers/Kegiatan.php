<?php

class Kegiatan extends CI_Controller {

    public function index(){
        
        $data['data_kegiatan'] = $this->kegiatan_model->getKegiatan();
        $data['main_admin'] = "content/kegiatan/kegiatan"; 
        $this->load->view('main/dashboard',$data);
    }

   
}