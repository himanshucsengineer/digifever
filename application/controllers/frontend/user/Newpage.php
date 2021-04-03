<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Newpage extends CI_Controller {

        
        public function __construct()
        {
            parent::__construct();
            $this->load->model('frontend/Addpagemodel');
        }
        
    public function index()
    {
        $data['add_page'] = $this->Addpagemodel->fetchModeldata();
       
        $this->load->view('frontend/template/header.php');
        //$this->load->view('frontend/template/desh.php');
        $this->load->view('frontend/user/newpage.php',$data);
       
    }

    public function add_page(){
        $this->load->model('frontend/Addpagemodel');
        $this->input->post('formSubmit');
        $linkdata = $this->Addpagemodel->fetchModeldata();
        
       
        
        $this->form_validation->set_rules('new_id', 'page Name', 'trim|required');
        $this->form_validation->set_rules('p_name', 'page Name', 'trim|required');
        $this->form_validation->set_rules('p_link', 'Page Link', 'trim|required');
        $this->form_validation->set_rules('p_size', 'page Size', 'trim|required');
         $this->form_validation->set_rules('p_cate', 'category', 'trim|required');
         if ($this->form_validation->run()) {
           $data['email']=$_SESSION["email"];
           $data['new_id'] = $this->input->post('new_id');
            $data['p_name'] = $this->input->post('p_name');
            $data['p_link'] = $this->input->post('p_link');
            $data['p_size'] = $this->input->post('p_size');
            $data['p_cate'] = $this->input->post('p_cate');
            foreach($linkdata as $value){
                if($value['p_link']==$this->input->post('p_link')){
                    $this->session->set_flashdata('error','Page link Is already Exist try with another page link or contact 9254000000');
                    redirect(base_url().'user/newpage');
                    
                }
                
                
                
            }
                    if($this->Addpagemodel->account_insert($data)){
                        redirect(base_url().'user/addpage?id='.$this->input->post('new_id'));
                 
                    }else{
                        $this->session->set_flashdata('error','Error In submission');
                    redirect(base_url().'user/newpage');
                        
                    }
                
            
            
            
            
             
         } else {
             $this->session->set_flashdata('error','Please Fill All The Fields');
                    redirect(base_url().'user/newpage');
         
         }

     }

}

/* End of file Dasboard.php */
