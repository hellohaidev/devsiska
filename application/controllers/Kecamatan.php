<?php

class Kecamatan extends CI_Controller {

    public function index(){
        
        $data['data_kecamatan'] = $this->kecamatan_model->getKecamatan();
        $data['main_admin'] = "content/kecamatan"; 
        $this->load->view('main/dashboard',$data);
    }

   
}