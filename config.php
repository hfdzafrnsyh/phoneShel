<?php 

$server="localhost";
$username="root";
$password="";
$db_name="db_native";


$connect = mysqli_connect($server,$username,$password,$db_name);

if(!$connect){
    echo "<script> alert('Connection Failed!'); </script>" . mysqli_connect_error();
}




// register

function register($data){
    global $connect;

    $name=$data['name'];
    $email=$data['email'];
    $password=$data['password'];

    $result=mysqli_query($connect,"SELECT email FROM users WHERE email='$email'");

    if(mysqli_fetch_assoc($result)){
        echo "<script>alert('Email sudah terdaftar!')</script>";
        return false;
    }

    // enkripsi
    $password = password_hash($password, PASSWORD_DEFAULT);

    mysqli_query($connect,"INSERT INTO users VALUES('','$name' ,'$email','$password')");

    return mysqli_affected_rows($connect);
}


// tambahdata

function tambahData($data){
    global $connect;

    $name=$data['name_phone'];
    $color=$data['color_phone'];
    $from=$data['from_import'];

    $result=mysqli_query($connect,"SELECT name_phone FROM phone WHERE name_phone='$name'");
    if(mysqli_fetch_assoc($result)){
        echo "<script>alert('Jenis Barang sudah ada!')</script>";
        return false;
    }

    mysqli_query($connect,"INSERT INTO phone VALUES('','$name' ,'$color','$from')");

    return mysqli_affected_rows($connect);
}


?>