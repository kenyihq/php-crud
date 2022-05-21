<?php

session_start();

$conn = mysqli_connect(
    'localhost',
    'root',
    '',
    'php-crud',
    3307 // port
);

// if (isset($conn)) {
//     echo "Connected";
// }

?>