<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Transfermodel extends CI_Model {
    
     
        
        public function fetch_details(){
       
      return $this->db->get('transfer')->result_array();
        
    }
    
    public function fetch_wmoney($id){
     return  $this->db->where('id', $id)->get('transfer')->result_array();
        
    }
        
        
         function update_bank($bank_acc,$id){
                        
                  
     $data = array(
                        'account_status' =>$bank_acc,
                        
                    );
                    
        $this->db->set($data);
        $this->db->where('id',$id);
         $this->db->update('transfer',$data);
    }
    

}