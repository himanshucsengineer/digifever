<link href="<?php echo base_url(); ?>admin/assets/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>admin/assets/css/core.css" rel="stylesheet" type="text/css" />

<script src="<?php echo base_url(); ?>admin/assets/js/jquery.dataTables.min.js"></script>


<style>
    .campaign{
        width:100%;
        height:auto;
    }
    .campaign h3{
        margin-bottom:2rem;
    }
    .campaign input[type="email"], input[type="text"], input[type="number"]{
        width:100%;
        height:auto;
        padding-top:.5rem;
        padding-bottom:.5rem;
        border:1px solid #cdcdcd;
        outline:none;
        padding-left:1rem;
        margin-bottom:1rem;
    }
    .campaign input[type="submit"]{
        width:10rem;
        height:auto;
        padding-top:.5rem;
        padding-bottom:.5rem;
        border:none;
        outline:none;
        background-color:green;
        color:white;
    }a.edit {
    display: none;
}


.btn-group, .btn-group-vertical {
    float: right;
}

.btn {
    color: #4e73df;
}
#lowinventory_filter label{
    color:grey;
    font-size:15px;
}
#lowinventory_filter input[type=search]{
    border: 1px solid grey;
    outline:none;
    padding:5px;
    font-size:15px;
    margin-right:5px;
}

</style>
<div class="campaign">
    <div class="container">
        <?php 
                if($this->session->flashdata('dashboard_error'))
                {
                  echo '<p class="text-success">'.$this->session->flashdata('dashboard_error').'</p>';
                }
                ?>
        <h3>Campaign</h3>
        <form action="campaign/insert_data" method="post" id="referform">
        <input list="em" type="email" name="email" placeholder="Enter Email">
        
        <datalist id="em">
            <?php  foreach($history as $value){ ?>
            <option value="<?php echo $value['email']; ?>">
            <?php } ?>
        </datalist>  
        
        <input type="text" name="p_name" placeholder="Enter Page Name">
        
        <input type="text" name="c_name" placeholder="Enter Campaign Name">
        <input type="number" name="amount" placeholder="Enter Amount">
        <input type="submit" value="Submit">
        </form>
        
       
        
        
    </div>
</div> 

<hr>


<div class="all_post">
    <div class="container">
        <h3>Campaign Data</h3><hr>
        
        <?php
      if($this->session->flashdata('success'))
      {
      echo '<div class="alert alert-success">'.$this->session->flashdata('success').'</div>';
      }
      else if($this->session->flashdata('error'))
      {
      echo '<div class="alert alert-danger">'.$this->session->flashdata('error').'</div>';
      }


      ?>

       
        <div class="row">
          <div class="col-md-12">

            <div class="card-box table-responsive" >
             
              <table id="lowinventory" data-order='[[ 0, "desc" ]]'  style="width:100%" class="table table-striped table-bordered table_shop_custom display">
                <thead>
                <tr> 
                
                      <th >Sr. No.</th>
                    <th>Email</th>
                    <th>Page Name</th>
                    <th>Campaign name</th>
                    <th>Amount</th>
                    
                   
                    
                    <th>Action</th>

                  </tr>

                </thead>
                <tbody>

                </tbody>
              </table>
            </div>
          </div>
        </div>
       
    </div>
</div>


<div id="deletePurchaseModal" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
    <?php echo form_open(base_url('admin/campaign/deletecampdetail'), array('method'=>'post'));?>
    <div class="modal-content">
    <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">�</button>
    <h4 class="modal-title">Delete Course</h4>
    </div>
    <div class="modal-body">
    <div class="row">
    <div class="col-md-12">
    <input type="hidden" class="deletesliderId" name="deletesliderId"/>
    <h4><b>Do you really want to Delete this Course ?</b></h4>
    </div>
    </div>
    </div>
    <div class="modal-footer">
    <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
    <input type="submit" class="btn btn-info" name="deleteslider" value="Delete">
    </div>
    </div>
    <?php echo form_close(); ?>
    </div>
    </div>


<script>
  $(document).ready(function() {
    $('#lowinventory').DataTable( {
        "ajax": "<?php echo base_url(); ?>admin/campaign/addinventory_api"
    } );


    $(document).on('click','.delete_sliders',function(){

     $('.deletesliderId').val($(this).attr('data-id'));
        $('#deletePurchaseModal').modal('show');

    });

});

  </script>