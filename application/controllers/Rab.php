<?php 

/**
 * 
 */
class Rab extends CI_Controller
{
	
	public function index(){
        
        $data['data_rab'] = $this->rab_model->getRab();
        $data['main_admin'] = "content/server"; 
        $this->load->view('main/dashboard',$data);
    }
}