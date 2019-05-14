<?php

/**
 * 
 */
class RelasiKegiatan extends CI_Controller
{
	
	public function index(){

		$data['data_kegiatan'] = $this->kegiatan_model->getKegiatan();
		$data['main_admin'] = 'content/kegiatan/relasiKegiatan';
		$this->load->view('main/dashboard',$data);
	}

	public function detail($id){
		$data['detail_data'] = $this->relasiKegiatan_model->get_relasi_kegiatan_by_id($id);
		$data['main_admin'] = 'content/kegiatan/detail';
		$this->load->view('main/dashboard',$data);

	}
}