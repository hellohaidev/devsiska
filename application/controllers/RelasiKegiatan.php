<?php

/**
 * 
 */
class RelasiKegiatan extends CI_Controller
{
	
	public function index(){

		$data['main_admin'] = 'content/relasiKegiatan';
		$this->load->view('main/dashboard',$data);
	}
}