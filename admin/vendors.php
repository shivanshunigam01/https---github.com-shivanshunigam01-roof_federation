<?php include 'header.php'; 
$agent_data = $db->vendors(); 
$i=1;?>
		   
<style>
.app {
	  display: inherit;
    padding: 3px 7px;
    width: 77px;
    text-align: center;
margin-top: 7px;}
</style>		
		<!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Vendors</h3>
              </div>
            </div>
			<div class="clearfix"></div>
			<div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
	<table id="agents_data" class="table table-bordered table-striped ">
  <thead>
      <tr>
	  <th>S.N.</th>
        <th>Name</th>  
        <?php if($_SESSION["admin_role"] == "admin") { ?>
        <th>Phone</th> 
        <th>Email</th>   
        <?php } ?>
        <th>City</th> 
		 
		</tr>
    </thead>
    <tbody>
	<?php foreach ($agent_data as $agent_datas) {  ?>
      <tr>
	  <td><?php echo $i; ?> </td> 
        <td><?php echo $agent_datas["name"]; ?></td> 
        <?php if($_SESSION["admin_role"] == "admin") { ?>
        <td><?php echo $agent_datas["phone"]; ?></td>
         <td><?php echo $agent_datas["email"]; ?></td>
         <?php } ?>
         <td><?php echo $agent_datas["city"]; ?></td>
		 
	  </tr>
      <?php $i++; } ?>
	</tbody>
  </table>
  </div>
			</div>
		 </div>
        </div>
        <!-- /page content -->
		<script>
	$(document).ready(function() {
		$('#agents_data').DataTable({
			dom: 'Bfrtip',
			buttons: [
        'excel', 'pdf'
    ]
		});
	} );
</script>
		<?php include 'footer.php'; ?>
