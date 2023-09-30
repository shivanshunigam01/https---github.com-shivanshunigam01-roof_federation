<? session_start();
$tid = $_SESSION['trxn_id'] = date('y')."_".rand(11111111111111,99999999999999); 

$center_id = $_GET['token'];
$cncn = $_GET['status'];
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Phone Pe Checkout</title>
	<script src="jquery-3.7.0.js" type="text/javascript" ></script>
	<style>
	.thanks{
	        text-align: center;
            font-size: 28px;
            padding-bottom:20px;
	}
	.thanku_section{
	    text-align: center;
	    padding-top:100px;
	}
	.bk{
	    background: #fff;
    width: 20%;
    margin: 0 auto;
    margin-top: 20px;
    cursor: pointer;
    padding: 10px;
    border: 1px solid;
    font-weight: 600;
    border-radius: 10px;
	}
	</style>
</head>
<body style="background:#dff0d8;">
	
	
	<?
	$url = "https://rooffederation.com/pay/index.php"; 
	//$url = "http://localhost/vip/manali/manali/reservation.php"; 

	$amount = 0;
	if(isset( $_GET['amount'] )) $amount =  $_GET['amount'];

	if(isset( $_GET['status'] ) ) {
		function executeCurlPhonePeStatus($apiURL, $xverify, $mId, $txnid) {
			$apiURL = $apiURL . $mId . "/" . $txnid ;
			$ch = curl_init($apiURL);
			curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
			curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);
			curl_setopt($ch, CURLOPT_TIMEOUT, 10);

			curl_setopt($ch, CURLOPT_HTTPHEADER, array(
				'Content-Type: application/json', 
				'X-MERCHANT-ID:'.$mId,
				'X-VERIFY: '. $xverify)
			);
			$jsonResponse = curl_exec($ch); 

			if (!curl_errno($ch)) {
				return json_decode($jsonResponse, true);
			} else {
				return false;
			}
		}


		function phonepeStatusCalculateChecksum($merchantId, $txnid, $key, $index){
			$phonepestring = "/pg/v1/status/" . $merchantId . "/" . $txnid . $key ;
			$hashstring = hash('sha256', $phonepestring) ;
			$hashedstring = $hashstring . "###" . $index ;
			return $hashedstring ;
		}

	///        $this->load->model('extension/payment/phonepePG');
	   //     $this->load->language('extension/payment/phonepePG');

			$json = array("success" => false, "response" => '', 'message' => " Contact Admin ");
			 
			
			if($_POST['code']=="PAYMENT_SUCCESS"){
				
				
				date_default_timezone_set('Asia/Kolkata');
				$paid_amt = $_POST['amount'] / 100;
				$transactionId = $_POST['transactionId'];
				$pay_status = $_POST['code'];
				$today = date("F j, Y, g:i a");
				
				include "../admin/config.php";
				
				$agent_managse = $db->donate();
	            
            $datad = array( 
            	'id'               => '',
            	'phone'            => $cncn,		
            	'amount'          => $paid_amt,	
            	'txn_id'         => $transactionId,
            	'status'             => $pay_status,
            	'created'             => $today,
            );
            $resulsdt = $agent_managse->insert($datad); 
            
            
            
            // get details of users
            $hghghj = $db->users()->where("phone" , $cncn);
            foreach($hghghj as $hghghjs) {
               $to =  $hghghjs["email"];
               $pan =  $hghghjs["pan"];
               $name =  $hghghjs["name"];
               $city =  $hghghjs["city"];
               $phone =  $hghghjs["phone"];
            }
            
            
            
             $subject = 'Payment Successfull';

    $req='Payment Successfull';

    $message ='<html>

    <head>

      <title>Payment Successfull</title>

    </head>

    <body>

    Dear '.$name.' , <br>
    <b>8G URN -</b> AAETR7431AF2023L<br>
    <b>Your PAN No.</b> "'.$pan.'"<br>
    
    <p>I hope this email finds you well. I am writing to inform you that we have successfully received your payment. Thank you for completing the payment process.</p>     
    
    <p>Received with Thanks from '.$name.' , '.$city.', '.$phone.' the sum of <b>Rupees '.$paid_amt.'</b> by online. Dated '.$today.'.</p>

    

    Warm regards,<br>
    <b>Roof Federation Team</b>
    </body>

    </html>';

    $headers  = 'MIME-Version: 1.0' . "\r\n";

    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

    $headers  .= "From: $req <info@rooffederation.com>" . "\r\n";

    mail($to, $subject, $message, $headers);
            
            
				 ?>
            
            <div class="thanku_section">
				<div class="icon"><img src="https://rooffederation.com/uploads/success.gif"></div>
				<div class="thanks">Your payment processed successfully.</div>
				<div class="thanks2">Thankyou for payment with <b>Roof Federation</b></div> 
				<div class="bhdd"><a href="https://rooffederation.com/" class="btn btn-info">Back to Website</a></div>
			</div>
            
            
            <?php
            
			} else {
				//failed payment
			}
			
		}



	if(@$amount == 0  ) exit;
		


	function phonepeCalculateChecksum($params, $key, $index){    
		$phonepestring = $params . "/pg/v1/pay" .  $key ;
		$hashstring = hash('sha256', $phonepestring) ;
		$hashedstring = $hashstring . "###" . $index ;
		return $hashedstring ;
	  }


	  function pushEvents($apiURL, $requestParamList, $xVerify ) {
			$responseParamList = array();
			
			$jsonData = json_encode($requestParamList);
			
			$encodedPayload = base64_encode($jsonData);

			$reqParams = array("request" => $encodedPayload);

			$postData = json_encode($reqParams);

			$ch = curl_init($apiURL);
			curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
			curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
			curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);
			curl_setopt($ch, CURLOPT_TIMEOUT, 10);

			curl_setopt($ch, CURLOPT_HTTPHEADER, array(
				'Content-Type: application/json', 
				'Content-Length: ' . strlen($postData),
				'X-VERIFY: '. $xVerify , 
				//'X-OPENCART-PLUGIN: ' . '1.0.1'
			)
			);
			$jsonResponse = curl_exec($ch);   

			if (!curl_errno($ch)) {
				return json_decode($jsonResponse, true);
			} else {
				return false;
			}
		}

		function executeCurlPhonePe($apiURL, $requestParamList, $xverify) {
		$responseParamList = array();
			
			$JsonData = json_encode($requestParamList);
			
			$encodedPayload = base64_encode($JsonData);
	 
			$reqParams = array("request" => $encodedPayload);

			$postData = json_encode($reqParams);
		
		$ch = curl_init($apiURL);
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
		curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
		curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);
		curl_setopt($ch, CURLOPT_TIMEOUT, 10);

		curl_setopt($ch, CURLOPT_HTTPHEADER, array(
		  'Content-Type: application/json', 
		  'Content-Length: ' . strlen($postData),
			'X-VERIFY: '. $xverify ,
		  'X-MERCHANT-DOMAIN: https://'. $_SERVER['SERVER_NAME'],
			'X-OPENCART-PLUGIN: ' . '1.0.0'

		)
		);
		$jsonResponse = curl_exec($ch);   

		if (!curl_errno($ch)) {
		  return json_decode($jsonResponse, true);
		} else {
		  return false;
		}
	  }

	function pay($amount , $url,$center_id )
			{
				if($amount>0)
					{
		$tid = $_SESSION['trxn_id']; 
		$mid = $parameters["merchantId"] = "ROOFONLINE"; 
		$parameters["merchantTransactionId"] = $tid; 
		$parameters["amount"] = $amount*100; 
		$parameters["merchantUserId"] = "M123456789";
		$parameters["redirectUrl"] = $url."?status=".$center_id;
		$parameters["redirectMode"] = "POST";
		$parameters["callbackUrl"] = $url."?status=cancel";
		$parameters["paymentInstrument"] = array ( "type" => "PAY_PAGE");
				
			$myJSON = json_encode($parameters);
			$encodedPayload = base64_encode($myJSON);
			$reqParams = array("request" => $encodedPayload);
			

			$xverify = phonepeCalculateChecksum($encodedPayload,"39b9f991-a32e-4f5b-8cac-8db4a457077c",1); 
				
			
			$eventParameters = array(
							"eventType"         => "PAY_BUTTON_CLICKED_ON_MERCHANT_CHECKOUT",
							"platform"          => "Opencart", 
							"platformVersion"   => "3.0",
							"pluginVersion"     => "1.0.1",
							"flowType"          => "B2B_PG",
							"merchantId"        => $mid,
							"transactionId"     => $tid,
							"amount"            => $amount*100,
							"code"              => "",
							"groupingKey"       => $mid."-$tid",
							"network"           => "",
							"userOperatingSystem"   => $_SERVER['HTTP_USER_AGENT']
						   );

		  $rs = pushEvents("https://api.phonepe.com/apis/hermes/plugin/ingest-event", $eventParameters, $xverify );    

		$txn_url  = "https://api.phonepe.com/apis/hermes/pg/v1/pay"; 

		$scriptType =   "phonepe.js";

		$resParams = executeCurlPhonePe($txn_url,$parameters,$xverify);

		
		return  $resParams['data']['instrumentResponse']['redirectInfo']['url']; 

					}
			}

		$purl = pay( $amount , $url ,$center_id ); 
		
	?>
	<script src="phonepe.js" type="text/javascript"></script>	
	<script type="text/javascript">

		$(document).ready(function(){ 
			//if ("$purl".indexOf("cart")>=0) {      window.location.replace("$purl");   }
			const callback = response => {
				console.log(response,"HEY GETTING CALLBACK");
			 /*

			  if(response == "CONCLUDED"){
				var img = document.createElement('img');
				img.src = "loading.gif";
				img.classList.add("pp_pay_loader");
				var html = img;
				jQuery("body").addClass('pp_loader');
				jQuery("#content").append(html);

				window.location.replace("<?=$url?>?status=pending");
			  }
			  else
			  {
				var img = document.createElement('img');
				img.src = "loader.gif";
				img.classList.add("pp_pay_loader");
				var html = img;
				jQuery("body").addClass('pp_loader');
				jQuery("#content").append(html);

				window.location.replace("<?=$url?>?status=cancel");
			  }
			  */
						  }
			location.href="<?=$purl?>";
			//window.PhonePe.transact({ tokenUrl:  "<?=$purl?>", callback }); 
	  });   

	</script>
	
</body>

</html>