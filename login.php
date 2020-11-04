<?php 
require_once('config.php');

if(isset($_POST['login'])){
    

    $email=$_POST['email'];
    $password=$_POST['password'];


    $result = mysqli_query($connect,"SELECT * FROM users WHERE email='$email'");


    if(mysqli_num_rows($result) === 1 ) {


        $data=mysqli_fetch_assoc($result);

        if(password_verify($password,$data["password"])){
         session_start();
        $_SESSION['email'] = $email;
        $_SESSION['status']="login";
        header('location:dashboard.php');
        exit;

        }else{
            echo "<script>alert('Email atau password salah!')</script>";
        }


      
    }

     
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="shortcut icon" href="asset/image/php_native.png">
    <link rel="stylesheet" href="asset/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
    


<header>
    
    <nav class="navbar navbar-expand-lg navbar-light bg-primary">
        <a class="navbar-brand" href="#">PhoneShel</a>
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
           <h4><u>Login</u></h4>
           </div>

        <div class="form-group">
           
            <input type="email" class="form-control" name="email" placeholder="Your Email" required>
        </div>
        <div class="form-group">
        
            <input type="password" class="form-control" name="password" placeholder="Your Password" required>
        </div>

        <div class="button-form text-center">
            <button type="submit" name="login" class="btn btn-primary">Login</button>
        </div>
        <div class="link-form text-center ">
        <a href="register.php" class="text-danger">Register ?</a>
        </div>
         <div class="link-form text-center">
         <a href="index.php" class="text-danger">Back</a>
         </div>
        </form>
    
    </div>
     
     </div>
    
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

</body>
</html>