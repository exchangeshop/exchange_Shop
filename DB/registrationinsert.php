<?php 
	
	$name =  $_POST['name_entry'];
	$location = $_POST['location_entry'];
	$email = $_POST['email_entry'];
	$interest = $_POST['interest_entry'];
	$pass = $_POST['password_entry'];
	$c_pass=$_POST['retype_password_entry'];
	
	require_once('../db_config.php');

	if($name && $location && $email && $interest && $pass && $c_pass){
		if($pass==$c_pass) {
			$sql = "Insert into customer VALUES('$name', '$email', '$pass', '$location','$interest')";

             $conn = new mysqli($servername, $username, $password, $dbname);
             $result = $conn->query($sql);

	        if (!$result)
	        {
		       echo "Error during insertion!<br>";          
		       echo mysqli_error($conn);
	        }
	        else
	       {
		       echo "Successfully registration completed. <br>";
	       }
	       $conn->close();
	    }
	 else{
	    	 echo " Your password doesn't match. <br>";
	    }
	}



	


	echo "<a href='../index.html'>Back</a>";
	 

?>