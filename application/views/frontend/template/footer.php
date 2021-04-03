<style>
    .footer{
        width:100%;
        height:auto;
        padding-top:2rem;
        padding-bottom:3rem;
        background-color:black;
        
    }
    .footer h5{
        font-size:17px;
        color:white;
        font-family:sohne,"Helvetica Neue",Helvetica,Arial,sans-serif;
        text-transform:uppercase;
        margin:20px 20px 5px 5px;
    }
    .footer p{
        font-size:15px;
        font-family:rgb( 226, 226, 226 );
        margin-left:10px;
        color:rgb( 226, 226, 226 );
    }
    .footer .style1{
        border-top:1px solid rgb( 182, 182, 182 );
        margin-top:0px;
    }
    .footer a{
        font-size:16px;
        font-family:sohne,"Helvetica Neue",Helvetica,Arial,sans-serif;
        margin-left:10px;
        line-height:1.4;
        text-align:left;
        color:rgb( 226, 226, 226 );
        text-decoration:none;
        transition:.5s;
    }
    .footer a:hover{
    
        color:#00afff;
    }
    
    </style>
<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <h5>Digifever</h5>
                <hr class="style1">
                <p>Digifevr is best company which provides a services for brand and influancer.</p>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <h5>Services</h5>
                <hr class="style1">
                <a href="">Brands</a></br>
                <a href="">Influencers</a></br>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <h5>Quick Links</h5>
                <hr class="style1">
                <a href="">About Us</a></br>
                <a href="">Contact Us</a></br>
                <a href="">Privacy Policy</a></br>
                <a href="">Term and Condition</a></br>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <h5>Get In Touch</h5>
                <hr class="style1">
                <p>Rajmahal Complex,Opp-PLA Petrol Pump,Delhi Road, Hisar-125001</p>
            </div>
        </div>
    </div>
</div>

<div class="modal fade login" id="loginModal">
	    <div class="modal-dialog  animated">
    		<div class="modal-content">
    		    <div class="modal-header ">
    		        
                    <h4 class="modal-title">Login with DigiFever</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <?php
                        if($this->session->flashdata('error')){
                            echo "<script>$('#loginModal').modal('show');</script>";
                            echo '<p class="text-danger">'.$this->session->flashdata('error').'</p>';
                        }
                    ?>
                    <?php
                        if($this->session->flashdata('success')){
                            echo "<script>$('#loginModal').modal('hide');</script>";
                            echo '<p class="text-success">'.$this->session->flashdata('success').'</p>';
                        }
                    ?>
                    <?php 
                        if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')   
                            $url = "https://";   
                        else  
                            $url = "http://";   
                                // Append the host(domain name, ip) to the URL.   
                            $url.= $_SERVER['HTTP_HOST'];   
                            // Append the requested resource location to the URL   
                            $url.= $_SERVER['REQUEST_URI'];    
                            $_SESSION['url'] =$url;
                    ?>
                    <div class="box">
                        <div class="form loginBox">
                            <form method="post" action="<?php echo base_url() ; ?>frontend/login/login">
				                <input id="email" class=" chng" type="text" placeholder="Email" name="email" required>
				                <!-- id-"password"--><input id="input_login" class=" chng" type="password" placeholder="Password" name="password" required><span class="hide" type="button" onclick="hideeLogin()"><i class="fa fa-eye" aria-hidden="true"></i></span>
				                <input  type="submit" class="btn btn-default btn-login bu-chng" value="Login">
                            </form>   
                        </div>
                    </div>
                    <div class="box">
                        <div class="content registerBox" style="display:none;">
                            <div class="form">
                                <form method="post" action="<?php echo base_url() ; ?>frontend/login/signup">
                                    <input id="name" class=" chng" type="text" placeholder="Name" name="name" required>
                                  
                                    <input id="email" class=" chng" type="text" placeholder="Email" name="email" required>
                                    <input class=" chng" type="number" placeholder="Enter Your Number" name="mob" required>
                                    <input  class=" chng" type="text" placeholder="Page Link" name="link" required>
                                    <input id="input" class=" chng" type="password" placeholder="Password" name="password" required><span class="hide" type="button" onclick="hidee()"><i class="fa fa-eye" aria-hidden="true"></i></span>
                                    <!--input id="password_confirmation" class="form-control chng" type="password" placeholder="Repeat Password" name="cpassword" required-->
                                        
                                    <div class="chck" >
                                        <input type="checkbox" value="none" id="checkbox_1" name="contact1"/>
                                        <label for="checkbox_1" class="checkbox"><span class="chk">I agree to the Term and Conditon</span></label>
                                    </div>  
                                    <input class="btn btn-default btn-register bu-chng" type="submit" value="Create account" name="commit" >
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="forgot login-footer">
                        <span ><a href="<?php echo base_url();?>frontend/forgetpass">Forgot password?</a> </span>
                        <span class="forgot-pass">Looking to
                        <a href="javascript: showRegisterForm();">create an account</a>
                        ?</span>
                    </div>
                    <div class="forgot register-footer" >
                        <span>Already have an account?</span>
                        <a href="javascript: showLoginForm();">Login</a>
                    </div>
                </div>
    		</div>
<script>
/*
 *
 * login-register modal
 * Autor: Creative Tim
 * Web-autor: creative.tim
 * Web script: https://creative-tim.com
 * 
 */
function showRegisterForm(){
    $('.loginBox').fadeOut('fast',function(){
        $('.registerBox').fadeIn('fast');
        $('.login-footer').fadeOut('fast',function(){
            $('.register-footer').fadeIn('fast');
        });
        $('.modal-title').html('Register with DigiFever');
    }); 
    $('.error').removeClass('alert alert-danger').html('');
       
}
function showLoginForm(){
    $('#loginModal .registerBox').fadeOut('fast',function(){
        $('.loginBox').fadeIn('fast');
        $('.register-footer').fadeOut('fast',function(){
            $('.login-footer').fadeIn('fast');    
        });
        
        $('.modal-title').html('Login with DigiFever');
    });       
     $('.error').removeClass('alert alert-danger').html(''); 
}

function openLoginModal(){
    showLoginForm();
    setTimeout(function(){
        $('#loginModal').modal('show');    
    }, 230);
    
}
function openRegisterModal(){
    showRegisterForm();
    setTimeout(function(){
        $('#loginModal').modal('show');    
    }, 230);
    
}



function shakeModal(){
    $('#loginModal .modal-dialog').addClass('shake');
             $('.error').addClass('alert alert-danger').html("Invalid email/password combination");
             $('input[type="password"]').val('');
             setTimeout( function(){ 
                $('#loginModal .modal-dialog').removeClass('shake'); 
    }, 1000 ); 
}

</script>
<script>
function hidee() {
  var x = document.getElementById("input");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
<script>
function hideeLogin() {
  var x = document.getElementById("input_login");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>

</body>
</html>