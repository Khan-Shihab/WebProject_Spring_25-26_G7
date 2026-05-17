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

      <!-- MAIN -->
    <div class="main-content">

        <!-- ── Flash Messages ── -->
        <?php if (!empty($_SESSION['flash_success'])): ?>
            <div style="background:#d1e7dd;color:#0f5132;padding:12px 20px;border-radius:8px;margin-bottom:16px;">
                <?= htmlspecialchars($_SESSION['flash_success']) ?>
            </div>
        <?php unset($_SESSION['flash_success']); endif; ?>

        <?php if (!empty($_SESSION['flash_error'])): ?>
            <div style="background:#f8d7da;color:#842029;padding:12px 20px;border-radius:8px;margin-bottom:16px;">
                <?= htmlspecialchars($_SESSION['flash_error']) ?>
            </div>
        <?php unset($_SESSION['flash_error']); endif; ?>

        <?php if (!empty($_SESSION['flash_errors'])): ?>
            <div style="background:#f8d7da;color:#842029;padding:12px 20px;border-radius:8px;margin-bottom:16px;">
                <strong>Please fix the following:</strong>
                <ul style="margin-top:6px;padding-left:18px;">
                    <?php foreach ($_SESSION['flash_errors'] as $err): ?>
                        <li><?= htmlspecialchars($err) ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php unset($_SESSION['flash_errors']); endif; ?>
