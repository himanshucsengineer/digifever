</head>


<? $this->load->view('frontend/template/navbar'); ?>
<style>
    .work_with{
        height:auto;
        display:block;
    }
    .work_with_mm{
        display:none;
    }
    .work_with img{
        width:100%;
        height:200px;
       
        transition:.5s;
    }
 .hidd{
        display:none;
    }
    .work_with img:hover{
        
    }

    .work_with h3{
        margin-left:.5rem;
        margin-right:.5rem;
        text-align:center;
        
    }
    .work_with .conta {
        position: relative;
        width: 100%;
    }
    .work_with  button{
        width:10rem;
        height:auto;
        padding-top:.5rem;
        padding-bottom:.5rem;
        border:none;
       float:right;
        outline:none;
        color:white;
        background-color:#00afff;
        
        margin-bottom:2rem;
    }
    .work_with .first{
        
        height:auto;
        padding-top:2rem;
        padding-bottom:2rem;
        background-color:white;
       
    }
   
    .work_with .sec{
        width:100%;
        height:auto;
        padding-top:2rem;
        padding-bottom:2rem;
       
        background-color:#eaecec;
        
    }
   
  .work_with  .overlay {
    position: absolute;
    bottom: 0;
     left: 0;
    right: 0;
    
    background-color:black;
    overflow: hidden;
     width: 100%;
     height: 0;
    transition: .5s ease;
    opacity:.3;
    }
    .work_with a{
        text-decoration:none;
    }
   .work_with .conta:hover .overlay {
    height: 100%;
    }
    .work_with .flex{
        display:flex;
        flex-wrap: wrap;
    }
    .work_with .card{
        width:23.555%;
        margin:.5rem;
        
        border-radius:0px !important;
        border:1px solid #cdcdcd;
    }
    .work_with .card1{
        width:31.86%;
        margin:.5rem;
        border:none !important;
        border-radius:0px !important;
        border:1px solid #cdcdcd;
    }
    .work_with .infu_name{
        width:100%;
        height:auto;
       margin-top:-.2rem;
        background-color:black;
        padding-top:.5rem;
        padding-bottom:.5rem;
    }
    .work_with .infu_name p{
        color:white;
        text-align:center;
        font-weight:500;
        margin-bottom:0rem;
    }
    
    .work_with_mm{
        width:100%;
        height:auto;
        
    }
    .work_with_mm img{
        width:100%;
        height:200px;
       
        transition:.5s;
    }
 .hidd{
        display:none;
    }
    .work_with_mm img:hover{
        
    }

    .work_with_mm h3{
        margin-left:.5rem;
        margin-right:.5rem;
        text-align:center;
        
    }
    .work_with_mm .conta {
        position: relative;
        width: 100%;
    }
    .work_with_mm  button{
        width:10rem;
        height:auto;
        padding-top:.5rem;
        padding-bottom:.5rem;
        border:none;
       float:right;
        outline:none;
        color:white;
        background-color:#00afff;
        
        margin-bottom:2rem;
    }
    
    .work_with_mm .first-mm{
        width:100%;
        height:auto;
        padding-top:2rem;
        padding-bottom:2rem;
        background-color:white;
    }
    
    .work_with_mm .sec-mm{
        width:100%;
        height:auto;
        padding-top:2rem;
        padding-bottom:2rem;
        background-color:#eaecec;
        
    }
  .work_with_mm  .overlay {
    position: absolute;
    bottom: 0;
     left: 0;
    right: 0;
    
    background-color:black;
    overflow: hidden;
     width: 100%;
     height: 0;
    transition: .5s ease;
    opacity:.3;
    }
    .work_with_mm a{
        text-decoration:none;
    }
   .work_with_mm .conta:hover .overlay {
    height: 100%;
    }
    .work_with_mm .flex{
        display:flex;
        flex-wrap: wrap;
    }
    .work_with_mm .card{
        width:100%;
        
        border-radius:0px !important;
        border:1px solid #cdcdcd;
    }
    .work_with_mm .card1{
        width:100%;
       
        border:none !important;
        border-radius:0px !important;
        border:1px solid #cdcdcd;
    }
    .work_with_mm .infu_name{
        width:100%;
        height:auto;
       margin-top:-.2rem;
        background-color:black;
        padding-top:.5rem;
        padding-bottom:.5rem;
    }
    .work_with_mm .infu_name p{
        color:white;
        text-align:center;
        font-weight:500;
        margin-bottom:0rem;
    }
    .work_with_mm .mobile{
        margin-top:2rem;
        margin-bottom:0rem !important;
        width:8rem !important;
    }
    @media only screen and (max-width: 600px) {
        .work_with{
            display:none !important;
        }
        .work_with_mm{
            display:block !important;
        }
    }    
