<?php include 'header.php'; 
$id = $_GET['id'];

$tipss = $db->tips()->where("id" , $id);
foreach($tipss as $tipsss){
	$list_pic = $tipsss['image']; 
}
if(isset($_POST['submit'])){
	$targetDir = $abspath."/tips_images/";
	$prop_imgs = basename($_FILES["c_img"]["name"]);
	$targetFilePath = $targetDir . $prop_imgs;
	$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
	move_uploaded_file($_FILES["c_img"]["tmp_name"], $targetFilePath);
	
	if($prop_imgs!=''){ 
			$img_url = 'https://rooffederation.com/tips_images/'.$prop_imgs;
		}else{ 
			$img_url = $list_pic;
		}
		
	
	$title = $_POST['title'];
	$cte = $_POST['cte'];
	$author = $_POST['author'];
	$info = $_POST['info'];
	$niche = $_POST['niche'];
	
	$m_title = $_POST['m_title'];
	$m_desc = $_POST['m_desc'];
	$alttag = $_POST['alttag'];
	$status = $_POST['status'];
	$new = strtotime(date("Y-m-d"));
    $crtd = date("l jS F Y ", $new);
    
	$tips = $db->tips[$id];
 
$data = array( 
	'image' => $img_url, 
	'alttag' => $alttag, 
	'title' => $title,
	'cte' => $cte,
	'author' => $author,
	'niche' => $niche,
	'content' => $info, 
	'm_title' => $m_title, 
	'm_desc' => $m_desc, 
	'status' => $status,
	'created' => $crtd,
);
$result = $tips->update($data);
}

$tipss = $db->tips()->where("id" , $id);
foreach($tipss as $tipsss){
	$img = $tipsss['image'];
	$title = $tipsss['title'];
	$author = $tipsss['author'];
	$content = $tipsss['content'];
	$status = $tipsss['status'];
	$nche = $tipsss['niche'];
	$ctes = $tipsss['cte'];
}
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

                      
                      <span class="section">Edit Blog</span>
						
						 <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Change Image:<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
						 
                        <input type="file" name="c_img" id="upload_pic" >
						 <img id="your_image" src="<?php echo $tipsss["image"]; ?>" alt="your image" > 
					   </div>
                      </div>
                      
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Image ALT Tag:
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
						<input id="" class="form-control col-md-7 col-xs-12" name="alttag" value ="<?php echo $tipsss["alttag"]; ?>" placeholder="" type="text" required>
                        </div>
                          
                        </div>
                        
                     	<div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Title:
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
						<input id="" class="form-control col-md-7 col-xs-12" name="title" value ="<?php echo $title; ?>" placeholder="" type="text" required>
                        </div>
                          
                          </div>
                           
                        
                        
						<div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Author:
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
						<input id="" class="form-control col-md-7 col-xs-12" name="author" value ="<?php echo $author; ?>" placeholder="" type="text" required>
                        </div>
                          
                        </div>
                        
                        
						
						<div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Content:
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
						<textarea rows="4" cols="50" class="form-control col-md-7 col-xs-12 ckeditor" id="content"   name="info" placeholder="" required><?php echo $content; ?>
						</textarea>
						
                        </div>
                          
                        </div>
						 
					<div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Meta Title:
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
						<input id="" class="form-control col-md-7 col-xs-12" name="m_title" value ="<?php echo $tipsss["m_title"]; ?>" placeholder="" type="text" required>
                        </div>
                          
                        </div>
                        
                        <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Meta Description:
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
						<input id="" class="form-control col-md-7 col-xs-12" name="m_desc" value ="<?php echo $tipsss["m_desc"]; ?>" placeholder="" type="text" required>
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
                          
                          <button id="send" type="submit" class="btn btn-success" name="submit">Update</button>
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
</script>
<script>
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