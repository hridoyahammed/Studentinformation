<?php
	 
	if(isset($_POST["submit"])){
		include ("db.php");
		include('uplode.php');
		$name = $_POST["name"];
		$roll = $_POST["roll"];
		$reg = $_POST["reg"];
		$dep = $_POST["dep"];
		$shift = $_POST["shift"];
		$email = $_POST["email"];
		
		$password = $_POST["password"];
		$sex=$_POST['sex'];
		

		if(isset($_POST['c']))
		    $skill1='c';
		else
		     $skill1='';
		if(isset($_POST['php']))
		    $skill2='php';
		else
		    $skill2='';

		$skill= $skill1." " .$skill2;



		$sql = "INSERT INTO info(name,roll,reg,dep,shift,email,password,sex,skill,photo) VALUES('$name','$roll','$reg','$dep','$shift','$email','$password','$sex','$skill','$photo')";

		if($con->query($sql)===TRUE){
			echo "insert success";
		}
		else{
			echo "not insert";
		}
	}
?>