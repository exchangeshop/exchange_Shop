<?php 
	
	$name =  $_POST['name_entry'];
	$gen = $_POST['gen_entry'];
	$type = $_POST['type_entry'];
	$slot = $_POST['slot_entry'];
	$max_mem = $_POST['maxmem_entry'];
	$price = $_POST['price_entry'];
	
	require_once('../db_config.php');

	$sql = "Insert into motherboard (MTH_ID,MTH_NAME,MTH_PRICE,GENERATION,MEMORY_TYPE,MEMORY_SLOT, MEMORY_MAX) VALUES(NULL,'$name', '$price', '$gen', '$type',
	'$slot', '$max_mem')";


	$conn = new mysqli($servername, $username, $password, $dbname);

	$result = $conn->query($sql);

	if (!$result)
	{
		echo "Error during insertion!<br>";          
		echo mysqli_error($conn);
	}
	else
	{
		echo "Successfully added motherboard info. <br>";
	}

	$conn->close();


	echo "<a href='../index.html'>Back</a>"
	 

?>