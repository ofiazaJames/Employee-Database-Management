<?php 

include("connection.php");
if(isset($_POST['insert'])) 
	{
		$Fname = $_POST['Fname'];
		$Lname = $_POST['Lname'];
		$Email = $_POST['Email'];
		$Contact = $_POST['Contact'];

		$query1 = "insert into employee(Fname, Lname, Email, Contact) values ('$Fname', '$Lname', '$Email', '$Contact')";
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