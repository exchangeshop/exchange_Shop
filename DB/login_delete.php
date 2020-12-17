<?php 
	
	$email= $_GET['email'];
	
	require_once('../db_config.php');

	$sql = "DELETE FROM customer where CUST_EMAIL='$email'";

	$conn = new mysqli($servername, $username, $password, $dbname);

	$result = $conn->query($sql);

	if (!$result)
	{
		echo "Error during deletion!<br>";
		//echo "<a href='../index.html'>Back</a>";
		echo mysqli_error($conn);
	}
	else
	{
		echo "Successfully deleted your account!<br>";
		//header("Location: ../index.html"); 
	}

	$conn->close();
	echo "<a href='../index.html'>Back</a>";

	
	

?>