<?php
    class Yourpage extends CI_controller{

        public function __construct()
        {
            parent::__construct();
            if(! $this->session->userdata('vendorAuth')){
            redirect('login');}
            $this->load->model('admin/Pagemodel');
        }
              
        public function index(){
            
            $data['history'] = $this->Pagemodel->fetch_details();
            
            $this->load->view('admin/template/header');
            $this->load->view('admin/template/sidebar');
            $this->load->view('admin/template/topbar');
            $this->load->view('admin/yourpage',$data);
            $this->load->view('admin/template/footer');
        }
        
        
       
       
    
    
    
    
    
    public function update_page($id){
        $this->load->model('admin/Pagemodel');
        $this->input->post('formSubmit');

             
            $this->form_validation->set_rules('action', 'Action', 'required');
            
            if ($this->form_validation->run()){ 
             
                    $bank_acc = $this->input->post('action');
                       
                        
                    if($this->Pagemodel->update_page($bank_acc,$id)){
                        $this->session->set_flashdata('dashboard_error','Updated Successfully'); 
                        redirect(base_url().'admin/yourpage');  
                    }
                    else{
                        $this->session->set_flashdata('dashboard_error','Updated Successfully'); 
                        redirect(base_url().'admin/yourpage'); 
                    }
                }
                else{
                    $this->session->set_flashdata('dashboard_error','Plase Choose An action'); 
                    redirect(base_url().'admin/yourpage');   
                }
       
}

  
    }

?>