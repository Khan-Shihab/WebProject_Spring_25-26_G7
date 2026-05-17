<!DOCTYPE html>
<html>
<head>
    <title>Booking Detail — Grand Palace</title>
    <link rel="stylesheet" href="../assets/task4.css">
</head>
<body>

<div class="page-wrapper">

    <div class="sidebar">
        <p class="panel-brand">GRAND PALACE</p>
        <h3 class="panel-heading">Admin<br>Panel</h3>
        <nav class="sidebar-nav">
            <a href="task4.php" class="nav-item">Dashboard</a>
            <a href="task4.php#bookings" class="nav-item active">All Bookings</a>
            <a href="admin.php" class="nav-item">Room Management</a>
            <a href="../controllers/logoutController.php" class="nav-item logout">Logout</a>
        </nav>
    </div>
        <div class="main-content">

        <h2>Booking Detail</h2>
        <p class="subtitle">Full information for this reservation</p>

        <a href="task4.php" class="back-link">&larr; Back to All Bookings</a>

        <div class="two-col">

            <div class="form-box">
                <h3 class="form-box-title">Reservation Info</h3>
                <!-- PHP: SELECT * FROM bookings WHERE id = $_GET['id'] -->
                <div class="detail-row">
                    <span class="detail-label">Booking #</span>
                    <span class="detail-value">1042</span>
                </div>
                <div class="detail-row">
                    <span class="detail-label">Status</span>
                    <span class="badge badge-confirmed">Confirmed</span>
                </div>
                <div class="detail-row">
                    <span class="detail-label">Room Number</span>
                    <span class="detail-value">101</span>
                </div>
                <div class="detail-row">
                    <span class="detail-label">Room Type</span>
                    <span class="detail-value">Deluxe</span>
                </div>
               
