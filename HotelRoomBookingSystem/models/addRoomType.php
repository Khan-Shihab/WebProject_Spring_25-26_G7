<?php
function search_room($connection,$guest){

    $sql = "SELECT id,name,description,price_per_night,max_capacity,thumbnail_path,amenities FROM room_types WHERE max_capacity >= ?";

    $stmt = $connection->prepare($sql);

    if(!$stmt){
        return false;
    }

    $stmt->bind_param("i",$guest);

    $stmt->execute();

    $result = $stmt->get_result();

    $rooms = [];

    while($row = $result->fetch_assoc()){
        $rooms[] = $row;
    }

    return $rooms;
}
?>