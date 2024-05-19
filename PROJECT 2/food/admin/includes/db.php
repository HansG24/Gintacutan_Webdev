<?php 
	
	$servername = "localhost";
  $hostusername = "root";
  $hostpassword = ""; // Replace with actual password or use environment variables
  $dbname = "mfors";
  $port = 3306;

$db =new mysqli($servername, $hostusername, $hostpassword, $dbname, $port);
	
	if($db->connect_errno) {
		
		echo "PLEASE BEAR WITH US AS WE ARE CURRENTLY WORKING ON OUR SITE!!!! PLEASE COME BACK LATER";
		
	}
	
?>