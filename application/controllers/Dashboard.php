<?php

class Dashboard extends CI_Controller {

    public function index(){
        
    	$data['total_kegiatan'] = $this->dashboard_model->get_count_kegiatan();
    	$data['total_kecamatan'] = $this->dashboard_model->get_count_kecamatan();
    	$data['total_desa'] = $this->dashboard_model->get_count_desa();
    	$data['total_anggaran'] = $this->dashboard_model->get_sum_anggaran();
        $data['main_admin'] = "content/main"; 
        $this->load->view('main/dashboard',$data);
    }

   
}