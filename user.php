<?php

include("conn.php");
session_start();

$email = $_POST['email'];
$password = $_POST['password'];
$table = 'user';


if($_SERVER["REQUEST_METHOD"] == "POST"){
    $email = stripcslashes($email);
    $email = mysqli_real_escape_string($conn,$email);
    $password = stripcslashes($password);
    $password = mysqli_real_escape_string($conn,$password);

    $sql = "SELECT * FROM $table where email = '$email' and password = '$password' ";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $counter = mysqli_num_rows($result);

    if($counter == 1){
        $_SESSION['login_user'] = $email;
        header("location: welcomeUser.php");
    }else{
        echo "Something went wrong";
    }
}































?>