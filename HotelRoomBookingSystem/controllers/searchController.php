<?php

include "../../models/db.php";
include "../../models/addRoomType.php";

if($_SERVER["REQUEST_METHOD"]=="POST"){

    $guest = $_POST["guests"];
    $checkin = $_POST["checkIn"];
    $checkout = $_POST["checkOut"];

    $database = new db();
    $connection = $database->connection();

    $result = search_room($connection,$guest);

    if($result){
        $_SESSION["rooms"] = $result;
    }
    else{
        $_SESSION["rooms"] = [];
    }
}
?>