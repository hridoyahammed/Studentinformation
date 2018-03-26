<?php include('header.php') ?>

<?php
	include "db.php";
	if(isset($_POST["submit"])){
		$roll=   $_POST['roll'];
		$fast_sem = $_POST['fast_sem'];
		$secend_sem = $_POST['secend_sem'];
		$thrd_sem = $_POST['thrd_sem'];
		$fourth_sem = $_POST['fourth_sem'];
		$fiveth_sem = $_POST['fiveth_sem'];
		$sixth_sem = $_POST['sixth_sem'];
		$seventh_sem = $_POST['seventh_sem'];
		

	$sql = "INSERT INTO mark(roll,1st_sem,2nd_sem,3rd_sem,4th_sem,5th_sem,6th_sem,7th_sem)VALUES('$roll','$fast_sem','$secend_sem','$thrd_sem','$fourth_sem','$fiveth_sem','$sixth_sem','$seventh_sem')";
        
		if($con->query($sql)===TRUE){
		echo "done";
		}
		else{
			echo "Error: " . $sql . "<br>" . $con->error;
		}
	}
?>
<style type="text/css" >
	.div{
		align-content: center;
	}
</style>
<body>
<div class="div" style="width:100%; padding:5px; text-align: center;">

	<form action="" method="post">

 	 <table align="center" class="table">
 	 	<thead>
 	 		<tr>
 	 			<th>Roll</th>
 	 			<th>1st Semister</th>
 	 			<th>2st Semister</th>
 	 			<th>3rd Semister</th>
 	 			<th>4th Semister</th>
 	 			<th>5th Semister</th>
 	 			<th>6th Semister</th>
 	 			<th>7th Semister</th>
 	 			

 	 		</tr>
 	 	</thead>

<?php
			if(isset($_GET['sl'])){
				include('db.php');
				$id=$_GET['sl'];
				$SQL="SELECT * FROM info WHERE sl='$id'";
				$show=$con->query($SQL);
				if($show->num_rows > 0){
					while($row=$show->fetch_assoc()){
						?>

         <tr>
         	<td>
         		<input class="form-control" type="text" name="roll" value="<?php echo $row['roll']; ?>" >
         	</td>

	        
	       	<td>
	       		<input class="form-control" type="text" name="fast_sem">
	       	</td>

	       	<td>
	       		<input class="form-control" type="text" name="secend_sem">
	       	</td>

	       	<td>
	       		<input class="form-control" type="text" name="thrd_sem"  >
	       	</td>

	       	<td>
	       		<input class="form-control" type="text" name="fourth_sem">
	       	</td>

	       	<td>
	       		<input class="form-control" type="text" name="fiveth_sem" >
	       	</td>

	       	<td>
	       		<input class="form-control" type="text" name="sixth_sem" >
	       	</td>

	       	<td>
	       		<input class="form-control" type="text" name="seventh_sem">
	       	</td>

	       	
	    </tr>
<?php
						
					}
				}
			}
		?>

  
	        


     <tr>
         
         <td><input class="btn btn-success" type="submit" name="submit" value="Submit"></td>
     </tr> 
  </table> 
</form>
</div>
</body>
<?php include('footer.php') ?>