<?php 
	
	$name =  $_POST['name_entry'];
	$mtype = $_POST['mtype_entry'];
	$type = $_POST['type_entry'];
	$psin = $_POST['ps_entry'];
	$price = $_POST['price_entry'];
	
	require_once('../db_config.php');

	$sql = "Insert into casing (CASING_ID,CASING_NAME,CASING_PRICE,CASE_TYPE,SUPPORTED_MAINBOARD_TYPE,POWER_SUPPLY_BUILTIN) 
	       VALUES(NULL,'$name', '$price', '$type', '$mtype','$psin')";


	$conn = new mysqli($servername, $username, $password, $dbname);

	$result = $conn->query($sql);

	if (!$result)
	{
		echo "Error during insertion!<br>";          
		echo mysqli_error($conn);
	}
	else
	{
		echo "Successfully added Casing info. <br>";
	}

	$conn->close();


	echo "<a href='../index.html'>Back</a>"
	 

?>