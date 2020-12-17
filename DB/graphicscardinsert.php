<?php 
	
	$name =  $_POST['name_entry'];
	$mem = $_POST['mem_entry'];
	$memtype = $_POST['gen_entry'];
	$maxrs = $_POST['maxr_entry'];
	$price = $_POST['price_entry'];
	
	require_once('../db_config.php');

	$sql = "Insert into graphics_card (GPU_ID,GPU_NAME,GPU_PRICE,MEMORY,MEMORYTYPE,MAX_RESOLUTION) VALUES(NULL,'$name', '$price', '$mem','$memtype','$maxrs')";


	$conn = new mysqli($servername, $username, $password, $dbname);

	$result = $conn->query($sql);

	if (!$result)
	{
		echo "Error during insertion!<br>";          
		echo mysqli_error($conn);
	}
	else
	{
		echo "Successfully added Graphics Card info. <br>";
	}

	$conn->close();


	echo "<a href='../index.html'>Back</a>"
	 

?>