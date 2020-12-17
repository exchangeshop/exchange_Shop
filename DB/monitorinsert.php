<?php 
	
	$name =  $_POST['name_entry'];
	$resolution = $_POST['resolution_entry'];
	$type = $_POST['type_entry'];
	$size = $_POST['size_entry'];
	$price = $_POST['price_entry'];
	
	require_once('../db_config.php');

	$sql = "Insert into monitor (MONITOR_ID,MONITOR_NAME,MONITOR_PRICE,RESOLUTION,INPUT_TYPE,SCREEN_SIZE) VALUES(NULL,'$name', '$price', '$resolution', 
	'$type','$size')";


	$conn = new mysqli($servername, $username, $password, $dbname);

	$result = $conn->query($sql);

	if (!$result)
	{
		echo "Error during insertion!<br>";          
		echo mysqli_error($conn);
	}
	else
	{
		echo "Successfully added monitor info. <br>";
	}

	$conn->close();


	echo "<a href='../index.html'>Back</a>"
	 

?>