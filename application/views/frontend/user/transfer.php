
    <title>Digifever|| Account Transfer</title>
    
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

<style>
.table-striped tbody tr:nth-of-type(odd){
    background-color:#f4f8fb !important;
}

</style>

<div class="user_desh">
    
    <div class="right">
        <div class="container">
            <h4 class="your_page_head">Payment Request</h4>
            <div class="box">
                  
                <div class="container">
                    <div class="pro">
                        <?php echo form_open(base_url('frontend/user/transfer/add_bank'), array('id'=>'transferform','method'=>'POST'));?>
                        <div class="row">
                            <div class="card1">
                                <input class="mob_view"  type="number" name="amount" placeholder="Enter Your Amount">
                            </div>
                            <div class="card2">
                                <button class="req_but" name="formSubmit" type="submit">Request</button>
                            </div>    
                        </div>    
                          <?php echo form_close(); ?>
                    </div>
                </div>
            </div>
            <h4 class="your_page_head" >Account History</h4>
                          <hr class="hori">
            <div class="box">
                <div class="container">
                    
                    <div class="t_box">
                          
                          <div class="table-responsive ">
                            <table id="campaign" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th>Amount</th>
                                        <th>Status</th>
                                       
                                    </tr>
                                </thead>
                                <tbody>
                                <?php foreach($history as $value){ if($value['email']==$email){?>
                                    <tr>
                                        <td><?php echo $value['account_date']?></td>
                                        <td><?php echo $value['amount']?></td>
                                        <td><?php  echo $value['account_status']?></td>
                                    </tr>
                                <?php }}?>    
                                </tbody>
                            </table>
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

$("#transferform").submit(function(event){
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

<script>
    $(document).ready(function() {
    $('#campaign').DataTable();
} );

</script>