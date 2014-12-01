<?php

//var_dump("ALL FIELDS ARE EMPTY");
if(empty($_POST['name']) || empty($_POST['email']) || empty($_POST['subject']) || empty($_POST['message'])) {
	die('Error: Missing variables');
}else{

    $name=$_POST['name'];
	$email=$_POST['email'];
	$subject=$_POST['subject'];
	$message=$_POST['message'];
	
	/** Put Your Email address here. **/
	
	$to= 'info@themeapt.com'; 

	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";

	$subject = $subject;
	$body='You have got a new message from the contact form on your website.'."<br><br>";
	$body.='Name: '.$name."<br>";
	$body.='Email: '.$email."<br>";
	
	$body.='Message: '."<br>".$message."<br>";
			
	if(@mail($to, $subject, $body, $headers)) {
		echo "success";
	}else{
		echo "failed"; 
	}
	
}

?>