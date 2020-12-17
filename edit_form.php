<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <meta charset="UTF-8">
  
  <!-- Font awesome  -->
  <link rel="stylesheet" href="css/fontawesome.css">
  <!-- Owl Carousel -->
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <!-- Bootstrap -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- Main css -->
  <link rel="stylesheet" href="css/style.css">
  <!-- Responsive css -->
  <link rel="stylesheet" href="css/responsive.css">
  <link rel="stylesheet" href="css/semantic.min.css">
</head>
<body>
<header class="header fixed-top">
  <div class="container">
    <nav class="navbar navbar-expand-lg navbar-light">
      <!-- Brand -->
       <a class="navbar-brand" href="#"></span>Exchange Now</a>

      <!-- Toggler/collapsibe Button -->
       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
       </button>

      <!-- Navbar links -->
      <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav ml-auto">
         <li class="nav-item">
           <a class="nav-link active" href="index.html"> Home</a>
         </li>
          <li class="nav-item">
           <a class="nav-link active" href="exchange.php"> Exchange</a>
         </li>
         <li class="nav-item">
           <a class="nav-link active" href="buynow.php"> Buy Now</a>
         </li>
         <li class="nav-item">
           <a class="nav-link active" href="login.php"> Login</a>
         </li>   
       </ul>
      </div>
    </nav>

  </div>
</header>
<br>
<br>
<br><br>
<br><br>
</body>

<body>
  <?php $email = $_GET['email'] ?>
<?php require_once('db_config.php'); ?>
<?php
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_errno) {
          printf("Connect failed: %s\n", $conn->connect_error);
        exit();
    }

    $query = "SELECT * FROM `customer` WHERE CUST_EMAIL = '$email'";
    $result = $conn->query($query);
    $row = $result->fetch_assoc();
?>



<div class= "ui text container" style="background-color: #8fdd45; padding: 2%;">
  <h1>Edit Existing Contact Info</h1>
  <h4>The data will be updated into the Main database</h4>
</div>
<br>
  <div class="ui text container">
  <form class="ui form" method="post" action="DB/update.php">
  <div class="field" style="display: none;">
    <label>Your Name</label>
    <input type="text" name="name_entry" placeholder="Customer Name.... " value="<?php echo $row['CUST_NAME'] ?>">
  </div>
  <div class="field">
    <label>Your Email Adress</label>
    <input type="text" name="email_entry" placeholder="Customer Email Address...." value="<?php echo $row['CUST_EMAIL'] ?>">
  </div>
  <div class="field">
    <label>Interest</label>
    <input type="text" name="interest_entry" placeholder="Customer Interest...." value="<?php echo $row['CUST_INTEREST'] ?>"
    >
  </div>
  <div class="field">
    <label>Password</label>
    <input type="text" name="password_entry" placeholder="Customer Password...." value="<?php echo $row['CUST_PASSWORD'] ?>"
    >
  </div>
  <div class="field">
    <label>Address</label>
    <input type="text" name="address_entry" placeholder="Customer Location...." value="<?php echo $row['CUST_LOCATION'] ?>">
  </div>

  <button class="ui red button" type="submit">Submit</button>
</form>
</div>



<!-- Jquery -->
<script src="js/jquery.min.js"></script>
<!-- Popper -->
<script src="js/popper.min.js"></script>
 <!-- Bootstrap -->
<script src="js/bootstrap.min.js"></script>
<!-- Owl Carousel -->
<script src="js/owl.carousel.min.js"></script>
<!-- main -->
<script src="js/main.js"></script>
 <script src="js/semantic.min.js"></script>
   <script src="js/jquery-3.4.1.min.js"></script>


</body>
</html>