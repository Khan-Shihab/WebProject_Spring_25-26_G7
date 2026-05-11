<?php
include "db.php";

function createUser($connection,$name,$email,$password,$phone,$nationality){
    $sql = "INSERT INTO users (name,email,password,phone,nationality) VALUES (?,?,?,?,?)";
    $stmt = $connection->prepare($sql);
    $stmt->bind_param("sssss", $name, $email, $hashed_password, $phone, $nationality);
    if($stml -> execute()){
        return true;
    }
    else{
        return false;
    }
}

function emailExists($connection, $email) {
    $sql = "SELECT id FROM users WHERE email = ?";
    $stmt = $connection->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();
    return $result->num_rows > 0;
}

>?