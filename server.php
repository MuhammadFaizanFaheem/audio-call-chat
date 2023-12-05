<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = json_decode(file_get_contents('php://input'));
    if ($data->type === 'offer') {
        // Handle the offer and send it to the Python client
        // ...
        // Relay the answer from Python
        // ...
    } elseif ($data->type === 'answer') {
        // Handle the answer from the Python client and relay it to the other user
        // ...
    }
}
?>
