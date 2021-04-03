<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Campaign extends CI_Controller {
    public function __construct(){
        parent::__construct();
       $this->load->model('frontend/Campaigndatamodel');
    }
    public function index(){ 
       
      $data['fetch_amount'] = $this->Campaigndatamodel->fetch_amount($_SESSION["email"]);
        $data['fetch_wimoney'] = $this->Campaigndatamodel->fetch_wmoney($_SESSION["email"]);
        $this->load->view('frontend/template/header.php');
        //$this->load->view('frontend/template/desh.php');
        $this->load->view('frontend/user/campaign.php',$data);
       
    }
    
    
    
     

}
