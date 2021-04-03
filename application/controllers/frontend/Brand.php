<?php 
    defined('BASEPATH') OR exit('No direct script access allowed');
    class Brand extends CI_Controller {
        public function __construct(){
        parent::__construct();
        $this->load->model('frontend/Workwithmodel');
    }
    public function index(){ 
       
        $data['fetch'] = $this->Workwithmodel->fetch_prod(); 
        
        
        $this->load->view('frontend/template/header.php');
       // $this->load->view('frontend/template/navbar.php');
        $this->load->view('frontend/brand',$data);
       $this->load->view('frontend/template/footer.php');
    }
    
    
    
     

}
