<?php 
	
	$name =  $_POST['name_entry'];
	$speed = $_POST['speed_entry'];
	$type = $_POST['type_entry'];
	$capacity = $_POST['capacity_entry'];
	$price = $_POST['price_entry'];
	
	require_once('../db_config.php');

	$sql = "Insert into ram (RAM_ID,RAM_NAME,RAM_PRICE,BUS_SPEED,RAM_TYPE,CAPACITY) VALUES(NULL,'$name', '$price', '$speed', '$type','$capacity')";


	$conn = new mysqli($servername, $username, $password, $dbname);

	$result = $conn->query($sql);

	if (!$result)
	{
		echo "Error during insertion!<br>";          
		echo mysqli_error($conn);
	}
	else
	{
		echo "Successfully added RAM info. <br>";
	}

	$conn->close();


	echo "<a href='../index.html'>Back</a>"
	 

?>