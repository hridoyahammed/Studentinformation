<?php
	$server = "localhost";
	$user =  "root";
	$pass = "";
	$db = "stinfo";

	 $con = new mysqli($server,$user,$pass,$db);
	 if($con->connect_error){
		 echo "not succes". $con->connect_error;
	 }
?>