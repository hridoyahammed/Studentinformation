<?php
include('header.php');
?>
<!DOCTYPE html>
    <html lang="en">
    <head>
    </head>
    <body>

    <center>
      <div class="table-responsive">
      <h2><b><u>List Of Students</u></b></h2><br> 
      <form action="" method="POST">  
        <input type="text" name="dep" placeholder="Deparment">AND
        <input type="number" name="roll" placeholder="Roll">
        <input class="btn btn-success " type="submit" name="submit" value="Search"> 
      </form>
      <br> 

      <table class="table">
        <thead>
          <tr>
            <th>Sl</th>
            <th>Name</th>
            <th>Roll</th>
            <th>Reg</th>
            <th>Dep</th>
            <th>Shift</th>
            <th>Email</th>
            <th>Sex</th>
            <th>Skill</th>
            <th>Photo</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>

              <?php
                  include ('db.php');
                  if(isset($_POST["submit"])){
                    $dep = $_POST["dep"];
                    $roll = $_POST["roll"];
                  }
                  if(isset($_POST["submit"])){
                  $sql = "SELECT * FROM info WHERE dep ='$dep' OR roll='$roll' ";
                    $result = $con->query($sql);
                    $sn=0;
                    if ($result->num_rows > 0) {
                      // output data of each row
                      while($row = $result->fetch_assoc()) {
                      $sn=$sn+1;

                      echo "<tr>";
                      echo "<td>".$sn."</td>";
                      echo "<td>".$row['name']."</td>";
                      echo "<td>".$row['roll']."</td>";
                      echo "<td>".$row['reg']."</td>";
                      echo "<td>".$row['dep']."</td>";
                      echo "<td>".$row['shift']."</td>";
                      echo "<td>".$row['email']."</td>";
                      echo "<td>".$row['sex']."</td>";
                      echo "<td>".$row['skill']."</td>";
                      echo "<td><a href='delete.php?sl=".$row['sl']."' class='btn-sm btn-danger'>Delete</a> | <a href='update.php?sl=".$row['sl']."' class='btn-sm btn-primary'>Update</a> | <a href='mark.php?sl=".$row['roll']."' class='btn-sm btn-success'>Mark</a> </td>";     
                      echo "</tr>";

                    }
                  }
                }else{
                  $sql = "SELECT * FROM info";
                    $result = $con->query($sql);
                    $sn=0;
                    if ($result->num_rows > 0) {
                      // output data of each row
                      while($row = $result->fetch_assoc()) {
                      $sn=$sn+1;

                      echo "<tr>";
                      echo "<td>".$sn."</td>";
                      echo "<td>".$row['name']."</td>";
                      echo "<td>".$row['roll']."</td>";
                      echo "<td>".$row['reg']."</td>";
                      echo "<td>".$row['dep']."</td>";
                      echo "<td>".$row['shift']."</td>";
                      echo "<td>".$row['email']."</td>";
                      echo "<td>".$row['sex']."</td>";
                      echo "<td>".$row['skill']."</td>";
                      echo "<td><img width='50px' height='50px' src='uplodes/".$row['photo']."'></td>";
                      echo "<td><a href='delete.php?sl=".$row['sl']."' class='btn-sm btn-danger'>Delete</a> | <a href='update.php?sl=".$row['sl']."' class='btn-sm btn-primary'>Update</a> | <a href='mark.php?sl=".$row['sl']."' class='btn-sm btn-success'>Mark</a> </td>";     
                      echo "</tr>";

                    }
                  }
                }
              ?>

          
        </tbody>
      </table>
    </div>

    </body>
</html>
<?php include('footer.php'); ?>
