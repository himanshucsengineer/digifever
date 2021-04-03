<?php
    class Account extends CI_controller{

        public function __construct()
        {
            parent::__construct();
            if(! $this->session->userdata('vendorAuth')){
            redirect('login');}
            $this->load->model('admin/Usermodel');
        }
              
        public function index(){
            
            $data['history'] = $this->Usermodel->fetch_details();
            
            $this->load->view('admin/template/header');
            $this->load->view('admin/template/sidebar');
            $this->load->view('admin/template/topbar');
            $this->load->view('admin/account',$data);
            $this->load->view('admin/template/footer');
        }
        
        
       
       
    
    
    
    
    
    public function update_login($id){
        $this->load->model('admin/Usermodel');
        $this->input->post('formSubmit');

             
            $this->form_validation->set_rules('action', 'Action', 'required');
            
            if ($this->form_validation->run()){ 
             
                    $bank_acc = $this->input->post('action');
                       
                       
                       if($this->input->post('action')=="Decline"){
                           if($this->Usermodel->delete_login($id)){
                                $this->session->set_flashdata('dashboard_error','Deleted Successfully'); 
                                redirect(base_url().'admin/account');  
                            }
                            else{
                                $this->session->set_flashdata('dashboard_error','Deleted Successfully'); 
                                redirect(base_url().'admin/account'); 
                            }
                       }else{
                           if($this->Usermodel->update_login($bank_acc,$id)){
                                $this->session->set_flashdata('dashboard_error','Updated Successfully'); 
                                redirect(base_url().'admin/account');  
                            }
                            else{
                                $this->session->set_flashdata('dashboard_error','Updated Successfully'); 
                                redirect(base_url().'admin/account'); 
                            }
                       }
                        
                    
                }
                else{
                    $this->session->set_flashdata('dashboard_error','Plase Choose An action'); 
                    redirect(base_url().'admin/account');   
                }
       
}

  
    }

?>