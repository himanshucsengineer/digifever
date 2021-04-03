<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Campaigndatamodel extends CI_Model {

    
    public function fetch_wmoney($email){
     return  $this->db->where('email', $email)->get('transfer')->result_array();
        
    }
    public function fetch_amount($email){
     return  $this->db->where('email', $email)->get('campaign')->result_array();
        
    }
    

}

/* End of file Refermodel.php */
