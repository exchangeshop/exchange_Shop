<?php 
	
	$name =  $_POST['name_entry'];
	$watt = $_POST['watt_entry'];
	$modular = $_POST['modular_entry'];
	$efficiency = $_POST['efficiency_entry'];
	$price = $_POST['price_entry'];
	
	require_once('../db_config.php');

	$sql = "Insert into power_supply (PS_ID,PS_NAME,PS_PRICE, WATTAGE ,MODULAR ,EFFICIENCY) VALUES(NULL,'$name', '$price', '$watt', '$modular','$efficiency')";


	$conn = new mysqli($servername, $username, $password, $dbname);

	$result = $conn->query($sql);

	if (!$result)
	{
		echo "Error during insertion!<br>";          
		echo mysqli_error($conn);
	}
	else
	{
		echo "Successfully added Power Supply info. <br>";
	}

	$conn->close();


	echo "<a href='../index.html'>Back</a>"
	 

?>