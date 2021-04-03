 <?php
    class Explore extends CI_controller{

        public function __construct()
        {
            parent::__construct();
            if(! $this->session->userdata('vendorAuth')){
            redirect('login');}
          $this->load->model('frontend/Workwithmodel');
        }
              
        public function index(){
            
          // $data['explore'] = $this->Workwithmodel->fetch_prod();
            
            $this->load->view('admin/template/header');
            $this->load->view('admin/template/sidebar');
            $this->load->view('admin/template/topbar');
            $this->load->view('admin/explore');
            $this->load->view('admin/template/footer');
        }
        
        
       public function Production(){
            $this->load->model('frontend/Workwithmodel');
                if($this->input->post('formSubmit')){
                
                    
                        if (!empty($_FILES['pro']['name'])){
                            $File_name='production-'.strtotime(date('YmdHis'));
                            $config['upload_path'] = APPPATH . '../upload/work/production';
                            $config['file_name'] = $File_name;
                            $config['overwrite'] = TRUE;
                            $config["allowed_types"] = 'jpg|jpeg|png';
                            $config["max_size"] = 2048;
                            $this->load->library('upload', $config);

                        if(!$this->upload->do_upload('pro')) {

                            $this->data['error'] = $this->upload->display_errors();
                            $this->session->set_flashdata('error',$this->upload->display_errors());
                            redirect(base_url().'admin/explore');
                        } else {
                            $dataimage_return = $this->upload->data();
                            $imageurl=base_url().'upload/work/production/'.$dataimage_return['file_name'];
                        }
                    }
                    $datas = array(
                          'cate' => $this->input->post('work_cate'),
                          'name' => $this->input->post('name'),
                          'link' => $this->input->post('link'),
                        'production' =>$imageurl,
                    );
                    if($this->Workwithmodel->production_insert($datas)){
                       
                        $this->session->set_flashdata('dashboard_error','Successfully submited');
                        redirect(base_url().'admin/explore');
                    }
                    else{
                        $this->session->set_flashdata('dashboard_error','Error In Submission');
                        redirect(base_url().'admin/explore');
                    }
                
            }  else{
                $this->session->set_flashdata('dashboard_error','Something went wrong when saving the file, please try again.');
                redirect(base_url().'admin/explore');
        }  
      }
      
     

    
    
    
  
    }

?>