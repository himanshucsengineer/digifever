</head>


<? $this->load->view('frontend/template/navbar'); ?>
<style>

  
    .production{
        width:100%;
        height:auto;
        padding-top:2rem;
        padding-bottom:2rem;
        
    }
    .production img{
        width:100%;
        
        height:200px;
    }
    .production .infu_name{
        width:100%;
        height:auto;
       margin-top:-.2rem;
        background-color:black;
        padding-top:.5rem;
        padding-bottom:.5rem;
    }
    .production .infu_name p{
        color:white;
        text-align:center;
        font-weight:500;
        margin-bottom:0rem;
    }
    .production .conta:hover .overlay {
    height: 100%;
    }
   .production  .overlay {
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
    .production .conta {
        position: relative;
        width: 100%;
    }
    .production .flex{
        display:flex;
        flex-wrap:wrap;
    }
    .production .card{
        width:23.5%;
        margin:.5rem;
        
        border-radius:0px !important;
        border:1px solid #cdcdcd;
    }
    .production h3{
        text-align:center;
        margin-bottom:2rem;
    }
    .production a{
        text-decoration:none;
    }
    .production  button{
        width:10rem;
        height:auto;
        padding-top:.5rem;
        padding-bottom:.5rem;
        border:none;
       
        outline:none;
        color:white;
        background-color:#00afff;
        margin-top:2rem;
        margin-bottom:2rem;
    }
    @media only screen and (max-width: 600px) {
        .production .card{
        width:100%;
        margin:0rem !important;
       margin-bottom:1rem !important;
    }
    .production{
        padding-left:1rem !important;
        padding-right:1rem !important;
    }
       .production  button{
        width:7rem;
        
    } 
    }    
</style>

<div class="production">
    <div class="container">
        <h3>Songs</h3>
        <div class="flex">
            <?php foreach($fetch as $value){ if($value['cate'] == "songs"){?>
            <div class="card conta">
                <a href="<?php echo $value['link']?>" target="_blank"><img src="<?php echo $value['production']?>">
                <div class="overlay">
                </div>
                <div class="infu_name">
                    <p><?php echo $value['name']?></p>
                </div></a>
            </div>
            <?php }}?>
                
        </div>
        <div class="row " align=center>
            <div class="col-md-3">
                <a href="<?php echo base_url()?>explore"><button>Back</button></a>
            </div>
        </div>
    </div>
</div>    