<?php


function getUpcomingBooking($connection, $userId){

    $sql = "SELECT b.*, r.room_number, rt.name AS room_type_name
            FROM bookings b
            JOIN rooms r ON r.id = b.room_id
            JOIN room_types rt ON rt.id = r.room_type_id
            WHERE b.user_id = ?
            AND b.checkin_date >= CURDATE()
            AND b.status != 'Cancelled'
            AND b.status != 'Checked-Out'
            ORDER BY b.checkin_date ASC
            LIMIT 1";

    $stmt = $connection->prepare($sql);
    $stmt->bind_param("i", $userId);
    $stmt->execute();

    return $stmt->get_result()->fetch_assoc();
}

function insertBooking($conn, $user_id, $room_id, $checkin, $checkout, $total){

    $query = "INSERT INTO bookings
    (user_id, room_id, checkin_date, checkout_date, total_price)
    VALUES
    ('$user_id', '$room_id', '$checkin', '$checkout', '$total')";

    return mysqli_query($conn, $query);
}
?>