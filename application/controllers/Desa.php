<?php 

class Desa extends CI_Controller{

	public function index(){

		$data['data_desa']=$this->desa_model->getDesa();
		$data['main_admin']="content/desa";
		$this->load->view('main/dashboard',$data);
	}
}
?>