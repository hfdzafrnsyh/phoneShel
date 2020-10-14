<?php 
require_once('config.php');

$data=mysqli_query($connect,"SELECT * FROM phone WHERE id_phone='$_GET[id]'");
$phone=$data->fetch_assoc();

if(isset($_POST['update_data'])){
    $name=$_POST['name_phone'];
    $color=$_POST['color_phone'];
    $from=$_POST['from_import'];
    mysqli_query($connect,"UPDATE phone SET name_phone='$name', color_phone='$color', from_import='$from' WHERE id_phone='$_GET[id]'");
    echo "<script>alert('Data Berhadil diubah!')</script>";
    echo "<script>window.location='http://localhost/latihanSatu/dashboard.php'</script>";
}



?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Phone</title>
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
           <h4><u>Update</u></h4>
           </div>

        <div class="form-group">
            <input type="text" class="form-control" name="name_phone" value="<?php echo $phone['name_phone'] ?>" required>
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="color_phone" value="<?php echo $phone['color_phone'] ?>" required>
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="from_import" value="<?php echo $phone['from_import'] ?>" required>
        </div>

        <div class="button-form text-center">
            <a href="dashboard.php" class="btn btn-primary">Back</a>
            <button type="submit" name="update_data" class="btn btn-success">Update</button>
        </div>
        </form>
    
    </div>
     
     </div>
    
    </div>



    <script  src="asset/js/jquery-3.5.1.min.js"></script>
<script  src="asset/js/bootstrap.min.js"></script>
</body>
</html>