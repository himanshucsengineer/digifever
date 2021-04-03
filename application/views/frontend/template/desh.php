<?php 

  $name=$_SESSION["name"];
  $email=$_SESSION["email"];
  $number=$_SESSION["number"];

?>

<?php if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'ON'){
                    $url = "https://";
                }else{
                    $url = "http://";
                }
                $url.= $_SERVER['HTTP_HOST'];
                $url.= $_SERVER['REQUEST_URI'];
                
                
            $parts = basename($url);
            
            
            
                
                ?>

<body>
    
    
    
   
  <header class="header-area bg-white main_head" >
    <div class="navbar-area ">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <nav class="navbar navbar-expand-lg">
              <div class="logo">
                <a class="custom-logo-link " rel="home" href="<?php echo base_url();?>"><img width="90"  src="<?php echo base_url(); ?>assest/img/Digifever_logo.svg" alt="Digifever" class="custom-logo" ></a>
                  <a class="navbar-brand"  href="#" rel="home">
                </a>
              </div>  
                <div class="wal_nav_list_right">
                    <button class="menu_but" onclick="openNav()">&#9776;</button>
                </div>
                 <div id="mySidenav" class="sidenav">
                    <a href="javascript:void(0)" id="close" class="closebtn" onclick="closeNav()">&times;</a>
                    <center><img class="slider_logo" src="<?php echo base_url();?>assest/img/slider-logo.svg"></center>
                    <a href="<?php echo base_url();?>user/campaign"><button class="<?php echo ($parts == 'campaign')?"active":""?>"><span style="font-size:20px; margin-right:1.5rem;"><i class="fa fa-map"></i></span>Campaign</button></a>
                    
                    <a href="<?php echo base_url();?>user/profile"><button class="<?php echo ($parts == 'profile')?"active":""?>"><span style="font-size:20px; margin-right:1.5rem;"><i class="fa fa-user"></i></span>Profile & Setting</button></a>
                    <a href="<?php echo base_url();?>user/your-page"><button class="<?php echo ($parts == 'your-page')?"active":($parts=="newpage")?"active":($parts=="addpage")?"active":""?>"><span style="font-size:20px; margin-right:1.5rem;"><i class="fa fa-file"></i></span>Your Page</button></a>
                    <a href="<?php echo base_url();?>user/transfer"><button class="<?php echo ($parts == 'transfer')?"active":""?>"><span style="font-size:20px; margin-right:1.5rem;"><i class="fa fa-credit-card"></i></span>Payment Request</button></a>
                    <a href="<?php echo base_url();?>frontend/logout"><button><span style="font-size:20px; margin-right:1.5rem;"><i class="fa fa-sign-out"></i></span>Logout</button></a>
                    
                    <div class="social">
                        <a href="" class="fb"><i class="fa fa-facebook"></i></a>
                        <a href="" class="insta"><i class="fa fa-instagram"></i></a>
                        <a href="" class="youtube"><i class="fa fa-youtube"></i></a>
                        <a href="" class="linkdin"><i class="fa fa-linkedin"></i></a>
                    </div>    
                </div>
                 
              <div id="navbarSupportedContent" class="collapse navbar-collapse sub-menu-bar">
                <ul id="nav" class="navbar-nav ml-auto " style="float:left;">
                  
                 
                  
                  
                  <li class=" nav-item user_box">
                        <div class="row">
                            <div class="col-md-2">
                                <img class="avtar" src="<?php echo base_url();?>assest/img/user.png">
                            </div>
                            <div class="col-md-10">
                                <a title="career" href="<?php echo base_url();?>user/profile" class="nav-link">
                      <?php echo $name;?>
                    </a>
                            </div>    
                        </div>  
                      
                    
                  </li>
                </ul>
              </div>
            </nav> <!-- navbar -->
          </div>
        </div> <!-- row -->
      </div> <!-- container -->
    </div> <!-- navbar area -->
  </header>
  <script>
        if(window.innerWidth>600){
            document.getElementById("close").style.display = "none";
            document.getElementById("mySidenav").style.width = "22%";
            document.getElementById("mySidenav").style.transition = "0s";
        }
function openNav() {
  document.getElementById("mySidenav").style.width = "100%";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
  </script>  
    
    