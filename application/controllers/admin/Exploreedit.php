 <?php
    class Exploreedit extends CI_controller{

        public function __construct()
        {
            parent::__construct();
            if(! $this->session->userdata('vendorAuth')){
            redirect('login');}
          $this->load->model('frontend/Workwithmodel');
        }
              
        public function index(){
            
           $data['explore'] = $this->Workwithmodel->fetch_prod();
            
            $this->load->view('admin/template/header');
            $this->load->view('admin/template/sidebar');
            $this->load->view('admin/template/topbar');
            $this->load->view('admin/exploreedit',$data);
            $this->load->view('admin/template/footer');
        }
        
        public function update(){
        $this->load->model('frontend/Workwithmodel');
        
        $this->input->post('formSubmit');

            
            $this->form_validation->set_rules('id', 'Name', 'required');
            $this->form_validation->set_rules('name', 'Email', 'required');
            $this->form_validation->set_rules('link', 'Number', 'required');
            $this->form_validation->set_rules('work_cate', 'Address', 'required');
            
            if ($this->form_validation->run()){ 
                
                if (!empty($_FILES['images']['name'])){
                    $File_name='';
                    $config['upload_path'] = APPPATH . '../upload/work/production';
                    $config['file_name'] = $File_name;
                    $config['overwrite'] = TRUE;
                    $config["allowed_types"] = 'jpeg|jpg|png';
                    $config["max_size"] = 2048;
                    $this->load->library('upload', $config);
                    if(!$this->upload->do_upload('images')) {
                        $this->data['error'] = $this->upload->display_errors();
                        $this->session->set_flashdata('error',$this->upload->display_errors());
                        redirect('admin/exploreall');
                    } else {
                        $dataimage_return = $this->upload->data();
                        $imageurl=base_url().'upload/work/production/'.$dataimage_return['file_name'];
                        
                    }
          }else{
              $data = $this->Workwithmodel->fetch_prod();
              
              foreach($data as $value){
                  if($value['id'] == $this->input->post('id')){
                  $imageurl= $value['production'];
                  }
                  
              }
          }
               
               $name = $this->input->post('name');
                        $id = $this->input->post('id');
                        $link = $this->input->post('link');
                        $cate = $this->input->post('work_cate');
                        
                
                    if($this->Workwithmodel->update_pro($name,$id,$link,$cate,$imageurl)){
                        
                        
                        
                        $this->session->set_flashdata('success','Technical error'); 
                        redirect(base_url().'admin/exploreall');  
                    }
                    else{
                        $this->session->set_flashdata('success','Updated Successfully'); 
                        redirect(base_url().'admin/exploreall'); 
                    }
                }
                else{
                    $this->session->set_flashdata('error','Please Fill all Fields'); 
                    redirect(base_url().'admin/exploreall');   
                }
       
}
       
      
     

    
    }

?>