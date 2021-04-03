<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pagemodel extends CI_Model {
    
     
        
        public function fetch_details(){
       
      return $this->db->get('addpage')->result_array();
        
    }
    
    function update_page($bank_acc,$id){
                        
                  
     $data = array(
                        'account_status' =>$bank_acc,
                        
                    );
                    
        $this->db->set($data);
        $this->db->where('id',$id);
         $this->db->update('addpage',$data);
    }
    
    
    

}