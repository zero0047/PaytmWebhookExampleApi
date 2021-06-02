<?php

require_once("./lib/config_paytm.php");
require_once("./lib/PaytmChecksum.php");
require_once("your-db-connection-file");


define("MERCHANT_MID", "your-merchant-id");
define("MERCHANT_KEY", "your-merchant-key");





if(!empty($_POST)){
	if(!empty($_POST['CHECKSUMHASH'])){
		// if(PaytmChecksum::verifySignature($_POST,MERCHANT_KEY,$_POST['CHECKSUMHASH'])){
			if(!empty($_POST['STATUS']) && $_POST['STATUS'] == 'TXN_SUCCESS'){
				echo "success";
				$mysql_qry = "INSERT INTO test(data) VALUES ('TXN_SUCCESS');";
	$response = array();
if($conn->query($mysql_qry)===TRUE){
	
	
}else{
	
	
}
			}else{
				echo "fail";
				$mysql_qry = "INSERT INTO test(data) VALUES ('TXN_SUCCESS');";
				$response = array();
				if($conn->query($mysql_qry)===TRUE){
	
						
}else{
	
	
}
			}
	}
	}else{
		echo "Checksum is empty";
		$mysql_qry = "INSERT INTO test(data) VALUES ('CHECKSUM_EMPTY');";
				$response = array();
				if($conn->query($mysql_qry)===TRUE){
	
						
}else{
	
	
}



	}
}else{
	echo "Post is empty";
	$mysql_qry = "INSERT INTO test(data) VALUES ('POST_EMPTY');";
				$response = array();
				if($conn->query($mysql_qry)===TRUE){
	
						
}else{
	
	// echo "Error: " . $mysql_qry . "<br>" . $conn->error;
}


}


?>


