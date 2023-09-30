<?php include 'header.php';  $tips = $db->tips(); $i =1;?>
		   
		   <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Blogs <a href="<?php echo "tips_add.php"; ?>" class="btn btn-success">Add New Blog</a></h3>
              </div>
            </div>
			<div class="clearfix"></div>
			<div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
	<table class="table table-bordered table-striped ">
  <thead>
      <tr>
	  <th>S.N.</th>
        <th>Image</th> 
        <th>Title</th>
		<th>Author</th>
        <th>Status</th>
		<th>Action</th></tr>
    </thead>
    <tbody>
	<?php foreach ($tips as $tipss) { ?>
      <tr> <td><?php echo $i; ?> </td>
        <td><img src="<?php echo $tipss["image"]; ?>" style="width:50px; height:40px;"></td> 
        <td><?php echo $tipss["title"]; ?></td>
     
        <td><?php echo $tipss["author"]; ?></td>
		<td><?php echo ucfirst($tipss["status"]); ?></td>
		
		<td><a href="<?php echo $site_url; ?>tips_edit.php?id=<?php echo $tipss["id"]; ?>"><i class="fa fa-edit"></i></a>&nbsp;/&nbsp;
			<a class="delete_cnfm" href="<?php echo $site_url; ?>tips_del.php?id=<?php echo $tipss["id"]; ?>"><i class="fa fa-trash"></i></a></td>
	  </tr>
      <?php $i++; } ?>
	</tbody>
  </table>
  </div>
			</div>
		 </div>
        </div>
        <!-- /page content -->
		<?php include 'footer.php'; ?>
