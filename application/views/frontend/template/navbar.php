
<body>
  <header class="header-area bg-white main_head" >
    <div class="navbar-area ">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <nav class="navbar navbar-expand-lg">
              <div class="logo">
                <a class="custom-logo-link " rel="home" href="<?php echo base_url();?>"><img width="110"  src="<?php echo base_url(); ?>assest/img/Digifever_logo.svg" alt="Digifever" class="custom-logo" ></a>
                  <a class="navbar-brand"  href="#" rel="home">
                </a>
              </div>  
              <div class="wal_nav_list_right">
                    <button class="menu_but" onclick="openNav()">&#9776;</button>
                </div>
                 <div id="mySidenav" class="sidenav ">
                    <a href="javascript:void(0)" id="close" class="closebtn" onclick="closeNav()">&times;</a>
                    <center><img class="slider_logo" src="<?php echo base_url();?>assest/img/slider-logo.svg"></center>
                    <a href="<?php echo base_url();?>"><button class="<?php echo ($parts == '')?"active":""?>"><span style="font-size:20px; margin-right:1.5rem;"><i class="fa fa-home"></i></span>Home</button></a>
                    
                    <a href=""><button class="<?php echo ($parts == 'profile')?"active":""?>"><span style="font-size:20px; margin-right:1.5rem;"><i class="fa fa-creative-commons"></i></span>Brands</button></a>
                    <a href=""><button class="<?php echo ($parts == 'your-page')?"active":($parts=="newpage")?"active":($parts=="addpage")?"active":""?>"><span style="font-size:20px; margin-right:1.8rem;"><i class="fa fa-user"></i></span>Influencers</button></a>

                    <a href="<?php echo base_url();?>explore"><button><span style="font-size:12px; margin-right:1.5rem;"><span class="fa-stack fa-sm"> <i class="fa fa-comment fa-stack-2x"></i> <i class="fa fa-cloud fa-stack-2x"></i> </span></span>Work With</button></a>
                    
                    <div class="social">
                        <a href="" class="fb"><i class="fa fa-facebook"></i></a>
                        <a href="" class="insta"><i class="fa fa-instagram"></i></a>
                        <a href="" class="youtube"><i class="fa fa-youtube"></i></a>
                        <a href="" class="linkdin"><i class="fa fa-linkedin"></i></a>
                    </div>    
                </div>
              <div id="navbarSupportedContent" class="collapse navbar-collapse sub-menu-bar">
                <ul id="nav" class="navbar-nav ml-auto " style="float:left;">
                  <li class=" nav-item">
                    <a title="Home" href="<?php echo base_url(); ?>" class="nav-link">
                      Home
                    </a>
                  </li>
                  <li class=" nav-item">
                    <a title="BRANDs" href="#" class="nav-link">
                      BRANDs
                    </a>
                  </li>
                  <li class=" nav-item">
                    <a title="Blogs" href="#" class="nav-link">
                      Influencers
                    </a>
                  </li>
                  
                  <li class=" nav-item ">
                    <a title="career" href="<?php echo base_url();?>explore" class="nav-link">
                      Work With
                    </a>
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
       
function openNav() {
  document.getElementById("mySidenav").style.width = "100%";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
  </script>   
    
    