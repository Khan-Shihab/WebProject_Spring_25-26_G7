<?php
include "../controllers/loginController.php";
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>My Profile — Hotel Booking</title>
    <link rel="stylesheet" href="../assets/user.css">
</head>
<body>

<div class="page-wrapper">

<div class="sidebar">

<p class="panel-brand">***** GRAND PALACE</p>

<h3 class="panel-heading">Guest<br>Portal</h3>

<nav class="sidebar-nav">

<a href="user.php" class="nav-item active">My Profile</a>

<a href="../bookings/my-bookings.php" class="nav-item">My Bookings</a>

<a href="../rooms/search.php" class="nav-item">Search Rooms</a>

<a href="../../controllers/logoutController.php" class="nav-item logout">Logout</a>

</nav>

</div>

<div class="main-content">

<h2>My Profile</h2>

<p class="subtitle">Manage your account and preferences</p>

<div class="booking-card">

<div class="booking-card-inner">

<div class="booking-left">

<p class="booking-label">Upcoming Stay</p>

<p class="booking-room">Room Type</p>

<p class="booking-dates">Check-in → Check-out</p>

</div>

<div class="booking-right">

<span class="status-badge">Status</span>

<p class="booking-id">Booking #0000</p>

</div>

</div>

</div>

<div class="form-grid">

<div class="form-box">

<h3 class="form-box-title">Edit Profile</h3>

<form method="POST" action="../controllers/profileController.php">

<label for="name">Full Name</label>
<input type="text" id="name" name="name" value="<?= $_SESSION['name']; ?>">
<span class="error-message" id="nameError"></span>

<label for="email">Email Address</label>
<input type="email" id="email" name="email" value="<?= $_SESSION['email']; ?>">
<span class="error-message" id="emailError"></span>

<label for="phone">Phone Number</label>
<input type="tel" id="phone" name="phone" value="<?= $_SESSION['phone']; ?>">
<span class="error-message" id="phoneError"></span>

<label for="nationality">Nationality</label>

<select id="nationality" name="nationality">

<option value="Bangladeshi" <?= ($_SESSION['nationality'] == 'Bangladeshi') ? 'selected' : ''; ?>>Bangladeshi</option>

<option value="Indian" <?= ($_SESSION['nationality'] == 'Indian') ? 'selected' : ''; ?>>Indian</option>

<option value="Pakistani" <?= ($_SESSION['nationality'] == 'Pakistani') ? 'selected' : ''; ?>>Pakistani</option>

<option value="American" <?= ($_SESSION['nationality'] == 'American') ? 'selected' : ''; ?>>American</option>

<option value="British" <?= ($_SESSION['nationality'] == 'British') ? 'selected' : ''; ?>>British</option>

<option value="Canadian" <?= ($_SESSION['nationality'] == 'Canadian') ? 'selected' : ''; ?>>Canadian</option>

<option value="Australian" <?= ($_SESSION['nationality'] == 'Australian') ? 'selected' : ''; ?>>Australian</option>

<option value="Other" <?= ($_SESSION['nationality'] == 'Other') ? 'selected' : ''; ?>>Other</option>

</select>

<button type="submit" name="update_profile">Save Changes</button>

</form>

</div>

<div class="form-box">

<h3 class="form-box-title">Preferences</h3>

<form method="POST" action="../controllers/preferenceController.php">

<label for="preferred_room_type_id">Preferred Room Type</label>

<select id="preferred_room_type_id" name="preferred_room_type_id">

<option value="">— Select room type —</option>

<option value="Deluxe">Deluxe</option>

<option value="Suite">Suite</option>

<option value="Standard">Standard</option>

</select>

<label for="special_requests">Special Requests</label>

<textarea id="special_requests" name="special_requests" placeholder="e.g. High floor, extra pillows, early check-in..." rows="5"></textarea>

<div class="checkbox-group">

<input type="checkbox" id="subscribe_offers" name="subscribe_offers" value="1">

<label for="subscribe_offers">Subscribe to offers & deals</label>

</div>

<button type="submit" name="update_preferences">Save Preferences</button>

</form>

</div>

</div>

</div>

</div>

</body>
</html>