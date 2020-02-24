<?php
    session_start();
    if(!isset($_SESSION['user'])){
        header('location:adminlogin.php');
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
   
   <?php
       include 'links.php'
   ?>
  
</head>
<body>
    <div class="container center-div shadow">
        <div class="heading text-center text-uppercase text-danger mb-3">
            Bidesh Biswas <?php echo $_SESSION['user'] ?>
        </div>
        <a href="logout.php" class="btn btn-danger">Logout</a>
    
    </div>
</body>
</html>