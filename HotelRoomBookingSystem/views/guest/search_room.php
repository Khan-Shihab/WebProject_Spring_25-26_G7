<!DOCTYPE html>
<html>

    <head>
        <title> Search Rooms  </title>
    </head>

    <body>
        <h1> Search The Available Rooms </h1>
        <p>Find your perfect and comfortable Room</p>

        <form>
            <label for="checkIn">Check-in Date</label>
            <input type="date" id="checkIn" name="checkIn">
            <br><br>

            <label for="checkOut">Check-out Date</label>
            <input type="date" id="checkOut" name="checkOut">
            <br><br>

            <label for="guests">Number of Guests</label>
            <select id="guests" name="guests">
                <option value="">select</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>   
m           </select>
            <br><br>

            <input type="submit" value="Search Rooms">
            </form>



        <h2>Available Rooms</h2>
        <div>

        <h4>Standard Room</h4>
        <p>Price: tk 3000 per night</p>
        <p>A comfortable room with all basic needs</p>
        <a href="">Book Now</a>

        
        <h4>Deluxe Room</h4>
        <p>Price: tk 6000 per night</p>
        <p>Deluxe room with premium furnishings and city view</p>
        <a href="">Book Now</a>


        <h4>Suite Room</h4>
        <p>Price: tk 10000 per night</p>
        <p>Luxury suite room with bathtub and exclusive comforts</p>
        <a href="">Book Now</a>

        </div>


        

    </body>
</html>