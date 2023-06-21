<?php
	include "dbconnect.php";
	
	$s = "SELECT * FROM teacher";
	$result = $conn->query($s);
	
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
		body{
			background-image: url('mmm.jpg');
		}
		form{
			position: absolute;
			margin-top: 100px;
		}
		h1{
			
			color: blue;
		    font-size: 50px;
		}
		table, td, th{
			border-collapse:collapse;
			border:2px solid black;
		}
		table{
			width:80%;
			margin: 0 auto;
		}
		td,th{
			padding:15px;
			text-align:center;
		}
		
	</style>
</head>
<body>	
		<center>
			<h1>Teacher</h1>
			<table>
				<tr>
					<th>ID</th>
					<th>Name</th>
					<th>Designation</th>
					<th>Phone</th>
					<th>DOB</th>
					<th>Edit</th>
					<th>Delete</th>
				</tr>
				<?php
				//$i=1;
				while($r = $result->fetch_assoc())
				{
					$idd=$r['ID'];
					$nam=$r['Name'];
					$des=$r['Designation'];
					$phn=$r['Phone'];
					$dob=$r['DOB'];
					echo "<tr>";
						echo "<td>". $idd . "</td>";
						echo "<td>". $nam . "</td>";
						echo "<td>". $des . "</td>";
						echo "<td>". $phn . "</td>";
						echo "<td>". $dob . "</td>";
						echo "<td> <a style='text-decoration:none;color:green'; href='edit.php?edit_id=$idd'>EDIT</a></td>";
						echo "<td> <a style='text-decoration:none;color:red'; href='delete.php?del_id=$idd'>DELETE</a></td>";
					echo "</tr>";
				}
				?>
				
				<tr>
					<th colspan="7"><a href="insertForm.php">Insert Record</a></th>
				</tr>
			</table>
		</center>
	
</body>
</html>