</style>
<div class="work_with">
    <div class="first">
        <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                
            </div>
            <div class="col-md-4">
                <h3>Brands</h3>
            </div>
            <div class="col-md-4">
                <a href="<?php echo base_url();?>brands"><button>View All</button></a>
            </div>    
        </div>        
        
        <div id="production" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                
                <div class="carousel-item active">
                    <div class="flex">
                        <?php for($i=0; $i<4; $i++){ ?>
                        <div class="card conta">
                            <a href="<?php echo $work_list[$i]->link;?>" target="_blank"><img src="<?php echo $work_list[$i]->production;?>">
                            <div class="overlay">
                                
                            </div>
                            <div class="infu_name">
                                <p><?php echo $work_list[$i]->name;?></p>
                            </div> </a>   
                        </div>
                        <?php }?>
                        
                        
                        
                       
                    </div>
                </div>
          
                <div class="carousel-item">
                    <div class="flex">
                        <?php for($i=1; $i<5; $i++){ ?>
                        <div class="card conta">
                            <a href="<?php echo $work_list[$i]->link;?>" target="_blank"><img src="<?php echo $work_list[$i]->production;?>">
                            <div class="overlay">
                                
                            </div>
                            <div class="infu_name">
                                <p><?php echo $work_list[$i]->name;?></p>
                            </div></a>    
                        </div>
                        <?php }?>
                        
                        
                        
                       
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#production" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#production" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>
       
        </div>
    </div>
    
      
    
    
    
    
    <div class="sec">
        <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                
            </div>
            <div class="col-md-4">
                <h3>Songs</h3>
            </div>
            <div class="col-md-4">
                <a href="<?php echo base_url();?>songs"><button>View All</button></a>
            </div>    
        </div> 
        <div id="brand" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="flex">
                        <?php for($i=0; $i<4; $i++){ ?>
                        <div class="card conta">
                            <a href="<?php echo $work_song[$i]->link;?>" target="_blank"><img src="<?php echo $work_song[$i]->production;?>">
                            <div class="overlay">
                                
                            </div>
                            <div class="infu_name">
                                <p><?php echo $work_song[$i]->name;?></p>
                            </div></a>
                        </div>
                        <?php }?>
                        
                        
                        
                       
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="flex">
                        <?php for($i=1; $i<5; $i++){ $item_class = (($work_song[$i]->production)==null) ? 'hidd' : ' ';?>
                        <div class="card conta <?php echo $item_class?>">
                            <a href="<?php echo $work_song[$i]->link;?>" target="_blank"><img src="<?php echo $work_song[$i]->production;?>">
                            <div class="overlay">
                                
                            </div>
                            <div class="infu_name">
                                <p><?php echo $work_song[$i]->name;?></p>
                            </div></a>    
                        </div>
                        <?php }?>
                        
                        
                        
                       
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#brand" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#brand" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>
     
        </div>
    </div>
    
    
    
    <div class="first">
        <div class="container">
            <div class="row justify-content-center">
            <div class="col-md-4">
                
            </div>
            <div class="col-md-4">
                <h3>Movies</h3>
            </div>
            <div class="col-md-4">
               <a href="<?php echo base_url();?>movies"> <button>View All</button></a>
            </div>    
        </div> 
        
        <div id="song" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="flex">
                        <?php for($i=0; $i<4; $i++){ $item_class = (($work_movie[$i]->production)==null) ? 'hidd' : ' ';?>
                        <div class="card conta <?php echo $item_class?>">
                            <a href="<?php echo $work_movie[$i]->link;?>" target="_blank"><img src="<?php echo $work_movie[$i]->production;?>">
                            <div class="overlay">
                                
                            </div>
                            <div class="infu_name">
                                <p><?php echo $work_movie[$i]->name;?></p>
                            </div></a>    
                        </div>
                        <?php }?>
                        
                        
                        
                       
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="flex">
                        <?php for($i=2; $i<6; $i++){ $item_class = (($work_movie[$i]->production)==null) ? 'hidd' : ' ';?>
                        <div class="card conta <?php echo $item_class?>">
                            <a href="<?php echo $work_movie[$i]->link;?>" target="_blank"><img src="<?php echo $work_movie[$i]->production;?>">
                            <div class="overlay">
                                
                            </div>
                            <div class="infu_name">
                                <p><?php echo $work_movie[$i]->name;?></p>
                            </div></a>    
                        </div>
                        <?php }?>
                        
                        
                        
                       
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#song" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#song" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>
       
        </div>
    </div>
    
    
    
    
    <div class="sec">
        <div class="container">
           
        <div class="row justify-content-center">
            <div class="col-md-4">
                
            </div>
            <div class="col-md-4">
                <h3>Digital Series and Tv Serials</h3>
            </div>
            <div class="col-md-4">
                <a href="<?php echo base_url();?>serial"><button>View All</button></a>
            </div>    
        </div> 
        
        <div id="movie" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="flex">
                        <?php for($i=0; $i<4; $i++){ $item_class = (($work_serial[$i]->production)==null) ? 'hidd' : ' ';?>
                        <div class="card conta <?php echo $item_class?>">
                            <a href="<?php echo $work_serial[$i]->link;?>" target="_blank"><img src="<?php echo $work_serial[$i]->production;?>">
                            <div class="overlay">
                                
                            </div>
                            <div class="infu_name">
                                <p><?php echo $work_serial[$i]->name;?></p>
                            </div></a>    
                        </div>
                        <?php }?>
                        
                        
                        
                       
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="flex">
                        <?php for($i=1; $i<5; $i++){ $item_class = (($work_serial[$i]->production)==null) ? 'hidd' : ' ';?>
                        <div class="card conta <?php echo $item_class?>">
                            <a href="<?php echo $work_serial[$i]->link;?>" target="_blank"><img src="<?php echo $work_serial[$i]->production;?>">
                            <div class="overlay">
                                
                            </div>
                            <div class="infu_name">
                                <p><?php echo $work_serial[$i]->name;?></p>
                            </div></a>    
                        </div>
                        <?php }?>
                        
                        
                        
                       
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#movie" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#movie" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>
      
        </div>
    </div>
    
    
    
    
    <div class="first">
        <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                
            </div>
            <div class="col-md-4">
                <h3>Our Production House</h3>
            </div>
            <div class="col-md-4">
                <a href="<?php echo base_url();?>production-house"><button>View All</button></a>
            </div>    
        </div>
        
        <div id="series" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="flex">
                        <div class="flex">
                        <?php for($i=0; $i<3; $i++){ $item_class = (($work_production[$i]->production)==null) ? 'hidd' : ' ';?>
                        <div class="card1 conta <?php echo $item_class?>">
                            <a href="<?php echo $work_production[$i]->link;?>" target="_blank"><img src="<?php echo $work_production[$i]->production;?>">
                            <div class="overlay">
                                
                            </div>
                            <div class="infu_name">
                                <p><?php echo $work_production[$i]->name;?></p>
                            </div></a>    
                        </div>
                        <?php }?>
                        
                        
                        
                       
                    </div>
                </div>
                </div>
                <div class="carousel-item">
                    <div class="flex">
                        <?php for($i=2; $i<5; $i++){ $item_class = (($work_production[$i]->production)==null) ? 'hidd' : ' ';?>
                        <div class="card1 conta <?php echo $item_class?>">
                            <a href="<?php echo $work_production[$i]->link;?>" target="_blank"><img src="<?php echo $work_production[$i]->production;?>">
                            <div class="overlay">
                                
                            </div>
                            <div class="infu_name">
                                <p><?php echo $work_production[$i]->name;?></p>
                            </div></a>    
                        </div>
                        <?php }?>
                        
                        
                        
                       
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#series" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#series" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>
        
        </div>
    </div>
    
    
    
    <div class="sec">
        <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                
            </div>
            <div class="col-md-4">
                <h3>Digital PR</h3>
            </div>
            <div class="col-md-4">
                <a href="<?php echo base_url();?>digital-pr"><button>View All</button></a>
            </div>    
        </div>
        
        <div id="pr" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="flex">
                        <?php for($i=0; $i<3; $i++){ $item_class = (($work_pr[$i]->production)==null) ? 'hidd' : ' ';?>
                        <div class="card1 conta <?php echo $item_class?>">
                            <a href="<?php echo $work_pr[$i]->link;?>" target="_blank"><img src="<?php echo $work_pr[$i]->production;?>">
                            <div class="overlay">
                                
                            </div>
                            <div class="infu_name">
                                <p><?php echo $work_pr[$i]->name;?></p>
                            </div></a>    
                        </div>
                        <?php }?>
                        
                        
                        
                       
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="flex">
                        <?php for($i=1; $i<4; $i++){ $item_class = (($work_pr[$i]->production)==null) ? 'hidd' : ' ';?>
                        <div class="card1 conta <?php echo $item_class?>">
                            <img src="<?php echo $work_pr[$i]->production;?>">
                            <div class="overlay">
                                
                            </div>
                            <div class="infu_name">
                                <p><?php echo $work_pr[$i]->name;?></p>
                            </div>    
                        </div>
                        <?php }?>
                        
                        
                        
                       
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#pr" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#pr" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>
       
        </div>
    </div>
    
    
   
