<?php
include('header.php');
if(isset($_POST['submit'])){


include('db.php');
$roll = $_POST["roll"];
$gpa = $_POST["gpa"];
$sl = $_POST["sl"];

$sql= "UPDATE mark SET roll='$roll', gpa='$gpa' WHERE sl='$sl'";

if ($con->query($sql) === TRUE) {
    echo "<h1>updated successfully</h1>";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}


$con->close();

}
?>
<?php include('footer.php'); ?>