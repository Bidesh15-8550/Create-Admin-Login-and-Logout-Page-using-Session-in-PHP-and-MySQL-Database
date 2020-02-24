<?php

session_start();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
   
    <?php
        include 'links.php'
    ?>
</head>
<body>
    <header>
        <div class="container center-div shadow ">
            <div class="heading text-center text-uppercase text-white mb-3">Admin Login Page</div>
            <div class="container row d-flex flex-row justify-content-center mb-3">
                    <div class="admin-form shadow p-2">
                        <form action="logincheck.php" method="POST">
                            <div class="form-group">
                                <label>Email ID</label>
                                <input type="text" name="user"value="" class="form-control" autocomplete="off">
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" name="pass"value="" class="form-control" autocomplete="off">
                            </div>
                            <input type="submit" class="btn btn-success" name="submit">
                        </form>
                    
                    </div>

            </div>
        
        </div>
    </header>
</body>
</html>