<?php 
	
	$p_name =  $_POST['name_entry'];
	$p_type = $_POST['gen_entry'];
	$core = $_POST['core_entry'];
	$cache_size = $_POST['cache_entry'];
	$p_price = $_POST['price_entry'];
	
	require_once('../db_config.php');

	$sql = "Insert into processor(P_ID,P_NAME,P_PRICE,P_TYPE,CORE,CACHE_SIZE) VALUES (NULL,'$p_name', '$p_price', '$cache_size', '$core','$p_type')";


	$conn = new mysqli($servername, $username, $password, $dbname);

	$result = $conn->query($sql);

	if (!$result)
	{
		echo "Error during insertion!<br>";          
		echo mysqli_error($conn);
	}
	else
	{
		echo "Successfully added Processor info. <br>";
	}

	$conn->close();


	echo "<a href='../index.html'>Back</a>"
	 

?>