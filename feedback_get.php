<?php
 if(isset($_POST['Submit']))
 {
	 $name = $_POST['Name'];
	 $companyname = $_POST['Cname'];
	 $address = $_POST['Address'];
	 $city = $_POST['City'];
	 $code = $_POST['Code'];
	 $state = $_POST['State'];
	 $country = $_POST['Country'];
	 $fax = $_POST['Fax'];
	 $website = $_POST['Website'];
	 $comment = $_POST['Comment'];
	 $item = $_POST['Item'];
	 
    $mail_to = "ddpatel27390@gmail.com";
	$header = "From:".$mail_to;
	$mail_text = "A Mail From Acrylica Website for Feedback \n\n\n\n 
	              Name : ".$name." \n\n
				  Company name : ".$companyname." \n\n 
				  Address : ".$address." \n\n
				  City : ".$city." \n\n 
				  Code : ".$code." \n\n
				  State : ".$state." \n\n
				  Country : ".$country." \n\n
				  Fax : ".$fax." \n\n
				  Website : ".$website." \n\n
				  Comment : ".$comment." \n\n
				  Item : ".$item;
				  
	
	mail($mail_to,"Feedback form",$mail_text,$header);			  
 }
?>