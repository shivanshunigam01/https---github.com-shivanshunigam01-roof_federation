<?php include 'header.php'; 
$id = $_GET['id'];
if(isset($_POST['submit'])){
	 $name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['mobile'];
$whatsapp = $_POST['whatsapp'];
$adhar = $_POST['adhar'];
$pan = $_POST['pan'];
$bank_name = $_POST['bank_name'];
$account_num = $_POST['account_num'];
$ifsc = $_POST['ifsc'];
$pin = $_POST['pin'];
$address = $_POST['address'];
$loan_type_id = $_POST['loan_type'];
$laon_amount_id = $_POST['loan_amount'];
$itr_id = $_POST['itr']; 
$status = $_POST['status']; 
			
	$agent_manage = $db->loan[$id]; 
	
$data = array(  
		'name'               => $name,
	'email'               => $email	,
	'mobile'            => $phone,		
	'whatsapp'          => $whatsapp,	
	'adhar'         => $adhar,
	'pan'             => $pan,
	'bank_name'            => $bank_name,
	'account_num'           => $account_num,	
	'ifsc'      => $ifsc,	
    'pincode'      => $pin,		
	'address'             => $address,
	'loan_type'        => $loan_type_id,
	'loan_amt'     => $laon_amount_id,
	'itr'     => $itr_id, 
	'status'     => $status, 
	'created'          => date('Y-m-d H:i:s')
);
$result = $agent_manage->update($data); 
}; 	

