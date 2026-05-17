<!DOCTYPE html>
<html>
<head>
    <title>Booking Management — Grand Palace</title>
    <link rel="stylesheet" href="../assets/task4.css">
</head>
<body>

<div class="page-wrapper">

    <!-- SIDEBAR -->
    <div class="sidebar">
        <p class="panel-brand">GRAND PALACE</p>
        <h3 class="panel-heading">Admin<br>Panel</h3>
        <nav class="sidebar-nav">
            <a href="#dashboard" class="nav-item active" onclick="showSection('dashboard', this)">Dashboard</a>
            <a href="#bookings" class="nav-item" onclick="showSection('bookings', this)">All Bookings</a>
            <a href="../views/admin.php" class="nav-item">Room Management</a>
            <a href="../controllers/logoutController.php" class="nav-item logout">Logout</a>
        </nav>
    </div>
    <div class="main-content">
