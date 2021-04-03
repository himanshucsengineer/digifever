
    <title>Digifever || Your Page</title>
    
</head>
<? $this->load->view('frontend/template/desh'); ?>

<style>
    .hid{
        display:none;
    }
</style>





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
            <div class="box">
                <div class="active_head">
                    <div class="flex">
                        <div class="card step">
                            <a href="<?php echo base_url();?>user/newpage"><p>Step 1: Page Details</p></a>
                        </div>
                        <div class="card mm">
                            <a href="<?php echo base_url();?>user/addpage"><p>Step 2: Demographic & Reach Insight</p></a>
                        </div>    
                    </div>    
                </div>    
                <div class="container">
                    <div class="pro">
                    <div class="row">
                        <div class="col-md-8">
                            <form action="<?php echo base_url()?>frontend/user/newpage/add_page" method="POST">
                                <input class="hid" type="number" name="new_id" value="<?php foreach($add_page as $value){ $i=$value['new_id'];} $i++; echo $i;?>">
                                <input class="inp" type="text" name="p_name" placeholder="Enter Page Name">
                                <input class="inp" type="text" name="p_link" placeholder="Enter Page Link">
                                <input class="inp" type="text" name="p_size" placeholder="Enter Page Size">
                                <select class="inp" name="p_cate">
                                    <option value="">Select Page Category</option>
                                    <option value="Youtube">Youtube</option>
                                    <option value="Memes">memes</option>
                                </select>
                                <input type="submit" name="formSubmit" value="Save & Next">
                            </form>
                        </div>
                        <div class="col-md-4">
                        
                        </div>    
                    </div>
                    </div>
                </div>    
            </div> 
            
        </div>    
    </div>
</div>  









<!--div class="user_camp">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="left">
                <a href="<?php echo base_url();?>user/campaign"><button>Campaign History</button></a>
                <a href="<?php echo base_url();?>user/profile"><button>Profile & Setting</button></a>
                <a href="<?php echo base_url();?>user/your-page"><button>Your Page</button></a>
               <a href="<?php echo base_url();?>user/transfer"> <button>Payment Request</button></a>
                </div>
            </div>
            
            <div class="col-md-9">
            
                <div class="right">
                    
                    <div class="header">
                        <h5>Your Pages</h5>
                    </div>
                    
                    <div class="body">
                        <form action="<?php echo base_url()?>frontend/user/newpage/add_page" method="POST">
                    
                        <div class="row">
                        <input class="hid" type="number" name="new_id" value="<?php foreach($add_page as $value){ $i=$value['new_id'];} $i++; echo $i;?>">
                            <div class="col-md-2">
                                <p>Page Name* :</p>
                            </div>
                            <div class="col-md-10">
                                <input type="text" name="p_name" placeholder="Enter Page Name">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2">
                                <p>Page Link* :</p>
                            </div>
                            <div class="col-md-10">
                                <input type="text" name="p_link" placeholder="Enter Page Link">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2">
                                <p>Page Size* :</p>
                            </div>
                            <div class="col-md-10">
                                <input type="Number" name="p_size" placeholder="Enter Page Size">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2">
                                <p>Page Category* :</p>
                            </div>
                            <div class="col-md-10">
                                <select name="p_cate">
                                    <option value="Youtube">Youtube</option>
                                    <option value="Memes">memes</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2">
                                
                            </div>
                            <div class="col-md-10">
                                <input type="submit" name="formSubmit" value="Next">
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div-->

<div class="modal" id="myModal">
              <div class="modal-dialog">
                <div class="modal-content">
                  <!-- Modal Header -->
                  <!-- Modal body -->
                  <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <span id="validation" class="form_errors"></span>
                  </div>
                </div>
              </div>
            </div>
            <div class="modal" id="myModal">
              <div class="modal-dialog">
                <div class="modal-content">
                  <!-- Modal Header -->
                  <!-- Modal body -->
                  <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <span id="validation" class="form_errors"></span>
                  </div>
                </div>
              </div>
            </div>

            <div class="modal" id="myModal1">
              <div class="modal-dialog">
                <div class="modal-content">
                <h6 class='text-success text-center'>OOPS!! You can select upto 7 adults</h6>
                  <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <span id="validation" class="form_errors"></span>
                  </div>
                </div>
              </div>
            </div>  
<script>

$("#addpageform").submit(function(event){
event.preventDefault();
var post_url = $(this).attr("action"); 
var request_method = $(this).attr("method"); 
var form_data = $(this).serialize(); 

$.ajax({
    url : post_url,
    type: request_method,
    data : form_data,
}).done(function(response){ //
$('#validation').html(response);
    $('#myModal').modal('show').fadeIn('slow');
});
});

</script>  