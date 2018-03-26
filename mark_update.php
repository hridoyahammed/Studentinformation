<?php
include('header.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>

</head>
<body>

<div class="container">
<?php
include('db.php');
$sl=$_GET['sl'];

$sql="SELECT * FROM mark WHERE sl='$sl'";
$result = $con->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    ?>
    <center>
		<form action="mark_updated.php" method="POST">
			Roll:<br><input type="number" name="roll" value="<?php echo $row['roll']; ?>"><br>
			GPA:<br><input type="text" name="gpa" value="<?php echo $row['gpa']; ?>"><br>
			 <input type="hidden" name="sl" value="<?php echo $row['sl']; ?>">
			 <input type="submit" name="submit" value="Update">
		</form>
	</center>
<?php
    }
 }


$con->close();
?>