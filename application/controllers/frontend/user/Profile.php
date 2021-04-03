<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

        
        public function __construct()
        {
            parent::__construct();
           // $this->load->model('frontend/invoicedatamodel');
            
        }
        
    public function index()
    {
      
        $this->load->view('frontend/template/header.php');
        //$this->load->view('frontend/template/desh.php');
        $this->load->view('frontend/user/profile.php');
       
    }
    
     


}

/* End of file Dasboard.php */
