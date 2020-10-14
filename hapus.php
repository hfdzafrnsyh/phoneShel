<?php 

require_once('config.php');

$data=mysqli_query($connect,"SELECT * FROM phone WHERE id_phone='$_GET[id]'");
$phone=$data->fetch_assoc();

mysqli_query($connect,"DELETE FROM phone WHERE id_phone='$_GET[id]'");
echo "<script>alert('Data berhasil dihapus!')</script>";
echo "<script>window.location='http://localhost/latihanSatu/dashboard.php'</script>";


?>