<!DOCTYPE html>
<html>
<head>
  <title>Registration</title>
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
  <div class="ui text container" style ="text-align: left; background-color: #8fdd45; padding: 1%;"> <h2> Registration Form</h2></div>
  <br><br><br>
  <form method="post" action="DB/registrationinsert.php">

  <div class="ui  text container"style= "text-align: left;">
  <div><label>Name</label></div>
  <div class="ui input"style= "text-align: left;">
  <input type="text" name="name_entry" placeholder="Enter Your Name">
</div>
</div>
<br>
<div class="ui  text container"style= "text-align: left;">
  <div><label>Address</label></div>
  <div class="ui input"style= "text-align: left;">
  <input type="text" name="location_entry" placeholder="Enter Your location">
</div>
</div>
<br>
<div class="ui  text container"style= "text-align: left;">
  <div><label>Email Address</label></div>
  <div class="ui input" style= "text-align: left;">
  <input type="text" name="email_entry" placeholder="Enter Your Mail">
</div>
</div>
<br>
<div class="ui  text container"style= "text-align: left;">
  <div><label>Product Interest</label></div>
  <div class="ui input"style= "text-align: left;">
  <input type="text" name="interest_entry" placeholder="product type that attracts you most (e.g. Headphone, Graphics Card, Monitor etc.)">
</div>
</div>
<br>
<div class="ui  text container" style= "text-align: left;">
  <div><label>Password</label></div>
  <div class="ui input" style= "text-align: left;">
  <input type="text" name="password_entry" placeholder="Enter Your Password">
</div>
</div>
<br>
<div class="ui  text container" style= "text-align: left;">
  <div><label>Confirm Password</label></div>
  <div class="ui input"style= "text-align: left;">
  <input type="text" name="retype_password_entry" placeholder="Retype Your Password">
</div>
</div>
<br>

   <div class="ui  text container"style= "text-align: left;">
  <button class="ui red huge button"style= "text-align: left;"> Register </button>
</div>
</form>
</div>

<br><br>


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