<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Homemodel extends CI_Model {
    
 
   
    
    function insert_data($data){
        
       
        
        return  $this->db->insert('brand',$data);
    }
    
    }
?>