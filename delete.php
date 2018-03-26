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
        $sql="DELETE FROM info WHERE sl='$sl'";
        if($con->query($sql)===TRUE){
          echo "<div class='alert alert-danger'>
                <strong>Danger!</strong> Data Is Deleted.
              </div>";
         }
          else{
            echo "not delete".$sql.$con->error;
          }


        $con->close();
      ?>

    </div>
      <center><h3><a href="form.php">Show Data</a></h3></center>

    </body>
</html>
<?php include('footer.php'); ?>
