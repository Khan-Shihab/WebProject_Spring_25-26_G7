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
            <div id="section-dashboard" class="section">

            <h2>Occupancy Dashboard</h2>
            <p class="subtitle">Live overview of today's hotel status</p>

            <div class="summary-grid">
                <div class="summary-card">
                    <p class="summary-label">Total Rooms</p>
                    <p class="summary-number">42</p>
                </div>
                <div class="summary-card">
                    <p class="summary-label">Occupied</p>
                    <p class="summary-number number-blue">18</p>
                </div>
                <div class="summary-card">
                    <p class="summary-label">Available</p>
                    <p class="summary-number number-green">20</p>
                </div>
                 <div class="summary-card">
                    <p class="summary-label">Maintenance</p>
                    <p class="summary-number number-red">4</p>
                </div>
            </div>

            <div class="two-col">
                <div class="form-box">
                    <h3 class="form-box-title">Today's Arrivals</h3>
                    <table class="data-table">
                        <thead>
                            <tr>
                                <th>Guest Name</th>
                                <th>Room</th>
                                <th>Type</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Nobinur Islam</td>
                                <td>101</td>
                                <td>Deluxe</td>
                                <td>
                                    <button class="action-btn checkin-btn"
                                        onclick="checkIn(1042, this)">Check In</button>
                                </td>
                            </tr>
                                                        <tr>
                                <td>Ayesha Khan</td>
                                <td>205</td>
                                <td>Suite</td>
                                <td>
                                    <button class="action-btn checkin-btn"
                                        onclick="checkIn(1043, this)">Check In</button>
                                </td>
                            </tr>
                            <tr>
                                <td>Nadia Hossain</td>
                                <td>110</td>
                                <td>Standard</td>
                                <td>
                                    <button class="action-btn checkin-btn"
                                        onclick="checkIn(1044, this)">Check In</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                
