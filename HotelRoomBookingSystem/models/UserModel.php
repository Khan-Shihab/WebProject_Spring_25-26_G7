<?php

function createUser($connection, $name, $email, $password, $phone, $nationality, $role) {
    $sql  = "INSERT INTO users (name, email, password_hash, phone, nationality, role) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $connection->prepare($sql);
    $stmt->bind_param("ssssss", $name, $email, $password, $phone, $nationality, $role);
    return $stmt->execute();
}


function emailExists($connection, $email, $excludeUserId = null) {
    if ($excludeUserId) {
        $sql  = "SELECT id FROM users WHERE email = ? AND id != ?";
        $stmt = $connection->prepare($sql);
        $stmt->bind_param("si", $email, $excludeUserId);
    } else {
        $sql  = "SELECT id FROM users WHERE email = ?";
        $stmt = $connection->prepare($sql);
        $stmt->bind_param("s", $email);
    }
    $stmt->execute();
    return $stmt->get_result()->num_rows > 0;
}

function loginUser($connection, $email) {
    $sql  = "SELECT id, name, email, phone, nationality, role, password_hash,
                    preferred_room_type_id, special_requests
             FROM users WHERE email = ?";
    $stmt = $connection->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();
    return ($result->num_rows === 1) ? $result->fetch_assoc() : false;
}


function saveRememberToken($connection, $userId, $token) {
    $sql  = "UPDATE users SET remember_token = ? WHERE id = ?";
    $stmt = $connection->prepare($sql);
    $stmt->bind_param("si", $token, $userId);
    return $stmt->execute();
}


function updateUserProfile($connection, $userId, $name, $email, $phone, $nationality) {
    $sql  = "UPDATE users SET name = ?, email = ?, phone = ?, nationality = ? WHERE id = ?";
    $stmt = $connection->prepare($sql);
    $stmt->bind_param("ssssi", $name, $email, $phone, $nationality, $userId);
    return $stmt->execute();
}

function updateUserPreferences($connection, $userId, $roomType, $specialRequests) {
    $sql  = "UPDATE users SET preferred_room_type_id = ?, special_requests = ? WHERE id = ?";
    $stmt = $connection->prepare($sql);
    $stmt->bind_param("isi", $roomType, $specialRequests, $userId);
    return $stmt->execute();
}
?>