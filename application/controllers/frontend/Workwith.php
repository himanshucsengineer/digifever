<?php 
    defined('BASEPATH') OR exit('No direct script access allowed');
    class Workwith extends CI_Controller {
        public function __construct(){
        parent::__construct();
        $this->load->model('frontend/Workwithmodel');
    }
    public function index(){ 
       $data['work_list_item'] = $this->Workwithmodel->fetch_product();
        $data['work_list'] = $this->Workwithmodel->fetch_work(); 
        $data['work_song'] = $this->Workwithmodel->fetch_song(); 
        $data['work_movie'] = $this->Workwithmodel->fetch_movie(); 
        $data['work_pr'] = $this->Workwithmodel->fetch_pr(); 
        $data['work_production'] = $this->Workwithmodel->fetch_production(); 
        $data['work_serial'] = $this->Workwithmodel->fetch_serial(); 
        $this->load->view('frontend/template/header.php');
       // $this->load->view('frontend/template/navbar.php');
        $this->load->view('frontend/workwith',$data);
       $this->load->view('frontend/template/footer.php');
    }
    
    
    
     

}
