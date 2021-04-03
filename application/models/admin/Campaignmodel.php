<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Campaignmodel extends CI_Model {
    
     
        
        public function fetch_details(){
       
      return $this->db->get('referandearn')->result_array();
        
    }
    function insert_data($email,$p_name,$c_name,$amount){
        
        $data = array(
                'email' => $email,
                'p_name' => $p_name,
                'c_name' => $c_name,
                'amount' => $amount
                    );
        
        
        return  $this->db->insert('campaign',$data);
    }
    
    public function fetchinventory_api() {
    return $this->db->get('campaign')->result_array();
 

    
  }
      public function deletecampdata($data)
    {
        $explodData = explode(',',$data);
        $this->db->where_in('id',$explodData);
        $getDeleteStatus = $this->db->delete('campaign');
        if($getDeleteStatus == 1)
        {
            return array('message'=>'yes');
      }else{
        return array('message'=>'no');
      }
      }
        
        
    

}