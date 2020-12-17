<!DOCTYPE html>
<html>
<head>
  <title>Intact Casing</title>
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
   <?php require_once('../db_config.php'); ?>
   <?php $keyword = $_GET['keyword']; ?>
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
<br><br>
</body>

<body>
  <div class="ui text container" style ="text-align: center; background-color: #1eaef4; padding: 1% ">
  <h1> Casing Search Result</h1>
  <p>Keyword: 
    <?php echo $keyword ?>
  </p>
  <br>
  </div>
  <br>

  <?php
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_errno) {
          printf("Connect failed: %s\n", $conn->connect_error);
        exit();
    }

   $query = "SELECT * FROM `casing` WHERE CASING_CATAGORY = 1 AND CASING_NAME LIKE '%$keyword%'";
    
    if ($result = $conn->query($query)) {
      printf('<div class="ui text container">');
      printf('<table class="ui unstackable table">');
      printf("<thead> <tr> <th>Index</th> <th>Brand</th> <th>Price</th> <th>Case Type</th> <th>Supported Mainboard Type</th> 
        <th>Power Supply BuiltIn</th> <th></th> </tr> </thead>");

      $index = 1;
        /* fetch associative array */
        while ($row = $result->fetch_assoc()) {
            printf ('<tr> <td>%s</td> <td>%s</td> <td>%s</td> <td>%s</td> <td>%s</td> <td>%s</td> <td><a href="../buynow.php?">BUY</a> </td>  
              </tr>', $index, $row["CASING_NAME"], $row["CASING_PRICE"], $row["CASE_TYPE"], $row["SUPPORTED_MAINBOARD_TYPE"], $row["POWER_SUPPLY_BUILTIN"]);

            $index++;
        }

        printf("</table>");
        printf("%d record(s) found!<br>", $result->num_rows);
      printf('</div>');

        $result->free(); //free result set
    }
    else
    {
      printf("No record found!");
    }
    
    
    $conn->close();
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