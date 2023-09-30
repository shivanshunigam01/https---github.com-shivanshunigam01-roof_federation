<?php include 'header.php'; 
 $hgfh = $_GET["id"];
$agent_data = $db->donate()->where("phone" , $hgfh)->order("id desc");

 




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
        <th>Donation Amount</th>  
        
        <th>Txn Id</th>  
        
        <th>Status</th> 
        <th>Date</th>  
		</tr>
    </thead>
    <tbody>
	<?php foreach ($agent_data as $agent_datas) {  ?>
      <tr>
	  <td><?php echo $i; ?> </td> 
         
        <td>Rs. <?php echo $agent_datas["amount"]; ?></td>  
        <td><?php echo $agent_datas["txn_id"]; ?></td> 
          
         <td><?php echo $agent_datas["status"]; ?></td>
         <td><?php echo $agent_datas["created"]; ?></td> 
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
