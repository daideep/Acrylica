<?php 

        $name = $_POST['name']; 
		$email = $_POST['email'];
		$website = $_POST['website'];
		$message = $_POST['message'];
		
		$To = 'daideep@tendril.in';
		$header = "From:".$To;
	 $mail_text = "A Mail From Acrylica \n\n\n\n 
	              Name : ".$name." \n\n
				  Email : ".$email." \n\n 
				  Website : ".$website." \n\n
				  Message : ".$message; 
				  
	    mail($mail_to,"Feedback form",$mail_text,$header);
		/*echo 11111;
		die();*/
		echo "mail sent.";

?>