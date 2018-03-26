<?php
include('header.php');
if(isset($_POST['submit'])){


include('db.php');
$name = $_POST["name"];
$roll = $_POST["roll"];
$reg = $_POST["reg"];
$dep = $_POST["dep"];
$shift = $_POST["shift"];
$email = $_POST["email"];
$sex = $_POST["sex"];
$sl = $_POST["sl"];

if(isset($_POST['c']))
		    $skill1='c';
		else
		     $skill1='';
		if(isset($_POST['php']))
		    $skill2='php';
		else
		    $skill2='';

		$skill= $skill1." " .$skill2;


$sql= "UPDATE info SET name='$name', roll='$roll', reg='$reg', dep='$dep', shift='$shift', email='$email', sex='$sex', skill='$skill' WHERE sl='$sl'";

if ($con->query($sql) === TRUE) {
    echo "<h1>updated successfully</h1>";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}


$con->close();

}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<center>
		<h2><a href="form.php">Show Data</a></h2>
	</center>
</body>
</html>
<?php include('footer.php'); ?>