</div>    



<div class="work_with_mm">
    <div class="first-mm">
        <div class="container">
            <h3>Brands</h3>
            <div id="production2" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <?php $i = 1; foreach($work_list_item as $value){ if($value['cate'] == "brands"){?>
                <?php $item_class = ($i == 1) ? 'carousel-item active' : 'carousel-item'; ?>
                <div class="<?php echo $item_class; ?>">
                    <div class="card conta">
                        <a href="<?php echo $value['link'];?>" target="_blank"><img src="<?php echo $value['production'];?>">
                        <div class="overlay">
                        </div>
                        <div class="infu_name">
                            <p><?php echo $value['name'];?></p>
                        </div></a>    
                    </div>
                </div>
                <?php $i++; ?>
                <?php }}?>
                
            </div>
            <a class="carousel-control-prev" href="#production2" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#production2" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>
        <div class="row justify-content-center">
            <a href="<?php echo base_url();?>brands"><button class="mobile">View All</button></a>
        </div>    
        </div>    
    </div>
    <div class="sec-mm">
        <div class="container">
            <h3>Songs</h3>
            <div id="brand2" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <?php $i = 1; foreach($work_list_item as $value){ if($value['cate'] == "songs"){?>
                <?php $item_class = ($i == 1) ? 'carousel-item active' : 'carousel-item'; ?>
                <div class="<?php echo $item_class; ?>">
                    <div class="card conta">
                        <a href="<?php echo $value['link'];?>" target="_blank"><img src="<?php echo $value['production'];?>">
                        <div class="overlay">
                        </div>
                        <div class="infu_name">
                            <p><?php echo $value['name'];?></p>
                        </div></a>    
                    </div>
                </div>
                <?php $i++; ?>
                <?php }}?>
                
            </div>
            <a class="carousel-control-prev" href="#brand2" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#brand2" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>
        <div class="row justify-content-center">
            <a href="<?php echo base_url();?>songs"><button class="mobile">View All</button></a>
        </div>    
        </div>    
    </div>
    <div class="first-mm">
        <div class="container">
            <h3>Movies</h3>
            <div id="song2" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <?php $i = 1; foreach($work_list_item as $value){ if($value['cate'] == "movies"){?>
                <?php $item_class = ($i == 1) ? 'carousel-item active' : 'carousel-item'; ?>
                <div class="<?php echo $item_class; ?>">
                    <div class="card conta">
                        <a href="<?php echo $value['link'];?>" target="_blank"><img src="<?php echo $value['production'];?>">
                        <div class="overlay">
                        </div>
                        <div class="infu_name">
                            <p><?php echo $value['name'];?></p>
                        </div></a>    
                    </div>
                </div>
                <?php $i++; ?>
                <?php }}?>
                
            </div>
            <a class="carousel-control-prev" href="#song2" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#song2" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>
        <div class="row justify-content-center">
            <a href="<?php echo base_url();?>movies"> <button class="mobile">View All</button></a>
        </div>    
        </div>    
    </div>
    <div class="sec-mm">
        <div class="container">
            <h3>Digital Series and Tv Serials</h3>
            <div id="movie2" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <?php $i = 1; foreach($work_list_item as $value){ if($value['cate'] == "serial"){?>
                <?php $item_class = ($i == 1) ? 'carousel-item active' : 'carousel-item'; ?>
                <div class="<?php echo $item_class; ?>">
                    <div class="card conta">
                        <a href="<?php echo $value['link'];?>" target="_blank"><img src="<?php echo $value['production'];?>">
                        <div class="overlay">
                        </div>
                        <div class="infu_name">
                            <p><?php echo $value['name'];?></p>
                        </div></a>    
                    </div>
                </div>
                <?php $i++; ?>
                <?php }}?>
                
            </div>
            <a class="carousel-control-prev" href="#movie2" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#movie2" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>
        <div class="row justify-content-center">
            <a href="<?php echo base_url();?>serial"><button class="mobile">View All</button></a>
        </div>    
        </div>    
    </div>
    <div class="first-mm">
        <div class="container">
            <h3>Our Production House</h3>
            <div id="series2" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <?php $i = 1; foreach($work_list_item as $value){ if($value['cate'] == "production"){?>
                <?php $item_class = ($i == 1) ? 'carousel-item active' : 'carousel-item'; ?>
                <div class="<?php echo $item_class; ?>">
                    <div class="card conta">
                        <a href="<?php echo $value['link'];?>" target="_blank"><img src="<?php echo $value['production'];?>">
                        <div class="overlay">
                        </div>
                        <div class="infu_name">
                            <p><?php echo $value['name'];?></p>
                        </div></a>    
                    </div>
                </div>
                <?php $i++; ?>
                <?php }}?>
                
            </div>
            <a class="carousel-control-prev" href="#series2" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#series2" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>
        <div class="row justify-content-center">
            <a href="<?php echo base_url();?>production-house"><button class="mobile">View All</button></a>
        </div>    
        </div>    
    </div>
    
    <div class="sec-mm">
        <div class="container">
            <h3>Digital PR</h3>
            <div id="pr2" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <?php $i = 1; foreach($work_list_item as $value){ if($value['cate'] == "pr"){?>
                <?php $item_class = ($i == 1) ? 'carousel-item active' : 'carousel-item'; ?>
                <div class="<?php echo $item_class; ?>">
                    <div class="card conta">
                        <a href="<?php echo $value['link'];?>" target="_blank"><img src="<?php echo $value['production'];?>">
                        <div class="overlay">
                        </div>
                        <div class="infu_name">
                            <p><?php echo $value['name'];?></p>
                        </div></a>    
                    </div>
                </div>
                <?php $i++; ?>
                <?php }}?>
                
            </div>
            <a class="carousel-control-prev" href="#pr2" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#pr2" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>
        <div class="row justify-content-center">
            <a href="<?php echo base_url();?>digital-pr"><button class="mobile">View All</button></a>
        </div>    
        </div>    
    </div>
</div>    