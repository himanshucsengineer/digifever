<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transfermodel extends CI_Model {
    
 
    public function fetch_details(){
       
      return $this->db->get('transfer')->result_array();
        
    }
    
    function account_insert($email,$amount){
        
        $data = array(
            
            
                        'amount'=>$amount,
                       
                        'email' => $email,
                    );
        
        
        return  $this->db->insert('transfer',$data);
    }
    
    }
?>