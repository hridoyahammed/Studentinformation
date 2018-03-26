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

$sql="SELECT * FROM info WHERE sl='$sl'";
$result = $con->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    ?>
    <center>
<form action="updated.php" method="POST">
	Name:<br><input type="text" name="name" value="<?php echo $row['name']; ?>"><br>
	Roll:<br><input type="number" name="roll" value="<?php echo $row['roll']; ?>"><br>
	Reg:<br><input type="number" name="reg" value="<?php echo $row['reg']; ?>"><br>
	Dep:<br><input type="text" name="dep" value="<?php echo $row['dep']; ?>"><br>
	Shift:<br><input type="text" name="shift" value="<?php echo $row['shift']; ?>"><br>
    Email:<br><input type="email" name="email" value="<?php echo $row['email']; ?>"><br>
    Male&nbsp<input type="radio" name="sex" value="<?php echo $row['sex']; ?>">
    Female&nbsp<input type="radio" name="sex" value="<?php echo $row['sex']; ?>"><br>
    C&nbsp<input type="checkbox" name="c" value="<?php echo $row['skill']; ?>">
    PHP&nbsp<input type="checkbox" name="php" value="<?php echo $row['skill']; ?>"><br>
    <input type="hidden" name="sl" value="<?php echo $row['sl']; ?>">
	<input type="submit" name="submit" value="Update">
	
</form>
</center>
<?php
    }
 }


$con->close();
?>




</div>

</body>
</html>
<?php include('footer.php'); ?>
