
    <title>Digifever || Your Page</title>
    
</head>


<? $this->load->view('frontend/template/desh'); ?>
<?php 
    if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')   
        $url = "https://";   
    else  
        $url = "http://";   
        $url.= $_SERVER['HTTP_HOST'];   
        $url.= $_SERVER['REQUEST_URI'];    
        
        $parts = basename($url);
        $rerfe = explode("=",$parts);
        
    
?>
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
            <div class="box">
                <div class="active_head">
                    <div class="flex">
                        <div class="card mm">
                           <a href="<?php echo base_url();?>user/newpage"> <p>Step 1: Page Details</p></a>
                        </div>
                        <div class="card step">
                            <a href="<?php echo base_url();?>user/newpage"><p>Step 2: Demographic & Reach Insight</p></a>
                        </div>    
                    </div>    
                </div>    
                <div class="container">
                    <div class="pro">
                    <div class="row">
                        <div class="col-md-8">
                            <form method="post" action="<?php echo base_url();?>frontend/user/addpage/addpage" enctype="multipart/form-data">
                                <input class="hid" type="number" name="new_id" value="<?php echo $rerfe[1]?>">
                                <input type="file" class="inp" id="fileupload" name="images" placeholder="Upload Image">
                                <input type="file" class="inp" id="fileupload2" name="imagess" placeholder="Upload Image">
                                <input type="submit" name="formSubmit" placeholder="Upload">
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
                        
                    <form method="post" action="<?php echo base_url();?>frontend/user/addpage/addpage" enctype="multipart/form-data">
                        <div class="row">
                            <input class="hid" type="number" name="new_id" value="<?php echo $rerfe[1]?>">
                            <div class="col-md-6">
                                <p>Upload Demographic And People Insight :</p>
                            </div>
                            <div class="col-md-6">
                                <input type="file" id="fileupload" name="images" placeholder="Upload Image">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <p>Upload Reach Insight :</p>
                            </div>
                            <div class="col-md-6">
                                <input type="file" id="fileupload2" name="imagess" placeholder="Upload Image">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                
                            </div>
                            <div class="col-md-6">
                                <input type="submit" name="formSubmit" placeholder="Upload">
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


<script language="javascript" type="text/javascript">

$(function () {
    $("#fileupload").change(function () {
        $("#dvPreview").html("");
        var regex = /^([a-zA-Z0-9\s_\\.\-:])+(.jpg|.jpeg|.png)$/;
        if (regex.test($(this).val().toLowerCase())) {
            if ($.browser.msie && parseFloat(jQuery.browser.version) <= 9.0) {
                $("#dvPreview").show();
                $("#dvPreview")[0].filters.item("DXImageTransform.Microsoft.AlphaImageLoader").src = $(this).val();
            }
            else {
                if (typeof (FileReader) != "undefined") {
                    $("#dvPreview").show();
                    $("#dvPreview").append("<img class='thunbnail_image images_preview'/>");
                    var reader = new FileReader();
                    reader.onload = function (e) {
                        $("#dvPreview img").attr("src", e.target.result);
                    }
                    reader.readAsDataURL($(this)[0].files[0]);
                } else {
                    alert("This browser does not support FileReader.");
                }
            }
        } else {
            alert("Please upload a valid file.");
        }
    });
});
</script>
<script language="javascript" type="text/javascript">

$(function () {
    $("#fileupload2").change(function () {
        $("#dvPreview").html("");
        var regex = /^([a-zA-Z0-9\s_\\.\-:])+(.jpg|.jpeg|.png)$/;
        if (regex.test($(this).val().toLowerCase())) {
            if ($.browser.msie && parseFloat(jQuery.browser.version) <= 9.0) {
                $("#dvPreview").show();
                $("#dvPreview")[0].filters.item("DXImageTransform.Microsoft.AlphaImageLoader").src = $(this).val();
            }
            else {
                if (typeof (FileReader) != "undefined") {
                    $("#dvPreview").show();
                    $("#dvPreview").append("<img class='thunbnail_image images_preview'/>");
                    var reader = new FileReader();
                    reader.onload = function (e) {
                        $("#dvPreview img").attr("src", e.target.result);
                    }
                    reader.readAsDataURL($(this)[0].files[0]);
                } else {
                    alert("This browser does not support FileReader.");
                }
            }
        } else {
            alert("Please upload a valid file.");
        }
    });
});
</script>