<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: auth/login.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard — Grand Palace</title>
    <link rel="stylesheet" href="../assets/admin.css">
</head>
<body>

<div class="page-wrapper">

    <!-- SIDEBAR -->
    <div class="sidebar">
        <p class="panel-brand">*** GRAND PALACE</p>
        <h3 class="panel-heading">Admin<br>Panel</h3>
        <nav class="sidebar-nav">
            <a href="#dashboard" class="nav-item active" onclick="showSection('dashboard', this)">Dashboard</a>
            <a href="#room-types" class="nav-item" onclick="showSection('room-types', this)">Room Types</a>
            <a href="#rooms" class="nav-item" onclick="showSection('rooms', this)">Rooms</a>
            <a href="#bookings" class="nav-item" onclick="showSection('bookings', this)">Bookings</a>
            <a href="../controllers/logoutController.php" class="nav-item logout">Logout</a>
        </nav>
    </div>
