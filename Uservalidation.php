<?php

include('conn.php');
session_start();

$check_user = $_SESSION['login_user'];

$check_sql = mysqli_query($conn,"SELECT * FROM user where email = '$check_user'");
$row = mysqli_fetch_array($check_sql, MYSQLI_ASSOC);
$login_session = $row['email'];

if(!isset($_SESSION['login_user'])){
    header("location: UserLogin.htm");
    die();
}


























?>