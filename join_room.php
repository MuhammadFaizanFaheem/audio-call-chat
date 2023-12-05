<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $room_code = $_POST['room_code'];
    
    // Check if the room code exists in the database or session
    session_start();
    if (isset($_SESSION['rooms'][$room_code])) {
        $room_name = $_SESSION['rooms'][$room_code];
        // Redirect to the room
        header("Location: room.php?code=$room_code");
    } else {
        echo "Room not found. Please check the code.";
    }
}
?>
