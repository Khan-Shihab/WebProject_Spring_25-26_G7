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
                 <div class="form-box">
                    <h3 class="form-box-title">Today's Departures</h3>
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
                                <td>Sabbir Ahmed</td>
                                <td>302</td>
                                <td>Standard</td>
                                <td>
                                    <button class="action-btn checkout-btn"
                                        onclick="checkOut(1038, this)">Check Out</button>
                                </td>
                            </tr>
                            <tr>
                                <td>Mehedi Hasan</td>
                                <td>201</td>
                                <td>Deluxe</td>
                                <td>
                                    <button class="action-btn checkout-btn"
                                        onclick="checkOut(1036, this)">Check Out</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
                 <div class="form-box chart-box">
                <h3 class="form-box-title">Revenue — Last 8 Weeks</h3>
                <canvas id="revenueChart" height="100"></canvas>
            </div>

        </div>

        <div id="section-bookings" class="section hidden">

            <h2>All Bookings</h2>
            <p class="subtitle">Filter and manage all reservations</p>

            <!-- Filter Form -->
            <div class="form-box">
                <h3 class="form-box-title">Filter Bookings</h3>

                <form method="GET" action="">
                    <div class="three-col">
                        <div>
                            <label for="filter_status">Status</label>
                            <select id="filter_status" name="status">
                                <option value="">All Statuses</option>
                                <option value="Pending">Pending</option>
                                <option value="Confirmed">Confirmed</option>
                                <option value="Checked-In">Checked-In</option>
                                <option value="Checked-Out">Checked-Out</option>
                                <option value="Cancelled">Cancelled</option>
                            </select>
                        </div>
                        <div>
                            <label for="date_from">From Date</label>
                            <input type="date" id="date_from" name="date_from">
                        </div>
                        <div>
                            <label for="date_to">To Date</label>
                            <input type="date" id="date_to" name="date_to">
                        </div>
                    </div>
                    <button type="submit" class="filter-btn">Apply Filter</button>
                </form>
            </div>
              <div class="form-box table-box">
                <table class="data-table">
                    <thead>
                        <tr>
                            <th>Booking #</th>
                            <th>Guest</th>
                            <th>Room</th>
                            <th>Type</th>
                            <th>Check-in</th>
                            <th>Check-out</th>
                            <th>Total</th>
                            <th>Status</th>
                            <th>Detail</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1042</td>
                            <td>Reduanul Islam</td>
                            <td>101</td>
                            <td>Deluxe</td>
                            <td>Jun 20, 2025</td>
                            <td>Jun 23, 2025</td>
                            <td>৳ 19,500</td>
                            <td><span class="badge badge-confirmed">Confirmed</span></td>
                            <td><a href="booking_detail.php?id=1042" class="detail-link">View</a></td>
                        </tr>


                
