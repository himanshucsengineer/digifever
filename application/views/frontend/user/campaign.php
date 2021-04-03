
    <title>Digifever || Campaign</title>
    
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
                
<?php $tota=0;
$total=0;
foreach($fetch_amount as $value){
            
            $total += $value['amount'] ; 
           }
           
           foreach($fetch_wimoney as $mone){
               if($mone['account_status'] == "Transfer"){
                   
            $tota += $mone['amount']; 
            $pend = $total - $tota;
            $_SESSION["amou"] = $tota;
               }else{
                   $tota=$_SESSION["amou"];
                   
               }
               
           }
           
           
           
           ?>                



<div class="user_desh">
    
    <div class="right">
        <div class="container">
            <h4 class="your_page_head" style="text-align:center; margin-bottom:1rem">Welcome To Your Digifever Influencer Dashboard</h4>
            <div class="box">
                   
                <div class="flex">
                <div class="card">
                    <h4><?php if($total != 0){ echo $total;} else{echo '0.00' ;} ?></h4>
                    <p>Total Earned</p>
                </div>
                <div class="card">
                    <h4><?php if($tota != 0){ echo $tota ;}else{ echo '0.00';}?></h4>
                    <p>Withdrawed</p>
                </div>
                <div class="card">
                    <h4><?php if ($pend != 0){echo $pend;}else{
                                    echo '0.00';}?></h4>
                    <p>Pending</p>
                </div> 
                </div>
            </div>
            <h4 class="your_page_head" >Campaign History</h4>
            <hr class="hori">
            <div class="box">
                <div class="container">
                    
                    <div class="table-responsive t_box">
                        <table id="campaign" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Campaign Name</th>
                                    <th> Page Name</th>
                                    <th>Amount</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($fetch_amount as $value){?>
                                <tr>
                                    <td><?php echo $value['c_name'];?></td>
                                    <td><?php echo $value['p_name'];?></td>
                                    <td><?php echo $value['amount'];?></td>
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



<script>
    $(document).ready(function() {
    $('#campaign').DataTable();
} );

</script>




























