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

	public function detailRealisasi($idKeg,$idDesa) {
		$data['get_realisasi_detail_by_kode_desa_info'] = $this->relasiKegiatan_model->get_realisasi_detail_by_kode_desa_info($idKeg,$idDesa);
		$data['get_sum_volume_realisasi_kegiatan'] = $this->relasiKegiatan_model->get_sum_volume_realisasi_kegiatan($idKeg,$idDesa);
		$data['realisasi_anggaran_kegiatan'] = $this->relasiKegiatan_model->get_sum_anggaran_realisasi_kegiatan($idKeg,$idDesa);
		$data['detail_realisasi_desa'] = $this->relasiKegiatan_model->get_realisasi_detail_by_kode_desa($idKeg,$idDesa);
		$data['main_admin'] = 'content/kegiatan/detailRealisasi';
		$this->load->view('main/dashboard',$data);

	}


}