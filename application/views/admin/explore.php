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
    .campaign input[type="file"], input[type="text"], select{
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
<div class="campaign">
    <div class="container">
        <?php 
                if($this->session->flashdata('dashboard_error'))
                {
                  echo '<p class="text-success">'.$this->session->flashdata('dashboard_error').'</p>';
                }
                ?>
        <h3>Production Houses</h3>
        <form action="<?php echo base_url();?>admin/explore/production" method="post" enctype="multipart/form-data">
            <input type="text" name="name" placeholder="Enter Name or title" required>
            <input type="text" name="link" placeholder="Enter Profile Link or Channel Link" required>
            <select name="work_cate" required>
                <option value="">Please Select Category</option>
                <option value="brands">Brands</option>
                <option value="production">Production House</option>
                <option value="songs">Songs</option>
                <option value="movies">Movies</option>
                <option value="serial">Digital series and Tv serials</option>
                <option value="pr">Digital PR</option>
            </select>    
            <input type="file" name="pro" id="fileupload"  placeholder="Uploat Images" required>
            <input type="submit" value="Submit" name="formSubmit">
        </form>
        
      
        
    </div>
</div> 

<hr>



  
  
  
  <script language="javascript" type="text/javascript">

$(function () {
    $("#fileupload").change(function () {
        $("#dvPreview").html("");
        var regex = /^([a-zA-Z0-9\s_\\.\-:])+(.jpg|.jpeg|.png)$/;
        if (regex.test($(this).val().toLowerCase())) {
            if ($.browser.msie && parseFloat(jQuery.browser.version) <= 9.0) {
                $("#dvPreview").show();
                $("#dvPreview")[0].filters.item("DXImageTransform.Microsoft.AlphaImageLoader").src = $(this).val();
            }
            else {
                if (typeof (FileReader) != "undefined") {
                    $("#dvPreview").show();
                    $("#dvPreview").append("<img class='thunbnail_image images_preview'/>");
                    var reader = new FileReader();
                    reader.onload = function (e) {
                        $("#dvPreview img").attr("src", e.target.result);
                    }
                    reader.readAsDataURL($(this)[0].files[0]);
                } else {
                    alert("This browser does not support FileReader.");
                }
            }
        } else {
            alert("Please upload a valid file.");
        }
    });
});
</script>  