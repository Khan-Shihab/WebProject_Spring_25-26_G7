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
          <!-- ═══════════════════════════
             SECTION 1: DASHBOARD
        ════════════════════════════ -->
        <div id="section-dashboard" class="section">

            <h2>Dashboard</h2>
            <p class="subtitle">Today's overview</p>

            <!-- Summary Cards -->
            <div class="summary-grid">
                <div class="summary-card">
                    <p class="summary-label">Total Rooms</p>
                    <p class="summary-number">42</p>
                </div>
                <div class="summary-card">
                    <p class="summary-label">Occupied</p>
                    <p class="summary-number" style="color:#1a3a6b;">18</p>
                </div>
                <div class="summary-card">
                    <p class="summary-label">Available</p>
                    <p class="summary-number" style="color:#2e7d32;">20</p>
                </div>
                <div class="summary-card">
                    <p class="summary-label">Maintenance</p>
                    <p class="summary-number" style="color:#b71c1c;">4</p>
                </div>
            </div>

            <div class="two-col">

                <!-- Today's Arrivals -->
                <div class="form-box">
                    <h3 class="form-box-title">Today's Arrivals</h3>
                    <table class="admin-table">
                        <thead>
                            <tr>
                                <th>Guest</th>
                                <th>Room</th>
                                <th>Type</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- PHP loop: bookings WHERE checkin_date = today AND status = Confirmed -->
                            <tr>
                                <td>Reduanul Islam</td>
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
                        </tbody>
                    </table>
                </div>

                <!-- Today's Departures -->
                <div class="form-box">
                    <h3 class="form-box-title">Today's Departures</h3>
                    <table class="admin-table">
                        <thead>
                            <tr>
                                <th>Guest</th>
                                <th>Room</th>
                                <th>Type</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- PHP loop: bookings WHERE checkout_date = today AND status = Checked-In -->
                            <tr>
                                <td>Sabbir Ahmed</td>
                                <td>302</td>
                                <td>Standard</td>
                                <td>
                                    <button class="action-btn checkout-btn"
                                        onclick="checkOut(1038, this)">Check Out</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>

            <!-- Revenue Chart -->
            <div class="form-box" style="margin-top:20px;">
                <h3 class="form-box-title">Revenue — Last 8 Weeks</h3>
                <canvas id="revenueChart" height="100"></canvas>
            </div>

        </div><!-- end dashboard -->
        <!-- ═══════════════════════════
             SECTION 2: ROOM TYPES
        ════════════════════════════ -->
        <div id="section-room-types" class="section" style="display:none;">

            <h2>Room Types</h2>
            <p class="subtitle">Manage room categories</p>

            <!-- Add New Room Type Form -->
            <div class="form-box">
                <h3 class="form-box-title">Add New Room Type</h3>
                <form method="POST" action="../controllers/roomtypeController.php" enctype="multipart/form-data">

                    <div class="two-col">
                        <div>
                            <label>Name</label>
                            <select name="name">
                                <option value="">— Select —</option>
                                <option value="Standard">Standard</option>
                                <option value="Deluxe">Deluxe</option>
                                <option value="Suite">Suite</option>
                            </select>
                        </div>
                        <div>
                            <label>Price Per Night (৳)</label>
                            <input type="number" name="price_per_night" placeholder="5000" 
                            min="1">
                        </div>
                    </div>

                    <label>Max Capacity (guests)</label>
                    <input type="number" name="max_capacity" placeholder="2" min="1" max="10">

                    <label>Description</label>
                    <textarea name="description" rows="3" placeholder="Describe this room type..."></textarea>

                    <label>Thumbnail Image (JPEG/PNG, max 2MB)</label>
                    <input type="file" name="thumbnail" accept="image/jpeg,image/png" class="file-input">

                    <label>Amenities</label>
                    <div class="amenity-checkboxes">
                        <label class="check-label"><input type="checkbox" name="amenities[]" value="WiFi"> WiFi</label>
                        <label class="check-label"><input type="checkbox" name="amenities[]" value="AC"> AC</label>
                        <label class="check-label"><input type="checkbox" name="amenities[]" value="TV"> TV</label>
                        <label class="check-label"><input type="checkbox" name="amenities[]" value="Minibar"> Minibar</label>
                        <label class="check-label"><input type="checkbox" name="amenities[]" value="Safe"> Safe</label>
                        <label class="check-label"><input type="checkbox" name="amenities[]" value="Bathtub"> Bathtub</label>
                        <label class="check-label"><input type="checkbox" name="amenities[]" value="Balcony"> Balcony</label>
                    </div>

                    <button type="submit" name="add_room_type">Add Room Type</button>
                </form>
            </div>
            <!-- Room Types List -->
            <div class="form-box" style="padding:0; overflow:hidden;">
                <table class="admin-table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Price/Night</th>
                            <th>Capacity</th>
                            <th>Amenities</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- PHP loop from room_types table -->
                        <tr>
                            <td>Standard</td>
                            <td>৳ 3,500</td>
                            <td>2</td>
                            <td>
                                <span class="tag">WiFi</span>
                                <span class="tag">AC</span>
                                <span class="tag">TV</span>
                            </td>
                            <td>
                                <a href="#" class="edit-link">Edit</a>
                                <a href="#" class="delete-link">Delete</a>
                            </td>
                        </tr>
                        <tr>
