<?php 
	
	$name =  $_POST['name_entry'];
	$email =$_POST['email_entry'];
	$interest = $_POST['interest_entry'];
    $pass = $_POST['password_entry'];
	$address = $_POST['address_entry'];
		
	// echo $id;
	require_once('../db_config.php');

	$sql = "Update customer SET CUST_NAME='$name', CUST_EMAIL='$email', CUST_PASSWORD='$pass', CUST_LOCATION='$address', CUST_INTEREST='$interest' 
	        WHERE CUST_EMAIL='$email'";

	$conn = new mysqli($servername, $username, $password, $dbname);

	$result = $conn->query($sql);

	if (!$result)
	{
		echo "Error during update!<br>";
		echo mysqli_error($conn);
	}
	else
	{
		echo "Successfully updated contact info of $name. <br>";
	}

	$conn->close();

	echo "<a href='../index.html'>Back</a>"
	// php header("Location: ../index.php'"); 

?>