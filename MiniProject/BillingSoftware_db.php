<?php
	
	@define("SOFTWARE","BILLING SOFTWARE");
	date_default_timezone_set('Asia/Kolkata');
	$date = date('Y/m/d H:i:s a');
	$time = date('Y/m/d');
	$timestamp = time();	
	if($_SERVER['SERVER_NAME']=="localhost")
	{		
	$hostname = "localhost";	
	
	$dbusername = "root";	
	$dbpassword = "";	
	$dbname="miniproject";
	}else
	{	
	$hostname = "localhost";
	$dbusername = "xcvatqlv_billingSoftware";
	$dbpassword = "3zh7ApCjp4F&";	
	$dbname="xcvatqlv_billing_software";
	}	
	$conn = mysqli_connect($hostname, $dbusername, $dbpassword,$dbname);	
	if (!$conn)
 	{	
	die("Connection failed: " . mysqli_connect_error());	
	}else
	{	
	
		echo "";	
	}
		
	
	

?>