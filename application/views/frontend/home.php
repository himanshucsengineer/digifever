
    <title>Digifever || Home</title>
    
</head>    
<? $this->load->view('frontend/template/navbar'); ?>
<div class="home_top" style="background-image: url(<?php echo base_url();?>assest/img/home_bg.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1>We Empower</h1>
                <p>Your Brand to Achieve More on Social Media</p>
                <button class="home_brand_button" data-toggle="modal" data-target="#brand">i'm a brand</button>
                <a  data-toggle="modal" href="javascript:void(0)" onclick="openRegisterModal();" > <button class="home_infu_button">i'm an infulancer</button></a>
            </div>
            <div class="col-md-6">

            </div>
        </div>
    </div>
</div>

<div class="modal fade brand_modal" id="brand">
    <div class="modal-dialog">
      <div class="modal-content">
      
      
        <div class="modal-header">
          <h4 >Brands Form</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
            <?php echo form_open(base_url('home/insert_brand'), array('id'=>'brandform','method'=>'POST'));?>
            <input type="text" name="name" placeholder="Enter Your Name">
            <input type="email" name="email" placeholder="Enter Your Email">
            <input type="number" name="w_number" placeholder="Enter Whatsapp Number">
            <input type="text" name="brand" placeholder="Enter Brand Name OR URL">
            <input type="text" name="service" placeholder="Service You Are Intrested">
            <textarea  rows="5" name="desc" placeholder="Roughly Brief Your Requirement in any Language You are in Comfortable"></textarea>
            <input type="submit" value="Submit">
            <?php echo form_close(); ?>
        </div>
        
        
        
      </div>
    </div>
  </div>
  
  
  
  <div class="modal" id="myMod">
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

$("#brandform").submit(function(event){
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
$('#brand').modal('hide').fadeIn('slow');
    $('#myMod').modal('show').fadeIn('slow');
});
});

</script> 