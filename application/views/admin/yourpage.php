
<link href="<?php echo base_url(); ?>admin/assets/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>admin/assets/css/core.css" rel="stylesheet" type="text/css" />

<script src="<?php echo base_url(); ?>admin/assets/js/jquery.dataTables.min.js"></script>


<style type="text/css">

a.edit {
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
.buu{
    width:15rem;
    color:white !important;
    background-color:rgb( 239, 69, 84 );
    border:none;
    outline:none !important;
    padding-top:1rem;
    padding-bottom:1rem;
    font-size:14px;
    margin-bottom:1rem;
}
.insi_img{
    width:100px !important;
}

</style>

<div class="all_post">
    <div class="container">
        <h3>Page Request</h3><hr>
        
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
<?php 
                if($this->session->flashdata('dashboard_error'))
                {
                  echo '<p class="text-success">'.$this->session->flashdata('dashboard_error').'</p>';
                }
                ?>
            <div class="card-box table-responsive" >
             
              <table id="lowinventory" data-order='[[ 0, "desc" ]]'  style="width:100%" class="table table-striped table-bordered table_shop_custom display">
                <thead>
                <tr>    
                <th style="width: 15%">Sr.No.</th>
                    <th >User Id</th>
            
                    <th>Page name</th>
                    <th>Page Link</th>
                    <th>Page Size</th>
                    <th>Page Category</th>
                    <th>Demographic Insight</th>
                    <th>Reach Inshight</th>
                    <th>Status</th>
                    <th>Choose Action</th>
                    <th>Action</th>

                    </form>
                  </tr>

                </thead>
                <tbody>
                    <?php foreach($history as $value){ ?>
                    <?php $sts=$value['account_status'];?>
                    <form action="yourpage/update_page/<?php echo $value['id'] ;?>" method="Post">
                                            <tr>
                                                <td><?php echo $value['id'] ;?></td>
                                                <td><?php echo $value['email'] ;?></td>
                                                <td><?php echo $value['p_name'] ;?></td>
                                                <td><a href="<?php echo $value['p_link'] ;?>" target="_blank">View Page</a></td>
                                                <td><?php echo $value['p_size'] ;?></td>
                                                <td><?php echo $value['p_cate'] ;?></td>
                                                <td><img class="insi_img" src="<?php echo $value['demo'] ;?>"></td>
                                                <td><img class="insi_img" src="<?php echo $value['reach'] ;?>"></td>
                                                <td><?php echo ($value['account_status'] == false)? "<span class='text-white badge badge-warning'>Not Approved</span>" : "<span class='text-white badge badge-success'>$sts</span>" ;?></td>
                                                
                                                <td><select  name="action">
                                                    <option value="">Select Action</option>
                                                    
                                                    <option value="Approved">Approved</option>
                                                    <option value="Pending">Pending</option>
                                                    <option value="Decline">Decline</option>
                                                    </select>
                                                </td>
                                                <td><button class="btn btn-success " >Change Status</button></td>
                                            </tr>
                    </form>
                    <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
       
    </div>
</div>




<!--Delete-->

   <!--Delete-->




