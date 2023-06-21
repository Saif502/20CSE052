
<?php
include "dbconnect.php";

$id=$_POST['f_id'];
$nam=$_POST['f_nam'];
$des=$_POST['f_des'];
$phn=$_POST['f_phn'];
$dob=$_POST['f_dob'];

$sql = "INSERT INTO teacher (ID,Name,Designation,Phone,DOB) 
		VALUES ('$id', '$nam', '$des', '$phn','$add')";

		
		if($conn->query($sql))
		{
			header('location:index.php');
			//echo "data inserted successfully";
			
		}
		else
		{
			echo "insertion failed";
		}
		
		
		$conn->close();
?>

