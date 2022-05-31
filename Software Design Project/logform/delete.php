<?php

include("connection.php");

$Id = $_GET['Id'];
$query3 = "delete from employee where Id = $Id";
$query_run = mysqli_query($con, $query3);

if ($query_run) 
{
	header("Location: index.php");
}
else
{
	echo '<script>alert("error")</script>';
}

?>