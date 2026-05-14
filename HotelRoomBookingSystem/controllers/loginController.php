<?php
include "../models/UserModel.php"
session_start();

$database = new db();
$connection = $database->connection();

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $uemail = $_POST["email"];
    $upass = $_POST["password"];

    $user = loginUser($connection,$email);

    if(isset($_POST["remember_me"])){
        $remember_me = $_POST["remember_me"];
    }
    else{
        $remember_me = 0;
    }

    if(password_verify($password, $user['password_hash'])){
        $_SESSION['user_id']= $user['id'];
        $_SESSION['name'] = $user['name'];
        $_SESSION['role'] = $user['role'];
    }
}
?>