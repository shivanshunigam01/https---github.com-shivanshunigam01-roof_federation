<?php include 'header.php'; 
 
    $agent_data = $db->users()->order("id desc"); 
 




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
                <h3>Users</h3>
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
        
        <th>Phone</th> 
        <th>Email</th>  
        
        <th>City</th> 
        <th>Date</th> 
         <th>PAN Number</th> 
		<th>See Details</th>
		</tr>
    </thead>
    <tbody>
	<?php foreach ($agent_data as $agent_datas) {  ?>
      <tr>
	  <td><?php echo $i; ?> </td> 
         
        <td><?php echo $agent_datas["name"]; ?></td>  
        <td><?php echo $agent_datas["phone"]; ?></td>
         <td><?php echo $agent_datas["email"]; ?></td>
          
         <td><?php echo $agent_datas["city"]; ?></td>
         <td><?php echo $agent_datas["created"]; ?></td>
         <td><?php echo $agent_datas["pan"]; ?></td>
		<td>
			<a   href="<?php echo $site_url; ?>users_donate.php?id=<?php echo $agent_datas["phone"]; ?>" class="btn btn-primary" >See Donation</a></td>
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
