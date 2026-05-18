<?php
session_start();
include "../../controllers/searchController.php";
?>

<!DOCTYPE html>
<html>

<head>
    <title>Search Rooms</title>
    <link rel="stylesheet" href="../../assets/search_room.css">
</head>

<body>

<div class="page-wrapper">

    <div class="sidebar">

        <div class="panel-brand">HOTEL SYSTEM</div>

        <div class="panel-heading">
            Search <br> Rooms
        </div>

        <div class="sidebar-nav">
            <a href="../user.php" class="nav-item active">My Profile</a>
            <a href="mybooking.php" class="nav-item">My Bookings</a>
            <a href="search_room.php" class="nav-item">Search Rooms</a>
            <a href="../controllers/logoutController.php" class="nav-item logout">Logout</a>
        </div>

    </div>

    <div class="main-content">

        <h1>Search The Available Rooms</h1>

        <p>Find your perfect and comfortable Room</p>

        <div class="form-box search-form-box">

            <div class="form-box-title">Room Search</div>

            <form method="POST">

                <div class="search-row">

                    <div class="search-field">
                        <label for="checkIn">Check-in Date</label>
                        <input type="date" id="checkIn" name="checkIn">
                    </div>

                    <div class="search-field">
                        <label for="checkOut">Check-out Date</label>
                        <input type="date" id="checkOut" name="checkOut">
                    </div>

                    <div class="search-field">

                        <label for="guests">Number of Guests</label>

                        <select id="guests" name="guests">
                            <option value="">Select</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                        </select>

                    </div>

                    <div class="search-field search-btn-field">
                        <input type="submit" value="Search Rooms">
                    </div>

                </div>

            </form>

        </div>



        <div class="results-label">Available Rooms</div>
        <form >
            <div class="room-cards">

            <?php
            if(isset($_SESSION["rooms"]) && count($_SESSION["rooms"]) > 0){

                foreach($_SESSION["rooms"] as $room){
            ?>



            <div class="room-card">

                <div class="room-card-top">

                    <div class="room-type-name"><?= $room["name"]; ?></div>

                    <div class="room-price">
                        Tk <?= $room["price_per_night"]; ?>
                        <span>/ night</span>
                    </div>

                </div>
            <a href="search_room.php" class="nav-item">Search Rooms</a>

                <div class="room-desc"><?= $room["description"]; ?></div>
                <div class="amenity-tags">

                    <?php
                    $amenities = explode(",", $room["amenities"]);

                    foreach($amenities as $amenity){
                    ?>

                    <div class="tag"><?= trim($amenity); ?></div>

                    <?php
                    }
                    ?>

                </div>

                <div class="room-card-footer">

                    <div class="total-price">
                        Total starts from Tk <?= $room["price_per_night"]; ?>
                    </div>

                   <button><a href="book.php" class="book-btn">Book Now</a></button> 

                </div>

            </div>

            <?php
                }
            }
            else{
            ?>

            <h3>No Rooms Available</h3>

            <?php
            }
            ?>
        </div>
        </form>
        
        

    </div>

</div>

</body>

</html>