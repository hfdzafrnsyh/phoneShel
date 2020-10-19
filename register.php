<?php 
require_once('config.php');

    if(isset($_POST['register'])){
        if(register($_POST) > 0 ) {
            echo "<script>alert('User berhasil ditambahkan!');
                window.location='http://localhost/phoneShel/login.php'
            </script>";
        }else{
            echo "<script>alert('Data gagal ditambahkan!')</script>";
            
        }
    }

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="shortcut icon" href="asset/image/php_native.png">
    <link rel="stylesheet" href="asset/css/style.css">
    <link rel="stylesheet" href="asset/css/bootstrap.min.css">
</head>
<body>
    


<header>
    
    <nav class="navbar navbar-expand-lg navbar-light bg-primary">
        <a class="navbar-brand" href="#">Phone</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="login.php">Login</a>
            </ul>
            <li class="nav-item">
                <a class="nav-link" href="register.php">Register</a>
            </ul>

        </div>
        </nav>
            
    </header>


    <div class="wrapper">
    
     <div class="container">
     
     
     <div class="form-login">
        
        
        <form action="" method="POST">
           
           <div class="header-text text-center text-primary mt-5 mb-3">
           <h4><u>Register</u></h4>
           </div>

        <div class="form-group">
            <input type="text" class="form-control" name="name" placeholder="Your Name" required>
        </div>
        <div class="form-group">
            <input type="email" class="form-control" name="email" placeholder="Your Email" required>
        </div>

        <div class="form-group">
            <input type="password" class="form-control" name="password" placeholder="Your Password" required>
        </div>

        <div class="button-form text-center">
            <button type="submit" name="register" class="btn btn-primary">Register</button>
        </div>
        <div class="link-form text-center ">
        <a href="login.php" class="text-danger">Login ?</a>
        </div>
         <div class="link-form text-center">
         <a href="index.php" class="text-danger">Back</a>
         </div>
        </form>
    
    </div>
     
     </div>
    
    </div>



    <script  src="asset/js/jquery-3.5.1.min.js"></script>
<script  src="asset/js/bootstrap.min.js"></script>
</body>
</html>