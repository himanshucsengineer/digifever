<?php defined('BASEPATH') OR exit('No direct script access allowed');
    class Transfer extends CI_Controller {
        public function __construct(){
            parent::__construct();
            $this->load->model('frontend/Transfermodel');
        }
        
        public function index()
        {
            $data['history'] = $this->Transfermodel->fetch_details();
        $this->load->view('frontend/template/header.php');
       // $this->load->view('frontend/template/desh.php');
        $this->load->view('frontend/user/transfer.php',$data);
       
    }

    public function add_bank(){
        $this->load->model('frontend/Transfermodel');
         

         $this->form_validation->set_rules('amount', 'Amount', 'trim|required');
         if ($this->form_validation->run()) {
            //= $this->session->userdata('email');;
           $email=$_SESSION["email"];
             
            $amount = $this->input->post('amount');
             if($this->Transfermodel->account_insert($email,$amount)){
                echo "<h6 class='text-success text-center'>Your data have been submitted</h6>";
                 
             }else{
                echo "<h6 class='text-danger text-center'>Error In submission</h6>"; 
             }
         } else {
            echo "<h6 class='text-danger text-center'>Please Fill All The Fields</h6>"; 
         }

     }
    
    
    
    
}

/* End of file Dasboard.php */
