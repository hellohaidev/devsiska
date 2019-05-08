<?php

class Dashboard extends CI_Controller {

    public function index(){
            
        $template['main_admin'] = "content/server"; 
        $this->load->view('main/dashboard',$template);
    }
}