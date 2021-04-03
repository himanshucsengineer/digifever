<?php
    class Home extends CI_controller{
        public function __construct()
    {
        parent::__construct();
        
    }

        public function index(){
            
           
            $this->load->view('frontend/template/header');
            //$this->load->view('frontend/template/navbar');
            
            $this->load->view('frontend/home');
            $this->load->view('frontend/template/footer');

        }
        
         public function insert_brand(){
        $this->load->model('frontend/Homemodel');
         

         $this->form_validation->set_rules('name', 'Amount', 'trim|required');
         $this->form_validation->set_rules('email', 'Amount', 'trim|required');
         $this->form_validation->set_rules('w_number', 'Amount', 'trim|required');
         $this->form_validation->set_rules('brand', 'Amount', 'trim|required');
         $this->form_validation->set_rules('service', 'Amount', 'trim|required');
         $this->form_validation->set_rules('desc', 'Amount', 'trim|required');
         if ($this->form_validation->run()) {
            
             $data = array(
                        'name'=>$this->input->post('name'),
                        'email'=>$this->input->post('email'),
                        'w_number'=>$this->input->post('w_number'),
                        'brand'=>$this->input->post('brand'),
                        'service'=>$this->input->post('service'),
                        'description'=>$this->input->post('desc'),
                 );
           
             if($this->Homemodel->insert_data($data)){
                echo "<h6 class='text-success text-center'>Your data have been submitted</h6>";
                 
             }else{
                echo "<h6 class='text-danger text-center'>Error In submission</h6>"; 
             }
         } else {
            echo "<h6 class='text-danger text-center'>Please Fill All The Fields</h6>"; 
         }

     }
        
        
}

?>  