<?php 
	
	$name =  $_POST['name_entry'];
	$storage = $_POST['storage_entry'];
	$price = $_POST['price_entry'];
	
	require_once('../db_config.php');

	$sql = "Insert into hdd (HDD_ID,HDD_NAME,HDD_PRICE,HDD_STORAGE) VALUES(NULL,'$name', '$price', '$storage')";


	$conn = new mysqli($servername, $username, $password, $dbname);

	$result = $conn->query($sql);

	if (!$result)
	{
		echo "Error during insertion!<br>";          
		echo mysqli_error($conn);
	}
	else
	{
		echo "Successfully added hardisk info. <br>";
	}

	$conn->close();


	echo "<a href='../index.html'>Back</a>"
	 

?>