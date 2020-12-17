<?php 
	
	$name =  $_POST['name_entry'];
	$model = $_POST['model_entry'];
	$type = $_POST['type_entry'];
	$price = $_POST['price_entry'];
	
	require_once('../db_config.php');

	$sql = "Insert into headphone (HP_ID,HP_NAME,HP_PRICE,MODEL,HP_TYPE) VALUES(NULL,'$name', '$price', '$model', '$type')";


	$conn = new mysqli($servername, $username, $password, $dbname);

	$result = $conn->query($sql);

	if (!$result)
	{
		echo "Error during insertion!<br>";          
		echo mysqli_error($conn);
	}
	else
	{
		echo "Successfully added headphone info. <br>";
	}

	$conn->close();


	echo "<a href='../index.html'>Back</a>"
	 

?>