$prop_data = $db->loan->where('id' , $id);
foreach($prop_data as $lead){
	$name = $lead["name"];
				$email = $lead["email"];
				$mobile = $lead["mobile"];
				$whatsapp = $lead["whatsapp"];
				$adhar = $lead["adhar"];
				$pan = $lead["pan"];
				$bank_name = $lead["bank_name"];
				$account_num = $lead["account_num"];
				$ifsc = $lead["ifsc"];
				$pincode = $lead["pincode"];
				$address = $lead["address"];
				$loan_type = $lead["loan_type"];
				$loan_amt = $lead["loan_amt"];
				$itr = $lead["itr"]; 
				$created = $lead["created"]; 
				$status = $lead["status"]; 
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
    #my_image {
		min-height: 90px;
        min-width: 180px;
		max-height: 90px;
        max-width: 180px;
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
                      <span class="section">Edit User</span>   

<div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Name:
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
						<input id="" class="form-control col-md-7 col-xs-12" value="<?php echo $name; ?>" name="name" placeholder="" type="text">
                        </div>
                          
                        </div>
						
					  <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Email:
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
						<input id="" class="form-control col-md-7 col-xs-12"  value="<?php echo $email; ?>" name="email" placeholder="" type="text" required>
                        </div>
                          
                        </div>
                      
					  <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Mobile :
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
						<input id="" class="form-control col-md-7 col-xs-12"  value="<?php echo $mobile; ?>" name="mobile" placeholder="" type="text" required>
                        </div>
                          
                        </div>
						
						<div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">WhatsApp No. :
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
						<input id="" class="form-control col-md-7 col-xs-12"  value="<?php echo $whatsapp; ?>"  name="whatsapp" placeholder="" type="text" required>
                        </div>
                          
                        </div>
						
						
						
					   <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Adhar No.:
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
						<input id="" class="form-control col-md-7 col-xs-12" value="<?php echo $adhar; ?>"  name="adhar" placeholder="" type="text" required>
                        </div>
                          
                        </div>
						
						<div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Pan No.:
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
						<input id="" class="form-control col-md-7 col-xs-12"  value="<?php echo $pan; ?>" name="pan" placeholder="" type="text" required>
                        </div>
                          
                        </div>
					  
						<div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Bank Name:
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
						<input id="" class="form-control col-md-7 col-xs-12"  value="<?php echo $bank_name; ?>" name="bank_name" placeholder="" type="text" required>
                        </div>
                          
                        </div> 
							
				
						<div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Address:
                        </label>
						<div class="col-md-9 col-sm-9 col-xs-12">
						<textarea rows="4" cols="50" class="form-control col-md-7 col-xs-12 " id="editor1" name="address"> <?php echo $address; ?> </textarea>
						 
                        
                          </div>
                        </div>
						
						 <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Account No.:
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
						<input id="" class="form-control col-md-7 col-xs-12" value="<?php echo $account_num; ?>" name="account_num" placeholder="" type="text" required>
                        </div>
                          
                        </div>
						
						

                        <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Ifsc Code:
                        </label>
						<div class="col-md-9 col-sm-9 col-xs-12">
						<textarea rows="4" cols="50" class="form-control col-md-7 col-xs-12 " id="editor1" name="ifsc"> <?php echo $ifsc; ?> </textarea>
						 
                        
                          </div>
                        </div>


						<div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name" >Pincode:
						</label>
						<div class="col-md-6 col-sm-6 ">							 
						<input id="" class="form-control col-md-7 col-xs-12" name="pin" value="<?php echo $pincode; ?>"  placeholder="" type="text" required>						                      
					   </div>					   					
					  
                      </div>
					  
					  
					    <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Loan Type:<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                           <select class="half form-control" id="loan_type_id" name="loan_type" required="">
						<option value="Personal_loan" <?php if($loan_type=='Personal_loan'){ echo 'selected="selected"'; } ?>>Personal Loan</option>
						<option value="Business_loan" <?php if($loan_type=='Business_loan'){ echo 'selected="selected"'; } ?>>Business Loan</option>
						<option value="Mark_Sheet_loan" <?php if($loan_type=='Mark_Sheet_loan'){ echo 'selected="selected"'; } ?>>Mark-Sheet Loan</option>
						<option value="Home_loan" <?php if($loan_type=='Home_loan'){ echo 'selected="selected"'; } ?>>Home Loan</option>
						<option value="Education_loan"  <?php if($loan_type=='Education_loan'){ echo 'selected="selected"'; } ?>>Education Loan</option>
						<option value="Loan_against_property"  <?php if($loan_type=='Loan_against_property'){ echo 'selected="selected"'; } ?>>Loan Against Property</option>
						<option value="Commercial_vehicle_loan"  <?php if($loan_type=='Commercial_vehicle_loan'){ echo 'selected="selected"'; } ?>>Commercial Vehicle Loan</option>
					</select>
                        </div>
                      </div> 
						
						 
						   <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Loan Amount:<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                           <select id="laon_amount_id" class="half form-control" name="loan_amount" required="">
                 <option value="150000" <?php if($loan_amt=='150000'){ echo 'selected="selected"'; } ?>>150000</option>
                 <option value="200000" <?php if($loan_amt=='200000'){ echo 'selected="selected"'; } ?>>200000</option>
                 <option value="250000" <?php if($loan_amt=='250000'){ echo 'selected="selected"'; } ?>>250000</option>
                 <option value="300000" <?php if($loan_amt=='300000'){ echo 'selected="selected"'; } ?>>300000</option>
                 <option value="400000" <?php if($loan_amt=='400000'){ echo 'selected="selected"'; } ?>>400000</option>
                 <option value="450000" <?php if($loan_amt=='450000'){ echo 'selected="selected"'; } ?>>450000</option>
                 <option value="500000" <?php if($loan_amt=='500000'){ echo 'selected="selected"'; } ?>>500000</option>
                 <option value="550000" <?php if($loan_amt=='550000'){ echo 'selected="selected"'; } ?>>550000</option>
                 <option value="600000" <?php if($loan_amt=='600000'){ echo 'selected="selected"'; } ?>>600000</option>
                 <option value="650000" <?php if($loan_amt=='650000'){ echo 'selected="selected"'; } ?>>650000</option>
                 <option value="700000" <?php if($loan_amt=='700000'){ echo 'selected="selected"'; } ?>>700000</option>
                 <option value="750000" <?php if($loan_amt=='750000'){ echo 'selected="selected"'; } ?>>750000</option>
                 <option value="800000" <?php if($loan_amt=='800000'){ echo 'selected="selected"'; } ?>>800000</option>
                 <option value="850000" <?php if($loan_amt=='850000'){ echo 'selected="selected"'; } ?>>850000</option>
                 <option value="900000" <?php if($loan_amt=='900000'){ echo 'selected="selected"'; } ?>>900000</option>
                 <option value="1000000" <?php if($loan_amt=='1000000'){ echo 'selected="selected"'; } ?>>1000000</option>
                 <option value="1050000" <?php if($loan_amt=='1050000'){ echo 'selected="selected"'; } ?>>1050000</option>
                 <option value="1100000" <?php if($loan_amt=='1100000'){ echo 'selected="selected"'; } ?>>1100000</option>
                 <option value="1150000" <?php if($loan_amt=='1150000'){ echo 'selected="selected"'; } ?>>1150000</option>
                 <option value="1200000" <?php if($loan_amt=='1200000'){ echo 'selected="selected"'; } ?>>1200000</option>
                 <option value="1250000" <?php if($loan_amt=='1250000'){ echo 'selected="selected"'; } ?>>1250000</option>
                 <option value="1300000" <?php if($loan_amt=='1300000'){ echo 'selected="selected"'; } ?>>1300000</option>
                 <option value="1350000" <?php if($loan_amt=='1350000'){ echo 'selected="selected"'; } ?>>1350000</option>
                 <option value="1400000" <?php if($loan_amt=='1400000'){ echo 'selected="selected"'; } ?>>1400000</option>
                 <option value="1450000" <?php if($loan_amt=='1450000'){ echo 'selected="selected"'; } ?>>1450000</option>
                 <option value="1500000" <?php if($loan_amt=='1500000'){ echo 'selected="selected"'; } ?>>1500000</option>
            </select>
                        </div>
                      </div>	  
						
			    
					<div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">ITR:<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                           <select name="itr"  class="form-control col-md-7 col-xs-12">						   
							   <option value="yes"  <?php if($itr=='yes'){ echo 'selected="selected"'; } ?>>Yes</option>
							   <option value="no" <?php if($itr=='no'){ echo 'selected="selected"'; } ?>>No</option>							      
						  </select>
                        </div>
                      </div>	
						
						
						  <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Status:<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select name="status"  class="form-control col-md-7 col-xs-12">
						   
							   <option value="Active" <?php if($status=='Active'){ echo 'selected="selected"'; } ?>>Active</option>
							   <option value="Pending" <?php if($status=='Pending'){ echo 'selected="selected"'; } ?>>Pending</option>
							   <option value="Reject" <?php if($status=='Reject'){ echo 'selected="selected"'; } ?>>Reject</option>
							      
						  </select>
                        </div>
                      </div>  
						 
					   
                      <div class="form-group">
					  <br>
                        <div class="col-md-6 col-md-offset-3" style="margin-top:15px;"> 
                          <button id="send" type="submit" class="btn btn-success" name="submit">Update</button>
                        </div>
                      </div>
					  </form>
					
					  </div>
			</div>  </div>
        </div>
         
	   <?php include 'footer.php'; ?>    