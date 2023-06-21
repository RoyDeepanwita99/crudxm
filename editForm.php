<?php
	include "dbconnect.php";
	$id=$_GET['edit_id'];
	$sql="SELECT * FROM product where id='$id'";
	$result=$conn->query($sql);
	
	$arr=$result->fetch_assoc();
	
	$nam=$arr['name'];
	$des=$arr['description'];
	$pur=$arr['purchaseprize'];
	$quan=$arr['quantity'];
?>


<!DOCTYPE html>
<html lang="en">
<body>	
	<center style="background-color:#95afc0;">
		<h1>Edit Form</h1>
		<form method="POST" action="edit.php?d_id=<?php echo $id ?>">
			<label>Name</label>
			<input  style="background-color:#dff9fb; border-radius:15px;"type="text" value="<?php echo $nam ?>" name="f_name"> <br> <br>
			<label>Description</label>
			<input style="background-color:#dff9fb; border-radius:15px;" type="text" value="<?php echo $des ?>" name="f_des"> <br> <br>
			<label>Purchase Prize</label>
			<input style="background-color:#dff9fb; border-radius:15px;" type="text"  value="<?php echo $pur ?>" name="f_pur" > <br> <br>
			<label>Quantity</label>
			<input style="background-color:#dff9fb; border-radius:15px;" type="text"  value="<?php echo $quan?>" name="f_quan" > <br> <br>
			<input  style="background-color:#e056fd; border-radius:15px;"type="submit" value="update">
		</form>
	</center>	
	
</body>
