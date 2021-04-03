<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Addpagemodel extends CI_Model {
    
    public function account_insert($data){
        $this->db->insert('addpage',$data);
        if($this->db->insert_id()){
            return true;
        }else{
            return false;
        }
        
        
    }
    public function fetch_page_data($id){
     return  $this->db->where('email', $id)->get('addpage')->result_array();
        
    }
    
    function update_addpage($new_id,$file1,$file2){
      
        $data = array(
                       'new_id' =>$new_id,
                       'demo' => $file1,
                       'reach' => $file2,
                  
                   );
                   
       $this->db->set($data);
       $this->db->where('new_id',$new_id);
        $this->db->update('addpage',$data);
   }
     function fetchModeldata(){
        $response = array();
        $this->db->select('*');
        $q = $this->db->get('addpage');
        $response = $q->result_array();
        return $response;
    }
    
    }
?>