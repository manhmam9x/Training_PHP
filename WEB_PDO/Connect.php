<?php
    $host = 'localhost';
    $dbname = 'hkm';
    $username = 'root';
    $password = '';

    $conn = mysqli_connect($host, $username, $password, $dbname);

    if (!$conn) {
        echo "Error: Unable to connect to MySQL." . PHP_EOL;
        echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
        echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
        exit;
    }

    mysqli_set_charset($conn, "utf8");