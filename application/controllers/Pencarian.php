<?php 

/**
 * 
 */
class Pencarian extends CI_Controller
{
	
	public function index(){

		$data['kecamatan'] = $this->kecamatan_model->getKecamatan();
		$data['main_admin'] = 'content/pencarian/pencarian';
		$this->load->view('main/dashboard',$data);
	}

	public function search() {
		$keyword = $this->input->post('Kd_Kec');
		$data['search_result'] = $this->pencarian_model->get_result_by_keyword($keyword);
		$data['kecamatan'] = $this->kecamatan_model->getKecamatan();
		$data['main_admin'] = 'content/pencarian/pencarian';
		$this->load->view('main/dashboard',$data);
		
	}

	public function pagu() {

		
		$data['desa']=$this->desa_model->getDesa();
		$data['main_admin'] = 'content/pencarian/kegiatan';
		$this->load->view('main/dashboard',$data);

	}

	public function searchPagu() {

		$keyDesa = $this->input->post('Kd_Desa');
		$data['search_result_pagu'] = $this->pencarian_model->get_result_pagu($keyDesa);
		$data['desa']=$this->desa_model->getDesa();
		$data['main_admin'] = 'content/pencarian/kegiatan';
		$this->load->view('main/dashboard',$data);

	}
}