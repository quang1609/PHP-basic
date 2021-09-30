<?php session_start(); ?>
<html>
  <head>
       <title> Home </title>
  </head>
<body>
 <?php
    if(!isset($_SESSION['user'])) // If session is not set then redirect to Login Page
    {
        header("Location:LoginPdo.php");  
    }    
    echo "<h1>Login Success</h1>";
    echo "<a href='logout.php'> Logout</a> "; 
 ?>
</body>
</html>
<?php echo isset($_SESSION["success"]) ? $_SESSION['success'] : ""; ?>
<?php unset($_SESSION["success"]) ?>
