<?php include 'header.php'; 

if(isset($_POST['submit'])){
	
	$targetDir = $abspath."/tips_images/";
	$fileName = basename($_FILES["image"]["name"]);
	$targetFilePath = $targetDir . $fileName;
	$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
	move_uploaded_file($_FILES["image"]["tmp_name"], $targetFilePath);
	
	$img_url = 'https://rooffederation.com/tips_images/'.$fileName;
    
	$title = $_POST['title'];
	$cte = $_POST['cte'];
	$author = $_POST['author'];
	$niche = $_POST['niche'];
	$alttag = $_POST['alttag'];
	$mode = $_POST['mode'];
	$info = $_POST['info'];
	$stat = $_POST['status'];
	
	$m_title = $_POST['m_title'];
	$m_desc = $_POST['m_desc'];
	
	$slug = preg_replace('/[^a-z0-9]+/i', '-', trim(strtolower($_POST["title"])));
    $new = strtotime(date("Y-m-d"));
    $crtd = date("l jS F Y ", $new);
	
	$tips_manage = $db->tips();
 
$data = array( 
	'id' => '',
	'image' => $img_url, 
	'alttag' => $alttag, 
	'title' => $title,
	'cte' => $cte,
	'author' => $author,
	'niche' => $niche,
	'content' => $info, 
	'mode' => $mode, 
	'm_title' => $m_title, 
	'm_desc' => $m_desc, 
	'slug' => $slug,
	'status' => $stat,
	'created' => $crtd,
);
$result = $tips_manage->insert($data);
}; 	



?>
<style>
	#your_image {
    min-height: 200px;
    min-width: 200px;
	max-height: 200px;
    max-width: 200px;
    margin: 13px;
    border: 1px solid #000;
}
#auth_image {
	min-height: 200px;
    min-width: 200px;
	max-height: 200px;
    max-width: 200px;
    margin: 13px;
    border: 1px solid #000;
}

</style>   

		   <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
             
			<div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">

  
            <form class="form-horizontal form-label-left" action="" method="post" enctype='multipart/form-data'>

                      
                      <span class="section">Add New Blog</span>

					  <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name" >Image:
						
                        </label>
						
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="upload_pic" class=" col-md-7 col-xs-12" name="image" placeholder="" type="file" >
						  <img id="your_image" src="#" alt="your image" > 
                        </div>
                      </div>
                     
                     
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Image ALT Tag:
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
						<input id="" class="form-control col-md-7 col-xs-12" name="alttag" placeholder="" type="text" >
                        </div>
                          
                        </div>
                        
                        
					 
					  <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Title:
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
						<input id="" class="form-control col-md-7 col-xs-12" name="title" placeholder="" type="text" >
                        </div>
                          
                        </div>
                        
                         
                      
					  
						<div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Author:
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
						<input id="" class="form-control col-md-7 col-xs-12" name="author" placeholder="" type="text" >
                        </div>
                          
                        </div>
                        
                         
						 
					   	<div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Content:
                        </label>
						<div class="col-md-9 col-sm-9 col-xs-12">
						<textarea name="info" id="content" class="form-control ckeditor"></textarea>
						</textarea>
                        
                          </div>
                        </div>
					
					 
						  
                      
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Meta Title:
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
						<input id="" class="form-control col-md-7 col-xs-12" name="m_title" placeholder="" type="text" >
                        </div>
                          
                        </div>
                        
                        <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Meta Description:
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
						<input id="" class="form-control col-md-7 col-xs-12" name="m_desc" placeholder="" type="text" >
                        </div>
                          
                        </div>
                      
			   <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Status:<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select name="status"  class="form-control col-md-7 col-xs-12">
						   
							   <option value="active" <?php if($status=='active'){ echo 'selected="selected"'; } ?>>Active</option>
							   <option value="inactive" <?php if($status=='inactive'){ echo 'selected="selected"'; } ?>>Inactive</option>
							      
						  </select>
                        </div>
                      </div>
			
			
			  
			 
					  
					  <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                          <button type="reset" class="btn btn-primary">Reset</button>
                          <button id="send" type="submit" class="btn btn-success" name="submit">Submit</button>
                        </div>
                      </div>
					  </form>
					
					  </div>
			</div>
                    
					

			 
          </div>
        </div>
        <!-- /page content -->

	

		<script>
function readURL(input) {

  if (input.files && input.files[0]) {
    var reader = new FileReader();

    reader.onload = function(e) {
      $('#your_image').attr('src', e.target.result);
    }

    reader.readAsDataURL(input.files[0]);
  }
}

$("#upload_pic").change(function() {
  readURL(this);
});


function readURL1(input) {

  if (input.files && input.files[0]) {
    var reader = new FileReader();

    reader.onload = function(e) {
      $('#auth_image').attr('src', e.target.result);
    }

    reader.readAsDataURL(input.files[0]);
  }
}

$("#auth_pic").change(function() {
  readURL1(this);
});


</script>
<script>
 CKEDITOR.replace( 'content', {
  height: 300,
  filebrowserUploadUrl: "upload.php"
 });
</script>
		
	   <?php include 'footer.php'; ?>    