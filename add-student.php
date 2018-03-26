<?php
include('header.php'); ?>
<div style="width:60%; padding:10px;">
<h2>Add new student</h2>

<form action="" method="post">
  <table class="table table-stripped">
     <tr>
         <th>Name</th>
         <td><input class="form-control" type="text" name="sname" ></td>
     </tr>
    <tr>
         <th>Roll</th>
         <td><input class="form-control" type="number" name="roll" required ></td>
     </tr>
    <tr>
         <th>Reg</th>
         <td><input class="form-control" type="number" name="reg" ></td>
     </tr>
    <tr>
         <th>Dept</th>
         <td><input class="form-control" type="text" name="dept" ></td>
     </tr>
    <tr>
         <th>Phone</th>
         <td><input class="form-control" type="text" name="phn" ></td>
     </tr>
    <tr>
         <th>Sex</th>
         <td>
             <input type="radio" name="sex" value="male">Male
             <input type="radio" name="sex" value="female">Female
         </td>
     </tr>
     
     <tr>
         <th>Skill</th>
         <td>
         <div class="form-check form-check-inline">
  <label class="form-check-label">
    <input type="checkbox" class="form-check-input" name="c" value="c">C
  </label>
</div>
<div class="form-check form-check-inline">
  <label class="form-check-label">
    <input type="checkbox" class="form-check-input" name="php" value="php">PHP
  </label>
</div>
         
         </td>
     </tr>
     
     <tr>
         <td>&nbsp;</td>
         <td><input class="btn btn-success" type="submit" name="submit" value="Save"></td>
     </tr>
      
      
  </table>  
    
    
</form>
</div>

<?php 
if(isset($_POST['submit']))
{
include('connection.php');
$name=$_POST['sname'];
$dept=$_POST['dept'];
$roll=$_POST['roll'];
$reg=$_POST['reg'];
$phn=$_POST['phn'];
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
    
$sql= "INSERT INTO students (sname, dept, roll, reg, phn, sex, skill)
VALUES ('$name', '$dept', '$roll', '$reg', '$phn', '$sex', '$skill')";

if ($conn->query($sql) === TRUE) {
    
   echo "<div class='alert alert-success'>
  <strong>Success!</strong> New record created successfully.
</div>";
 
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

    
}







include('footer.php'); ?>