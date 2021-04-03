<?php
    class User extends CI_controller{

        public function __construct()
        {
            parent::__construct();
            if(! $this->session->userdata('vendorAuth')){
            redirect('login');}
            $this->load->model('admin/Usermodel');
           // $this->load->model('frontend/invoicedatamodel');
        }
              
        public function index(){
            
            
            
            $this->load->view('admin/template/header');
            $this->load->view('admin/template/sidebar');
            $this->load->view('admin/template/topbar');
            $this->load->view('admin/user');
            $this->load->view('admin/template/footer');
        }
        
        
       
        public function addinventory_api(){

            $getPurchaseData = $this->Usermodel->fetchinventory_api();
    
    
            foreach ($getPurchaseData as $key => $value) { 
//                $short_desc_vl=$lst_desc.'<a class="edit" href="'.base_url().'admin/brands/galleryedit/'.$value->id.'" data-toggle="tooltip" data-original-title="Edit">Read More</a>';
    
                $arrya_json[] = array($value['id'],$value['name'],$value['email'],$value['number'],'<a href="'.$value['pa_link'].'" target="_blank">View Page</a>',$value['upi'],$value['pass'],'<a class="edit" href="'.base_url().'admin/brands/galleryedit/'.$value['email'].'" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-edit"></i></a>&nbsp;&nbsp;
               <a class="delete_sliders" data-id="'.$value['email'].'"  style="color: red;cursor: pointer;" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash" aria-hidden="true"></i></a>' );
                }
                 echo json_encode(array('data'=>$arrya_json));
            }
            
            
            
            public function user(){
            $file_name = 'User_Data'.'.csv';
            header("Content-Description: File Transfer");
            header("Content-Disposition: attachment; filename=$file_name");
            header("Content-Type: application/csv");
            
            
            
            $getPurchaseData = $this->invoicedatamodel->fetch_user();
            
            $file = fopen('php://output','w');
            
            $header = array("Email", "Name", "Number", "Address", "password", "refer id ", "Earn", "Refer Count", "bank Account", "Ifsc", "Account Name","referance name", 'referance refer id');
            
            fputcsv($file, $header);
            
            foreach ($getPurchaseData as $key => $value) { 
                    fputcsv($file, $value);                

                
            }
            fclose($file);
            exit;
                
            
        }
            
           public function deletecardetail(){ 
    
                    if($this->input->post('deletesliderId'))
                {
                  $this->form_validation->set_rules('deletesliderId','text','required');
                  if($this->form_validation->run() == true)
                  {
                    $getDeleteStatus = $this->Usermodel->deletecardata($this->input->post('deletesliderId'));
                    if($getDeleteStatus['message'] == 'yes')
                    {
                      $this->session->set_flashdata('success','Gallery  deleted successfully');
                      redirect(base_url()."admin/user");
                    }
                    else
                    {
                      $this->session->set_flashdata('error','Something went wrong. Please try again');
                    redirect(base_url()."admin/user");
                      
                    }
                  }
                  else
                  {
                    $this->session->set_flashdata('error','Something went wrong. Please try again');
                    redirect(base_url()."admin/user");
    
                  }
                }
              }

  
    }

?>