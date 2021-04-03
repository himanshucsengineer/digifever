

<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Refermodel extends CI_Model {

    public function fetch_referId(){
       
      return $this->db->get('admin_refer')->result_array();
        
    }
    public function fetch_refer(){
       
      return $this->db->get('referandearn')->result_array();
        
    }
   
    public function fetch_user($id){
     return  $this->db->where('refer_id', $id)->get('admin_refer')->result_array();
        
    }
    public function fetch_us($id){
    $q = $this->db->select('*')->from('admin_refer')->where('id',$id)->get(); 
return $q->row(); 
        
    }
    function fetchModeldata(){
        $response = array();
        $this->db->select('*');
        $q = $this->db->get('admin_refer');
        $response = $q->result_array();
        return $response;
    }
   
    function insert($data){
      return  $this->db->insert('admin_refer',$data);
  }
  
  
  public function fetchinventory_api() {
    return $this->db->get('admin_refer')->result_array();
 

      //return $getuser = $this->db->select('*')->from('tbl_subject')->get()->result();
  }
  public function fetch_latest() {
    $query = $this->db->query("SELECT * FROM admin_refer ORDER BY id DESC LIMIT 1");
    $result = $query->result_array();
    return $result;
  }
  public function deletereferdata($data)
    {
        $explodData = explode(',',$data);
        $this->db->where_in('id',$explodData);
        $getDeleteStatus = $this->db->delete('admin_refer');
        if($getDeleteStatus == 1)
        {
            return array('message'=>'yes');
      }else{
        return array('message'=>'no');
      }
      }
      
      
      function edit($data,$id){
     
       
    
                    
        $this->db->set($data);
        $this->db->where('id',$id);
         $this->db->update('referandearn',$data);
    }

  
  
  
  
    function fetch_single_details($refer_id)
 {
  $this->db->where('refer_id', $refer_id);
  $data = $this->db->get('admin_refer');
  $output = '<table width="100%" cellspacing="5" cellpadding="5">';
  foreach($data->result() as $row)
  {
   $output .= '
        <tr>
    <td width="25%"></td>
    <td width="75%">
     <p><b>vhgvhgv gvhgv n gv hgv hg hgv hg h hg vb yjg vvbh gv </p>
     <p><b></p>
     <p><b></p>
     <p><b></p>
     <p><b></p>
    </td>
   </tr>
   ';
  }
  $output .= '
  <tr>
   <td colspan="2" align="center"><a href="<?php echo base_url();?>admin/refer" class="btn btn-primary">Back</a></td>
  </tr>
  ';
  $output .= '</table>';
  return $output;
 }
 
 
 
 
 
 
}


/* End of file Refermodel.php */
