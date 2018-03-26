<?php
include('header.php');
?>
<!DOCTYPE html>
    <html lang="en">
    <head>
    </head>
    <body>

    <center><div class="container">
    	<h2>Student Mark List</h2>
      <br>        
      <table class="table table-condensed">
        <thead>
          <tr>
            <th>Sl</th>
            <th>Name</th>
            <th>Roll</th>
            <th>1st Sem</th>
            <th>2st Sem</th>
            <th>3rd Sem</th>
            <th>4th Sem</th>
            <th>5th Sem</th>
            <th>6th Sem</th>
            <th>7th Sem</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>

        	<?php
                  include ('db.php');
                  
                     $sql = "SELECT m.sl, m.roll,  m.1st_sem, m.2nd_sem, m.3rd_sem, m.4th_sem, m.5th_sem, m.6th_sem, m.7th_sem,   s.name FROM mark as m INNER JOIN info as s ON s.roll=m.roll";
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
                      echo "<td>".$row['1st_sem']."</td>";
                      echo "<td>".$row['2nd_sem']."</td>";
                      echo "<td>".$row['3rd_sem']."</td>";
                      echo "<td>".$row['4th_sem']."</td>";
                      echo "<td>".$row['5th_sem']."</td>";
                      echo "<td>".$row['6th_sem']."</td>";
                      echo "<td>".$row['7th_sem']."</td>";
                      echo "<td><a href='mark_update.php?sl=".$row['sl']."' class='btn-sm btn-danger'>Update</a></td>";    
                      echo "</tr>";
                      }
                     }
                   
                    ?> 


        </tbody>
      </table>
    </div>

    </body>
</html>
<?php include('footer.php'); ?>