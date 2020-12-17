<!DOCTYPE html>
<html>
<head>
  <title>My Account</title>
  <meta charset="UTF-8">
  
  <!-- Font awesome  -->
  <link rel="stylesheet" href="../css/fontawesome.css">
  <!-- Owl Carousel -->
  <link rel="stylesheet" href="../css/owl.carousel.min.css">
  <!-- Bootstrap -->
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <!-- Main css -->
  <link rel="stylesheet" href="../css/style.css">
  <!-- Responsive css -->
  <link rel="stylesheet" href="../css/responsive.css">
  <link rel="stylesheet" href="../css/semantic.min.css">
</head>
<body>
<header class="header fixed-top">
  <div class="container">
    <nav class="navbar navbar-expand-lg navbar-light">
      <!-- Brand -->
       <a class="navbar-brand" href="../#"></span>Exchange Now</a>

      <!-- Toggler/collapsibe Button -->
       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
       </button>

      <!-- Navbar links -->
      <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav ml-auto">
         <li class="nav-item">
           <a class="nav-link active" href="../index.html"> Home</a>
         </li>
          <li class="nav-item">
           <a class="nav-link active" href="../exchange.php"> Exchange</a>
         </li>
         <li class="nav-item">
           <a class="nav-link active" href="../buynow.php"> Buy Now</a>
         </li>
         <li class="nav-item">
           <a class="nav-link active" href="../login.php"> Login</a>
         </li>
         
        
       </ul>
      </div>
    </nav>

  </div>
</header>
<br>
<br>
<br><br>
<br><br><br>
</body>

<body>

<?php
    

if(isset($_POST['email_entry']) && isset($_POST['password_entry'])){
    $email =  $_POST['email_entry'];
	$password = $_POST['password_entry'];
	//echo "$email<br>"; 
	//echo "$password<br>";


	$query = "SELECT * FROM customer WHERE CUST_EMAIL = '$email' and CUST_PASSWORD = '$password' "; 

	require_once('../db_config.php');
	$conn = new mysqli($servername, $username, $password, $dbname);

	$result= $conn->query($query);

	if(!$result){
		echo "Error during insertion!<br>";          
		echo mysqli_error($conn);
	}
	else
	{
		if($result->num_rows == 1)
		{
			Printf('<div class="ui text container" style ="text-align: center;">');
			echo "You have successfully login. Welcome !!! <br><br><br><br>"; 
			printf('</div>');

			printf('<div class="ui text container">');
           printf('<table class="ui unstackable table">');
           printf("<thead> <tr> <th>NAME</th> <th>EMAIL_ADDRESS</th> <th>PASSWORD</th> <th>LOCATION</th> <th>INTEREST</th> <th></th> </tr> </thead>");

        /* fetch associative array */
           while ($row = $result->fetch_assoc()) {
            printf ('<tr> <td>%s</td> <td>%s</td> <td>%s</td> <td>%s</td> <td>%s</td> <td><a href="../edit_form.php?email=%s">Edit</a><td><a href="login_delete.php?email=%s">Delete</a> </td> 
              </tr>', $row["CUST_NAME"], $row["CUST_EMAIL"], $row["CUST_PASSWORD"], $row["CUST_LOCATION"], $row["CUST_INTEREST"], $row["CUST_EMAIL"],
              $row["CUST_EMAIL"]);
        }

        printf("</table>");
        printf("%d record(s) found!<br>", $result->num_rows);
        printf('</div>');

			
		}
		else
		{  
			Printf('<div class="ui text container" style ="text-align: center;">');
			echo "Your Password is Incorrect.<br>Please enter your password correctly.<br>";
			printf('</div>');
		}
	}

} 
	
 $conn->close();
 printf('<br><br><br><br>');
 Printf('<div class="ui text container" style ="text-align: right;">');
 echo "<a href='../index.html'>Back</a>";
 printf('</div>');
?>

<!-- Jquery -->
<script src="../js/jquery.min.js"></script>
<!-- Popper -->
<script src="../js/popper.min.js"></script>
 <!-- Bootstrap -->
<script src="../js/bootstrap.min.js"></script>
<!-- Owl Carousel -->
<script src="../js/owl.carousel.min.js"></script>
<!-- main -->
<script src="../js/main.js"></script>
 <script src="../js/semantic.min.js"></script>
   <script src="../js/jquery-3.4.1.min.js"></script>


</body>
</html>