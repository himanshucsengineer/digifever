
    <title>Digifever || Your Page</title>
    
</head>

<? $this->load->view('frontend/template/desh'); ?>
<?php if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'ON'){
                    $url = "https://";
                }else{
                    $url = "http://";
                }
                $url.= $_SERVER['HTTP_HOST'];
                $url.= $_SERVER['REQUEST_URI'];
                
                
            $parts = basename($url);
            
            
            
                
                ?>




<div class="user_desh">
    
    <div class="right">
        <div class="container">
            <?php
      if($this->session->flashdata('success'))
      {
      echo '<div class="alert alert-success">'.$this->session->flashdata('success').'</div>';
      }
      else if($this->session->flashdata('error'))
      {
      echo '<div class="alert alert-danger">'.$this->session->flashdata('error').'</div>';
      }


      ?>
            
                    <h3 class="your_page_head">Your Pages</h3>
                  <hr>
            <div class="box">
                
                <div class="row">
                <div class="col-md-10">
                    
                </div>
                <div class="col-md-2">
                    <a href="<?php echo base_url()?>user/newpage"><button class="add_new_page">Add New Page</button></a>
                </div>    
            </div> 
                <div class="container">
                    <div class="pro">
                        <div class="table-responsive t_box" style="margin-top:-2rem;">
                            <table id="campaign" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>Page Name</th>
                                        <th>Page Link</th>
                                        <th>Page Size</th>
                                        <th>Category</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($fetch_page as $value){ ?>
                                    
                                    <tr>
                                        <td><?php echo $value['p_name'];?></td>
                                        <td><a href="<?php echo $value['p_link'];?>" target="_blank">View Page</a></td>
                                        <td><?php echo $value['p_size'];?></td>
                                        <td><?php echo $value['p_cate'];?></td>
                                        <td><?php echo ($value['account_status'] == false)? "Pending" : $value['account_status'] ;?></td>
                                        
                                    </tr> 
                                    <?php }?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>    
            </div> 
            
        </div>    
    </div>
</div>  


<script>
    $(document).ready(function() {
    $('#campaign').DataTable();
} );

</script>







   
