<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signupmodel extends CI_Model {
    function signup($email,$name,$password,$number,$link){
        
        $data = array(
            
            
                        'pass' => $password,
                        'number' => $number,
                        'pa_link' => $link,
                        'name' => $name,
                       
                        'email' => $email,
                    );
        
        
        return  $this->db->insert('referandearn',$data);
    }
    
    
    function fetchModeldata(){
        $response = array();
        $this->db->select('*');
        $q = $this->db->get('referandearn');
        $response = $q->result_array();
        return $response;
    }
    function update_pro($name,$number,$email,$addrs){
      
        $data = array(
                       'name' =>$name,
                       'email' => $email,
                       'number' => $number,
                       'upi' => $addrs,
                   );
                   
       $this->db->set($data);
       $this->db->where('email',$email);
        $this->db->update('referandearn',$data);
   }


    }
    
    

 
    
  
    
    
    
    
    
    
    
    
    
   

?>