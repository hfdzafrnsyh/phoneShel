<?php 

require_once('config.php');
session_start();

if($_SESSION['status'] == "login"){

       $data=mysqli_query($connect,"SELECT * FROM phone WHERE id_phone='$_GET[id]'");
        $phone=$data->fetch_assoc();

        mysqli_query($connect,"DELETE FROM phone WHERE id_phone='$_GET[id]'");
        echo "<script>alert('Data berhasil dihapus!')</script>";
        echo "<script>window.location='http://localhost/phoneShel/dashboard.php'</script>";

}else{
    header('location:index.php');
}


?>