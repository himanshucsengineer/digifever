<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Addpage extends CI_Controller {

        
        public function __construct()
        {
            parent::__construct();
            
        }
        
    public function index()
    {
        
        $this->load->view('frontend/template/header.php');
        //$this->load->view('frontend/template/desh.php');
        $this->load->view('frontend/user/addpage.php');
       
    }







    public function addpage(){
        $this->load->model('frontend/Addpagemodel');
        if($this->input->post('formSubmit')){
                $this->form_validation->set_rules('new_id', '', 'required');
        
           
       
        if ($this->form_validation->run() ){ 
            
   
    
           
        
        if (!empty($_FILES['images']['name'])){

        $File_name='demo_insight-'.strtotime(date('YmdHis'));

        $config['upload_path'] = APPPATH . '../upload/insight';
        $config['file_name'] = $File_name;
        $config['overwrite'] = TRUE;
        $config["allowed_types"] = 'jpg|jpeg|png';
        $config["max_size"] = 2048;

        $this->load->library('upload', $config);

        if(!$this->upload->do_upload('images')) {

            $this->data['error'] = $this->upload->display_errors();
          $this->session->set_flashdata('error',$this->upload->display_errors());
      
             redirect(base_url().'user/addpage');
        } else {
         $dataimage_return = $this->upload->data();
$imageurl1=base_url().'upload/insight/'.$dataimage_return['file_name'];
         
            
          }
          }
          if (!empty($_FILES['imagess']['name'])){

        $File_name='reach_insight-'.strtotime(date('YmdHis'));

        $config['upload_path'] = APPPATH . '../upload/insight';
        $config['file_name'] = $File_name;
        $config['overwrite'] = TRUE;
        $config["allowed_types"] = 'jpg|jpeg|png';
        $config["max_size"] = 2048;

        $this->load->library('upload', $config);

        if(!$this->upload->do_upload('imagess')) {

            $this->data['error'] = $this->upload->display_errors();
          $this->session->set_flashdata('error',$this->upload->display_errors());
      
             redirect(base_url().'user/addpage');
        } else {
         $dataimage_return = $this->upload->data();
$imageurl2=base_url().'upload/insight/'.$dataimage_return['file_name'];
         
            
          }
          }
        
                
                $new_id= $this->input->post('new_id');
            $file1 =$imageurl1;
            $file2 =$imageurl2;
       
        
        
      

        if($this->Addpagemodel->update_addpage($new_id,$file1,$file2)){
            
            $this->session->set_flashdata('error','Error In Submission');
             redirect(base_url().'user/your-page');
            
        }
        else{
            $this->session->set_flashdata('success','Your Page Request Is Successfully Sent to the Admin');
             redirect(base_url().'user/your-page');
            
        }
         

    }
    else{
        
        
        $this->session->set_flashdata('error','fill all the fields.');
         redirect(base_url().'user/your-page');
    }
            
            
        }  else{
               $this->session->set_flashdata('error','Something went wrong when saving the file, please try again.');
             redirect(base_url().'user/your-page');
               }  
       
 }

    

}

/* End of file Dasboard.php */
