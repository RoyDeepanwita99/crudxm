

<?php
	include "dbconnect.php";
	
	$s="SELECT * FROM product";
	$result=$conn->query($s);
	
	//echo "<h1>adhhd</h1>";
	/*
	while($r = $result->fetch_assoc())
	{
		$name=$r['name'];
		echo $name;
		echo "ajgdsdjk";
	}
	*/
	//echo $r['email'];
	//echo gettype($r);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<style>
		table, td, th{
			border-collapse:collapse;
			border:2px solid black;
		}
		table{
			width:80%;
			margin: 0 auto;
		}
		td, th{
			padding:15px;
			text-align:center;
		}
		
	</style>
</head>
<body style="background-color:#f1f2f6">	
	
		<center>
			<h1> Product</h1>
			<table>
				<tr style="background-color:#686de0;">
					<th>ID</th>
					<th>Name</th>
					<th>Description</th>
					<th>Purchase Prize</th>
					<th>Quantity</th>
					<th>EDIT</th>
					<th>Delete</th>
				</tr>
				<?php
				//$i=1;
				 while($r = $result->fetch_assoc())
				{
					$idd=$r['id'];
					$nam=$r['name'];
					$des=$r['description'];
					$pur=$r['purchaseprize'];
					$quan=$r['quantity'];
					echo "<tr>";
						echo "<td>". $idd . "</td>";
						echo "<td>". $nam . "</td>";
						echo "<td>". $des . "</td>";
						echo "<td>". $pur . "</td>";
						echo "<td>". $quan . "</td>";
						echo "<td> <a href='editForm.php?edit_id=$idd'><button style='background-color:#e056fd;border-radius:20px;'>Edit</button></a></td>";
						echo "<td> <a href='delete.php?del_id=$idd'><button style='background-color:red;border-radius:20px;'>Delete</button></a></td>";
					echo "</tr>";
				}
				?>
				
				<tr>
					<td colspan="7"><a href="insertform.php" ><button style="background-color:#6ab04c; border-radius:20px;" >Insert Record</button></a></td>
				</tr>
			</table>
			
			<a href="logout.php"><button style="background-color:#e056fd; border-radius:15px;"> Log out</button></a>
		</center>
	
</body>
</html> 