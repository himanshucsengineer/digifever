<?php 
    defined('BASEPATH') OR exit('No direct script access allowed');
    class Digitalpr extends CI_Controller {
        public function __construct(){
        parent::__construct();
        $this->load->model('frontend/Workwithmodel');
    }
    public function index(){ 
       
        $data['fetch'] = $this->Workwithmodel->fetch_prod(); 
        
        //$data['releted']=$this->db->where('cate', $data['fetch']->cate)->order_by('id','DESC')->get('work_production')->result();
        $this->load->view('frontend/template/header.php');
        //$this->load->view('frontend/template/navbar.php');
        $this->load->view('frontend/digitalpr',$data);
       $this->load->view('frontend/template/footer.php');
    }
    
    
    
     

}
