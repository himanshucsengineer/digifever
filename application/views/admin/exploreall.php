<link href="<?php echo base_url(); ?>admin/assets/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>admin/assets/css/core.css" rel="stylesheet" type="text/css" />

<script src="<?php echo base_url(); ?>admin/assets/js/jquery.dataTables.min.js"></script>


<style>

.plus_button{
    width:3rem;
    float:right;
    color:white;
    background-color:#007bff;
    border:none;
    outline:none;
    font-size:22px;
    font-weight:600;
    margin-top:2rem;
    margin-bottom:2rem;
    margin-right:1rem;
    transition:all .3s ease-in-out;;
}
.plus_button:hover{
   opacity:.8;
    transform:scale(1.06);
}
   a.edit {
    display: none;
}
table img{
    width:120px ;
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



<div class="all_post">
    <div class="container">
        <h3>Brands Data</h3><hr>
        
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
             <a href="<?php echo base_url();?>admin/explore"><button class="plus_button">+</button></a>
              <table id="lowinventory" data-order='[[ 0, "desc" ]]'  style="width:100%" class="table table-striped table-bordered table_shop_custom display">
                <thead>
                <tr> 
                
                      <th >Sr. No.</th>
                    <th>Category</th>
                    
                    <th>Name</th>
                    <th>Profile Link</th>
                   
                    <th>Edit</th>
                    <th>Action</th>

                  </tr>

                </thead>
                <tbody>
                    <?php foreach($explore as $value){ if($value['cate']=="brands"){?>
                    <tr>
                        <td><?php echo $value['id']?></td>
                        <td><?php echo $value['cate']?></td>
                      
                        <td><?php echo $value['name']?></td>
                        <td><a href="<?php echo $value['link']?>" target="_blank">View Page</a></td>
                        <th><a  href="<?php echo base_url();?>admin/exploreedit?id=<?php echo $value['id']?>">Edit</a></th>
                        <td><a class="delete_sliders" data-id="<?php echo $value['id']?>" style="color: red;cursor: pointer;" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
                    </tr>
                    <?php }}?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
       
    </div>
</div>

<hr>

<div class="all_post">
    <div class="container">
        <h3>Production Data</h3><hr>

       
        <div class="row">
          <div class="col-md-12">

            <div class="card-box table-responsive" >
             <a href="<?php echo base_url();?>admin/explore"><button class="plus_button">+</button></a>
              <table id="brand" data-order='[[ 0, "desc" ]]'  style="width:100%" class="table table-striped table-bordered table_shop_custom display">
                <thead>
                <tr> 
                
                      <th >Sr. No.</th>
                    <th>Category</th>
                   
                    <th>Name</th>
                    <th>Profile Link</th>
                    
                   <th>Edit</th>
                    
                    <th>Action</th>

                  </tr>

                </thead>
                <tbody>
                    <?php foreach($explore as $value){ if($value['cate']=="production"){?>
                    <tr>
                        <td><?php echo $value['id']?></td>
                        <td><?php echo $value['cate']?></td>
                      
                        <td><?php echo $value['name']?></td>
                        <td><a href="<?php echo $value['link']?>" target="_blank">View Page</a></td>
                        <th><a  href="<?php echo base_url();?>admin/exploreedit?id=<?php echo $value['id']?>">Edit</a></th>
                        <td><a class="delete_sliders" data-id="<?php echo $value['id']?>" style="color: red;cursor: pointer;" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
                    </tr>
                    <?php }}?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
       
    </div>
</div>

<hr>

<div class="all_post">
    <div class="container">
        <h3>Songs Data</h3><hr>

       
        <div class="row">
          <div class="col-md-12">

            <div class="card-box table-responsive" >
             <a href="<?php echo base_url();?>admin/explore"><button class="plus_button">+</button></a>
              <table id="song" data-order='[[ 0, "desc" ]]'  style="width:100%" class="table table-striped table-bordered table_shop_custom display">
                <thead>
                <tr> 
                
                      <th >Sr. No.</th>
                    <th>Category</th>
                   
                    <th>Name</th>
                    <th>Profile Link</th>
                    <th>Edit</th>
                    
                    <th>Action</th>

                  </tr>

                </thead>
                <tbody>
                    <?php foreach($explore as $value){ if($value['cate']=="songs"){?>
                    <tr>
                        <td><?php echo $value['id']?></td>
                        <td><?php echo $value['cate']?></td>
                      
                        <td><?php echo $value['name']?></td>
                        <td><a href="<?php echo $value['link']?>" target="_blank">View Page</a></td>
                        <th><a  href="<?php echo base_url();?>admin/exploreedit?id=<?php echo $value['id']?>">Edit</a></th>
                        <td><a class="delete_sliders" data-id="<?php echo $value['id']?>" style="color: red;cursor: pointer;" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
                    </tr>
                    <?php }}?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
       
    </div>
</div>

<div class="all_post">
    <div class="container">
        <h3>Movie Data</h3><hr>

       
        <div class="row">
          <div class="col-md-12">

            <div class="card-box table-responsive" >
             <a href="<?php echo base_url();?>admin/explore"><button class="plus_button">+</button></a>
              <table id="movie" data-order='[[ 0, "desc" ]]'  style="width:100%" class="table table-striped table-bordered table_shop_custom display">
                <thead>
                <tr> 
                
                      <th >Sr. No.</th>
                    <th>Category</th>
                 
                    
                    <th>Name</th>
                    <th>Profile Link</th>
                   <th>Edit</th>
                    
                    <th>Action</th>

                  </tr>

                </thead>
                <tbody>
                    <?php foreach($explore as $value){ if($value['cate']=="movies"){?>
                    <tr>
                        <td><?php echo $value['id']?></td>
                        <td><?php echo $value['cate']?></td>
                      
                        <td><?php echo $value['name']?></td>
                        <td><a href="<?php echo $value['link']?>" target="_blank">View Page</a></td>
                        <th><a  href="<?php echo base_url();?>admin/exploreedit?id=<?php echo $value['id']?>">Edit</a></th>
                        <td><a class="delete_sliders" data-id="<?php echo $value['id']?>" style="color: red;cursor: pointer;" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
                    </tr>
                    <?php }}?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
       
    </div>
</div>
<hr>
<div class="all_post">
    <div class="container">
        <h3>Serial Data</h3><hr>

       
        <div class="row">
          <div class="col-md-12">

            <div class="card-box table-responsive" >
             <a href="<?php echo base_url();?>admin/explore"><button class="plus_button">+</button></a>
              <table id="serial" data-order='[[ 0, "desc" ]]'  style="width:100%" class="table table-striped table-bordered table_shop_custom display">
                <thead>
                <tr> 
                
                      <th >Sr. No.</th>
                    <th>Category</th>
                  
                    <th>Name</th>
                    <th>Profile Link</th>
                    
                   <th>Edit</th>
                    
                    <th>Action</th>

                  </tr>

                </thead>
                <tbody>
                    <?php foreach($explore as $value){ if($value['cate']=="serial"){?>
                    <tr>
                        <td><?php echo $value['id']?></td>
                        <td><?php echo $value['cate']?></td>
                        
                        <td><?php echo $value['name']?></td>
                        <td><a href="<?php echo $value['link']?>" target="_blank">View Page</a></td>
                        <th><a  href="<?php echo base_url();?>admin/exploreedit?id=<?php echo $value['id']?>">Edit</a></th>
                        <td><a class="delete_sliders" data-id="<?php echo $value['id']?>" style="color: red;cursor: pointer;" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
                    </tr>
                    <?php }}?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
       
    </div>
</div>
<hr>
<div class="all_post">
    <div class="container">
        <h3>PR Data</h3><hr>

       
        <div class="row">
          <div class="col-md-12">

            <div class="card-box table-responsive" >
             <a href="<?php echo base_url();?>admin/explore"><button class="plus_button">+</button></a>
              <table id="pr" data-order='[[ 0, "desc" ]]'  style="width:100%" class="table table-striped table-bordered table_shop_custom display">
                <thead>
                <tr> 
                
                      <th >Sr. No.</th>
                    <th>Category</th>
                
                    <th>Name</th>
                    <th>Profile Link</th>
                    
                   <th>Edit</th>
                    
                    <th>Action</th>

                  </tr>

                </thead>
                <tbody>
                    <?php foreach($explore as $value){ if($value['cate']=="pr"){?>
                    <tr>
                        <td><?php echo $value['id']?></td>
                        <td><?php echo $value['cate']?></td>
                       
                        <td><?php echo $value['name']?></td>
                        <td><a href="<?php echo $value['link']?>" target="_blank">View Page</a></td>
                        <th><a  href="<?php echo base_url();?>admin/exploreedit?id=<?php echo $value['id']?>">Edit</a></th>
                        <td><a class="delete_sliders" data-id="<?php echo $value['id']?>" style="color: red;cursor: pointer;" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
                    </tr>
                    <?php }}?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
       
    </div>
</div>


<div id="deletePurchaseModal" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
    <?php echo form_open(base_url('admin/exploreall/deleteexploredetail'), array('method'=>'post'));?>
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
    $('#lowinventory').DataTable();
$('#brand').DataTable();
$('#song').DataTable();
$('#movie').DataTable();
$('#serial').DataTable();
$('#pr').DataTable();

    $(document).on('click','.delete_sliders',function(){

     $('.deletesliderId').val($(this).attr('data-id'));
        $('#deletePurchaseModal').modal('show');

    });

});

  </script>
  
  
  
  