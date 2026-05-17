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
                 <div class="detail-row">
                    <span class="detail-label">Check-in</span>
                    <span class="detail-value">Jun 20, 2025</span>
                </div>
                <div class="detail-row">
                    <span class="detail-label">Check-out</span>
                    <span class="detail-value">Jun 23, 2025</span>
                </div>
                <div class="detail-row">
                    <span class="detail-label">Total Price</span>
                    <span class="detail-value detail-price">৳ 19,500</span>
                </div>
                <div class="detail-row">
                    <span class="detail-label">Booked On</span>
                    <span class="detail-value">Jun 10, 2025</span>
                </div>
            </div>
            <div>
                <div class="form-box">
                    <h3 class="form-box-title">Guest Info</h3>
                    <!-- PHP: JOIN users ON bookings.user_id = users.id -->
                    <div class="detail-row">
                        <span class="detail-label">Name</span>
                        <span class="detail-value">Nobinur Islam</span>
                    </div>
                    <div class="detail-row">
                        <span class="detail-label">Email</span>
                        <span class="detail-value">nobinur@gmail.com</span>
                    </div>
                    <div class="detail-row">
                        <span class="detail-label">Phone</span>
                        <span class="detail-value">01700000000</span>
                    </div>
                    <div class="detail-row">
                        <span class="detail-label">Nationality</span>
                        <span class="detail-value">Bangladeshi</span>
                    </div>
                </div>
                 <div class="form-box action-box">
                    <h3 class="form-box-title">Action</h3>
                    <p class="action-note">Today is the check-in date for this booking.</p>
                    <button class="action-btn checkin-btn full-btn"
                        id="actionBtn"
                        onclick="checkIn(1042, this)">Check In</button>
               
