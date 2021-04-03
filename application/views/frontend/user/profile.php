
    <title>Digifever || Profile</title>
    
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
<?php 

  $name=$_SESSION["name"];
  $email=$_SESSION["email"];
  $number=$_SESSION["number"];

?>



<div class="user_desh">
    
    <div class="right">
        <div class="container">
            <div class="box">
                <div class="head">
                    <h5>Profile and setting</h5>
                </div>    
                <div class="container">
                    <div class="pro">
                    <div class="row">
                        <div class="col-md-8">
                            <?php echo form_open(base_url('frontend/login/update_pro'), array('id'=>'profileupdateform','method'=>'POST'));?>
                          <span class="font-ico"> <i class="fa fa-user" aria-hidden="true"></i></span> <input style="margin-left:.1rem" class="inpu" type="text" name="name" placeholder="Name" value="<?php echo $name?>">
                            <span class="font-ico"><i class="fa fa-envelope"></i></span><input style="margin-left:.1rem" class="inpu" type="email" name="email" placeholder="Email"  value="<?php echo $email?>" readonly>
                             <span class="font-ico"><i class="fa fa-phone" aria-hidden="true"></i></span><input style="margin-left:.4rem" class="inpu" type="number" name="number" placeholder="Mobile Number" value="<?php echo $number?>">
                           <span class="font-ico"> <i class="fa fa-money" aria-hidden="true"></i></span><input class="inpu" type="text" name="upi" placeholder="Enter Your Upi id" value="<?php echo $upi?>">
                            <input type="submit" name="formSubmit" class="butt" value="Update">
                            <?php echo form_close(); ?>
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

$("#profileupdateform").submit(function(event){
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