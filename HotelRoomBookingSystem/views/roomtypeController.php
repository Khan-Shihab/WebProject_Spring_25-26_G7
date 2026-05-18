<?php
session_start();

include "../models/db.php";
include "../models/addRoomType.php";

if (!isset($_SESSION['user_id'])) {
    header("Location: ../views/auth/login.php");
    exit();
}
