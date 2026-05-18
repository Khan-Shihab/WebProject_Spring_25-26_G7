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
    $thumbnail_path = "";

    if (isset($_FILES['thumbnail']) && $_FILES['thumbnail']['error'] == 0) {

        $filename = time() . "_" . $_FILES['thumbnail']['name'];

        $upload_folder = "../assets/uploads/room_types/";

        if (!is_dir($upload_folder)) {
            mkdir($upload_folder, 0777, true);
        }

        move_uploaded_file(
            $_FILES['thumbnail']['tmp_name'],
            $upload_folder . $filename
        );


