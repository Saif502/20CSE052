<!DOCTYPE html>
<html lang="en">
<head>
    <style>
		body{
			background-image: url('mmm.jpg');
		}
		h1{
			margin-top: 100px;
			color: blue;}
		
		table{
			color: white;
			background-color: black;
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
<body>	
	<center>
		<h1>Insert Form</h1>
		<form method="POST" action="insertData.php">
	    <table border="2">
		<tr>	
			<td><label>ID</label><br><br></td>
			<td><input type="text" placeholder="Enter id" name="f_id"> <br> <br></td>
        </tr>	
		<tr>	
			<td><label>Name</label><br><br></td>
			<td><input type="text" placeholder="Enter Name" name="f_nam"> <br> <br></td>
        </tr>	
		<tr>	
			<td><label>Designation</label><br><br></td>
			<td><input type="text" placeholder="Enter designation" name="f_des"> <br> <br></td>
        </tr>	
		<tr>	
			<td><label>Phone</label><br><br></td>
			<td><input type="text" placeholder="Enter Phone" name="f_phn"> <br> <br></td>
        </tr>	
		<tr>	
			<td><label>DOB</label><br><br></td>
			<td><input type="date" placeholder="Enter DOB" name="f_dob"> <br> <br></td>
        </tr>	

        </table>
        <br>
		<input style="background-color: blue;border:none;border-radius:10px;padding: 10px;color:white;" type="submit" value="INSERT">
		</form>
	</center>	
	
</body>
</html>