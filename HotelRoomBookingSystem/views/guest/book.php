<<!DOCTYPE html>
<html>

    <head>
        <title>Booking Form</title>
    </head>


    <body>
        <form>
            <fielset>
                <h1> Book Room </h1>
                <label for="fullname">Full Name</label>
                <input type="text" name="fullname" id="fullname" required>
                <br><br>

                <label for="email">Email</label>
                <input type="email" name="email" id="email" required>
                <br><br>

                <label for="phone">Phone Number</label>
                <input type="tel" name="phone" id="phone" required>
                <br><br>

                <label for="total">Total</label>
                <input type="number" name="total" id="total" value="00">
                <br><br>

                <input type="submit" value="Confirm Booking">
        
            </fieldset>
        </form>


        <form>
            <h1> Booking Confirmed </h1>

            <table>
                <tr>
                    <td><label for="bid">Booking ID</label></td>
                    <td><input type="text" name="bid" id="bid" value="1234"></td>             
                </tr>

                <tr>
                    <td><label for="roomType">Room Type</label></td>
                    <td><input type="text" name="roomType" id="roomType" value="Deluxe"></td>
                </tr>

                <tr>
                    <td><label for="checkIn">Check-in</label></td>
                    <td><input type="date" name="checkIn" id="checkIn" value="16-5-2025"></td> 
                </tr>

                <tr>
                    <td><label for="checkOut">Check-out</label></td>
                    <td><input type="date" name="checkOut" id="checkOut" value="20-5-2025"></td>    
                </tr>

                <tr>
                    <td><label for="total">Total</label></td>
                    <td><input type="number" name="total" id="total" value="00"></td>
                </tr>
            </table>
        </form>



    </body>

</html>