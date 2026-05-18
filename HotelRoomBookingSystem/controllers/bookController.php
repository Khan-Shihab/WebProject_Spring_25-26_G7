<?php
session_start();

include "../models/db.php";
include "../models/BookingModel.php";

$database = new db();
$conn = $database->connection();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $user_id  = $_SESSION['user_id'];
    $room_id  = 1;

    $checkin  = trim($_POST['checkIn']);
    $checkout = trim($_POST['checkOut']);
    $total    = trim($_POST['total']);

    if (
        empty($user_id) ||
        empty($room_id) ||
        empty($checkin) ||
        empty($checkout) ||
        empty($total)
    ) {

        echo "All fields are required";
    }

    elseif ($total <= 0) {

        echo "Invalid total price";
    }

    elseif ($checkin >= $checkout) {

        echo "Checkout date must be greater than checkin date";
    }

    else {

        $result = insertBooking(
            $conn,
            $user_id,
            $room_id,
            $checkin,
            $checkout,
            $total
        );

        if ($result) {

            echo "Booking Successful";
        }
        else {

            echo "Booking Failed";
        }
    }
}
?>