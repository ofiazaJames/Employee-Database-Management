<?php 

include("connection.php");
if(isset($_POST['insert'])) 
	{
		$Id = $_POST['update_Id'];
		
		$Fname = $_POST['Fname'];
		$Lname = $_POST['Lname'];
		$Email = $_POST['Email'];
		$Contact = $_POST['Contact'];

		$query1 = "update employee set Fname = '$Fname', Lname = '$Lname', Email = '$Email', Contact = '$Contact' where Id = $Id";
		$query_run = mysqli_query($con,$query1);

		if ($query_run) 
		{
			header("Location: index.php");
		}
		else
		{
			echo '<script>alert("error")</script>';
		}
	}

?>