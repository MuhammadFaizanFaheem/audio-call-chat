<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $room_name = $_POST['room_name'];
    // Generate a unique room code or ID, e.g., using random or UUID
    $room_code = uniqid();
    
    // Store the room details in a database or session
    // You should use a database for better persistence
    session_start();
    $_SESSION['rooms'][$room_code] = $room_name;
    
    // Redirect to the room with the code
    header("Location: room.php?code=$room_code");
}
?>
