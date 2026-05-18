<!DOCTYPE html>
<html>

<head>
    <title> Search Rooms </title>
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
                <a href="" class="nav-item active">Search Rooms</a>
                <a href="" class="nav-item">Bookings</a>
                <a href="" class="nav-item">Profile</a>
                <a href="" class="nav-item logout">Logout</a>
            </div>

        </div>



        <div class="main-content">

            <h1> Search The Available Rooms </h1>
            <p>Find your perfect and comfortable Room</p>

            <div class="form-box search-form-box">
                <div class="form-box-title">Room Search</div>

                <form>
                    <div class="search-row">

                        <div class="search-field">
                            <label for="checkIn">Check-in Date</label>
                            <input type="date" id="checkIn" name="checkIn">
                            <br><br>
                        </div>

                        <div class="search-field">
                            <label for="checkOut">Check-out Date</label>
                            <input type="date" id="checkOut" name="checkOut">
                            <br><br>
                        </div>

                        <div class="search-field">
                            <label for="guests">Number of Guests</label>
                            <select id="guests" name="guests">
                                <option value="">select</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                            
                            </select>
                            <br><br>
                        </div>

                        <div class="search-field search-btn-field">
                            <input type="submit" value="Search Rooms">
                        </div>
                    </div>
                </form>

            </div>



            <div class="results-label">Available Rooms</div>

            <div class="room-cards">

                <div class="room-card">

                    <div class="room-card-top">
                        <div class="room-type-name">Standard Room</div>
                        <div class="room-price">Tk 3000 <span>/ night</span></div>
                    </div>

                    <div class="room-desc">A comfortable room with all basic needs</div>
                    <div class="amenity-tags">
                        <div class="tag">WiFi</div>
                        <div class="tag">AC</div>
                        <div class="tag">TV</div>
                    </div>

                    <div class="room-card-footer">

                        <div class="total-price">
                            Total starts from Tk 3000
                        </div>
                        <a href="" class="book-btn">Book Now</a>
                    </div>
                </div>






                <div class="room-card">

                    <div class="room-card-top">
                        <div class="room-type-name">Deluxe Room</div>
                        <div class="room-price">
                            Tk 6000 <span>/ night</span>
                        </div>
                    </div>

                    <div class="room-desc">Deluxe room with premium furnishings and city view</div>
                    <div class="amenity-tags">
                        <div class="tag">WiFi</div>
                        <div class="tag">City View</div>
                        <div class="tag">Mini Bar</div>
                    </div>

                    <div class="room-card-footer">

                        <div class="total-price">
                            Total starts from Tk 6000
                        </div>
                        <a href="">Book Now</a>
                    </div>

                </div>




                <div class="room-card">

                    <div class="room-card-top">
                        <div class="room-type-name">Suite Room</div>
                        <div class="room-price">
                            Tk 10000 <span>/ night</span>
                    </div>
                </div>

                <div class="room-desc">Luxury suite room with bathtub and exclusive comforts</div>
                <div class="amenity-tags">
                    <div class="tag">Bathtub</div>
                    <div class="tag">Luxury</div>
                    <div class="tag">Breakfast</div>
                </div>
                <div class="room-card-footer">

                    <div class="total-price">
                        Total starts from Tk 10000
                    </div>
                    <a href="">Book Now</a>

                </div>

            </div>

        </div>

    </div>

    </div>




</body>

</html>