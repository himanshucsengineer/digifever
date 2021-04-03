<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {

        
        public function __construct()
        {
            parent::__construct();
          $this->load->model('frontend/Addpagemodel');
        }
        
    public function index()
    {
       $data['fetch_page'] = $this->Addpagemodel->fetch_page_data($_SESSION["email"]);
        $this->load->view('frontend/template/header.php');
        //$this->load->view('frontend/template/desh.php');
        $this->load->view('frontend/user/page.php',$data);
       
    }

}

/* End of file Dasboard.php */
