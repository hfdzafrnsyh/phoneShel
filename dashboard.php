<?php 
require_once('config.php');
session_start();

if($_SESSION['status'] != "login"){
    header('location:login.php');
}

if(isset($_POST['tambah_data'])){
    if(tambahData($_POST) > 0 ) {
        echo "<script>alert('Data berhasil ditambah!')</script>";
    }else{
        echo "<script>alert('Data gagal ditambah!')</script>";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
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
                <a class="nav-link" href="logout.php">Logout</a>
            </ul>
           

        </div>
        </nav>
            
    </header>


    <div class="wrapper">
    
        <div class="table-phone mt-5">
        
        <div class="container">
        
        <div class="header-text">
            <h4 class="text-center text-danger mb-3"><u>Data Phone</u></h4>
            <div class="button-tambah text-center">
              <!-- Button trigger modal -->
              <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#exampleModal">
                    Tambah Data
                    </button></div>
        </div>

        <table class="table table-striped table-dark">
        <thead>
            <tr>
            <th scope="col">No</th>
            <th scope="col">Name</th>
            <th scope="col">Color</th>
            <th scope="col">From</th>
            <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
        <?php 
            require_once('config.php');
            $data=mysqli_query($connect,"SELECT * FROM phone");
            $i=1;
            while($phone=mysqli_fetch_array($data)){
        
        ?>
            <tr>
            <th scope="row"><?php echo $i++;?></th>
            <td><?php echo $phone['name_phone'] ?></td>
            <td><?php echo $phone['color_phone']?></td>
            <td><?php echo $phone['from_import']?></td>
            <td>
                <a href="edit.php?id=<?php echo $phone['id_phone'] ?>" class="btn btn-warning btn-sm">Edit</a>
                |
                <a href="hapus.php?id=<?php echo $phone['id_phone'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Anda yakin ingin menghapus?');">Hapus</a>
            </td>
            </tr>
            <?php } ?>
        </tbody>
        </table>
        
        </div>


        </div>
    
    </div>




<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
                <div class="form-tambah-data">
                    <form action="" method="POST">
                    
                    <div class="form-group">
                        <input type="text" name="name_phone" placeholder="Name" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <input type="text" name="color_phone" placeholder="Color Phone" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <input type="text" name="from_import" placeholder="From" class="form-control" required>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" name="tambah_data" class="btn btn-primary">Save</button>
                    </div>

                    </form>

                </div>
      </div>
    
    </div>
  </div>
</div>


<script  src="asset/js/jquery-3.5.1.min.js"></script>
<script  src="asset/js/bootstrap.min.js"></script>
</body>
</html>