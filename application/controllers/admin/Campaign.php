<?php
    class Campaign extends CI_controller{

        public function __construct()
        {
            parent::__construct();
            if(! $this->session->userdata('vendorAuth')){
            redirect('login');}
            $this->load->model('admin/Campaignmodel');
        }
              
        public function index(){
            
            $data['history'] = $this->Campaignmodel->fetch_details();
            
            $this->load->view('admin/template/header');
            $this->load->view('admin/template/sidebar');
            $this->load->view('admin/template/topbar');
            $this->load->view('admin/campaign',$data);
            $this->load->view('admin/template/footer');
        }
        
        public function insert_data(){
        $this->load->model('admin/Campaignmodel');
        $this->input->post('formSubmit');

             
            $this->form_validation->set_rules('email', 'Email', 'required');
            $this->form_validation->set_rules('p_name', 'Page Name', 'required');
            $this->form_validation->set_rules('c_name', 'Campaign Name', 'required');
            $this->form_validation->set_rules('amount', 'Amount', 'required');
            
            if ($this->form_validation->run()){ 
             
                    $email = $this->input->post('email');
                       $p_name = $this->input->post('p_name');
                       $c_name = $this->input->post('c_name');
                       $amount = $this->input->post('amount');
                        
                    if($this->Campaignmodel->insert_data($email,$p_name,$c_name,$amount)){
                        $this->session->set_flashdata('dashboard_error','Updated Successfully'); 
                        redirect(base_url().'admin/campaign');  
                    }
                    else{
                        $this->session->set_flashdata('dashboard_error','Error In Submission'); 
                        redirect(base_url().'admin/campaign'); 
                    }
                }
                else{
                    $this->session->set_flashdata('dashboard_error','Plase Fill All The Fileds'); 
                    redirect(base_url().'admin/campaign');   
                }
       
}
       
       public function addinventory_api(){

            $getPurchaseData = $this->Campaignmodel->fetchinventory_api();
    
    
            foreach ($getPurchaseData as $key => $value) { 
                $arrya_json[] = array($value['id'],$value['email'],$value['p_name'],$value['c_name'],$value['amount'],'
               <a class="delete_sliders" data-id="'.$value['id'].'"  style="color: red;cursor: pointer;" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash" aria-hidden="true"></i></a>' );
                }
                 echo json_encode(array('data'=>$arrya_json));
            }
    
    
    public function deletecampdetail(){ 
    
                    if($this->input->post('deletesliderId'))
                {
                  $this->form_validation->set_rules('deletesliderId','text','required');
                  if($this->form_validation->run() == true)
                  {
                    $getDeleteStatus = $this->Campaignmodel->deletecampdata($this->input->post('deletesliderId'));
                    if($getDeleteStatus['message'] == 'yes')
                    {
                      $this->session->set_flashdata('success','Gallery  deleted successfully');
                      redirect(base_url()."admin/campaign");
                    }
                    else
                    {
                      $this->session->set_flashdata('error','Something went wrong. Please try again');
                    redirect(base_url()."admin/campaign");
                      
                    }
                  }
                  else
                  {
                    $this->session->set_flashdata('error','Something went wrong. Please try again');
                    redirect(base_url()."admin/campaign");
    
                  }
                }
              }

    
    
    
  
    }

?>