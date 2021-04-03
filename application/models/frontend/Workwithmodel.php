<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Workwithmodel extends CI_Model {
    function production_insert($datas){
        return  $this->db->insert('work_production',$datas);
    }
    
    
  public function deleteexploredata($data)
    {
        $explodData = explode(',',$data);
        $this->db->where_in('id',$explodData);
        $getDeleteStatus = $this->db->delete('work_production');
        if($getDeleteStatus == 1)
        {
            return array('message'=>'yes');
      }else{
        return array('message'=>'no');
      }
      }
  
    function update_pro($name,$id,$link,$cate,$imageurl){
      
        $data = array(
                       'name' =>$name,
                       'id' => $id,
                       'link' => $link,
                       'cate' => $cate,
                       'production' => $imageurl,
                   );
                   
       $this->db->set($data);
       $this->db->where('id',$id);
        $this->db->update('work_production',$data);
   }
    
    public function fetch_prod(){
     return  $this->db->get('work_production')->result_array();
        
    }
   public function fetch_product(){
     return  $this->db->order_by('id','DESC')->get('work_production')->result_array();
        
    }
    public function fetch_work(){
        return $getSlider = $this->db->select('*')->from('work_production')->where('cate', brands)->order_by('id','DESC')->get()->result();
     
        
    }
    public function fetch_song(){
        return $getSlider = $this->db->select('*')->from('work_production')->where('cate', songs)->order_by('id','DESC')->get()->result();
     
        
    }
    public function fetch_movie(){
        return $getSlider = $this->db->select('*')->from('work_production')->where('cate', movies)->order_by('id','DESC')->get()->result();
     
        
    }
    public function fetch_serial(){
        return $getSlider = $this->db->select('*')->from('work_production')->where('cate', serial)->order_by('id','DESC')->get()->result();
     
        
    }
    public function fetch_pr(){
        return $getSlider = $this->db->select('*')->from('work_production')->where('cate', pr)->order_by('id','DESC')->get()->result();
     
        
    }
    public function fetch_production(){
        return $getSlider = $this->db->select('*')->from('work_production')->where('cate', production)->order_by('id','DESC')->get()->result();
     
        
    }
}
?>