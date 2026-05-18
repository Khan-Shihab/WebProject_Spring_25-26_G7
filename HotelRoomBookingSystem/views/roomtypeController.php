<?php
session_start();

include "../models/db.php";
include "../models/addRoomType.php";

if (!isset($_SESSION['user_id'])) {
    header("Location: ../views/auth/login.php");
    exit();
}
$database = new db();
$connection = $database->connection();

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['add_room_type'])) {

    $name = trim($_POST['name']);
    $description = trim($_POST['description']);
    $price_per_night = $_POST['price_per_night'];
    $max_capacity = $_POST['max_capacity'];

    $amenities = "";
    if (isset($_POST['amenities'])) {
        $amenities = implode(",", $_POST['amenities']);
    }


