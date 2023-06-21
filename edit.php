<?php

include "dbconnect.php";

$id = $_GET['edit_id'];
//echo $id;
$sql="SELECT * FROM teacher where ID='$id'";
$result = $conn->query($sql);
$arr = $result->fetch_assoc();
$ID =$arr['ID'];
$name =$arr['Name'];
$des=$arr['Designation'];
$phn =$arr['Phone'];
$dob =$arr['DOB'];

?>

<!DOCTYPE html>
<html lang="en">
<body>	
<head>
    <style>
		body{
			background-image: url('mmm.jpg');
		}
		h1{
			margin-top:100px;
			color: blue;}
		
		table{
			width:25%;
			margin: 0 auto;
		}
		td,th{
			padding:15px;
			border: 0px;
			text-align:center;
		}
		
	</style>
</head>	
	<center>
		<h1>Update Form</h1>
		<form method="POST" action="update.php">

		<table border="2">
			<tr>	
				<td><label>ID</label><br><br></td>
				<td><input type="text" value=<?php echo $ID ?> name="f_id"> <br> <br></td>
			</tr>	
			<tr>	
				<td><label>Name</label><br><br></td>
				<td><input type="text" value=<?php echo $name ?> name="f_nam"> <br> <br></td>
			</tr>	
			<tr>	
				<td><label>Designation</label><br><br></td>
				<td><input type="text"  value=<?php echo $des ?> name="f_des" > <br> <br></td>
			</tr>	
			<tr>	
				<td><label>Phone</label><br><br></td>
				<td><input type="text" value=<?php echo $phn ?> name="f_phn"> <br> <br></td>
			</tr>	
			<tr>	
				<td><label>DOB</label><br><br></td>
				<td><input type="date" value=<?php echo $dob ?> name="f_dob">  <br> <br></td>
			</tr>	
        </table>
        <br>
		   <input type="submit" value="UPDATE">
		</form>
	</center>	
	
</body>
</html>








