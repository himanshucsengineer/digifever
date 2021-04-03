<?php
    class Login extends CI_controller{
        public function __construct()
    {
        parent::__construct();
   //     $this->load->model('frontend/Homemodel');
    }

        public function index(){
       //     $getsocials['brandslogo'] = $this->Homemodel->fetchaddinventory_api();
            $this->load->view('frontend/template/header');
            $this->load->view('frontend/template/navbar');
            $this->load->view('frontend/login');
            $this->load->view('frontend/template/footer');
            
            
            
                
           
           
           
        }

        public function login(){
            
            
            $this->load->helper(array('cookie', 'url'));
            $url = $_SESSION['url']; 
            $this->load->model('frontend/Signupmodel');
            $model_data=$this->Signupmodel->fetchModeldata();
            
            
            $login_success=0;
            $user_data = array(
                'email' => $this->input->post('email'),
                'password' => $this->input->post('password'),
            );
            
            
            set_cookie('email',$user_data[0]);
            set_cookie('pass',$user_data[1]);
            foreach ($model_data as $value) {
                    
               
                if((strtolower($value['email'])==strtolower($user_data['email']) or isset($_COOKIE['email'])) && ($value['pass']==$user_data['password'] or isset($_COOKIE['pass']) ))
                {
                    
                    if($value['account_status']=="Approved"){
                        $_SESSION["email"]=$value["email"];
                        $_SESSION["name"]=$value["name"];
                        $_SESSION["number"]=$value["number"];
                        $login_success=1;
                        break;
                    }else{
                        $login_success=0;
                        break;
                    }
                    
                    
                    
                }
            }
            if($login_success==1){
                    redirect(base_url().'user/campaign');
               
                
                
            }
            else{
                $this->session->set_flashdata('error','Wrong Email Or Password or Your Profile Is not Approved'); 
                redirect($url); 
            }
            

             
        }

        public function signup(){
            $this->load->model('frontend/Signupmodel');
            $this->input->post('formSubmit');
            $this->form_validation->set_rules('email', 'Email', 'required|is_unique[referandearn.email]');
            if ($this->form_validation->run()){ 
                $email = $this->input->post('email');
                $name = $this->input->post('name');
                $link = $this->input->post('link');
                $number = $this->input->post('mob');
                $password = $this->input->post('password');
                if($this->Signupmodel->signup($email,$name,$password,$number,$link) ){
                $this->session->set_flashdata('success','Signup Successful'); 
                redirect(base_url()); 
                
            }
            else{
                $this->session->set_flashdata('error','Wrong Email Or Password'); 
                redirect(base_url()); 
            }
        }else{
            $this->session->set_flashdata('error','This  email already used by someone try with another email'); 
            redirect(base_url()); 
    }
                
                
                
                
                
                
               
                
            
          
            
            
            
         

    }
    
    
    public function update_pro(){
        $this->load->model('frontend/Signupmodel');
        
        $this->input->post('formSubmit');
        
            
            $this->form_validation->set_rules('name', 'Name', 'required');
            $this->form_validation->set_rules('email', 'Email', 'required');
            $this->form_validation->set_rules('number', 'Number', 'required');
            $this->form_validation->set_rules('upi', 'Address', 'required');
            if ($this->form_validation->run()){ 
               
               $name = $this->input->post('name');
                        $email = $this->input->post('email');
                        $number = $this->input->post('number');
                        $addrs = $this->input->post('upi');
                        
                
                    if($this->Signupmodel->update_pro($name,$number,$email,$addrs)){
                        
                        
                        $_SESSION["name"]=$this->input->post('name');
                        $_SESSION["email"]=$this->input->post('email');
                        $_SESSION["number"]=$this->input->post('number');
                        $_SESSION["upi"]=$this->input->post('upi');
                        echo "<h6 class='text-danger text-center'>Error In Submission</h6>"; 
                        
                    }
                    else{
                        echo "<h6 class='text-success text-center'>Your data have been submitted</h6>";
                         
                    }
                }
                else{
                    echo "<h6 class='text-danger text-center'>Please Fill All The Fields</h6>"; 
                     
                }
       
}




    }

 