<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Deshboardmodel extends CI_Model{
    function __construct() {
    }
    
    // Get all user list
    function getUsersList(){
        $this->db->select('*');
        $this->db->order_by('name', 'asc');
      
        $q = $this->db->get('referandearn');
        $result = $q->result_array();
        return $result;
    }
      // Get user by email
    function getUserById($email){
        $this->db->select('*');
        $this->db->where('email', $email);
        $q = $this->db->get('referandearn');
        $result = $q->result_array();
        return $result;
    }
function updateUser($postData,$email){

        $name = trim($postData['name']);
        $email = trim($postData['mail']);
        $number = trim($postData['mob']);
        $addrs = trim($postData['add']);
        if($name !='' && $email !='' && $number !='' && $addrs !=''  ){

            // Update
            $value=array('name'=>$name,'email'=>$email, 'email'=>$number, 'email'=>$addrs);
            $this->db->where('email',$email);
            $this->db->update('referandearn',$value);

    }
}
   
    }
    ?>