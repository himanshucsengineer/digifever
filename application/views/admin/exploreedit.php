<style>
    .explore_edit{
        width:100%;
        height:auto;
        padding-top:2rem;
        padding-bottom:2rem;
    }
    .explore_edit img{
        width:250px;
        margin-bottom:1rem;
    }
    .explore_edit input[type="text"], input[type="file"], select{
        width:100%;
        height:auto;
        padding-top:.5rem;
        padding-bottom:.5rem;
        border:1px solid #cdcdcd;
        outline:none;
        padding-left:1rem;
        margin-bottom:1rem;
    }
    .explore_edit input[type="submit"]{
        width:10rem;
        height:auto;
        padding-top:.5rem;
        padding-bottom:.5rem;
        border:none;
        outline:none;
        background-color:green;
        color:white;
    }
    .hid{
        display:none;
    }

</style>

<?php 
    if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')   
        $url = "https://";   
    else  
        $url = "http://";   
        $url.= $_SERVER['HTTP_HOST'];   
        $url.= $_SERVER['REQUEST_URI'];    
        $_SESSION['url'] =$url;
       
        $parts = basename($url);
        $rerfe = explode("=",$parts);
    
    
    
    
    
    

?>
<div class="explore_edit">
    <div class="container">
        <h3>Update Explore</h3>
        <hr>
        <form action="<?php echo base_url();?>admin/exploreedit/update" method="post" enctype="multipart/form-data">
            <?php foreach($explore as $value){ if($value[id]== $rerfe[1]){?>
            <input class="hid" name="id" value="<?php echo $value['id']?>">
            <label>Name</label>
            <input type="text" name="name" placeholder="Enter Name or title" value="<?php echo $value['name']?>" >
            <label>Profile Link</label>
            <input type="text" name="link" placeholder="Enter Profile Link or Channel Link" value="<?php echo $value['link']?>" >
            <label>Select  Category</label>
            <select name="work_cate" >
                <option value="<?php echo $value['cate']?>"><?php echo $value['cate']?></option>
                <option value="brands">Brands</option>
                <option value="production">Production House</option>
                <option value="songs">Songs</option>
                <option value="movies">Movies</option>
                <option value="serial">Digital series and Tv serials</option>
                <option value="pr">Digital PR</option>
            </select>  
            <label>Poster Image</label></br>
            <img src="<?php echo $value['production']?>"></br>
            <label>Update Image</label>
            <input type="file" name="images" id="fileupload"  placeholder="Uploat Images" >
            <input type="submit" value="Submit" name="formSubmit">
            
            <?php }}?>
        </form>
    </div> 
</div>    





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